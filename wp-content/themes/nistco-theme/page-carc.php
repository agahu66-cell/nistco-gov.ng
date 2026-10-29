<?php
/**
 * Template Name: CARC Directorate Page
 * Description: Chemistry Advanced Research Centre 3D Sovereign Command Hub.
 */
defined( 'ABSPATH' ) || exit;
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'nastco-page-carc', get_template_directory_uri() . '/assets/css/page-carc.css', array( 'nastco-header-3d' ), filemtime( get_template_directory() . '/assets/css/page-carc.css' ) );
}, 20 );
get_header();
$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );
?>
<main id="primary" class="site-main nastco-carc-wrapper">
    <section class="carc-hero-section">
        <div class="carc-container carc-hero-grid">
            <div class="carc-hero-content">
                <div class="carc-badge-3d"><span class="pulse-dot-green"></span><span>CARC • DIRECTORATE OF CHEMISTRY</span></div>
                <h1 class="carc-title text-3d-extrude">Synthetic Zeolites &amp; <span class="text-gold-gradient">Petrochemical Catalysts</span></h1>
                <p class="carc-subtitle text-3d-relief">The Chemistry Advanced Research Centre (CARC) synthesizes proprietary cracking catalysts, analytical spectrometry reagents, and advanced polymers.</p>
                <div class="carc-hero-actions">
                    <a href="<?php echo esc_url( $ventures_url . '?centre=carc' ); ?>" class="btn-3d-primary"><span>💎 View CARC Patents</span></a>
                    <a href="#carc-engine" class="btn-3d-secondary"><span>⚗️ Explore Catalysts Core</span></a>
                </div>
            </div>
            <div class="carc-command-card color-theme-gold">
                <div class="cmd-card-header"><span class="cmd-title">CARC SPECTROMETRY TELEMETRY</span><span class="cmd-status">ONLINE • GC-MS ACTIVE</span></div>
                <div class="cmd-kpi-grid">
                    <div class="cmd-kpi-box color-theme-gold"><span class="kpi-num text-3d-number-gold">99.4%</span><span class="kpi-label">Catalytic Purity</span></div>
                    <div class="cmd-kpi-box color-theme-cyan"><span class="kpi-num text-3d-number-cyan">1,200 hrs</span><span class="kpi-label">Continuous Cracking Test</span></div>
                </div>
                <div class="cmd-card-footer"><span>Sector Beta • Sheda Science City</span></div>
            </div>
        </div>
    </section>
    <section class="carc-section" id="carc-engine">
        <div class="carc-container">
            <div class="carc-section-head"><span class="fp-eyebrow">CHEMICAL SOVEREIGNTY</span><h2 class="fp-section-title text-3d-extrude">Core Chemistry Capabilities</h2></div>
            <div class="carc-grid-3">
                <div class="abt-card-3d color-theme-gold"><span class="carc-icon">⚗️</span><h3 class="text-3d-card-title">Zeolite Cracking Catalysts</h3><p class="text-3d-relief">Engineered aluminosilicate zeolites optimized for domestic petroleum refining and emission control.</p></div>
                <div class="abt-card-3d color-theme-cyan"><span class="carc-icon">🔬</span><h3 class="text-3d-card-title">GC-MS &amp; FTIR Spectrometry</h3><p class="text-3d-relief">High-precision analytical assaying for mineral ores, pharmaceuticals, and environmental pollutants.</p></div>
                <div class="abt-card-3d color-theme-violet"><span class="carc-icon">🧪</span><h3 class="text-3d-card-title">Advanced Polymer Synthesis</h3><p class="text-3d-relief">Developing localized biodegradable plastics and industrial-grade composite resins.</p></div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
