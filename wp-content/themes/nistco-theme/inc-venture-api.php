<?php
/**
 * NISTCO Commercial Ventures & Statutory Royalty REST API
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'rest_api_init', function() {
    register_rest_route( 'nistco/v1', '/ventures', [
        'methods'             => 'GET',
        'callback'            => 'nistco_rest_get_ventures',
        'permission_callback' => '__return_true',
    ] );

    register_rest_route( 'nistco/v1', '/royalties/stats', [
        'methods'             => 'GET',
        'callback'            => 'nistco_rest_get_royalty_stats',
        'permission_callback' => '__return_true',
    ] );
} );

function nistco_rest_get_ventures( WP_REST_Request $request ) {
    require_once get_template_directory() . '/inc-venture-db.php';
    
    $params = [
        'centre_slug'  => $request->get_param( 'centre_slug' ),
        'status'       => $request->get_param( 'status' ),
        'venture_type' => $request->get_param( 'venture_type' ),
        'limit'        => $request->get_param( 'limit' ) ? absint( $request->get_param( 'limit' ) ) : 50,
    ];

    $ventures = NISTCO_Ventures_Repository::get_ventures( array_filter( $params ) );
    $summary  = NISTCO_Ventures_Repository::get_portfolio_summary();

    return rest_ensure_response( [
        'summary'  => $summary,
        'ventures' => $ventures,
    ] );
}

function nistco_rest_get_royalty_stats() {
    require_once get_template_directory() . '/inc-venture-db.php';

    $summary = NISTCO_Royalties_Repository::get_centre_royalty_summary();

    return rest_ensure_response( [
        'statutory_framework' => 'NOTAP / Federal STI Commercialization Mandate',
        'statutory_split'     => [
            'inventor_teams'   => '40%',
            'centre_labs'      => '35%',
            'nistco_reinvest'  => '25%'
        ],
        'centres'             => $summary,
    ] );
}

/**
 * Token-Secured Looker Studio & Google Sheets Royalty Audit Feed
 * Route: GET /wp-json/nistco/v1/royalties/export?audit_key=NASTCO_AUDIT_2026_SECURE
 */
add_action( 'rest_api_init', function() {
    register_rest_route( 'nistco/v1', '/royalties/export', [
        'methods'             => 'GET',
        'callback'            => 'nastco_rest_export_royalties_looker',
        'permission_callback' => 'nastco_verify_audit_token',
    ] );
} );

function nastco_verify_audit_token( WP_REST_Request $request ) {
    $provided_key = $request->get_param( 'audit_key' );
    $valid_key    = defined( 'NASTCO_AUDIT_SECRET' ) ? NASTCO_AUDIT_SECRET : 'NASTCO_AUDIT_2026_SECURE';
    return hash_equals( $valid_key, (string) $provided_key );
}

function nastco_rest_export_royalties_looker( WP_REST_Request $request ) {
    global $wpdb;
    $ledger_table   = $wpdb->prefix . 'nistco_royalties';
    $ventures_table = $wpdb->prefix . 'nistco_ventures';

    $sql = "
        SELECT
            r.id,
            r.centre_slug,
            UPPER(r.centre_slug) AS centre_code,
            v.venture_code,
            v.title AS venture_title,
            v.partner_entity,
            r.gross_receipt,
            r.statutory_royalty_amount,
            r.inventor_share AS inventor_allocation_40,
            r.centre_share AS centre_allocation_35,
            r.nistco_institutional_share AS institutional_reinvestment_25,
            r.settlement_status
        FROM {$ledger_table} r
        LEFT JOIN {$ventures_table} v ON r.venture_id = v.id
        ORDER BY r.id DESC
    ";

    $records = $wpdb->get_results( $sql, ARRAY_A );

    $feed = [];
    foreach ( (array) $records as $row ) {
        $feed[] = [
            'Reference'       => 'ROY-' . str_pad( $row['id'], 5, '0', STR_PAD_LEFT ),
            'Centre'          => $row['centre_code'],
            'Venture Code'    => $row['venture_code'] ?? 'N/A',
            'Venture Title'   => $row['venture_title'] ?? 'Direct Centre Royalty',
            'Partner Entity'  => $row['partner_entity'] ?? 'Institutional',
            'Gross NGN'       => (float) $row['gross_receipt'],
            'Statutory Pool'  => (float) $row['statutory_royalty_amount'],
            'Inventor 40%'    => (float) $row['inventor_allocation_40'],
            'Centre 35%'      => (float) $row['centre_allocation_35'],
            'NASTCO 25%'      => (float) $row['institutional_reinvestment_25'],
            'Status'          => ucfirst( $row['settlement_status'] ),
        ];
    }

    return new WP_REST_Response( [
        'generated_at'   => current_time( 'mysql' ),
        'total_records'  => count( $feed ),
        'schema_version' => '1.2.0',
        'data'           => $feed,
    ], 200 );
}