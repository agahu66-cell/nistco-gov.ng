<?php
/**
 * Template Name: Innovation & Technology Commercialization
 * Description: Flagship innovation portal showcasing Technology Readiness Levels (TRL), interactive patent filter, pilot demonstration plants, NOTAP technology transfer, and online licensing application modal.
 * File: page-innovation.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: 3D INNOVATION CATALYST & COMMERCIALIZATION ENGINE
         ========================================================================= -->
    <section class="mc-hero-section mc-innovation-hero">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container">
            <div class="mc-hero-grid">

                <!-- Left Column: Innovation Header & Actions -->
                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">Innovation &amp; Technology Transfer</span>
                    </nav>

                    <div class="mc-hero-badges">
                        <span class="mc-pill mc-pill-gold">⚡ Technology Commercialization</span>
                        <span class="mc-pill mc-pill-green">Executive Order No. 5 Aligned</span>
                    </div>

                    <h1 class="mc-hero-title">
                        Translating Frontier Science into Sovereign Industrial Wealth
                    </h1>

                    <p class="mc-hero-subtitle">
                        NISTCO bridges the gap between basic laboratory discoveries and commercial industrial
                        manufacturing by operating high-capacity demonstration pilot plants, licensing indigenous
                        patents, and incubating deep-tech spin-offs.
                    </p>

                    <div class="mc-hero-actions" style="margin-bottom: 2rem;">
                        <a href="#patents" class="mc-btn mc-btn-primary">
                            <span>📜</span>
                            <span>Explore Patent Portfolio</span>
                        </a>

                        <a href="#trl-pipeline" class="mc-btn mc-btn-secondary">
                            <span>📊</span>
                            <span>TRL 1–9 Pipeline</span>
                        </a>

                        <button type="button" class="mc-btn mc-btn-gold inno-open-eoi-modal"
                            data-patent-title="General Technology Transfer Inquiry" data-patent-ref="NISTCO/GEN/EOI">
                            <span>🤝</span>
                            <span>Submit Licensing EOI &rarr;</span>
                        </button>
                    </div>

                    <div class="about-nav-pill-group">
                        <span class="jump-label">Jump To:</span>
                        <a href="#trl-pipeline" class="about-nav-pill">📊 TRL Framework</a>
                        <a href="#patents" class="about-nav-pill">📜 Patents &amp; Search</a>
                        <a href="#pilot-plants" class="about-nav-pill">🏭 Pilot Plants</a>
                        <a href="#tech-transfer" class="about-nav-pill">🤝 Tech Transfer (NOTAP)</a>
                    </div>
                </div>

                <!-- Right Column: ACTIVE MOTION SVG (3D Innovation Catalyst Matrix) -->
                <div class="about-3d-viewport">
                    <div class="about-3d-stage">
                        <svg class="mc-active-svg-canvas" viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <defs>
                                <linearGradient id="innoHexGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#fef08a" />
                                    <stop offset="50%" stop-color="#059669" />
                                    <stop offset="100%" stop-color="#042416" />
                                </linearGradient>
                                <linearGradient id="innoCyanGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#7dd3fc" />
                                    <stop offset="50%" stop-color="#0284c7" />
                                    <stop offset="100%" stop-color="#082f49" />
                                </linearGradient>
                            </defs>

                            <!-- Outer Kinetic Hexagonal Lattice -->
                            <polygon points="160,20 280,85 280,235 160,300 40,235 40,85" fill="none"
                                stroke="url(#innoHexGrad)" stroke-width="2.5" class="svg-rot-cw-slow" />
                            <polygon points="160,50 250,100 250,220 160,270 70,220 70,100" fill="none"
                                stroke="url(#innoCyanGrad)" stroke-width="1.5" stroke-dasharray="6 4"
                                class="svg-rot-ccw-mid" />
                            <circle cx="160" cy="160" r="120" fill="none" stroke="rgba(255,255,255,0.12)"
                                stroke-width="1.5" />

                            <!-- Gyroscopic Technology Orbit Rings -->
                            <circle cx="160" cy="160" r="85" fill="none" stroke="#86efac" stroke-width="1.8"
                                stroke-dasharray="8 6" class="svg-rot-cw-fast" />

                            <!-- Central Catalyst Core -->
                            <g class="svg-pulse-core">
                                <circle cx="160" cy="160" r="32" fill="#042416" stroke="#fde047" stroke-width="2.5" />
                                <text x="160" y="168" text-anchor="middle" font-size="22" fill="#fde047">💡</text>
                            </g>
                        </svg>
                    </div>
                </div>

            </div>
        </div>

        <!-- Docked Commercialization Metrics Ribbon -->
        <div class="about-factlet-bar">
            <div class="container about-factlet-container">
                <div class="factlet-item">
                    <span class="factlet-kicker">Technology Pipeline</span>
                    <strong class="factlet-value">TRL 1 to 9 Full Lifecycle</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Registered Inventions</span>
                    <strong class="factlet-value">16+ Indigenous Patents</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Demonstration Facilities</span>
                    <strong class="factlet-value">4 Industrial Pilot Plants</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">IP Licensing Partner</span>
                    <strong class="factlet-value">NOTAP / FMIST Verified</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. TECHNOLOGY READINESS LEVEL (TRL 1-9) TRANSLATION PIPELINE
         ========================================================================= -->
    <section id="trl-pipeline" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">De-Risking Technology</span>
                <h2 class="mc-section-title">The 9-Stage Technology Readiness Lifecycle</h2>
                <p class="mc-section-lead">
                    How NISTCO bridges the "Valley of Death" between academic laboratory theory and market-tested
                    industrial deployment.
                </p>
            </div>

            <div class="inno-trl-grid">

                <div class="inno-trl-phase-card reveal-on-scroll">
                    <div class="inno-trl-badge phase-research">TRL 1 — 3</div>
                    <span class="inno-phase-kicker">Phase 1: Basic Science</span>
                    <h3 class="inno-phase-title">Frontier Lab Discovery</h3>
                    <p class="inno-phase-desc">
                        Fundamental laboratory investigation, computational simulations, spectroscopic NMR validation,
                        and proof-of-concept synthesis across our 6 Advanced Research Centres.
                    </p>
                    <ul class="inno-phase-deliverables">
                        <li>Peer-Reviewed Publications</li>
                        <li>Mathematical &amp; CFD Models</li>
                        <li>Bench-Scale Synthesis Proof</li>
                    </ul>
                </div>

                <div class="inno-trl-phase-card reveal-on-scroll delay-100" style="border-top-color: var(--mc-gold);">
                    <div class="inno-trl-badge phase-pilot">TRL 4 — 6</div>
                    <span class="inno-phase-kicker">Phase 2: Demonstration</span>
                    <h3 class="inno-phase-title">Pilot Scale &amp; Prototyping</h3>
                    <p class="inno-phase-desc">
                        Moving discoveries out of glassware into our 500-liter chemical synthesis reactors, tissue
                        micropropagation green houses, and machine tooling workshops to validate industrial viability.
                    </p>
                    <ul class="inno-phase-deliverables">
                        <li>500-Liter Batch Pilot Trials</li>
                        <li>Hardware &amp; Tool Prototyping</li>
                        <li>Field Agricultural Trials</li>
                    </ul>
                </div>

                <div class="inno-trl-phase-card reveal-on-scroll delay-200" style="border-top-color: #0284c7;">
                    <div class="inno-trl-badge phase-market">TRL 7 — 9</div>
                    <span class="inno-phase-kicker">Phase 3: Market Translation</span>
                    <h3 class="inno-phase-title">Patenting &amp; Enterprise Transfer</h3>
                    <p class="inno-phase-desc">
                        NOTAP-certified patent registration, intellectual property licensing, private sector joint
                        ventures, and incubation of high-technology commercial spin-offs under Executive Order No. 5.
                    </p>
                    <ul class="inno-phase-deliverables">
                        <li>NOTAP Patent Certification</li>
                        <li>Private Industry Licensing Agreements</li>
                        <li>Commercial Manufacturing Deployment</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. INTERACTIVE SEARCH, FILTER & PATENT PORTFOLIO
         ========================================================================= -->
    <section id="patents" class="mc-section mc-bg-parchment mc-border-top mc-border-bottom">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Commercial Inventions Directory</span>
                <h2 class="mc-section-title">Active Patents &amp; Market-Ready Technologies</h2>
                <p class="mc-section-lead">
                    Search and filter verified indigenous technologies ready for immediate industrial licensing, pilot
                    plant validation, or enterprise manufacturing.
                </p>
            </div>

            <!-- Interactive Technology Filter & Search Toolbar -->
            <div class="inno-filter-toolbar reveal-on-scroll">

                <!-- Live Search Bar -->
                <div class="inno-search-box">
                    <span class="search-icon">🔍</span>
                    <input type="text" id="inno-tech-search"
                        placeholder="Search technologies, patents, keywords (e.g. bio-fertilizer, polymer, cipher, gamma)..."
                        aria-label="Search technologies">
                    <button type="button" id="inno-search-clear" class="search-clear-btn"
                        style="display: none;">&times;</button>
                </div>

                <!-- Centre Filter Pills -->
                <div class="inno-filter-pills" id="inno-filter-pills">
                    <button type="button" class="filter-pill is-active" data-filter="all">All Disciplines</button>
                    <button type="button" class="filter-pill" data-filter="biotech">🧬 Biotechnology (BARC)</button>
                    <button type="button" class="filter-pill" data-filter="simulation">💻 Simulation &amp; HPC
                        (AMSARC)</button>
                    <button type="button" class="filter-pill" data-filter="chemistry">🧪 Chemical Sciences
                        (CARC)</button>
                    <button type="button" class="filter-pill" data-filter="physics">🔬 Physical Sciences (PARC)</button>
                    <button type="button" class="filter-pill" data-filter="nuclear">⚛️ Nuclear Technology (NTC)</button>
                </div>

                <!-- Live Results Counter -->
                <div class="inno-filter-status">
                    <span id="inno-results-count">Showing verified commercial technologies</span>
                </div>

            </div>

            <!-- Patent Cards Grid -->
            <div class="inno-patents-grid" id="inno-patents-grid">

                <!-- Tech 1: Bio-Fertilizer (Biotech) -->
                <article class="inno-patent-card reveal-on-scroll" data-centre="biotech"
                    data-keywords="bio fertilizer microbial soil nitrogen agriculture crop yield barc">
                    <div class="inno-patent-header">
                        <span class="inno-tag-pill tag-biotech">🧬 BARC Biotechnology</span>
                        <span class="inno-trl-pill">TRL 8: Market Ready</span>
                    </div>
                    <h3 class="inno-patent-title">Bio-Fertilizer &amp; Microbial Soil Enricher Synthesis</h3>
                    <p class="inno-patent-excerpt">
                        An organic bacterial-fungal formulation that accelerates nitrogen fixation, enhances phosphorus
                        absorption, and boosts crop yields by 35% without soil acidity degradation.
                    </p>
                    <div class="inno-patent-meta-box">
                        <div>
                            <span class="meta-label">Patent Ref:</span>
                            <strong class="meta-val">NG/P/2024/00821</strong>
                        </div>
                        <div>
                            <span class="meta-label">Licensing Model:</span>
                            <strong class="meta-val">Non-Exclusive License</strong>
                        </div>
                    </div>
                    <div class="inno-patent-footer">
                        <span class="status-indicator ready">● Ready for Production</span>
                        <a href="mailto:commercialization@shestco.gov.ng?subject=Licensing%20Inquiry%20-%20Patent%20NG%2FP%2F2024%2F00821&amp;body=Dear%20Commercialization%20Desk,%0A%0AWe%20wish%20to%20inquire%20about%20licensing%20terms%20for%20Patent%20NG%2FP%2F2024%2F00821." class="nistco-btn-license">License Technology &rarr;</a>
                    </div>
                </article>

                <!-- Tech 2: Micropropagation Suite (Biotech) -->
                <article class="inno-patent-card reveal-on-scroll delay-100" data-centre="biotech"
                    data-keywords="cassava yam tissue culture micropropagation seedlings agritech farming barc">
                    <div class="inno-patent-header">
                        <span class="inno-tag-pill tag-biotech">🧬 BARC Agritech</span>
                        <span class="inno-trl-pill">TRL 9: Commercial</span>
                    </div>
                    <h3 class="inno-patent-title">Automated Tissue-Culture Micropropagation Suite</h3>
                    <p class="inno-patent-excerpt">
                        High-throughput bioreactor system producing 500,000+ disease-free cassava and yam plantlets
                        annually with uniform genetic purity, eliminating systemic mosaic virus transmission.
                    </p>
                    <div class="inno-patent-meta-box">
                        <div>
                            <span class="meta-label">Patent Ref:</span>
                            <strong class="meta-val">NG/P/2023/00412</strong>
                        </div>
                        <div>
                            <span class="meta-label">Licensing Model:</span>
                            <strong class="meta-val">Off-Take &amp; Seed Franchise</strong>
                        </div>
                    </div>
                    <div class="inno-patent-footer">
                        <span class="status-indicator deployed">● Actively Commercialized</span>
                        <a href="mailto:commercialization@shestco.gov.ng?subject=Licensing%20Inquiry%20-%20Patent%20NG%2FP%2F2023%2F00412&amp;body=Dear%20Commercialization%20Desk,%0A%0AWe%20wish%20to%20inquire%20about%20licensing%20terms%20for%20Patent%20NG%2FP%2F2023%2F00412." class="nistco-btn-license">License Technology &rarr;</a>
                    </div>
                </article>

                <!-- Tech 3: Cashew Polymer Resins (Chemistry) -->
                <article class="inno-patent-card reveal-on-scroll delay-200" data-centre="chemistry"
                    data-keywords="cashew cnsl polymer resin anti corrosion industrial coating brake lining carc chemistry">
                    <div class="inno-patent-header">
                        <span class="inno-tag-pill tag-chem">🧪 CARC Chemical</span>
                        <span class="inno-trl-pill">TRL 7: Pilot Proven</span>
                    </div>
                    <h3 class="inno-patent-title">Natural Cashew Nut Shell Liquid (CNSL) Polymer Resin</h3>
                    <p class="inno-patent-excerpt">
                        High-temperature, anti-corrosive industrial brake lining and surface coating binder synthesized
                        from agricultural cashew agro-waste, substituting imported phenolic resins.
                    </p>
                    <div class="inno-patent-meta-box">
                        <div>
                            <span class="meta-label">Patent Ref:</span>
                            <strong class="meta-val">NG/P/2024/01190</strong>
                        </div>
                        <div>
                            <span class="meta-label">Licensing Model:</span>
                            <strong class="meta-val">Exclusive / Joint Venture</strong>
                        </div>
                    </div>
                    <div class="inno-patent-footer">
                        <span class="status-indicator ready">● Ready for Production</span>
                        <a href="mailto:commercialization@shestco.gov.ng?subject=Licensing%20Inquiry%20-%20Patent%20NG%2FP%2F2024%2F01190&amp;body=Dear%20Commercialization%20Desk,%0A%0AWe%20wish%20to%20inquire%20about%20licensing%20terms%20for%20Patent%20NG%2FP%2F2024%2F01190." class="nistco-btn-license">License Technology &rarr;</a>
                    </div>
                </article>

                <!-- Tech 4: Cryptographic Module (Simulation) -->
                <article class="inno-patent-card reveal-on-scroll delay-300" data-centre="simulation"
                    data-keywords="cryptography cipher quantum security algorithm supercomputing amsarc mathematics defense banking">
                    <div class="inno-patent-header">
                        <span class="inno-tag-pill tag-sim">💻 AMSARC Supercomputing</span>
                        <span class="inno-trl-pill">TRL 8: Deployed</span>
                    </div>
                    <h3 class="inno-patent-title">Quantum-Resistant Algorithmic Cryptographic Cipher</h3>
                    <p class="inno-patent-excerpt">
                        A proprietary non-linear cryptographic security algorithm designed for sovereign defense
                        communications, banking networks, and federal critical data infrastructure protection.
                    </p>
                    <div class="inno-patent-meta-box">
                        <div>
                            <span class="meta-label">Patent Ref:</span>
                            <strong class="meta-val">NG/P/2025/00094</strong>
                        </div>
                        <div>
                            <span class="meta-label">Licensing Model:</span>
                            <strong class="meta-val">Sovereign / Tier 1 License</strong>
                        </div>
                    </div>
                    <div class="inno-patent-footer">
                        <span class="status-indicator ready">● Ready for Integration</span>
                        <a href="mailto:commercialization@shestco.gov.ng?subject=Licensing%20Inquiry%20-%20Patent%20NG%2FP%2F2025%2F00094&amp;body=Dear%20Commercialization%20Desk,%0A%0AWe%20wish%20to%20inquire%20about%20licensing%20terms%20for%20Patent%20NG%2FP%2F2025%2F00094." class="nistco-btn-license">License Technology &rarr;</a>
                    </div>
                </article>

                <!-- Tech 5: Gamma Seed Preservation (Nuclear) -->
                <article class="inno-patent-card reveal-on-scroll delay-100" data-centre="nuclear"
                    data-keywords="nuclear radiation gamma seed preservation crop storage ntc dosimetry">
                    <div class="inno-patent-header">
                        <span class="inno-tag-pill tag-chem" style="background:#fef3c7; color:#b45309;">⚛️ NTC
                            Nuclear</span>
                        <span class="inno-trl-pill">TRL 8: Validated</span>
                    </div>
                    <h3 class="inno-patent-title">Low-Dose Gamma Irradiation Seed Preservation Protocol</h3>
                    <p class="inno-patent-excerpt">
                        A calibrated radiation protocol that inhibits post-harvest sprouting in stored yams, onions, and
                        grains, extending national silo shelf life by 9 months without chemical residues.
                    </p>
                    <div class="inno-patent-meta-box">
                        <div>
                            <span class="meta-label">Patent Ref:</span>
                            <strong class="meta-val">NG/P/2025/00215</strong>
                        </div>
                        <div>
                            <span class="meta-label">Licensing Model:</span>
                            <strong class="meta-val">Statutory / Service Off-Take</strong>
                        </div>
                    </div>
                    <div class="inno-patent-footer">
                        <span class="status-indicator ready">● Service Protocol Ready</span>
                        <a href="mailto:commercialization@shestco.gov.ng?subject=Licensing%20Inquiry%20-%20Patent%20NG%2FP%2F2025%2F00215&amp;body=Dear%20Commercialization%20Desk,%0A%0AWe%20wish%20to%20inquire%20about%20licensing%20terms%20for%20Patent%20NG%2FP%2F2025%2F00215." class="nistco-btn-license">License Technology &rarr;</a>
                    </div>
                </article>

            </div>

            <!-- No Results State -->
            <div id="inno-no-results" class="inno-no-results-card" style="display: none;">
                <span class="no-results-icon">🔍</span>
                <h3>No Matching Technologies Found</h3>
                <p>Try adjusting your search query or clearing the discipline filter to explore available inventions.
                </p>
                <button type="button" id="inno-reset-filters" class="mc-btn mc-btn-outline"
                    style="margin-top: 1rem;">Reset Search Filters</button>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         4. PILOT DEMONSTRATION PLANTS & PROTOTYPING HUBS
         ========================================================================= -->
    <section id="pilot-plants" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Scaling Infrastructure</span>
                <h2 class="mc-section-title">Industrial Demonstration Pilot Plants</h2>
                <p class="mc-section-lead">
                    Located within our 2,000-hectare scientific campus, these pilot plants enable industrial
                    manufacturers to test batch production before committing capital to full-scale factories.
                </p>
            </div>

            <div class="inno-plants-grid">
                <div class="inno-plant-card reveal-on-scroll">
                    <div class="plant-icon-wrap">🏭</div>
                    <span class="plant-division">CARC Division</span>
                    <h3 class="plant-title">500L Chemical Process Pilot Plant</h3>
                    <p class="plant-desc">Glass-lined, stainless steel reaction vessels with fractional distillation
                        columns for scaling organic synthesis, essential oils, and resin polymers.</p>
                    <span class="plant-capacity">Capacity: 500 Liters / Batch</span>
                </div>

                <div class="inno-plant-card reveal-on-scroll delay-100">
                    <div class="plant-icon-wrap">🌱</div>
                    <span class="plant-division">BARC Division</span>
                    <h3 class="plant-title">Plant Micropropagation Demonstration Core</h3>
                    <p class="plant-desc">Climate-controlled greenhouse and automated bioreactor suite for large-scale
                        production of certified disease-free seedlings for commercial agribusiness off-takers.</p>
                    <span class="plant-capacity">Capacity: 500,000 Seedlings / Year</span>
                </div>

                <div class="inno-plant-card reveal-on-scroll delay-200">
                    <div class="plant-icon-wrap">⚙️</div>
                    <span class="plant-division">Works &amp; Services</span>
                    <h3 class="plant-title">Precision Machine Tooling &amp; Prototyping</h3>
                    <p class="plant-desc">Heavy industrial lathes, 5-axis CNC machining, plasma cutting, and precision
                        calibration equipment for fabricating replacement parts and mechanical prototypes.</p>
                    <span class="plant-capacity">Capacity: Custom Mechanical Tooling</span>
                </div>

                <div class="inno-plant-card reveal-on-scroll delay-300">
                    <div class="plant-icon-wrap">⚡</div>
                    <span class="plant-division">PARC Division</span>
                    <h3 class="plant-title">Photovoltaic &amp; Energy Materials Suite</h3>
                    <p class="plant-desc">Thin-film semiconductor characterization suite and solar simulator for testing
                        efficiency, degradation, and thermal performance of solar cells in Nigerian climatic conditions.
                    </p>
                    <span class="plant-capacity">Capacity: High-Precision Testing</span>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         5. TECHNOLOGY TRANSFER & NOTAP LICENSING GATEWAY
         ========================================================================= -->
    <section id="tech-transfer" class="mc-section mc-bg-parchment mc-border-top mc-border-bottom">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Public-Private Synergy</span>
                <h2 class="mc-section-title">The Technology Transfer &amp; Licensing Framework</h2>
                <p class="mc-section-lead">
                    A streamlined, Bureau of Public Procurement (BPP) and NOTAP-compliant pathway for private
                    enterprises, state governments, and investors to acquire and commercialize NISTCO technologies.
                </p>
            </div>

            <div class="inno-steps-grid">
                <div class="inno-step-item reveal-on-scroll">
                    <div class="step-num">01</div>
                    <h3 class="step-title">Technology Selection</h3>
                    <p class="step-desc">Review our active patent portfolio and submit an online Expression of Interest
                        (EOI) detailing your target industry application.</p>
                </div>

                <div class="inno-step-item reveal-on-scroll delay-100">
                    <div class="step-num">02</div>
                    <h3 class="step-title">Pilot Validation Trial</h3>
                    <p class="step-desc">Engage our research fellows and pilot plant facilities to execute test batches
                        and verify product specifications for your supply chain.</p>
                </div>

                <div class="inno-step-item reveal-on-scroll delay-200">
                    <div class="step-num">03</div>
                    <h3 class="step-title">NOTAP Licensing Agreement</h3>
                    <p class="step-desc">Execute formal licensing contracts, technology transfer documentation, and
                        royalty frameworks certified under national statutory standards.</p>
                </div>

                <div class="inno-step-item reveal-on-scroll delay-300">
                    <div class="step-num">04</div>
                    <h3 class="step-title">Industrial Factory Rollout</h3>
                    <p class="step-desc">NISTCO technical teams provide on-site engineering calibration, staff training,
                        and continuous R&amp;D advisory to ensure production success.</p>
                </div>
            </div>

            <!-- Licensing Dispatch Callout -->
            <div class="inno-dispatch-box reveal-on-scroll">
                <div class="dispatch-left">
                    <span class="dispatch-kicker">Intellectual Property Desk</span>
                    <h3 class="dispatch-title">Ready to Commercialize an In-House Patent?</h3>
                    <p class="dispatch-desc">
                        Submit a direct statutory Expression of Interest (EOI) to request technical datasheets, pilot
                        run schedules, and NOTAP-certified licensing terms.
                    </p>
                </div>
                <div class="dispatch-right">
                    <button type="button" class="mc-btn mc-btn-primary inno-open-eoi-modal"
                        data-patent-title="General Commercialization Inquiry" data-patent-ref="NISTCO/EOI/DIRECT"
                        style="font-size: 0.95rem; padding: 0.85rem 1.75rem;">
                        <span>📋</span>
                        <span>Submit Online Licensing EOI</span>
                    </button>
                </div>
            </div>

        </div>
    </section>

</main>

<!-- =========================================================================
     ONLINE TECHNOLOGY LICENSING & EOI APPLICATION MODAL
     ========================================================================= -->
<div id="inno-eoi-modal" class="inno-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true"
    style="display: none;">
    <div class="inno-modal-container">

        <div class="inno-modal-header">
            <div>
                <span class="inno-modal-badge">Statutory Technology Transfer EOI</span>
                <h3 id="inno-modal-tech-title" class="inno-modal-title">Expression of Interest in Technology Licensing
                </h3>
                <span id="inno-modal-patent-ref" class="inno-modal-ref">Patent Ref: Pending Selection</span>
            </div>
            <button type="button" id="inno-modal-close-btn" class="inno-modal-btn-close"
                aria-label="Close modal">&times;</button>
        </div>

        <form id="inno-licensing-form" class="inno-modal-form" method="post">
            <?php wp_nonce_field( 'shestco_inno_eoi_nonce', 'inno_nonce' ); ?>
            <input type="hidden" id="inno-form-tech-title" name="tech_title" value="">
            <input type="hidden" id="inno-form-tech-ref" name="tech_ref" value="">

            <div class="inno-form-grid">

                <div class="inno-form-group">
                    <label for="inno-applicant-name">Applicant Full Name <span class="req">*</span></label>
                    <input type="text" id="inno-applicant-name" name="applicant_name" required
                        placeholder="Dr. / Engr. / Mr. Full Name">
                </div>

                <div class="inno-form-group">
                    <label for="inno-company-name">Company / Organization Name <span class="req">*</span></label>
                    <input type="text" id="inno-company-name" name="company_name" required
                        placeholder="Registered Enterprise or Institution">
                </div>

                <div class="inno-form-group">
                    <label for="inno-cac-number">CAC Registration / RC Number</label>
                    <input type="text" id="inno-cac-number" name="cac_number" placeholder="RC-XXXXXX (if applicable)">
                </div>

                <div class="inno-form-group">
                    <label for="inno-applicant-email">Official Corporate Email <span class="req">*</span></label>
                    <input type="email" id="inno-applicant-email" name="applicant_email" required
                        placeholder="contact@company.com.ng">
                </div>

                <div class="inno-form-group">
                    <label for="inno-applicant-phone">Official Phone Number <span class="req">*</span></label>
                    <input type="tel" id="inno-applicant-phone" name="applicant_phone" required
                        placeholder="+234 800 000 0000">
                </div>

                <div class="inno-form-group">
                    <label for="inno-licensing-model">Preferred Commercialization Model <span
                            class="req">*</span></label>
                    <select id="inno-licensing-model" name="licensing_model" required>
                        <option value="Non-Exclusive Commercial License">Non-Exclusive Commercial License</option>
                        <option value="Exclusive Industry License">Exclusive Industry License</option>
                        <option value="Public-Private Partnership (PPP) / Joint Venture">Public-Private Partnership
                            (PPP) / Joint Venture</option>
                        <option value="Pilot Demonstration Plant Run Only">Pilot Demonstration Plant Run Only</option>
                    </select>
                </div>

                <div class="inno-form-group inno-form-full">
                    <label for="inno-project-scope">Proposed Commercial Application &amp; Scaling Plan <span
                            class="req">*</span></label>
                    <textarea id="inno-project-scope" name="project_scope" rows="4" required
                        placeholder="Briefly describe your target industry, planned production volume, facility location, and anticipated scaling timeline..."></textarea>
                </div>

            </div>

            <div class="inno-modal-footer">
                <span class="inno-statutory-note">🔒 Transmitted securely to the Directorate of Technology Transfer
                    (FMIST/NOTAP compliant).</span>
                <button type="submit" id="inno-submit-btn" class="mc-btn mc-btn-primary">
                    <span id="inno-btn-text">Submit Statutory EOI Dispatch &rarr;</span>
                    <span id="inno-btn-spinner" style="display: none;">⏳ Dispatching...</span>
                </button>
            </div>

            <div id="inno-form-feedback" class="inno-form-feedback" style="display: none;"></div>
        </form>

    </div>
</div>

<?php
get_footer();