<?php
/**
 * Nigeria Innovation, Science and Technology Complex (NISTCO)
 * Institutional Branding, PWA & Login Customization
 * File: inc/branding.php
 *
 * @package NistcoTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function nistco_serve_dynamic_webmanifest() {
    if ( isset( $_GET['nistco_manifest'] ) || isset( $_GET['shestco_manifest'] ) ) {
        $theme_uri  = get_template_directory_uri();
        $site_name  = get_bloginfo( 'name' );
        $site_desc  = get_bloginfo( 'description' );
        $start_url  = home_url( '/' );

        $manifest = array(
            'name'             => ( $site_name ? $site_name : 'Nigeria Innovation, Science, and Technology Complex' ),
            'short_name'        => 'NISTCO',
            'description'       => ( $site_desc ? $site_desc : 'National Research Complex for Biotechnology, Chemistry, Simulation & Physical Sciences.' ),
            'start_url'         => $start_url,
            'scope'             => $start_url,
            'display'           => 'standalone',
            'orientation'       => 'portrait-primary',
            'background_color'  => '#ffffff',
            'theme_color'       => '#0D5C3A',
            'categories'        => array( 'education', 'government', 'science', 'technology' ),
            'icons'             => array(
                array(
                    'src'     => $theme_uri . '/assets/images/favicon.svg',
                    'sizes'   => 'any',
                    'type'    => 'image/svg+xml',
                    'purpose' => 'any maskable',
                ),
                array(
                    'src'     => $theme_uri . '/assets/images/icon-192.png',
                    'sizes'   => '192x192',
                    'type'    => 'image/png',
                    'purpose' => 'any',
                ),
                array(
                    'src'     => $theme_uri . '/assets/images/icon-512.png',
                    'sizes'   => '512x512',
                    'type'    => 'image/png',
                    'purpose' => 'any',
                ),
            ),
        );

        status_header( 200 );
        header( 'Content-Type: application/manifest+json; charset=utf-8' );
        header( 'X-Content-Type-Options: nosniff' );
        header( 'Cache-Control: public, max-age=604800' );
        echo wp_json_encode( $manifest, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
        exit;
    }
}
add_action( 'template_redirect', 'nistco_serve_dynamic_webmanifest' );

function nistco_render_favicons_and_manifest() {
    $theme_uri     = get_template_directory_uri();
    $manifest_url  = add_query_arg( 'nistco_manifest', '1', home_url( '/' ) );
    $primary_green = '#0D5C3A';
    echo '<link rel="manifest" href="' . esc_url( $manifest_url ) . '">' . "\n";
    echo '<meta name="theme-color" content="' . esc_attr( $primary_green ) . '">' . "\n";
    echo '<meta name="apple-mobile-web-app-capable" content="yes">' . "\n";
    echo '<meta name="apple-mobile-web-app-status-bar-style" content="default">' . "\n";
    echo '<link rel="apple-touch-icon" href="' . esc_url( $theme_uri . '/assets/images/icon-192.png' ) . '">' . "\n";
    echo '<link rel="icon" type="image/svg+xml" href="' . esc_url( $theme_uri . '/assets/images/favicon.svg' ) . '">' . "\n";
    echo '<meta name="msapplication-TileColor" content="' . esc_attr( $primary_green ) . '">' . "\n";
}
add_action( 'wp_head', 'nistco_render_favicons_and_manifest', 2 );

function nistco_custom_login_branding() {
    $theme_uri = get_template_directory_uri();
    echo '<style>
        body.login { background-color: #f8fafc; }
        body.login div#login h1 a {
            background-image: url("' . esc_url( $theme_uri . '/assets/images/logo.svg' ) . '");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            width: 320px;
            height: 90px;
        }
        body.login #loginform {
            border-radius: 12px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            border: 1px solid #e2e8f0;
        }
        body.login .wp-core-ui .button-primary {
            background: #0D5C3A !important;
            border-color: #0D5C3A !important;
            text-shadow: none;
            box-shadow: none;
        }
    </style>';
}
add_action( 'login_enqueue_scripts', 'nistco_custom_login_branding' );

function nistco_login_logo_url() {
    return home_url( '/' );
}
add_filter( 'login_headerurl', 'nistco_login_logo_url' );

function nistco_login_logo_title() {
    return get_bloginfo( 'name' );
}
add_filter( 'login_headertext', 'nistco_login_logo_title' );

if ( ! function_exists( 'shestco_serve_dynamic_webmanifest' ) ) {
    function shestco_serve_dynamic_webmanifest() {
        nistco_serve_dynamic_webmanifest();
    }
}

if ( ! function_exists( 'shestco_render_favicons_and_manifest' ) ) {
    function shestco_render_favicons_and_manifest() {
        nistco_render_favicons_and_manifest();
    }
}
