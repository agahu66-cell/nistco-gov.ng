<?php
/**
 * Template Name: PARC Directorate Page
 * Description: Physics Advanced Research Centre 3D Sovereign Command Hub.
 */
defined( 'ABSPATH' ) || exit;
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'nastco-page-parc', get_template_directory_uri() . '/assets/css/page-parc.css', array( 'nastco-header-3d' ), filemtime( get_template_directory() . '/assets/css/page-parc.css' ) );
}, 20 );
get_header();
$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );
?>
<main id="primary" class="site-main nastco-parc-wrapper">
    <section class="parc-hero-section">
        <div class="parc-container parc-hero-grid">
            <div class="parc-hero-content">
                <div class="parc-badge-3d"><span class="pulse-dot-green"></span><span>PARC • DIRECTORATE OF PHYSICS</span></div>
                <h1 class="parc-title text-3d-extrude">Bifacial Perovskite Solar &amp; <span class="text-violet-gradient">Clean Energy Arrays</span></h1>
                <p class="parc-subtitle text-3d-relief">The Physics Advanced Research Centre (PARC) pioneers thin-film semiconductors, perovskite-silicon photovoltaics, and solid-state laser optics.</p>
                <div class="parc-hero-actions">
                    <a href="<?php echo esc_url( $ventures_url . '?centre=parc' ); ?>" class="btn-3d-primary"><span>💎 View PARC Patents</span></a>
                    <a href="#parc-engine" class="btn-3d-secondary"><span>☀️ Explore Physics Core</span></a>
                </div>
            </div>
            <div class="parc-command-card color-theme-violet">
                <div class="cmd-card-header"><span class="cmd-title">PARC SOLAR TELEMETRY</span><span class="cmd-status">ONLINE • +21.4% EFFICIENCY</span></div>
                <div class="cmd-kpi-grid">
                    <div class="cmd-kpi-box color-theme-violet"><span class="kpi-num text-3d-number-violet">45°C</span><span class="kpi-label">Tropical Thermal Resilience</span></div>
                    <div class="cmd-kpi-box color-theme-gold"><span class="kpi-num text-3d-number-gold">TRL 9</span><span class="kpi-label">Field Tested Mini-Grids</span></div>
                </div>
                <div class="cmd-card-footer"><span>Sector Beta • Sheda Science City</span></div>
            </div>
        </div>
    </section>
    <section class="parc-section" id="parc-engine">
        <div class="parc-container">
            <div class="parc-section-head"><span class="fp-eyebrow">PHYSICAL SOVEREIGNTY</span><h2 class="fp-section-title text-3d-extrude">Core Physics Capabilities</h2></div>
            <div class="parc-grid-3">
                <div class="abt-card-3d color-theme-violet"><span class="parc-icon">☀️</span><h3 class="text-3d-card-title">Perovskite Solar Modules</h3><p class="text-3d-relief">High-temperature resilient photovoltaic cells optimized for sub-Saharan solar irradiance and off-grid mini-grids.</p></div>
                <div class="abt-card-3d color-theme-cyan"><span class="parc-icon">⚡</span><h3 class="text-3d-card-title">Thin-Film Semiconductors</h3><p class="text-3d-relief">Advanced material deposition for optoelectronic sensors and localized clean energy storage.</p></div>
                <div class="abt-card-3d color-theme-gold"><span class="parc-icon">🔦</span><h3 class="text-3d-card-title">Laser Optics Calibration</h3><p class="text-3d-relief">Precision solid-state laser instrumentation for industrial measurement and telecommunications.</p></div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
