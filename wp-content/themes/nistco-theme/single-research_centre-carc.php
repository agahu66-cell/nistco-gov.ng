<?php
/**
 * Template Name: Research Centre - CARC
 * Description: CARC single custom post type featuring fully active 3D molecular animation, chemical telemetry, 4 active chemistry pillars, NMR/HPLC booking portal, and facility broadcasts.
 * File: single-research_centre-carc.php
 */

get_header();
?>

<style>
/* ==========================================================================
   GLOBAL FIXES & SMOOTH SCROLLING
   ========================================================================== */
html { scroll-behavior: smooth; }
.mc-hero-ambient-1, .mc-hero-ambient-2, .mc-hero-pattern { pointer-events: none; }

/* Force all text and buttons to the absolute front */
.mc-hero-content, .amsarc-terminal-box { position: relative; z-index: 900; pointer-events: auto; }
.mc-btn, .about-nav-pill, a { position: relative; z-index: 1000 !important; cursor: pointer; pointer-events: auto; display: inline-flex; }

/* Force all 3D animation bounding boxes to ignore mouse clicks */
.about-3d-viewport, .atom-3d-stage, .nmr-3d-stage, .polymer-3d-stage, .phyto-3d-stage, .green-3d-stage { pointer-events: none; }

/* ==========================================================================
   CARC FLAGSHIP STYLING & CHEMISTRY TELEMETRY
   ========================================================================== */
.amsarc-hud-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.25rem; margin-top: 2.5rem; }
.amsarc-hud-card { background: rgba(15, 23, 42, 0.85); border: 1px solid rgba(139, 92, 246, 0.3); border-radius: 12px; padding: 1.25rem; backdrop-filter: blur(10px); box-shadow: 0 10px 25px rgba(0,0,0,0.3); transition: transform 0.2s, border-color 0.2s; }
.amsarc-hud-card:hover { transform: translateY(-3px); border-color: #8b5cf6; }
.amsarc-hud-label { font-size: 0.72rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; color: #a78bfa; display: block; margin-bottom: 0.35rem; }
.amsarc-hud-val { font-size: 1.6rem; font-weight: 800; color: #ffffff; font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace; }
.amsarc-hud-status { font-size: 0.75rem; color: #c4b5fd; display: flex; align-items: center; gap: 0.35rem; margin-top: 0.35rem; }
.amsarc-pillar-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; border-top: 4px solid #8b5cf6; transition: transform 0.25s ease, box-shadow 0.25s ease; position: relative; z-index: 10; }
.amsarc-pillar-card:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(139, 92, 246, 0.12); z-index: 20; }
.amsarc-terminal-box { background: #0f172a; border: 1px solid rgba(139, 92, 246, 0.4); border-radius: 16px; padding: 2.5rem; color: #ffffff; font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace; overflow: hidden; }

/* ==========================================================================
   ANIMATIONS: 3D MOLECULE HERO & 4 CHEMISTRY PILLARS
   ========================================================================== */

/* Hero: 3D Atom/Molecule Lattice Animation */
.atom-3d-stage { width: 100%; max-width: 320px; height: 320px; position: relative; perspective: 1000px; display: flex; align-items: center; justify-content: center; }
.atom-system { width: 200px; height: 200px; position: relative; transform-style: preserve-3d; animation: spinSystem 20s linear infinite; }
.atom-nucleus { position: absolute; top: 50%; left: 50%; width: 40px; height: 40px; margin: -20px 0 0 -20px; background: #8b5cf6; border-radius: 50%; box-shadow: 0 0 30px #a78bfa, inset 0 0 15px #ffffff; }

/* Using CSS variables to maintain 3D tilt while spinning */
.atom-orbit { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 2px solid rgba(139, 92, 246, 0.4); border-radius: 50%; transform-style: preserve-3d; --rotX: 0deg; --rotY: 0deg; animation: spinOrbit 4s linear infinite; }
.atom-orbit::before { content: ''; position: absolute; top: -6px; left: 50%; margin-left: -6px; width: 12px; height: 12px; background: #38bdf8; border-radius: 50%; box-shadow: 0 0 15px #7dd3fc; }

.atom-orbit:nth-child(2) { --rotX: 70deg; --rotY: 45deg; animation-duration: 3s; }
.atom-orbit:nth-child(3) { --rotX: 70deg; --rotY: -45deg; animation-duration: 5s; animation-direction: reverse; border-color: rgba(56, 189, 248, 0.3); }
.atom-orbit:nth-child(4) { --rotX: 90deg; --rotY: 0deg; animation-duration: 6s; }

@keyframes spinSystem {
    0% { transform: rotateY(0deg) rotateX(15deg); }
    100% { transform: rotateY(360deg) rotateX(15deg); }
}
@keyframes spinOrbit {
    0% { transform: rotateX(var(--rotX)) rotateY(var(--rotY)) rotateZ(0deg); }
    100% { transform: rotateX(var(--rotX)) rotateY(var(--rotY)) rotateZ(360deg); }
}

/* Pillar 1: NMR Magnetic Resonance Waves */
.nmr-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center; }
.nmr-wave { position: absolute; width: 100%; height: 100%; border: 2px solid #0ea5e9; border-radius: 50%; opacity: 0; animation: nmrPulse 2.5s ease-out infinite; }
.nmr-wave:nth-child(2) { animation-delay: 0.8s; }
.nmr-wave:nth-child(3) { animation-delay: 1.6s; }
.nmr-core { position: absolute; width: 16px; height: 16px; background: #0284c7; border-radius: 50%; box-shadow: 0 0 15px #38bdf8; }
@keyframes nmrPulse { 0% { transform: scale(0.2); opacity: 1; border-width: 4px; } 100% { transform: scale(1.5); opacity: 0; border-width: 1px; } }

/* Pillar 2: Polymer Hexagonal Bonds */
.polymer-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; perspective: 600px; display: flex; align-items: center; justify-content: center; }
.polymer-hex { position: absolute; width: 34px; height: 34px; border: 3px solid #f59e0b; background: rgba(245,158,11,0.1); clip-path: polygon(50% 0%, 100% 25%, 100% 75%, 50% 100%, 0% 75%, 0% 25%); animation: polymerBreathe 4s infinite alternate ease-in-out; }
.polymer-hex:nth-child(1) { transform: translate(-15px, -10px); }
.polymer-hex:nth-child(2) { transform: translate(15px, 10px); border-color: #d97706; animation-delay: 1s; }
@keyframes polymerBreathe { 0% { transform: translate(-15px, -10px) rotate(0deg); } 100% { transform: translate(-20px, -15px) rotate(15deg); } }

/* Pillar 3: Phyto-medicine Extraction Droplet */
.phyto-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; border-bottom: 3px solid #10b981; border-radius: 0 0 30px 30px; overflow: hidden; }
.phyto-drop { position: absolute; top: -20px; left: 50%; margin-left: -8px; width: 16px; height: 16px; background: #34d399; border-radius: 50% 50% 50% 0; transform: rotate(-45deg); box-shadow: inset -3px -3px 5px rgba(0,0,0,0.2), 0 0 10px #10b981; animation: dropFall 2s infinite cubic-bezier(0.55, 0.085, 0.68, 0.53); }
@keyframes dropFall { 0% { top: -20px; opacity: 1; transform: rotate(-45deg) scale(0.8); } 80% { top: 40px; transform: rotate(-45deg) scale(1.1); opacity: 1; } 100% { top: 50px; opacity: 0; transform: rotate(-45deg) scale(2); } }

/* Pillar 4: Green Chemistry Isotope */
.green-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; perspective: 800px; }
.green-cube { width: 40px; height: 40px; position: absolute; top: 10px; left: 10px; transform-style: preserve-3d; animation: spinCube 8s linear infinite; }
.green-face { position: absolute; width: 40px; height: 40px; border: 2px solid #84cc16; background: rgba(132, 204, 22, 0.2); }
.green-face:nth-child(1) { transform: translateZ(20px); }
.green-face:nth-child(2) { transform: rotateY(180deg) translateZ(20px); }
.green-face:nth-child(3) { transform: rotateY(90deg) translateZ(20px); }
.green-face:nth-child(4) { transform: rotateY(-90deg) translateZ(20px); }
.green-face:nth-child(5) { transform: rotateX(90deg) translateZ(20px); }
.green-face:nth-child(6) { transform: rotateX(-90deg) translateZ(20px); }
@keyframes spinCube { 0% { transform: rotateX(0deg) rotateY(0deg); } 100% { transform: rotateX(360deg) rotateY(360deg); } }

</style>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: CHEMISTRY TELEMETRY & 3D ATOMIC LATTICE
         ========================================================================= -->
    <section class="mc-hero-section mc-news-hero" style="background: linear-gradient(135deg, #0f172a 0%, #1e1b4b 50%, #09090b 100%);">
        <div class="mc-hero-ambient-1" style="background: radial-gradient(circle, rgba(139,92,246,0.15) 0%, transparent 70%);"></div>
        <div class="mc-hero-ambient-2" style="background: radial-gradient(circle, rgba(56,189,248,0.1) 0%, transparent 70%);"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container" style="max-width: 1440px; margin: 0 auto; position: relative; z-index: 2;">
            <div class="mc-hero-grid" style="display: grid; grid-template-columns: 1.25fr 0.75fr; gap: 4rem; align-items: center;">

                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb" style="margin-bottom: 1rem; font-size: 0.95rem;">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #a78bfa; font-weight: 700; text-decoration: none;">🏠 Home</a>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <a href="<?php echo esc_url( home_url( '/about-us/#centres-section' ) ); ?>" style="color: #cbd5e1; text-decoration: none;">Research Centres</a>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <span class="breadcrumb-current" style="color: #c4b5fd; font-weight: 700;">CARC Chemistry</span>
                    </nav>

                    <div class="mc-hero-badges" style="display: flex; gap: 0.75rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
                        <span class="mc-pill mc-pill-green" style="background: #8b5cf6; color: #ffffff;">Centre of Excellence</span>
                        <span class="mc-pill mc-pill-gold" style="background: #0ea5e9; color: #ffffff;">Molecular Characterization</span>
                    </div>

                    <h1 class="mc-hero-title" style="font-size: clamp(2.3rem, 4vw, 3.6rem); font-weight: 800; line-height: 1.15; margin: 0 0 1rem 0; color: #ffffff;">
                        Chemistry Advanced Research Centre (CARC)
                    </h1>

                    <p class="mc-hero-subtitle" style="font-size: 1.15rem; color: #cbd5e1; max-width: 780px; line-height: 1.7; margin-bottom: 2rem;">
                        Nigeria’s apex facility for analytical spectroscopy, organic materials synthesis, environmental remediation, and the isolation of active pharmaceutical ingredients from indigenous flora.
                    </p>

                    <div class="about-nav-pill-group" style="display: flex; gap: 0.75rem; flex-wrap: wrap; align-items: center;">
                        <a href="#chem-scheduler" class="mc-btn mc-btn-primary" style="background: #8b5cf6; color: #ffffff; text-decoration: none; padding: 0.75rem 1.6rem; border-radius: 8px; font-weight: 800; display: inline-flex; align-items: center; gap: 0.5rem;">
                            <span>🔬</span>
                            <span>Book NMR / HPLC</span>
                        </a>
                        <a href="#scientific-thrusts" class="about-nav-pill" style="background: rgba(255,255,255,0.08); color: #ffffff; text-decoration: none; padding: 0.75rem 1.25rem; border-radius: 8px; font-weight: 700; border: 1px solid rgba(255,255,255,0.2);">⚗️ Research Thrusts</a>
                        <a href="#carc-video" class="about-nav-pill" style="background: rgba(255,255,255,0.08); color: #ffffff; text-decoration: none; padding: 0.75rem 1.25rem; border-radius: 8px; font-weight: 700; border: 1px solid rgba(255,255,255,0.2);">🎥 Laboratory Tour</a>
                    </div>

                    <!-- Live Hardware Telemetry HUD -->
                    <div class="amsarc-hud-grid">
                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Spectroscopy Specs</span>
                            <div class="amsarc-hud-val">600 MHz</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#a78bfa; border-radius:50%; display:inline-block;"></span> Active NMR Resolution</div>
                        </div>

                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Mass Spectrometry</span>
                            <div class="amsarc-hud-val">&lt; 1 ppm</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#a78bfa; border-radius:50%; display:inline-block;"></span> LC-MS/MS Mass Accuracy</div>
                        </div>

                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Phyto-Library</span>
                            <div class="amsarc-hud-val">1,240+</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#a78bfa; border-radius:50%; display:inline-block;"></span> Indigenous Compounds Isolated</div>
                        </div>

                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Lab Containment</span>
                            <div class="amsarc-hud-val">ISO 5</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#34d399; border-radius:50%; display:inline-block;"></span> Cleanroom Environments</div>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Interactive 3D Atomic/Molecular Lattice -->
                <div class="about-3d-viewport">
                    <div class="atom-3d-stage">
                        <div class="atom-system">
                            <div class="atom-nucleus"></div>
                            <div class="atom-orbit"></div>
                            <div class="atom-orbit"></div>
                            <div class="atom-orbit"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. CORE SCIENTIFIC THRUSTS (4 CHEMISTRY PILLARS)
         ========================================================================= -->
    <section id="scientific-thrusts" class="mc-section mc-bg-parchment mc-border-bottom" style="padding: 5.5rem 2rem; background: #f8fafc;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">

            <div class="mc-section-header" style="text-align: center; margin-bottom: 4rem;">
                <span class="mc-section-kicker" style="color: #8b5cf6; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Chemical Portfolios</span>
                <h2 class="mc-section-title" style="font-size: 2.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.85rem 0;">Pillars of Molecular Innovation</h2>
                <p style="color: #64748b; font-size: 1.05rem; line-height: 1.7; max-width: 760px; margin: 0 auto;">
                    CARC deploys high-precision analytical instrumentation to unlock new materials, validate pharmaceutical compounds, and protect Nigeria's ecosystems.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">

                <!-- Pillar 1: Analytical Chemistry -->
                <div class="amsarc-pillar-card" style="border-top-color: #0284c7;">
                    <div>
                        <div class="nmr-3d-stage">
                            <div class="nmr-wave"></div>
                            <div class="nmr-wave"></div>
                            <div class="nmr-wave"></div>
                            <div class="nmr-core"></div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #0284c7; text-transform: uppercase; letter-spacing: 1px;">Molecular Characterization</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Advanced Analytical Chemistry</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Structural elucidation and trace element quantification utilizing high-field Nuclear Magnetic Resonance and high-resolution mass spectrometry.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ 600 MHz Multi-Nuclear NMR</li>
                        <li>✔️ GC-MS &amp; LC-MS/MS Platforms</li>
                        <li>✔️ Atomic Absorption Spectroscopy (AAS)</li>
                    </ul>
                </div>

                <!-- Pillar 2: Polymer & Materials -->
                <div class="amsarc-pillar-card" style="border-top-color: #f59e0b;">
                    <div>
                        <div class="polymer-3d-stage">
                            <div class="polymer-hex"></div>
                            <div class="polymer-hex"></div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #f59e0b; text-transform: uppercase; letter-spacing: 1px;">Industrial Materials</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Polymer &amp; Materials Science</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Synthesis of biodegradable plastics, advanced resins from petrochemical derivatives, and nanostructured composites for the manufacturing sector.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ Biodegradable Polymer Formulation</li>
                        <li>✔️ Nanomaterial Surface Coating</li>
                        <li>✔️ Petrochemical Value-Addition</li>
                    </ul>
                </div>

                <!-- Pillar 3: Phyto-medicine -->
                <div class="amsarc-pillar-card" style="border-top-color: #10b981;">
                    <div>
                        <div class="phyto-3d-stage">
                            <div class="phyto-drop"></div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #10b981; text-transform: uppercase; letter-spacing: 1px;">Natural Products</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Phyto-medicine Extraction</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Isolating and standardizing active pharmaceutical ingredients (APIs) from Nigeria's diverse flora to develop indigenous therapeutics.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ Soxhlet &amp; Supercritical Extraction</li>
                        <li>✔️ Phytochemical Profiling</li>
                        <li>✔️ Drug Formulation &amp; Standardization</li>
                    </ul>
                </div>

                <!-- Pillar 4: Green Chemistry -->
                <div class="amsarc-pillar-card" style="border-top-color: #84cc16;">
                    <div>
                        <div class="green-3d-stage">
                            <div class="green-cube">
                                <div class="green-face"></div>
                                <div class="green-face"></div>
                                <div class="green-face"></div>
                                <div class="green-face"></div>
                                <div class="green-face"></div>
                                <div class="green-face"></div>
                            </div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #84cc16; text-transform: uppercase; letter-spacing: 1px;">Environmental Ecology</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Green Chemistry &amp; Remediation</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Developing eco-friendly catalytic processes and remediation protocols to eliminate heavy metal toxicity and industrial effluent pollution.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ Effluent Toxicity Degradation</li>
                        <li>✔️ Renewable Bio-Catalysts</li>
                        <li>✔️ Environmental Impact Assessment</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. VISUAL FACILITY BROADCAST: LABORATORY TOUR
         ========================================================================= -->
    <section id="carc-video" class="mc-section mc-bg-white mc-border-bottom" style="padding: 5.5rem 2rem;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header" style="text-align: center; margin-bottom: 3.5rem;">
                <span class="mc-section-kicker" style="color: #8b5cf6; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Facility Telemetry</span>
                <h2 class="mc-section-title" style="font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0;">Inside the CARC Analytical Suites</h2>
                <p style="color: #64748b; font-size: 1.05rem; line-height: 1.6; max-width: 700px; margin: 0 auto;">
                    Take a high-definition 1080p walkthrough of our state-of-the-art chromatography labs, NMR chambers, and solvent extraction pilot plants.
                </p>
            </div>

            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.06); max-width: 900px; margin: 0 auto;">
                <div style="position: relative; width: 100%; aspect-ratio: 16/9; background: #000;">
                    <iframe style="position: absolute; inset: 0; width: 100%; height: 100%; border: 0;" src="https://www.youtube-nocookie.com/embed/xyMCb7ft66k" title="CARC Chemistry Labs" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div style="padding: 2.5rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem;">
                    <div>
                        <span style="font-size: 0.78rem; font-weight: 800; color: #8b5cf6; text-transform: uppercase; display: block; margin-bottom: 0.25rem;">Virtual Demonstration</span>
                        <h4 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Analytical Instrumentation Masterclass</h4>
                        <p style="font-size: 0.92rem; color: #64748b; margin: 0; max-width: 550px;">
                            Witness the precision of our High-Performance Liquid Chromatography (HPLC) arrays validating the purity of indigenous medicinal extracts.
                        </p>
                    </div>
                    <div>
                        <a href="#chem-scheduler" class="mc-btn mc-btn-primary" style="background: #8b5cf6; color: #ffffff; text-decoration: none; padding: 0.8rem 1.6rem; border-radius: 8px; font-weight: 800; font-size: 0.9rem;">Book Instrument Time &rarr;</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         4. LIMS SCHEDULER & INSTRUMENT ACCESS PORTAL
         ========================================================================= -->
    <section id="chem-scheduler" class="mc-section mc-bg-parchment" style="padding: 5.5rem 2rem; background: #f8fafc;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="amsarc-terminal-box" style="border-color: rgba(139, 92, 246, 0.4); background: #0f172a;">
                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(139, 92, 246, 0.3); padding-bottom: 1.25rem; margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem;">
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 12px; height: 12px; background: #ef4444; border-radius: 50%; display: inline-block;"></span>
                        <span style="width: 12px; height: 12px; background: #eab308; border-radius: 50%; display: inline-block;"></span>
                        <span style="width: 12px; height: 12px; background: #22c55e; border-radius: 50%; display: inline-block;"></span>
                        <span style="color: #a78bfa; font-size: 0.9rem; font-weight: 700; margin-left: 0.5rem; word-break: break-all;">carc-lims-mainframe.nistco.gov.ng</span>
                    </div>
                    <span style="color: #34d399; font-size: 0.8rem; font-weight: 700;">LIMS Subsystem: Active</span>
                </div>

                <div style="margin-bottom: 2rem;">
                    <p style="color: #a78bfa; margin: 0 0 0.5rem 0;">[root@carc-lims ~]# ms_status --check-all</p>
                    <pre style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6; overflow-x: auto; margin: 0; white-space: pre-wrap; word-break: break-word;">
INSTRUMENT_ID      STATUS      RUNTIME    ALLOCATION       NOTES
NMR_600MHz         ACTIVE      08h:12m    Academia_Open    Cryo-probe cooled (4K)
LC_MS_MS_01        WARM-UP     00h:15m    Phyto_Extract    Solvent prep required
HPLC_Agilent_A     IDLE        --         Open_Access      Available for booking
FTIR_Spectro       ACTIVE      02h:00m    Polymer_Lab      Scanning composites...
                    </pre>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem; border-top: 1px solid rgba(139, 92, 246, 0.3); padding-top: 1.75rem;">
                    <div>
                        <strong style="font-size: 1.15rem; color: #ffffff; display: block; margin-bottom: 0.25rem;">Require Specialized Chemical Analysis?</strong>
                        <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0; max-width: 600px;">Request allocated runs on our high-resolution NMR, mass spectrometers, or chromatography suites under Presidential Executive Order No. 5.</p>
                    </div>
                    <div style="display: flex; gap: 1rem;">
                        <a href="mailto:chemistry@nistco.gov.ng?subject=Instrument%20Run%20Allocation%20Request" class="mc-btn mc-btn-primary" style="background: #8b5cf6; color: #ffffff; padding: 0.85rem 1.75rem; border-radius: 8px; font-weight: 800; text-decoration: none; white-space: nowrap;">
                            <span>⚗️</span>
                            <span>Request Instrument Allocation</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         5. DIRECTORATE LEADERSHIP & TECHNICAL CONTACT DESK
         ========================================================================= -->
    <section class="mc-section mc-bg-white mc-border-top" style="padding: 5.5rem 2rem;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 3.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 3.5rem; align-items: center;">
                <div style="text-align: center;">
                    <div style="width: 100%; max-width: 280px; margin: 0 auto; aspect-ratio: 1/1; border-radius: 16px; overflow: hidden; background: #1e1b4b; display: flex; align-items: center; justify-content: center; font-size: 4.5rem; border: 3px solid #8b5cf6;">
                        🧪
                    </div>
                    <span style="font-size: 0.75rem; font-weight: 800; color: #8b5cf6; text-transform: uppercase; display: block; margin-top: 1rem;">Principal Technical Director</span>
                    <strong style="font-size: 1.25rem; font-weight: 800; color: #0f172a; display: block;">CARC Directorate</strong>
                </div>

                <div>
                    <span class="mc-section-kicker" style="color: #8b5cf6; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Apex Chemical Authority</span>
                    <h3 style="font-size: 1.85rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0;">Directorate of Advanced Chemistry</h3>
                    <p style="font-size: 0.98rem; color: #64748b; line-height: 1.8; margin-bottom: 2rem;">
                        Our team of analytical chemists, polymer scientists, and pharmacognosists collaborate daily with manufacturing industries to assure product quality, remediate ecosystems, and synthesize next-generation industrial materials.
                    </p>

                    <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; font-size: 0.9rem;">
                        <div>
                            <span style="color: #64748b; display: block; font-size: 0.8rem;">Direct Technical Inquiries:</span>
                            <strong style="color: #8b5cf6;">chemistry@nistco.gov.ng</strong>
                        </div>
                        <div>
                            <span style="color: #64748b; display: block; font-size: 0.8rem;">Campus Location:</span>
                            <strong style="color: #0f172a;">CARC Complex, NISTCO Sheda, Abuja</strong>
                        </div>
                        <div>
                            <span style="color: #64748b; display: block; font-size: 0.8rem;">Supervising Body:</span>
                            <strong style="color: #008751;">Federal Ministry of Innovation, Science &amp; Technology (FMIST)</strong>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();
