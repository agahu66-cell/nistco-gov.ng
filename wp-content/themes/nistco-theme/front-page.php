<?php
/**
 * Template Name: NISTCO Front Page (Modern Master with Media Carousel)
 * The modernized homepage template for NISTCO Portal
 */

get_header();
?>

<main class="nistco-main">

    <!-- Hero Section -->
    <section class="nistco-hero-section">
        <div class="nistco-hero-ambient-1"></div>
        <div class="nistco-hero-ambient-2"></div>
        <div class="nistco-hero-pattern"></div>
        
        <div class="nistco-container nistco-hero-grid">
            <div>
                <div class="nistco-hero-badges">
                    <span class="nistco-pill nistco-pill-green">Federal Republic of Nigeria</span>
                    <span class="nistco-pill nistco-pill-gold">Innovation & Science Complex</span>
                </div>
                
                <h1 class="nistco-hero-title">
                    Advancing National <span style="color: #fde047;">Science, Technology & Commercialization</span>
                </h1>
                
                <p class="nistco-hero-subtitle">
                    The Nigeria Innovation, Science and Technology Complex (NISTCO) drives high-performance computing, advanced chemistry synthesis, biotechnology, physics research, and industrial prototyping across strategic national research centres.
                </p>
                
                <div class="nistco-hero-actions">
                    <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="nistco-btn nistco-btn-primary">
                        Explore Research Centres &rarr;
                    </a>
                    <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" class="nistco-btn nistco-btn-gold">
                        Commercial Ventures & IP
                    </a>
                </div>

                <!-- Centre Quick Launchpad Dock -->
                <div class="nistco-centre-launchpad">
                    <span class="launchpad-heading">Direct Centre Access</span>
                    <div class="launchpad-pills-row">
                        <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">⚡</span><span class="pill-code">AMSARC (HPC)</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🧪</span><span class="pill-code">CARC (Chemistry)</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🧬</span><span class="pill-code">BARC (Biotech)</span></a>
                    </div>
                </div>
            </div>

            <!-- 3D Viewport Atom Animation -->
            <div class="nistco-3d-viewport">
                <div class="nistco-3d-stage">
                    <div class="crossing-resonance-field">
                        <div class="crossing-field-line"></div>
                    </div>
                    <div class="atom-form-primary">
                        <div class="nucleus-primary">
                            <div class="core-emerald-gold"></div>
                            <div class="corona-emerald"></div>
                        </div>
                        <div class="quantum-orbit orbit-primary-1 border-emerald">
                            <div class="quantum-electron electron-emerald"></div>
                        </div>
                        <div class="quantum-orbit orbit-primary-2 border-gold">
                            <div class="quantum-electron electron-gold"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Statutory Metrics Section with Live Count-up Animation -->
    <?php 
    $metrics = [
        [
            "target" => 7,
            "suffix" => "",
            "comma"  => false,
            "title"  => "Research Centres & Divisions",
            "desc"   => "Biotech, HPC, Chemistry, Physics, Nuclear & Tooling"
        ],
        [
            "target" => 5,
            "suffix" => "+",
            "comma"  => false,
            "title"  => "Scientific Publications",
            "desc"   => "Peer-reviewed & indexed research repository"
        ],
        [
            "target" => 2000,
            "suffix" => "",
            "comma"  => true,
            "title"  => "Hectares Campus Footprint",
            "desc"   => "Abuja-Lokoja Technology Corridor sanctuary"
        ],
        [
            "target" => 16,
            "suffix" => "+",
            "comma"  => false,
            "title"  => "Registered Patents",
            "desc"   => "NOTAP-certified indigenous technologies"
        ],
        [
            "target" => 4,
            "suffix" => "",
            "comma"  => false,
            "title"  => "Demonstration Pilot Plants",
            "desc"   => "500L synthesis, tissue culture & precision CNC"
        ],
        [
            "target" => 500,
            "suffix" => " kVA",
            "comma"  => false,
            "title"  => "Clean Energy Microgrid",
            "desc"   => "Dedicated solar hybrid for NMR & HPC compute"
        ],
        [
            "target" => 100,
            "suffix" => "%",
            "comma"  => false,
            "title"  => "Open Researcher Access",
            "desc"   => "Shared national laboratory & residency facilities"
        ]
    ];
    ?>
    <section style="background: #042416; color: #fff; padding: 4.5rem 1.5rem; border-top: 3px solid #d97706; border-bottom: 3px solid #d97706; box-sizing: border-box; width: 100%;">
        <div style="max-width: 1440px; margin: 0 auto;">
            
            <div style="text-align: center; margin-bottom: 3.5rem;">
                <div style="color: #fde047; font-size: 0.85rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Institutional Impact</div>
                <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); font-weight: 800; margin: 0; color: #ffffff; letter-spacing: -0.5px;">Nigeria Innovation Science & Technology Complex</h2>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.75rem;">
                <?php foreach ( $metrics as$metric ) : ?>
                    <div style="background: rgba(255,255,255,0.05); border: 1px solid rgba(217,119,6,0.3); border-radius: 10px; padding: 2rem 1.5rem; text-align: center; box-shadow: 0 10px 25px rgba(0,0,0,0.25); backdrop-filter: blur(8px);">
                        <div class="nistco-counter" 
                             data-target="<?php echo esc_attr( $metric['target'] ); ?>" 
                             data-suffix="<?php echo esc_attr( $metric['suffix'] ); ?>" 
                             data-comma="<?php echo $metric['comma'] ? 'true' : 'false'; ?>"
                             style="font-size: 2.75rem; font-weight: 800; color: #fde047; line-height: 1; margin-bottom: 0.65rem;">
                             0<?php echo esc_html( $metric['suffix'] ); ?>
                        </div>
                        <div style="font-size: 1.05rem; font-weight: 700; color: #fff; margin-bottom: 0.4rem;"><?php echo esc_html( $metric['title'] ); ?></div>
                        <div style="font-size: 0.85rem; color: #cbd5e1; line-height: 1.5;"><?php echo esc_html( $metric['desc'] ); ?></div>
                    </div>
                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- Dedicated NISTCO Overview Section -->
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container nistco-about-grid" style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: center;">
            <div>
                <span class="nistco-section-kicker">About NISTCO</span>
                <h2 class="nistco-section-title">A Premier National Sanctuary for Science & Technological Sovereignty</h2>
                <p class="nistco-section-lead" style="margin-bottom: 1.5rem;">
                    The Nigeria Innovation, Science and Technology Complex (NISTCO) serves as the nation’s apex institution for applied R&D, pilot manufacturing, and technology commercialization under the Federal Ministry of Innovation, Science and Technology.
                </p>
                <p style="color: var(--text-muted); line-height: 1.75; margin-bottom: 2rem;">
                    Spanning a 2,000-hectare advanced technology corridor in Abuja, NISTCO bridges academic theory with industrial execution. By housing specialized centres in advanced chemistry synthesis, high-performance computing, biotechnology, physics, nuclear sciences, and precision tooling, the complex accelerates national self-reliance and global competitiveness.
                </p>
                <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                    <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="nistco-btn nistco-btn-outline">
                        Read Full Institutional Mandate &rarr;
                    </a>
                </div>
            </div>
            <div style="background: linear-gradient(135deg, #042416 0%, #0d5c3a 100%); border-radius: 14px; padding: 3rem; color: #fff; box-shadow: 0 20px 40px rgba(4,36,22,0.2); border-left: 6px solid #d97706;">
                <h3 style="font-size: 1.5rem; font-weight: 800; color: #fde047; margin-top: 0; margin-bottom: 1.25rem;">Strategic Objectives</h3>
                <ul style="list-style: none; padding: 0; margin: 0; display: flex; flex-direction: column; gap: 1rem; font-size: 0.98rem; line-height: 1.6;">
                    <li style="display: flex; gap: 0.75rem; align-items: flex-start;">
                        <span style="color: #fde047; font-weight: bold;">✓</span>
                        <span><strong>Import Substitution:</strong> Scaling indigenous chemical formulations and advanced materials to replace costly industrial imports.</span>
                    </li>
                    <li style="display: flex; gap: 0.75rem; align-items: flex-start;">
                        <span style="color: #fde047; font-weight: bold;">✓</span>
                        <span><strong>High-Performance Compute:</strong> Powering national scientific simulation, climate modeling, and AI algorithms.</span>
                    </li>
                    <li style="display: flex; gap: 0.75rem; align-items: flex-start;">
                        <span style="color: #fde047; font-weight: bold;">✓</span>
                        <span><strong>Technology Transfer:</strong> Bridging research laboratories with commercial enterprises via NOTAP-certified patents.</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Research Centres & Divisions Grid -->
    <section class="nistco-section nistco-bg-parchment">
        <div class="nistco-container">
            <div class="nistco-section-header">
                <span class="nistco-section-kicker">Specialized Divisions</span>
                <h2 class="nistco-section-title">Our Advanced Research Centres</h2>
                <p class="nistco-section-lead">Explore our world-class scientific laboratories, specialized equipment clusters, and pilot production plants located across our Abuja complex.</p>
            </div>

            <div class="nistco-centres-grid">
                
                <!-- AMSARC -->
                <div class="nistco-centre-card">
                    <div class="nistco-centre-icon-wrap">⚡</div>
                    <div class="nistco-centre-code">AMSARC</div>
                    <h3 class="nistco-centre-title">Applied Mathematics & Simulation</h3>
                    <p class="nistco-centre-desc">High-performance computing (HPC) cluster, GPU accelerated simulation nodes, and scientific visualization labs.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" class="nistco-card-action">
                        <span>Access AMSARC Portal</span>
                        <span>&rarr;</span>
                    </a>
                </div>

                <!-- CARC (Chemistry) -->
                <div class="nistco-centre-card">
                    <div class="nistco-centre-icon-wrap">🧪</div>
                    <div class="nistco-centre-code">CARC</div>
                    <h3 class="nistco-centre-title">Chemistry Advanced Research Centre</h3>
                    <p class="nistco-centre-desc">Industrial chemistry synthesis, 500L pilot plant, NMR & GC-MS instrumentation, and material testing suites.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" class="nistco-card-action">
                        <span>Access CARC Portal</span>
                        <span>&rarr;</span>
                    </a>
                </div>

                <!-- BARC -->
                <div class="nistco-centre-card">
                    <div class="nistco-centre-icon-wrap">🧬</div>
                    <div class="nistco-centre-code">BARC</div>
                    <h3 class="nistco-centre-title">Biotechnology Advanced Research Centre</h3>
                    <p class="nistco-centre-desc">Molecular biology & PCR suites, plant tissue culture micropropagation, and bioprocess fermentation bioreactors.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" class="nistco-card-action">
                        <span>Access BARC Portal</span>
                        <span>&rarr;</span>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- Media & Press Releases Carousel Section -->
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">
            <div class="nistco-section-header-flex">
                <div>
                    <span class="nistco-section-kicker">News & Announcements</span>
                    <h2 class="nistco-section-title">Media & Broadcast Briefs</h2>
                    <p class="nistco-section-lead">Stay updated with the latest commissioning reports, research breakthroughs, and institutional press releases from NISTCO.</p>
                </div>
                <div class="rating-carousel-controls" style="margin: 0;">
                    <button class="rating-nav-btn media-prev-btn" aria-label="Previous Slide">&larr;</button>
                    <button class="rating-nav-btn media-next-btn" aria-label="Next Slide">&rarr;</button>
                </div>
            </div>

            <!-- Media Carousel Track -->
            <div class="rating-carousel-wrapper">
                <div class="rating-carousel-track-container">
                    <div class="rating-carousel-track media-carousel-track">
                        
                        <!-- Slide 1 -->
                        <div class="rating-slide">
                            <div class="rating-card">
                                <div class="rating-card-header">
                                    <span class="rating-verified-tag">Press Release</span>
                                    <span style="font-size: 0.8rem; color: var(--text-muted);">October 10, 2026</span>
                                </div>
                                <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--mc-dark); margin: 0 0 0.75rem 0;">NISTCO Commissions 500 kVA Solar Microgrid for HPC Compute</h3>
                                <p class="rating-quote" style="margin-bottom: 1.5rem;">
                                    "The newly deployed solar hybrid microgrid guarantees uninterrupted power for our High-Performance Computing (HPC) cluster and nuclear magnetic resonance instrumentation in Abuja..."
                                </p>
                                <div class="rating-author-box">
                                    <div class="rating-avatar">☀️</div>
                                    <div class="rating-author-info">
                                        <span class="author-name">Works & Services Directorate</span>
                                        <span class="author-role">Infrastructure Update</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="rating-slide">
                            <div class="rating-card">
                                <div class="rating-card-header">
                                    <span class="rating-verified-tag" style="background: var(--mc-gold-light); color: #854d0e;">Research Brief</span>
                                    <span style="font-size: 0.8rem; color: var(--text-muted);">September 28, 2026</span>
                                </div>
                                <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--mc-dark); margin: 0 0 0.75rem 0;">AMSARC Unveils 256 TeraFLOPs Simulation Benchmark</h3>
                                <p class="rating-quote" style="margin-bottom: 1.5rem;">
                                    "Applied Mathematics and Simulation Advanced Research Centre achieves a new milestone in computational fluid dynamics and weather modeling accuracy..."
                                </p>
                                <div class="rating-author-box">
                                    <div class="rating-avatar">⚡</div>
                                    <div class="rating-author-info">
                                        <span class="author-name">Computational Sciences Lab</span>
                                        <span class="author-role">AMSARC Division</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="rating-slide">
                            <div class="rating-card">
                                <div class="rating-card-header">
                                    <span class="rating-verified-tag" style="background: #e0f2fe; color: #0284c7;">Commercialization</span>
                                    <span style="font-size: 0.8rem; color: var(--text-muted);">September 15, 2026</span>
                                </div>
                                <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--mc-dark); margin: 0 0 0.75rem 0;">CARC Scales Up Indigenous Pharmaceutical Formulations</h3>
                                <p class="rating-quote" style="margin-bottom: 1.5rem;">
                                    "Chemistry Advanced Research Centre successfully transitions 3 new bio-active compounds to pilot-scale production, bolstering national import substitution goals..."
                                </p>
                                <div class="rating-author-box">
                                    <div class="rating-avatar">🧪</div>
                                    <div class="rating-author-info">
                                        <span class="author-name">Chemical Sciences R&D</span>
                                        <span class="author-role">CARC Division</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 4 -->
                        <div class="rating-slide">
                            <div class="rating-card">
                                <div class="rating-card-header">
                                    <span class="rating-verified-tag">Partnership</span>
                                    <span style="font-size: 0.8rem; color: var(--text-muted);">August 30, 2026</span>
                                </div>
                                <h3 style="font-size: 1.25rem; font-weight: 800; color: var(--mc-dark); margin: 0 0 0.75rem 0;">Federal Ministry Inspects Touchscreen Training Labs</h3>
                                <p class="rating-quote" style="margin-bottom: 1.5rem;">
                                    "Delegates from the Federal Ministry of Innovation, Science and Technology review execution schedules and desk officer training curricula at the complex..."
                                </p>
                                <div class="rating-author-box">
                                    <div class="rating-avatar">🏛️</div>
                                    <div class="rating-author-info">
                                        <span class="author-name">Public Affairs Department</span>
                                        <span class="author-role">Ministry Oversight</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // 1. Count-up Metrics Animation
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
                    const duration = 2000;

                    function step(currentTime) {
                        if (!startTime) startTime = currentTime;
                        const progress = Math.min((currentTime - startTime) / duration, 1);
                        const easeProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                        const currentVal = target * easeProgress;

                        let formatted = Math.floor(currentVal);
                        if (isComma) {
                            formatted = formatted.toLocaleString();
                        }

                        el.textContent = formatted + suffix;

                        if (progress < 1) {
                            requestAnimationFrame(step);
                        } else {
                            let finalVal = target;
                            if (isComma) {
                                finalVal = finalVal.toLocaleString();
                            }
                            el.textContent = finalVal + suffix;
                        }
                    }

                    requestAnimationFrame(step);
                    observerInstance.unobserve(el);
                }
            });
        }, { threshold: 0.2 });

        counters.forEach(counter => observer.observe(counter));
    }

    // 2. Media Carousel Slider Engine
    const mediaTrack = document.querySelector('.media-carousel-track');
    const mediaPrevBtn = document.querySelector('.media-prev-btn');
    const mediaNextBtn = document.querySelector('.media-next-btn');

    if (mediaTrack && mediaPrevBtn && mediaNextBtn) {
        let currentSlide = 0;
        const totalSlides = mediaTrack.children.length;
        
        function updateMediaCarousel() {
            const slideWidth = mediaTrack.children[0].getBoundingClientRect().width;
            mediaTrack.style.transform = `translateX(-${currentSlide * slideWidth}px)`;
        }

        mediaNextBtn.addEventListener('click', function() {
            // Show 2 slides at a time on desktop, 1 on mobile
            const maxIndex = window.innerWidth <= 992 ? totalSlides - 1 : Math.max(0, totalSlides - 2);
            currentSlide = currentSlide < maxIndex ? currentSlide + 1 : 0;
            updateMediaCarousel();
        });

        mediaPrevBtn.addEventListener('click', function() {
            const maxIndex = window.innerWidth <= 992 ? totalSlides - 1 : Math.max(0, totalSlides - 2);
            currentSlide = currentSlide > 0 ? currentSlide - 1 : maxIndex;
            updateMediaCarousel();
        });

        window.addEventListener('resize', updateMediaCarousel);
    }
});
</script>

<style>
@media screen and (max-width: 992px) {
    .nistco-about-grid {
        grid-template-columns: 1fr !important;
        gap: 2.5rem !important;
    }
}
</style>

<?php
get_footer();
