<?php
/**
 * Template Name: AMSARC Directorate Page
 * Description: Applied Mathematics and Simulation Advanced Research Centre 3D Sovereign Command Hub.
 */
defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    if ( file_exists( $theme_dir . '/assets/css/page-amsarc.css' ) ) {
        wp_enqueue_style(
            'nastco-page-amsarc',
            $theme_uri . '/assets/css/page-amsarc.css',
            array( 'nastco-header-3d' ),
            filemtime( $theme_dir . '/assets/css/page-amsarc.css' )
        );
    }
}, 20 );

get_header();
$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );
?>

<main id="primary" class="site-main nastco-amsarc-wrapper">
    
    <!-- Hero Section -->
    <section class="amsarc-hero-section">
        <div class="amsarc-container amsarc-hero-grid">
            <div class="amsarc-hero-content">
                <div class="amsarc-badge-3d">
                    <span class="pulse-dot-green"></span>
                    <span>AMSARC • DIRECTORATE OF APPLIED MATHEMATICS &amp; SIMULATION</span>
                </div>
                <h1 class="amsarc-title text-3d-extrude">
                    Physics-Informed Neural Networks &amp; <span class="text-cyan-gradient">High-Performance HPC Solvers</span>
                </h1>
                <p class="amsarc-subtitle text-3d-relief">
                    The Applied Mathematics and Simulation Advanced Research Centre (AMSARC) bridges foundational mathematical theory with computational fluid dynamics (CFD), cryptographic systems, and real-time physical simulation.
                </p>
                <div class="amsarc-hero-actions">
                    <a href="<?php echo esc_url( $ventures_url . '?centre=amsarc' ); ?>" class="btn-3d-primary"><span>💎 View AMSARC IP Patents</span></a>
                    <a href="#pinns-engine" class="btn-3d-secondary"><span>💻 Explore PINNs Engine</span></a>
                </div>
            </div>

            <!-- Live Telemetry Box -->
            <div class="amsarc-command-card color-theme-cyan">
                <div class="cmd-card-header">
                    <span class="cmd-title">AMSARC CLUSTER TELEMETRY</span>
                    <span class="cmd-status">ONLINE • 3.2 TFLOPS</span>
                </div>
                <div class="cmd-kpi-grid">
                    <div class="cmd-kpi-box color-theme-cyan">
                        <span class="kpi-num text-3d-number-cyan">99.8%</span>
                        <span class="kpi-label">PINN Convergence Rate</span>
                    </div>
                    <div class="cmd-kpi-box color-theme-gold">
                        <span class="kpi-num text-3d-number-gold">14 ms</span>
                        <span class="kpi-label">Mesh-Free Solver Latency</span>
                    </div>
                </div>
                <div class="cmd-card-footer">
                    <span>HPE ProLiant Gen10 Cluster • Sheda Science City</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Research Pillars -->
    <section class="amsarc-section" id="pinns-engine">
        <div class="amsarc-container">
            <div class="amsarc-section-head">
                <span class="fp-eyebrow">COMPUTATIONAL SOVEREIGNTY</span>
                <h2 class="fp-section-title text-3d-extrude">Core Research &amp; Simulation Capabilities</h2>
                <p class="fp-section-desc text-3d-relief">Eliminating experimental bottlenecks through high-fidelity numerical modeling.</p>
            </div>

            <div class="amsarc-grid-3">
                <div class="abt-card-3d color-theme-cyan">
                    <span class="amsarc-icon">📐</span>
                    <h3 class="text-3d-card-title">Mesh-Free PINNs Solvers</h3>
                    <p class="text-3d-relief">Embedding governing physical laws (Navier-Stokes equations) directly into deep neural network loss functions for rapid fluid simulation.</p>
                </div>
                <div class="abt-card-3d color-theme-gold">
                    <span class="amsarc-icon">🌪️</span>
                    <span class="text-3d-card-title">Aerodynamic &amp; Stress CFD</span>
                    <p class="text-3d-relief">Simulating supersonic airflow, structural bridge loads, and turbine flutter prior to physical fabrication at AEPC.</p>
                </div>
                <div class="abt-card-3d color-theme-violet">
                    <span class="amsarc-icon">🔐</span>
                    <span class="text-3d-card-title">Sovereign Cryptography</span>
                    <p class="text-3d-relief">Developing post-quantum cryptographic hashing algorithms and secure national communications protocols.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
