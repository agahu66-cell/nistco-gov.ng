<?php
/**
 * Template Name: NISTCO Rebranded Centres Directory Hub
 */

get_header();

$centres_directory = [
    [
        'slug'        => 'amsarc',
        'acronym'     => 'AMSARC',
        'title'       => 'Applied Mathematics & Simulation Centre',
        'domain'      => 'computational',
        'domain_name' => 'Supercomputing & Simulation',
        'accent'      => '#0ea5e9',
        'bg_tint'     => 'rgba(14, 165, 233, 0.12)',
        'lead'        => 'National supercomputing sanctuary operating 256 TFLOPS GPU clusters for fluid dynamics, mathematical modeling, and power grid stability analysis.',
        'specs'       => [
            'HPC Cluster Node'     => '256 TFLOPS GPU Acceleration',
            'Numerical Simulation' => 'Navier-Stokes & CFD Rig',
            'Grid Forecast SLA'    => '99.4% Synchronized Precision'
        ],
        'director'    => 'Prof. K. A. Adebayo',
        'rank'        => 'Chief Scientist in Numerical Simulation'
    ],
    [
        'slug'        => 'barc',
        'acronym'     => 'BARC',
        'title'       => 'Biotechnology Advanced Research Centre',
        'domain'      => 'bio-agro',
        'domain_name' => 'Agro-Genomics & Bioprocess',
        'accent'      => '#10b981',
        'bg_tint'     => 'rgba(16, 185, 129, 0.12)',
        'lead'        => 'Translating genomic protocols and micropropagation tissue culture into high-yield, disease-resistant crops and pilot microbial bioreactor fermentation.',
        'specs'       => [
            'Micropropagation Bay' => '50,000 Plantlets / Month',
            'Bioreactor Fermenter' => '250 Liters Microbial Core',
            'Diagnostic Protocol'  => 'Real-Time Quantitative PCR'
        ],
        'director'    => 'Dr. A. U. Sadiq',
        'rank'        => 'Director of Agricultural Genomics'
    ],
    [
        'slug'        => 'carc',
        'acronym'     => 'CARC',
        'title'       => 'Chemistry Advanced Research Centre',
        'domain'      => 'chemical',
        'domain_name' => 'Industrial Chemicals & Synthesis',
        'accent'      => '#f59e0b',
        'bg_tint'     => 'rgba(245, 158, 11, 0.12)',
        'lead'        => 'Operating Nigeria’s 500-liter jacketed chemical demonstration plant alongside 400 MHz NMR and GC-MS suites for industrial fine chemicals and polymers.',
        'specs'       => [
            'Demonstration Plant'  => '500L Batch Chemical Synthesis',
            'Molecular Analysis'   => 'Bruker 400 MHz High-Field NMR',
            'Trace Organic Assay'  => 'Agilent GC-MS Quadrupole'
        ],
        'director'    => 'Dr. (Mrs.) E. O. Nwachukwu',
        'rank'        => 'Director of Chemical Sciences'
    ],
    [
        'slug'        => 'parc',
        'acronym'     => 'PARC',
        'title'       => 'Physics Advanced Research Centre',
        'domain'      => 'materials',
        'domain_name' => 'Semiconductors & Photonics',
        'accent'      => '#8b5cf6',
        'bg_tint'     => 'rgba(139, 92, 246, 0.12)',
        'lead'        => 'Pioneering solid-state physics, high-vacuum magnetron thin-film solar cell deposition, semiconductor diagnostic testing, and optical spectroscopy.',
        'specs'       => [
            'PV Validation Bench'  => 'Class AAA Solar Simulator',
            'Thin-Film Chamber'    => '10^-6 Torr High Vacuum',
            'Electronic Metrology' => 'Variable Temp Hall Effect'
        ],
        'director'    => 'Engr. Dr. F. M. Okoro',
        'rank'        => 'Director of Solid-State Physics'
    ],
    [
        'slug'        => 'ntc',
        'acronym'     => 'NTC',
        'title'       => 'Nuclear Technology Centre',
        'domain'      => 'nuclear',
        'domain_name' => 'Radiation Metrology & Safety',
        'accent'      => '#e11d48',
        'bg_tint'     => 'rgba(225, 29, 72, 0.12)',
        'lead'        => 'Federally designated Secondary Standards Dosimetry Laboratory (SSDL) maintaining national radiation calibration beams and HPGe gamma spectroscopy.',
        'specs'       => [
            'Dosimetry Metrology'  => 'Secondary Standard SSDL Beam',
            'Gamma Spectroscopy'   => 'ORTEC Cryogenic HPGe Suite',
            'Regulatory Standard'  => 'IAEA Code 115 Compliance'
        ],
        'director'    => 'Dr. H. B. Mohammed',
        'rank'        => 'Director of Radiation Metrology'
    ],
    [
        'slug'        => 'aepc',
        'acronym'     => 'AEPC',
        'title'       => 'Advanced Engineering & Prototype Centre',
        'domain'      => 'prototyping',
        'domain_name' => 'Precision CNC & Metallurgy',
        'accent'      => '#06b6d4',
        'bg_tint'     => 'rgba(6, 182, 212, 0.12)',
        'lead'        => 'High-tolerance mechanical reverse engineering, 5-axis CNC machining, additive metallurgy laser sintering, and industrial mold/die tooling.',
        'specs'       => [
            'Precision Milling'    => '5-Axis Simultaneous CNC',
            'Machining Tolerance'  => '±0.005 mm Sub-Micron Rig',
            'Additive Metallurgy'  => 'Direct Metal Laser Sintering'
        ],
        'director'    => 'Engr. T. O. Adeleke',
        'rank'        => 'Director of Precision Engineering'
    ]
];
?>

<main class="centres-hub-main">
    <header class="hub-hero-section">
        <div class="hub-container">
            <div class="hub-hero-grid">
                <div>
                    <span class="hub-badge-pill">
                        <span>●</span>
                        <span>Apex Scientific Infrastructure</span>
                    </span>

                    <h1 class="hub-hero-title">
                        National Research Centres & <br><span>Specialized Divisions</span>
                    </h1>

                    <p class="hub-hero-desc">
                        Six federally mandated institutes of scientific excellence operating within the 2,000-hectare Sheda Technology Sanctuary.
                        From 256 TFLOPS supercomputing to 500-liter pilot chemical synthesis plants, our infrastructure bridges laboratory research and commercial industrialization.
                    </p>

                    <div class="hub-hero-actions">
                        <a href="#directory" class="btn-nistco btn-prime">Explore 6 Apex Divisions &darr;</a>
                        <a href="#protocols" class="btn-nistco btn-ghost">Residency & Pilot Scheduling</a>
                    </div>
                </div>

                <div class="hero-3d-stage">
                    <div class="insignia-3d-container">
                        <svg class="insignia-svg-element" viewBox="0 0 300 300" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <ellipse class="ring-rotator-z" cx="150" cy="150" rx="135" ry="50" stroke="#00ffa3" stroke-width="2" stroke-dasharray="8 6" opacity="0.6"/>
                            <ellipse class="ring-rotator-x" cx="150" cy="150" rx="120" ry="60" transform="rotate(60 150 150)" stroke="#38bdf8" stroke-width="2.5" opacity="0.8"/>
                            <ellipse class="ring-rotator-y" cx="150" cy="150" rx="120" ry="60" transform="rotate(-60 150 150)" stroke="#10b981" stroke-width="2.5" opacity="0.8"/>
                            <circle class="core-pulse-node" cx="150" cy="150" r="32" fill="url(#coreGradient)" stroke="#00ffa3" stroke-width="3"/>
                            <circle cx="150" cy="20" r="7" fill="#0ea5e9"/>
                            <circle cx="270" cy="150" r="7" fill="#f59e0b"/>
                            <circle cx="150" cy="280" r="7" fill="#8b5cf6"/>
                            <circle cx="30" cy="150" r="7" fill="#e11d48"/>
                            <defs>
                                <radialGradient id="coreGradient" cx="0" cy="0" r="1" gradientUnits="userSpaceOnUse" gradientTransform="translate(150 150) rotate(90) scale(32)">
                                    <stop stop-color="#00ffa3" stop-opacity="0.9"/>
                                    <stop offset="0.6" stop-color="#008751" stop-opacity="0.6"/>
                                    <stop offset="1" stop-color="#060d17" stop-opacity="0.9"/>
                                </radialGradient>
                            </defs>
                        </svg>
                    </div>
                </div>
            </div>

            <div class="hub-aggregate-grid">
                <div class="hub-stat-card">
                    <div class="hub-stat-val">6</div>
                    <div class="hub-stat-label">Flagship Centres</div>
                </div>
                <div class="hub-stat-card">
                    <div class="hub-stat-val">256 TFLOPS</div>
                    <div class="hub-stat-label">HPC Supercomputing</div>
                </div>
                <div class="hub-stat-card">
                    <div class="hub-stat-val">500 Liters</div>
                    <div class="hub-stat-label">Chemical Pilot Plant</div>
                </div>
                <div class="hub-stat-card">
                    <div class="hub-stat-val">50,000 /mo</div>
                    <div class="hub-stat-label">Tissue Culture Plantlets</div>
                </div>
                <div class="hub-stat-card">
                    <div class="hub-stat-val">SSDL</div>
                    <div class="hub-stat-label">Secondary Radiation Standard</div>
                </div>
                <div class="hub-stat-card">
                    <div class="hub-stat-val">±0.005mm</div>
                    <div class="hub-stat-label">5-Axis CNC Precision</div>
                </div>
            </div>
        </div>
    </header>

    <nav class="hub-filter-ribbon" aria-label="Filter Centres by Capability Domain">
        <div class="hub-container">
            <div class="filter-pills-row">
                <button class="filter-btn active" data-domain="all">All Scientific Domains (6)</button>
                <button class="filter-btn" data-domain="computational">Computational & Simulation</button>
                <button class="filter-btn" data-domain="bio-agro">Bio-Genomics & Agriculture</button>
                <button class="filter-btn" data-domain="chemical">Chemical Sciences & Pilot Plants</button>
                <button class="filter-btn" data-domain="materials">Semiconductors & Materials</button>
                <button class="filter-btn" data-domain="nuclear">Radiation & Nuclear Metrology</button>
                <button class="filter-btn" data-domain="prototyping">Precision Engineering & CNC</button>
            </div>
        </div>
    </nav>

    <section id="directory" class="hub-directory-section">
        <div class="hub-container">
            <div class="hub-grid">
                <?php foreach ( $centres_directory as $centre ) : 
                    $centre_url = home_url( '/research-centres/' . $centre['slug'] . '/' );
                ?>
                <article class="hub-card" data-domain="<?php echo esc_attr( $centre['domain'] ); ?>" style="border-top: 4px solid <?php echo esc_attr( $centre['accent'] ); ?>;">
                    <div class="hub-card-header">
                        <div class="hub-card-topline">
                            <span class="card-acronym-badge" style="background: <?php echo esc_attr( $centre['bg_tint'] ); ?>; color: <?php echo esc_attr( $centre['accent'] ); ?>; border: 1px solid <?php echo esc_attr( $centre['accent'] ); ?>;">
                                <?php echo esc_html( $centre['acronym'] ); ?>
                            </span>
                            <span class="card-domain-tag"><?php echo esc_html( $centre['domain_name'] ); ?></span>
                        </div>
                        <h2 class="hub-card-title"><?php echo esc_html( $centre['title'] ); ?></h2>
                        <p class="hub-card-lead"><?php echo esc_html( $centre['lead'] ); ?></p>
                    </div>

                    <div class="hub-card-body">
                        <div class="hub-spec-list">
                            <?php foreach ( $centre['specs'] as $spec_k => $spec_v ) : ?>
                            <div class="hub-spec-item">
                                <span class="spec-name"><?php echo esc_html( $spec_k ); ?></span>
                                <span class="spec-value"><?php echo esc_html( $spec_v ); ?></span>
                            </div>
                            <?php endforeach; ?>
                        </div>

                        <div class="hub-directorate-mini">
                            <div class="directorate-mini-info">
                                <strong><?php echo esc_html( $centre['director'] ); ?></strong>
                                <span><?php echo esc_html( $centre['rank'] ); ?></span>
                            </div>
                        </div>
                    </div>

                    <div class="hub-card-footer">
                        <span class="card-status-dot">Operational</span>
                        <a href="<?php echo esc_url( $centre_url ); ?>" class="card-access-link" style="color: <?php echo esc_attr( $centre['accent'] ); ?>;">
                            <span>Access <?php echo esc_html( $centre['acronym'] ); ?> Portal</span>
                            <span>&rarr;</span>
                        </a>
                    </div>
                </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section id="protocols" class="hub-protocols-section">
        <div class="hub-container">
            <div style="max-width: 720px; margin-bottom: 3.5rem;">
                <span style="font-size: 0.8rem; font-weight: 800; color: #00ffa3; text-transform: uppercase; letter-spacing: 1.5px;">Institutional Engagement</span>
                <h2 style="font-size: 2.25rem; font-weight: 800; color: #ffffff; margin: 0.5rem 0 1rem 0;">Access, Residency & Industrial Scheduling</h2>
                <p style="color: #94a3b8; line-height: 1.7;">NISTCO operates an open national infrastructure policy facilitating university postgraduate residency, third-party laboratory verification, and commercial production trials.</p>
            </div>

            <div class="protocols-grid">
                <div class="protocol-box">
                    <div>
                        <h3>Academic & Postgraduate Residency</h3>
                        <p>Postgraduate fellows and university researchers can apply for shared instrumentation time on our NMR, HPC, GC-MS, and tissue culture bays.</p>
                    </div>
                    <div>
                        <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="btn-nistco btn-ghost">
                            Apply for Residency &rarr;
                        </a>
                    </div>
                </div>

                <div class="protocol-box">
                    <div>
                        <h3>Industrial Demonstration & Pilot Batches</h3>
                        <p>Private manufacturing enterprises can contract CARC's 500L synthesis unit, BARC's 250L bioreactors, or AEPC's 5-axis CNC shop for trial manufacturing.</p>
                    </div>
                    <div>
                        <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" class="btn-nistco btn-ghost">
                            Schedule Pilot Plant &rarr;
                        </a>
                    </div>
                </div>

                <div class="protocol-box">
                    <div>
                        <h3>Metrology, SSDL & Calibration Services</h3>
                        <p>Hospitals, oilfield operators, and mining conglomerates can submit radiation survey meters and optical detectors for primary-traceable calibration.</p>
                    </div>
                    <div>
                        <a href="<?php echo esc_url( home_url( '/research-centres/ntc/' ) ); ?>" class="btn-nistco btn-ghost">
                            Calibration Requisition &rarr;
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<?php 
copy( __FILE__, get_template_directory() . '/archive-research_centre.php' );
get_footer(); 
?>
