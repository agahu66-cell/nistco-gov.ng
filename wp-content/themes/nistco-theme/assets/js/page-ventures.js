/**
 * NASTCO Venture Marketplace — Interactive Royalty Calculator
 */
document.addEventListener('DOMContentLoaded', () => {
    const revenueInput = document.getElementById('annualRevenueInput');
    if (!revenueInput) return;

    const inventorEl = document.getElementById('inventorShare');
    const centreEl = document.getElementById('centreShare');
    const sovereignEl = document.getElementById('sovereignShare');

    function calculateRoyalty() {
        const val = parseFloat(revenueInput.value) || 0;
        const inventor = val * 0.40;
        const centre = val * 0.35;
        const sovereign = val * 0.25;

        inventorEl.textContent = '₦' + inventor.toLocaleString();
        centreEl.textContent = '₦' + centre.toLocaleString();
        sovereignEl.textContent = '₦' + sovereign.toLocaleString();
    }

    revenueInput.addEventListener('input', calculateRoyalty);
    calculateRoyalty(); // initial calc
});
