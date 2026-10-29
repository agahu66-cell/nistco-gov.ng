<?php
/**
 * NASTCO Sovereign Portal — Executive Dispatch REST API & Termii SMS Gateway
 * Endpoint: POST /wp-json/nastco/v1/dispatch
 */
defined( 'ABSPATH' ) || exit;

add_action( 'rest_api_init', function () {
    register_rest_route( 'nastco/v1', '/dispatch', array(
        'methods'             => 'POST',
        'callback'            => 'nastco_handle_executive_dispatch',
        'permission_callback' => '__return_true',
    ));
});

function nastco_handle_executive_dispatch( WP_REST_Request $request ) {
    $params       = $request->get_json_params();
    $sender_name  = sanitize_text_field( $params['sender_name'] ?? 'Anonymous Off-Taker' );
    $organization = sanitize_text_field( $params['organization'] ?? 'Unspecified Entity' );
    $email        = sanitize_email( $params['email'] ?? '' );
    $phone        = sanitize_text_field( $params['phone'] ?? '' );
    $directorate  = strtoupper( sanitize_text_field( $params['directorate'] ?? 'INNOVATION' ) );
    $message      = sanitize_textarea_field( $params['message'] ?? '' );

    if ( empty( $sender_name ) || empty( $message ) ) {
        return new WP_REST_Response( array(
            'success' => false,
            'code'    => 'missing_fields',
            'message' => 'Sender name and dispatch message are required.'
        ), 400 );
    }

    // Generate Sovereign Telemetry Reference ID
    $dispatch_id = 'NASTCO-DISP-' . gmdate( 'Ymd' ) . '-' . strtoupper( wp_generate_password( 5, false ) );

    // Store in WordPress Options Ledger (lightweight zero-migration audit trail)
    $ledger = get_option( 'nastco_dispatch_ledger', array() );
    $entry  = array(
        'dispatch_id'  => $dispatch_id,
        'timestamp'    => current_time( 'mysql' ),
        'sender_name'  => $sender_name,
        'organization' => $organization,
        'email'        => $email,
        'phone'        => $phone,
        'directorate'  => $directorate,
        'message'      => $message,
    );
    array_unshift( $ledger, $entry );
    update_option( 'nastco_dispatch_ledger', array_slice( $ledger, 0, 100 ), false );

    // Termii SMS Gateway Simulation / Dispatch Readiness
    $termii_api_key = defined( 'NASTCO_TERMII_API_KEY' ) ? NASTCO_TERMII_API_KEY : '';
    $sms_status     = 'SIMULATED_LOCAL_SANDBOX (Set NASTCO_TERMII_API_KEY in wp-config.php for live SMS)';

    if ( ! empty( $termii_api_key ) && ! empty( $phone ) ) {
        $termii_payload = array(
            'to'      => $phone,
            'from'    => 'NASTCO',
            'sms'     => "NASTCO Telemetry [{$dispatch_id}]: Your dispatch to {$directorate} has been logged.",
            'type'    => 'plain',
            'channel' => 'generic',
            'api_key' => $termii_api_key,
        );
        $response = wp_remote_post( 'https://api.ng.termii.com/api/sms/send', array(
            'headers' => array( 'Content-Type' => 'application/json' ),
            'body'    => wp_json_encode( $termii_payload ),
            'timeout' => 8,
        ));
        $sms_status = is_wp_error( $response ) ? 'TERMII_ERROR: ' . $response->get_error_message() : 'DISPATCHED_LIVE';
    }

    return new WP_REST_Response( array(
        'success'     => true,
        'dispatch_id' => $dispatch_id,
        'status'      => 'LOGGED_AND_ROUTED',
        'routed_to'   => $directorate . ' Directorate Queue',
        'termii_sms'  => $sms_status,
        'timestamp'   => current_time( 'mysql' ),
        'message'     => "Official Dispatch [{$dispatch_id}] logged in NASTCO Sovereign Ledger and routed to {$directorate}.",
        'payload_ack' => array(
            'sender'       => $sender_name,
            'organization' => $organization,
            'email'        => $email,
            'phone'        => $phone,
        )
    ), 200 );
}
