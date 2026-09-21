<?php
/**
 * Template Name: Statutory Mandate & Institutional Charter
 * Description: Authoritative legal and institutional mandate page detailing the statutory enabling act, core research pillars, Presidential Executive Order No. 5 alignment, national pilot plant charter, and governance oversight.
 * File: page-mandate.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: 3D STATUTORY CHARTER & LEGAL FOUNDATION MATRIX
         ========================================================================= -->
    <section class="mc-hero-section mc-about-hero">

        <!-- Ambient Volumetric Lighting Glows -->
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container">
            <div class="mc-hero-grid">

                <!-- Left Column: Legal Charter Header & Fast Navigation -->
                <div class="mc-hero-content">

                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">Statutory Mandate</span>
                    </nav>

                    <div class="mc-hero-badges">
                        <span class="mc-pill mc-pill-gold">⚖️ Statutory Enabling Act</span>
                        <span class="mc-pill mc-pill-green">Executive Order No. 5 Aligned</span>
                    </div>

                    <h1 class="mc-hero-title">
                        The Statutory Mandate &amp; Institutional Charter of NISTCO
                    </h1>

                    <p class="mc-hero-subtitle">
                        Established as Nigeria's apex multidisciplinary centre of scientific excellence to acquire
                        frontier research capabilities, maintain national shared analytical laboratories, operate
                        demonstration pilot plants, and drive indigenous industrial transformation.
                    </p>

                    <!-- Mandate Action Toolbar -->
                    <div class="mc-hero-actions" style="margin-bottom: 2rem;">
                        <a href="#enabling-act" class="mc-btn mc-btn-primary">
                            <span>📜</span>
                            <span>The Enabling Act</span>
                        </a>

                        <a href="#core-pillars" class="mc-btn mc-btn-secondary">
                            <span>🏛️</span>
                            <span>6 Statutory Pillars</span>
                        </a>

                        <a href="#executive-order" class="mc-btn mc-btn-gold">
                            <span>🇳🇬</span>
                            <span>Executive Order 5 &rarr;</span>
                        </a>
                    </div>

                    <!-- Jump Navigation Pills -->
                    <div class="about-nav-pill-group">
                        <span class="jump-label">Jump To:</span>
                        <a href="#enabling-act" class="about-nav-pill">📜 Enabling Decree</a>
                        <a href="#core-pillars" class="about-nav-pill">🏛️ Mandate Pillars</a>
                        <a href="#pilot-charter" class="about-nav-pill">🏭 Pilot Plant Charter</a>
                        <a href="#executive-order" class="about-nav-pill">🇳🇬 National STI Policy</a>
                        <a href="#documents" class="about-nav-pill">📁 Official Gazettes</a>
                    </div>

                </div>

                <!-- Right Column: 3D Statutory Legal Shield & Scales Matrix -->
                <div class="about-3d-viewport">
                    <div class="about-3d-stage">

                        <!-- Outer 3D Hexagonal Governance Shield -->
                        <div class="about-hex-shield-wrap">
                            <svg class="about-hex-svg" viewBox="0 0 300 300" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <defs>
                                    <linearGradient id="mandateGoldGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#fef08a" />
                                        <stop offset="50%" stop-color="#c59b27" />
                                        <stop offset="100%" stop-color="#713f12" />
                                    </linearGradient>
                                    <linearGradient id="mandateGreenGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#86efac" />
                                        <stop offset="60%" stop-color="#0d5c3a" />
                                        <stop offset="100%" stop-color="#042416" />
                                    </linearGradient>
                                </defs>
                                <polygon points="150,15 265,80 265,220 150,285 35,220 35,80"
                                    stroke="url(#mandateGreenGrad)" stroke-width="2.5" fill="rgba(4,36,22,0.45)" />
                                <polygon points="150,40 240,90 240,210 150,260 60,210 60,90"
                                    stroke="url(#mandateGoldGrad)" stroke-width="1.8" stroke-dasharray="8 6"
                                    opacity="0.85" />
                                <circle cx="150" cy="150" r="110" stroke="rgba(255,255,255,0.12)" stroke-width="1.5" />
                            </svg>
                        </div>

                        <!-- Gyroscopic Institutional Rings -->
                        <div class="about-gyro-rings">
                            <div class="gyro-ring gyro-ring-1" style="border-color: rgba(197, 155, 39, 0.55);"></div>
                            <div class="gyro-ring gyro-ring-2" style="border-color: rgba(134, 239, 172, 0.45);"></div>
                        </div>

                        <!-- Central Seal Core (Statutory Scales of Justice / Complex Seal) -->
                        <div class="about-beacon-core"
                            style="border-color: #fde047; box-shadow: 0 0 30px rgba(197, 155, 39, 0.8), 0 0 60px rgba(13, 92, 58, 0.8);">
                            <div class="beacon-glow"></div>
                            <div class="beacon-center">⚖️</div>
                            <span class="beacon-label">CHARTER</span>
                        </div>

                        <!-- Orbiting Statutory Authority Satellites -->
                        <div class="about-satellite-orbit orbit-barc">
                            <div class="satellite-card sat-barc" title="Frontier Scientific Research">
                                <span class="sat-icon">🔬</span>
                                <span class="sat-text">Research</span>
                            </div>
                        </div>

                        <div class="about-satellite-orbit orbit-amsarc">
                            <div class="satellite-card sat-amsarc" title="National Pilot Demonstration Plants">
                                <span class="sat-icon">🏭</span>
                                <span class="sat-text">Pilot Scale</span>
                            </div>
                        </div>

                        <div class="about-satellite-orbit orbit-carc">
                            <div class="satellite-card sat-carc" title="Shared Laboratory Infrastructure">
                                <span class="sat-icon">🧪</span>
                                <span class="sat-text">Shared Hub</span>
                            </div>
                        </div>

                        <div class="about-satellite-orbit orbit-parc">
                            <div class="satellite-card sat-parc" title="Technology Transfer & NOTAP Patents">
                                <span class="sat-icon">📜</span>
                                <span class="sat-text">Commercial</span>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Docked Institutional Factlet Ribbon -->
        <div class="about-factlet-bar">
            <div class="container about-factlet-container">
                <div class="factlet-item">
                    <span class="factlet-kicker">Legislative Basis</span>
                    <strong class="factlet-value">Federal Enabling Decree</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Statutory Mandate Scope</span>
                    <strong class="factlet-value">Basic, Applied &amp; Pilot Trials</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">National Coverage</span>
                    <strong class="factlet-value">All 36 States &amp; FCT Hub</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Supervising Ministry</span>
                    <strong class="factlet-value">FMIST (Federal Ministry)</strong>
                </div>
            </div>
        </div>

    </section>

    <!-- =========================================================================
         2. LEGAL FOUNDATION & THE STATUTORY ENABLING ACT
         ========================================================================= -->
    <section id="enabling-act" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Legislative Foundation</span>
                <h2 class="mc-section-title">The Statutory Enabling Act</h2>
                <p class="mc-section-lead">
                    Promulgated to provide Nigeria with a dedicated multidisciplinary research sanctuary insulated from
                    industrial disruption, equipped with high-field instrumentation, and tasked with national technology
                    sovereignty.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 3rem; align-items: center;">

                <div class="reveal-on-scroll">
                    <h3 style="font-size: 1.4rem; color: var(--mc-dark); font-weight: 800; margin: 0 0 1rem 0;">
                        Statutory Provisions &amp; Legislative Intent
                    </h3>
                    <div
                        style="font-size: 1rem; line-height: 1.8; color: var(--mc-text-main); display: flex; flex-direction: column; gap: 1.15rem;">
                        <p>
                            Under its enabling legislation, the <strong>Nigeria Innovation, Science &amp; Technology
                                Complex (NISTCO)</strong> is vested with statutory authority to operate as an autonomous
                            research sanctuary. The legislative intent designates the Complex not as an ordinary
                            academic department, but as a <strong>national technological powerhouse</strong>.
                        </p>
                        <p>
                            The statute specifically mandates the Complex to acquire comprehensive research capability
                            in physics, chemistry, biotechnology, nuclear technology, precision engineering, and
                            high-performance simulation sciences to domesticate foreign industrial processes and foster
                            indigenous manufacturing.
                        </p>
                        <p>
                            Furthermore, the charter directs NISTCO to maintain an <strong>Open Analytical
                                Sanctuary</strong>, granting visiting doctoral fellows, university professors, and
                            industrial R&amp;D consortia direct access to its high-value shared facilities.
                        </p>
                    </div>
                </div>

                <!-- Legal Highlights Callout Card -->
                <div class="inno-trl-phase-card reveal-on-scroll delay-100"
                    style="border-top-color: var(--mc-gold); margin-top: 0;">
                    <div class="inno-trl-badge phase-pilot">Statutory Instrument</div>
                    <h4 style="font-size: 1.18rem; font-weight: 800; color: var(--mc-dark); margin: 0 0 0.75rem 0;">Key
                        Legal Powers &amp; Functions</h4>
                    <ul class="inno-phase-deliverables" style="border-top: none; padding-top: 0;">
                        <li>Autonomous multidisciplinary research operations.</li>
                        <li>Operation of commercial pilot demonstration plants.</li>
                        <li>Custodianship of national scientific instrumentation cores.</li>
                        <li>Sovereign IP patenting and commercial licensing (NOTAP).</li>
                        <li>Administration of resident research fellow programmes.</li>
                        <li>Direct scientific advisory to the Federal Executive Council.</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. THE SIX CORE PILLARS OF THE STATUTORY MANDATE
         ========================================================================= -->
    <section id="core-pillars" class="mc-section mc-bg-parchment mc-border-top mc-border-bottom">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Statutory Scope</span>
                <h2 class="mc-section-title">The Six Pillars of the NISTCO Mandate</h2>
                <p class="mc-section-lead">
                    Translating statutory legal provisions into concrete, high-impact scientific operations across the
                    Nigerian economy.
                </p>
            </div>

            <div class="mc-centres-grid">

                <!-- Pillar 1: Basic & Applied Research -->
                <div class="mc-centre-card reveal-on-scroll">
                    <div class="mc-centre-icon-wrap">🔬</div>
                    <span class="mc-centre-code">Pillar I</span>
                    <h3 class="mc-centre-title">Frontier Basic &amp; Applied Research</h3>
                    <p class="mc-centre-desc">
                        Executing continuous, uncompromised inquiry across Biotechnology (BARC), Simulation Sciences
                        (AMSARC), Chemical Sciences (CARC), Physical Sciences (PARC), and Nuclear Technology (NTC) to
                        push the boundaries of knowledge.
                    </p>
                    <span class="plant-capacity">Core: 6 Advanced Divisions</span>
                </div>

                <!-- Pillar 2: Demonstration Pilot Plants -->
                <div class="mc-centre-card reveal-on-scroll delay-100" style="border-top-color: var(--mc-gold);">
                    <div class="mc-centre-icon-wrap">🏭</div>
                    <span class="mc-centre-code" style="color: #854d0e;">Pillar II</span>
                    <h3 class="mc-centre-title">Industrial Pilot Demonstration Plants</h3>
                    <p class="mc-centre-desc">
                        Operating 500-liter organic synthesis pilot reactors, plant micropropagation bioreactors, and
                        material testing facilities to bridge the commercialization gap between bench chemistry and
                        factory production.
                    </p>
                    <span class="plant-capacity">Core: TRL 4–6 Scaling</span>
                </div>

                <!-- Pillar 3: National Shared Instrumentation -->
                <div class="mc-centre-card reveal-on-scroll delay-200" style="border-top-color: #0284c7;">
                    <div class="mc-centre-icon-wrap">🧪</div>
                    <span class="mc-centre-code" style="color: #0284c7;">Pillar III</span>
                    <h3 class="mc-centre-title">National Shared Analytical Hub</h3>
                    <p class="mc-centre-desc">
                        Maintaining capital-intensive, high-precision equipment—including multi-nuclear NMR
                        spectrometers, supercomputing clusters, and radiation dosimetry units—accessible to all Nigerian
                        researchers.
                    </p>
                    <span class="plant-capacity">Core: Shared Open Access</span>
                </div>

                <!-- Pillar 4: Precision Engineering & Tooling -->
                <div class="mc-centre-card reveal-on-scroll delay-300">
                    <div class="mc-centre-icon-wrap">⚙️</div>
                    <span class="mc-centre-code">Pillar IV</span>
                    <h3 class="mc-centre-title">Precision Engineering &amp; Reverse Tooling</h3>
                    <p class="mc-centre-desc">
                        Deploying industrial 5-axis CNC machining, precision mechanical prototyping, and scientific
                        instrument calibration to replace imported industrial machinery components.
                    </p>
                    <span class="plant-capacity">Core: Machine Workshop</span>
                </div>

                <!-- Pillar 5: Technology Transfer & Patents -->
                <div class="mc-centre-card reveal-on-scroll delay-100" style="border-top-color: #ca8a04;">
                    <div class="mc-centre-icon-wrap">📜</div>
                    <span class="mc-centre-code" style="color: #ca8a04;">Pillar V</span>
                    <h3 class="mc-centre-title">Commercial Patenting &amp; Tech Transfer</h3>
                    <p class="mc-centre-desc">
                        Securing NOTAP-certified patent rights for indigenous inventions, structuring private sector
                        licensing agreements, and incubating deep-tech spin-offs under Executive Order No. 5.
                    </p>
                    <span class="plant-capacity">Core: IP Commercialization</span>
                </div>

                <!-- Pillar 6: Postgraduate Residencies -->
                <div class="mc-centre-card reveal-on-scroll delay-200" style="border-top-color: var(--mc-green);">
                    <div class="mc-centre-icon-wrap">🎓</div>
                    <span class="mc-centre-code">Pillar VI</span>
                    <h3 class="mc-centre-title">National Researcher Residencies</h3>
                    <p class="mc-centre-desc">
                        Providing fully powered research residencies, doctoral grant support, and IAEA/TWAS multilateral
                        exchange fellowships across the 2,000-hectare technology sanctuary in Sheda.
                    </p>
                    <span class="plant-capacity">Core: Human Capital R&amp;D</span>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         4. PRESIDENTIAL EXECUTIVE ORDER NO. 5 & NSTIP POLICY ALIGNMENT
         ========================================================================= -->
    <section id="executive-order" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-presidential-banner reveal-on-scroll">
                <div class="mc-presidential-pattern"></div>

                <div class="mc-presidential-grid" style="grid-template-columns: 1fr;">

                    <div class="mc-presidential-content">

                        <div class="mc-presidential-pills">
                            <span class="mc-pill mc-pill-gold">🇳🇬 Sovereign STI Policy</span>
                            <span class="mc-pill mc-pill-green">Presidential Executive Order No. 5</span>
                        </div>

                        <h2 class="mc-presidential-heading">
                            Anchoring Nigeria's National Local Content &amp; Indigenous Science Directives
                        </h2>

                        <blockquote class="mc-presidential-quote">
                            "Executive Order No. 5 mandates all procuring authorities of the Federal Government of
                            Nigeria to give statutory preference to Nigerian indigenous professionals, engineering
                            firms, and indigenous scientific innovations."
                        </blockquote>

                        <div class="mc-presidential-pillars-grid">

                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">🏭</span>
                                <div>
                                    <strong>Industrial Process Domestication</strong>
                                    <p>Direct mandate to substitute imported chemical resins, bio-fertilizers, and
                                        active ingredients with indigenous formulations.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">🔒</span>
                                <div>
                                    <strong>Sovereign Critical Infrastructure Security</strong>
                                    <p>Developing quantum-resistant cryptographic ciphers and supercomputing algorithms
                                        for national defense and financial stability.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">🌱</span>
                                <div>
                                    <strong>National Food Security &amp; Crop Domestication</strong>
                                    <p>Micropropagation of virus-free agricultural planting materials to eliminate
                                        systemic crop losses and ensure food sovereignty.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">⚛️</span>
                                <div>
                                    <strong>Radiation Safety &amp; Nuclear Quality Assurance</strong>
                                    <p>Calibrating industrial gamma radiation dosimetry and non-destructive testing
                                        suites under IAEA and NNRA treaties.</p>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         5. STATUTORY DOCUMENT REPOSITORY & OFFICIAL DISPATCH DESK
         ========================================================================= -->
    <section id="documents" class="mc-section mc-bg-parchment mc-border-top">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Statutory Documentation</span>
                <h2 class="mc-section-title">Official Gazettes &amp; Institutional Publications</h2>
                <p class="mc-section-lead">
                    Review and download the foundational legal frameworks, annual research guidelines, and public tender
                    solicitation notices governing the Complex.
                </p>
            </div>

            <div class="mc-pubs-grid">

                <!-- Doc 1: Mandate Decree -->
                <article class="mc-pub-card reveal-on-scroll">
                    <div class="mc-pub-pills">
                        <span class="mc-pub-year">Statutory Charter</span>
                        <span class="mc-pub-centre">🏛️ Legal Secretariat</span>
                    </div>
                    <h3 class="mc-pub-title">
                        Federal Science &amp; Technology Complex Enabling Legislation
                    </h3>
                    <p class="mc-pub-excerpt">
                        The comprehensive gazetted statutory instrument establishing the governance, powers, and
                        multidisciplinary mandate of NISTCO.
                    </p>
                    <div class="mc-pub-footer">
                        <button type="button" class="mc-btn-cite"
                            onclick="alert('Statutory Gazette available at the NISTCO Legal Secretariat, Sheda Campus.');">
                            📜 Citation Ref: FGN/GAZ/STI
                        </button>
                        <a href="<?php echo esc_url( home_url( '/about-us/#organogram' ) ); ?>" class="mc-btn-preview"
                            style="text-decoration: none !important;">
                            👁️ Governance Tree
                        </a>
                    </div>
                </article>

                <!-- Doc 2: Executive Order 5 Policy -->
                <article class="mc-pub-card reveal-on-scroll delay-100">
                    <div class="mc-pub-pills">
                        <span class="mc-pub-year">Policy Framework</span>
                        <span class="mc-pub-centre">🇳🇬 Presidency</span>
                    </div>
                    <h3 class="mc-pub-title">
                        Presidential Executive Order No. 5 Implementation Manual
                    </h3>
                    <p class="mc-pub-excerpt">
                        Directives for the planning and execution of projects, promotion of Nigerian content in
                        contracts, science, engineering, and technology.
                    </p>
                    <div class="mc-pub-footer">
                        <button type="button" class="mc-btn-cite"
                            onclick="alert('Presidential Directive Gazette available via FMIST.');">
                            📜 Official Directive
                        </button>
                        <a href="<?php echo esc_url( home_url( '/innovation/' ) ); ?>" class="mc-btn-preview"
                            style="text-decoration: none !important;">
                            ⚡ Tech Portal
                        </a>
                    </div>
                </article>

                <!-- Doc 3: NSTIP 2022-2032 -->
                <article class="mc-pub-card reveal-on-scroll delay-200">
                    <div class="mc-pub-pills">
                        <span class="mc-pub-year">Strategic Plan</span>
                        <span class="mc-pub-centre">🌐 FMIST</span>
                    </div>
                    <h3 class="mc-pub-title">
                        National Science, Technology &amp; Innovation Policy (NSTIP)
                    </h3>
                    <p class="mc-pub-excerpt">
                        The 10-year national development roadmap outlining NISTCO's role in advancing 0.5% GDP research
                        funding and commercial patent spin-offs.
                    </p>
                    <div class="mc-pub-footer">
                        <button type="button" class="mc-btn-cite"
                            onclick="alert('Document available via the Federal Ministry of Innovation, Science & Technology.');">
                            📜 National Policy
                        </button>
                        <a href="<?php echo esc_url( home_url( '/publications/' ) ); ?>" class="mc-btn-preview"
                            style="text-decoration: none !important;">
                            📚 Repository
                        </a>
                    </div>
                </article>

            </div>

            <!-- Statutory Dispatch Contact Callout -->
            <div class="inno-dispatch-box reveal-on-scroll" style="margin-top: 3.5rem;">
                <div class="dispatch-left">
                    <span class="dispatch-kicker">Director-General's Secretariat</span>
                    <h3 class="dispatch-title">Need Official Statutory Clarification or Institutional Collaboration?
                    </h3>
                    <p class="dispatch-desc">
                        Contact the Office of the Director-General / CEO for official legal inquiries, inter-ministerial
                        partnerships, and memorandum of understanding (MoU) frameworks.
                    </p>
                </div>
                <div class="dispatch-right">
                    <a href="mailto:dg@shestco.gov.ng" class="mc-btn mc-btn-primary"
                        style="font-size: 0.95rem; padding: 0.85rem 1.75rem;">
                        <span>✉️</span>
                        <span>Contact DG Secretariat</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();