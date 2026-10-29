<?php
/**
 * NASTCO Termii SMS Dispatcher
 * Intercepts the Secure Contact Node payload and routes it via Termii SMS.
 */

add_action( 'admin_post_nopriv_submit_nastco_uplink', 'nastco_handle_termii_dispatch' );
add_action( 'admin_post_submit_nastco_uplink', 'nastco_handle_termii_dispatch' );

function nastco_handle_termii_dispatch() {
    // 1. Sanitize Incoming Payload Data
    $name        = sanitize_text_field( $_POST['contact_name'] ?? 'Unknown' );
    $affiliation = sanitize_text_field( $_POST['affiliation'] ?? 'Unknown' );
    $phone       = sanitize_text_field( $_POST['contact_phone'] ?? 'No Phone' );
    $code        = sanitize_text_field( $_POST['subject_code'] ?? 'N/A' );
    $directorate = sanitize_text_field( $_POST['directorate'] ?? 'General' );
    
    // Extract a snippet of the message to save SMS page costs
    $message_raw = sanitize_textarea_field( $_POST['message_payload'] ?? '' );
    $message_cut = mb_strlen($message_raw) > 60 ? mb_substr($message_raw, 0, 60) . '...' : $message_raw;

    // 2. Format the Tactical SMS Alert
    $sms_body  = "NASTCO UPLINK\n";
    $sms_body .= "Op: {$name} ({$affiliation})\n";
    $sms_body .= "Line: {$phone}\n";
    $sms_body .= "Code: {$code} [{$directorate}]\n";
    $sms_body .= "Msg: {$message_cut}";

    // 3. Securely Fetch API Credentials (Do not hardcode keys here)
    $api_key    = defined('TERMII_API_KEY') ? TERMII_API_KEY : 'YOUR_LIVE_API_KEY';
    $dest_phone = defined('NOTAP_DESK_PHONE') ? NOTAP_DESK_PHONE : '2348000000000'; 
    $sender_id  = 'NASTCO'; // Sender ID must be approved in your Termii dashboard

    // 4. Construct Termii JSON Request
    $payload = array(
        'to'      => $dest_phone,
        'from'    => $sender_id,
        'sms'     => $sms_body,
        'type'    => 'plain',
        'channel' => 'generic', 
        'api_key' => $api_key,
    );

    // 5. Transmit Payload via wp_remote_post (Non-blocking HTTP request)
    $response = wp_remote_post( 'https://api.ng.termii.com/api/sms/send', array(
        'method'      => 'POST',
        'timeout'     => 15,
        'headers'     => array( 'Content-Type' => 'application/json' ),
        'body'        => wp_json_encode( $payload ),
        'data_format' => 'body',
    ));

    // 6. Route Operative back to the Terminal with Status Codes
    $redirect_url = home_url( '/contact/' );
    
    if ( is_wp_error( $response ) ) {
        wp_safe_redirect( add_query_arg( 'uplink', 'failed', $redirect_url ) );
    } else {
        $body = wp_remote_retrieve_body( $response );
        $data = json_decode( $body );
        
        // Check if Termii successfully generated a message_id
        if ( isset( $data->message_id ) ) {
            wp_safe_redirect( add_query_arg( 'uplink', 'secured', $redirect_url ) );
        } else {
            wp_safe_redirect( add_query_arg( 'uplink', 'failed', $redirect_url ) );
        }
    }
    exit;
}
