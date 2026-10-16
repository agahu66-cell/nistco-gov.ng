<?php
/**
 * Template Name: Research Centre - BARC
 * Description: BARC single custom post type featuring 3D DNA helix animation, biological telemetry, 4 active bio-pillars, tissue culture metrics, and facility broadcasts.
 * File: single-research_centre-barc.php
 */

get_header();
?>

<style>
/* ==========================================================================
   GLOBAL FIXES & SMOOTH SCROLLING (SHATTERING THE INVISIBLE SHIELD)
   ========================================================================== */
html { scroll-behavior: smooth; }
.mc-hero-ambient-1, .mc-hero-ambient-2, .mc-hero-pattern { pointer-events: none; }

/* Force all text and buttons to the absolute front */
.mc-hero-content, .amsarc-terminal-box { position: relative; z-index: 900; pointer-events: auto; }
.mc-btn, .about-nav-pill, a { position: relative; z-index: 1000 !important; cursor: pointer; pointer-events: auto; display: inline-flex; }

/* Force all 3D animation bounding boxes to ignore mouse clicks */
.about-3d-viewport, .dna-3d-stage, .tissue-3d-stage, .gene-3d-stage, .ferment-3d-stage, .virus-3d-stage { pointer-events: none; }

/* ==========================================================================
   BARC FLAGSHIP STYLING & BIOLOGICAL TELEMETRY
   ========================================================================== */
.amsarc-hud-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.25rem; margin-top: 2.5rem; }
.amsarc-hud-card { background: rgba(2, 26, 16, 0.85); border: 1px solid rgba(52, 211, 153, 0.3); border-radius: 12px; padding: 1.25rem; backdrop-filter: blur(10px); box-shadow: 0 10px 25px rgba(0,0,0,0.3); transition: transform 0.2s, border-color 0.2s; }
.amsarc-hud-card:hover { transform: translateY(-3px); border-color: #34d399; }
.amsarc-hud-label { font-size: 0.72rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; color: #34d399; display: block; margin-bottom: 0.35rem; }
.amsarc-hud-val { font-size: 1.6rem; font-weight: 800; color: #ffffff; font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace; }
.amsarc-hud-status { font-size: 0.75rem; color: #86efac; display: flex; align-items: center; gap: 0.35rem; margin-top: 0.35rem; }
.amsarc-pillar-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; border-top: 4px solid #10b981; transition: transform 0.25s ease, box-shadow 0.25s ease; position: relative; z-index: 10; }
.amsarc-pillar-card:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(16, 185, 129, 0.12); z-index: 20; }
.amsarc-terminal-box { background: #021a10; border: 1px solid rgba(52, 211, 153, 0.4); border-radius: 16px; padding: 2.5rem; color: #ffffff; font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace; overflow: hidden; }

/* ==========================================================================
   ANIMATIONS: 3D DNA HERO & 4 BIO-PILLARS
   ========================================================================== */

/* Hero: 3D DNA Double Helix Animation */
.dna-3d-stage { width: 100%; max-width: 320px; height: 320px; position: relative; perspective: 1000px; display: flex; align-items: center; justify-content: center; }
.dna-helix { width: 60px; height: 240px; position: relative; transform-style: preserve-3d; animation: spinDna 8s linear infinite; }
.dna-strand { position: absolute; width: 100%; height: 100%; transform-style: preserve-3d; }
.dna-pair { position: absolute; width: 100%; height: 2px; background: rgba(52, 211, 153, 0.4); top: var(--top); transform: rotateY(var(--rot)); transform-style: preserve-3d; }
.dna-pair::before, .dna-pair::after { content: ''; position: absolute; width: 12px; height: 12px; border-radius: 50%; top: -5px; box-shadow: 0 0 10px currentColor; }
.dna-pair::before { left: -6px; background: #34d399; color: #34d399; }
.dna-pair::after { right: -6px; background: #38bdf8; color: #38bdf8; }

@keyframes spinDna { 0% { transform: rotateY(0deg); } 100% { transform: rotateY(360deg); } }

/* Pillar 1: Pulsing Tissue Culture Leaf */
.tissue-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; display: flex; align-items: center; justify-content: center; }
.tissue-core { width: 30px; height: 30px; background: #10b981; border-radius: 0 50% 0 50%; box-shadow: 0 0 15px rgba(16,185,129,0.6); animation: pulseLeaf 2s infinite alternate ease-in-out; transform-origin: bottom left; }
@keyframes pulseLeaf { 0% { transform: scale(0.9) rotate(-10deg); } 100% { transform: scale(1.1) rotate(5deg); box-shadow: 0 0 25px rgba(16,185,129,0.9); } }

/* Pillar 2: Synthetic Biology Gene Rings */
.gene-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; perspective: 600px; }
.gene-lattice { width: 100%; height: 100%; position: absolute; transform-style: preserve-3d; animation: spinGene 10s linear infinite; }
.gene-ring { position: absolute; top: 10px; left: 10px; width: 40px; height: 40px; border: 3px solid #8b5cf6; border-radius: 30%; box-shadow: 0 0 10px rgba(139,92,246,0.5); }
.gene-ring:nth-child(1) { transform: rotateX(45deg); border-color: #a78bfa; }
.gene-ring:nth-child(2) { transform: rotateY(60deg) rotateX(-45deg); border-color: #8b5cf6; }
.gene-ring:nth-child(3) { transform: rotateZ(90deg) rotateY(45deg); border-color: #c4b5fd; }
@keyframes spinGene { 0% { transform: rotateX(0deg) rotateY(0deg); } 100% { transform: rotateX(360deg) rotateY(360deg); } }

/* Pillar 3: Bioreactor Fermentation Bubbles */
.ferment-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; background: rgba(245,158,11,0.1); border: 2px solid #f59e0b; border-radius: 10px 10px 30px 30px; overflow: hidden; box-shadow: inset 0 0 15px rgba(245,158,11,0.2); }
.ferment-bubble { position: absolute; bottom: -10px; background: rgba(252,211,77,0.8); border-radius: 50%; animation: riseBubble 2.5s infinite ease-in; box-shadow: 0 0 5px #fbbf24; }
.ferment-bubble:nth-child(1) { width: 12px; height: 12px; left: 15px; animation-duration: 2.2s; }
.ferment-bubble:nth-child(2) { width: 8px; height: 8px; left: 35px; animation-duration: 1.8s; animation-delay: 0.5s; }
.ferment-bubble:nth-child(3) { width: 14px; height: 14px; left: 25px; animation-duration: 2.8s; animation-delay: 1s; }
@keyframes riseBubble { 0% { bottom: -10px; transform: scale(1) translateX(0); opacity: 1; } 100% { bottom: 65px; transform: scale(1.5) translateX(-5px); opacity: 0; } }

/* Pillar 4: Molecular Virology Core */
.virus-3d-stage { width: 60px; height: 60px; position: relative; margin-bottom: 1.5rem; }
.virus-core { position: absolute; top: 15px; left: 15px; width: 30px; height: 30px; background: #ec4899; border-radius: 50%; box-shadow: 0 0 20px rgba(236,72,153,0.6); animation: pulseVirus 1.5s infinite alternate; }
.virus-spike { position: absolute; top: 50%; left: 50%; width: 50px; height: 2px; background: #f472b6; margin-top: -1px; margin-left: -25px; animation: spinCfd 6s linear infinite; }
.virus-spike:nth-child(2) { transform: rotate(45deg); }
.virus-spike:nth-child(3) { transform: rotate(90deg); }
.virus-spike:nth-child(4) { transform: rotate(135deg); }
@keyframes pulseVirus { 0% { transform: scale(0.9); } 100% { transform: scale(1.1); box-shadow: 0 0 30px rgba(236,72,153,0.9); } }

</style>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: BIOLOGICAL TELEMETRY & 3D DNA HELIX
         ========================================================================= -->
    <section class="mc-hero-section mc-news-hero" style="background: linear-gradient(135deg, #021a10 0%, #032516 50%, #022013 100%);">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container" style="max-width: 1440px; margin: 0 auto; position: relative; z-index: 2;">
            <div class="mc-hero-grid" style="display: grid; grid-template-columns: 1.25fr 0.75fr; gap: 4rem; align-items: center;">

                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb" style="margin-bottom: 1rem; font-size: 0.95rem;">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #34d399; font-weight: 700; text-decoration: none;">🏠 Home</a>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <a href="<?php echo esc_url( home_url( '/about-us/#centres-section' ) ); ?>" style="color: #cbd5e1; text-decoration: none;">Research Centres</a>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <span class="breadcrumb-current" style="color: #6ee7b7; font-weight: 700;">BARC Biotechnology</span>
                    </nav>

                    <div class="mc-hero-badges" style="display: flex; gap: 0.75rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
                        <span class="mc-pill mc-pill-green" style="background: #10b981; color: #ffffff;">Centre of Excellence</span>
                        <span class="mc-pill mc-pill-gold" style="background: #0ea5e9; color: #ffffff;">Genomics &amp; Tissue Culture</span>
                    </div>

                    <h1 class="mc-hero-title" style="font-size: clamp(2.3rem, 4vw, 3.6rem); font-weight: 800; line-height: 1.15; margin: 0 0 1rem 0; color: #ffffff;">
                        Biotechnology Advanced Research Centre (BARC)
                    </h1>

                    <p class="mc-hero-subtitle" style="font-size: 1.15rem; color: #cbd5e1; max-width: 780px; line-height: 1.7; margin-bottom: 2rem;">
                        Nigeria’s premier bio-innovation hub, scaling indigenous agricultural tissue culture, molecular diagnostics, bio-processing fermentation, and synthetic biology for national food and health security.
                    </p>

                    <div class="about-nav-pill-group" style="display: flex; gap: 0.75rem; flex-wrap: wrap; align-items: center;">
                        <a href="#bio-scheduler" class="mc-btn mc-btn-primary" style="background: #10b981; color: #ffffff; text-decoration: none; padding: 0.75rem 1.6rem; border-radius: 8px; font-weight: 800; display: inline-flex; align-items: center; gap: 0.5rem;">
                            <span>🧬</span>
                            <span>Book Sequencer Runs</span>
                        </a>
                        <a href="#scientific-thrusts" class="about-nav-pill" style="background: rgba(255,255,255,0.08); color: #ffffff; text-decoration: none; padding: 0.75rem 1.25rem; border-radius: 8px; font-weight: 700; border: 1px solid rgba(255,255,255,0.2);">🔬 Research Thrusts</a>
                        <a href="#barc-video" class="about-nav-pill" style="background: rgba(255,255,255,0.08); color: #ffffff; text-decoration: none; padding: 0.75rem 1.25rem; border-radius: 8px; font-weight: 700; border: 1px solid rgba(255,255,255,0.2);">🎥 Laboratory Tour</a>
                    </div>

                    <!-- Live Hardware Telemetry HUD -->
                    <div class="amsarc-hud-grid">
                        <div class="amsarc-hud-card" style="border-color: rgba(52, 211, 153, 0.3);">
                            <span class="amsarc-hud-label" style="color: #34d399;">Tissue Culture Output</span>
                            <div class="amsarc-hud-val">1.2M</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#34d399; border-radius:50%; display:inline-block;"></span> Seedlings Annually</div>
                        </div>

                        <div class="amsarc-hud-card" style="border-color: rgba(52, 211, 153, 0.3);">
                            <span class="amsarc-hud-label" style="color: #34d399;">Sequencing Throughput</span>
                            <div class="amsarc-hud-val">24 Tb</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#34d399; border-radius:50%; display:inline-block;"></span> NovaSeq Illumina Active</div>
                        </div>

                        <div class="amsarc-hud-card" style="border-color: rgba(52, 211, 153, 0.3);">
                            <span class="amsarc-hud-label" style="color: #34d399;">Bioreactor Scale-Up</span>
                            <div class="amsarc-hud-val">5,000L</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#34d399; border-radius:50%; display:inline-block;"></span> Fermentation Pilot Plant</div>
                        </div>

                        <div class="amsarc-hud-card" style="border-color: rgba(52, 211, 153, 0.3);">
                            <span class="amsarc-hud-label" style="color: #34d399;">Containment Level</span>
                            <div class="amsarc-hud-val">BSL-3</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#ef4444; border-radius:50%; display:inline-block; animation: pulseLeaf 1s infinite alternate;"></span> Bio-Safety Lab Secure</div>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Interactive 3D DNA Helix -->
                <div class="about-3d-viewport">
                    <div class="dna-3d-stage">
                        <div class="dna-helix">
                            <div class="dna-strand">
                                <?php 
                                // Generate 12 DNA rungs using CSS custom properties for rotation and position
                                for($i = 0; $i < 12; $i++) {
                                    $rot = $i * 30; // 30 degrees per rung
                                    $top = $i * 20; // 20px spacing
                                    echo "<div class='dna-pair' style='--rot: {$rot}deg; --top: {$top}px;'></div>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. CORE SCIENTIFIC THRUSTS (ALL 4 BIO-PILLARS)
         ========================================================================= -->
    <section id="scientific-thrusts" class="mc-section mc-bg-parchment mc-border-bottom" style="padding: 5.5rem 2rem; background: #f8fafc;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">

            <div class="mc-section-header" style="text-align: center; margin-bottom: 4rem;">
                <span class="mc-section-kicker" style="color: #10b981; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Biological Portfolios</span>
                <h2 class="mc-section-title" style="font-size: 2.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.85rem 0;">Pillars of Agro-Medical Innovation</h2>
                <p style="color: #64748b; font-size: 1.05rem; line-height: 1.7; max-width: 760px; margin: 0 auto;">
                    BARC drives indigenous research from petri dish validation to multi-ton industrial fermentation, ensuring Nigeria's bio-economy remains self-sustaining.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">

                <!-- Pillar 1: Active 3D Tissue Culture Leaf -->
                <div class="amsarc-pillar-card" style="border-top-color: #10b981;">
                    <div>
                        <div class="tissue-3d-stage">
                            <div class="tissue-core"></div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #10b981; text-transform: uppercase; letter-spacing: 1px;">Agricultural Food Security</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Plant Tissue Culture Nurseries</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Rapid clonal propagation of disease-resistant, high-yield cash crops including yam, cassava, and elite oil palm strains inside climate-controlled phytotrons.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ Micropropagation &amp; Meristem Culturing</li>
                        <li>✔️ Phytosanitary Disease Indexing</li>
                        <li>✔️ Commercial Seedling Distribution</li>
                    </ul>
                </div>

                <!-- Pillar 2: Active 3D Synthetic Biology Genes -->
                <div class="amsarc-pillar-card" style="border-top-color: #8b5cf6;">
                    <div>
                        <div class="gene-3d-stage">
                            <div class="gene-lattice">
                                <div class="gene-ring"></div>
                                <div class="gene-ring"></div>
                                <div class="gene-ring"></div>
                            </div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #8b5cf6; text-transform: uppercase; letter-spacing: 1px;">Genomics &amp; Bioinformatics</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Genetic Engineering &amp; CRISPR</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Next-generation DNA/RNA sequencing and synthetic genome editing to isolate drought-resistant traits and combat endemic agro-pathogens.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ High-Throughput Illumina NovaSeq</li>
                        <li>✔️ Recombinant DNA Construction</li>
                        <li>✔️ Genomic Marker-Assisted Breeding</li>
                    </ul>
                </div>

                <!-- Pillar 3: Active Bioreactor Bubbles -->
                <div class="amsarc-pillar-card" style="border-top-color: #f59e0b;">
                    <div>
                        <div class="ferment-3d-stage">
                            <div class="ferment-bubble"></div>
                            <div class="ferment-bubble"></div>
                            <div class="ferment-bubble"></div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #f59e0b; text-transform: uppercase; letter-spacing: 1px;">Industrial Scale-Up</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Bio-Processing &amp; Fermentation</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Scaling benchtop microbial cultures into 5,000-liter automated bioreactors for the mass production of indigenous bio-fertilizers, enzymes, and organic resins.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ Automated Submerged Fermentation</li>
                        <li>✔️ Downstream Protein Purification</li>
                        <li>✔️ Pilot Plant Commercial Licensing</li>
                    </ul>
                </div>

                <!-- Pillar 4: Active Virology Core -->
                <div class="amsarc-pillar-card" style="border-top-color: #ec4899;">
                    <div>
                        <div class="virus-3d-stage">
                            <div class="virus-core"></div>
                            <div class="virus-spike"></div>
                            <div class="virus-spike"></div>
                            <div class="virus-spike"></div>
                            <div class="virus-spike"></div>
                        </div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #ec4899; text-transform: uppercase; letter-spacing: 1px;">Medical Biotechnology</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Molecular Diagnostics &amp; Virology</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Operating advanced BSL-3 containment facilities to sequence viral genomes, develop rapid immunodiagnostic kits, and investigate neglected tropical diseases.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ BSL-3 Pathogen Isolation Labs</li>
                        <li>✔️ Monoclonal Antibody Production</li>
                        <li>✔️ PCR-Based Epidemic Surveillance</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. VISUAL FACILITY BROADCAST: CLEANROOM & LAB TOUR
         ========================================================================= -->
    <section id="barc-video" class="mc-section mc-bg-white mc-border-bottom" style="padding: 5.5rem 2rem;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header" style="text-align: center; margin-bottom: 3.5rem;">
                <span class="mc-section-kicker" style="color: #10b981; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Facility Telemetry</span>
                <h2 class="mc-section-title" style="font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0;">Inside the BARC Cleanroom Facilities</h2>
                <p style="color: #64748b; font-size: 1.05rem; line-height: 1.6; max-width: 700px; margin: 0 auto;">
                    Take a high-definition 1080p walkthrough of our Class 100 laminar flow hoods, massive tissue culture growth rooms, and pilot fermentation plants.
                </p>
            </div>

            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.06); max-width: 900px; margin: 0 auto;">
                <div style="position: relative; width: 100%; aspect-ratio: 16/9; background: #000;">
                    <iframe style="position: absolute; inset: 0; width: 100%; height: 100%; border: 0;" src="https://www.youtube-nocookie.com/embed/xyMCb7ft66k" title="BARC Biotechnology Labs" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div style="padding: 2.5rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem;">
                    <div>
                        <span style="font-size: 0.78rem; font-weight: 800; color: #10b981; text-transform: uppercase; display: block; margin-bottom: 0.25rem;">Virtual Demonstration</span>
                        <h4 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">From Petri Dish to Pilot Plant</h4>
                        <p style="font-size: 0.92rem; color: #64748b; margin: 0; max-width: 550px;">
                            See how our researchers isolate genetic traits and scale production to industrial commercial capacity.
                        </p>
                    </div>
                    <div>
                        <a href="#bio-scheduler" class="mc-btn mc-btn-primary" style="background: #10b981; color: #ffffff; text-decoration: none; padding: 0.8rem 1.6rem; border-radius: 8px; font-weight: 800; font-size: 0.9rem;">Book Lab Access &rarr;</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         4. SEQUENCER / BIOREACTOR SCHEDULER DESK
         ========================================================================= -->
    <section id="bio-scheduler" class="mc-section mc-bg-parchment" style="padding: 5.5rem 2rem; background: #f8fafc;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="amsarc-terminal-box">
                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(52, 211, 153, 0.3); padding-bottom: 1.25rem; margin-bottom: 2rem; flex-wrap: wrap; gap: 1rem;">
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 12px; height: 12px; background: #ef4444; border-radius: 50%; display: inline-block;"></span>
                        <span style="width: 12px; height: 12px; background: #eab308; border-radius: 50%; display: inline-block;"></span>
                        <span style="width: 12px; height: 12px; background: #22c55e; border-radius: 50%; display: inline-block;"></span>
                        <span style="color: #34d399; font-size: 0.9rem; font-weight: 700; margin-left: 0.5rem; word-break: break-all;">barc-lims-mainframe.nistco.gov.ng</span>
                    </div>
                    <span style="color: #86efac; font-size: 0.8rem; font-weight: 700;">LIMS Subsystem: Active</span>
                </div>

                <div style="margin-bottom: 2rem;">
                    <p style="color: #86efac; margin: 0 0 0.5rem 0;">[root@barc-lims ~]# instrument_status --check-all</p>
                    <pre style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6; overflow-x: auto; margin: 0; white-space: pre-wrap; word-break: break-word;">
EQUIPMENT_ID      STATUS      RUNTIME    ALLOCATION       NOTES
Seq_Nova_01       ACTIVE      14h:22m    Genomics_Div     Flow cell A optimal
Bioreactor_5K     WARM-UP     00h:45m    Pilot_Plant_2    Temp stabilized 37C
PCR_Thermocycler  IDLE        --         Open_Access      Available for booking
HPLC_Agilent      MAINT       --         Chemistry_Lab    Calibrating pumps...
                    </pre>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem; border-top: 1px solid rgba(52, 211, 153, 0.3); padding-top: 1.75rem;">
                    <div>
                        <strong style="font-size: 1.15rem; color: #ffffff; display: block; margin-bottom: 0.25rem;">Require Specialized Biological Equipment?</strong>
                        <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0; max-width: 600px;">Request allocated runs on our high-throughput sequencers, NMR spectrometers, or bioreactors under Presidential Executive Order No. 5.</p>
                    </div>
                    <div style="display: flex; gap: 1rem;">
                        <a href="mailto:biotech@nistco.gov.ng?subject=Equipment%20Run%20Allocation%20Request" class="mc-btn mc-btn-primary" style="background: #10b981; color: #ffffff; padding: 0.85rem 1.75rem; border-radius: 8px; font-weight: 800; text-decoration: none; white-space: nowrap;">
                            <span>🧬</span>
                            <span>Request Equipment Allocation</span>
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
                    <div style="width: 100%; max-width: 280px; margin: 0 auto; aspect-ratio: 1/1; border-radius: 16px; overflow: hidden; background: #022c22; display: flex; align-items: center; justify-content: center; font-size: 4.5rem; border: 3px solid #10b981;">
                        🔬
                    </div>
                    <span style="font-size: 0.75rem; font-weight: 800; color: #10b981; text-transform: uppercase; display: block; margin-top: 1rem;">Principal Technical Director</span>
                    <strong style="font-size: 1.25rem; font-weight: 800; color: #0f172a; display: block;">BARC Directorate</strong>
                </div>

                <div>
                    <span class="mc-section-kicker" style="color: #10b981; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Apex Biological Authority</span>
                    <h3 style="font-size: 1.85rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0;">Directorate of Biotechnology</h3>
                    <p style="font-size: 0.98rem; color: #64748b; line-height: 1.8; margin-bottom: 2rem;">
                        Our team of geneticists, agronomists, and biochemists collaborate daily with federal universities and agricultural ministries to cultivate disease-resistant crops and pioneer synthetic diagnostics for a healthier nation.
                    </p>

                    <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; font-size: 0.9rem;">
                        <div>
                            <span style="color: #64748b; display: block; font-size: 0.8rem;">Direct Technical Inquiries:</span>
                            <strong style="color: #10b981;">biotech@nistco.gov.ng</strong>
                        </div>
                        <div>
                            <span style="color: #64748b; display: block; font-size: 0.8rem;">Campus Location:</span>
                            <strong style="color: #0f172a;">BARC Complex, NISTCO Sheda, Abuja</strong>
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
