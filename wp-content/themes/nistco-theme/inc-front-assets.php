<?php
/**
 * NISTCO Modular Asset Loader
 * Conditionally enqueues assets for front-page and single research centres.
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
}
add_action( 'wp_enqueue_scripts', 'nistco_enqueue_theme_assets', 20 );
