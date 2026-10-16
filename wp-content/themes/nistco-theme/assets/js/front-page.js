/**
 * NISTCO Front Page Interactive Engine
 * Handles bidirectional scroll observer, 3D epicyclic parallax,
 * interactive 3D card tilt, and dynamic metric counters.
 */

document.addEventListener('DOMContentLoaded', function() {
    // 1. Smoothed Bidirectional Scroll Animation Engine
    const scrollElements = document.querySelectorAll('.scroll-fx');

    if (scrollElements.length > 0) {
        const scrollObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                const el = entry.target;

                if (entry.isIntersecting) {
                    el.classList.add('is-visible');
                    el.classList.remove('scrolled-past', 'scrolled-above');
                } else {
                    el.classList.remove('is-visible');
                    const rect = entry.boundingClientRect;

                    if (rect.top < 0) {
                        el.classList.add('scrolled-past');
                        el.classList.remove('scrolled-above');
                    } else {
                        el.classList.add('scrolled-above');
                        el.classList.remove('scrolled-past');
                    }
                }
            });
        }, {
            threshold: 0.12,
            rootMargin: '0px 0px -40px 0px'
        });

        scrollElements.forEach(el => scrollObserver.observe(el));
    }

    // 2. Interactive Parallax for 3D Hero Epicyclic Gear Stage
    const heroViewport = document.querySelector('.nistco-hero-viewport');
    const stage = document.querySelector('.epicyclic-stage');

    if (heroViewport && stage) {
        const basePitch = 54;
        const baseYaw = -36;

        heroViewport.closest('.nistco-hero-section')?.addEventListener('mousemove', (e) => {
            const rect = heroViewport.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;

            requestAnimationFrame(() => {
                stage.style.transform = `rotateX(${basePitch - (y * 10)}deg) rotateZ(${baseYaw + (x * 12)}deg)`;
            });
        });

        heroViewport.closest('.nistco-hero-section')?.addEventListener('mouseleave', () => {
            requestAnimationFrame(() => {
                stage.style.transform = `rotateX(${basePitch}deg) rotateZ(${baseYaw}deg)`;
            });
        });
    }

    // 3. Impact Metric Animated Counters
    const counters = document.querySelectorAll('.nistco-counter');
    if (counters.length > 0) {
        const counterObserver = new IntersectionObserver((entries, observerInstance) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseFloat(el.getAttribute('data-target'));
                    const suffix = el.getAttribute('data-suffix') || '';
                    const isComma = el.getAttribute('data-comma') === 'true';
                    let startTime = null;

                    function step(currentTime) {
                        if (!startTime) startTime = currentTime;
                        const progress = Math.min((currentTime - startTime) / 2200, 1);
                        const easeProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                        let formatted = Math.floor(target * easeProgress);
                        if (isComma) formatted = formatted.toLocaleString();
                        el.textContent = formatted + suffix;
                        if (progress < 1) requestAnimationFrame(step);
                    }
                    requestAnimationFrame(step);
                    observerInstance.unobserve(el);
                }
            });
        }, { threshold: 0.25 });

        counters.forEach(counter => counterObserver.observe(counter));
    }

    // 4. Interactive 3D Cursor Tilt for Centres & Partners
    const cards3D = document.querySelectorAll('.centre-card-3d, .partner-card-modern');

    cards3D.forEach(card => {
        card.addEventListener('mousemove', (e) => {
            const rect = card.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;

            const iconBox = card.querySelector('.icon-box-3d, .insignia-inner-3d');
            if (iconBox) {
                iconBox.style.transform = `rotateX(${-y * 22}deg) rotateY(${x * 22}deg) translateZ(14px)`;
            }
        });

        card.addEventListener('mouseleave', () => {
            const iconBox = card.querySelector('.icon-box-3d, .insignia-inner-3d');
            if (iconBox) {
                iconBox.style.transform = '';
            }
        });
    });
});
