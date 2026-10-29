/**
 * NASTCO CORE JAVASCRIPT
 * Features: Cascading Flow Reveals, FAQ Accordion, 3D Hover Tilt Physics
 */
document.addEventListener('DOMContentLoaded', function() {
    NastcoCore.initReveals();
    NastcoCore.initFaqs();
    NastcoCore.init3DTilt('.hero-stage-3d', '#heroFrontCard');
    NastcoCore.init3DTilt('.centre-card-wrap', '.centre-ultra-card');
});

const NastcoCore = {
    // 1. Cinematic Scroll Observers (Cascading Stagger Flow)
    initReveals: function() {
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    // Activate parent
                    entry.target.classList.add('cn-active');
                    
                    // Cascade children
                    const cascadeItems = entry.target.querySelectorAll('.cn-cascade');
                    cascadeItems.forEach((item, index) => {
                        item.style.transitionDelay = `${index * 0.8}s`;
                        item.classList.add('cn-active');
                    });
                } else {
                    // Deactivate parent
                    entry.target.classList.remove('cn-active');
                    
                    // Reset children flow
                    const cascadeItems = entry.target.querySelectorAll('.cn-cascade');
                    cascadeItems.forEach(item => {
                        item.style.transitionDelay = '0s';
                        item.classList.remove('cn-active');
                    });
                }
            });
        }, { threshold: 0.1, rootMargin: "0px 0px -50px 0px" });

        // Observe standalone elements and group containers
        document.querySelectorAll('.cn-reveal, .cn-reveal-group').forEach(el => observer.observe(el));
    },

    // 2. FAQ Accordion Logic
    initFaqs: function() {
        const faqItems = document.querySelectorAll('.faq-item');
        faqItems.forEach(item => {
            item.querySelector('.faq-question').addEventListener('click', () => {
                const isActive = item.classList.contains('active');
                faqItems.forEach(faq => faq.classList.remove('active'));
                if (!isActive) item.classList.add('active');
            });
        });
    },

    // 3. Global 3D Hover Engine
    init3DTilt: function(wrapperSelector, cardSelector) {
        if (window.innerWidth <= 992) return; 
        const wrappers = document.querySelectorAll(wrapperSelector);
        wrappers.forEach(wrap => {
            const card = wrap.querySelector(cardSelector);
            if (!card) return;
            wrap.addEventListener('mousemove', function(e) {
                const rect = wrap.getBoundingClientRect();
                const x = e.clientX - rect.left;
                const y = e.clientY - rect.top;
                const rotateX = ((y - rect.height/2) / (rect.height/2)) * -6;
                const rotateY = ((x - rect.width/2) / (rect.width/2)) * 6;
                card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateZ(20px)`;
            });
            wrap.addEventListener('mouseleave', () => {
                card.style.transform = 'rotateX(0deg) rotateY(0deg) translateZ(0)';
            });
        });
    }
};

/* ==========================================================================
   NASTCO STRATEGIC RESOURCES FILTER ENGINE
   ========================================================================== */
document.addEventListener('DOMContentLoaded', () => {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const dataCards = document.querySelectorAll('.data-card');

    if (filterBtns.length > 0 && dataCards.length > 0) {
        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // 1. Shift the glowing National Green active state
                filterBtns.forEach(b => b.classList.remove('active'));
                btn.classList.add('active');

                // 2. Extract target category (e.g., "all" or ".publications")
                const filterValue = btn.getAttribute('data-filter');

                dataCards.forEach(card => {
                    // Check if the card's classes include the target slug
                    const isMatch = filterValue === 'all' || card.classList.contains(filterValue.substring(1));
                    
                    if (!isMatch) {
                        // Animate out: Fade to 0 and scale down
                        card.classList.add('filter-hidden');
                        // Wait for the 0.5s CSS transition to finish, then collapse grid space
                        setTimeout(() => {
                            if(card.classList.contains('filter-hidden')) {
                                card.classList.add('filter-hide-complete');
                            }
                        }, 500); 
                    } else {
                        // Animate in: Restore grid space, then fade up
                        card.classList.remove('filter-hide-complete');
                        setTimeout(() => {
                            card.classList.remove('filter-hidden');
                        }, 50);
                    }
                });
            });
        });
    }
});

/* ==========================================================================
   MOBILE NAVIGATION TOGGLE ENGINE
   ========================================================================== */
document.addEventListener('DOMContentLoaded', () => {
    const toggleBtn = document.querySelector('.mobile-toggle');
    const navMenu = document.querySelector('.nav-links');
    const body = document.body;

    if (toggleBtn && navMenu) {
        toggleBtn.addEventListener('click', () => {
            navMenu.classList.toggle('active-menu');
            // Switch icon between Hamburger and Close (X)
            toggleBtn.innerHTML = navMenu.classList.contains('active-menu') ? '✕' : '☰';
            // Lock body scrolling when menu is open
            body.style.overflow = navMenu.classList.contains('active-menu') ? 'hidden' : '';
        });
    }
});
