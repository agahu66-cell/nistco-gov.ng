<?php
/**
 * Template Name: NASTCO Research Centres Matrix
 * Description: Main 3D Glassmorphic overview page (/centres/) linking directly to all 6 NASTCO Research Centres.
 */
defined( 'ABSPATH' ) || exit;

get_header();

$directorates = array(
    'amsarc' => array(
        'code'    => 'AMSARC',
        'name'    => 'Applied Mathematics and Simulation Advanced Research Centre',
        'domain'  => 'Computational Modelling • High-Performance Simulation • AI Digital Twins',
        'summary' => 'Spearheading sovereign mathematical modelling, multi-physics numerical simulation, post-quantum cryptography, and predictive digital twins for national critical infrastructure.',
        'metric'  => '1.4 PFLOPS Compute • 18 Active Digital Twins',
        'accent'  => '#38bdf8',
    ),
    'barc' => array(
        'code'    => 'BARC',
        'name'    => 'Biotechnology Advanced Research Centre',
        'domain'  => 'Genomics • Molecular Diagnostics • Agricultural Bio-Engineering',
        'summary' => 'Advancing sovereign genomics, BSL-3 molecular diagnostics, climate-resilient seed multiplication, and industrial bioprocessing for food security and public health.',
        'metric'  => 'BSL-3 Certified • 480 Genomes/Mo Capacity',
        'accent'  => '#10b981',
    ),
    'carc' => array(
        'code'    => 'CARC',
        'name'    => 'Chemistry Advanced Research Centre',
        'domain'  => 'Analytical Spectroscopy • Solid Minerals • Nano-Catalysis',
        'summary' => 'Driving indigenous chemical synthesis, lithium and kaolin ore beneficiation, polymer nanocomposites, and ISO/IEC 17025 certified analytical assays.',
        'metric'  => 'ISO/IEC 17025 • 0.01 ppm Precision Assays',
        'accent'  => '#f59e0b',
    ),
    'parc' => array(
        'code'    => 'PARC',
        'name'    => 'Physics Advanced Research Centre',
        'domain'  => 'Solid-State Physics • Laser Photonics • Thin-Film Semiconductors',
        'summary' => 'Conducting frontier research in condensed matter physics, perovskite photovoltaics, femtosecond laser optics, and ionospheric telemetry instrumentation.',
        'metric'  => 'ISO Class 6 Cleanroom • 24.8% Cell Efficiency',
        'accent'  => '#a855f7',
    ),
    'aepc' => array(
        'code'    => 'AEPC',
        'name'    => 'Advanced Electric Power Centre',
        'domain'  => 'Direct-DC Microgrids • Solar Storage • Smart Grid Telemetry',
        'summary' => 'Engineering high-efficiency direct DC-to-DC solar architectures, MPPT charge algorithms, LFP/GEL battery lifecycle qualification, and automated SCADA protection.',
        'metric'  => '4.5 MW Hybrid Grid • 96.8% Direct-DC Efficiency',
        'accent'  => '#facc15',
    ),
    'ntc' => array(
        'code'    => 'NTC',
        'name'    => 'Nuclear Technology Centre',
        'domain'  => 'Peaceful Nuclear Science • Gamma Irradiation • Radiation Dosimetry',
        'summary' => 'Operating sovereign nuclear analytical facilities, gamma food sterilization, neutron activation analysis, and radiation protection under IAEA and NNRA safeguards.',
        'metric'  => 'IAEA / NNRA Tier-1 • 120 Tons/Wk Gamma Facility',
        'accent'  => '#ef4444',
    ),
);
?>

<style id="nastco-centres-matrix-css">
    .nastco-matrix-stage {
        min-height: 85vh;
        padding: 4rem 1.5rem 5.5rem;
        background:
            radial-gradient(circle at 15% 15%, rgba(56, 189, 248, 0.12), transparent 42%),
            radial-gradient(circle at 85% 80%, rgba(250, 204, 21, 0.10), transparent 45%),
            linear-gradient(180deg, #040914 0%, #071124 100%);
        color: #f8fafc;
    }
    .nastco-matrix-container {
        max-width: 1340px;
        margin: 0 auto;
    }
    .nastco-matrix-header {
        text-align: center;
        max-width: 860px;
        margin: 0 auto 3.5rem;
    }
    .nastco-matrix-kicker {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.4rem 1rem;
        border-radius: 999px;
        background: rgba(250, 204, 21, 0.12);
        border: 1px solid rgba(250, 204, 21, 0.35);
        color: #facc15;
        font-size: 0.74rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 1rem;
    }
    .nastco-matrix-title {
        font-size: clamp(2rem, 3.6vw, 3rem);
        font-weight: 900;
        color: #ffffff;
        margin: 0 0 1rem;
        line-height: 1.15;
    }
    .nastco-matrix-subtitle {
        font-size: 1.02rem;
        line-height: 1.7;
        color: #94a3b8;
        margin: 0;
    }
    .nastco-matrix-grid {
        perspective: 1200px;
        transform-style: preserve-3d;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(370px, 1fr));
        gap: 2rem;
    }
    .nastco-directorate-card {
        background: linear-gradient(155deg, rgba(15, 23, 42, 0.88), rgba(6, 12, 26, 0.95));
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-top: 4px solid var(--card-accent, #38bdf8);
        border-radius: 6px; border: 2px solid var(--card-accent, #22d3ee); box-shadow: 6px 6px 0px rgba(0,0,0,0.8);
        padding: 2.1rem;
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.65), inset 0 1px 0 rgba(255, 255, 255, 0.12);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        position: relative;
    }
    .nastco-directorate-card:hover {
        transform: translateY(-8px);
        border-color: var(--card-accent, #facc15);
        box-shadow: 0 28px 55px rgba(0, 0, 0, 0.85);
    }
    .nastco-card-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 1.15rem;
    }
    .nastco-code-pill {
        font-size: 0.82rem;
        font-weight: 900;
        letter-spacing: 0.08em;
        padding: 0.35rem 0.85rem;
        border-radius: 8px;
        background: rgba(255, 255, 255, 0.06);
        color: var(--card-accent, #38bdf8);
        border: 1px solid var(--card-accent, #38bdf8);
    }
    .nastco-status-dot {
        font-size: 0.7rem;
        font-weight: 700;
        color: #10b981;
        display: inline-flex;
        align-items: center;
        gap: 0.35rem;
    }
    .nastco-directorate-card h2 {
        font-size: 1.25rem;
        font-weight: 800;
        color: #ffffff;
        margin: 0 0 0.55rem;
        line-height: 1.3;
    }
    .nastco-domain-tag {
        font-size: 0.75rem;
        font-weight: 700;
        color: var(--card-accent, #facc15);
        margin-bottom: 1rem;
        letter-spacing: 0.03em;
    }
    .nastco-card-summary {
        font-size: 0.9rem;
        line-height: 1.65;
        color: #cbd5e1;
        margin: 0 0 1.5rem;
    }
    .nastco-card-telemetry {
        font-size: 0.78rem;
        font-weight: 700;
        color: #94a3b8;
        background: rgba(4, 9, 20, 0.65);
        border: 1px solid rgba(255, 255, 255, 0.07);
        padding: 0.7rem 0.95rem;
        border-radius: 10px;
        margin-bottom: 1.5rem;
    }
    .nastco-card-actions {
        display: flex;
        gap: 0.75rem;
        align-items: center;
    }
    .nastco-card-cta {
        flex: 1;
        display: inline-flex;
        justify-content: center;
        align-items: center;
        gap: 0.45rem;
        padding: 0.75rem 1.2rem;
        border-radius: 12px;
        background: var(--card-accent, #facc15);
        color: #040914 !important;
        font-size: 0.82rem;
        font-weight: 800;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        text-decoration: none;
        transition: all 0.22s ease;
    }
    .nastco-card-cta:hover {
        opacity: 0.92;
        transform: translateY(-2px);
    }
    .nastco-card-lab-link {
        padding: 0.75rem 1rem;
        border-radius: 12px;
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.14);
        color: #e2e8f0 !important;
        font-size: 0.8rem;
        font-weight: 700;
        text-decoration: none;
        transition: all 0.22s ease;
    }
    .nastco-card-lab-link:hover {
        border-color: var(--card-accent, #facc15);
        color: #ffffff !important;
    }
    @media (max-width: 600px) {
        .nastco-matrix-grid {
        perspective: 1200px;
        transform-style: preserve-3d;
            grid-template-columns: 1fr;
        }
    }
</style>

<main class="nastco-matrix-stage">
    <div class="nastco-matrix-container">

        <header class="nastco-matrix-header">
            <div class="nastco-matrix-kicker">
                <span class="nastco-pulse-dot"></span>
                <span>SHEDA SCIENCE CITY • SIX SOVEREIGN RESEARCH DIRECTORATES</span>
            </div>
            <h1 class="nastco-matrix-title">NASTCO Research Centres Matrix</h1>
            <p class="nastco-matrix-subtitle">
                Explore the six specialized research directorates of the <strong>National Science and Technology Complex (NASTCO)</strong>. Click any centre below to enter its 3D Directorate Command Hub, inspect specialized laboratories, or request sovereign testing services.
            </p>
        </header>

        <section class="nastco-matrix-grid">
            <?php foreach ( $directorates as $slug => $dir ) : ?>
                <article class="nastco-directorate-card" style="--card-accent: <?php echo esc_attr( $dir['accent'] ); ?>;">
                    <div>
                        <div class="nastco-card-top">
                            <span class="nastco-code-pill"><?php echo esc_html( $dir['code'] ); ?></span>
                            <span class="nastco-status-dot">&#9679; TELEMETRY ONLINE</span>
                        </div>
                        <h2><?php echo esc_html( $dir['name'] ); ?></h2>
                        <div class="nastco-domain-tag"><?php echo esc_html( $dir['domain'] ); ?></div>
                        <p class="nastco-card-summary"><?php echo esc_html( $dir['summary'] ); ?></p>
                    </div>

                    <div>
                        <div class="nastco-card-telemetry">
                            ⚡ <?php echo esc_html( $dir['metric'] ); ?>
                        </div>
                        <div class="nastco-card-actions">
                            <a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>" class="nastco-card-cta">
                                Enter <?php echo esc_html( $dir['code'] ); ?> Hub &#8594;
                            </a>
                            <a href="<?php echo esc_url( home_url( '/services/?centre=' . $slug ) ); ?>" class="nastco-card-lab-link">
                                Book Lab
                            </a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>

    </div>
</main>

<?php
get_footer();
