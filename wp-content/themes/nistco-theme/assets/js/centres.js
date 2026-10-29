/**
 * ============================================================================
 * NASTCO CENTRES JAVASCRIPT
 * Contains: 3D Flip Carousel Logic
 * ============================================================================
 */
document.addEventListener('DOMContentLoaded', function() {
    init3DPubCarousel();
    initRoyaltyCountdown();
});

function init3DPubCarousel() {
    const track = document.getElementById('pubCarouselTrack');
    const items = document.querySelectorAll('.pub-3d-card');
    if (!track || !items.length) return;
    
    const angle = 360 / items.length;
    const radius = Math.round((340 / 2) / Math.tan(Math.PI / items.length)) + 60;
    let currentAngle = 0, autoTimer = null;
    
    items.forEach((item, index) => { 
        item.style.transform = `rotateY(${angle * index}deg) translateZ(${radius}px)`; 
    });
    
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

// Countdown Timer Engine
function initRoyaltyCountdown() {
    const daysEl = document.getElementById('cd-days');
    const hoursEl = document.getElementById('cd-hours');
    const minsEl = document.getElementById('cd-mins');
    const secsEl = document.getElementById('cd-secs');
    if (!daysEl) return;
    
    const now = new Date();
    // Targets the end of the current financial quarter
    const targetDate = new Date(now.getFullYear(), Math.floor(now.getMonth()/3)*3 + 3, 0);
    
    function update() {
        const diff = targetDate - new Date();
        if(diff <= 0) return;
        const d = Math.floor(diff / (1000 * 60 * 60 * 24));
        const h = Math.floor((diff / (1000 * 60 * 60)) % 24);
        const m = Math.floor((diff / 1000 / 60) % 60);
        const s = Math.floor((diff / 1000) % 60);
        daysEl.innerText = d.toString().padStart(2, '0');
        hoursEl.innerText = h.toString().padStart(2, '0');
        minsEl.innerText = m.toString().padStart(2, '0');
        secsEl.innerText = s.toString().padStart(2, '0');
    }
    setInterval(update, 1000); update();
}
