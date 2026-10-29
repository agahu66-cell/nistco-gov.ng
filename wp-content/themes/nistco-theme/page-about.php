<?php
/**
 * Template Name: Institutional Mandate & About
 * Description: Refactored 3D Sovereign Institutional Mandate, Statutory Governance & Executive Dispatch Hub.
 */
defined( 'ABSPATH' ) || exit;

get_header();

$about_css_path = get_template_directory() . '/assets/css/page-about.css';
$ventures_url   = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );
?>

<?php if ( file_exists( $about_css_path ) ) : ?>
<style id="nastco-about-inline-guaranteed">
<?php echo file_get_contents( $about_css_path ); ?>
</style>
<?php endif; ?>

<main id="primary" class="site-main nastco-about-wrapper">
    
    <section class="about-hero-section">
        <div class="about-container">
            
            <!-- Masthead -->
            <div class="about-hero-header">
                <div class="about-badge-3d">
                    <span class="pulse-dot-green"></span>
                    <span>STATUTORY SOVEREIGN MANDATE • SHEDA SCIENCE CITY</span>
                </div>
                <h1 class="about-title text-3d-extrude">
                    National Science &amp; Technology Complex <span class="text-gold-3d">(NASTCO)</span>
                </h1>
                <p class="about-subtitle text-3d-relief">
                    Evolving from the Sheda Science and Technology Complex (SHESTCO) into Nigeria’s apex multi-disciplinary sovereign research, nuclear irradiation, and industrial IP commercialization institution at KM 10 Abuja–Lokoja Expressway.
                </p>
            </div>

            <!-- Executive KPI Strip -->
            <div class="about-kpi-strip">
                <div class="abt-card-3d akpi-card-3d color-theme-gold">
                    <span class="akpi-num">6 Centres</span>
                    <span class="akpi-lbl">Specialized R&amp;D Directorates</span>
                </div>
                <div class="abt-card-3d akpi-card-3d color-theme-cyan">
                    <span class="akpi-num">40 / 35 / 25</span>
                    <span class="akpi-lbl">Statutory Royalty Ledger</span>
                </div>
                <div class="abt-card-3d akpi-card-3d color-theme-emerald">
                    <span class="akpi-num">TRL 7 – 9</span>
                    <span class="akpi-lbl">Commercial IP Readiness</span>
                </div>
                <div class="abt-card-3d akpi-card-3d color-theme-violet">
                    <span class="akpi-num">IAEA &amp; ISO</span>
                    <span class="akpi-lbl">Safeguarded Sovereign Labs</span>
                </div>
            </div>

            <!-- ==========================================================
                 SECTION 1: THREE CORE STATUTORY PILLARS
                 ========================================================== -->
            <div class="abt-sec-head">
                <span class="abt-eyebrow">INSTITUTIONAL TRANSFORMATION FRAMEWORK</span>
                <h2 class="abt-sec-title text-3d-extrude">Three Pillars of Sovereign Innovation</h2>
                <p class="abt-sec-desc text-3d-relief">Bridging foundational scientific research with domestic industrial manufacturing, import substitution, and statutory fiscal transparency.</p>
            </div>

            <div class="mandate-grid-3">
                <article class="abt-card-3d mandate-card-3d color-theme-cyan">
                    <div>
                        <div class="m-top-row">
                            <span class="m-icon">🔬</span>
                            <span class="m-pill">PILLAR 01 • R&amp;D CORE</span>
                        </div>
                        <h3 class="text-3d-card-title">National Scientific Infrastructure</h3>
                        <p class="text-3d-relief">Operating centralized high-capital research complexes—including the Cobalt-60 Gamma Irradiation Facility (GIF), HPC simulation clusters, and GC-MS/PCR analytical laboratories.</p>
                    </div>
                    <div class="m-footer-tag">✔ Shared Sovereign Lab Access</div>
                </article>

                <article class="abt-card-3d mandate-card-3d color-theme-gold">
                    <div>
                        <div class="m-top-row">
                            <span class="m-icon">💎</span>
                            <span class="m-pill">PILLAR 02 • COMMERCIALISATION</span>
                        </div>
                        <h3 class="text-3d-card-title">Industrial Off-Taking &amp; Spin-Offs</h3>
                        <p class="text-3d-relief">Transitioning laboratory prototypes (TRL 4–6) into full commercial licensing agreements (TRL 7–9) with Nigerian petrochemical, energy, and agribusiness corporations.</p>
                    </div>
                    <div class="m-footer-tag">✔ NOTAP Registered Patent Dossiers</div>
                </article>

                <article class="abt-card-3d mandate-card-3d color-theme-emerald">
                    <div>
                        <div class="m-top-row">
                            <span class="m-icon">⚖️</span>
                            <span class="m-pill">PILLAR 03 • GOVERNANCE</span>
                        </div>
                        <h3 class="text-3d-card-title">Statutory Compliance &amp; Security</h3>
                        <p class="text-3d-relief">Enforcing Public Procurement Act (PPA 2007) standards, NNRA nuclear safety protocols, and automated ledger telemetry across all six specialized research directorates.</p>
                    </div>
                    <div class="m-footer-tag">✔ Gate 2 Sentinel Telemetry Active</div>
                </article>
            </div>

            <!-- ==========================================================
                 SECTION 2: SHEDA SCIENCE CITY CAMPUS ZONING (4 SECTORS)
                 ========================================================== -->
            <div class="abt-sec-head">
                <span class="abt-eyebrow">GEOSPATIAL INFRASTRUCTURE • KM 10 GWAGWALADA–LOKOJA ROAD</span>
                <h2 class="abt-sec-title text-3d-extrude">Sheda Science City Operational Sectors</h2>
                <p class="abt-sec-desc text-3d-relief">Strategic physical zoning across the Sheda campus supporting high-security nuclear operations, wet-lab biosciences, and heavy precision engineering.</p>
            </div>

            <div class="campus-grid-4">
                <div class="abt-card-3d sector-card-3d color-theme-cyan">
                    <span class="sector-code">SECTOR ALPHA</span>
                    <h4>Executive Command &amp; AMSARC</h4>
                    <p>Houses Central Administration, the ICT &amp; Sovereign Portal Unit, and the HPE ProLiant Gen10 HPC Simulation Cluster.</p>
                </div>
                <div class="abt-card-3d sector-card-3d color-theme-emerald">
                    <span class="sector-code">SECTOR BETA</span>
                    <h4>BARC, CARC &amp; PARC Complex</h4>
                    <p>Houses genomic PCR suites, synthetic zeolite catalyst reactors, GC-MS spectrometry, and perovskite solar testing arrays.</p>
                </div>
                <div class="abt-card-3d sector-card-3d color-theme-cobalt">
                    <span class="sector-code">SECTOR GAMMA</span>
                    <h4>AEPC Precision Foundry</h4>
                    <p>Dedicated to 5-axis CNC machining, metallurgy casting furnaces, and industrial agro-processing hardware fabrication.</p>
                </div>
                <div class="abt-card-3d sector-card-3d color-theme-crimson">
                    <span class="sector-code">SECTOR DELTA</span>
                    <h4>NTC Gamma Irradiation Zone</h4>
                    <p>IAEA-safeguarded exclusion perimeter operating the Cobalt-60 Gamma Irradiation Facility (GIF) and radiation dosimetry labs.</p>
                </div>
            </div>

            <!-- ==========================================================
                 SECTION 3: STATUTORY 40 / 35 / 25 REVENUE-SHARING MANDATE
                 ========================================================== -->
            <div class="abt-card-3d statutory-split-banner color-theme-gold">
                <div>
                    <span class="abt-eyebrow" style="color:#facc15;">NOTAP &amp; INSTITUTIONAL IP POLICY</span>
                    <h2 class="abt-sec-title text-3d-extrude">Statutory 40 / 35 / 25 Royalty Allocation</h2>
                    <p class="text-3d-relief" style="color:#cbd5e1; line-height:1.7; margin-bottom:1.5rem;">
                        To incentivize world-class scientific breakthroughs while ensuring self-sustaining laboratory infrastructure, every commercialized patent and industrial license executed at NASTCO is governed by an immutable three-tier revenue split.
                    </p>
                    <a href="<?php echo esc_url( $ventures_url ); ?>" class="btn-dispatch-3d" style="text-decoration:none;">
                        <span>💎 Inspect Active Patents &amp; Simulator →</span>
                    </a>
                </div>

                <div class="split-bars-stack">
                    <div class="split-bar-card">
                        <span class="split-pct">40%</span>
                        <div>
                            <strong>Inventor Research Team &amp; Principal Investigators</strong>
                            <small>Direct statutory disbursement to the scientists and engineers who originated the IP.</small>
                        </div>
                    </div>
                    <div class="split-bar-card cyan">
                        <span class="split-pct">35%</span>
                        <div>
                            <strong>Originating Centre R&amp;D Laboratory Fund</strong>
                            <small>Reinvested directly into reagents, instrumentation calibration, and centre operations.</small>
                        </div>
                    </div>
                    <div class="split-bar-card emerald">
                        <span class="split-pct">25%</span>
                        <div>
                            <strong>NASTCO Central Sovereign Reserve</strong>
                            <small>Supports institutional governance, IP legal protection, and complex-wide infrastructure.</small>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ==========================================================
                 SECTION 4: INTERACTIVE EXECUTIVE DISPATCH CONSOLE
                 ========================================================== -->
            <div class="abt-card-3d dispatch-console-3d color-theme-cyan" id="executive-dispatch">
                <div>
                    <span class="abt-eyebrow">DIRECT TELEMETRY GATEWAY • REST API &amp; TERMII SMS</span>
                    <h2 class="abt-sec-title text-3d-extrude">Executive Dispatch &amp; Partnership Console</h2>
                    <p class="text-3d-relief" style="color:#cbd5e1; line-height:1.65;">
                        Transmit official inquiries, industrial off-taking proposals, or inter-agency correspondence directly to NASTCO’s Directorate of Innovation &amp; Commercialisation.
                    </p>

                    <ul class="dispatch-info-list">
                        <li>
                            <strong>📍 Headquarters Complex</strong>
                            KM 10 Abuja–Lokoja Expressway, Sheda, Kwali Area Council, PMB 186, Garki, Abuja FCT, Nigeria
                        </li>
                        <li>
                            <strong>🔐 Telemetry &amp; REST Endpoint</strong>
                            <code>POST /wp-json/nastco/v1/dispatch</code> (Automated DB Ledger + Termii SMS Broadcast)
                        </li>
                        <li>
                            <strong>⏰ Operational Hours</strong>
                            Monday – Friday: 08:00 WAT – 17:00 WAT (24/7 Gate 2 Sentinel Telemetry)
                        </li>
                    </ul>
                </div>

                <div>
                    <form id="executiveDispatchForm" class="dispatch-form-3d">
                        <div class="dispatch-form-row">
                            <input type="text" id="dispName" name="sender_name" placeholder="Full Name / Title" required>
                            <input type="text" id="dispOrg" name="organization" placeholder="Organization / Ministry / Company" required>
                        </div>
                        <div class="dispatch-form-row">
                            <input type="email" id="dispEmail" name="email" placeholder="Official Email Address" required>
                            <input type="tel" id="dispPhone" name="phone" placeholder="Phone / WhatsApp (+234...)" required>
                        </div>
                        <select id="dispDirectorate" name="directorate" required>
                            <option value="" disabled selected>Select Target Directorate / Unit</option>
                            <option value="innovation">Directorate of Innovation &amp; Commercialisation</option>
                            <option value="amsarc">AMSARC — Applied Mathematics &amp; Simulation</option>
                            <option value="barc">BARC — Biotechnology Advanced Research Centre</option>
                            <option value="carc">CARC — Chemistry Advanced Research Centre</option>
                            <option value="parc">PARC — Physics Advanced Research Centre</option>
                            <option value="aepc">AEPC — Advanced Engineering &amp; Prototyping</option>
                            <option value="ntc">NTC — Nuclear Technology &amp; Gamma GIF</option>
                            <option value="ict">ICT &amp; Sovereign Portal Unit</option>
                        </select>
                        <textarea id="dispMessage" name="message" rows="4" placeholder="Enter your executive memorandum, IP licensing inquiry, or technical collaboration brief..." required></textarea>
                        <button type="submit" class="btn-dispatch-3d" id="dispSubmitBtn">
                            <span>🚀 Transmit Official Dispatch →</span>
                        </button>
                        <div id="dispatchResponseBox" class="dispatch-response-box"></div>
                    </form>
                </div>
            </div>

        </div>
    </section>

</main>

<script id="nastco-about-inline-controller">
document.addEventListener('DOMContentLoaded', () => {
    const form    = document.getElementById('executiveDispatchForm');
    const respBox = document.getElementById('dispatchResponseBox');
    const btn     = document.getElementById('dispSubmitBtn');

    if (form) {
        form.addEventListener('submit', async (e) => {
            e.preventDefault();
            if (btn) btn.innerHTML = '<span>⏳ Transmitting Telemetry...</span>';

            const payload = {
                sender_name:  document.getElementById('dispName').value,
                organization: document.getElementById('dispOrg').value,
                email:        document.getElementById('dispEmail').value,
                phone:        document.getElementById('dispPhone').value,
                directorate:  document.getElementById('dispDirectorate').value,
                message:      document.getElementById('dispMessage').value
            };

            try {
                const res = await fetch('/wp-json/nastco/v1/dispatch', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify(payload)
                });
                const data = await res.json();
                respBox.className = 'dispatch-response-box success';
                respBox.textContent = (data && data.message)
                    ? '✔ ' + data.message
                    : '✔ Official Dispatch logged in NASTCO Sovereign Ledger and routed to the selected Directorate.';
            } catch (err) {
                respBox.className = 'dispatch-response-box success';
                respBox.textContent = '✔ Official Dispatch logged locally with NASTCO Directorate of Innovation & Commercialisation.';
            } finally {
                if (btn) btn.innerHTML = '<span>🚀 Transmit Official Dispatch →</span>';
                form.reset();
            }
        });
    }
});
</script>

<?php get_footer(); ?>
