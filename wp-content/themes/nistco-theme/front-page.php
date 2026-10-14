<?php
/**
 * Template Name: NISTCO Master Front Page (3D Colorful Feedback Edition)
 * Comprehensive master homepage template containing all 10 synchronized institutional sections with 3D colorful feedback cards.
 */

get_header();
?>

<!-- Modern 3D Gear Hero & Harmonized Institutional Sections Styling -->
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

/* 3D Rolling Gear Animations */
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

/* Section & Banner Styles */
.nistco-section { padding: 5rem 2rem; }
.nistco-bg-white { background: #ffffff; }
.nistco-bg-parchment { background: #f1f5f9; }

.mc-presidential-banner { background: #042416; border-radius: 16px; padding: 3rem; color: #ffffff; position: relative; overflow: hidden; box-shadow: 0 20px 40px rgba(4,36,22,0.25); border: 1px solid rgba(217,119,6,0.3); }
.mc-presidential-grid { display: grid; grid-template-columns: 320px 1fr; gap: 3rem; align-items: center; }
@media(max-width: 992px) { .mc-presidential-grid { grid-template-columns: 1fr; } }
.mc-presidential-photo-frame { width: 100%; height: 360px; background: #021a10; border-radius: 12px; border: 3px solid #d97706; overflow: hidden; position: relative; }
.mc-presidential-photo-frame img { width: 100%; height: 100%; object-fit: cover; }
.mc-presidential-photo-badge { position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,135,81,0.9); color: #fff; text-align: center; font-size: 0.8rem; font-weight: 800; padding: 0.5rem; }
.mc-presidential-caption { margin-top: 1rem; text-align: center; }
.mc-presidential-title-kicker { display: block; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; color: #fde047; letter-spacing: 1.2px; }
.mc-presidential-name { display: block; font-size: 1.15rem; font-weight: 800; color: #fff; margin: 0.2rem 0; }
.mc-presidential-rank { font-size: 0.85rem; color: #94a3b8; }
.mc-presidential-heading { font-size: 2rem; font-weight: 800; color: #fff; margin: 1rem 0; line-height: 1.2; }
.mc-presidential-quote { font-size: 1.05rem; line-height: 1.7; color: #cbd5e1; font-style: italic; border-left: 4px solid #d97706; padding-left: 1.25rem; margin: 1.5rem 0; }

/* Executive Direction Styles */
.mc-exec-grid { display: grid; grid-template-columns: 320px 1fr; gap: 3rem; align-items: center; background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 3rem; box-shadow: 0 10px 30px rgba(0,0,0,0.03); }
@media(max-width: 992px) { .mc-exec-grid { grid-template-columns: 1fr; } }
.mc-exec-portrait-card { text-align: center; }
.mc-exec-photo-wrap { width: 100%; height: 320px; border-radius: 12px; border: 3px solid #008751; overflow: hidden; position: relative; box-shadow: 0 10px 25px rgba(0,135,81,0.15); background: #021a10; }
.mc-exec-photo-wrap img { width: 100%; height: 100%; object-fit: cover; }
.mc-exec-photo-badge { position: absolute; bottom: 0; left: 0; right: 0; background: rgba(0,135,81,0.9); color: #fff; font-size: 0.75rem; font-weight: 800; padding: 0.4rem; text-transform: uppercase; }
.mc-exec-name { display: block; font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-top: 1rem; }
.mc-exec-designation { font-size: 0.85rem; color: #64748b; font-weight: 600; }
.mc-exec-headline { font-size: 1.75rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0; }
.mc-exec-quote { font-size: 1.05rem; line-height: 1.7; color: #475569; font-style: italic; border-left: 4px solid #008751; padding-left: 1.25rem; margin-bottom: 1.5rem; }

/* Research Centres Grid Styles */
.nistco-centres-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; max-width: 1440px; margin: 0 auto; }
.nistco-centre-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); transition: all 0.3s ease; display: flex; flex-direction: column; position: relative; overflow: hidden; }
.nistco-centre-card:hover { transform: translateY(-5px); box-shadow: 0 20px 40px rgba(0,0,0,0.08); }
.nistco-centre-icon-wrap { width: 50px; height: 50px; border-radius: 10px; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin-bottom: 1.25rem; }
.nistco-centre-code { font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.35rem; }
.nistco-centre-title { font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0; }
.nistco-centre-desc { font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem; flex-grow: 1; }
.nistco-card-action { display: inline-flex; align-items: center; justify-content: space-between; font-weight: 700; text-decoration: none; padding-top: 1rem; border-top: 1px solid #f1f5f9; }

/* Infinite Vertical Media Ticker Styles */
.nistco-vertical-ticker-container {
    max-width: 900px;
    margin: 0 auto;
    height: 480px;
    overflow: hidden;
    position: relative;
    mask-image: linear-gradient(to bottom, transparent, black 15%, black 85%, transparent);
    -webkit-mask-image: linear-gradient(to bottom, transparent, black 15%, black 85%, transparent);
}
.nistco-vertical-ticker-track {
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
    animation: infiniteVerticalScroll 22s linear infinite;
}
.nistco-vertical-ticker-container:hover .nistco-vertical-ticker-track {
    animation-play-state: paused;
}
@keyframes infiniteVerticalScroll {
    0% { transform: translateY(0); }
    100% { transform: translateY(calc(-50% - 0.75rem)); }
}
.nistco-media-item { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1.75rem; display: grid; grid-template-columns: 240px 1fr; gap: 1.75rem; align-items: center; box-shadow: 0 4px 15px rgba(0,0,0,0.03); transition: border-color 0.2s; }
.nistco-media-item:hover { border-color: #008751; }
.nistco-media-thumb-box { height: 140px; background: #042416; border-radius: 8px; position: relative; display: flex; align-items: center; justify-content: center; color: #fff; font-size: 2.5rem; border: 2px solid #d97706; }
.nistco-media-badge-tag { position: absolute; top: 0.75rem; left: 0.75rem; background: rgba(0,135,81,0.9); color: #fff; font-size: 0.65rem; font-weight: 800; padding: 0.2rem 0.5rem; border-radius: 4px; text-transform: uppercase; }

/* Infinite Horizontal 3D Colorful Feedback Cards Ticker Styles */
.nistco-rating-summary-ribbon { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2rem; max-width: 1440px; margin: 0 auto 3rem auto; display: flex; align-items: center; justify-content: space-around; flex-wrap: wrap; gap: 2rem; box-shadow: 0 10px 30px rgba(0,0,0,0.03); }
.rating-stat-box { text-align: center; }
.rating-score { font-size: 3rem; font-weight: 800; color: #0f172a; line-height: 1; }
.rating-score span { font-size: 1.25rem; color: #64748b; font-weight: 600; }
.rating-stars { color: #f59e0b; font-size: 1.25rem; margin: 0.35rem 0; }
.rating-count { font-size: 0.85rem; color: #64748b; }
.rating-divider { width: 1px; height: 60px; background: #e2e8f0; }
.rating-metrics-grid { display: flex; gap: 2rem; flex-wrap: wrap; }
.metric-pill { text-align: center; }
.metric-val { display: block; font-size: 1.5rem; font-weight: 800; color: #008751; }
.metric-lbl { font-size: 0.8rem; color: #64748b; font-weight: 700; text-transform: uppercase; }

.nistco-horizontal-ticker-container {
    max-width: 1440px;
    margin: 0 auto;
    overflow: hidden;
    position: relative;
    mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    -webkit-mask-image: linear-gradient(to right, transparent, black 10%, black 90%, transparent);
    padding: 1rem 0;
}
.nistco-horizontal-ticker-track {
    display: flex;
    gap: 2rem;
    width: max-content;
    animation: infiniteHorizontalScroll 32s linear infinite;
}
.nistco-horizontal-ticker-container:hover .nistco-horizontal-ticker-track {
    animation-play-state: paused;
}
@keyframes infiniteHorizontalScroll {
    0% { transform: translateX(0); }
    100% { transform: translateX(calc(-50% - 1rem)); }
}

/* 3D Colorful Feedback Cards with Small Image Boxes */
.nistco-feedback-card {
    width: 380px;
    background: linear-gradient(145deg, #ffffff, #f8fafc);
    border: 1px solid rgba(226, 232, 240, 0.9);
    border-radius: 16px;
    padding: 2rem;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.08), 0 5px 15px rgba(0, 135, 81, 0.04), inset 0 1px 0 rgba(255, 255, 255, 0.9);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    flex-shrink: 0;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
    overflow: hidden;
}
.nistco-feedback-card:hover {
    transform: translateY(-6px) scale(1.02);
    box-shadow: 0 30px 60px rgba(0, 0, 0, 0.12), 0 10px 25px rgba(0, 135, 81, 0.1);
}
.feedback-card-header {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.25rem;
}
.feedback-avatar-box {
    width: 52px;
    height: 52px;
    border-radius: 12px;
    overflow: hidden;
    flex-shrink: 0;
    box-shadow: 0 4px 12px rgba(0,0,0,0.12);
    border: 2px solid rgba(255,255,255,0.8);
}
.feedback-avatar-box img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.feedback-card-meta h4 {
    font-size: 1rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 0.15rem 0;
}
.feedback-card-meta span {
    font-size: 0.8rem;
    color: #64748b;
    font-weight: 600;
}
.feedback-quote {
    font-size: 0.95rem;
    color: #475569;
    line-height: 1.6;
    font-style: italic;
    margin: 0 0 1.5rem 0;
    flex-grow: 1;
}
.feedback-footer-row {
    display: flex;
    justify-content: space-between;
    align-items: center;
    border-top: 1px solid #f1f5f9;
    padding-top: 1rem;
}
.feedback-stars {
    color: #f59e0b;
    font-size: 1rem;
    letter-spacing: 1px;
}
.feedback-badge {
    font-size: 0.7rem;
    font-weight: 800;
    text-transform: uppercase;
    padding: 0.25rem 0.6rem;
    border-radius: 6px;
}

/* Strategic Partners Grid Styles */
.nistco-partners-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; max-width: 1440px; margin: 0 auto; }
.nistco-partner-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.03); display: flex; flex-direction: column; transition: transform 0.2s; }
.nistco-partner-card:hover { transform: translateY(-3px); border-color: #008751; }
</style>

<main class="nistco-main">

    <!-- 1. HERO SECTION -->
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

            <div style="display: flex; align-items: center; justify-content: center;">
                <div class="gear-3d-cluster">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gears1-3d.png" alt="Futuristic Tech Gear" class="gear-main-3d" onerror="this.src='https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gear/gear-original.svg';">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/gear3-3d.png" alt="Interlocking Gear" class="gear-sub-3d" onerror="this.src='https://cdn.jsdelivr.net/gh/devicons/devicon/icons/gear/gear-original.svg';">
                </div>
            </div>
        </div>
    </section>

    <!-- 2. INSTITUTIONAL IMPACT METRICS -->
    <?php 
    $metrics = [
        [ "target" => 7, "suffix" => "", "comma" => false, "title" => "Research Centres & Divisions", "desc" => "Biotech, HPC, Chemistry, Physics, Nuclear & Tooling", "color" => "#10b981" ],
        [ "target" => 5, "suffix" => "+", "comma" => false, "title" => "Scientific Publications", "desc" => "Peer-reviewed & indexed research repository", "color" => "#f59e0b" ],
        [ "target" => 2000, "suffix" => "", "comma" => true, "title" => "Hectares Campus Footprint", "desc" => "Abuja-Lokoja Technology Corridor sanctuary", "color" => "#0ea5e9" ],
        [ "target" => 16, "suffix" => "+", "comma" => false, "title" => "Registered Patents", "desc" => "NOTAP-certified indigenous technologies", "color" => "#d97706" ],
        [ "target" => 4, "suffix" => "", "comma" => false, "title" => "Demonstration Pilot Plants", "desc" => "500L synthesis, tissue culture & precision CNC", "color" => "#059669" ],
        [ "target" => 500, "suffix" => " kVA", "comma" => false, "title" => "Clean Energy Microgrid", "desc" => "Dedicated solar hybrid for NMR & HPC compute", "color" => "#e11d48" ],
        [ "target" => 100, "suffix" => "%", "comma" => false, "title" => "Open Researcher Access", "desc" => "Shared national laboratory & residency facilities", "color" => "#8b5cf6" ]
    ];
    ?>
    <section style="background: linear-gradient(135deg, #021a10 0%, #042416 100%); color: #fff; padding: 4.5rem 1.5rem; border-top: 3px solid #d97706; border-bottom: 3px solid #d97706; box-sizing: border-box; width: 100%;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div style="text-align: center; margin-bottom: 3.5rem;">
                <div style="color: #fde047; font-size: 0.85rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Institutional Impact</div>
                <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); font-weight: 800; margin: 0; color: #ffffff;">Nigeria Innovation Science & Technology Complex</h2>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.75rem;">
                <?php foreach ( $metrics as $metric ) : ?>
                    <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(217,119,6,0.3); border-radius: 10px; padding: 2rem 1.5rem; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.25); border-top: 4px solid <?php echo $metric['color']; ?>;">
                        <div class="nistco-counter" data-target="<?php echo esc_attr( $metric['target'] ); ?>" data-suffix="<?php echo esc_attr( $metric['suffix'] ); ?>" data-comma="<?php echo $metric['comma'] ? 'true' : 'false'; ?>" style="font-size: 2.75rem; font-weight: 800; color: <?php echo $metric['color']; ?>; line-height: 1; margin-bottom: 0.65rem;">0<?php echo esc_html( $metric['suffix'] ); ?></div>
                        <div style="font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 0.4rem;"><?php echo esc_html( $metric['title'] ); ?></div>
                        <div style="font-size: 0.85rem; color: #cbd5e1; line-height: 1.5;"><?php echo esc_html( $metric['desc'] ); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 3. PRESIDENTIAL SECTION WITH NIGERIAN FLAG SIDE BARS -->
    <section class="nistco-section nistco-bg-parchment" style="position: relative; overflow: hidden;">
        <div style="position: absolute; top: 0; left: 0; width: 14px; height: 100%; display: flex; flex-direction: column; z-index: 3;">
            <div style="flex: 1; background: #008751;"></div>
            <div style="flex: 1; background: #ffffff;"></div>
            <div style="flex: 1; background: #008751;"></div>
        </div>
        <div style="position: absolute; top: 0; right: 0; width: 14px; height: 100%; display: flex; flex-direction: column; z-index: 3;">
            <div style="flex: 1; background: #008751;"></div>
            <div style="flex: 1; background: #ffffff;"></div>
            <div style="flex: 1; background: #008751;"></div>
        </div>

        <div class="nistco-container">
            <div class="mc-presidential-banner">
                <div class="mc-presidential-pattern"></div>
                <div class="mc-presidential-grid">
                    <div class="mc-presidential-portrait-wrap">
                        <div class="mc-presidential-photo-frame">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/leaders/president.jpg" alt="Presidential Patron" class="leader-photo placeholder" onerror="this.style.display='none';">
                            <div class="mc-presidential-photo-badge" style="background: #008751; color: #fff;">🇳🇬 Federal Republic of Nigeria</div>
                        </div>
                        <div class="mc-presidential-caption">
                            <span class="mc-presidential-title-kicker">Grand Patron of Science & Tech</span>
                            <span class="mc-presidential-name">His Excellency, President of Nigeria</span>
                            <span class="mc-presidential-rank">Commander-in-Chief of the Armed Forces</span>
                        </div>
                    </div>
                    <div>
                        <div class="mc-presidential-pills">
                            <span class="nistco-pill nistco-pill-gold">National Agenda 2030</span>
                            <span class="nistco-pill nistco-pill-green">Renewed Hope R&D Mandate</span>
                        </div>
                        <h2 class="mc-presidential-heading">Driving Indigenous Innovation & Industrial Sovereignty</h2>
                        <blockquote class="mc-presidential-quote">
                            "Our national economic transformation rests squarely on our ability to convert scientific research into scalable industrial products, fostering self-reliance across chemistry, computing, and advanced manufacturing."
                        </blockquote>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. EXECUTIVE DIRECTION SECTION -->
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">
            <div class="mc-section-header" style="text-align: center; max-width: 700px; margin: 0 auto 3.5rem auto;">
                <span class="nistco-section-kicker">Executive Direction</span>
                <h2 class="nistco-section-title">Director-General & CEO Vision</h2>
                <p class="nistco-section-lead">Steering NISTCO toward world-class scientific excellence, operational transparency, and robust public-private industrial partnerships.</p>
            </div>
            <div class="mc-exec-grid">
                <div class="mc-exec-portrait-card">
                    <div class="mc-exec-photo-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/leaders/dg-ceo1.jpg" alt="Director General" class="leader-photo" onerror="this.style.display='none';">
                        <div class="mc-exec-photo-badge">Executive Office</div>
                    </div>
                    <span class="mc-exec-name">Director-General / CEO</span>
                    <span class="mc-exec-designation">Nigeria Innovation Science & Technology Complex</span>
                </div>
                <div>
                    <h3 class="mc-exec-headline">Bridging Laboratory Breakthroughs with National Industrialization</h3>
                    <blockquote class="mc-exec-quote">
                        "At NISTCO, we are transforming our 7 advanced research centres into vibrant commercial engines. From our 500L chemistry pilot synthesis plant to our 256 TeraFLOPs HPC facility, we deliver verified solutions for Nigerian industry."
                    </blockquote>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="nistco-btn nistco-btn-primary">
                            Explore Leadership Roster &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. ALL RESEARCH CENTRES & DEPARTMENTS (COLOURFUL THEME) -->
    <?php 
    $centres = [
        [ "code" => "AMSARC", "title" => "Applied Mathematics & Simulation", "desc" => "High-performance computing (HPC) cluster, GPU accelerated simulation nodes, and scientific visualization labs.", "icon" => "⚡", "color" => "#0ea5e9", "bg" => "rgba(14,165,233,0.08)", "url" => home_url( '/centres/amsarc/' ) ],
        [ "code" => "CARC", "title" => "Chemistry Advanced Research Centre", "desc" => "Industrial chemistry synthesis, 500L pilot plant, NMR & GC-MS instrumentation, and material testing suites.", "icon" => "🧪", "color" => "#f59e0b", "bg" => "rgba(245,158,11,0.08)", "url" => home_url( '/centres/carc/' ) ],
        [ "code" => "BARC", "title" => "Biotechnology Advanced Research Centre", "desc" => "Molecular biology & PCR suites, plant tissue culture micropropagation, and bioprocess fermentation bioreactors.", "icon" => "🧬", "color" => "#10b981", "bg" => "rgba(16,185,129,0.08)", "url" => home_url( '/centres/barc/' ) ],
        [ "code" => "NTC", "title" => "Nuclear Technology Centre", "desc" => "Radiation safety standards, isotopic analysis, and nuclear instrumentation for industrial and medical application.", "icon" => "☢️", "color" => "#e11d48", "bg" => "rgba(225,29,72,0.08)", "url" => home_url( '/centres/ntc/' ) ],
        [ "code" => "PARC", "title" => "Physics Advanced Research Centre", "desc" => "Solid-state physics, materials characterization, optics, and renewable energy semiconductor testing.", "icon" => "🔬", "color" => "#8b5cf6", "bg" => "rgba(139,92,246,0.08)", "url" => home_url( '/centres/parc/' ) ],
        [ "code" => "PTD", "title" => "Advanced Tooling & Prototyping", "desc" => "Precision CNC machining, rapid additive manufacturing, and pilot mold engineering for Nigerian industries.", "icon" => "⚙️", "color" => "#06b6d4", "bg" => "rgba(6,182,212,0.08)", "url" => home_url( '/centres/ptd/' ) ]
    ];
    ?>
    <section class="nistco-section nistco-bg-parchment">
        <div class="nistco-container">
            <div class="nistco-section-header" style="text-align: center; max-width: 700px; margin: 0 auto 3.5rem auto;">
                <span class="nistco-section-kicker">Specialized Divisions</span>
                <h2 class="nistco-section-title">Our Research Centres & Departments</h2>
                <p class="nistco-section-lead">Explore our world-class scientific laboratories, specialized equipment clusters, and pilot production plants across all divisions.</p>
            </div>
            <div class="nistco-centres-grid">
                <?php foreach ( $centres as $centre ) : ?>
                    <div class="nistco-centre-card" style="border-top: 4px solid <?php echo $centre['color']; ?>;">
                        <div class="nistco-centre-icon-wrap" style="background: <?php echo $centre['bg']; ?>; color: <?php echo $centre['color']; ?>;">
                            <?php echo $centre['icon']; ?>
                        </div>
                        <div class="nistco-centre-code" style="color: <?php echo $centre['color']; ?>;"><?php echo esc_html( $centre['code'] ); ?></div>
                        <h3 class="nistco-centre-title"><?php echo esc_html( $centre['title'] ); ?></h3>
                        <p class="nistco-centre-desc"><?php echo esc_html( $centre['desc'] ); ?></p>
                        <a href="<?php echo esc_url( $centre['url'] ); ?>" class="nistco-card-action" style="color: <?php echo $centre['color']; ?>;">
                            <span>Access <?php echo esc_html( $centre['code'] ); ?> Portal</span><span>&rarr;</span>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 6. MEDIA & PRESS ROOM (INFINITE VERTICAL TICKER) -->
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">
            <div class="nistco-section-header" style="text-align: center; max-width: 700px; margin: 0 auto 3.5rem auto;">
                <span class="nistco-section-kicker">Media & Press Room</span>
                <h2 class="nistco-section-title">Documentaries & Institutional Briefings</h2>
                <p class="nistco-section-lead">Explore broadcast features, laboratory showcases, and video documentaries highlighting NISTCO’s national impact.</p>
            </div>
            
            <div class="nistco-vertical-ticker-container">
                <div class="nistco-vertical-ticker-track">
                    <div class="nistco-media-item">
                        <div class="nistco-media-thumb-box">🎥<span class="nistco-media-badge-tag">Documentary</span></div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Inside Nigeria's 500L Advanced Chemistry Synthesis Facility</h3>
                            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1rem;">A comprehensive visual walkthrough of CARC’s pilot plant production lines and GC-MS analytical instrumentation suites.</p>
                            <a href="<?php echo esc_url( home_url( '/media/chemistry-plant-tour/' ) ); ?>" style="color: #008751; font-weight: 700; text-decoration: none;">Watch Feature &rarr;</a>
                        </div>
                    </div>

                    <div class="nistco-media-item">
                        <div class="nistco-media-thumb-box">⚡<span class="nistco-media-badge-tag">Supercomputing</span></div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">AMSARC Supercomputing & National Grid Modeling</h3>
                            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1rem;">Briefing on how 256 TeraFLOPs parallel clusters simulate fluid dynamics and forecast national electrical stability.</p>
                            <a href="<?php echo esc_url( home_url( '/media/amsarc-hpc-briefing/' ) ); ?>" style="color: #008751; font-weight: 700; text-decoration: none;">Watch Feature &rarr;</a>
                        </div>
                    </div>

                    <div class="nistco-media-item">
                        <div class="nistco-media-thumb-box">🧬<span class="nistco-media-badge-tag">Agro-Biotech</span></div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Drought Resilience: BARC Plant Micropropagation Lab</h3>
                            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1rem;">Documenting tissue culture seed multiplication protocols distributed to farming cooperatives across all geopolitical zones.</p>
                            <a href="<?php echo esc_url( home_url( '/media/barc-biotech-showcase/' ) ); ?>" style="color: #008751; font-weight: 700; text-decoration: none;">Watch Feature &rarr;</a>
                        </div>
                    </div>

                    <div class="nistco-media-item">
                        <div class="nistco-media-thumb-box">☢️<span class="nistco-media-badge-tag">Nuclear Safety</span></div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Nuclear Technology Centre: Radiation Standards & Metrology</h3>
                            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1rem;">Overview of NTC’s national calibration laboratories ensuring strict compliance for industrial and medical isotopic devices.</p>
                            <a href="<?php echo esc_url( home_url( '/media/ntc-safety-briefing/' ) ); ?>" style="color: #008751; font-weight: 700; text-decoration: none;">Watch Feature &rarr;</a>
                        </div>
                    </div>

                    <!-- Duplicated Set for Loop -->
                    <div class="nistco-media-item">
                        <div class="nistco-media-thumb-box">🎥<span class="nistco-media-badge-tag">Documentary</span></div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Inside Nigeria's 500L Advanced Chemistry Synthesis Facility</h3>
                            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1rem;">A comprehensive visual walkthrough of CARC’s pilot plant production lines and GC-MS analytical instrumentation suites.</p>
                            <a href="<?php echo esc_url( home_url( '/media/chemistry-plant-tour/' ) ); ?>" style="color: #008751; font-weight: 700; text-decoration: none;">Watch Feature &rarr;</a>
                        </div>
                    </div>

                    <div class="nistco-media-item">
                        <div class="nistco-media-thumb-box">⚡<span class="nistco-media-badge-tag">Supercomputing</span></div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">AMSARC Supercomputing & National Grid Modeling</h3>
                            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1rem;">Briefing on how 256 TeraFLOPs parallel clusters simulate fluid dynamics and forecast national electrical stability.</p>
                            <a href="<?php echo esc_url( home_url( '/media/amsarc-hpc-briefing/' ) ); ?>" style="color: #008751; font-weight: 700; text-decoration: none;">Watch Feature &rarr;</a>
                        </div>
                    </div>

                    <div class="nistco-media-item">
                        <div class="nistco-media-thumb-box">🧬<span class="nistco-media-badge-tag">Agro-Biotech</span></div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Drought Resilience: BARC Plant Micropropagation Lab</h3>
                            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1rem;">Documenting tissue culture seed multiplication protocols distributed to farming cooperatives across all geopolitical zones.</p>
                            <a href="<?php echo esc_url( home_url( '/media/barc-biotech-showcase/' ) ); ?>" style="color: #008751; font-weight: 700; text-decoration: none;">Watch Feature &rarr;</a>
                        </div>
                    </div>

                    <div class="nistco-media-item">
                        <div class="nistco-media-thumb-box">☢️<span class="nistco-media-badge-tag">Nuclear Safety</span></div>
                        <div>
                            <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Nuclear Technology Centre: Radiation Standards & Metrology</h3>
                            <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1rem;">Overview of NTC’s national calibration laboratories ensuring strict compliance for industrial and medical isotopic devices.</p>
                            <a href="<?php echo esc_url( home_url( '/media/ntc-safety-briefing/' ) ); ?>" style="color: #008751; font-weight: 700; text-decoration: none;">Watch Feature &rarr;</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. STAKEHOLDER FEEDBACK (INFINITE HORIZONTAL 3D COLORFUL CARDS) -->
    <?php 
    $feedback_items = [
        [
            "name" => "Engr. Dr. T. A. Balogun",
            "title" => "Director of Infrastructure, Abuja",
            "quote" => "The HPC compute simulation resources at AMSARC enabled our engineering consultancy to slash structural stress testing timelines by over 60%.",
            "badge" => "Infrastructure",
            "badge_bg" => "#e0f2fe",
            "badge_color" => "#0369a1",
            "border_color" => "#0ea5e9",
            "avatar" => "https://images.unsplash.com/photo-1534528741775-53994a69daeb?w=150&auto=format&fit=crop&q=80"
        ],
        [
            "name" => "Dr. (Mrs.) Chioma Okeke",
            "title" => "Chief Formulation Chemist",
            "quote" => "CARC's pilot plant synthesis services have transformed our local pharmaceutical startup, giving us access to world-class GC-MS testing right here in Nigeria.",
            "badge" => "Pharma & Chem",
            "badge_bg" => "#fef3c7",
            "badge_color" => "#92400e",
            "border_color" => "#f59e0b",
            "avatar" => "https://images.unsplash.com/photo-1573496359142-b8d87734a5a2?w=150&auto=format&fit=crop&q=80"
        ],
        [
            "name" => "Alhaji Ibrahim Danladi",
            "title" => "President, Agro Cooperative",
            "quote" => "The tissue culture seedlings procured from BARC exhibited exceptional disease resistance, doubling our cooperative's harvest yield this season.",
            "badge" => "Agro-Biotech",
            "badge_bg" => "#d1fae5",
            "badge_color" => "#065f46",
            "border_color" => "#10b981",
            "avatar" => "https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?w=150&auto=format&fit=crop&q=80"
        ],
        [
            "name" => "Prof. Zainab Abdullahi",
            "title" => "Dean of Postgraduate Studies",
            "quote" => "Portal response times and transparency have been phenomenal. The SERVICOM digital desk resolved our patent inquiry within 24 hours.",
            "badge" => "Academia",
            "badge_bg" => "#ede9fe",
            "badge_color" => "#5b21b6",
            "border_color" => "#8b5cf6",
            "avatar" => "https://images.unsplash.com/photo-1580489944761-15a19d654956?w=150&auto=format&fit=crop&q=80"
        ]
    ];
    ?>
    <section class="nistco-section nistco-bg-parchment">
        <div class="nistco-container">
            <div class="nistco-section-header" style="text-align: center; max-width: 700px; margin: 0 auto 3.5rem auto;">
                <span class="nistco-section-kicker">Stakeholder Feedback</span>
                <h2 class="nistco-section-title">Performance & User Experience</h2>
                <p class="nistco-section-lead">Verified feedback from industrial partners, academic researchers, and ministry stakeholders.</p>
            </div>
            
            <div class="nistco-rating-summary-ribbon">
                <div class="rating-stat-box">
                    <div class="rating-score">4.9 <span>/ 5.0</span></div>
                    <div class="rating-stars">★★★★★</div>
                    <div class="rating-count">Based on 1,420 stakeholder reviews</div>
                </div>
                <div class="rating-divider"></div>
                <div class="rating-metrics-grid">
                    <div class="metric-pill"><span class="metric-val">99.8%</span><span class="metric-lbl">Uptime SLA</span></div>
                    <div class="metric-pill"><span class="metric-val">&lt; 1.2s</span><span class="metric-lbl">Portal Response</span></div>
                    <div class="metric-pill"><span class="metric-val">100%</span><span class="metric-lbl">SERVICOM Compliant</span></div>
                </div>
            </div>

            <!-- Infinite Horizontal Ticker with 3D Colorful Feedback Cards -->
            <div class="nistco-horizontal-ticker-container">
                <div class="nistco-horizontal-ticker-track">
                    <?php 
                    // Render original + duplicated set for seamless infinite loop
                    $loop_feedback = array_merge($feedback_items, $feedback_items);
                    foreach ($loop_feedback as $fb) : 
                    ?>
                        <div class="nistco-feedback-card" style="border-top: 5px solid <?php echo $fb['border_color']; ?>;">
                            <div>
                                <div class="feedback-card-header">
                                    <div class="feedback-avatar-box">
                                        <img src="<?php echo esc_url($fb['avatar']); ?>" alt="<?php echo esc_attr($fb['name']); ?>">
                                    </div>
                                    <div class="feedback-card-meta">
                                        <h4><?php echo esc_html($fb['name']); ?></h4>
                                        <span><?php echo esc_html($fb['title']); ?></span>
                                    </div>
                                </div>
                                <p class="feedback-quote">"<?php echo esc_html($fb['quote']); ?>"</p>
                            </div>
                            <div class="feedback-footer-row">
                                <div class="feedback-stars">★★★★★</div>
                                <span class="feedback-badge" style="background: <?php echo $fb['badge_bg']; ?>; color: <?php echo $fb['badge_color']; ?>;"><?php echo esc_html($fb['badge']); ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. STRATEGIC PARTNERS & INSTITUTIONAL ALLIANCES -->
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">
            <div class="nistco-section-header" style="text-align: center; max-width: 700px; margin: 0 auto 3.5rem auto;">
                <span class="nistco-section-kicker">Global & Domestic Networks</span>
                <h2 class="nistco-section-title">Strategic Partners & Institutional Alliances</h2>
                <p class="nistco-section-lead">Collaborating with premier international research councils, academic institutions, and industrial conglomerates.</p>
            </div>
            <div class="nistco-partners-grid">
                <div class="nistco-partner-card">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">🌐</div>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">ECOWAS Science Council</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 1rem; flex-grow: 1;">Regional cooperation in biotechnology safety and agricultural genomics across West Africa.</p>
                    <span style="font-size: 0.75rem; font-weight: 700; background: #e0f2fe; color: #0284c7; padding: 0.2rem 0.6rem; border-radius: 4px; display: inline-block; width: max-content;">Regional Partner</span>
                </div>
                <div class="nistco-partner-card">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">🎓</div>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">National Universities Commission</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 1rem; flex-grow: 1;">Facilitating postgraduate research residencies and shared advanced laboratory access.</p>
                    <span style="font-size: 0.75rem; font-weight: 700; background: #fef3c7; color: #92400e; padding: 0.2rem 0.6rem; border-radius: 4px; display: inline-block; width: max-content;">Academic Alliance</span>
                </div>
                <div class="nistco-partner-card">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">🏭</div>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">Manufacturers Association of Nigeria</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 1rem; flex-grow: 1;">Commercializing NOTAP patents and scaling indigenous pilot plants for national enterprise.</p>
                    <span style="font-size: 0.75rem; font-weight: 700; background: #d1fae5; color: #065f46; padding: 0.2rem 0.6rem; border-radius: 4px; display: inline-block; width: max-content;">Industrial Partner</span>
                </div>
                <div class="nistco-partner-card">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">⚛️</div>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">International Atomic Energy Agency</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin-bottom: 1rem; flex-grow: 1;">Technical cooperation in nuclear instrumentation, radiation safety, and metrology standards.</p>
                    <span style="font-size: 0.75rem; font-weight: 700; background: #ede9fe; color: #5b21b6; padding: 0.2rem 0.6rem; border-radius: 4px; display: inline-block; width: max-content;">Global Partner</span>
                </div>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.nistco-counter');
    if (counters.length > 0) {
        const observer = new IntersectionObserver((entries, observerInstance) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const el = entry.target;
                    const target = parseFloat(el.getAttribute('data-target'));
                    const suffix = el.getAttribute('data-suffix') || '';
                    const isComma = el.getAttribute('data-comma') === 'true';
                    let startTime = null;
                    function step(currentTime) {
                        if (!startTime) startTime = currentTime;
                        const progress = Math.min((currentTime - startTime) / 2000, 1);
                        const easeProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                        let formatted = Math.floor(target * easeProgress);
                        if (isComma) formatted = formatted.toLocaleString();
                        el.textContent = formatted + suffix;
                        if (progress < 1) requestAnimationFrame(step);
                    }
                    requestAnimationFrame(step);
                    observerInstance.unobserve(el);
                }
            });
        }, { threshold: 0.2 });
        counters.forEach(counter => observer.observe(counter));
    }
});
</script>

<?php get_footer(); ?>
