<?php
/**
 * Template Name: NISTCO Master Single Research Centre Template
 * Fully decoupled presentation template.
 * Styles loaded via assets/css/single-centre.css; scripts via assets/js/single-centre.js.
 */

get_header();

$profiles = [
    'amsarc' => [
        'acronym'     => 'AMSARC',
        'title'       => 'Applied Mathematics and Simulation Advanced Research Centre',
        'telemetry'   => [
            'HPC Cluster'          => '256 TFLOPS GPU Nodes',
            'Grid Model Precision' => '99.4% Forecast SLA',
            'Parallel Cores'       => '1,024 CUDA Cores',
            'Primary Focus'        => 'Computational Mechanics'
        ],
        'director'    => 'Prof. K. A. Adebayo',
        'rank'        => 'Director & Chief Scientist in Numerical Simulation',
        'email'       => 'amsarc@nistco.gov.ng',
        'bio'         => 'Leading computational physics algorithms, national power grid load forecasting, and fluid dynamics simulations on high-performance supercomputing clusters.',
        'facilities'  => [
            [ 'title' => 'High-Performance Supercomputing Suite', 'desc' => 'High-throughput cluster nodes optimized for Navier-Stokes simulations and large-scale mathematical parallel pipelines.' ],
            [ 'title' => 'Computational Fluid Dynamics (CFD) Lab', 'desc' => 'Aerodynamic modeling, national grid telemetry analysis, and complex hydrological systems simulation.' ],
            [ 'title' => 'Scientific Data Visualization Room', 'desc' => 'Ultra-high-resolution rendering engines for multi-variable simulation datasets.' ]
        ],
        'equipment'   => [
            [ 'name' => 'NVIDIA DGX GPU Simulation Cluster', 'spec' => '256 TFLOPS Parallel Node', 'status' => 'Operational' ],
            [ 'name' => 'Precision Power Telemetry Workstation', 'spec' => 'Real-time Grid Analysis Suite', 'status' => 'Operational' ],
            [ 'name' => 'High-Throughput SAN Storage Array', 'spec' => '500 TB High-Bandwidth NVMe', 'status' => 'Verified' ]
        ]
    ],
    'carc' => [
        'acronym'     => 'CARC',
        'title'       => 'Chemistry Advanced Research Centre',
        'telemetry'   => [
            'Pilot Synthesis Plant' => '500 Liters Batch Online',
            'Spectroscopy Suite'    => '400 MHz High-Field NMR',
            'GC-MS Resolution'      => '0.01 PPM Trace Detection',
            'Primary Focus'         => 'Fine Chemicals & Polymers'
        ],
        'director'    => 'Dr. (Mrs.) E. O. Nwachukwu',
        'rank'        => 'Director of Chemical Sciences & Industrial Synthesis',
        'email'       => 'carc@nistco.gov.ng',
        'bio'         => 'Overseeing fine chemicals synthesis, natural products active constituent isolation, polymer formulations, and pilot production scaling.',
        'facilities'  => [
            [ 'title' => '500L Demonstration Synthesis Pilot Plant', 'desc' => 'Continuous and batch industrial reactors designed for commercial-scale fine chemical formulations.' ],
            [ 'title' => 'Spectroscopy & Structural Identification Suite', 'desc' => 'Equipped with 400 MHz Nuclear Magnetic Resonance (NMR) and FTIR spectrometers for molecular analysis.' ],
            [ 'title' => 'Chromatography & Analytical Mass Spectrometry Lab', 'desc' => 'GC-MS, HPLC, and flame ionization detection units for regulatory compliance and purity testing.' ]
        ],
        'equipment'   => [
            [ 'name' => '500L Jacketed Glass-Lined Synthesis Reactor', 'spec' => 'Industrial Batch Processing', 'status' => 'Operational' ],
            [ 'name' => 'Bruker 400 MHz NMR Spectrometer', 'spec' => 'Multi-Nuclear 1H / 13C Characterization', 'status' => 'Operational' ],
            [ 'name' => 'Agilent GC-MS Quadrupole System', 'spec' => 'Trace Volatile Organic Profiling', 'status' => 'Calibrated' ]
        ]
    ],
    'barc' => [
        'acronym'     => 'BARC',
        'title'       => 'Biotechnology Advanced Research Centre',
        'telemetry'   => [
            'Micropropagation Lab' => '50,000 Plantlets / Month',
            'Bioreactor Fermenter' => '250 Liters Capacity',
            'PCR Diagnostics'      => 'Real-Time Quantitative',
            'Primary Focus'        => 'Agro-Genomics & Biosafety'
        ],
        'director'    => 'Dr. A. U. Sadiq',
        'rank'        => 'Director of Agricultural Genomics & Bioprocessing',
        'email'       => 'barc@nistco.gov.ng',
        'bio'         => 'Directing plant tissue culture micropropagation, crop disease resistance protocols, and bioprocess fermentation for agro-industrial development.',
        'facilities'  => [
            [ 'title' => 'Plant Tissue Culture & Micropropagation Lab', 'desc' => 'Sterile multiplication rooms providing disease-free seedling stock for staple crops.' ],
            [ 'title' => 'Molecular Biology & Genetic Diagnostics Suite', 'desc' => 'Real-Time PCR and gel electrophoresis systems for pathogen identification.' ],
            [ 'title' => 'Industrial Bioprocess & Fermentation Suite', 'desc' => 'Pilot fermenters for enzyme production and bio-fertilizer development.' ]
        ],
        'equipment'   => [
            [ 'name' => 'Automated Plant Micropropagation Flow Cabinet', 'spec' => 'Class II Cleanroom Array', 'status' => 'Operational' ],
            [ 'name' => 'Bio-Rad Real-Time qPCR System', 'spec' => '96-Well Diagnostic Multiplex', 'status' => 'Operational' ],
            [ 'name' => 'New Brunswick 250L Pilot Bioreactor', 'spec' => 'Microbial Fermentation Core', 'status' => 'Calibrated' ]
        ]
    ],
    'parc' => [
        'acronym'     => 'PARC',
        'title'       => 'Physics Advanced Research Centre',
        'telemetry'   => [
            'Solar Cell Tester'    => 'Class AAA Solar Simulator',
            'Thin-Film Chamber'    => '10^-6 Torr High Vacuum',
            'Spectroscopy Range'   => 'UV to Far-Infrared',
            'Primary Focus'        => 'Semiconductors & Photonics'
        ],
        'director'    => 'Engr. Dr. F. M. Okoro',
        'rank'        => 'Director of Solid-State Physics & Materials',
        'email'       => 'parc@nistco.gov.ng',
        'bio'         => 'Pioneering thin-film photovoltaics, semiconductor device fabrication, and renewable energy storage materials.',
        'facilities'  => [
            [ 'title' => 'Solid-State & Semiconductor Testing Lab', 'desc' => 'Advanced material characterization and Hall effect measurement systems.' ],
            [ 'title' => 'Thin-Film Deposition & Vacuum Suite', 'desc' => 'Thermal evaporation and magnetron sputtering systems for nanotech coatings.' ],
            [ 'title' => 'Optical Metrology & Photonics Suite', 'desc' => 'Spectrophotometric characterization across UV, visible, and near-IR spectrums.' ]
        ],
        'equipment'   => [
            [ 'name' => 'High-Vacuum Magnetron Sputter Coater', 'spec' => 'Multi-Target Thin-Film System', 'status' => 'Operational' ],
            [ 'name' => 'Oriel Class AAA Solar Simulator', 'spec' => 'PV Efficiency Characterization', 'status' => 'Operational' ],
            [ 'name' => 'Variable Temperature Hall Effect System', 'spec' => 'Carrier Concentration Analyzer', 'status' => 'Calibrated' ]
        ]
    ],
    'ntc' => [
        'acronym'     => 'NTC',
        'title'       => 'Nuclear Technology Centre',
        'telemetry'   => [
            'Dosimetry Standards' => 'Secondary National Lab (SSDL)',
            'Gamma Spectroscopy'  => 'HPGe Cryogenic Detector',
            'Radiation Protection' => 'IAEA Code 115 Compliance',
            'Primary Focus'        => 'Isotope Metrology & Safety'
        ],
        'director'    => 'Dr. H. B. Mohammed',
        'rank'        => 'Director of Radiation Metrology & Nuclear Standards',
        'email'       => 'ntc@nistco.gov.ng',
        'bio'         => 'Managing national radiation calibration standards, isotopic tracing, and radiological safety for healthcare and industrial sectors.',
        'facilities'  => [
            [ 'title' => 'Secondary Standards Dosimetry Laboratory (SSDL)', 'desc' => 'National calibration bench for industrial radiation meters and hospital radiotherapy instruments.' ],
            [ 'title' => 'Gamma Spectrometry & Environmental Radioactivity Lab', 'desc' => 'High-Purity Germanium detectors for baseline soil, water, and air radiological assessment.' ],
            [ 'title' => 'Nuclear Instrumentation & Electronic Calibration Suite', 'desc' => 'Precision testing facility for ionizing radiation measurement probes.' ]
        ],
        'equipment'   => [
            [ 'name' => 'ORTEC High-Purity Germanium (HPGe) Detector', 'spec' => 'Cryo-Cooled Isotope Spectrometer', 'status' => 'Operational' ],
            [ 'name' => 'Harshaw TLD Dosimetry Reader 3500', 'spec' => 'Personal Radiation Monitoring', 'status' => 'Operational' ],
            [ 'name' => 'Gamma Calibration Panoramic Irradiator', 'spec' => 'SSDL Secondary Standard Beam', 'status' => 'Calibrated' ]
        ]
    ],
    'aepc' => [
        'acronym'     => 'AEPC',
        'title'       => 'Advanced Engineering & Prototype Centre',
        'telemetry'   => [
            'Precision Machining' => '5-Axis Simultaneous CNC',
            'Tolerance Spec'      => '±0.005 mm Precision',
            'Additive Metallurgy' => 'Direct Metal Laser Sintering',
            'Primary Focus'       => 'Molds, Tooling & Machinery'
        ],
        'director'    => 'Engr. T. O. Adeleke',
        'rank'        => 'Director of Precision Engineering & Prototyping',
        'email'       => 'aepc@nistco.gov.ng',
        'bio'         => 'Leading rapid industrial prototyping, reverse engineering of complex imported parts, and precision mold tooling for domestic factories.',
        'facilities'  => [
            [ 'title' => '5-Axis High-Precision CNC Machining Workshop', 'desc' => 'Computer-controlled vertical and horizontal milling machines for complex aeronautical and automotive parts.' ],
            [ 'title' => 'Additive Metallurgy & Rapid Prototyping Lab', 'desc' => 'Direct metal deposition and polymer 3D print suites for pre-production prototyping.' ],
            [ 'title' => 'Industrial Mold Tooling & Assembly Bay', 'desc' => 'Tool and die fabrication suites for domestic plastic and metal manufacturing companies.' ]
        ],
        'equipment'   => [
            [ 'name' => 'DMG MORI 5-Axis Simultaneous CNC Machining Centre', 'spec' => 'High-Speed Milling Sub-Micron', 'status' => 'Operational' ],
            [ 'name' => 'Mitutoyo CNC Coordinate Measuring Machine (CMM)', 'spec' => '3D Dimensional Inspection', 'status' => 'Operational' ],
            [ 'name' => 'Heavy Industrial Spark Erosion Wire EDM', 'spec' => 'Hardened Tool Steel Cutting', 'status' => 'Calibrated' ]
        ]
    ]
];

$slug = get_post_field( 'post_name', get_the_ID() );
$data = isset( $profiles[$slug] ) ? $profiles[$slug] : $profiles['carc'];
$theme_class = 'division-theme-' . sanitize_html_class( $slug );
?>

<main class="centre-portal-main <?php echo esc_attr( $theme_class ); ?>">

    <!-- 1. DIVISION HERO -->
    <header class="centre-hero">
        <div class="centre-container">
            <nav class="centre-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a> &nbsp;/&nbsp;
                <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>">Centres</a> &nbsp;/&nbsp;
                <span><?php echo esc_html( $data['acronym'] ); ?></span>
            </nav>

            <div class="centre-hero-grid">
                <div>
                    <span class="centre-code-badge"><?php echo esc_html( $data['acronym'] ); ?> • DIVISION PORTAL</span>
                    <h1 class="centre-hero-title"><?php echo esc_html( $data['title'] ); ?></h1>
                    <p class="centre-hero-lead">
                        Dedicated national scientific division executing frontier multidisciplinary investigations,
                        operating commercial pilot demonstration facilities, and certifying industrial standards for Nigeria.
                    </p>
                    <div class="centre-hero-cta">
                        <a href="#facilities" class="btn-nistco btn-prime">Explore Laboratories &rarr;</a>
                        <a href="#equipment" class="btn-nistco btn-ghost">Equipment Matrix</a>
                    </div>
                </div>

                <!-- Division Telemetry Slate -->
                <div class="centre-telemetry-box">
                    <h3 class="telemetry-box-title">Division Key Capabilities</h3>
                    <?php foreach ( $data['telemetry'] as $label => $stat ) : ?>
                    <div class="telemetry-row">
                        <span class="telemetry-kicker"><?php echo esc_html( $label ); ?></span>
                        <span class="telemetry-stat"><?php echo esc_html( $stat ); ?></span>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. STICKY ANCHOR NAVIGATION -->
    <nav class="centre-nav-ribbon" aria-label="Division Sections Navigation">
        <div class="centre-container">
            <div class="centre-nav-tabs">
                <a href="#facilities" class="centre-tab-link active">Laboratories & Facilities</a>
                <a href="#equipment" class="centre-tab-link">Equipment & Instruments</a>
                <a href="#leadership" class="centre-tab-link">Leadership & Research Fellows</a>
                <a href="#patents" class="centre-tab-link">Patents & Licensing</a>
            </div>
        </div>
    </nav>

    <!-- 3. SPECIALIZED LABORATORIES & PILOT PLANTS -->
    <section id="facilities" class="portal-section">
        <div class="centre-container">
            <span class="section-kicker">Division Infrastructure</span>
            <h2 class="section-heading">Specialized Facilities & Pilot Plants</h2>
            <p class="section-desc">
                High-containment laboratories, cleanrooms, and commercial demonstration plants engineered to translate laboratory research into scalable industrial solutions.
            </p>

            <div class="facilities-grid">
                <?php foreach ( $data['facilities'] as $fac ) : ?>
                <div class="facility-card">
                    <div>
                        <h3><?php echo esc_html( $fac['title'] ); ?></h3>
                        <p><?php echo esc_html( $fac['desc'] ); ?></p>
                    </div>
                    <span class="facility-status-tag">● Certified Facility</span>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 4. HEAVY EQUIPMENT & ANALYTICAL MATRIX -->
    <section id="equipment" class="portal-section portal-section-alt">
        <div class="centre-container">
            <span class="section-kicker">Analytical Inventory</span>
            <h2 class="section-heading">Scientific Equipment & Instrumentation</h2>
            <p class="section-desc">
                Certified high-precision instrumentation available for interdisciplinary research, postgraduate residency, and third-party industrial quality assurance testing.
            </p>

            <div class="equipment-table-wrap">
                <table class="equipment-table">
                    <thead>
                        <tr>
                            <th>Instrumentation / Machine</th>
                            <th>Technical Specification</th>
                            <th>Operational Status</th>
                            <th>Access Protocol</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ( $data['equipment'] as $item ) : ?>
                        <tr>
                            <td class="equipment-name-cell"><?php echo esc_html( $item['name'] ); ?></td>
                            <td><?php echo esc_html( $item['spec'] ); ?></td>
                            <td><span class="status-badge-verified"><?php echo esc_html( $item['status'] ); ?></span></td>
                            <td>Open / Residency Clearance</td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- 5. DIVISION LEADERSHIP & RESEARCH FELLOWS -->
    <section id="leadership" class="portal-section">
        <div class="centre-container">
            <span class="section-kicker">Governance</span>
            <h2 class="section-heading">Division Leadership</h2>
            <p class="section-desc">
                Experienced researchers, lead principal investigators, and laboratory managers directing strategic projects across the division.
            </p>

            <div class="leadership-grid">
                <div class="leader-portrait-wrap">
                    <span>🔬</span>
                    <div class="leader-badge"><?php echo esc_html( $data['acronym'] ); ?> Directorate</div>
                </div>
                <div>
                    <h3 class="leader-name"><?php echo esc_html( $data['director'] ); ?></h3>
                    <span class="leader-rank"><?php echo esc_html( $data['rank'] ); ?></span>
                    <p class="leader-bio"><?php echo esc_html( $data['bio'] ); ?></p>
                    <div class="leader-contact-row">
                        <div class="leader-contact-item">
                            <strong>Institutional Desk:</strong> <a href="mailto:<?php echo esc_attr( $data['email'] ); ?>"><?php echo esc_html( $data['email'] ); ?></a>
                        </div>
                        <div class="leader-contact-item">
                            <strong>Location:</strong> Sheda Sanctuary, Abuja-Lokoja Corridor
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 6. ASSOCIATED NOTAP PATENTS & TRANSFER -->
    <section id="patents" class="portal-section portal-section-alt">
        <div class="centre-container">
            <span class="section-kicker">Technology Commercialization</span>
            <h2 class="section-heading">Market-Ready Inventions & NOTAP Patents</h2>
            <p class="section-desc">
                Certified indigenous technologies developed by this division ready for private sector licensing, scale-up, and manufacturing partnership.
            </p>

            <div class="patent-dossier-card">
                <h3 class="patent-dossier-title">Request Institutional IP Dossier</h3>
                <p class="patent-dossier-lead">
                    Access commercial feasibility studies, patent registration certificates, and pilot plant licensing dossiers for <?php echo esc_html( $data['acronym'] ); ?> technologies.
                </p>
                <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" class="btn-nistco btn-prime">
                    Access Tech Transfer Desk &rarr;
                </a>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
