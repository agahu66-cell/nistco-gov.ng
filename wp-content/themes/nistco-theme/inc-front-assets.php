<?php
/**
 * NISTCO Front Page Asset Loader
 */
function nistco_enqueue_front_page_assets() {
    if ( is_front_page() || is_home() || is_page_template( 'front-page.php' ) ) {
        $css_path = get_template_directory() . '/assets/css/front-page.css';
        $js_path  = get_template_directory() . '/assets/js/front-page.js';

        $css_ver = file_exists( $css_path ) ? filemtime( $css_path ) : '1.0.0';
        $js_ver  = file_exists( $js_path ) ? filemtime( $js_path ) : '1.0.0';

        wp_enqueue_style(
            'nistco-front-page-style',
            get_template_directory_uri() . '/assets/css/front-page.css',
            array(),
            $css_ver
        );

        wp_enqueue_script(
            'nistco-front-page-script',
            get_template_directory_uri() . '/assets/js/front-page.js',
            array(),
            $js_ver,
            true
        );
    }
}
add_action( 'wp_enqueue_scripts', 'nistco_enqueue_front_page_assets', 20 );
