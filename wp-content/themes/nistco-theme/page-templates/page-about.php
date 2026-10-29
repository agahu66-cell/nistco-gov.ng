<?php
/**
 * Template Name: About Page
 * Description: Modular 3D Sovereign Controller for the NASTCO About page.
 * Preserves all 14 partials (01-hero-masthead through 14-contact) in full 3D format.
 */
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    $css_deps = array();
    if ( wp_style_is( 'nastco-header-3d', 'registered' ) || wp_style_is( 'nastco-header-3d', 'enqueued' ) ) {
        $css_deps[] = 'nastco-header-3d';
    }

    foreach ( array( 'ventures-engine.css', 'front-page.css', 'about.css', 'page-about.css' ) as $css_file ) {
        if ( file_exists( $theme_dir . '/assets/css/' . $css_file ) ) {
            wp_enqueue_style(
                'nastco-' . sanitize_title( $css_file ),
                $theme_uri . '/assets/css/' . $css_file,
                $css_deps,
                filemtime( $theme_dir . '/assets/css/' . $css_file )
            );
        }
    }

    if ( file_exists( $theme_dir . '/assets/js/about.js' ) ) {
        wp_enqueue_script(
            'nastco-about-core-js',
            $theme_uri . '/assets/js/about.js',
            array(),
            filemtime( $theme_dir . '/assets/js/about.js' ),
            true
        );
    }

    if ( file_exists( $theme_dir . '/assets/js/page-about.js' ) ) {
        wp_enqueue_script(
            'nastco-page-about-3d-js',
            $theme_uri . '/assets/js/page-about.js',
            array(),
            filemtime( $theme_dir . '/assets/js/page-about.js' ),
            true
        );
    }
}, 20 );

get_header();
?>

<main id="main-content" class="nastco-about-wrapper nastco-3d-enforced">
<?php
$about_sections = array(
    '01-hero-masthead',
    '02-kpi-strip',
    '03-presidential-anchor',
    '04-evolution-ledger',
    '05-stakeholders-marquee',
    '06-institutional-features',
    '07-campus-map',
    '08-strategic-blueprint',
    '09-governance',
    '10-executive-management',
    '11-directorates',
    '12-publications-carousel',
    '13-faq',
    '14-contact',
);

foreach ( $about_sections as $index => $section ) {
    $sec_num = str_pad( $index + 1, 2, '0', STR_PAD_LEFT );
    echo '<div class="about-3d-section-stage" data-section-stage="' . esc_attr( $sec_num ) . '">';
    get_template_part( 'template-parts/about/' . $section );
    echo '</div>';
}
?>
</main>

<?php get_footer(); ?>
