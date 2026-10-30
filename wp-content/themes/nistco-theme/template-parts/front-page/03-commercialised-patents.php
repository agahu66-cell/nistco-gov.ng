<?php
/**
 * NASTCO Portal — Step 4: High-Impact Commercialised Patents
 */
defined( 'ABSPATH' ) || exit;

$patents = array(
    array(
        'num'    => 'NG/PT/2026/014',
        'title'  => 'Direct DC-to-DC Solar Microgrid Controller & GEL/LFP Telemetry BMS',
        'sector' => 'Clean Energy & Telecom Infrastructure',
        'impact' => 'Eliminates AC conversion losses for high-voltage server racks.',
        'rev'    => '₦142.8M Royalty Yield',
        'status' => 'NOTAP REGISTERED & LICENSED',
        'color'  => '#facc15',
    ),
    array(
        'num'    => 'NG/PT/2026/029',
        'title'  => 'Multiplex Pathogen Diagnostic Kit & Drought-Resilient Seed Strain',
        'sector' => 'Agro-Biotechnology & Food Security',
        'impact' => 'Field-deployable assay with 480 genomes/month yield.',
        'rev'    => '₦188.5M Commercial Equity',
        'status' => 'COMMERCIALIZED IN 12 STATES',
        'color'  => '#10b981',
    ),
    array(
        'num'    => 'NG/PT/2026/042',
        'title'  => 'Stochastic Pipeline Leak Detection & National Grid Digital Twin',
        'sector' => 'Multi-Physics HPC Simulation & Energy',
        'impact' => 'Real-time finite element anomaly detection across pipelines.',
        'rev'    => '₦210.2M Joint Venture Revenue',
        'status' => 'DEPLOYED TO NATIONAL GRID',
        'color'  => '#38bdf8',
    ),
);
?>

<section id="step4-commercialised-patents-section" style="padding: 4.5rem 1.5rem; background: linear-gradient(180deg, #040914 0%, #071226 100%); color: #f8fafc;">
    <div style="max-width: 1360px; margin: 0 auto;">
        <div style="margin-bottom: 2.25rem; text-align: center;">
            <span style="display:inline-block; padding:0.38rem 0.95rem; border-radius:999px; background:rgba(250,204,21,0.12); border:1px solid rgba(250,204,21,0.35); color:#facc15; font-size:0.72rem; font-weight:800; letter-spacing:0.08em; text-transform:uppercase;">
                📜 NOTAP REGISTERED INTELLECTUAL PROPERTY
            </span>
            <h2 style="font-size:clamp(1.8rem, 3vw, 2.5rem); font-weight:900; margin:0.6rem 0 0; color:#fff;">High-Impact Commercialised Patents</h2>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(340px, 1fr)); gap:1.75rem;">
            <?php foreach ( $patents as $p ) : ?>
                <div style="background:rgba(12,22,44,0.92); border:1px solid rgba(255,255,255,0.1); border-left:4px solid <?php echo esc_attr( $p['color'] ); ?>; border-radius:18px; padding:1.85rem; display:flex; flex-direction:column; justify-content:space-between; box-shadow:0 20px 45px rgba(0,0,0,0.65);">
                    <div>
                        <div style="font-size:0.72rem; font-weight:900; color:<?php echo esc_attr( $p['color'] ); ?>; font-family:monospace; margin-bottom:0.3rem;">
                            PATENT <?php echo esc_html( $p['num'] ); ?>
                        </div>
                        <h3 style="font-size:1.15rem; font-weight:800; color:#fff; margin:0 0 0.5rem; line-height:1.35;"><?php echo esc_html( $p['title'] ); ?></h3>
                        <div style="font-size:0.78rem; font-weight:700; color:#94a3b8; margin-bottom:0.85rem;">
                            🏢 Industry Sector: <span style="color:#e2e8f0;"><?php echo esc_html( $p['sector'] ); ?></span>
                        </div>
                        <p style="font-size:0.84rem; color:#cbd5e1; margin:0 0 1.25rem; line-height:1.55;"><?php echo esc_html( $p['impact'] ); ?></p>
                    </div>

                    <div style="display:flex; justify-content:space-between; align-items:center; background:rgba(4,9,20,0.8); border:1px solid rgba(255,255,255,0.08); padding:0.75rem 1rem; border-radius:12px;">
                        <div>
                            <div style="font-size:0.68rem; color:#94a3b8; font-weight:700;">REVENUE GENERATED</div>
                            <div style="font-size:1.05rem; font-weight:900; color:<?php echo esc_attr( $p['color'] ); ?>;"><?php echo esc_html( $p['rev'] ); ?></div>
                        </div>
                        <span style="font-size:0.68rem; font-weight:900; color:#10b981; background:rgba(16,185,129,0.15); border:1px solid rgba(16,185,129,0.3); padding:0.25rem 0.55rem; border-radius:6px;">
                            <?php echo esc_html( $p['status'] ); ?>
                        </span>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
