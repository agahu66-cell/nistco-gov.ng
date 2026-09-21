<?php
/**
 * Template Name: Research Facilities & Core Instrumentation
 * Description: Exhaustive analytical infrastructure directory, shared equipment capabilities, and researcher access protocols for NISTCO.
 * File: page-facilities.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: 3D PRECISION SPECTROMETRY & HARMONIC WAVE MATRIX
         ========================================================================= -->
    <section class="mc-hero-section mc-facilities-hero">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container">
            <div class="mc-hero-grid">

                <!-- Left Column: Core Infrastructure Header -->
                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">Core Research Facilities</span>
                    </nav>

                    <div class="mc-hero-badges">
                        <span class="mc-pill mc-pill-green">Open Shared Analytical Hub</span>
                        <span class="mc-pill mc-pill-gold">Continuous Clean Power</span>
                    </div>

                    <h1 class="mc-hero-title">
                        National Analytical Core &amp; Industrial Demonstration Facilities
                    </h1>

                    <p class="mc-hero-subtitle">
                        NISTCO maintains a 2,000-hectare research sanctuary equipped with high-field multi-nuclear NMR
                        spectrometers, petascale supercomputing, gamma irradiation suites, and 500-liter chemical
                        synthesis demonstration plants powered by an uninterrupted solar hybrid microgrid.
                    </p>

                    <div class="mc-hero-actions" style="margin-bottom: 2rem;">
                        <a href="#analytical-suites" class="mc-btn mc-btn-primary">
                            <span>🔬</span>
                            <span>Explore 6 Core Laboratories</span>
                        </a>

                        <a href="#access-protocol" class="mc-btn mc-btn-secondary">
                            <span>📋</span>
                            <span>Access &amp; Booking Protocol</span>
                        </a>

                        <a href="<?php echo esc_url( home_url( '/innovation/#pilot-plants' ) ); ?>"
                            class="mc-btn mc-btn-gold">
                            <span>🏭</span>
                            <span>Pilot Demonstration Plants &rarr;</span>
                        </a>
                    </div>

                    <div class="about-nav-pill-group">
                        <span class="jump-label">Jump To:</span>
                        <a href="#analytical-suites" class="about-nav-pill">🔬 Core Labs</a>
                        <a href="#microgrid-power" class="about-nav-pill">⚡ Clean Power Core</a>
                        <a href="#access-protocol" class="about-nav-pill">📋 Booking Protocol</a>
                        <a href="#residency-cta" class="about-nav-pill">💼 Fellow Residencies</a>
                    </div>
                </div>

                <!-- Right Column: ACTIVE MOTION SVG (Precision Wave Oscilloscope & Harmonic Rings) -->
                <div class="about-3d-viewport">
                    <div class="about-3d-stage">
                        <svg class="mc-active-svg-canvas" viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <defs>
                                <linearGradient id="facWaveGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#38bdf8" />
                                    <stop offset="50%" stop-color="#86efac" />
                                    <stop offset="100%" stop-color="#fde047" />
                                </linearGradient>
                            </defs>

                            <!-- Outer Gyroscopic Resonator Frame -->
                            <rect x="25" y="25" width="270" height="270" rx="135" fill="none" stroke="#0d5c3a"
                                stroke-width="2.5" class="svg-rot-cw-slow" />
                            <polygon points="160,30 280,220 40,220" fill="none" stroke="url(#facWaveGrad)"
                                stroke-width="1.8" stroke-dasharray="8 4" class="svg-rot-ccw-mid" />

                            <!-- Harmonic Oscillating Wave Beams -->
                            <g class="svg-wave-bar">
                                <path d="M 50,160 Q 105,80 160,160 T 270,160" fill="none" stroke="#86efac"
                                    stroke-width="3" />
                                <path d="M 50,160 Q 105,240 160,160 T 270,160" fill="none" stroke="#fde047"
                                    stroke-width="2" opacity="0.75" />
                            </g>

                            <!-- Instrument Lens Center -->
                            <circle cx="160" cy="160" r="18" fill="#042416" stroke="#86efac" stroke-width="3"
                                class="svg-pulse-core" />
                            <circle cx="160" cy="160" r="6" fill="#fde047" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>

        <!-- Docked Quality Assurance Factlet Ribbon -->
        <div class="about-factlet-bar">
            <div class="container about-factlet-container">
                <div class="factlet-item">
                    <span class="factlet-kicker">Analytical Uptime</span>
                    <strong class="factlet-value">99.4% Continuous Instrument Availability</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Dedicated Microgrid</span>
                    <strong class="factlet-value">500 kVA Solar Hybrid Grid</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Turnaround Speed</span>
                    <strong class="factlet-value">48 to 72 Hours (Routine Spectra)</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">User Eligibility</span>
                    <strong class="factlet-value">All Nigerian Universities &amp; Industries</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. CORE LABORATORY SUITES ACROSS THE 6 DIVISIONS
         ========================================================================= -->
    <section id="analytical-suites" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Specialized Infrastructure</span>
                <h2 class="mc-section-title">The Six Core Analytical Suites</h2>
                <p class="mc-section-lead">
                    World-class laboratory instrumentation managed by resident technical officers to execute
                    high-precision analysis and demonstration trials.
                </p>
            </div>

            <div class="mc-centres-grid">

                <!-- Lab 1: High-Field NMR (CARC) -->
                <div class="mc-centre-card reveal-on-scroll">
                    <div class="mc-centre-icon-wrap">🧪</div>
                    <span class="mc-centre-code">Chemical Sciences</span>
                    <h3 class="mc-centre-title">Multi-Nuclear NMR Spectrometry Suite</h3>
                    <p class="mc-centre-desc">
                        High-field 400/500 MHz Bruker NMR spectrometers supporting 1H, 13C, 15N, 31P, and 2D
                        COSY/HMBC/HSQC experiments for natural product elucidation and synthetic validation.
                    </p>
                    <span class="plant-capacity">Turnaround: 48h Routine Scans</span>
                </div>

                <!-- Lab 2: HPC Cluster (AMSARC) -->
                <div class="mc-centre-card reveal-on-scroll delay-100">
                    <div class="mc-centre-icon-wrap">💻</div>
                    <span class="mc-centre-code">Simulation Sciences</span>
                    <h3 class="mc-centre-title">High-Performance Computing Cluster</h3>
                    <p class="mc-centre-desc">
                        Multi-node petascale cluster for computational fluid dynamics (CFD), quantum-resistant
                        cryptographic algorithm testing, and molecular docking simulations.
                    </p>
                    <span class="plant-capacity">Specs: 1,024 Parallel Cores</span>
                </div>

                <!-- Lab 3: Nuclear Technology (NTC) -->
                <div class="mc-centre-card reveal-on-scroll delay-200" style="border-top-color: #ca8a04;">
                    <div class="mc-centre-icon-wrap">⚛️</div>
                    <span class="mc-centre-code" style="color: #ca8a04;">Nuclear Technology</span>
                    <h3 class="mc-centre-title">Gamma Irradiation &amp; Dosimetry</h3>
                    <p class="mc-centre-desc">
                        Industrial gamma cell irradiation facilities, non-destructive testing (NDT), radiation dosimetry
                        calibration, and agricultural food sprout inhibition units.
                    </p>
                    <span class="plant-capacity">Standard: IAEA &amp; NNRA Licensed</span>
                </div>

                <!-- Lab 4: Plant Micropropagation (BARC) -->
                <div class="mc-centre-card reveal-on-scroll delay-300">
                    <div class="mc-centre-icon-wrap">🧬</div>
                    <span class="mc-centre-code">Biotechnology</span>
                    <h3 class="mc-centre-title">Automated Tissue Culture Bioreactors</h3>
                    <p class="mc-centre-desc">
                        Climate-controlled micropropagation clean rooms and automated bioreactors capable of producing
                        500,000+ disease-free plantlets per annum.
                    </p>
                    <span class="plant-capacity">Capacity: 500,000 Plantlets / Year</span>
                </div>

                <!-- Lab 5: Photovoltaic Physics (PARC) -->
                <div class="mc-centre-card reveal-on-scroll delay-100">
                    <div class="mc-centre-icon-wrap">🔬</div>
                    <span class="mc-centre-code">Physical Sciences</span>
                    <h3 class="mc-centre-title">Semiconductor &amp; Solar Characterization</h3>
                    <p class="mc-centre-desc">
                        Thin-film photovoltaic testing, solar simulator, X-ray diffraction (XRD) crystallography, and
                        materials electrical conductivity measurement under Nigerian heat profiles.
                    </p>
                    <span class="plant-capacity">Precision: Angstrom Resolution</span>
                </div>

                <!-- Lab 6: Precision Engineering Workshop (Works) -->
                <div class="mc-centre-card reveal-on-scroll delay-200" style="border-top-color: #0284c7;">
                    <div class="mc-centre-icon-wrap">⚙️</div>
                    <span class="mc-centre-code" style="color: #0284c7;">Engineering Division</span>
                    <h3 class="mc-centre-title">5-Axis CNC &amp; Machine Tooling Core</h3>
                    <p class="mc-centre-desc">
                        Industrial CNC machining, plasma cutting, spark erosion, and lathe tooling for mechanical
                        prototyping, reverse engineering, and instrument replacement part fabrication.
                    </p>
                    <span class="plant-capacity">Tolerance: 5-Micron Precision</span>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. DEDICATED CLEAN POWER INFRASTRUCTURE (500 kVA MICROGRID)
         ========================================================================= -->
    <section id="microgrid-power" class="mc-section mc-bg-parchment mc-border-top mc-border-bottom">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-presidential-banner reveal-on-scroll">
                <div class="mc-presidential-pattern"></div>

                <div class="mc-presidential-grid" style="grid-template-columns: 1fr;">
                    <div class="mc-presidential-content">

                        <div class="mc-presidential-pills">
                            <span class="mc-pill mc-pill-gold">⚡ Zero Power Interruption</span>
                            <span class="mc-pill mc-pill-green">Clean Energy Transition</span>
                        </div>

                        <h2 class="mc-presidential-heading">
                            Dedicated 500 kVA Solar Hybrid Microgrid &amp; Conditioned Clean Power
                        </h2>

                        <blockquote class="mc-presidential-quote">
                            "Modern scientific instrumentation requires zero harmonic distortion and uninterrupted
                            power. The Complex operates an independent solar-hybrid microgrid to protect delicate
                            superconducting NMR magnets, HPC clusters, and -80°C bio-banks."
                        </blockquote>

                        <div class="mc-presidential-pillars-grid">
                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">☀️</span>
                                <div>
                                    <strong>Monocrystalline Solar PV Array</strong>
                                    <p>High-efficiency rooftop and ground arrays generating clean base-load power for
                                        daytime laboratory operations.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">🔋</span>
                                <div>
                                    <strong>Industrial Deep-Cycle Storage</strong>
                                    <p>Centralized battery banks providing seamless microsecond transfer to prevent
                                        computational data corruption.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">⚡</span>
                                <div>
                                    <strong>Pure Sine-Wave Power Conditioning</strong>
                                    <p>Active voltage regulation and harmonic filters ensuring laboratory spectrometers
                                        receive noise-free clean power.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">❄️</span>
                                <div>
                                    <strong>Cryogenic &amp; Bio-Bank Integrity</strong>
                                    <p>24/7 continuous cooling guarantees liquid helium/nitrogen levels and ultra-low
                                        temperature pathogen samples remain secure.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         4. STEP-BY-STEP RESEARCHER ACCESS PROTOCOL
         ========================================================================= -->
    <section id="access-protocol" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Open Science Access</span>
                <h2 class="mc-section-title">How to Access &amp; Book NISTCO Laboratories</h2>
                <p class="mc-section-lead">
                    A transparent 4-stage booking protocol for visiting doctoral scholars, university faculties, TETFund
                    grantees, and industrial partners.
                </p>
            </div>

            <div class="inno-steps-grid">
                <div class="inno-step-item reveal-on-scroll">
                    <div class="step-num">01</div>
                    <h3 class="step-title">Sample / Protocol Submission</h3>
                    <p class="step-desc">
                        Submit your research objective, sample details, and instrument requirements via the official
                        residency desk or online portal.
                    </p>
                </div>

                <div class="inno-step-item reveal-on-scroll delay-100">
                    <div class="step-num">02</div>
                    <h3 class="step-title">Technical Feasibility Review</h3>
                    <p class="step-desc">
                        NISTCO technical officers verify sample preparation safety, instrument calibration parameters,
                        and allocate time slots.
                    </p>
                </div>

                <div class="inno-step-item reveal-on-scroll delay-200">
                    <div class="step-num">03</div>
                    <h3 class="step-title">On-Site Run / Data Acquisition</h3>
                    <p class="step-desc">
                        Execute tests on-site with full technical officer guidance, or submit samples remotely for
                        spectroscopic analysis and raw data dispatch.
                    </p>
                </div>

                <div class="inno-step-item reveal-on-scroll delay-300">
                    <div class="step-num">04</div>
                    <h3 class="step-title">Verified Data &amp; Reports</h3>
                    <p class="step-desc">
                        Receive standardized, calibration-certified raw and processed datasets formatted for
                        peer-reviewed publication or patent submission.
                    </p>
                </div>
            </div>

            <!-- Booking Callout Dispatch -->
            <div id="residency-cta" class="inno-dispatch-box reveal-on-scroll" style="margin-top: 3.5rem;">
                <div class="dispatch-left">
                    <span class="dispatch-kicker">Directorate of Research</span>
                    <h3 class="dispatch-title">Ready to Book Facility Time or Apply for Residency?</h3>
                    <p class="dispatch-desc">
                        Contact the Laboratory Facility Coordinator to check upcoming beamline slots, NMR schedules, and
                        visiting scholar guest house availability.
                    </p>
                </div>
                <div class="dispatch-right">
                    <a href="mailto:fellowships@shestco.gov.ng" class="mc-btn mc-btn-primary"
                        style="font-size: 0.95rem; padding: 0.85rem 1.75rem;">
                        <span>🔬</span>
                        <span>Apply for Facility Time</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();