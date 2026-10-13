<?php
/**
 * Template Name: NISTCO Hero Section Master
 * Isolated hero section template featuring 3 connected gears and 3D orbitals.
 */

get_header();
?>

<!-- Isolated Hero Section Styling -->
<style>
.nistco-main { background: #f8fafc; color: #1e293b; font-family: system-ui, -apple-system, sans-serif; overflow-x: hidden; }
.nistco-hero-section {
    background: linear-gradient(135deg, #021a10 0%, #042416 50%, #0d3822 100%);
    color: #ffffff;
    padding: 6rem 2rem;
    min-height: 85vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
}
.nistco-hero-ambient-1 { position: absolute; top: -100px; right: -100px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(217,119,6,0.18) 0%, transparent 70%); border-radius: 50%; pointer-events: none; }
.nistco-hero-ambient-2 { position: absolute; bottom: -150px; left: -150px; width: 600px; height: 600px; background: radial-gradient(circle, rgba(16,185,129,0.15) 0%, transparent 70%); border-radius: 50%; pointer-events: none; }
.nistco-container { max-width: 1440px; margin: 0 auto; position: relative; z-index: 2; width: 100%; }
.nistco-hero-grid { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 4rem; align-items: center; }
@media (max-width: 992px) { .nistco-hero-grid { grid-template-columns: 1fr; gap: 3rem; } }

.nistco-hero-badges { display: flex; gap: 0.75rem; margin-bottom: 1.5rem; flex-wrap: wrap; }
.nistco-pill { font-size: 0.75rem; font-weight: 800; text-transform: uppercase; padding: 0.35rem 0.85rem; border-radius: 50px; letter-spacing: 1px; }
.nistco-pill-green { background: #008751; color: #ffffff; }
.nistco-pill-gold { background: #d97706; color: #ffffff; }

.nistco-hero-title { font-size: clamp(2.5rem, 4.5vw, 3.75rem); font-weight: 800; line-height: 1.15; margin: 0 0 1.5rem 0; color: #ffffff; }
.nistco-hero-subtitle { font-size: 1.15rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 2rem; max-width: 640px; }

.nistco-hero-actions { display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 2.5rem; }
.nistco-btn { padding: 0.85rem 1.75rem; border-radius: 8px; font-weight: 700; font-size: 0.95rem; text-decoration: none; transition: all 0.2s ease; display: inline-flex; align-items: center; gap: 0.5rem; }
.nistco-btn-primary { background: #008751; color: #ffffff; box-shadow: 0 4px 14px rgba(0,135,81,0.4); }
.nistco-btn-primary:hover { background: #006c41; color: #fff; transform: translateY(-2px); }
.nistco-btn-gold { background: #d97706; color: #ffffff; box-shadow: 0 4px 14px rgba(217,119,6,0.4); }
.nistco-btn-gold:hover { background: #b45309; color: #fff; transform: translateY(-2px); }
.nistco-btn-secondary { background: rgba(255,255,255,0.08); color: #ffffff; border: 1px solid rgba(255,255,255,0.2); }
.nistco-btn-secondary:hover { background: rgba(255,255,255,0.15); color: #fff; transform: translateY(-2px); }

.nistco-centre-launchpad { background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 1.25rem; backdrop-filter: blur(10px); }
.launchpad-heading { display: block; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #fde047; letter-spacing: 1.2px; margin-bottom: 0.75rem; }
.launchpad-pills-row { display: flex; gap: 0.6rem; flex-wrap: wrap; }
.launchpad-pill { background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); padding: 0.45rem 0.85rem; border-radius: 6px; color: #ffffff; font-size: 0.85rem; font-weight: 600; text-decoration: none; display: flex; align-items: center; gap: 0.4rem; transition: all 0.2s; }
.launchpad-pill:hover { background: #008751; border-color: #008751; color: #fff; transform: translateY(-2px); }

/* 3 Connected Gears (Small, Medium, Large) & 3D Colorful Orbitals Animation */
@keyframes rotCW { from { transform: rotate(0deg); } to { transform: rotate(360deg); } }
@keyframes rotCCW { from { transform: rotate(0deg); } to { transform: rotate(-360deg); } }
.gear-motion-cw { transform-origin: center; animation: rotCW 20s linear infinite; }
.gear-motion-ccw { transform-origin: center; animation: rotCCW 14s linear infinite; }
.gear-motion-fast { transform-origin: center; animation: rotCW 8s linear infinite; }

@keyframes orbitalPath1 {
    0% { transform: rotate(0deg) translateX(95px) rotate(0deg); }
    100% { transform: rotate(360deg) translateX(95px) rotate(-360deg); }
}
@keyframes orbitalPath2 {
    0% { transform: rotate(0deg) translateX(140px) rotate(0deg); }
    100% { transform: rotate(-360deg) translateX(140px) rotate(360deg); }
}
.orbital-ring-1 { position: absolute; top: 50%; left: 50%; width: 190px; height: 190px; margin: -95px 0 0 -95px; border: 1.5px dashed rgba(56,189,248,0.5); border-radius: 50%; pointer-events: none; }
.orbital-ring-2 { position: absolute; top: 50%; left: 50%; width: 280px; height: 280px; margin: -140px 0 0 -140px; border: 1.5px dashed rgba(253,224,71,0.4); border-radius: 50%; pointer-events: none; }
.orbital-node-blue { position: absolute; top: 50%; left: 50%; width: 14px; height: 14px; margin: -7px 0 0 -7px; background: #38bdf8; border-radius: 50%; box-shadow: 0 0 16px #38bdf8, 0 0 25px #38bdf8; animation: orbitalPath1 6s linear infinite; }
.orbital-node-gold { position: absolute; top: 50%; left: 50%; width: 16px; height: 16px; margin: -8px 0 0 -8px; background: #fde047; border-radius: 50%; box-shadow: 0 0 16px #fde047, 0 0 25px #fde047; animation: orbitalPath2 10s linear infinite; }
.orbital-node-green { position: absolute; top: 50%; left: 50%; width: 12px; height: 12px; margin: -6px 0 0 -6px; background: #34d399; border-radius: 50%; box-shadow: 0 0 14px #34d399; animation: orbitalPath1 4.5s linear infinite reverse; }
</style>

<main class="nistco-main">

    <!-- ISOLATED HERO SECTION -->
    <section class="nistco-hero-section">
        <div class="nistco-hero-ambient-1"></div>
        <div class="nistco-hero-ambient-2"></div>
        
        <div class="nistco-container nistco-hero-grid">
            
            <!-- Left Column: Content & Mandate -->
            <div>
                <div class="nistco-hero-badges">
                    <span class="nistco-pill nistco-pill-green">FEDERAL REPUBLIC OF NIGERIA</span>
                    <span class="nistco-pill nistco-pill-gold">CHIEF PATRONAGE</span>
                </div>
                
                <h1 class="nistco-hero-title">
                    National Science & <br><span style="color: #fde047;">Technology Complex</span>
                </h1>
                
                <p class="nistco-hero-subtitle">
                    Nigeria's apex multidisciplinary centre of scientific excellence mandated to execute frontier basic and applied research, operate national demonstration pilot plants, and drive indigenous industrial transformation.
                </p>
                
                <div class="nistco-hero-actions">
                    <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="nistco-btn nistco-btn-primary">
                        Explore Research Centres &rarr;
                    </a>
                    <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" class="nistco-btn nistco-btn-gold">
                        Innovation & Patents
                    </a>
                    <a href="<?php echo esc_url( home_url( '/servicom/' ) ); ?>" class="nistco-btn nistco-btn-secondary">
                        Public Trustee Desk
                    </a>
                </div>

                <!-- Centre Quick Launchpad Dock -->
                <div class="nistco-centre-launchpad">
                    <span class="launchpad-heading">ADVANCED CENTRES & DIVISIONS</span>
                    <div class="launchpad-pills-row">
                        <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">⚡</span><span class="pill-code">AMSARC</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🧪</span><span class="pill-code">CARC</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🧬</span><span class="pill-code">BARC</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">☢️</span><span class="pill-code">NTC</span></a>
                    </div>
                </div>
            </div>

            <!-- Right Column: 3 Connected Gears (Small, Medium, Large) in Motion with 3D Orbitals -->
            <div style="display: flex; align-items: center; justify-content: center; position: relative; height: 440px;">
                <!-- 3D Colorful Orbitals -->
                <div class="orbital-ring-1"><div class="orbital-node-blue"></div></div>
                <div class="orbital-ring-2"><div class="orbital-node-gold"></div><div class="orbital-node-green"></div></div>

                <div style="width: 380px; height: 380px; position: relative; display: flex; align-items: center; justify-content: center; filter: drop-shadow(0 30px 60px rgba(0,0,0,0.85));">
                    <svg viewBox="0 0 220 220" style="width: 100%; height: 100%; overflow: visible;">
                        
                        <!-- Gear 1: Large Bronze/Gold Main Gear (CW) -->
                        <g class="gear-motion-cw" transform="translate(85, 110)">
                            <circle cx="0" cy="0" r="62" fill="none" stroke="#d97706" stroke-width="10" stroke-dasharray="12 6"/>
                            <circle cx="0" cy="0" r="48" fill="#042416" stroke="#fde047" stroke-width="2.5"/>
                            <path d="M0 -48 L0 48 M-48 0 L48 0 M-34 -34 L34 34 M-34 34 L34 -34" stroke="#d97706" stroke-width="3.5"/>
                            <circle cx="0" cy="0" r="14" fill="#f59e0b"/>
                        </g>

                        <!-- Gear 2: Medium Silver-Metallic Gear Interlocking Above-Right (CCW) -->
                        <g class="gear-motion-ccw" transform="translate(165, 55)">
                            <circle cx="0" cy="0" r="38" fill="none" stroke="#94a3b8" stroke-width="7" stroke-dasharray="9 4"/>
                            <circle cx="0" cy="0" r="28" fill="#042416" stroke="#cbd5e1" stroke-width="2"/>
                            <path d="M0 -28 L0 28 M-28 0 L28 0" stroke="#94a3b8" stroke-width="3"/>
                            <circle cx="0" cy="0" r="9" fill="#ffffff"/>
                        </g>

                        <!-- Gear 3: Small Copper Gear Interlocking Below-Right (Fast CW) -->
                        <g class="gear-motion-fast" transform="translate(155, 168)">
                            <circle cx="0" cy="0" r="24" fill="none" stroke="#b45309" stroke-width="6" stroke-dasharray="6 3"/>
                            <circle cx="0" cy="0" r="16" fill="#042416" stroke="#f59e0b" stroke-width="2"/>
                            <path d="M0 -16 L0 16 M-16 0 L16 0" stroke="#b45309" stroke-width="2.5"/>
                            <circle cx="0" cy="0" r="5" fill="#fde047"/>
                        </g>

                    </svg>
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
