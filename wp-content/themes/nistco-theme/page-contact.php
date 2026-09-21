<?php
/**
 * Template Name: Contact & Campus Directorate
 * Description: Official contact directory, executive registry dispatches, interactive campus navigation coordinates, and active radar telemetry.
 * File: page-contact.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: 3D TELEMETRY & ACTIVE RADAR MATRIX
         ========================================================================= -->
    <section class="mc-hero-section mc-contact-hero">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container">
            <div class="mc-hero-grid">

                <!-- Left Column: Official Dispatch Header & Metadata -->
                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">Contact &amp; Directorate Registry</span>
                    </nav>

                    <div class="mc-hero-badges">
                        <span class="mc-pill mc-pill-green">Federal Technology Sanctuary</span>
                        <span class="mc-pill mc-pill-gold">Abuja-Lokoja Tech Corridor</span>
                    </div>

                    <h1 class="mc-hero-title">
                        Official Enquiries, Registry &amp; Campus Directorate
                    </h1>

                    <p class="mc-hero-subtitle">
                        Engage the Executive Secretariat, schedule advanced research facility residencies, structure
                        intellectual property licensing with NOTAP desks, or lodge formal inter-ministerial
                        correspondence.
                    </p>

                    <div class="about-nav-pill-group">
                        <span class="jump-label">Jump To:</span>
                        <a href="#dispatch-form" class="about-nav-pill">✉️ Dispatch Form</a>
                        <a href="#directorate-contacts" class="about-nav-pill">🏛️ Directorate Registry</a>
                        <a href="#campus-location" class="about-nav-pill">📍 Location &amp; Access</a>
                        <a href="#servicom-desk" class="about-nav-pill">⚖️ SERVICOM Desk</a>
                    </div>
                </div>

                <!-- Right Column: ACTIVE MOTION SVG (Campus Radar & Vector Telemetry) -->
                <div class="about-3d-viewport">
                    <div class="about-3d-stage">
                        <svg class="mc-active-svg-canvas" viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <defs>
                                <radialGradient id="radarScanGrad" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="#86efac" stop-opacity="0.6" />
                                    <stop offset="60%" stop-color="#0d5c3a" stop-opacity="0.25" />
                                    <stop offset="100%" stop-color="#042416" stop-opacity="0" />
                                </radialGradient>
                            </defs>

                            <!-- Concentric Radar Range Rings -->
                            <circle cx="160" cy="160" r="140" fill="none" stroke="#86efac" stroke-width="1.5"
                                stroke-dasharray="6 6" class="svg-rot-cw-slow" />
                            <circle cx="160" cy="160" r="105" fill="none" stroke="rgba(253,224,71,0.4)"
                                stroke-width="1.5" stroke-dasharray="4 4" class="svg-rot-ccw-mid" />
                            <circle cx="160" cy="160" r="70" fill="none" stroke="#86efac" stroke-width="1.5" />
                            <circle cx="160" cy="160" r="35" fill="none" stroke="rgba(255,255,255,0.3)"
                                stroke-width="1" />

                            <!-- Crosshair Telemetry Axes -->
                            <line x1="20" y1="160" x2="300" y2="160" stroke="rgba(134,239,172,0.2)" stroke-width="1" />
                            <line x1="160" y1="20" x2="160" y2="300" stroke="rgba(134,239,172,0.2)" stroke-width="1" />

                            <!-- Active Radar Sweep Arm -->
                            <g class="svg-radar-arm">
                                <path d="M 160,160 L 290,120 A 140,140 0 0,0 160,20 Z" fill="url(#radarScanGrad)" />
                                <line x1="160" y1="160" x2="290" y2="120" stroke="#fde047" stroke-width="2.5" />
                            </g>

                            <!-- Active Telemetry Target Beacons -->
                            <circle cx="160" cy="160" r="10" fill="#fde047" class="svg-pulse-core" />
                            <circle cx="230" cy="100" r="6" fill="#86efac" class="svg-pulse-core" />
                            <circle cx="95" cy="225" r="5" fill="#38bdf8" class="svg-pulse-core" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>

        <!-- Docked Telemetry Factlet Ribbon -->
        <div class="about-factlet-bar">
            <div class="container about-factlet-container">
                <div class="factlet-item">
                    <span class="factlet-kicker">Geographic Coordinates</span>
                    <strong class="factlet-value">8°51'42"N 7°00'18"E (Sheda)</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Central Dispatch Hours</span>
                    <strong class="factlet-value">Mon – Fri: 08:00 – 16:00 WAT</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Emergency Lab Response</span>
                    <strong class="factlet-value">24/7 Monitored Facilities</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Postal Address</span>
                    <strong class="factlet-value">PMB 186, Garki, Abuja, Nigeria</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. INTERACTIVE DISPATCH FORM & REGISTRY INFORMATION
         ========================================================================= -->
    <section id="dispatch-form" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">
            <div style="display: grid; grid-template-columns: 1fr 1.3fr; gap: 3.5rem; align-items: flex-start;">

                <!-- Left Column: Registry Guidance -->
                <div class="reveal-on-scroll">
                    <span class="mc-section-kicker">Official Communication Desk</span>
                    <h2 class="mc-section-title">Submit Official Correspondence</h2>
                    <p class="mc-section-lead" style="margin-bottom: 1.75rem;">
                        Official administrative communications, research fellowship inquiries, and commercialization
                        proposals are routed directly to the designated directorate secretary.
                    </p>

                    <div style="display: flex; flex-direction: column; gap: 1rem;">
                        <div class="mc-partner-card"
                            style="align-items: flex-start; text-align: left; padding: 1.25rem;">
                            <strong
                                style="color: var(--mc-dark); font-size: 0.95rem; display: block; margin-bottom: 0.25rem;">Office
                                of the Director-General / CEO</strong>
                            <span
                                style="font-size: 0.85rem; color: var(--mc-green); font-weight: 700;">dg@shestco.gov.ng</span>
                            <span style="font-size: 0.78rem; color: var(--mc-text-muted);">Apex Institutional &amp;
                                Inter-Ministerial Policy Desk</span>
                        </div>

                        <div class="mc-partner-card"
                            style="align-items: flex-start; text-align: left; padding: 1.25rem;">
                            <strong
                                style="color: var(--mc-dark); font-size: 0.95rem; display: block; margin-bottom: 0.25rem;">Directorate
                                of Technology Transfer &amp; Patents</strong>
                            <span
                                style="font-size: 0.85rem; color: var(--mc-green); font-weight: 700;">commercialization@shestco.gov.ng</span>
                            <span style="font-size: 0.78rem; color: var(--mc-text-muted);">NOTAP Licensing, Industry
                                Joint Ventures &amp; Pilot Off-Take</span>
                        </div>

                        <div class="mc-partner-card"
                            style="align-items: flex-start; text-align: left; padding: 1.25rem;">
                            <strong
                                style="color: var(--mc-dark); font-size: 0.95rem; display: block; margin-bottom: 0.25rem;">Directorate
                                of Research &amp; Residencies</strong>
                            <span
                                style="font-size: 0.85rem; color: var(--mc-green); font-weight: 700;">fellowships@shestco.gov.ng</span>
                            <span style="font-size: 0.78rem; color: var(--mc-text-muted);">Postdoctoral Fellowships,
                                NMR/HPC Time &amp; Lab Access</span>
                        </div>
                    </div>
                </div>

                <!-- Right Column: Interactive Dispatch Form Card -->
                <div class="mc-form-card reveal-on-scroll delay-100">
                    <h3 style="color: var(--mc-dark); font-size: 1.35rem; font-weight: 800; margin: 0 0 0.5rem 0;">
                        Direct Official Inquiry</h3>
                    <p style="font-size: 0.88rem; color: var(--mc-text-muted); margin: 0 0 1.5rem 0;">
                        Fields marked with <span style="color: #dc2626;">*</span> are mandatory for statutory dispatch
                        logging.
                    </p>

                    <form action="#" method="post" class="mc-form-grid">
                        <?php wp_nonce_field( 'shestco_contact_dispatch_nonce', 'contact_nonce' ); ?>

                        <div class="mc-input-group">
                            <label for="contact_name">Official / Full Name <span
                                    style="color: #dc2626;">*</span></label>
                            <input type="text" id="contact_name" name="contact_name" required
                                placeholder="Prof. / Dr. / Full Name">
                        </div>

                        <div class="mc-input-group">
                            <label for="contact_email">Corporate / Institutional Email <span
                                    style="color: #dc2626;">*</span></label>
                            <input type="email" id="contact_email" name="contact_email" required
                                placeholder="name@institution.gov.ng">
                        </div>

                        <div class="mc-input-group">
                            <label for="contact_phone">Official Telephone Number <span
                                    style="color: #dc2626;">*</span></label>
                            <input type="tel" id="contact_phone" name="contact_phone" required
                                placeholder="+234 800 000 0000">
                        </div>

                        <div class="mc-input-group">
                            <label for="contact_org">Institution / Organization Name</label>
                            <input type="text" id="contact_org" name="contact_org"
                                placeholder="University, Agency, or Enterprise">
                        </div>

                        <div class="mc-input-group mc-form-full">
                            <label for="contact_portfolio">Portfolio / Departmental Routing <span
                                    style="color: #dc2626;">*</span></label>
                            <select id="contact_portfolio" name="contact_portfolio" required>
                                <option value="Directorate of Research & Facilities">Directorate of Research &amp;
                                    Facilities (Lab Access)</option>
                                <option value="Technology Transfer & Patents (NOTAP)">Technology Transfer &amp; Patents
                                    (Commercial Licensing)</option>
                                <option value="Public Procurement & Tenders Desk">Public Procurement &amp; Tenders Desk
                                    (BPP Inquiries)</option>
                                <option value="Works, Services & ICT Operations">Works, Services &amp; ICT Operations
                                </option>
                                <option value="SERVICOM Grievance & Service Redress">SERVICOM Grievance &amp; Service
                                    Redress</option>
                                <option value="Office of the Director-General">Office of the Director-General / CEO
                                </option>
                            </select>
                        </div>

                        <div class="mc-input-group mc-form-full">
                            <label for="contact_message">Dispatch Details / Inquiry Scope <span
                                    style="color: #dc2626;">*</span></label>
                            <textarea id="contact_message" name="contact_message" rows="4" required
                                placeholder="Provide a concise summary of your official inquiry, facility request, or technical proposal..."></textarea>
                        </div>

                        <div class="mc-form-full"
                            style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; margin-top: 0.5rem;">
                            <span style="font-size: 0.75rem; color: var(--mc-text-muted);">🔒 Dispatched via encrypted
                                government SSL protocol.</span>
                            <button type="submit" class="mc-btn mc-btn-primary">
                                <span>Transmit Official Dispatch &rarr;</span>
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. DIRECTORATE REGISTRY DIRECTORY
         ========================================================================= -->
    <section id="directorate-contacts" class="mc-section mc-bg-parchment mc-border-top mc-border-bottom">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Institutional Registry</span>
                <h2 class="mc-section-title">Directorate Communication Desks</h2>
                <p class="mc-section-lead">
                    Direct communication lines for operational divisions, laboratory instrument booking, and corporate
                    administration.
                </p>
            </div>

            <div class="mc-centres-grid">

                <div class="mc-centre-card reveal-on-scroll">
                    <div class="mc-centre-icon-wrap">🧬</div>
                    <span class="mc-centre-code">BARC Directorate</span>
                    <h3 class="mc-centre-title">Biotechnology Centre</h3>
                    <p class="mc-centre-desc">Plant micropropagation booking, tissue culture demonstration orders, and
                        genomics sequencing requests.</p>
                    <div class="mc-pub-footer">
                        <a href="mailto:biotech@shestco.gov.ng" class="mc-btn-cite" style="text-decoration: none;">✉️
                            biotech@shestco.gov.ng</a>
                    </div>
                </div>

                <div class="mc-centre-card reveal-on-scroll delay-100">
                    <div class="mc-centre-icon-wrap">💻</div>
                    <span class="mc-centre-code">AMSARC Directorate</span>
                    <h3 class="mc-centre-title">Simulation Sciences</h3>
                    <p class="mc-centre-desc">HPC cluster compute allocations, CFD modeling consultations, and
                        cryptographic algorithm integration.</p>
                    <div class="mc-pub-footer">
                        <a href="mailto:simulation@shestco.gov.ng" class="mc-btn-cite" style="text-decoration: none;">✉️
                            simulation@shestco.gov.ng</a>
                    </div>
                </div>

                <div class="mc-centre-card reveal-on-scroll delay-200">
                    <div class="mc-centre-icon-wrap">🧪</div>
                    <span class="mc-centre-code">CARC Directorate</span>
                    <h3 class="mc-centre-title">Chemical Sciences</h3>
                    <p class="mc-centre-desc">High-field NMR spectrometer time, 500L pilot synthesis bookings, and resin
                        polymer testing.</p>
                    <div class="mc-pub-footer">
                        <a href="mailto:chemistry@shestco.gov.ng" class="mc-btn-cite" style="text-decoration: none;">✉️
                            chemistry@shestco.gov.ng</a>
                    </div>
                </div>

                <div class="mc-centre-card reveal-on-scroll delay-300">
                    <div class="mc-centre-icon-wrap">🔬</div>
                    <span class="mc-centre-code">PARC Directorate</span>
                    <h3 class="mc-centre-title">Physical Sciences</h3>
                    <p class="mc-centre-desc">Semiconductor thin-film characterization, solar simulator calibration, and
                        crystallography analysis.</p>
                    <div class="mc-pub-footer">
                        <a href="mailto:physics@shestco.gov.ng" class="mc-btn-cite" style="text-decoration: none;">✉️
                            physics@shestco.gov.ng</a>
                    </div>
                </div>

                <div class="mc-centre-card reveal-on-scroll delay-100" style="border-top-color: #ca8a04;">
                    <div class="mc-centre-icon-wrap">⚛️</div>
                    <span class="mc-centre-code" style="color: #ca8a04;">NTC Directorate</span>
                    <h3 class="mc-centre-title">Nuclear Technology</h3>
                    <p class="mc-centre-desc">Industrial gamma irradiation schedules, radiation dosimetry calibration,
                        and NDT industrial testing.</p>
                    <div class="mc-pub-footer">
                        <a href="mailto:nuclear@shestco.gov.ng" class="mc-btn-cite" style="text-decoration: none;">✉️
                            nuclear@shestco.gov.ng</a>
                    </div>
                </div>

                <div class="mc-centre-card reveal-on-scroll delay-200" style="border-top-color: #0284c7;">
                    <div class="mc-centre-icon-wrap">⚙️</div>
                    <span class="mc-centre-code" style="color: #0284c7;">ENGINEERING</span>
                    <h3 class="mc-centre-title">Precision Workshop &amp; ICT</h3>
                    <p class="mc-centre-desc">5-axis CNC mechanical fabrication, instrument calibration, enterprise
                        data, and solar microgrid utilities.</p>
                    <div class="mc-pub-footer">
                        <a href="mailto:works@shestco.gov.ng" class="mc-btn-cite" style="text-decoration: none;">✉️
                            works@shestco.gov.ng</a>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         4. CAMPUS PHYSICAL LOCATION, DIRECTIONS & MAP EMBED
         ========================================================================= -->
    <section id="campus-location" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Geographic Sanctuary</span>
                <h2 class="mc-section-title">2,000-Hectare Campus Coordinates</h2>
                <p class="mc-section-lead">
                    Strategically located along the major technology transit corridor in Sheda, Federal Capital
                    Territory, Abuja.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: 1.2fr 0.8fr; gap: 3rem; align-items: center;">
                <div class="mc-form-card" style="padding: 0; overflow: hidden; height: 380px;">
                    <iframe title="NISTCO Campus Map Location"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15769.754714656093!2d7.0018!3d8.8617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104e76c123456789%3A0xabcdef0123456789!2sSheda%20Science%20and%20Technology%20Complex!5e0!3m2!1sen!2sng!4v1700000000000!5m2!1sen!2sng"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="reveal-on-scroll delay-100">
                    <h3 style="color: var(--mc-dark); font-size: 1.25rem; font-weight: 800; margin: 0 0 1rem 0;">Visitor
                        Access &amp; Logistics</h3>
                    <ul class="inno-phase-deliverables"
                        style="border-top: none; padding-top: 0; font-size: 0.92rem; gap: 0.85rem;">
                        <li><strong>From Nnamdi Azikiwe International Airport:</strong> ~45 minutes via the Outer
                            Southern Expressway / Abuja-Lokoja Highway.</li>
                        <li><strong>From Abuja Central Business District:</strong> ~50 km southwest along the A2 highway
                            corridor.</li>
                        <li><strong>On-Campus Security Protocol:</strong> Visitors must present valid institutional
                            identification at the Main Gate Reception.</li>
                        <li><strong>Visiting Researcher Lodging:</strong> Dedicated on-campus residential guest suites
                            are available for TETFund grantees and doctoral fellows upon advance booking.</li>
                    </ul>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();