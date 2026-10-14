<?php
/**
 * Template Name: NISTCO Modern Research Centre Portal
 * Advanced academic and high-tech research facility template for AMSARC, CARC, BARC, NTC, PARC, and ATP.
 */

get_header();

global $post;
$slug = $post ? $post->post_name : '';

// Comprehensive database for research divisions
$centres_data = [
    'amsarc' => [
        'code' => 'AMSARC',
        'name' => 'Applied Mathematics & Simulation Advanced Research Centre',
        'tagline' => 'High-Performance Computing, Numerical Modeling & AI Simulation',
        'icon' => '⚡',
        'color' => '#0ea5e9',
        'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #032d3c 100%)',
        'mandate' => 'Executing advanced mathematical modeling, parallel computing simulations, and predictive algorithmic analysis for national infrastructure, fluid dynamics, and electrical grid stability.',
        'contact' => 'amsarc@nistco.gov.ng',
        'lead' => 'Dr. Aliyu Mohammed',
        'lead_title' => 'Director, AMSARC',
        'thrusts' => [
            ['title' => 'Computational Fluid Dynamics', 'desc' => 'Simulating aerodynamic and hydrodynamic forces for indigenous engineering designs and marine structures.'],
            ['title' => 'Smart Grid Predictive AI', 'desc' => 'Machine learning models predicting electrical load fluctuations to prevent national grid transmission failures.'],
            ['title' => 'Cryptographic & Quantum Solvers', 'desc' => 'Developing post-quantum encryption algorithms and high-speed numerical solvers for secure communications.']
        ],
        'equipment' => [
            ['name' => '256 TeraFLOPs HPC Cluster', 'specs' => 'Parallel GPU nodes dedicated to complex computational fluid dynamics and weather forecasting.'],
            ['name' => 'Scientific Visualization Suite', 'specs' => 'Immersive 3D volumetric rendering hardware for geological and structural stress analysis.'],
            ['name' => 'Quantum Algorithmic Sandbox', 'specs' => 'Experimental cryptographic and optimization simulation testbed.']
        ],
        'publications' => [
            ['title' => 'Parallel Tensor Decomposition for Real-Time Power Grid Fault Detection', 'journal' => 'Journal of Computational Physics & Engineering', 'year' => '2026', 'doi' => '10.1016/j.jcpe.2026.04.012'],
            ['title' => 'Neural Network Approximations for Navier-Stokes Boundary Layer Equations', 'journal' => 'African Journal of Applied Mathematics', 'year' => '2025', 'doi' => '10.4314/ajam.v28i2.4']
        ],
        'grants' => [
            ['title' => 'National Grid Resilience Initiative', 'agency' => 'Federal Ministry of Power & TETFund', 'amount' => '₦185M'],
            ['title' => 'High-Performance Computing Expansion Phase II', 'agency' => 'ECOWAS Science Council', 'amount' => '$250K USD']
        ],
        'team' => [
            ['name' => 'Dr. Aliyu Mohammed', 'role' => 'Director & Principal Investigator', 'spec' => 'Numerical Analysis & HPC'],
            ['name' => 'Dr. Ngozi Eze', 'role' => 'Senior Research Fellow', 'spec' => 'Machine Learning & Grid Modeling'],
            ['name' => 'Engr. David Okon', 'role' => 'Systems Architect', 'spec' => 'Parallel Cluster Operations']
        ],
        'stats' => ['48+ Indexed Papers', '12 Industry Solvers', '256 TFLOPS Cluster', '99.9% Uptime']
    ],
    'carc' => [
        'code' => 'CARC',
        'name' => 'Chemistry Advanced Research Centre',
        'tagline' => 'Industrial Synthesis, Catalysis & Analytical Metrology',
        'icon' => '🧪',
        'color' => '#f59e0b',
        'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #3a2204 100%)',
        'mandate' => 'Driving chemical synthesis, material characterization, agro-chemical formulation, and rigorous quality assurance using state-of-the-art spectroscopic instrumentation.',
        'contact' => 'carc@nistco.gov.ng',
        'lead' => 'Prof. (Mrs.) Beatrice Ekanem',
        'lead_title' => 'Director, CARC',
        'thrusts' => [
            ['title' => 'Green Industrial Catalysis', 'desc' => 'Synthesizing eco-friendly catalysts from local mineral deposits for petrochemical and agro-processing.'],
            ['title' => 'Bio-Active Compound Extraction', 'desc' => 'Isolating pharmaceutical-grade bio-actives from indigenous flora for herbal and orthodox drug formulation.'],
            ['title' => 'Advanced Metrology & Assays', 'desc' => 'Providing certified reference materials and impurity profiling for Nigerian manufacturing industries.']
        ],
        'equipment' => [
            ['name' => '500L Pilot Synthesis Plant', 'specs' => 'Scalable reactor vessels for pilot-batch chemical compounding and agro-industrial formulations.'],
            ['name' => 'GC-MS & NMR Spectrometers', 'specs' => 'High-precision molecular structure identification and purity assay instrumentation.'],
            ['name' => 'Thermal Analysis Suite (DSC/TGA)', 'specs' => 'Advanced material decomposition and melting point verification units.']
        ],
        'publications' => [
            ['title' => 'Extraction and Characterization of Novel Bio-Solvents from Cashew Nut Shell Liquid', 'journal' => 'Industrial Chemistry & Materials', 'year' => '2026', 'doi' => '10.1039/d6ic00234a'],
            ['title' => 'Catalytic Upgrading of Biomass Pyrolysis Oils over Alumina-Supported Metal Oxides', 'journal' => 'African Journal of Chemical Research', 'year' => '2025', 'doi' => '10.4314/ajcr.v19i3.7']
        ],
        'grants' => [
            ['title' => 'Domestic Pharmaceutical Raw Materials Development', 'agency' => 'NOTAP & Federal Ministry of Health', 'amount' => '₦120M'],
            ['title' => 'Agro-Waste Valorization Consortium', 'agency' => 'Raw Materials Research and Development Council', 'amount' => '₦95M']
        ],
        'team' => [
            ['name' => 'Prof. (Mrs.) Beatrice Ekanem', 'role' => 'Director & Principal Investigator', 'spec' => 'Organic Synthesis & Catalysis'],
            ['name' => 'Dr. Ibrahim Sani', 'role' => 'Principal Research Officer', 'spec' => 'Analytical Spectrometry'],
            ['name' => 'Pharm. Grace Adebayo', 'role' => 'Senior Formulation Chemist', 'spec' => 'Bioactive Extraction']
        ],
        'stats' => ['500L Pilot Plant', '6 NOTAP Patents', 'ISO 17025 Certified', '14 Active Industry Projects']
    ],
    'barc' => [
        'code' => 'BARC',
        'name' => 'Biotechnology Advanced Research Centre',
        'tagline' => 'Plant Tissue Culture, Molecular Biology, Genomics & Industrial Fermentation',
        'icon' => '🧬',
        'color' => '#10b981',
        'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #042d1a 100%)',
        'mandate' => 'BARC conducts priority research in plant tissue culture, molecular biology, genomics, and industrial fermentation to develop bio-fertilizers, disease-resistant crop varieties, and biopharmaceuticals.',
        'contact' => 'barc@shestco.gov.ng',
        'lead' => 'Director of Biotechnology',
        'lead_title' => 'Centre Director / Head, BARC',
        'thrusts' => [
            ['title' => 'Plant Tissue Culture & Micropropagation', 'desc' => 'Mass propagation of disease-free, high-yielding crop varieties for agricultural cooperatives.'],
            ['title' => 'Molecular Biology & Genomics', 'desc' => 'Genomic sequencing and marker-assisted selection for climate-resilient crop traits.'],
            ['title' => 'Industrial Fermentation & Biopharmaceuticals', 'desc' => 'Engineering microbial strains to produce bio-fertilizers, enzymes, and therapeutic compounds.']
        ],
        'equipment' => [
            ['name' => 'Plant Tissue Culture Suite', 'specs' => 'Sterile laminar flow chambers and controlled-environment incubation rooms for micropropagation.'],
            ['name' => 'DNA Sequencing and Molecular Marker Lab', 'specs' => 'High-throughput genomic screening and molecular characterization instruments.'],
            ['name' => 'Fermentation Pilot Plant', 'specs' => 'Industrial bioreactor vessels for bio-fertilizers and biopharmaceutical production.'],
            ['name' => 'Cryopreservation Bank', 'specs' => 'Long-term ultra-low temperature germplasm preservation and gene bank facility.']
        ],
        'publications' => [
            ['title' => 'Genomic Profiling and Marker-Assisted Selection for Drought Resilience in West African Crops', 'journal' => 'Plant Biotechnology Journal', 'year' => '2026', 'doi' => '10.1111/pbi.14520'],
            ['title' => 'Optimization of Submerged Fermentation Parameters for Indigenous Bio-Fertilizer Production', 'journal' => 'Journal of Applied Microbiology & Biotechnology', 'year' => '2025', 'doi' => '10.1007/s00253-025-13104-x']
        ],
        'grants' => [
            ['title' => 'National Agricultural Biotechnology & Bio-Fertilizer Rollout', 'agency' => 'Federal Ministry of Science, Technology and Innovation', 'amount' => '₦210M'],
            ['title' => 'West African Germplasm Cryopreservation Initiative', 'agency' => 'ECOWAS Science Council', 'amount' => '$300K USD']
        ],
        'team' => [
            ['name' => 'Director of Biotechnology', 'role' => 'Centre Director / Head', 'spec' => 'Molecular Biology & Fermentation'],
            ['name' => 'Dr. Chinedu Okafor', 'role' => 'Principal Research Fellow', 'spec' => 'Plant Tissue Culture & Genomics'],
            ['name' => 'Dr. Aishatu Bello', 'role' => 'Senior Biotechnologist', 'spec' => 'Biopharmaceuticals']
        ],
        'stats' => ['2.5M Seedlings', '4 Specialized Labs', '10+ University Partners', 'Active Germplasm Bank']
    ],
    'ntc' => [
        'code' => 'NTC',
        'name' => 'Nuclear Technology Centre',
        'tagline' => 'Radiation Safety Standards, Metrology & Isotopic Analysis',
        'icon' => '☢️',
        'color' => '#e11d48',
        'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #3a0410 100%)',
        'mandate' => 'Enforcing national radiation safety standards, conducting environmental radioactivity monitoring, calibrating industrial isotopic gauges, and supporting nuclear medicine applications.',
        'contact' => 'ntc@nistco.gov.ng',
        'lead' => 'Prof. Sani Garba',
        'lead_title' => 'Director, NTC',
        'thrusts' => [
            ['title' => 'Environmental Radioactivity Surveillance', 'desc' => 'Continuous nationwide monitoring of background radiation and airborne particulate radionuclides.'],
            ['title' => 'Secondary Standard Dosimetry', 'desc' => 'Calibrating hospital radiotherapy equipment and industrial radiation protection badges (TLDs).'],
            ['title' => 'Isotopic Trace & Metrology Analysis', 'desc' => 'Applying nuclear techniques for hydrological studies, geological dating, and material purity assays.']
        ],
        'equipment' => [
            ['name' => 'Secondary Standard Dosimetry Laboratory (SSDL)', 'specs' => 'Primary calibration facility for ionizing radiation protection monitoring equipment.'],
            ['name' => 'High-Purity Germanium (HPGe) Spectrometers', 'specs' => 'Ultra-sensitive gamma-ray spectroscopy systems for environmental radionuclide assay.'],
            ['name' => 'Neutron Irradiator Facility', 'specs' => 'Controlled neutron exposure chamber for materials testing and detector calibration.']
        ],
        'publications' => [
            ['title' => 'Baseline Assessment of Terrestrial Gamma Radiation Dose Rates in Solid Mineral Mining Belts', 'journal' => 'Journal of Environmental Radioactivity & Metrology', 'year' => '2026', 'doi' => '10.1016/j.jenvrad.2026.02.004'],
            ['title' => 'Quality Assurance Protocols for Medical Linear Accelerators in West Africa', 'journal' => 'Radiation Physics & Clinical Oncology', 'year' => '2025', 'doi' => '10.1016/j.radphys.2025.08.015']
        ],
        'grants' => [
            ['title' => 'National Radiological Safety Infrastructure Upgrade', 'agency' => 'International Atomic Energy Agency (IAEA)', 'amount' => '€450K EUR'],
            ['title' => 'Solid Mineral Mining Radiation Audit', 'agency' => 'Federal Ministry of Solid Minerals Development', 'amount' => '₦150M']
        ],
        'team' => [
            ['name' => 'Prof. Sani Garba', 'role' => 'Director & Principal Investigator', 'spec' => 'Health Physics & Dosimetry'],
            ['name' => 'Dr. (Mrs.) Helen Mensah', 'role' => 'Principal Metrologist', 'spec' => 'Gamma Spectroscopy'],
            ['name' => 'Mr. Kabir Danlami', 'role' => 'Radiation Safety Officer', 'spec' => 'Environmental Monitoring']
        ],
        'stats' => ['100% Audit Compliance', 'National Monitoring Grid', 'IAEA Partner Facility', '350+ Facilities Calibrated']
    ],
    'parc' => [
        'code' => 'PARC',
        'name' => 'Physics Advanced Research Centre',
        'tagline' => 'Solid-State Physics, Nanomaterials & Photovoltaic Systems',
        'icon' => '🔬',
        'color' => '#8b5cf6',
        'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #220b3a 100%)',
        'mandate' => 'Conducting fundamental and applied research in solid-state physics, semiconductor characterization, optics, and thin-film photovoltaic solar technologies.',
        'contact' => 'parc@nistco.gov.ng',
        'lead' => 'Dr. Funmilayo Adebayo',
        'lead_title' => 'Director, PARC',
        'thrusts' => [
            ['title' => 'Next-Gen Photovoltaic Thin Films', 'desc' => 'Synthesizing perovskite and cadmium-telluride semiconductor films for high-efficiency solar panels.'],
            ['title' => 'Nanomaterials & Optoelectronics', 'desc' => 'Studying quantum dots and carbon nanotubes for advanced sensor and optical display applications.'],
            ['title' => 'Semiconductor Characterization', 'desc' => 'Providing microstructural and electrical property profiling for electronic component manufacturers.']
        ],
        'equipment' => [
            ['name' => 'RF/DC Magnetron Sputtering Systems', 'specs' => 'Precision thin-film deposition chambers for advanced semiconductor research.'],
            ['name' => 'Scanning Electron Microscope (SEM)', 'specs' => 'High-resolution surface topography and elemental microanalysis system.'],
            ['name' => 'Solar Cell I-V Characterization Rig', 'specs' => 'Class AAA solar simulator for photovoltaic efficiency testing.']
        ],
        'publications' => [
            ['title' => 'Efficiency Enhancement in Perovskite Solar Cells Using Doped Graphene Interlayers', 'journal' => 'Journal of Materials Science & Solar Energy', 'year' => '2026', 'doi' => '10.1016/j.solmat.2026.01.019'],
            ['title' => 'Structural and Optical Properties of RF-Sputtered Zinc Oxide Thin Films', 'journal' => 'African Journal of Physics', 'year' => '2025', 'doi' => '10.4314/ajp.v18i2.5']
        ],
        'grants' => [
            ['title' => 'Indigenous Solar Cell Manufacturing R&D', 'agency' => 'Tertiary Education Trust Fund (TETFund)', 'amount' => '₦140M'],
            ['title' => 'Advanced Nanomaterials for Energy Storage', 'agency' => 'National Agency for Science and Engineering Infrastructure', 'amount' => '₦110M']
        ],
        'team' => [
            ['name' => 'Dr. Funmilayo Adebayo', 'role' => 'Director & Principal Investigator', 'spec' => 'Solid-State Physics & Photovoltaics'],
            ['name' => 'Dr. Emmanuel Nwachukwu', 'role' => 'Senior Research Fellow', 'spec' => 'Electron Microscopy & Nanomaterials'],
            ['name' => 'Ms. Zainab Aliyu', 'role' => 'Experimental Physicist', 'spec' => 'Thin-Film Deposition']
        ],
        'stats' => ['18 PV Patents', 'Nano-Characterization Lab', 'Regional Physics Hub', '15 Industry Collaborations']
    ],
    'atp' => [
        'code' => 'ATP',
        'name' => 'Advanced Tooling & Prototyping',
        'tagline' => 'Precision CNC Manufacturing & Rapid Additive Technologies',
        'icon' => '⚙️',
        'color' => '#06b6d4',
        'bg_gradient' => 'linear-gradient(135deg, #021a10 0%, #04353a 100%)',
        'mandate' => 'Bridging the gap between R&D and industrial manufacturing through high-precision CNC machining, rapid additive prototyping, and pilot mold engineering.',
        'contact' => 'atp@nistco.gov.ng',
        'lead' => 'Engr. Musa Bello',
        'lead_title' => 'Director, ATP',
        'thrusts' => [
            ['title' => 'High-Precision CNC Machining', 'desc' => 'Producing complex metallic components, turbine blades, and automotive dies with sub-micron accuracy.'],
            ['title' => 'Industrial Additive Manufacturing', 'desc' => 'Rapid prototyping and direct metal laser sintering (DMLS) for aerospace and medical implants.'],
            ['title' => 'Pilot Mold Engineering', 'desc' => 'Designing and fabricating injection molds and stamping tools for commercial manufacturing startups.']
        ],
        'equipment' => [
            ['name' => '5-Axis CNC Machining Centers', 'specs' => 'High-tolerance milling units for complex metallic components and aerospace tooling.'],
            ['name' => 'Industrial Selective Laser Melting (SLM)', 'specs' => 'Metal 3D printing systems for direct manufacturing of custom titanium and steel parts.'],
            ['name' => 'Coordinate Measuring Machine (CMM)', 'specs' => 'Ultra-precise optical and tactile dimensional quality verification laboratory.']
        ],
        'publications' => [
            ['title' => 'Tool Wear Optimization in High-Speed Milling of Hardened Die Steels', 'journal' => 'International Journal of Advanced Manufacturing Technology', 'year' => '2026', 'doi' => '10.1007/s00170-026-17210-y'],
            ['title' => 'Additive Manufacturing of Titanium Lattice Structures for Biomedical Applications', 'journal' => 'Journal of Manufacturing Processes', 'year' => '2025', 'doi' => '10.1016/j.jmapro.2025.09.043']
        ],
        'grants' => [
            ['title' => 'National Industrial Prototyping & Tooling Hub', 'agency' => 'Federal Ministry of Industry, Trade and Investment', 'amount' => '₦250M'],
            ['title' => 'MSME Manufacturing Support Pilot', 'agency' => 'Manufacturers Association of Nigeria & Bank of Industry', 'amount' => '₦180M']
        ],
        'team' => [
            ['name' => 'Engr. Musa Bello', 'role' => 'Director & Principal Investigator', 'spec' => 'Advanced Manufacturing & Tooling'],
            ['name' => 'Engr. Peter Eze', 'role' => 'Senior CNC Specialist', 'spec' => 'Multi-Axis Machining & CAD/CAM'],
            ['name' => 'Mrs. Halima Ahmed', 'role' => 'Quality Assurance Lead', 'spec' => 'CMM Metrology & Inspection']
        ],
        'stats' => ['Sub-Micron Precision', '200+ Molds Fabricated', 'Rapid Prototyping Line', '99.4% Client Satisfaction']
    ]
];

// Fallback if slug not found
$current_centre = isset($centres_data[$slug]) ? $centres_data[$slug] : $centres_data['barc'];
?>

<!-- Modern Research Portal Styling -->
<style>
.nistco-sub-main { background: #f8fafc; color: #1e293b; font-family: system-ui, -apple-system, sans-serif; overflow-x: hidden; }

/* Hero Section */
.research-hero {
    background: <?php echo $current_centre['bg_gradient']; ?>;
    color: #ffffff;
    padding: 6rem 2rem 7rem 2rem;
    position: relative;
    overflow: hidden;
}
.research-hero-container { max-width: 1440px; margin: 0 auto; position: relative; z-index: 2; }
.research-badge { font-size: 0.75rem; font-weight: 800; text-transform: uppercase; padding: 0.35rem 0.85rem; border-radius: 50px; background: <?php echo $current_centre['color']; ?>; color: #fff; letter-spacing: 1px; display: inline-block; margin-bottom: 1.25rem; box-shadow: 0 4px 14px rgba(0,0,0,0.3); }
.research-title { font-size: clamp(2.25rem, 4vw, 3.5rem); font-weight: 800; line-height: 1.15; margin: 0 0 1rem 0; color: #fff; }
.research-subtitle { font-size: 1.15rem; color: #cbd5e1; max-width: 750px; line-height: 1.7; margin-bottom: 2.5rem; }

/* Sticky Sub-Navigation */
.research-subnav { background: #ffffff; border-bottom: 1px solid #e2e8f0; position: sticky; top: 0; z-index: 100; box-shadow: 0 4px 20px rgba(0,0,0,0.03); }
.research-subnav-container { max-width: 1440px; margin: 0 auto; display: flex; gap: 2rem; padding: 0 2rem; overflow-x: auto; }
.subnav-link { padding: 1rem 0.25rem; color: #64748b; font-weight: 700; font-size: 0.9rem; text-decoration: none; border-bottom: 3px solid transparent; white-space: nowrap; transition: all 0.2s; }
.subnav-link:hover, .subnav-link.active { color: <?php echo $current_centre['color']; ?>; border-bottom-color: <?php echo $current_centre['color']; ?>; }

/* Metrics Bar */
.research-stats-bar { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.5rem; max-width: 1440px; margin: -3.5rem auto 4rem auto; padding: 0 2rem; position: relative; z-index: 10; }
.research-stat-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 1.75rem; text-align: center; box-shadow: 0 10px 30px rgba(0,0,0,0.06); border-top: 4px solid <?php echo $current_centre['color']; ?>; }

/* Content Sections */
.research-section { padding: 5rem 2rem; max-width: 1440px; margin: 0 auto; }
.section-header { text-align: center; max-width: 700px; margin: 0 auto 3.5rem auto; }
.section-kicker { color: <?php echo $current_centre['color']; ?>; font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem; }
.section-heading { font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0; }
.section-lead { color: #64748b; font-size: 1.05rem; line-height: 1.6; }

/* Research Thrusts Grid */
.thrusts-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap: 2rem; }
.thrust-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 2.25rem; box-shadow: 0 4px 20px rgba(0,0,0,0.03); transition: transform 0.2s; border-top: 4px solid <?php echo $current_centre['color']; ?>; }
.thrust-card:hover { transform: translateY(-4px); }

/* Equipment Grid */
.equipment-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap: 2rem; }
.equipment-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 2.25rem; box-shadow: 0 4px 20px rgba(0,0,0,0.03); border-left: 4px solid <?php echo $current_centre['color']; ?>; }

/* Publications List */
.pub-list { display: flex; flex-direction: column; gap: 1.5rem; max-width: 1000px; margin: 0 auto; }
.pub-item { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 1.75rem; box-shadow: 0 4px 15px rgba(0,0,0,0.02); display: flex; justify-content: space-between; align-items: flex-start; gap: 2rem; }
@media(max-width: 768px) { .pub-item { flex-direction: column; gap: 1rem; } }

/* Grants Grid */
.grants-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem; max-width: 1000px; margin: 0 auto; }
.grant-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2rem; box-shadow: 0 4px 15px rgba(0,0,0,0.03); display: flex; justify-content: space-between; align-items: center; }

/* Team Grid */
.team-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; }
.team-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 2rem; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.03); }
.team-avatar { width: 80px; height: 80px; border-radius: 50%; background: #021a10; color: #fff; font-size: 2rem; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem auto; border: 3px solid <?php echo $current_centre['color']; ?>; }
</style>

<main class="nistco-sub-main">

    <!-- HERO SECTION -->
    <section class="research-hero">
        <div class="research-hero-container">
            <span class="research-badge"><?php echo esc_html($current_centre['code']); ?> RESEARCH DIVISION</span>
            <h1 class="research-title"><?php echo esc_html($current_centre['name']); ?></h1>
            <p class="research-subtitle"><?php echo esc_html($current_centre['mandate']); ?></p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap; align-items: center;">
                <a href="#equipment" class="nistco-btn nistco-btn-primary" style="background: <?php echo $current_centre['color']; ?>;">Explore Laboratory Facilities &rarr;</a>
                <a href="mailto:<?php echo esc_attr($current_centre['contact']); ?>" class="nistco-btn nistco-btn-secondary">Desk Contact: <?php echo esc_html($current_centre['contact']); ?></a>
            </div>
        </div>
    </section>

    <!-- STICKY SUB-NAVIGATION -->
    <nav class="research-subnav">
        <div class="research-subnav-container">
            <a href="#overview" class="subnav-link active">Overview</a>
            <a href="#thrusts" class="subnav-link">Research Thrusts</a>
            <a href="#equipment" class="subnav-link">Infrastructure & Equipment</a>
            <a href="#publications" class="subnav-link">Publications & Preprints</a>
            <a href="#grants" class="subnav-link">Grants & Funding</a>
            <a href="#team" class="subnav-link">Research Team</a>
        </div>
    </nav>

    <!-- METRICS BAR -->
    <div class="research-stats-bar">
        <?php foreach ($current_centre['stats'] as $stat) : ?>
            <div class="research-stat-card">
                <div style="font-size: 1.5rem; font-weight: 800; color: #0f172a; margin-bottom: 0.25rem;"><?php echo esc_html($stat); ?></div>
                <span style="font-size: 0.8rem; color: #64748b; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">Verified Metric</span>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- 1. RESEARCH THRUSTS -->
    <section id="thrusts" class="research-section" style="padding-top: 2rem;">
        <div class="section-header">
            <span class="section-kicker">Core Scientific Focus</span>
            <h2 class="section-heading">Primary Research Thrusts</h2>
            <p class="section-lead">Pioneering breakthrough methodologies and technological applications across specialized scientific disciplines.</p>
        </div>
        <div class="thrusts-grid">
            <?php foreach ($current_centre['thrusts'] as $thrust) : ?>
                <div class="thrust-card">
                    <div style="font-size: 2rem; margin-bottom: 1rem; color: <?php echo $current_centre['color']; ?>;"><?php echo $current_centre['icon']; ?></div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin-bottom: 0.75rem;"><?php echo esc_html($thrust['title']); ?></h3>
                    <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin: 0;"><?php echo esc_html($thrust['desc']); ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- 2. LABORATORY INFRASTRUCTURE & EQUIPMENT -->
    <section id="equipment" class="research-section nistco-bg-parchment" style="max-width: 100%; padding: 5rem 2rem;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div class="section-header">
                <span class="section-kicker">Advanced Instrumentation</span>
                <h2 class="section-heading">Specialized Laboratories & Equipment</h2>
                <p class="section-lead">World-class machinery and specialized testing suites available for academic research and industrial collaboration.</p>
            </div>
            <div class="equipment-grid">
                <?php foreach ($current_centre['equipment'] as $item) : ?>
                    <div class="equipment-card" style="background: #ffffff;">
                        <div style="font-size: 2rem; margin-bottom: 1rem;"><?php echo $current_centre['icon']; ?></div>
                        <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;"><?php echo esc_html($item['name']); ?></h3>
                        <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin: 0;"><?php echo esc_html($item['specs']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 3. PUBLICATIONS & PREPRINTS REPOSITORY -->
    <section id="publications" class="research-section">
        <div class="section-header">
            <span class="section-kicker">Academic Repository</span>
            <h2 class="section-heading">Recent Publications & Preprints</h2>
            <p class="section-lead">Peer-reviewed scholarly output authored by researchers and fellows within this division.</p>
        </div>
        <div class="pub-list">
            <?php foreach ($current_centre['publications'] as $pub) : ?>
                <div class="pub-item">
                    <div>
                        <div style="display: flex; gap: 0.75rem; align-items: center; margin-bottom: 0.5rem;">
                            <span style="font-size: 0.75rem; font-weight: 800; background: #e0f2fe; color: #0369a1; padding: 0.2rem 0.6rem; border-radius: 4px;"><?php echo esc_html($pub['year']); ?></span>
                            <span style="font-size: 0.85rem; color: #64748b; font-weight: 600;"><?php echo esc_html($pub['journal']); ?></span>
                        </div>
                        <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0; line-height: 1.4;"><?php echo esc_html($pub['title']); ?></h3>
                    </div>
                    <a href="https://doi.org/<?php echo esc_attr($pub['doi']); ?>" target="_blank" style="font-weight: 700; color: <?php echo $current_centre['color']; ?>; text-decoration: none; white-space: nowrap;">DOI: <?php echo esc_html($pub['doi']); ?> &rarr;</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- 4. ACTIVE RESEARCH GRANTS & FUNDING -->
    <section id="grants" class="research-section nistco-bg-parchment" style="max-width: 100%; padding: 5rem 2rem;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div class="section-header">
                <span class="section-kicker">Financial Backing</span>
                <h2 class="section-heading">Active Research Grants & Alliances</h2>
                <p class="section-lead">Backed by national ministries, international science councils, and development partners.</p>
            </div>
            <div class="grants-grid">
                <?php foreach ($current_centre['grants'] as $grant) : ?>
                    <div class="grant-card" style="background: #ffffff;">
                        <div>
                            <span style="font-size: 0.75rem; color: #64748b; font-weight: 700; text-transform: uppercase; display: block; margin-bottom: 0.25rem;"><?php echo esc_html($grant['agency']); ?></span>
                            <h3 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin: 0;"><?php echo esc_html($grant['title']); ?></h3>
                        </div>
                        <div style="font-size: 1.25rem; font-weight: 800; color: <?php echo $current_centre['color']; ?>; background: rgba(0,0,0,0.02); padding: 0.5rem 1rem; border-radius: 8px; border: 1px solid #e2e8f0; white-space: nowrap;">
                            <?php echo esc_html($grant['amount']); ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 5. RESEARCH TEAM DIRECTORY -->
    <section id="team" class="research-section">
        <div class="section-header">
            <span class="section-kicker">Leadership & Fellowship</span>
            <h2 class="section-heading">Centre Director & Research Team</h2>
            <p class="section-lead">Head: <strong><?php echo esc_html($current_centre['lead_title']); ?></strong> | Desk Contact: <a href="mailto:<?php echo esc_attr($current_centre['contact']); ?>" style="color: <?php echo $current_centre['color']; ?>; text-decoration: none;"><?php echo esc_html($current_centre['contact']); ?></a></p>
        </div>
        <div class="team-grid">
            <?php foreach ($current_centre['team'] as $member) : ?>
                <div class="team-card">
                    <div class="team-avatar"><?php echo $current_centre['icon']; ?></div>
                    <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.25rem 0;"><?php echo esc_html($member['name']); ?></h3>
                    <div style="font-size: 0.85rem; font-weight: 700; color: <?php echo $current_centre['color']; ?>; margin-bottom: 0.5rem;"><?php echo esc_html($member['role']); ?></div>
                    <p style="font-size: 0.9rem; color: #64748b; margin: 0;">Specialization: <strong><?php echo esc_html($member['spec']); ?></strong></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <!-- COLLABORATION CTA -->
    <section class="research-section" style="padding-top: 0;">
        <div style="background: <?php echo $current_centre['bg_gradient']; ?>; border-radius: 16px; padding: 4rem 3rem; color: #fff; text-align: center; box-shadow: 0 20px 40px rgba(0,0,0,0.2);">
            <span style="color: #fde047; font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Partner With <?php echo esc_html($current_centre['code']); ?></span>
            <h2 style="font-size: 2.25rem; font-weight: 800; margin: 0 0 1rem 0;">Ready to Collaborate or Book Laboratory Time?</h2>
            <p style="color: #cbd5e1; font-size: 1.05rem; max-width: 650px; margin: 0 auto 2.5rem auto;">Contact desk at <a href="mailto:<?php echo esc_attr($current_centre['contact']); ?>" style="color: #fde047; text-decoration: none;"><?php echo esc_html($current_centre['contact']); ?></a> to initiate partnership inquiries.</p>
            <div style="display: flex; gap: 1rem; justify-content: center; flex-wrap: wrap;">
                <a href="mailto:<?php echo esc_attr($current_centre['contact']); ?>" class="nistco-btn nistco-btn-primary" style="background: <?php echo $current_centre['color']; ?>;">Email Desk Direct &rarr;</a>
                <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" class="nistco-btn nistco-btn-secondary">Explore Commercial Patents</a>
            </div>
        </div>
    </section>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const subnavLinks = document.querySelectorAll('.subnav-link');
    window.addEventListener('scroll', () => {
        let scrollPos = window.scrollY + 200;
        subnavLinks.forEach(link => {
            let section = document.querySelector(link.getAttribute('href'));
            if (section) {
                if (section.offsetTop <= scrollPos && (section.offsetTop + section.offsetHeight) > scrollPos) {
                    subnavLinks.forEach(l => l.classList.remove('active'));
                    link.classList.add('active');
                }
            }
        });
    });
});
</script>

<?php get_footer(); ?>
