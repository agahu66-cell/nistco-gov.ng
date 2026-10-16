<?php
/**
 * Template Name: SERVICOM & Citizen Service Charter
 * Description: Fully responsive citizen service compact, service delivery benchmarks, anti-corruption compliance (ACTU), and grievance redress mechanism for NISTCO.
 * File: page-servicom.php
 *
 * @package ShestcoTheme
 * @version 2.6.0
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<style>
/* Responsive Mobile Enhancements for SERVICOM Portal */
@media (max-width: 992px) {
    .servicom-grid-layout {
        grid-template-columns: 1fr !important;
        gap: 2.5rem !important;
    }

    .mc-hero-grid {
        grid-template-columns: 1fr !important;
        text-align: center;
    }

    .mc-hero-actions,
    .mc-hero-badges {
        justify-content: center;
    }

    .about-factlet-container {
        grid-template-columns: repeat(2, 1fr) !important;
        gap: 1.5rem !important;
    }
}

@media (max-width: 576px) {
    .about-factlet-container {
        grid-template-columns: 1fr !important;
    }

    .mc-hero-section {
        padding: 4rem 1rem !important;
    }

    .mc-form-card,
    .inquiry-wrapper {
        padding: 1.5rem !important;
    }
}
</style>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: 3D CITIZEN INTEGRITY SEAL & ACTIVE SERVICE MATRIX
         ========================================================================= -->
    <section class="mc-hero-section mc-servicom-hero" style="padding: 6rem 2rem;">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container"
            style="max-width: 1440px; margin: 0 auto; position: relative; z-index: 2;">
            <div class="mc-hero-grid"
                style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 4rem; align-items: center;">

                <!-- Left Column: SERVICOM Mandate Header -->
                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb" style="margin-bottom: 1rem;">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">SERVICOM &amp; Citizen Charter</span>
                    </nav>

                    <div class="mc-hero-badges"
                        style="display: flex; gap: 0.75rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
                        <span class="mc-pill mc-pill-green">Citizen Service Compact</span>
                        <span class="mc-pill mc-pill-gold">SERVICOM Presidency Aligned</span>
                    </div>

                    <h1 class="mc-hero-title"
                        style="font-size: clamp(2.25rem, 4.5vw, 3.75rem); font-weight: 800; line-height: 1.15; margin: 0 0 1.5rem 0; color: #ffffff;">
                        Service Compact with All Nigerians (SERVICOM)
                    </h1>

                    <p class="mc-hero-subtitle"
                        style="font-size: 1.1rem; line-height: 1.7; color: #cbd5e1; margin-bottom: 2rem; max-width: 640px;">
                        NISTCO is dedicated to executing its statutory mandate with total transparency, zero tolerance
                        for corruption, timely turnaround for researcher residencies, and responsive citizen engagement.
                    </p>

                    <div class="mc-hero-actions"
                        style="display: flex; gap: 1rem; flex-wrap: wrap; margin-bottom: 2.5rem;">
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
                </div>

                <!-- Right Column: ACTIVE MOTION SVG (3D Citizen Integrity Seal & Balanced Scales) -->
                <div class="about-3d-viewport" style="display: flex; align-items: center; justify-content: center;">
                    <div class="about-3d-stage">
                        <svg class="mc-active-svg-canvas" viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true" style="width: 100%; max-width: 300px; height: auto;">
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
        <div class="about-factlet-bar"
            style="margin-top: 3rem; background: rgba(255,255,255,0.04); border-top: 1px solid rgba(255,255,255,0.1); padding: 1.5rem 2rem;">
            <div class="container about-factlet-container"
                style="max-width: 1440px; margin: 0 auto; display: grid; grid-template-columns: repeat(4, 1fr); gap: 2rem;">
                <div class="factlet-item">
                    <span class="factlet-kicker"
                        style="display: block; font-size: 0.75rem; text-transform: uppercase; color: #fde047; font-weight: 800;">Nodal
                        Officer</span>
                    <strong class="factlet-value" style="color: #fff; font-size: 0.95rem;">SERVICOM Directorate
                        Desk</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker"
                        style="display: block; font-size: 0.75rem; text-transform: uppercase; color: #fde047; font-weight: 800;">Grievance
                        Redress Window</span>
                    <strong class="factlet-value" style="color: #fff; font-size: 0.95rem;">Investigation within 5
                        Working Days</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker"
                        style="display: block; font-size: 0.75rem; text-transform: uppercase; color: #fde047; font-weight: 800;">Direct
                        Contact</span>
                    <strong class="factlet-value"
                        style="color: #fff; font-size: 0.95rem;">servicom@shestco.gov.ng</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker"
                        style="display: block; font-size: 0.75rem; text-transform: uppercase; color: #fde047; font-weight: 800;">Compliance
                        Desk</span>
                    <strong class="factlet-value" style="color: #fff; font-size: 0.95rem;">ACTU / ICPC
                        Monitored</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. CORE SERVICE DELIVERY BENCHMARKS
         ========================================================================= -->
    <section id="service-standards" class="mc-section mc-bg-white" style="padding: 5rem 2rem;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center" style="text-align: center; margin-bottom: 3.5rem;">
                <span class="mc-section-kicker"
                    style="color: #008751; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1.5px;">Guaranteed
                    Service Timelines</span>
                <h2 class="mc-section-title"
                    style="font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0;">NISTCO Statutory
                    Service Standards</h2>
                <p class="mc-section-lead" style="color: #64748b; font-size: 1.05rem;">
                    Measurable, time-bound commitments for researcher onboarding, analytical instrumentation access,
                    tender queries, and general administrative services.
                </p>
            </div>

            <div class="mc-centres-grid"
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem;">

                <div class="mc-centre-card reveal-on-scroll"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2rem; border-top: 4px solid #008751;">
                    <span class="mc-servicom-badge"
                        style="background: #d1fae5; color: #065f46; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px;">Standard
                        01</span>
                    <h3 class="mc-centre-title"
                        style="margin-top: 0.85rem; font-size: 1.25rem; font-weight: 800; color: #0f172a;">Spectrometry
                        &amp; Analytical Scans</h3>
                    <p class="mc-centre-desc" style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Routine NMR
                        spectra, XRD crystallographic scans, and UV-Vis spectrophotometry requests are processed with
                        raw data transmitted within <strong>48 to 72 hours</strong>.</p>
                    <span class="plant-capacity"
                        style="display: block; margin-top: 1rem; font-size: 0.85rem; font-weight: 700; color: #008751;">Turnaround:
                        48h - 72h</span>
                </div>

                <div class="mc-centre-card reveal-on-scroll"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2rem; border-top: 4px solid #008751;">
                    <span class="mc-servicom-badge"
                        style="background: #d1fae5; color: #065f46; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px;">Standard
                        02</span>
                    <h3 class="mc-centre-title"
                        style="margin-top: 0.85rem; font-size: 1.25rem; font-weight: 800; color: #0f172a;">Researcher
                        Residencies &amp; Lab Access</h3>
                    <p class="mc-centre-desc" style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Visiting
                        scholar fellowship applications, bench allocations, and guest lodge reservations are
                        acknowledged and approved within <strong>5 working days</strong>.</p>
                    <span class="plant-capacity"
                        style="display: block; margin-top: 1rem; font-size: 0.85rem; font-weight: 700; color: #008751;">Approval:
                        ≤ 5 Working Days</span>
                </div>

                <div class="mc-centre-card reveal-on-scroll"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2rem; border-top: 4px solid #008751;">
                    <span class="mc-servicom-badge"
                        style="background: #d1fae5; color: #065f46; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px;">Standard
                        03</span>
                    <h3 class="mc-centre-title"
                        style="margin-top: 0.85rem; font-size: 1.25rem; font-weight: 800; color: #0f172a;">Procurement
                        Enquiries &amp; Tenders</h3>
                    <p class="mc-centre-desc" style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Tender
                        clarifications, SBD issuance, and contractor registration verification are resolved strictly
                        within <strong>48 hours</strong> of formal written receipt.</p>
                    <span class="plant-capacity"
                        style="display: block; margin-top: 1rem; font-size: 0.85rem; font-weight: 700; color: #008751;">Resolution:
                        48 Hours</span>
                </div>

                <div class="mc-centre-card reveal-on-scroll"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2rem; border-top: 4px solid #008751;">
                    <span class="mc-servicom-badge"
                        style="background: #d1fae5; color: #065f46; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px;">Standard
                        04</span>
                    <h3 class="mc-centre-title"
                        style="margin-top: 0.85rem; font-size: 1.25rem; font-weight: 800; color: #0f172a;">Official
                        Correspondence &amp; Registry</h3>
                    <p class="mc-centre-desc" style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">General
                        public enquiries and inter-ministerial correspondence received by the Central Registry are
                        logged, routed, and responded to within <strong>3 working days</strong>.</p>
                    <span class="plant-capacity"
                        style="display: block; margin-top: 1rem; font-size: 0.85rem; font-weight: 700; color: #008751;">Turnaround:
                        ≤ 3 Days</span>
                </div>

                <div class="mc-centre-card reveal-on-scroll"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2rem; border-top: 4px solid #ca8a04;">
                    <span class="mc-servicom-badge"
                        style="background:#fef3c7; color:#92400e; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px;">Standard
                        05</span>
                    <h3 class="mc-centre-title"
                        style="margin-top: 0.85rem; font-size: 1.25rem; font-weight: 800; color: #0f172a;">Technology
                        Licensing &amp; NOTAP EOI</h3>
                    <p class="mc-centre-desc" style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Statutory
                        patent Expressions of Interest (EOI) from private enterprises receive technical datasheets and
                        licensing terms within <strong>48 working hours</strong>.</p>
                    <span class="plant-capacity"
                        style="display: block; margin-top: 1rem; font-size: 0.85rem; font-weight: 700; color: #ca8a04;">Response:
                        ≤ 48 Hours</span>
                </div>

                <div class="mc-centre-card reveal-on-scroll"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2rem; border-top: 4px solid #0284c7;">
                    <span class="mc-servicom-badge"
                        style="background:#e0f2fe; color:#0369a1; font-size: 0.75rem; font-weight: 800; padding: 0.25rem 0.65rem; border-radius: 4px;">Standard
                        06</span>
                    <h3 class="mc-centre-title"
                        style="margin-top: 0.85rem; font-size: 1.25rem; font-weight: 800; color: #0f172a;">Grievance
                        Redress &amp; ACTU Complaints</h3>
                    <p class="mc-centre-desc" style="color: #64748b; font-size: 0.92rem; line-height: 1.6;">Formal
                        service complaints and ethical reports receive an initial incident acknowledgement within
                        <strong>24 hours</strong> with full findings within 5 working days.</p>
                    <span class="plant-capacity"
                        style="display: block; margin-top: 1rem; font-size: 0.85rem; font-weight: 700; color: #0284c7;">Acknowledgement:
                        24 Hours</span>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. GRIEVANCE REDRESS & SERVICOM COMPLAINT FORM
         ========================================================================= -->
    <section id="grievance-form" class="mc-section mc-bg-parchment" style="padding: 5rem 2rem; background: #f1f5f9;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">
            <div class="servicom-grid-layout"
                style="display: grid; grid-template-columns: 1fr 1.3fr; gap: 3.5rem; align-items: flex-start;">

                <!-- Left Column: Citizen Rights & Redress Protocol -->
                <div>
                    <span
                        style="color: #008751; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Citizen
                        Redress Window</span>
                    <h2 style="font-size: 2rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0;">Lodge a Service
                        Complaint or Feedback</h2>
                    <p style="color: #64748b; font-size: 1.05rem; line-height: 1.6; margin-bottom: 2rem;">
                        If your service experience at any NISTCO facility fell short of our published standards, submit
                        your grievance directly to the SERVICOM Nodal Officer.
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <div
                            style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1.25rem;">
                            <strong
                                style="color: #0f172a; font-size: 0.95rem; display: block; margin-bottom: 0.25rem;">Direct
                                SERVICOM Nodal Desk</strong>
                            <span
                                style="font-size: 0.85rem; color: #008751; font-weight: 700; display: block; margin-bottom: 0.2rem;">servicom@shestco.gov.ng</span>
                            <span style="font-size: 0.78rem; color: #64748b;">Physical Desk: Ground Floor, Directorate
                                of Administration, Sheda Campus</span>
                        </div>

                        <div
                            style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1.25rem;">
                            <strong
                                style="color: #0f172a; font-size: 0.95rem; display: block; margin-bottom: 0.25rem;">Confidential
                                Whistleblowing / ACTU</strong>
                            <span
                                style="font-size: 0.85rem; color: #008751; font-weight: 700; display: block; margin-bottom: 0.2rem;">actu@shestco.gov.ng</span>
                            <span style="font-size: 0.78rem; color: #64748b;">Independent Anti-Corruption and
                                Transparency Monitoring Unit</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Grievance Submission Form Card -->
                <div class="mc-form-card"
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                    <h3 style="color: #0f172a; font-size: 1.35rem; font-weight: 800; margin: 0 0 0.5rem 0;">
                        Citizen Service Redress Form</h3>
                    <p style="font-size: 0.88rem; color: #64748b; margin: 0 0 1.5rem 0;">
                        All grievances are handled with strict statutory confidentiality.
                    </p>

                    <form action="#" method="post" style="display: grid; grid-template-columns: 1fr 1fr; gap: 1rem;">
                        <?php wp_nonce_field( 'shestco_servicom_dispatch_nonce', 'servicom_nonce' ); ?>

                        <div style="grid-column: span 2;">
                            <label for="servicom_name"
                                style="display: block; font-size: 0.85rem; font-weight: 700; color: #334155; margin-bottom: 0.35rem;">Full
                                Name (or "Anonymous") <span style="color: #dc2626;">*</span></label>
                            <input type="text" id="servicom_name" name="servicom_name" required
                                placeholder="Dr. / Mr. / Anonymous Citizen"
                                style="width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; box-sizing: border-box;">
                        </div>

                        <div>
                            <label for="servicom_email"
                                style="display: block; font-size: 0.85rem; font-weight: 700; color: #334155; margin-bottom: 0.35rem;">Contact
                                Email <span style="color: #dc2626;">*</span></label>
                            <input type="email" id="servicom_email" name="servicom_email" required
                                placeholder="contact@email.com"
                                style="width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; box-sizing: border-box;">
                        </div>

                        <div>
                            <label for="servicom_phone"
                                style="display: block; font-size: 0.85rem; font-weight: 700; color: #334155; margin-bottom: 0.35rem;">Telephone
                                Number</label>
                            <input type="tel" id="servicom_phone" name="servicom_phone" placeholder="+234 800 000 0000"
                                style="width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; box-sizing: border-box;">
                        </div>

                        <div style="grid-column: span 2;">
                            <label for="servicom_division"
                                style="display: block; font-size: 0.85rem; font-weight: 700; color: #334155; margin-bottom: 0.35rem;">Department
                                / Centre Involved <span style="color: #dc2626;">*</span></label>
                            <select id="servicom_division" name="servicom_division" required
                                style="width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; box-sizing: border-box; background: #fff;">
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

                        <div style="grid-column: span 2;">
                            <label for="servicom_details"
                                style="display: block; font-size: 0.85rem; font-weight: 700; color: #334155; margin-bottom: 0.35rem;">Details
                                of Incident / Redress Request <span style="color: #dc2626;">*</span></label>
                            <textarea id="servicom_details" name="servicom_details" rows="4" required
                                placeholder="Specify date, location, facility involved, officer (if known), and details of the service failure..."
                                style="width: 100%; padding: 0.75rem; border: 1px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; box-sizing: border-box;"></textarea>
                        </div>

                        <div
                            style="grid-column: span 2; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; margin-top: 0.5rem;">
                            <span style="font-size: 0.75rem; color: #64748b;">🔒 Transmitted directly to SERVICOM
                                Standing Committee.</span>
                            <button type="submit" class="mc-btn mc-btn-primary"
                                style="background: #008751; color: #fff; padding: 0.75rem 1.5rem; border-radius: 8px; border: none; font-weight: 700; cursor: pointer;">
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
    <section id="actu-desk" class="mc-section mc-bg-white" style="padding: 5rem 2rem;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-presidential-banner"
                style="background: #042416; border-radius: 16px; padding: 3rem; color: #ffffff; position: relative; overflow: hidden; border: 1px solid rgba(217,119,6,0.3);">
                <div class="mc-presidential-pattern"></div>

                <div class="mc-presidential-grid" style="grid-template-columns: 1fr;">
                    <div class="mc-presidential-content">

                        <div class="mc-presidential-pills"
                            style="display: flex; gap: 0.75rem; margin-bottom: 1rem; flex-wrap: wrap;">
                            <span class="mc-pill mc-pill-gold"
                                style="background: #d97706; color: #fff; font-size: 0.75rem; font-weight: 800; padding: 0.3rem 0.75rem; border-radius: 50px;">🛡️
                                Anti-Corruption Compliance</span>
                            <span class="mc-pill mc-pill-green"
                                style="background: #008751; color: #fff; font-size: 0.75rem; font-weight: 800; padding: 0.3rem 0.75rem; border-radius: 50px;">ICPC
                                Standing Unit</span>
                        </div>

                        <h2 class="mc-presidential-heading"
                            style="font-size: 2rem; font-weight: 800; margin: 1rem 0; color: #fff;">
                            Anti-Corruption and Transparency Monitoring Unit (ACTU)
                        </h2>

                        <blockquote class="mc-presidential-quote"
                            style="font-size: 1.05rem; line-height: 1.7; color: #cbd5e1; font-style: italic; border-left: 4px solid #d97706; padding-left: 1.25rem; margin: 1.5rem 0;">
                            "In collaboration with the Independent Corrupt Practices and Other Related Offences
                            Commission (ICPC), NISTCO enforces strict ethical codes across public procurement, research
                            grant allocations, and commercial patent royalties."
                        </blockquote>

                        <div class="mc-presidential-pillars-grid"
                            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 1.5rem; margin-top: 2rem;">
                            <div class="mc-presidential-pillar-item"
                                style="display: flex; gap: 1rem; align-items: flex-start;">
                                <span class="pillar-icon" style="font-size: 1.5rem;">⚖️</span>
                                <div>
                                    <strong style="display: block; color: #fff; margin-bottom: 0.25rem;">Zero Tolerance
                                        Policy</strong>
                                    <p style="color: #94a3b8; font-size: 0.9rem; margin: 0; line-height: 1.5;">Strict
                                        prohibition of gratification, extortion, or conflict of interest in public
                                        tender awards and researcher accommodations.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item"
                                style="display: flex; gap: 1rem; align-items: flex-start;">
                                <span class="pillar-icon" style="font-size: 1.5rem;">🔒</span>
                                <div>
                                    <strong style="display: block; color: #fff; margin-bottom: 0.25rem;">Protected
                                        Whistleblower Channels</strong>
                                    <p style="color: #94a3b8; font-size: 0.9rem; margin: 0; line-height: 1.5;">Encrypted
                                        reporting mechanisms that guarantee complete statutory identity protection for
                                        informants.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item"
                                style="display: flex; gap: 1rem; align-items: flex-start;">
                                <span class="pillar-icon" style="font-size: 1.5rem;">📊</span>
                                <div>
                                    <strong style="display: block; color: #fff; margin-bottom: 0.25rem;">System Study
                                        &amp; Risk Audits</strong>
                                    <p style="color: #94a3b8; font-size: 0.9rem; margin: 0; line-height: 1.5;">
                                        Continuous quarterly examination of administrative and procurement systems to
                                        identify and eliminate corruption vulnerabilities.</p>
                                </div>
                            </div>

                            <div class="mc-presidential-pillar-item"
                                style="display: flex; gap: 1rem; align-items: flex-start;">
                                <span class="pillar-icon" style="font-size: 1.5rem;">🏛️</span>
                                <div>
                                    <strong style="display: block; color: #fff; margin-bottom: 0.25rem;">Direct ICPC
                                        Oversight</strong>
                                    <p style="color: #94a3b8; font-size: 0.9rem; margin: 0; line-height: 1.5;">The unit
                                        operates with autonomous oversight, submitting statutory compliance reports
                                        directly to the ICPC and the DG.</p>
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