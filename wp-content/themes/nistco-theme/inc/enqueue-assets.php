<?php
/**
 * NASTCO Centralized Asset Enqueue Manager
 * Location: inc/enqueue-assets.php
 */
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    // 1. Global 3D Header & Footer Assets
    if ( file_exists( $theme_dir . '/assets/css/header-3d.css' ) ) {
        wp_enqueue_style( 'nastco-header-3d', $theme_uri . '/assets/css/header-3d.css', array(), filemtime( $theme_dir . '/assets/css/header-3d.css' ) );
    }
    if ( file_exists( $theme_dir . '/assets/css/footer-3d.css' ) ) {
        wp_enqueue_style( 'nastco-footer-3d', $theme_uri . '/assets/css/footer-3d.css', array( 'nastco-header-3d' ), filemtime( $theme_dir . '/assets/css/footer-3d.css' ) );
    }
    if ( file_exists( $theme_dir . '/assets/js/header-3d.js' ) ) {
        wp_enqueue_script( 'nastco-header-3d-js', $theme_uri . '/assets/js/header-3d.js', array(), filemtime( $theme_dir . '/assets/js/header-3d.js' ), true );
    }
    if ( file_exists( $theme_dir . '/assets/js/dispatch.js' ) ) {
        wp_enqueue_script( 'nastco-dispatch-js', $theme_uri . '/assets/js/dispatch.js', array(), filemtime( $theme_dir . '/assets/js/dispatch.js' ), true );
    }
}, 15 );
