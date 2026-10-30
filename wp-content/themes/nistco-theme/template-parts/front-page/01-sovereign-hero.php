<?php
/**
 * NASTCO Portal — Section 1: Next-Generation 3D Hero Experience
 */
defined( 'ABSPATH' ) || exit;
?>
<style id="nastco-exec-hero-css">
    .nastco-hero-viewport {
        position: relative;
        min-height: 92vh;
        background: radial-gradient(circle at 50% 30%, rgba(16, 185, 129, 0.15) 0%, rgba(5, 12, 28, 0.96) 65%, #020613 100%),
                    repeating-linear-gradient(0deg, rgba(255,255,255,0.015) 0px, rgba(255,255,255,0.015) 1px, transparent 1px, transparent 32px);
        overflow: hidden;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 4rem 1.5rem;
        perspective: 1400px;
    }
    .nastco-hero-particles {
        position: absolute;
        inset: 0;
        background-image: radial-gradient(2px 2px at 20px 30px, #38bdf8, rgba(0,0,0,0)),
                          radial-gradient(2px 2px at 40px 70px, #facc15, rgba(0,0,0,0)),
                          radial-gradient(2px 2px at 90px 40px, #10b981, rgba(0,0,0,0));
        background-repeat: repeat;
        background-size: 180px 180px;
        opacity: 0.35;
        animation: heroParticleFloat 28s linear infinite;
        pointer-events: none;
    }
    @keyframes heroParticleFloat { 0% { transform: translateY(0); } 100% { transform: translateY(-180px); } }

    .nastco-hero-container {
        max-width: 1380px;
        margin: 0 auto;
        position: relative;
        z-index: 10;
        display: grid;
        grid-template-columns: 1.15fr 0.85fr;
        gap: 3rem;
        align-items: center;
    }
    .nastco-hero-badge {
        display: inline-flex;
        align-items: center;
        gap: 0.55rem;
        padding: 0.45rem 1.1rem;
        border-radius: 999px;
        background: rgba(16, 185, 129, 0.12);
        border: 1px solid rgba(16, 185, 129, 0.38);
        color: #34d399;
        font-size: 0.76rem;
        font-weight: 800;
        letter-spacing: 0.09em;
        text-transform: uppercase;
        margin-bottom: 1.25rem;
        box-shadow: 0 0 20px rgba(16, 185, 129, 0.25);
    }
    .nastco-hero-title {
        font-size: clamp(2.4rem, 4.5vw, 4rem);
        font-weight: 900;
        line-height: 1.08;
        color: #ffffff;
        letter-spacing: -0.02em;
        margin: 0 0 1.25rem;
        text-shadow: 0 4px 15px rgba(0,0,0,0.8);
    }
    .nastco-hero-title span {
        background: linear-gradient(135deg, #facc15 0%, #38bdf8 50%, #10b981 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
    }
    .nastco-hero-sub {
        font-size: 1.12rem;
        line-height: 1.65;
        color: #cbd5e1;
        margin: 0 0 2.25rem;
        max-width: 640px;
    }
    .nastco-hero-ctas {
        display: flex;
        align-items: center;
        gap: 1rem;
        flex-wrap: wrap;
    }
    .nastco-hero-btn-primary {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.85rem 1.75rem;
        border-radius: 14px;
        background: linear-gradient(135deg, #facc15 0%, #ca8a04 100%);
        color: #030712 !important;
        font-size: 0.86rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.05em;
        text-decoration: none;
        box-shadow: 0 10px 28px rgba(250, 204, 21, 0.45);
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }
    .nastco-hero-btn-primary:hover {
        transform: translateY(-3px) translateZ(15px);
        box-shadow: 0 16px 36px rgba(250, 204, 21, 0.65);
    }
    .nastco-hero-btn-secondary {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.85rem 1.5rem;
        border-radius: 14px;
        background: rgba(255, 255, 255, 0.04);
        border: 1px solid rgba(255, 255, 255, 0.18);
        color: #f8fafc !important;
        font-size: 0.86rem;
        font-weight: 800;
        text-decoration: none;
        backdrop-filter: blur(12px);
        transition: all 0.25s ease;
    }
    .nastco-hero-btn-secondary:hover {
        background: rgba(56, 189, 248, 0.12);
        border-color: #38bdf8;
        transform: translateY(-3px);
    }

    /* Right 3D Floating KPI Panels */
    .nastco-hero-3d-stack {
        display: grid;
        grid-template-columns: 1fr;
        gap: 1.25rem;
        transform: rotateY(-8deg) rotateX(4deg);
        transform-style: preserve-3d;
    }
    .nastco-hero-kpi-card {
        background: rgba(11, 22, 44, 0.88);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.12);
        border-left: 4px solid var(--kpi-accent, #facc15);
        border-radius: 18px;
        padding: 1.35rem 1.65rem;
        box-shadow: 0 20px 45px rgba(0, 0, 0, 0.75), inset 0 1px 0 rgba(255, 255, 255, 0.15);
        transform: translateZ(20px);
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1);
    }
    .nastco-hero-kpi-card:hover {
        transform: translateZ(45px) scale(1.02);
    }
    .nastco-kpi-val {
        font-size: 2rem;
        font-weight: 900;
        color: var(--kpi-accent, #facc15);
        line-height: 1;
        margin-bottom: 0.25rem;
    }
    .nastco-kpi-lbl {
        font-size: 0.82rem;
        font-weight: 800;
        color: #ffffff;
    }
    .nastco-kpi-sub {
        font-size: 0.72rem;
        color: #94a3b8;
    }

    @media (max-width: 1024px) {
        .nastco-hero-container { grid-template-columns: 1fr; }
        .nastco-hero-3d-stack { transform: none; }
    }
</style>

<section class="nastco-hero-viewport" id="sovereign-hero-experience">
    <div class="nastco-hero-particles"></div>
    <div class="nastco-hero-container">
        <div>
            <div class="nastco-hero-badge">
                <span style="width:8px; height:8px; border-radius:50%; background:#34d399; box-shadow:0 0 10px #34d399;"></span>
                <span>SOVEREIGN TECHNOLOGY COMMERCIALISATION ENGINE</span>
            </div>
            <h1 class="nastco-hero-title">
                Transforming Research Into <span>National Wealth</span>
            </h1>
            <p class="nastco-hero-sub">
                Driving Commercialisation, Innovation &amp; Technological Sovereignty across Nigeria’s six sovereign research directorates at Sheda Science City.
            </p>
            <div class="nastco-hero-ctas">
                <a href="<?php echo esc_url( home_url( '/commercial-ventures-2/' ) ); ?>" class="nastco-hero-btn-primary">
                    <span>⚡ Commercial IP Portfolio</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="nastco-hero-btn-secondary">
                    <span>🔬 Explore 6 Research Hubs</span>
                </a>
            </div>
        </div>

        <div class="nastco-hero-3d-stack">
            <div class="nastco-hero-kpi-card" style="--kpi-accent: #facc15;">
                <div class="nastco-kpi-val">₦541.5M+</div>
                <div class="nastco-kpi-lbl">Statutory Royalty &amp; IGR Yield</div>
                <div class="nastco-kpi-sub">40% Inventors • 35% Centre • 25% NASTCO Split</div>
            </div>
            <div class="nastco-hero-kpi-card" style="--kpi-accent: #38bdf8;">
                <div class="nastco-kpi-val">1.4 PFLOPS</div>
                <div class="nastco-kpi-lbl">AMSARC HPC Digital Twin Engine</div>
                <div class="nastco-kpi-sub">Multi-Physics Finite Element Simulation</div>
            </div>
            <div class="nastco-hero-kpi-card" style="--kpi-accent: #10b981;">
                <div class="nastco-kpi-val">480 Genomes/Mo</div>
                <div class="nastco-kpi-lbl">BARC Molecular High-Throughput Line</div>
                <div class="nastco-kpi-sub">BSL-3 Bio-Containment &amp; Seed Multiplication</div>
            </div>
        </div>
    </div>
</section>
