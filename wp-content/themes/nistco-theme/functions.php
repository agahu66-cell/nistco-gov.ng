<?php
/**
 * Nigeria Innovation, Science and Technology Complex (NISTCO)
 * Theme Bootstrap Loader
 * File: functions.php
 *
 * @package NistcoTheme
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

$nistco_includes = array(
    '/inc/setup.php',
    '/inc/branding.php',
    '/inc/enqueue.php',
    '/inc/post-types.php',
    '/inc/customizer.php',
    '/inc/template-helpers.php',
    '/inc/ajax-handlers.php',
    '/inc/ajax-search.php',
    '/inc/meta-boxes.php',
    '/inc/schema-seo.php',
);

foreach ( $nistco_includes as $file ) {
    $filepath = get_template_directory() . $file;
    if ( file_exists( $filepath ) ) {
        require_once $filepath;
    }
}

function nistco_rewrite_flush() {
    if ( function_exists( 'nistco_register_cpts' ) ) {
        nistco_register_cpts();
    }
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'nistco_register_cpts' );

require_once get_template_directory() . '/inc/ajax-citations.php';

add_action("wp_enqueue_scripts", function() {
    if (is_singular("publication") || is_post_type_archive("publication")) {
        wp_enqueue_script(
            "nistco-citation-modal",
            get_template_directory_uri() . "/assets/js/citation-modal.js",
            array("jquery"),
            "2.5.1",
            true
        );
    }
});

add_action("wp_enqueue_scripts", function() {
    if (is_singular("publication") || is_post_type_archive("publication")) {
        wp_enqueue_script(
            "nistco-citation-modal",
            get_template_directory_uri() . "/assets/js/citation-modal.js",
            array("jquery"),
            "2.5.1",
            true
        );
    }
});

add_action("wp_enqueue_scripts", function() {
    if (is_singular("publication") || is_post_type_archive("publication")) {
        wp_enqueue_script(
            "nistco-citation-modal",
            get_template_directory_uri() . "/assets/js/citation-modal.js",
            array("jquery"),
            "2.5.1",
            true
        );
    }
});
