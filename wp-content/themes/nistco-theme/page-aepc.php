<?php
/**
 * Template Name: AEPC Directorate Page
 * Description: Advanced Engineering & Prototyping Centre 3D Sovereign Command Hub.
 */
defined( 'ABSPATH' ) || exit;
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'nastco-page-aepc', get_template_directory_uri() . '/assets/css/page-aepc.css', array( 'nastco-header-3d' ), filemtime( get_template_directory() . '/assets/css/page-aepc.css' ) );
}, 20 );
get_header();
$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );
?>
<main id="primary" class="site-main nastco-aepc-wrapper">
    <section class="aepc-hero-section">
        <div class="aepc-container aepc-hero-grid">
            <div class="aepc-hero-content">
                <div class="aepc-badge-3d"><span class="pulse-dot-green"></span><span>AEPC • DIRECTORATE OF ENGINEERING</span></div>
                <h1 class="aepc-title text-3d-extrude">Multi-Axis CNC Machining &amp; <span class="text-cobalt-gradient">Industrial Prototyping</span></h1>
                <p class="aepc-subtitle text-3d-relief">The Advanced Engineering &amp; Prototyping Centre (AEPC) provides precision multi-axis CNC milling, industrial metallurgy casting, and localized hardware manufacturing.</p>
                <div class="aepc-hero-actions">
                    <a href="<?php echo esc_url( $ventures_url . '?centre=aepc' ); ?>" class="btn-3d-primary"><span>💎 View AEPC Patents</span></a>
                    <a href="#aepc-engine" class="btn-3d-secondary"><span>⚙️ Explore Foundry Core</span></a>
                </div>
            </div>
            <div class="aepc-command-card color-theme-cobalt">
                <div class="cmd-card-header"><span class="cmd-title">AEPC FOUNDRY TELEMETRY</span><span class="cmd-status">ONLINE • 5-AXIS CNC</span></div>
                <div class="cmd-kpi-grid">
                    <div class="cmd-kpi-box color-theme-cobalt"><span class="kpi-num text-3d-number-cyan">±0.005mm</span><span class="kpi-label">Precision Tolerance</span></div>
                    <div class="cmd-kpi-box color-theme-gold"><span class="kpi-num text-3d-number-gold">TRL 8</span><span class="kpi-label">Hardware Prototyping</span></div>
                </div>
                <div class="cmd-card-footer"><span>Sector Gamma • Sheda Science City</span></div>
            </div>
        </div>
    </section>
    <section class="aepc-section" id="aepc-engine">
        <div class="aepc-container">
            <div class="aepc-section-head"><span class="fp-eyebrow">ENGINEERING SOVEREIGNTY</span><h2 class="fp-section-title text-3d-extrude">Core Engineering Capabilities</h2></div>
            <div class="aepc-grid-3">
                <div class="abt-card-3d color-theme-cobalt"><span class="aepc-icon">⚙️</span><h3 class="text-3d-card-title">Multi-Axis CNC Machining</h3><p class="text-3d-relief">High-precision milling and turning of aerospace components, dies, and specialized industrial molds.</p></div>
                <div class="abt-card-3d color-theme-gold"><span class="aepc-icon">🔥</span><h3 class="text-3d-card-title">Metallurgy &amp; Foundry Casting</h3><p class="text-3d-relief">Ferrous and non-ferrous alloy casting for heavy agricultural machinery and replacement parts.</p></div>
                <div class="abt-card-3d color-theme-emerald"><span class="aepc-icon">🚜</span><h3 class="text-3d-card-title">Localized Hardware Tooling</h3><p class="text-3d-relief">Designing and fabricating turn-key processing equipment for agro-allied manufacturing plants.</p></div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
