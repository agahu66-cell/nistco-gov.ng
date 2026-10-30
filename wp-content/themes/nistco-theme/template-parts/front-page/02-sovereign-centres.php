<?php
/**
 * NASTCO Portal — Step 2: Sovereign Scientific & Engineering Centres
 */
defined( 'ABSPATH' ) || exit;

$centres_data = array(
    'amsarc' => array(
        'code'   => 'AMSARC',
        'name'   => 'Applied Mathematics & Simulation Advanced Research Centre',
        'desc'   => 'High-performance computing, mathematical modeling, finite-element numerical simulation, and digital twin architectures.',
        'achieve'=> '1.4 PFLOPS HPC • 99.94% Grid Twin Uptime',
        'accent' => '#38bdf8',
        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 7h6m0 10v-3m-3 3h.01M9 17h.01M9 14h.01M12 14h.01M15 11h.01M12 11h.01M9 11h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z"/>',
    ),
    'barc' => array(
        'code'   => 'BARC',
        'name'   => 'Biotechnology Advanced Research Centre',
        'desc'   => 'BSL-3 bio-containment, molecular plant genetics, high-throughput pathogen assays, and bio-fortified agricultural seeds.',
        'achieve'=> 'BSL-3 Certified • 480 Genomes/Month',
        'accent' => '#10b981',
        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>',
    ),
    'carc' => array(
        'code'   => 'CARC',
        'name'   => 'Chemistry Advanced Research Centre',
        'desc'   => 'ISO/IEC 17025 accredited analytical spectroscopy, solid mineral beneficiation, and organic synthesis labs.',
        'achieve'=> 'ISO/IEC 17025 • 99.4% Purity Lithium',
        'accent' => '#f59e0b',
        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z"/>',
    ),
    'parc' => array(
        'code'   => 'PARC',
        'name'   => 'Physics Advanced Research Centre',
        'desc'   => 'Thin-film semiconductor fabrication, laser photonics, space weather sensors, and condensed matter physics.',
        'achieve'=> 'Perovskite Cells • 22.4% PV Efficiency',
        'accent' => '#a855f7',
        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
    ),
    'aepc' => array(
        'code'   => 'AEPC',
        'name'   => 'Advanced Electric Power Centre',
        'desc'   => 'Direct-DC solar microgrids, MPPT lithium/GEL battery telemetry, and zero-inverter-loss power distribution.',
        'achieve'=> '96.8% Direct-DC Efficiency • 4.5 MW Grid',
        'accent' => '#facc15',
        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
    ),
    'ntc' => array(
        'code'   => 'NTC',
        'name'   => 'Nuclear Technology Centre',
        'desc'   => 'IAEA/NNRA safeguards tier-1 gamma irradiation facility for food preservation, medical sterilization, and dosimetry.',
        'achieve'=> 'IAEA Tier-1 • 120 Tons/Week Gamma',
        'accent' => '#ef4444',
        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>',
    ),
);
?>
<style id="nastco-arch-step2-css">
    .nastco-centres-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(360px, 1fr));
        gap: 1.75rem;
    }
    .nastco-centre-card-3d {
        background: linear-gradient(150deg, rgba(12, 22, 44, 0.95), rgba(4, 9, 20, 0.98));
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-top: 4px solid var(--c-accent, #38bdf8);
        border-radius: 20px;
        padding: 1.85rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.7);
        transition: transform 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease;
    }
    .nastco-centre-card-3d:hover {
        transform: translateY(-6px) scale(1.01);
        border-color: var(--c-accent, #38bdf8);
        box-shadow: 0 30px 60px rgba(0,0,0,0.85);
    }
    .nastco-icon-box {
        width: 52px; height: 52px; border-radius: 12px;
        background: rgba(255,255,255,0.05); border: 1px solid var(--c-accent, #38bdf8);
        display: flex; align-items: center; justify-content: center;
        color: var(--c-accent, #38bdf8); margin-bottom: 1rem;
    }
    .nastco-icon-box svg { width: 28px; height: 28px; fill: none; stroke: currentColor; }
</style>

<section id="step2-sovereign-centres-section" style="padding: 4.5rem 1.5rem; background: #040914; color: #f8fafc;">
    <div style="max-width: 1360px; margin: 0 auto;">
        <div style="margin-bottom: 2.25rem; text-align: center;">
            <span style="display:inline-block; padding:0.38rem 0.95rem; border-radius:999px; background:rgba(56,189,248,0.12); border:1px solid rgba(56,189,248,0.35); color:#38bdf8; font-size:0.72rem; font-weight:800; letter-spacing:0.08em; text-transform:uppercase;">
                🔬 SHEDA SCIENCE CITY COMMAND
            </span>
            <h2 style="font-size:clamp(1.8rem, 3vw, 2.5rem); font-weight:900; margin:0.6rem 0 0; color:#fff;">Six Sovereign Scientific &amp; Engineering Centres</h2>
        </div>

        <div class="nastco-centres-grid">
            <?php foreach ( $centres_data as $slug => $c ) : ?>
                <article class="nastco-centre-card-3d" style="--c-accent: <?php echo esc_attr( $c['accent'] ); ?>;">
                    <div>
                        <div style="display:flex; justify-content:space-between; align-items:center;">
                            <div class="nastco-icon-box">
                                <svg><?php echo $c['svg']; ?></svg>
                            </div>
                            <span style="font-size:0.7rem; font-weight:900; color:<?php echo esc_attr( $c['accent'] ); ?>; background:rgba(255,255,255,0.05); padding:0.2rem 0.55rem; border-radius:6px; border:1px solid <?php echo esc_attr( $c['accent'] ); ?>;">
                                <?php echo esc_html( $c['code'] ); ?>
                            </span>
                        </div>
                        <h3 style="font-size:1.15rem; font-weight:800; color:#fff; margin:0.4rem 0 0.5rem; line-height:1.35;"><?php echo esc_html( $c['name'] ); ?></h3>
                        <p style="font-size:0.84rem; color:#94a3b8; margin:0 0 1rem; line-height:1.55;"><?php echo esc_html( $c['desc'] ); ?></p>
                        <div style="font-size:0.75rem; font-weight:800; color:#10b981; background:rgba(16,185,129,0.1); border:1px solid rgba(16,185,129,0.25); padding:0.4rem 0.7rem; border-radius:8px; margin-bottom:1.25rem;">
                            🏆 <?php echo esc_html( $c['achieve'] ); ?>
                        </div>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>" style="display:inline-flex; align-items:center; justify-content:center; gap:0.4rem; padding:0.7rem 1.1rem; border-radius:10px; background:<?php echo esc_attr( $c['accent'] ); ?>; color:#040914; font-weight:900; font-size:0.8rem; text-decoration:none; transition:transform 0.2s ease;">
                        <span>Explore <?php echo esc_html( $c['code'] ); ?> Command Hub &#8594;</span>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
