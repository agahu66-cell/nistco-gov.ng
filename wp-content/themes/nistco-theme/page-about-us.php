<?php
/**
 * Template Name: About Us & Governance Dossier
 * Description: Authoritative institutional profile, sovereign presidential patronage, supervisory leadership, DG welcome address, Vision/Mission/Aims/Objectives/Goals, current features, unique version history ledger, and interactive dossier modals for NISTCO.
 * File: page-about-us.php
 *
 * @package NistcoTheme
 * @version 3.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();

// Customizer Leadership Settings
$president_name    = get_theme_mod( 'nistco_president_name', 'Bola Ahmed Tinubu' );
$president_quote   = get_theme_mod( 'nistco_president_quote', 'Nigeria must build a knowledge-driven economy where indigenous science, domestic patents, and local industrial manufacturing drive our national wealth and global competitiveness.' );

$minister_name     = get_theme_mod( 'nistco_minister_name', 'Dr. Kingsley Tochukwu Ude' );
$perm_sec_name     = get_theme_mod( 'nistco_perm_sec_name', 'Dr. Mukhtar Yawale Muhammad' );
$board_chair_name  = get_theme_mod( 'nistco_board_chair_name', 'Chairman, Governing Board' );

$dg_name           = get_theme_mod( 'nistco_dg_name', 'Hon. (Engr) Magaji Da’u Aliyu' );
$dg_headline       = get_theme_mod( 'nistco_dg_headline', 'Pioneering Knowledge-Driven Solutions for Indigenous Industrial Transformation' );
$dg_quote          = get_theme_mod( 'nistco_dg_quote', 'Our statutory mandate is clear: to ensure that Nigeria does not merely consume global technology, but actively creates, patents, and deploys high-impact scientific discoveries.' );
?>

<main class="site-main nistco-main">

    <!-- HERO SECTION -->
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
                        Established as Nigeria's premier multidisciplinary scientific complex to execute frontier research, maintain shared analytical laboratory infrastructure, and drive indigenous technology commercialization.
                    </p>

                    <div class="nistco-hero-actions">
                        <a href="#dg-welcome" class="nistco-btn nistco-btn-primary">
                            <span>📜</span>
                            <span>DG / CEO Welcome Address</span>
                        </a>

                        <a href="#vmog-section" class="nistco-btn nistco-btn-secondary">
                            <span>🎯</span>
                            <span>Vision, Mission &amp; Goals</span>
                        </a>

                        <a href="#version-history" class="nistco-btn nistco-btn-gold">
                            <span>📦</span>
                            <span>Version Ledger &rarr;</span>
                        </a>
                    </div>

                    <div class="nistco-centre-launchpad">
                        <span class="launchpad-heading">Explore Directorate Portfolios:</span>
                        <div class="launchpad-pills-row">
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="biotech" title="Biotechnology Advanced Research Centre">
                                <span class="pill-icon">🧬</span>
                                <span class="pill-code">BARC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="simulation" title="Applied Mathematics & Simulation Research Centre">
                                <span class="pill-icon">💻</span>
                                <span class="pill-code">AMSARC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="chem_phys" title="Chemistry Advanced Research Centre">
                                <span class="pill-icon">🧪</span>
                                <span class="pill-code">CARC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="chem_phys" title="Physics Advanced Research Centre">
                                <span class="pill-icon">🔬</span>
                                <span class="pill-code">PARC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="chem_phys" title="Nuclear Technology Centre">
                                <span class="pill-icon">⚛️</span>
                                <span class="pill-code">NTC</span>
                            </button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="works_ict" title="Precision Engineering & Tooling">
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
                                <svg class="gear-3d-svg" viewBox="0 0 200 200" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
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
                                        <rect x="91" y="8" width="18" height="26" rx="3" transform="rotate(30 100 100)" />
                                        <rect x="91" y="166" width="18" height="26" rx="3" transform="rotate(30 100 100)" />
                                        <rect x="91" y="8" width="18" height="26" rx="3" transform="rotate(60 100 100)" />
                                        <rect x="91" y="166" width="18" height="26" rx="3" transform="rotate(60 100 100)" />
                                        <rect x="91" y="8" width="18" height="26" rx="3" transform="rotate(120 100 100)" />
                                        <rect x="91" y="166" width="18" height="26" rx="3" transform="rotate(120 100 100)" />
                                        <rect x="91" y="8" width="18" height="26" rx="3" transform="rotate(150 100 100)" />
                                        <rect x="91" y="166" width="18" height="26" rx="3" transform="rotate(150 100 100)" />
                                    </g>
                                    <circle cx="100" cy="100" r="76" fill="url(#aboutMainGear)" stroke="#86efac" stroke-width="2" />
                                    <circle cx="100" cy="100" r="56" fill="#032015" stroke="rgba(134,239,172,0.4)" stroke-width="2" />
                                    <g stroke="url(#aboutMainGear)" stroke-width="8" stroke-linecap="round">
                                        <line x1="100" y1="28" x2="100" y2="172" />
                                        <line x1="28" y1="100" x2="172" y2="100" />
                                    </g>
                                    <circle cx="100" cy="100" r="30" fill="url(#aboutMainHub)" stroke="#fef08a" stroke-width="2" />
                                    <circle cx="100" cy="100" r="12" fill="#042416" stroke="rgba(255,255,255,0.6)" stroke-width="1.5" />
                                </svg>
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

    <!-- =========================================================================
         PRESIDENTIAL SECTION: MAJESTIC PRESTIGE & SOVEREIGN PATRONAGE
         ========================================================================= -->
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">

            <div class="mc-presidential-banner reveal-on-scroll" style="background: linear-gradient(135deg, #021a10 0%, #042f1b 50%, #064024 100%); border: 3px solid #fde047; box-shadow: 0 30px 70px rgba(0,0,0,0.35); border-radius: 24px; padding: 4.5rem 3.5rem; position: relative; overflow: hidden;">
                <div class="mc-presidential-pattern" style="position: absolute; inset: 0; background-image: radial-gradient(rgba(253, 224, 71, 0.15) 1.5px, transparent 1.5px); background-size: 28px 28px; opacity: 0.7; pointer-events: none;"></div>

                <div class="mc-presidential-grid" style="display: grid; grid-template-columns: 320px 1fr; gap: 3.5rem; align-items: center; position: relative; z-index: 2;">

                    <!-- Presidential Portrait & Crown Badge -->
                    <div class="mc-presidential-portrait-wrap" style="text-align: center;">
                        <div class="mc-presidential-photo-frame" style="position: relative; border-radius: 16px; overflow: hidden; border: 3px solid #fde047; box-shadow: 0 20px 40px rgba(0,0,0,0.5); background: #032015; aspect-ratio: 3/4;">
                            <?php 
                            if ( function_exists( 'nistco_get_leader_photo' ) ) {
                                echo nistco_get_leader_photo( 'nistco_president_photo', '/assets/images/leaders/president.jpg', 'His Excellency, The President' );
                            } else {
                                echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#fde047; font-size:4.5rem;"><span style="font-size:1.2rem; font-weight:800; margin-top:0.5rem; color:#fef08a; letter-spacing:1px;">GCFR</span>🇳🇬</div>';
                            }
                            ?>
                            <div class="mc-presidential-photo-badge" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); padding: 0.75rem; border-top: 2px solid #fde047; text-align: center;">
                                <span style="font-size: 0.8rem; font-weight: 800; color: #fde047; text-transform: uppercase; letter-spacing: 1px;">Grand Patron &bull; Commander-in-Chief</span>
                            </div>
                        </div>

                        <div class="mc-presidential-caption" style="margin-top: 1.5rem;">
                            <span style="font-size: 0.75rem; font-weight: 800; color: #86efac; text-transform: uppercase; letter-spacing: 1.5px; display: block; margin-bottom: 0.25rem;">Apex Sovereign Patronage</span>
                            <span style="font-size: 0.9rem; color: #cbd5e1; display: block;">His Excellency</span>
                            <strong style="font-size: 1.5rem; font-weight: 800; color: #ffffff; display: block; margin: 0.25rem 0;"><?php echo esc_html( $president_name ); ?></strong>
                            <span style="font-size: 0.85rem; color: #fde047; font-weight: 700;">President of the Federal Republic of Nigeria</span>
                        </div>
                    </div>

                    <!-- Presidential Directives & Quote -->
                    <div class="mc-presidential-content">
                        <div class="mc-presidential-pills" style="display: flex; gap: 0.75rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
                            <span class="nistco-pill nistco-pill-gold" style="background: #fde047; color: #451a03; font-weight: 800;">🇳🇬 Sovereign Directives</span>
                            <span class="nistco-pill nistco-pill-green" style="background: #008751; color: #ffffff; font-weight: 800;">Executive Order No. 5</span>
                        </div>

                        <h2 class="mc-presidential-heading" style="font-size: clamp(1.85rem, 3.2vw, 2.75rem); font-weight: 800; color: #ffffff; line-height: 1.2; margin: 0 0 1.5rem 0;">
                            Anchoring Nigeria's Sovereign Science &amp; Technology Policy
                        </h2>

                        <blockquote class="mc-presidential-quote" style="font-size: 1.15rem; line-height: 1.7; color: #fef08a; font-style: italic; border-left: 4px solid #fde047; padding-left: 1.5rem; margin: 0 0 2rem 0;">
                            "<?php echo esc_html( $president_quote ); ?>"
                        </blockquote>

                        <div class="mc-presidential-pillars-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
                            <div class="mc-presidential-pillar-item" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(253,224,71,0.3); border-radius: 12px; padding: 1.25rem; display: flex; gap: 1rem; align-items: flex-start;">
                                <span class="pillar-icon" style="font-size: 1.75rem;">🏭</span>
                                <div>
                                    <strong style="color: #ffffff; display: block; margin-bottom: 0.25rem; font-size: 1rem;">Industrial Domestication</strong>
                                    <p style="color: #cbd5e1; font-size: 0.88rem; margin: 0; line-height: 1.5;">Mandating federal procurement preference for indigenous engineering, chemical synthesis, and domestic agro-biotech technologies.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item" style="background: rgba(255,255,255,0.06); border: 1px solid rgba(253,224,71,0.3); border-radius: 12px; padding: 1.25rem; display: flex; gap: 1rem; align-items: flex-start;">
                                <span class="pillar-icon" style="font-size: 1.75rem;">🔒</span>
                                <div>
                                    <strong style="color: #ffffff; display: block; margin-bottom: 0.25rem; font-size: 1rem;">Critical Security Tech</strong>
                                    <p style="color: #cbd5e1; font-size: 0.88rem; margin: 0; line-height: 1.5;">Developing indigenous quantum cryptographic algorithms to safeguard federal critical data, defense, and banking networks.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         VISION, MISSION, AIM, OBJECTIVES, AND GOALS (AVMOG)
         ========================================================================= -->
    <section id="vmog-section" class="nistco-section nistco-bg-parchment nistco-border-top">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Strategic Blueprint</span>
                <h2 class="nistco-section-title">Vision, Mission, Aims, Objectives &amp; Goals</h2>
                <p class="nistco-section-lead">
                    The foundational compass governing NISTCO's research excellence, technological innovation, and national service commitments.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem;">

                <!-- Vision Card -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 5px solid #008751;">
                    <div style="font-size: 2.25rem; margin-bottom: 1rem;">🔭</div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Our Vision</h3>
                    <p style="font-size: 0.98rem; color: #64748b; line-height: 1.7; margin: 0;">
                        To be Africa's leading center of excellence in scientific research, advanced instrumentation, and indigenous technology commercialization, driving absolute technological sovereignty for Nigeria.
                    </p>
                </div>

                <!-- Mission Card -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 5px solid #d97706;">
                    <div style="font-size: 2.25rem; margin-bottom: 1rem;">🎯</div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Our Mission</h3>
                    <p style="font-size: 0.98rem; color: #64748b; line-height: 1.7; margin: 0;">
                        To execute frontier multidisciplinary R&amp;D, maintain shared national laboratory infrastructure, and transform innovative patents into marketable commercial products that ensure national self-reliance.
                    </p>
                </div>

                <!-- Aim Card -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 5px solid #0284c7;">
                    <div style="font-size: 2.25rem; margin-bottom: 1rem;">⚡</div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Our Strategic Aim</h3>
                    <p style="font-size: 0.98rem; color: #64748b; line-height: 1.7; margin: 0;">
                        To bridge the historic gap between academic discovery and industrial manufacturing through strategic public-private partnerships, rigorous scientific metrology, and open access infrastructure.
                    </p>
                </div>

                <!-- Objectives Card -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 5px solid #8b5cf6;">
                    <div style="font-size: 2.25rem; margin-bottom: 1rem;">📋</div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Key Objectives</h3>
                    <ul style="margin: 0; padding-left: 1.25rem; color: #64748b; font-size: 0.92rem; line-height: 1.6;">
                        <li style="margin-bottom: 0.5rem;">Maintain state-of-the-art research centers in biotechnology, simulation, chemistry, physics, and nuclear science.</li>
                        <li style="margin-bottom: 0.5rem;">Ensure strict compliance with Presidential Executive Order No. 5 for indigenous technology preference.</li>
                        <li>Provide researchers and industrial partners with reliable access to high-performance computing and analytical equipment.</li>
                    </ul>
                </div>

                <!-- Goals Card -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 5px solid #059669; grid-column: span 2;">
                    <div style="font-size: 2.25rem; margin-bottom: 1rem;">🏆</div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Core Institutional Goals by 2030</h3>
                    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem; margin-top: 1rem;">
                        <div style="background: #f8fafc; padding: 1.25rem; border-radius: 10px; border-left: 3px solid #008751;">
                            <strong style="display: block; color: #0f172a; margin-bottom: 0.25rem;">100% Patent Commercialization</strong>
                            <p style="font-size: 0.88rem; color: #64748b; margin: 0;">Achieving full commercial readiness and NOTAP registration for all indigenous research patents.</p>
                        </div>
                        <div style="background: #f8fafc; padding: 1.25rem; border-radius: 10px; border-left: 3px solid #0284c7;">
                            <strong style="display: block; color: #0f172a; margin-bottom: 0.25rem;">Zero-Carbon Campus Operations</strong>
                            <p style="font-size: 0.88rem; color: #64748b; margin: 0;">Powering all research complexes entirely through our 500 kVA solar hybrid microgrid infrastructure.</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         SUPERVISORY OVERSIGHT: MINISTRY & GOVERNING BOARD LEADERSHIP
         ========================================================================= -->
    <section class="nistco-section nistco-bg-white nistco-border-top nistco-border-bottom" id="dignitaries">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Supervisory Oversight</span>
                <h2 class="nistco-section-title">Ministry &amp; Governing Board Leadership</h2>
                <p class="nistco-section-lead">
                    Providing strategic policy direction, fiduciary governance, and inter-ministerial alignment under the Federal Ministry of Innovation, Science and Technology.
                </p>
            </div>

            <div class="dignitaries-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">

                <!-- Dignitary Card 1: Minister -->
                <div class="dignitary-card reveal-on-scroll" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                    <div class="dignitary-photo-wrap" style="position: relative; height: 280px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_minister_photo', '/assets/images/leaders/minister.jpg', 'Honourable Minister' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#86efac; font-size:4rem;"><span style="font-size:1.1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">FMIST</span>🏛️</div>';
                        }
                        ?>
                        <div class="dignitary-badge-stripe" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #fde047; padding: 0.6rem; text-align: center; font-size: 0.75rem; font-weight: 800; text-transform: uppercase;">Supervising Minister</div>
                    </div>
                    <div class="dignitary-info" style="padding: 2rem;">
                        <span class="dignitary-role" style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; display: block; margin-bottom: 0.35rem;">Apex Political &amp; Policy Authority</span>
                        <h3 class="dignitary-name" style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;"><?php echo esc_html( $minister_name ); ?><br><span style="font-size: 0.85rem; color: #64748b; font-weight: 600;">(SAN)</span></h3>
                        <p class="dignitary-org" style="font-size: 0.9rem; color: #64748b; margin: 0;">Federal Ministry of Innovation, Science &amp; Technology (FMIST)</p>
                    </div>
                </div>

                <!-- Dignitary Card 2: Permanent Secretary -->
                <div class="dignitary-card reveal-on-scroll delay-100" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                    <div class="dignitary-photo-wrap" style="position: relative; height: 280px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_perm_sec_photo', '/assets/images/leaders/perm-sec.jpg', 'Permanent Secretary' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#86efac; font-size:4rem;"><span style="font-size:1.1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">FMIST</span>📊</div>';
                        }
                        ?>
                        <div class="dignitary-badge-stripe" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #fde047; padding: 0.6rem; text-align: center; font-size: 0.75rem; font-weight: 800; text-transform: uppercase;">Accounting Officer</div>
                    </div>
                    <div class="dignitary-info" style="padding: 2rem;">
                        <span class="dignitary-role" style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; display: block; margin-bottom: 0.35rem;">Administrative &amp; Accounting Head</span>
                        <h3 class="dignitary-name" style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;"><?php echo esc_html( $perm_sec_name ); ?><br><span style="font-size: 0.85rem; color: #64748b; font-weight: 600;">(MFR, mni)</span></h3>
                        <p class="dignitary-org" style="font-size: 0.9rem; color: #64748b; margin: 0;">Federal Ministry of Innovation, Science &amp; Technology (FMIST)</p>
                    </div>
                </div>

                <!-- Dignitary Card 3: Board Chair -->
                <div class="dignitary-card reveal-on-scroll delay-200" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                    <div class="dignitary-photo-wrap" style="position: relative; height: 280px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_board_chair_photo', '/assets/images/leaders/board-chair.jpg', 'Board Chairman' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#86efac; font-size:4rem;"><span style="font-size:1.1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">GOVERNING BOARD</span>⚖️</div>';
                        }
                        ?>
                        <div class="dignitary-badge-stripe" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #fde047; padding: 0.6rem; text-align: center; font-size: 0.75rem; font-weight: 800; text-transform: uppercase;">Institutional Governance</div>
                    </div>
                    <div class="dignitary-info" style="padding: 2rem;">
                        <span class="dignitary-role" style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; display: block; margin-bottom: 0.35rem;">Chairman, Governing Board</span>
                        <h3 class="dignitary-name" style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;"><?php echo esc_html( $board_chair_name ); ?><br><span style="font-size: 0.85rem; color: #64748b; font-weight: 600;">(PhD)</span></h3>
                        <p class="dignitary-org" style="font-size: 0.9rem; color: #64748b; margin: 0;">Nigeria Innovation Science &amp; Technology Complex (NISTCO)</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         DG / CEO WELCOME ADDRESS & STATEMENT
         ========================================================================= -->
    <section id="dg-welcome" class="nistco-section nistco-bg-white">
        <div class="nistco-container">

            <div class="nistco-exec-grid" style="display: grid; grid-template-columns: 360px 1fr; gap: 4rem; align-items: center;">
                <div class="nistco-exec-portrait-card reveal-on-scroll" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                    <div class="nistco-exec-photo-wrap" style="position: relative; height: 400px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dg_photo', '/assets/images/leaders/dg-ceo.jpg', 'Director-General / CEO' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#fde047; font-size:4.5rem;"><span style="font-size:1.1rem; font-weight:800; margin-top:0.5rem; color:#fef08a; letter-spacing:1px;">DG / CEO</span>👨‍🔬</div>';
                        }
                        ?>
                        <div class="nistco-exec-photo-badge" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #fde047; padding: 0.6rem; text-align: center; font-size: 0.8rem; font-weight: 800; text-transform: uppercase;">Chief Executive Officer</div>
                    </div>
                    <div class="nistco-exec-caption" style="padding: 1.75rem; text-align: center;">
                        <strong class="nistco-exec-name" style="font-size: 1.25rem; font-weight: 800; color: #0f172a; display: block; margin-bottom: 0.25rem;"><?php echo esc_html( $dg_name ); ?><br><span style="font-size: 0.85rem; color: #008751; font-weight: 700;">|PhD, mni|</span></strong>
                        <span class="nistco-exec-designation" style="font-size: 0.85rem; color: #64748b; display: block;">Director-General / Chief Executive Officer</span>
                    </div>
                </div>

                <div class="nistco-exec-statement reveal-on-scroll delay-100">
                    <span class="nistco-section-kicker">Executive Leadership Statement</span>
                    <h2 class="nistco-exec-headline" style="font-size: 2rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 1.25rem 0;"><?php echo esc_html( $dg_headline ); ?></h2>

                    <blockquote class="nistco-exec-quote" style="font-size: 1.1rem; line-height: 1.7; color: #008751; font-style: italic; border-left: 4px solid #008751; padding-left: 1.25rem; margin: 0 0 1.5rem 0;">
                        "<?php echo esc_html( $dg_quote ); ?>"
                    </blockquote>

                    <div style="font-size: 0.98rem; line-height: 1.8; color: var(--mc-text-main, #334155); margin-bottom: 2rem;">
                        <p style="margin-bottom: 1rem;">
                            Welcome to the official portal of the <strong>Nigeria Innovation Science and Technology Complex (NISTCO)</strong>. Our research sanctuary at Sheda, Abuja, represents Nigeria's apex investment in frontier science, shared national instrumentation cores, and indigenous technology scaling.
                        </p>
                        <p style="margin: 0;">
                            Through our 6 multidisciplinary directorates, we open our doors to university scholars, postgraduate fellows, and industrial partners to access high-field NMR spectrometry, HPC supercomputing clusters, and demonstration pilot plants.
                        </p>
                    </div>

                    <div class="nistco-exec-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="#directorates-roster" class="nistco-btn nistco-btn-primary" style="background: #008751; color: #fff;">
                            <span>🏛️</span>
                            <span>Directorate Leadership Roster</span>
                        </a>
                        <a href="#organogram" class="nistco-btn nistco-btn-outline" style="border: 2px solid #008751; color: #008751;">
                            <span>📊</span>
                            <span>View Governance Organogram</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         GOVERNANCE ORGANOGRAM & TREE
         ========================================================================= -->
    <section id="organogram" class="nistco-section nistco-bg-parchment nistco-border-top">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Statutory Structure</span>
                <h2 class="nistco-section-title">Institutional Governance &amp; Organogram</h2>
                <p class="nistco-section-lead">
                    Click on any operational branch or directorate card to view detailed divisional mandates, specialized equipment, and research capabilities.
                </p>
            </div>

            <div class="organogram-wrapper reveal-on-scroll">

                <div class="org-node org-node-ministry org-clickable" data-org-target="ministry" style="cursor: pointer;" title="Click to view Ministry Dossier">
                    <span class="factlet-kicker" style="color: #fde047;">Apex Supervisory Authority</span>
                    <h3 style="margin: 0.25rem 0; font-size: 1.2rem; color: #ffffff;">Federal Ministry of Innovation, Science &amp; Technology (FMIST)</h3>
                </div>

                <div class="org-connector"></div>

                <div class="org-node org-node-board org-clickable" data-org-target="board" style="cursor: pointer;" title="Click to view Board Dossier">
                    <span class="factlet-kicker" style="color: var(--mc-green);">Statutory Policy Oversight</span>
                    <h3 style="margin: 0.25rem 0; font-size: 1.15rem; color: var(--mc-dark);">NISTCO Governing Board</h3>
                </div>

                <div class="org-connector"></div>

                <div class="org-node org-node-dg org-clickable" data-org-target="dg_office" style="cursor: pointer;" title="Click to view Executive Dossier">
                    <span class="factlet-kicker" style="color: #fde047;">Apex Executive Management</span>
                    <h3 style="margin: 0.25rem 0; font-size: 1.25rem; color: #ffffff;">Office of the Director-General / CEO</h3>
                    <p style="margin: 0.25rem 0 0 0; font-size: 0.82rem; color: #86efac;">Legal Secretariat &bull; Internal Audit &bull; SERVICOM &bull; Procurement Unit &bull; ACTU</p>
                </div>

                <div class="org-connector" style="height: 36px;"></div>

                <div class="org-grid-level">
                    <div class="org-branch-card org-clickable" data-org-target="biotech" style="cursor: pointer;" title="Click to view BARC Dossier">
                        <span class="factlet-kicker" style="color: var(--mc-green);">Directorate</span>
                        <h4 style="margin: 0.35rem 0; font-size: 1rem; color: var(--mc-dark);">🧬 Biotechnology (BARC)</h4>
                        <ul class="org-branch-list">
                            <li>Plant Genomics &amp; Breeding</li>
                            <li>Automated Micropropagation</li>
                            <li>Microbial Soil Enricher Synthesis</li>
                        </ul>
                    </div>

                    <div class="org-branch-card org-clickable" data-org-target="simulation" style="cursor: pointer; border-top-color: #0284c7;" title="Click to view AMSARC Dossier">
                        <span class="factlet-kicker" style="color: #0284c7;">Directorate</span>
                        <h4 style="margin: 0.35rem 0; font-size: 1rem; color: var(--mc-dark);">💻 Simulation &amp; HPC (AMSARC)</h4>
                        <ul class="org-branch-list">
                            <li>1,024-Core HPC Supercomputing</li>
                            <li>Computational Fluid Dynamics</li>
                            <li>Quantum Cryptographic Algorithms</li>
                        </ul>
                    </div>

                    <div class="org-branch-card org-clickable" data-org-target="chem_phys" style="cursor: pointer; border-top-color: #059669;" title="Click to view CARC/PARC/NTC Dossier">
                        <span class="factlet-kicker" style="color: #059669;">Directorates</span>
                        <h4 style="margin: 0.35rem 0; font-size: 1rem; color: var(--mc-dark);">🧪 Chemical, Physical &amp; NTC</h4>
                        <ul class="org-branch-list">
                            <li>High-Field Multi-Nuclear NMR</li>
                            <li>Industrial Gamma Irradiation</li>
                            <li>Thin-Film Photovoltaics Lab</li>
                        </ul>
                    </div>

                    <div class="org-branch-card org-clickable" data-org-target="works_ict" style="cursor: pointer; border-top-color: #d97706;" title="Click to view Engineering Dossier">
                        <span class="factlet-kicker" style="color: #d97706;">Directorate</span>
                        <h4 style="margin: 0.35rem 0; font-size: 1rem; color: var(--mc-dark);">⚙️ Works, Services &amp; ICT</h4>
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

    <!-- =========================================================================
         DIRECTORATES & OPERATIONAL LEADERSHIP ROSTER
         ========================================================================= -->
    <section id="directorates-roster" class="nistco-section nistco-bg-white nistco-border-top">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Executive Cadre</span>
                <h2 class="nistco-section-title">The Directorates &amp; Operational Leadership</h2>
                <p class="nistco-section-lead">
                    The Principal Technical Directors and Directorate Heads superintending NISTCO's research institutes, specialized pilot plants, and engineering infrastructure.
                </p>
            </div>

            <div class="admin-roster-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem;">

                <!-- Director Card 1: BARC -->
                <article class="admin-card reveal-on-scroll" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 4px solid #008751;">
                    <div class="admin-photo-wrapper" style="position: relative; height: 280px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_barc_photo', '/assets/images/leaders/dir-biotech.jpg', 'Director, BARC' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#86efac; font-size:4rem;"><span style="font-size:1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">BARC</span>🧬</div>';
                        }
                        ?>
                        <div class="admin-photo-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span class="admin-cadre-tag" style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase;">BARC Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details" style="padding: 2rem;">
                        <span class="admin-rank-badge" style="background: #d1fae5; color: #065f46; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px; display: inline-block; margin-bottom: 0.75rem;">Directorate Head</span>
                        <h3 class="admin-name" style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Biotechnology Advanced Research Centre</h3>
                        <p class="admin-division" style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">Genomics, Plant Micropropagation, Tissue Culture Cleanrooms &amp; Bio-Fertilizer Pilot Plant.</p>
                        <div class="admin-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="biotech" style="background: #008751; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer; font-size: 0.85rem;">View Mandate Dossier &rarr;</button>
                            <a href="mailto:biotech@nistco.gov.ng" class="admin-contact-btn" style="color: #008751; font-weight: 700; text-decoration: none; display: flex; align-items: center; font-size: 0.85rem;">✉️ Contact Desk</a>
                        </div>
                    </div>
                </article>

                <!-- Director Card 2: AMSARC -->
                <article class="admin-card reveal-on-scroll delay-100" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 4px solid #0284c7;">
                    <div class="admin-photo-wrapper" style="position: relative; height: 280px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_amsarc_photo', '/assets/images/leaders/dir-simulation.jpg', 'Director, AMSARC' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#38bdf8; font-size:4rem;"><span style="font-size:1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">AMSARC</span>💻</div>';
                        }
                        ?>
                        <div class="admin-photo-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span class="admin-cadre-tag" style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #38bdf8;">AMSARC Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details" style="padding: 2rem;">
                        <span class="admin-rank-badge" style="background: #e0f2fe; color: #0284c7; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px; display: inline-block; margin-bottom: 0.75rem;">Directorate Head</span>
                        <h3 class="admin-name" style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Simulation &amp; Supercomputing Sciences</h3>
                        <p class="admin-division" style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">1,024-Core HPC Cluster, Computational Fluid Dynamics (CFD), Cryptographic Ciphers &amp; Math Modeling.</p>
                        <div class="admin-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="simulation" style="background: #0284c7; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer; font-size: 0.85rem;">View Mandate Dossier &rarr;</button>
                            <a href="mailto:simulation@nistco.gov.ng" class="admin-contact-btn" style="color: #0284c7; font-weight: 700; text-decoration: none; display: flex; align-items: center; font-size: 0.85rem;">✉️ Contact Desk</a>
                        </div>
                    </div>
                </article>

                <!-- Director Card 3: CARC -->
                <article class="admin-card reveal-on-scroll delay-200" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 4px solid #059669;">
                    <div class="admin-photo-wrapper" style="position: relative; height: 280px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_carc_photo', '/assets/images/leaders/dir-chemistry.jpg', 'Director, CARC' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#34d399; font-size:4rem;"><span style="font-size:1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">CARC</span>🧪</div>';
                        }
                        ?>
                        <div class="admin-photo-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span class="admin-cadre-tag" style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #34d399;">CARC Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details" style="padding: 2rem;">
                        <span class="admin-rank-badge" style="background: #d1fae5; color: #059669; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px; display: inline-block; margin-bottom: 0.75rem;">Directorate Head</span>
                        <h3 class="admin-name" style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Chemistry Advanced Research Centre</h3>
                        <p class="admin-division" style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">Multi-Nuclear High-Field NMR Facility, 500L Organic Synthesis Batch Plant &amp; CNSL Polymer Resins.</p>
                        <div class="admin-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="chem_phys" style="background: #059669; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer; font-size: 0.85rem;">View Mandate Dossier &rarr;</button>
                            <a href="mailto:chemistry@nistco.gov.ng" class="admin-contact-btn" style="color: #059669; font-weight: 700; text-decoration: none; display: flex; align-items: center; font-size: 0.85rem;">✉️ Contact Desk</a>
                        </div>
                    </div>
                </article>

                <!-- Director Card 4: PARC -->
                <article class="admin-card reveal-on-scroll" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 4px solid #d97706;">
                    <div class="admin-photo-wrapper" style="position: relative; height: 280px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_parc_photo', '/assets/images/leaders/dir-physics.jpg', 'Director, PARC' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#fbbf24; font-size:4rem;"><span style="font-size:1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">PARC</span>🔬</div>';
                        }
                        ?>
                        <div class="admin-photo-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span class="admin-cadre-tag" style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #fbbf24;">PARC Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details" style="padding: 2rem;">
                        <span class="admin-rank-badge" style="background: #fef3c7; color: #d97706; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px; display: inline-block; margin-bottom: 0.75rem;">Directorate Head</span>
                        <h3 class="admin-name" style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Physics Advanced Research Centre</h3>
                        <p class="admin-division" style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">Materials Physics, Solar Photovoltaic Testing Simulators, XRD Crystallography &amp; Semiconductors.</p>
                        <div class="admin-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="chem_phys" style="background: #d97706; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer; font-size: 0.85rem;">View Mandate Dossier &rarr;</button>
                            <a href="mailto:physics@nistco.gov.ng" class="admin-contact-btn" style="color: #d97706; font-weight: 700; text-decoration: none; display: flex; align-items: center; font-size: 0.85rem;">✉️ Contact Desk</a>
                        </div>
                    </div>
                </article>

                <!-- Director Card 5: NTC -->
                <article class="admin-card reveal-on-scroll delay-100" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 4px solid #ca8a04;">
                    <div class="admin-photo-wrapper" style="position: relative; height: 280px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_ntc_photo', '/assets/images/leaders/dir-nuclear.jpg', 'Director, NTC' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#fde047; font-size:4rem;"><span style="font-size:1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">NTC</span>⚛️</div>';
                        }
                        ?>
                        <div class="admin-photo-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span class="admin-cadre-tag" style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #fde047;">NTC Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details" style="padding: 2rem;">
                        <span class="admin-rank-badge" style="background: #fef9c3; color: #ca8a04; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px; display: inline-block; margin-bottom: 0.75rem;">Directorate Head</span>
                        <h3 class="admin-name" style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Nuclear Technology Centre</h3>
                        <p class="admin-division" style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">Industrial Gamma Irradiation Cells, NDT Non-Destructive Testing, Dosimetry &amp; Crop Preservation.</p>
                        <div class="admin-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="chem_phys" style="background: #ca8a04; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer; font-size: 0.85rem;">View Mandate Dossier &rarr;</button>
                            <a href="mailto:nuclear@nistco.gov.ng" class="admin-contact-btn" style="color: #ca8a04; font-weight: 700; text-decoration: none; display: flex; align-items: center; font-size: 0.85rem;">✉️ Contact Desk</a>
                        </div>
                    </div>
                </article>

                <!-- Director Card 6: Works & Engineering -->
                <article class="admin-card reveal-on-scroll delay-200" style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 4px solid #0284c7;">
                    <div class="admin-photo-wrapper" style="position: relative; height: 280px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_works_photo', '/assets/images/leaders/dir-works.jpg', 'Director, Works & Services' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#38bdf8; font-size:4rem;"><span style="font-size:1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">WORKS</span>⚙️</div>';
                        }
                        ?>
                        <div class="admin-photo-overlay" style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span class="admin-cadre-tag" style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #38bdf8;">Engineering Division</span>
                        </div>
                    </div>
                    <div class="admin-details" style="padding: 2rem;">
                        <span class="admin-rank-badge" style="background: #e0f2fe; color: #0284c7; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px; display: inline-block; margin-bottom: 0.75rem;">Directorate Head</span>
                        <h3 class="admin-name" style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Works, Precision Engineering &amp; ICT</h3>
                        <p class="admin-division" style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">5-Axis CNC Precision Tooling Workshop, 500 kVA Solar Microgrid Station &amp; Campus Data Centre.</p>
                        <div class="admin-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="works_ict" style="background: #0284c7; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer; font-size: 0.85rem;">View Mandate Dossier &rarr;</button>
                            <a href="mailto:works@nistco.gov.ng" class="admin-contact-btn" style="color: #0284c7; font-weight: 700; text-decoration: none; display: flex; align-items: center; font-size: 0.85rem;">✉️ Contact Desk</a>
                        </div>
                    </div>
                </article>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         UNIQUE VERSION HISTORY & EVOLUTION LEDGER
         ========================================================================= -->
    <section id="version-history" class="nistco-section nistco-bg-parchment nistco-border-top">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Evolution Ledger</span>
                <h2 class="nistco-section-title">Institutional Version History &amp; Changelog</h2>
                <p class="nistco-section-lead">
                    A unique chronological ledger tracing NISTCO's structural milestones, technological upgrades, and digital transformations.
                </p>
            </div>

            <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 1.5rem;">

                <!-- Version 3.0 -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.03); border-left: 5px solid #008751; position: relative;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem; flex-wrap: wrap; gap: 0.5rem;">
                        <span style="background: #d1fae5; color: #065f46; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.75rem; border-radius: 50px;">v3.0.0 (Current Release)</span>
                        <span style="font-size: 0.85rem; color: #64748b; font-weight: 700;">October 2026</span>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Digital Autonomous Complex &amp; MariaDB Telemetry Integration</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Full deployment of asynchronous AJAX patent dossier request forms, automated MariaDB telemetry logging tables, 500 kVA solar microgrid monitoring, and interactive governance organogram modals.
                    </p>
                </div>

                <!-- Version 2.0 -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.03); border-left: 5px solid #d97706; position: relative;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem; flex-wrap: wrap; gap: 0.5rem;">
                        <span style="background: #fef3c7; color: #92400e; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.75rem; border-radius: 50px;">v2.0.0 (Expansion Era)</span>
                        <span style="font-size: 0.85rem; color: #64748b; font-weight: 700;">2024 – 2025</span>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Sheda Complex Rebranding &amp; Mandate Expansion</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Strategic transition from SHESTCO to the Nigeria Innovation Science and Technology Complex (NISTCO). Establishment of the NOTAP Technology Commercialization Directorate and SERVICOM public trustee desk.
                    </p>
                </div>

                <!-- Version 1.0 -->
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2rem; box-shadow: 0 4px 20px rgba(0,0,0,0.03); border-left: 5px solid #0284c7; position: relative;">
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem; flex-wrap: wrap; gap: 0.5rem;">
                        <span style="background: #e0f2fe; color: #0369a1; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.75rem; border-radius: 50px;">v1.0.0 (Foundational Genesis)</span>
                        <span style="font-size: 0.85rem; color: #64748b; font-weight: 700;">Foundational Charter</span>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Establishment under Federal Ministry of Science &amp; Technology</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Initial land acquisition of the 2,000-hectare research sanctuary in Sheda, Abuja. Foundation of the initial multidisciplinary research centres for biotechnology, nuclear science, chemistry, and physics.
                    </p>
                </div>

            </div>

        </div>
    </section>

</main>

<!-- Interactive Dossier Modal -->
<div id="org-dossier-modal" class="org-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true" style="display: none;">
    <div class="org-modal-container">

        <div class="org-modal-header">
            <div>
                <span id="org-modal-cadre" class="org-modal-badge">Statutory Directorate</span>
                <h3 id="org-modal-title" class="org-modal-title">Directorate Dossier</h3>
            </div>
            <button type="button" id="org-modal-close" class="org-modal-btn-close" aria-label="Close modal">&times;</button>
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

            <div id="org-modal-contact" class="org-modal-contact" style="font-size: 0.82rem; color: #008751; font-weight: 700; border-top: 1px solid #e2e8f0; padding-top: 0.85rem;">
            </div>
        </div>

        <div class="org-modal-footer">
            <span style="font-size: 0.78rem; color: #64748b;">Open shared research infrastructure under Presidential Executive Order No. 5.</span>
            <a id="org-modal-link" href="<?php echo esc_url( home_url( '/instrumentation/' ) ); ?>" class="nistco-btn nistco-btn-primary" style="font-size: 0.85rem; padding: 0.5rem 1.25rem; background: #008751; color: #fff; text-decoration: none; border-radius: 8px;">
                Book Facility Time &rarr;
            </a>
        </div>

    </div>
</div>

<?php
get_footer();
