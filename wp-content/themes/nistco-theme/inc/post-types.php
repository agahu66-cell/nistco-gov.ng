<?php
/**
 * Nigeria Innovation, Science and Technology Complex (NISTCO)
*/
function nistco_register_cpts() {
register_post_type( 'research_centre', array(
'labels' => array(
'name' => _x( 'Research Centres', 'post type general name', 'nistco-theme' ),
'singular_name' => _x( 'Research Centre', 'post type singular name', 'nistco-theme' ),
'menu_name' => _x( 'Research Centres', 'admin menu', 'nistco-theme' ),
'name_admin_bar' => _x( 'Research Centre', 'add new on admin bar', 'nistco-theme' ),
'add_new' => _x( 'Add New Centre', 'centre', 'nistco-theme' ),
'add_new_item' => __( 'Add New Research Centre', 'nistco-theme' ),
'new_item' => __( 'New Research Centre', 'nistco-theme' ),
'edit_item' => __( 'Edit Research Centre', 'nistco-theme' ),
'view_item' => __( 'View Research Centre', 'nistco-theme' ),
'all_items' => __( 'All Research Centres', 'nistco-theme' ),
'search_items' => __( 'Search Research Centres', 'nistco-theme' ),
'parent_item_colon' => __( 'Parent Research Centre:', 'nistco-theme' ),
'not_found' => __( 'No research centres found.', 'nistco-theme' ),
'not_found_in_trash' => __( 'No research centres found in Trash.', 'nistco-theme' ),
),
'public' => true,
'publicly_queryable' => true,
'show_ui' => true,
'show_in_menu' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'research-centres', 'with_front' => false ),
'capability_type' => 'post',
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 20,
'menu_icon' => 'dashicons-networking',
'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' ),
'show_in_rest' => true,
) );

// 2. Scientific Publications & Repository
register_post_type( 'publication', array(
'labels' => array(
'name' => _x( 'Publications', 'post type general name', 'nistco-theme' ),
'singular_name' => _x( 'Publication', 'post type singular name', 'nistco-theme' ),
'menu_name' => _x( 'Publications', 'admin menu', 'nistco-theme' ),
'name_admin_bar' => _x( 'Publication', 'add new on admin bar', 'nistco-theme' ),
'add_new' => _x( 'Add Publication', 'publication', 'nistco-theme' ),
'add_new_item' => __( 'Add New Publication', 'nistco-theme' ),
'new_item' => __( 'New Publication', 'nistco-theme' ),
'edit_item' => __( 'Edit Publication', 'nistco-theme' ),
'view_item' => __( 'View Publication', 'nistco-theme' ),
'all_items' => __( 'All Publications', 'nistco-theme' ),
'search_items' => __( 'Search Publications Repository', 'nistco-theme' ),
'not_found' => __( 'No publications found.', 'nistco-theme' ),
'not_found_in_trash' => __( 'No publications found in Trash.', 'nistco-theme' ),
),
'public' => true,
'publicly_queryable' => true,
'show_ui' => true,
'show_in_menu' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'publications', 'with_front' => false ),
'capability_type' => 'post',
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 21,
'menu_icon' => 'dashicons-book',
'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'revisions' ),
'show_in_rest' => true,
) );

// 3. Public Procurement Tenders (BPP Solicitations)
register_post_type( 'procurement_tender', array(
'labels' => array(
'name' => _x( 'Procurement Tenders', 'post type general name', 'nistco-theme' ),
'singular_name' => _x( 'Tender Notice', 'post type singular name', 'nistco-theme' ),
'menu_name' => _x( 'Tenders Desk', 'admin menu', 'nistco-theme' ),
'name_admin_bar' => _x( 'Tender Notice', 'add new on admin bar', 'nistco-theme' ),
'add_new' => _x( 'Add Tender', 'tender', 'nistco-theme' ),
'add_new_item' => __( 'Add New Public Tender Notice', 'nistco-theme' ),
'new_item' => __( 'New Tender Notice', 'nistco-theme' ),
'edit_item' => __( 'Edit Tender Notice', 'nistco-theme' ),
'view_item' => __( 'View Tender Notice', 'nistco-theme' ),
'all_items' => __( 'All Solicitations', 'nistco-theme' ),
'search_items' => __( 'Search Tenders Desk', 'nistco-theme' ),
'not_found' => __( 'No procurement tenders found.', 'nistco-theme' ),
'not_found_in_trash' => __( 'No procurement tenders found in Trash.', 'nistco-theme' ),
),
'public' => true,
'publicly_queryable' => true,
'show_ui' => true,
'show_in_menu' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'tenders', 'with_front' => false ),
'capability_type' => 'post',
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 22,
'menu_icon' => 'dashicons-clipboard',
'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions' ),
'show_in_rest' => true,
) );

// 4. Commercial Patents & Intellectual Property
register_post_type( 'patent', array(
'labels' => array(
'name' => _x( 'Commercial Patents', 'post type general name', 'nistco-theme' ),
'singular_name' => _x( 'Patent Record', 'post type singular name', 'nistco-theme' ),
'menu_name' => _x( 'Patents & IP', 'admin menu', 'nistco-theme' ),
'name_admin_bar' => _x( 'Patent Record', 'add new on admin bar', 'nistco-theme' ),
'add_new' => _x( 'Add Patent', 'patent', 'nistco-theme' ),
'add_new_item' => __( 'Add New Commercial Patent', 'nistco-theme' ),
'new_item' => __( 'New Patent Record', 'nistco-theme' ),
'edit_item' => __( 'Edit Patent Record', 'nistco-theme' ),
'view_item' => __( 'View Patent Record', 'nistco-theme' ),
'all_items' => __( 'All Patent Records', 'nistco-theme' ),
'search_items' => __( 'Search Patents', 'nistco-theme' ),
'not_found' => __( 'No patent records found.', 'nistco-theme' ),
'not_found_in_trash' => __( 'No patent records found in Trash.', 'nistco-theme' ),
),
'public' => true,
'publicly_queryable' => true,
'show_ui' => true,
'show_in_menu' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'patents', 'with_front' => false ),
'capability_type' => 'post',
'has_archive' => true,
'hierarchical' => false,
'menu_position' => 23,
'menu_icon' => 'dashicons-awards',
'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'revisions' ),
'show_in_rest' => true,
) );

// 5. Directorate Taxonomy (Cross-Cutting Hierarchy)
register_taxonomy( 'directorate', array( 'research_centre', 'post', 'publication', 'patent' ), array(
'hierarchical' => true,
'labels' => array(
'name' => _x( 'Directorates', 'taxonomy general name', 'nistco-theme' ),
'singular_name' => _x( 'Directorate', 'taxonomy singular name', 'nistco-theme' ),
'search_items' => __( 'Search Directorates', 'nistco-theme' ),
'all_items' => __( 'All Directorates', 'nistco-theme' ),
'parent_item' => __( 'Parent Directorate', 'nistco-theme' ),
'parent_item_colon' => __( 'Parent Directorate:', 'nistco-theme' ),
'edit_item' => __( 'Edit Directorate', 'nistco-theme' ),
'update_item' => __( 'Update Directorate', 'nistco-theme' ),
'add_new_item' => __( 'Add New Directorate', 'nistco-theme' ),
'new_item_name' => __( 'New Directorate Name', 'nistco-theme' ),
'menu_name' => __( 'Directorates', 'nistco-theme' ),
),
'show_ui' => true,
'show_admin_column' => true,
'query_var' => true,
'rewrite' => array( 'slug' => 'directorates', 'with_front' => false ),
'show_in_rest' => true,
) );
}
add_action( 'init', 'nistco_register_cpts' );

// Legacy function alias
if ( ! function_exists( 'shestco_register_cpts' ) ) {
function shestco_register_cpts() {
nistco_register_cpts();
}
}