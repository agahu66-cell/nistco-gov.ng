<?php
/**
 * Template Name: BARC Directorate Page
 * Description: Biotechnology Advanced Research Centre 3D Sovereign Command Hub.
 */
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    if ( file_exists( $theme_dir . '/assets/css/page-barc.css' ) ) {
        wp_enqueue_style(
            'nastco-page-barc',
            $theme_uri . '/assets/css/page-barc.css',
            array( 'nastco-header-3d' ),
            filemtime( $theme_dir . '/assets/css/page-barc.css' )
        );
    }
}, 20 );

get_header();
$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );
?>

<main id="primary" class="site-main nastco-barc-wrapper">
    
    <!-- Hero Section -->
    <section class="barc-hero-section">
        <div class="barc-container barc-hero-grid">
            <div class="barc-hero-content">
                <div class="barc-badge-3d">
                    <span class="pulse-dot-green"></span>
                    <span>BARC • DIRECTORATE OF BIOTECHNOLOGY</span>
                </div>
                <h1 class="barc-title text-3d-extrude">
                    Genomic Sequencing &amp; <span class="text-emerald-gradient">Industrial Bioprocessing</span>
                </h1>
                <p class="barc-subtitle text-3d-relief">
                    The Biotechnology Advanced Research Centre (BARC) drives molecular biosciences, PCR diagnostics, thermotolerant bio-ethanol enzyme engineering, and tissue-culture agricultural biotechnology.
                </p>
                <div class="barc-hero-actions">
                    <a href="<?php echo esc_url( $ventures_url . '?centre=barc' ); ?>" class="btn-3d-primary"><span>💎 View BARC IP Patents</span></a>
                    <a href="#genomics-engine" class="btn-3d-secondary"><span>🧬 Explore Genomics Core</span></a>
                </div>
            </div>

            <!-- Live Telemetry Box -->
            <div class="barc-command-card color-theme-emerald">
                <div class="cmd-card-header">
                    <span class="cmd-title">BARC BIO-LAB TELEMETRY</span>
                    <span class="cmd-status">ONLINE • ISO 17025</span>
                </div>
                <div class="cmd-kpi-grid">
                    <div class="cmd-kpi-box color-theme-emerald">
                        <span class="kpi-num text-3d-number-emerald">+34%</span>
                        <span class="kpi-label">Bio-Ethanol Yield Increase</span>
                    </div>
                    <div class="cmd-kpi-box color-theme-gold">
                        <span class="kpi-num text-3d-number-gold">99.9%</span>
                        <span class="kpi-label">PCR Assay Purity</span>
                    </div>
                </div>
                <div class="cmd-card-footer">
                    <span>Sector Beta Laboratories • Sheda Science City</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Research Pillars -->
    <section class="barc-section" id="genomics-engine">
        <div class="barc-container">
            <div class="barc-section-head">
                <span class="fp-eyebrow">MOLECULAR SOVEREIGNTY</span>
                <h2 class="fp-section-title text-3d-extrude">Core Biotechnology Capabilities</h2>
                <p class="fp-section-desc text-3d-relief">Advancing agricultural resilience and industrial biochemical manufacturing.</p>
            </div>

            <div class="barc-grid-3">
                <div class="abt-card-3d color-theme-emerald">
                    <span class="barc-icon">🧬</span>
                    <h3 class="text-3d-card-title">Genomic Sequencing &amp; PCR</h3>
                    <p class="text-3d-relief">High-throughput molecular diagnostics and disease surveillance for crops, livestock, and public health security.</p>
                </div>
                <div class="abt-card-3d color-theme-gold">
                    <span class="barc-icon">🌾</span>
                    <h3 class="text-3d-card-title">Thermotolerant Cassava Strains</h3>
                    <p class="text-3d-relief">Proprietary enzyme-engineered microbial strains yielding superior bio-ethanol conversion for industrial biofuel plants.</p>
                </div>
                <div class="abt-card-3d color-theme-cyan">
                    <span class="barc-icon">🧪</span>
                    <h3 class="text-3d-card-title">Tissue Culture Micropropagation</h3>
                    <p class="text-3d-relief">Disease-free seedling production units supplying high-yield planting stock to commercial agribusinesses across Nigeria.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
