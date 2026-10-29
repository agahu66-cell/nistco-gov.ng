<?php
/**
 * Template Name: Venture Marketplace
 * Description: Modular controller for NASTCO venture commercialization & IP portfolio.
 */
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    if ( file_exists( $theme_dir . '/assets/css/page-ventures.css' ) ) {
        wp_enqueue_style(
            'nastco-page-ventures',
            $theme_uri . '/assets/css/page-ventures.css',
            array(),
            filemtime( $theme_dir . '/assets/css/page-ventures.css' )
        );
    }

    if ( file_exists( $theme_dir . '/assets/js/page-ventures.js' ) ) {
        wp_enqueue_script(
            'nastco-page-ventures-js',
            $theme_uri . '/assets/js/page-ventures.js',
            array(),
            filemtime( $theme_dir . '/assets/js/page-ventures.js' ),
            true
        );
    }
}, 20 );

get_header();
?>

<main id="primary" class="site-main nastco-ventures-wrapper">
    <?php
    get_template_part( 'template-parts/ventures/01-hero' );
    get_template_part( 'template-parts/ventures/02-marketplace-grid' );
    get_template_part( 'template-parts/ventures/03-royalty-calculator' );
    ?>
</main>

<?php get_footer(); ?>
