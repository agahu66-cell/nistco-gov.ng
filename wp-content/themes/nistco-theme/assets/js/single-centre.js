/**
 * NISTCO Single Research Centre Interactive Script
 */
document.addEventListener('DOMContentLoaded', function() {
    const tabLinks = document.querySelectorAll('.centre-nav-item');
    const sections = document.querySelectorAll('.centre-section, .centre-hero');

    tabLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            const targetId = this.getAttribute('href');
            const targetEl = document.querySelector(targetId);

            if (targetEl) {
                targetEl.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });

    window.addEventListener('scroll', function() {
        let currentSectionId = '';
        const scrollPosition = window.scrollY + 140;

        sections.forEach(section => {
            const top = section.offsetTop;
            const height = section.offsetHeight;
            if (scrollPosition >= top && scrollPosition < top + height) {
                currentSectionId = '#' + section.getAttribute('id');
            }
        });

        tabLinks.forEach(link => {
            if (link.getAttribute('href') === currentSectionId) {
                link.classList.add('active');
            } else {
                link.classList.remove('active');
            }
        });
    });

    const faqButtons = document.querySelectorAll('.faq-question-btn');
    faqButtons.forEach(btn => {
        btn.addEventListener('click', function() {
            const parentItem = this.closest('.faq-item');
            const isOpen = parentItem.classList.contains('active');

            document.querySelectorAll('.faq-item').forEach(item => {
                item.classList.remove('active');
                item.querySelector('.faq-question-btn').setAttribute('aria-expanded', 'false');
            });

            if (!isOpen) {
                parentItem.classList.add('active');
                this.setAttribute('aria-expanded', 'true');
            }
        });
    });
});

// Facility Booking Form Handler
document.addEventListener('DOMContentLoaded', function() {
    const bookingForm = document.getElementById('facilityBookingForm');
    const statusMsg = document.getElementById('bookingStatusMsg');

    if (bookingForm) {
        bookingForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            // Simulate processing
            const btn = bookingForm.querySelector('button[type="submit"]');
            const originalText = btn.innerHTML;
            btn.innerHTML = 'Processing Request...';
            btn.style.opacity = '0.7';
            btn.style.pointerEvents = 'none';

            setTimeout(() => {
                btn.innerHTML = originalText;
                btn.style.opacity = '1';
                btn.style.pointerEvents = 'auto';
                
                statusMsg.textContent = 'Requisition registered. Our technical desk will contact you within 48 hours.';
                statusMsg.classList.add('show');
                bookingForm.reset();

                setTimeout(() => {
                    statusMsg.classList.remove('show');
                }, 8000);
            }, 1500);
        });
    }
});
