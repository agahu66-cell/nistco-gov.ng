<?php
/**
 * NASTCO Sovereign Portal — LiveLedger REST API Bridge for Looker Studio
 * Endpoint: /wp-json/nastco/v1/ledger-sync
 */
defined( 'ABSPATH' ) || exit;

add_action( 'rest_api_init', function () {
    register_rest_route( 'nastco/v1', '/ledger-sync', array(
        array(
            'methods'             => WP_REST_SERVER::READABLE,
            'callback'            => 'nastco_get_ledger_telemetry',
            'permission_callback' => '__return_true', // Public read for Looker / Apps Script
        ),
        array(
            'methods'             => WP_REST_SERVER::CREATABLE,
            'callback'            => 'nastco_receive_ledger_webhook',
            'permission_callback' => 'nastco_verify_ledger_token',
        ),
    ) );
} );

/**
 * GET: Export current financial telemetry & 40/35/25 split totals
 */
function nastco_get_ledger_telemetry( WP_REST_Request $request ) {
    // Fetch stored transactions or simulated aggregate metrics
    $totals = get_option( 'nastco_ledger_totals', array(
        'gross_ytd' => 485000000.00, // ₦485M
        'currency'  => 'NGN',
        'split'     => array(
            'researchers_40' => 194000000.00,
            'centre_35'      => 169750000.00,
            'nastco_25'      => 121250000.00,
        ),
        'centres'   => array(
            'amsarc' => 96500000.00,
            'barc'   => 112000000.00,
            'carc'   => 78500000.00,
            'parc'   => 64000000.00,
            'aepc'   => 84000000.00,
            'ntc'    => 50000000.00,
        ),
        'timestamp' => current_time( 'mysql' ),
        'status'    => 'GATE 2 SENTINEL VERIFIED',
    ) );

    return rest_ensure_response( array(
        'success'   => true,
        'portal'    => 'NASTCO Sovereign Portal',
        'telemetry' => $totals,
    ) );
}

/**
 * POST: Receive real-time row update from Google Apps Script LiveLedger
 */
function nastco_receive_ledger_webhook( WP_REST_Request $request ) {
    $params = $request->get_json_params();

    if ( empty( $params ) ) {
        return new WP_Error( 'invalid_payload', 'No transaction payload received', array( 'status' => 400 ) );
    }

    // Save incoming ledger entry
    $ledger_log = get_option( 'nastco_incoming_ledger_logs', array() );
    array_unshift( $ledger_log, array(
        'centre'      => sanitize_text_field( $params['centre'] ?? 'GENERAL' ),
        'amount'      => floatval( $params['amount'] ?? 0 ),
        'description' => sanitize_text_field( $params['description'] ?? '' ),
        'timestamp'   => current_time( 'mysql' ),
    ) );

    // Keep only last 100 entries
    if ( count( $ledger_log ) > 100 ) {
        array_pop( $ledger_log );
    }
    update_option( 'nastco_incoming_ledger_logs', $ledger_log );

    return rest_ensure_response( array(
        'success' => true,
        'message' => 'LiveLedger webhook transaction recorded successfully',
        'total_logged' => count( $ledger_log ),
    ) );
}

/**
 * Security verification for incoming Google Apps Script webhook
 */
function nastco_verify_ledger_token( WP_REST_Request $request ) {
    $auth_header = $request->get_header( 'authorization' );
    $secret_token = defined( 'NASTCO_LEDGER_SECRET' ) ? NASTCO_LEDGER_SECRET : get_option( 'nastco_ledger_secret', 'nastco_secure_token_2026' );

    if ( ! $auth_header || strpos( $auth_header, 'Bearer ' ) !== 0 ) {
        return false;
    }

    $token = str_replace( 'Bearer ', '', $auth_header );
    return hash_equals( $secret_token, $token );
}
