document.addEventListener('DOMContentLoaded', function() {
    if (window.nastcoAboutInitialized) return;
    window.nastcoAboutInitialized = true;

    initHero3DTilt();
    initIsoMapTilt();
    initFaqAccordion();
    init3DPubCarousel();
    initAnimatedCounters();
    initStakeholderMarquee();
    initSecureDispatch();
    
    // Fire up the new Cinematic Scroll Engine
    initScrollReveals();
});

function initScrollReveals() {
    // Select all major sections below the hero
    const sections = document.querySelectorAll('section:not(.hero-master-3d)');
    
    sections.forEach((sec, i) => {
        sec.classList.add('scroll-reveal-base');
        
        // Alternate directions algorithmically
        if (i % 4 === 0) sec.classList.add('reveal-up');
        else if (i % 4 === 1) sec.classList.add('reveal-left');
        else if (i % 4 === 2) sec.classList.add('reveal-right');
        else sec.classList.add('reveal-down');
    });

    // Sub-target bento cards and portraits for a pop-in scale effect
    const subCards = document.querySelectorAll('.feature-bento, .blueprint-card, .timeline-card, .portrait-card-3d');
    subCards.forEach((card, i) => {
        card.classList.add('scroll-reveal-base', 'reveal-scale');
        card.style.transitionDelay = `${(i % 3) * 0.15}s`; // Staggered pop-in
    });

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('scroll-reveal-active');
            } else {
                // Smooth fade out when it leaves the screen
                entry.target.classList.remove('scroll-reveal-active');
            }
        });
    }, { threshold: 0.15, rootMargin: "0px 0px -50px 0px" });

    sections.forEach(sec => observer.observe(sec));
    subCards.forEach(card => observer.observe(card));
}

function initIsoMapTilt() {
    const stage = document.querySelector('.isometric-stage');
    const grid = document.querySelector('.isometric-grid');
    if (!stage || !grid) return;
    stage.addEventListener('mousemove', function(e) {
        const rect = stage.getBoundingClientRect();
        const tiltX = 60 - ((e.clientY - rect.top - rect.height/2) / (rect.height/2)) * 5;
        const tiltZ = -45 + ((e.clientX - rect.left - rect.width/2) / (rect.width/2)) * 5;
        grid.style.transform = `rotateX(${tiltX}deg) rotateZ(${tiltZ}deg)`;
    });
    stage.addEventListener('mouseleave', () => grid.style.transform = `rotateX(60deg) rotateZ(-45deg)`);
}

function initStakeholderMarquee() {
    const track = document.getElementById('stakeholderTrack');
    if (!track) return;
    const items = Array.from(track.children);
    items.forEach(item => { track.appendChild(item.cloneNode(true)); });
}

function initHero3DTilt() {
    const card = document.getElementById('heroCubeCard');
    const container = document.querySelector('.hero-stage-3d');
    if (!card || !container) return;
    container.addEventListener('mousemove', function(e) {
        const rect = container.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        const rotateX = ((y - rect.height/2) / (rect.height/2)) * -12;
        const rotateY = ((x - rect.width/2) / (rect.width/2)) * 12;
        card.style.transform = `rotateX(${rotateX}deg) rotateY(${rotateY}deg)`;
    });
    container.addEventListener('mouseleave', () => card.style.transform = 'rotateX(0deg) rotateY(0deg)');
}

function initFaqAccordion() {
    const faqItems = document.querySelectorAll('.faq-item');
    faqItems.forEach(item => {
        item.querySelector('.faq-question').addEventListener('click', () => {
            const isActive = item.classList.contains('active');
            faqItems.forEach(faq => faq.classList.remove('active'));
            if (!isActive) item.classList.add('active');
        });
    });
}

function init3DPubCarousel() {
    const track = document.getElementById('pubCarouselTrack');
    const items = document.querySelectorAll('.pub-3d-card');
    if (!track || !items.length) return;
    const angle = 360 / items.length;
    const radius = Math.round((340 / 2) / Math.tan(Math.PI / items.length)) + 60;
    let currentAngle = 0, autoTimer = null;
    items.forEach((item, index) => { item.style.transform = `rotateY(${angle * index}deg) translateZ(${radius}px)`; });
    function rotateTrack() { track.style.transform = `translateZ(-${radius}px) rotateY(${currentAngle}deg)`; }
    function slideNext() { currentAngle -= angle; rotateTrack(); }
    function slidePrev() { currentAngle += angle; rotateTrack(); }
    document.getElementById('pubNextBtn')?.addEventListener('click', () => { slideNext(); clearInterval(autoTimer); startAuto(); });
    document.getElementById('pubPrevBtn')?.addEventListener('click', () => { slidePrev(); clearInterval(autoTimer); startAuto(); });
    function startAuto() { autoTimer = setInterval(slideNext, 4000); }
    document.querySelector('.pub-carousel-container')?.addEventListener('mouseenter', () => clearInterval(autoTimer));
    document.querySelector('.pub-carousel-container')?.addEventListener('mouseleave', startAuto);
    rotateTrack(); startAuto();
}

function initAnimatedCounters() {
    const counters = document.querySelectorAll('.counter-number-val[data-target]');
    if (!counters.length) return;
    let hasRun = false;
    function runCounters() {
        if (hasRun) return;
        counters.forEach(counter => {
            const target = parseFloat(counter.getAttribute('data-target'));
            const prefix = counter.getAttribute('data-prefix') || '';
            const suffix = counter.getAttribute('data-suffix') || '';
            const isFloat = counter.getAttribute('data-target').includes('.');
            const startTime = performance.now();
            function tick(now) {
                const progress = Math.min((now - startTime) / 2000, 1);
                const current = target * (1 - Math.pow(1 - progress, 3));
                let formatted = isFloat ? current.toFixed(1) : Math.floor(current).toLocaleString();
                counter.innerText = prefix + formatted + suffix;
                if (progress < 1) requestAnimationFrame(tick);
                else counter.innerText = prefix + (isFloat ? target.toFixed(1) : target.toLocaleString()) + suffix;
            }
            requestAnimationFrame(tick);
        });
        hasRun = true;
    }
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(e => { if (e.isIntersecting) { runCounters(); observer.disconnect(); } });
    }, { threshold: 0.1 });
    const triggerEl = document.querySelector('.hero-counter-strip');
    if (triggerEl) observer.observe(triggerEl); else runCounters();
}

function initSecureDispatch() {
    const form = document.getElementById('nastcoContactForm');
    const toggle = document.getElementById('priorityToggle');
    const formContainer = document.querySelector('.contact-form-3d');
    const submitBtn = document.getElementById('submitDispatchBtn');
    if (!form || !toggle) return;
    toggle.addEventListener('change', (e) => {
        if(e.target.checked) {
            formContainer.classList.add('priority-mode');
            submitBtn.innerHTML = '<span>Initiate Priority Override</span>';
        } else {
            formContainer.classList.remove('priority-mode');
            submitBtn.innerHTML = '<span>Secure Transmission</span>';
        }
    });
    form.addEventListener('submit', async (e) => {
        e.preventDefault();
        const originalText = submitBtn.innerHTML;
        submitBtn.innerHTML = '<span>Encrypting...</span>';
        submitBtn.disabled = true;
        const payload = {
            organization: document.getElementById('fieldOrg').value,
            email: document.getElementById('fieldEmail').value,
            department: document.getElementById('fieldDept').value,
            message: document.getElementById('fieldMsg').value,
            priority: toggle.checked
        };
        try {
            const res = await fetch('/wp-json/nastco/v1/secure-dispatch', {
                method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify(payload)
            });
            const data = await res.json();
            if(data.status === 'success') {
                submitBtn.innerHTML = '<span>Transmission Verified ✓</span>';
                submitBtn.style.background = 'linear-gradient(145deg, #008751, #00d285)';
                setTimeout(() => { 
                    form.reset(); toggle.checked = false; formContainer.classList.remove('priority-mode'); 
                    submitBtn.innerHTML = '<span>Secure Transmission</span>'; submitBtn.style.background = ''; submitBtn.disabled = false; 
                }, 4000);
            } else throw new Error();
        } catch (error) {
            submitBtn.innerHTML = '<span>Network Error. Retry.</span>';
            setTimeout(() => { submitBtn.innerHTML = originalText; submitBtn.disabled = false; }, 3000);
        }
    });
}
