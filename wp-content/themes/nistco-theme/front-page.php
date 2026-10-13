<?php
/**
 * Template Name: NISTCO Front Page (Modern Enterprise Master)
 * The modernized homepage template for NISTCO Portal
 */

get_header();
?>

<!-- Embedded Professional Styling for Enterprise Modern Hero & Layout -->
<style>
.nistco-main { background: #f8fafc; color: #1e293b; font-family: system-ui, -apple-system, sans-serif; overflow-x: hidden; }
.nistco-hero-section { background: linear-gradient(135deg, #021a10 0%, #042416 50%, #0d3822 100%); color: #ffffff; padding: 6rem 2rem; position: relative; overflow: hidden; }
.nistco-hero-ambient-1 { position: absolute; top: -100px; right: -100px; width: 500px; height: 500px; background: radial-gradient(circle, rgba(217,119,6,0.15) 0%, transparent 70%); border-radius: 50%; pointer-events: none; }
.nistco-hero-ambient-2 { position: absolute; bottom: -150px; left: -150px; width: 600px; height: 600px; background: radial-gradient(circle, rgba(16,185,129,0.12) 0%, transparent 70%); border-radius: 50%; pointer-events: none; }
.nistco-container { max-width: 1440px; margin: 0 auto; position: relative; z-index: 2; }
.nistco-hero-grid { display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 4rem; align-items: center; }
@media (max-width: 992px) { .nistco-hero-grid { grid-template-columns: 1fr; gap: 3rem; } }

.nistco-hero-badges { display: flex; gap: 0.75rem; margin-bottom: 1.5rem; flex-wrap: wrap; }
.nistco-pill { font-size: 0.75rem; font-weight: 800; text-transform: uppercase; padding: 0.35rem 0.85rem; border-radius: 50px; letter-spacing: 1px; }
.nistco-pill-green { background: #008751; color: #ffffff; }
.nistco-pill-gold { background: #d97706; color: #ffffff; }

.nistco-hero-title { font-size: clamp(2.25rem, 4.5vw, 3.5rem); font-weight: 800; line-height: 1.15; margin: 0 0 1.5rem 0; color: #ffffff; }
.nistco-hero-subtitle { font-size: 1.1rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 2rem; max-width: 620px; }

.nistco-hero-actions { display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 2.5rem; }
.nistco-btn { padding: 0.85rem 1.75rem; border-radius: 8px; font-weight: 700; font-size: 0.95rem; text-decoration: none; transition: all 0.2s ease; display: inline-flex; align-items: center; gap: 0.5rem; }
.nistco-btn-primary { background: #008751; color: #ffffff; box-shadow: 0 4px 14px rgba(0,135,81,0.4); }
.nistco-btn-primary:hover { background: #006c41; color: #fff; }
.nistco-btn-gold { background: #d97706; color: #ffffff; box-shadow: 0 4px 14px rgba(217,119,6,0.4); }
.nistco-btn-gold:hover { background: #b45309; color: #fff; }
.nistco-btn-secondary { background: rgba(255,255,255,0.08); color: #ffffff; border: 1px solid rgba(255,255,255,0.2); }
.nistco-btn-secondary:hover { background: rgba(255,255,255,0.15); color: #fff; }

.nistco-centre-launchpad { background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.1); border-radius: 12px; padding: 1.25rem; backdrop-filter: blur(10px); }
.launchpad-heading { display: block; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #fde047; letter-spacing: 1.2px; margin-bottom: 0.75rem; }
.launchpad-pills-row { display: flex; gap: 0.6rem; flex-wrap: wrap; }
.launchpad-pill { background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.15); padding: 0.45rem 0.85rem; border-radius: 6px; color: #ffffff; font-size: 0.85rem; font-weight: 600; text-decoration: none; display: flex; align-items: center; gap: 0.4rem; transition: all 0.2s; }
.launchpad-pill:hover { background: #008751; border-color: #008751; color: #fff; transform: translateY(-2px); }

/* Modern Enterprise Intelligence Card Viewport */
.nistco-intel-card { background: rgba(255, 255, 255, 0.05); border: 1px solid rgba(217, 119, 6, 0.3); border-radius: 16px; padding: 2.25rem; backdrop-filter: blur(16px); box-shadow: 0 25px 50px rgba(0,0,0,0.5); position: relative; }
.intel-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.75rem; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 1rem; }
.intel-title { font-size: 0.95rem; font-weight: 800; color: #fde047; letter-spacing: 1px; text-transform: uppercase; margin: 0; }
.intel-live-badge { display: flex; align-items: center; gap: 0.5rem; font-size: 0.75rem; font-weight: 700; color: #86efac; background: rgba(134,239,172,0.1); padding: 0.25rem 0.75rem; border-radius: 20px; }
.intel-live-dot { width: 7px; height: 7px; background: #86efac; border-radius: 50%; box-shadow: 0 0 8px #86efac; animation: pulseDot 2s infinite; }
@keyframes pulseDot { 0% { opacity: 1; transform: scale(1); } 50% { opacity: 0.4; transform: scale(0.85); } 100% { opacity: 1; transform: scale(1); } }

.intel-metrics-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.75rem; }
.intel-metric-box { background: rgba(0,0,0,0.25); border: 1px solid rgba(255,255,255,0.08); border-radius: 10px; padding: 1.25rem; }
.intel-metric-lbl { display: block; font-size: 0.75rem; color: #94a3b8; font-weight: 700; text-transform: uppercase; margin-bottom: 0.35rem; }
.intel-metric-val { font-size: 1.6rem; font-weight: 800; color: #ffffff; }

.intel-status-list { display: flex; flex-direction: column; gap: 0.85rem; }
.intel-status-item { display: flex; justify-content: space-between; align-items: center; font-size: 0.88rem; background: rgba(255,255,255,0.03); padding: 0.75rem 1rem; border-radius: 8px; border-left: 3px solid #10b981; }
.intel-status-name { color: #e2e8f0; font-weight: 600; }
.intel-status-state { color: #86efac; font-weight: 700; font-size: 0.8rem; }

.nistco-section { padding: 5rem 2rem; }
.nistco-bg-white { background: #ffffff; }
.nistco-bg-parchment { background: #f1f5f9; }
</style>

<main class="nistco-main">

    <!-- 1. MODERN ENTERPRISE HERO SECTION -->
    <section class="nistco-hero-section">
        <div class="nistco-hero-ambient-1"></div>
        <div class="nistco-hero-ambient-2"></div>
        
        <div class="nistco-container nistco-hero-grid">
            <div>
                <div class="nistco-hero-badges">
                    <span class="nistco-pill nistco-pill-green">FEDERAL REPUBLIC OF NIGERIA</span>[cite: 1]
                    <span class="nistco-pill nistco-pill-gold">CHIEF PATRONAGE</span>[cite: 1]
                </div>
                
                <h1 class="nistco-hero-title">
                    National Science & <br><span style="color: #fde047;">Technology Complex</span>[cite: 1]
                </h1>
                
                <p class="nistco-hero-subtitle">
                    Nigeria's apex multidisciplinary centre of scientific excellence mandated to execute frontier basic and applied research, operate national demonstration pilot plants, and drive indigenous industrial transformation.[cite: 1]
                </p>
                
                <div class="nistco-hero-actions">
                    <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="nistco-btn nistco-btn-primary">
                        Explore Research Centres[cite: 1] &rarr;
                    </a>
                    <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" class="nistco-btn nistco-btn-gold">
                        Innovation & Patents[cite: 1]
                    </a>
                    <a href="<?php echo esc_url( home_url( '/servicom/' ) ); ?>" class="nistco-btn nistco-btn-secondary">
                        Public Trustee Desk[cite: 1]
                    </a>
                </div>

                <!-- Centre Quick Launchpad Dock -->
                <div class="nistco-centre-launchpad">
                    <span class="launchpad-heading">ADVANCED CENTRES & DIVISIONS[cite: 1]</span>
                    <div class="launchpad-pills-row">
                        <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">⚡</span><span class="pill-code">AMSARC[cite: 1]</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🧪</span><span class="pill-code">CARC[cite: 1]</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🧬</span><span class="pill-code">BARC[cite: 1]</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">☢️</span><span class="pill-code">NTC[cite: 1]</span></a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Modern Enterprise R&D Intelligence Card -->
            <div>
                <div class="nistco-intel-card">
                    <div class="intel-header">
                        <span class="intel-title">National R&D Telemetry</span>
                        <div class="intel-live-badge">
                            <span class="intel-live-dot"></span>
                            SYSTEMS ACTIVE
                        </div>
                    </div>

                    <div class="intel-metrics-grid">
                        <div class="intel-metric-box">
                            <span class="intel-metric-lbl">HPC Cluster</span>
                            <span class="intel-metric-val">256 TFLOPS</span>
                        </div>
                        <div class="intel-metric-box">
                            <span class="intel-metric-lbl">Clean Energy</span>
                            <span class="intel-metric-val">500 kVA</span>
                        </div>
                    </div>

                    <div class="intel-status-list">
                        <div class="intel-status-item">
                            <span class="intel-status-name">AMSARC Simulation Nodes</span>
                            <span class="intel-status-state">Optimal (99.9%)</span>
                        </div>
                        <div class="intel-status-item">
                            <span class="intel-status-name">CARC 500L Synthesis Plant</span>
                            <span class="intel-status-state">Operational</span>
                        </div>
                        <div class="intel-status-item">
                            <span class="intel-status-name">NOTAP IP Patent Registry</span>
                            <span class="intel-status-state">16 Active Filings</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
