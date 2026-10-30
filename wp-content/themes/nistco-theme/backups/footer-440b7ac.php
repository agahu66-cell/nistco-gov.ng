<?php
/**
 * The Refined 3D Sovereign Footer for NASTCO Theme.
 * Features: 3D Compliance Ribbon, 6 Research Centre Quick-Links, and Telemetry Status Bar.
 */
defined( 'ABSPATH' ) || exit;

$about_url    = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'about', 'page-about.php' ) : home_url( '/about/' );
$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );
$services_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'services', 'page-services.php' ) : home_url( '/services/' );
?>

<footer class="nastco-footer-3d" id="nastcoGlobalFooter">
    <!-- Top 3D Statutory Compliance Ribbon -->
    <div class="footer-compliance-ribbon">
        <div class="footer-3d-container compliance-grid">
            <div class="compliance-card-3d">
                <span class="comp-icon">🏛️</span>
                <div>
                    <strong>FMIST Supervisory Mandate</strong>
                    <small>Federal Ministry of Innovation, Science &amp; Technology</small>
                </div>
            </div>
            <div class="compliance-card-3d">
                <span class="comp-icon">⚖️</span>
                <div>
                    <strong>PPA 2007 • BPP Rated A+</strong>
                    <small>Statutory Public Procurement Transparency</small>
                </div>
            </div>
            <div class="compliance-card-3d">
                <span class="comp-icon">📜</span>
                <div>
                    <strong>NOTAP IP Registry</strong>
                    <small>Sovereign Patent &amp; Tech Transfer Protection</small>
                </div>
            </div>
            <div class="compliance-card-3d gold-accent">
                <span class="comp-icon">💎</span>
                <div>
                    <strong>40 / 35 / 25 Royalty Split</strong>
                    <small>Inventor • Research Centre • Sovereign Reserve</small>
                </div>
            </div>
        </div>
    </div>

    <!-- Main 4-Column 3D Footer Body -->
    <div class="footer-main-3d">
        <div class="footer-3d-container footer-columns-grid">
            
            <!-- Col 1: Sovereign Identity & Campus Coordinates -->
            <div class="footer-col-brand">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-3d-Identity footer-brand-link">
                    <div class="brand-cube-3d">
                        <span class="cube-emblem">🦅</span>
                    </div>
                    <div class="brand-typography">
                        <div class="brand-title-row">
                            <span class="brand-acronym">NASTCO</span>
                            <span class="brand-sovereign-badge">NG</span>
                        </div>
                        <span class="brand-fullname">National Science &amp; Technology Complex</span>
                    </div>
                </a>
                <p class="footer-mandate-desc">
                    Nigeria's premier multi-disciplinary scientific research, nuclear irradiation, and sovereign industrial commercialization complex.
                </p>
                <div class="footer-campus-box-3d">
                    <div class="campus-coord-title">📍 Headquarters &amp; 2,000-Hectare Campus</div>
                    <p>KM 10 Abuja-Lokoja Expressway, Sheda, Kwali Area Council, FCT Abuja, Nigeria</p>
                </div>
            </div>

            <!-- Col 2: The 6 Specialized Research Centres -->
            <div class="footer-col-links">
                <h4 class="footer-col-heading">Research Directorates</h4>
                <ul class="footer-3d-list">
                    <li>
                        <a href="<?php echo esc_url( $ventures_url . '?centre=amsarc' ); ?>">
                            <span class="centre-dot cyan"></span>
                            <span><strong>AMSARC</strong> — Applied Mathematics &amp; Simulation</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( $ventures_url . '?centre=barc' ); ?>">
                            <span class="centre-dot green"></span>
                            <span><strong>BARC</strong> — Biotechnology Advanced Research</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( $ventures_url . '?centre=carc' ); ?>">
                            <span class="centre-dot gold"></span>
                            <span><strong>CARC</strong> — Chemistry Advanced Research</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( $ventures_url . '?centre=parc' ); ?>">
                            <span class="centre-dot violet"></span>
                            <span><strong>PARC</strong> — Physics &amp; Clean Energy Lab</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( $ventures_url . '?centre=aepc' ); ?>">
                            <span class="centre-dot blue"></span>
                            <span><strong>AEPC</strong> — Advanced Engineering &amp; CNC</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( $ventures_url . '?centre=ntc' ); ?>">
                            <span class="centre-dot crimson"></span>
                            <span><strong>NTC</strong> — Nuclear Technology &amp; Dosimetry</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Col 3: Portal Architecture & Portals -->
            <div class="footer-col-links">
                <h4 class="footer-col-heading">Institutional Portals</h4>
                <ul class="footer-3d-list">
                    <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">🏛️ Executive Home</a></li>
                    <li><a href="<?php echo esc_url( $about_url ); ?>">📜 About NASTCO &amp; Evolution Ledger</a></li>
                    <li><a href="<?php echo esc_url( $ventures_url ); ?>">💎 Sovereign Venture Marketplace</a></li>
                    <li><a href="<?php echo esc_url( $services_url ); ?>">⚙️ Laboratory Testing &amp; Calibration</a></li>
                    <li><a href="<?php echo esc_url( $about_url . '#contact' ); ?>">📡 Executive Secretariat Dispatch</a></li>
                </ul>
            </div>

            <!-- Col 4: Direct Telemetry & Quick Dispatch CTA -->
            <div class="footer-col-telemetry">
                <h4 class="footer-col-heading">Telemetry &amp; Off-Taking</h4>
                <div class="telemetry-panel-3d">
                    <div class="telemetry-panel-row">
                        <span class="pulse-dot-green"></span>
                        <span class="panel-status-text">Gate 2 Sentinel &amp; LiveLedger Active</span>
                    </div>
                    <p class="panel-desc">
                        Initiate industrial IP licensing, Cobalt-60 gamma irradiation scheduling, or statutory off-taker agreements directly with the Directorate of Innovation &amp; Commercialisation.
                    </p>
                    <a href="<?php echo esc_url( $about_url . '#contact' ); ?>" class="btn-3d-dispatch footer-dispatch-btn">
                        <span class="dispatch-led"></span>
                        <span>Transmit Inquiry</span>
                    </a>
                </div>
            </div>

        </div>
    </div>

    <!-- Bottom Legal & Sovereign Copyright Bar -->
    <div class="footer-bottom-bar">
        <div class="footer-3d-container bottom-bar-inner">
            <div>
                &copy; <?php echo esc_html( date( 'Y' ) ); ?> <strong>NASTCO</strong> (National Science and Technology Complex). All Statutory Rights Reserved.
            </div>
            <div class="bottom-bar-badges">
                <span class="telemetry-pill">TRL 1–9 SCALING</span>
                <span class="telemetry-pill gold">ICT DIRECTORATE SOVEREIGN BUILD</span>
            </div>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
