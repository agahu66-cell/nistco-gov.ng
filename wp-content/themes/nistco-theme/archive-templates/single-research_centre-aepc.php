<?php
/**
 * Template Name: Research Centre - Advanced Engineering & Prototype Centre
 * Description: Advanced Engineering & Prototype Centre (AEPC) single custom post type featuring active 3D optical calibration grid, metrology telemetry, and sensor fabrication portal.
 * File: single-research_centre-aepc.php
 */
get_header();
?>
<style>
html { scroll-behavior: smooth; }
.mc-hero-ambient-1, .mc-hero-ambient-2, .mc-hero-pattern { pointer-events: none; }
.mc-hero-content, .amsarc-terminal-box { position: relative; z-index: 900; pointer-events: auto; }
.mc-btn, .about-nav-pill, a { position: relative; z-index: 1000 !important; cursor: pointer; pointer-events: auto; display: inline-flex; }
.about-3d-viewport, .interferometer-3d-stage { pointer-events: none; }
.amsarc-hud-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.25rem; margin-top: 2.5rem; }
.amsarc-hud-card { background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(14, 165, 233, 0.3); border-radius: 12px; padding: 1.25rem; backdrop-filter: blur(10px); }
.amsarc-hud-label { font-size: 0.72rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; color: #38bdf8; display: block; margin-bottom: 0.35rem; }
.amsarc-hud-val { font-size: 1.6rem; font-weight: 800; color: #ffffff; font-family: ui-monospace, monospace; }
.amsarc-hud-status { font-size: 0.75rem; color: #7dd3fc; display: flex; align-items: center; gap: 0.35rem; margin-top: 0.35rem; }
.amsarc-pillar-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; border-top: 4px solid #0ea5e9; }

/* Active 3D Interferometer Grid Animation */
.interferometer-3d-stage { width: 100%; max-width: 320px; height: 320px; position: relative; perspective: 1000px; display: flex; align-items: center; justify-content: center; }
.laser-grid { width: 200px; height: 200px; position: relative; transform-style: preserve-3d; transform: rotateX(60deg) rotateZ(45deg); animation: spinGrid 15s linear infinite; }
.laser-line { position: absolute; top: 0; left: 50%; width: 2px; height: 100%; background: #38bdf8; box-shadow: 0 0 10px #38bdf8; }
.laser-line:nth-child(2) { top: 50%; left: 0; width: 100%; height: 2px; }
@keyframes spinGrid { 0% { transform: rotateX(60deg) rotateZ(0deg); } 100% { transform: rotateX(60deg) rotateZ(360deg); } }
</style>

<main class="site-main mc-homepage">
    <section class="mc-hero-section mc-news-hero" style="background: linear-gradient(135deg, #0c4a6e 0%, #0369a1 50%, #0f172a 100%);">
        <div class="container mc-hero-container" style="max-width: 1440px; margin: 0 auto; position: relative; z-index: 2;">
            <div class="mc-hero-grid" style="display: grid; grid-template-columns: 1.25fr 0.75fr; gap: 4rem; align-items: center;">
                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb" style="margin-bottom: 1rem; font-size: 0.95rem;">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #7dd3fc; font-weight: 700; text-decoration: none;">🏠 Home</a>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <span style="color: #cbd5e1;">Research Centres</span>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <span class="breadcrumb-current" style="color: #bae6fd; font-weight: 700;">Advanced Engineering & Prototype Centre</span>
                    </nav>
                    <div class="mc-hero-badges" style="display: flex; gap: 0.75rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
                        <span class="mc-pill" style="background: #0ea5e9; color: #ffffff;">Centre of Excellence</span>
                        <span class="mc-pill" style="background: #10b981; color: #ffffff;">Precision Prototyping</span>
                    </div>
                    <h1 class="mc-hero-title" style="font-size: clamp(2.3rem, 4vw, 3.6rem); font-weight: 800; color: #ffffff; margin-bottom: 1rem;">
                        Advanced Engineering &amp; Prototype Centre (AEPC)
                    </h1>
                    <p class="mc-hero-subtitle" style="font-size: 1.15rem; color: #cbd5e1; max-width: 780px; line-height: 1.7; margin-bottom: 2rem;">
                        National apex laboratory for scientific instrument design, CNC prototyping, electronic engineering, and advanced mechanical fabrication.
                    </p>
                    <div class="amsarc-hud-grid">
                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Laser Wavelength</span>
                            <div class="amsarc-hud-val">632.8 nm</div>
                            <div class="amsarc-hud-status"><span>●</span> He-Ne Interferometer Standard</div>
                        </div>
                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Metrology Precision</span>
                            <div class="amsarc-hud-val">&plusmn; 0.1 μm</div>
                            <div class="amsarc-hud-status"><span>●</span> Optical Flat Calibration Bench</div>
                        </div>
                    </div>
                </div>
                <div class="about-3d-viewport" style="display: flex; justify-content: center;">
                    <div class="interferometer-3d-stage">
                        <div class="laser-grid">
                            <div class="laser-line"></div>
                            <div class="laser-line"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mc-section mc-bg-parchment" style="padding: 5.5rem 2rem; background: #f8fafc;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">
            <div class="mc-section-header" style="text-align: center; margin-bottom: 4rem;">
                <span style="color: #0ea5e9; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px;">Engineering Portfolios</span>
                <h2 style="font-size: 2.35rem; font-weight: 800; color: #0f172a; margin-top: 0.5rem;">Pillars of Advanced Prototyping</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
                <div class="amsarc-pillar-card">
                    <div>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin-bottom: 0.75rem;">Precision CNC &amp; Fabrication</h3>
                        <p style="color: #64748b; font-size: 0.92rem; line-height: 1.7;">Computer numerical control machining and specialized mechanical prototyping for industrial manufacturing and research equipment.</p>
                    </div>
                </div>
                <div class="amsarc-pillar-card" style="border-top-color: #10b981;">
                    <div>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin-bottom: 0.75rem;">Electronic Prototyping &amp; IoT</h3>
                        <p style="color: #64748b; font-size: 0.92rem; line-height: 1.7;">Custom PCB design, embedded systems engineering, and automated instrumentation control systems for institutional laboratories.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
