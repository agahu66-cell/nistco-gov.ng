<?php
/**
 * Template Name: NTC Directorate Page
 * Description: Nuclear Technology Centre 3D Sovereign Command Hub.
 */
defined( 'ABSPATH' ) || exit;
add_action( 'wp_enqueue_scripts', function() {
    wp_enqueue_style( 'nastco-page-ntc', get_template_directory_uri() . '/assets/css/page-ntc.css', array( 'nastco-header-3d' ), filemtime( get_template_directory() . '/assets/css/page-ntc.css' ) );
}, 20 );
get_header();
$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );
?>
<main id="primary" class="site-main nastco-ntc-wrapper">
    <section class="ntc-hero-section">
        <div class="ntc-container ntc-hero-grid">
            <div class="ntc-hero-content">
                <div class="ntc-badge-3d"><span class="pulse-dot-green"></span><span>NTC • DIRECTORATE OF NUCLEAR TECHNOLOGY</span></div>
                <h1 class="ntc-title text-3d-extrude">Cobalt-60 Gamma Irradiation &amp; <span class="text-crimson-gradient">Radiation Safety</span></h1>
                <p class="ntc-subtitle text-3d-relief">The Nuclear Technology Centre (NTC) operates the national Gamma Irradiation Facility (GIF) for commercial agro-export sterilization, medical device bio-burden reduction, and solid-state dosimetry.</p>
                <div class="ntc-hero-actions">
                    <a href="<?php echo esc_url( $ventures_url . '?centre=ntc' ); ?>" class="btn-3d-primary"><span>💎 View NTC Patents</span></a>
                    <a href="#ntc-engine" class="btn-3d-secondary"><span>☢️ Explore Gamma GIF Core</span></a>
                </div>
            </div>
            <div class="ntc-command-card color-theme-crimson">
                <div class="cmd-card-header"><span class="cmd-title">NTC NUCLEAR TELEMETRY</span><span class="cmd-status">ONLINE • IAEA SAFEGUARDED</span></div>
                <div class="cmd-kpi-grid">
                    <div class="cmd-kpi-box color-theme-crimson"><span class="kpi-num text-3d-number-cyan">0.012 mSv</span><span class="kpi-label">Perimeter Radiation Level</span></div>
                    <div class="cmd-kpi-box color-theme-gold"><span class="kpi-num text-3d-number-gold">NNRA A+</span><span class="kpi-label">Regulatory Compliance</span></div>
                </div>
                <div class="cmd-card-footer"><span>Sector Delta • Sheda Science City</span></div>
            </div>
        </div>
    </section>
    <section class="ntc-section" id="ntc-engine">
        <div class="ntc-container">
            <div class="ntc-section-head"><span class="fp-eyebrow">NUCLEAR SOVEREIGNTY</span><h2 class="fp-section-title text-3d-extrude">Core Nuclear Capabilities</h2></div>
            <div class="ntc-grid-3">
                <div class="abt-card-3d color-theme-crimson"><span class="ntc-icon">☢️</span><h3 class="text-3d-card-title">Cobalt-60 Gamma Irradiation Facility</h3><p class="text-3d-relief">Industrial-scale microbial decontamination for agricultural exports and medical kit sterilization.</p></div>
                <div class="abt-card-3d color-theme-gold"><span class="ntc-icon">🌾</span><h3 class="text-3d-card-title">Agro-Export Preservation</h3><p class="text-3d-relief">Eliminating post-harvest aflatoxin and insect infestation to meet stringent international trade standards.</p></div>
                <div class="abt-card-3d color-theme-cyan"><span class="ntc-icon">📊</span><h3 class="text-3d-card-title">Radiation Dosimetry Calibration</h3><p class="text-3d-relief">Providing certified calibration services for health physics badges and industrial radiation monitors.</p></div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
