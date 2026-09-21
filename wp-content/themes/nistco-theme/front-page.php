<?php
/**
 * Template Name: Institutional Flagship Homepage
 * Description: Clean, modern classic flagship homepage for NISTCO.
 * File: front-page.php
 *
 * @package NistcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();

// 1. Dynamic Metric Counts
$centres_count = (int) ( wp_count_posts( 'research_centre' )->publish ?? 6 );
$pubs_count    = (int) ( wp_count_posts( 'publication' )->publish ?? 120 );

// 2. Safe Dynamic URL Routing
$research_centres_url = get_post_type_archive_link( 'research_centre' ) ?: home_url( '/research-centres/' );
$publications_url     = get_post_type_archive_link( 'publication' ) ?: home_url( '/publications/' );
$tenders_url          = get_post_type_archive_link( 'procurement_tender' ) ?: home_url( '/tenders/' );
$innovation_url       = home_url( '/innovation/' );
$about_url            = home_url( '/about-us/' );

// 3. Query Nearest Active Procurement Tender
$active_tender_query = new WP_Query( array(
    'post_type'      => 'procurement_tender',
    'post_status'    => 'publish',
    'posts_per_page' => 1,
    'meta_key'       => '_tender_deadline',
    'orderby'        => 'meta_value',
    'order'          => 'ASC',
    'meta_query'     => array(
        array(
            'key'     => '_tender_deadline',
            'value'   => current_time( 'mysql' ),
            'compare' => '>=',
            'type'    => 'DATETIME',
        ),
    ),
) );

// 4. Query Latest 3 Peer-Reviewed Publications
$latest_pubs_query = new WP_Query( array(
    'post_type'      => 'publication',
    'post_status'    => 'publish',
    'posts_per_page' => 3,
    'orderby'        => 'date',
    'order'          => 'DESC',
) );

// 5. Customizer Leadership Settings
$dg_name     = get_theme_mod( 'nistco_dg_name', 'Prof. Director-General / CEO' );
$dg_headline = get_theme_mod( 'nistco_dg_headline', 'Pioneering Knowledge-Driven Solutions for Indigenous Industrial Transformation' );
$dg_quote    = get_theme_mod( 'nistco_dg_quote', 'Our statutory mandate is clear: to ensure that Nigeria does not merely consume global technology, but actively creates, patents, and deploys high-impact scientific discoveries.' );
?>

<main class="site-main nistco-main">

    <!-- =========================================================================
         1. HERO SECTION: 3D QUANTUM REACTOR & 6-CENTRE LAUNCHPAD
         ========================================================================= -->
    <section class="nistco-hero-section">
        <div class="nistco-hero-ambient-1"></div>
        <div class="nistco-hero-ambient-2"></div>
        <div class="nistco-hero-pattern"></div>

        <div class="nistco-container">
            <div class="nistco-hero-grid">

                <!-- Left Column: Content & Actions -->
                <div class="nistco-hero-content">
                    <div class="nistco-hero-badges">
                        <span class="nistco-pill nistco-pill-green">Federal Republic of Nigeria</span>
                        <span class="nistco-pill nistco-pill-gold">FMIST Parastatal</span>
                    </div>

                    <h1 class="nistco-hero-title">
                        Nigeria Innovation, Science &amp; Technology Complex
                    </h1>

                    <p class="nistco-hero-subtitle">
                        Nigeria's apex multidisciplinary centre of scientific excellence mandated to execute frontier
                        basic and applied research, operate national demonstration pilot plants, and drive indigenous
                        industrial transformation.
                    </p>

                    <div class="nistco-hero-actions">
                        <a href="<?php echo esc_url( $research_centres_url ); ?>" class="nistco-btn nistco-btn-primary">
                            <span>🔬</span>
                            <span>Explore Research Centres</span>
                        </a>

                        <a href="<?php echo esc_url( $innovation_url ); ?>" class="nistco-btn nistco-btn-secondary">
                            <span>⚡</span>
                            <span>Innovation &amp; Patents</span>
                        </a>

                        <a href="<?php echo esc_url( $tenders_url ); ?>" class="nistco-btn nistco-btn-gold">
                            <span>📋</span>
                            <span>Public Tenders Desk &rarr;</span>
                        </a>
                    </div>

                    <!-- Clean 6-Centre Launchpad -->
                    <div class="nistco-centre-launchpad">
                        <span class="launchpad-heading">6 Advanced Directorate Divisions:</span>
                        <div class="launchpad-pills-row">
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="biotech">
                                <span class="pill-icon">🧬</span>
                                <span class="pill-code">BARC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="simulation">
                                <span class="pill-icon">💻</span>
                                <span class="pill-code">AMSARC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="chem_phys">
                                <span class="pill-icon">🧪</span>
                                <span class="pill-code">CARC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="chem_phys">
                                <span class="pill-icon">🔬</span>
                                <span class="pill-code">PARC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="chem_phys">
                                <span class="pill-icon">⚛️</span>
                                <span class="pill-code">NTC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="works_ict">
                                <span class="pill-icon">⚙️</span>
                                <span class="pill-code">ENGINEERING</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Right Column: 3D Gears & Quantum Flux -->
                <div class="nistco-3d-viewport">
                    <div class="nistco-3d-stage">

                        <!-- 3D Gears -->
                        <div class="gear-system-3d">
                            <!-- Main Gear -->
                            <div class="gear-wrap gear-main-wrap">
                                <svg class="gear-3d-svg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <defs>
                                        <linearGradient id="mainGearGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#34d399" />
                                            <stop offset="50%" stop-color="#059669" />
                                            <stop offset="100%" stop-color="#022c22" />
                                        </linearGradient>
                                        <radialGradient id="mainHubGrad" cx="50%" cy="50%" r="50%">
                                            <stop offset="0%" stop-color="#fef08a" />
                                            <stop offset="70%" stop-color="#c59b27" />
                                            <stop offset="100%" stop-color="#713f12" />
                                        </radialGradient>
                                    </defs>
                                    <g fill="url(#mainGearGrad)" stroke="#86efac" stroke-width="1.5">
                                        <rect x="91" y="8" width="18" height="26" rx="3" />
                                        <rect x="91" y="166" width="18" height="26" rx="3" />
                                        <rect x="8" y="91" width="26" height="18" rx="3" />
                                        <rect x="166" y="91" width="26" height="18" rx="3" />
                                        <rect x="91" y="8" width="18" height="26" rx="3"
                                            transform="rotate(30 100 100)" />
                                        <rect x="91" y="166" width="18" height="26" rx="3"
                                            transform="rotate(30 100 100)" />
                                        <rect x="91" y="8" width="18" height="26" rx="3"
                                            transform="rotate(60 100 100)" />
                                        <rect x="91" y="166" width="18" height="26" rx="3"
                                            transform="rotate(60 100 100)" />
                                        <rect x="91" y="8" width="18" height="26" rx="3"
                                            transform="rotate(120 100 100)" />
                                        <rect x="91" y="166" width="18" height="26" rx="3"
                                            transform="rotate(120 100 100)" />
                                        <rect x="91" y="8" width="18" height="26" rx="3"
                                            transform="rotate(150 100 100)" />
                                        <rect x="91" y="166" width="18" height="26" rx="3"
                                            transform="rotate(150 100 100)" />
                                    </g>
                                    <circle cx="100" cy="100" r="76" fill="url(#mainGearGrad)" stroke="#86efac"
                                        stroke-width="2" />
                                    <circle cx="100" cy="100" r="56" fill="#032015" stroke="rgba(134,239,172,0.4)"
                                        stroke-width="2" />
                                    <g stroke="url(#mainGearGrad)" stroke-width="8" stroke-linecap="round">
                                        <line x1="100" y1="28" x2="100" y2="172" />
                                        <line x1="28" y1="100" x2="172" y2="100" />
                                    </g>
                                    <circle cx="100" cy="100" r="30" fill="url(#mainHubGrad)" stroke="#fef08a"
                                        stroke-width="2" />
                                    <circle cx="100" cy="100" r="12" fill="#042416" stroke="rgba(255,255,255,0.6)"
                                        stroke-width="1.5" />
                                </svg>
                            </div>

                            <!-- Pinion Gear -->
                            <div class="gear-wrap gear-secondary-wrap">
                                <svg class="gear-3d-svg" viewBox="0 0 160 160" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <defs>
                                        <linearGradient id="pinionGearGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#fef08a" />
                                            <stop offset="50%" stop-color="#ca8a04" />
                                            <stop offset="100%" stop-color="#451a03" />
                                        </linearGradient>
                                    </defs>
                                    <g fill="url(#pinionGearGrad)" stroke="#fde047" stroke-width="1.5">
                                        <rect x="72" y="6" width="16" height="22" rx="3" />
                                        <rect x="72" y="132" width="16" height="22" rx="3" />
                                        <rect x="6" y="72" width="22" height="16" rx="3" />
                                        <rect x="132" y="72" width="22" height="16" rx="3" />
                                        <rect x="72" y="6" width="16" height="22" rx="3" transform="rotate(45 80 80)" />
                                        <rect x="72" y="132" width="16" height="22" rx="3"
                                            transform="rotate(45 80 80)" />
                                        <rect x="72" y="6" width="16" height="22" rx="3"
                                            transform="rotate(135 80 80)" />
                                        <rect x="72" y="132" width="16" height="22" rx="3"
                                            transform="rotate(135 80 80)" />
                                    </g>
                                    <circle cx="80" cy="80" r="58" fill="url(#pinionGearGrad)" stroke="#fde047"
                                        stroke-width="2" />
                                    <circle cx="80" cy="80" r="40" fill="#201305" stroke="rgba(253,224,71,0.5)"
                                        stroke-width="1.5" />
                                    <g stroke="url(#pinionGearGrad)" stroke-width="6" stroke-linecap="round">
                                        <line x1="80" y1="26" x2="80" y2="134" />
                                        <line x1="26" y1="80" x2="134" y2="80" />
                                    </g>
                                    <circle cx="80" cy="80" r="22" fill="url(#pinionGearGrad)" stroke="#fef08a"
                                        stroke-width="1.5" />
                                    <circle cx="80" cy="80" r="9" fill="#042416" stroke="rgba(255,255,255,0.5)"
                                        stroke-width="1.5" />
                                </svg>
                            </div>
                        </div>

                        <!-- Flux Bridge -->
                        <div class="quantum-flux-bridge">
                            <div class="flux-beam"></div>
                            <div class="flux-particle flux-p1"></div>
                            <div class="flux-particle flux-p2"></div>
                        </div>

                        <!-- Primary Atom System -->
                        <div class="atom-form-primary">
                            <div class="quantum-nucleus nucleus-primary">
                                <div class="nucleus-core core-emerald-gold"></div>
                                <div class="nucleus-corona corona-emerald"></div>
                            </div>
                            <div class="quantum-orbit orbit-primary-1">
                                <div class="orbit-glow-line border-emerald"></div>
                                <div class="quantum-electron electron-emerald"></div>
                            </div>
                            <div class="quantum-orbit orbit-primary-2">
                                <div class="orbit-glow-line border-gold"></div>
                                <div class="quantum-electron electron-gold"></div>
                            </div>
                            <div class="quantum-orbit orbit-primary-crossing">
                                <div class="orbit-glow-line border-emerald-soft"></div>
                                <div class="quantum-electron electron-white"></div>
                            </div>
                        </div>

                        <!-- Secondary Atom System -->
                        <div class="atom-form-secondary">
                            <div class="quantum-nucleus nucleus-secondary">
                                <div class="nucleus-core core-cyan-amber"></div>
                                <div class="nucleus-corona corona-cyan"></div>
                            </div>
                            <div class="quantum-orbit orbit-secondary-1">
                                <div class="orbit-glow-line border-cyan"></div>
                                <div class="quantum-electron electron-cyan"></div>
                            </div>
                            <div class="quantum-orbit orbit-secondary-crossing">
                                <div class="orbit-glow-line border-amber"></div>
                                <div class="quantum-electron electron-amber"></div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. STATUTORY ALERT BAR
         ========================================================================= -->
    <?php if ( $active_tender_query->have_posts() ) : 
        while ( $active_tender_query->have_posts() ) : $active_tender_query->the_post();
            $t_id       = get_the_ID();
            $ref_no     = get_post_meta( $t_id, '_tender_ref_no', true ) ?: 'NISTCO/PROC/' . $t_id;
            $deadline   = get_post_meta( $t_id, '_tender_deadline', true );
            $doc_url    = get_post_meta( $t_id, '_tender_doc_url', true );
    ?>
    <aside class="nistco-alert-bar" aria-label="Statutory Tender Notice">
        <div class="nistco-container nistco-alert-container">
            <div class="nistco-alert-left">
                <span class="nistco-badge-danger">Active BPP Tender</span>
                <span class="nistco-alert-title"><?php echo esc_html( wp_trim_words( get_the_title(), 8 ) ); ?></span>
                <span class="nistco-alert-ref">[<?php echo esc_html( $ref_no ); ?>]</span>
                <?php if ( $deadline ) : ?>
                <span class="nistco-alert-closing">Closing:
                    <?php echo esc_html( date( 'M j, Y - g:i A', strtotime( $deadline ) ) ); ?></span>
                <?php endif; ?>
            </div>
            <div class="nistco-alert-right">
                <?php if ( ! empty( $doc_url ) ) : ?>
                <button type="button" class="btn-pdf-preview nistco-btn-sm-ghost"
                    data-pdf-url="<?php echo esc_url( $doc_url ); ?>"
                    data-pdf-title="<?php echo esc_attr( '[' . $ref_no . '] ' . get_the_title() ); ?>">
                    👁️ Preview SBD
                </button>
                <?php endif; ?>
                <a href="<?php echo esc_url( $tenders_url ); ?>" class="nistco-alert-link">View All Solicitations
                    &rarr;</a>
            </div>
        </div>
    </aside>
    <?php endwhile; wp_reset_postdata(); endif; ?>

    <!-- =========================================================================
         3. STATUTORY METRICS (7 ANIMATED TILES)
         ========================================================================= -->
    <section class="nistco-section nistco-bg-parchment nistco-border-bottom" id="stats-section">
        <div class="nistco-container">
            <div class="nistco-metrics-grid">

                <div class="nistco-metric-card reveal-on-scroll">
                    <span class="nistco-metric-number stat-counter"
                        data-target="<?php echo esc_attr( $centres_count ); ?>"
                        data-suffix=""><?php echo esc_html( $centres_count ); ?></span>
                    <span class="nistco-metric-label">Research Centres &amp; Divisions</span>
                    <span class="nistco-metric-sub">Biotech, HPC, Chem, Phys, Nuclear &amp; Tooling</span>
                </div>

                <div class="nistco-metric-card reveal-on-scroll delay-100">
                    <span class="nistco-metric-number stat-counter" data-target="<?php echo esc_attr( $pubs_count ); ?>"
                        data-suffix="+"><?php echo esc_html( $pubs_count ); ?>+</span>
                    <span class="nistco-metric-label">Scientific Publications</span>
                    <span class="nistco-metric-sub">Peer-reviewed &amp; indexed research repository</span>
                </div>

                <div class="nistco-metric-card reveal-on-scroll delay-200">
                    <span class="nistco-metric-number stat-counter" data-target="2000" data-comma="true"
                        data-suffix="">2,000</span>
                    <span class="nistco-metric-label">Hectares Campus Footprint</span>
                    <span class="nistco-metric-sub">Abuja-Lokoja Technology Corridor sanctuary</span>
                </div>

                <div class="nistco-metric-card reveal-on-scroll delay-300">
                    <span class="nistco-metric-number stat-counter" data-target="16" data-suffix="+">16+</span>
                    <span class="nistco-metric-label">Registered Patents</span>
                    <span class="nistco-metric-sub">NOTAP-certified indigenous technologies</span>
                </div>

                <div class="nistco-metric-card reveal-on-scroll delay-100">
                    <span class="nistco-metric-number stat-counter" data-target="4" data-suffix="">4</span>
                    <span class="nistco-metric-label">Demonstration Pilot Plants</span>
                    <span class="nistco-metric-sub">500L synthesis, tissue culture &amp; precision CNC</span>
                </div>

                <div class="nistco-metric-card reveal-on-scroll delay-200">
                    <span class="nistco-metric-number stat-counter" data-target="500" data-suffix=" kVA">500 kVA</span>
                    <span class="nistco-metric-label">Clean Energy Microgrid</span>
                    <span class="nistco-metric-sub">Dedicated solar hybrid for NMR &amp; HPC compute</span>
                </div>

                <div class="nistco-metric-card reveal-on-scroll delay-300">
                    <span class="nistco-metric-number stat-counter" data-target="100" data-suffix="%">100%</span>
                    <span class="nistco-metric-label">Open Researcher Access</span>
                    <span class="nistco-metric-sub">Shared national laboratory &amp; residency facilities</span>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. SIX ADVANCED RESEARCH CENTRES & DIVISIONS
         ========================================================================= -->
    <section class="nistco-section nistco-bg-white" id="research-centres">
        <div class="nistco-container">

            <div class="nistco-section-header">
                <span class="nistco-section-kicker">Multidisciplinary Scientific Infrastructure</span>
                <h2 class="nistco-section-title">Advanced Research Centres &amp; Engineering Divisions</h2>
                <p class="nistco-section-lead">
                    Specialized national research divisions providing core analytical instrumentation, nuclear safety
                    suites, demonstration pilot plants, and computational power.
                </p>
            </div>

            <div class="nistco-centres-grid">

                <!-- 1. BARC -->
                <div class="nistco-centre-card reveal-on-scroll">
                    <div class="nistco-centre-icon-wrap">🧬</div>
                    <span class="nistco-centre-code">BARC</span>
                    <h3 class="nistco-centre-title">Biotechnology Centre</h3>
                    <p class="nistco-centre-desc">Plant genomics, micropropagation bioreactors, molecular disease
                        diagnostics, tissue culture, and bio-fertilizer synthesis.</p>
                    <a href="<?php echo esc_url( home_url( "/research-centres/biotechnology-advanced-research-centre/" ) ); ?>" class="nistco-card-action"><span>Explore Facilities</span> <span>&rarr;</span></a>
                </div>

                <!-- 2. AMSARC -->
                <div class="nistco-centre-card reveal-on-scroll delay-100">
                    <div class="nistco-centre-icon-wrap">💻</div>
                    <span class="nistco-centre-code">AMSARC</span>
                    <h3 class="nistco-centre-title">Simulation Sciences</h3>
                    <p class="nistco-centre-desc">High-performance supercomputing cluster (HPC), quantum cryptographic
                        algorithms, and predictive modeling.</p>
                    <a href="<?php echo esc_url( home_url( "/research-centres/applied-mathematics-and-simulation-advanced-research-centre/" ) ); ?>" class="nistco-card-action"><span>Explore Supercomputing</span> <span>&rarr;</span></a>
                </div>

                <!-- 3. CARC -->
                <div class="nistco-centre-card reveal-on-scroll delay-200">
                    <div class="nistco-centre-icon-wrap">🧪</div>
                    <span class="nistco-centre-code">CARC</span>
                    <h3 class="nistco-centre-title">Chemical Sciences</h3>
                    <p class="nistco-centre-desc">Natural products chemistry, high-field multi-nuclear NMR, industrial
                        process catalysis, and CNSL polymer resin synthesis.</p>
                    <a href="<?php echo esc_url( home_url( "/research-centres/chemistry-advanced-research-centre/" ) ); ?>" class="nistco-card-action"><span>Explore Chemical Core</span> <span>&rarr;</span></a>
                </div>

                <!-- 4. PARC -->
                <div class="nistco-centre-card reveal-on-scroll delay-300">
                    <div class="nistco-centre-icon-wrap">🔬</div>
                    <span class="nistco-centre-code">PARC</span>
                    <h3 class="nistco-centre-title">Physical Sciences</h3>
                    <p class="nistco-centre-desc">Semiconductor physics, thin-film photovoltaics characterization,
                        materials crystallography, and applied radiation dosimetry.</p>
                    <a href="<?php echo esc_url( home_url( "/research-centres/physics-advanced-research-centre/" ) ); ?>" class="nistco-card-action"><span>Explore Physics Labs</span> <span>&rarr;</span></a>
                </div>

                <!-- 5. NTC -->
                <div class="nistco-centre-card reveal-on-scroll delay-100" style="border-top-color: #ca8a04;">
                    <div class="nistco-centre-icon-wrap">⚛️</div>
                    <span class="nistco-centre-code" style="color: #ca8a04;">NTC</span>
                    <h3 class="nistco-centre-title">Nuclear Technology Centre</h3>
                    <p class="nistco-centre-desc">Gamma irradiation facilities, industrial non-destructive testing
                        (NDT), radiation dosimetry calibration, and crop preservation.</p>
                    <a href="<?php echo esc_url( home_url( "/research-centres/nuclear-technology-centre/" ) ); ?>" class="nistco-card-action"><span>Explore Nuclear Core</span> <span>&rarr;</span></a>
                </div>

                <!-- 6. Engineering -->
                <div class="nistco-centre-card reveal-on-scroll delay-200" style="border-top-color: #0284c7;">
                    <div class="nistco-centre-icon-wrap">⚙️</div>
                    <span class="nistco-centre-code" style="color: #0284c7;">ENGINEERING</span>
                    <h3 class="nistco-centre-title">Precision Engineering &amp; Tooling</h3>
                    <p class="nistco-centre-desc">5-axis CNC machining, mechanical prototype fabrication, scientific
                        equipment calibration, and solar microgrid operations.</p>
                    <a href="<?php echo esc_url( home_url( "/research-centres/engineering-department/" ) ); ?>" class="nistco-card-action"><span>Explore Workshop</span> <span>&rarr;</span></a>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         5. INNOVATION & COMMERCIALIZATION SHOWCASE
         ========================================================================= -->
    <section class="nistco-section nistco-bg-parchment nistco-border-top nistco-border-bottom">
        <div class="nistco-container">

            <div class="nistco-section-header-flex">
                <div>
                    <span class="nistco-section-kicker">Technology Commercialization</span>
                    <h2 class="nistco-section-title">Patents &amp; Market-Ready Inventions</h2>
                    <p class="nistco-section-lead">Transitioning laboratory proof-of-concepts (TRL 1–3) into commercial
                        manufacturing (TRL 7–9) under Executive Order No. 5.</p>
                </div>
                <a href="<?php echo esc_url( home_url( "/patents/" ) ); ?>" class="nistco-btn nistco-btn-primary">
                    <span>⚡ Explore Innovation Portal &rarr;</span>
                </a>
            </div>

            <div class="nistco-patents-grid">

                <article class="nistco-patent-card reveal-on-scroll">
                    <div class="nistco-patent-header">
                        <span class="nistco-tag-pill tag-biotech">🧬 BARC Biotechnology</span>
                        <span class="nistco-trl-pill">TRL 8: Market Ready</span>
                    </div>
                    <h3 class="nistco-patent-title">Bio-Fertilizer &amp; Microbial Soil Enricher Synthesis</h3>
                    <p class="nistco-patent-excerpt">Organic bacterial-fungal formulation accelerating nitrogen fixation
                        and boosting crop yields by 35% without soil acidification.</p>
                    <div class="nistco-patent-meta-box">
                        <div><span class="meta-label">Patent Ref:</span><strong
                                class="meta-val">NG/P/2024/00821</strong></div>
                        <div><span class="meta-label">Licensing:</span><strong class="meta-val">Non-Exclusive</strong>
                        </div>
                    </div>
                    <div class="nistco-patent-footer">
                        <span class="status-indicator ready">● Ready for Production</span>
                        <a href="mailto:commercialization@shestco.gov.ng?subject=Licensing%20Inquiry%20-%20Patent%20NG%2FP%2F2024%2F00821%20(Bio-Fertilizer)&amp;body=Dear%20Commercialization%20Desk,%0A%0AWe%20wish%20to%20inquire%20about%20licensing%20terms%20for%20Patent%20NG/P/2024/00821." class="nistco-btn-license">License Technology &rarr;</a>
                    </div>
                </article>

                <article class="nistco-patent-card reveal-on-scroll delay-100">
                    <div class="nistco-patent-header">
                        <span class="nistco-tag-pill tag-chem">🧪 CARC Chemical</span>
                        <span class="nistco-trl-pill">TRL 7: Pilot Proven</span>
                    </div>
                    <h3 class="nistco-patent-title">Cashew Nut Shell Liquid (CNSL) Polymer Resin</h3>
                    <p class="nistco-patent-excerpt">High-temperature, anti-corrosive industrial brake lining and
                        surface coating binder synthesized from agricultural cashew agro-waste.</p>
                    <div class="nistco-patent-meta-box">
                        <div><span class="meta-label">Patent Ref:</span><strong
                                class="meta-val">NG/P/2024/01190</strong></div>
                        <div><span class="meta-label">Licensing:</span><strong class="meta-val">Joint Venture</strong>
                        </div>
                    </div>
                    <div class="nistco-patent-footer">
                        <span class="status-indicator ready">● Ready for Production</span>
                        <a href="mailto:commercialization@shestco.gov.ng?subject=Licensing%20Inquiry%20-%20Patent%20NG%2FP%2F2024%2F01190%20(CNSL%20Polymer)&amp;body=Dear%20Commercialization%20Desk,%0A%0AWe%20wish%20to%20inquire%20about%20joint%20venture%20licensing%20terms%20for%20Patent%20NG/P/2024/01190." class="nistco-btn-license">License Technology &rarr;</a>
                    </div>
                </article>

                <article class="nistco-patent-card reveal-on-scroll delay-200">
                    <div class="nistco-patent-header">
                        <span class="nistco-tag-pill tag-sim">💻 AMSARC Supercomputing</span>
                        <span class="nistco-trl-pill">TRL 8: Deployed</span>
                    </div>
                    <h3 class="nistco-patent-title">Quantum-Resistant Algorithmic Cryptographic Cipher</h3>
                    <p class="nistco-patent-excerpt">Proprietary non-linear cryptographic security algorithm designed
                        for sovereign defense communications and federal banking networks.</p>
                    <div class="nistco-patent-meta-box">
                        <div><span class="meta-label">Patent Ref:</span><strong
                                class="meta-val">NG/P/2025/00094</strong></div>
                        <div><span class="meta-label">Licensing:</span><strong class="meta-val">Sovereign / Tier
                                1</strong></div>
                    </div>
                    <div class="nistco-patent-footer">
                        <span class="status-indicator ready">● Ready for Integration</span>
                        <a href="mailto:commercialization@shestco.gov.ng?subject=Licensing%20Inquiry%20-%20Patent%20NG%2FP%2F2025%2F00094%20(Quantum%20Cipher)&amp;body=Dear%20Commercialization%20Desk,%0A%0AWe%20wish%20to%20inquire%20about%20sovereign%20integration%20licensing%20terms%20for%20Patent%20NG/P/2025/00094." class="nistco-btn-license">License Technology &rarr;</a>
                    </div>
                </article>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         6. EXECUTIVE LEADERSHIP (DG / CEO VISION)
         ========================================================================= -->
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">
            <div class="nistco-exec-grid">

                <div class="nistco-exec-portrait-card reveal-on-scroll">
                    <div class="nistco-exec-photo-wrap">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dg_photo', '/assets/images/leaders/dg-ceo.jpg', 'Director-General / CEO' );
                        }
                        ?>
                        <div class="nistco-exec-photo-badge">
                            <span>Apex Executive Leadership</span>
                        </div>
                    </div>
                    <div class="nistco-exec-caption">
                        <strong class="nistco-exec-name"><?php echo esc_html( $dg_name ); ?></strong>
                        <span class="nistco-exec-designation">Director-General / Chief Executive Officer</span>
                    </div>
                </div>

                <div class="nistco-exec-statement reveal-on-scroll delay-100">
                    <span class="nistco-section-kicker">Executive Leadership Vision</span>
                    <h2 class="nistco-exec-headline"><?php echo esc_html( $dg_headline ); ?></h2>

                    <blockquote class="nistco-exec-quote">
                        "<?php echo esc_html( $dg_quote ); ?>"
                    </blockquote>

                    <div class="nistco-exec-actions">
                        <a href="<?php echo esc_url( $about_url . '#dg-welcome' ); ?>"
                            class="nistco-btn nistco-btn-primary">
                            <span>📜</span>
                            <span>Read Full Welcome Address &rarr;</span>
                        </a>

                        <a href="<?php echo esc_url( $about_url . '#organogram' ); ?>"
                            class="nistco-btn nistco-btn-outline">
                            <span>🏛️</span>
                            <span>Governance Organogram</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         7. SCIENTIFIC PUBLICATIONS REPOSITORY
         ========================================================================= -->
    <section class="nistco-section nistco-bg-parchment nistco-border-top nistco-border-bottom">
        <div class="nistco-container">

            <div class="nistco-section-header-flex">
                <div>
                    <span class="nistco-section-kicker">Open Research Output</span>
                    <h2 class="nistco-section-title">Latest Research Publications</h2>
                </div>
                <a href="<?php echo esc_url( $publications_url ); ?>" class="nistco-header-link">
                    Access Scientific Repository (<?php echo esc_html( $pubs_count ); ?>) &rarr;
                </a>
            </div>

            <?php if ( $latest_pubs_query->have_posts() ) : ?>
            <div class="nistco-pubs-grid">
                <?php while ( $latest_pubs_query->have_posts() ) : $latest_pubs_query->the_post(); 
                    $pid         = get_the_ID();
                    $authors     = get_post_meta( $pid, '_publication_authors', true ) ?: 'NISTCO Research Fellows';
                    $pub_year    = get_post_meta( $pid, '_publication_year', true ) ?: get_the_date( 'Y' );
                    $pdf_url     = get_post_meta( $pid, '_publication_url', true );
                    $centre_id   = get_post_meta( $pid, '_publication_centre_id', true );
                    $centre_name = $centre_id ? get_the_title( $centre_id ) : '';
                    
                    $bibtex = function_exists( 'nistco_get_publication_bibtex' ) ? nistco_get_publication_bibtex( $pid ) : '';
                    $ris    = function_exists( 'nistco_get_publication_ris' ) ? nistco_get_publication_ris( $pid ) : '';
                ?>
                <article class="nistco-pub-card reveal-on-scroll">
                    <div class="nistco-pub-pills">
                        <span class="nistco-pub-year"><?php echo esc_html( $pub_year ); ?></span>
                        <?php if ( ! empty( $centre_name ) ) : ?>
                        <span class="nistco-pub-centre">🏛️
                            <?php echo esc_html( wp_trim_words( $centre_name, 3 ) ); ?></span>
                        <?php endif; ?>
                    </div>

                    <h3 class="nistco-pub-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>

                    <div class="nistco-pub-authors">
                        ✍️ <?php echo esc_html( wp_trim_words( $authors, 7 ) ); ?>
                    </div>

                    <p class="nistco-pub-excerpt">
                        <?php echo wp_trim_words( get_the_excerpt(), 18 ); ?>
                    </p>

                    <div class="nistco-pub-footer">
                        <button type="button" class="btn-cite-trigger nistco-btn-cite"
                            data-title="<?php echo esc_attr( get_the_title() ); ?>"
                            data-bibtex="<?php echo esc_attr( $bibtex ); ?>" data-ris="<?php echo esc_attr( $ris ); ?>">
                            💬 Cite Paper
                        </button>

                        <?php if ( ! empty( $pdf_url ) ) : ?>
                        <button type="button" class="btn-pdf-preview nistco-btn-preview"
                            data-pdf-url="<?php echo esc_url( $pdf_url ); ?>"
                            data-pdf-title="<?php echo esc_attr( get_the_title() ); ?>">
                            👁️ Preview PDF
                        </button>
                        <?php endif; ?>
                    </div>
                </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- =========================================================================
         8. RESEARCHER RATINGS & STAKEHOLDER CAROUSEL
         ========================================================================= -->
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">

            <div class="nistco-section-header-flex">
                <div>
                    <span class="nistco-section-kicker">Performance &amp; User Experience</span>
                    <h2 class="nistco-section-title">Researcher Ratings &amp; Stakeholder Feedback</h2>
                    <p class="nistco-section-lead">Verified reviews from resident doctoral scholars, university fellows,
                        and industrial pilot partners.</p>
                </div>
                <button type="button" class="nistco-btn nistco-btn-primary" id="open-rating-submit-modal">
                    <span>✍️</span>
                    <span>Submit Rating / Review</span>
                </button>
            </div>

            <!-- Summary Ribbon -->
            <div class="nistco-rating-summary-ribbon reveal-on-scroll">
                <div class="rating-stat-box">
                    <span class="rating-score">4.9<span>/5.0</span></span>
                    <div class="rating-stars">★★★★★</div>
                    <span class="rating-count">Based on 140+ Researcher Residencies</span>
                </div>
                <div class="rating-divider"></div>
                <div class="rating-metrics-grid">
                    <div class="metric-pill">
                        <span class="metric-val">99.4%</span>
                        <span class="metric-lbl">Instrument Uptime</span>
                    </div>
                    <div class="metric-pill">
                        <span class="metric-val">100%</span>
                        <span class="metric-lbl">Clean Power Reliability</span>
                    </div>
                    <div class="metric-pill">
                        <span class="metric-val">48 hrs</span>
                        <span class="metric-lbl">NMR/HPC Turnaround</span>
                    </div>
                </div>
            </div>

            <!-- Testimonial Carousel Track -->
            <div class="rating-carousel-wrapper reveal-on-scroll delay-100">
                <div class="rating-carousel-track-container">
                    <div class="rating-carousel-track" id="ratingCarouselTrack">

                        <div class="rating-slide">
                            <div class="rating-card">
                                <div class="rating-card-header">
                                    <div class="rating-stars">★★★★★</div>
                                    <span class="rating-verified-tag">✓ Verified Residency</span>
                                </div>
                                <blockquote class="rating-quote">
                                    "The high-field NMR spectrometer and automated tissue micropropagation labs at BARC
                                    enabled our team to sequence 40+ indigenous cassava accessions with zero instrument
                                    downtime. The continuous 500 kVA solar hybrid microgrid ensures data integrity."
                                </blockquote>
                                <div class="rating-author-box">
                                    <div class="rating-avatar">🧬</div>
                                    <div class="rating-author-info">
                                        <strong class="author-name">Prof. C. O. Eze</strong>
                                        <span class="author-role">Lead Fellow, Plant Genomics Unit</span>
                                        <span class="author-inst">University of Ibadan / TETFund Grantee</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rating-slide">
                            <div class="rating-card">
                                <div class="rating-card-header">
                                    <div class="rating-stars">★★★★★</div>
                                    <span class="rating-verified-tag">✓ HPC Supercomputing Node</span>
                                </div>
                                <blockquote class="rating-quote">
                                    "AMSARC's computational fluid dynamics (CFD) supercomputing cluster reduced our
                                    aerodynamic simulation render cycles from 3 weeks to under 38 hours. A world-class
                                    national asset for applied mathematical modeling."
                                </blockquote>
                                <div class="rating-author-box">
                                    <div class="rating-avatar">💻</div>
                                    <div class="rating-author-info">
                                        <strong class="author-name">Dr. Fatima Abdullahi</strong>
                                        <span class="author-role">Computational Mathematics Fellow</span>
                                        <span class="author-inst">Ahmadu Bello University, Zaria</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="rating-slide">
                            <div class="rating-card">
                                <div class="rating-card-header">
                                    <div class="rating-stars">★★★★★</div>
                                    <span class="rating-verified-tag">✓ NTC Nuclear User</span>
                                </div>
                                <blockquote class="rating-quote">
                                    "The industrial gamma irradiation and radiation dosimetry suite at the Nuclear
                                    Technology Centre provided high-precision calibration for our agricultural seed
                                    preservation trials. Fully IAEA-compliant."
                                </blockquote>
                                <div class="rating-author-box">
                                    <div class="rating-avatar">⚛️</div>
                                    <div class="rating-author-info">
                                        <strong class="author-name">Dr. Yusuf B. Mohammed</strong>
                                        <span class="author-role">Chief Radiophysicist</span>
                                        <span class="author-inst">NNRA / Postdoctoral Fellow</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="rating-carousel-controls">
                    <button type="button" class="rating-nav-btn btn-prev" id="ratingPrevBtn"
                        aria-label="Previous Slide">&#8592;</button>
                    <div class="rating-carousel-dots" id="ratingCarouselDots"></div>
                    <button type="button" class="rating-nav-btn btn-next" id="ratingNextBtn"
                        aria-label="Next Slide">&#8594;</button>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         9. STRATEGIC PARTNERS & ALLIANCES
         ========================================================================= -->
    <section class="nistco-section nistco-bg-parchment nistco-border-top">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Collaborative Ecosystem</span>
                <h2 class="nistco-section-title">Strategic Partners &amp; Institutional Alliances</h2>
                <p class="nistco-section-lead">
                    Fostering multi-agency scientific synergy across federal ministries, statutory commissions,
                    universities, and multilateral institutions.
                </p>
            </div>

            <div class="nistco-partners-grid">

                <div class="nistco-partner-card reveal-on-scroll">
                    <span class="nistco-partner-icon">🏛️</span>
                    <h3 class="nistco-partner-name">FMIST</h3>
                    <p class="nistco-partner-desc">Federal Ministry of Innovation, Science &amp; Technology</p>
                    <span class="nistco-partner-tag">Supervising Ministry</span>
                </div>

                <div class="nistco-partner-card reveal-on-scroll delay-100">
                    <span class="nistco-partner-icon">📜</span>
                    <h3 class="nistco-partner-name">NOTAP</h3>
                    <p class="nistco-partner-desc">National Office for Technology Acquisition &amp; Promotion</p>
                    <span class="nistco-partner-tag">Technology Transfer</span>
                </div>

                <div class="nistco-partner-card reveal-on-scroll delay-200">
                    <span class="nistco-partner-icon">🎓</span>
                    <h3 class="nistco-partner-name">TETFund</h3>
                    <p class="nistco-partner-desc">Tertiary Education Trust Fund National Research Fund</p>
                    <span class="nistco-partner-tag">Grant Partner</span>
                </div>

                <div class="nistco-partner-card reveal-on-scroll delay-300">
                    <span class="nistco-partner-icon">⚛️</span>
                    <h3 class="nistco-partner-name">NNRA</h3>
                    <p class="nistco-partner-desc">Nigerian Nuclear Regulatory Authority</p>
                    <span class="nistco-partner-tag">Radiation Safety</span>
                </div>

                <div class="nistco-partner-card reveal-on-scroll delay-100">
                    <span class="nistco-partner-icon">🌐</span>
                    <h3 class="nistco-partner-name">NUC &amp; Universities</h3>
                    <p class="nistco-partner-desc">Nigerian Universities Commission Academic Fellowships</p>
                    <span class="nistco-partner-tag">Consortium</span>
                </div>

                <div class="nistco-partner-card reveal-on-scroll delay-200">
                    <span class="nistco-partner-icon">🌍</span>
                    <h3 class="nistco-partner-name">IAEA &amp; Global Bodies</h3>
                    <p class="nistco-partner-desc">International Atomic Energy Agency &amp; TWAS Fellowships</p>
                    <span class="nistco-partner-tag">Global Treaties</span>
                </div>

            </div>

        </div>
    </section>

</main>

<!-- =========================================================================
     MODALS: PDF VIEWER, CITATION & RATING SUBMISSION
     ========================================================================= -->

<!-- PDF VIEWER MODAL -->
<div id="pdf-viewer-modal" class="pdf-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true"
    style="display: none;">
    <div class="pdf-modal-container">
        <div class="pdf-modal-header">
            <div class="pdf-modal-title-wrap">
                <span class="pdf-modal-badge">Document Preview</span>
                <h3 id="pdf-modal-title" class="pdf-modal-title">Scientific Document Preview</h3>
            </div>
            <div class="pdf-modal-actions">
                <a id="pdf-modal-newtab-btn" href="#" target="_blank" rel="noopener noreferrer" class="pdf-modal-btn"
                    title="Open in New Tab">↗ Open Tab</a>
                <a id="pdf-modal-download-btn" href="#" download class="pdf-modal-btn pdf-modal-btn-download"
                    title="Download Document">📥 Download</a>
                <button type="button" id="pdf-modal-close-btn" class="pdf-modal-btn-close"
                    aria-label="Close Preview">&times;</button>
            </div>
        </div>
        <div class="pdf-modal-body">
            <div id="pdf-modal-loader" class="pdf-modal-loader">
                <div class="pdf-modal-spinner"></div>
                <p>Loading document from repository...</p>
            </div>
            <iframe id="pdf-modal-iframe" class="pdf-modal-iframe" src="" frameborder="0"
                title="Document Viewer"></iframe>
        </div>
    </div>
</div>

<!-- CITATION EXPORT MODAL -->
<div id="citation-export-modal" class="cite-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true"
    style="display: none;">
    <div class="cite-modal-container">
        <div class="cite-modal-header">
            <div class="cite-modal-title-wrap">
                <span class="cite-modal-badge">Citation Export</span>
                <h3 id="cite-modal-paper-title" class="cite-modal-paper-title">Publication Citation</h3>
            </div>
            <button type="button" id="cite-modal-close-btn" class="cite-modal-btn-close"
                aria-label="Close Modal">&times;</button>
        </div>
        <div class="cite-modal-tabs">
            <button type="button" class="cite-tab-btn is-active" data-format="bibtex">BibTeX (.bib)</button>
            <button type="button" class="cite-tab-btn" data-format="ris">RIS / EndNote (.ris)</button>
        </div>
        <div class="cite-modal-body">
            <pre class="cite-code-pre"><code id="cite-code-display" class="cite-code-display"></code></pre>
        </div>
        <div class="cite-modal-footer">
            <div class="cite-toast-msg" id="cite-toast-msg">Copied to clipboard!</div>
            <div class="cite-modal-actions">
                <button type="button" id="btn-copy-citation" class="cite-btn-copy">📋 Copy to Clipboard</button>
                <button type="button" id="btn-download-citation" class="cite-btn-download">📥 Download File</button>
            </div>
        </div>
    </div>
</div>

<!-- RESEARCHER RATING SUBMISSION MODAL -->
<div id="researcher-rating-modal" class="inno-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true"
    style="display: none;">
    <div class="inno-modal-container" style="max-width: 720px;">
        <div class="inno-modal-header">
            <div>
                <span class="inno-modal-badge">Verified Researcher Review</span>
                <h3 class="inno-modal-title">Submit Facility Rating &amp; Residency Feedback</h3>
                <span class="inno-modal-ref">Facility &amp; Instrumentation Quality Assurance Desk</span>
            </div>
            <button type="button" id="rating-modal-close-btn" class="inno-modal-btn-close"
                aria-label="Close modal">&times;</button>
        </div>

        <form id="researcher-rating-form" class="inno-modal-form" method="post">
            <?php wp_nonce_field( 'nistco_rating_eoi_nonce', 'rating_nonce' ); ?>
            <div class="inno-form-grid">
                <div class="inno-form-group">
                    <label for="rating-reviewer-name">Researcher Full Name <span class="req">*</span></label>
                    <input type="text" id="rating-reviewer-name" name="reviewer_name" required
                        placeholder="Prof. / Dr. / Engr. Full Name">
                </div>
                <div class="inno-form-group">
                    <label for="rating-institution">Primary University / Institution <span class="req">*</span></label>
                    <input type="text" id="rating-institution" name="institution" required
                        placeholder="e.g. Ahmadu Bello University / TETFund Fellow">
                </div>
                <div class="inno-form-group">
                    <label for="rating-centre-used">Facility / Centre Utilized <span class="req">*</span></label>
                    <select id="rating-centre-used" name="centre_used" required>
                        <option value="Biotechnology Advanced Research Centre (BARC)">Biotechnology Advanced Research
                            Centre (BARC)</option>
                        <option value="Applied Mathematics & Simulation Centre (AMSARC - HPC)">Applied Mathematics &amp;
                            Simulation Centre (AMSARC - HPC)</option>
                        <option value="Chemical Advanced Research Centre (CARC - NMR & Pilot)">Chemical Advanced
                            Research Centre (CARC - NMR &amp; Pilot)</option>
                        <option value="Physical Advanced Research Centre (PARC - Solar/Thin-Film)">Physical Advanced
                            Research Centre (PARC - Solar/Thin-Film)</option>
                        <option value="Nuclear Technology Centre (NTC - Gamma Irradiation)">Nuclear Technology Centre
                            (NTC - Gamma Irradiation)</option>
                        <option value="Engineering & Precision Tooling Department (CNC Workshop)">Engineering &amp;
                            Precision Tooling Department (CNC Workshop)</option>
                    </select>
                </div>
                <div class="inno-form-group">
                    <label for="rating-score-select">Overall Experience Rating <span class="req">*</span></label>
                    <select id="rating-score-select" name="score" required>
                        <option value="5.0 - Exceptional (World Class)">★★★★★ 5.0 - Exceptional (World Class)</option>
                        <option value="4.0 - Very Good (Highly Recommended)">★★★★☆ 4.0 - Very Good (Highly Recommended)
                        </option>
                        <option value="3.0 - Satisfactory">★★★☆☆ 3.0 - Satisfactory</option>
                    </select>
                </div>
                <div class="inno-form-group inno-form-full">
                    <label for="rating-feedback-text">Residency Feedback &amp; Technical Observations <span
                            class="req">*</span></label>
                    <textarea id="rating-feedback-text" name="feedback_text" rows="4" required
                        placeholder="Describe your instrument uptime, data calibration accuracy, power continuity, turnaround speed, and technical support..."></textarea>
                </div>
            </div>
            <div class="inno-modal-footer">
                <span class="inno-statutory-note">🔒 Ratings undergo peer verification prior to publication in the
                    institutional annual performance index.</span>
                <button type="submit" id="rating-submit-btn" class="nistco-btn nistco-btn-primary">
                    <span id="rating-btn-text">Submit Verified Rating &rarr;</span>
                    <span id="rating-btn-spinner" style="display: none;">⏳ Recording...</span>
                </button>
            </div>
            <div id="rating-form-feedback" class="inno-form-feedback" style="display: none;"></div>
        </form>
    </div>
</div>

<?php
get_footer();