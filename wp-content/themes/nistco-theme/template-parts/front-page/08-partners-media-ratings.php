<?php
/**
 * NASTCO Portal — Step 8: Infinite Partners, Step 9: Media Briefings, Step 10: Animated Ratings Carousel
 */
defined( 'ABSPATH' ) || exit;

$partners = array(
    array( 'code' => 'NOTAP',   'name' => 'Technology Acquisition & Promotion', 'cat' => 'Regulatory Agencies',      'color' => '#10b981' ),
    array( 'code' => 'IAEA',    'name' => 'Atomic Energy Agency (Vienna)',       'cat' => 'International Bodies',     'color' => '#38bdf8' ),
    array( 'code' => 'NNRA',    'name' => 'Nuclear Regulatory Authority',        'cat' => 'Regulatory Agencies',      'color' => '#ef4444' ),
    array( 'code' => 'NASENI',  'name' => 'Science & Engineering Infra',         'cat' => 'Government Institutions',  'color' => '#facc15' ),
    array( 'code' => 'NITDA',   'name' => 'Information Tech Dev Agency',         'cat' => 'Government Institutions',  'color' => '#a855f7' ),
    array( 'code' => 'TETFund', 'name' => 'Tertiary Education Trust Fund',       'cat' => 'Research Bodies',          'color' => '#f59e0b' ),
    array( 'code' => 'SON',     'name' => 'Standards Organisation of Nigeria',   'cat' => 'Regulatory Agencies',      'color' => '#22d3ee' ),
);

$ratings_badges = array(
    array(
        'title'  => 'ISO/IEC 17025 Certified',
        'status' => 'Verified Active (2026)',
        'inst'   => 'International Organization for Standardization',
        'date'   => 'Valid through 2029',
        'score'  => '99.4% Analytical',
        'color'  => '#10b981',
        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>',
    ),
    array(
        'title'  => 'IAEA & NNRA Safeguards',
        'status' => 'Tier-1 Certified',
        'inst'   => 'International Atomic Energy Agency',
        'date'   => 'Inspected Q3 2026',
        'score'  => '99.98% Dosimetry',
        'color'  => '#ef4444',
        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
    ),
    array(
        'title'  => 'PPA 2007 & NOTAP Compliant',
        'status' => '100% Audit Cleared',
        'inst'   => 'Federal Republic of Nigeria Fiscal Audit',
        'date'   => 'Statutory 2026 Audit',
        'score'  => '40/35/25 Split Verified',
        'color'  => '#facc15',
        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/>',
    ),
    array(
        'title'  => 'Tier-IV HPC Uptime Rating',
        'status' => 'SLA Guarantee Active',
        'inst'   => 'AMSARC Multi-Physics Supercomputing',
        'date'   => 'Live 2026 Monitoring',
        'score'  => '99.94% Twin Uptime',
        'color'  => '#38bdf8',
        'svg'    => '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>',
    ),
);
?>

<style id="nastco-step8-9-10-css">
    .nastco-infinite-carousel {
        overflow: hidden; display: flex; gap: 1.5rem; position: relative;
        padding: 1rem 0;
    }
    .nastco-infinite-track {
        display: flex; gap: 1.5rem; animation: nastcoScroll 25s linear infinite;
    }
    .nastco-infinite-carousel:hover .nastco-infinite-track { animation-play-state: paused; }
    @keyframes nastcoScroll { 0% { transform: translateX(0); } 100% { transform: translateX(-50%); } }

    .nastco-partner-box {
        min-width: 240px; background: rgba(12,22,44,0.85); border: 1px solid rgba(255,255,255,0.1);
        border-radius: 14px; padding: 1.25rem; filter: grayscale(80%); transition: all 0.3s ease;
    }
    .nastco-partner-box:hover { filter: grayscale(0%); transform: translateY(-4px); border-color: var(--p-color, #38bdf8); }

    .nastco-rating-badge-card {
        min-width: 310px; background: rgba(12,22,44,0.92); border: 1px solid rgba(255,255,255,0.1);
        border-top: 4px solid var(--r-color, #10b981); border-radius: 18px; padding: 1.5rem;
        box-shadow: 0 18px 40px rgba(0,0,0,0.65); transition: transform 0.3s ease;
    }
    .nastco-rating-badge-card:hover { transform: translateY(-5px); }
</style>

<div style="background:#040914; color:#f8fafc; padding: 4.5rem 1.5rem;">
    <div style="max-width: 1360px; margin: 0 auto; display:flex; flex-direction:column; gap:4.5rem;">

        <!-- STEP 8: Strategic Institutional & Regulatory Partners -->
        <div id="step8-institutional-partners-section">
            <div style="margin-bottom: 1.75rem;">
                <span style="display:inline-block; padding:0.38rem 0.95rem; border-radius:999px; background:rgba(250,204,21,0.12); border:1px solid rgba(250,204,21,0.35); color:#facc15; font-size:0.72rem; font-weight:800; letter-spacing:0.08em; text-transform:uppercase;">
                    🤝 ENTERPRISE-STANDARD ALLIANCES
                </span>
                <h2 style="font-size:clamp(1.8rem, 3vw, 2.5rem); font-weight:900; margin:0.6rem 0 0; color:#fff;">Strategic Institutional &amp; Regulatory Partners</h2>
            </div>

            <div class="nastco-infinite-carousel">
                <div class="nastco-infinite-track">
                    <?php for ( $i = 0; $i < 2; $i++ ) : foreach ( $partners as $p ) : ?>
                        <div class="nastco-partner-box" style="--p-color: <?php echo esc_attr( $p['color'] ); ?>;">
                            <div style="font-size:1.2rem; font-weight:900; color:<?php echo esc_attr( $p['color'] ); ?>; font-family:monospace; margin-bottom:0.2rem;"><?php echo esc_html( $p['code'] ); ?></div>
                            <div style="font-size:0.82rem; font-weight:700; color:#fff; margin-bottom:0.5rem;"><?php echo esc_html( $p['name'] ); ?></div>
                            <span style="font-size:0.65rem; color:#94a3b8; font-weight:800; text-transform:uppercase; background:rgba(255,255,255,0.05); padding:0.2rem 0.5rem; border-radius:4px;"><?php echo esc_html( $p['cat'] ); ?></span>
                        </div>
                    <?php endforeach; endfor; ?>
                </div>
            </div>
        </div>

        <!-- STEP 9: NASTCO Media & Directorate Briefings Hub -->
        <div id="step9-media-briefings-section">
            <div style="margin-bottom: 1.75rem;">
                <span style="display:inline-block; padding:0.38rem 0.95rem; border-radius:999px; background:rgba(56,189,248,0.12); border:1px solid rgba(56,189,248,0.35); color:#38bdf8; font-size:0.72rem; font-weight:800; letter-spacing:0.08em; text-transform:uppercase;">
                    🎥 SOVEREIGN SCIENTIFIC BROADCAST
                </span>
                <h2 style="font-size:clamp(1.8rem, 3vw, 2.5rem); font-weight:900; margin:0.6rem 0 0; color:#fff;">NASTCO Media &amp; Directorate Briefings Hub</h2>
            </div>

            <div style="display:grid; grid-template-columns: 1.2fr 1fr; gap:2rem;">
                <div style="background:radial-gradient(circle at 50% 40%, rgba(56,189,248,0.2), rgba(4,9,20,0.98)); border:1px solid rgba(56,189,248,0.35); border-radius:20px; padding:2rem; min-height:360px; display:flex; flex-direction:column; justify-content:space-between;">
                    <div style="display:flex; justify-content:space-between; font-size:0.72rem; font-weight:800; color:#ef4444;">
                        <span>&#9679; LIVE DOCUMENTARY STREAM</span>
                        <span style="color:#38bdf8; font-family:monospace;">4K TELEMETRY</span>
                    </div>
                    <div style="text-align:center; padding:1.5rem 0;">
                        <button type="button" onclick="alert('Streaming Sheda Science City 4K Briefing...')" style="width:72px; height:72px; border-radius:50%; background:#facc15; border:none; color:#040914; font-size:1.6rem; font-weight:900; cursor:pointer; box-shadow:0 0 30px rgba(250,204,21,0.6);">&#9654;</button>
                    </div>
                    <div>
                        <h3 style="font-size:1.2rem; font-weight:900; color:#fff; margin:0 0 0.3rem;">Inside NASTCO: Six Specialized Research Directorates</h3>
                        <p style="font-size:0.84rem; color:#cbd5e1; margin:0;">Live laboratory walkthroughs across AMSARC, BARC, CARC, PARC, AEPC, and NTC at Sheda Science City.</p>
                    </div>
                </div>

                <div style="display:flex; flex-direction:column; gap:1rem;">
                    <div style="background:rgba(12,22,44,0.85); border:1px solid rgba(255,255,255,0.08); border-left:4px solid #38bdf8; border-radius:12px; padding:1rem;">
                        <div style="font-size:0.68rem; font-weight:800; color:#38bdf8; margin-bottom:0.25rem;">OCT 2026 • AMSARC HPC CLUSTER</div>
                        <h4 style="font-size:0.92rem; font-weight:800; color:#fff; margin:0 0 0.2rem;">1.4 PFLOPS Digital Twin Testbed Commissioned</h4>
                        <p style="font-size:0.78rem; color:#94a3b8; margin:0;">Multi-physics finite element simulation active for national grid optimization.</p>
                    </div>
                    <div style="background:rgba(12,22,44,0.85); border:1px solid rgba(255,255,255,0.08); border-left:4px solid #10b981; border-radius:12px; padding:1rem;">
                        <div style="font-size:0.68rem; font-weight:800; color:#10b981; margin-bottom:0.25rem;">OCT 2026 • BARC GENOMICS</div>
                        <h4 style="font-size:0.92rem; font-weight:800; color:#fff; margin:0 0 0.2rem;">BARC Expands BSL-3 Molecular Diagnostics</h4>
                        <p style="font-size:0.78rem; color:#94a3b8; margin:0;">High-throughput sequencing reaches 480 genomes/month capacity.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- STEP 10: Institutional Ratings & Verified Compliance Tags Carousel -->
        <div id="step10-compliance-ratings-section">
            <div style="margin-bottom: 1.75rem;">
                <span style="display:inline-block; padding:0.38rem 0.95rem; border-radius:999px; background:rgba(16,185,129,0.12); border:1px solid rgba(16,185,129,0.35); color:#10b981; font-size:0.72rem; font-weight:800; letter-spacing:0.08em; text-transform:uppercase;">
                    🏅 GLOBAL COMPLIANCE &amp; ACCREDITATION BADGES
                </span>
                <h2 style="font-size:clamp(1.8rem, 3vw, 2.5rem); font-weight:900; margin:0.6rem 0 0; color:#fff;">Institutional Ratings &amp; Verified Compliance Tags</h2>
            </div>

            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(290px, 1fr)); gap:1.5rem;">
                <?php foreach ( $ratings_badges as $rb ) : ?>
                    <article class="nastco-rating-badge-card" style="--r-color: <?php echo esc_attr( $rb['color'] ); ?>;">
                        <div style="display:flex; justify-content:space-between; align-items:center; margin-bottom:1rem;">
                            <div style="width:42px; height:42px; border-radius:10px; background:rgba(255,255,255,0.05); border:1px solid <?php echo esc_attr( $rb['color'] ); ?>; display:flex; align-items:center; justify-content:center; color:<?php echo esc_attr( $rb['color'] ); ?>;">
                                <svg style="width:24px; height:24px; fill:none; stroke:currentColor;"><?php echo $rb['svg']; ?></svg>
                            </div>
                            <span style="font-size:0.68rem; font-weight:900; color:<?php echo esc_attr( $rb['color'] ); ?>; background:rgba(255,255,255,0.05); padding:0.2rem 0.5rem; border-radius:6px; border:1px solid <?php echo esc_attr( $rb['color'] ); ?>;">
                                <?php echo esc_html( $rb['status'] ); ?>
                            </span>
                        </div>
                        <h3 style="font-size:1.05rem; font-weight:800; color:#fff; margin:0 0 0.35rem;"><?php echo esc_html( $rb['title'] ); ?></h3>
                        <div style="font-size:0.78rem; color:#94a3b8; margin-bottom:0.85rem; font-weight:600;"><?php echo esc_html( $rb['inst'] ); ?></div>
                        <div style="display:flex; justify-content:space-between; align-items:center; font-size:0.72rem; font-weight:800; color:#10b981; background:rgba(16,185,129,0.1); padding:0.4rem 0.65rem; border-radius:6px;">
                            <span>✔ <?php echo esc_html( $rb['score'] ); ?></span>
                            <span style="color:#94a3b8;"><?php echo esc_html( $rb['date'] ); ?></span>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>

    </div>
</div>
