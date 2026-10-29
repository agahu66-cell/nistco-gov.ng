<?php
defined( 'ABSPATH' ) || exit;
$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );
?>
<section class="abt-section" id="directorates">
    <div class="abt-container">
        <div class="abt-section-header">
            <span class="abt-eyebrow">SIX SPECIALIZED NATIONAL LABORATORIES</span>
            <h2 class="abt-title-lg text-3d-extrude">Core Research Directorates</h2>
            <p class="abt-subtitle text-3d-relief">Click any research centre to launch its filtered IP portfolio in the Sovereign Venture Marketplace.</p>
        </div>

        <div class="abt-grid-3">
            <a href="<?php echo esc_url( $ventures_url . '?centre=amsarc' ); ?>" class="abt-card-3d dir-link-card color-theme-cyan" data-tilt-3d>
                <div class="dir-top"><span>💻</span><span class="abt-pill-3d cyan">AMSARC</span></div>
                <h3 class="text-3d-card-title">Applied Mathematics and Simulation Advanced Research Centre</h3>
                <p class="text-3d-relief">Physics-Informed Neural Networks (PINNs), computational fluid dynamics, cryptography, and high-performance numerical modeling.</p>
            </a>
            <a href="<?php echo esc_url( $ventures_url . '?centre=barc' ); ?>" class="abt-card-3d dir-link-card color-theme-emerald" data-tilt-3d>
                <div class="dir-top"><span>🧬</span><span class="abt-pill-3d green">BARC</span></div>
                <h3 class="text-3d-card-title">Biotechnology Advanced Research Centre</h3>
                <p class="text-3d-relief">Genomic sequencing, PCR molecular diagnostics, thermotolerant bio-ethanol strains, and tissue-culture agro-biotechnology.</p>
            </a>
            <a href="<?php echo esc_url( $ventures_url . '?centre=carc' ); ?>" class="abt-card-3d dir-link-card color-theme-gold" data-tilt-3d>
                <div class="dir-top"><span>⚗️</span><span class="abt-pill-3d gold">CARC</span></div>
                <h3 class="text-3d-card-title">Chemistry Advanced Research Centre</h3>
                <p class="text-3d-relief">Synthetic zeolite cracking catalysts, GC-MS &amp; FTIR analytical spectrometry, polymer synthesis, and solid mineral assaying.</p>
            </a>
            <a href="<?php echo esc_url( $ventures_url . '?centre=parc' ); ?>" class="abt-card-3d dir-link-card color-theme-violet" data-tilt-3d>
                <div class="dir-top"><span>☀️</span><span class="abt-pill-3d">PARC</span></div>
                <h3 class="text-3d-card-title">Physics Advanced Research Centre</h3>
                <p class="text-3d-relief">Bifacial perovskite-silicon solar modules, thin-film semiconductors, laser optics calibration, and clean energy storage systems.</p>
            </a>
            <a href="<?php echo esc_url( $ventures_url . '?centre=aepc' ); ?>" class="abt-card-3d dir-link-card color-theme-cobalt" data-tilt-3d>
                <div class="dir-top"><span>⚙️</span><span class="abt-pill-3d cyan">AEPC</span></div>
                <h3 class="text-3d-card-title">Advanced Engineering &amp; Prototyping Centre</h3>
                <p class="text-3d-relief">Multi-axis CNC precision machining, industrial metallurgy casting, and localized defense &amp; agricultural hardware fabrication.</p>
            </a>
            <a href="<?php echo esc_url( $ventures_url . '?centre=ntc' ); ?>" class="abt-card-3d dir-link-card color-theme-crimson" data-tilt-3d>
                <div class="dir-top"><span>☢️</span><span class="abt-pill-3d">NTC</span></div>
                <h3 class="text-3d-card-title">Nuclear Technology Centre</h3>
                <p class="text-3d-relief">Cobalt-60 Gamma Irradiation Facility (GIF), medical device sterilization, food preservation, and radiation dosimetry calibration.</p>
            </a>
        </div>
    </div>
</section>
