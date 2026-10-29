<?php
/**
 * Template Name: Institutional Services
 */
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    if ( file_exists( $theme_dir . '/assets/css/page-services.css' ) ) {
        wp_enqueue_style(
            'nastco-page-services',
            $theme_uri . '/assets/css/page-services.css',
            array(),
            filemtime( $theme_dir . '/assets/css/page-services.css' )
        );
    }
}, 20 );

get_header();
?>

<main id="primary" class="site-main nastco-services-wrapper">
    <?php
    get_template_part( 'template-parts/services/01-hero' );
    get_template_part( 'template-parts/services/02-catalog' );
    ?>
</main>

<?php get_footer(); ?>
