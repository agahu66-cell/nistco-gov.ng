<?php
/**
 * Template Part: Statutory Royalty Calculator (40/35/25 Model)
 */
defined( 'ABSPATH' ) || exit;
?>
<section class="ventures-container">
    <div class="royalty-calc-section">
        <div class="calc-grid">
            <div>
                <span class="venture-badge">Statutory Compliance Framework</span>
                <h2 style="font-size: 2rem; font-weight: 900; color: #fff; margin: 0.5rem 0 1rem;">40/35/25 Royalty Simulator</h2>
                <p style="color: #94a3b8; line-height: 1.6; margin-bottom: 2rem;">Calculate projected statutory revenue distribution for commercial off-takers under NASTCO's institutional commercialization mandate.</p>
                
                <div class="calc-form-group">
                    <label class="calc-label">Projected Annual Gross Revenue (₦)</label>
                    <input type="number" id="calcGrossInput" class="calc-input" value="50000000" step="5000000">
                </div>
                
                <div class="calc-form-group">
                    <label class="calc-label">Research Centre Allocation Tier</label>
                    <select id="calcTierSelect" class="calc-select">
                        <option value="0.40">Primary Inventing Centre (40% Share)</option>
                        <option value="0.35">Institutional Development Fund (35% Share)</option>
                        <option value="0.25">Central Statutory Reserve (25% Share)</option>
                    </select>
                </div>
            </div>
            
            <div class="calc-result-box">
                <div class="calc-result-title">Projected Allocation Share</div>
                <div id="calcResultDisplay" class="calc-result-val">₦20,000,000</div>
                <p style="color: #cbd5e1; font-size: 0.85rem; margin-bottom: 1.5rem;">Auto-synced with Looker Studio Live Ledger telemetry.</p>
                
                <div class="calc-breakdown">
                    <div>Inventors (40%): ₦20M</div>
                    <div>Research (35%): ₦17.5M</div>
                    <div>Reserve (25%): ₦12.5M</div>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', () => {
    const grossInput = document.getElementById('calcGrossInput');
    const tierSelect = document.getElementById('calcTierSelect');
    const resultDisplay = document.getElementById('calcResultDisplay');

    function updateCalc() {
        const gross = parseFloat(grossInput.value) || 0;
        const rate = parseFloat(tierSelect.value) || 0.40;
        const total = gross * rate;
        resultDisplay.textContent = '₦' + total.toLocaleString();
    }

    if (grossInput && tierSelect) {
        grossInput.addEventListener('input', updateCalc);
        tierSelect.addEventListener('change', updateCalc);
        updateCalc();
    }
});
</script>
