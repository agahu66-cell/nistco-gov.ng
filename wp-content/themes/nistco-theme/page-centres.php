<?php
/**
 * Template Name: Research Centres Hub (Elite HUD Z-Pattern)
 * Description: Alternating Z-pattern, Countdown Timer, and Bespoke Orbital Physics.
 */
get_header(); 

// --- DATA ARCHITECTURE ---
$centres = array(
    array(
        'id' => 'amsarc', 'theme' => 'th-cyan', 'bg' => 'var(--bg-tier-2)',
        'icon' => '💻', 'anim' => 'anim-code', 'extras' => '<span class="code-particle c1">0</span><span class="code-particle c2">1</span><span class="code-particle c3">1</span><span class="code-particle c4">0</span>',
        'title' => 'AMSARC', 'full_name' => 'Applied Mathematics and Simulation Advanced Research Centre',
        'desc' => 'Mandated under the National STI Policy to maintain Nigeria’s apex computational supercomputing infrastructure. Translating mathematical continuum mechanics and CFD into mission-critical solutions.',
        'telemetry' => array( array('Compute', '256 TFLOPS', 'GPU Accel.'), array('Network', '100 Gbps', 'InfiniBand'), array('Directorate', 'Prof. Adebayo', 'amsarc@nistco.gov.ng') ),
        'instruments' => array(
            array('NVIDIA DGX GPU Cluster', '256 TFLOPS Tensor Flow', '● ONLINE', '#00d285'),
            array('Grid Telemetry Workstation', 'Low-Latency Synchrophasor', '● CALIBRATED', '#f59e0b'),
            array('NVMe Parallel Storage', '500 TB Scratch', '● ONLINE', '#00d285')
        ),
        'projects' => array('<strong>National Grid Simulation:</strong> Predictive algorithms eliminating power grid collapses.', '<strong>Hydrodynamic CFD:</strong> Multi-phase turbulent CFD optimizing blade cavitation.'),
        'patents' => array('<strong>Pub:</strong> Numerical Solutions on GPU Architectures (2025)', '<strong>Patent:</strong> PINNs Aerodynamics Algorithm.')
    ),
    array(
        'id' => 'barc', 'theme' => 'th-green', 'bg' => 'var(--bg-tier-3)',
        'icon' => '🧬', 'anim' => 'anim-roll-diagonal-reverse', 'extras' => '',
        'title' => 'BARC', 'full_name' => 'Biotechnology Advanced Research Centre',
        'desc' => 'Pioneering industrial bio-reactors, high-yield agricultural strains, and advanced genomic sequencing for national food security.',
        'telemetry' => array( array('Irradiation', 'Gamma Plant', 'Sterilization'), array('Bio-Yield', '98.5% Purity', 'Incubating'), array('Directorate', 'Dr. Kazeem', 'barc@nistco.gov.ng') ),
        'instruments' => array(
            array('Industrial Bio-reactors', '5,000L Fermentation Units', '● ONLINE', '#00d285'),
            array('Gamma Facility (GIF)', 'Cobalt-60 Source', '● ACTIVE', '#38bdf8'),
            array('Genomic Sequencer', 'Illumina DNA Sequencing', '● CALIBRATED', '#f59e0b')
        ),
        'projects' => array('<strong>Thermotolerant Cassava:</strong> Developing bio-ethanol yeast strains for hyper-thermal vats.', '<strong>GIF Crop Mutagenesis:</strong> Drought-resistant mutations via Cobalt-60.'),
        'patents' => array('<strong>Pub:</strong> Genomics of Drought-Resistant Sorghum (2025)', '<strong>Patent:</strong> Hyper-Thermal Yeast Strain.')
    ),
    array(
        'id' => 'carc', 'theme' => 'th-gold', 'bg' => 'var(--bg-tier-2)',
        'icon' => '⚗️', 'anim' => 'anim-fire', 'extras' => '<div class="carc-flame"></div><div class="carc-smoke s1"></div><div class="carc-smoke s2"></div>',
        'title' => 'CARC', 'full_name' => 'Chemistry Advanced Research Centre',
        'desc' => 'Synthesizing petrochemical refinement catalysts, high-grade polymers, and nano-materials for heavy industrial applications.',
        'telemetry' => array( array('Spectrometry', 'Mass-Spec', 'Sub-Nano'), array('Pyrolysis', '1200°C Max', 'Heavy Residual'), array('Directorate', 'Prof. Ibrahim', 'carc@nistco.gov.ng') ),
        'instruments' => array(
            array('Gas Chromatography (GC-MS)', 'Triple Quadrupole', '● ONLINE', '#00d285'),
            array('Heavy Pyrolysis Lab', '1200°C Reactor', '● FIRING', '#f59e0b'),
            array('Nano-Chemistry Suite', 'ISO Class 5 Cleanroom', '● VERIFIED', '#00d285')
        ),
        'projects' => array('<strong>Bitumen Upgrading:</strong> Formulating zeolite structures to reduce heavy crude viscosity.', '<strong>Eco-Friendly Resins:</strong> Biodegradable plastics from cellulosic waste.'),
        'patents' => array('<strong>Pub:</strong> Catalytic Cracking Using Modified Zeolites (2024)', '<strong>Patent:</strong> Petrochemical Refinement Catalyst.')
    ),
    array(
        'id' => 'parc', 'theme' => 'th-violet', 'bg' => 'var(--bg-tier-4)',
        'icon' => '☀️', 'anim' => 'anim-spin-ccw', 'extras' => '',
        'title' => 'PARC', 'full_name' => 'Physics Advanced Research Centre',
        'desc' => 'Developing bifacial solar technologies, high-intensity laser range-finding optics, and next-generation semi-conductor materials.',
        'telemetry' => array( array('Energy Output', '500 kW', 'Prototyping Field'), array('Optics', 'Laser Class IV', 'Calibration'), array('Directorate', 'Dr. Danjuma', 'parc@nistco.gov.ng') ),
        'instruments' => array(
            array('500kW Solar Field', 'Live Grid-Tied PV Array', '● GENERATING', '#00d285'),
            array('High-Intensity Laser Lab', 'Femtosecond Pulsed', '● ACTIVE', '#38bdf8'),
            array('Materials Foundry', 'Wafer Fabrication', '● CALIBRATED', '#f59e0b')
        ),
        'projects' => array('<strong>Bifacial Perovskite Cells:</strong> Next-gen solar panels for the sub-Saharan thermal index.', '<strong>Hybrid Power:</strong> Solar-to-Battery continuous charging loops.'),
        'patents' => array('<strong>Pub:</strong> Thermal Degradation of Perovskite Structures (2025)', '<strong>Patent:</strong> Sub-Saharan Solar Grid Array.')
    ),
    array(
        'id' => 'aepc', 'theme' => 'th-teal', 'bg' => 'var(--bg-tier-2)',
        'icon' => '⚙️', 'anim' => 'anim-spin-cw ring-ccw', 'extras' => '',
        'title' => 'AEPC', 'full_name' => 'Advanced Engineering Prototyping Centre',
        'desc' => 'Driving the physical realization of theoretical concepts through 5-axis CNC machining, 3D metal printing, and military hardware assembly.',
        'telemetry' => array( array('Machining', '5-Axis CNC', 'Sub-Millimeter'), array('Defense', 'DICON Line', 'Joint Assembly'), array('Directorate', 'Engr. Balogun', 'aepc@nistco.gov.ng') ),
        'instruments' => array(
            array('5-Axis CNC Floor', 'Multi-Axis Mills', '● OPERATIONAL', '#00d285'),
            array('3D Metal Printing Bay', 'Direct Metal Laser Sintering', '● PRINTING', '#f59e0b'),
            array('DICON Defense Line', 'Secured Military Assembly', '● RESTRICTED', '#38bdf8')
        ),
        'projects' => array('<strong>Tractor Axle Forging:</strong> Rapid prototyping of agricultural machinery components.', '<strong>Drone Chassis Machining:</strong> Precision milling of aerodynamic UAV frames.'),
        'patents' => array('<strong>Pub:</strong> Stress Tolerances of DMLS Titanium (2024)', '<strong>Patent:</strong> Modular Drone Chassis Design.')
    ),
    array(
        'id' => 'ntc', 'theme' => 'th-crimson', 'bg' => 'var(--bg-tier-5)',
        'icon' => '☢️', 'anim' => 'anim-spin-ccw', 'extras' => '',
        'title' => 'NTC', 'full_name' => 'Nuclear Technology Centre',
        'desc' => 'Regulating and innovating radiation monitoring, commercial dosimetry services, and lightweight structural shielding materials.',
        'telemetry' => array( array('Monitoring', 'Active Audits', 'Nationwide'), array('Shielding', 'Polymer Testing', 'Vault Analysis'), array('Directorate', 'Dr. Suleiman', 'ntc@nistco.gov.ng') ),
        'instruments' => array(
            array('Commercial Dosimetry Lab', 'TLD/OSL Badge Calibration', '● ONLINE', '#00d285'),
            array('Monitoring Checkpoint', 'Geiger-Müller Detectors', '● ACTIVE', '#38bdf8'),
            array('Gamma Shielding Vault', 'Lead/Polymer Penetration', '● TESTING', '#f59e0b')
        ),
        'projects' => array('<strong>Hospital Radiation Audits:</strong> Processing monthly dosimetry data for oncology technicians.', '<strong>Lightweight Shielding:</strong> Nano-engineered protective fabrics.'),
        'patents' => array('<strong>Pub:</strong> Efficacy of Nano-Polymers in Gamma Attenuation (2025)', '<strong>Patent:</strong> Next-Gen Dosimetry Algorithm.')
    )
);
?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/nastco-core.css' ); ?>">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/ventures-engine.css' ); ?>">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/centres.css' ); ?>">

<style>
    /* Unique Sticky Nav Details */
    .sticky-hub-nav { position: sticky; top: 0; z-index: 100; background: rgba(3, 6, 12, 0.85); backdrop-filter: blur(20px); border-bottom: 1px solid rgba(255,255,255,0.1); padding: 1rem 0; box-shadow: 0 10px 30px rgba(0,0,0,0.8); transform: translateZ(50px); }
    .sticky-nav-grid { display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; }
    .sticky-nav-link { padding: 0.5rem 1.2rem; border-radius: 50px; border: 1px solid; font-size: 0.8rem; font-weight: 800; text-transform: uppercase; color: #fff; transition: all 0.3s; background: rgba(0,0,0,0.4); display: flex; align-items: center; gap: 0.5rem; }
    .sticky-nav-link:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(0,0,0,0.5); }
    .sn-cyan { border-color: #38bdf8; } .sn-cyan:hover { background: #38bdf8; color: #000; }
    .sn-green { border-color: #00d285; } .sn-green:hover { background: #00d285; color: #000; }
    .sn-gold { border-color: var(--fp-gold); } .sn-gold:hover { background: var(--fp-gold); color: #000; }
    .sn-violet { border-color: #a78bfa; } .sn-violet:hover { background: #a78bfa; color: #000; }
    .sn-teal { border-color: #06b6d4; } .sn-teal:hover { background: #06b6d4; color: #000; }
    .sn-crimson { border-color: #fb7185; } .sn-crimson:hover { background: #fb7185; color: #000; }
</style>

<main id="main-content">

    <!-- HUB HERO -->
    <section class="centres-hero cn-reveal">
        <div class="ventures-container">
            <div class="hero-badge-pill-3d text-3d-pop"><span>🔬</span> 2,000 Hectare Core</div>
            <h1 class="ventures-title text-3d-deep">Sovereign Research Ledger</h1>
            <p class="section-desc text-3d-subtle">Comprehensive operational telemetry, core facility blueprints, instrumentation registries, and active scientific projects across all six NASTCO Directorates.</p>
        </div>
    </section>

    <!-- ROYALTY COUNTDOWN -->
    <section class="countdown-section cn-reveal">
        <div class="ventures-container">
            <h4 class="text-3d-pop" style="color:#fff; text-align:center; text-transform:uppercase; letter-spacing:2px; font-size:0.85rem; margin:0;">Statutory Distribution Framework Allocation Conduits In:</h4>
            <div class="countdown-container">
                <div class="countdown-box"><span class="cd-num" id="cd-days">00</span><span class="cd-label">Days</span></div>
                <div class="countdown-box"><span class="cd-num" id="cd-hours">00</span><span class="cd-label">Hours</span></div>
                <div class="countdown-box"><span class="cd-num" id="cd-mins">00</span><span class="cd-label">Mins</span></div>
                <div class="countdown-box"><span class="cd-num" id="cd-secs">00</span><span class="cd-label">Secs</span></div>
            </div>
        </div>
    </section>

    <!-- STICKY NAVIGATION -->
    <div class="sticky-hub-nav">
        <div class="ventures-container sticky-nav-grid">
            <?php foreach($centres as $c): ?>
                <a href="#<?php echo $c['id']; ?>" class="sticky-nav-link sn-<?php echo str_replace('th-', '', $c['theme']); ?>">
                    <span><?php echo $c['icon']; ?></span> <?php echo $c['title']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </div>

    <!-- DYNAMIC CENTRES LOOP (Alternating Z-Pattern) -->
    <?php foreach($centres as $index => $c): 
        $layoutClass = ($index % 2 == 0) ? 'layout-standard' : 'layout-reverse';
    ?>
    <section id="<?php echo $c['id']; ?>" class="centre-ledger-section <?php echo $c['theme']; ?>" style="background: <?php echo $c['bg']; ?>;">
        <div class="ventures-container">
            <div class="centre-card-wrap cn-reveal">
                
                <div class="centre-ultra-card <?php echo $layoutClass; ?>">
                    
                    <!-- HUD LEFT: Visuals & Core Identity -->
                    <div class="hud-left">
                        <div class="cyber-grid-floor"></div>
                        <div class="neon-orb <?php echo $c['anim']; ?>">
                            <span class="centre-icon"><?php echo $c['icon']; ?></span>
                            <?php echo $c['extras']; ?>
                        </div>
                        <h2 class="text-3d-deep" style="font-size:3rem; margin:0;"><?php echo $c['title']; ?></h2>
                        <span class="centre-full-name text-3d-pop"><?php echo $c['full_name']; ?></span>
                        <p style="color:#94a3b8; line-height:1.6; font-size:0.95rem; margin-top:1rem; transform:translateZ(20px);"><?php echo $c['desc']; ?></p>
                        <a href="/contact/" class="btn-secondary-3d" style="font-size:0.7rem; padding:0.6rem 1.2rem; margin-top:2rem;">Request Access</a>
                    </div>

                    <!-- HUD RIGHT: Telemetry & Terminal Data -->
                    <div class="hud-right">
                        
                        <div class="telemetry-ribbon">
                            <?php foreach($c['telemetry'] as $tel): ?>
                                <div class="telemetry-card">
                                    <span class="telemetry-label"><?php echo $tel[0]; ?></span>
                                    <span class="telemetry-value"><?php echo $tel[1]; ?></span>
                                    <span style="font-size:0.7rem; color:#64748b; margin-top:0.25rem; display:block;"><?php echo $tel[2]; ?></span>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="data-box">
                            <h4>🔬 Terminal: Instrumentation Registry</h4>
                            <div style="overflow-x:auto;">
                                <table class="instrumentation-table">
                                    <tr><th>Asset / Architecture</th><th>Specification</th><th>Status</th></tr>
                                    <?php foreach($c['instruments'] as $inst): ?>
                                        <tr>
                                            <td><strong style="color:#fff;"><?php echo $inst[0]; ?></strong></td>
                                            <td><?php echo $inst[1]; ?></td>
                                            <td style="color:<?php echo $inst[3]; ?>; font-weight:800;"><?php echo $inst[2]; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        </div>

                        <div class="mega-data-grid">
                            <div class="data-box">
                                <h4>🚀 Active Projects</h4>
                                <ul style="color:#cbd5e1; padding-left:1.2rem; line-height:1.6; font-size:0.85rem; margin:0;">
                                    <?php foreach($c['projects'] as $proj): ?>
                                        <li style="margin-bottom:0.5rem;"><?php echo $proj; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                            <div class="data-box">
                                <h4>📄 Output & Patents</h4>
                                <ul style="color:#cbd5e1; padding-left:1.2rem; line-height:1.6; font-size:0.85rem; margin:0;">
                                    <?php foreach($c['patents'] as $pat): ?>
                                        <li style="margin-bottom:0.5rem;"><?php echo $pat; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </section>
    <?php endforeach; ?>

    <!-- NJARSTI PUBLICATIONS (3D Flip Carousel) -->
    <section class="publications-section cn-reveal" style="padding: 6rem 0; background: var(--bg-tier-3); border-bottom: 2px solid rgba(255,255,255,0.05); overflow: hidden; transform-style: preserve-3d;">
        <div class="ventures-container">
            <h2 class="ventures-title text-3d-deep" style="text-align:center;">The NJARSTI Journal</h2>
            <p class="section-desc text-3d-subtle">Read and submit original research to the official Nigerian Journal of Advanced Research in Science, Technology, and Innovation.</p>
            
            <div class="pub-carousel-container" style="perspective: 1200px; width: 100%; max-width: 900px; height: 350px; margin: 3rem auto 2rem auto; position: relative; display: flex; align-items: center; justify-content: center; transform-style: preserve-3d;">
                <div class="pub-carousel-track" id="pubCarouselTrack" style="width: 340px; height: 100%; transform-style: preserve-3d; transition: transform 0.8s cubic-bezier(0.25, 1, 0.5, 1); position: relative;">
                    <div class="pub-3d-card pub-cyan" style="position:absolute; top:50%; left:50%; width:340px; margin-left:-170px; margin-top:-85px; background:linear-gradient(150deg, #0e1b2e, #050a12); border:1px solid rgba(255,255,255,0.1); border-top:4px solid #38bdf8; padding:1.5rem; border-radius:14px; text-align:center; transform-style:preserve-3d; box-shadow:0 15px 35px rgba(0,0,0,0.8);"><div style="font-size:2.5rem; margin-bottom:1rem; transform:translateZ(30px);">📘</div><span style="color:#38bdf8; font-size:0.75rem; font-weight:800; text-transform:uppercase; transform:translateZ(30px); display:block;">NJARSTI • Thematic Area</span><h4 style="color:#fff; margin:0.5rem 0; transform:translateZ(30px);">Applied Maths & Physics</h4><p style="color:#94a3b8; font-size:0.8rem; margin:0; transform:translateZ(30px);">Computational, Theoretical, and Atmospheric Physics.</p></div>
                    <div class="pub-3d-card pub-green" style="position:absolute; top:50%; left:50%; width:340px; margin-left:-170px; margin-top:-85px; background:linear-gradient(150deg, #0e1b2e, #050a12); border:1px solid rgba(255,255,255,0.1); border-top:4px solid #00d285; padding:1.5rem; border-radius:14px; text-align:center; transform-style:preserve-3d; box-shadow:0 15px 35px rgba(0,0,0,0.8);"><div style="font-size:2.5rem; margin-bottom:1rem; transform:translateZ(30px);">📗</div><span style="color:#00d285; font-size:0.75rem; font-weight:800; text-transform:uppercase; transform:translateZ(30px); display:block;">NJARSTI • Thematic Area</span><h4 style="color:#fff; margin:0.5rem 0; transform:translateZ(30px);">Bio & Agrosciences</h4><p style="color:#94a3b8; font-size:0.8rem; margin:0; transform:translateZ(30px);">Bioinformatics, Molecular & Microbiology.</p></div>
                    <div class="pub-3d-card pub-gold" style="position:absolute; top:50%; left:50%; width:340px; margin-left:-170px; margin-top:-85px; background:linear-gradient(150deg, #0e1b2e, #050a12); border:1px solid rgba(255,255,255,0.1); border-top:4px solid var(--fp-gold); padding:1.5rem; border-radius:14px; text-align:center; transform-style:preserve-3d; box-shadow:0 15px 35px rgba(0,0,0,0.8);"><div style="font-size:2.5rem; margin-bottom:1rem; transform:translateZ(30px);">📙</div><span style="color:var(--fp-gold); font-size:0.75rem; font-weight:800; text-transform:uppercase; transform:translateZ(30px); display:block;">NJARSTI • Thematic Area</span><h4 style="color:#fff; margin:0.5rem 0; transform:translateZ(30px);">Advanced Chemistry</h4><p style="color:#94a3b8; font-size:0.8rem; margin:0; transform:translateZ(30px);">Polymer, Pharmaceutical, and Nano Chemistry.</p></div>
                    <div class="pub-3d-card pub-crimson" style="position:absolute; top:50%; left:50%; width:340px; margin-left:-170px; margin-top:-85px; background:linear-gradient(150deg, #0e1b2e, #050a12); border:1px solid rgba(255,255,255,0.1); border-top:4px solid #fb7185; padding:1.5rem; border-radius:14px; text-align:center; transform-style:preserve-3d; box-shadow:0 15px 35px rgba(0,0,0,0.8);"><div style="font-size:2.5rem; margin-bottom:1rem; transform:translateZ(30px);">📕</div><span style="color:#fb7185; font-size:0.75rem; font-weight:800; text-transform:uppercase; transform:translateZ(30px); display:block;">NJARSTI • Thematic Area</span><h4 style="color:#fff; margin:0.5rem 0; transform:translateZ(30px);">Engineering & Software</h4><p style="color:#94a3b8; font-size:0.8rem; margin:0; transform:translateZ(30px);">Telecommunications, Mechanical & Civil Engineering.</p></div>
                </div>
            </div>
            
            <div class="pub-nav-controls" style="display:flex; justify-content:center; gap:1.5rem; transform:translateZ(40px); transform-style:preserve-3d;">
                <button class="rating-arrow-btn" id="pubPrevBtn" style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.2); color:#fff; width:45px; height:45px; border-radius:50%; cursor:pointer;">◀</button>
                <button class="rating-arrow-btn" id="pubNextBtn" style="background:rgba(255,255,255,0.05); border:1px solid rgba(255,255,255,0.2); color:#fff; width:45px; height:45px; border-radius:50%; cursor:pointer;">▶</button>
            </div>
            
            <div class="section-cta-wrap text-3d-pop" style="margin-top:2.5rem;">
                <a href="mailto:njarsti@shestco.gov.ng" class="btn-gold-3d">Submit Article to NJARSTI</a>
                <span class="btn-desc" style="display:block; margin-top:0.75rem;">Article Processing Charge: ₦30,000 / $15</span>
            </div>
        </div>
    </section>

    <!-- FAQS SECTION -->
    <section class="faq-section cn-reveal">
        <div class="ventures-container">
            <h2 class="ventures-title text-3d-deep" style="text-align:center;">Frequently Asked Questions</h2>
            <div class="faq-container">
                <div class="faq-item faq-cyan text-3d-subtle"><div class="faq-question">What is the National Science & Technology Complex? <span class="faq-icon">+</span></div><div class="faq-answer">Formerly known as SHESTCO, NASTCO is Nigeria's premier sovereign institution dedicated to industrializing theoretical research and commercializing national intellectual property.</div></div>
                <div class="faq-item faq-gold text-3d-subtle"><div class="faq-question">How does the 40/35/25 Royalty Framework operate? <span class="faq-icon">+</span></div><div class="faq-answer">It is a statutory allocation conduit where 40% of patent revenue goes to the inventors, 35% funds the originating Research Centre, and 25% sustains central administrative upkeep.</div></div>
            </div>
        </div>
    </section>

</main>

<script src="<?php echo esc_url( get_template_directory_uri() . '/assets/js/nastco-core.js' ); ?>"></script>
<script src="<?php echo esc_url( get_template_directory_uri() . '/assets/js/centres.js' ); ?>"></script>

<?php get_footer(); ?>
