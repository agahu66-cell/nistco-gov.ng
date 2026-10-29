
// Live AI Telemetry Hub DOM Sync
document.addEventListener('DOMContentLoaded', () => {
    const hubConsole = document.getElementById('liveAiHubConsole');
    if (!hubConsole) return;

    async function updateHubConsole() {
        try {
            const res = await fetch('/wp-json/nastco/v1/ai-telemetry');
            const json = await res.json();
            if (json.success && json.data) {
                const { metrics, ai_agent, timestamp } = json.data;

                document.getElementById('hubClusterLoad').textContent = metrics.cluster_load_pct + '%';
                document.getElementById('hubQuantumSync').textContent = metrics.amsarc_sync_pct + '%';
                document.getElementById('hubRadiation').textContent = metrics.ntc_radiation_msv + ' mSv';
                document.getElementById('hubActiveNodes').textContent = metrics.active_centres + ' / 6';
                document.getElementById('hubTimestamp').textContent = timestamp.split(' ')[1];
                document.getElementById('hubRecommendationText').textContent = ai_agent.recommendation;

                const statusText = document.getElementById('hubStatusText');
                statusText.textContent = `SYSTEM STATE: ${ai_agent.anomaly_state} (${ai_agent.status})`;
            }
        } catch (e) {
            console.warn('Telemetry hub sync error:', e);
        }
    }

    updateHubConsole();
    setInterval(updateHubConsole, 8000);
});
