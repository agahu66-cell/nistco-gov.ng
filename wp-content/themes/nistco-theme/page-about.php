<?php
/**
 * Template Name: NISTCO Directorate & About Us
 * Description: Comprehensive institutional profile featuring political oversight, executive leadership, principal directors, centre directors, history, and modern features.
 * File: page-about.php
 *
 * @package NistcoTheme
 * @version 2.0.0
 */

get_header();
?>

<style>
.nistco-sub-main { background: #f8fafc; color: #1e293b; font-family: system-ui, -apple-system, sans-serif; overflow-x: hidden; }

/* Hero Section */
.about-hero {
    background: linear-gradient(135deg, #021a10 0%, #042416 50%, #022d1a 100%);
    color: #ffffff;
    padding: 6rem 2rem 7rem 2rem;
    position: relative;
    overflow: hidden;
}
.about-hero-container { max-width: 1440px; margin: 0 auto; position: relative; z-index: 2; }
.about-badge { font-size: 0.75rem; font-weight: 800; text-transform: uppercase; padding: 0.35rem 0.85rem; border-radius: 50px; background: #008751; color: #fff; letter-spacing: 1px; display: inline-block; margin-bottom: 1.25rem; box-shadow: 0 4px 14px rgba(0,0,0,0.3); }
.about-title { font-size: clamp(2.25rem, 4vw, 3.5rem); font-weight: 800; line-height: 1.15; margin: 0 0 1rem 0; color: #fff; }
.about-subtitle { font-size: 1.15rem; color: #cbd5e1; max-width: 750px; line-height: 1.7; margin-bottom: 2.5rem; }

/* Sections */
.about-section { padding: 5rem 2rem; max-width: 1440px; margin: 0 auto; }
.section-header { text-align: center; max-width: 700px; margin: 0 auto 3.5rem auto; }
.section-kicker { color: #008751; font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem; }
.section-heading { font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0; }
.section-lead { color: #64748b; font-size: 1.05rem; line-height: 1.6; }

/* Grids */
.political-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 2rem; }
.political-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 2rem; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.03); border-top: 4px solid #d97706; }

.director-spotlight { background: linear-gradient(135deg, #042416 0%, #021a10 100%); color: #ffffff; border-radius: 20px; padding: 3.5rem; border: 1px solid rgba(217,119,6,0.3); box-shadow: 0 20px 40px rgba(0,0,0,0.2); display: grid; grid-template-columns: 280px 1fr; gap: 3rem; align-items: center; }
@media(max-width: 900px) { .director-spotlight { grid-template-columns: 1fr; text-align: center; } }

.principal-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; }
.principal-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 2.25rem; box-shadow: 0 4px 15px rgba(0,0,0,0.03); border-left: 4px solid #008751; }

.centres-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem; }
.centre-dir-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 2.25rem; box-shadow: 0 4px 15px rgba(0,0,0,0.03); border-top: 4px solid #0ea5e9; }

.timeline-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 2rem; }
.timeline-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 2rem; border-left: 4px solid #d97706; box-shadow: 0 4px 15px rgba(0,0,0,0.03); }

.standout-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; }
.standout-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 2.25rem; box-shadow: 0 4px 15px rgba(0,0,0,0.03); border-top: 4px solid #059669; }
</style>

<main class="nistco-sub-main">

    <!-- HERO SECTION -->
    <section class="about-hero">
        <div class="about-hero-container">
            <span class="about-badge">Federal Republic of Nigeria</span>
            <h1 class="about-title">Nigeria Innovation Science &amp; Technology Complex</h1>
            <p class="about-subtitle">Headquartered in Abuja, NISTCO is Nigeria's premier multidisciplinary R&amp;D complex driving national self-reliance through advanced scientific research, technology commercialization, and high-tech industrial prototyping.</p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="#leadership" class="nistco-btn nistco-btn-primary" style="background: #008751;">Explore Directorate &rarr;</a>
                <a href="#history" class="nistco-btn nistco-btn-secondary">Institutional History</a>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         1. POLITICAL & OVERSIGHT LEADERSHIP
         ========================================================================= -->
    <section class="about-section">
        <div class="section-header">
            <span class="section-kicker">Federal Government Oversight</span>
            <h2 class="section-heading">Political &amp; Ministerial Leadership</h2>
            <p class="section-lead">Operating under the supreme policy direction of the Presidency and the Federal Ministry of Innovation, Science and Technology.</p>
        </div>

        <div class="political-grid">
            <div class="political-card">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🇳🇬</div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0 0 0.25rem 0;">President, Federal Republic of Nigeria</h3>
                <div style="font-size: 0.8rem; font-weight: 700; color: #d97706; text-transform: uppercase; margin-bottom: 0.75rem;">Grand Patron of Science &amp; Technology</div>
                <p style="font-size: 0.88rem; color: #64748b; margin: 0;">Providing overarching national vision for economic diversification through digital innovation and indigenous R&amp;D.</p>
            </div>

            <div class="political-card">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">🏛️</div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0 0 0.25rem 0;">Hon. Minister</h3>
                <div style="font-size: 0.8rem; font-weight: 700; color: #d97706; text-transform: uppercase; margin-bottom: 0.75rem;">Federal Ministry of Innovation, Science &amp; Technology</div>
                <p style="font-size: 0.88rem; color: #64748b; margin: 0;">Supervising ministerial policy formulation, budgetary execution, and national technology commercialization initiatives.</p>
            </div>

            <div class="political-card">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">📊</div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0 0 0.25rem 0;">Permanent Secretary</h3>
                <div style="font-size: 0.8rem; font-weight: 700; color: #d97706; text-transform: uppercase; margin-bottom: 0.75rem;">Financial &amp; Administrative Oversight</div>
                <p style="font-size: 0.88rem; color: #64748b; margin: 0;">Directing administrative governance, financial compliance, and civil service coordination across ministry parastatals.</p>
            </div>

            <div class="political-card">
                <div style="font-size: 2.5rem; margin-bottom: 1rem;">⚖️</div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0 0 0.25rem 0;">Governing Board Chairman</h3>
                <div style="font-size: 0.8rem; font-weight: 700; color: #d97706; text-transform: uppercase; margin-bottom: 0.75rem;">NISTCO Governing Board</div>
                <p style="font-size: 0.88rem; color: #64748b; margin: 0;">Chairing the statutory board responsible for institutional governance, strategic alignment, and research asset approvals.</p>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. DG / CEO SPECIAL SPOTLIGHT SECTION
         ========================================================================= -->
    <section id="leadership" class="about-section nistco-bg-parchment" style="max-width: 100%; padding: 5rem 2rem;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div class="section-header">
                <span class="section-kicker">Executive Directorate</span>
                <h2 class="section-heading">Office of the Director-General / CEO</h2>
                <p class="section-lead">Spearheading Nigeria's high-tech scientific advancement and industrial self-reliance.</p>
            </div>

            <div class="director-spotlight">
                <div style="text-align: center;">
                    <div style="width: 180px; height: 180px; border-radius: 50%; background: #008751; color: #fde047; font-size: 5rem; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.5rem auto; border: 4px solid #d97706; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
                        👨‍🔬
                    </div>
                    <h3 style="font-size: 1.35rem; font-weight: 800; color: #fff; margin: 0 0 0.25rem 0;">Prof. / Dr. Director-General</h3>
                    <span style="font-size: 0.85rem; font-weight: 700; color: #fde047; text-transform: uppercase;">DG / CEO, NISTCO</span>
                </div>
                <div>
                    <span style="color: #fde047; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px; display: block; margin-bottom: 0.5rem;">Executive Address</span>
                    <h3 style="font-size: 1.75rem; font-weight: 800; color: #fff; margin: 0 0 1rem 0;">Driving Indigenous Innovation &amp; Industrial Transformation</h3>
                    <p style="color: #cbd5e1; font-size: 1.05rem; line-height: 1.7; margin-bottom: 1.5rem;">
                        "Under our modern digital-first mandate, NISTCO is actively bridging the historic gap between academic discovery and commercial manufacturing. By combining advanced HPC simulation, MariaDB patent telemetry, and strict SERVICOM public accountability, we are positioning Nigerian science as a global economic catalyst."
                    </p>
                    <div style="display: flex; gap: 1.5rem; flex-wrap: wrap; font-size: 0.9rem; color: #fde047; font-weight: 700;">
                        <span>✓ Abuja Headquarters</span>
                        <span>✓ NOTAP IP Patronage</span>
                        <span>✓ 6 Specialized Research Centres</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         3. PRINCIPAL DIRECTORATE OFFICERS
         ========================================================================= -->
    <section class="about-section">
        <div class="section-header">
            <span class="section-kicker">Administrative &amp; Commercial Governance</span>
            <h2 class="section-heading">Principal Directorate Officers</h2>
            <p class="section-lead">Managing institutional administration, financial integrity, and technology commercialization.</p>
        </div>

        <div class="principal-grid">
            <div class="principal-card">
                <span style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; display: block; margin-bottom: 0.25rem;">Directorate of Administration</span>
                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Director of Administration &amp; SERVICOM</h3>
                <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">Overseeing human resources, civil service compliance, general registry, and the SERVICOM public accountability desk across all campuses.</p>
            </div>

            <div class="principal-card" style="border-left-color: #d97706;">
                <span style="font-size: 0.75rem; font-weight: 800; color: #d97706; text-transform: uppercase; display: block; margin-bottom: 0.25rem;">Financial Directorate</span>
                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Director of Finance &amp; Accounts</h3>
                <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">Managing institutional budgeting, treasury compliance, research grant accounting, and commercial patent royalty disbursements.</p>
            </div>

            <div class="principal-card" style="border-left-color: #0ea5e9;">
                <span style="font-size: 0.75rem; font-weight: 800; color: #0ea5e9; text-transform: uppercase; display: block; margin-bottom: 0.25rem;">Commercialization Directorate</span>
                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Director of Innovation &amp; Commercialisation</h3>
                <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">Directing the NOTAP patent transfer office, industrial equity partnerships, and pilot plant manufacturing scale-ups.</p>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. SPECIALIZED CENTRE DIRECTORS
         ========================================================================= -->
    <section class="about-section nistco-bg-parchment" style="max-width: 100%; padding: 5rem 2rem;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div class="section-header">
                <span class="section-kicker">Scientific Leadership</span>
                <h2 class="section-heading">Specialized Centre Directors</h2>
                <p class="section-lead">Distinguished research leaders heading NISTCO's six autonomous R&amp;D centres.</p>
            </div>

            <div class="centres-grid">
                <div class="centre-dir-card">
                    <span style="font-size: 0.75rem; font-weight: 800; color: #0ea5e9; text-transform: uppercase;">AMSARC Division</span>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.25rem 0;">Director, AMSARC</h3>
                    <p style="font-size: 0.88rem; color: #64748b; margin: 0 0 1rem 0;">Applied Mathematics &amp; Simulation Advanced Research Centre (HPC &amp; AI Grid Modeling).</p>
                    <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" style="font-weight: 700; color: #0ea5e9; text-decoration: none; font-size: 0.85rem;">View Centre Portal &rarr;</a>
                </div>

                <div class="centre-dir-card" style="border-top-color: #f59e0b;">
                    <span style="font-size: 0.75rem; font-weight: 800; color: #f59e0b; text-transform: uppercase;">CARC Division</span>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.25rem 0;">Director, CARC</h3>
                    <p style="font-size: 0.88rem; color: #64748b; margin: 0 0 1rem 0;">Chemistry Advanced Research Centre (Industrial Synthesis &amp; GC-MS Metrology).</p>
                    <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" style="font-weight: 700; color: #f59e0b; text-decoration: none; font-size: 0.85rem;">View Centre Portal &rarr;</a>
                </div>

                <div class="centre-dir-card" style="border-top-color: #10b981;">
                    <span style="font-size: 0.75rem; font-weight: 800; color: #10b981; text-transform: uppercase;">BARC Division</span>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.25rem 0;">Director, BARC</h3>
                    <p style="font-size: 0.88rem; color: #64748b; margin: 0 0 1rem 0;">Biotechnology Advanced Research Centre (Tissue Culture &amp; Fermentation).</p>
                    <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" style="font-weight: 700; color: #10b981; text-decoration: none; font-size: 0.85rem;">View Centre Portal &rarr;</a>
                </div>

                <div class="centre-dir-card" style="border-top-color: #e11d48;">
                    <span style="font-size: 0.75rem; font-weight: 800; color: #e11d48; text-transform: uppercase;">NTC Division</span>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.25rem 0;">Director, NTC</h3>
                    <p style="font-size: 0.88rem; color: #64748b; margin: 0 0 1rem 0;">Nuclear Technology Centre (Radiation Safety Standards &amp; SSDL Calibration).</p>
                    <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" style="font-weight: 700; color: #e11d48; text-decoration: none; font-size: 0.85rem;">View Centre Portal &rarr;</a>
                </div>

                <div class="centre-dir-card" style="border-top-color: #8b5cf6;">
                    <span style="font-size: 0.75rem; font-weight: 800; color: #8b5cf6; text-transform: uppercase;">PARC Division</span>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.25rem 0;">Director, PARC</h3>
                    <p style="font-size: 0.88rem; color: #64748b; margin: 0 0 1rem 0;">Physics Advanced Research Centre (Solid-State Physics &amp; Photovoltaics).</p>
                    <a href="<?php echo esc_url( home_url( '/centres/parc/' ) ); ?>" style="font-weight: 700; color: #8b5cf6; text-decoration: none; font-size: 0.85rem;">View Centre Portal &rarr;</a>
                </div>

                <div class="centre-dir-card" style="border-top-color: #06b6d4;">
                    <span style="font-size: 0.75rem; font-weight: 800; color: #06b6d4; text-transform: uppercase;">ATP Division</span>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.25rem 0;">Director, ATP</h3>
                    <p style="font-size: 0.88rem; color: #64748b; margin: 0 0 1rem 0;">Advanced Tooling &amp; Prototyping (5-Axis CNC Machining &amp; SLM 3D Printing).</p>
                    <a href="<?php echo esc_url( home_url( '/centres/atp/' ) ); ?>" style="font-weight: 700; color: #06b6d4; text-decoration: none; font-size: 0.85rem;">View Centre Portal &rarr;</a>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. BRIEF HISTORY & EVOLUTION
         ========================================================================= -->
    <section id="history" class="about-section">
        <div class="section-header">
            <span class="section-kicker">Institutional Heritage</span>
            <h2 class="section-heading">Brief History &amp; Strategic Evolution</h2>
            <p class="section-lead">Tracing our journey from foundational scientific establishment to a modern digital-first federal research complex.</p>
        </div>

        <div class="timeline-grid">
            <div class="timeline-card">
                <span style="font-size: 0.75rem; font-weight: 800; color: #d97706; text-transform: uppercase; display: block; margin-bottom: 0.5rem;">Foundational Era</span>
                <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">Sheda Science Complex (SHESTCO)</h3>
                <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">Established in Abuja under the Federal Ministry of Science and Technology to spearhead advanced multidisciplinary research in biotechnology, chemistry, physics, and nuclear science.</p>
            </div>

            <div class="timeline-card" style="border-left-color: #008751;">
                <span style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; display: block; margin-bottom: 0.5rem;">Modern Era Transformation</span>
                <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">Transition to NISTCO</h3>
                <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">Strategic institutional rebranding to the Nigeria Innovation Science and Technology Complex, integrating digital public portals, MariaDB patent tracking, and automated instrumentation booking.</p>
            </div>

            <div class="timeline-card" style="border-left-color: #0ea5e9;">
                <span style="font-size: 0.75rem; font-weight: 800; color: #0ea5e9; text-transform: uppercase; display: block; margin-bottom: 0.5rem;">Future-Ready Horizon</span>
                <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">National Innovation Sovereign Hub</h3>
                <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">Scaling indigenous pilot plants, expanding HPC simulation clusters, and driving commercial technology transfer for national industrial self-sufficiency.</p>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. STANDOUT MODERN FEATURES
         ========================================================================= -->
    <section class="about-section nistco-bg-parchment" style="max-width: 100%; padding: 5rem 2rem;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div class="section-header">
                <span class="section-kicker">Digital Distinction</span>
                <h2 class="section-heading">Standout Features in the Modern Era</h2>
                <p class="section-lead">What makes NISTCO a benchmark for public research institutions across West Africa.</p>
            </div>

            <div class="standout-grid">
                <div class="standout-card">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">📊</div>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">MariaDB Patent Telemetry</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin: 0;">Real-time tracking of Technology Readiness Levels (TRL), licensing statuses, and dossier downloads.</p>
                </div>

                <div class="standout-card" style="border-top-color: #0ea5e9;">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">⚡</div>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">Automated Instrumentation Booking</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin: 0;">Seamless online reservation desk for HPC compute time, GC-MS assays, and SEM imaging suites.</p>
                </div>

                <div class="standout-card" style="border-top-color: #d97706;">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">🛡️</div>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">SERVICOM &amp; ACTU Oversight</h3>
                    <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin: 0;">Guaranteed service timelines, ticket tracking, and ICPC-monitored anti-corruption compliance.</p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
