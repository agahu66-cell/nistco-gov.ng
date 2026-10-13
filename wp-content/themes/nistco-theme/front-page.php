<?php
/**
 * Template Name: NISTCO Front Page (Ultimate Master with Exact Hero & Flags)
 * The comprehensive modernized homepage template for NISTCO Portal
 */

get_header();
?>

<main class="nistco-main">

    <!-- 1. HERO SECTION (Customized to match capture layout) -->
    <section class="nistco-hero-section">
        <div class="nistco-hero-ambient-1"></div>
        <div class="nistco-hero-ambient-2"></div>
        <div class="nistco-hero-pattern"></div>
        
        <div class="nistco-container nistco-hero-grid">
            <div>
                <div class="nistco-hero-badges">
                    <span class="nistco-pill nistco-pill-green">FEDERAL REPUBLIC OF NIGERIA</span>[cite: 1]
                    <span class="nistco-pill nistco-pill-gold">CHIEF PATRONAGE</span>[cite: 1]
                </div>
                
                <h1 class="nistco-hero-title" style="font-size: clamp(2rem, 4.5vw, 3.4rem);">
                    National Science & <br><span style="color: #fde047;">Technology Complex</span>[cite: 1]
                </h1>
                
                <p class="nistco-hero-subtitle">
                    Nigeria's apex multidisciplinary centre of scientific excellence mandated to execute frontier basic and applied research, operate national demonstration pilot plants, and drive indigenous industrial transformation.[cite: 1]
                </p>
                
                <div class="nistco-hero-actions">
                    <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="nistco-btn nistco-btn-primary">
                        Explore Research Centres[cite: 1] &rarr;
                    </a>
                    <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" class="nistco-btn nistco-btn-gold">
                        Innovation & Patents[cite: 1]
                    </a>
                    <a href="<?php echo esc_url( home_url( '/servicom/' ) ); ?>" class="nistco-btn nistco-btn-secondary">
                        Public Trustee Desk[cite: 1]
                    </a>
                </div>

                <!-- Centre Quick Launchpad Dock -->
                <div class="nistco-centre-launchpad">
                    <span class="launchpad-heading">ADVANCED CENTRES & DIVISIONS[cite: 1]</span>
                    <div class="launchpad-pills-row">
                        <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">⚡</span><span class="pill-code">AMSARC[cite: 1]</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🧪</span><span class="pill-code">CARC[cite: 1]</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">🧬</span><span class="pill-code">BARC[cite: 1]</span></a>
                        <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" class="launchpad-pill"><span class="pill-icon">☢️</span><span class="pill-code">NTC[cite: 1]</span></a>
                    </div>
                </div>
            </div>

            <!-- 3D Viewport with Interlocking Engineering Gears -->
            <div class="nistco-3d-viewport">
                <div class="nistco-3d-stage">
                    <div class="crossing-resonance-field">
                        <div class="crossing-field-line"></div>
                    </div>
                    
                    <div class="gear-system-3d">
                        <div class="gear-wrap gear-main-wrap">
                            <svg class="gear-3d-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="32" stroke="#c59b27" stroke-width="4" stroke-dasharray="6 3"/>
                                <circle cx="50" cy="50" r="18" fill="#042416" stroke="#86efac" stroke-width="2"/>
                                <path d="M50 10V20M50 80V90M10 50H20M80 50H90M22 22L29 29M71 71L78 78M22 78L29 71M71 29L78 22" stroke="#c59b27" stroke-width="5" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <div class="gear-wrap gear-secondary-wrap">
                            <svg class="gear-3d-svg" viewBox="0 0 100 100" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="50" cy="50" r="28" stroke="#86efac" stroke-width="4" stroke-dasharray="4 2"/>
                                <circle cx="50" cy="50" r="14" fill="#042416" stroke="#c59b27" stroke-width="2"/>
                                <path d="M50 12V22M50 78V88M12 50H22M78 50H88" stroke="#86efac" stroke-width="4" stroke-linecap="round"/>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 2. INSTITUTIONAL IMPACT METRICS (Multi-colored NISTCO Palette) -->
    <?php 
    $metrics = [
        [ "target" => 7, "suffix" => "", "comma" => false, "title" => "Research Centres & Divisions", "desc" => "Biotech, HPC, Chemistry, Physics, Nuclear & Tooling", "color" => "#86efac" ],
        [ "target" => 5, "suffix" => "+", "comma" => false, "title" => "Scientific Publications", "desc" => "Peer-reviewed & indexed research repository", "color" => "#fde047" ],
        [ "target" => 2000, "suffix" => "", "comma" => true, "title" => "Hectares Campus Footprint", "desc" => "Abuja-Lokoja Technology Corridor sanctuary", "color" => "#38bdf8" ],
        [ "target" => 16, "suffix" => "+", "comma" => false, "title" => "Registered Patents", "desc" => "NOTAP-certified indigenous technologies", "color" => "#fbbf24" ],
        [ "target" => 4, "suffix" => "", "comma" => false, "title" => "Demonstration Pilot Plants", "desc" => "500L synthesis, tissue culture & precision CNC", "color" => "#34d399" ],
        [ "target" => 500, "suffix" => " kVA", "comma" => false, "title" => "Clean Energy Microgrid", "desc" => "Dedicated solar hybrid for NMR & HPC compute", "color" => "#f43f5e" ],
        [ "target" => 100, "suffix" => "%", "comma" => false, "title" => "Open Researcher Access", "desc" => "Shared national laboratory & residency facilities", "color" => "#a78bfa" ]
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

    <!-- 3. PRESIDENTIAL SECTION (Customized with Nigerian Flag Side Bars) -->
    <section class="nistco-section nistco-bg-parchment" style="position: relative; overflow: hidden;">
        <!-- Fitted Nigerian Flag Side Accent Bars -->
        <div style="position: absolute; top: 0; left: 0; width: 12px; height: 100%; display: flex; flex-direction: column;">
            <div style="flex: 1; background: #008751;"></div>
            <div style="flex: 1; background: #ffffff;"></div>
            <div style="flex: 1; background: #008751;"></div>
        </div>
        <div style="position: absolute; top: 0; right: 0; width: 12px; height: 100%; display: flex; flex-direction: column;">
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

    <!-- 4. REFINED EXECUTIVE DIRECTION SECTION -->
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">
            <div class="mc-section-header">
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
                    <div class="mc-exec-caption">
                        <span class="mc-exec-name">Director-General / CEO</span>
                        <span class="mc-exec-designation">Nigeria Innovation Science & Technology Complex</span>
                    </div>
                </div>
                <div>
                    <h3 class="mc-exec-headline">Bridging Laboratory Breakthroughs with National Industrialization</h3>
                    <blockquote class="mc-exec-quote" style="border-left-color: #008751;">
                        "At NISTCO, we are transforming our 7 advanced research centres into vibrant commercial engines. From our 500L chemistry pilot synthesis plant to our 256 TeraFLOPs HPC facility, we deliver verified solutions for Nigerian industry."
                    </blockquote>
                    <div class="mc-exec-actions">
                        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="nistco-btn nistco-btn-primary">
                            Explore Executive Leadership Roster &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 5. ALL RESEARCH CENTRES & DEPARTMENTS -->
    <section class="nistco-section nistco-bg-parchment">
        <div class="nistco-container">
            <div class="nistco-section-header">
                <span class="nistco-section-kicker">Specialized Divisions</span>
                <h2 class="nistco-section-title">Our Research Centres & Departments</h2>
                <p class="nistco-section-lead">Explore our world-class scientific laboratories, specialized equipment clusters, and pilot production plants across all 7 divisions.</p>
            </div>
            <div class="nistco-centres-grid">
                <div class="nistco-centre-card">
                    <div class="nistco-centre-icon-wrap">⚡</div>
                    <div class="nistco-centre-code">AMSARC</div>
                    <h3 class="nistco-centre-title">Applied Mathematics & Simulation</h3>
                    <p class="nistco-centre-desc">High-performance computing (HPC) cluster, GPU accelerated simulation nodes, and scientific visualization labs.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" class="nistco-card-action"><span>Access AMSARC Portal</span><span>&rarr;</span></a>
                </div>
                <div class="nistco-centre-card">
                    <div class="nistco-centre-icon-wrap">🧪</div>
                    <div class="nistco-centre-code">CARC</div>
                    <h3 class="nistco-centre-title">Chemistry Advanced Research Centre</h3>
                    <p class="nistco-centre-desc">Industrial chemistry synthesis, 500L pilot plant, NMR & GC-MS instrumentation, and material testing suites.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" class="nistco-card-action"><span>Access CARC Portal</span><span>&rarr;</span></a>
                </div>
                <div class="nistco-centre-card">
                    <div class="nistco-centre-icon-wrap">🧬</div>
                    <div class="nistco-centre-code">BARC</div>
                    <h3 class="nistco-centre-title">Biotechnology Advanced Research Centre</h3>
                    <p class="nistco-centre-desc">Molecular biology & PCR suites, plant tissue culture micropropagation, and bioprocess fermentation bioreactors.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" class="nistco-card-action"><span>Access BARC Portal</span><span>&rarr;</span></a>
                </div>
                <div class="nistco-centre-card">
                    <div class="nistco-centre-icon-wrap">☢️</div>
                    <div class="nistco-centre-code">NTC</div>
                    <h3 class="nistco-centre-title">Nuclear Technology Centre</h3>
                    <p class="nistco-centre-desc">Radiation safety standards, isotopic analysis, and nuclear instrumentation for industrial and medical application.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" class="nistco-card-action"><span>Access NTC Portal</span><span>&rarr;</span></a>
                </div>
                <div class="nistco-centre-card">
                    <div class="nistco-centre-icon-wrap">🔬</div>
                    <div class="nistco-centre-code">PARC</div>
                    <h3 class="nistco-centre-title">Physics Advanced Research Centre</h3>
                    <p class="nistco-centre-desc">Solid-state physics, materials characterization, optics, and renewable energy semiconductor testing.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/parc/' ) ); ?>" class="nistco-card-action"><span>Access PARC Portal</span><span>&rarr;</span></a>
                </div>
                <div class="nistco-centre-card">
                    <div class="nistco-centre-icon-wrap">⚙️</div>
                    <div class="nistco-centre-code">PTD</div>
                    <h3 class="nistco-centre-title">Advanced Tooling & Prototyping</h3>
                    <p class="nistco-centre-desc">Precision CNC machining, rapid additive manufacturing, and pilot mold engineering for Nigerian industries.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/ptd/' ) ); ?>" class="nistco-card-action"><span>Access PTD Portal</span><span>&rarr;</span></a>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. PATENTS & MARKET-READY INVENTIONS -->
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">
            <div class="nistco-section-header">
                <span class="nistco-section-kicker">Intellectual Property</span>
                <h2 class="nistco-section-title">Patents & Market-Ready Inventions</h2>
                <p class="nistco-section-lead">Explore NOTAP-certified indigenous technologies ready for commercial licensing and industrial manufacturing partnership.</p>
            </div>
            <div class="inno-patents-grid">
                <div class="inno-patent-card">
                    <div class="inno-patent-header"><span class="inno-tag-pill tag-chem">Chemistry & Bioactives</span><span class="inno-trl-pill">TRL 8 Commercial</span></div>
                    <h3 class="inno-patent-title">Bio-Based Industrial Solvents & Degreasers</h3>
                    <p class="inno-patent-excerpt">Eco-friendly solvent formulations derived from agro-waste extracts, optimized for heavy mechanical and automotive maintenance.</p>
                    <div class="inno-patent-footer"><span class="status-indicator ready">● Ready for Licensing</span><a href="<?php echo esc_url( home_url( '/innovation-patents/' ) ); ?>" class="inno-btn-license">Request Dossier &rarr;</a></div>
                </div>
                <div class="inno-patent-card">
                    <div class="inno-patent-header"><span class="inno-tag-pill tag-biotech">Biotechnology</span><span class="inno-trl-pill">TRL 7 Prototype</span></div>
                    <h3 class="inno-patent-title">Drought-Resistant Cassava Micropropagation Protocol</h3>
                    <p class="inno-patent-excerpt">High-yield disease-free tissue culture seedlings engineered for optimal resilience in West African climatic conditions.</p>
                    <div class="inno-patent-footer"><span class="status-indicator deployed">● Pilot Verified</span><a href="<?php echo esc_url( home_url( '/innovation-patents/' ) ); ?>" class="inno-btn-license">Request Dossier &rarr;</a></div>
                </div>
                <div class="inno-patent-card">
                    <div class="inno-patent-header"><span class="inno-tag-pill tag-sim">HPC & Simulation</span><span class="inno-trl-pill">TRL 9 Deployed</span></div>
                    <h3 class="inno-patent-title">National Power Grid Stability Prediction Algorithm</h3>
                    <p class="inno-patent-excerpt">Advanced parallel computing software suite designed to forecast load imbalances and prevent regional electrical grid disruptions.</p>
                    <div class="inno-patent-footer"><span class="status-indicator deployed">● Operational</span><a href="<?php echo esc_url( home_url( '/innovation-patents/' ) ); ?>" class="inno-btn-license">Request Dossier &rarr;</a></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 7. LATEST RESEARCH PUBLICATIONS -->
    <section class="nistco-section nistco-bg-parchment">
        <div class="nistco-container">
            <div class="nistco-section-header-flex">
                <div>
                    <span class="nistco-section-kicker">Scientific Repository</span>
                    <h2 class="nistco-section-title">Latest Research Publications</h2>
                    <p class="nistco-section-lead">Peer-reviewed findings, technical monographs, and open-access journals published by NISTCO researchers.</p>
                </div>
                <a href="<?php echo esc_url( home_url( '/publications/' ) ); ?>" class="nistco-header-link">Browse Full Repository &rarr;</a>
            </div>
            <div class="nistco-pubs-grid">
                <div class="nistco-pub-card">
                    <div class="nistco-pub-pills"><span class="nistco-pub-year">2026</span><span class="nistco-pub-centre">AMSARC</span></div>
                    <h3 class="nistco-pub-title"><a href="#">High-Performance Parallel Simulation of Multi-Phase Fluid Dynamics</a></h3>
                    <div class="nistco-pub-authors">Dr. A. K. Bello, Prof. M. O. Okafor</div>
                    <p class="nistco-pub-excerpt">Investigating computational fluid dynamics models using 64 GPU accelerated nodes.</p>
                    <div class="nistco-pub-footer"><button class="nistco-btn-cite">Cite Paper</button><button class="nistco-btn-preview">Download PDF</button></div>
                </div>
                <div class="nistco-pub-card">
                    <div class="nistco-pub-pills"><span class="nistco-pub-year">2026</span><span class="nistco-pub-centre">CARC (Chemistry)</span></div>
                    <h3 class="nistco-pub-title"><a href="#">Extraction and Spectroscopic Characterization of Bioactive Compounds</a></h3>
                    <div class="nistco-pub-authors">Dr. E. N. Okoro, Dr. S. Danladi</div>
                    <p class="nistco-pub-excerpt">Utilizing FTIR, HPLC, and GC-MS instrumentation to profile pharmaceutical precursors.</p>
                    <div class="nistco-pub-footer"><button class="nistco-btn-cite">Cite Paper</button><button class="nistco-btn-preview">Download PDF</button></div>
                </div>
                <div class="nistco-pub-card">
                    <div class="nistco-pub-pills"><span class="nistco-pub-year">2025</span><span class="nistco-pub-centre">BARC</span></div>
                    <h3 class="nistco-pub-title"><a href="#">Genomic Profiling and Pathogen Resistance in Micropropagated Crops</a></h3>
                    <div class="nistco-pub-authors">Dr. F. Z. Umar, Prof. C. E. Nnamdi</div>
                    <p class="nistco-pub-excerpt">Real-time PCR thermocycler analysis yielding robust resistance against viral blight.</p>
                    <div class="nistco-pub-footer"><button class="nistco-btn-cite">Cite Paper</button><button class="nistco-btn-preview">Download PDF</button></div>
                </div>
            </div>
        </div>
    </section>

    <!-- 8. MEDIA, STAKEHOLDERS & FEEDBACK -->
    <section class="nistco-section nistco-bg-white">
        <div class="nistco-container">
            <div class="nistco-section-header">
                <span class="nistco-section-kicker">Stakeholder Feedback & Media</span>
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
        </div>
    </section>

    <!-- 9. STRATEGIC PARTNERS & INSTITUTIONAL ALLIANCES -->
    <section class="nistco-section nistco-bg-parchment">
        <div class="nistco-container">
            <div class="nistco-section-header">
                <span class="nistco-section-kicker">Global & Domestic Networks</span>
                <h2 class="nistco-section-title">Strategic Partners & Institutional Alliances</h2>
                <p class="nistco-section-lead">Collaborating with premier international research councils and industrial conglomerates.</p>
            </div>
            <div class="nistco-partners-grid">
                <div class="nistco-partner-card"><div class="nistco-partner-icon">🌐</div><h3 class="nistco-partner-name">ECOWAS Science Council</h3><p class="nistco-partner-desc">Regional cooperation in biotechnology safety and agricultural genomics.</p><span class="nistco-partner-tag">Regional Partner</span></div>
                <div class="nistco-partner-card"><div class="nistco-partner-icon">🎓</div><h3 class="nistco-partner-name">National Universities Commission</h3><p class="nistco-partner-desc">Facilitating postgraduate research residencies and shared laboratory access.</p><span class="nistco-partner-tag">Academic Alliance</span></div>
                <div class="nistco-partner-card"><div class="nistco-partner-icon">🏭</div><h3 class="nistco-partner-name">Manufacturers Association of Nigeria</h3><p class="nistco-partner-desc">Commercializing NOTAP patents and scaling indigenous pilot plants.</p><span class="nistco-partner-tag">Industrial Partner</span></div>
                <div class="nistco-partner-card"><div class="nistco-partner-icon">⚛️</div><h3 class="nistco-partner-name">International Atomic Energy Agency</h3><p class="nistco-partner-desc">Technical cooperation in nuclear instrumentation and radiation safety.</p><span class="nistco-partner-tag">Global Partner</span></div>
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
