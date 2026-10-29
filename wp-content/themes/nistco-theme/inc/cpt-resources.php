<?php
/**
 * NASTCO Strategic Resources CPT & Meta Boxes
 */

// 1. Register Custom Post Type & Taxonomy
add_action( 'init', 'nastco_register_resources_cpt' );
function nastco_register_resources_cpt() {
    
    // Taxonomy: Resource Categories
    register_taxonomy( 'resource_category', array( 'nastco_resource' ), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => 'Resource Categories',
            'singular_name' => 'Resource Category',
            'all_items'     => 'All Categories',
            'edit_item'     => 'Edit Category',
            'add_new_item'  => 'Add New Category',
        ),
        'show_admin_column' => true,
        'show_in_rest'      => true,
        'rewrite'           => array( 'slug' => 'resource-category' ),
    ));

    // CPT: Strategic Resources
    register_post_type( 'nastco_resource', array(
        'labels' => array(
            'name'               => 'Strategic Resources',
            'singular_name'      => 'Resource',
            'add_new'            => 'Add New Resource',
            'add_new_item'       => 'Add New Strategic Resource',
            'edit_item'          => 'Edit Resource',
            'all_items'          => 'All Resources',
            'search_items'       => 'Search Resources',
        ),
        'public'        => true,
        'has_archive'   => true,
        'menu_icon'     => 'dashicons-database', // Secure Database Icon
        'menu_position' => 20,
        'supports'      => array( 'title', 'editor' ), // Editor acts as the description
        'show_in_rest'  => true,
    ));
}

// 2. Register Custom Meta Boxes for File Data
add_action( 'add_meta_boxes', 'nastco_resource_meta_boxes' );
function nastco_resource_meta_boxes() {
    add_meta_box(
        'nastco_resource_data',
        'Resource Asset Details',
        'nastco_resource_meta_callback',
        'nastco_resource',
        'normal',
        'high'
    );
}

// 3. Render the Meta Box UI in the WP Admin
function nastco_resource_meta_callback( $post ) {
    wp_nonce_field( 'nastco_save_resource_data', 'nastco_resource_meta_nonce' );
    
    $file_type = get_post_meta( $post->ID, '_nastco_file_type', true );
    $file_size = get_post_meta( $post->ID, '_nastco_file_size', true );
    $file_url  = get_post_meta( $post->ID, '_nastco_file_url', true );
    
    echo '<div style="display:flex; flex-direction:column; gap:15px; margin-top:10px;">';
    
    echo '<div><label style="font-weight:bold; display:block; margin-bottom:5px;">File Type (e.g. PDF Document, Protocol, Dataset)</label>';
    echo '<input type="text" name="nastco_file_type" value="' . esc_attr( $file_type ) . '" style="width:100%;" /></div>';
    
    echo '<div><label style="font-weight:bold; display:block; margin-bottom:5px;">File Size (e.g. 2.4 MB, Secure)</label>';
    echo '<input type="text" name="nastco_file_size" value="' . esc_attr( $file_size ) . '" style="width:100%;" /></div>';
    
    echo '<div><label style="font-weight:bold; display:block; margin-bottom:5px;">Download / Access URL (Link to the asset)</label>';
    echo '<input type="url" name="nastco_file_url" value="' . esc_url( $file_url ) . '" style="width:100%;" /></div>';
    
    echo '</div>';
}

// 4. Save the Meta Box Data
add_action( 'save_post', 'nastco_save_resource_meta' );
function nastco_save_resource_meta( $post_id ) {
    if ( ! isset( $_POST['nastco_resource_meta_nonce'] ) || ! wp_verify_nonce( $_POST['nastco_resource_meta_nonce'], 'nastco_save_resource_data' ) ) return;
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
    if ( ! current_user_can( 'edit_post', $post_id ) ) return;

    if ( isset( $_POST['nastco_file_type'] ) ) update_post_meta( $post_id, '_nastco_file_type', sanitize_text_field( $_POST['nastco_file_type'] ) );
    if ( isset( $_POST['nastco_file_size'] ) ) update_post_meta( $post_id, '_nastco_file_size', sanitize_text_field( $_POST['nastco_file_size'] ) );
    if ( isset( $_POST['nastco_file_url'] ) )  update_post_meta( $post_id, '_nastco_file_url', esc_url_raw( $_POST['nastco_file_url'] ) );
}
