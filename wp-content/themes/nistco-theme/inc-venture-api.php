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
