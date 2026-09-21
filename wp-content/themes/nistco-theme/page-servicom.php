<?php
/**
 * Template Name: SERVICOM & Citizen Service Charter
 * Description: Citizen service compact, service delivery benchmarks, anti-corruption compliance (ACTU), and grievance redress mechanism for NISTCO.
 * File: page-servicom.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: 3D CITIZEN INTEGRITY SEAL & ACTIVE SERVICE MATRIX
         ========================================================================= -->
    <section class="mc-hero-section mc-servicom-hero">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container">
            <div class="mc-hero-grid">

                <!-- Left Column: SERVICOM Mandate Header -->
                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">SERVICOM &amp; Citizen Charter</span>
                    </nav>

                    <div class="mc-hero-badges">
                        <span class="mc-pill mc-pill-green">Citizen Service Compact</span>
                        <span class="mc-pill mc-pill-gold">SERVICOM Presidency Aligned</span>
                    </div>

                    <h1 class="mc-hero-title">
                        Service Compact with All Nigerians (SERVICOM)
                    </h1>

                    <p class="mc-hero-subtitle">
                        NISTCO is dedicated to executing its statutory mandate with total transparency, zero tolerance
                        for corruption, timely turnaround for researcher residencies, and responsive citizen engagement.
                    </p>

                    <div class="mc-hero-actions" style="margin-bottom: 2rem;">
                        <a href="#service-standards" class="mc-btn mc-btn-primary">
                            <span>⚖️</span>
                            <span>Service Standards</span>
                        </a>

                        <a href="#grievance-form" class="mc-btn mc-btn-secondary">
                            <span>📝</span>
                            <span>Lodge Grievance / Feedback</span>
                        </a>

                        <a href="#actu-desk" class="mc-btn mc-btn-gold">
                            <span>🛡️</span>
                            <span>Anti-Corruption (ACTU) &rarr;</span>
                        </a>
                    </div>

                    <div class="about-nav-pill-group">
                        <span class="jump-label">Jump To:</span>
                        <a href="#service-standards" class="about-nav-pill">⚖️ Benchmark Standards</a>
                        <a href="#grievance-form" class="about-nav-pill">📝 Redress Desk</a>
                        <a href="#charter-principles" class="about-nav-pill">📜 Citizen Rights</a>
                        <a href="#actu-desk" class="about-nav-pill">🛡️ ACTU Unit</a>
                    </div>
                </div>

                <!-- Right Column: ACTIVE MOTION SVG (3D Citizen Integrity Seal & Balanced Scales) -->
                <div class="about-3d-viewport">
                    <div class="about-3d-stage">
                        <svg class="mc-active-svg-canvas" viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <defs>
                                <linearGradient id="servicomGoldGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#fef08a" />
                                    <stop offset="50%" stop-color="#c59b27" />
                                    <stop offset="100%" stop-color="#713f12" />
                                </linearGradient>
                            </defs>

                            <!-- Outer Kinetic Assurance Ring -->
                            <circle cx="160" cy="160" r="135" fill="none" stroke="#86efac" stroke-width="2"
                                stroke-dasharray="10 6" class="svg-rot-cw-slow" />
                            <circle cx="160" cy="160" r="105" fill="none" stroke="url(#servicomGoldGrad)"
                                stroke-width="1.8" stroke-dasharray="6 4" class="svg-rot-ccw-mid" />

                            <!-- 10-Point Star of Institutional Excellence -->
                            <polygon
                                points="160,45 185,120 260,125 200,175 220,245 160,205 100,245 120,175 60,125 135,120"
                                fill="rgba(4,36,22,0.4)" stroke="#86efac" stroke-width="2" class="svg-rot-cw-fast" />

                            <!-- Center Citizen Core Shield -->
                            <g class="svg-pulse-core">
                                <circle cx="160" cy="160" r="30" fill="#042416" stroke="#fde047" stroke-width="2.5" />
                                <text x="160" y="168" text-anchor="middle" font-size="20" fill="#fde047">🛡️</text>
                            </g>
                        </svg>
                    </div>
                </div>

            </div>
        </div>

        <!-- Docked SERVICOM Factlet Ribbon -->
        <div class="about-factlet-bar">
            <div class="container about-factlet-container">
                <div class="factlet-item">
                    <span class="factlet-kicker">Nodal Officer</span>
                    <strong class="factlet-value">SERVICOM Directorate Desk</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Grievance Redress Window</span>
                    <strong class="factlet-value">Investigation within 5 Working Days</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Direct Contact</span>
                    <strong class="factlet-value">servicom@shestco.gov.ng</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Compliance Desk</span>
                    <strong class="factlet-value">ACTU / ICPC Monitored</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. CORE SERVICE DELIVERY BENCHMARKS
         ========================================================================= -->
    <section id="service-standards" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Guaranteed Service Timelines</span>
                <h2 class="mc-section-title">NISTCO Statutory Service Standards</h2>
                <p class="mc-section-lead">
                    Measurable, time-bound commitments for researcher onboarding, analytical instrumentation access,
                    tender queries, and general administrative services.
                </p>
            </div>

            <div class="mc-centres-grid">

                <div class="mc-centre-card reveal-on-scroll">
                    <span class="mc-servicom-badge">Standard 01</span>
                    <h3 class="mc-centre-title" style="margin-top: 0.85rem;">Spectrometry &amp; Analytical Scans</h3>
                    <p class="mc-centre-desc">Routine NMR spectra, XRD crystallographic scans, and UV-Vis
                        spectrophotometry requests are processed with raw data transmitted within <strong>48 to 72
                            hours</strong>.</p>
                    <span class="plant-capacity">Turnaround: 48h - 72h</span>
                </div>

                <div class="mc-centre-card reveal-on-scroll delay-100">
                    <span class="mc-servicom-badge">Standard 02</span>
                    <h3 class="mc-centre-title" style="margin-top: 0.85rem;">Researcher Residencies &amp; Lab Access
                    </h3>
                    <p class="mc-centre-desc">Visiting scholar fellowship applications, bench allocations, and guest
                        lodge reservations are acknowledged and approved within <strong>5 working days</strong>.</p>
                    <span class="plant-capacity">Approval: ≤ 5 Working Days</span>
                </div>

                <div class="mc-centre-card reveal-on-scroll delay-200">
                    <span class="mc-servicom-badge">Standard 03</span>
                    <h3 class="mc-centre-title" style="margin-top: 0.85rem;">Procurement Enquiries &amp; Tenders</h3>
                    <p class="mc-centre-desc">Tender clarifications, SBD issuance, and contractor registration
                        verification are resolved strictly within <strong>48 hours</strong> of formal written receipt.
                    </p>
                    <span class="plant-capacity">Resolution: 48 Hours</span>
                </div>

                <div class="mc-centre-card reveal-on-scroll delay-300">
                    <span class="mc-servicom-badge">Standard 04</span>
                    <h3 class="mc-centre-title" style="margin-top: 0.85rem;">Official Correspondence &amp; Registry</h3>
                    <p class="mc-centre-desc">General public enquiries and inter-ministerial correspondence received by
                        the Central Registry are logged, routed, and responded to within <strong>3 working
                            days</strong>.</p>
                    <span class="plant-capacity">Turnaround: ≤ 3 Days</span>
                </div>

                <div class="mc-centre-card reveal-on-scroll delay-100" style="border-top-color: #ca8a04;">
                    <span class="mc-servicom-badge"
                        style="background:#fef3c7; color:#92400e; border-color:#fde68a;">Standard 05</span>
                    <h3 class="mc-centre-title" style="margin-top: 0.85rem;">Technology Licensing &amp; NOTAP EOI</h3>
                    <p class="mc-centre-desc">Statutory patent Expressions of Interest (EOI) from private enterprises
                        receive technical datasheets and licensing terms within <strong>48 working hours</strong>.</p>
                    <span class="plant-capacity">Response: ≤ 48 Hours</span>
                </div>

                <div class="mc-centre-card reveal-on-scroll delay-200" style="border-top-color: #0284c7;">
                    <span class="mc-servicom-badge"
                        style="background:#e0f2fe; color:#0369a1; border-color:#bae6fd;">Standard 06</span>
                    <h3 class="mc-centre-title" style="margin-top: 0.85rem;">Grievance Redress &amp; ACTU Complaints
                    </h3>
                    <p class="mc-centre-desc">Formal service complaints and ethical reports receive an initial incident
                        acknowledgement within <strong>24 hours</strong> with full findings within 5 working days.</p>
                    <span class="plant-capacity">Acknowledgement: 24 Hours</span>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. GRIEVANCE REDRESS & SERVICOM COMPLAINT FORM
         ========================================================================= -->
    <section id="grievance-form" class="mc-section mc-bg-parchment mc-border-top mc-border-bottom">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1.3fr; gap: 3.5rem; align-items: flex-start;">

                <!-- Left Column: Citizen Rights & Redress Protocol -->
                <div class="reveal-on-scroll">
                    <span class="mc-section-kicker">Citizen Redress Window</span>
                    <h2 class="mc-section-title">Lodge a Service Complaint or Feedback</h2>
                    <p class="mc-section-lead" style="margin-bottom: 1.5rem;">
                        If your service experience at any NISTCO facility fell short of our published standards, submit
                        your grievance directly to the SERVICOM Nodal Officer.
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <div class="mc-partner-card"
                            style="align-items: flex-start; text-align: left; padding: 1.25rem;">
                            <strong
                                style="color: var(--mc-dark); font-size: 0.95rem; display: block; margin-bottom: 0.25rem;">Direct
                                SERVICOM Nodal Desk</strong>
                            <span
                                style="font-size: 0.85rem; color: var(--mc-green); font-weight: 700;">servicom@shestco.gov.ng</span>
                            <span style="font-size: 0.78rem; color: var(--mc-text-muted);">Physical Desk: Ground Floor,
                                Directorate of Administration, Sheda Campus</span>
                        </div>

                        <div class="mc-partner-card"
                            style="align-items: flex-start; text-align: left; padding: 1.25rem;">
                            <strong
                                style="color: var(--mc-dark); font-size: 0.95rem; display: block; margin-bottom: 0.25rem;">Confidential
                                Whistleblowing / ACTU</strong>
                            <span
                                style="font-size: 0.85rem; color: var(--mc-green); font-weight: 700;">actu@shestco.gov.ng</span>
                            <span style="font-size: 0.78rem; color: var(--mc-text-muted);">Independent Anti-Corruption
                                and Transparency Monitoring Unit</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Grievance Submission Form Card -->
                <div class="mc-form-card reveal-on-scroll delay-100">
                    <h3 style="color: var(--mc-dark); font-size: 1.35rem; font-weight: 800; margin: 0 0 0.5rem 0;">
                        Citizen Service Redress Form</h3>
                    <p style="font-size: 0.88rem; color: var(--mc-text-muted); margin: 0 0 1.5rem 0;">
                        All grievances are handled with strict statutory confidentiality.
                    </p>

                    <form action="#" method="post" class="mc-form-grid">
                        <?php wp_nonce_field( 'shestco_servicom_dispatch_nonce', 'servicom_nonce' ); ?>

                        <div class="mc-input-group">
                            <label for="servicom_name">Full Name (or "Anonymous") <span
                                    style="color: #dc2626;">*</span></label>
                            <input type="text" id="servicom_name" name="servicom_name" required
                                placeholder="Dr. / Mr. / Anonymous Citizen">
                        </div>

                        <div class="mc-input-group">
                            <label for="servicom_email">Contact Email <span style="color: #dc2626;">*</span></label>
                            <input type="email" id="servicom_email" name="servicom_email" required
                                placeholder="contact@email.com">
                        </div>

                        <div class="mc-input-group">
                            <label for="servicom_phone">Telephone Number</label>
                            <input type="tel" id="servicom_phone" name="servicom_phone" placeholder="+234 800 000 0000">
                        </div>

                        <div class="mc-input-group">
                            <label for="servicom_division">Department / Centre Involved <span
                                    style="color: #dc2626;">*</span></label>
                            <select id="servicom_division" name="servicom_division" required>
                                <option value="Analytical Instrumentation (NMR/HPC/XRD)">Analytical Instrumentation (NMR
                                    / HPC / XRD)</option>
                                <option value="Research Residency & Lab Access">Research Residency &amp; Lab Access
                                </option>
                                <option value="Procurement & Tenders Bidding Desk">Procurement &amp; Tenders Bidding
                                    Desk</option>
                                <option value="Administrative & HR Registry">Administrative &amp; HR Registry</option>
                                <option value="Technology Commercialization & Licensing">Technology Commercialization
                                    &amp; Licensing</option>
                                <option value="Other Operations">Other Operations</option>
                            </select>
                        </div>

                        <div class="mc-input-group mc-form-full">
                            <label for="servicom_details">Details of Incident / Redress Request <span
                                    style="color: #dc2626;">*</span></label>
                            <textarea id="servicom_details" name="servicom_details" rows="4" required
                                placeholder="Specify date, location, facility involved, officer (if known), and details of the service failure..."></textarea>
                        </div>

                        <div class="mc-form-full"
                            style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; margin-top: 0.5rem;">
                            <span style="font-size: 0.75rem; color: var(--mc-text-muted);">🔒 Transmitted directly to
                                the SERVICOM Standing Committee.</span>
                            <button type="submit" class="mc-btn mc-btn-primary">
                                <span>Submit Redress Ticket &rarr;</span>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. ANTI-CORRUPTION & TRANSPARENCY UNIT (ACTU) MANDATE
         ========================================================================= -->
    <section id="actu-desk" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-presidential-banner reveal-on-scroll">
                <div class="mc-presidential-pattern"></div>

                <div class="mc-presidential-grid" style="grid-template-columns: 1fr;">
                    <div class="mc-presidential-content">

                        <div class="mc-presidential-pills">
                            <span class="mc-pill mc-pill-gold">🛡️ Anti-Corruption Compliance</span>
                            <span class="mc-pill mc-pill-green">ICPC Standing Unit</span>
                        </div>

                        <h2 class="mc-presidential-heading">
                            Anti-Corruption and Transparency Monitoring Unit (ACTU)
                        </h2>

                        <blockquote class="mc-presidential-quote">
                            "In collaboration with the Independent Corrupt Practices and Other Related Offences
                            Commission (ICPC), NISTCO enforces strict ethical codes across public procurement, research
                            grant allocations, and commercial patent royalties."
                        </blockquote>

                        <div class="mc-presidential-pillars-grid">
                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">⚖️</span>
                                <div>
                                    <strong>Zero Tolerance Policy</strong>
                                    <p>Strict prohibition of gratification, extortion, or conflict of interest in public
                                        tender awards and researcher accommodations.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">🔒</span>
                                <div>
                                    <strong>Protected Whistleblower Channels</strong>
                                    <p>Encrypted reporting mechanisms that guarantee complete statutory identity
                                        protection for informants.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">📊</span>
                                <div>
                                    <strong>System Study &amp; Risk Audits</strong>
                                    <p>Continuous quarterly examination of administrative and procurement systems to
                                        identify and eliminate corruption vulnerabilities.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item">
                                <span class="pillar-icon">🏛️</span>
                                <div>
                                    <strong>Direct ICPC Oversight</strong>
                                    <p>The unit operates with autonomous oversight, submitting statutory compliance
                                        reports directly to the ICPC and the DG.</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </section>

</main>

<?php
get_footer();