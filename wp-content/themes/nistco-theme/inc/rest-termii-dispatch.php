<?php
/**
 * NASTCO Termii SMS / WhatsApp Telemetry REST API Endpoint
 * Location: inc/rest-termii-dispatch.php
 */
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'nastco_handle_form_dispatch' ) ) {
    add_action( 'rest_api_init', function () {
        register_rest_route( 'nastco/v1', '/dispatch', array(
            'methods'             => 'POST',
            'callback'            => 'nastco_handle_form_dispatch',
            'permission_callback' => '__return_true',
        ));
    });

    function nastco_handle_form_dispatch( $request ) {
        $params  = $request->get_json_params();
        $name    = sanitize_text_field( $params['name'] ?? '' );
        $email   = sanitize_email( $params['email'] ?? '' );
        $phone   = sanitize_text_field( $params['phone'] ?? '' );
        $subject = sanitize_text_field( $params['subject'] ?? '' );
        $message = sanitize_textarea_field( $params['message'] ?? '' );

        if ( empty( $name ) || empty( $phone ) || empty( $message ) ) {
            return new WP_REST_Response( array( 'success' => false, 'message' => 'Required fields missing.' ), 400 );
        }

        $sms_message = sprintf(
            '[NASTCO DISPATCH] From: %s (%s). Subject: %s. Msg: %s',
            $name, $phone, $subject, substr( $message, 0, 120 )
        );

        $termii_api_key  = defined( 'TERMII_API_KEY' ) ? TERMII_API_KEY : 'YOUR_TERMII_API_KEY';
        $sender_id       = defined( 'TERMII_SENDER_ID' ) ? TERMII_SENDER_ID : 'NASTCO';
        $executive_phone = '2348000000000';

        $payload = array(
            'api_key' => $termii_api_key,
            'to'      => $executive_phone,
            'from'    => $sender_id,
            'sms'     => $sms_message,
            'type'    => 'plain',
            'channel' => 'generic',
        );

        $response = wp_remote_post( 'https://v3.api.termii.com/api/sms/send', array(
            'body'    => wp_json_encode( $payload ),
            'headers' => array( 'Content-Type' => 'application/json' ),
            'timeout' => 15,
        ));

        if ( is_wp_error( $response ) ) {
            return new WP_REST_Response( array( 'success' => false, 'message' => 'Telemetry gateway timeout.' ), 500 );
        }

        $body = json_decode( wp_remote_retrieve_body( $response ), true );

        return new WP_REST_Response( array(
            'success' => true,
            'message' => 'Secure transmission dispatched via Termii.',
            'data'    => $body
        ), 200 );
    }
}
