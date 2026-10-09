<?php
/**
 * NISTCO REST API Telemetry Endpoint for Looker Studio & Google Sheets
 */

function nistco_register_telemetry_endpoint() {
    register_rest_route( 'nistco/v1', '/telemetry', array(
        'methods'             => 'GET',
        'callback'            => 'nistco_get_telemetry_data',
        'permission_callback' => '__return_true',
    ) );
}
add_action( 'rest_api_init', 'nistco_register_telemetry_endpoint' );

function nistco_get_telemetry_data( $request ) {
    $token = $request->get_param( 'token' );
    $expected_token = 'nistco_secure_telemetry_2026';

    if ( empty( $token ) || $token !== $expected_token ) {
        return new WP_Error( 'rest_forbidden', 'Invalid or missing telemetry security token.', array( 'status' => 401 ) );
    }

    global $wpdb;
    $table_name = $wpdb->prefix . 'nistco_commercial_inventory';
    
    // Query inventory joined with posts table for titles
    $query = "SELECT i.*, p.post_title, p.post_date 
              FROM {$table_name} i 
              LEFT JOIN {$wpdb->posts} p ON i.post_id = p.ID 
              ORDER BY i.id DESC";
    
    $results = $wpdb->get_results( $query, ARRAY_A );

    $telemetry = array();
    if ( $results ) {
        foreach ( $results as $row ) {
            $post_id = intval( $row['post_id'] );
            $telemetry[] = array(
                'id'             => intval( $row['id'] ),
                'post_id'        => $post_id,
                'title'          => sanitize_text_field( $row['post_title'] ?? 'Untitled Venture' ),
                'sku'            => sanitize_text_field( $row['sku'] ),
                'centre_code'    => sanitize_text_field( $row['centre_code'] ),
                'unit_price'     => floatval( $row['unit_price'] ),
                'royalty_rate'   => floatval( $row['royalty_rate'] ),
                'stock_quantity' => intval( $row['stock_quantity'] ),
                'status'         => sanitize_text_field( $row['status'] ),
                'notap_ref'      => get_post_meta( $post_id, '_nistco_notap_ref', true ),
                'trl_level'      => get_post_meta( $post_id, '_nistco_trl_level', true ),
                'created_at'     => $row['created_at'],
            );
        }
    }

    return rest_ensure_response( array(
        'status'      => 'success',
        'timestamp'   => current_time( 'mysql' ),
        'total_items' => count( $telemetry ),
        'data'        => $telemetry,
    ) );
}
