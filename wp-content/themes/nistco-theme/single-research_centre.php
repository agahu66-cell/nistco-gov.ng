<?php
/**
 * Template Name: NISTCO Master Single Research Centre Portal
 * Includes bespoke 3D insignias, statutory mandate, 3D infrastructure blueprints,
 * facility requisition form, and at least 4 FAQs per division.
 */

get_header();

$profiles = [
    'amsarc' => [
        'acronym'     => 'AMSARC',
        'title'       => 'Applied Mathematics and Simulation Advanced Research Centre',
        'mandate'     => 'National Apex Supercomputing & Numerical Simulation Mandate',
        'mandate_text'=> 'Mandated under the National Science, Technology, and Innovation (STI) Policy to maintain Nigeria’s apex computational supercomputing infrastructure. AMSARC translates mathematical continuum mechanics, computational fluid dynamics (CFD), and stochastic tensor modeling into mission-critical solutions for national power grid stability, aerospace aerodynamics, and defense logistics.',
        'pillars'     => [
            [ 'title' => 'National Grid Simulation', 'desc' => 'Executing real-time synchrophasor modeling across 330kV and 132kV transmission lines to eliminate nationwide grid collapses.' ],
            [ 'title' => 'Turbulence & Aerodynamics', 'desc' => 'Navier-Stokes and finite-volume fluid modeling for indigenous hydro turbines and marine hulls.' ],
            [ 'title' => 'HPC & Parallel Computing', 'desc' => 'High-throughput 256 TFLOPS parallel GPU allocation for universities and national engineering programs.' ]
        ],
        'telemetry'   => [
            'Supercomputing Cluster'   => '256 TFLOPS GPU Acceleration',
            'Grid Simulation Forecast' => '99.4% Numerical Precision',
            'Dedicated Compute Nodes'  => '1,024 Parallel CUDA Cores',
            'Network Interconnect'     => '100 Gbps InfiniBand Fabric',
            'Laboratory Power Feed'    => 'Hybrid Clean Solar Microgrid'
        ],
        'director'    => 'Prof. K. A. Adebayo',
        'rank'        => 'Director & Chief Scientist in Numerical Simulation',
        'email'       => 'amsarc@nistco.gov.ng',
        'bio'         => 'Directing computational fluid mechanics, national power infrastructure stress modeling, and high-performance mathematical simulation suites for federal and commercial applications.',
        'facilities'  => [
            [ 'title' => 'High-Performance Supercomputing (HPC) Core', 'desc' => 'Massively parallel cluster nodes engineered for Navier-Stokes aerodynamics, molecular dynamics, and large-scale industrial simulations.', 'cert' => 'ISO/IEC 27001 HPC Data Sanctuary', 'access' => 'Academic Fellowship & Industry Request' ],
            [ 'title' => 'Computational Fluid Dynamics (CFD) Laboratory', 'desc' => 'Hydrodynamic, aerodynamic, and thermodynamic simulation suites supporting indigenous manufacturing, turbine blade aerodynamics, and hull dynamics.', 'cert' => 'Validated Verification Benchmark', 'access' => 'Direct Workstation Access' ],
            [ 'title' => 'Scientific Data Visualization & Analytics Suite', 'desc' => 'Ultra-high-resolution multiscreen rendering facility for dimensional volumetric exploration of national grid and weather telemetry.', 'cert' => 'National Metrology Connected', 'access' => 'Collaborative Research' ]
        ],
        'equipment'   => [
            [ 'name' => 'NVIDIA DGX GPU Supercomputing Cluster', 'spec' => '256 TFLOPS Tensor Flow Architecture', 'status' => 'Online', 'access' => 'HPC Compute Scheduling' ],
            [ 'name' => 'Grid Telemetry Real-Time Workstation', 'spec' => 'Low-Latency Synchrophasor Interface', 'status' => 'Calibrated', 'access' => 'National Grid Operators' ],
            [ 'name' => 'High-Throughput NVMe Parallel Storage', 'spec' => '500 TB High-Bandwidth Scratch Storage', 'status' => 'Verified', 'access' => 'Continuous I/O' ],
            [ 'name' => 'Aerodynamic CFD Simulation Cluster', 'spec' => '64-Node Fluid Dynamics Cluster', 'status' => 'Online', 'access' => 'Industrial Simulation' ]
        ],
        'projects'    => [
            [ 'title' => 'National Grid Frequency Stability & Cascading Fault Modeling', 'desc' => 'Developing high-resolution mathematical predictive algorithms to eliminate power grid collapses across Nigerian transmission corridors.', 'lead' => 'Prof. K. A. Adebayo', 'status' => 'Active Phase II', 'sponsor' => 'Federal Ministry of Power' ],
            [ 'title' => 'Hydrodynamic Simulation of Kainji Dam Turbine Efficiencies', 'desc' => 'Multi-phase turbulent fluid dynamics simulation optimizing hydroelectric blade cavitation and water discharge schedules.', 'lead' => 'Dr. C. I. Ozoemena', 'status' => 'Active Milestone III', 'sponsor' => 'NISTCO Energy Grant' ],
            [ 'title' => 'Urban Flood Inundation Predictive Modeling for Niger Delta', 'desc' => 'High-density digital elevation simulations projecting seasonal tidal surge risks and inland flood vulnerabilities.', 'lead' => 'Dr. M. S. Danjuma', 'status' => 'Validation Run', 'sponsor' => 'Ecological Project Desk' ]
        ],
        'publications'=> [
            [ 'title' => 'Numerical Solution of Non-Linear Navier-Stokes Formulations on Heterogeneous GPU Architectures', 'authors' => 'Adebayo, K. A., Ozoemena, C. I., & Danjuma, M. S.', 'journal' => 'Journal of Computational Applied Mathematics, 2025', 'doi' => '10.1016/j.jcam.2025.114890' ],
            [ 'title' => 'High-Resolution Finite Volume Simulation of Transonic Flow Over High-Aspect-Ratio Lifting Surfaces', 'authors' => 'Adebayo, K. A., & Bello, U. T.', 'journal' => 'African Journal of Scientific Computing, 2024', 'doi' => '10.5281/zenodo.839401' ]
        ],
        'faq'         => [
            [ 'q' => 'How can external researchers or universities request supercomputing time?', 'a' => 'External investigators and postgraduate students can submit a computational proposal via the HPC Access Desk. Node allocations are granted within 5 working days following technical feasibility review.' ],
            [ 'q' => 'What scientific software suites and toolchains are available on AMSARC clusters?', 'a' => 'AMSARC provides pre-compiled OpenFOAM, ANSYS Fluent, MATLAB Distributed Computing Engine, Python PyTorch/TensorFlow, and custom MPI parallel C++/Fortran libraries.' ],
            [ 'q' => 'Can private enterprises contract AMSARC for proprietary CFD or structural analysis?', 'a' => 'Yes. Under NISTCO commercial service charters, AMSARC executes proprietary simulation engagements with complete non-disclosure confidentiality and certified engineering reports.' ],
            [ 'q' => 'What is the network latency and remote cluster access protocol?', 'a' => 'Authorized external researchers connect via secure encrypted VPN with SSH/SFTP endpoints, supported by dedicated 100 Gbps InfiniBand interconnects.' ]
        ]
    ],
    'carc' => [
        'acronym'     => 'CARC',
        'title'       => 'Chemistry Advanced Research Centre',
        'mandate'     => 'National Industrial Chemistry, Fine Chemicals & Materials Mandate',
        'mandate_text'=> 'Established to drive Nigeria’s raw materials substitution agenda by transforming domestic petrochemicals, solid minerals, and natural botanical extracts into certified industrial chemicals, pharmaceutical intermediates, and specialized polymer formulations.',
        'pillars'     => [
            [ 'title' => '500L Batch Scale-Up', 'desc' => 'Bridging the laboratory-to-industry gap through jacketed demonstration reactors.' ],
            [ 'title' => 'High-Field Structural NMR', 'desc' => '400 MHz organic and inorganic molecular characterization for domestic research.' ],
            [ 'title' => 'Import Substitution', 'desc' => 'Developing domestic zeolite cracking catalysts and biopolymer packaging resins.' ]
        ],
        'telemetry'   => [
            'Chemical Pilot Plant'     => '500L Jacketed Batch Synthesis',
            'Structural Spectroscopy'  => '400 MHz High-Field NMR',
            'GC-MS Resolution'         => '0.01 PPM Trace Organic Detection',
            'Analytical Accreditation' => 'ISO/IEC 17025 Certified Testing',
            'Pilot Facility Status'    => 'Active Industrial Production Run'
        ],
        'director'    => 'Dr. (Mrs.) E. O. Nwachukwu',
        'rank'        => 'Director of Chemical Sciences & Industrial Synthesis',
        'email'       => 'carc@nistco.gov.ng',
        'bio'         => 'Leading frontier investigations in fine chemicals synthesis, indigenous natural product extraction, polymer formulation, and commercial-scale batch manufacturing.',
        'facilities'  => [
            [ 'title' => '500-Liter Industrial Chemical Pilot Plant', 'desc' => 'Commercial-scale synthesis reactors, glass-lined distillation columns, and automated thermal jackets for validating domestic industrial chemicals.', 'cert' => 'cGMP & Standard Organization of Nigeria Certified', 'access' => 'Commercial Contract Manufacturing' ],
            [ 'title' => 'Spectroscopy & Molecular Characterization Suite', 'desc' => 'High-resolution nuclear magnetic resonance (NMR) and Fourier-transform infrared (FTIR) instrumentation for organic structural identification.', 'cert' => 'ISO/IEC 17025 Compliant', 'access' => 'Analytical Services Request' ],
            [ 'title' => 'Chromatography & Quality Assurance Laboratory', 'desc' => 'Triple-quadrupole GC-MS, high-performance liquid chromatography (HPLC), and trace heavy metal spectrometers ensuring export-grade product validation.', 'cert' => 'Regulatory Standard Calibrated', 'access' => 'Industry Batch Testing' ]
        ],
        'equipment'   => [
            [ 'name' => '500L Jacketed Glass-Lined Reactor', 'spec' => 'Multi-stage Chemical Batch Synthesis', 'status' => 'Online', 'access' => 'Pilot Production Run' ],
            [ 'name' => 'Bruker 400 MHz High-Field NMR', 'spec' => 'Multi-Nuclear 1H, 13C Structural Determination', 'status' => 'Calibrated', 'access' => 'Residency & Third-Party' ],
            [ 'name' => 'Agilent GC-MS Triple Quadrupole', 'spec' => 'Ultra-Trace Organic Profiling', 'status' => 'Verified', 'access' => 'Quality Assurance Desk' ],
            [ 'name' => 'HPLC Analytical & Preparative System', 'spec' => 'Bio-Active Phytochemical Isolation', 'status' => 'Online', 'access' => 'Contract Testing' ]
        ],
        'projects'    => [
            [ 'title' => 'Indigenous Zeolite Catalyst Synthesis for Petrochemical Refining', 'desc' => 'Developing high-silica mesoporous zeolite catalysts from domestic clay reserves to replace imported cracking agents in Nigerian refineries.', 'lead' => 'Dr. (Mrs.) E. O. Nwachukwu', 'status' => 'Pilot Trial Scale', 'sponsor' => 'NISTCO Commercial Venture' ],
            [ 'title' => 'Bio-Degradable Biopolymer Resins from Cassava Starch Derivatives', 'desc' => 'Formulating industrial thermoplastic starches and compostable packaging films for FMCG packaging applications.', 'lead' => 'Dr. A. K. Mamman', 'status' => 'Active Phase II', 'sponsor' => 'NOTAP Tech Transfer Desk' ],
            [ 'title' => 'Active Pharmaceutical Ingredient (API) Extraction from Vernonia Amygdalina', 'desc' => 'Pilot isolation and HPLC purification of sesquiterpene lactones for standardized antimalarial and therapeutic formulations.', 'lead' => 'Dr. S. O. Eze', 'status' => 'Pre-Clinical Validation', 'sponsor' => 'National Health Research Trust' ]
        ],
        'publications'=> [
            [ 'title' => 'Hydrothermal Synthesis and Structural Characterization of Hierarchical ZSM-5 Zeolites from Nigerian Kaolin Clays', 'authors' => 'Nwachukwu, E. O., Mamman, A. K., & Eze, S. O.', 'journal' => 'Industrial & Engineering Chemistry Research, 2025', 'doi' => '10.1021/acs.iecr.5b02194' ],
            [ 'title' => 'Trace Organic Contaminant Profiling in Industrial Effluents via GC-MS/MS Triple Quadrupole Mass Spectrometry', 'authors' => 'Nwachukwu, E. O., & Bello, A. I.', 'journal' => 'African Journal of Pure & Applied Chemistry, 2024', 'doi' => '10.5897/AJPAC2024.0881' ]
        ],
        'faq'         => [
            [ 'q' => 'How can commercial manufacturing companies schedule production on the 500L Pilot Plant?', 'a' => 'Companies submit a Pilot Synthesis Request detailing the reaction pathway, material safety data sheets (MSDS), and batch volume. Our chemical engineers conduct a hazards evaluation prior to contract scheduling.' ],
            [ 'q' => 'What sample purity and submission standards are required for 400 MHz NMR testing?', 'a' => 'Samples must be submitted in standard 5mm NMR tubes, dissolved in minimum 0.6 mL deuterated solvent (CDCl3, DMSO-d6, D2O, or MeOD) with a recommended concentration of 5–15 mg for 1H or 20–50 mg for 13C.' ],
            [ 'q' => 'Does CARC provide official Certificates of Analysis (CoA) for export clearance?', 'a' => 'Yes. CARC issues accredited Certificates of Analysis recognized by regulatory bodies including NAFDAC, SON, and international phytosanitary authorities.' ],
            [ 'q' => 'What turnaround time can commercial clients expect for GC-MS and HPLC assay runs?', 'a' => 'Routine analytical assays are completed within 3 to 5 business days, with rush express reporting available within 48 hours.' ]
        ]
    ],
    'barc' => [
        'acronym'     => 'BARC',
        'title'       => 'Biotechnology Advanced Research Centre',
        'mandate'     => 'National Agricultural Genomics, Tissue Culture & Bioeconomy Mandate',
        'mandate_text'=> 'Statutorily charged with advancing Nigeria’s bioeconomy through high-throughput tissue culture propagation, molecular breeding, bio-fertilizer microbial bioprocessing, and germplasm conservation to ensure national food security and agro-allied export growth.',
        'pillars'     => [
            [ 'title' => 'Disease-Free Seedlings', 'desc' => 'Delivering 50,000 monthly certified plantlets to agricultural cooperatives.' ],
            [ 'title' => 'Agro-Bioprocess Core', 'desc' => '250L fermentation capacity developing organic soil amendments and bio-pesticides.' ],
            [ 'title' => 'Genetic Integrity', 'desc' => 'Real-time qPCR pathogen diagnostics and cryogenic germplasm repository.' ]
        ],
        'telemetry'   => [
            'Micropropagation Output'  => '50,000 Certified Plantlets / Month',
            'Pilot Bioreactor Core'    => '250 Liters Fermentation Capacity',
            'Genomic PCR Diagnostic'   => 'Real-Time Quantitative Multiplex',
            'Cleanroom Classification' => 'Class II Biological Containment',
            'Bio-Repository Spec'      => '-80°C Cryogenic Seedling Vault'
        ],
        'director'    => 'Dr. A. U. Sadiq',
        'rank'        => 'Director of Agricultural Genomics & Bioprocessing',
        'email'       => 'barc@nistco.gov.ng',
        'bio'         => 'Supervising high-throughput tissue culture micropropagation, crop disease resistance screening, indigenous enzyme synthesis, and agro-industrial bio-fertilizer commercialization.',
        'facilities'  => [
            [ 'title' => 'Commercial Plant Tissue Culture Cleanrooms', 'desc' => 'High-throughput sterile multiplication bays providing disease-free seedling varieties for cassava, yam, oil palm, and ginger farming cooperatives.', 'cert' => 'National Biosafety Management Certified', 'access' => 'Commercial Cooperative Supply' ],
            [ 'title' => 'Molecular Biology & Genetic Diagnostics Suite', 'desc' => 'Automated DNA/RNA extractors and real-time qPCR thermal cyclers executing molecular pathogen identification and crop variety validation.', 'cert' => 'ISO/IEC 17025 Diagnostic Cleanroom', 'access' => 'Agricultural Research Residency' ],
            [ 'title' => 'Industrial Bioprocessing & Fermentation Pilot Bay', 'desc' => 'Controlled pilot bioreactor systems optimizing local microbial fermentation for bio-pesticides and organic soil stimulants.', 'cert' => 'Bioeconomy Standards Compliant', 'access' => 'Bio-Manufacturing Partnerships' ]
        ],
        'equipment'   => [
            [ 'name' => 'Laminar Flow Cleanroom Multiplication Array', 'spec' => 'Class 100 HEPA-Filtered Workstations', 'status' => 'Online', 'access' => 'Tissue Culture Teams' ],
            [ 'name' => 'Bio-Rad CFX96 Real-Time qPCR System', 'spec' => '96-Well Genomic Pathogen Quantitation', 'status' => 'Calibrated', 'access' => 'Diagnostic Protocols' ],
            [ 'name' => 'New Brunswick 250L Pilot Fermenter', 'spec' => 'Continuous Microbial Culture & Harvest', 'status' => 'Online', 'access' => 'Bioprocess Scaling' ],
            [ 'name' => 'Cryogenic Ultra-Low Storage Vault', 'spec' => '-80°C Controlled Germplasm Sanctuary', 'status' => 'Verified', 'access' => 'National Repository' ]
        ],
        'projects'    => [
            [ 'title' => 'Cassava Mosaic Virus Resistance Marker-Assisted Micropropagation', 'desc' => 'Producing 500,000 certified disease-free pro-vitamin A cassava plantlets for distributed deployment across north-central farming hubs.', 'lead' => 'Dr. A. U. Sadiq', 'status' => 'Commercial Multiplication', 'sponsor' => 'Agricultural Transformation Agenda' ],
            [ 'title' => 'Solid-State Microbial Fermentation for Organic Bio-Fertilizers', 'desc' => 'Formulating nitrogen-fixing and phosphate-solubilizing bio-inoculants to reduce reliance on imported chemical fertilizers.', 'lead' => 'Dr. H. T. Ibrahim', 'status' => 'Field Testing Phase', 'sponsor' => 'Federal Ministry of Agriculture' ],
            [ 'title' => 'Cryo-Preservation of Indigenous Medicinal Flora Germplasm', 'desc' => 'Building Nigeria’s apex cryogenic botanical germplasm archive for endangered medicinal species.', 'lead' => 'Dr. R. O. Adewale', 'status' => 'Active Phase I', 'sponsor' => 'Bioresources Conservation Trust' ]
        ],
        'publications'=> [
            [ 'title' => 'High-Throughput In Vitro Micropropagation and Acclimatization Protocols for Elite Yam Varieties (Dioscorea rotundata)', 'authors' => 'Sadiq, A. U., Ibrahim, H. T., & Adewale, R. O.', 'journal' => 'Plant Cell, Tissue and Organ Culture, 2025', 'doi' => '10.1007/s11240-025-02844-3' ],
            [ 'title' => 'Molecular Diagnostics and Real-Time PCR Quantitation of Phytoplasmas in Commercial Ginger Rhizomes', 'authors' => 'Sadiq, A. U., & Mohammed, F. B.', 'journal' => 'Phytopathology Research, 2024', 'doi' => '10.1186/s42483-024-00219-w' ]
        ],
        'faq'         => [
            [ 'q' => 'How can farmer cooperatives or agribusinesses procure tissue-culture plantlets?', 'a' => 'Cooperatives can place supply orders through the Agro-Allied Desk. Seedlings are acclimated and delivered in sterile, disease-free hardened batches along with planting management protocols.' ],
            [ 'q' => 'What biosafety protocols govern genetic diagnostics and organism handling at BARC?', 'a' => 'BARC operates under National Biosafety Management Agency (NBMA) Level 2 biocontainment protocols with full autoclave sterilization, HEPA air filtration, and controlled biohazard disposal.' ],
            [ 'q' => 'Can graduate students access the molecular biology lab for thesis research?', 'a' => 'Yes. BARC hosts graduate fellows from recognized universities through the NISTCO Postgraduate Residency Fellowship program.' ],
            [ 'q' => 'What is the production capacity of BARC bio-fertilizer pilot fermenters?', 'a' => 'Our pilot fermentation suite can produce 1,000 liters of concentrated liquid microbial inoculant per production cycle.' ]
        ]
    ],
    'parc' => [
        'acronym'     => 'PARC',
        'title'       => 'Physics Advanced Research Centre',
        'mandate'     => 'National Solid-State Physics, Semiconductors & Clean Energy Mandate',
        'mandate_text'=> 'Mandated to establish sovereign capabilities in solid-state physics, semiconductor device fabrication, solar photovoltaic metrology, and clean energy storage solutions tailored to withstand extreme Sahel and tropical conditions.',
        'pillars'     => [
            [ 'title' => 'Semiconductor Thin-Films', 'desc' => 'High-vacuum magnetron sputtering for transparent conductive oxides and solar cells.' ],
            [ 'title' => 'Class AAA PV Standards', 'desc' => 'Photovoltaic flash characterization and IEC 60904 degradation certification.' ],
            [ 'title' => 'Advanced Solid-State Physics', 'desc' => 'Variable-temperature electronic transport and optical spectroscopy.' ]
        ],
        'telemetry'   => [
            'Solar Testing Standard'   => 'Class AAA Solar Simulator Bench',
            'Thin-Film Vacuum Suite'   => '10^-6 Torr High-Vacuum Deposition',
            'Spectroscopy Bandwidth'   => '200 nm to 25 µm Optical Profiling',
            'Semiconductor Diagnostic' => 'Variable Temperature Hall Effect',
            'Clean Energy Laboratory'  => 'Continuous Cell Degradation Rig'
        ],
        'director'    => 'Engr. Dr. F. M. Okoro',
        'rank'        => 'Director of Solid-State Physics & Materials',
        'email'       => 'parc@nistco.gov.ng',
        'bio'         => 'Spearheading solid-state physics, thin-film photovoltaic cell characterization, renewable energy storage materials, and optical sensor metrology.',
        'facilities'  => [
            [ 'title' => 'Semiconductor Thin-Film Deposition Bay', 'desc' => 'Magnetron sputtering and thermal evaporation systems for fabricating experimental solar cells and nanotechnology coatings.', 'cert' => 'High-Vacuum Cleanroom Facility', 'access' => 'Materials Research Fellows' ],
            [ 'title' => 'Photovoltaic Validation & Solar Simulator Lab', 'desc' => 'Class AAA solar simulators testing conversion efficiencies, spectral response, and accelerated thermal aging under tropical standards.', 'cert' => 'IEC 60904 Photovoltaic Compliance', 'access' => 'Commercial Panel Certification' ],
            [ 'title' => 'Optical Metrology & Photonics Laboratory', 'desc' => 'Precision laser characterization, interferometry, and spectrophotometric testing across ultraviolet, visible, and near-infrared bands.', 'cert' => 'National Metrology Aligned', 'access' => 'Specialized Instrumentation' ]
        ],
        'equipment'   => [
            [ 'name' => 'High-Vacuum Multi-Target Sputter Coater', 'spec' => 'Thin-Film Semiconductor Nano-Deposition', 'status' => 'Online', 'access' => 'Semiconductor Lab' ],
            [ 'name' => 'Oriel Class AAA Solar Simulator Suite', 'spec' => 'PV Efficiency and I-V Curve Analysis', 'status' => 'Calibrated', 'access' => 'Commercial Testing' ],
            [ 'name' => 'Variable Temperature Hall Effect System', 'spec' => 'Carrier Density and Mobility Characterization', 'status' => 'Verified', 'access' => 'Materials Residency' ],
            [ 'name' => 'FTIR / UV-Vis Spectrophotometer', 'spec' => 'Broadband Optical Transmission Bench', 'status' => 'Online', 'access' => 'Spectroscopy Desk' ]
        ],
        'projects'    => [
            [ 'title' => 'Thermal Degradation Mitigation in Perovskite Solar Cells under Sahel Climates', 'desc' => 'Developing inorganic encapsulation barriers to protect perovskite-silicon tandem solar cells against tropical heat and humidity.', 'lead' => 'Engr. Dr. F. M. Okoro', 'status' => 'Active Phase II', 'sponsor' => 'Renewable Energy Innovation Fund' ],
            [ 'title' => 'Local Magnetron Sputter Deposition of Transparent Conductive Oxides (TCO)', 'desc' => 'Formulating domestic zinc oxide thin films to replace imported Indium Tin Oxide (ITO) for touchscreens and photovoltaic cells.', 'lead' => 'Dr. K. E. Adelekan', 'status' => 'Fabrication Run', 'sponsor' => 'NISTCO Materials Grant' ],
            [ 'title' => 'Solid-State Electrolyte Formulations for Lithium-Iron-Phosphate Batteries', 'desc' => 'Synthesizing ceramic solid electrolytes to enhance thermal stability and operational lifespan of domestic solar battery systems.', 'lead' => 'Dr. G. N. Chukwu', 'status' => 'Prototype Bench', 'sponsor' => 'Clean Tech Transfer Taskforce' ]
        ],
        'publications'=> [
            [ 'title' => 'Enhanced Photovoltaic Performance and Thermal Stability in Mixed-Halide Perovskite Cells via Atomic Layer Deposition', 'authors' => 'Okoro, F. M., Adelekan, K. E., & Chukwu, G. N.', 'journal' => 'Solar Energy Materials and Solar Cells, 2025', 'doi' => '10.1016/j.solmat.2025.112940' ],
            [ 'title' => 'Electrical Transport and Hall Effect Characterization of RF Magnetron Sputtered Al-Doped ZnO Thin Films', 'authors' => 'Okoro, F. M., & Danladi, B.', 'journal' => 'Materials Science in Semiconductor Processing, 2024', 'doi' => '10.1016/j.mssp.2024.108422' ]
        ],
        'faq'         => [
            [ 'q' => 'Can solar panel assemblers and importers submit panels for Class AAA flash certification?', 'a' => 'Yes. PARC performs standard IEC 60904 photovoltaic efficiency tests, temperature coefficient ratings, and electroluminescence crack detection for domestic commercial certification.' ],
            [ 'q' => 'What substrate sizes can be accommodated in the magnetron sputter coater?', 'a' => 'The multi-target vacuum coater accommodates circular wafers and glass substrates up to 150mm (6 inches) in diameter with multi-target sequential deposition.' ],
            [ 'q' => 'What parameters are determined by the Variable Temperature Hall Effect System?', 'a' => 'The system measures carrier concentration, sheet resistance, Hall coefficient, and carrier mobility across temperatures from 77 K (liquid nitrogen) up to 500 K.' ],
            [ 'q' => 'Does PARC offer testing for commercial battery storage systems?', 'a' => 'Yes. Our battery testing rigs conduct charge/discharge cycle stability, depth-of-discharge endurance, and thermal runaway monitoring.' ]
        ]
    ],
    'ntc' => [
        'acronym'     => 'NTC',
        'title'       => 'Nuclear Technology Centre',
        'mandate'     => 'National Radiation Protection, Dosimetry & Nuclear Metrology Mandate',
        'mandate_text'=> 'Designated under the Nuclear Safety and Radiation Protection Act 1995 as Nigeria’s apex Secondary Standards Dosimetry Laboratory (SSDL). NTC maintains national primary-traceable calibration reference beams, performs environmental isotope surveillance, and manages personal radiation badging services.',
        'pillars'     => [
            [ 'title' => 'National SSDL Sanctuary', 'desc' => 'Calibrating hospital radiotherapy and industrial nuclear measurement instruments.' ],
            [ 'title' => 'Environmental Metrology', 'desc' => 'Cryogenic HPGe spectrometry identifying radionuclide levels in soil and water.' ],
            [ 'title' => 'Occupational Safety', 'desc' => 'Issuing and analyzing monthly TLD dosimeters for radiation workers nationwide.' ]
        ],
        'telemetry'   => [
            'Dosimetry Metrology'      => 'National SSDL Secondary Standard',
            'Gamma Spectroscopy'       => 'Cryogenic HPGe Isotopic Detector',
            'Radiation Protection'     => 'IAEA Code 115 Compliance Audit',
            'Environmental Monitoring' => 'Continuous Baseline Radioactivity',
            'Calibration Benchmark'    => 'Secondary Standard Reference Beam'
        ],
        'director'    => 'Dr. H. B. Mohammed',
        'rank'        => 'Director of Radiation Metrology & Nuclear Standards',
        'email'       => 'ntc@nistco.gov.ng',
        'bio'         => 'Overseeing the national calibration of hospital radiotherapy equipment, industrial nuclear gauges, radiation safety audits, and baseline environmental isotope monitoring.',
        'facilities'  => [
            [ 'title' => 'Secondary Standards Dosimetry Laboratory (SSDL)', 'desc' => 'Federally designated secondary calibration laboratory providing primary-traceable calibration for ionizing radiation survey meters.', 'cert' => 'IAEA / WHO SSDL Network Accredited', 'access' => 'Hospital & Industrial Mandatory Call' ],
            [ 'title' => 'Gamma Spectrometry & Environmental Radioactivity Lab', 'desc' => 'Low-background cryogenically cooled High-Purity Germanium detectors evaluating radionuclide presence in soil, water, food, and minerals.', 'cert' => 'Environmental Safety Standard', 'access' => 'Mining & Environmental Audits' ],
            [ 'title' => 'Nuclear Instrumentation & Electronic Testing Bay', 'desc' => 'Precision repair, calibration, and electronic certification for scintillation probes, GM counters, and personal dosimetry readers.', 'cert' => 'National Metrology Certified', 'access' => 'Equipment Servicing Call' ]
        ],
        'equipment'   => [
            [ 'name' => 'ORTEC Cryogenic HPGe Gamma Detector', 'spec' => 'High-Resolution Radionuclide Spectroscopy', 'status' => 'Online', 'access' => 'Isotopic Evaluation' ],
            [ 'name' => 'Harshaw 3500 TLD Dosimetry Reader', 'spec' => 'Personal Occupational Radiation Badging', 'status' => 'Calibrated', 'access' => 'Safety Desk Registry' ],
            [ 'name' => 'Gamma Panoramic Reference Beam Irradiator', 'spec' => 'SSDL Secondary Standard Beam Calibration', 'status' => 'Online', 'access' => 'Accredited Calibration' ],
            [ 'name' => 'Alpha/Beta Low-Background Counter', 'spec' => 'Environmental Water and Soil Screening', 'status' => 'Verified', 'access' => 'Baseline Laboratory' ]
        ],
        'projects'    => [
            [ 'title' => 'National Secondary Standards Dosimetry Laboratory Accreditation & Inter-Comparison', 'desc' => 'Maintaining primary-traceable IAEA calibration standards for diagnostic radiology, radiation oncology, and radiation protection.', 'lead' => 'Dr. H. B. Mohammed', 'status' => 'Continuous National Protocol', 'sponsor' => 'IAEA / NNRA Mandate' ],
            [ 'title' => 'Baseline Radiological Mapping of Solid Minerals Mining Corridors in Central Nigeria', 'desc' => 'High-precision gamma spectrometry identifying naturally occurring radioactive materials (NORM) across artisanal and industrial mining basins.', 'lead' => 'Dr. A. O. Suleiman', 'status' => 'Field Phase II', 'sponsor' => 'Federal Ministry of Solid Minerals' ],
            [ 'title' => 'Occupational Thermoluminescent Dosimetry (TLD) Surveillance Infrastructure', 'desc' => 'Providing standardized monthly personal radiation monitoring badges for 1,200+ radiation workers in Nigerian healthcare and industrial sectors.', 'lead' => 'Engr. M. I. Garba', 'status' => 'Operational Routine', 'sponsor' => 'National Radiation Protection Desk' ]
        ],
        'publications'=> [
            [ 'title' => 'Traceability and Calibration Uncertainty Budgets in Secondary Standard Gamma-Ray Fields at NISTCO SSDL', 'authors' => 'Mohammed, H. B., Suleiman, A. O., & Garba, M. I.', 'journal' => 'Radiation Physics and Chemistry, 2025', 'doi' => '10.1016/j.radphyschem.2025.111980' ],
            [ 'title' => 'Assessment of Naturally Occurring Radionuclide Concentrations in Coltan and Cassiterite Mining Spoils Using High-Purity Germanium Detectors', 'authors' => 'Mohammed, H. B., & Usman, B. K.', 'journal' => 'Journal of Environmental Radioactivity, 2024', 'doi' => '10.1016/j.jenvrad.2024.107412' ]
        ],
        'faq'         => [
            [ 'q' => 'How can hospitals and industrial operators submit survey meters for SSDL calibration?', 'a' => 'Instruments can be delivered to the NTC SSDL Receiving Desk with prior online booking. Calibration is performed using Cs-137 or Co-60 beams with traceable certification issued in 3–5 working days.' ],
            [ 'q' => 'How does the personal TLD badging service work for healthcare personnel?', 'a' => 'Facilities enroll their staff in the National Dosimetry Registry. Harshaw TLD badges are mailed every 30 days; returned badges are read, dose-evaluated, and entered into official occupational dose records.' ],
            [ 'q' => 'Can mining or export companies submit mineral/water samples for radiological clearance?', 'a' => 'Yes. Samples undergo non-destructive gamma spectrometry on our cryogenic HPGe detector to measure Ra-226, Th-232, and K-40 specific activities with compliance export certificates.' ],
            [ 'q' => 'What radiation protection training does NTC provide for Radiation Safety Officers (RSOs)?', 'a' => 'NTC conducts periodic accredited RSO certification workshops covering radiation physics, regulatory compliance, dosimetric monitoring, and emergency response.' ]
        ]
    ],
    'aepc' => [
        'acronym'     => 'AEPC',
        'title'       => 'Advanced Engineering & Prototype Centre',
        'mandate'     => 'National Precision Tooling, CNC Machining & Additive Metallurgy Mandate',
        'mandate_text'=> 'Statutorily charged under Nigeria’s Industrial Revolution Plan with industrial reverse engineering, sub-micron precision machining (±0.005mm), 5-axis CNC prototyping, injection mold manufacturing, and direct metal laser sintering to empower local manufacturers.',
        'pillars'     => [
            [ 'title' => '5-Axis Precision Machining', 'desc' => 'High-tolerance fabrication of complex replacement components for industry.' ],
            [ 'title' => 'Additive Metal Prototyping', 'desc' => 'Direct metal laser sintering (DMLS) of functional titanium and steel parts.' ],
            [ 'title' => 'Tooling & Injection Molds', 'desc' => 'Wire EDM and CNC mold-making for pharmaceutical and industrial plastics.' ]
        ],
        'telemetry'   => [
            'Precision Machining'     => '5-Axis Simultaneous CNC Machining',
            'Machining Tolerance'     => '±0.005 mm Sub-Micron Accuracy',
            'Reverse Engineering'     => 'High-Speed Blue-Light 3D Scanner',
            'Additive Metallurgy'     => 'Direct Metal Laser Sintering (DMLS)',
            'Industrial Tooling Shop' => 'Hardened Tool Steel Wire EDM'
        ],
        'director'    => 'Engr. T. O. Adeleke',
        'rank'        => 'Director of Precision Engineering & Prototyping',
        'email'       => 'aepc@nistco.gov.ng',
        'bio'         => 'Directing industrial reverse engineering, high-precision component fabrication, mold and die tooling for manufacturing plants, and rapid metal additive prototyping.',
        'facilities'  => [
            [ 'title' => '5-Axis High-Precision CNC Machining Workshop', 'desc' => 'Heavy industrial multi-axis milling and turning centres fabricating high-tolerance replacement components for petrochemical, aerospace, and energy sectors.', 'cert' => 'High-Tolerance Engineering Standard', 'access' => 'Custom Industrial Tooling' ],
            [ 'title' => 'Additive Metallurgy & Rapid Prototyping Laboratory', 'desc' => 'Metal laser sintering and advanced polymer prototyping bays translating 3D CAD files into functional pre-production mechanical parts.', 'cert' => 'Advanced Prototyping Standard', 'access' => 'Invention Prototyping' ],
            [ 'title' => 'Industrial Mold Tooling & Assembly Bay', 'desc' => 'Spark erosion wire EDM and coordinate measuring machines fabricating high-wear precision injection molds and stamping dies.', 'cert' => 'Manufacturing Sector Certified', 'access' => 'Commercial Contract Tooling' ]
        ],
        'equipment'   => [
            [ 'name' => 'DMG MORI 5-Axis Simultaneous CNC Centre', 'spec' => 'Complex Geometric Component Milling', 'status' => 'Online', 'access' => 'Engineering Machining' ],
            [ 'name' => 'Mitutoyo CNC Coordinate Measuring Machine', 'spec' => '3D Sub-Micron Dimensional Inspection', 'status' => 'Calibrated', 'access' => 'Quality Inspection' ],
            [ 'name' => 'Heavy Spark Erosion Wire EDM System', 'spec' => 'Hardened Tool Steel Precision Cutting', 'status' => 'Online', 'access' => 'Mold & Die Shop' ],
            [ 'name' => 'Industrial Optical Blue-Light 3D Scanner', 'spec' => 'High-Density Mesh Reverse Engineering', 'status' => 'Verified', 'access' => 'Reverse Engineering Bay' ]
        ],
        'projects'    => [
            [ 'title' => 'Precision Reverse Engineering of Hydroelectric Turbine Impeller Runners', 'desc' => 'Laser scanning and 5-axis CNC machining of stainless steel Francis runner blades to replace imported obsolete components in federal power dams.', 'lead' => 'Engr. T. O. Adeleke', 'status' => 'Machining Phase', 'sponsor' => 'National Power Prototyping Compact' ],
            [ 'title' => 'Direct Metal Laser Sintering of Titanium Medical Implants', 'desc' => 'Additive manufacturing of patient-customized orthopedic cranial and hip replacement prosthetics utilizing medical-grade Ti-6Al-4V powder.', 'lead' => 'Engr. B. C. Okafor', 'status' => 'Clinical Prototyping', 'sponsor' => 'NISTCO Health Engineering Grant' ],
            [ 'title' => 'High-Precision Injection Mold Tooling for Pharmaceutical Plastic Packaging', 'desc' => 'Fabricating multi-cavity hardened tool-steel injection molds for domestic sterile pharmaceutical vial closures.', 'lead' => 'Engr. J. O. Salawu', 'status' => 'Commercial Delivery', 'sponsor' => 'Domestic Manufacturing Fund' ]
        ],
        'publications'=> [
            [ 'title' => 'Sub-Micron Toolpath Optimization and Surface Integrity in High-Speed 5-Axis Milling of Aerospace Grade Titanium Alloys', 'authors' => 'Adeleke, T. O., Okafor, B. C., & Salawu, J. O.', 'journal' => 'International Journal of Machine Tools and Manufacture, 2025', 'doi' => '10.1016/j.ijmachtools.2025.104190' ],
            [ 'title' => 'Comparative Dimensional Uncertainty Analysis of Blue-Light Optical Scanning versus Contact CMM in Mechanical Reverse Engineering', 'authors' => 'Adeleke, T. O., & Bello, M. A.', 'journal' => 'Precision Engineering, 2024', 'doi' => '10.1016/j.precisioneng.2024.08.012' ]
        ],
        'faq'         => [
            [ 'q' => 'Can local manufacturing companies contract AEPC to fabricate single replacement parts for broken machinery?', 'a' => 'Yes. Send the physical broken component or 3D CAD files. AEPC reverse-engineers the part via optical 3D scanning, verifies metallurgy, and machines the exact replacement on our 5-axis CNC.' ],
            [ 'q' => 'What dimensional tolerances can AEPC guarantee on machined components?', 'a' => 'Our 5-axis machining centres and Mitutoyo Coordinate Measuring Machine (CMM) certify tolerances down to ±0.005 mm (sub-micron precision) with comprehensive dimensional inspection certificates.' ],
            [ 'q' => 'What file formats are accepted for CNC machining and 3D printing orders?', 'a' => 'We accept standard STEP (.stp, .step), IGES (.igs), Parasolid (.x_t), and SolidWorks (.sldprt) files, as well as high-resolution STL files for additive manufacturing.' ],
            [ 'q' => 'Does AEPC provide metallurgical certification for machined parts?', 'a' => 'Yes. AEPC provides full material composition certificates, hardness testing, and dimensional inspection reports.' ]
        ]
    ]
];

$slug = get_post_field( 'post_name', get_the_ID() );
if ( ! array_key_exists( $slug, $profiles ) ) { $slug = 'carc'; }

$data = $profiles[$slug];
$theme_class = 'division-theme-' . sanitize_html_class( $slug );
?>

<main class="centre-portal-main <?php echo esc_attr( $theme_class ); ?>">

    <!-- 1. DIVISION HERO WITH BESPOKE 3D VECTOR INSIGNIAS -->
    <header class="centre-hero">
        <div class="centre-container">
            <nav class="centre-breadcrumb" aria-label="Breadcrumb">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <span>/</span>
                <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>">Centres</a>
                <span>/</span>
                <span style="color: var(--centre-accent);"><?php echo esc_html( $data['acronym'] ); ?></span>
            </nav>

            <div class="centre-hero-grid">
                <div>
                    <span class="centre-pill-badge">
                        <span>●</span>
                        <span><?php echo esc_html( $data['acronym'] ); ?> • APEX RESEARCH DIVISION</span>
                    </span>

                    <h1 class="centre-hero-title"><?php echo esc_html( $data['title'] ); ?></h1>

                    <p class="centre-hero-lead">
                        <?php echo esc_html( $data['mandate'] ); ?>. Executing frontier multidisciplinary investigations,
                        operating commercial demonstration pilot plants, and establishing indigenous technological self-reliance.
                    </p>

                    <div class="centre-hero-actions">
                        <a href="#facilities" class="btn-nistco btn-prime">
                            Explore Laboratories & Facilities &rarr;
                        </a>
                        <a href="#booking" class="btn-nistco btn-ghost">
                            Book Facility / Request Service
                        </a>
                    </div>
                </div>

                <!-- Division Telemetry HUD with Dedicated 3D Insignia -->
                <div class="centre-telemetry-hud">
                    <div class="insignia-badge-stage">
                        <div class="insignia-svg-box">
                            <?php if ( $slug === 'amsarc' ) : ?>
                                <!-- AMSARC: 3D Isometric Tensor Lattice / Supercomputing Hypercube -->
                                <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <polygon class="anim-spin-cw" points="60,10 102,34 102,86 60,110 18,86 18,34" stroke="var(--centre-accent)" stroke-width="2.5"/>
                                    <polygon class="anim-spin-ccw" points="60,26 86,41 86,79 60,94 34,79 34,41" stroke="#ffffff" stroke-width="1.8" stroke-dasharray="5 3"/>
                                    <line x1="60" y1="10" x2="60" y2="26" stroke="var(--centre-accent)" stroke-width="2"/>
                                    <line x1="102" y1="34" x2="86" y2="41" stroke="var(--centre-accent)" stroke-width="2"/>
                                    <line x1="102" y1="86" x2="86" y2="79" stroke="var(--centre-accent)" stroke-width="2"/>
                                    <line x1="60" y1="110" x2="60" y2="94" stroke="var(--centre-accent)" stroke-width="2"/>
                                    <line x1="18" y1="86" x2="34" y2="79" stroke="var(--centre-accent)" stroke-width="2"/>
                                    <line x1="18" y1="34" x2="34" y2="41" stroke="var(--centre-accent)" stroke-width="2"/>
                                    <circle class="anim-pulse" cx="60" cy="60" r="10" fill="var(--centre-accent)"/>
                                </svg>
                            <?php elseif ( $slug === 'carc' ) : ?>
                                <!-- CARC: 3D Hexagonal Molecular Cage / Polymer Ring with Orbiting Covalent Bonds -->
                                <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <polygon class="anim-spin-cw" points="60,12 100,35 100,85 60,108 20,85 20,35" stroke="var(--centre-accent)" stroke-width="2.8"/>
                                    <circle class="anim-spin-ccw" cx="60" cy="60" r="32" stroke="#ffffff" stroke-width="1.8" stroke-dasharray="6 4"/>
                                    <circle class="anim-pulse" cx="60" cy="60" r="12" fill="var(--centre-accent)"/>
                                    <circle class="anim-orbit" cx="100" cy="35" r="5" fill="#ffffff"/>
                                    <circle class="anim-orbit" cx="20" cy="85" r="5" fill="#ffffff"/>
                                    <circle class="anim-orbit" cx="60" cy="12" r="5" fill="var(--centre-accent)"/>
                                </svg>
                            <?php elseif ( $slug === 'barc' ) : ?>
                                <!-- BARC: 3D Double Helix Bioprocess Ribbon with Glowing Metabolic Nodes -->
                                <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse class="anim-spin-cw" cx="60" cy="60" rx="48" ry="18" transform="rotate(45 60 60)" stroke="var(--centre-accent)" stroke-width="2.5"/>
                                    <ellipse class="anim-spin-ccw" cx="60" cy="60" rx="48" ry="18" transform="rotate(-45 60 60)" stroke="#38bdf8" stroke-width="2.2"/>
                                    <line x1="38" y1="38" x2="82" y2="82" stroke="#ffffff" stroke-width="1.8" stroke-dasharray="3 3"/>
                                    <line x1="82" y1="38" x2="38" y2="82" stroke="#ffffff" stroke-width="1.8" stroke-dasharray="3 3"/>
                                    <circle class="anim-pulse" cx="60" cy="60" r="11" fill="var(--centre-accent)"/>
                                    <circle cx="26" cy="26" r="4" fill="#38bdf8"/>
                                    <circle cx="94" cy="94" r="4" fill="var(--centre-accent)"/>
                                </svg>
                            <?php elseif ( $slug === 'parc' ) : ?>
                                <!-- PARC: 3D Quantum Photonic & High-Vacuum Sputter Chamber Lattice -->
                                <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle class="anim-spin-slow" cx="60" cy="60" r="48" stroke="var(--centre-accent)" stroke-width="2.5" stroke-dasharray="8 6"/>
                                    <polygon class="anim-spin-ccw" points="60,18 95,82 25,82" stroke="#ffffff" stroke-width="2"/>
                                    <polygon class="anim-spin-cw" points="60,102 25,38 95,38" stroke="var(--centre-accent)" stroke-width="1.5" opacity="0.7"/>
                                    <circle class="anim-pulse" cx="60" cy="60" r="10" fill="var(--centre-accent)"/>
                                    <line x1="12" y1="60" x2="108" y2="60" stroke="var(--centre-accent)" stroke-width="1.5" stroke-dasharray="4 4"/>
                                </svg>
                            <?php elseif ( $slug === 'ntc' ) : ?>
                                <!-- NTC: 3D Rutherford-Bohr Nuclear Atomic Orbital with Glowing Isotope Core -->
                                <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <ellipse class="anim-spin-cw" cx="60" cy="60" rx="50" ry="16" stroke="var(--centre-accent)" stroke-width="2.5"/>
                                    <ellipse class="anim-spin-ccw" cx="60" cy="60" rx="50" ry="16" transform="rotate(60 60 60)" stroke="#ffffff" stroke-width="2"/>
                                    <ellipse class="anim-spin-cw" cx="60" cy="60" rx="50" ry="16" transform="rotate(120 60 60)" stroke="var(--centre-accent)" stroke-width="2"/>
                                    <circle class="anim-pulse" cx="60" cy="60" r="13" fill="var(--centre-accent)"/>
                                    <circle cx="110" cy="60" r="4" fill="#ffffff"/>
                                </svg>
                            <?php else : ?>
                                <!-- AEPC: 3D 5-Axis CNC Milling Gyroscope with Precision Gimbal Rings -->
                                <svg viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle class="anim-spin-cw" cx="60" cy="60" r="48" stroke="var(--centre-accent)" stroke-width="2.8" stroke-dasharray="12 4"/>
                                    <rect class="anim-spin-ccw" x="30" y="30" width="60" height="60" rx="8" stroke="#ffffff" stroke-width="2"/>
                                    <ellipse class="anim-spin-cw" cx="60" cy="60" rx="42" ry="18" stroke="var(--centre-accent)" stroke-width="1.8"/>
                                    <circle class="anim-pulse" cx="60" cy="60" r="10" fill="var(--centre-accent)"/>
                                    <line x1="60" y1="12" x2="60" y2="108" stroke="#ffffff" stroke-width="1.5"/>
                                </svg>
                            <?php endif; ?>
                        </div>
                    </div>

                    <div class="hud-header">
                        <h3>Operational Telemetry</h3>
                        <span class="hud-live-tag">Systems Active</span>
                    </div>

                    <div class="hud-metrics-list">
                        <?php foreach ( $data['telemetry'] as $label => $stat ) : ?>
                        <div class="hud-metric-row">
                            <span class="hud-metric-label"><?php echo esc_html( $label ); ?></span>
                            <span class="hud-metric-value"><?php echo esc_html( $stat ); ?></span>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- 2. STICKY DIVISION NAVIGATION -->
    <nav class="centre-sticky-nav" aria-label="Division In-Page Navigation">
        <div class="centre-container">
            <div class="centre-nav-scroll-track">
                <a href="#mandate" class="centre-nav-item active">Statutory Mandate</a>
                <a href="#facilities" class="centre-nav-item">3D Infrastructure</a>
                <a href="#booking" class="centre-nav-item">Facility Booking</a>
                <a href="#equipment" class="centre-nav-item">Instrumentation</a>
                <a href="#projects" class="centre-nav-item">Projects</a>
                <a href="#publications" class="centre-nav-item">Publications</a>
                <a href="#directorate" class="centre-nav-item">Directorate</a>
                <a href="#faq" class="centre-nav-item">FAQ Accordion</a>
            </div>
        </div>
    </nav>

    <!-- 3. STATUTORY MANDATE & NATIONAL MISSION -->
    <section id="mandate" class="centre-section">
        <div class="centre-container">
            <div class="mandate-dossier-card">
                <div>
                    <span class="section-eyebrow">Federal Mission & Legal Charter</span>
                    <h2 style="font-size: 2.1rem; font-weight: 900; margin: 0 0 1.25rem 0; color: #ffffff;">
                        <?php echo esc_html( $data['acronym'] ); ?> Strategic Mandate
                    </h2>
                    <p style="color: #94a3b8; font-size: 1.05rem; line-height: 1.75; margin-bottom: 2rem;">
                        <?php echo esc_html( $data['mandate_text'] ); ?>
                    </p>
                    <a href="#booking" class="btn-nistco btn-prime">
                        Engage Technical Directorate &rarr;
                    </a>
                </div>

                <div class="mandate-pillars-list">
                    <?php foreach ( $data['pillars'] as $pillar ) : ?>
                    <div class="mandate-pillar-item">
                        <h4><?php echo esc_html( $pillar['title'] ); ?></h4>
                        <p><?php echo esc_html( $pillar['desc'] ); ?></p>
                    </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. 3D INFRASTRUCTURE & SPECIALIZED LABORATORIES -->
    <section id="facilities" class="centre-section centre-section-alt">
        <div class="centre-container">
            <span class="section-eyebrow">Physical Infrastructure</span>
            <h2 class="section-lead-title">Physical Infrastructure & 3D Architectural Blueprint</h2>
            <p class="section-summary-text">
                Certified cleanrooms, pilot-scale synthesis units, and precision laboratories operating within the Sheda Technology Sanctuary.
            </p>

            <!-- 3D Infrastructure Blueprint Stage -->
            <div class="infrastructure-hero-stage">
                <div class="infra-blueprint-box">
                    <svg class="infra-blueprint-svg" viewBox="0 0 100 100" fill="none" stroke="var(--centre-accent)" stroke-width="1.8">
                        <polygon points="50,15 90,35 90,75 50,95 10,75 10,35" stroke-dasharray="4 2"/>
                        <polygon points="50,30 75,42 75,68 50,80 25,68 25,42" fill="rgba(var(--centre-rgb), 0.1)"/>
                        <line x1="50" y1="15" x2="50" y2="95"/>
                        <line x1="10" y1="35" x2="90" y2="75"/>
                        <line x1="10" y1="75" x2="90" y2="35"/>
                        <circle cx="50" cy="55" r="8" fill="var(--centre-accent)"/>
                    </svg>
                </div>

                <div>
                    <h3 style="font-size: 1.5rem; font-weight: 800; color: #ffffff; margin: 0 0 0.75rem 0;">
                        <?php echo esc_html( $data['acronym'] ); ?> Core Facility Blueprint
                    </h3>
                    <p style="color: #94a3b8; font-size: 0.98rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        Our modular engineering layout adheres to international ISO cleanroom standards, high-vacuum vibration isolation, and isolated clean power feeds from the NISTCO dedicated solar microgrid.
                    </p>
                    <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                        <a href="#booking" class="btn-nistco btn-prime">Schedule Facility Tour &rarr;</a>
                        <a href="#equipment" class="btn-nistco btn-ghost">Analytical Registry</a>
                    </div>
                </div>
            </div>

            <!-- Specialized Facilities Grid -->
            <div class="facilities-grid-layout">
                <?php foreach ( $data['facilities'] as $index => $fac ) : ?>
                <div class="facility-terminal-card">
                    <div class="facility-icon-stage">
                        <svg class="facility-icon-svg" viewBox="0 0 64 64" fill="none" stroke="var(--centre-accent)" stroke-width="2">
                            <?php if ( $index === 0 ) : ?>
                                <rect x="12" y="16" width="40" height="32" rx="4"/>
                                <line x1="12" y1="28" x2="52" y2="28"/>
                                <circle cx="20" cy="22" r="2" fill="var(--centre-accent)"/>
                                <circle cx="28" cy="22" r="2" fill="#fff"/>
                            <?php elseif ( $index === 1 ) : ?>
                                <path d="M22 48L32 16L42 48Z"/>
                                <line x1="26" y1="36" x2="38" y2="36"/>
                                <circle cx="32" cy="42" r="2" fill="#fff"/>
                            <?php else : ?>
                                <path d="M12 48V24L32 12L52 24V48Z"/>
                                <circle cx="32" cy="34" r="6" stroke-dasharray="2 2"/>
                            <?php endif; ?>
                        </svg>
                    </div>

                    <div>
                        <h3><?php echo esc_html( $fac['title'] ); ?></h3>
                        <p><?php echo esc_html( $fac['desc'] ); ?></p>
                    </div>
                    <div class="facility-footer-meta">
                        <span class="facility-cert-badge">● <?php echo esc_html( $fac['cert'] ); ?></span>
                        <span class="facility-access-tag"><?php echo esc_html( $fac['access'] ); ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 5. FACILITY REQUISITION & BOOKING FORM -->
    <section id="booking" class="centre-section">
        <div class="centre-container">
            <div class="booking-dossier-card">
                <span class="section-eyebrow">Institutional Access</span>
                <h2 class="section-lead-title" style="margin-bottom: 2rem;">
                    <?php echo esc_html( $data['acronym'] ); ?> Facility Requisition & Booking Form
                </h2>

                <form id="facilityBookingForm" class="booking-form-grid">
                    <div class="form-group">
                        <label for="reqName">Lead Investigator / Representative Name *</label>
                        <input type="text" id="reqName" class="form-control" placeholder="Prof. Jane Doe" required>
                    </div>

                    <div class="form-group">
                        <label for="reqInst">Institution / Enterprise Name *</label>
                        <input type="text" id="reqInst" class="form-control" placeholder="University / Industrial Corp" required>
                    </div>

                    <div class="form-group">
                        <label for="reqFacility">Target Facility / Laboratory Suite *</label>
                        <select id="reqFacility" class="form-control" required>
                            <option value="">-- Select Division Facility --</option>
                            <?php foreach ( $data['facilities'] as $fac ) : ?>
                                <option value="<?php echo esc_attr( $fac['title'] ); ?>"><?php echo esc_html( $fac['title'] ); ?></option>
                            <?php endforeach; ?>
                            <option value="General Instrumentation">General Analytical Instrumentation</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="reqDate">Proposed Start Date *</label>
                        <input type="date" id="reqDate" class="form-control" required>
                    </div>

                    <div class="form-group full-width">
                        <label for="reqObjective">Research Objective / Pilot Run Parameters *</label>
                        <textarea id="reqObjective" class="form-control" rows="4" placeholder="Detail sample volume, desired precision tolerances, testing specifications, or pilot batch objectives..." required></textarea>
                    </div>

                    <div class="form-group full-width booking-submit-wrap">
                        <button type="submit" class="btn-nistco btn-prime">
                            Submit Requisition Request &rarr;
                        </button>
                        <span id="bookingStatusMsg" class="booking-status-msg"></span>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- 6. PRECISION INSTRUMENTATION MATRIX -->
    <section id="equipment" class="centre-section centre-section-alt">
        <div class="centre-container">
            <span class="section-eyebrow">Analytical Registry</span>
            <h2 class="section-lead-title">Scientific Instrumentation & Analytical Suites</h2>

            <div style="overflow-x: auto;">
                <table class="equipment-registry-table">
                    <thead>
                        <tr>
                            <th>Instrumentation / Machine</th>
                            <th>Technical Specifications</th>
                            <th>Operational Status</th>
                            <th>Access Scheduling</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ( $data['equipment'] as $item ) : ?>
                        <tr>
                            <td>
                                <span class="equipment-title"><?php echo esc_html( $item['name'] ); ?></span>
                                <span style="font-size: 0.75rem; color: #64748b;">NISTCO Asset Id: Verified</span>
                            </td>
                            <td><?php echo esc_html( $item['spec'] ); ?></td>
                            <td><span class="status-indicator-active"><?php echo esc_html( $item['status'] ); ?></span></td>
                            <td><?php echo esc_html( $item['access'] ); ?></td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <!-- 7. STRATEGIC RESEARCH PROJECTS -->
    <section id="projects" class="centre-section">
        <div class="centre-container">
            <span class="section-eyebrow">National Investigations</span>
            <h2 class="section-lead-title">Active Strategic Research Projects & Scale-Ups</h2>

            <div class="projects-matrix-grid">
                <?php foreach ( $data['projects'] as $proj ) : ?>
                <div class="project-dossier-card">
                    <div>
                        <span class="project-status-pill">
                            <span>●</span> <?php echo esc_html( $proj['status'] ); ?>
                        </span>
                        <h3 class="project-title"><?php echo esc_html( $proj['title'] ); ?></h3>
                        <p class="project-desc"><?php echo esc_html( $proj['desc'] ); ?></p>
                    </div>
                    <div class="project-meta-row">
                        <span>Lead: <strong><?php echo esc_html( $proj['lead'] ); ?></strong></span>
                        <span><?php echo esc_html( $proj['sponsor'] ); ?></span>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 8. PEER-REVIEWED PUBLICATIONS -->
    <section id="publications" class="centre-section centre-section-alt">
        <div class="centre-container">
            <span class="section-eyebrow">Scholarly Output</span>
            <h2 class="section-lead-title">Peer-Reviewed Publications & Monographs</h2>

            <div class="publications-list-wrap">
                <?php foreach ( $data['publications'] as $pub ) : ?>
                <div class="publication-item-row">
                    <div>
                        <span class="publication-year-badge"><?php echo esc_html( $pub['journal'] ); ?></span>
                        <h3 class="publication-title"><?php echo esc_html( $pub['title'] ); ?></h3>
                        <div class="publication-authors"><?php echo esc_html( $pub['authors'] ); ?></div>
                        <span class="publication-journal">DOI: <?php echo esc_html( $pub['doi'] ); ?></span>
                    </div>
                    <div>
                        <a href="<?php echo esc_url( 'https://doi.org/' . $pub['doi'] ); ?>" target="_blank" rel="noopener noreferrer" class="btn-nistco btn-ghost" style="padding: 0.6rem 1.25rem; font-size: 0.85rem;">
                            View Article &rarr;
                        </a>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <!-- 9. DIRECTORATE & SCIENTIFIC FELLOWS -->
    <section id="directorate" class="centre-section">
        <div class="centre-container">
            <span class="section-eyebrow">Leadership</span>
            <h2 class="section-lead-title">Directorate & Principal Investigators</h2>

            <div class="directorate-dossier-card">
                <div class="directorate-avatar-wrap">
                    <?php if ( $slug === 'amsarc' ) : ?>
                        <svg viewBox="0 0 64 64" fill="none" stroke="var(--centre-accent)" stroke-width="1.5">
                            <path d="M32 8L52 20V44L32 56L12 44V20L32 8Z"/>
                            <circle cx="32" cy="32" r="8" fill="var(--centre-glow)"/>
                        </svg>
                    <?php elseif ( $slug === 'barc' ) : ?>
                        <svg viewBox="0 0 64 64" fill="none" stroke="var(--centre-accent)" stroke-width="1.5">
                            <path d="M32 56C32 56 12 40 12 24C12 12 32 8 32 8C32 8 52 12 52 24C52 40 32 56 32 56Z"/>
                            <path d="M32 56V24"/>
                        </svg>
                    <?php elseif ( $slug === 'carc' ) : ?>
                        <svg viewBox="0 0 64 64" fill="none" stroke="var(--centre-accent)" stroke-width="1.5">
                            <circle cx="20" cy="20" r="8" fill="var(--centre-glow)"/>
                            <circle cx="44" cy="20" r="8"/>
                            <circle cx="32" cy="44" r="8" fill="var(--centre-glow)"/>
                            <line x1="26" y1="20" x2="36" y2="20"/>
                        </svg>
                    <?php elseif ( $slug === 'parc' ) : ?>
                        <svg viewBox="0 0 64 64" fill="none" stroke="var(--centre-accent)" stroke-width="1.5">
                            <circle cx="32" cy="32" r="24" stroke-dasharray="4 4"/>
                            <circle cx="32" cy="32" r="10" fill="var(--centre-glow)"/>
                        </svg>
                    <?php elseif ( $slug === 'ntc' ) : ?>
                        <svg viewBox="0 0 64 64" fill="none" stroke="var(--centre-accent)" stroke-width="1.5">
                            <ellipse cx="32" cy="32" rx="26" ry="10" transform="rotate(45 32 32)"/>
                            <ellipse cx="32" cy="32" rx="26" ry="10" transform="rotate(-45 32 32)"/>
                            <circle cx="32" cy="32" r="6" fill="var(--centre-accent)"/>
                        </svg>
                    <?php else : ?>
                        <svg viewBox="0 0 64 64" fill="none" stroke="var(--centre-accent)" stroke-width="1.5">
                            <circle cx="32" cy="32" r="20"/>
                            <circle cx="32" cy="32" r="8" fill="var(--centre-glow)" stroke-dasharray="2 2"/>
                        </svg>
                    <?php endif; ?>
                    <div class="directorate-badge-ribbon"><?php echo esc_html( $data['acronym'] ); ?> Director</div>
                </div>

                <div class="directorate-profile-info">
                    <h3><?php echo esc_html( $data['director'] ); ?></h3>
                    <span class="directorate-rank-spec"><?php echo esc_html( $data['rank'] ); ?></span>
                    <p class="directorate-bio-text"><?php echo esc_html( $data['bio'] ); ?></p>

                    <div class="directorate-meta-columns">
                        <div class="meta-col">
                            <strong>Institutional Desk</strong>
                            <a href="mailto:<?php echo esc_attr( $data['email'] ); ?>"><?php echo esc_html( $data['email'] ); ?></a>
                        </div>
                        <div class="meta-col">
                            <strong>Complex Location</strong>
                            <span>Sheda Sanctuary, Abuja</span>
                        </div>
                        <div class="meta-col">
                            <strong>Academic Collaboration</strong>
                            <span style="color: var(--centre-accent);">Open for Residency</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 10. FREQUENTLY ASKED QUESTIONS (MINIMUM 4 UNIQUE PER CENTRE) -->
    <section id="faq" class="centre-section centre-section-alt">
        <div class="centre-container">
            <div style="text-align: center; margin-bottom: 3.5rem;">
                <span class="section-eyebrow">Advisory & Compliance</span>
                <h2 class="section-lead-title" style="margin: 0 auto 1rem auto;">Frequently Asked Questions</h2>
                <p class="section-summary-text" style="margin: 0 auto;">
                    Standard operational protocols, residency applications, analytical tolerances, and partnership guidelines for <?php echo esc_html( $data['acronym'] ); ?>.
                </p>
            </div>

            <div class="faq-accordion-container">
                <?php foreach ( $data['faq'] as $index => $item ) : ?>
                <div class="faq-item <?php echo $index === 0 ? 'active' : ''; ?>">
                    <button class="faq-question-btn" type="button" aria-expanded="<?php echo $index === 0 ? 'true' : 'false'; ?>">
                        <span><?php echo esc_html( $item['q'] ); ?></span>
                        <span class="faq-toggle-icon">+</span>
                    </button>
                    <div class="faq-answer-pane">
                        <p><?php echo esc_html( $item['a'] ); ?></p>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
