<?php
/**
 * Template Name: Commercial Ventures & Statutory Royalty Dashboard
 */

get_header();

require_once get_template_directory() . '/inc-venture-db.php';

// Fetch summary and records directly from repositories
$summary    = NISTCO_Ventures_Repository::get_portfolio_summary();
$ventures   = NISTCO_Ventures_Repository::get_ventures( [ 'limit' => 50 ] );
$royalties  = NISTCO_Royalties_Repository::get_centre_royalty_summary();

// Calculate global royalty totals
$total_cleared_royalties = 0;
$total_inventor_pool     = 0;
$total_centre_pool       = 0;
$total_inst_pool         = 0;

foreach ( $royalties as $r ) {
    $total_cleared_royalties += (float) $r['total_royalties'];
    $total_inventor_pool     += (float) $r['total_inventor_pool'];
    $total_centre_pool       += (float) $r['total_centre_pool'];
    $total_inst_pool         += (float) $r['total_institutional_pool'];
}
?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/ventures-engine.css' ); ?>">

<main class="ventures-dashboard-main">

    <!-- 1. HEADER & HIGH-LEVEL MISSION -->
    <header class="ventures-header">
        <div class="ventures-container">
            <span class="ventures-badge">
                <span>●</span> Federal STI Commercialization Sanctuary
            </span>
            <h1 class="ventures-title">NISTCO Commercial Ventures & Royalty Dashboard</h1>
            <p class="ventures-subtitle">
                Institutional framework governing technology out-licensing, NOTAP-certified industrial covenants,
                pilot demonstration production, and the automated 40 / 35 / 25 statutory distribution of research royalties.
            </p>

            <!-- 2. PRIMARY TELEMETRY SCORECARDS -->
            <div class="telemetry-cards-grid">
                <div class="telemetry-card">
                    <span class="telemetry-card-label">Active Portfolio Pipeline</span>
                    <span class="telemetry-card-val accent-green">
                        ₦<?php echo number_format( $summary['active_portfolio_valuation'] / 1000000, 1 ); ?>M
                    </span>
                    <span class="telemetry-card-sub">
                        ₦<?php echo number_format( $summary['active_portfolio_valuation'], 2 ); ?> total commitment
                    </span>
                </div>

                <div class="telemetry-card">
                    <span class="telemetry-card-label">Cleared Statutory Royalties</span>
                    <span class="telemetry-card-val accent-gold">
                        ₦<?php echo number_format( $total_cleared_royalties / 1000000, 2 ); ?>M
                    </span>
                    <span class="telemetry-card-sub">Accredited commercial remittances</span>
                </div>

                <div class="telemetry-card">
                    <span class="telemetry-card-label">Active Commercial Covenants</span>
                    <span class="telemetry-card-val accent-blue">
                        <?php echo esc_html( $summary['active_agreements'] ); ?> / <?php echo esc_html( $summary['total_agreements'] ); ?>
                    </span>
                    <span class="telemetry-card-sub">Across <?php echo esc_html( $summary['active_centres_count'] ); ?> specialized research centres</span>
                </div>

                <div class="telemetry-card">
                    <span class="telemetry-card-label">Statutory Allocation Mandate</span>
                    <span class="telemetry-card-val" style="font-size: 1.6rem; color: #ffffff;">40 / 35 / 25</span>
                    <span class="telemetry-card-sub">Inventors • Centres • NISTCO Fund</span>
                </div>
            </div>

            <!-- 3. STATUTORY 40 / 35 / 25 TRANCHE SPLIT VISUALIZER -->
            <div class="statutory-tranche-card">
                <div class="tranche-headline">
                    <div>
                        <h3>Statutory Royalty Allocation Architecture</h3>
                        <p style="color: var(--vnt-muted); margin: 0.35rem 0 0 0; font-size: 0.92rem;">
                            Direct implementation of the Federal Science, Technology, and Innovation Commercialization Charter.
                        </p>
                    </div>
                    <span style="font-family: ui-monospace, monospace; font-weight: 800; color: var(--vnt-accent); font-size: 1.1rem;">
                        Cleared Pool: ₦<?php echo number_format( $total_cleared_royalties, 2 ); ?>
                    </span>
                </div>

                <div class="tranche-bars-wrap">
                    <div class="tranche-segment-inventor" title="40% Lead Inventors & Research Teams"></div>
                    <div class="tranche-segment-centre" title="35% Originating Centre Development"></div>
                    <div class="tranche-segment-inst" title="25% NISTCO STI Institutional Reinvestment"></div>
                </div>

                <div class="tranche-legend-grid">
                    <div class="legend-box">
                        <div class="legend-title">
                            <span class="legend-dot green"></span>
                            40% Lead Inventors & Lab Teams
                        </div>
                        <p class="legend-desc">
                            Direct reward disbursement disbursed to designated patent inventors and technical teams.
                        </p>
                        <div style="margin-top: 0.75rem; font-weight: 800; font-family: ui-monospace, monospace; color: var(--vnt-accent);">
                            Disbursed Pool: ₦<?php echo number_format( $total_inventor_pool, 2 ); ?>
                        </div>
                    </div>

                    <div class="legend-box">
                        <div class="legend-title">
                            <span class="legend-dot blue"></span>
                            35% Originating Centre Fund
                        </div>
                        <p class="legend-desc">
                            Allocated to the specific laboratory division for calibration audits and equipment maintenance.
                        </p>
                        <div style="margin-top: 0.75rem; font-weight: 800; font-family: ui-monospace, monospace; color: var(--vnt-accent-blue);">
                            Disbursed Pool: ₦<?php echo number_format( $total_centre_pool, 2 ); ?>
                        </div>
                    </div>

                    <div class="legend-box">
                        <div class="legend-title">
                            <span class="legend-dot gold"></span>
                            25% NISTCO Institutional Fund
                        </div>
                        <p class="legend-desc">
                            Retained for complex-wide infrastructure, legal IP patent filings, and solar microgrid stability.
                        </p>
                        <div style="margin-top: 0.75rem; font-weight: 800; font-family: ui-monospace, monospace; color: var(--vnt-accent-gold);">
                            Disbursed Pool: ₦<?php echo number_format( $total_inst_pool, 2 ); ?>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 4. ACTIVE COMMERCIAL VENTURES REGISTRY -->
            <div class="section-heading-row">
                <div>
                    <h2 style="font-size: 1.85rem; font-weight: 800; margin: 0; color: #ffffff;">
                        Commercial Ventures & Technology Licensing Registry
                    </h2>
                    <p style="color: var(--vnt-muted); margin: 0.35rem 0 0 0; font-size: 0.92rem;">
                        Verified commercial covenants, NOTAP-registered patents, and pilot demonstration runs.
                    </p>
                </div>
                <div class="filter-pills-cluster">
                    <button class="filter-pill active" onclick="filterVentures('all')">All Divisions</button>
                    <button class="filter-pill" onclick="filterVentures('carc')">CARC (Chemistry)</button>
                    <button class="filter-pill" onclick="filterVentures('barc')">BARC (Biotech)</button>
                    <button class="filter-pill" onclick="filterVentures('aepc')">AEPC (Prototype)</button>
                    <button class="filter-pill" onclick="filterVentures('ntc')">NTC (Nuclear)</button>
                    <button class="filter-pill" onclick="filterVentures('amsarc')">AMSARC (Applied Math)</button>
                    <button class="filter-pill" onclick="filterVentures('parc')">PARC (Physics)</button>
                </div>
            </div>

            <div class="vnt-table-card">
                <div style="overflow-x: auto;">
                    <table class="vnt-data-table" id="venturesTable">
                        <thead>
                            <tr>
                                <th>Venture Reference</th>
                                <th>Commercial Title & Licensee</th>
                                <th>Centre</th>
                                <th>Venture Type</th>
                                <th>Contract Valuation</th>
                                <th>Royalty Rate</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ( $ventures as $v ) : ?>
                            <tr data-centre="<?php echo esc_attr( $v['centre_slug'] ); ?>">
                                <td>
                                    <span class="cell-code"><?php echo esc_html( $v['venture_code'] ); ?></span>
                                    <span class="cell-notap"><?php echo esc_html( $v['notap_reg_no'] ?? 'Statutory Standard' ); ?></span>
                                </td>
                                <td>
                                    <strong style="color: #ffffff; display: block; margin-bottom: 0.2rem;">
                                        <?php echo esc_html( $v['title'] ); ?>
                                    </strong>
                                    <span style="font-size: 0.8rem; color: #64748b;">Partner: <?php echo esc_html( $v['partner_entity'] ); ?></span>
                                </td>
                                <td>
                                    <span class="centre-tag <?php echo esc_attr( $v['centre_slug'] ); ?>">
                                        <?php echo strtoupper( esc_html( $v['centre_slug'] ) ); ?>
                                    </span>
                                </td>
                                <td><?php echo esc_html( ucwords( str_replace( '_', ' ', $v['venture_type'] ) ) ); ?></td>
                                <td style="font-family: ui-monospace, monospace; font-weight: 700; color: #ffffff;">
                                    ₦<?php echo number_format( (float) $v['contract_value'], 2 ); ?>
                                </td>
                                <td style="font-family: ui-monospace, monospace; font-weight: 800; color: var(--vnt-accent);">
                                    <?php echo esc_html( $v['royalty_rate_pct'] ); ?>%
                                </td>
                                <td>
                                    <span class="status-badge <?php echo esc_attr( $v['status'] ); ?>">
                                        ● <?php echo esc_html( $v['status'] ); ?>
                                    </span>
                                </td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- 5. INTERACTIVE STATUTORY SPLIT SIMULATOR -->
            <div class="calc-stage-card">
                <div class="calc-grid">
                    <div class="calc-input-box">
                        <span style="font-size: 0.78rem; font-weight: 800; color: var(--vnt-accent); text-transform: uppercase; letter-spacing: 1.5px;">
                            Simulator Module
                        </span>
                        <h3 style="font-size: 1.8rem; font-weight: 900; margin: 0; color: #ffffff;">
                            Statutory Disbursement Calculator
                        </h3>
                        <p style="color: var(--vnt-muted); margin: 0; font-size: 0.95rem; line-height: 1.6;">
                            Simulate real-time 40/35/25 disbursements from any proposed commercial milestone, license payment, or contract production batch.
                        </p>

                        <div class="calc-field-group">
                            <label for="simGross">Gross Payment / Remittance (NGN)</label>
                            <input type="number" id="simGross" class="calc-input" value="50000000" step="1000000" oninput="calculateSimulator()">
                        </div>

                        <div class="calc-field-group">
                            <label for="simRoyaltyPct">Royalty / Contribution Rate (%)</label>
                            <input type="number" id="simRoyaltyPct" class="calc-input" value="8.0" step="0.5" oninput="calculateSimulator()">
                        </div>
                    </div>

                    <div class="calc-output-panel">
                        <div class="calc-output-row">
                            <span class="calc-output-label">Computed Statutory Royalty Pool:</span>
                            <span class="calc-output-val" id="outStatutory" style="color: var(--vnt-accent);">₦4,000,000.00</span>
                        </div>
                        <div class="calc-output-row">
                            <span class="calc-output-label">Lead Inventors & Research Teams (40%):</span>
                            <span class="calc-output-val" id="outInventor">₦1,600,000.00</span>
                        </div>
                        <div class="calc-output-row">
                            <span class="calc-output-label">Originating Centre Development Fund (35%):</span>
                            <span class="calc-output-val" id="outCentre">₦1,400,000.00</span>
                        </div>
                        <div class="calc-output-row">
                            <span class="calc-output-label">NISTCO Institutional STI Fund (25%):</span>
                            <span class="calc-output-val" id="outInst">₦1,000,000.00</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>
</main>

<script>
function filterVentures(centre) {
    document.querySelectorAll('.filter-pill').forEach(b => b.classList.remove('active'));
    event.target.classList.add('active');

    const rows = document.querySelectorAll('#venturesTable tbody tr');
    rows.forEach(r => {
        if (centre === 'all' || r.getAttribute('data-centre') === centre) {
            r.style.display = '';
        } else {
            r.style.display = 'none';
        }
    });
}

function calculateSimulator() {
    const gross = parseFloat(document.getElementById('simGross').value) || 0;
    const rate = parseFloat(document.getElementById('simRoyaltyPct').value) || 0;

    const statutory = gross * (rate / 100);
    const inventor  = statutory * 0.40;
    const centre    = statutory * 0.35;
    const inst      = statutory * 0.25;

    const fmt = (num) => '₦' + num.toLocaleString('en-US', { minimumFractionDigits: 2, maximumFractionDigits: 2 });

    document.getElementById('outStatutory').innerText = fmt(statutory);
    document.getElementById('outInventor').innerText  = fmt(inventor);
    document.getElementById('outCentre').innerText    = fmt(centre);
    document.getElementById('outInst').innerText      = fmt(inst);
}
</script>

<?php get_footer(); ?>
