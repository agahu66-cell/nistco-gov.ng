<?php
/**
 * Template Name: About Us & Governance Dossier
 * Description: Authoritative institutional profile featuring 3D Kinetic Quantum Core with 3 orbiting rings and blue/green/gold glowing highlights, AVMOG, presidential patronage, ministry/board oversight, DG welcome paired with Admin/Finance/Innovation principal directors, 6 research centres, organogram, complete 6-directorate roster, and version ledger. Zero hexagons.
 * File: page-about-us.php
 *
 * @package NistcoTheme
 * @version 11.0.0
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

<style>
/* ==========================================================================
   3D KINETIC QUANTUM CORE & GLOWING BLUE/GREEN/GOLD HIGHLIGHTS (.nistco-3d-hero-viewport)
   ========================================================================== */
.nistco-3d-hero-viewport {
    perspective: 1400px;
    width: 100%;
    height: 420px;
    display: flex;
    align-items: center;
    justify-content: center;
    position: relative;
}

.nistco-3d-perspective-stage {
    width: 300px;
    height: 300px;
    position: relative;
    transform-style: preserve-3d;
    animation: stageFloat 10s ease-in-out infinite alternate;
}

@keyframes stageFloat {
    0% {
        transform: rotateX(12deg) rotateY(-25deg) translateY(0px);
    }

    100% {
        transform: rotateX(25deg) rotateY(30deg) translateY(-20px);
    }
}

.quantum-3d-cube {
    width: 150px;
    height: 150px;
    position: absolute;
    top: 75px;
    left: 75px;
    transform-style: preserve-3d;
    animation: cubeRotate 20s linear infinite;
}

@keyframes cubeRotate {
    0% {
        transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
    }

    100% {
        transform: rotateX(360deg) rotateY(360deg) rotateZ(360deg);
    }
}

.cube-face {
    position: absolute;
    width: 150px;
    height: 150px;
    background: rgba(2, 26, 16, 0.9);
    border: 3px solid #34d399;
    box-shadow: inset 0 0 30px rgba(52, 211, 153, 0.6), 0 0 25px rgba(56, 189, 248, 0.5);
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2.25rem;
    color: #fde047;
    backdrop-filter: blur(8px);
    border-radius: 18px;
}

.cube-front {
    transform: rotateY(0deg) translateZ(75px);
    border-color: #38bdf8;
}

.cube-back {
    transform: rotateY(180deg) translateZ(75px);
    border-color: #34d399;
}

.cube-right {
    transform: rotateY(90deg) translateZ(75px);
    border-color: #fde047;
}

.cube-left {
    transform: rotateY(-90deg) translateZ(75px);
    border-color: #38bdf8;
}

.cube-top {
    transform: rotateX(90deg) translateZ(75px);
    border-color: #34d399;
}

.cube-bottom {
    transform: rotateX(-90deg) translateZ(75px);
    border-color: #fde047;
}

/* Orbiting Energy Rings (ring-1, ring-2, ring-3) with Blue, Green, Gold Highlights */
.quantum-orbit-ring {
    position: absolute;
    border-radius: 50%;
    border: 2px dashed rgba(253, 224, 71, 0.7);
    transform-style: preserve-3d;
}

.ring-1 {
    width: 240px;
    height: 240px;
    top: 30px;
    left: 30px;
    border-color: #34d399;
    /* Green Highlight */
    box-shadow: 0 0 15px rgba(52, 211, 153, 0.4);
    animation: ringSpin1 12s linear infinite;
}

.ring-2 {
    width: 280px;
    height: 280px;
    top: 10px;
    left: 10px;
    border-color: #38bdf8;
    /* Blue Highlight */
    box-shadow: 0 0 20px rgba(56, 189, 248, 0.5);
    animation: ringSpin2 16s linear infinite reverse;
}

.ring-3 {
    width: 330px;
    height: 330px;
    top: -15px;
    left: -15px;
    border-color: #fde047;
    /* Gold Highlight */
    box-shadow: 0 0 25px rgba(253, 224, 71, 0.5);
    animation: ringSpin3 22s linear infinite;
}

@keyframes ringSpin1 {
    0% {
        transform: rotateX(70deg) rotateY(0deg) rotateZ(0deg);
    }

    100% {
        transform: rotateX(70deg) rotateY(360deg) rotateZ(360deg);
    }
}

@keyframes ringSpin2 {
    0% {
        transform: rotateX(45deg) rotateY(45deg) rotateZ(0deg);
    }

    100% {
        transform: rotateX(45deg) rotateY(45deg) rotateZ(360deg);
    }
}

@keyframes ringSpin3 {
    0% {
        transform: rotateX(60deg) rotateY(-30deg) rotateZ(0deg);
    }

    100% {
        transform: rotateX(60deg) rotateY(-30deg) rotateZ(360deg);
    }
}

.orbit-node {
    width: 14px;
    height: 14px;
    background: #38bdf8;
    border-radius: 50%;
    position: absolute;
    top: -7px;
    left: calc(50% - 7px);
    box-shadow: 0 0 12px #38bdf8, 0 0 22px #fde047;
}

/* Smooth Entrance Animations */
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(25px);
    }

    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.nistco-animated-card {
    animation: fadeInUp 0.8s ease-out forwards;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.nistco-animated-card:hover {
    transform: translateY(-6px);
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08);
}

/* Live Telemetry Ticker Bar */
.nistco-live-ticker {
    background: #021a10;
    border-top: 1px solid rgba(52, 211, 153, 0.3);
    border-bottom: 1px solid rgba(52, 211, 153, 0.3);
    color: #ffffff;
    padding: 1rem 2rem;
    font-size: 0.9rem;
    font-weight: 700;
}

.ticker-container {
    max-width: 1440px;
    margin: 0 auto;
    display: flex;
    justify-content: space-around;
    align-items: center;
    flex-wrap: wrap;
    gap: 1.5rem;
}

.ticker-item {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.ticker-dot {
    width: 8px;
    height: 8px;
    background: #34d399;
    border-radius: 50%;
    box-shadow: 0 0 8px #34d399;
    animation: pulseDot 2s infinite;
}

@keyframes pulseDot {
    0% {
        opacity: 0.4;
    }

    50% {
        opacity: 1;
    }

    100% {
        opacity: 0.4;
    }
}
</style>

<main class="site-main nistco-main">

    <!-- =========================================================================
         1. HERO SECTION WITH 3D KINETIC QUANTUM CORE (.nistco-3d-hero-viewport)
         ========================================================================= -->
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
                        <span class="nistco-pill nistco-pill-gold">Federal Charter &bull; 3D Kinetic Quantum Core</span>
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
                            <span>DG / CEO Welcome</span>
                        </a>

                        <a href="#centres-section" class="nistco-btn nistco-btn-secondary">
                            <span>🔬</span>
                            <span>6 Research Centres</span>
                        </a>

                        <a href="#organogram" class="nistco-btn nistco-btn-gold">
                            <span>⚖️</span>
                            <span>Organogram &rarr;</span>
                        </a>
                    </div>

                    <div class="nistco-centre-launchpad">
                        <span class="launchpad-heading">Explore Directorate Portfolios:</span>
                        <div class="launchpad-pills-row">
                            <button type="button" class="launchpad-pill org-clickable"
                                data-org-target="simulation"><span class="pill-icon">💻</span><span
                                    class="pill-code">AMSARC</span></button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="biotech"><span
                                    class="pill-icon">🧬</span><span class="pill-code">BARC</span></button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="chem_phys"><span
                                    class="pill-icon">🧪</span><span class="pill-code">CARC</span></button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="chem_phys"><span
                                    class="pill-icon">🔬</span><span class="pill-code">PARC</span></button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="chem_phys"><span
                                    class="pill-icon">⚛️</span><span class="pill-code">NTC</span></button>
                            <button type="button" class="launchpad-pill org-clickable" data-org-target="works_ict"><span
                                    class="pill-icon">⚙️</span><span class="pill-code">ATP</span></button>
                        </div>
                    </div>

                </div>

                <!-- 3D Kinetic Quantum Core Viewport (.nistco-3d-hero-viewport) -->
                <div class="nistco-3d-viewport">
                    <div class="nistco-3d-hero-viewport">
                        <div class="nistco-3d-perspective-stage">
                            <!-- Orbiting Energy Rings (ring-1, ring-2, ring-3) -->
                            <div class="quantum-orbit-ring ring-1">
                                <div class="orbit-node"></div>
                            </div>
                            <div class="quantum-orbit-ring ring-2">
                                <div class="orbit-node"
                                    style="background:#34d399; box-shadow:0 0 12px #34d399, 0 0 20px #fde047;"></div>
                            </div>
                            <div class="quantum-orbit-ring ring-3">
                                <div class="orbit-node"
                                    style="background:#fde047; box-shadow:0 0 15px #fde047, 0 0 25px #38bdf8;"></div>
                            </div>

                            <!-- Rotating Multi-Face Quantum Cube with Blue, Green, Gold Highlights -->
                            <div class="quantum-3d-cube">
                                <div class="cube-face cube-front">⚛️</div>
                                <div class="cube-face cube-back">💻</div>
                                <div class="cube-face cube-right">🧬</div>
                                <div class="cube-face cube-left">🧪</div>
                                <div class="cube-face cube-top">🔬</div>
                                <div class="cube-face cube-bottom">⚙️</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Live Metrology Telemetry Ticker -->
        <div class="nistco-live-ticker">
            <div class="ticker-container">
                <div class="ticker-item">
                    <div class="ticker-dot"></div><span>AMSARC HPC: 256 TFLOPS Active</span>
                </div>
                <div class="ticker-item">
                    <div class="ticker-dot"></div><span>BARC Tissue Culture: 1.2M Seedlings</span>
                </div>
                <div class="ticker-item">
                    <div class="ticker-dot"></div><span>CARC NMR: High-Field Assay Ready</span>
                </div>
                <div class="ticker-item">
                    <div class="ticker-dot"></div><span>Solar Microgrid: 500 kVA Operational</span>
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
         2. PRESIDENTIAL SECTION: MAJESTIC PRESTIGE & SOVEREIGN PATRONAGE
         ========================================================================= -->
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">

            <div class="mc-presidential-banner reveal-on-scroll"
                style="background: linear-gradient(135deg, #021a10 0%, #042f1b 50%, #064024 100%); border: 3px solid #fde047; box-shadow: 0 30px 70px rgba(0,0,0,0.35); border-radius: 24px; padding: 4.5rem 3.5rem; position: relative; overflow: hidden;">
                <div class="mc-presidential-pattern"
                    style="position: absolute; inset: 0; background-image: radial-gradient(rgba(253, 224, 71, 0.15) 1.5px, transparent 1.5px); background-size: 28px 28px; opacity: 0.7; pointer-events: none;">
                </div>

                <div class="mc-presidential-grid"
                    style="display: grid; grid-template-columns: 320px 1fr; gap: 3.5rem; align-items: center; position: relative; z-index: 2;">

                    <div class="mc-presidential-portrait-wrap" style="text-align: center;">
                        <div class="mc-presidential-photo-frame"
                            style="position: relative; border-radius: 16px; overflow: hidden; border: 3px solid #fde047; box-shadow: 0 20px 40px rgba(0,0,0,0.5); background: #032015; aspect-ratio: 3/4;">
                            <?php 
                            if ( function_exists( 'nistco_get_leader_photo' ) ) {
                                echo nistco_get_leader_photo( 'nistco_president_photo', '/assets/images/leaders/president.jpg', 'His Excellency, The President' );
                            } else {
                                echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#fde047; font-size:4.5rem;"><span style="font-size:1.2rem; font-weight:800; margin-top:0.5rem; color:#fef08a; letter-spacing:1px;">GCFR</span>🇳🇬</div>';
                            }
                            ?>
                            <div class="mc-presidential-photo-badge"
                                style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); padding: 0.75rem; border-top: 2px solid #fde047; text-align: center;">
                                <span
                                    style="font-size: 0.8rem; font-weight: 800; color: #fde047; text-transform: uppercase; letter-spacing: 1px;">Grand
                                    Patron &bull; Commander-in-Chief</span>
                            </div>
                        </div>

                        <div class="mc-presidential-caption" style="margin-top: 1.5rem;">
                            <span
                                style="font-size: 0.75rem; font-weight: 800; color: #86efac; text-transform: uppercase; letter-spacing: 1.5px; display: block; margin-bottom: 0.25rem;">Apex
                                Sovereign Patronage</span>
                            <span style="font-size: 0.9rem; color: #cbd5e1; display: block;">His Excellency</span>
                            <strong
                                style="font-size: 1.5rem; font-weight: 800; color: #ffffff; display: block; margin: 0.25rem 0;"><?php echo esc_html( $president_name ); ?></strong>
                            <span style="font-size: 0.85rem; color: #fde047; font-weight: 700;">President of the Federal
                                Republic of Nigeria</span>
                        </div>
                    </div>

                    <div class="mc-presidential-content">
                        <div class="mc-presidential-pills"
                            style="display: flex; gap: 0.75rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
                            <span class="nistco-pill nistco-pill-gold"
                                style="background: #fde047; color: #451a03; font-weight: 800;">🇳🇬 Sovereign
                                Directives</span>
                            <span class="nistco-pill nistco-pill-green"
                                style="background: #008751; color: #ffffff; font-weight: 800;">Executive Order No.
                                5</span>
                        </div>

                        <h2 class="mc-presidential-heading"
                            style="font-size: clamp(1.85rem, 3.2vw, 2.75rem); font-weight: 800; color: #ffffff; line-height: 1.2; margin: 0 0 1.5rem 0;">
                            Anchoring Nigeria's Sovereign Science &amp; Technology Policy
                        </h2>

                        <blockquote class="mc-presidential-quote"
                            style="font-size: 1.15rem; line-height: 1.7; color: #fef08a; font-style: italic; border-left: 4px solid #fde047; padding-left: 1.5rem; margin: 0 0 2rem 0;">
                            "<?php echo esc_html( $president_quote ); ?>"
                        </blockquote>

                        <div class="mc-presidential-pillars-grid"
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 1.5rem;">
                            <div class="mc-presidential-pillar-item"
                                style="background: rgba(255,255,255,0.06); border: 1px solid rgba(253,224,71,0.3); border-radius: 12px; padding: 1.25rem; display: flex; gap: 1rem; align-items: flex-start;">
                                <span class="pillar-icon" style="font-size: 1.75rem;">🏭</span>
                                <div>
                                    <strong
                                        style="color: #ffffff; display: block; margin-bottom: 0.25rem; font-size: 1rem;">Industrial
                                        Domestication</strong>
                                    <p style="color: #cbd5e1; font-size: 0.88rem; margin: 0; line-height: 1.5;">
                                        Mandating federal procurement preference for indigenous engineering, chemical
                                        synthesis, and domestic agro-biotech technologies.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item"
                                style="background: rgba(255,255,255,0.06); border: 1px solid rgba(253,224,71,0.3); border-radius: 12px; padding: 1.25rem; display: flex; gap: 1rem; align-items: flex-start;">
                                <span class="pillar-icon" style="font-size: 1.75rem;">🔒</span>
                                <div>
                                    <strong
                                        style="color: #ffffff; display: block; margin-bottom: 0.25rem; font-size: 1rem;">Critical
                                        Security Tech</strong>
                                    <p style="color: #cbd5e1; font-size: 0.88rem; margin: 0; line-height: 1.5;">
                                        Developing indigenous quantum cryptographic algorithms to safeguard federal
                                        critical data, defense, and banking networks.</p>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. VISION, MISSION, AIM, OBJECTIVES, AND GOALS (AVMOG)
         ========================================================================= -->
    <section id="vmog-section" class="nistco-section nistco-bg-parchment nistco-border-top">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Strategic Blueprint</span>
                <h2 class="nistco-section-title">Vision, Mission, Aims, Objectives &amp; Goals</h2>
                <p class="nistco-section-lead">
                    The foundational compass governing NISTCO's research excellence, technological innovation, and
                    national service commitments.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem;">

                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; border-top: 5px solid #008751;">
                    <div
                        style="width: 56px; height: 56px; background: #d1fae5; color: #008751; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">
                        🔭</div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Our Vision
                    </h3>
                    <p style="font-size: 0.98rem; color: #64748b; line-height: 1.7; margin: 0;">
                        To be Africa's leading center of excellence in scientific research, advanced instrumentation,
                        and indigenous technology commercialization, driving absolute technological sovereignty for
                        Nigeria.
                    </p>
                </div>

                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; border-top: 5px solid #d97706;">
                    <div
                        style="width: 56px; height: 56px; background: #fef3c7; color: #d97706; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">
                        🎯</div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Our Mission
                    </h3>
                    <p style="font-size: 0.98rem; color: #64748b; line-height: 1.7; margin: 0;">
                        To execute frontier multidisciplinary R&amp;D, maintain shared national laboratory
                        infrastructure, and transform innovative patents into marketable commercial products that ensure
                        national self-reliance.
                    </p>
                </div>

                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; border-top: 5px solid #0284c7;">
                    <div
                        style="width: 56px; height: 56px; background: #e0f2fe; color: #0284c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">
                        ⚡</div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Our
                        Strategic Aim</h3>
                    <p style="font-size: 0.98rem; color: #64748b; line-height: 1.7; margin: 0;">
                        To bridge the historic gap between academic discovery and industrial manufacturing through
                        strategic public-private partnerships, rigorous scientific metrology, and open access
                        infrastructure.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         4. SUPERVISORY OVERSIGHT: MINISTRY & GOVERNING BOARD LEADERSHIP
         ========================================================================= -->
    <section class="nistco-section nistco-bg-white nistco-border-top nistco-border-bottom" id="dignitaries">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Supervisory Oversight</span>
                <h2 class="nistco-section-title">Ministry &amp; Governing Board Leadership</h2>
                <p class="nistco-section-lead">
                    Providing strategic policy direction, fiduciary governance, and inter-ministerial alignment under
                    the Federal Ministry of Innovation, Science and Technology.
                </p>
            </div>

            <div class="dignitaries-grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">

                <div class="dignitary-card nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden;">
                    <div class="dignitary-photo-wrap" style="position: relative; height: 280px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_minister_photo', '/assets/images/leaders/minister.jpg', 'Honourable Minister' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#86efac; font-size:4rem;"><span style="font-size:1.1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">FMIST</span>🏛️</div>';
                        }
                        ?>
                        <div class="dignitary-badge-stripe"
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #fde047; padding: 0.6rem; text-align: center; font-size: 0.75rem; font-weight: 800; text-transform: uppercase;">
                            Supervising Minister</div>
                    </div>
                    <div class="dignitary-info" style="padding: 2rem;">
                        <span class="dignitary-role"
                            style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; display: block; margin-bottom: 0.35rem;">Apex
                            Political &amp; Policy Authority</span>
                        <h3 class="dignitary-name"
                            style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">
                            <?php echo esc_html( $minister_name ); ?><br><span
                                style="font-size: 0.85rem; color: #64748b; font-weight: 600;">(SAN)</span></h3>
                        <p class="dignitary-org" style="font-size: 0.9rem; color: #64748b; margin: 0;">Federal Ministry
                            of Innovation, Science &amp; Technology (FMIST)</p>
                    </div>
                </div>

                <div class="dignitary-card nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden;">
                    <div class="dignitary-photo-wrap" style="position: relative; height: 280px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_perm_sec_photo', '/assets/images/leaders/perm-sec.jpg', 'Permanent Secretary' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#86efac; font-size:4rem;"><span style="font-size:1.1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">FMIST</span>📊</div>';
                        }
                        ?>
                        <div class="dignitary-badge-stripe"
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #fde047; padding: 0.6rem; text-align: center; font-size: 0.75rem; font-weight: 800; text-transform: uppercase;">
                            Accounting Officer</div>
                    </div>
                    <div class="dignitary-info" style="padding: 2rem;">
                        <span class="dignitary-role"
                            style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; display: block; margin-bottom: 0.35rem;">Administrative
                            &amp; Accounting Head</span>
                        <h3 class="dignitary-name"
                            style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">
                            <?php echo esc_html( $perm_sec_name ); ?><br><span
                                style="font-size: 0.85rem; color: #64748b; font-weight: 600;">(MFR, mni)</span></h3>
                        <p class="dignitary-org" style="font-size: 0.9rem; color: #64748b; margin: 0;">Federal Ministry
                            of Innovation, Science &amp; Technology (FMIST)</p>
                    </div>
                </div>

                <div class="dignitary-card nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden;">
                    <div class="dignitary-photo-wrap" style="position: relative; height: 280px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_board_chair_photo', '/assets/images/leaders/board-chair.jpg', 'Board Chairman' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#86efac; font-size:4rem;"><span style="font-size:1.1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">GOVERNING BOARD</span>⚖️</div>';
                        }
                        ?>
                        <div class="dignitary-badge-stripe"
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #fde047; padding: 0.6rem; text-align: center; font-size: 0.75rem; font-weight: 800; text-transform: uppercase;">
                            Institutional Governance</div>
                    </div>
                    <div class="dignitary-info" style="padding: 2rem;">
                        <span class="dignitary-role"
                            style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; display: block; margin-bottom: 0.35rem;">Chairman,
                            Governing Board</span>
                        <h3 class="dignitary-name"
                            style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">
                            <?php echo esc_html( $board_chair_name ); ?><br><span
                                style="font-size: 0.85rem; color: #64748b; font-weight: 600;">(PhD)</span></h3>
                        <p class="dignitary-org" style="font-size: 0.9rem; color: #64748b; margin: 0;">Nigeria
                            Innovation Science &amp; Technology Complex (NISTCO)</p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         5. DG WELCOME & PRINCIPAL DIRECTORS (ADMIN, FINANCE, INNOVATION) WITH IMAGES
         ========================================================================= -->
    <section id="dg-welcome" class="nistco-section nistco-bg-white">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center"
                style="margin-left: auto; margin-right: auto; margin-bottom: 3.5rem;">
                <span class="nistco-section-kicker">Executive Management Cadre</span>
                <h2 class="nistco-section-title">Director-General &amp; Principal Directorate Officers</h2>
                <p class="nistco-section-lead">
                    Superintending executive strategy, administration, financial compliance, and technology
                    commercialization.
                </p>
            </div>

            <!-- DG Spotlight Grid -->
            <div class="nistco-exec-grid"
                style="display: grid; grid-template-columns: 360px 1fr; gap: 4rem; align-items: center; margin-bottom: 4rem;">
                <div class="nistco-exec-portrait-card reveal-on-scroll"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                    <div class="nistco-exec-photo-wrap" style="position: relative; height: 400px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dg_photo', '/assets/images/leaders/dg-ceo.jpg', 'Director-General / CEO' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#fde047; font-size:4.5rem;"><span style="font-size:1.1rem; font-weight:800; margin-top:0.5rem; color:#fef08a; letter-spacing:1px;">DG / CEO</span>👨‍🔬</div>';
                        }
                        ?>
                        <div class="nistco-exec-photo-badge"
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #fde047; padding: 0.6rem; text-align: center; font-size: 0.8rem; font-weight: 800; text-transform: uppercase;">
                            Chief Executive Officer</div>
                    </div>
                    <div class="nistco-exec-caption" style="padding: 1.75rem; text-align: center;">
                        <strong class="nistco-exec-name"
                            style="font-size: 1.25rem; font-weight: 800; color: #0f172a; display: block; margin-bottom: 0.25rem;"><?php echo esc_html( $dg_name ); ?><br><span
                                style="font-size: 0.85rem; color: #008751; font-weight: 700;">|PhD, mni|</span></strong>
                        <span class="nistco-exec-designation"
                            style="font-size: 0.85rem; color: #64748b; display: block;">Director-General / Chief
                            Executive Officer</span>
                    </div>
                </div>

                <div class="nistco-exec-statement reveal-on-scroll delay-100">
                    <span class="nistco-section-kicker">Executive Leadership Statement</span>
                    <h2 class="nistco-exec-headline"
                        style="font-size: 2rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 1.25rem 0;">
                        <?php echo esc_html( $dg_headline ); ?></h2>

                    <blockquote class="nistco-exec-quote"
                        style="font-size: 1.1rem; line-height: 1.7; color: #008751; font-style: italic; border-left: 4px solid #008751; padding-left: 1.25rem; margin: 0 0 1.5rem 0;">
                        "<?php echo esc_html( $dg_quote ); ?>"
                    </blockquote>

                    <div
                        style="font-size: 0.98rem; line-height: 1.8; color: var(--mc-text-main, #334155); margin-bottom: 2rem;">
                        <p style="margin-bottom: 1rem;">
                            Welcome to the official portal of the <strong>Nigeria Innovation Science and Technology
                                Complex (NISTCO)</strong>. Our research sanctuary at Sheda, Abuja, represents Nigeria's
                            apex investment in frontier science, shared national instrumentation cores, and indigenous
                            technology scaling.
                        </p>
                        <p style="margin: 0;">
                            Through our 6 multidisciplinary directorates, we open our doors to university scholars,
                            postgraduate fellows, and industrial partners to access high-field NMR spectrometry, HPC
                            supercomputing clusters, and demonstration pilot plants.
                        </p>
                    </div>

                    <div class="nistco-exec-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="#directorates-roster" class="nistco-btn nistco-btn-primary"
                            style="background: #008751; color: #fff;">
                            <span>🏛️</span>
                            <span>Directorate Leadership Roster</span>
                        </a>
                        <a href="#organogram" class="nistco-btn nistco-btn-outline"
                            style="border: 2px solid #008751; color: #008751;">
                            <span>📊</span>
                            <span>View Governance Organogram</span>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Principal Directorate Officers (Admin, Finance, Innovation) with Image Placeholders -->
            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; margin-top: 3rem; border-top: 2px solid #e2e8f0; padding-top: 3rem;">

                <!-- Admin Director -->
                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; border-top: 4px solid #008751;">
                    <div style="position: relative; height: 260px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_admin_photo', '/assets/images/leaders/dir-admin.jpg', 'Director, Administration' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#86efac; font-size:3.5rem;"><span style="font-size:0.9rem; font-weight:800; color:#fde047; margin-top:0.4rem;">ADMINISTRATION</span>🏛️</div>';
                        }
                        ?>
                        <div
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span
                                style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase;">Administrative
                                Cadre</span>
                        </div>
                    </div>
                    <div style="padding: 2rem;">
                        <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Director
                            of Administration &amp; SERVICOM</h3>
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                            Overseeing civil service compliance, general registry, human capital development, and public
                            accountability grievance redress.
                        </p>
                    </div>
                </div>

                <!-- Finance Director -->
                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; border-top: 4px solid #d97706;">
                    <div style="position: relative; height: 260px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_finance_photo', '/assets/images/leaders/dir-finance.jpg', 'Director, Finance' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#fde047; font-size:3.5rem;"><span style="font-size:0.9rem; font-weight:800; color:#fde047; margin-top:0.4rem;">FINANCE & ACCOUNTS</span>📊</div>';
                        }
                        ?>
                        <div
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase;">Financial
                                Cadre</span>
                        </div>
                    </div>
                    <div style="padding: 2rem;">
                        <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Director
                            of Finance &amp; Accounts</h3>
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                            Managing institutional budgeting, treasury compliance, research grant accounting, and
                            commercial patent royalty disbursements.
                        </p>
                    </div>
                </div>

                <!-- Innovation & Commercialisation Director -->
                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; border-top: 4px solid #0284c7;">
                    <div style="position: relative; height: 260px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_innovation_photo', '/assets/images/leaders/dir-innovation.jpg', 'Director, Innovation' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#38bdf8; font-size:3.5rem;"><span style="font-size:0.9rem; font-weight:800; color:#fde047; margin-top:0.4rem;">INNOVATION & COMMERCIALISATION</span>💡</div>';
                        }
                        ?>
                        <div
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span
                                style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase;">Commercialization
                                Cadre</span>
                        </div>
                    </div>
                    <div style="padding: 2rem;">
                        <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Director
                            of Innovation &amp; Commercialisation</h3>
                        <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">
                            Directing the NOTAP patent transfer office, industrial equity partnerships, and pilot plant
                            manufacturing scale-ups.
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         6. THE SIX RESEARCH CENTRES (AMSARC, BARC, CARC, PARC, NTC, ATP) SHOWCASE
         ========================================================================= -->
    <section id="centres-section" class="nistco-section nistco-bg-parchment nistco-border-top">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center"
                style="margin-left: auto; margin-right: auto; margin-bottom: 3.5rem;">
                <span class="nistco-section-kicker">Specialized R&amp;D Divisions</span>
                <h2 class="nistco-section-title">The Six Research Centres of Excellence</h2>
                <p class="nistco-section-lead">
                    Frontier scientific research powered by specialized instrumentation, automated pilot plants, and
                    expert metrologists.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem;">

                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; border-top: 5px solid #0284c7;">
                    <div
                        style="width: 56px; height: 56px; background: #e0f2fe; color: #0284c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">
                        💻</div>
                    <span
                        style="font-size: 0.75rem; font-weight: 800; color: #0284c7; text-transform: uppercase; letter-spacing: 1px;">AMSARC
                        Division</span>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">
                        Applied Mathematics &amp; Simulation</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                        High-Performance Computing (HPC) clustering, parallel fluid dynamics simulations, and smart grid
                        predictive artificial intelligence.
                    </p>
                    <a href="<?php echo esc_url( home_url( '/instrumentation/' ) ); ?>"
                        style="font-size: 0.85rem; font-weight: 700; color: #0284c7; text-decoration: none;">Book HPC
                        Node Time &rarr;</a>
                </div>

                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; border-top: 5px solid #008751;">
                    <div
                        style="width: 56px; height: 56px; background: #d1fae5; color: #008751; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">
                        🧬</div>
                    <span
                        style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; letter-spacing: 1px;">BARC
                        Division</span>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">
                        Biotechnology Advanced Research</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                        Plant tissue culture, drought-resistant crop genomics, disease-free micropropagation, and
                        industrial fermentation bioreactors.
                    </p>
                    <a href="<?php echo esc_url( home_url( '/instrumentation/' ) ); ?>"
                        style="font-size: 0.85rem; font-weight: 700; color: #008751; text-decoration: none;">Request
                        Bio-Assay &rarr;</a>
                </div>

                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; border-top: 5px solid #059669;">
                    <div
                        style="width: 56px; height: 56px; background: #d1fae5; color: #059669; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">
                        🧪</div>
                    <span
                        style="font-size: 0.75rem; font-weight: 800; color: #059669; text-transform: uppercase; letter-spacing: 1px;">CARC
                        Division</span>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">
                        Chemistry Advanced Research</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                        High-field multi-nuclear NMR spectrometry, GC-MS molecular analysis, green chemical synthesis,
                        and agro-waste polymer resins.
                    </p>
                    <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>"
                        style="font-size: 0.85rem; font-weight: 700; color: #059669; text-decoration: none;">Explore
                        Patents &rarr;</a>
                </div>

                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; border-top: 5px solid #d97706;">
                    <div
                        style="width: 56px; height: 56px; background: #fef3c7; color: #d97706; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">
                        🔬</div>
                    <span
                        style="font-size: 0.75rem; font-weight: 800; color: #d97706; text-transform: uppercase; letter-spacing: 1px;">PARC
                        Division</span>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">
                        Physics Advanced Research</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                        Solid-state physics, solar photovoltaic efficiency testing simulators, XRD crystallography, and
                        thin-film semiconductor characterization.
                    </p>
                    <a href="<?php echo esc_url( home_url( '/instrumentation/' ) ); ?>"
                        style="font-size: 0.85rem; font-weight: 700; color: #d97706; text-decoration: none;">Book SEM
                        Scan &rarr;</a>
                </div>

                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; border-top: 5px solid #ca8a04;">
                    <div
                        style="width: 56px; height: 56px; background: #fef9c3; color: #ca8a04; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">
                        ⚛️</div>
                    <span
                        style="font-size: 0.75rem; font-weight: 800; color: #ca8a04; text-transform: uppercase; letter-spacing: 1px;">NTC
                        Division</span>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">
                        Nuclear Technology Centre</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                        Industrial gamma irradiation sterilization cells, Secondary Standard Dosimetry Laboratory
                        (SSDL), and HPGe environmental radionuclide assay.
                    </p>
                    <a href="<?php echo esc_url( home_url( '/instrumentation/' ) ); ?>"
                        style="font-size: 0.85rem; font-weight: 700; color: #ca8a04; text-decoration: none;">Calibration
                        Services &rarr;</a>
                </div>

                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; border-top: 5px solid #06b6d4;">
                    <div
                        style="width: 56px; height: 56px; background: #cffafe; color: #06b6d4; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">
                        ⚙️</div>
                    <span
                        style="font-size: 0.75rem; font-weight: 800; color: #06b6d4; text-transform: uppercase; letter-spacing: 1px;">ATP
                        Division</span>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">
                        Advanced Tooling &amp; Prototyping</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                        5-axis CNC high-precision machining, selective laser melting (SLM) metal 3D printing, and
                        industrial tooling pilot production.
                    </p>
                    <a href="<?php echo esc_url( home_url( '/instrumentation/' ) ); ?>"
                        style="font-size: 0.85rem; font-weight: 700; color: #06b6d4; text-decoration: none;">Book
                        Machining Time &rarr;</a>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         7. GOVERNANCE ORGANOGRAM & TREE
         ========================================================================= -->
    <section id="organogram" class="nistco-section nistco-bg-white nistco-border-top">
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

    <!-- =========================================================================
         8. COMPLETE 6-DIRECTORATE LEADERSHIP ROSTER
         ========================================================================= -->
    <section id="directorates-roster" class="nistco-section nistco-bg-parchment nistco-border-top">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Executive Cadre</span>
                <h2 class="nistco-section-title">Complete 6-Directorate Leadership Roster</h2>
                <p class="nistco-section-lead">
                    Superintending NISTCO's research centres, specialized pilot plants, and engineering infrastructure.
                </p>
            </div>

            <div class="admin-roster-grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem;">

                <!-- 1. BARC Director -->
                <article class="admin-card nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; border-top: 4px solid #008751;">
                    <div class="admin-photo-wrapper" style="position: relative; height: 260px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_barc_photo', '/assets/images/leaders/dir-biotech.jpg', 'Director, BARC' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#86efac; font-size:4rem;"><span style="font-size:1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">BARC</span>🧬</div>';
                        }
                        ?>
                        <div class="admin-photo-overlay"
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span class="admin-cadre-tag"
                                style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase;">BARC
                                Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details" style="padding: 2rem;">
                        <span class="admin-rank-badge"
                            style="background: #d1fae5; color: #065f46; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px; display: inline-block; margin-bottom: 0.75rem;">Directorate
                            Head</span>
                        <h3 class="admin-name"
                            style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">
                            Biotechnology Advanced Research Centre</h3>
                        <p class="admin-division"
                            style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                            Genomics, Plant Micropropagation, Tissue Culture Cleanrooms &amp; Bio-Fertilizer Pilot
                            Plant.</p>
                        <div class="admin-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="biotech"
                                style="background: #008751; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer; font-size: 0.85rem;">View
                                Dossier &rarr;</button>
                            <a href="mailto:biotech@nistco.gov.ng" class="admin-contact-btn"
                                style="color: #008751; font-weight: 700; text-decoration: none; display: flex; align-items: center; font-size: 0.85rem;">✉️
                                Contact Desk</a>
                        </div>
                    </div>
                </article>

                <!-- 2. AMSARC Director -->
                <article class="admin-card nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; border-top: 4px solid #0284c7;">
                    <div class="admin-photo-wrapper" style="position: relative; height: 260px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_amsarc_photo', '/assets/images/leaders/dir-simulation.jpg', 'Director, AMSARC' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#38bdf8; font-size:4rem;"><span style="font-size:1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">AMSARC</span>💻</div>';
                        }
                        ?>
                        <div class="admin-photo-overlay"
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span class="admin-cadre-tag"
                                style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #38bdf8;">AMSARC
                                Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details" style="padding: 2rem;">
                        <span class="admin-rank-badge"
                            style="background: #e0f2fe; color: #0284c7; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px; display: inline-block; margin-bottom: 0.75rem;">Directorate
                            Head</span>
                        <h3 class="admin-name"
                            style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">
                            Simulation &amp; Supercomputing Sciences</h3>
                        <p class="admin-division"
                            style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                            1,024-Core HPC Cluster, Computational Fluid Dynamics (CFD), Cryptographic Ciphers &amp; Math
                            Modeling.</p>
                        <div class="admin-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="simulation"
                                style="background: #0284c7; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer; font-size: 0.85rem;">View
                                Dossier &rarr;</button>
                            <a href="mailto:simulation@nistco.gov.ng" class="admin-contact-btn"
                                style="color: #0284c7; font-weight: 700; text-decoration: none; display: flex; align-items: center; font-size: 0.85rem;">✉️
                                Contact Desk</a>
                        </div>
                    </div>
                </article>

                <!-- 3. CARC Director -->
                <article class="admin-card nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; border-top: 4px solid #059669;">
                    <div class="admin-photo-wrapper" style="position: relative; height: 260px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_carc_photo', '/assets/images/leaders/dir-chemistry.jpg', 'Director, CARC' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#34d399; font-size:4rem;"><span style="font-size:1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">CARC</span>🧪</div>';
                        }
                        ?>
                        <div class="admin-photo-overlay"
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span class="admin-cadre-tag"
                                style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #34d399;">CARC
                                Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details" style="padding: 2rem;">
                        <span class="admin-rank-badge"
                            style="background: #d1fae5; color: #059669; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px; display: inline-block; margin-bottom: 0.75rem;">Directorate
                            Head</span>
                        <h3 class="admin-name"
                            style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">
                            Chemistry Advanced Research Centre</h3>
                        <p class="admin-division"
                            style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                            Multi-Nuclear High-Field NMR Facility, 500L Organic Synthesis Batch Plant &amp; CNSL Polymer
                            Resins.</p>
                        <div class="admin-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="chem_phys"
                                style="background: #059669; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer; font-size: 0.85rem;">View
                                Dossier &rarr;</button>
                            <a href="mailto:chemistry@nistco.gov.ng" class="admin-contact-btn"
                                style="color: #059669; font-weight: 700; text-decoration: none; display: flex; align-items: center; font-size: 0.85rem;">✉️
                                Contact Desk</a>
                        </div>
                    </div>
                </article>

                <!-- 4. PARC Director -->
                <article class="admin-card nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; border-top: 4px solid #d97706;">
                    <div class="admin-photo-wrapper" style="position: relative; height: 260px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_parc_photo', '/assets/images/leaders/dir-physics.jpg', 'Director, PARC' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#fbbf24; font-size:4rem;"><span style="font-size:1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">PARC</span>🔬</div>';
                        }
                        ?>
                        <div class="admin-photo-overlay"
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span class="admin-cadre-tag"
                                style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #fbbf24;">PARC
                                Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details" style="padding: 2rem;">
                        <span class="admin-rank-badge"
                            style="background: #fef3c7; color: #d97706; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px; display: inline-block; margin-bottom: 0.75rem;">Directorate
                            Head</span>
                        <h3 class="admin-name"
                            style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Physics
                            Advanced Research Centre</h3>
                        <p class="admin-division"
                            style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                            Materials Physics, Solar Photovoltaic Testing Simulators, XRD Crystallography &amp;
                            Semiconductors.</p>
                        <div class="admin-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="chem_phys"
                                style="background: #d97706; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer; font-size: 0.85rem;">View
                                Dossier &rarr;</button>
                            <a href="mailto:physics@nistco.gov.ng" class="admin-contact-btn"
                                style="color: #d97706; font-weight: 700; text-decoration: none; display: flex; align-items: center; font-size: 0.85rem;">✉️
                                Contact Desk</a>
                        </div>
                    </div>
                </article>

                <!-- 5. NTC Director -->
                <article class="admin-card nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; border-top: 4px solid #ca8a04;">
                    <div class="admin-photo-wrapper" style="position: relative; height: 260px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_ntc_photo', '/assets/images/leaders/dir-nuclear.jpg', 'Director, NTC' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#fde047; font-size:4rem;"><span style="font-size:1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">NTC</span>⚛️</div>';
                        }
                        ?>
                        <div class="admin-photo-overlay"
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span class="admin-cadre-tag"
                                style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #fde047;">NTC
                                Directorate</span>
                        </div>
                    </div>
                    <div class="admin-details" style="padding: 2rem;">
                        <span class="admin-rank-badge"
                            style="background: #fef9c3; color: #ca8a04; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px; display: inline-block; margin-bottom: 0.75rem;">Directorate
                            Head</span>
                        <h3 class="admin-name"
                            style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Nuclear
                            Technology Centre</h3>
                        <p class="admin-division"
                            style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                            Industrial Gamma Irradiation Cells, NDT Non-Destructive Testing, Dosimetry &amp; Crop
                            Preservation.</p>
                        <div class="admin-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="chem_phys"
                                style="background: #ca8a04; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer; font-size: 0.85rem;">View
                                Dossier &rarr;</button>
                            <a href="mailto:nuclear@nistco.gov.ng" class="admin-contact-btn"
                                style="color: #ca8a04; font-weight: 700; text-decoration: none; display: flex; align-items: center; font-size: 0.85rem;">✉️
                                Contact Desk</a>
                        </div>
                    </div>
                </article>

                <!-- 6. ATP / Engineering Director -->
                <article class="admin-card nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; border-top: 4px solid #06b6d4;">
                    <div class="admin-photo-wrapper" style="position: relative; height: 260px; background: #032015;">
                        <?php 
                        if ( function_exists( 'nistco_get_leader_photo' ) ) {
                            echo nistco_get_leader_photo( 'nistco_dir_works_photo', '/assets/images/leaders/dir-works.jpg', 'Director, Works & Services' );
                        } else {
                            echo '<div style="width:100%; height:100%; display:flex; flex-direction:column; align-items:center; justify-content:center; background:#042416; color:#38bdf8; font-size:4rem;"><span style="font-size:1rem; font-weight:800; color:#fde047; margin-top:0.5rem;">ATP</span>⚙️</div>';
                        }
                        ?>
                        <div class="admin-photo-overlay"
                            style="position: absolute; bottom: 0; left: 0; right: 0; background: rgba(4,36,22,0.95); color: #ffffff; padding: 0.6rem; text-align: center;">
                            <span class="admin-cadre-tag"
                                style="font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #38bdf8;">Engineering
                                Division</span>
                        </div>
                    </div>
                    <div class="admin-details" style="padding: 2rem;">
                        <span class="admin-rank-badge"
                            style="background: #cffafe; color: #155e75; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px; display: inline-block; margin-bottom: 0.75rem;">Directorate
                            Head</span>
                        <h3 class="admin-name"
                            style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Advanced
                            Tooling &amp; Prototyping (ATP)</h3>
                        <p class="admin-division"
                            style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">5-Axis
                            CNC Precision Tooling Workshop, SLM 3D Metal Printing &amp; 500 kVA Solar Microgrid.</p>
                        <div class="admin-actions" style="display: flex; gap: 1rem; flex-wrap: wrap;">
                            <button type="button" class="admin-mandate-btn org-clickable" data-org-target="works_ict"
                                style="background: #06b6d4; color: #fff; padding: 0.6rem 1.2rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer; font-size: 0.85rem;">View
                                Dossier &rarr;</button>
                            <a href="mailto:atp@nistco.gov.ng" class="admin-contact-btn"
                                style="color: #06b6d4; font-weight: 700; text-decoration: none; display: flex; align-items: center; font-size: 0.85rem;">✉️
                                Contact Desk</a>
                        </div>
                    </div>
                </article>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         9. VERSION HISTORY LEDGER
         ========================================================================= -->
    <section id="version-history" class="nistco-section nistco-bg-white nistco-border-top">
        <div class="nistco-container">

            <div class="nistco-section-header mc-text-center" style="margin-left: auto; margin-right: auto;">
                <span class="nistco-section-kicker">Evolution Ledger</span>
                <h2 class="nistco-section-title">Institutional Version History &amp; Changelog</h2>
                <p class="nistco-section-lead">
                    A unique chronological ledger tracing NISTCO's structural milestones, technological upgrades, and
                    digital transformations.
                </p>
            </div>

            <div style="max-width: 900px; margin: 0 auto; display: flex; flex-direction: column; gap: 1.5rem;">

                <div class="nistco-animated-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2rem; border-left: 5px solid #008751;">
                    <div
                        style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem; flex-wrap: wrap; gap: 0.5rem;">
                        <span
                            style="background: #d1fae5; color: #065f46; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.75rem; border-radius: 50px;">v10.0.0
                            (Current Release)</span>
                        <span style="font-size: 0.85rem; color: #64748b; font-weight: 700;">October 2026</span>
                    </div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Original
                        Quantum Orbit Stage Restored, Zero Hexagons &amp; Enhanced Smooth Animations</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Fully restored the original 3D quantum orbit gear animation in the hero, removed all hexagonal
                        card shapes across the entire page, integrated Principal Directors (Admin, Finance, Innovation)
                        with image placeholders next to the DG welcome section, and preserved all 9 comprehensive
                        sections.
                    </p>
                </div>

            </div>

        </div>
    </section>

</main>

<!-- Interactive Dossier Modal -->
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
                style="font-size: 0.82rem; color: #008751; font-weight: 700; border-top: 1px solid #e2e8f0; padding-top: 0.85rem;">
            </div>
        </div>

        <div class="org-modal-footer">
            <span style="font-size: 0.78rem; color: #64748b;">Open shared research infrastructure under Presidential
                Executive Order No. 5.</span>
            <a id="org-modal-link" href="<?php echo esc_url( home_url( '/instrumentation/' ) ); ?>"
                class="nistco-btn nistco-btn-primary"
                style="font-size: 0.85rem; padding: 0.5rem 1.25rem; background: #008751; color: #fff; text-decoration: none; border-radius: 8px;">
                Book Facility Time &rarr;
            </a>
        </div>

    </div>
</div>

<?php
get_footer();