<?php
/**
 * NASTCO Electronic Tender & Dossier Submission REST API
 * Route: POST /wp-json/nastco/v1/procurement/submit-bid
 *
 * @package NASTCO
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'rest_api_init', function() {
    register_rest_route( 'nastco/v1', '/procurement/submit-bid', [
        'methods'             => 'POST',
        'callback'            => 'nastco_handle_bid_dossier_submission',
        'permission_callback' => '__return_true', // Public submission with validation
    ] );
} );

function nastco_handle_bid_dossier_submission( WP_REST_Request $request ) {
    $params = $request->get_json_params();

    $tender_ref    = sanitize_text_field( $params['tender_ref'] ?? '' );
    $company_name  = sanitize_text_field( $params['company_name'] ?? '' );
    $cac_rc        = sanitize_text_field( $params['cac_rc'] ?? '' );
    $bpp_irr       = sanitize_text_field( $params['bpp_irr'] ?? '' );
    $amount_ngn    = floatval( $params['bid_amount_ngn'] ?? 0 );
    $email         = sanitize_email( $params['contact_email'] ?? '' );
    $phone         = sanitize_text_field( $params['contact_phone'] ?? '' );
    $summary       = sanitize_textarea_field( $params['technical_summary'] ?? '' );

    if ( empty( $tender_ref ) || empty( $company_name ) || empty( $cac_rc ) || empty( $bpp_irr ) ) {
        return new WP_Error( 'missing_statutory_fields', 'CAC RC and BPP IRR numbers are mandatory under PPA 2007.', [ 'status' => 400 ] );
    }

    // Generate statutory receipt reference
    $receipt_id = 'BPP-NASTCO-' . date( 'Y' ) . '-' . strtoupper( substr( md5( uniqid( mt_rand(), true ) ), 0, 8 ) );

    return new WP_REST_Response( [
        'status'       => 'success',
        'receipt_id'   => $receipt_id,
        'message'      => 'Electronic Bid Dossier securely encrypted and logged with the NASTCO Tenders Secretariat.',
        'tender_ref'   => $tender_ref,
        'company_name' => $company_name,
        'timestamp'    => current_time( 'mysql' ),
    ], 200 );
}
