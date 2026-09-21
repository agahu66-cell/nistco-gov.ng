<?php
/**
 * Template Name: Research Centres & Laboratories Directory
 * Description: Flagship archive showcasing all 6 Advanced Research Centres and Engineering Divisions with 3D counter-rotating gears, quantum orbits, shared instrumentation, and residency booking.
 * File: archive-research_centre.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();

// Fallback static array of the 6 statutory centres if CPT posts have not all been published yet
$static_centres = array(
    array(
        'code'      => 'BARC',
        'name'      => 'Biotechnology Advanced Research Centre',
        'icon'      => '🧬',
        'color'     => 'var(--mc-green)',
        'target'    => 'biotech',
        'desc'      => 'Pioneering plant genomics, high-throughput micropropagation bioreactors, molecular disease diagnostics, tissue culture, and indigenous bio-fertilizer formulation for national food security.',
        'key_infra' => 'Automated Bioreactor Suite &bull; Plant Tissue Culture Cleanrooms &bull; DNA Sequencers &bull; -80°C Biobank',
        'capacity'  => '500,000 Plantlets / Year',
    ),
    array(
        'code'      => 'AMSARC',
        'name'      => 'Applied Mathematics & Simulation Advanced Research Centre',
        'icon'      => '💻',
        'color'     => '#0284c7',
        'target'    => 'simulation',
        'desc'      => 'Apex computational mathematics hub operating high-performance supercomputing clusters (HPC), quantum-resistant cryptography, computational fluid dynamics (CFD), and predictive data modeling.',
        'key_infra' => '1,024-Core HPC Parallel Cluster &bull; CFD Aerodynamic Modeling Suite &bull; Cryptographic Cipher Testbed',
        'capacity'  => 'Petascale Computational Core',
    ),
    array(
        'code'      => 'CARC',
        'name'      => 'Chemical Advanced Research Centre',
        'icon'      => '🧪',
        'color'     => '#059669',
        'target'    => 'chem_phys',
        'desc'      => 'Frontier basic and applied chemistry executing natural product isolation, multi-nuclear high-field NMR structural elucidation, polymer resin synthesis (CNSL), and active pharmaceutical ingredient formulation.',
        'key_infra' => '400/500 MHz Multi-Nuclear NMR Spectrometer &bull; 500L Batch Chemical Pilot Plant &bull; HPLC & GC-MS Suite',
        'capacity'  => '500L Industrial Pilot Batches',
    ),
    array(
        'code'      => 'PARC',
        'name'      => 'Physical Advanced Research Centre',
        'icon'      => '🔬',
        'color'     => '#d97706',
        'target'    => 'chem_phys',
        'desc'      => 'Advanced materials characterization, semiconductor thin-film photovoltaics, solar cell simulation under Nigerian climatic heat profiles, and X-ray diffraction (XRD) crystallography.',
        'key_infra' => 'Solar Simulator Chamber &bull; Thin-Film Semiconductor Characterization &bull; XRD Diffractometer &bull; Hall Effect Suite',
        'capacity'  => 'Angstrom Materials Precision',
    ),
    array(
        'code'      => 'NTC',
        'name'      => 'Nuclear Technology Centre',
        'icon'      => '⚛️',
        'color'     => '#ca8a04',
        'target'    => 'chem_phys',
        'desc'      => 'Statutory nuclear science division conducting industrial gamma irradiation, non-destructive testing (NDT), radiation dosimetry calibration, and post-harvest agricultural crop preservation.',
        'key_infra' => 'Industrial Gamma Irradiation Cell &bull; Radiation Dosimetry Calibration Bench &bull; NDT Ultrasonic Testing',
        'capacity'  => 'IAEA & NNRA Licensed Facility',
    ),
    array(
        'code'      => 'ENGINEERING',
        'name'      => 'Engineering & Precision Tooling Department',
        'icon'      => '⚙️',
        'color'     => '#0284c7',
        'target'    => 'works_ict',
        'desc'      => 'Heavy mechanical workshop providing 5-axis CNC machining, precision prototype fabrication, replacement machine tooling, scientific instrument calibration, and 500 kVA solar microgrid management.',
        'key_infra' => '5-Axis Industrial CNC Lathes &bull; Spark Erosion & Plasma Cutters &bull; 500 kVA Clean Power Solar Microgrid',
        'capacity'  => '5-Micron Reverse Tooling',
    ),
);
?>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: 3D DUAL OPPOSING GEARS & CROSSING QUANTUM ORBITS
         ========================================================================= -->
    <section class="mc-hero-section mc-centre-hero">

        <!-- Ambient Volumetric Lighting Glows -->
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container">
            <div class="mc-hero-grid">

                <!-- Left Column: Centres Overview & Fast Actions -->
                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">Advanced Research Centres &amp; Divisions</span>
                    </nav>

                    <div class="mc-hero-badges">
                        <span class="mc-pill mc-pill-green">6 Statutory Research Pillars</span>
                        <span class="mc-pill mc-pill-gold">Shared National Infrastructure</span>
                    </div>

                    <h1 class="mc-hero-title">
                        Advanced Research Centres &amp; Engineering Divisions
                    </h1>

                    <p class="mc-hero-subtitle">
                        NISTCO houses 6 multidisciplinary research directorates operating national demonstration pilot
                        plants, multi-nuclear NMR spectrometry, high-performance supercomputing clusters, and precision
                        tooling workshops.
                    </p>

                    <div class="mc-hero-actions" style="margin-bottom: 2rem;">
                        <a href="#centres-grid" class="mc-btn mc-btn-primary">
                            <span>🔬</span>
                            <span>Explore 6 Directorate Divisions</span>
                        </a>

                        <a href="<?php echo esc_url( home_url( '/facilities/' ) ); ?>" class="mc-btn mc-btn-secondary">
                            <span>🧪</span>
                            <span>Core Instrumentation</span>
                        </a>

                        <a href="<?php echo esc_url( home_url( '/innovation/' ) ); ?>" class="mc-btn mc-btn-gold">
                            <span>⚡</span>
                            <span>Commercial Patents &rarr;</span>
                        </a>
                    </div>

                    <div class="about-nav-pill-group">
                        <span class="jump-label">Jump To:</span>
                        <a href="#centres-grid" class="about-nav-pill">🧬 BARC</a>
                        <a href="#centres-grid" class="about-nav-pill">💻 AMSARC</a>
                        <a href="#centres-grid" class="about-nav-pill">🧪 CARC</a>
                        <a href="#centres-grid" class="about-nav-pill">🔬 PARC</a>
                        <a href="#centres-grid" class="about-nav-pill">⚛️ NTC</a>
                        <a href="#centres-grid" class="about-nav-pill">⚙️ Engineering</a>
                    </div>
                </div>

                <!-- Right Column: 3D COUNTER-ROTATING GEAR ASSEMBLY & QUANTUM CROSSING ORBITS -->
                <div class="mc-3d-viewport">
                    <div class="mc-3d-stage">

                        <!-- 1. 3D MECHANICAL COUNTER-ROTATING GEARS -->
                        <div class="gear-system-3d">

                            <!-- MAIN GEAR (Emerald Metallic 12-Tooth - Clockwise) -->
                            <div class="gear-wrap gear-main-wrap">
                                <svg class="gear-3d-svg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <defs>
                                        <linearGradient id="arcMainGearGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#34d399" />
                                            <stop offset="40%" stop-color="#059669" />
                                            <stop offset="80%" stop-color="#047857" />
                                            <stop offset="100%" stop-color="#022c22" />
                                        </linearGradient>
                                        <radialGradient id="arcMainHubGrad" cx="50%" cy="50%" r="50%">
                                            <stop offset="0%" stop-color="#fef08a" />
                                            <stop offset="60%" stop-color="#c59b27" />
                                            <stop offset="100%" stop-color="#713f12" />
                                        </radialGradient>
                                    </defs>

                                    <!-- 12 Interlocking Mechanical Teeth -->
                                    <g fill="url(#arcMainGearGrad)" stroke="#86efac" stroke-width="1.5">
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

                                    <!-- Gear Body & Web -->
                                    <circle cx="100" cy="100" r="76" fill="url(#arcMainGearGrad)" stroke="#86efac"
                                        stroke-width="2" />
                                    <circle cx="100" cy="100" r="56" fill="#032015" stroke="rgba(134,239,172,0.4)"
                                        stroke-width="2" />

                                    <!-- 4 Spokes -->
                                    <g stroke="url(#arcMainGearGrad)" stroke-width="8" stroke-linecap="round">
                                        <line x1="100" y1="28" x2="100" y2="172" />
                                        <line x1="28" y1="100" x2="172" y2="100" />
                                    </g>

                                    <!-- Brass Center Hub -->
                                    <circle cx="100" cy="100" r="30" fill="url(#arcMainHubGrad)" stroke="#fef08a"
                                        stroke-width="2" />
                                    <circle cx="100" cy="100" r="12" fill="#042416" stroke="rgba(255,255,255,0.6)"
                                        stroke-width="1.5" />
                                </svg>
                            </div>

                            <!-- SECONDARY PINION GEAR (Gold Metallic 8-Tooth - Counter-Clockwise) -->
                            <div class="gear-wrap gear-secondary-wrap">
                                <svg class="gear-3d-svg" viewBox="0 0 160 160" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <defs>
                                        <linearGradient id="arcPinionGearGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#fef08a" />
                                            <stop offset="40%" stop-color="#eab308" />
                                            <stop offset="80%" stop-color="#ca8a04" />
                                            <stop offset="100%" stop-color="#451a03" />
                                        </linearGradient>
                                    </defs>

                                    <!-- 8 Intermeshing Teeth -->
                                    <g fill="url(#arcPinionGearGrad)" stroke="#fde047" stroke-width="1.5">
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

                                    <circle cx="80" cy="80" r="58" fill="url(#arcPinionGearGrad)" stroke="#fde047"
                                        stroke-width="2" />
                                    <circle cx="80" cy="80" r="40" fill="#201305" stroke="rgba(253,224,71,0.5)"
                                        stroke-width="1.5" />

                                    <g stroke="url(#arcPinionGearGrad)" stroke-width="6" stroke-linecap="round">
                                        <line x1="80" y1="26" x2="80" y2="134" />
                                        <line x1="26" y1="80" x2="134" y2="80" />
                                    </g>

                                    <circle cx="80" cy="80" r="22" fill="url(#arcPinionGearGrad)" stroke="#fef08a"
                                        stroke-width="1.5" />
                                    <circle cx="80" cy="80" r="9" fill="#042416" stroke="rgba(255,255,255,0.5)"
                                        stroke-width="1.5" />
                                </svg>
                            </div>

                        </div>

                        <!-- 2. QUANTUM RESONANCE FLUX BRIDGE -->
                        <div class="quantum-flux-bridge">
                            <div class="flux-beam"></div>
                            <div class="flux-particle flux-p1"></div>
                            <div class="flux-particle flux-p2"></div>
                        </div>

                        <!-- 3. PRIMARY ATOM (Foreground Core) -->
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

                        <!-- 4. SECONDARY ATOM (Pinion Gear Space Core) -->
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

        <!-- Docked Directorate Factlet Ribbon -->
        <div class="about-factlet-bar">
            <div class="container about-factlet-container">
                <div class="factlet-item">
                    <span class="factlet-kicker">Research Pillars</span>
                    <strong class="factlet-value">6 Advanced Research Divisions</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Analytical Access</span>
                    <strong class="factlet-value">Open to Nigerian Universities &amp; Industry</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Power Stability</span>
                    <strong class="factlet-value">500 kVA Dedicated Clean Microgrid</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Demonstration Capacity</span>
                    <strong class="factlet-value">4 Industrial Pilot Plants (TRL 4–6)</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. ALL SIX RESEARCH CENTRES & DIVISIONS SHOWCASE GRID
         ========================================================================= -->
    <section id="centres-grid" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Frontier Science Sanctuary</span>
                <h2 class="mc-section-title">The Six Statutory Research &amp; Engineering Centres</h2>
                <p class="mc-section-lead">
                    Specialized national research divisions equipped with multi-nuclear NMR spectrometers,
                    supercomputing clusters, pilot demonstration reactors, and precision fabrication workshops.
                </p>
            </div>

            <div class="mc-centres-grid">
                <?php
                // Check if Custom Post Type posts exist; otherwise render complete static institutional data
                $cpt_query = new WP_Query( array(
                    'post_type'      => 'research_centre',
                    'post_status'    => 'publish',
                    'posts_per_page' => -1,
                    'orderby'        => 'menu_order title',
                    'order'          => 'ASC',
                ) );

                if ( $cpt_query->have_posts() ) :
                    while ( $cpt_query->have_posts() ) : $cpt_query->the_post();
                        $cid = get_the_ID();
                ?>
                <article class="mc-centre-card reveal-on-scroll">
                    <div class="mc-centre-icon-wrap">🏛️</div>
                    <span
                        class="mc-centre-code"><?php echo esc_html( get_post_meta( $cid, '_centre_code', true ) ?: 'NISTCO' ); ?></span>
                    <h3 class="mc-centre-title"><?php the_title(); ?></h3>
                    <p class="mc-centre-desc"><?php echo wp_trim_words( get_the_excerpt(), 24 ); ?></p>
                    <a href="<?php the_permalink(); ?>" class="mc-card-action">
                        <span>Explore Facilities &amp; Equipment</span>
                        <span>&rarr;</span>
                    </a>
                </article>
                <?php
                    endwhile;
                    wp_reset_postdata();
                else :
                    // Render the 6 complete statutory directorates
                    foreach ( $static_centres as $index => $c ) :
                ?>
                <article class="mc-centre-card reveal-on-scroll <?php echo 'delay-' . ( ( $index % 3 ) * 100 ); ?>"
                    style="border-top-color: <?php echo esc_attr( $c['color'] ); ?>;">
                    <div class="mc-centre-icon-wrap"><?php echo esc_html( $c['icon'] ); ?></div>
                    <span class="mc-centre-code"
                        style="color: <?php echo esc_attr( $c['color'] ); ?>;"><?php echo esc_html( $c['code'] ); ?></span>
                    <h3 class="mc-centre-title"><?php echo esc_html( $c['name'] ); ?></h3>
                    <p class="mc-centre-desc"><?php echo esc_html( $c['desc'] ); ?></p>

                    <div
                        style="font-size: 0.8rem; color: var(--mc-text-muted); border-top: 1px solid var(--mc-border); padding-top: 0.85rem; margin-bottom: 1rem;">
                        <strong>Key Infrastructure:</strong> <?php echo wp_kses_post( $c['key_infra'] ); ?>
                    </div>

                    <button type="button" class="mc-card-action org-clickable"
                        data-org-target="<?php echo esc_attr( $c['target'] ); ?>">
                        <span>Directorate Dossier &amp; Mandate</span>
                        <span>&rarr;</span>
                    </button>
                </article>
                <?php
                    endforeach;
                endif;
                ?>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. RESIDENCY, VISITING SCHOLAR & TETFUND GRANT ACCESS CALLOUT
         ========================================================================= -->
    <section class="mc-section mc-bg-parchment mc-border-top">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="inno-dispatch-box reveal-on-scroll">
                <div class="dispatch-left">
                    <span class="dispatch-kicker">Directorate of Research Residencies</span>
                    <h3 class="dispatch-title">Apply for Visiting Fellow &amp; Doctoral Research Residency</h3>
                    <p class="dispatch-desc">
                        NISTCO offers laboratory bench allocation, NMR spectrometer beamline time, HPC supercomputing
                        allocations, and on-campus researcher guest accommodations for visiting university faculties and
                        TETFund NRF grantees.
                    </p>
                </div>
                <div class="dispatch-right">
                    <a href="mailto:fellowships@shestco.gov.ng" class="mc-btn mc-btn-primary"
                        style="font-size: 0.95rem; padding: 0.85rem 1.75rem;">
                        <span>💼</span>
                        <span>Apply for Research Residency</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();