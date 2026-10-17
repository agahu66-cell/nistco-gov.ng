<?php
/**
 * Template Name: Procurement & Tenders Portal
 * Description: Federal procurement portal compliant with the Public Procurement Act (PPA 2007) and BPP directives.
 *
 * @package NASTCO
 */

get_header();

$tenders = [
    [
        'tender_ref'   => 'NASTCO/PROC/2026/W-004',
        'type'         => 'Invitation to Tender (ITT)',
        'category'     => 'Works',
        'centre'       => 'parc',
        'centre_name'  => 'PARC (Physics)',
        'title'        => 'Engineering, Procurement, and Construction of 500kW Dual-Axis Solar PV Field Validation Array',
        'deadline_iso' => '2026-11-16T12:00:00',
        'deadline_txt' => '16 Nov 2026, 12:00 PM WAT',
        'status'       => 'Active Bid Window',
        'bpp_lot'      => 'Lot Works-01',
        'budget_class' => 'Category A - Capital Appropriation',
        'scope'        => 'Civil groundwork, foundation engineering, mounting structures, and sub-station tie-in for high-efficiency bifacial perovskite-silicon field test infrastructure.'
    ],
    [
        'tender_ref'   => 'NASTCO/PROC/2026/G-012',
        'type'         => 'Invitation to Tender (ITT)',
        'category'     => 'Goods',
        'centre'       => 'aepc',
        'centre_name'  => 'AEPC (Prototype)',
        'title'        => 'Supply and Installation of 5-Axis Simultaneous CNC Machining Centre and Tooling Spindles',
        'deadline_iso' => '2026-11-09T12:00:00',
        'deadline_txt' => '09 Nov 2026, 12:00 PM WAT',
        'status'       => 'Active Bid Window',
        'bpp_lot'      => 'Lot Goods-03',
        'budget_class' => 'Category A - Capital Specialized Equipment',
        'scope'        => 'Turnkey delivery, leveling, laser vibration calibration, and operator commissioning of high-torque milling platforms for rapid prototyping.'
    ],
    [
        'tender_ref'   => 'NASTCO/PROC/2026/G-015',
        'type'         => 'Request for Quotation (RFQ)',
        'category'     => 'Goods',
        'centre'       => 'carc',
        'centre_name'  => 'CARC (Chemistry)',
        'title'        => 'Procurement of High-Resolution Gas Chromatography-Mass Spectrometry (GC-MS) System',
        'deadline_iso' => '2026-10-30T14:00:00',
        'deadline_txt' => '30 Oct 2026, 02:00 PM WAT',
        'status'       => 'Active Bid Window',
        'bpp_lot'      => 'Lot Goods-07',
        'budget_class' => 'Category B - Laboratory Diagnostics',
        'scope'        => 'Analytical instrument package complete with auto-sampler, chemical ionization chambers, and certified petrochemical reference standards.'
    ],
    [
        'tender_ref'   => 'NASTCO/PROC/2026/C-002',
        'type'         => 'Expression of Interest (EOI)',
        'category'     => 'Consulting',
        'centre'       => 'amsarc',
        'centre_name'  => 'AMSARC (Applied Math)',
        'title'        => 'Consultancy Services for Tier-3 High-Performance Computing (HPC) Architecture & Cluster Clustering',
        'deadline_iso' => '2026-11-02T12:00:00',
        'deadline_txt' => '02 Nov 2026, 12:00 PM WAT',
        'status'       => 'Active Bid Window',
        'bpp_lot'      => 'Lot Cons-01',
        'budget_class' => 'Category C - Specialized Technical Services',
        'scope'        => 'Enterprise engineering review for thermal load management, InfiniBand topology design, and distributed MPI clustering software stack.'
    ],
    [
        'tender_ref'   => 'NASTCO/PROC/2026/W-001',
        'type'         => 'Invitation to Tender (ITT)',
        'category'     => 'Works',
        'centre'       => 'ntc',
        'centre_name'  => 'NTC (Nuclear)',
        'title'        => 'Retrofit and Radiological Shielding Reinforcement for SSDL Secondary Standard Laboratories',
        'deadline_iso' => '2026-10-05T12:00:00',
        'deadline_txt' => '05 Oct 2026 (Closed)',
        'status'       => 'Under Technical Evaluation',
        'bpp_lot'      => 'Lot Works-02',
        'budget_class' => 'Statutory Facility Upgrade',
        'scope'        => 'High-density barite concrete reinforcement, certified lead shielding doors, and interlocked radiological safety access systems conforming to IAEA specs.'
    ],
    [
        'tender_ref'   => 'NASTCO/PROC/2026/G-001',
        'type'         => 'Direct Contract Award',
        'category'     => 'Goods',
        'centre'       => 'barc',
        'centre_name'  => 'BARC (Biotech)',
        'title'        => 'Supply of Bio-Fermentation Pilot Vessels (500L/1000L) with Automated DO/pH Regulators',
        'deadline_iso' => '2026-09-15T12:00:00',
        'deadline_txt' => '15 Sep 2026 (Awarded)',
        'status'       => 'Contract Awarded',
        'bpp_lot'      => 'Lot Goods-01',
        'budget_class' => 'Executed Statutory Budget',
        'scope'        => 'Contract awarded following BPP Certificate of "No Objection" to Indorama Biotech Engineering Consortium (Award Sum: ₦142,500,000.00).'
    ],
];
?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/ventures-engine.css' ); ?>">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/procurement.css' ); ?>">

<main class="ventures-dashboard-main">
    <header class="proc-hero">
        <div class="ventures-container">
            <span class="proc-gold-badge-3d">
                <span>⚖️</span> Public Procurement Act (PPA 2007) • BPP Registered
            </span>
            <h1 class="ventures-title">Procurement, Tenders & Contract Registry</h1>
            <p class="ventures-subtitle">
                Official statutory repository for Federal Government capital appropriations, specialized laboratory tenders, research works, and public contract disclosures across NASTCO and its six research centres.
            </p>

            <!-- 3D BPP Compliance Standards HUD -->
            <div class="bpp-compliance-strip-3d">
                <div class="compliance-item">
                    <span class="compliance-label">Procuring Entity</span>
                    <span class="compliance-val">NASTCO Headquarters</span>
                    <span class="compliance-desc">Fed. Min. of Innovation, Science & Tech</span>
                </div>
                <div class="compliance-item">
                    <span class="compliance-label">Statutory Regulator</span>
                    <span class="compliance-val">Bureau of Public Procurement</span>
                    <span class="compliance-desc">Federal Republic of Nigeria</span>
                </div>
                <div class="compliance-item">
                    <span class="compliance-label">Submission Protocol</span>
                    <span class="compliance-val">Electronic & Double Envelope</span>
                    <span class="compliance-desc">Separate Technical & Financial Bids</span>
                </div>
                <div class="compliance-item">
                    <span class="compliance-label">Secretariat Location</span>
                    <span class="compliance-val">Tenders Boardroom</span>
                    <span class="compliance-desc">Complex Secretariat, FCT Abuja</span>
                </div>
            </div>

            <!-- Centre Filter Pills -->
            <div class="filter-pills-cluster" style="margin-top: 2.5rem;">
                <button class="filter-pill active" onclick="filterTenders('all')">All Opportunities</button>
                <button class="filter-pill" onclick="filterTenders('parc')">PARC (Physics)</button>
                <button class="filter-pill" onclick="filterTenders('aepc')">AEPC (Prototype)</button>
                <button class="filter-pill" onclick="filterTenders('carc')">CARC (Chemistry)</button>
                <button class="filter-pill" onclick="filterTenders('amsarc')">AMSARC (Applied Math)</button>
                <button class="filter-pill" onclick="filterTenders('barc')">BARC (Biotech)</button>
                <button class="filter-pill" onclick="filterTenders('ntc')">NTC (Nuclear)</button>
            </div>
        </div>
    </header>

    <div class="ventures-container">
        <!-- Tender Cards Stream -->
        <div class="tender-grid" id="tendersGrid">
            <?php foreach ( $tenders as $item ) : ?>
                <?php
                    $cat_class = 'cat-goods';
                    if ( $item['category'] === 'Works' ) $cat_class = 'cat-works';
                    if ( $item['category'] === 'Consulting' ) $cat_class = 'cat-consulting';
                ?>
                <article class="tender-card-3d" data-centre="<?php echo esc_attr( $item['centre'] ); ?>">
                    <div>
                        <div style="display: flex; justify-content: space-between; align-items: flex-start; gap: 1rem; margin-bottom: 1rem;">
                            <div>
                                <span class="tender-category-pill <?php echo esc_attr( $cat_class ); ?>">
                                    <?php echo esc_html( $item['category'] ); ?>
                                </span>
                                <span class="centre-tag <?php echo esc_attr( $item['centre'] ); ?>" style="margin-left: 0.35rem;">
                                    <?php echo esc_html( $item['centre_name'] ); ?>
                                </span>
                            </div>
                            <span class="centre-tag" style="background: rgba(212, 175, 55, 0.15); color: var(--proc-gold); border: 1px solid var(--proc-gold);">
                                <?php echo esc_html( $item['status'] ); ?>
                            </span>
                        </div>

                        <div style="font-family: ui-monospace, monospace; font-size: 0.78rem; color: var(--proc-gold); font-weight: 800;">
                            <?php echo esc_html( $item['tender_ref'] ); ?> • <?php echo esc_html( $item['bpp_lot'] ); ?>
                        </div>

                        <h2 style="font-size: 1.22rem; font-weight: 900; color: #ffffff; line-height: 1.4; margin: 0.75rem 0;">
                            <?php echo esc_html( $item['title'] ); ?>
                        </h2>
                        <p style="font-size: 0.86rem; color: #94a3b8; line-height: 1.6; margin-bottom: 1.25rem;">
                            <?php echo esc_html( $item['scope'] ); ?>
                        </p>
                    </div>

                    <div>
                        <!-- Live Ticking Countdown Clock Component -->
                        <div class="live-countdown-hud">
                            <span class="countdown-label">
                                <span class="pulse-dot"></span>
                                Live Closing:
                            </span>
                            <span class="live-timer-digits" data-deadline="<?php echo esc_attr( $item['deadline_iso'] ); ?>">
                                Calculating...
                            </span>
                        </div>

                        <div style="background: rgba(0, 0, 0, 0.35); border: 1px solid rgba(255, 255, 255, 0.06); border-radius: 8px; padding: 0.9rem; font-size: 0.8rem; display: flex; flex-direction: column; gap: 0.5rem;">
                            <div style="display: flex; justify-content: space-between;">
                                <span style="color: #64748b;">Statutory Appropriation:</span>
                                <strong style="color: #cbd5e1;"><?php echo esc_html( $item['budget_class'] ); ?></strong>
                            </div>
                            <div style="display: flex; justify-content: space-between;">
                                <span style="color: #64748b;">Deadline:</span>
                                <strong style="color: #ffffff; font-family: ui-monospace, monospace;"><?php echo esc_html( $item['deadline_txt'] ); ?></strong>
                            </div>
                        </div>

                        <?php if ( $item['status'] === 'Active Bid Window' ) : ?>
                            <div style="display: grid; grid-template-columns: 1fr 1.3fr; gap: 0.75rem; margin-top: 1.25rem;">
                                <a href="#eligibility" class="btn-tender-docs-3d">
                                    <span>Download RFP</span>
                                </a>
                                <button type="button" 
                                        class="btn-tender-bid-3d btn-open-bid-modal"
                                        data-tender-ref="<?php echo esc_attr( $item['tender_ref'] ); ?>"
                                        data-tender-lot="<?php echo esc_attr( $item['bpp_lot'] ); ?>"
                                        data-tender-title="<?php echo esc_attr( $item['title'] ); ?>">
                                    <span>Submit Bid Dossier</span>
                                    <svg width="12" height="12" viewBox="0 0 12 12" fill="none"><path d="M1 11L11 1M11 1H3M11 1V9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                </button>
                            </div>
                        <?php else : ?>
                            <a href="#eligibility" class="btn-tender-docs-3d" style="width: 100%; box-sizing: border-box; margin-top: 1.25rem;">
                                <span>View Evaluation / Award Notice</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Statutory Eligibility Checklist -->
        <section class="bpp-compliance-strip-3d" id="eligibility" style="border-left: 5px solid var(--proc-gold); margin-bottom: 5rem;">
            <div style="grid-column: 1 / -1;">
                <h3 style="font-size: 1.3rem; font-weight: 900; color: #ffffff; display: flex; align-items: center; gap: 0.65rem; margin-top: 0;">
                    <span style="color: var(--proc-gold);">⚖️</span> Statutory Mandatory Eligibility Requirements (PPA 2007)
                </h3>
                <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.6;">
                    In strict compliance with the Bureau of Public Procurement (BPP), all bidders must upload authentic verified credentials:
                </p>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 1.25rem; margin-top: 1.5rem;">
                    <div><strong style="color: var(--proc-gold);">✓ CAC Certificate</strong> with Form CAC 1.1 / 2 & 7.</div>
                    <div><strong style="color: var(--proc-gold);">✓ Tax Clearance (TCC)</strong> for 2023, 2024, 2025.</div>
                    <div><strong style="color: var(--proc-gold);">✓ PENCOM Compliance</strong> under PRA 2014.</div>
                    <div><strong style="color: var(--proc-gold);">✓ ITF Compliance</strong> (Industrial Training Fund).</div>
                    <div><strong style="color: var(--proc-gold);">✓ NSITF Certificate</strong> (Employee Compensation).</div>
                    <div><strong style="color: var(--proc-gold);">✓ BPP National Database</strong> (Interim Registration Report).</div>
                </div>
            </div>
        </section>
    </div>
</main>

<!-- Interactive Electronic Bid Dossier Modal -->
<div class="dossier-modal-backdrop" id="bidDossierModal" role="dialog" aria-modal="true" aria-labelledby="modalDisplayTitle">
    <div class="dossier-modal-card">
        <button type="button" class="modal-close-btn" id="closeBidModalBtn" aria-label="Close modal">&times;</button>
        
        <div class="modal-header-strip">
            <span class="proc-gold-badge-3d" style="font-size: 0.7rem; padding: 0.25rem 0.65rem;">Tamper-Proof Electronic Submission</span>
            <h2 id="modalDisplayTitle" style="font-size: 1.2rem; font-weight: 900; color: #ffffff; margin: 0.6rem 0 0.2rem 0;">Tender Title</h2>
            <div id="modalDisplayRef" style="font-family: ui-monospace, monospace; color: var(--proc-gold); font-size: 0.82rem; font-weight: 800;">NASTCO/PROC/2026/X</div>
        </div>

        <form id="electronicBidForm">
            <input type="hidden" id="modalTenderRef" name="tender_ref">
            
            <div class="modal-form-grid">
                <div class="form-group-3d">
                    <label for="bidCompanyName">Company Name (As on CAC)</label>
                    <input type="text" id="bidCompanyName" class="form-control-3d" required placeholder="e.g. Zenith Dynamics Engineering Ltd">
                </div>
                <div class="form-group-3d">
                    <label for="bidCacRc">CAC RC / BN Number</label>
                    <input type="text" id="bidCacRc" class="form-control-3d" required placeholder="RC-1948291">
                </div>
                <div class="form-group-3d">
                    <label for="bidBppIrr">BPP IRR Number</label>
                    <input type="text" id="bidBppIrr" class="form-control-3d" required placeholder="BPP/IRR/2026/0948">
                </div>
                <div class="form-group-3d">
                    <label for="bidAmountNgn">Commercial Bid Total (₦ NGN)</label>
                    <input type="number" id="bidAmountNgn" class="form-control-3d" required placeholder="e.g. 85000000">
                </div>
                <div class="form-group-3d">
                    <label for="bidContactEmail">Liaison Email</label>
                    <input type="email" id="bidContactEmail" class="form-control-3d" required placeholder="tenders@company.com">
                </div>
                <div class="form-group-3d">
                    <label for="bidContactPhone">Liaison Phone Number</label>
                    <input type="tel" id="bidContactPhone" class="form-control-3d" required placeholder="+234 803 000 0000">
                </div>
            </div>

            <div class="form-group-3d" style="margin-top: 1.25rem;">
                <label for="bidTechnicalSummary">Technical Capability & Compliance Dossier Summary</label>
                <textarea id="bidTechnicalSummary" rows="3" class="form-control-3d" placeholder="Outline relevant past projects, certified personnel, equipment ownership, and delivery methodology..."></textarea>
            </div>

            <div class="statutory-declaration">
                <label style="display: flex; gap: 0.5rem; align-items: flex-start; cursor: pointer;">
                    <input type="checkbox" required style="margin-top: 0.2rem; accent-color: var(--proc-gold);">
                    <span>I solemnly affirm under penalty of perjury and statutory disqualification under the Public Procurement Act 2007 that all submitted documents and certifications are authentic, valid, and unencumbered.</span>
                </label>
            </div>

            <div style="margin-top: 1.5rem; display: flex; justify-content: flex-end;">
                <button type="submit" id="btnSubmitDossier" class="btn-tender-bid-3d" style="width: 100%; font-size: 0.95rem;">
                    <span>Seal & Transmit Electronic Bid</span>
                </button>
            </div>
        </form>

        <!-- Dynamic Success Feedback -->
        <div class="submit-feedback-box" id="bidSubmitFeedback">
            <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🛡️</div>
            <h3 style="color: #00d285; margin: 0 0 0.5rem 0; font-size: 1.3rem;">Electronic Bid Dossier Sealed</h3>
            <p style="font-size: 0.88rem; color: #cbd5e1; margin-bottom: 1rem;">
                Your submission has been securely hashed and registered in the NASTCO Tenders Repository.
            </p>
            <div style="background: rgba(0,0,0,0.4); border: 1px solid var(--proc-gold); border-radius: 8px; padding: 0.75rem; display: inline-block;">
                <span style="font-size: 0.74rem; color: var(--proc-gold); text-transform: uppercase; font-weight: 800; display: block;">Statutory Submission Receipt:</span>
                <strong id="receiptDossierCode" style="font-family: ui-monospace, monospace; font-size: 1.1rem; color: #ffffff;">BPP-NASTCO-CONFIRMED</strong>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo esc_url( get_template_directory_uri() . '/assets/js/procurement-engine.js' ); ?>"></script>

<?php get_footer(); ?>
