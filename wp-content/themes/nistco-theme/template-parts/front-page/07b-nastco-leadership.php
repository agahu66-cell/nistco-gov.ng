<?php
/**
 * NASTCO Portal — Step 7: NASTCO Executive Leadership
 */
defined( 'ABSPATH' ) || exit;
$assets_uri = get_template_directory_uri() . '/assets/images';
?>

<section id="step7-nastco-leadership-section" style="padding: 4.5rem 1.5rem; background: linear-gradient(180deg, #040914 0%, #071226 100%); color: #f8fafc; border-bottom: 1px solid rgba(250,204,21,0.22);">
    <div style="max-width: 1360px; margin: 0 auto;">
        <div style="margin-bottom: 2.25rem; text-align: center;">
            <span style="display:inline-block; padding:0.38rem 0.95rem; border-radius:999px; background:rgba(250,204,21,0.12); border:1px solid rgba(250,204,21,0.35); color:#facc15; font-size:0.72rem; font-weight:800; letter-spacing:0.08em; text-transform:uppercase;">
                🛡️ EXECUTIVE COMMAND &amp; GOVERNANCE BOARD
            </span>
            <h2 style="font-size:clamp(1.8rem, 3vw, 2.5rem); font-weight:900; margin:0.6rem 0 0; color:#fff;">NASTCO Executive Leadership</h2>
        </div>

        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(420px, 1fr)); gap:2rem;">
            <!-- Chairman Board -->
            <div style="background:linear-gradient(150deg, rgba(12,22,44,0.95), rgba(4,9,20,0.98)); border:1px solid rgba(245,158,11,0.35); border-radius:20px; padding:2rem; box-shadow:0 20px 45px rgba(0,0,0,0.7);">
                <div style="display:flex; gap:1.25rem; align-items:center; margin-bottom:1.25rem;">
                    <div style="width:90px; height:90px; border-radius:50%; border:3px solid #f59e0b; overflow:hidden; background:#000; flex-shrink:0;">
                        <img src="<?php echo esc_url( $assets_uri . '/nastco-board-chair.jpg' ); ?>" alt="Chairman NASTCO Board" style="width:100%; height:100%; object-fit:cover;" onerror="this.style.display='none'; this.parentNode.innerText='CHAIR';">
                    </div>
                    <div>
                        <span style="font-size:0.68rem; font-weight:900; color:#f59e0b; background:rgba(245,158,11,0.15); border:1px solid rgba(245,158,11,0.3); padding:0.2rem 0.55rem; border-radius:6px;">
                            GOVERNING BOARD
                        </span>
                        <h3 style="font-size:1.15rem; font-weight:900; color:#fff; margin:0.4rem 0 0.15rem;">Chairman, NASTCO Governing Board</h3>
                        <div style="font-size:0.78rem; color:#94a3b8; font-weight:700;">National Science and Technology Complex</div>
                    </div>
                </div>
                <blockquote style="font-size:0.88rem; line-height:1.65; color:#cbd5e1; margin:0; padding-left:0.85rem; border-left:3px solid #f59e0b;">
                    "Safeguarding researcher incentives under the 40% / 35% / 25% statutory royalty split formula and approving public-private commercial venture clearances."
                </blockquote>
            </div>

            <!-- DG/CEO -->
            <div style="background:linear-gradient(150deg, rgba(12,22,44,0.95), rgba(4,9,20,0.98)); border:1px solid rgba(34,211,238,0.35); border-radius:20px; padding:2rem; box-shadow:0 20px 45px rgba(0,0,0,0.7);">
                <div style="display:flex; gap:1.25rem; align-items:center; margin-bottom:1.25rem;">
                    <div style="width:90px; height:90px; border-radius:50%; border:3px solid #22d3ee; overflow:hidden; background:#000; flex-shrink:0;">
                        <img src="<?php echo esc_url( $assets_uri . '/nastco-dg-ceo.jpg' ); ?>" alt="DG / CEO NASTCO" style="width:100%; height:100%; object-fit:cover;" onerror="this.style.display='none'; this.parentNode.innerText='DG/CEO';">
                    </div>
                    <div>
                        <span style="font-size:0.68rem; font-weight:900; color:#22d3ee; background:rgba(34,211,238,0.15); border:1px solid rgba(34,211,238,0.3); padding:0.2rem 0.55rem; border-radius:6px;">
                            CHIEF EXECUTIVE OFFICER
                        </span>
                        <h3 style="font-size:1.15rem; font-weight:900; color:#fff; margin:0.4rem 0 0.15rem;">Director-General / CEO</h3>
                        <div style="font-size:0.78rem; color:#94a3b8; font-weight:700;">National Science and Technology Complex</div>
                    </div>
                </div>
                <blockquote style="font-size:0.88rem; line-height:1.65; color:#cbd5e1; margin:0; padding-left:0.85rem; border-left:3px solid #22d3ee;">
                    "Directing scientific operations across Sheda Science City—integrating AMSARC, BARC, CARC, PARC, AEPC, and NTC into a unified sovereign innovation engine."
                </blockquote>
            </div>
        </div>
    </div>
</section>
