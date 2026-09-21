<?php
/**
 * Template Name: About Us & Governance Dossier
 * Description: Authoritative institutional profile, presidential patronage, supervisory leadership, DG welcome address, organogram tree, full 6-directorate leadership roster, and interactive dossier modals for NISTCO.
 * File: page-about-us.php
 *
 * @package NistcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();

// Customizer Leadership Settings
$president_name    = get_theme_mod( 'nistco_president_name', 'His Excellency, The President of the Federal Republic of Nigeria' );
$president_quote   = get_theme_mod( 'nistco_president_quote', 'Nigeria must build a knowledge-driven economy where indigenous science, domestic patents, and local industrial manufacturing drive our national wealth and global competitiveness.' );

$minister_name     = get_theme_mod( 'nistco_minister_name', 'Honourable Minister of Innovation, Science & Technology' );
$perm_sec_name     = get_theme_mod( 'nistco_perm_sec_name', 'Permanent Secretary, Federal Ministry of Innovation, Science & Technology' );
$board_chair_name  = get_theme_mod( 'nistco_board_chair_name', 'Chairman, Governing Board' );

$dg_name           = get_theme_mod( 'nistco_dg_name', 'Prof. Director-General / CEO' );
$dg_headline       = get_theme_mod( 'nistco_dg_headline', 'Pioneering Knowledge-Driven Solutions for Indigenous Industrial Transformation' );
$dg_quote          = get_theme_mod( 'nistco_dg_quote', 'Our statutory mandate is clear: to ensure that Nigeria does not merely consume global technology, but actively creates, patents, and deploys high-impact scientific discoveries.' );
?>

<main class="site-main nistco-main">

    <section class="nistco-hero-section">
        <div class="nistco-hero-ambient-1"></div>
        <div class="nistco-hero-ambient-2"></div>
        <div class="nistco-hero-pattern"></div>

        <div class="nistco-container">
            <div class="nistco-hero-grid">

                <div class="nistco-hero-content">

                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">About NISTCO &amp; Governance</span>
                    </nav>

                    <div class="nistco-hero-badges">
                        <span class="nistco-pill nistco-pill-green">Apex Science Sanctuary</span>
                        <span class="nistco-pill nistco-pill-gold">Federal Charter</span>
                    </div>

                    <h1 class="nistco-hero-title">
                        Institutional Profile, Mandate &amp; Apex Governance
                    </h1>

                    <p class="nistco-hero-subtitle">
                        Established as Nigeria's premier multidisciplinary scientific complex to execute frontier
                        research, maintain shared analytical laboratory infrastructure, and drive indigenous technology
                        commercialization.
                    </p>

                    <div class="nistco-hero-actions">
                        <a href="#dg-welcome" class="nistco-btn nistco-btn-primary">
                            <span>📜</span>
                            <span>DG / CEO Welcome Address</span>
                        </a>

                        <a href="#directorates-roster" class="nistco-btn nistco-btn-secondary">
                            <span>🏛️</span>
                            <span>Directorate Leadership</span>
                        </a>

                        <a href="#organogram" class="nistco-btn nistco-btn-gold">
                            <span>⚖️</span>
                            <span>Governance Tree &rarr;</span>
                        </a>
                    </div>

                    <div class="nistco-centre-launchpad">
                        <span class="launchpad-heading">Explore Directorate Portfolios:</span>
                        <div class="launchpad-pills-row">
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="biotech"
                                title="Biotechnology Advanced Research Centre">
                                <span class="pill-icon">🧬</span>
                                <span class="pill-code">BARC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="simulation"
                                title="Applied Mathematics & Simulation Research Centre">
                                <span class="pill-icon">💻</span>
                                <span class="pill-code">AMSARC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="chem_phys"
                                title="Chemical Advanced Research Centre">
                                <span class="pill-icon">🧪</span>
                                <span class="pill-code">CARC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="chem_phys"
                                title="Physical Advanced Research Centre">
                                <span class="pill-icon">🔬</span>
                                <span class="pill-code">PARC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="chem_phys"
                                title="Nuclear Technology Centre">
                                <span class="pill-icon">⚛️</span>
                                <span class="pill-code">NTC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="works_ict"
                                title="Precision Engineering & Tooling">
                                <span class="pill-icon">⚙️</span>
                                <span class="pill-code">ENGINEERING</span>
                            </button>
                        </div>
                    </div>

                </div>

                <div class="nistco-3d-viewport">
                    <div class="nistco-3d-stage">

                        <div class="gear-system-3d">
                            <div class="gear-wrap gear-main-wrap">
                                <svg class="gear-3d-svg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <defs>
                                        <linearGradient id="aboutMainGear" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#34d399" />
                                            <stop offset="50%" stop-color="#059669" />
                                            <stop offset="100%" stop-color="#022c22" />
                                        </linearGradient>
                                        <radialGradient id="aboutMainHub" cx="50%" cy="50%" r="50%">
                                            <stop offset="0%" stop-color="#fef08a" />
                                            <stop offset="70%" stop-color="#c59b27" />
                                            <stop offset="100%" stop-color="#713f12" />
                                        </radialGradient>
                                    </defs>
                                    <g fill="url(#aboutMainGear)" stroke="#86efac" stroke-width="1.5">
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
                                    <circle cx="100" cy="100" r="76" fill="url(#aboutMainGear)" stroke="#86efac"
                                        stroke-width="2" />
                                    <circle cx="100" cy="100" r="56" fill="#032015" stroke="rgba(134,239,172,0.4)"
                                        stroke-width="2" />
                                    <g stroke="url(#aboutMainGear)" stroke-width="8" stroke-linecap="round">
                                        <line x1="100" y1="28" x2="100" y2="172" />
                                        <line x1="28" y1="100" x2="172" y2="100" />
                                    </g>
                                    <circle cx="100" cy="100" r="30" fill="url(#aboutMainHub)" stroke="#fef08a"
                                        stroke-width="2" />
                                    <circle cx="100" cy="100" r="12" fill="#042416" stroke="rgba(255,255,255,0.6)"
                                        stroke-width="1.5" />
                                </svg>
                            </div>

                            <div class="gear-wrap gear-secondary-wrap">
                                <svg class="gear-3d-svg" viewBox="0 0 160 160" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <defs>
                                        <linearGradient id="aboutPinionGear" x1="0%" y1="0%" x2="100%" y2="100%">
                                            <stop offset="0%" stop-color="#fef08a" />
                                            <stop offset="50%" stop-color="#ca8a04" />
                                            <stop offset="100%" stop-color="#451a03" />
                                        </linearGradient>
                                    </defs>
                                    <g fill="url(#aboutPinionGear)" stroke="#fde047" stroke-width="1.5">
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
                                    <circle cx="80" cy="80" r="58" fill="url(#aboutPinionGear)" stroke="#fde047"
                                        stroke-width="2" />
                                    <circle cx="80" cy="80" r="40" fill="#201305" stroke="rgba(253,224,71,0.5)"
                                        stroke-width="1.5" />
                                    <g stroke="url(#aboutPinionGear)" stroke-width="6" stroke-linecap="round">
                                        <line x1="80" y1="26" x2="80" y2="134" />
                                        <line x1="26" y1="80" x2="134" y2="80" />
                                    </g>
                                    <circle cx="80" cy="80" r="22" fill="url(#aboutPinionGear)" stroke="#fef08a"
                                        stroke-width="1.5" />
                                </svg>
                            </div>
                        </div>

                        <div class="quantum-flux-bridge">
                            <div class="flux-beam"></div>
                            <div class="flux-particle flux-p1"></div>
                            <div class="flux-particle flux-p2"></div>
                        </div>

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

        <div class="about-factlet-bar">
            <div class="nistco-container about-factlet-container">
                <div class="factlet-item">
                    <span class="factlet-kicker">Legislative Foundation</span>
                    <strong class="factlet-value">Federal Enabling Act &amp; Charter</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Campus Sanctuary</span>
                    <strong class="factlet-value">2,000 Hectares (Sheda, Abuja)</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Clean Power Microgrid</span>
                    <strong class="factlet-value">500 kVA Dedicated Solar Hybrid</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Supervising Authority</span>
                    <strong class="factlet-value">FMIST (Federal Ministry)</strong>
                </div>
            </div>
        </div>
    </section>

    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">

            <div class="mc-presidential-banner reveal-on-scroll">
                <div class="mc-presidential-pattern"></div>

                <div class="mc-presidential-grid">

                    <div class="mc-presidential-portrait-wrap">
                        <div class="mc-presidential-photo-frame">
                            <?php 
                            if ( function_exists( 'nistco_get_leader_photo' ) ) {
                                echo nistco_get_leader_photo( 'nistco_president_photo', '/assets/images/leaders/president.jpg', 'His Excellency, The President' );
                            }
                            ?>
                            <div class="mc-presidential-photo-badge">
                                <span>Grand Patron &bull; Commander-in-Chief</span>
                            </div>
                        </div>
                        <div class="mc-presidential-caption">
                            <span class="mc-presidential-title-kicker">Apex Sovereign Patronage</span>
                            <strong class="mc-presidential-name"><?php echo esc_html( $president_name ); ?></strong>
                            <span class="mc-presidential-rank">President of the Federal Republic of Nigeria</span>
                        </div>
                    </div>

                    <div class="mc-presidential-content">
                        <div class="mc-presidential-pills">
                            <span class="nistco-pill nistco-pill-gold">🇳🇬 Presidential Directives</span>
                            <span class="nistco-pill nistco-pill-green">Executive Order No. 5</span>
                        </div>

                        <h2 class="mc-presidential-heading">
                            Anchoring Nigeria's Sovereign Science &amp; Technology Policy
                        </h2>

                        <blockquote class="mc-presidential-quote">
                            "<?php echo esc_html( $president_quote ); ?>"
                        </blockquote>

                        <div class="mc-presidential-pillars-grid">
                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">🏭</span>
                                <div>
                                    <strong>Industrial Domestication</strong>
                                    <p>Mandating federal procurement preference for indigenous engineering, chemical
                                        synthesis, and domestic agro-biotech technologies.</p>
                                </div>
                            </div>
                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">🔒</span>
                                <div>
                                    <strong>Critical Security Tech</strong>
                                    <p>Developing indigenous quantum cryptographic algorithms to safeguard federal
                                        critical data, defense, and banking networks.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>

    <section class="nistco-section nistco-bg-parchment nistco-border-top nistco-border-bottom" id="dignitaries">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Supervisory Oversight</span>
                <h2 class="nistco-section-title">Ministry &amp; Governing Board Leadership</h2>
                <p class="nistco-section-lead">
                    Providing strategic policy direction, fiduciary governance, and inter-ministerial alignment under
                    the Federal Ministry of Innovation, Science and Technology.
                </p>
            </div>

            <div class="dignitaries-grid">

                <div class="dignitary-card reveal-on-scroll">
                    <div class="dignitary-photo-wrap">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_minister_photo', '/assets/images/leaders/minister.jpg', 'Honourable Minister' );
                        }
                        ?>
                        <div class="dignitary-badge-stripe">Supervising Minister</div>
                    </div>
                    <div class="dignitary-info">
                        <span class="dignitary-role">Apex Political &amp; Policy Authority</span>
                        <h3 class="dignitary-name"><?php echo esc_html( $minister_name ); ?></h3>
                        <p class="dignitary-org">Federal Ministry of Innovation, Science &amp; Technology (FMIST)</p>
                    </div>
                </div>

                <div class="dignitary-card reveal-on-scroll delay-100">
                    <div class="dignitary-photo-wrap">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_perm_sec_photo', '/assets/images/leaders/perm-sec.jpg', 'Permanent Secretary' );
                        }
                        ?>
                        <div class="dignitary-badge-stripe">Accounting Officer</div>
                    </div>
                    <div class="dignitary-info">
                        <span class="dignitary-role">Administrative &amp; Accounting Head</span>
                        <h3 class="dignitary-name"><?php echo esc_html( $perm_sec_name ); ?></h3>
                        <p class="dignitary-org">Federal Ministry of Innovation, Science &amp; Technology (FMIST)</p>
                    </div>
                </div>

                <div class="dignitary-card reveal-on-scroll delay-200">
                    <div class="dignitary-photo-wrap">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_board_chair_photo', '/assets/images/leaders/board-chair.jpg', 'Board Chairman' );
                        }
                        ?>
                        <div class="dignitary-badge-stripe">Institutional Governance</div>
                    </div>
                    <div class="dignitary-info">
                        <span class="dignitary-role">Chairman, Governing Board</span>
                        <h3 class="dignitary-name"><?php echo esc_html( $board_chair_name ); ?></h3>
                        <p class="dignitary-org">Nigeria Innovation, Science &amp; Technology Complex (NISTCO)</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section id="dg-welcome" class="nistco-section nistco-bg-white">
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
                            <span>Chief Executive Officer</span>
                        </div>
                    </div>
                    <div class="nistco-exec-caption">
                        <strong class="nistco-exec-name"><?php echo esc_html( $dg_name ); ?></strong>
                        <span class="nistco-exec-designation">Director-General / Chief Executive Officer</span>
                    </div>
                </div>

                <div class="nistco-exec-statement reveal-on-scroll delay-100">
                    <span class="nistco-section-kicker">Executive Leadership Statement</span>
                    <h2 class="nistco-exec-headline"><?php echo esc_html( $dg_headline ); ?></h2>

                    <blockquote class="nistco-exec-quote">
                        "<?php echo esc_html( $dg_quote ); ?>"
                    </blockquote>

                    <div style="font-size: 0.98rem; line-height: 1.8; color: var(--mc-text-main); margin-bottom: 2rem;">
                        <p>
                            Welcome to the official portal of the <strong>Nigeria Innovation, Science, and Technology
                                Complex (NISTCO)</strong>. Our research sanctuary at Sheda, Abuja, represents Nigeria's
                            investment in frontier science, shared national instrumentation cores, and indigenous
                            technology scaling.
                        </p>
                        <p>
                            Through our 6 multidisciplinary directorates, we open our doors to university scholars,
                            postgraduate fellows, and industrial partners to access high-field NMR spectrometry, HPC
                            supercomputing clusters, and demonstration pilot plants.
                        </p>
                    </div>

                    <div class="nistco-exec-actions">
                        <a href="#directorates-roster" class="nistco-btn nistco-btn-primary">
                            <span>🏛️</span>
                            <span>Directorate Leadership Roster</span>
                        </a>
                        <a href="#organogram" class="nistco-btn nistco-btn-outline">
                            <span>📊</span>
                            <span>View Governance Organogram</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section id="organogram" class="nistco-section nistco-bg-parchment nistco-border-top">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Statutory Structure</span>
                <h2 class="nistco-section-title">Institutional Governance &amp; Organogram</h2>
                <p class="nistco-section-lead">
                    Click on any operational branch or directorate card to view detailed divisional mandates,
                    specialized equipment, and research capabilities.
                </p>
            </div>

            <div class="organogram-wrapper reveal-on-scroll">

                <div class="org-node org-node-ministry org-clickable" data-org-target="ministry"
                    style="cursor: pointer;" title="Click to view Ministry Dossier">
                    <span class="factlet-kicker" style="color: #fde047;">Apex Supervisory Authority</span>
                    <h3 style="margin: 0.25rem 0; font-size: 1.2rem; color: #ffffff;">Federal Ministry of Innovation,
                        Science &amp; Technology (FMIST)</h3>
                </div>

                <div class="org-connector"></div>

                <div class="org-node org-node-board org-clickable" data-org-target="board" style="cursor: pointer;"
                    title="Click to view Board Dossier">
                    <span class="factlet-kicker" style="color: var(--mc-green);">Statutory Policy Oversight</span>
                    <h3 style="margin: 0.25rem 0; font-size: 1.15rem; color: var(--mc-dark);">NISTCO Governing Board
                    </h3>
                </div>

                <div class="org-connector"></div>

                <div class="org-node org-node-dg org-clickable" data-org-target="dg_office" style="cursor: pointer;"
                    title="Click to view Executive Dossier">
                    <span class="factlet-kicker" style="color: #fde047;">Apex Executive Management</span>
                    <h3 style="margin: 0.25rem 0; font-size: 1.25rem; color: #ffffff;">Office of the Director-General /
                        CEO</h3>
                    <p style="margin: 0.25rem 0 0 0; font-size: 0.82rem; color: #86efac;">Legal Secretariat &bull;
                        Internal Audit &bull; SERVICOM &bull; Procurement Unit &bull; ACTU</p>
                </div>

                <div class="org-connector" style="height: 36px;"></div>

                <div class="org-grid-level">

                    <div class="org-branch-card org-clickable" data-org-target="biotech" style="cursor: pointer;"
                        title="Click to view BARC Dossier">
                        <span class="factlet-kicker" style="color: var(--mc-green);">Directorate</span>
                        <h4 style="margin: 0.35rem 0; font-size: 1rem; color: var(--mc-dark);">🧬 Biotechnology (BARC)
                        </h4>
                        <ul class="org-branch-list">
                            <li>Plant Genomics &amp; Breeding</li>
                            <li>Automated Micropropagation</li>
                            <li>Microbial Soil Enricher Synthesis</li>
                        </ul>
                    </div>

                    <div class="org-branch-card org-clickable" data-org-target="simulation"
                        style="cursor: pointer; border-top-color: #0284c7;" title="Click to view AMSARC Dossier">
                        <span class="factlet-kicker" style="color: #0284c7;">Directorate</span>
                        <h4 style="margin: 0.35rem 0; font-size: 1rem; color: var(--mc-dark);">💻 Simulation &amp; HPC
                            (AMSARC)</h4>
                        <ul class="org-branch-list">
                            <li>1,024-Core HPC Supercomputing</li>
                            <li>Computational Fluid Dynamics</li>
                            <li>Quantum Cryptographic Algorithms</li>
                        </ul>
                    </div>

                    <div class="org-branch-card org-clickable" data-org-target="chem_phys"
                        style="cursor: pointer; border-top-color: #059669;" title="Click to view CARC/PARC/NTC Dossier">
                        <span class="factlet-kicker" style="color: #059669;">Directorates</span>
                        <h4 style="margin: 0.35rem 0; font-size: 1rem; color: var(--mc-dark);">🧪 Chemical, Physical
                            &amp; NTC</h4>
                        <ul class="org-branch-list">
                            <li>High-Field Multi-Nuclear NMR</li>
                            <li>Industrial Gamma Irradiation</li>
                            <li>Thin-Film Photovoltaics Lab</li>
                        </ul>
                    </div>

                    <div class="org-branch-card org-clickable" data-org-target="works_ict"
                        style="cursor: pointer; border-top-color: #d97706;" title="Click to view Engineering Dossier">
                        <span class="factlet-kicker" style="color: #d97706;">Directorate</span>
                        <h4 style="margin: 0.35rem 0; font-size: 1rem; color: var(--mc-dark);">⚙️ Works, Services &amp;
                            ICT</h4>
                        <ul class="org-branch-list">
                            <li>5-Axis CNC Precision Tooling</li>
                            <li>500 kVA Solar Hybrid Microgrid</li>
                            <li>Campus Network &amp; Data Centre</li>
                        </ul>
                    </div>

                </div>

            </div>

        </div>
    </section>

    <section id="directorates-roster" class="nistco-section nistco-bg-white nistco-border-top">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Executive Cadre</span>
                <h2 class="nistco-section-title">The Directorates &amp; Operational Leadership</h2>
                <p class="nistco-section-lead">
                    The Principal Technical Directors and Directorate Heads superintending NISTCO's research institutes,
                    specialized pilot plants, and engineering infrastructure.
                </p>
            </div>

            <div class="admin-roster-grid">

                <article class="admin-card reveal-on-scroll">
                    <div class="admin-photo-wrapper">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_barc_photo', '/assets/images/leaders/dir-biotech.jpg', 'Director, BARC' );
                        }
                        ?>
                        <div class="admin-photo-overlay">
                            <span class="admin-cadre-tag">BARC Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details">
                        <span class="admin-rank-badge">Directorate Head</span>
                        <h3 class="admin-name">Biotechnology Advanced Research Centre</h3>
                        <p class="admin-division">Genomics, Plant Micropropagation, Tissue Culture Cleanrooms &amp;
                            Bio-Fertilizer Pilot Plant.</p>
                        <div class="admin-actions">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="biotech">View
                                Mandate Dossier &rarr;</button>
                            <a href="mailto:biotech@nistco.gov.ng" class="admin-contact-btn">✉️ Contact Desk</a>
                        </div>
                    </div>
                </article>

                <article class="admin-card reveal-on-scroll delay-100" style="border-top-color: #0284c7;">
                    <div class="admin-photo-wrapper">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_amsarc_photo', '/assets/images/leaders/dir-simulation.jpg', 'Director, AMSARC' );
                        }
                        ?>
                        <div class="admin-photo-overlay">
                            <span class="admin-cadre-tag" style="color: #38bdf8;">AMSARC Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details">
                        <span class="admin-rank-badge" style="background: #e0f2fe; color: #0284c7;">Directorate
                            Head</span>
                        <h3 class="admin-name">Simulation &amp; Supercomputing Sciences</h3>
                        <p class="admin-division">1,024-Core HPC Cluster, Computational Fluid Dynamics (CFD),
                            Cryptographic Ciphers &amp; Math Modeling.</p>
                        <div class="admin-actions">
                            <button type="button" class="admin-mandate-btn org-clickable"
                                data-org-target="simulation">View Mandate Dossier &rarr;</button>
                            <a href="mailto:simulation@nistco.gov.ng" class="admin-contact-btn">✉️ Contact Desk</a>
                        </div>
                    </div>
                </article>

                <article class="admin-card reveal-on-scroll delay-200" style="border-top-color: #059669;">
                    <div class="admin-photo-wrapper">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_carc_photo', '/assets/images/leaders/dir-chemistry.jpg', 'Director, CARC' );
                        }
                        ?>
                        <div class="admin-photo-overlay">
                            <span class="admin-cadre-tag" style="color: #34d399;">CARC Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details">
                        <span class="admin-rank-badge" style="background: #d1fae5; color: #059669;">Directorate
                            Head</span>
                        <h3 class="admin-name">Chemical Advanced Research Centre</h3>
                        <p class="admin-division">Multi-Nuclear High-Field NMR Facility, 500L Organic Synthesis Batch
                            Plant &amp; CNSL Polymer Resins.</p>
                        <div class="admin-actions">
                            <button type="button" class="admin-mandate-btn org-clickable"
                                data-org-target="chem_phys">View Mandate Dossier &rarr;</button>
                            <a href="mailto:chemistry@nistco.gov.ng" class="admin-contact-btn">✉️ Contact Desk</a>
                        </div>
                    </div>
                </article>

                <article class="admin-card reveal-on-scroll" style="border-top-color: #d97706;">
                    <div class="admin-photo-wrapper">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_parc_photo', '/assets/images/leaders/dir-physics.jpg', 'Director, PARC' );
                        }
                        ?>
                        <div class="admin-photo-overlay">
                            <span class="admin-cadre-tag" style="color: #fbbf24;">PARC Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details">
                        <span class="admin-rank-badge" style="background: #fef3c7; color: #d97706;">Directorate
                            Head</span>
                        <h3 class="admin-name">Physical Advanced Research Centre</h3>
                        <p class="admin-division">Materials Physics, Solar Photovoltaic Testing Simulators, XRD
                            Crystallography &amp; Semiconductors.</p>
                        <div class="admin-actions">
                            <button type="button" class="admin-mandate-btn org-clickable"
                                data-org-target="chem_phys">View Mandate Dossier &rarr;</button>
                            <a href="mailto:physics@nistco.gov.ng" class="admin-contact-btn">✉️ Contact Desk</a>
                        </div>
                    </div>
                </article>

                <article class="admin-card reveal-on-scroll delay-100" style="border-top-color: #ca8a04;">
                    <div class="admin-photo-wrapper">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_ntc_photo', '/assets/images/leaders/dir-nuclear.jpg', 'Director, NTC' );
                        }
                        ?>
                        <div class="admin-photo-overlay">
                            <span class="admin-cadre-tag" style="color: #fde047;">NTC Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details">
                        <span class="admin-rank-badge" style="background: #fef9c3; color: #ca8a04;">Directorate
                            Head</span>
                        <h3 class="admin-name">Nuclear Technology Centre</h3>
                        <p class="admin-division">Industrial Gamma Irradiation Cells, NDT Non-Destructive Testing,
                            Dosimetry &amp; Crop Preservation.</p>
                        <div class="admin-actions">
                            <button type="button" class="admin-mandate-btn org-clickable"
                                data-org-target="chem_phys">View Mandate Dossier &rarr;</button>
                            <a href="mailto:nuclear@nistco.gov.ng" class="admin-contact-btn">✉️ Contact Desk</a>
                        </div>
                    </div>
                </article>

                <article class="admin-card reveal-on-scroll delay-200" style="border-top-color: #0284c7;">
                    <div class="admin-photo-wrapper">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_works_photo', '/assets/images/leaders/dir-works.jpg', 'Director, Works & Services' );
                        }
                        ?>
                        <div class="admin-photo-overlay">
                            <span class="admin-cadre-tag" style="color: #38bdf8;">Engineering Division</span>
                        </div>
                    </div>
                    <div class="admin-details">
                        <span class="admin-rank-badge" style="background: #e0f2fe; color: #0284c7;">Directorate
                            Head</span>
                        <h3 class="admin-name">Works, Precision Engineering &amp; ICT</h3>
                        <p class="admin-division">5-Axis CNC Precision Tooling Workshop, 500 kVA Solar Microgrid Station
                            &amp; Campus Data Centre.</p>
                        <div class="admin-actions">
                            <button type="button" class="admin-mandate-btn org-clickable"
                                data-org-target="works_ict">View Mandate Dossier &rarr;</button>
                            <a href="mailto:works@nistco.gov.ng" class="admin-contact-btn">✉️ Contact Desk</a>
                        </div>
                    </div>
                </article>

            </div>

        </div>
    </section>

</main>

<div id="org-dossier-modal" class="org-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true"
    style="display: none;">
    <div class="org-modal-container">

        <div class="org-modal-header">
            <div>
                <span id="org-modal-cadre" class="org-modal-badge">Statutory Directorate</span>
                <h3 id="org-modal-title" class="org-modal-title">Directorate Dossier</h3>
            </div>
            <button type="button" id="org-modal-close" class="org-modal-btn-close"
                aria-label="Close modal">&times;</button>
        </div>

        <div class="org-modal-body">
            <div>
                <h4 class="org-section-heading">Mandate &amp; Scientific Scope</h4>
                <p id="org-modal-desc" class="org-modal-description"></p>
            </div>

            <div>
                <h4 class="org-section-heading">Operational Units &amp; Divisions</h4>
                <ul id="org-modal-units" class="org-modal-units-list"></ul>
            </div>

            <div>
                <h4 class="org-section-heading">Core Shared Capabilities &amp; Equipment</h4>
                <div id="org-modal-pills" class="org-modal-pill-grid"></div>
            </div>

            <div id="org-modal-contact" class="org-modal-contact"
                style="font-size: 0.82rem; color: var(--mc-green); font-weight: 700; border-top: 1px solid var(--mc-border); padding-top: 0.85rem;">
            </div>
        </div>

        <div class="org-modal-footer">
            <span style="font-size: 0.78rem; color: var(--mc-text-muted);">Open shared research infrastructure under
                Presidential Executive Order No. 5.</span>
            <a id="org-modal-link" href="<?php echo esc_url( home_url( '/facilities/' ) ); ?>"
                class="nistco-btn nistco-btn-primary" style="font-size: 0.85rem; padding: 0.5rem 1.25rem;">
                Book Facility Time &rarr;
            </a>
        </div>

    </div>
</div>

<?php
get_footer();