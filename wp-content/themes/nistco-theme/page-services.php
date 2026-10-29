<?php
/**
 * Template Name: Laboratory & Technical Services
 * Description: Refactored 3D Laboratory Testing & Interactive Colorful 3D Digital Twin Modeling Studio.
 */
defined( 'ABSPATH' ) || exit;

get_header();

$services_css_path = get_template_directory() . '/assets/css/page-services.css';

$modeling_units = [
    [
        'code'      => 'AMSARC • PINNs 3D MESH',
        'icon'      => '💻',
        'title'     => 'PINNs Aerodynamic & Structural Flow Modeling',
        'desc'      => 'Real-time 3D Physics-Informed Neural Network fluid simulation mapping supersonic turbulence vectors and structural shear stress.',
        'metric'    => '1.2M Nodes / Sec',
        'software'  => 'NASTCO-PINN Solver v4',
        'hud'       => 'MESH: 4,096 POLY • MACH 2.4',
        'theme'     => 'color-theme-cyan'
    ],
    [
        'code'      => 'BARC • BIO-FOLD 3D',
        'icon'      => '🧬',
        'title'     => 'Genomic Helix & Enzyme Docking Modeling',
        'desc'      => 'Predictive 3D protein folding and receptor docking for thermotolerant cassava bio-ethanol enzymes and disease-resistant seed strains.',
        'metric'    => '99.4% Affinity Match',
        'software'  => 'BioDock Molecular Core',
        'hud'       => 'HELIX RMSD: 0.42 Å • 312 K',
        'theme'     => 'color-theme-emerald'
    ],
    [
        'code'      => 'CARC • ZEOLITE CAGE',
        'icon'      => '⚗️',
        'title'     => 'Crystalline Zeolite Pore & Catalyst Modeling',
        'desc'      => 'Atomic-scale 3D lattice simulation of aluminosilicate zeolite cages optimizing heavy crude hydrocarbon cracking selectivity.',
        'metric'    => '0.1 Angstrom Precision',
        'software'  => 'ChemLattice DFT Suite',
        'hud'       => 'PORE DIA: 7.4 Å • Si/Al 12:1',
        'theme'     => 'color-theme-gold'
    ],
    [
        'code'      => 'PARC • PHOTON TWIN',
        'icon'      => '☀️',
        'title'     => 'Bifacial Perovskite Bandgap Ray-Tracing',
        'desc'      => '3D optical ray-tracing and charge-carrier transport modeling across multi-junction perovskite-silicon solar modules under Sahelian heat.',
        'metric'    => '+21.4% Conversion Efficiency',
        'software'  => 'OptoTwin RayTracer',
        'hud'       => 'BANDGAP: 1.68 eV • 45°C',
        'theme'     => 'color-theme-violet'
    ],
    [
        'code'      => 'AEPC • 5-AXIS CAM',
        'icon'      => '⚙️',
        'title'     => '5-Axis CNC Toolpath & Metallurgy Stress Twin',
        'desc'      => 'Full kinematic 3D collision detection, finite-element thermal stress analysis, and CNC G-code verification prior to foundry machining.',
        'metric'    => '±0.001mm Tolerance',
        'software'  => 'SovereignCAM Digital Twin',
        'hud'       => 'SPINDLE: 18,000 RPM • Ti-6Al-4V',
        'theme'     => 'color-theme-cobalt'
    ],
    [
        'code'      => 'NTC • MONTE CARLO GIF',
        'icon'      => '☢️',
        'title'     => 'Cobalt-60 Gamma Isodose 3D Mapping',
        'desc'      => 'Monte Carlo 3D radiation transport modeling computing exact photon attenuation and isodose contours inside palletized agro-export loads.',
        'metric'    => 'IAEA & NNRA Certified',
        'software'  => 'GammaFlux MCNP Core',
        'hud'       => 'DOSE: 2.5 kGy • Co-60 ARRAY',
        'theme'     => 'color-theme-crimson'
    ]
];

$services = [
    [
        'code'        => 'NTC • GAMMA GIF',
        'centre'      => 'Nuclear Technology Centre',
        'icon'        => '☢️',
        'title'       => 'Cobalt-60 Gamma Irradiation & Sterilization',
        'desc'        => 'High-throughput gamma ray exposure for microbial decontamination of agricultural commodity exports and medical device bio-burden reduction.',
        'pricing'     => '₦150,000 / Batch',
        'turnaround'  => '48 Hours',
        'theme'       => 'color-theme-crimson'
    ],
    [
        'code'        => 'CARC • SPECTROMETRY',
        'centre'      => 'Chemistry Advanced Research Centre',
        'icon'        => '⚗️',
        'title'       => 'GC-MS & FTIR Chemical Assaying',
        'desc'        => 'Precise chromatographic separation and molecular identification for petrochemical distillates, mineral ores, and pharmaceutical purity testing.',
        'pricing'     => '₦75,000 / Sample',
        'turnaround'  => '3 Working Days',
        'theme'       => 'color-theme-gold'
    ],
    [
        'code'        => 'BARC • GENOMICS',
        'centre'      => 'Biotechnology Advanced Research Centre',
        'icon'        => '🧬',
        'title'       => 'Genomic PCR Sequencing & Diagnostics',
        'desc'        => 'High-sensitivity molecular pathogen detection, crop genotyping, and microbial strain verification using state-of-the-art thermal cyclers.',
        'pricing'     => '₦90,000 / Assay',
        'turnaround'  => '5 Working Days',
        'theme'       => 'color-theme-emerald'
    ],
    [
        'code'        => 'AEPC • CNC FOUNDRY',
        'centre'      => 'Advanced Engineering & Prototyping Centre',
        'icon'        => '⚙️',
        'title'       => 'Multi-Axis Precision CNC Machining',
        'desc'        => 'Custom alloy casting, hard-die milling, and precision component fabrication for heavy agricultural and industrial processing machinery.',
        'pricing'     => 'Quote on Blueprint',
        'turnaround'  => '7 - 14 Days',
        'theme'       => 'color-theme-cobalt'
    ],
    [
        'code'        => 'PARC • PHOTOVOLTAIC',
        'centre'      => 'Physics Advanced Research Centre',
        'icon'        => '☀️',
        'title'       => 'Solar Module & Laser Calibration',
        'desc'        => 'Tropical irradiance stress-testing for photovoltaic cells and certified optical calibration for industrial lasers and sensors.',
        'pricing'     => '₦60,000 / Unit',
        'turnaround'  => '48 Hours',
        'theme'       => 'color-theme-violet'
    ],
    [
        'code'        => 'AMSARC • HPC CFD',
        'centre'      => 'Applied Mathematics & Simulation Centre',
        'icon'        => '💻',
        'title'       => 'PINNs Numerical & CFD Simulation',
        'desc'        => 'High-Performance Computing (HPC) aerodynamic stress analysis, fluid flow simulation, and structural load modeling without mesh bottlenecks.',
        'pricing'     => '₦250,000 / Project',
        'turnaround'  => '5 Working Days',
        'theme'       => 'color-theme-cyan'
    ]
];
?>

<?php if ( file_exists( $services_css_path ) ) : ?>
<style id="nastco-services-inline-guaranteed">
<?php echo file_get_contents( $services_css_path ); ?>
</style>
<?php endif; ?>

<main id="primary" class="site-main nastco-services-wrapper">
    
    <section class="services-hero-section">
        <div class="services-container">
            
            <!-- Masthead -->
            <div class="services-hero-header">
                <div class="services-badge-3d">
                    <span class="pulse-dot-green"></span>
                    <span>NATIONAL ACCREDITED TESTING, CALIBRATION &amp; 3D DIGITAL TWIN HUB</span>
                </div>
                <h1 class="services-title text-3d-extrude">
                    Industrial Laboratory Services &amp; <span class="text-rainbow-3d">Colorful 3D Digital Modeling</span>
                </h1>
                <p class="services-subtitle text-3d-relief">
                    Experience real-time 3D computational modeling, molecular simulation, and ISO-certified laboratory testing engineered across NASTCO’s six specialized research directorates.
                </p>
            </div>

            <!-- ==========================================================
                 SECTION 1: INTERACTIVE 3D DIGITAL TWIN MODELING STUDIO
                 ========================================================== -->
            <div class="abt-card-3d modeling-studio-3d color-theme-cyan">
                <div class="studio-viewport-box">
                    <div class="viewport-hud-top">
                        <span class="hud-tag" id="hudModelName">MODEL: AMSARC PINNs SUPERSONIC MESH</span>
                        <span class="hud-tag" style="color:#34d399; border-color:rgba(52,211,153,0.4);">● GPU CLUSTER: ACTIVE</span>
                    </div>
                    <canvas id="nastco3dModelCanvas" width="720" height="360"></canvas>
                    <div class="viewport-hud-bottom">
                        <span id="hudVertices">VERTICES: 2,048 • 60 FPS</span>
                        <span>SHEDA HPC NODE: HPE-GEN10-PLUS</span>
                    </div>
                </div>

                <div class="studio-controls-panel">
                    <div>
                        <span class="srv-eyebrow">INTERACTIVE HOLOGRAPHIC VIEWPORT</span>
                        <h3 class="text-3d-extrude" style="font-size:1.35rem; margin:0 0 0.4rem; color:#fff;">3D Digital Twin Visualizer</h3>
                        <p style="font-size:0.85rem; color:#cbd5e1; margin:0 0 0.9rem;">Select any directorate simulation model below to inspect its live 3D geometry and adjust solver parameters.</p>
                        
                        <div class="model-selector-pills" id="studioModelSelectors">
                            <button type="button" class="model-pill-btn active" data-model="torus" data-label="AMSARC PINNs Supersonic Mesh">💻 AMSARC CFD Torus</button>
                            <button type="button" class="model-pill-btn" data-model="helix" data-label="BARC Genomic Double Helix">🧬 BARC DNA Helix</button>
                            <button type="button" class="model-pill-btn" data-model="lattice" data-label="CARC Zeolite Crystal Cage">⚗️ CARC Zeolite Lattice</button>
                            <button type="button" class="model-pill-btn" data-model="solar" data-label="PARC Perovskite Photon Array">☀️ PARC Solar Matrix</button>
                            <button type="button" class="model-pill-btn" data-model="cnc" data-label="AEPC 5-Axis Turbine Rig">⚙️ AEPC CNC Turbine</button>
                            <button type="button" class="model-pill-btn" data-model="gamma" data-label="NTC Cobalt-60 Isodose Sphere">☢️ NTC Gamma Flux</button>
                        </div>
                    </div>

                    <div class="studio-sliders-box">
                        <div class="studio-slider-row">
                            <label><span>Mesh Density / Node Resolution</span> <span id="densityReadout">2,048 Nodes</span></label>
                            <input type="range" id="studioDensitySlider" min="512" max="4096" step="256" value="2048">
                        </div>
                        <div class="studio-slider-row">
                            <label><span>3D Orbital Rotation Velocity</span> <span id="speedReadout">1.5x</span></label>
                            <input type="range" id="studioSpeedSlider" min="2" max="40" step="2" value="15">
                        </div>
                    </div>

                    <div class="studio-live-kpis">
                        <div class="skpi-box">
                            <strong id="studioLatency">11.4 ms</strong>
                            <small>Solver Latency</small>
                        </div>
                        <div class="skpi-box">
                            <strong id="studioConvergence">99.84%</strong>
                            <small>PINN Accuracy</small>
                        </div>
                        <div class="skpi-box">
                            <strong id="studioThermal">36.2 °C</strong>
                            <small>Core Thermal</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ==========================================================
                 SECTION 2: MULTI-DISCIPLINARY COLORFUL 3D MODELING CARDS
                 ========================================================== -->
            <div class="srv-sec-head">
                <div>
                    <span class="srv-eyebrow">COMPUTATIONAL SCIENCE &amp; IN-SILICO DESIGN</span>
                    <h2 class="srv-sec-title text-3d-extrude">Multi-Disciplinary 3D Modeling &amp; Digital Twins</h2>
                    <p class="srv-sec-desc text-3d-relief">Each modeling unit features an active holographic wireframe stage and dedicated high-performance computing software.</p>
                </div>
            </div>

            <div class="services-grid">
                <?php foreach ( $modeling_units as $m ) : ?>
                    <article class="abt-card-3d service-card-3d <?php echo esc_attr( $m['theme'] ); ?>">
                        <div>
                            <!-- Animated Holographic 3D Viewport Stage -->
                            <div class="holo-model-stage">
                                <div class="holo-grid-floor"></div>
                                <div class="holo-shape-wireframe"></div>
                                <span class="holo-telemetry-tag"><?php echo esc_html( $m['hud'] ); ?></span>
                            </div>

                            <div class="s-top-row">
                                <span class="s-icon"><?php echo esc_html( $m['icon'] ); ?></span>
                                <span class="s-badge"><?php echo esc_html( $m['code'] ); ?></span>
                            </div>
                            <h3 class="text-3d-card-title"><?php echo esc_html( $m['title'] ); ?></h3>
                            <p class="text-3d-relief"><?php echo esc_html( $m['desc'] ); ?></p>
                        </div>

                        <div>
                            <div class="s-pricing-strip">
                                <div>
                                    <span>Simulation Engine</span>
                                    <strong><?php echo esc_html( $m['software'] ); ?></strong>
                                </div>
                                <div>
                                    <span>Benchmark Precision</span>
                                    <strong><?php echo esc_html( $m['metric'] ); ?></strong>
                                </div>
                            </div>

                            <div class="s-footer-row">
                                <span>Status: <strong style="color:#34d399;">Cluster Ready</strong></span>
                                <button type="button" class="btn-book-service-3d book-modal-btn"
                                        data-title="<?php echo esc_attr( $m['title'] ); ?>"
                                        data-code="<?php echo esc_attr( $m['code'] ); ?>">
                                    <span>🔮 Request 3D Model →</span>
                                </button>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <!-- ==========================================================
                 SECTION 3: ACCREDITED PHYSICAL LAB TESTING & CALIBRATION
                 ========================================================== -->
            <div class="srv-sec-head">
                <div>
                    <span class="srv-eyebrow">ISO/IEC 17025 &amp; IAEA CERTIFIED FACILITIES</span>
                    <h2 class="srv-sec-title text-3d-extrude">Accredited Wet-Lab Assaying &amp; Irradiation Services</h2>
                    <p class="srv-sec-desc text-3d-relief">Standardized physical testing, gamma sterilization, and precision CNC fabrication with transparent commercial turnaround times.</p>
                </div>
            </div>

            <div class="services-grid">
                <?php foreach ( $services as $s ) : ?>
                    <article class="abt-card-3d service-card-3d <?php echo esc_attr( $s['theme'] ); ?>">
                        <div>
                            <div class="s-top-row">
                                <span class="s-icon"><?php echo esc_html( $s['icon'] ); ?></span>
                                <span class="s-badge"><?php echo esc_html( $s['code'] ); ?></span>
                            </div>
                            <h3 class="text-3d-card-title"><?php echo esc_html( $s['title'] ); ?></h3>
                            <p class="text-3d-relief"><?php echo esc_html( $s['desc'] ); ?></p>
                        </div>

                        <div>
                            <div class="s-pricing-strip">
                                <div>
                                    <span>Commercial Tariff</span>
                                    <strong><?php echo esc_html( $s['pricing'] ); ?></strong>
                                </div>
                                <div>
                                    <span>Standard Turnaround</span>
                                    <strong><?php echo esc_html( $s['turnaround'] ); ?></strong>
                                </div>
                            </div>

                            <div class="s-footer-row">
                                <span class="centre-lbl">Host: <strong><?php echo esc_html( $s['centre'] ); ?></strong></span>
                                <button type="button" class="btn-book-service-3d book-modal-btn"
                                        data-title="<?php echo esc_attr( $s['title'] ); ?>"
                                        data-code="<?php echo esc_attr( $s['code'] ); ?>">
                                    <span>🔬 Book Lab Assay →</span>
                                </button>
                            </div>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>

            <!-- ==========================================================
                 SECTION 4: 4-STAGE SAMPLE INTAKE & DIGITAL TWIN WORKFLOW
                 ========================================================== -->
            <div class="srv-sec-head">
                <div>
                    <span class="srv-eyebrow">CHAIN-OF-CUSTODY &amp; QUALITY ASSURANCE</span>
                    <h2 class="srv-sec-title text-3d-extrude">4-Stage Sample Intake &amp; Modeling Workflow</h2>
                </div>
            </div>

            <div class="pipeline-grid-4">
                <div class="abt-card-3d pipeline-step-3d color-theme-cyan">
                    <span class="step-num-badge">01</span>
                    <h4>Dossier &amp; CAD Intake</h4>
                    <p>Submit physical samples at Gate 2 Sentinel Reception or upload CAD/molecular files via encrypted portal telemetry.</p>
                </div>
                <div class="abt-card-3d pipeline-step-3d color-theme-gold">
                    <span class="step-num-badge">02</span>
                    <h4>In-Silico 3D Pre-Modeling</h4>
                    <p>AMSARC &amp; host directorate clusters run predictive digital twin simulations to calibrate assay parameters.</p>
                </div>
                <div class="abt-card-3d pipeline-step-3d color-theme-emerald">
                    <span class="step-num-badge">03</span>
                    <h4>Accredited Lab Execution</h4>
                    <p>High-precision GC-MS, PCR, CNC, or Cobalt-60 Gamma irradiation executed under strict ISO 17025 protocols.</p>
                </div>
                <div class="abt-card-3d pipeline-step-3d color-theme-violet">
                    <span class="step-num-badge">04</span>
                    <h4>Certified Telemetry Report</h4>
                    <p>Receive cryptographically signed Certificate of Analysis (CoA) and 3D simulation datasets ready for industrial off-take.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- Interactive Service Booking Modal -->
    <div class="service-modal-backdrop" id="serviceModal" aria-hidden="true">
        <div class="service-modal-3d color-theme-cyan">
            <button type="button" class="modal-close-btn" id="closeServiceModal" aria-label="Close">✕</button>
            <span class="s-badge" id="modalServiceCode">LABORATORY DOSSIER</span>
            <h3 class="text-3d-extrude" id="modalServiceTitle" style="margin: 0.75rem 0 0.5rem; color: #fff;">Book Technical Testing Service</h3>
            <p class="text-3d-relief" style="color: #cbd5e1; font-size: 0.9rem;">Submit your sample or 3D modeling specifications to coordinate intake with the designated NASTCO directorate.</p>
            <form id="serviceBookingForm" class="service-form-3d">
                <input type="text" placeholder="Organization / Principal Researcher Name" required>
                <input type="email" placeholder="Official Corporate / Academic Email" required>
                <input type="tel" placeholder="Direct Phone / WhatsApp Telemetry Number" required>
                <select required>
                    <option value="" disabled selected>Select Service Mode / Urgency</option>
                    <option value="modeling">3D Digital Twin Simulation &amp; Modeling</option>
                    <option value="standard">Standard Physical Lab Assay Queue</option>
                    <option value="express">Express Priority Processing (+30%)</option>
                </select>
                <button type="submit" class="btn-book-service-3d full-width"><span>🚀 Transmit Service Requisition</span></button>
            </form>
            <div id="serviceFormStatus" class="service-status-msg" style="display:none;"></div>
        </div>
    </div>

</main>

<script id="nastco-services-inline-controller">
document.addEventListener('DOMContentLoaded', () => {
    // 1. Live Interactive HTML5 3D Point-Cloud & Wireframe Digital Twin Canvas
    const canvas = document.getElementById('nastco3dModelCanvas');
    if (canvas) {
        const ctx = canvas.getContext('2d');
        let currentModel = 'torus';
        let rotSpeed = 0.015;
        let density = 2048;
        let angleX = 0.4;
        let angleY = 0;

        const palettes = {
            torus:   ['#38bdf8', '#0284c7', '#facc15'],
            helix:   ['#34d399', '#10b981', '#38bdf8'],
            lattice: ['#facc15', '#eab308', '#fb7185'],
            solar:   ['#a78bfa', '#c084fc', '#facc15'],
            cnc:     ['#60a5fa', '#3b82f6', '#34d399'],
            gamma:   ['#fb7185', '#f43f5e', '#facc15']
        };

        function generatePoints(type, count) {
            const pts = [];
            const num = Math.min(220, Math.floor(count / 12));
            for (let i = 0; i < num; i++) {
                const t = (i / num) * Math.PI * 2;
                const u = ((i * 7) % num / num) * Math.PI * 2;
                let x = 0, y = 0, z = 0;

                if (type === 'torus') {
                    const R = 95, r = 38;
                    x = (R + r * Math.cos(u)) * Math.cos(t);
                    y = (R + r * Math.cos(u)) * Math.sin(t);
                    z = r * Math.sin(u);
                } else if (type === 'helix') {
                    const strand = (i % 2 === 0) ? 1 : -1;
                    x = 65 * Math.cos(t * 2 + (strand > 0 ? 0 : Math.PI));
                    y = (i / num - 0.5) * 220;
                    z = 65 * Math.sin(t * 2 + (strand > 0 ? 0 : Math.PI));
                } else if (type === 'lattice') {
                    const s = 75;
                    x = ((i % 5) - 2) * 42;
                    y = ((Math.floor(i / 5) % 5) - 2) * 42;
                    z = ((Math.floor(i / 25) % 5) - 2) * 42;
                } else if (type === 'solar') {
                    x = ((i % 12) - 5.5) * 24;
                    z = (Math.floor(i / 12) - 5.5) * 20;
                    y = Math.sin(x * 0.05 + z * 0.05) * 28;
                } else if (type === 'cnc') {
                    const rad = 35 + (i % 3) * 32;
                    x = rad * Math.cos(t * 3);
                    z = rad * Math.sin(t * 3);
                    y = ((i % 7) - 3) * 22;
                } else {
                    const phi = Math.acos(1 - 2 * (i + 0.5) / num);
                    const theta = Math.PI * (1 + Math.sqrt(5)) * i;
                    const rad = 105;
                    x = rad * Math.sin(phi) * Math.cos(theta);
                    y = rad * Math.sin(phi) * Math.sin(theta);
                    z = rad * Math.cos(phi);
                }
                pts.push({ x, y, z, c: i % 3 });
            }
            return pts;
        }

        let points = generatePoints(currentModel, density);

        function render3D() {
            const w = canvas.width;
            const h = canvas.height;
            ctx.clearRect(0, 0, w, h);

            // Subtle background perspective grid
            ctx.strokeStyle = 'rgba(56, 189, 248, 0.08)';
            ctx.lineWidth = 1;
            for (let gx = 0; gx < w; gx += 45) {
                ctx.beginPath(); ctx.moveTo(gx, 0); ctx.lineTo(gx, h); ctx.stroke();
            }
            for (let gy = 0; gy < h; gy += 45) {
                ctx.beginPath(); ctx.moveTo(0, gy); ctx.lineTo(w, gy); ctx.stroke();
            }

            angleY += rotSpeed;
            const cosY = Math.cos(angleY), sinY = Math.sin(angleY);
            const cosX = Math.cos(angleX), sinX = Math.sin(angleX);
            const colors = palettes[currentModel] || palettes.torus;

            const projected = points.map(p => {
                let x1 = p.x * cosY - p.z * sinY;
                let z1 = p.z * cosY + p.x * sinY;
                let y1 = p.y * cosX - z1 * sinX;
                let z2 = z1 * cosX + p.y * sinX;
                const scale = 340 / (340 + z2);
                return {
                    sx: w / 2 + x1 * scale,
                    sy: h / 2 + y1 * scale,
                    scale,
                    z: z2,
                    color: colors[p.c]
                };
            });

            // Connect nearby nodes with glowing wireframe lines
            for (let i = 0; i < projected.length; i++) {
                const a = projected[i];
                const b = projected[(i + 1) % projected.length];
                const dist = Math.hypot(a.sx - b.sx, a.sy - b.sy);
                if (dist < 85) {
                    ctx.strokeStyle = a.color + '44';
                    ctx.lineWidth = 1.2;
                    ctx.beginPath();
                    ctx.moveTo(a.sx, a.sy);
                    ctx.lineTo(b.sx, b.sy);
                    ctx.stroke();
                }
            }

            // Draw glowing 3D vertices
            projected.sort((a, b) => b.z - a.z).forEach(p => {
                ctx.fillStyle = p.color;
                ctx.beginPath();
                ctx.arc(p.sx, p.sy, Math.max(1.8, 3.6 * p.scale), 0, Math.PI * 2);
                ctx.fill();
            });

            requestAnimationFrame(render3D);
        }
        render3D();

        // Studio Controls Wiring
        const hudName      = document.getElementById('hudModelName');
        const hudVertices  = document.getElementById('hudVertices');
        const densitySlide = document.getElementById('studioDensitySlider');
        const speedSlide   = document.getElementById('studioSpeedSlider');
        const densityOut   = document.getElementById('densityReadout');
        const speedOut     = document.getElementById('speedReadout');
        const latOut       = document.getElementById('studioLatency');
        const convOut      = document.getElementById('studioConvergence');

        document.querySelectorAll('#studioModelSelectors .model-pill-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                document.querySelectorAll('#studioModelSelectors .model-pill-btn').forEach(b => b.classList.remove('active'));
                btn.classList.add('active');
                currentModel = btn.getAttribute('data-model') || 'torus';
                if (hudName) hudName.textContent = 'MODEL: ' + (btn.getAttribute('data-label') || '').toUpperCase();
                points = generatePoints(currentModel, density);
            });
        });

        if (densitySlide) {
            densitySlide.addEventListener('input', (e) => {
                density = parseInt(e.target.value) || 2048;
                if (densityOut) densityOut.textContent = density.toLocaleString() + ' Nodes';
                if (hudVertices) hudVertices.textContent = `VERTICES: ${density.toLocaleString()} • 60 FPS`;
                if (latOut) latOut.textContent = (6.5 + density * 0.0025).toFixed(1) + ' ms';
                if (convOut) convOut.textContent = (99.1 + Math.min(0.85, density / 5000)).toFixed(2) + '%';
                points = generatePoints(currentModel, density);
            });
        }

        if (speedSlide) {
            speedSlide.addEventListener('input', (e) => {
                const raw = parseInt(e.target.value) || 15;
                rotSpeed = raw / 1000;
                if (speedOut) speedOut.textContent = (raw / 10).toFixed(1) + 'x';
            });
        }
    }

    // 2. Booking Modal Handler
    const modal      = document.getElementById('serviceModal');
    const closeBtn   = document.getElementById('closeServiceModal');
    const modalTitle = document.getElementById('modalServiceTitle');
    const modalCode  = document.getElementById('modalServiceCode');
    const form       = document.getElementById('serviceBookingForm');
    const statusMsg  = document.getElementById('serviceFormStatus');

    document.querySelectorAll('.book-modal-btn').forEach(btn => {
        btn.addEventListener('click', () => {
            if (!modal) return;
            modalTitle.textContent = btn.getAttribute('data-title') || 'Book Testing Service';
            modalCode.textContent  = btn.getAttribute('data-code') || 'LABORATORY DOSSIER';
            statusMsg.style.display = 'none';
            modal.classList.add('active');
        });
    });

    if (closeBtn && modal) {
        closeBtn.addEventListener('click', () => modal.classList.remove('active'));
        modal.addEventListener('click', (e) => {
            if (e.target === modal) modal.classList.remove('active');
        });
    }

    if (form) {
        form.addEventListener('submit', (e) => {
            e.preventDefault();
            statusMsg.textContent = '✔ Requisition logged with NASTCO Directorate Operations & HPC Modeling Core.';
            statusMsg.style.display = 'block';
            form.reset();
        });
    }
});
</script>

<?php get_footer(); ?>
