/**
 * NASTCO About Page — Lightweight KPI Counter & Non-Blocking 3D Hover Engine
 */
document.addEventListener('DOMContentLoaded', () => {
    // 1. Animate KPI Counters
    document.querySelectorAll('.kpi-counter[data-target]').forEach(counter => {
        const target = parseInt(counter.getAttribute('data-target'), 10);
        if (isNaN(target)) return;
        let current = 0;
        const step = Math.max(1, Math.ceil(target / 40));
        const timer = setInterval(() => {
            current += step;
            if (current >= target) {
                counter.textContent = target.toLocaleString();
                clearInterval(timer);
            } else {
                counter.textContent = current.toLocaleString();
            }
        }, 25);
    });

    // 2. Smooth anchor scrolling for Hero Dock buttons (#directorates, #evolution-ledger, #contact)
    document.querySelectorAll('.abt-hero-btn-dock a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            const targetId = this.getAttribute('href');
            const targetEl = document.querySelector(targetId);
            if (targetEl) {
                e.preventDefault();
                targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});

// 3D Card Flip Carousel Controller
document.addEventListener('DOMContentLoaded', () => {
    const stage = document.getElementById('pubFlipCarousel');
    if (!stage) return;

    const cards = stage.querySelectorAll('.flip-card-3d');
    const dots = stage.querySelectorAll('#pubDots .dot');
    const prevBtn = document.getElementById('pubPrevBtn');
    const nextBtn = document.getElementById('pubNextBtn');
    let currentIndex = 0;

    function showCard(index) {
        cards.forEach((card, i) => {
            card.classList.toggle('active', i === index);
            card.classList.remove('is-flipped'); // reset flip on switch
        });
        dots.forEach((dot, i) => {
            dot.classList.toggle('active', i === index);
        });
        currentIndex = index;
    }

    if (nextBtn) {
        nextBtn.addEventListener('click', () => {
            let next = (currentIndex + 1) % cards.length;
            showCard(next);
        });
    }

    if (prevBtn) {
        prevBtn.addEventListener('click', () => {
            let prev = (currentIndex - 1 + cards.length) % cards.length;
            showCard(prev);
        });
    }

    dots.forEach((dot, i) => {
        dot.addEventListener('click', () => showCard(i));
    });

    // Flip Toggle Button Handler
    stage.querySelectorAll('.flip-toggle-btn').forEach(btn => {
        btn.addEventListener('click', (e) => {
            const card = e.target.closest('.flip-card-3d');
            if (card) {
                card.classList.toggle('is-flipped');
            }
        });
    });
});
