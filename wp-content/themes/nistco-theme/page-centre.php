<?php
/**
 * Template Name: NISTCO Research Centre Sub-Page Template
 * Dynamic template for specialized research divisions (AMSARC, CARC, BARC, NTC, PARC, ATP).
 */

get_header();

// Get current page slug (e.g. 'amsarc', 'carc', 'barc', 'ntc', 'parc', 'atp')
global $post;
$slug = $post ? $post->post_name : '';

// Define database of research centres
$centres_data = [
    'amsarc' => [
        'code' => 'AMSARC',
        'name' => 'Applied Mathematics & Simulation Advanced Research Centre',
        'tagline' => 'High-Performance Computing & Numerical Modeling',
        'icon' => '⚡',
        'color' => '#0ea5e9',
        'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #032d3c 100%)',
        'mandate' => 'Executing advanced mathematical modeling, parallel computing simulations, and predictive algorithmic analysis for national infrastructure, fluid dynamics, and electrical grid stability.',
        'equipment' => [
            ['name' => '256 TeraFLOPs HPC Cluster', 'specs' => 'Parallel GPU nodes dedicated to complex computational fluid dynamics and weather forecasting.'],
            ['name' => 'Scientific Visualization Suite', 'specs' => 'Immersive 3D volumetric rendering hardware for geological and structural stress analysis.'],
            ['name' => 'Quantum Algorithmic Sandbox', 'specs' => 'Experimental cryptographic and optimization simulation testbed.']
        ],
        'lead' => 'Dr. Aliyu Mohammed',
        'lead_title' => 'Director, AMSARC',
        'stats' => ['48+ High-Impact Papers', '12 Industry Solvers Deployed', '99.9% Cluster Uptime']
    ],
    'carc' => [
        'code' => 'CARC',
        'name' => 'Chemistry Advanced Research Centre',
        'tagline' => 'Industrial Synthesis & Analytical Metrology',
        'icon' => '🧪',
        'color' => '#f59e0b',
        'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #3a2204 100%)',
        'mandate' => 'Driving chemical synthesis, material characterization, agro-chemical formulation, and rigorous quality assurance using state-of-the-art spectroscopic instrumentation.',
        'equipment' => [
            ['name' => '500L Pilot Synthesis Plant', 'specs' => 'Scalable reactor vessels for pilot-batch chemical compounding and agro-industrial formulations.'],
            ['name' => 'GC-MS & NMR Spectrometers', 'specs' => 'High-precision molecular structure identification and purity assay instrumentation.'],
            ['name' => 'Thermal Analysis Suite (DSC/TGA)', 'specs' => 'Advanced material decomposition and melting point verification units.']
        ],
        'lead' => 'Prof. (Mrs.) Beatrice Ekanem',
        'lead_title' => 'Director, CARC',
        'stats' => ['500L Pilot Capacity', '6 NOTAP Patents', 'ISO 17025 Certified Lab']
    ],
    'barc' => [
        'code' => 'BARC',
        'name' => 'Biotechnology Advanced Research Centre',
        'tagline' => 'Genomics, Molecular Biology & Micropropagation',
        'icon' => '🧬',
        'color' => '#10b981',
        'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #042d1a 100%)',
        'mandate' => 'Pioneering agricultural biotechnology, disease-resistant plant micropropagation, molecular diagnostics, and industrial bioprocess fermentation.',
        'equipment' => [
            ['name' => 'ISO Class 5 Tissue Culture Cleanrooms', 'specs' => 'Sterile laminar flow chambers for mass multiplication of drought-resilient crop seedlings.'],
            ['name' => 'Real-Time PCR & Sequencing Suites', 'specs' => 'High-throughput genomic screening and pathogen detection instrumentation.'],
            ['name' => 'Bioprocess Fermentation Bioreactors', 'specs' => 'Automated bioreactor vessels ranging from 10L to 100L for enzyme and bio-product synthesis.']
        ],
        'lead' => 'Dr. Chinedu Okafor',
        'lead_title' => 'Director, BARC',
        'stats' => ['2.5M Seedlings Distributed', '4 Biosafety Level-2 Labs', '10+ University Partners']
    ],
    'ntc' => [
        'code' => 'NTC',
        'name' => 'Nuclear Technology Centre',
        'tagline' => 'Radiation Safety, Metrology & Isotopic Analysis',
        'icon' => '☢️',
        'color' => '#e11d48',
        'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #3a0410 100%)',
        'mandate' => 'Enforcing national radiation safety standards, conducting environmental radioactivity monitoring, calibrating industrial isotopic gauges, and supporting nuclear medicine applications.',
        'equipment' => [
            ['name' => 'Secondary Standard Dosimetry Laboratory (SSDL)', 'specs' => 'Primary calibration facility for ionizing radiation protection monitoring equipment.'],
            ['name' => 'High-Purity Germanium (HPGe) Spectrometers', 'specs' => 'Ultra-sensitive gamma-ray spectroscopy systems for environmental radionuclide assay.'],
            ['name' => 'Neutron Irradiator Facility', 'specs' => 'Controlled neutron exposure chamber for materials testing and detector calibration.']
        ],
        'lead' => 'Prof. Sani Garba',
        'lead_title' => 'Director, NTC',
        'stats' => ['100% Compliance Audits', 'National Radiation Network', 'IAEA Collaborating Centre']
    ],
    'parc' => [
        'code' => 'PARC',
        'name' => 'Physics Advanced Research Centre',
        'tagline' => 'Solid-State Physics & Renewable Energy Materials',
        'icon' => '🔬',
        'color' => '#8b5cf6',
        'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #220b3a 100%)',
        'mandate' => 'Conducting fundamental and applied research in solid-state physics, semiconductor characterization, optics, and thin-film photovoltaic solar technologies.',
        'equipment' => [
            ['name' => 'RF/DC Magnetron Sputtering Systems', 'specs' => 'Precision thin-film deposition chambers for advanced semiconductor research.'],
            ['name' => 'Scanning Electron Microscope (SEM)', 'specs' => 'High-resolution surface topography and elemental microanalysis system.'],
            ['name' => 'Solar Cell I-V Characterization Rig', 'specs' => 'Class AAA solar simulator for photovoltaic efficiency testing.']
        ],
        'lead' => 'Dr. Funmilayo Adebayo',
        'lead_title' => 'Director, PARC',
        'stats' => ['18 PV Prototype Patents', 'Nano-Characterization Lab', 'Regional Physics Hub']
    ],
    'atp' => [
        'code' => 'ATP',
        'name' => 'Advanced Tooling & Prototyping',
        'tagline' => 'Precision CNC Manufacturing & Rapid Additive Tech',
        'icon' => '⚙️',
        'color' => '#06b6d4',
        'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #04353a 100%)',
        'mandate' => 'Bridging the gap between R&D and industrial manufacturing through high-precision CNC machining, rapid additive prototyping, and pilot mold engineering.',
        'equipment' => [
            ['name' => '5-Axis CNC Machining Centers', 'specs' => 'High-tolerance milling units for complex metallic components and aerospace tooling.'],
            ['name' => 'Industrial Selective Laser Melting (SLM)', 'specs' => 'Metal 3D printing systems for direct manufacturing of custom titanium and steel parts.'],
            ['name' => 'Coordinate Measuring Machine (CMM)', 'specs' => 'Ultra-precise optical and tactile dimensional quality verification laboratory.']
        ],
        'lead' => 'Engr. Musa Bello',
        'lead_title' => 'Director, ATP',
        'stats' => ['Sub-Micron Precision', '200+ Industrial Molds Built', 'Rapid Prototyping Line']
    ]
];

// Fallback if slug not found
$current_centre = isset($centres_data[$slug]) ? $centres_data[$slug] : [
    'code' => 'NISTCO',
    'name' => 'Research Division & Laboratory Portal',
    'tagline' => 'Apex Scientific Excellence & Pilot Plant Operations',
    'icon' => '🔬',
    'color' => '#008751',
    'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #042416 100%)',
    'mandate' => 'Executing multi-disciplinary scientific research and technological innovation across Nigeria.',
    'equipment' => [
        ['name' => 'Advanced Laboratory Infrastructure', 'specs' => 'State-of-the-art instrumentation suites and calibration workstations.']
    ],
    'lead' => 'Office of the Director-General',
    'lead_title' => 'Executive Office',
    'stats' => ['7 Research Divisions', 'National Laboratory Access', 'Verified R&D Output']
];
?>

<!-- Centre Sub-Page Styling -->
<style>
.nistco-sub-main { background: #f8fafc; color: #1e293b; font-family: system-ui, -apple-system, sans-serif; }
.centre-hero {
    background: <?php echo $current_centre['bg_gradient']; ?>;
    color: #ffffff;
    padding: 6rem 2rem 5rem 2rem;
    position: relative;
    overflow: hidden;
}
.centre-hero-container { max-width: 1440px; margin: 0 auto; position: relative; z-index: 2; }
.centre-badge { font-size: 0.75rem; font-weight: 800; text-transform: uppercase; padding: 0.35rem 0.85rem; border-radius: 50px; background: <?php echo $current_centre['color']; ?>; color: #fff; letter-spacing: 1px; display: inline-block; margin-bottom: 1.25rem; }
.centre-title { font-size: clamp(2.25rem, 4vw, 3.5rem); font-weight: 800; line-height: 1.15; margin: 0 0 1rem 0; color: #fff; }
.centre-subtitle { font-size: 1.15rem; color: #cbd5e1; max-width: 700px; line-height: 1.7; margin-bottom: 2rem; }

.centre-stats-bar { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1.5rem; max-width: 1440px; margin: -3rem auto 4rem auto; padding: 0 2rem; position: relative; z-index: 5; }
.centre-stat-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1.5rem; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.05); border-top: 4px solid <?php echo $current_centre['color']; ?>; }

.centre-section { padding: 4rem 2rem; max-width: 1440px; margin: 0 auto; }
.equipment-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem; }
.equipment-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.03); border-left: 4px solid <?php echo $current_centre['color']; ?>; }
</style>

<main class="nistco-sub-main">

    <!-- CENTRE HERO SECTION -->
    <section class="centre-hero">
        <div class="centre-hero-container">
            <span class="centre-badge"><?php echo esc_html($current_centre['code']); ?> DIVISION</span>
            <h1 class="centre-title"><?php echo esc_html($current_centre['name']); ?></h1>
            <p class="centre-subtitle"><?php echo esc_html($current_centre['mandate']); ?></p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="#equipment" class="nistco-btn nistco-btn-primary" style="background: <?php echo $current_centre['color']; ?>;">View Laboratory Equipment &rarr;</a>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="nistco-btn nistco-btn-secondary">Request Lab Access</a>
            </div>
        </div>
    </section>

    <!-- STATS BAR -->
    <div class="centre-stats-bar">
        <?php foreach ($current_centre['stats'] as $stat) : ?>
            <div class="centre-stat-card">
                <div style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin-bottom: 0.2rem;"><?php echo esc_html($stat); ?></div>
                <span style="font-size: 0.8rem; color: #64748b; font-weight: 700; text-transform: uppercase;">Verified Metric</span>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- EQUIPMENT & INSTRUMENTATION SUITE -->
    <section id="equipment" class="centre-section">
        <div style="text-align: center; max-width: 700px; margin: 0 auto 3rem auto;">
            <span style="color: <?php echo $current_centre['color']; ?>; font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px;">Infrastructure & Hardware</span>
            <h2 style="font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0;">Specialized Laboratory Instrumentation</h2>
            <p style="color: #64748b; font-size: 1.05rem;">World-class equipment available for academic research, industrial testing, and joint venture collaboration.</p>
        </div>

        <div class="equipment-grid">
            <?php foreach ($current_centre['equipment'] as $item) : ?>
                <div class="equipment-card">
                    <div style="font-size: 2rem; margin-bottom: 1rem;"><?php echo $current_centre['icon']; ?></div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;"><?php echo esc_html($item['name']); ?></h3>
                    <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin: 0;"><?php echo esc_html($item['specs']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- DIVISION LEADERSHIP & CONSULTATION CTA -->
    <section class="centre-section" style="padding-top: 0;">
        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 3rem; display: grid; grid-template-columns: 1fr auto; gap: 3rem; align-items: center; box-shadow: 0 10px 30px rgba(0,0,0,0.03);">
            <div>
                <span style="color: <?php echo $current_centre['color']; ?>; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;">Division Leadership</span>
                <h3 style="font-size: 1.75rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0;"><?php echo esc_html($current_centre['lead']); ?></h3>
                <p style="color: #64748b; font-size: 1rem; margin-bottom: 1.5rem;"><?php echo esc_html($current_centre['lead_title']); ?> — Nigeria Innovation Science & Technology Complex</p>
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="nistco-btn nistco-btn-primary" style="background: <?php echo $current_centre['color']; ?>;">Book Consultation or Lab Time &rarr;</a>
            </div>
            <div style="width: 120px; height: 120px; border-radius: 50%; background: #021a10; border: 3px solid <?php echo $current_centre['color']; ?>; display: flex; align-items: center; justify-content: center; font-size: 3rem; box-shadow: 0 10px 25px rgba(0,0,0,0.1);">
                <?php echo $current_centre['icon']; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
