<?php
/**
 * Template Name: Research Centre - Nuclear Technology Centre
 * Description: Nuclear Technology Centre (NTC) single custom post type featuring active 3D tokamak fusion ring, animated pillar icons for reactor operations and radiation health, and reactor telemetry.
 * File: single-research_centre-ntc.php
 */
get_header();
?>
<style>
html { scroll-behavior: smooth; }
.mc-hero-ambient-1, .mc-hero-ambient-2, .mc-hero-pattern { pointer-events: none; }
.mc-hero-content, .amsarc-terminal-box { position: relative; z-index: 900; pointer-events: auto; }
.mc-btn, .about-nav-pill, a { position: relative; z-index: 1000 !important; cursor: pointer; pointer-events: auto; display: inline-flex; }
.about-3d-viewport, .tokamak-3d-stage, .reactor-3d-stage, .radiation-3d-stage { pointer-events: none; }
.amsarc-hud-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.25rem; margin-top: 2.5rem; }
.amsarc-hud-card { background: rgba(30, 41, 59, 0.85); border: 1px solid rgba(245, 158, 11, 0.3); border-radius: 12px; padding: 1.25rem; backdrop-filter: blur(10px); }
.amsarc-hud-label { font-size: 0.72rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; color: #fbbf24; display: block; margin-bottom: 0.35rem; }
.amsarc-hud-val { font-size: 1.6rem; font-weight: 800; color: #ffffff; font-family: ui-monospace, monospace; }
.amsarc-hud-status { font-size: 0.75rem; color: #fde047; display: flex; align-items: center; gap: 0.35rem; margin-top: 0.35rem; }
.amsarc-pillar-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; border-top: 4px solid #f59e0b; position: relative; z-index: 10; }
.amsarc-pillar-card:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(245, 158, 11, 0.12); }
.amsarc-terminal-box { background: #0f172a; border: 1px solid rgba(245, 158, 11, 0.4); border-radius: 16px; padding: 2.5rem; color: #ffffff; font-family: ui-monospace, monospace; }

/* Active 3D Tokamak Fusion Ring Animation */
.tokamak-3d-stage { width: 100%; max-width: 320px; height: 320px; position: relative; perspective: 1000px; display: flex; align-items: center; justify-content: center; }
.tokamak-torus { width: 220px; height: 220px; position: relative; transform-style: preserve-3d; transform: rotateX(65deg); animation: spinTokamak 12s linear infinite; }
.tokamak-ring { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 4px solid rgba(245, 158, 11, 0.6); border-radius: 50%; box-shadow: 0 0 25px rgba(245, 158, 11, 0.4); }
.tokamak-plasma { position: absolute; top: 20px; left: 20px; width: 180px; height: 180px; border: 3px dashed #ef4444; border-radius: 50%; animation: spinCcw 6s linear infinite; }

/* Pillar Animation 1: Pulsing Reactor Core */
.reactor-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center; }
.reactor-core-ring { position: absolute; width: 50px; height: 50px; border: 2px solid #f59e0b; border-radius: 50%; animation: pulseReactor 2s infinite alternate ease-in-out; }
.reactor-core-inner { width: 20px; height: 20px; background: #ef4444; border-radius: 50%; box-shadow: 0 0 15px #ef4444, 0 0 30px #f59e0b; }
@keyframes pulseReactor { 0% { transform: scale(0.8); opacity: 0.5; } 100% { transform: scale(1.2); opacity: 1; } }

/* Pillar Animation 2: Radiation Hazard Pulse */
.radiation-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center; }
.rad-blade { position: absolute; width: 10px; height: 25px; background: #ef4444; border-radius: 5px; top: 5px; transform-origin: bottom center; box-shadow: 0 0 10px #ef4444; }
.rad-blade:nth-child(1) { transform: rotate(0deg); }
.rad-blade:nth-child(2) { transform: rotate(120deg); }
.rad-blade:nth-child(3) { transform: rotate(240deg); }
.rad-center { position: absolute; width: 14px; height: 14px; background: #fef08a; border-radius: 50%; box-shadow: 0 0 10px #f59e0b; z-index: 2; }
.radiation-3d-stage { animation: spinCw 8s linear infinite; }

@keyframes spinTokamak { 0% { transform: rotateX(65deg) rotateZ(0deg); } 100% { transform: rotateX(65deg) rotateZ(360deg); } }
@keyframes spinCcw { 100% { transform: rotate(-360deg); } }
@keyframes spinCw { 100% { transform: rotate(360deg); } }
</style>

<main class="site-main mc-homepage">
    <section class="mc-hero-section mc-news-hero" style="background: linear-gradient(135deg, #1c1917 0%, #292524 50%, #0f172a 100%);">
        <div class="container mc-hero-container" style="max-width: 1440px; margin: 0 auto; position: relative; z-index: 2;">
            <div class="mc-hero-grid" style="display: grid; grid-template-columns: 1.25fr 0.75fr; gap: 4rem; align-items: center;">
                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb" style="margin-bottom: 1rem; font-size: 0.95rem;">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #fbbf24; font-weight: 700; text-decoration: none;">🏠 Home</a>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <span style="color: #cbd5e1;">Research Centres</span>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <span class="breadcrumb-current" style="color: #fde047; font-weight: 700;">Nuclear Technology Centre</span>
                    </nav>
                    <div class="mc-hero-badges" style="display: flex; gap: 0.75rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
                        <span class="mc-pill" style="background: #f59e0b; color: #ffffff;">Centre of Excellence</span>
                        <span class="mc-pill" style="background: #ef4444; color: #ffffff;">10kW Research Reactor</span>
                    </div>
                    <h1 class="mc-hero-title" style="font-size: clamp(2.3rem, 4vw, 3.6rem); font-weight: 800; color: #ffffff; margin-bottom: 1rem;">
                        Nuclear Technology Centre (NTC)
                    </h1>
                    <p class="mc-hero-subtitle" style="font-size: 1.15rem; color: #cbd5e1; max-width: 780px; line-height: 1.7; margin-bottom: 2rem;">
                        Nigeria’s apex atomic energy authority, operating research reactors, radiation safety metrology, plasma confinement studies, and renewable hybrid microgrids.
                    </p>
                    <div class="amsarc-hud-grid">
                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Reactor Thermal Power</span>
                            <div class="amsarc-hud-val">30 kWt</div>
                            <div class="amsarc-hud-status"><span>●</span> Miniature Neutron Source</div>
                        </div>
                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Radiation Monitoring</span>
                            <div class="amsarc-hud-val">0.08 μSv/h</div>
                            <div class="amsarc-hud-status"><span>●</span> National Baseline Normal</div>
                        </div>
                    </div>
                </div>
                <div class="about-3d-viewport" style="display: flex; justify-content: center;">
                    <div class="tokamak-3d-stage">
                        <div class="tokamak-torus">
                            <div class="tokamak-ring"></div>
                            <div class="tokamak-plasma"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="mc-section mc-bg-parchment" style="padding: 5.5rem 2rem; background: #f8fafc;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">
            <div class="mc-section-header" style="text-align: center; margin-bottom: 4rem;">
                <span style="color: #f59e0b; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px;">Atomic Portfolios</span>
                <h2 style="font-size: 2.35rem; font-weight: 800; color: #0f172a; margin-top: 0.5rem;">Pillars of Nuclear Safety &amp; Energy</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">
                
                <!-- Pillar 1 with Pulsing Reactor Core Animation -->
                <div class="amsarc-pillar-card">
                    <div>
                        <div class="reactor-3d-stage">
                            <div class="reactor-core-ring"></div>
                            <div class="reactor-core-inner"></div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #f59e0b; text-transform: uppercase; letter-spacing: 1px;">Atomic Core Operations</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">MNSR Reactor Operations</h3>
                        <p style="color: #64748b; font-size: 0.92rem; line-height: 1.7; margin-bottom: 1.5rem;">Safe operation of the Miniature Neutron Source Reactor for activation analysis, radioisotope production, and academic training.</p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ Neutron Activation Analysis (NAA)</li>
                        <li>✔️ Medical &amp; Industrial Radioisotopes</li>
                        <li>✔️ Reactor Physics Operator Training</li>
                    </ul>
                </div>

                <!-- Pillar 2 with Radiation Hazard Animation -->
                <div class="amsarc-pillar-card" style="border-top-color: #ef4444;">
                    <div>
                        <div class="radiation-3d-stage">
                            <div class="rad-center"></div>
                            <div class="rad-blade"></div>
                            <div class="rad-blade"></div>
                            <div class="rad-blade"></div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #ef4444; text-transform: uppercase; letter-spacing: 1px;">Radiation Safety Metrology</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Radiation Health &amp; Metrology</h3>
                        <p style="color: #64748b; font-size: 0.92rem; line-height: 1.7; margin-bottom: 1.5rem;">National calibration center for dosimeters, environmental radiation surveillance, and radioactive waste management protocols.</p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ Dosimeter Calibration &amp; Testing</li>
                        <li>✔️ Environmental Gamma Surveillance</li>
                        <li>✔️ Radioactive Waste Conditioning</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>
</main>
<?php get_footer(); ?>
