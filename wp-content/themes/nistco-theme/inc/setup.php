<?php
/**
 * Nigeria Innovation, Science and Technology Complex (NISTCO)
 * Theme Setup and Core Support
 * File: inc/setup.php
 *
 * @package NistcoTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function nistco_theme_setup() {
    load_theme_textdomain( 'nistco-theme', get_template_directory() . '/languages' );

    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'align-wide' );
    add_theme_support( 'html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ) );

    add_theme_support( 'custom-logo', array(
        'height'      => 90,
        'width'       => 320,
        'flex-height' => true,
        'flex-width'  => true,
    ) );

    register_nav_menus( array(
        'primary'   => __( 'Primary Navigation', 'nistco-theme' ),
        'secondary' => __( 'Top Bar / Utility Navigation', 'nistco-theme' ),
        'footer'    => __( 'Footer Navigation', 'nistco-theme' ),
    ) );
}
add_action( 'after_setup_theme', 'nistco_theme_setup' );
