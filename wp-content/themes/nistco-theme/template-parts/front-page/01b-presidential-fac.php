<?php
/**
 * NASTCO Portal — Step 1: Presidential Section & Step 3: FAC Section
 */
defined( 'ABSPATH' ) || exit;
$assets_uri = get_template_directory_uri() . '/assets/images';
?>
<style id="nastco-arch-step1-step3-css">
    .nastco-arch-sec {
        padding: 4rem 1.5rem;
        background: linear-gradient(180deg, #040914 0%, #071226 100%);
        color: #f8fafc;
        border-bottom: 1px solid rgba(250, 204, 21, 0.22);
    }
    .nastco-arch-container {
        max-width: 1360px;
        margin: 0 auto;
    }
    .nastco-arch-card {
        background: linear-gradient(145deg, rgba(13,23,46,0.95), rgba(4,9,20,0.98));
        border: 1px solid rgba(255,255,255,0.12);
        border-radius: 22px;
        padding: 2.5rem;
        box-shadow: 0 24px 55px rgba(0,0,0,0.75), inset 0 1px 0 rgba(255,255,255,0.15);
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .nastco-arch-card:hover { transform: translateY(-4px); }
    .nastco-arch-split { display: grid; grid-template-columns: 290px 1fr; gap: 2.5rem; align-items: center; }
    .nastco-arch-portrait {
        text-align: center; background: rgba(4,9,20,0.8);
        border: 2px solid var(--accent, #10b981); border-radius: 18px; padding: 1.25rem;
        box-shadow: 0 16px 35px rgba(0,0,0,0.6);
    }
    .nastco-arch-avatar {
        width: 140px; height: 140px; margin: 0 auto 1rem; border-radius: 50%;
        border: 3px solid var(--accent, #10b981); overflow: hidden;
        display: flex; align-items: center; justify-content: center;
        font-size: 2.2rem; font-weight: 900; color: var(--accent, #10b981); background: #000;
    }
    .nastco-arch-avatar img { width: 100%; height: 100%; object-fit: cover; }
    .nastco-arch-badge {
        display: inline-block; padding: 0.28rem 0.75rem; border-radius: 6px; font-size: 0.68rem;
        font-weight: 900; letter-spacing: 0.08em; background: rgba(255,255,255,0.06);
        color: var(--accent, #10b981); border: 1px solid var(--accent, #10b981); text-transform: uppercase;
    }
    .nastco-arch-title { font-size: clamp(1.5rem, 2.5vw, 2.2rem); font-weight: 900; color: #fff; margin: 0 0 0.85rem; line-height: 1.25; }
    .nastco-arch-quote { font-size: 0.98rem; line-height: 1.7; color: #cbd5e1; margin: 0 0 1.5rem; padding-left: 1rem; border-left: 3px solid var(--accent, #10b981); }
    .nastco-arch-btn {
        display: inline-flex; align-items: center; gap: 0.5rem; padding: 0.75rem 1.5rem; border-radius: 12px;
        background: linear-gradient(135deg, #facc15 0%, #eab308 100%); color: #040914 !important;
        font-size: 0.82rem; font-weight: 900; text-transform: uppercase; text-decoration: none;
        box-shadow: 0 8px 20px rgba(250,204,21,0.35); transition: transform 0.2s ease;
    }
    .nastco-arch-btn:hover { transform: translateY(-2px); }
    @media(max-width:900px) { .nastco-arch-split { grid-template-columns: 1fr; } }
</style>

<!-- STEP 1: Presidential Section -->
<section id="step1-presidential-section" class="nastco-arch-sec">
    <div class="nastco-arch-container">
        <div class="nastco-arch-card" style="--accent: #10b981; border-top: 4px solid #10b981;">
            <div class="nastco-arch-split">
                <div class="nastco-arch-portrait">
                    <div class="nastco-arch-avatar">
                        <img src="<?php echo esc_url( $assets_uri . '/president-portrait.jpg' ); ?>" alt="His Excellency, Bola Ahmed Tinubu, GCFR" onerror="this.style.display='none'; this.parentNode.innerText='GCFR';">
                    </div>
                    <span class="nastco-arch-badge">COMMANDER-IN-CHIEF • FGN</span>
                    <div style="font-weight:900; color:#fff; margin-top:0.6rem; font-size:1rem;">His Excellency, Bola Ahmed Tinubu, GCFR</div>
                    <div style="font-size:0.75rem; color:#94a3b8; font-weight:700;">President, Federal Republic of Nigeria</div>
                </div>
                <div>
                    <span style="display:inline-block; padding:0.35rem 0.85rem; border-radius:999px; background:rgba(16,185,129,0.12); border:1px solid rgba(16,185,129,0.35); color:#10b981; font-size:0.72rem; font-weight:800; letter-spacing:0.08em; text-transform:uppercase; margin-bottom:0.75rem;">
                        🇳🇬 PRESIDENTIAL SOVEREIGN STATEMENT
                    </span>
                    <h2 class="nastco-arch-title">Renewed Hope Agenda for Sovereign Scientific &amp; Industrial Self-Reliance</h2>
                    <blockquote class="nastco-arch-quote">
                        "Transforming Nigeria from a technology-consuming nation into a sovereign industrial innovator through high-performance computing, biotechnology, clean electric power, and peaceful nuclear applications anchored at Sheda Science City."
                    </blockquote>
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="nastco-arch-btn">
                        <span>Read Full Presidential Address &#8594;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- STEP 3: FAC Section -->
<section id="step3-fac-section" class="nastco-arch-sec" style="background:#020613;">
    <div class="nastco-arch-container">
        <div class="nastco-arch-card" style="--accent: #facc15; border-top: 4px solid #facc15;">
            <div class="nastco-arch-split">
                <div class="nastco-arch-portrait" style="--accent:#facc15;">
                    <div class="nastco-arch-avatar" style="--accent:#facc15;">
                        <img src="<?php echo esc_url( $assets_uri . '/fac-seal.jpg' ); ?>" alt="FAC Seal" onerror="this.style.display='none'; this.parentNode.innerText='FAC';">
                    </div>
                    <span class="nastco-arch-badge" style="--accent:#facc15;">STATUTORY GOVERNANCE</span>
                    <div style="font-weight:900; color:#fff; margin-top:0.6rem; font-size:1rem;">Federal Advisory &amp; Allocation Council</div>
                    <div style="font-size:0.75rem; color:#94a3b8; font-weight:700;">National Science &amp; Fiscal Governance</div>
                </div>
                <div>
                    <span style="display:inline-block; padding:0.35rem 0.85rem; border-radius:999px; background:rgba(250,204,21,0.12); border:1px solid rgba(250,204,21,0.35); color:#facc15; font-size:0.72rem; font-weight:800; letter-spacing:0.08em; text-transform:uppercase; margin-bottom:0.75rem;">
                        ⚖️ FAC INSTITUTIONAL OVERVIEW
                    </span>
                    <h2 class="nastco-arch-title">Strategic Fiscal Allocation &amp; Statutory Procurement Compliance</h2>
                    <blockquote class="nastco-arch-quote" style="--accent:#facc15;">
                        "Ensuring transparent fiscal allocation, inter-ministerial technical synergy, and strict compliance with Public Procurement Act (PPA 2007) guidelines across all six NASTCO Research Directorates."
                    </blockquote>
                    <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(180px,1fr)); gap:1rem;">
                        <div style="background:rgba(4,9,20,0.8); border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:0.85rem;">
                            <strong style="color:#facc15; display:block; font-size:0.88rem;">100% LiveLedger Audit</strong>
                            <span style="font-size:0.75rem; color:#94a3b8;">Real-time IGR &amp; Royalty Audit</span>
                        </div>
                        <div style="background:rgba(4,9,20,0.8); border:1px solid rgba(255,255,255,0.08); border-radius:12px; padding:0.85rem;">
                            <strong style="color:#facc15; display:block; font-size:0.88rem;">PPA 2007 Compliant</strong>
                            <span style="font-size:0.75rem; color:#94a3b8;">Statutory Capital Project Oversight</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
