<?php
/**
 * Template Name: Research Centre - AMSARC (Applied Mathematics & Simulation)
 * Description: Flagship institutional dossier for the Applied Mathematics and Simulation Advanced Research Centre (AMSARC) featuring HPC telemetry, quantum ciphers, CFD modeling, academic job submission portal, and 1080p facility broadcasts.
 * File: page-amsarc.php
 *
 * @package NistcoTheme
 * @version 1.0.0
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<style>
/* ==========================================================================
   AMSARC FLAGSHIP STYLING & ADVANCED HPC TELEMETRY
   ========================================================================== */
.amsarc-hud-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 1.25rem;
    margin-top: 2.5rem;
}
.amsarc-hud-card {
    background: rgba(2, 26, 16, 0.85);
    border: 1px solid rgba(56, 189, 248, 0.3);
    border-radius: 12px;
    padding: 1.25rem;
    backdrop-filter: blur(10px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.3);
    transition: transform 0.2s, border-color 0.2s;
}
.amsarc-hud-card:hover {
    transform: translateY(-3px);
    border-color: #38bdf8;
}
.amsarc-hud-label {
    font-size: 0.72rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    color: #38bdf8;
    display: block;
    margin-bottom: 0.35rem;
}
.amsarc-hud-val {
    font-size: 1.6rem;
    font-weight: 800;
    color: #ffffff;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
}
.amsarc-hud-status {
    font-size: 0.75rem;
    color: #86efac;
    display: flex;
    align-items: center;
    gap: 0.35rem;
    margin-top: 0.35rem;
}
.amsarc-pillar-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 2.5rem;
    box-shadow: 0 10px 30px rgba(0,0,0,0.04);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-top: 4px solid #0284c7;
    transition: transform 0.25s ease, box-shadow 0.25s ease;
}
.amsarc-pillar-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 20px 40px rgba(2, 132, 199, 0.12);
}
.amsarc-terminal-box {
    background: #021a10;
    border: 1px solid rgba(52, 211, 153, 0.4);
    border-radius: 16px;
    padding: 2.5rem;
    color: #ffffff;
    font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, monospace;
}
</style>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: HPC MATRIX TELEMETRY & SOVEREIGN COMPUTATIONAL CORE
         ========================================================================= -->
    <section class="mc-hero-section mc-news-hero" style="background: linear-gradient(135deg, #021a10 0%, #032015 50%, #042416 100%);">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container" style="max-width: 1440px; margin: 0 auto; position: relative; z-index: 2;">
            <div class="mc-hero-grid" style="display: grid; grid-template-columns: 1.25fr 0.75fr; gap: 4rem; align-items: center;">

                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb" style="margin-bottom: 1rem; font-size: 0.95rem;">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #86efac; font-weight: 700; text-decoration: none;">🏠 Home</a>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <a href="<?php echo esc_url( home_url( '/about-us/#centres-section' ) ); ?>" style="color: #cbd5e1; text-decoration: none;">Research Centres</a>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <span class="breadcrumb-current" style="color: #38bdf8; font-weight: 700;">AMSARC Supercomputing</span>
                    </nav>

                    <div class="mc-hero-badges" style="display: flex; gap: 0.75rem; margin-bottom: 1.5rem; flex-wrap: wrap;">
                        <span class="mc-pill mc-pill-green" style="background: #008751; color: #ffffff;">Centre of Excellence</span>
                        <span class="mc-pill mc-pill-gold" style="background: #0284c7; color: #ffffff;">1,024-Core HPC Infrastructure</span>
                        <span class="mc-pill" style="background: rgba(253, 224, 71, 0.15); color: #fde047; border: 1px solid #fde047; font-size: 0.75rem; font-weight: 800; padding: 0.35rem 0.85rem; border-radius: 50px;">Executive Order No. 5</span>
                    </div>

                    <h1 class="mc-hero-title" style="font-size: clamp(2.3rem, 4vw, 3.6rem); font-weight: 800; line-height: 1.15; margin: 0 0 1rem 0; color: #ffffff;">
                        Applied Mathematics &amp; Simulation Advanced Research Centre (AMSARC)
                    </h1>

                    <p class="mc-hero-subtitle" style="font-size: 1.15rem; color: #cbd5e1; max-width: 780px; line-height: 1.7; margin-bottom: 2rem;">
                        Nigeria’s premier high-performance supercomputing facility, executing multi-scale computational fluid dynamics, sovereign quantum cryptography, electrical grid neural predictions, and geophysical modeling.
                    </p>

                    <div class="about-nav-pill-group" style="display: flex; gap: 0.75rem; flex-wrap: wrap; align-items: center;">
                        <a href="#hpc-scheduler" class="mc-btn mc-btn-primary" style="background: #0284c7; color: #ffffff; text-decoration: none; padding: 0.75rem 1.6rem; border-radius: 8px; font-weight: 800; display: inline-flex; align-items: center; gap: 0.5rem;">
                            <span>⚡</span>
                            <span>Book HPC Node Hours</span>
                        </a>
                        <a href="#scientific-thrusts" class="about-nav-pill" style="background: rgba(255,255,255,0.08); color: #ffffff; text-decoration: none; padding: 0.75rem 1.25rem; border-radius: 8px; font-weight: 700; border: 1px solid rgba(255,255,255,0.2);">🔬 Research Thrusts</a>
                        <a href="#amsarc-video" class="about-nav-pill" style="background: rgba(255,255,255,0.08); color: #ffffff; text-decoration: none; padding: 0.75rem 1.25rem; border-radius: 8px; font-weight: 700; border: 1px solid rgba(255,255,255,0.2);">🎥 Server Room Tour</a>
                    </div>

                    <!-- Live Hardware Telemetry HUD -->
                    <div class="amsarc-hud-grid">
                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">HPC Compute Scale</span>
                            <div class="amsarc-hud-val">256 TFLOPS</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#86efac; border-radius:50%; display:inline-block;"></span> 1,024 Active CPU Cores</div>
                        </div>

                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Network Fabric</span>
                            <div class="amsarc-hud-val">100 Gbps</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#86efac; border-radius:50%; display:inline-block;"></span> InfiniBand EDR Latency &lt;0.5μs</div>
                        </div>

                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Job Scheduler</span>
                            <div class="amsarc-hud-val">SLURM 24.05</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#86efac; border-radius:50%; display:inline-block;"></span> Academic Queue Online</div>
                        </div>

                        <div class="amsarc-hud-card">
                            <span class="amsarc-hud-label">Power Microgrid</span>
                            <div class="amsarc-hud-val">500 kVA</div>
                            <div class="amsarc-hud-status"><span style="width:7px; height:7px; background:#86efac; border-radius:50%; display:inline-block;"></span> 100% Dedicated Solar Hybrid</div>
                        </div>
                    </div>

                </div>

                <!-- Right Column: Interactive 3D HPC Supercomputing Visualization Stage -->
                <div class="about-3d-viewport" style="display: flex; justify-content: center;">
                    <div class="about-3d-stage" style="width: 320px; height: 320px; position: relative;">
                        <svg viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg" style="width: 100%; height: 100%;">
                            <defs>
                                <radialGradient id="hpcGlow" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="#38bdf8" stop-opacity="0.9" />
                                    <stop offset="60%" stop-color="#0284c7" stop-opacity="0.3" />
                                    <stop offset="100%" stop-color="#021a10" stop-opacity="0" />
                                </radialGradient>
                            </defs>

                            <circle cx="160" cy="160" r="140" fill="none" stroke="#38bdf8" stroke-width="1.5" stroke-dasharray="8 6" opacity="0.6"/>
                            <circle cx="160" cy="160" r="105" fill="none" stroke="#86efac" stroke-width="1.5" stroke-dasharray="12 8" opacity="0.5"/>
                            <circle cx="160" cy="160" r="70" fill="url(#hpcGlow)" />

                            <!-- Computational Node Matrix -->
                            <rect x="135" y="135" width="50" height="50" rx="8" fill="#042416" stroke="#38bdf8" stroke-width="2.5" />
                            <text x="160" y="167" text-anchor="middle" font-size="24" fill="#fde047">💻</text>

                            <!-- Orbiting Node Indicators -->
                            <circle cx="160" cy="20" r="7" fill="#38bdf8" />
                            <circle cx="300" cy="160" r="7" fill="#86efac" />
                            <circle cx="160" cy="300" r="7" fill="#fde047" />
                            <circle cx="20" cy="160" r="7" fill="#38bdf8" />

                            <line x1="160" y1="27" x2="160" y2="135" stroke="#38bdf8" stroke-width="1.5" stroke-dasharray="4 4" opacity="0.7"/>
                            <line x1="293" y1="160" x2="185" y2="160" stroke="#86efac" stroke-width="1.5" stroke-dasharray="4 4" opacity="0.7"/>
                            <line x1="160" y1="293" x2="160" y2="185" stroke="#fde047" stroke-width="1.5" stroke-dasharray="4 4" opacity="0.7"/>
                            <line x1="27" y1="160" x2="135" y2="160" stroke="#38bdf8" stroke-width="1.5" stroke-dasharray="4 4" opacity="0.7"/>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. CORE SCIENTIFIC THRUSTS (WHAT MAKES AMSARC STAND OUT)
         ========================================================================= -->
    <section id="scientific-thrusts" class="mc-section mc-bg-parchment mc-border-bottom" style="padding: 5.5rem 2rem; background: #f8fafc;">
        <div class="container" style="max-width: 1200px; margin: 0 auto;">

            <div class="mc-section-header" style="text-align: center; margin-bottom: 4rem;">
                <span class="mc-section-kicker" style="color: #0284c7; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Computational Portfolios</span>
                <h2 class="mc-section-title" style="font-size: 2.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.85rem 0;">Pillars of Frontier Mathematical Modeling</h2>
                <p style="color: #64748b; font-size: 1.05rem; line-height: 1.7; max-width: 760px; margin: 0 auto;">
                    AMSARC bridges pure mathematical formulation with petascale algorithmic execution to solve critical engineering, defense, and economic challenges.
                </p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem;">

                <!-- Pillar 1 -->
                <div class="amsarc-pillar-card">
                    <div>
                        <div style="width: 56px; height: 56px; background: #e0f2fe; color: #0284c7; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">🔐</div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #0284c7; text-transform: uppercase; letter-spacing: 1px;">National Defense &amp; Security</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Sovereign Quantum Cryptography</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Developing lattice-based, post-quantum cryptographic ciphers engineered to safeguard Nigeria's sovereign defense data, federal treasury interbank networks, and telecommunications backbones.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ Lattice-Based NIST Post-Quantum Algorithms</li>
                        <li>✔️ FPGA Hardware Cryptographic Accelerators</li>
                        <li>✔️ Elliptic Curve Key Exchange Domestication</li>
                    </ul>
                </div>

                <!-- Pillar 2 -->
                <div class="amsarc-pillar-card" style="border-top-color: #008751;">
                    <div>
                        <div style="width: 56px; height: 56px; background: #d1fae5; color: #008751; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">🌪️</div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; letter-spacing: 1px;">Industrial Fluid Dynamics</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Computational Fluid Dynamics (CFD)</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Direct Numerical Simulation (DNS) and Large Eddy Simulation (LES) modeling oil pipeline slurry multiphase flows, agricultural spray drift dynamics, and aerospace aerodynamic airfoils.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ OpenFOAM &amp; ANSYS Distributed Solvers</li>
                        <li>✔️ Transonic &amp; Supersonic Drag Profiling</li>
                        <li>✔️ Hydrodynamic Turbine Cavitation Analysis</li>
                    </ul>
                </div>

                <!-- Pillar 3 -->
                <div class="amsarc-pillar-card" style="border-top-color: #d97706;">
                    <div>
                        <div style="width: 56px; height: 56px; background: #fef3c7; color: #d97706; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">⚡</div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #d97706; text-transform: uppercase; letter-spacing: 1px;">Infrastructure Optimization</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">National Electrical Grid Predictive AI</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Real-time finite-element simulation of the 330 kV / 132 kV transmission network, employing graph neural networks to predict line tripping, phase imbalances, and renewable integration bottlenecks.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ High-Voltage Transient Disturbance Tracking</li>
                        <li>✔️ Renewable Microgrid Dispatch Scheduling</li>
                        <li>✔️ Cascading Failure Prevention Algorithms</li>
                    </ul>
                </div>

                <!-- Pillar 4 -->
                <div class="amsarc-pillar-card" style="border-top-color: #7c3aed;">
                    <div>
                        <div style="width: 56px; height: 56px; background: #f3e8ff; color: #7c3aed; border-radius: 12px; display: flex; align-items: center; justify-content: center; font-size: 1.75rem; margin-bottom: 1.25rem;">🌍</div>
                        <span style="font-size: 0.75rem; font-weight: 800; color: #7c3aed; text-transform: uppercase; letter-spacing: 1px;">Geophysical Metrology</span>
                        <h3 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.75rem 0;">Seismic Inversion &amp; Climate Physics</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.7; margin-bottom: 1.5rem;">
                            Processing acoustic wave equations over Benue Trough and Niger Delta seismic surveys, integrated with regional agro-climatic seasonal rainfall forecasting for sub-Saharan food security.
                        </p>
                    </div>
                    <ul style="list-style: none; padding: 0; margin: 0; font-size: 0.85rem; color: #334155; line-height: 1.8;">
                        <li>✔️ Full Waveform Inversion (FWI) 3D Arrays</li>
                        <li>✔️ Aquifer Depletion &amp; Recharge Simulations</li>
                        <li>✔️ Extreme Weather Micro-Forecasting Models</li>
                    </ul>
                </div>

            </div>

        </div>
    </section>

    <!-- =========================================================================
         3. VISUAL FACILITY BROADCAST: SERVER ROOM TOUR & COMPUTE CLUSTER
         ========================================================================= -->
    <section id="amsarc-video" class="mc-section mc-bg-white mc-border-bottom" style="padding: 5.5rem 2rem;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header" style="text-align: center; margin-bottom: 3.5rem;">
                <span class="mc-section-kicker" style="color: #0284c7; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Facility Telemetry</span>
                <h2 class="mc-section-title" style="font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0;">Inside the AMSARC Supercomputing Suite</h2>
                <p style="color: #64748b; font-size: 1.05rem; line-height: 1.6; max-width: 700px; margin: 0 auto;">
                    Take a high-definition 1080p walkthrough of our high-density server racks, precision climate-controlled cooling systems, and dedicated 500 kVA solar hybrid microgrid tie-in.
                </p>
            </div>

            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; overflow: hidden; box-shadow: 0 15px 40px rgba(0,0,0,0.06); max-width: 900px; margin: 0 auto;">
                <div style="position: relative; width: 100%; aspect-ratio: 16/9; background: #000;">
                    <iframe style="position: absolute; inset: 0; width: 100%; height: 100%; border: 0;" src="https://www.youtube-nocookie.com/embed/kJQP7kiw5Fk" title="AMSARC Supercomputing Suite" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
                <div style="padding: 2.5rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem;">
                    <div>
                        <span style="font-size: 0.78rem; font-weight: 800; color: #0284c7; text-transform: uppercase; display: block; margin-bottom: 0.25rem;">Virtual Demonstration</span>
                        <h4 style="font-size: 1.35rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Cluster Architecture &amp; Precision Thermodynamics</h4>
                        <p style="font-size: 0.92rem; color: #64748b; margin: 0; max-width: 550px;">
                            Learn how our liquid-assisted air cooling maintain node operating temperatures below 22°C under sustained 100% compute saturation.
                        </p>
                    </div>
                    <div>
                        <a href="#hpc-scheduler" class="mc-btn mc-btn-primary" style="background: #008751; color: #ffffff; text-decoration: none; padding: 0.8rem 1.6rem; border-radius: 8px; font-weight: 800; font-size: 0.9rem;">Book Cluster Access &rarr;</a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         4. SLURM WORKLOAD SCHEDULER & ACADEMIC HPC ACCESS PORTAL
         ========================================================================= -->
    <section id="hpc-scheduler" class="mc-section mc-bg-parchment" style="padding: 5.5rem 2rem; background: #f8fafc;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="amsarc-terminal-box">
                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid rgba(52, 211, 153, 0.3); padding-bottom: 1.25rem; margin-bottom: 2rem;">
                    <div style="display: flex; align-items: center; gap: 0.75rem;">
                        <span style="width: 12px; height: 12px; background: #ef4444; border-radius: 50%; display: inline-block;"></span>
                        <span style="width: 12px; height: 12px; background: #eab308; border-radius: 50%; display: inline-block;"></span>
                        <span style="width: 12px; height: 12px; background: #22c55e; border-radius: 50%; display: inline-block;"></span>
                        <span style="color: #38bdf8; font-size: 0.9rem; font-weight: 700; margin-left: 0.5rem;">amsarc-cluster-login01.nistco.gov.ng</span>
                    </div>
                    <span style="color: #86efac; font-size: 0.8rem; font-weight: 700;">Open Access Port: Active</span>
                </div>

                <div style="margin-bottom: 2rem;">
                    <p style="color: #86efac; margin: 0 0 0.5rem 0;">[root@amsarc-hpc ~]# sinfo --format="%10P %5a %10l %10s %20E"</p>
                    <pre style="color: #cbd5e1; font-size: 0.85rem; line-height: 1.6; overflow-x: auto; margin: 0;">
PARTITION  AVAIL TIMELIMIT  NODES(A/I/O/T)  STATE
standard*  up    7-00:00:00 48/12/0/60      ACTIVE - OPEN ACADEMIC ACCESS
cfd_gpu    up    3-00:00:00 12/4/0/16       ACTIVE - NVIDIA A100 HIGH-DENSITY
crypto_q   up    14-00:00:0 8/0/0/8         RESTRICTED - FEDERAL SECURITY
seismic    up    5-00:00:00 24/8/0/32       ACTIVE - TERABYTE MEMORY ALLOC
                    </pre>
                </div>

                <div style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1.5rem; border-top: 1px solid rgba(52, 211, 153, 0.3); padding-top: 1.75rem;">
                    <div>
                        <strong style="font-size: 1.15rem; color: #ffffff; display: block; margin-bottom: 0.25rem;">Are You a University Scholar or Industrial Partner?</strong>
                        <p style="font-size: 0.88rem; color: #cbd5e1; margin: 0;">Request allocated SLURM compute hours, compute partitions, and dedicated storage datasets under Presidential Executive Order No. 5.</p>
                    </div>
                    <div style="display: flex; gap: 1rem;">
                        <a href="mailto:simulation@nistco.gov.ng?subject=HPC%20Compute%20Hours%20Allocation%20Request" class="mc-btn mc-btn-primary" style="background: #38bdf8; color: #021a10; padding: 0.85rem 1.75rem; border-radius: 8px; font-weight: 800; text-decoration: none;">
                            <span>💻</span>
                            <span>Request Compute Allocation</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- =========================================================================
         5. DIRECTORATE LEADERSHIP & TECHNICAL CONTACT DESK
         ========================================================================= -->
    <section class="mc-section mc-bg-white mc-border-top" style="padding: 5.5rem 2rem;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 20px; padding: 3.5rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: grid; grid-template-columns: 280px 1fr; gap: 3.5rem; align-items: center;">
                <div style="text-align: center;">
                    <div style="width: 100%; aspect-ratio: 1/1; border-radius: 16px; overflow: hidden; background: #032015; display: flex; align-items: center; justify-content: center; font-size: 4.5rem; border: 3px solid #0284c7;">
                        👨‍💻
                    </div>
                    <span style="font-size: 0.75rem; font-weight: 800; color: #0284c7; text-transform: uppercase; display: block; margin-top: 1rem;">Principal Technical Director</span>
                    <strong style="font-size: 1.25rem; font-weight: 800; color: #0f172a; display: block;">AMSARC Directorate</strong>
                </div>

                <div>
                    <span class="mc-section-kicker" style="color: #0284c7; font-weight: 800; text-transform: uppercase; font-size: 0.8rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Apex Technical Authority</span>
                    <h3 style="font-size: 1.85rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0;">Directorate of Applied Mathematics &amp; Simulation</h3>
                    <p style="font-size: 0.98rem; color: #64748b; line-height: 1.8; margin-bottom: 2rem;">
                        Our team of applied mathematicians, computational fluid dynamicists, and systems engineers collaborate daily with national research institutions to deliver mathematically validated models that drive Nigeria's technological independence.
                    </p>

                    <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; font-size: 0.9rem;">
                        <div>
                            <span style="color: #64748b; display: block; font-size: 0.8rem;">Direct Technical Inquiries:</span>
                            <strong style="color: #0284c7;">simulation@nistco.gov.ng</strong>
                        </div>
                        <div>
                            <span style="color: #64748b; display: block; font-size: 0.8rem;">Campus Location:</span>
                            <strong style="color: #0f172a;">AMSARC Complex, NISTCO Sheda, Abuja</strong>
                        </div>
                        <div>
                            <span style="color: #64748b; display: block; font-size: 0.8rem;">Supervising Body:</span>
                            <strong style="color: #008751;">Federal Ministry of Innovation, Science &amp; Technology (FMIST)</strong>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();
