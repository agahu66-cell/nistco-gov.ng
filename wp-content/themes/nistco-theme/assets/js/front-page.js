document.addEventListener('DOMContentLoaded', () => {
    const card = document.getElementById('fpTiltCard');
    if (!card || window.innerWidth < 1024) return;

    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;
        card.style.transform = `perspective(900px) rotateY(${x * 0.012}deg) rotateX(${-y * 0.012}deg)`;
    });

    card.addEventListener('mouseleave', () => {
        card.style.transform = 'perspective(900px) rotateY(0deg) rotateX(0deg)';
    });
});
