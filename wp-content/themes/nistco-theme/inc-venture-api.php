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
            r.transaction_ref,
            r.transaction_date,
            r.centre_slug,
            UPPER(r.centre_slug) AS centre_code,
            v.venture_code,
            v.title AS venture_title,
            v.partner_entity,
            r.gross_revenue,
            r.statutory_pool,
            r.inventor_cut AS inventor_allocation_40,
            r.centre_cut AS centre_allocation_35,
            r.nistco_cut AS institutional_reinvestment_25,
            r.distribution_status,
            r.disbursement_date
        FROM {$ledger_table} r
        LEFT JOIN {$ventures_table} v ON r.venture_id = v.id
        ORDER BY r.transaction_date DESC
    ";

    $records = $wpdb->get_results( $sql, ARRAY_A );

    // Format output as a normalized array suitable for Google Apps Script & Looker Studio
    $feed = [];
    foreach ( $records as $row ) {
        $feed[] = [
            'Reference'       => $row['transaction_ref'],
            'Date'            => $row['transaction_date'],
            'Centre'          => $row['centre_code'],
            'Venture Code'    => $row['venture_code'],
            'Venture Title'   => $row['venture_title'],
            'Partner Entity'  => $row['partner_entity'],
            'Gross NGN'       => (float) $row['gross_revenue'],
            'Statutory Pool'  => (float) $row['statutory_pool'],
            'Inventor 40%'    => (float) $row['inventor_allocation_40'],
            'Centre 35%'      => (float) $row['centre_allocation_35'],
            'NASTCO 25%'      => (float) $row['institutional_reinvestment_25'],
            'Status'          => ucfirst( $row['distribution_status'] ),
            'Disbursed Date'  => $row['disbursement_date'] ?: 'Pending',
        ];
    }

    return new WP_REST_Response( [
        'generated_at'   => current_time( 'mysql' ),
        'total_records'  => count( $feed ),
        'schema_version' => '1.2.0',
        'data'           => $feed
    ], 200 );
}
