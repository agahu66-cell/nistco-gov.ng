<?php
/**
 * NISTCO Modular Asset Loader
 * Conditionally enqueues assets for front-page, single research centres, and the centres hub.
 */
function nistco_enqueue_theme_assets() {
    // 1. Front-Page Assets
    if ( is_front_page() || is_home() || is_page_template( 'front-page.php' ) ) {
        $css_path = get_template_directory() . '/assets/css/front-page.css';
        $js_path  = get_template_directory() . '/assets/js/front-page.js';

        $css_ver = file_exists( $css_path ) ? filemtime( $css_path ) : '1.0.0';
        $js_ver  = file_exists( $js_path ) ? filemtime( $js_path ) : '1.0.0';

        wp_enqueue_style( 'nistco-front-page-style', get_template_directory_uri() . '/assets/css/front-page.css', array(), $css_ver );
        wp_enqueue_script( 'nistco-front-page-script', get_template_directory_uri() . '/assets/js/front-page.js', array(), $js_ver, true );
    }

    // 2. Single Research Centre Assets
    if ( is_singular( 'research_centre' ) ) {
        $c_css_path = get_template_directory() . '/assets/css/single-centre.css';
        $c_js_path  = get_template_directory() . '/assets/js/single-centre.js';

        $c_css_ver = file_exists( $c_css_path ) ? filemtime( $c_css_path ) : '1.0.0';
        $c_js_ver  = file_exists( $c_js_path ) ? filemtime( $c_js_path ) : '1.0.0';

        wp_enqueue_style( 'nistco-single-centre-style', get_template_directory_uri() . '/assets/css/single-centre.css', array(), $c_css_ver );
        wp_enqueue_script( 'nistco-single-centre-script', get_template_directory_uri() . '/assets/js/single-centre.js', array(), $c_js_ver, true );
    }

    // 3. Centres Directory Hub Assets (Captures Page, Template, Archive, and URL request)
    $is_centres_route = is_page( 'centres' ) 
        || is_page_template( 'page-centres.php' ) 
        || is_post_type_archive( 'research_centre' ) 
        || ( isset( $_SERVER['REQUEST_URI'] ) && strpos( $_SERVER['REQUEST_URI'], '/centres' ) !== false );

    if ( $is_centres_route && ! is_singular( 'research_centre' ) ) {
        $hub_css = get_template_directory() . '/assets/css/centres-hub.css';
        $hub_js  = get_template_directory() . '/assets/js/centres-hub.js';

        $h_css_ver = file_exists( $hub_css ) ? filemtime( $hub_css ) : '1.0.0';
        $h_js_ver  = file_exists( $hub_js ) ? filemtime( $hub_js ) : '1.0.0';

        wp_enqueue_style( 'nistco-centres-hub-style', get_template_directory_uri() . '/assets/css/centres-hub.css', array(), $h_css_ver );
        wp_enqueue_script( 'nistco-centres-hub-script', get_template_directory_uri() . '/assets/js/centres-hub.js', array(), $h_js_ver, true );
    }
}
add_action( 'wp_enqueue_scripts', 'nistco_enqueue_theme_assets', 20 );
