/**
 * NISTCO Centres Directory Hub Interactive Engine
 * Handles 3D parallax hero depth and smooth fade-in / fade-out domain transitions.
 */
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const cards = document.querySelectorAll('.hub-card');
    const heroStage = document.querySelector('.hero-3d-stage');
    const insignia = document.querySelector('.insignia-3d-container');

    // 1. Subtle 3D Mouse Parallax on Hero Insignia
    if (heroStage && insignia) {
        heroStage.addEventListener('mousemove', function(e) {
            const rect = heroStage.getBoundingClientRect();
            const x = (e.clientX - rect.left) / rect.width - 0.5;
            const y = (e.clientY - rect.top) / rect.height - 0.5;
            insignia.style.transform = `rotateY(${x * 35}deg) rotateX(${-y * 35}deg) translateZ(30px)`;
        });

        heroStage.addEventListener('mouseleave', function() {
            insignia.style.transform = '';
        });
    }

    // 2. Smooth Staggered Fade-in / Fade-out Filtering
    filterButtons.forEach(button => {
        button.addEventListener('click', function() {
            if (this.classList.contains('active')) return;

            filterButtons.forEach(btn => btn.classList.remove('active'));
            this.classList.add('active');

            const selectedDomain = this.getAttribute('data-domain');

            // Phase 1: Fade out all cards
            cards.forEach(card => {
                card.classList.add('fade-out');
                card.classList.remove('fade-in');
            });

            // Phase 2: Filter and staggered fade-in
            setTimeout(() => {
                let delayIndex = 0;
                cards.forEach(card => {
                    const cardDomain = card.getAttribute('data-domain');
                    const matches = (selectedDomain === 'all' || cardDomain === selectedDomain);

                    if (matches) {
                        card.style.display = 'flex';
                        setTimeout(() => {
                            card.classList.remove('fade-out');
                            card.classList.add('fade-in');
                        }, delayIndex * 50);
                        delayIndex++;
                    } else {
                        card.style.display = 'none';
                    }
                });
            }, 300);
        });
    });
});
