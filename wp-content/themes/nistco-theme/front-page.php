<?php
/**
 * Template Name: NISTCO Modern 3D Rolling Gear Hero
 * Isolated hero section featuring transparent 3D tech gears with aligned rolling teeth motion.
 */

get_header();
?>

<!-- Modern 3D Gear Hero Styling -->
<style>
.nistco-main {
    background: #f8fafc;
    color: #1e293b;
    font-family: system-ui, -apple-system, sans-serif;
    overflow-x: hidden;
}

.nistco-hero-section {
    background: linear-gradient(135deg, #021a10 0%, #042416 50%, #0d3822 100%);
    color: #ffffff;
    padding: 6rem 2rem;
    min-height: 85vh;
    display: flex;
    align-items: center;
    position: relative;
    overflow: hidden;
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
    font-size: clamp(2.5rem, 4.5vw, 3.75rem);
    font-weight: 800;
    line-height: 1.15;
    margin: 0 0 1.5rem 0;
    color: #ffffff;
}

.nistco-hero-subtitle {
    font-size: 1.15rem;
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

/* Modern 3D Rolling Gear Animations & Background Removal */
@keyframes rotCW {
    from { transform: rotate(0deg); }
    to { transform: rotate(360deg); }
}

@keyframes rotCCW {
    from { transform: rotate(0deg); }
    to { transform: rotate(-360deg); }
}

.gear-3d-cluster {
    position: relative;
    width: 440px;
    height: 440px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.gear-main-3d {
    position: absolute;
    width: 320px;
    height: 320px;
    object-fit: contain;
    mix-blend-mode: screen;
    filter: drop-shadow(0 25px 45px rgba(56, 189, 248, 0.35));
    animation: rotCW 25s linear infinite;
    z-index: 2;
}

.gear-sub-3d {
    position: absolute;
    width: 200px;
    height: 200px;
    object-fit: contain;
    mix-blend-mode: screen;
    filter: drop-shadow(0 20px 35px rgba(217, 119, 6, 0.3));
    animation: rotCCW 15s linear infinite;
    top: 20px;
    right: 20px;
    z-index: 3;
}
</style>

<main class="nistco-main">

    <!-- ISOLATED HERO SECTION -->
    <section class="nistco-hero-section">
        <div class="nistco-hero-ambient-1"></div>
        <div class="nistco-hero-ambient-2"></div>

        <div class="nistco-container nistco-hero-grid">

            <!-- Left Column: Content & Mandate -->
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

                <!-- Centre Quick Launchpad Dock -->
                <div class="nistco-centre-launchpad">
                    <span class="launchpad-heading">ADVANCED CENTRES & DIVISIONS</span>
                    <div class="launchpad-pills-row">
                        <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">⚡</span><span class="pill-code">AMSARC</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🧪</span><span class="pill-code">CARC</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🧬</span><span class="pill-code">BARC</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">☢️</span><span class="pill-code">NTC</span></a>
                    </div>
                </div>
            </div>

            <!-- Right Column: Clean 3D Rolling Gears without Orbitals -->
            <div style="display: flex; align-items: center; justify-content: center;">
                <div class="gear-3d-cluster">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gears1-3d.png" alt="Futuristic Tech Gear" class="gear-main-3d" onerror="this.src='https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gear/gear-original.svg';">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gear3-3d.png" alt="Interlocking Gear" class="gear-sub-3d" onerror="this.src='https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gear/gear-original.svg';">
                </div>
            </div>

        </div>
    </section>

</main>

<?php get_footer(); ?>
