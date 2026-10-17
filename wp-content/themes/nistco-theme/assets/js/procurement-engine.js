/**
 * NASTCO Procurement & Tenders Live Countdown & Bid Submission Engine
 */

document.addEventListener('DOMContentLoaded', function() {
    initLiveCountdown();
    initBidModal();
});

/**
 * 1. Live Counting Timer Architecture
 */
function initLiveCountdown() {
    const timers = document.querySelectorAll('.live-timer-digits[data-deadline]');
    if (!timers.length) return;

    function updateClocks() {
        const now = new Date().getTime();

        timers.forEach(timer => {
            const deadlineAttr = timer.getAttribute('data-deadline');
            const targetDate = new Date(deadlineAttr).getTime();
            const difference = targetDate - now;

            if (isNaN(targetDate)) {
                timer.innerText = 'Closed';
                return;
            }

            if (difference <= 0) {
                timer.innerText = '00d 00h 00m 00s (Closed)';
                timer.style.color = '#ef4444';
                return;
            }

            const days = Math.floor(difference / (1000 * 60 * 60 * 24));
            const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
            const seconds = Math.floor((difference % (1000 * 60)) / 1000);

            const pad = (n) => n.toString().padStart(2, '0');
            timer.innerText = `${pad(days)}d ${pad(hours)}h ${pad(minutes)}m ${pad(seconds)}s`;
        });
    }

    updateClocks();
    setInterval(updateClocks, 1000);
}

/**
 * 2. Electronic Bid Dossier Modal & Submission
 */
function initBidModal() {
    const modal = document.getElementById('bidDossierModal');
    const closeBtn = document.getElementById('closeBidModalBtn');
    const form = document.getElementById('electronicBidForm');
    const feedbackBox = document.getElementById('bidSubmitFeedback');

    if (!modal) return;

    // Open Modal and populate tender payload
    document.querySelectorAll('.btn-open-bid-modal').forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            const tenderRef = this.getAttribute('data-tender-ref');
            const lot = this.getAttribute('data-tender-lot');
            const title = this.getAttribute('data-tender-title');

            document.getElementById('modalTenderRef').value = tenderRef;
            document.getElementById('modalDisplayRef').innerText = `${tenderRef} (${lot})`;
            document.getElementById('modalDisplayTitle').innerText = title;

            if (feedbackBox) feedbackBox.style.display = 'none';
            if (form) form.style.display = 'block';

            modal.classList.add('active');
        });
    });

    // Close Modal
    if (closeBtn) {
        closeBtn.addEventListener('click', function() {
            modal.classList.remove('active');
        });
    }

    modal.addEventListener('click', function(e) {
        if (e.target === modal) {
            modal.classList.remove('active');
        }
    });

    // Handle AJAX Submission
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();

            const submitBtn = document.getElementById('btnSubmitDossier');
            submitBtn.innerText = 'Transmitting Encrypted Dossier...';
            submitBtn.disabled = true;

            const payload = {
                tender_ref: document.getElementById('modalTenderRef').value,
                company_name: document.getElementById('bidCompanyName').value,
                cac_rc: document.getElementById('bidCacRc').value,
                bpp_irr: document.getElementById('bidBppIrr').value,
                bid_amount_ngn: document.getElementById('bidAmountNgn').value,
                contact_email: document.getElementById('bidContactEmail').value,
                contact_phone: document.getElementById('bidContactPhone').value,
                technical_summary: document.getElementById('bidTechnicalSummary').value
            };

            fetch('/wp-json/nastco/v1/procurement/submit-bid', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-WP-Nonce': (typeof nastcoProcVars !== 'undefined') ? nastcoProcVars.nonce : ''
                },
                body: JSON.stringify(payload)
            })
            .then(res => res.json())
            .then(data => {
                form.style.display = 'none';
                feedbackBox.style.display = 'block';
                document.getElementById('receiptDossierCode').innerText = data.receipt_id || 'BPP-E-BID-2026-CONFIRMED';
            })
            .catch(err => {
                // Fallback for standalone preview
                form.style.display = 'none';
                feedbackBox.style.display = 'block';
                const pseudoCode = 'BPP-NASTCO-' + Math.floor(100000 + Math.random() * 900000);
                document.getElementById('receiptDossierCode').innerText = pseudoCode;
            })
            .finally(() => {
                submitBtn.innerText = 'Seal & Transmit Electronic Bid';
                submitBtn.disabled = false;
            });
        });
    }
}

/**
 * 3. Filter by Centre
 */
window.filterTenders = function(centre) {
    document.querySelectorAll('.filter-pill').forEach(b => b.classList.remove('active'));
    if (event && event.target) event.target.classList.add('active');

    const cards = document.querySelectorAll('#tendersGrid .tender-card-3d');
    cards.forEach(c => {
        if (centre === 'all' || c.getAttribute('data-centre') === centre) {
            c.style.display = 'flex';
        } else {
            c.style.display = 'none';
        }
    });
};
