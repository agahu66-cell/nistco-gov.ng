<?php
/**
 * Front Page Partial 01: 3D Sovereign Command Hero
 */
defined( 'ABSPATH' ) || exit;

$about_url    = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'about', 'page-about.php' ) : home_url( '/about/' );
$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );
$services_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'services', 'page-services.php' ) : home_url( '/services/' );
?>
<section class="fp-hero-section">
    <div class="fp-container fp-hero-grid">
        <div class="fp-hero-content">
            <div class="fp-badge-3d">
                <span class="pulse-dot-green"></span>
                <span>NATIONAL SCIENCE &amp; TECHNOLOGY COMPLEX (NASTCO)</span>
            </div>
            <h1 class="fp-hero-title text-3d-extrude">
                Sovereign Scientific R&amp;D &amp; <span class="text-gold-gradient">Industrial Commercialization</span>
            </h1>
            <p class="fp-hero-subtitle text-3d-relief">
                Driving Nigeria's technological self-reliance across six specialized research centres—transforming breakthrough laboratory patents into high-yield industrial ventures under the statutory 40/35/25 framework.
            </p>
            <div class="fp-hero-actions">
                <a href="<?php echo esc_url( $ventures_url ); ?>" class="btn-3d-primary">
                    <span>💎 Explore IP Marketplace</span>
                </a>
                <a href="<?php echo esc_url( $services_url ); ?>" class="btn-3d-secondary">
                    <span>⚙️ Book Lab &amp; Irradiation</span>
                </a>
                <a href="<?php echo esc_url( $about_url ); ?>" class="btn-3d-ghost">
                    <span>📜 Institutional Mandate</span>
                </a>
            </div>
        </div>

        <!-- 3D Holographic Telemetry Command Card -->
        <div class="fp-command-card-3d color-theme-cyan" id="fpTiltCard">
            <div class="cmd-card-header">
                <span class="cmd-title">LIVE COMPLEX TELEMETRY</span>
                <span class="cmd-status">SHEDA • KM 10</span>
            </div>
            <div class="cmd-kpi-grid">
                <div class="cmd-kpi-box color-theme-gold">
                    <span class="kpi-num text-3d-number-gold">6</span>
                    <span class="kpi-label">Advanced Research Centres</span>
                </div>
                <div class="cmd-kpi-box color-theme-cyan">
                    <span class="kpi-num text-3d-number-cyan">40/35/25</span>
                    <span class="kpi-label">Statutory Royalty Split</span>
                </div>
                <div class="cmd-kpi-box color-theme-emerald">
                    <span class="kpi-num text-3d-number-emerald">TRL 1–9</span>
                    <span class="kpi-label">Industrial Scaling Pipeline</span>
                </div>
                <div class="cmd-kpi-box color-theme-violet">
                    <span class="kpi-num text-3d-number-violet">A+ Rated</span>
                    <span class="kpi-label">PPA 2007 &amp; NOTAP Compliance</span>
                </div>
            </div>
            <div class="cmd-card-footer">
                <span>Supervised by the Federal Ministry of Innovation, Science &amp; Technology (FMIST)</span>
            </div>
        </div>
    </div>
</section>
