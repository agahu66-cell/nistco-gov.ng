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
        'deadline'     => '2026-11-16 12:00 PM WAT',
        'days_left'    => '28 Days Remaining',
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
        'deadline'     => '2026-11-09 12:00 PM WAT',
        'days_left'    => '21 Days Remaining',
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
        'deadline'     => '2026-10-30 02:00 PM WAT',
        'days_left'    => '11 Days Remaining',
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
        'deadline'     => '2026-11-02 12:00 PM WAT',
        'days_left'    => '14 Days Remaining',
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
        'deadline'     => '2026-10-05 (Closed)',
        'days_left'    => 'Bids Closed',
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
        'deadline'     => '2026-09-15 (Awarded)',
        'days_left'    => 'Contract Disclosed',
        'status'       => 'Contract Awarded',
        'bpp_lot'      => 'Lot Goods-01',
        'budget_class' => 'Executed Statutory Budget',
        'scope'        => 'Contract awarded following BPP Certificate of "No Objection" to Indorama Biotech Engineering Consortium (Award Sum: ₦142,500,000.00).'
    ],
];
?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/ventures-engine.css' ); ?>">

<style>
    :root {
        --proc-gold: #d4af37;
        --proc-gold-bright: #f59e0b;
        --proc-gold-glow: rgba(212, 175, 55, 0.28);
        --proc-navy-deep: #03070d;
        --proc-navy-card: #091322;
        --proc-green: #008751;
        --proc-green-glow: #00d285;
    }

    .proc-hero {
        padding: 5rem 0 3.5rem 0;
        background: radial-gradient(circle at 85% 15%, var(--proc-gold-glow) 0%, transparent 55%),
                    radial-gradient(circle at 10% 85%, rgba(0, 135, 81, 0.25) 0%, transparent 50%),
                    var(--proc-navy-deep);
        border-bottom: 2px solid var(--proc-gold);
        position: relative;
    }

    .proc-gold-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.35rem 0.85rem;
        background: rgba(212, 175, 55, 0.12);
        color: var(--proc-gold);
        border: 1px solid var(--proc-gold);
        border-radius: 6px;
        font-size: 0.74rem;
        font-weight: 800;
        letter-spacing: 0.8px;
        text-transform: uppercase;
        box-shadow: 0 0 14px rgba(212, 175, 55, 0.2);
    }

    .proc-gold-badge span {
        color: var(--proc-gold-bright);
        font-size: 0.85rem;
    }

    /* Statutory Criteria HUD */
    .bpp-compliance-strip {
        margin-top: 2.5rem;
        background: rgba(4, 10, 18, 0.75);
        border: 1px solid rgba(212, 175, 55, 0.3);
        border-left: 4px solid var(--proc-gold);
        border-radius: 12px;
        padding: 1.5rem 2rem;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
        gap: 1.5rem;
    }

    .compliance-item {
        display: flex;
        flex-direction: column;
        gap: 0.25rem;
    }

    .compliance-label {
        font-size: 0.72rem;
        color: var(--proc-gold);
        text-transform: uppercase;
        font-weight: 800;
        letter-spacing: 0.6px;
    }

    .compliance-val {
        font-size: 0.88rem;
        color: #f1f5f9;
        font-weight: 700;
    }

    .compliance-desc {
        font-size: 0.75rem;
        color: #94a3b8;
    }

    /* Tender Cards Layout */
    .tender-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(380px, 1fr));
        gap: 2rem;
        margin-top: 3rem;
        margin-bottom: 5rem;
    }

    .tender-card {
        background: var(--proc-navy-card);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-top: 3px solid var(--proc-gold);
        border-radius: 14px;
        padding: 2rem;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        position: relative;
        transition: transform 0.25s ease, border-color 0.25s ease, box-shadow 0.25s ease;
    }

    .tender-card:hover {
        transform: translateY(-4px);
        border-color: var(--proc-gold);
        box-shadow: 0 16px 36px rgba(0, 0, 0, 0.5), 0 0 20px rgba(212, 175, 55, 0.2);
    }

    .tender-card-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
        gap: 1rem;
        margin-bottom: 1.25rem;
    }

    .tender-category-pill {
        display: inline-block;
        font-size: 0.72rem;
        font-weight: 800;
        text-transform: uppercase;
        padding: 0.2rem 0.6rem;
        border-radius: 4px;
        letter-spacing: 0.5px;
    }

    .cat-works { background: rgba(56, 189, 248, 0.15); color: #38bdf8; border: 1px solid rgba(56, 189, 248, 0.35); }
    .cat-goods { background: rgba(0, 210, 133, 0.15); color: #00d285; border: 1px solid rgba(0, 210, 133, 0.35); }
    .cat-consulting { background: rgba(212, 175, 55, 0.15); color: var(--proc-gold); border: 1px solid rgba(212, 175, 55, 0.4); }

    .tender-status-badge {
        font-size: 0.74rem;
        font-weight: 800;
        padding: 0.25rem 0.65rem;
        border-radius: 6px;
        font-family: ui-monospace, monospace;
    }

    .status-active { background: rgba(0, 210, 133, 0.15); color: #00d285; border: 1px solid #00d285; }
    .status-eval { background: rgba(245, 158, 11, 0.15); color: #f59e0b; border: 1px solid #f59e0b; }
    .status-awarded { background: rgba(148, 163, 184, 0.15); color: #94a3b8; border: 1px solid #94a3b8; }

    .tender-title {
        font-size: 1.2rem;
        font-weight: 800;
        color: #ffffff;
        line-height: 1.4;
        margin: 0.75rem 0;
    }

    .tender-scope {
        font-size: 0.86rem;
        color: #94a3b8;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .tender-meta-box {
        background: rgba(0, 0, 0, 0.3);
        border: 1px solid rgba(255, 255, 255, 0.05);
        border-radius: 8px;
        padding: 1rem;
        display: flex;
        flex-direction: column;
        gap: 0.6rem;
        font-size: 0.8rem;
    }

    .tender-meta-row {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .tender-meta-row span { color: #64748b; }
    .tender-meta-row strong { color: #cbd5e1; font-family: ui-monospace, monospace; }

    .btn-tender-bid {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.5rem;
        padding: 0.75rem 1.25rem;
        background: linear-gradient(135deg, var(--proc-gold) 0%, #b8860b 100%);
        color: #060d17;
        border-radius: 8px;
        font-size: 0.84rem;
        font-weight: 800;
        text-decoration: none;
        letter-spacing: 0.4px;
        box-shadow: 0 4px 14px rgba(212, 175, 55, 0.25);
        transition: transform 0.2s ease, box-shadow 0.2s ease;
        margin-top: 1.25rem;
    }

    .btn-tender-bid:hover {
        transform: translateY(-2px);
        box-shadow: 0 8px 22px rgba(212, 175, 55, 0.45);
        color: #000000;
    }

    .btn-tender-docs {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        gap: 0.4rem;
        padding: 0.75rem 1.25rem;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(212, 175, 55, 0.4);
        color: var(--proc-gold);
        border-radius: 8px;
        font-size: 0.84rem;
        font-weight: 800;
        text-decoration: none;
        transition: all 0.2s ease;
        margin-top: 1.25rem;
    }

    .btn-tender-docs:hover {
        background: rgba(212, 175, 55, 0.12);
        border-color: var(--proc-gold);
    }

    /* Statutory Checklist Modal / Collapsible Section */
    .bpp-checklist-box {
        background: var(--proc-navy-card);
        border: 2px solid var(--proc-gold);
        border-radius: 14px;
        padding: 2.5rem;
        margin-bottom: 5rem;
    }

    .bpp-checklist-title {
        font-size: 1.25rem;
        font-weight: 900;
        color: #ffffff;
        display: flex;
        align-items: center;
        gap: 0.65rem;
        margin-top: 0;
        margin-bottom: 1.25rem;
    }

    .bpp-checklist-grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 1.5rem;
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .checklist-item {
        display: flex;
        gap: 0.85rem;
        align-items: flex-start;
        font-size: 0.85rem;
        color: #94a3b8;
        line-height: 1.55;
    }

    .checklist-icon {
        color: var(--proc-gold);
        font-weight: 900;
        font-size: 1rem;
        flex-shrink: 0;
    }
</style>

<main class="ventures-dashboard-main">
    <header class="proc-hero">
        <div class="ventures-container">
            <span class="proc-gold-badge">
                <span>⚖️</span> Public Procurement Act (PPA 2007) • BPP Registered
            </span>
            <h1 class="ventures-title">Procurement, Tenders & Contract Registry</h1>
            <p class="ventures-subtitle">
                Official statutory portal for Federal Government capital appropriations, specialized laboratory tenders, research works, and public contract disclosures across NASTCO and its six research centres.
            </p>

            <!-- BPP Compliance Standards HUD -->
            <div class="bpp-compliance-strip">
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
                    <span class="compliance-val">Tamper-Proof Double Envelope</span>
                    <span class="compliance-desc">Separate Technical & Financial Bids</span>
                </div>
                <div class="compliance-item">
                    <span class="compliance-label">Secretariat Location</span>
                    <span class="compliance-val">Tenders Boardroom</span>
                    <span class="compliance-desc">Complex Secretariat, FCT Abuja</span>
                </div>
            </div>

            <!-- Division & Category Filtering Cluster -->
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
                    $status_class = 'status-active';
                    if ( $item['status'] === 'Under Technical Evaluation' ) $status_class = 'status-eval';
                    if ( $item['status'] === 'Contract Awarded' ) $status_class = 'status-awarded';

                    $cat_class = 'cat-goods';
                    if ( $item['category'] === 'Works' ) $cat_class = 'cat-works';
                    if ( $item['category'] === 'Consulting' ) $cat_class = 'cat-consulting';
                ?>
                <article class="tender-card" data-centre="<?php echo esc_attr( $item['centre'] ); ?>">
                    <div>
                        <div class="tender-card-header">
                            <div>
                                <span class="tender-category-pill <?php echo esc_attr( $cat_class ); ?>">
                                    <?php echo esc_html( $item['category'] ); ?>
                                </span>
                                <span class="centre-tag <?php echo esc_attr( $item['centre'] ); ?>" style="margin-left: 0.35rem;">
                                    <?php echo esc_html( $item['centre_name'] ); ?>
                                </span>
                            </div>
                            <span class="tender-status-badge <?php echo esc_attr( $status_class ); ?>">
                                <?php echo esc_html( $item['status'] ); ?>
                            </span>
                        </div>

                        <div style="font-family: ui-monospace, monospace; font-size: 0.76rem; color: var(--proc-gold); font-weight: 800;">
                            <?php echo esc_html( $item['tender_ref'] ); ?> • <?php echo esc_html( $item['bpp_lot'] ); ?>
                        </div>

                        <h2 class="tender-title"><?php echo esc_html( $item['title'] ); ?></h2>
                        <p class="tender-scope"><?php echo esc_html( $item['scope'] ); ?></p>
                    </div>

                    <div>
                        <div class="tender-meta-box">
                            <div class="tender-meta-row">
                                <span>Appropriation:</span>
                                <strong><?php echo esc_html( $item['budget_class'] ); ?></strong>
                            </div>
                            <div class="tender-meta-row">
                                <span>Deadline / Expiry:</span>
                                <strong style="color: #ffffff;"><?php echo esc_html( $item['deadline'] ); ?></strong>
                            </div>
                            <div class="tender-meta-row">
                                <span>Window Status:</span>
                                <strong style="color: var(--proc-gold);"><?php echo esc_html( $item['days_left'] ); ?></strong>
                            </div>
                        </div>

                        <?php if ( $item['status'] === 'Active Bid Window' ) : ?>
                            <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 0.75rem;">
                                <a href="#eligibility" class="btn-tender-docs">
                                    <span>Download RFP</span>
                                </a>
                                <a href="mailto:tenders@nastco.gov.ng?subject=Bid%20Submission%20Intent%20<?php echo rawurlencode( $item['tender_ref'] ); ?>" class="btn-tender-bid">
                                    <span>Submit Bid Dossier</span>
                                </a>
                            </div>
                        <?php else : ?>
                            <a href="#eligibility" class="btn-tender-docs" style="width: 100%; box-sizing: border-box;">
                                <span>View Evaluation / Award Notice</span>
                            </a>
                        <?php endif; ?>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>

        <!-- Statutory Mandatory Eligibility Checklist -->
        <section class="bpp-checklist-box" id="eligibility">
            <h3 class="bpp-checklist-title">
                <span style="color: var(--proc-gold);">⚖️</span> Statutory Mandatory Eligibility Requirements (PPA 2007)
            </h3>
            <p style="color: #94a3b8; font-size: 0.88rem; line-height: 1.6; margin-bottom: 2rem;">
                In strict compliance with the directives of the Bureau of Public Procurement (BPP), all prospective contractors, suppliers, and service consultants must assemble verifiable copies of the following statutory documents within their sealed Technical Bid Envelope:
            </p>
            <ul class="bpp-checklist-grid">
                <li class="checklist-item">
                    <span class="checklist-icon">✓</span>
                    <div>
                        <strong style="color: #ffffff; display: block;">Corporate Affairs Commission (CAC)</strong>
                        Certificate of Incorporation / Registration with Forms CAC 1.1 or CAC 2 and 7.
                    </div>
                </li>
                <li class="checklist-item">
                    <span class="checklist-icon">✓</span>
                    <div>
                        <strong style="color: #ffffff; display: block;">Federal Tax Clearance Certificate (TCC)</strong>
                        Valid Tax Clearance for the past three consecutive years (2023, 2024, 2025).
                    </div>
                </li>
                <li class="checklist-item">
                    <span class="checklist-icon">✓</span>
                    <div>
                        <strong style="color: #ffffff; display: block;">PENCOM Compliance Certificate</strong>
                        Valid National Pension Commission compliance certificate under PRA 2014.
                    </div>
                </li>
                <li class="checklist-item">
                    <span class="checklist-icon">✓</span>
                    <div>
                        <strong style="color: #ffffff; display: block;">Industrial Training Fund (ITF)</strong>
                        Valid Compliance Certificate under the Industrial Training Fund Amendment Act.
                    </div>
                </li>
                <li class="checklist-item">
                    <span class="checklist-icon">✓</span>
                    <div>
                        <strong style="color: #ffffff; display: block;">NSITF Compliance Certificate</strong>
                        Valid Nigeria Social Insurance Trust Fund Employee Compensation compliance cert.
                    </div>
                </li>
                <li class="checklist-item">
                    <span class="checklist-icon">✓</span>
                    <div>
                        <strong style="color: #ffffff; display: block;">BPP National Database Registration</strong>
                        Interim Registration Report (IRR) validating active listing on the BPP database.
                    </div>
                </li>
            </ul>
        </section>
    </div>
</main>

<script>
function filterTenders(centre) {
    document.querySelectorAll('.filter-pill').forEach(b => b.classList.remove('active'));
    event.target.classList.add('active');

    const cards = document.querySelectorAll('#tendersGrid .tender-card');
    cards.forEach(c => {
        if (centre === 'all' || c.getAttribute('data-centre') === centre) {
            c.style.display = 'flex';
        } else {
            c.style.display = 'none';
        }
    });
}
</script>

<?php get_footer(); ?>
