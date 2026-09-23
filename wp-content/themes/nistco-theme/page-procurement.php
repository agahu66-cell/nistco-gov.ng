``php
<?php
/**
 * Template Name: Procurement & BPP Compliance Desk
 * Description: Federal Bureau of Public Procurement statutory standards, vendor compliance, PPA 2007 guidelines, active tender bidding solicitations, and 3D compliance engine.
 * File: page-procurement.php
 *
 * @package NistcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();

// Query Active Public Tenders & Solicitations (Sorted by nearest closing deadline)
$tenders_query = new WP_Query( array(
    'post_type'      => 'procurement_tender',
    'post_status'    => 'publish',
    'posts_per_page' => 12,
    'meta_key'       => '_tender_deadline',
    'orderby'        => 'meta_value',
    'order'          => 'ASC',
) );


?>

<main class="site-main mc-homepage nistco-main">

    <!-- =========================================================================
         1. HERO SECTION: 3D STATUTORY PROCUREMENT SCALES & COMPLIANCE SHIELD
         ========================================================================= -->
    <section class="mc-hero-section mc-procurement-hero">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container">
            <div class="mc-hero-grid">

                <!-- Left Column: Procurement Mandate Header -->
                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">Procurement &amp; BPP Desk</span>
                    </nav>

                    <div class="mc-hero-badges">
                        <span class="mc-pill mc-pill-green">Public Procurement Act 2007</span>
                        <span class="mc-pill mc-pill-gold">BPP Statutory Portal</span>
                    </div>

                    <h1 class="mc-hero-title">
                        Bureau of Public Procurement (BPP) Solicitations Desk
                    </h1>

                    <p class="mc-hero-subtitle">
                        NISTCO conducts all procurement processes under the highest standards of competitive bidding,
                        transparency, and value-for-money in strict adherence to the Public Procurement Act 2007 and
                        Presidential Executive Order No. 5.
                    </p>

                    <div class="mc-hero-actions" style="margin-bottom: 2rem;">
                        <a href="#active-tenders" class="mc-btn mc-btn-primary">
                            <span>📋</span>
                            <span>View Active Solicitations</span>
                        </a>

                        <a href="#bidding-guidelines" class="mc-btn mc-btn-secondary">
                            <span>📜</span>
                            <span>Statutory Vendor Criteria</span>
                        </a>

                        <a href="#submission-protocol" class="mc-btn mc-btn-gold">
                            <span>🏛️</span>
                            <span>Bidding Protocol &rarr;</span>
                        </a>
                    </div>

                    <div class="about-nav-pill-group">
                        <span class="jump-label">Jump To:</span>
                        <a href="#active-tenders" class="about-nav-pill">📋 Active Tenders</a>
                        <a href="#bidding-guidelines" class="about-nav-pill">📜 Statutory Checklist</a>
                        <a href="#submission-protocol" class="about-nav-pill">🏛️ Submission Protocol</a>
                        <a href="#procurement-faq" class="about-nav-pill">❓ Vendor FAQs</a>
                    </div>
                </div>

                <!-- Right Column: Multi-Planar Active 3D Scales & Compliance Engine -->
                <div class="procure-3d-viewport">
                    <div class="procure-3d-stage">

                        <!-- Layer 1: Background Hexagonal Integrity Shield (Z: -35px) -->
                        <div class="procure-shield-wrap">
                            <svg class="procure-shield-svg" viewBox="0 0 320 320" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <defs>
                                    <linearGradient id="bppHexGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                        <stop offset="0%" stop-color="#fef08a" />
                                        <stop offset="50%" stop-color="#c59b27" />
                                        <stop offset="100%" stop-color="#713f12" />
                                    </linearGradient>
                                    <radialGradient id="bppGlowCore" cx="50%" cy="50%" r="50%">
                                        <stop offset="0%" stop-color="rgba(134,239,172,0.2)" />
                                        <stop offset="70%" stop-color="rgba(4,36,22,0.7)" />
                                        <stop offset="100%" stop-color="transparent" />
                                    </radialGradient>
                                </defs>
                                <polygon points="160,18 280,86 280,234 160,302 40,234 40,86" fill="url(#bppGlowCore)"
                                    stroke="url(#bppHexGrad)" stroke-width="2.5" />
                                <polygon points="160,36 262,96 262,224 160,284 58,224 58,96"
                                    stroke="rgba(134,239,172,0.35)" stroke-width="1.5" stroke-dasharray="6 5" />
                            </svg>
                        </div>

                        <!-- Layer 2: Counter-Rotating Audit Loops (Z: -10px) -->
                        <div class="procure-audit-rings">
                            <div class="audit-ring audit-ring-outer"></div>
                            <div class="audit-ring audit-ring-inner"></div>
                        </div>

                        <!-- Layer 3: Physical 3D Articulating Scales of Equity (Z: +30px) -->
                        <div class="procure-scales-3d">
                            <div class="scale-pillar"></div>
                            <div class="scale-base"></div>

                            <div class="scale-crossbeam">
                                <div class="scale-pan-assembly scale-pan-left">
                                    <div class="pan-string string-l"></div>
                                    <div class="pan-string string-r"></div>
                                    <div class="scale-pan-dish">
                                        <span class="pan-label">VALUE</span>
                                    </div>
                                </div>

                                <div class="scale-pan-assembly scale-pan-right">
                                    <div class="pan-string string-l"></div>
                                    <div class="pan-string string-r"></div>
                                    <div class="scale-pan-dish">
                                        <span class="pan-label">EQUITY</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Layer 4: Floating Central BPP Act Seal (Z: +65px) -->
                        <div class="procure-bpp-seal">
                            <div class="seal-glow"></div>
                            <div class="seal-core">
                                <span class="seal-icon">⚖️</span>
                                <span class="seal-text">BPP ACT</span>
                            </div>
                        </div>

                        <!-- Layer 5: Floating Governance Badges -->
                        <div class="procure-satellites">
                            <div class="procure-sat sat-1"><span>📜 PPA 2007</span></div>
                            <div class="procure-sat sat-2"><span>🔒 EO 5</span></div>
                            <div class="procure-sat sat-3"><span>✓ VALUE</span></div>
                        </div>

                    </div>
                </div>

            </div>
        </div>

        <!-- Docked Procurement Statutory Factlet Ribbon -->
        <div class="about-factlet-bar">
            <div class="container about-factlet-container">
                <div class="factlet-item">
                    <span class="factlet-kicker">Legislative Framework</span>
                    <strong class="factlet-value">Public Procurement Act (PPA 2007)</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">National Preference</span>
                    <strong class="factlet-value">Executive Order No. 5 (Local Content)</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Procuring Entity</span>
                    <strong class="factlet-value">Tenders Board (NISTCO / SHESTCO)</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Submission Format</span>
                    <strong class="factlet-value">Tamper-Evident Physical &amp; SBD PDF</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. LIVE PUBLIC TENDERS & SOLICITATIONS FEED
         ========================================================================= -->
    <section id="active-tenders" class="mc-section mc-bg-white" style="position: relative; z-index: 10;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <!-- Header with fully clickable modal trigger button -->
            <div class="mc-pubs-header" style="position: relative; z-index: 15;">
                <div>
                    <span class="mc-section-kicker">Official Invitations to Tender (ITT)</span>
                    <h2 class="mc-section-title">Current Solicitations &amp; Expressions of Interest</h2>
                    <p class="mc-section-lead" style="margin-top: 0.25rem;">
                        Review open categories for capital projects, laboratory instrumentation supply, precision
                        tooling, and statutory consulting services.
                    </p>
                </div>
                <div>
                    <button type="button" class="mc-btn mc-btn-primary" id="btn-inquire-procurement"
                        onclick="openProcurementInquiryModal(event);"
                        style="cursor: pointer; position: relative; z-index: 20; pointer-events: auto !important;">
                        <span>✉️</span>
                        <span>Inquire with Procurement Desk</span>
                    </button>
                </div>
            </div>

            <?php if ( $tenders_query->have_posts() ) : ?>
            <div class="mc-pubs-grid">
                <?php while ( $tenders_query->have_posts() ) : $tenders_query->the_post(); 
                    $tid         = get_the_ID();
                    $ref_no      = get_post_meta( $tid, '_tender_ref_no', true ) ?: 'NISTCO/PROC/' . $tid;
                    $category    = get_post_meta( $tid, '_tender_category', true ) ?: 'Works & Technical Services';
                    $deadline    = get_post_meta( $tid, '_tender_deadline', true );
                    $doc_url     = get_post_meta( $tid, '_tender_doc_url', true );
                    $is_open     = $deadline ? ( strtotime( $deadline ) >= current_time( 'timestamp' ) ) : true;
                ?>
                <article class="mc-pub-card reveal-on-scroll <?php echo ! $is_open ? 'tender-expired' : ''; ?>">
                    <div class="mc-pub-pills">
                        <?php if ( $is_open ) : ?>
                        <span class="mc-badge-danger">Active BPP Tender</span>
                        <?php else : ?>
                        <span class="mc-pub-year" style="background: #fee2e2; color: #dc2626;">Closed</span>
                        <?php endif; ?>
                        <span class="mc-pub-year"
                            style="font-family: monospace;">[<?php echo esc_html( $ref_no ); ?>]</span>
                        <span class="mc-pub-centre"><?php echo esc_html( $category ); ?></span>
                    </div>

                    <h3 class="mc-pub-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>

                    <p class="mc-pub-excerpt">
                        <?php echo wp_trim_words( get_the_excerpt(), 22 ); ?>
                    </p>

                    <?php if ( $deadline ) : ?>
                    <div
                        style="background: var(--mc-parchment); border: 1px solid var(--mc-border); border-radius: 6px; padding: 0.65rem 0.85rem; margin-bottom: 1.25rem; font-size: 0.82rem; display: flex; justify-content: space-between; align-items: center;">
                        <span style="color: var(--mc-text-muted); font-weight: 600;">Closing Deadline:</span>
                        <strong style="color: <?php echo $is_open ? '#b91c1c' : '#64748b'; ?>;">
                            ⏳ <?php echo esc_html( date( 'M j, Y - g:i A', strtotime( $deadline ) ) ); ?>
                        </strong>
                    </div>
                    <?php endif; ?>

                    <div class="mc-pub-footer">
                        <?php if ( ! empty( $doc_url ) ) : ?>
                        <button type="button" class="btn-pdf-preview mc-btn-preview"
                            data-pdf-url="<?php echo esc_url( $doc_url ); ?>"
                            data-pdf-title="<?php echo esc_attr( '[' . $ref_no . '] ' . get_the_title() ); ?>">
                            👁️ Preview SBD
                        </button>
                        <?php endif; ?>

                        <a href="<?php the_permalink(); ?>" class="mc-btn-cite"
                            style="text-decoration: none !important;">
                            Full Specifications &rarr;
                        </a>
                    </div>
                </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <?php else : ?>
            <div class="inno-no-results-card">
                <span class="no-results-icon">📋</span>
                <h3>No Public Tenders Currently Active</h3>
                <p>New tender notices for goods, works, and consultancy services will be published here in accordance
                    with federal appropriation schedules.</p>
            </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- =========================================================================
         3. MANDATORY STATUTORY BIDDER ELIGIBILITY CHECKLIST
         ========================================================================= -->
    <section id="bidding-guidelines" class="mc-section mc-bg-parchment mc-border-top mc-border-bottom">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Statutory Qualification</span>
                <h2 class="mc-section-title">Mandatory Eligibility Requirements for Bidders</h2>
                <p class="mc-section-lead">
                    In compliance with Section 16(6) of the Public Procurement Act 2007, all prospective contractors,
                    suppliers, and consultants must submit valid copies of the following statutory documents.
                </p>
            </div>

            <div class="inno-trl-grid">

                <div class="inno-trl-phase-card reveal-on-scroll">
                    <div class="inno-trl-badge phase-research">Category A</div>
                    <span class="inno-phase-kicker">Corporate Legal Identity</span>
                    <h3 class="inno-phase-title">CAC &amp; Tax Compliance</h3>
                    <ul class="inno-phase-deliverables">
                        <li>Certificate of Incorporation with the Corporate Affairs Commission (CAC) including Form CAC
                            1.1 / Status Report.</li>
                        <li>Valid Federal Inland Revenue Service (FIRS) Tax Clearance Certificate (TCC) for the last 3
                            preceding years.</li>
                        <li>Company Audited Accounts for the last 3 consecutive financial years.</li>
                    </ul>
                </div>

                <div class="inno-trl-phase-card reveal-on-scroll delay-100" style="border-top-color: var(--mc-gold);">
                    <div class="inno-trl-badge phase-pilot">Category B</div>
                    <span class="inno-phase-kicker">Statutory Social Contributions</span>
                    <h3 class="inno-phase-title">Pensions &amp; Social Insurance</h3>
                    <ul class="inno-phase-deliverables">
                        <li>Current National Pension Commission (PENCOM) Compliance Certificate.</li>
                        <li>Current Industrial Training Fund (ITF) Compliance Certificate.</li>
                        <li>Current Nigeria Social Insurance Trust Fund (NSITF) Compliance Certificate.</li>
                    </ul>
                </div>

                <div class="inno-trl-phase-card reveal-on-scroll delay-200" style="border-top-color: #0284c7;">
                    <div class="inno-trl-badge phase-market">Category C</div>
                    <span class="inno-phase-kicker">BPP Database Registration</span>
                    <h3 class="inno-phase-title">National Database of Contractors</h3>
                    <ul class="inno-phase-deliverables">
                        <li>Evidence of Registration on the National Database of Federal Contractors, Consultants &amp;
                            Service Providers (BPP IRR Certificate).</li>
                        <li>Sworn Affidavit confirming company solvency and non-involvement of any NISTCO staff in
                            bidding.</li>
                        <li>Verifiable letters of previous award and completion for at least 3 similar projects.</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         4. FOUR-STAGE BID SUBMISSION & EVALUATION PROTOCOL
         ========================================================================= -->
    <section id="submission-protocol" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Operational Workflow</span>
                <h2 class="mc-section-title">Step-by-Step Bid Submission &amp; Opening Procedure</h2>
                <p class="mc-section-lead">
                    Clear instructions on packaging, sealing, and attending public bid-opening sessions at the NISTCO
                    Complex.
                </p>
            </div>

            <div class="inno-steps-grid">
                <div class="inno-step-item reveal-on-scroll">
                    <div class="step-num">01</div>
                    <h3 class="step-title">Collection of SBD</h3>
                    <p class="step-desc">Download the Standard Bidding Document (SBD) from the portal or collect the
                        physical dossier from the Procurement Directorate upon proof of statutory tender fee payment.
                    </p>
                </div>

                <div class="inno-step-item reveal-on-scroll delay-100">
                    <div class="step-num">02</div>
                    <h3 class="step-title">Two-Envelope Packaging</h3>
                    <p class="step-desc">Package the "Technical Bid" and "Financial Bid" in two separate, tamper-evident
                        wax-sealed envelopes, enclosed in an outer master envelope with the project reference clearly
                        marked.</p>
                </div>

                <div class="inno-step-item reveal-on-scroll delay-200">
                    <div class="step-num">03</div>
                    <h3 class="step-title">Registry Bid Deposit</h3>
                    <p class="step-desc">Deposit the sealed package into the official Tenders Box situated at the
                        Procurement Directorate, Ground Floor, Works &amp; Services Building, Sheda Complex, before the
                        deadline.</p>
                </div>

                <div class="inno-step-item reveal-on-scroll delay-300">
                    <div class="step-num">04</div>
                    <h3 class="step-title">Public Opening Session</h3>
                    <p class="step-desc">Attend the public opening session held immediately following the deadline in
                        the Complex Main Auditorium in the presence of civil society observers and bidders.</p>
                </div>
            </div>

            <!-- Tenders Desk Callout Box -->
            <div class="inno-dispatch-box reveal-on-scroll" style="margin-top: 3.5rem;">
                <div class="dispatch-left">
                    <span class="dispatch-kicker">Tenders Board Secretariat</span>
                    <h3 class="dispatch-title">Questions Regarding Tender Specifications or Bidding Criteria?</h3>
                    <p class="dispatch-desc">
                        Formal requests for clarification regarding any active solicitation should be addressed in
                        writing to the Head of Procurement or transmitted electronically no later than 7 working days
                        prior to bid closure.
                    </p>
                </div>
                <div class="dispatch-right">
                    <button type="button" class="mc-btn mc-btn-primary" id="btn-inquire-procurement-alt"
                        onclick="openProcurementInquiryModal(event);"
                        style="font-size: 0.95rem; padding: 0.85rem 1.75rem; cursor: pointer; position: relative; z-index: 10; pointer-events: auto !important;">
                        <span>✉️</span>
                        <span>Inquire with Procurement Desk</span>
                    </button>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         5. VENDOR FREQUENTLY ASKED QUESTIONS (FAQS)
         ========================================================================= -->
    <section id="procurement-faq" class="mc-section mc-bg-parchment mc-border-top">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Clarifications Desk</span>
                <h2 class="mc-section-title">Frequently Asked Questions</h2>
                <p class="mc-section-lead">
                    Direct guidance on statutory bid submissions, Treasury Single Account (TSA) tender fees, and
                    technical compliance.
                </p>
            </div>

            <div style="max-width: 860px; margin: 0 auto; display: flex; flex-direction: column; gap: 1rem;">

                <details class="reveal-on-scroll"
                    style="background: #ffffff; border: 1px solid var(--mc-border); border-radius: 8px; padding: 1.25rem 1.5rem; cursor: pointer;">
                    <summary
                        style="font-weight: 800; color: var(--mc-dark); font-size: 1.05rem; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        <span>How are tender document processing fees paid?</span>
                        <span style="color: var(--mc-green); font-size: 1.25rem;">+</span>
                    </summary>
                    <p
                        style="margin: 0.85rem 0 0 0; color: var(--mc-text-muted); font-size: 0.92rem; line-height: 1.65;">
                        All statutory non-refundable tender fees are payable through the Federal Government Treasury
                        Single Account (TSA) platform on Remita in favor of <strong>Nigeria Innovation, Science &amp;
                            Technology Complex (NISTCO)</strong>. Attach your verified Remita Retrieval Reference (RRR)
                        receipt to your submission packet.
                    </p>
                </details>

                <details class="reveal-on-scroll delay-100"
                    style="background: #ffffff; border: 1px solid var(--mc-border); border-radius: 8px; padding: 1.25rem 1.5rem; cursor: pointer;">
                    <summary
                        style="font-weight: 800; color: var(--mc-dark); font-size: 1.05rem; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        <span>Can foreign entities participate in NISTCO solicitations?</span>
                        <span style="color: var(--mc-green); font-size: 1.25rem;">+</span>
                    </summary>
                    <p
                        style="margin: 0.85rem 0 0 0; color: var(--mc-text-muted); font-size: 0.92rem; line-height: 1.65;">
                        Yes, foreign firms can participate subject to the provisions of Presidential Executive Order No.
                        5. Priority is granted to indigenous manufacturing capacity, joint ventures with certified
                        Nigerian technology partners, and firms demonstrating substantial domestic technology transfer.
                    </p>
                </details>

                <details class="reveal-on-scroll delay-200"
                    style="background: #ffffff; border: 1px solid var(--mc-border); border-radius: 8px; padding: 1.25rem 1.5rem; cursor: pointer;">
                    <summary
                        style="font-weight: 800; color: var(--mc-dark); font-size: 1.05rem; list-style: none; display: flex; justify-content: space-between; align-items: center;">
                        <span>What causes immediate disqualification of a bid?</span>
                        <span style="color: var(--mc-green); font-size: 1.25rem;">+</span>
                    </summary>
                    <p
                        style="margin: 0.85rem 0 0 0; color: var(--mc-text-muted); font-size: 0.92rem; line-height: 1.65;">
                        Submissions made after the strict deadline, unsealed or improperly labeled envelopes, absence of
                        valid FIRS Tax Clearance or BPP IRR certificates, and inclusion of financial bid information
                        within the technical proposal packet result in automatic disqualification at the public
                        bid-opening stage.
                    </p>
                </details>

            </div>

        </div>
    </section>

</main>

<!-- =========================================================================
     MODAL 1: BPP STATUTORY PROCUREMENT INQUIRY & CLARIFICATIONS MODAL
     ========================================================================= -->
<div id="procurement-inquiry-modal" class="inno-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true"
    onclick="if(event.target === this) closeProcurementInquiryModal(event);"
    style="display: none; visibility: hidden; pointer-events: none; opacity: 0;">

    <div class="inno-modal-container"
        style="max-width: 680px; position: relative; z-index: 1000000; pointer-events: auto;">

        <div class="inno-modal-header">
            <div>
                <span class="inno-modal-badge">BPP Section 16(6) Inquiry Protocol</span>
                <h3 class="inno-modal-title">Formal Tender Clarification Desk</h3>
                <span class="inno-modal-ref">Direct Transmittal to Tenders Board Secretariat</span>
            </div>
            <button type="button" class="inno-modal-btn-close" onclick="closeProcurementInquiryModal(event);"
                aria-label="Close modal">&times;</button>
        </div>

        <form id="procurement-inquiry-form" class="inno-modal-form" onsubmit="return handleProcurementSubmit(event);">
            <div class="inno-form-grid">
                <div class="inno-form-group">
                    <label for="inq_vendor_name">Contact Representative <span class="req">*</span></label>
                    <input type="text" id="inq_vendor_name" required placeholder="e.g. Engr. Mustapha Bello">
                </div>

                <div class="inno-form-group">
                    <label for="inq_company">Registered Entity Name <span class="req">*</span></label>
                    <input type="text" id="inq_company" required placeholder="e.g. Apex Scientific Labs Ltd">
                </div>

                <div class="inno-form-group">
                    <label for="inq_email">Corporate Email Address <span class="req">*</span></label>
                    <input type="email" id="inq_email" required placeholder="contact@company.com.ng">
                </div>

                <div class="inno-form-group">
                    <label for="inq_phone">Official Telephone <span class="req">*</span></label>
                    <input type="tel" id="inq_phone" required placeholder="+234 800 000 0000">
                </div>

                <div class="inno-form-group inno-form-full">
                    <label for="inq_tender_ref">Tender Reference Number / Lot Details <span class="req">*</span></label>
                    <input type="text" id="inq_tender_ref" required placeholder="e.g. NISTCO/PROC/2026/LOT-2B">
                </div>

                <div class="inno-form-group inno-form-full">
                    <label for="inq_message">Specific Clause Clarification or Inquiry <span class="req">*</span></label>
                    <textarea id="inq_message" rows="4" required
                        placeholder="State your exact query regarding Standard Bidding Document specifications, delivery schedule, or bill of quantities..."></textarea>
                </div>
            </div>

            <div class="inno-modal-footer">
                <span style="font-size: 0.78rem; color: var(--mc-text-muted);">
                    Transmissions are archived in accordance with BPP transparency protocols.
                </span>
                <div style="display: flex; gap: 0.65rem;">
                    <button type="submit" class="mc-btn mc-btn-primary"
                        style="font-size: 0.88rem; padding: 0.6rem 1.25rem;">
                        <span>✉️</span>
                        <span>Transmit Clarification</span>
                    </button>
                </div>
            </div>
            <div id="inquiry-feedback" style="display:none;" class="inno-form-feedback"></div>
        </form>

    </div>
</div>

<!-- =========================================================================
     MODAL 2: SBD PDF VIEWER MODAL CONTAINER
     ========================================================================= -->
<div id="pdf-viewer-modal" class="pdf-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true"
    onclick="if(event.target === this) closePdfModal(event);"
    style="display: none; visibility: hidden; pointer-events: none; opacity: 0;">

    <div class="pdf-modal-container" style="position: relative; z-index: 1000000; pointer-events: auto;">
        <div class="pdf-modal-header">
            <div class="pdf-modal-title-wrap">
                <span class="pdf-modal-badge">Standard Bidding Document Preview</span>
                <h3 id="pdf-modal-title" class="pdf-modal-title">Tender Document Preview</h3>
            </div>
            <div class="pdf-modal-actions">
                <a id="pdf-modal-newtab-btn" href="#" target="_blank" rel="noopener noreferrer" class="pdf-modal-btn"
                    title="Open in New Tab">↗ Open Tab</a>
                <a id="pdf-modal-download-btn" href="#" download class="pdf-modal-btn pdf-modal-btn-download"
                    title="Download SBD">📥 Download</a>
                <button type="button" id="pdf-modal-close-btn" class="pdf-modal-btn-close"
                    onclick="closePdfModal(event);" aria-label="Close Preview">&times;</button>
            </div>
        </div>
        <div class="pdf-modal-body">
            <div id="pdf-modal-loader" class="pdf-modal-loader">
                <div class="pdf-modal-spinner"></div>
                <p>Loading Standard Bidding Document from BPP repository...</p>
            </div>
            <iframe id="pdf-modal-iframe" class="pdf-modal-iframe" src="" frameborder="0"
                title="BPP Document Viewer"></iframe>
        </div>
    </div>
</div>

<!-- =========================================================================
     INLINE MODAL CONTROLLER (ZERO JQUERY DEPENDENCY - PURE VANILLA JS)
     ========================================================================= -->
<script>
// Open Procurement Inquiry Modal
function openProcurementInquiryModal(e) {
    if (e) {
        e.preventDefault();
        e.stopPropagation();
    }
    var modal = document.getElementById('procurement-inquiry-modal');
    if (modal) {
        modal.style.setProperty('display', 'flex', 'important');
        modal.style.setProperty('visibility', 'visible', 'important');
        modal.style.setProperty('pointer-events', 'auto', 'important');
        modal.style.setProperty('opacity', '1', 'important');
        modal.classList.add('is-active');
        document.body.style.overflow = 'hidden';
    }
}

// Close Procurement Inquiry Modal
function closeProcurementInquiryModal(e) {
    if (e) {
        e.preventDefault();
        e.stopPropagation();
    }
    var modal = document.getElementById('procurement-inquiry-modal');
    if (modal) {
        modal.style.setProperty('display', 'none', 'important');
        modal.style.setProperty('visibility', 'hidden', 'important');
        modal.style.setProperty('pointer-events', 'none', 'important');
        modal.style.setProperty('opacity', '0', 'important');
        modal.classList.remove('is-active');
        document.body.style.overflow = '';
    }
}

// Open SBD PDF Viewer Modal
function openPdfModal(url, title) {
    var modal = document.getElementById('pdf-viewer-modal');
    var iframe = document.getElementById('pdf-modal-iframe');
    var loader = document.getElementById('pdf-modal-loader');
    var titleElem = document.getElementById('pdf-modal-title');
    var newTabBtn = document.getElementById('pdf-modal-newtab-btn');
    var downloadBtn = document.getElementById('pdf-modal-download-btn');

    if (!modal || !iframe || !url) return;

    if (titleElem) titleElem.textContent = title || "Tender Document Preview";
    if (newTabBtn) newTabBtn.href = url;
    if (downloadBtn) downloadBtn.href = url;

    if (loader) loader.style.display = "flex";
    iframe.src = url;

    iframe.onload = function() {
        if (loader) loader.style.display = "none";
    };

    modal.style.setProperty('display', 'flex', 'important');
    modal.style.setProperty('visibility', 'visible', 'important');
    modal.style.setProperty('pointer-events', 'auto', 'important');
    modal.style.setProperty('opacity', '1', 'important');
    modal.classList.add('is-active');
    document.body.style.overflow = 'hidden';
}

// Close SBD PDF Viewer Modal
function closePdfModal(e) {
    if (e) {
        e.preventDefault();
        e.stopPropagation();
    }
    var modal = document.getElementById('pdf-viewer-modal');
    var iframe = document.getElementById('pdf-modal-iframe');
    if (modal) {
        modal.style.setProperty('display', 'none', 'important');
        modal.style.setProperty('visibility', 'hidden', 'important');
        modal.style.setProperty('pointer-events', 'none', 'important');
        modal.style.setProperty('opacity', '0', 'important');
        modal.classList.remove('is-active');
        if (iframe) iframe.src = "";
        document.body.style.overflow = '';
    }
}

// Handle Form Submission
function handleProcurementSubmit(e) {
    e.preventDefault();
    var vendor = document.getElementById('inq_vendor_name').value;
    var company = document.getElementById('inq_company').value;
    var email = document.getElementById('inq_email').value;
    var phone = document.getElementById('inq_phone').value;
    var ref = document.getElementById('inq_tender_ref').value;
    var msg = document.getElementById('inq_message').value;

    var subject = encodeURIComponent("BPP Clarification Request: " + ref + " - " + company);
    var body = encodeURIComponent(
        "FORMAL PROCUREMENT CLARIFICATION REQUEST\n\n" +
        "Tender Reference: " + ref + "\n" +
        "Entity Name: " + company + "\n" +
        "Representative: " + vendor + "\n" +
        "Contact Email: " + email + "\n" +
        "Contact Phone: " + phone + "\n\n" +
        "CLARIFICATION DETAILS:\n" + msg + "\n\n" +
        "Transmitted via NISTCO Procurement Portal."
    );

    // Launch default email client
    window.location.href = "mailto:procurement@nistco.gov.ng?subject=" + subject + "&body=" + body;

    var feedback = document.getElementById('inquiry-feedback');
    if (feedback) {
        feedback.className = "inno-form-feedback success";
        feedback.style.display = "block";
        feedback.innerHTML =
            "✓ Clarification dispatch generated! Your default mail client has opened for transmission to the Tenders Board.";
    }

    setTimeout(function() {
        closeProcurementInquiryModal();
    }, 2800);
    return false;
}

// Global Event Listeners (Keyboard + PDF Preview)
document.addEventListener('DOMContentLoaded', function() {
    // SBD Preview Buttons
    var previewBtns = document.querySelectorAll('.btn-pdf-preview');
    previewBtns.forEach(function(btn) {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            var url = this.getAttribute('data-pdf-url');
            var title = this.getAttribute('data-pdf-title');
            openPdfModal(url, title);
        });
    });

    // Escape Key Listener
    document.addEventListener('keydown', function(e) {
        if (e.key === "Escape") {
            closeProcurementInquiryModal();
            closePdfModal();
        }
    });

});
</script>



<?php
get_footer();