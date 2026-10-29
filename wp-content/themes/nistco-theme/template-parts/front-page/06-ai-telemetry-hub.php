<?php
/**
 * Front Page Partial 06: Live AI Telemetry Hub (3D Glassmorphic Command Center)
 */
defined( 'ABSPATH' ) || exit;
?>
<section class="fp-section fp-ai-telemetry-section" id="ai-telemetry-hub">
    <div class="fp-container">
        <div class="fp-section-head">
            <span class="fp-eyebrow">AUTONOMOUS SENSORY GATEWAY • GATE 2 SENTINEL</span>
            <h2 class="fp-section-title text-3d-extrude">Live Complex AI Telemetry Hub</h2>
            <p class="fp-section-desc text-3d-relief">Real-time sensor streams from the Sheda Science Complex HPE ProLiant cluster, AMSARC quantum simulation nodes, and NTC radiation arrays.</p>
        </div>

        <div class="abt-card-3d ai-hub-command-console color-theme-cyan" id="liveAiHubConsole">
            <div class="ai-hub-top-row">
                <div class="ai-hub-status-pill">
                    <span class="pulse-dot-green"></span>
                    <span id="hubStatusText">CONNECTING TO REST TELEMETRY...</span>
                </div>
                <span id="hubTimestamp" class="ai-hub-time">--:--:--</span>
            </div>

            <div class="ai-hub-metrics-grid">
                <div class="ai-metric-card color-theme-gold">
                    <span class="aim-label">CLUSTER LOAD</span>
                    <div class="aim-val text-3d-number-gold" id="hubClusterLoad">--%</div>
                    <small>HPE ProLiant Gen10 Node Pool</small>
                </div>
                <div class="ai-metric-card color-theme-cyan">
                    <span class="aim-label">AMSARC SIM SYNC</span>
                    <div class="aim-val text-3d-number-cyan" id="hubQuantumSync">--%</div>
                    <small>Physics-Informed Neural Network</small>
                </div>
                <div class="ai-metric-card color-theme-crimson">
                    <span class="aim-label">NTC GAMMA DOSIMETRY</span>
                    <div class="aim-val text-3d-number-crimson" id="hubRadiation">-- mSv</div>
                    <small>Cobalt-60 GIF Exclusion Zone</small>
                </div>
                <div class="ai-metric-card color-theme-emerald">
                    <span class="aim-label">ACTIVE CENTRES</span>
                    <div class="aim-val text-3d-number-emerald" id="hubActiveNodes">6 / 6</div>
                    <small>Unified R&amp;D Directorate Sync</small>
                </div>
            </div>

            <div class="ai-hub-recommendation-box">
                <span class="ai-rec-title">🤖 AUTONOMOUS AGENT RECOMMENDATION:</span>
                <p id="hubRecommendationText" class="text-3d-relief">Initializing diagnostic models across Sheda Science City sensor arrays...</p>
            </div>
        </div>
    </div>
</section>
