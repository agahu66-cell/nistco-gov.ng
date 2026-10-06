<?php
/**
 * NISTCO Commercial Ventures & Inventory Engine
 * 
 * Registers custom post types, taxonomies, and custom MariaDB database tables
 * for tracking research commercialization metrics and statutory royalties.
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * 1. Register Custom Post Type: NISTCO Ventures
 */
function nistco_register_venture_cpt() {
     = array(
        'name'                  => 'Commercial Ventures',
        'singular_name'         => 'Commercial Venture',
        'menu_name'             => 'Commercial Ventures',
        'add_new'               => 'Add New Venture',
        'add_new_item'          => 'Add New Commercial Venture',
        'edit_item'             => 'Edit Commercial Venture',
        'new_item'              => 'New Commercial Venture',
        'view_item'             => 'View Venture',
        'search_items'          => 'Search Commercial Ventures',
        'not_found'             => 'No ventures found',
        'not_found_in_trash'    => 'No ventures found in trash',
    );

     = array(
        'labels'              => ,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-store',
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'        => true,
        'rewrite'             => array( 'slug' => 'commercial-ventures' ),
    );

    register_post_type( 'nistco_venture',  );

    // Register Research Centre Taxonomy for Ventures
    register_taxonomy( 'research_centre', 'nistco_venture', array(
        'label'             => 'Research Centre',
        'hierarchical'      => true,
        'show_ui'           => true,
        'show_in_rest'      => true,
        'query_var'         => true,
    ) );
}
add_action( 'init', 'nistco_register_venture_cpt' );

/**
 * 2. Create Custom MariaDB Inventory & Royalty Table
 */
function nistco_create_inventory_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'nistco_commercial_inventory';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
        post_id BIGINT(20) UNSIGNED NOT NULL,
        sku VARCHAR(64) NOT NULL,
        unit_price DECIMAL(12,2) NOT NULL DEFAULT 0.00,
        royalty_rate DECIMAL(5,2) NOT NULL DEFAULT 10.00,
        stock_quantity INT(11) NOT NULL DEFAULT 0,
        centre_code VARCHAR(16) NOT NULL,
        status VARCHAR(32) NOT NULL DEFAULT 'active',
        created_at DATETIME DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id),
        UNIQUE KEY sku (sku),
        KEY post_id (post_id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
add_action( 'after_switch_theme', 'nistco_create_inventory_table' );
add_action( 'init', function() {
    if ( ! get_option( 'nistco_inventory_table_created' ) ) {
        nistco_create_inventory_table();
        update_option( 'nistco_inventory_table_created', true );
    }
});
