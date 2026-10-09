<?php
/**
 * NISTCO Commercial Ventures & Inventory Management CPT
 */

// 1. Register Custom Post Type: nistco_venture
function nistco_register_venture_cpt() {
    $labels = array(
        'name'                  => 'Commercial Ventures',
        'singular_name'         => 'Commercial Venture',
        'menu_name'             => 'Commercial Ventures',
        'add_new'               => 'Add New Venture',
        'add_new_item'          => 'Add New Commercial Venture',
        'edit_item'             => 'Edit Venture',
        'new_item'              => 'New Venture',
        'view_item'             => 'View Venture',
        'search_items'          => 'Search Commercial Ventures',
        'not_found'             => 'No ventures found',
        'not_found_in_trash'    => 'No ventures found in Trash',
        'all_items'             => 'All Ventures',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-store',
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'        => true,
    );

    register_post_type( 'nistco_venture', $args );
}
add_action( 'init', 'nistco_register_venture_cpt' );

// 2. Create Custom MariaDB Inventory Table
function nistco_create_inventory_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'nistco_commercial_inventory';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        post_id bigint(20) NOT NULL,
        sku varchar(100) NOT NULL,
        unit_price decimal(12,2) NOT NULL DEFAULT '0.00',
        royalty_rate decimal(5,2) NOT NULL DEFAULT '5.00',
        stock_quantity int(11) NOT NULL DEFAULT '0',
        centre_code varchar(50) NOT NULL,
        status varchar(50) NOT NULL DEFAULT 'Active',
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id),
        UNIQUE KEY post_id (post_id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
add_action( 'after_switch_theme', 'nistco_create_inventory_table' );
add_action( 'init', 'nistco_create_inventory_table' );
