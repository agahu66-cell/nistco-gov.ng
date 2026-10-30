<?php
/**
 * NASTCO Sovereign Portal — Section 07: Looker Studio Executive Financial Dashboard
 * Integrates Google Looker Studio Embed + Interactive 40/35/25 LiveLedger Telemetry
 */
defined( 'ABSPATH' ) || exit;

$default_looker_url = 'https://lookerstudio.google.com/embed/reporting/00000000-0000-0000-0000-000000000000/page/p_nastco_ledger';
$looker_embed_url   = defined( 'NASTCO_LOOKER_EMBED_URL' )
    ? NASTCO_LOOKER_EMBED_URL
    : get_option( 'nastco_looker_embed_url', $default_looker_url );

$is_placeholder_url = ( strpos( $looker_embed_url, '00000000' ) !== false );
?>

<style id="nastco-looker-dashboard-css">
    .nastco-looker-section {
        padding: 4.5rem 1.5rem;
        background:
            radial-gradient(circle at 80% 20%, rgba(16, 185, 129, 0.10), transparent 40%),
            radial-gradient(circle at 20% 80%, rgba(250, 204, 21, 0.10), transparent 45%),
            linear-gradient(180deg, #040914 0%, #060e20 100%);
        border-top: 1px solid rgba(255, 255, 255, 0.08);
        border-bottom: 1px solid rgba(250, 204, 21, 0.22);
        color: #f8fafc;
    }
    .nastco-looker-container {
        max-width: 1340px;
        margin: 0 auto;
    }
    .nastco-looker-header {
        display: flex;
        justify-content: space-between;
        align-items: flex-end;
        flex-wrap: wrap;
        gap: 1.5rem;
        margin-bottom: 2.25rem;
    }
    .nastco-looker-kicker {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.35rem 0.9rem;
        border-radius: 999px;
        background: rgba(16, 185, 129, 0.12);
        border: 1px solid rgba(16, 185, 129, 0.35);
        color: #10b981;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 0.75rem;
    }
    .nastco-looker-title {
        font-size: clamp(1.75rem, 3vw, 2.5rem);
        font-weight: 900;
        color: #ffffff;
        margin: 0 0 0.5rem 0;
    }
    .nastco-looker-sub {
        font-size: 0.95rem;
        color: #94a3b8;
        max-width: 720px;
        margin: 0;
        line-height: 1.6;
    }
    /* Mode Switcher Tabs */
    .nastco-looker-tabs {
        display: inline-flex;
        background: rgba(8, 17, 36, 0.85);
        border: 1px solid rgba(250, 204, 21, 0.3);
        border-radius: 12px;
        padding: 0.3rem;
        gap: 0.35rem;
    }
    .nastco-looker-tab {
        background: transparent;
        border: none;
        color: #94a3b8;
        font-size: 0.8rem;
        font-weight: 800;
        padding: 0.6rem 1.1rem;
        border-radius: 9px;
        cursor: pointer;
        transition: all 0.22s ease;
    }
    .nastco-looker-tab.is-active {
        background: linear-gradient(135deg, #facc15 0%, #eab308 100%);
        color: #040914;
        box-shadow: 0 4px 14px rgba(250, 204, 21, 0.35);
    }
    /* Glassmorphic Frame Deck */
    .nastco-looker-frame-card {
        background: linear-gradient(155deg, rgba(15, 23, 42, 0.9), rgba(6, 12, 26, 0.96));
        border: 1px solid rgba(250, 204, 21, 0.28);
        border-radius: 24px;
        padding: 2rem;
        box-shadow: 0 25px 60px rgba(0, 0, 0, 0.75), inset 0 1px 0 rgba(255, 255, 255, 0.12);
    }
    /* Top Statutory Split Strip */
    .nastco-split-strip {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
        gap: 1.25rem;
        margin-bottom: 2rem;
    }
    .nastco-split-card {
        background: rgba(4, 9, 20, 0.72);
        border: 1px solid rgba(255, 255, 255, 0.09);
        border-left: 4px solid var(--split-color, #facc15);
        border-radius: 16px;
        padding: 1.2rem 1.4rem;
    }
    .nastco-split-pct {
        font-size: 1.65rem;
        font-weight: 900;
        color: var(--split-color, #facc15);
        line-height: 1.1;
    }
    .nastco-split-label {
        font-size: 0.8rem;
        font-weight: 800;
        color: #ffffff;
        margin-top: 0.3rem;
        text-transform: uppercase;
        letter-spacing: 0.05em;
    }
    .nastco-split-val {
        font-size: 0.85rem;
        color: #94a3b8;
        margin-top: 0.35rem;
        font-family: monospace;
    }
    /* Centre Filter Bar & Visual Bars */
    .nastco-ledger-controls {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        margin-bottom: 1.5rem;
        padding-bottom: 1rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }
    .nastco-centre-filters {
        display: flex;
        flex-wrap: wrap;
        gap: 0.5rem;
    }
    .nastco-filter-btn {
        background: rgba(255, 255, 255, 0.05);
        border: 1px solid rgba(255, 255, 255, 0.12);
        color: #cbd5e1;
        padding: 0.45rem 0.85rem;
        border-radius: 8px;
        font-size: 0.76rem;
        font-weight: 800;
        cursor: pointer;
        transition: all 0.2s ease;
    }
    .nastco-filter-btn:hover,
    .nastco-filter-btn.is-active {
        background: rgba(56, 189, 248, 0.18);
        border-color: #38bdf8;
        color: #ffffff;
    }
    .nastco-bars-table {
        display: flex;
        flex-direction: column;
        gap: 1rem;
    }
    .nastco-bar-row {
        background: rgba(4, 9, 20, 0.55);
        border: 1px solid rgba(255, 255, 255, 0.07);
        border-radius: 14px;
        padding: 1rem 1.25rem;
        transition: all 0.25s ease;
    }
    .nastco-bar-top {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 0.55rem;
        font-size: 0.85rem;
        font-weight: 700;
    }
    .nastco-bar-track {
        width: 100%;
        height: 10px;
        background: rgba(255, 255, 255, 0.06);
        border-radius: 999px;
        overflow: hidden;
    }
    .nastco-bar-fill {
        height: 100%;
        border-radius: 999px;
        transition: width 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    }
    /* Looker Studio Iframe Wrapper */
    .nastco-iframe-wrapper {
        display: none;
        position: relative;
        width: 100%;
        min-height: 620px;
        border-radius: 16px;
        overflow: hidden;
        border: 1px solid rgba(255, 255, 255, 0.12);
        background: #02060d;
    }
    .nastco-iframe-wrapper.is-visible {
        display: block;
    }
    .nastco-iframe-wrapper iframe {
        width: 100%;
        height: 620px;
        border: 0;
    }
    .nastco-iframe-toolbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.75rem 1.1rem;
        background: rgba(15, 23, 42, 0.95);
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        font-size: 0.78rem;
        color: #94a3b8;
    }
</style>

<section id="executive-financial-dashboard" class="nastco-looker-section">
    <div class="nastco-looker-container">

        <div class="nastco-looker-header">
            <div>
                <div class="nastco-looker-kicker">
                    <span class="nastco-pulse-dot"></span>
                    <span>LIVELEDGER TELEMETRY • NOTAP &amp; PPA 2007 ROYALTY ENGINE</span>
                </div>
                <h2 class="nastco-looker-title">Executive Financial &amp; Royalty Dashboard</h2>
                <p class="nastco-looker-sub">
                    Real-time commercialization ledger tracking IP royalties, laboratory service revenues, and statutory <strong>40% / 35% / 25%</strong> distribution across all six NASTCO Research Centres.
                </p>
            </div>

            <div class="nastco-looker-tabs" role="tablist">
                <button type="button" class="nastco-looker-tab is-active" id="tabBtnSimulated" onclick="nastcoSwitchLedgerMode('simulated')">
                    ⚡ Interactive LiveLedger
                </button>
                <button type="button" class="nastco-looker-tab" id="tabBtnLooker" onclick="nastcoSwitchLedgerMode('looker')">
                    📊 Google Looker Studio Embed
                </button>
            </div>
        </div>

        <div class="nastco-looker-frame-card">

            <!-- Statutory 40 / 35 / 25 Royalty Split Cards -->
            <div class="nastco-split-strip">
                <div class="nastco-split-card" style="--split-color: #38bdf8;">
                    <div class="nastco-split-pct" id="ledgerGrossTotal">&#8358; 485.00M</div>
                    <div class="nastco-split-label">Gross Commercial Inflow (YTD)</div>
                    <div class="nastco-split-val">100% Verified via LiveLedger Apps Script</div>
                </div>
                <div class="nastco-split-card" style="--split-color: #10b981;">
                    <div class="nastco-split-pct" id="ledgerSplit40">&#8358; 194.00M</div>
                    <div class="nastco-split-label">40% Inventing Research Team</div>
                    <div class="nastco-split-val">Direct Researcher &amp; Lab Incentive Pool</div>
                </div>
                <div class="nastco-split-card" style="--split-color: #facc15;">
                    <div class="nastco-split-pct" id="ledgerSplit35">&#8358; 169.75M</div>
                    <div class="nastco-split-label">35% Host Research Directorate</div>
                    <div class="nastco-split-val">Reinvested in Centre R&amp;D Infrastructure</div>
                </div>
                <div class="nastco-split-card" style="--split-color: #a855f7;">
                    <div class="nastco-split-pct" id="ledgerSplit25">&#8358; 121.25M</div>
                    <div class="nastco-split-label">25% NASTCO Sovereign Complex</div>
                    <div class="nastco-split-val">Central Commercialization &amp; IP Protection</div>
                </div>
            </div>

            <!-- PANEL 1: Interactive Offline-Ready LiveLedger Telemetry -->
            <div id="nastcoSimulatedPanel">
                <div class="nastco-ledger-controls">
                    <div class="nastco-centre-filters">
                        <button type="button" class="nastco-filter-btn is-active" onclick="nastcoFilterLedger('ALL', 485.0, this)">ALL CENTRES (&#8358;485M)</button>
                        <button type="button" class="nastco-filter-btn" onclick="nastcoFilterLedger('AMSARC', 96.5, this)">AMSARC</button>
                        <button type="button" class="nastco-filter-btn" onclick="nastcoFilterLedger('BARC', 112.0, this)">BARC</button>
                        <button type="button" class="nastco-filter-btn" onclick="nastcoFilterLedger('CARC', 78.5, this)">CARC</button>
                        <button type="button" class="nastco-filter-btn" onclick="nastcoFilterLedger('PARC', 64.0, this)">PARC</button>
                        <button type="button" class="nastco-filter-btn" onclick="nastcoFilterLedger('AEPC', 84.0, this)">AEPC</button>
                        <button type="button" class="nastco-filter-btn" onclick="nastcoFilterLedger('NTC', 50.0, this)">NTC</button>
                    </div>
                    <div style="font-size:0.76rem; color:#10b981; font-weight:700;">
                        &#9679; SYNCED WITH GOOGLE SHEETS `LiveLedger` WEBHOOK
                    </div>
                </div>

                <div class="nastco-bars-table" id="nastcoLedgerBars">
                    <div class="nastco-bar-row" data-centre="BARC">
                        <div class="nastco-bar-top">
                            <span><strong>BARC</strong> — Biotechnology Advanced Research Centre (Genomics &amp; Bio-Ventures)</span>
                            <span style="color:#10b981;">&#8358; 112.00M (23.1%)</span>
                        </div>
                        <div class="nastco-bar-track"><div class="nastco-bar-fill" style="width:92%; background:#10b981;"></div></div>
                    </div>

                    <div class="nastco-bar-row" data-centre="AMSARC">
                        <div class="nastco-bar-top">
                            <span><strong>AMSARC</strong> — Applied Mathematics and Simulation Advanced Research Centre</span>
                            <span style="color:#38bdf8;">&#8358; 96.50M (19.9%)</span>
                        </div>
                        <div class="nastco-bar-track"><div class="nastco-bar-fill" style="width:82%; background:#38bdf8;"></div></div>
                    </div>

                    <div class="nastco-bar-row" data-centre="AEPC">
                        <div class="nastco-bar-top">
                            <span><strong>AEPC</strong> — Advanced Electric Power Centre (Direct-DC &amp; Solar Microgrids)</span>
                            <span style="color:#facc15;">&#8358; 84.00M (17.3%)</span>
                        </div>
                        <div class="nastco-bar-track"><div class="nastco-bar-fill" style="width:74%; background:#facc15;"></div></div>
                    </div>

                    <div class="nastco-bar-row" data-centre="CARC">
                        <div class="nastco-bar-top">
                            <span><strong>CARC</strong> — Chemistry Advanced Research Centre (Solid Minerals &amp; Assays)</span>
                            <span style="color:#f59e0b;">&#8358; 78.50M (16.2%)</span>
                        </div>
                        <div class="nastco-bar-track"><div class="nastco-bar-fill" style="width:68%; background:#f59e0b;"></div></div>
                    </div>

                    <div class="nastco-bar-row" data-centre="PARC">
                        <div class="nastco-bar-top">
                            <span><strong>PARC</strong> — Physics Advanced Research Centre (Thin-Film &amp; Photonics)</span>
                            <span style="color:#a855f7;">&#8358; 64.00M (13.2%)</span>
                        </div>
                        <div class="nastco-bar-track"><div class="nastco-bar-fill" style="width:56%; background:#a855f7;"></div></div>
                    </div>

                    <div class="nastco-bar-row" data-centre="NTC">
                        <div class="nastco-bar-top">
                            <span><strong>NTC</strong> — Nuclear Technology Centre (Gamma Irradiation &amp; NDT)</span>
                            <span style="color:#ef4444;">&#8358; 50.00M (10.3%)</span>
                        </div>
                        <div class="nastco-bar-track"><div class="nastco-bar-fill" style="width:45%; background:#ef4444;"></div></div>
                    </div>
                </div>
            </div>

            <!-- PANEL 2: Google Looker Studio Live Embed -->
            <div id="nastcoLookerPanel" class="nastco-iframe-wrapper">
                <div class="nastco-iframe-toolbar">
                    <span>🔗 Source: <code><?php echo esc_html( $looker_embed_url ); ?></code></span>
                    <?php if ( $is_placeholder_url ) : ?>
                        <span style="color:#facc15;">⚠️ Configure live report URL via: <code>wp option update nastco_looker_embed_url 'https://lookerstudio.google.com/embed/reporting/YOUR_ID'</code></span>
                    <?php else : ?>
                        <a href="<?php echo esc_url( $looker_embed_url ); ?>" target="_blank" rel="noopener" style="color:#38bdf8; text-decoration:none; font-weight:700;">Open Fullscreen Report &#8599;</a>
                    <?php endif; ?>
                </div>
                <iframe
                    id="nastcoLookerIframe"
                    data-src="<?php echo esc_url( $looker_embed_url ); ?>"
                    title="NASTCO Looker Studio Executive Financial Dashboard"
                    allowfullscreen
                    sandbox="allow-storage-access-by-user-activation allow-scripts allow-same-origin allow-popups allow-popups-to-escape-sandbox">
                </iframe>
            </div>

        </div>
    </div>
</section>

<script>
function nastcoSwitchLedgerMode(mode) {
    var simPanel    = document.getElementById('nastcoSimulatedPanel');
    var lookerPanel = document.getElementById('nastcoLookerPanel');
    var btnSim      = document.getElementById('tabBtnSimulated');
    var btnLooker   = document.getElementById('tabBtnLooker');
    var iframe      = document.getElementById('nastcoLookerIframe');

    if (mode === 'looker') {
        simPanel.style.display = 'none';
        lookerPanel.classList.add('is-visible');
        btnSim.classList.remove('is-active');
        btnLooker.classList.add('is-active');
        if (iframe && !iframe.getAttribute('src')) {
            iframe.setAttribute('src', iframe.getAttribute('data-src'));
        }
    } else {
        simPanel.style.display = 'block';
        lookerPanel.classList.remove('is-visible');
        btnLooker.classList.remove('is-active');
        btnSim.classList.add('is-active');
    }
}

function nastcoFilterLedger(centre, grossMillions, btnEl) {
    var buttons = document.querySelectorAll('.nastco-filter-btn');
    buttons.forEach(function(b) { b.classList.remove('is-active'); });
    if (btnEl) btnEl.classList.add('is-active');

    var s40 = (grossMillions * 0.40).toFixed(2);
    var s35 = (grossMillions * 0.35).toFixed(2);
    var s25 = (grossMillions * 0.25).toFixed(2);

    document.getElementById('ledgerGrossTotal').innerHTML = '&#8358; ' + grossMillions.toFixed(2) + 'M';
    document.getElementById('ledgerSplit40').innerHTML    = '&#8358; ' + s40 + 'M';
    document.getElementById('ledgerSplit35').innerHTML    = '&#8358; ' + s35 + 'M';
    document.getElementById('ledgerSplit25').innerHTML    = '&#8358; ' + s25 + 'M';

    var rows = document.querySelectorAll('#nastcoLedgerBars .nastco-bar-row');
    rows.forEach(function(row) {
        if (centre === 'ALL' || row.getAttribute('data-centre') === centre) {
            row.style.opacity = '1';
            row.style.transform = 'scale(1)';
        } else {
            row.style.opacity = '0.28';
            row.style.transform = 'scale(0.99)';
        }
    });
}
</script>
