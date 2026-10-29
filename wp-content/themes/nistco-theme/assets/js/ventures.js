document.addEventListener('DOMContentLoaded', function() {
    initVenturesFilter();
    initRoyaltySimulator();
    initRoyaltyRedistributionCountdown();
    initMatrixMetrics();
});

// --- CORE MATRIX ENGINE (ULTRA-SLOW PROTOCOL) ---
const matrixChars = '0123456789';

function runMatrixReveal(element, finalStr) {
    if (element.matrixInterval) clearInterval(element.matrixInterval);
    let iterations = 0;
    
    // Increased to 100ms for a heavy, deliberate terminal glitch
    element.matrixInterval = setInterval(() => {
        element.innerText = finalStr.split('').map((char, index) => {
            // Only scramble numeric digits; leave letters/symbols alone
            if (!/[0-9]/.test(char)) return char;
            if (index < Math.floor(iterations)) return char;
            return matrixChars[Math.floor(Math.random() * 10)];
        }).join('');
        
        if (iterations >= finalStr.length) {
            clearInterval(element.matrixInterval);
            element.innerText = finalStr;
        }
        // Reduced to 1/5 so the scramble effect takes much longer to resolve
        iterations += 1/5; 
    }, 100); 
}

function initMatrixMetrics() {
    const metrics = document.querySelectorAll('.matrix-metric');
    
    metrics.forEach(metric => {
        metric.dataset.finalValue = metric.innerText;
        // Zero out initial numbers
        metric.innerText = metric.dataset.finalValue.replace(/[0-9]/g, '0');
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if(entry.isIntersecting) {
                if(!entry.target.classList.contains('matrix-activated')) {
                    entry.target.classList.add('matrix-activated');
                    runMatrixReveal(entry.target, entry.target.dataset.finalValue);
                }
            } else {
                // Reset when scrolled out of view to re-scramble on entry
                entry.target.classList.remove('matrix-activated');
                if(entry.target.matrixInterval) clearInterval(entry.target.matrixInterval);
                entry.target.innerText = entry.target.dataset.finalValue.replace(/[0-9]/g, '0');
            }
        });
    }, { threshold: 0.1 });

    metrics.forEach(m => observer.observe(m));
}

// --- 1. FILTERING ENGINE ---
function initVenturesFilter() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const tableRows = document.querySelectorAll('.patent-strip');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', function() {
            filterBtns.forEach(b => b.classList.remove('active'));
            this.classList.add('active');
            const target = this.getAttribute('data-filter');

            tableRows.forEach(row => {
                if (target === 'all' || target === row.getAttribute('data-category')) {
                    row.classList.remove('hide');
                } else {
                    row.classList.add('hide');
                }
            });
        });
    });
}

// --- 2. DEBOUNCED MATRIX SIMULATOR ---
function initRoyaltySimulator() {
    const inputGross = document.getElementById('simGross');
    const inputRate = document.getElementById('simRate');
    const outPool = document.getElementById('outPool');
    const out40 = document.getElementById('out40');
    const out35 = document.getElementById('out35');
    const out25 = document.getElementById('out25');

    if(!inputGross || !inputRate) return;

    inputGross.addEventListener('input', function(e) {
        let val = this.value.replace(/[^\d]/g, "");
        if (val === "") { this.value = ""; return; }
        this.value = parseInt(val, 10).toLocaleString('en-US');
    });

    const formatNGN = (num) => {
        return '₦' + num.toFixed(2).replace(/\d(?=(\d{3})+\.)/g, '$&,');
    };

    let debounceTimer;
    const calculate = () => {
        clearTimeout(debounceTimer);
        debounceTimer = setTimeout(() => {
            let grossStr = inputGross.value.replace(/,/g, '');
            let gross = parseFloat(grossStr) || 0;
            let rate = parseFloat(inputRate.value) || 0;
            
            let pool = gross * (rate / 100);
            
            // Execute Matrix effect on simulator results
            runMatrixReveal(outPool, formatNGN(pool));
            runMatrixReveal(out40, formatNGN(pool * 0.40));
            runMatrixReveal(out35, formatNGN(pool * 0.35));
            runMatrixReveal(out25, formatNGN(pool * 0.25));
        }, 350); 
    };

    inputGross.addEventListener('keyup', calculate);
    inputRate.addEventListener('input', calculate);
    setTimeout(calculate, 600); // Initial Calc
}

// --- 3. REDISTRIBUTION COUNTDOWN ---
function initRoyaltyRedistributionCountdown() {
    const daysEl = document.getElementById('cd-days');
    const hoursEl = document.getElementById('cd-hours');
    const minsEl = document.getElementById('cd-mins');
    const secsEl = document.getElementById('cd-secs');
    
    if(!daysEl || !hoursEl || !minsEl || !secsEl) return;
    
    const now = new Date();
    const currentQuarterMonth = Math.floor(now.getMonth() / 3) * 3 + 3;
    const targetDate = new Date(now.getFullYear(), currentQuarterMonth, 0, 23, 59, 59);

    function update() {
        const tDiff = targetDate - new Date();
        if(tDiff <= 0) return;
        
        const d = Math.floor(tDiff / (1000 * 60 * 60 * 24));
        const h = Math.floor((tDiff / (1000 * 60 * 60)) % 24);
        const m = Math.floor((tDiff / 1000 / 60) % 60);
        const s = Math.floor((tDiff / 1000) % 60);
        
        daysEl.innerText = d.toString().padStart(2, '0');
        hoursEl.innerText = h.toString().padStart(2, '0');
        minsEl.innerText = m.toString().padStart(2, '0');
        secsEl.innerText = s.toString().padStart(2, '0');
    }
    setInterval(update, 1000); update();
}
