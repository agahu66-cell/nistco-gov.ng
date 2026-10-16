<?php
/**
 * Template Name: Research Centre - PARC
 * Description: PARC single custom post type featuring 3D particle accelerator animation, physics telemetry, 4 active physics pillars, synchrotron beamline booking portal, and facility broadcasts.
 * File: single-research_centre-parc.php
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
.about-3d-viewport, .particle-3d-stage, .quantum-3d-stage, .crystal-3d-stage, .semi-3d-stage, .plasma-3d-stage { pointer-events: none; }

/* ==========================================================================
   PARC FLAGSHIP STYLING & PHYSICS TELEMETRY
   ========================================================================== */
.amsarc-hud-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.25rem; margin-top: 2.5rem; }
.amsarc-hud-card { background: rgba(30, 27, 75, 0.85); border: 1px solid rgba(236, 72, 153, 0.3); border-radius: 12px; padding: 1.25rem; backdrop-filter: blur(10px); box-shadow: 0 10px 25px rgba(0,0,0,0.3); transition: transform 0.2s, border-color 0.2s; }
.amsarc-hud-card:hover { transform: translateY(-3px); border-color: #ec4899; }
.amsarc-hud-label { font-size: 0.72rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; color: #f472b6; display: block; margin-bottom: 0.35rem; }
.amsarc-hud-val { font-size: 1.6rem; font-weight: 800; color: #ffffff; font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace; }
.amsarc-hud-status { font-size: 0.75rem; color: #fbcfe8; display: flex; align-items: center; gap: 0.35rem; margin-top: 0.35rem; }
.amsarc-pillar-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; border-top: 4px solid #ec4899; transition: transform 0.25s ease, box-shadow 0.25s ease; position: relative; z-index: 10; }
.amsarc-pillar-card:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(236, 72, 153, 0.12); z-index: 20; }
.amsarc-terminal-box { background: #1e1b4b; border: 1px solid rgba(236, 72, 153, 0.4); border-radius: 16px; padding: 2.5rem; color: #ffffff; font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace; overflow: hidden; }

/* ==========================================================================
   ANIMATIONS: 3D PARTICLE ACCELERATOR HERO & 4 PHYSICS PILLARS
   ========================================================================== */

/* Hero: 3D Particle Accelerator Ring */
.particle-3d-stage { width: 100%; max-width: 320px; height: 320px; position: relative; perspective: 1000px; display: flex; align-items: center; justify-content: center; }
.accelerator-ring { width: 240px; height: 240px; position: relative; transform-style: preserve-3d; transform: rotateX(65deg); }
.ring-track { position: absolute; top: 0; left: 0; width: 100%; height: 100%; border: 3px dashed rgba(236, 72, 153, 0.5); border-radius: 50%; box-shadow: 0 0 20px rgba(236, 72, 153, 0.3); }
.ring-track:nth-child(2) { width: 180px; height: 180px; top: 30px; left: 30px; border-color: rgba(56, 189, 248, 0.5); border-style: solid; }
.particle-packet { position: absolute; top: -6px; left: 50%; margin-left: -6px; width: 12px; height: 12px; background: #ffffff; border-radius: 50%; box-shadow: 0 0 20px #ec4899, 0 0 35px #f472b6; animation: spinCw 2s linear infinite; transform-origin: 6px 126px; }
.ring-track:nth-child(2) .particle-packet { animation: spinCcw 1.2s linear infinite; transform-origin: 6px 96px; background: #38bdf8; box-shadow: 0 0 20px #38bdf8; }

@keyframes spinCw { 100% { transform: rotate(360deg); } }
@keyframes spinCcw { 100% { transform: rotate(-360deg); } }

/* Pillar 1: Quantum Superposition Spheres */
.quantum-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center; perspective: 500px; }
.quantum-orb { position: absolute; width: 24px; height: 24px; background: radial-gradient(circle at 30% 30%, #f472b6, #db2777); border-radius: 50%; box-shadow: 0 0 15px #ec4899; animation: quantumWobble 3s infinite ease-in-out alternate; }
.quantum-orb:nth-child(2) { background: radial-gradient(circle at 30% 30%, #38bdf8, #0284c7); box-shadow: 0 0 15px #38bdf8; animation-direction: alternate-reverse; animation-duration: 2s; }
@keyframes quantumWobble { 0% { transform: translate(-18px, 0) scale(0.9); } 100% { transform: translate(18px, 0) scale(1.1); } }

/* Pillar 2: Crystal Lattice Stress Array */
.crystal-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; perspective: 600px; display: flex; align-items: center; justify-content: center; }
.crystal-grid { width: 36px; height: 36px; border: 2px solid #8b5cf6; display: grid; grid-template-columns: 1fr 1fr; grid-template-rows: 1fr 1fr; gap: 4px; animation: gridPulse 4s infinite alternate ease-in-out; }
.crystal-node { background: rgba(139, 92, 246, 0.3); border-radius: 50%; box-shadow: 0 0 8px #a78bfa; }
@keyframes gridPulse { 0% { transform: rotateX(0deg) rotateY(0deg) scale(0.9); } 100% { transform: rotateX(25deg) rotateY(25deg) scale(1.1); } }

/* Pillar 3: Semiconductor Energy Band Gaps */
.semi-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; display: flex; flex-direction: column; justify-content: space-between; padding: 8px 0; border-left: 3px solid #f59e0b; border-right: 3px solid #f59e0b; }
.semi-band { width: 100%; height: 4px; background: #fbbf24; box-shadow: 0 0 8px #f59e0b; position: relative; animation: bandShift 2s infinite alternate ease-in-out; }
@keyframes bandShift { 0% { transform: translateY(0); } 100% { transform: translateY(6px); } }

/* Pillar 4: Plasma Confinement Field */
.plasma-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center; }
.plasma-core { width: 20px; height: 20px; background: #06b6d4; border-radius: 50%; box-shadow: 0 0 25px #22d3ee, 0 0 40px #0891b2; animation: plasmaBurn 1.5s infinite alternate; }
.plasma-field { position: absolute; width: 50px; height: 50px; border: 2px solid rgba(6, 182, 212, 0.6); border-radius: 50%; animation: spinCw 4s linear infinite; }
@keyframes plasmaBurn { 0% { transform: scale(0.8); filter: brightness(1); } 100% { transform: scale(1.2); filter: brightness(1.4); } }

</style>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: PHYSICS TELEMETRY & 3D PARTICLE ACCELERATOR
         ========================================================================= -->
    <section class="mc-hero-section mc-news-hero" style="background: linear-gradient(135deg, #1e1b4b 0%, #31103f 50%, #0f172a 100%);">
        <div class="mc-hero-ambient-1" style="background: radial-gradient(circle, rgba(236,72,153,0.15) 0%, transparent 70%);"></div>
        <div class="mc-hero-ambient-2" style="background: radial-gradient(circle, rgba(56,189,248,0.1) 0%, transparent 70%);"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container" style="max-width: 1440px; margin: 0 auto; position: relative; z-index: 2;">
            <div class="mc-hero-grid" style="display: grid; grid-template-columns: 1.25fr 0.75fr; gap: 4rem; align-items: center;">

                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb" style="margin-bottom: 1rem; font-size: 0.95rem;">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #f472b6; font-weight: 700; text-decoration: none;">🏠 Home</a>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <a href="<?php echo esc_url( home_url( '/about-us/#centres-section' ) ); ?>" style="color: #cbd5e1; text-decoration: none;">Research Centres</a>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <span class="breadcrumb-current" style="color: #fbcfe8; font-weight: 700;">PARC Physics</span>
                    </nav>

                    <div class="mc-hero-badges" style="display: flex; gap: 0.75rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
                        <span class="mc-pill mc-pill-green" style="background: #ec4899; color: #ffffff;">Centre of Excellence</span>
                        <span class="mc-pill mc-pill-gold" style="background: #38bdf8; color: #ffffff;">Synchrotron &amp; Materials</span>
                    </div>

                    <h1 class="mc-hero-title" style="font-size: clamp(2.3rem, 4vw, 3.6rem); font-weight: 800; line-height: 1.15; margin: 0 0 1rem 0; color: #ffffff;">
                        Physics &amp; Advanced Materials Research Centre (PARC)
                    </h1>

                    <p class="mc-hero-subtitle" style="font-size: 1.15rem; color: #cbd5e1; max-width: 780px; line-height: 1.7; margin-bottom: 2rem;">
                        Nigeria’s premier facility for condensed matter physics, semiconductor thin-film fabrication, X-ray crystallography, and quantum materials research.
                    </p>

                    <div class="about-nav-pill-group" style="display: flex; gap: 0.75rem; flex-wrap: wrap; align-items: center;">
                        <a href="#phys-scheduler" class="mc-btn mc-btn-primary" style="background: #ec4899; color: #ffffff; text-decoration: none; padding: 0.75rem 1.6rem; border-radius: 8px; font-weight: 800; display: inline-flex; align-items: center; gap: 0.5rem;">
                            <span>⚡</span>
                            <span>Book Beamline Access</span>
                        </a>
                        <a href="#scientific-thrusts" class="about-nav-pill" style="background: rgba(255,255,255,0.08); color: #ffffff; text-decoration: none; padding: 0.75rem 1.25rem; border-radius: 8px; font-weight: 700; border: 1px solid rgba(255,255,255,0.2);">⚛️ Research Thrusts</a>
                        <a href="#parc-video" class="about-nav-pill" style="background: rgba(255,255,255,0.08); color: #ffffff; text-decoration: none; padding: 0.75rem 1.25rem; border-radius: 8px; font-weight: 700; border: 1px solid rgba(255,255,255,0.2);">🎥 Facility Tour</a>
                    </div>

                    <!-- Live Hardware Telemetry HUD -->
                    <div class="amsarc-hud-grid">
                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Beamline Energy</span>
                            <div class="amsarc-hud-val">3.5 GeV</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#f472b6; border-radius:50%; display:inline-block;"></span> Synchrotron Storage Ring</div>
                        </div>

                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Crystal Precision</span>
                            <div class="amsarc-hud-val">&plusmn; 0.01Å</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#f472b6; border-radius:50%; display:inline-block;"></span> X-Ray Diffractometer</div>
                        </div>

                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Cleanroom Vacuum</span>
                            <div class="amsarc-hud-val">10<sup>-9</sup> Torr</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#f472b6; border-radius:50%; display:inline-block;"></span> MBE Deposition Chamber</div>
                        </div>

                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Magnetic Field</span>
                            <div class="amsarc-hud-val">14 Tesla</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#38bdf8; border-radius:50%; display:inline-block;"></span> Cryogenic Superconducting Magnet</div>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Interactive 3D Particle Accelerator -->
                <div class="about-3d-viewport">
                    <div class="particle-3d-stage">
                        <div class="accelerator-ring">
                            <div class="ring-track">
                                <div class="particle-packet"></div>
                            </div>
                            <div class="ring-track">
                                <div class="particle-packet"></div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. CORE SCIENTIFIC THRUSTS (4 PHYSICS PILLARS)
         ========================================================================= -->
    <section id="scientific-thrusts" class="mc-section mc-bg-parchment mc-border-bottom" style="padding: 5.5rem 2rem; background: #f8fafc;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">

            <div class="mc-section-header" style="text-align: center; margin-bottom: 4rem;">
                <span class="mc-section-kicker" style="color: #ec4899; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Physical Portfolios</span>
                <h2 class="mc-section-title" style="font-size: 2.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.85rem 0;">Pillars of Condensed Matter &amp; Materials</h2>
                <p style="color: #64748b; font-size: 1.05rem; line-height: 1.7; max-width: 760px; margin: 0 auto;">
                    PARC pioneers fundamental and applied physics research to engineer advanced materials for renewable energy, photonics, and electronics.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">

                <!-- Pillar 1: Quantum Materials -->
                <div class="amsarc-pillar-card" style="border-top-color: #ec4899;">
                    <div>
                        <div class="quantum-3d-stage">
                            <div class="quantum-orb"></div>
                            <div class="quantum-orb"></div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #ec4899; text-transform: uppercase; letter-spacing: 1px;">Quantum Physics</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Quantum Materials &amp; Superconductivity</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Investigating topological insulators and high-temperature superconductors to develop zero-loss energy transmission lines and quantum computing qubits.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ Cryogenic Dilution Refrigerator Testing</li>
                        <li>✔️ Topological Phase Transition Mapping</li>
                        <li>✔️ Superconducting Wire Fabrication</li>
                    </ul>
                </div>

                <!-- Pillar 2: Crystal Structure Analysis -->
                <div class="amsarc-pillar-card" style="border-top-color: #8b5cf6;">
                    <div>
                        <div class="crystal-3d-stage">
                            <div class="crystal-grid">
                                <div class="crystal-node"></div>
                                <div class="crystal-node"></div>
                                <div class="crystal-node"></div>
                                <div class="crystal-node"></div>
                            </div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #8b5cf6; text-transform: uppercase; letter-spacing: 1px;">Crystallography</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">X-Ray Crystallography &amp; Defect Analysis</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Precise atomic lattice mapping and stress-strain tensor evaluation of metallic alloys and ceramic composites for aerospace applications.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ High-Resolution Powder XRD</li>
                        <li>✔️ Residual Stress Mapping</li>
                        <li>✔️ Single-Crystal Atomic Refinement</li>
                    </ul>
                </div>

                <!-- Pillar 3: Semiconductor Thin Films -->
                <div class="amsarc-pillar-card" style="border-top-color: #f59e0b;">
                    <div>
                        <div class="semi-3d-stage">
                            <div class="semi-band"></div>
                            <div class="semi-band"></div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #f59e0b; text-transform: uppercase; letter-spacing: 1px;">Semiconductor Physics</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Semiconductor Thin-Film Fabrication</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Molecular beam epitaxy and chemical vapor deposition of perovskite solar cells and microelectronic silicon wafers.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ Molecular Beam Epitaxy (MBE)</li>
                        <li>✔️ Photovoltaic Efficiency Optimization</li>
                        <li>✔️ Wide-Bandgap Semiconductor Doping</li>
                    </ul>
                </div>

                <!-- Pillar 4: Plasma & Ion Beams -->
                <div class="amsarc-pillar-card" style="border-top-color: #06b6d4;">
                    <div>
                        <div class="plasma-3d-stage">
                            <div class="plasma-field"></div>
                            <div class="plasma-core"></div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #06b6d4; text-transform: uppercase; letter-spacing: 1px;">Plasma Dynamics</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Plasma Confinement &amp; Ion Implantation</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Studying magnetically confined plasma interactions and ion-beam surface modification to harden industrial materials against corrosion.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ Tokamak Plasma Diagnostics</li>
                        <li>✔️ High-Energy Ion Implantation</li>
                        <li>✔️ Surface Hardening &amp; Nitriding</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. VISUAL FACILITY BROADCAST: LABORATORY TOUR
         ========================================================================= -->
    <section id="parc-video" class="mc-section mc-bg-white mc-border-bottom" style="padding: 5.5rem 2rem;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header" style="text-align: center; margin-bottom: 3.5rem;">
                <span class="mc-section-kicker" style="color: #ec4899; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Facility Telemetry</span>
                <h2 class="mc-section-title" style="font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0;">Inside the PARC Cleanrooms &amp; Beamlines</h2>
                <p style="color: #64748b; font-size: 1.05rem; line-height: 1.6; max-width: 700px; margin: 0 auto;">
                    Take a high-definition 1080p walkthrough of our particle accelerator storage rings, cryogenic testing chambers, and X-ray diffraction labs.
                </p>
            </div>

            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.06); max-width: 900px; margin: 0 auto;">
                <div style="position: relative; width: 100%; aspect-ratio: 16/9; background: #000;">
                    <iframe style="position: absolute; inset: 0; width: 100%; height: 100%; border: 0;" src="https://www.youtube-nocookie.com/embed/xyMCb7ft66k" title="PARC Physics Labs" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div style="padding: 2.5rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem;">
                    <div>
                        <span style="font-size: 0.78rem; font-weight: 800; color: #ec4899; text-transform: uppercase; display: block; margin-bottom: 0.25rem;">Virtual Demonstration</span>
                        <h4 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Synchrotron Radiation &amp; Materials Testing</h4>
                        <p style="font-size: 0.92rem; color: #64748b; margin: 0; max-width: 550px;">
                            Witness how our high-energy beamlines illuminate atomic structures with angstrom-level precision.
                        </p>
                    </div>
                    <div>
                        <a href="#phys-scheduler" class="mc-btn mc-btn-primary" style="background: #ec4899; color: #ffffff; text-decoration: none; padding: 0.8rem 1.6rem; border-radius: 8px; font-weight: 800; font-size: 0.9rem;">Book Beamline Time &rarr;</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         4. LIMS SCHEDULER & BEAMLINE ACCESS PORTAL
         ========================================================================= -->
    <section id="phys-scheduler" class="mc-section mc-bg-parchment" style="padding: 5.5rem 2rem; background: #f8fafc;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="amsarc-terminal-box">
                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(236, 72, 153, 0.3); padding-bottom: 1.25rem; margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem;">
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 12px; height: 12px; background: #ef4444; border-radius: 50%; display: inline-block;"></span>
                        <span style="width: 12px; height: 12px; background: #eab308; border-radius: 50%; display: inline-block;"></span>
                        <span style="width: 12px; height: 12px; background: #22c55e; border-radius: 50%; display: inline-block;"></span>
                        <span style="color: #f472b6; font-size: 0.9rem; font-weight: 700; margin-left: 0.5rem; word-break: break-all;">parc-beamline-mainframe.nistco.gov.ng</span>
                    </div>
                    <span style="color: #34d399; font-size: 0.8rem; font-weight: 700;">Beamline Subsystem: Active</span>
                </div>

                <div style="margin-bottom: 2rem;">
                    <p style="color: #f472b6; margin: 0 0 0.5rem 0;">[root@parc-beamline ~]# beamline_status --all</p>
                    <pre style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6; overflow-x: auto; margin: 0; white-space: pre-wrap; word-break: break-word;">
BEAMLINE_ID        STATUS      ENERGY     ALLOCATION       NOTES
BL_01_XRD          ACTIVE      12.4 keV   Academia_Open    High-resolution powder scan
BL_02_MBE          WARM-UP     --         Semiconductor    Vacuum bakeout in progress
BL_03_Cryo         ACTIVE      0.4 K      Quantum_Lab      Dilution fridge stable
BL_04_Plasma       IDLE        --         Open_Access      Ready for ion implantation
                    </pre>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem; border-top: 1px solid rgba(236, 72, 153, 0.3); padding-top: 1.75rem;">
                    <div>
                        <strong style="font-size: 1.15rem; color: #ffffff; display: block; margin-bottom: 0.25rem;">Require Synchrotron or Materials Characterization?</strong>
                        <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0; max-width: 600px;">Request allocated beamline time or cleanroom access under Presidential Executive Order No. 5.</p>
                    </div>
                    <div style="display: flex; gap: 1rem;">
                        <a href="mailto:physics@nistco.gov.ng?subject=Beamline%20Access%20Allocation%20Request" class="mc-btn mc-btn-primary" style="background: #ec4899; color: #ffffff; padding: 0.85rem 1.75rem; border-radius: 8px; font-weight: 800; text-decoration: none; white-space: nowrap;">
                            <span>⚡</span>
                            <span>Request Beamline Allocation</span>
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
                    <div style="width: 100%; max-width: 280px; margin: 0 auto; aspect-ratio: 1/1; border-radius: 16px; overflow: hidden; background: #1e1b4b; display: flex; align-items: center; justify-content: center; font-size: 4.5rem; border: 3px solid #ec4899;">
                        ⚛️
                    </div>
                    <span style="font-size: 0.75rem; font-weight: 800; color: #ec4899; text-transform: uppercase; display: block; margin-top: 1rem;">Principal Technical Director</span>
                    <strong style="font-size: 1.25rem; font-weight: 800; color: #0f172a; display: block;">PARC Directorate</strong>
                </div>

                <div>
                    <span class="mc-section-kicker" style="color: #ec4899; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Apex Physics Authority</span>
                    <h3 style="font-size: 1.85rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0;">Directorate of Physics &amp; Advanced Materials</h3>
                    <p style="font-size: 0.98rem; color: #64748b; line-height: 1.8; margin-bottom: 2rem;">
                        Our team of condensed matter physicists, crystallographers, and semiconductor engineers collaborate daily with national research institutions to advance quantum materials and semiconductor manufacturing.
                    </p>

                    <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; font-size: 0.9rem;">
                        <div>
                            <span style="color: #64748b; display: block; font-size: 0.8rem;">Direct Technical Inquiries:</span>
                            <strong style="color: #ec4899;">physics@nistco.gov.ng</strong>
                        </div>
                        <div>
                            <span style="color: #64748b; display: block; font-size: 0.8rem;">Campus Location:</span>
                            <strong style="color: #0f172a;">PARC Complex, NISTCO Sheda, Abuja</strong>
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
