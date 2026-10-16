<?php
/**
 * Template Name: NISTCO Master Front Page (Clean Decoupled Edition)
 * Pure presentation template. Styles enqueued via assets/css/front-page.css
 * and scripts enqueued via assets/js/front-page.js.
 */

get_header();
?>

<main class="nistco-main">

    <!-- 1. HERO SECTION WITH 3D ISOMETRIC GEARS & CANONICAL LAUNCHPAD -->
    <section class="nistco-hero-section">
        <div class="nistco-container nistco-hero-grid">
            <div class="scroll-fx fx-slide-left">
                <div class="nistco-pill-group">
                    <span class="nistco-badge badge-green">Federal Republic of Nigeria</span>
                    <span class="nistco-badge badge-gold">Apex Science & Technology Mandate</span>
                </div>

                <h1 class="hero-lead-title">
                    National Science & <br><span>Technology Complex</span>
                </h1>

                <p class="hero-description">
                    Nigeria's apex multidisciplinary centre of scientific excellence mandated to execute frontier basic
                    and applied research, operate national demonstration pilot plants, and drive indigenous industrial
                    transformation.
                </p>

                <div class="hero-actions-row">
                    <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="btn-nistco btn-prime">
                        Explore Research Centres &rarr;
                    </a>
                    <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>"
                        class="btn-nistco btn-ghost">
                        Innovation & Patents
                    </a>
                </div>

                <!-- Canonical CPT Division Launchpad -->
                <div class="nistco-centre-launchpad">
                    <span class="launchpad-heading">Flagship Research Divisions & Hubs</span>
                    <div class="launchpad-pills-row">
                        <a href="<?php echo esc_url( home_url( '/research-centres/amsarc/' ) ); ?>"
                            class="launchpad-pill">AMSARC</a>
                        <a href="<?php echo esc_url( home_url( '/research-centres/barc/' ) ); ?>"
                            class="launchpad-pill">BARC</a>
                        <a href="<?php echo esc_url( home_url( '/research-centres/carc/' ) ); ?>"
                            class="launchpad-pill">CARC</a>
                        <a href="<?php echo esc_url( home_url( '/research-centres/parc/' ) ); ?>"
                            class="launchpad-pill">PARC</a>
                        <a href="<?php echo esc_url( home_url( '/research-centres/ntc/' ) ); ?>"
                            class="launchpad-pill">NTC</a>
                        <a href="<?php echo esc_url( home_url( '/research-centres/aepc/' ) ); ?>"
                            class="launchpad-pill">AEPC</a>
                    </div>
                </div>
            </div>

            <!-- Right Column: 3D Isometric Epicyclic Gearing Core -->
            <div class="nistco-hero-viewport scroll-fx fx-slide-right" aria-hidden="true">
                <div class="epicyclic-stage">
                    <svg class="epicyclic-svg" viewBox="-240 -240 480 480" xmlns="http://www.w3.org/2000/svg">
                        <defs>
                            <linearGradient id="gearMetallicSteel" x1="0%" y1="0%" x2="100%" y2="100%">
                                <stop offset="0%" stop-color="#00e5ff" stop-opacity="0.9" />
                                <stop offset="50%" stop-color="#0a2540" stop-opacity="0.8" />
                                <stop offset="100%" stop-color="#0077b6" stop-opacity="0.95" />
                            </linearGradient>
                            <radialGradient id="stageGlowPulse" cx="50%" cy="50%" r="50%">
                                <stop offset="0%" stop-color="#00e5ff" stop-opacity="0.4" />
                                <stop offset="100%" stop-color="#00e5ff" stop-opacity="0" />
                            </radialGradient>

                            <g id="planet-gear-symbol">
                                <circle cx="0" cy="0" r="32" fill="url(#gearMetallicSteel)" stroke="#00e5ff"
                                    stroke-width="1.5" />
                                <path
                                    d="M -8 -36 L 8 -36 L 10 -32 L -10 -32 Z M 32 -10 L 36 -8 L 36 8 L 32 10 Z M 8 32 L 10 36 L -10 36 L -8 32 Z M -32 8 L -36 10 L -36 -8 L -32 -10 Z"
                                    fill="url(#gearMetallicSteel)" stroke="#00e5ff" stroke-width="1.5" />
                                <circle cx="0" cy="0" r="14" fill="#040d17" stroke="rgba(0, 229, 255, 0.5)"
                                    stroke-width="1.5" />
                                <circle cx="0" cy="0" r="5" fill="#fde047" />
                            </g>
                        </defs>

                        <circle cx="0" cy="0" r="140" fill="url(#stageGlowPulse)" />
                        <circle cx="0" cy="0" r="200" fill="none" stroke="#00e5ff" stroke-width="1.5"
                            stroke-dasharray="8 8" opacity="0.6" />
                        <circle cx="0" cy="0" r="190" fill="none" stroke="rgba(255,255,255,0.15)" stroke-width="1" />

                        <!-- Planetary Carrier Assembly -->
                        <g class="planetary-carrier">
                            <line x1="0" y1="0" x2="0" y2="-120" stroke="rgba(0,229,255,0.35)" stroke-width="2"
                                stroke-dasharray="3 3" />
                            <line x1="0" y1="0" x2="103.9" y2="60" stroke="rgba(0,229,255,0.35)" stroke-width="2"
                                stroke-dasharray="3 3" />
                            <line x1="0" y1="0" x2="-103.9" y2="60" stroke="rgba(0,229,255,0.35)" stroke-width="2"
                                stroke-dasharray="3 3" />

                            <g transform="translate(0, -120)">
                                <g class="planet-spin">
                                    <use href="#planet-gear-symbol" />
                                </g>
                            </g>
                            <g transform="translate(103.9, 60)">
                                <g class="planet-spin">
                                    <use href="#planet-gear-symbol" />
                                </g>
                            </g>
                            <g transform="translate(-103.9, 60)">
                                <g class="planet-spin">
                                    <use href="#planet-gear-symbol" />
                                </g>
                            </g>
                        </g>

                        <!-- Central Drive Sun Gear -->
                        <g class="sun-gear">
                            <circle cx="0" cy="0" r="58" fill="#042416" stroke="#00ffa3" stroke-width="2" />
                            <path
                                d="M -10 -66 L 10 -66 L 12 -58 L -12 -58 Z M 58 -12 L 66 -10 L 66 10 L 58 12 Z M 10 58 L 12 66 L -12 66 L -10 58 Z M -58 10 L -66 12 L -66 -10 L -58 -12 Z"
                                fill="#008751" stroke="#00ffa3" stroke-width="1.5" />
                            <circle cx="0" cy="0" r="28" fill="#02140c" stroke="#d97706" stroke-width="2" />
                            <polygon points="0,-14 12,7 -12,7" fill="#fde047" />
                        </g>
                    </svg>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. INSTITUTIONAL IMPACT METRICS SECTION -->
    <?php 
    $metrics = [
        [ "target" => 6, "suffix" => "", "comma" => false, "title" => "Flagship Research Centres", "desc" => "AMSARC, BARC, CARC, PARC, NTC & AEPC", "color" => "#10b981" ],
        [ "target" => 256, "suffix" => " TFLOPS", "comma" => false, "title" => "Supercomputing Compute", "desc" => "GPU-accelerated national simulation cluster", "color" => "#38bdf8" ],
        [ "target" => 2000, "suffix" => "", "comma" => true, "title" => "Hectares Campus Footprint", "desc" => "Abuja-Lokoja Technology Corridor sanctuary", "color" => "#0ea5e9" ],
        [ "target" => 16, "suffix" => "+", "comma" => false, "title" => "Registered Patents", "desc" => "NOTAP-certified indigenous technologies", "color" => "#d97706" ],
        [ "target" => 4, "suffix" => "", "comma" => false, "title" => "Demonstration Pilot Plants", "desc" => "500L synthesis, micropropagation & CNC tooling", "color" => "#059669" ],
        [ "target" => 500, "suffix" => " kVA", "comma" => false, "title" => "Clean Energy Microgrid", "desc" => "Dedicated hybrid solar for laboratory continuous run", "color" => "#f59e0b" ]
    ];
    ?>
    <section class="nistco-impact-section">
        <div class="nistco-container">
            <div class="scroll-fx fx-fade-up" style="text-align: center; margin-bottom: 3.5rem;">
                <div
                    style="color: #fde047; font-size: 0.82rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">
                    Institutional Impact</div>
                <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); font-weight: 800; margin: 0; color: #ffffff;">Nigeria
                    Innovation Science & Technology Complex</h2>
            </div>
            <div class="impact-metrics-grid">
                <?php foreach ( $metrics as $index => $metric ) : ?>
                <div class="impact-metric-card scroll-fx fx-scale-in"
                    style="transition-delay: <?php echo ($index * 0.08); ?>s; border-top: 4px solid <?php echo $metric['color']; ?>;">
                    <div class="nistco-counter" data-target="<?php echo esc_attr( $metric['target'] ); ?>"
                        data-suffix="<?php echo esc_attr( $metric['suffix'] ); ?>"
                        data-comma="<?php echo $metric['comma'] ? 'true' : 'false'; ?>"
                        style="color: <?php echo $metric['color']; ?>;">
                        0<?php echo esc_html( $metric['suffix'] ); ?>
                    </div>
                    <div style="font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 0.4rem;">
                        <?php echo esc_html( $metric['title'] ); ?></div>
                    <div style="font-size: 0.85rem; color: #cbd5e1; line-height: 1.5;">
                        <?php echo esc_html( $metric['desc'] ); ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 3. SPECIALIZED CENTRES & DIVISIONS (3D ANIMATED VECTOR CARDS) -->
    <?php 
    $centres = [
        [
            "code"  => "AMSARC",
            "title" => "Applied Mathematics & Simulation",
            "spec"  => "256 TFLOPS HPC • GPU Cluster",
            "desc"  => "Frontier computational modeling, fluid dynamics simulation, and high-performance numerical forecasting for national infrastructure.",
            "color" => "#0ea5e9",
            "bg"    => "rgba(14,165,233,0.15)",
            "url"   => home_url( '/research-centres/amsarc/' ),
            "svg"   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg>'
        ],
        [
            "code"  => "BARC",
            "title" => "Biotechnology Advanced Research",
            "spec"  => "Plant Micropropagation • Bioreactors",
            "desc"  => "Molecular diagnostics, tissue culture micropropagation, crop disease resistance protocols, and bioprocess fermentation systems.",
            "color" => "#10b981",
            "bg"    => "rgba(16,185,129,0.15)",
            "url"   => home_url( '/research-centres/barc/' ),
            "svg"   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M2 15c6.667-6 13.333 0 20-6"/><path d="M9 22c1.798-1.998 2.518-3.995 2.807-5.993"/><path d="M15 2c-1.798 1.998-2.518 3.995-2.807 5.993"/></svg>'
        ],
        [
            "code"  => "CARC",
            "title" => "Chemistry Advanced Research Centre",
            "spec"  => "500L Pilot Plant • GC-MS & NMR",
            "desc"  => "Industrial fine chemical synthesis, natural product bio-extraction, polymer formulation, and pilot batch synthesis plants.",
            "color" => "#f59e0b",
            "bg"    => "rgba(245,158,11,0.15)",
            "url"   => home_url( '/research-centres/carc/' ),
            "svg"   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 2v7.31L4.12 19a2 2 0 0 0 1.71 3h12.34a2 2 0 0 0 1.71-3L14 9.31V2"/><line x1="8.5" y1="2" x2="15.5" y2="2"/></svg>'
        ],
        [
            "code"  => "PARC",
            "title" => "Physics Advanced Research Centre",
            "spec"  => "Thin-Film Optics • Semiconductor Lab",
            "desc"  => "Solid-state materials characterization, thin-film solar cell validation, optical spectroscopy, and sensor instrumentation.",
            "color" => "#8b5cf6",
            "bg"    => "rgba(139,92,246,0.15)",
            "url"   => home_url( '/research-centres/parc/' ),
            "svg"   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><circle cx="12" cy="12" r="9"/><line x1="12" y1="3" x2="12" y2="6"/><line x1="12" y1="18" x2="12" y2="21"/></svg>'
        ],
        [
            "code"  => "NTC",
            "title" => "Nuclear Technology Centre",
            "spec"  => "Secondary Standards Dosimetry Lab",
            "desc"  => "National radiation safety metrology, isotopic tracer analysis, calibration services, and industrial gamma applications.",
            "color" => "#e11d48",
            "bg"    => "rgba(225,29,72,0.15)",
            "url"   => home_url( '/research-centres/ntc/' ),
            "svg"   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="2"/><path d="M12 2v4"/><path d="M12 18v4"/><path d="M4.93 4.93l2.83 2.83"/><path d="M16.24 16.24l2.83 2.83"/><path d="M2 12h4"/><path d="M18 12h4"/></svg>'
        ],
        [
            "code"  => "AEPC",
            "title" => "Advanced Engineering & Prototyping",
            "spec"  => "5-Axis CNC • Additive Metallurgy",
            "desc"  => "Precision mold manufacturing, reverse engineering of industrial components, and high-tolerance fabrication engineering.",
            "color" => "#06b6d4",
            "bg"    => "rgba(6,182,212,0.15)",
            "url"   => home_url( '/research-centres/aepc/' ),
            "svg"   => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83"/></svg>'
        ]
    ];
    ?>
    <section class="nistco-section nistco-bg-parchment">
        <div class="nistco-container">
            <div class="scroll-fx fx-fade-up" style="text-align: center; max-width: 720px; margin: 0 auto 3.5rem auto;">
                <span
                    style="font-size: 0.8rem; font-weight: 800; color: #008751; text-transform: uppercase; letter-spacing: 1.5px;">Flagship
                    Wings</span>
                <h2 style="font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 1rem 0;">Specialized
                    Centres & Divisions</h2>
                <p style="color: #64748b; line-height: 1.6;">Explore Nigeria's apex research laboratories, pilot
                    production units, and specialized scientific infrastructure.</p>
            </div>

            <div class="centres-grid-modern">
                <?php foreach ( $centres as $index => $centre ) : ?>
                <div class="centre-card-3d scroll-fx fx-scale-in"
                    style="transition-delay: <?php echo ($index * 0.08); ?>s; border-top: 4px solid <?php echo $centre['color']; ?>;">
                    <div class="icon-box-3d-wrap">
                        <div class="icon-box-3d"
                            style="background: <?php echo $centre['bg']; ?>; color: <?php echo $centre['color']; ?>;">
                            <?php echo $centre['svg']; ?>
                        </div>
                    </div>
                    <span class="centre-badge-tag"
                        style="color: <?php echo $centre['color']; ?>;"><?php echo esc_html( $centre['code'] ); ?></span>
                    <h3 class="centre-title-text"><?php echo esc_html( $centre['title'] ); ?></h3>
                    <span class="centre-meta-spec"><?php echo esc_html( $centre['spec'] ); ?></span>
                    <p class="centre-body-copy"><?php echo esc_html( $centre['desc'] ); ?></p>
                    <a href="<?php echo esc_url( $centre['url'] ); ?>" class="centre-link-arrow"
                        style="color: <?php echo $centre['color']; ?>;">
                        <span>Access <?php echo esc_html( $centre['code'] ); ?> Portal</span>
                        <span>&rarr;</span>
                    </a>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 4. RESTRUCTURED DOCUMENTARIES & INSTITUTIONAL BRIEFINGS -->
    <section class="nistco-section nistco-bg-slate">
        <div class="nistco-container">
            <div class="scroll-fx fx-fade-up" style="max-width: 700px; margin-bottom: 3.5rem;">
                <span
                    style="font-size: 0.8rem; font-weight: 800; color: #38bdf8; text-transform: uppercase; letter-spacing: 1.5px;">Broadcast
                    Features</span>
                <h2 style="font-size: 2.3rem; font-weight: 800; color: #ffffff; margin: 0.5rem 0 1rem 0;">Documentaries
                    & Institutional Briefings</h2>
                <p style="color: #94a3b8; line-height: 1.6;">In-depth visual walkthroughs, technical laboratory
                    briefings, and frontline documentaries covering national scientific breakthroughs.</p>
            </div>

            <div class="briefings-editorial-grid">
                <!-- Master Feature Showcase -->
                <div class="briefing-feature-card scroll-fx fx-slide-left">
                    <div class="briefing-video-player-wrap">
                        <div class="briefing-video-poster">
                            <button class="play-pulse-btn" aria-label="Play Featured Briefing">
                                <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor">
                                    <polygon points="5 3 19 12 5 21 5 3" />
                                </svg>
                            </button>
                            <span
                                style="margin-top: 1rem; font-size: 0.85rem; font-weight: 700; color: #f8fafc; letter-spacing: 0.5px;">Click
                                to Stream Documentary</span>
                        </div>
                    </div>
                    <div class="briefing-feature-content">
                        <div>
                            <span class="briefing-time-pill">FEATURED • 24 MINS • 4K</span>
                            <h3>Inside Nigeria's 500L Advanced Chemistry Synthesis Facility</h3>
                            <p>An exclusive tour inside CARC’s industrial chemical pilot plant, exploring fine-chemical
                                continuous synthesis and advanced GC-MS quality certification suites.</p>
                        </div>
                        <a href="<?php echo esc_url( home_url( '/media/chemistry-plant-tour/' ) ); ?>"
                            class="btn-nistco btn-prime" style="width: max-content;">
                            Watch Full Briefing &rarr;
                        </a>
                    </div>
                </div>

                <!-- Secondary Editorial Catalog List -->
                <div class="briefings-catalog-list scroll-fx fx-slide-right">
                    <a href="<?php echo esc_url( home_url( '/media/amsarc-hpc-briefing/' ) ); ?>"
                        class="briefing-list-item">
                        <div class="briefing-badge-icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <polyline points="13 2 3 14 12 14 11 22 21 10 12 10 13 2" />
                            </svg>
                        </div>
                        <div class="briefing-item-meta">
                            <span
                                style="font-size: 0.72rem; color: #38bdf8; font-weight: 800; text-transform: uppercase;">Supercomputing
                                • 14 Mins</span>
                            <h4>AMSARC 256 TFLOPS HPC & National Grid Simulation</h4>
                            <p>How mathematical algorithms predict national electrical power line stability.</p>
                        </div>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/media/barc-biotech-showcase/' ) ); ?>"
                        class="briefing-list-item">
                        <div class="briefing-badge-icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <path d="M2 15c6.667-6 13.333 0 20-6" />
                                <path d="M9 22c1.798-1.998 2.518-3.995 2.807-5.993" />
                            </svg>
                        </div>
                        <div class="briefing-item-meta">
                            <span
                                style="font-size: 0.72rem; color: #10b981; font-weight: 800; text-transform: uppercase;">Biotechnology
                                • 18 Mins</span>
                            <h4>Drought-Resilient Cassava Micropropagation Labs</h4>
                            <p>Tissue culture protocols distributed to rural farming cooperatives.</p>
                        </div>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/media/ntc-safety-briefing/' ) ); ?>"
                        class="briefing-list-item">
                        <div class="briefing-badge-icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <circle cx="12" cy="12" r="2" />
                                <path d="M12 2v4" />
                                <path d="M12 18v4" />
                            </svg>
                        </div>
                        <div class="briefing-item-meta">
                            <span
                                style="font-size: 0.72rem; color: #e11d48; font-weight: 800; text-transform: uppercase;">Nuclear
                                Metrology • 12 Mins</span>
                            <h4>Radiation Safety & Secondary Standards Calibration</h4>
                            <p>Calibrating national medical and industrial isotopic detectors.</p>
                        </div>
                    </a>

                    <a href="<?php echo esc_url( home_url( '/media/aepc-tooling-showcase/' ) ); ?>"
                        class="briefing-list-item">
                        <div class="briefing-badge-icon">
                            <svg viewBox="0 0 24 24" width="24" height="24" fill="none" stroke="currentColor"
                                stroke-width="2">
                                <circle cx="12" cy="12" r="3" />
                                <path d="M19.4 15a1.65 1.65 0 0 0 .33 1.82l.06.06a2 2 0 0 1 0 2.83" />
                            </svg>
                        </div>
                        <div class="briefing-item-meta">
                            <span
                                style="font-size: 0.72rem; color: #06b6d4; font-weight: 800; text-transform: uppercase;">Prototyping
                                • 16 Mins</span>
                            <h4>5-Axis CNC Precision Mold Fabrication</h4>
                            <p>Reverse-engineering mission-critical parts for domestic factories.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. STAKEHOLDER FEEDBACK (INFINITE HORIZONTAL 3D CAROUSEL) -->
    <?php 
    $feedback_items = [
        [
            "name" => "Engr. Dr. T. A. Balogun",
            "title" => "Director of Infrastructure, Abuja",
            "quote" => "The HPC compute simulation resources at AMSARC enabled our engineering consultancy to slash structural stress testing timelines by over 60%.",
            "badge" => "Infrastructure",
            "badge_bg" => "#e0f2fe",
            "badge_color" => "#0369a1",
            "border_color" => "#0ea5e9",
            "avatar" => "https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&auto=format&fit=crop&q=80"
        ],
        [
            "name" => "Dr. (Mrs.) Chioma Okeke",
            "title" => "Chief Formulation Chemist",
            "quote" => "CARC's pilot plant synthesis services have transformed our local pharmaceutical startup, giving us access to world-class GC-MS testing right here in Nigeria.",
            "badge" => "Pharma & Chem",
            "badge_bg" => "#fef3c7",
            "badge_color" => "#92400e",
            "border_color" => "#f59e0b",
            "avatar" => "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=150&auto=format&fit=crop&q=80"
        ],
        [
            "name" => "Alhaji Ibrahim Danladi",
            "title" => "President, Agro Cooperative",
            "quote" => "The tissue culture seedlings procured from BARC exhibited exceptional disease resistance, doubling our cooperative's harvest yield this season.",
            "badge" => "Agro-Biotech",
            "badge_bg" => "#d1fae5",
            "badge_color" => "#065f46",
            "border_color" => "#10b981",
            "avatar" => "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&auto=format&fit=crop&q=80"
        ],
        [
            "name" => "Prof. Zainab Abdullahi",
            "title" => "Dean of Postgraduate Studies",
            "quote" => "Portal response times and transparency have been phenomenal. The SERVICOM digital desk resolved our patent inquiry within 24 hours.",
            "badge" => "Academia",
            "badge_bg" => "#ede9fe",
            "badge_color" => "#5b21b6",
            "border_color" => "#8b5cf6",
            "avatar" => "https://images.unsplash.com/photo-1580489944761-15a19d654956?w=150&auto=format&fit=crop&q=80"
        ]
    ];
    ?>
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">
            <div class="scroll-fx fx-fade-up" style="text-align: center; max-width: 700px; margin: 0 auto 3.5rem auto;">
                <span
                    style="font-size: 0.8rem; font-weight: 800; color: #008751; text-transform: uppercase; letter-spacing: 1.5px;">Stakeholder
                    Feedback</span>
                <h2 style="font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0;">Performance & User
                    Experience</h2>
                <p style="color: #64748b; line-height: 1.6;">Verified feedback from industrial partners, academic
                    researchers, and ministry stakeholders.</p>
            </div>

            <div class="nistco-rating-summary-ribbon scroll-fx fx-scale-in">
                <div class="rating-stat-box">
                    <div class="rating-score">4.9 <span>/ 5.0</span></div>
                    <div class="rating-stars">★★★★★</div>
                    <div class="rating-count">Based on 1,420 stakeholder reviews</div>
                </div>
                <div class="rating-divider"></div>
                <div class="rating-metrics-grid">
                    <div class="metric-pill"><span class="metric-val">99.8%</span><span class="metric-lbl">Uptime
                            SLA</span></div>
                    <div class="metric-pill"><span class="metric-val">&lt; 1.2s</span><span class="metric-lbl">Portal
                            Response</span></div>
                    <div class="metric-pill"><span class="metric-val">100%</span><span class="metric-lbl">SERVICOM
                            Compliant</span></div>
                </div>
            </div>

            <div class="nistco-horizontal-ticker-container scroll-fx fx-fade-up">
                <div class="nistco-horizontal-ticker-track">
                    <?php 
                    $loop_feedback = array_merge($feedback_items, $feedback_items);
                    foreach ($loop_feedback as $fb) : 
                    ?>
                    <div class="nistco-feedback-card" style="border-top: 5px solid <?php echo $fb['border_color']; ?>;">
                        <div>
                            <div class="feedback-card-header">
                                <div class="feedback-avatar-box">
                                    <img src="<?php echo esc_url($fb['avatar']); ?>"
                                        alt="<?php echo esc_attr($fb['name']); ?>">
                                </div>
                                <div class="feedback-card-meta">
                                    <h4><?php echo esc_html($fb['name']); ?></h4>
                                    <span><?php echo esc_html($fb['title']); ?></span>
                                </div>
                            </div>
                            <p class="feedback-quote">"<?php echo esc_html($fb['quote']); ?>"</p>
                        </div>
                        <div class="feedback-footer-row">
                            <div class="feedback-stars">★★★★★</div>
                            <span class="feedback-badge"
                                style="background: <?php echo $fb['badge_bg']; ?>; color: <?php echo $fb['badge_color']; ?>;"><?php echo esc_html($fb['badge']); ?></span>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. STRATEGIC PARTNERS WITH 3D ANIMATED INSIGNIA -->
    <section class="nistco-section nistco-bg-parchment">
        <div class="nistco-container">
            <div class="scroll-fx fx-fade-up" style="text-align: center; max-width: 720px; margin: 0 auto 3.5rem auto;">
                <span
                    style="font-size: 0.8rem; font-weight: 800; color: #008751; text-transform: uppercase; letter-spacing: 1.5px;">Global
                    Networks</span>
                <h2 style="font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 1rem 0;">Strategic
                    Partners & Institutional Alliances</h2>
                <p style="color: #64748b; line-height: 1.6;">Collaborating with premier international research councils,
                    academic accreditation bodies, and manufacturing leaders.</p>
            </div>

            <div class="partners-grid-3d">
                <div class="partner-card-modern scroll-fx fx-fade-up" style="transition-delay: 0.05s;">
                    <div>
                        <div class="insignia-float-box">
                            <div class="insignia-inner-3d">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <circle cx="12" cy="12" r="10"></circle>
                                    <line x1="2" y1="12" x2="22" y2="12"></line>
                                    <path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
                                    </path>
                                </svg>
                            </div>
                        </div>
                        <h3>ECOWAS Science & Tech Council</h3>
                        <p>Harmonizing biotechnology safety regulations, shared agricultural seed trials, and
                            transboundary research initiatives across West Africa.</p>
                    </div>
                    <div class="partner-card-footer">
                        <span
                            style="font-size: 0.72rem; font-weight: 800; background: #e0f2fe; color: #0284c7; padding: 0.25rem 0.65rem; border-radius: 4px; text-transform: uppercase;">Regional
                            Partner</span>
                        <span style="font-size: 0.8rem; font-weight: 700; color: #008751;">Active MoU</span>
                    </div>
                </div>

                <div class="partner-card-modern scroll-fx fx-fade-up" style="transition-delay: 0.1s;">
                    <div>
                        <div class="insignia-float-box">
                            <div class="insignia-inner-3d">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <path d="M22 10v6M2 10l10-5 10 5-10 5z"></path>
                                    <path d="M6 12v5c3 3 9 3 12 0v-5"></path>
                                </svg>
                            </div>
                        </div>
                        <h3>National Universities Commission</h3>
                        <p>Facilitating postgraduate scientific fellowships, doctoral residency programs, and shared
                            instrumentation across Nigerian universities.</p>
                    </div>
                    <div class="partner-card-footer">
                        <span
                            style="font-size: 0.72rem; font-weight: 800; background: #fef3c7; color: #92400e; padding: 0.25rem 0.65rem; border-radius: 4px; text-transform: uppercase;">Academic
                            Hub</span>
                        <span style="font-size: 0.8rem; font-weight: 700; color: #008751;">Residency Access</span>
                    </div>
                </div>

                <div class="partner-card-modern scroll-fx fx-fade-up" style="transition-delay: 0.15s;">
                    <div>
                        <div class="insignia-float-box">
                            <div class="insignia-inner-3d">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                </svg>
                            </div>
                        </div>
                        <h3>Manufacturers Association of Nigeria</h3>
                        <p>Accelerating industrial commercialization of NOTAP-registered patents, pilot chemical
                            batches, and local replacement components.</p>
                    </div>
                    <div class="partner-card-footer">
                        <span
                            style="font-size: 0.72rem; font-weight: 800; background: #d1fae5; color: #065f46; padding: 0.25rem 0.65rem; border-radius: 4px; text-transform: uppercase;">Industrial
                            Partner</span>
                        <span style="font-size: 0.8rem; font-weight: 700; color: #008751;">Tech Transfer</span>
                    </div>
                </div>

                <div class="partner-card-modern scroll-fx fx-fade-up" style="transition-delay: 0.2s;">
                    <div>
                        <div class="insignia-float-box">
                            <div class="insignia-inner-3d">
                                <svg viewBox="0 0 24 24" fill="none" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round">
                                    <ellipse cx="12" cy="12" rx="10" ry="4" transform="rotate(45 12 12)"></ellipse>
                                    <ellipse cx="12" cy="12" rx="10" ry="4" transform="rotate(-45 12 12)"></ellipse>
                                    <circle cx="12" cy="12" r="2"></circle>
                                </svg>
                            </div>
                        </div>
                        <h3>International Atomic Energy Agency</h3>
                        <p>Technical verification of radiation dosimetry standards, environmental isotopic monitoring,
                            and laboratory safety certification.</p>
                    </div>
                    <div class="partner-card-footer">
                        <span
                            style="font-size: 0.72rem; font-weight: 800; background: #ede9fe; color: #5b21b6; padding: 0.25rem 0.65rem; border-radius: 4px; text-transform: uppercase;">Global
                            Authority</span>
                        <span style="font-size: 0.8rem; font-weight: 700; color: #008751;">Standards Certified</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>