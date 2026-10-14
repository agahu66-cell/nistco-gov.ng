<?php
/**
 * Template Name: NISTCO Fully Responsive Interactive Hero
 * Hero section optimized for mobile responsiveness with PARC and ATP divisions added to the launchpad.
 */

get_header();
?>

<!-- Responsive & Interactive Hero Styling -->
<style>
.nistco-main {
    background: #f8fafc;
    color: #1e293b;
    font-family: system-ui, -apple-system, sans-serif;
    overflow-x: hidden;
}

.nistco-hero-section {
    position: relative;
    min-height: 90vh;
    display: flex;
    align-items: center;
    background: linear-gradient(135deg, #021a10 0%, #042416 50%, #0d3822 100%);
    color: #ffffff;
    padding: 6rem 2rem;
    overflow: hidden;
}

@media (max-width: 576px) {
    .nistco-hero-section {
        padding: 4rem 1rem;
        min-height: auto;
    }
}

.nistco-hero-ambient-1 {
    position: absolute;
    top: -120px;
    right: -120px;
    width: 550px;
    height: 550px;
    background: radial-gradient(circle, rgba(56, 189, 248, 0.15) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

.nistco-hero-ambient-2 {
    position: absolute;
    bottom: -150px;
    left: -150px;
    width: 600px;
    height: 600px;
    background: radial-gradient(circle, rgba(217, 119, 6, 0.12) 0%, transparent 70%);
    border-radius: 50%;
    pointer-events: none;
}

.nistco-container {
    max-width: 1440px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
    width: 100%;
}

.nistco-hero-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 4rem;
    align-items: center;
}

@media (max-width: 992px) {
    .nistco-hero-grid {
        grid-template-columns: 1fr;
        gap: 3rem;
        text-align: center;
    }
    .nistco-hero-badges, .nistco-hero-actions, .launchpad-pills-row {
        justify-content: center;
    }
    .nistco-hero-subtitle {
        margin-left: auto;
        margin-right: auto;
    }
}

.nistco-hero-badges {
    display: flex;
    gap: 0.75rem;
    margin-bottom: 1.5rem;
    flex-wrap: wrap;
}

.nistco-pill {
    font-size: 0.75rem;
    font-weight: 800;
    text-transform: uppercase;
    padding: 0.35rem 0.85rem;
    border-radius: 50px;
    letter-spacing: 1px;
}

.nistco-pill-green {
    background: #008751;
    color: #ffffff;
}

.nistco-pill-gold {
    background: #d97706;
    color: #ffffff;
}

.nistco-hero-title {
    font-size: clamp(2.25rem, 4.5vw, 3.75rem);
    font-weight: 800;
    line-height: 1.15;
    margin: 0 0 1.5rem 0;
    color: #ffffff;
}

.nistco-hero-subtitle {
    font-size: 1.1rem;
    line-height: 1.7;
    color: #cbd5e1;
    margin-bottom: 2rem;
    max-width: 640px;
}

.nistco-hero-actions {
    display: flex;
    gap: 1rem;
    flex-wrap: wrap;
    margin-bottom: 2.5rem;
}

@media (max-width: 576px) {
    .nistco-hero-actions {
        flex-direction: column;
    }
    .nistco-btn {
        width: 100%;
        justify-content: center;
    }
}

.nistco-btn {
    padding: 0.85rem 1.75rem;
    border-radius: 8px;
    font-weight: 700;
    font-size: 0.95rem;
    text-decoration: none;
    transition: all 0.2s ease;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

.nistco-btn-primary {
    background: #008751;
    color: #ffffff;
    box-shadow: 0 4px 14px rgba(0, 135, 81, 0.4);
}

.nistco-btn-primary:hover {
    background: #006c41;
    color: #fff;
    transform: translateY(-2px);
}

.nistco-btn-gold {
    background: #d97706;
    color: #ffffff;
    box-shadow: 0 4px 14px rgba(217, 119, 6, 0.4);
}

.nistco-btn-gold:hover {
    background: #b45309;
    color: #fff;
    transform: translateY(-2px);
}

.nistco-btn-secondary {
    background: rgba(255, 255, 255, 0.08);
    color: #ffffff;
    border: 1px solid rgba(255, 255, 255, 0.2);
}

.nistco-btn-secondary:hover {
    background: rgba(255, 255, 255, 0.15);
    color: #fff;
    transform: translateY(-2px);
}

.nistco-centre-launchpad {
    background: rgba(255, 255, 255, 0.04);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 12px;
    padding: 1.25rem;
    backdrop-filter: blur(10px);
}

.launchpad-heading {
    display: block;
    font-size: 0.75rem;
    font-weight: 800;
    text-transform: uppercase;
    color: #fde047;
    letter-spacing: 1.2px;
    margin-bottom: 0.75rem;
}

.launchpad-pills-row {
    display: flex;
    gap: 0.6rem;
    flex-wrap: wrap;
}

.launchpad-pill {
    background: rgba(255, 255, 255, 0.06);
    border: 1px solid rgba(255, 255, 255, 0.15);
    padding: 0.45rem 0.85rem;
    border-radius: 6px;
    color: #ffffff;
    font-size: 0.85rem;
    font-weight: 600;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.4rem;
    transition: all 0.2s;
}

.launchpad-pill:hover {
    background: #008751;
    border-color: #008751;
    color: #fff;
    transform: translateY(-2px);
}

/* 3D Tech Gear Cluster with Responsive Scaling */
.gear-3d-cluster {
    position: relative;
    width: 440px;
    height: 440px;
    display: flex;
    align-items: center;
    justify-content: center;
}

@media (max-width: 576px) {
    .gear-3d-cluster {
        width: 300px;
        height: 300px;
        margin: 0 auto;
    }
    .gear-main-3d {
        width: 240px !important;
        height: 240px !important;
    }
    .gear-sub-3d {
        width: 140px !important;
        height: 140px !important;
    }
}

.gear-main-3d {
    position: absolute;
    width: 320px;
    height: 320px;
    object-fit: contain;
    mix-blend-mode: screen;
    filter: drop-shadow(0 25px 45px rgba(56, 189, 248, 0.35));
    z-index: 2;
    transition: transform 0.1s ease-out;
}

.gear-sub-3d {
    position: absolute;
    width: 200px;
    height: 200px;
    object-fit: contain;
    mix-blend-mode: screen;
    filter: drop-shadow(0 20px 35px rgba(217, 119, 6, 0.3));
    top: 10px;
    right: 10px;
    z-index: 3;
    transition: transform 0.1s ease-out;
}
</style>

<main class="nistco-main">
    <section class="nistco-hero-section">
        <div class="nistco-hero-ambient-1"></div>
        <div class="nistco-hero-ambient-2"></div>

        <div class="nistco-container nistco-hero-grid">
            <div>
                <div class="nistco-hero-badges">
                    <span class="nistco-pill nistco-pill-green">FEDERAL REPUBLIC OF NIGERIA</span>
                    <span class="nistco-pill nistco-pill-gold">CHIEF PATRONAGE</span>
                </div>

                <h1 class="nistco-hero-title">
                    National Science & <br><span style="color: #fde047;">Technology Complex</span>
                </h1>

                <p class="nistco-hero-subtitle">
                    Nigeria's apex multidisciplinary centre of scientific excellence mandated to execute frontier basic and applied research, operate national demonstration pilot plants, and drive indigenous industrial transformation.
                </p>

                <div class="nistco-hero-actions">
                    <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="nistco-btn nistco-btn-primary">
                        Explore Research Centres &rarr;
                    </a>
                    <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" class="nistco-btn nistco-btn-gold">
                        Innovation & Patents
                    </a>
                    <a href="<?php echo esc_url( home_url( '/servicom/' ) ); ?>" class="nistco-btn nistco-btn-secondary">
                        Public Trustee Desk
                    </a>
                </div>

                <!-- Expanded Quick Launchpad Dock including PARC & ATP -->
                <div class="nistco-centre-launchpad">
                    <span class="launchpad-heading">ADVANCED CENTRES & DIVISIONS</span>
                    <div class="launchpad-pills-row">
                        <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">⚡</span><span class="pill-code">AMSARC</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🧪</span><span class="pill-code">CARC</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🧬</span><span class="pill-code">BARC</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">☢️</span><span class="pill-code">NTC</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/parc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🔬</span><span class="pill-code">PARC</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/atp/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">⚙️</span><span class="pill-code">ATP</span></a>
                    </div>
                </div>
            </div>

            <div style="display: flex; align-items: center; justify-content: center;">
                <div class="gear-3d-cluster">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gears1-3d.png" alt="Futuristic Tech Gear" class="gear-main-3d" onerror="this.src='https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gear/gear-original.svg';">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gear3-3d.png" alt="Interlocking Gear" class="gear-sub-3d" onerror="this.src='https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gear/gear-original.svg';">
                </div>
            </div>
        </div>
    </section>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const mainGear = document.querySelector('.gear-main-3d');
    const subGear = document.querySelector('.gear-sub-3d');
    const heroSection = document.querySelector('.nistco-hero-section');

    let angle = 0;
    let baseSpeed = 0.4;
    let speed = baseSpeed;
    let mouseX = 0;
    let mouseY = 0;

    function animateGears() {
        angle += speed;
        if (mainGear) {
            mainGear.style.transform = `rotate(${angle}deg) translate(${mouseX}px, ${mouseY}px)`;
        }
        if (subGear) {
            subGear.style.transform = `rotate(${-angle * 1.5}deg) translate(${-mouseX * 0.8}px, ${-mouseY * 0.8}px)`;
        }
        requestAnimationFrame(animateGears);
    }
    animateGears();

    if (heroSection) {
        heroSection.addEventListener('mousemove', (e) => {
            const rect = heroSection.getBoundingClientRect();
            mouseX = ((e.clientX - rect.left) / rect.width - 0.5) * 20;
            mouseY = ((e.clientY - rect.top) / rect.height - 0.5) * 20;
        });

        heroSection.addEventListener('mouseleave', () => {
            mouseX = 0;
            mouseY = 0;
        });

        heroSection.addEventListener('mouseenter', () => {
            speed = 1.8;
        });

        heroSection.addEventListener('mouseleave', () => {
            speed = baseSpeed;
        });
    }

    window.addEventListener('scroll', () => {
        const scrollTop = window.scrollY;
        const scrollFactor = Math.min(scrollTop / 500, 3);
        speed = baseSpeed + scrollFactor;
    });
});
</script>

<?php get_footer(); ?>
