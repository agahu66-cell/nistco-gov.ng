/**
 * NISTCO Single Research Centre Interactive Script
 * Tab synchronization and dynamic highlight tracking.
 */
document.addEventListener('DOMContentLoaded', function() {
    const tabLinks = document.querySelectorAll('.centre-tab-link');
    const sections = document.querySelectorAll('.portal-section');

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
        const scrollPosition = window.scrollY + 120;

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
});
