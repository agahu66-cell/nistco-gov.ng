<?php
/**
 * The Front Page Controller for NASTCO Theme.
 * Modular 3D Sovereign Architecture.
 */
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    if ( file_exists( $theme_dir . '/assets/css/front-page.css' ) ) {
        wp_enqueue_style(
            'nastco-front-page',
            $theme_uri . '/assets/css/front-page.css',
            array( 'nastco-header-3d' ),
            filemtime( $theme_dir . '/assets/css/front-page.css' )
        );
    }

    if ( file_exists( $theme_dir . '/assets/js/front-page.js' ) ) {
        wp_enqueue_script(
            'nastco-front-page-js',
            $theme_uri . '/assets/js/front-page.js',
            array(),
            filemtime( $theme_dir . '/assets/js/front-page.js' ),
            true
        );
    }
}, 20 );

get_header();
?>

<main id="primary" class="site-main nastco-fp-wrapper">
    <?php
    get_template_part( 'template-parts/front-page/01', 'hero-command' );
    get_template_part( 'template-parts/front-page/02', 'centres-matrix' );
    get_template_part( 'template-parts/front-page/03', 'featured-ventures' );
    get_template_part( 'template-parts/front-page/04', 'royalty-telemetry' );
    get_template_part( 'template-parts/front-page/05', 'services-cta' );
    get_template_part( 'template-parts/front-page/06', 'ai-telemetry-hub' );
    get_template_part( 'template-parts/front-page/07', 'executive-financial-dashboard' );
    ?>
</main>

<?php get_footer(); ?>
