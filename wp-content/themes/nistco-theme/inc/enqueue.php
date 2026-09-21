<?php
/**
 * Nigeria Innovation, Science and Technology Complex (NISTCO)
 * Asset Enqueue & Frontend Scripts
 * File: inc/enqueue.php
 *
 * @package NistcoTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function nistco_enqueue_assets() {
    $theme_obj     = wp_get_theme();
    $theme_version = $theme_obj->get( 'Version' ) ?: '2.5.0';
    $theme_uri     = get_template_directory_uri();

    wp_enqueue_style( 'nistco-main-style', get_stylesheet_uri(), array(), $theme_version );
    wp_enqueue_script( 'jquery' );

    $modal_js = get_template_directory() . '/assets/js/organogram-modal.js';
    if ( file_exists( $modal_js ) ) {
        wp_enqueue_script( 'nistco-organogram-modal', $theme_uri . '/assets/js/organogram-modal.js', array( 'jquery' ), $theme_version, true );
    }

    $localized_data = array(
        'homeUrl' => esc_url( home_url( '/' ) ),
        'ajaxUrl' => esc_url( admin_url( 'admin-ajax.php' ) ),
    );
    wp_localize_script( 'jquery', 'nistcoSettings', $localized_data );
    wp_localize_script( 'jquery', 'shestcoSettings', $localized_data );
}
add_action( 'wp_enqueue_scripts', 'nistco_enqueue_assets' );

if ( ! function_exists( 'shestco_enqueue_assets' ) ) {
    function shestco_enqueue_assets() {
        nistco_enqueue_assets();
    }
}
