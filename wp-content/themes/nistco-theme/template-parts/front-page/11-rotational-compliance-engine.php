<?php
/**
 * NASTCO Portal — Section 11: 3D Rotational Compliance Engine
 */
defined( 'ABSPATH' ) || exit;

$compliance_items = array(
    array(
        'title'  => 'ISO/IEC 17025 Laboratory Accreditation',
        'badge'  => 'ISO 17025 VERIFIED',
        'status' => 'ACTIVE & VALIDATED',
        'inst'   => 'International Organization for Standardization',
        'detail' => 'Analytical Spectroscopy & Bio-Diagnostics',
        'color'  => '#10b981',
        'icon'   => '✅',
    ),
    array(
        'title'  => 'IAEA Nuclear Radiation Safeguards',
        'badge'  => 'TIER-1 SAFEGUARD',
        'status' => 'INSPECTED Q3 2026',
        'inst'   => 'International Atomic Energy Agency (Vienna)',
        'detail' => 'Gamma Facility Dosimetry & Shielding',
        'color'  => '#ef4444',
        'icon'   => '🛡️',
    ),
    array(
        'title'  => 'NOTAP Patent & IP Registry',
        'badge'  => 'NOTAP CERTIFIED',
        'status' => '100% REGISTRATION',
        'inst'   => 'National Office for Tech Acquisition',
        'detail' => '40/35/25 Statutory Royalty Formula',
        'color'  => '#facc15',
        'icon'   => '🏆',
    ),
    array(
        'title'  => 'PPA 2007 Fiscal Procurement Governance',
        'badge'  => 'PPA 2007 CLEARED',
        'status' => 'AUDIT PASSED',
        'inst'   => 'Federal Public Procurement Authority',
        'detail' => 'Capital Infrastructure Transparency',
        'color'  => '#38bdf8',
        'icon'   => '📊',
    ),
    array(
        'title'  => 'FCSC & Civil Service Quality Assurance',
        'badge'  => 'FCSC MERIT RATED',
        'status' => 'EXCELLENCE RATED',
        'inst'   => 'Federal Civil Service Commission',
        'detail' => 'Institutional Merit & Cadre Governance',
        'color'  => '#a855f7',
        'icon'   => '🔒',
    ),
);
?>
<style id="nastco-rotational-compliance-css">
    .nastco-engine-sec {
        padding: 5rem 1.5rem;
        background: radial-gradient(circle at 50% 50%, rgba(16, 185, 129, 0.12) 0%, rgba(3, 7, 18, 0.98) 70%),
                    #030712;
        color: #f8fafc;
        border-top: 1px solid rgba(250, 204, 21, 0.28);
        overflow: hidden;
    }
    .nastco-engine-container {
        max-width: 1380px;
        margin: 0 auto;
    }
    .nastco-engine-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
        gap: 1.75rem;
        margin-top: 2.5rem;
    }
    .nastco-compliance-card-3d {
        background: linear-gradient(155deg, rgba(12, 22, 44, 0.94), rgba(4, 9, 20, 0.98));
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-top: 4px solid var(--comp-color, #10b981);
        border-radius: 20px;
        padding: 1.75rem;
        box-shadow: 0 20px 45px rgba(0,0,0,0.75), inset 0 1px 0 rgba(255,255,255,0.15);
        transition: transform 0.35s cubic-bezier(0.16, 1, 0.3, 1), box-shadow 0.35s ease;
    }
    .nastco-compliance-card-3d:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 30px 65px rgba(0, 0, 0, 0.88), 0 0 25px var(--comp-color, #10b981);
    }
    .nastco-comp-icon-box {
        font-size: 2rem;
        margin-bottom: 0.75rem;
    }
    .nastco-comp-badge {
        display: inline-block;
        padding: 0.22rem 0.6rem;
        border-radius: 6px;
        font-size: 0.68rem;
        font-weight: 900;
        letter-spacing: 0.08em;
        background: rgba(255, 255, 255, 0.06);
        color: var(--comp-color, #10b981);
        border: 1px solid var(--comp-color, #10b981);
        margin-bottom: 0.75rem;
    }
</style>

<section class="nastco-engine-sec" id="rotational-compliance-engine">
    <div class="nastco-engine-container">
        <div style="text-align: center;">
            <span style="display:inline-block; padding:0.38rem 0.95rem; border-radius:999px; background:rgba(16,185,129,0.12); border:1px solid rgba(16,185,129,0.35); color:#10b981; font-size:0.72rem; font-weight:800; letter-spacing:0.08em; text-transform:uppercase;">
                🛡️ 3D ROTATIONAL COMPLIANCE &amp; ACCREDITATION ENGINE
            </span>
            <h2 style="font-size:clamp(1.8rem, 3vw, 2.6rem); font-weight:900; margin:0.6rem 0 0; color:#fff;">Institutional Ratings &amp; Verified Compliance Tags</h2>
        </div>

        <div class="nastco-engine-grid">
            <?php foreach ( $compliance_items as $item ) : ?>
                <article class="nastco-compliance-card-3d" style="--comp-color: <?php echo esc_attr( $item['color'] ); ?>;">
                    <div class="nastco-comp-icon-box"><?php echo $item['icon']; ?></div>
                    <span class="nastco-comp-badge"><?php echo esc_html( $item['badge'] ); ?></span>
                    <h3 style="font-size:1.1rem; font-weight:900; color:#fff; margin:0 0 0.35rem; line-height:1.3;"><?php echo esc_html( $item['title'] ); ?></h3>
                    <div style="font-size:0.78rem; color:#94a3b8; font-weight:700; margin-bottom:0.85rem;"><?php echo esc_html( $item['inst'] ); ?></div>
                    <div style="font-size:0.72rem; font-weight:800; color:#34d399; background:rgba(16,185,129,0.1); padding:0.4rem 0.65rem; border-radius:8px; display:flex; justify-content:space-between;">
                        <span>✔ <?php echo esc_html( $item['status'] ); ?></span>
                        <span style="color:#94a3b8;"><?php echo esc_html( $item['detail'] ); ?></span>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
