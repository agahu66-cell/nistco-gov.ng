<?php
/**
 * Guaranteed Asset Loader for NASTCO 3D Sovereign Theme
 * Removes fragile dependency chains so CSS/JS never get silently dropped by WordPress.
 */
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    // 1. Always load base style.css
    wp_enqueue_style(
        'nastco-root-style',
        get_stylesheet_uri(),
        array(),
        filemtime( $theme_dir . '/style.css' )
    );

    // 2. Front Page Assets
    if ( is_front_page() || is_home() ) {
        if ( file_exists( $theme_dir . '/assets/css/front-page.css' ) ) {
            wp_enqueue_style(
                'nastco-front-page-direct',
                $theme_uri . '/assets/css/front-page.css',
                array(),
                filemtime( $theme_dir . '/assets/css/front-page.css' )
            );
        }
        if ( file_exists( $theme_dir . '/assets/js/front-page.js' ) ) {
            wp_enqueue_script(
                'nastco-front-page-js-direct',
                $theme_uri . '/assets/js/front-page.js',
                array(),
                filemtime( $theme_dir . '/assets/js/front-page.js' ),
                true
            );
        }
    }

    // 3. Page-Specific Assets (Ventures, About, Services, and all 6 Directorates)
    $slugs = array( 'ventures', 'about', 'services', 'amsarc', 'barc', 'carc', 'parc', 'aepc', 'ntc' );
    foreach ( $slugs as $slug ) {
        if ( is_page( $slug ) || is_page_template( "page-{$slug}.php" ) ) {
            $css_rel = "/assets/css/page-{$slug}.css";
            $js_rel  = "/assets/js/page-{$slug}.js";

            if ( file_exists( $theme_dir . $css_rel ) ) {
                wp_enqueue_style(
                    "nastco-page-{$slug}-direct",
                    $theme_uri . $css_rel,
                    array(),
                    filemtime( $theme_dir . $css_rel )
                );
            }
            if ( file_exists( $theme_dir . $js_rel ) ) {
                wp_enqueue_script(
                    "nastco-page-{$slug}-js-direct",
                    $theme_uri . $js_rel,
                    array(),
                    filemtime( $theme_dir . $js_rel ),
                    true
                );
            }
        }
    }
}, 99 );
