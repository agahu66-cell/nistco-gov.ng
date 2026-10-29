<?php
/**
 * Template Name: Sovereign Venture Marketplace
 * Description: Refined 3D Sovereign Venture Marketplace & IP Commercialisation Hub.
 */
defined( 'ABSPATH' ) || exit;

get_header();

$active_centre = isset( $_GET['centre'] ) ? sanitize_text_field( $_GET['centre'] ) : 'all';
$ventures_css_path = get_template_directory() . '/assets/css/page-ventures.css';

$patents = [
    [
        'id'        => 'v1',
        'centre'    => 'carc',
        'code'      => 'CARC • #NG/P/2024/892',
        'trl'       => 'TRL 8 • COMMERCIAL OFF-TAKE',
        'title'     => 'High-Efficiency Zeolite Cracking Catalysts',
        'desc'      => 'Synthetic aluminosilicate zeolites engineered for domestic petrochemical refining, heavy residual cracking, and emission scrubbing.',
        'offtaker'  => 'Petrochemical Refining Industry',
        'license'   => 'Exclusive / Non-Exclusive',
        'valuation' => '₦120,000,000',
        'theme'     => 'color-theme-gold'
    ],
    [
        'id'        => 'v2',
        'centre'    => 'parc',
        'code'      => 'PARC • #NG/P/2023/411',
        'trl'       => 'TRL 9 • FIELD TESTED',
        'title'     => 'Bifacial Perovskite-Silicon Solar Modules',
        'desc'      => 'High-temperature resilient photovoltaic cells optimized for sub-Saharan solar irradiance, delivering +21.4% conversion efficiency.',
        'offtaker'  => 'Clean Energy & REA Mini-Grids',
        'license'   => 'Industrial Off-Take',
        'valuation' => '₦95,000,000',
        'theme'     => 'color-theme-violet'
    ],
    [
        'id'        => 'v3',
        'centre'    => 'amsarc',
        'code'      => 'AMSARC • AI SOLVER',
        'trl'       => 'TRL 7 • PROTOTYPE',
        'title'     => 'PINNs Supersonic & Structural Flow Solver',
        'desc'      => 'Physics-Informed Neural Network software accelerating aerodynamic stress testing and structural simulation without mesh bottlenecks.',
        'offtaker'  => 'Aerospace & Civil Defense',
        'license'   => 'Enterprise SaaS / IP',
        'valuation' => '₦80,000,000',
        'theme'     => 'color-theme-cyan'
    ],
    [
        'id'        => 'v4',
        'centre'    => 'barc',
        'code'      => 'BARC • GENOMICS',
        'trl'       => 'TRL 8 • SCALE-UP',
        'title'     => 'Thermotolerant Cassava Bio-Ethanol Strains',
        'desc'      => 'Proprietary enzyme-engineered microbial strains yielding 34% higher bio-ethanol conversion for industrial biofuel manufacturing.',
        'offtaker'  => 'Biofuel & Agri-Processing',
        'license'   => 'Commercial Bioprocess',
        'valuation' => '₦110,000,000',
        'theme'     => 'color-theme-emerald'
    ],
    [
        'id'        => 'v5',
        'centre'    => 'ntc',
        'code'      => 'NTC • GAMMA GIF',
        'trl'       => 'TRL 9 • CERTIFIED',
        'title'     => 'Cobalt-60 Agro-Export Sterilization Protocol',
        'desc'      => 'High-throughput gamma irradiation dosimetry eliminating aflatoxin and microbial loads in Nigerian agricultural commodity exports.',
        'offtaker'  => 'Export Agriculture & Pharma',
        'license'   => 'Turn-Key Dosimetry IP',
        'valuation' => '₦150,000,000',
        'theme'     => 'color-theme-crimson'
    ],
    [
        'id'        => 'v6',
        'centre'    => 'aepc',
        'code'      => 'AEPC • CNC TOOLING',
        'trl'       => 'TRL 8 • INDUSTRIAL RIG',
        'title'     => 'Multi-Axis Precision CNC Agro-Molds',
        'desc'      => 'Hardened alloy stamping dies and milling profiles engineered for localized manufacturing of heavy agricultural processing machinery.',
        'offtaker'  => 'Agro-Allied Manufacturing',
        'license'   => 'Hardware Tooling Patent',
        'valuation' => '₦75,000,000',
        'theme'     => 'color-theme-cobalt'
    ]
];
?>

<?php if ( file_exists( $ventures_css_path ) ) : ?>
<style id="nastco-ventures-inline-guaranteed">
<?php echo file_get_contents( $ventures_css_path ); ?>
</style>
<?php endif; ?>

<main id="primary" class="site-main nastco-ventures-wrapper">
    
    <section class="ventures-hero-section">
        <div class="ventures-container">
            
            <!-- Refined 3D Masthead -->
            <div class="ventures-hero-header">
                <div class="ventures-badge-3d">
                    <span class="pulse-dot-green"></span>
                    <span>SOVEREIGN VENTURE MARKETPLACE • IP COMMERCIALISATION</span>
                </div>
                <h1 class="ventures-title text-3d-extrude">
                    High-Impact Patented Technologies &amp; <span class="text-gold-gradient">Industrial Licensing</span>
                </h1>
                <p class="ventures-subtitle text-3d-relief">
                    Explore TRL 7–9 research breakthroughs engineered across NASTCO’s six specialized directorates. Every commercial off-take agreement is protected by NOTAP registration and governed by the statutory 40/35/25 revenue-sharing ledger.
                </p>
            </div>

            <!-- Executive Telemetry KPI Strip -->
            <div class="ventures-kpi-strip">
                <div class="vkpi-pill-3d gold">
                    <span class="vkpi-val">6 Directorates</span>
                    <span class="vkpi-lbl">Unified R&amp;D Pipeline</span>
                </div>
                <div class="vkpi-pill-3d">
                    <span class="vkpi-val">TRL 7 – 9</span>
                    <span class="vkpi-lbl">Commercial Readiness</span>
                </div>
                <div class="vkpi-pill-3d emerald">
                    <span class="vkpi-val">40 / 35 / 25</span>
                    <span class="vkpi-lbl">Statutory Royalty Split</span>
                </div>
                <div class="vkpi-pill-3d violet">
                    <span class="vkpi-val">100% Sovereign</span>
                    <span class="vkpi-lbl">NOTAP &amp; PPA 2007 Certified</span>
                </div>
            </div>

            <!-- Instant Live Search + Directorate Filter Bar -->
            <div class="ventures-control-bar">
                <div class="ventures-search-wrap">
                    <input type="search" id="ventureSearchInput" class="ventures-search-input" placeholder="🔍 Search patents by keyword, code, or industrial sector (e.g., Zeolite, Solar, PINNs, Gamma)...">
                </div>
                <div class="ventures-filter-tabs" id="ventureFilterTabs">
                    <button type="button" class="filter-tab <?php echo $active_centre === 'all' ? 'active' : ''; ?>" data-centre="all">All Directorates (6)</button>
                    <button type="button" class="filter-tab <?php echo $active_centre === 'amsarc' ? 'active' : ''; ?>" data-centre="amsarc">AMSARC (AI &amp; Sim)</button>
                    <button type="button" class="filter-tab <?php echo $active_centre === 'barc' ? 'active' : ''; ?>" data-centre="barc">BARC (Biotech)</button>
                    <button type="button" class="filter-tab <?php echo $active_centre === 'carc' ? 'active' : ''; ?>" data-centre="carc">CARC (Chemistry)</button>
                    <button type="button" class="filter-tab <?php echo $active_centre === 'parc' ? 'active' : ''; ?>" data-centre="parc">PARC (Physics)</button>
                    <button type="button" class="filter-tab <?php echo $active_centre === 'aepc' ? 'active' : ''; ?>" data-centre="aepc">AEPC (Engineering)</button>
                    <button type="button" class="filter-tab <?php echo $active_centre === 'ntc' ? 'active' : ''; ?>" data-centre="ntc">NTC (Nuclear)</button>
                </div>
            </div>

            <!-- Patent Cards Grid -->
            <div class="ventures-grid" id="venturesPatentGrid">
                <?php foreach ( $patents as $p ) : 
                    $is_hidden = ( $active_centre !== 'all' && $active_centre !== $p['centre'] );
                ?>
                    <article class="abt-card-3d venture-patent-card <?php echo esc_attr( $p['theme'] ); ?>"
                             data-centre="<?php echo esc_attr( $p['centre'] ); ?>"
                             data-search="<?php echo esc_attr( strtolower( $p['title'] . ' ' . $p['desc'] . ' ' . $p['code'] . ' ' . $p['offtaker'] ) ); ?>"
                             style="<?php echo $is_hidden ? 'display:none;' : ''; ?>">
                        <div>
                            <div class="v-meta-row">
                                <span class="v-badge"><?php echo esc_html( $p['code'] ); ?></span>
                                <span class="v-trl"><span class="pulse-dot-green"></span> <?php echo esc_html( $p['trl'] ); ?></span>
                            </div>
                            <h3 class="text-3d-card-title"><?php echo esc_html( $p['title'] ); ?></h3>
                            <p class="text-3d-relief"><?php echo esc_html( $p['desc'] ); ?></p>
                        </div>

                        <div>
                            <div class="v-specs-strip">
                                <div>
                                    <span>License Tier</span>
                                    <strong><?php echo esc_html( $p['license'] ); ?></strong>
                                </div>
                                <div>
                                    <span>Benchmark Valuation</span>
                                    <strong><?php echo esc_html( $p['valuation'] ); ?></strong>
                                </div>
                            </div>

                            <div class="v-offtaker-row">
                                <span class="offtaker-label">Sector: <strong><?php echo esc_html( $p['offtaker'] ); ?></strong></span>
                                <button type="button" class="btn-request-license-3d negotiate-modal-btn"
                                        data-title="<?php echo esc_attr( $p['title'] ); ?>"
                                        data-code="<?php echo esc_attr( $p['code'] ); ?>">
                                    <span>💎 Request License →</span>
                                </button>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <!-- Statutory Fiscal Transparency & Live Remittance Countdown -->
            <div class="ventures-royalty-calc-box color-theme-gold" id="royaltyCalculator">
                
                <div class="fiscal-countdown-bar">
                    <div class="fc-left">
                        <span class="pulse-dot-green"></span>
                        <span class="fc-badge">STATUTORY FISCAL TRANSPARENCY • LIVE LEDGER</span>
                    </div>
                    <div class="fc-timer-wrap">
                        <span class="fc-timer-label">Q4 LICENSING WINDOW &amp; ROYALTY DISBURSEMENT COUNTDOWN:</span>
                        <div class="fc-digits" id="fiscalCountdownTimer">
                            <div class="fc-unit"><span id="fcDays">14</span><small>DAYS</small></div>
                            <span class="fc-sep">:</span>
                            <div class="fc-unit"><span id="fcHours">08</span><small>HRS</small></div>
                            <span class="fc-sep">:</span>
                            <div class="fc-unit"><span id="fcMins">42</span><small>MIN</small></div>
                            <span class="fc-sep">:</span>
                            <div class="fc-unit"><span id="fcSecs">19</span><small>SEC</small></div>
                        </div>
                    </div>
                </div>

                <div class="calc-header">
                    <div class="calc-copy">
                        <h2 class="text-3d-extrude">Interactive 40 / 35 / 25 Royalty Countdown &amp; Simulator</h2>
                        <p class="text-3d-relief">Drag the 3D valuation slider or enter an annual license value to watch the statutory shares dynamically count and allocate in real time.</p>
                    </div>
                    <div class="calc-input-group">
                        <label for="annualRevenueInput">Annual License Valuation (₦):</label>
                        <input type="number" id="annualRevenueInput" value="100000000" step="5000000" min="5000000" max="1000000000">
                        <input type="range" id="annualRevenueSlider" class="royalty-slider-3d" value="100000000" step="5000000" min="5000000" max="500000000">
                    </div>
                </div>

                <div class="calc-results-grid">
                    <div class="calc-result-card color-theme-gold">
                        <span class="calc-pct" id="pctInventor">40%</span>
                        <strong id="inventorShare">₦40,000,000</strong>
                        <small>Inventor Research Team &amp; Principal Investigators</small>
                    </div>
                    <div class="calc-result-card color-theme-cyan">
                        <span class="calc-pct" id="pctCentre">35%</span>
                        <strong id="centreShare">₦35,000,000</strong>
                        <small>Originating Centre R&amp;D Laboratory Fund</small>
                    </div>
                    <div class="calc-result-card color-theme-emerald">
                        <span class="calc-pct" id="pctSovereign">25%</span>
                        <strong id="sovereignShare">₦25,000,000</strong>
                        <small>NASTCO Central Sovereign Reserve (NOTAP/PPA)</small>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Interactive License Dossier Modal -->
    <div class="license-modal-backdrop" id="licenseModal" aria-hidden="true">
        <div class="license-modal-3d color-theme-gold">
            <button type="button" class="modal-close-btn" id="closeLicenseModal" aria-label="Close">✕</button>
            <span class="v-badge" id="modalPatentCode">PATENT DOSSIER</span>
            <h3 class="text-3d-extrude" id="modalPatentTitle" style="margin: 0.75rem 0 0.5rem; color: #fff;">Request Exclusive Industrial License</h3>
            <p class="text-3d-relief" style="color: #cbd5e1; font-size: 0.9rem;">Submit your corporate off-taker credentials to initiate statutory NOTAP &amp; NASTCO IP licensing under the 40/35/25 framework.</p>
            <form id="licenseRequestForm" class="license-form-3d">
                <input type="text" placeholder="Corporate Off-Taker / Organization Name" required>
                <input type="email" placeholder="Official Executive Email Address" required>
                <input type="tel" placeholder="Direct Phone / WhatsApp Telemetry Number" required>
                <button type="submit" class="btn-request-license-3d full-width"><span>🚀 Transmit Licensing Intent</span></button>
            </form>
            <div id="licenseFormStatus" class="license-status-msg" style="display:none;"></div>
        </div>
    </div>

</main>

<script id="nastco-ventures-inline-controller">
document.addEventListener('DOMContentLoaded', () => {
    // 1. Instant Client-Side Directorate Filter & Keyword Search
    const filterButtons = document.querySelectorAll('#ventureFilterTabs .filter-tab');
    const searchInput   = document.getElementById('ventureSearchInput');
    const cards         = document.querySelectorAll('#venturesPatentGrid .venture-patent-card');
    let activeCentre    = '<?php echo esc_js( $active_centre ); ?>';

    function applyVentureFilters() {
        const query = (searchInput ? searchInput.value : '').trim().toLowerCase();
        cards.forEach(card => {
            const cardCentre = card.getAttribute('data-centre');
            const cardSearch = card.getAttribute('data-search') || '';
            const matchesCentre = (activeCentre === 'all' || cardCentre === activeCentre);
            const matchesQuery  = (!query || cardSearch.includes(query));
            card.style.display  = (matchesCentre && matchesQuery) ? 'flex' : 'none';
        });
    }

    filterButtons.forEach(btn => {
        btn.addEventListener('click', () => {
            filterButtons.forEach(b => b.classList.remove('active'));
            btn.classList.add('active');
            activeCentre = btn.getAttribute('data-centre') || 'all';
            applyVentureFilters();
        });
    });

    if (searchInput) {
        searchInput.addEventListener('input', applyVentureFilters);
    }

    // 2. Smooth 60fps Royalty Countdown / Roll Simulator
    const revenueInput  = document.getElementById('annualRevenueInput');
    const revenueSlider = document.getElementById('annualRevenueSlider');
    const inventorEl    = document.getElementById('inventorShare');
    const centreEl      = document.getElementById('centreShare');
    const sovereignEl   = document.getElementById('sovereignShare');

    let currentValues = { inventor: 200000000, centre: 175000000, sovereign: 125000000 };

    function animateCurrency(el, startVal, endVal, duration = 600) {
        if (!el) return;
        const startTime = performance.now();
        function frame(now) {
            const progress = Math.min((now - startTime) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const current = Math.round(startVal + (endVal - startVal) * eased);
            el.textContent = '₦' + current.toLocaleString();
            if (progress < 1) requestAnimationFrame(frame);
        }
        requestAnimationFrame(frame);
    }

    function updateRoyaltyShares(rawVal) {
        const val = Math.max(0, parseFloat(rawVal) || 0);
        const nextInventor  = Math.round(val * 0.40);
        const nextCentre    = Math.round(val * 0.35);
        const nextSovereign = Math.round(val * 0.25);

        animateCurrency(inventorEl, currentValues.inventor, nextInventor);
        animateCurrency(centreEl, currentValues.centre, nextCentre);
        animateCurrency(sovereignEl, currentValues.sovereign, nextSovereign);

        currentValues = { inventor: nextInventor, centre: nextCentre, sovereign: nextSovereign };
    }

    if (revenueInput && revenueSlider) {
        revenueInput.addEventListener('input', (e) => {
            revenueSlider.value = e.target.value;
            updateRoyaltyShares(e.target.value);
        });
        revenueSlider.addEventListener('input', (e) => {
            revenueInput.value = e.target.value;
            updateRoyaltyShares(e.target.value);
        });
        updateRoyaltyShares(revenueInput.value);
    }

    // 3. Live Q4 Statutory Disbursement Countdown Timer
    const daysEl  = document.getElementById('fcDays');
    const hoursEl = document.getElementById('fcHours');
    const minsEl  = document.getElementById('fcMins');
    const secsEl  = document.getElementById('fcSecs');
    let remainingSeconds = (14 * 86400) + (8 * 3600) + (42 * 60) + 19;

    function tickCountdown() {
        if (!daysEl) return;
        if (remainingSeconds <= 0) remainingSeconds = 14 * 86400;
        remainingSeconds--;
        daysEl.textContent  = String(Math.floor(remainingSeconds / 86400)).padStart(2, '0');
        hoursEl.textContent = String(Math.floor((remainingSeconds % 86400) / 3600)).padStart(2, '0');
        minsEl.textContent  = String(Math.floor((remainingSeconds % 3600) / 60)).padStart(2, '0');
        secsEl.textContent  = String(remainingSeconds % 60).padStart(2, '0');
    }
    setInterval(tickCountdown, 1000);
    tickCountdown();

    // 4. Request License 3D Modal
    const modal      = document.getElementById('licenseModal');
    const closeBtn   = document.getElementById('closeLicenseModal');
    const modalTitle = document.getElementById('modalPatentTitle');
    const modalCode  = document.getElementById('modalPatentCode');
    const form       = document.getElementById('licenseRequestForm');
    const statusMsg  = document.getElementById('licenseFormStatus');

    document.querySelectorAll('.negotiate-modal-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            if (!modal) return;
            modalTitle.textContent = btn.getAttribute('data-title') || 'Request Exclusive License';
            modalCode.textContent  = btn.getAttribute('data-code') || 'PATENT DOSSIER';
            statusMsg.style.display = 'none';
            modal.classList.add('active');
        });
    });

    if (closeBtn && modal) {
        closeBtn.addEventListener('click', () => modal.classList.remove('active'));
        modal.addEventListener('click', (e) => {
            if (e.target === modal) modal.classList.remove('active');
        });
    }

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            statusMsg.textContent = '✔ Licensing Dossier Intent logged with Directorate of Innovation & Commercialisation.';
            statusMsg.style.display = 'block';
            form.reset();
        });
    }
});
</script>

<?php get_footer(); ?>
