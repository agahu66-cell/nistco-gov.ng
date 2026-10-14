<?php
/**
 * Template Name: NISTCO Directorate & About Us
 * Description: Official institutional profile detailing NISTCO's legislative mandate, transition history from SHESTCO, executive leadership, and research divisions.
 * File: page-about.php
 *
 * @package NistcoTheme
 * @version 1.0.0
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

/* Mandate Pillars Grid */
.mandate-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; }
.mandate-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 2.25rem; box-shadow: 0 4px 20px rgba(0,0,0,0.03); border-top: 4px solid #008751; }

/* Leadership Directory Grid */
.leadership-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; }
.leader-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 2.25rem; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.03); }
.leader-avatar { width: 90px; height: 90px; border-radius: 50%; background: #021a10; color: #fde047; font-size: 2.25rem; display: flex; align-items: center; justify-content: center; margin: 0 auto 1.25rem auto; border: 3px solid #008751; }

/* Timeline Grid */
.timeline-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; }
.timeline-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 2rem; border-left: 4px solid #d97706; box-shadow: 0 4px 15px rgba(0,0,0,0.03); }
</style>

<main class="nistco-sub-main">

    <!-- HERO SECTION -->
    <section class="about-hero">
        <div class="about-hero-container">
            <span class="about-badge">Federal Republic of Nigeria</span>
            <h1 class="about-title">Nigeria Innovation Science &amp; Technology Complex</h1>
            <p class="about-subtitle">Headquartered in Abuja, NISTCO is Nigeria's premier multidisciplinary R&amp;D complex driving national self-reliance through advanced scientific research, technology commercialization, and high-tech industrial prototyping.</p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="#mandate" class="nistco-btn nistco-btn-primary" style="background: #008751;">Institutional Mandate &rarr;</a>
                <a href="#leadership" class="nistco-btn nistco-btn-secondary">Directorate Leadership</a>
            </div>
        </div>
    </section>

    <!-- 1. HISTORICAL EVOLUTION & TRANSITION -->
    <section class="about-section">
        <div class="section-header">
            <span class="section-kicker">Institutional Heritage</span>
            <h2 class="section-heading">Evolution &amp; Strategic Rebranding</h2>
            <p class="section-lead">From foundational roots to a modern, digital-first national science and technology powerhouse.</p>
        </div>
        <div class="timeline-grid">
            <div class="timeline-card">
                <span style="font-size: 0.75rem; font-weight: 800; color: #d97706; text-transform: uppercase; display: block; margin-bottom: 0.5rem;">Foundational Era</span>
                <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">Sheda Science Complex (SHESTCO)</h3>
                <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">Established as a multi-centre research complex in Abuja, laying the groundwork for advanced nuclear, chemical, and biotech sciences in Nigeria.</p>
            </div>
            <div class="timeline-card" style="border-left-color: #008751;">
                <span style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; display: block; margin-bottom: 0.5rem;">Digital &amp; Structural Modernization</span>
                <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">Transition to NISTCO</h3>
                <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">Comprehensive rebranding and digital infrastructure overhaul integrating high-performance computing, MariaDB patent telemetry, and public accountability portals.</p>
            </div>
            <div class="timeline-card" style="border-left-color: #0ea5e9;">
                <span style="font-size: 0.75rem; font-weight: 800; color: #0ea5e9; text-transform: uppercase; display: block; margin-bottom: 0.5rem;">Present Mandate</span>
                <h3 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">National Innovation Hub</h3>
                <p style="font-size: 0.9rem; color: #64748b; line-height: 1.6; margin: 0;">Executing priority R&amp;D across six specialized centres, bridging the gap between academic discovery and industrial commercialization.</p>
            </div>
        </div>
    </section>

    <!-- 2. INSTITUTIONAL MANDATE & CORE PILLARS -->
    <section id="mandate" class="about-section nistco-bg-parchment" style="max-width: 100%; padding: 5rem 2rem;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div class="section-header">
                <span class="section-kicker">Statutory Objectives</span>
                <h2 class="section-heading">Core Institutional Pillars</h2>
                <p class="section-lead">Our mandate is anchored on four strategic pillars directed toward national economic diversification and technological sovereignty.</p>
            </div>
            <div class="mandate-grid">
                <div class="mandate-card" style="background: #ffffff;">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">🔬</div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin-bottom: 0.75rem;">Advanced Scientific R&amp;D</h3>
                    <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin: 0;">Conducting cutting-edge research in biotechnology, nuclear safety, solid-state physics, and industrial chemical synthesis.</p>
                </div>
                <div class="mandate-card" style="background: #ffffff; border-top-color: #d97706;">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">💡</div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin-bottom: 0.75rem;">Technology Commercialization</h3>
                    <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin: 0;">Translating laboratory prototypes and NOTAP-certified patents into viable commercial products for Nigerian manufacturing enterprises.</p>
                </div>
                <div class="mandate-card" style="background: #ffffff; border-top-color: #0ea5e9;">
                    <div style="font-size: 2rem; margin-bottom: 1rem;">⚙️</div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin-bottom: 0.75rem;">Precision Prototyping &amp; Metrology</h3>
                    <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin: 0;">Providing high-precision CNC manufacturing, ionizing radiation calibration, and certified analytical testing services.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. DIRECTORATE & EXECUTIVE LEADERSHIP -->
    <section id="leadership" class="about-section">
        <div class="section-header">
            <span class="section-kicker">Executive Governance</span>
            <h2 class="section-heading">Directorate Leadership</h2>
            <p class="section-lead">Guided by distinguished scientists and public administrators committed to institutional excellence.</p>
        </div>
        <div class="leadership-grid">
            <div class="leader-card">
                <div class="leader-avatar">👨‍💼</div>
                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.25rem 0;">Director-General / CEO</h3>
                <div style="font-size: 0.85rem; font-weight: 700; color: #008751; margin-bottom: 0.75rem;">Executive Directorate</div>
                <p style="font-size: 0.9rem; color: #64748b; margin: 0;">Providing overall executive leadership, strategic direction, and ministerial liaison under the Federal Ministry of Innovation, Science and Technology.</p>
            </div>
            <div class="leader-card">
                <div class="leader-avatar">👩‍🔬</div>
                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.25rem 0;">Director of Research &amp; Development</h3>
                <div style="font-size: 0.85rem; font-weight: 700; color: #008751; margin-bottom: 0.75rem;">Scientific Directorate</div>
                <p style="font-size: 0.9rem; color: #64748b; margin: 0;">Coordinating inter-centre research programs, academic publications, and international scientific partnerships.</p>
            </div>
            <div class="leader-card">
                <div class="leader-avatar">🏛️</div>
                <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.25rem 0;">Director of Administration &amp; SERVICOM</h3>
                <div style="font-size: 0.85rem; font-weight: 700; color: #008751; margin-bottom: 0.75rem;">Administrative Directorate</div>
                <p style="font-size: 0.9rem; color: #64748b; margin: 0;">Ensuring uncompromised public accountability, statutory compliance, grievance redress, and human resource development.</p>
            </div>
        </div>
    </section>

    <!-- 4. OUR SIX SPECIALIZED CENTRES -->
    <section class="about-section nistco-bg-parchment" style="max-width: 100%; padding: 5rem 2rem;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div class="section-header">
                <span class="section-kicker">Specialized Divisions</span>
                <h2 class="section-heading">The Six Research Centres</h2>
                <p class="section-lead">NISTCO operates through six autonomous, highly specialized research divisions located on our Abuja campus.</p>
            </div>
            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem;">
                <div class="mandate-card" style="background: #ffffff; border-top-color: #0ea5e9;">
                    <span style="font-size: 0.75rem; font-weight: 800; color: #0ea5e9; text-transform: uppercase;">AMSARC</span>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.5rem 0;">Applied Mathematics &amp; Simulation</h3>
                    <p style="font-size: 0.9rem; color: #64748b; margin: 0 0 1rem 0;">HPC clustering, parallel simulations, and smart grid predictive AI.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" style="font-weight: 700; color: #0ea5e9; text-decoration: none; font-size: 0.85rem;">Visit AMSARC Portal &rarr;</a>
                </div>
                <div class="mandate-card" style="background: #ffffff; border-top-color: #f59e0b;">
                    <span style="font-size: 0.75rem; font-weight: 800; color: #f59e0b; text-transform: uppercase;">CARC</span>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.5rem 0;">Chemistry Advanced Research Centre</h3>
                    <p style="font-size: 0.9rem; color: #64748b; margin: 0 0 1rem 0;">Industrial synthesis, green catalysis, and GC-MS/NMR metrology.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" style="font-weight: 700; color: #f59e0b; text-decoration: none; font-size: 0.85rem;">Visit CARC Portal &rarr;</a>
                </div>
                <div class="mandate-card" style="background: #ffffff; border-top-color: #10b981;">
                    <span style="font-size: 0.75rem; font-weight: 800; color: #10b981; text-transform: uppercase;">BARC</span>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.5rem 0;">Biotechnology Advanced Research Centre</h3>
                    <p style="font-size: 0.9rem; color: #64748b; margin: 0 0 1rem 0;">Plant tissue culture, crop genomics, and industrial fermentation.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" style="font-weight: 700; color: #10b981; text-decoration: none; font-size: 0.85rem;">Visit BARC Portal &rarr;</a>
                </div>
                <div class="mandate-card" style="background: #ffffff; border-top-color: #e11d48;">
                    <span style="font-size: 0.75rem; font-weight: 800; color: #e11d48; text-transform: uppercase;">NTC</span>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.5rem 0;">Nuclear Technology Centre</h3>
                    <p style="font-size: 0.9rem; color: #64748b; margin: 0 0 1rem 0;">Radiation safety standards, SSDL calibration, and HPGe spectroscopy.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" style="font-weight: 700; color: #e11d48; text-decoration: none; font-size: 0.85rem;">Visit NTC Portal &rarr;</a>
                </div>
                <div class="mandate-card" style="background: #ffffff; border-top-color: #8b5cf6;">
                    <span style="font-size: 0.75rem; font-weight: 800; color: #8b5cf6; text-transform: uppercase;">PARC</span>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.5rem 0;">Physics Advanced Research Centre</h3>
                    <p style="font-size: 0.9rem; color: #64748b; margin: 0 0 1rem 0;">Solid-state physics, semiconductor characterization, and thin films.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/parc/' ) ); ?>" style="font-weight: 700; color: #8b5cf6; text-decoration: none; font-size: 0.85rem;">Visit PARC Portal &rarr;</a>
                </div>
                <div class="mandate-card" style="background: #ffffff; border-top-color: #06b6d4;">
                    <span style="font-size: 0.75rem; font-weight: 800; color: #06b6d4; text-transform: uppercase;">ATP</span>
                    <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0 0.5rem 0;">Advanced Tooling &amp; Prototyping</h3>
                    <p style="font-size: 0.9rem; color: #64748b; margin: 0 0 1rem 0;">Precision 5-axis CNC machining, SLM 3D printing, and pilot molds.</p>
                    <a href="<?php echo esc_url( home_url( '/centres/atp/' ) ); ?>" style="font-weight: 700; color: #06b6d4; text-decoration: none; font-size: 0.85rem;">Visit ATP Portal &rarr;</a>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>
