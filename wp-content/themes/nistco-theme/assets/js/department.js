document.addEventListener('DOMContentLoaded', function() {
    initDeptReveals();
    initDeptForm();
});

function initDeptReveals() {
    const elements = document.querySelectorAll('.cn-reveal');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('cn-active');
                observer.unobserve(entry.target);
            }
        });
    }, { threshold: 0.1 });
    elements.forEach(el => observer.observe(el));
}

function initDeptForm() {
    const form = document.getElementById('facilityBookingForm');
    if (!form) return;
    form.addEventListener('submit', (e) => {
        e.preventDefault();
        const btn = form.querySelector('button[type="submit"]');
        const ogText = btn.innerHTML;
        btn.innerHTML = 'Securely Transmitting...';
        btn.disabled = true;
        btn.style.opacity = '0.7';
        
        // Mock processing
        setTimeout(() => {
            btn.innerHTML = 'Request Submitted ✓';
            btn.style.background = 'linear-gradient(135deg, #008751, #00d285)';
            form.reset();
            setTimeout(() => {
                btn.innerHTML = ogText;
                btn.disabled = false;
                btn.style.opacity = '1';
                btn.style.background = ''; // reset to default css
            }, 3000);
        }, 1500);
    });
}
