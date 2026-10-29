/**
 * NASTCO 3D Header Dropdown, Mobile Drawer & Ventures URL Filter Sync
 */
document.addEventListener('DOMContentLoaded', () => {
    const dropdownWrap = document.getElementById('nastcoCentresDropdown');
    const dropdownBtn  = document.getElementById('centresDropdownBtn');
    const mobileToggle = document.getElementById('nastcoMobileToggle');
    const navDock      = document.getElementById('nastcoNavDock');

    // 1. Click & Hover Toggle for Centres 3D Mega-Dropdown
    if (dropdownWrap && dropdownBtn) {
        dropdownBtn.addEventListener('click', (e) => {
            e.stopPropagation();
            const isOpen = dropdownWrap.classList.toggle('is-open');
            dropdownBtn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
        });

        // Close when clicking outside
        document.addEventListener('click', (e) => {
            if (!dropdownWrap.contains(e.target)) {
                dropdownWrap.classList.remove('is-open');
                dropdownBtn.setAttribute('aria-expanded', 'false');
            }
        });
    }

    // 2. Mobile Navigation Drawer Toggle
    if (mobileToggle && navDock) {
        mobileToggle.addEventListener('click', () => {
            const open = navDock.classList.toggle('is-mobile-open');
            mobileToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
        });
    }

    // 3. Auto-trigger Venture Marketplace filter if ?centre=xxx is in the URL
    const params = new URLSearchParams(window.location.search);
    const selectedCentre = params.get('centre');
    if (selectedCentre) {
        const targetBtn = document.querySelector(`.venture-filter-bar .filter-btn[data-filter="${selectedCentre.toLowerCase()}"]`);
        if (targetBtn) {
            targetBtn.click();
        }
    }
});
