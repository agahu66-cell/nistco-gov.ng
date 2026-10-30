<?php
/**
 * Template Name: NASTCO 3D Research Directorate
 * Description: Dynamic 3D Glassmorphic layout for the 6 NASTCO Research Centres (AMSARC, BARC, CARC, PARC, AEPC, NTC).
 */
defined( 'ABSPATH' ) || exit;

get_header();

global $post;
$slug = isset( $post->post_name ) ? strtolower( $post->post_name ) : 'amsarc';

$centres_data = array(
    'amsarc' => array(
        'code'        => 'AMSARC',
        'title'       => 'Applied Mathematics and Simulation Advanced Research Centre',
        'badge'       => 'COMPUTATIONAL MODELLING & HIGH-PERFORMANCE SIMULATION',
        'accent'      => '#38bdf8',
        'mandate'     => 'Spearheading sovereign mathematical modelling, multi-physics numerical simulation, cryptographic algorithms, and predictive AI digital twins for national critical infrastructure and industrial optimization.',
        'metrics'     => array(
            array( 'label' => 'Compute Throughput', 'value' => '1.4 PFLOPS' ),
            array( 'label' => 'Active Digital Twins', 'value' => '18 Models' ),
            array( 'label' => 'Royalty Allocation', 'value' => '40/35/25 PPA' ),
            array( 'label' => 'Simulation Uptime', 'value' => '99.94%' ),
        ),
        'labs'        => array(
            array(
                'name' => 'High-Performance Computing & Numerical Simulation Lab',
                'desc' => 'Finite element analysis (FEA), computational fluid dynamics (CFD), and climate-grid stochastic forecasting.',
                'status' => 'ONLINE • CLUSTER A1'
            ),
            array(
                'name' => 'Cryptographic Systems & Sovereign Algorithm Foundry',
                'desc' => 'Post-quantum cryptography, zero-knowledge telemetry verification, and national data security models.',
                'status' => 'ACTIVE • GATE 2 SECURED'
            ),
            array(
                'name' => 'Industrial Digital Twin & Systems Optimization Unit',
                'desc' => 'Real-time spatial simulation for energy grids, structural engineering, and automated supply corridors.',
                'status' => 'TELEMETRY LINKED'
            ),
        ),
    ),
    'barc' => array(
        'code'        => 'BARC',
        'title'       => 'Biotechnology Advanced Research Centre',
        'badge'       => 'GENOMICS, MOLECULAR BIOLOGY & BIO-INDUSTRIAL VENTURES',
        'accent'      => '#10b981',
        'mandate'     => 'Advancing sovereign genomics, molecular diagnostics, drought-resistant crop engineering, and pharmaceutical bioprocessing for agricultural food security and public health resilience.',
        'metrics'     => array(
            array( 'label' => 'Sequencing Capacity', 'value' => '480 Genomes/Mo' ),
            array( 'label' => 'Bio-Patents Filed', 'value' => '14 NOTAP IP' ),
            array( 'label' => 'Biosafety Level', 'value' => 'BSL-3 Certified' ),
            array( 'label' => 'Seed Cultivars', 'value' => '26 Variants' ),
        ),
        'labs'        => array(
            array(
                'name' => 'Genomics & Molecular Diagnostics Core Facility',
                'desc' => 'High-throughput DNA/RNA sequencing, pathogen surveillance, and rapid diagnostic kit fabrication.',
                'status' => 'ONLINE • BSL-3 WING'
            ),
            array(
                'name' => 'Plant Tissue Culture & Crop Bio-Engineering Lab',
                'desc' => 'Climate-resilient seed multiplication and bio-fortified staple crop development for Nigerian agro-zones.',
                'status' => 'ACTIVE • GREENHOUSE 2'
            ),
            array(
                'name' => 'Industrial Fermentation & Bioprocess Engineering Unit',
                'desc' => 'Scale-up bioreactor production for industrial enzymes, bio-fertilizers, and vaccine adjuvants.',
                'status' => 'PILOT BATCH RUNNING'
            ),
        ),
    ),
    'carc' => array(
        'code'        => 'CARC',
        'title'       => 'Chemistry Advanced Research Centre',
        'badge'       => 'ANALYTICAL CHEMISTRY, PETROCHEMICALS & NANO-CATALYSIS',
        'accent'      => '#f59e0b',
        'mandate'     => 'Driving indigenous chemical synthesis, solid mineral beneficiation, polymer composites, and green catalytic processes to substitute industrial chemical imports across Nigeria.',
        'metrics'     => array(
            array( 'label' => 'Spectroscopy Precision', 'value' => '0.01 ppm' ),
            array( 'label' => 'Catalyst Formulations', 'value' => '32 Synthesized' ),
            array( 'label' => 'ISO Accreditation', 'value' => 'ISO/IEC 17025' ),
            array( 'label' => 'Industrial Assays', 'value' => '1,240+ Completed' ),
        ),
        'labs'        => array(
            array(
                'name' => 'Advanced Spectroscopy & Chromatography Suite',
                'desc' => 'GC-MS, HPLC, ICP-OES, and FTIR characterization for forensic, environmental, and pharmaceutical purity.',
                'status' => 'CALIBRATED • ISO 17025'
            ),
            array(
                'name' => 'Solid Minerals Beneficiation & Inorganic Synthesis Lab',
                'desc' => 'Refining Nigerian lithium, tantalite, and kaolin ores into battery-grade and industrial precursors.',
                'status' => 'ONLINE • FOUNDRY B'
            ),
            array(
                'name' => 'Polymer Science & Nanocomposite Materials Unit',
                'desc' => 'Biodegradable packaging polymers, corrosion-resistant coatings, and industrial elastomer synthesis.',
                'status' => 'COMMERCIAL READY'
            ),
        ),
    ),
    'parc' => array(
        'code'        => 'PARC',
        'title'       => 'Physics Advanced Research Centre',
        'badge'       => 'SOLID-STATE PHYSICS, PHOTONICS & SEMICONDUCTOR MATERIALS',
        'accent'      => '#a855f7',
        'mandate'     => 'Conducting frontier research in condensed matter physics, thin-film photovoltaics, laser photonics, atmospheric physics, and indigenous sensor instrumentation.',
        'metrics'     => array(
            array( 'label' => 'Cleanroom Class', 'value' => 'ISO Class 6' ),
            array( 'label' => 'Thin-Film Efficiency', 'value' => '24.8% Perovskite' ),
            array( 'label' => 'Laser Precision', 'value' => 'Femtosecond' ),
            array( 'label' => 'Sensor Prototypes', 'value' => '19 Deployed' ),
        ),
        'labs'        => array(
            array(
                'name' => 'Thin-Film Deposition & Semiconductor Characterization Lab',
                'desc' => 'Magnetron sputtering, XRD crystallography, and next-generation solar cell fabrication.',
                'status' => 'ONLINE • CLEANROOM 1'
            ),
            array(
                'name' => 'Optics, Laser Photonics & Fibre Telemetry Lab',
                'desc' => 'Optical sensor arrays, lidar atmospheric probing, and high-speed photonic interconnects.',
                'status' => 'ACTIVE • LASER BAY'
            ),
            array(
                'name' => 'Geophysics, Meteorology & Space Weather Station',
                'desc' => 'Ionospheric scintillation tracking, seismic array telemetry, and satellite ground-link calibration.',
                'status' => '24/7 SATELLITE LOCK'
            ),
        ),
    ),
    'aepc' => array(
        'code'        => 'AEPC',
        'title'       => 'Advanced Electric Power Centre',
        'badge'       => 'DC MICROGRIDS, SOLAR STORAGE & HIGH-VOLTAGE SYSTEMS',
        'accent'      => '#facc15',
        'mandate'     => 'Engineering resilient off-grid solar architectures, direct DC-to-DC high-efficiency distribution, battery management telemetry, and smart transformer systems for Nigerian industrial corridors.',
        'metrics'     => array(
            array( 'label' => 'Microgrid Capacity', 'value' => '4.5 MW Hybrid' ),
            array( 'label' => 'DC Conversion Efficiency', 'value' => '96.8% Direct' ),
            array( 'label' => 'Battery Chemistry', 'value' => 'LFP / GEL / Na-Ion' ),
            array( 'label' => 'Grid Fault Response', 'value' => 'Less than 4ms' ),
        ),
        'labs'        => array(
            array(
                'name' => 'Direct-DC Microgrid & Solar Charge Controller Testbed',
                'desc' => 'MPPT charge algorithm optimization, absorption voltage profiling, and zero-inverter-loss DC distribution.',
                'status' => 'LIVE LOAD • 96.8% EFF'
            ),
            array(
                'name' => 'Energy Storage & Battery Telemetry Qualification Lab',
                'desc' => 'Thermal runaway testing, deep-cycle lifecycle profiling, and custom BMS firmware verification.',
                'status' => 'ONLINE • BAY 4'
            ),
            array(
                'name' => 'High-Voltage Protection & Smart Grid Automation Unit',
                'desc' => 'Solid-state circuit breakers, harmonic filtering, and SCADA substation telemetry.',
                'status' => 'SCADA LINK ACTIVE'
            ),
        ),
    ),
    'ntc' => array(
        'code'        => 'NTC',
        'title'       => 'Nuclear Technology Centre',
        'badge'       => 'PEACEFUL NUCLEAR SCIENCE, RADIATION SAFETY & ISOTOPE APPLICATIONS',
        'accent'      => '#ef4444',
        'mandate'     => 'Operating sovereign nuclear analytical facilities, gamma irradiation processing, non-destructive industrial testing, and radiation dosimetry under strict IAEA and NNRA safeguards.',
        'metrics'     => array(
            array( 'label' => 'Safeguards Status', 'value' => 'IAEA / NNRA Tier-1' ),
            array( 'label' => 'Gamma Throughput', 'value' => '120 Tons/Wk' ),
            array( 'label' => 'Dosimetry Accuracy', 'value' => '99.98% Calibrated' ),
            array( 'label' => 'Neutron Flux', 'value' => '10^12 n/cm²·s' ),
        ),
        'labs'        => array(
            array(
                'name' => 'Gamma Irradiation & Food Preservation Facility',
                'desc' => 'Post-harvest agricultural sterilization, medical device decontamination, and polymer cross-linking.',
                'status' => 'SHIELD LOCKED • SAFE'
            ),
            array(
                'name' => 'Neutron Activation Analysis (NAA) & Radiochemistry Lab',
                'desc' => 'Non-destructive multi-element trace analysis for geological surveys and environmental monitoring.',
                'status' => 'ONLINE • CORE WING'
            ),
            array(
                'name' => 'Radiation Protection, Dosimetry & Calibration Centre',
                'desc' => 'National TLD badge monitoring, survey meter calibration, and nuclear security portal verification.',
                'status' => 'NNRA CERTIFIED'
            ),
        ),
    ),
);

$current = isset( $centres_data[ $slug ] ) ? $centres_data[ $slug ] : $centres_data['amsarc'];
?>

<style id="nastco-3d-centre-styles">
    .nastco-centre-stage {
        min-height: 85vh;
        padding: 3.5rem 1.5rem 5rem;
        background:
            radial-gradient(circle at 18% 15%, rgba(56, 189, 248, 0.12), transparent 40%),
            radial-gradient(circle at 82% 80%, rgba(250, 204, 21, 0.10), transparent 45%),
            linear-gradient(180deg, #040914 0%, #071022 100%);
        color: #f8fafc;
        perspective: 1200px;
    }
    .nastco-centre-wrap {
        max-width: 1320px;
        margin: 0 auto;
    }
    /* Directorate Switcher Pills */
    .nastco-centre-switcher {
        display: flex;
        flex-wrap: wrap;
        gap: 0.65rem;
        margin-bottom: 2.5rem;
        padding: 0.75rem;
        background: rgba(8, 17, 36, 0.75);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 16px;
        backdrop-filter: blur(16px);
    }
    .nastco-switch-pill {
        padding: 0.55rem 1.1rem;
        border-radius: 10px;
        font-size: 0.8rem;
        font-weight: 800;
        letter-spacing: 0.06em;
        text-decoration: none;
        color: #94a3b8;
        background: rgba(255, 255, 255, 0.03);
        border: 1px solid transparent;
        transition: all 0.25s ease;
    }
    .nastco-switch-pill:hover {
        color: #ffffff;
        background: rgba(255, 255, 255, 0.08);
        transform: translateY(-2px);
    }
    .nastco-switch-pill.is-active {
        color: #040914;
        background: var(--centre-accent, #facc15);
        box-shadow: 0 0 20px rgba(250, 204, 21, 0.35);
    }
    /* 3D Hero Card */
    .nastco-centre-hero {
        background: linear-gradient(145deg, rgba(15, 23, 42, 0.88), rgba(6, 12, 26, 0.94));
        border: 1px solid rgba(250, 204, 21, 0.28);
        border-left: 5px solid var(--centre-accent, #38bdf8);
        border-radius: 24px;
        padding: 3rem 2.75rem;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.75), inset 0 1px 0 rgba(255, 255, 255, 0.14);
        margin-bottom: 2.5rem;
        position: relative;
        overflow: hidden;
    }
    .nastco-centre-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.4rem 0.9rem;
        border-radius: 999px;
        background: rgba(16, 185, 129, 0.12);
        border: 1px solid rgba(16, 185, 129, 0.35);
        color: #10b981;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        margin-bottom: 1.2rem;
    }
    .nastco-centre-title {
        font-size: clamp(1.85rem, 3.4vw, 2.85rem);
        font-weight: 900;
        line-height: 1.15;
        margin: 0 0 1rem 0;
        color: #ffffff;
    }
    .nastco-centre-mandate {
        font-size: 1.05rem;
        line-height: 1.75;
        color: #cbd5e1;
        max-width: 880px;
        margin-bottom: 2rem;
    }
    /* KPI Telemetry Grid */
    .nastco-kpi-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
        gap: 1.25rem;
        margin-top: 1.5rem;
    }
    .nastco-kpi-box {
        background: rgba(4, 9, 20, 0.65);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 16px;
        padding: 1.25rem 1.4rem;
        box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.08);
        transition: transform 0.25s ease, border-color 0.25s ease;
    }
    .nastco-kpi-box:hover {
        transform: translateY(-4px) rotateX(3deg);
        border-color: var(--centre-accent, #facc15);
    }
    .nastco-kpi-val {
        font-size: 1.55rem;
        font-weight: 900;
        color: var(--centre-accent, #facc15);
        margin-bottom: 0.25rem;
    }
    .nastco-kpi-lbl {
        font-size: 0.76rem;
        text-transform: uppercase;
        letter-spacing: 0.07em;
        color: #94a3b8;
        font-weight: 700;
    }
    /* Specialized Labs 3D Matrix */
    .nastco-section-heading {
        font-size: 1.35rem;
        font-weight: 800;
        margin: 3rem 0 1.5rem;
        display: flex;
        align-items: center;
        gap: 0.75rem;
    }
    .nastco-labs-grid {
        perspective: 1200px;
        transform-style: preserve-3d;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
        gap: 1.75rem;
    }
    .nastco-lab-card {
        background: rgba(10, 19, 38, 0.82);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 6px; border: 2px solid var(--centre-accent, #fbbf24); box-shadow: 6px 6px 0px rgba(0,0,0,0.8);
        padding: 1.85rem;
        box-shadow: 0 16px 36px rgba(0, 0, 0, 0.55), inset 0 1px 0 rgba(255, 255, 255, 0.1);
        transition: all 0.3s cubic-bezier(0.16, 1, 0.3, 1);
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }
    .nastco-lab-card:hover {
        transform: translateY(-6px);
        border-color: var(--centre-accent, #38bdf8);
        box-shadow: 0 22px 45px rgba(0, 0, 0, 0.75);
    }
    .nastco-lab-status {
        display: inline-block;
        font-size: 0.68rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        color: #10b981;
        background: rgba(16, 185, 129, 0.12);
        padding: 0.3rem 0.65rem;
        border-radius: 6px;
        margin-bottom: 1rem;
        align-self: flex-start;
    }
    .nastco-lab-card h3 {
        font-size: 1.15rem;
        font-weight: 800;
        color: #ffffff;
        margin: 0 0 0.75rem 0;
    }
    .nastco-lab-card p {
        font-size: 0.9rem;
        line-height: 1.65;
        color: #94a3b8;
        margin: 0 0 1.5rem 0;
    }
    .nastco-lab-actions {
        display: flex;
        gap: 0.75rem;
        flex-wrap: wrap;
        margin-top: auto;
    }
    .nastco-btn-3d {
        display: inline-flex;
        align-items: center;
        gap: 0.45rem;
        padding: 0.65rem 1.15rem;
        border-radius: 10px;
        font-size: 0.8rem;
        font-weight: 800;
        text-decoration: none;
        letter-spacing: 0.04em;
        transition: all 0.2s ease;
    }
    .nastco-btn-primary {
        background: var(--centre-accent, #facc15);
        color: #040914;
    }
    .nastco-btn-outline {
        background: rgba(255, 255, 255, 0.05);
        color: #e2e8f0;
        border: 1px solid rgba(255, 255, 255, 0.15);
    }
    .nastco-btn-3d:hover {
        transform: translateY(-2px);
        opacity: 0.95;
    }
</style>

<main class="nastco-centre-stage" style="--centre-accent: <?php echo esc_attr( $current['accent'] ); ?>;">
    <div class="nastco-centre-wrap">

        <!-- Interactive 6-Centre Quick Switcher -->
        <nav class="nastco-centre-switcher" aria-label="Research Directorates">
            <?php foreach ( $centres_data as $key => $item ) : ?>
                <a href="<?php echo esc_url( home_url( '/' . $key . '/' ) ); ?>"
                   class="nastco-switch-pill <?php echo ( $key === $slug ) ? 'is-active' : ''; ?>">
                    <?php echo esc_html( $item['code'] ); ?>
                </a>
            <?php endforeach; ?>
            <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="nastco-switch-pill" style="margin-left:auto;">
                &#8592; All Centres Matrix
            </a>
        </nav>

        <!-- 3D Directorate Command Hero -->
        <section class="nastco-centre-hero">
            <div class="nastco-centre-badge">
                <span class="nastco-pulse-dot"></span>
                <span><?php echo esc_html( $current['code'] . ' • ' . $current['badge'] ); ?></span>
            </div>
            <h1 class="nastco-centre-title">
                <?php echo esc_html( $current['title'] ); ?> (<?php echo esc_html( $current['code'] ); ?>)
            </h1>
            <p class="nastco-centre-mandate">
                <?php echo esc_html( $current['mandate'] ); ?>
            </p>

            <div class="nastco-kpi-grid">
                <?php foreach ( $current['metrics'] as $metric ) : ?>
                    <div class="nastco-kpi-box">
                        <div class="nastco-kpi-val"><?php echo esc_html( $metric['value'] ); ?></div>
                        <div class="nastco-kpi-lbl"><?php echo esc_html( $metric['label'] ); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>

        <!-- Specialized Laboratories & Infrastructure -->
        <h2 class="nastco-section-heading">
            <span>🔬 Specialized Laboratories &amp; Sovereign Testbeds</span>
        </h2>

        <section class="nastco-labs-grid">
            <?php foreach ( $current['labs'] as $lab ) : ?>
                <article class="nastco-lab-card">
                    <div>
                        <span class="nastco-lab-status"><?php echo esc_html( $lab['status'] ); ?></span>
                        <h3><?php echo esc_html( $lab['name'] ); ?></h3>
                        <p><?php echo esc_html( $lab['desc'] ); ?></p>
                    </div>
                    <div class="nastco-lab-actions">
                        <a href="<?php echo esc_url( home_url( '/services/?centre=' . $slug ) ); ?>" class="nastco-btn-3d nastco-btn-primary">
                            Request Lab Access &#8594;
                        </a>
                        <a href="<?php echo esc_url( home_url( '/about/#executive-dispatch' ) ); ?>" class="nastco-btn-3d nastco-btn-outline">
                            Dispatch Director
                        </a>
                    </div>
                </article>
            <?php endforeach; ?>
        </section>

    </div>
</main>

<?php
get_footer();
