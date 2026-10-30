<?php
/**
 * NASTCO Portal — Step 5: FMST Leadership Governance Section
 */
defined( 'ABSPATH' ) || exit;
$assets_uri = get_template_directory_uri() . '/assets/images';
?>

<section id="step5-fmst-leadership-section" style="padding: 4.5rem 1.5rem; background: #040914; color: #f8fafc; border-bottom: 1px solid rgba(250,204,21,0.22);">
    <div style="max-width: 1360px; margin: 0 auto;">
        <div style="margin-bottom: 2.25rem; text-align: center;">
            <span style="display:inline-block; padding:0.38rem 0.95rem; border-radius:999px; background:rgba(56,189,248,0.12); border:1px solid rgba(56,189,248,0.35); color:#38bdf8; font-size:0.72rem; font-weight:800; letter-spacing:0.08em; text-transform:uppercase;">
                🏛️ MINISTERIAL EXECUTIVE OVERVIEW
            </span>
            <h2 style="font-size:clamp(1.8rem, 3vw, 2.5rem); font-weight:900; margin:0.6rem 0 0; color:#fff;">Federal Ministry of Science, Technology &amp; Innovation Leadership</h2>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(420px, 1fr)); gap:2rem;">
            <!-- HM-FMST -->
            <div style="background:linear-gradient(150deg, rgba(12,22,44,0.95), rgba(4,9,20,0.98)); border:1px solid rgba(56,189,248,0.35); border-radius:20px; padding:2rem; box-shadow:0 20px 45px rgba(0,0,0,0.7);">
                <div style="display:flex; gap:1.25rem; align-items:center; margin-bottom:1.25rem;">
                    <div style="width:90px; height:90px; border-radius:50%; border:3px solid #38bdf8; overflow:hidden; background:#000; flex-shrink:0;">
                        <img src="<?php echo esc_url( $assets_uri . '/fmst-minister.jpg' ); ?>" alt="Honourable Minister FMST" style="width:100%; height:100%; object-fit:cover;" onerror="this.style.display='none'; this.parentNode.innerText='HM';">
                    </div>
                    <div>
                        <span style="font-size:0.68rem; font-weight:900; color:#38bdf8; background:rgba(56,189,248,0.15); border:1px solid rgba(56,189,248,0.3); padding:0.2rem 0.55rem; border-radius:6px;">
                            MINISTERIAL PORTFOLIO
                        </span>
                        <h3 style="font-size:1.15rem; font-weight:900; color:#fff; margin:0.4rem 0 0.15rem;">Honourable Minister of FMST</h3>
                        <div style="font-size:0.78rem; color:#94a3b8; font-weight:700;">Federal Ministry of Science, Technology &amp; Innovation</div>
                    </div>
                </div>
                <blockquote style="font-size:0.88rem; line-height:1.65; color:#cbd5e1; margin:0; padding-left:0.85rem; border-left:3px solid #38bdf8;">
                    "Driving national lab-to-market commercialisation, indigenous technology transfers, and high-impact patent registration across all six NASTCO Research Directorates."
                </blockquote>
            </div>

            <!-- PS-FMST -->
            <div style="background:linear-gradient(150deg, rgba(12,22,44,0.95), rgba(4,9,20,0.98)); border:1px solid rgba(168,85,247,0.35); border-radius:20px; padding:2rem; box-shadow:0 20px 45px rgba(0,0,0,0.7);">
                <div style="display:flex; gap:1.25rem; align-items:center; margin-bottom:1.25rem;">
                    <div style="width:90px; height:90px; border-radius:50%; border:3px solid #a855f7; overflow:hidden; background:#000; flex-shrink:0;">
                        <img src="<?php echo esc_url( $assets_uri . '/fmst-permsec.jpg' ); ?>" alt="Permanent Secretary FMST" style="width:100%; height:100%; object-fit:cover;" onerror="this.style.display='none'; this.parentNode.innerText='PS';">
                    </div>
                    <div>
                        <span style="font-size:0.68rem; font-weight:900; color:#a855f7; background:rgba(168,85,247,0.15); border:1px solid rgba(168,85,247,0.3); padding:0.2rem 0.55rem; border-radius:6px;">
                            ACCOUNTING OFFICER
                        </span>
                        <h3 style="font-size:1.15rem; font-weight:900; color:#fff; margin:0.4rem 0 0.15rem;">Permanent Secretary, FMST</h3>
                        <div style="font-size:0.78rem; color:#94a3b8; font-weight:700;">Federal Ministry of Science, Technology &amp; Innovation</div>
                    </div>
                </div>
                <blockquote style="font-size:0.88rem; line-height:1.65; color:#cbd5e1; margin:0; padding-left:0.85rem; border-left:3px solid #a855f7;">
                    "Enforcing institutional process integrity, public procurement compliance, civil service standards, and continuous digital telemetry upgrades at Sheda Science City."
                </blockquote>
            </div>
        </div>
    </div>
</section>
