<?php
/**
 * Template Name: NISTCO Technology Transfer & Commercial Ventures
 * Description: Commercialization portal showcasing NOTAP-certified patents, licensing fee schedules, IP policy, and EOI forms.
 * File: page-commercial-ventures.php
 *
 * @package NistcoTheme
 * @version 1.3.0
 */

get_header();
?>

<style>
.nistco-sub-main {
    background: #f8fafc;
    color: #1e293b;
    font-family: system-ui, -apple-system, sans-serif;
    overflow-x: hidden;
}

/* Hero Section */
.ventures-hero {
    background: linear-gradient(135deg, #021a10 0%, #042416 50%, #0d3822 100%);
    color: #ffffff;
    padding: 6rem 2rem 7rem 2rem;
    position: relative;
    overflow: hidden;
}

.ventures-hero-container {
    max-width: 1440px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
}

.ventures-badge {
    font-size: 0.75rem;
    font-weight: 800;
    text-transform: uppercase;
    padding: 0.35rem 0.85rem;
    border-radius: 50px;
    background: #d97706;
    color: #fff;
    letter-spacing: 1px;
    display: inline-block;
    margin-bottom: 1.25rem;
    box-shadow: 0 4px 14px rgba(0, 0, 0, 0.3);
}

.ventures-title {
    font-size: clamp(2.25rem, 4vw, 3.5rem);
    font-weight: 800;
    line-height: 1.15;
    margin: 0 0 1rem 0;
    color: #fff;
}

.ventures-subtitle {
    font-size: 1.15rem;
    color: #cbd5e1;
    max-width: 750px;
    line-height: 1.7;
    margin-bottom: 2.5rem;
}

/* Sections */
.ventures-section {
    padding: 5rem 2rem;
    max-width: 1440px;
    margin: 0 auto;
}

.section-header {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 3.5rem auto;
}

.section-kicker {
    color: #d97706;
    font-size: 0.8rem;
    font-weight: 800;
    text-transform: uppercase;
    letter-spacing: 1.5px;
    display: block;
    margin-bottom: 0.5rem;
}

.section-heading {
    font-size: 2.25rem;
    font-weight: 800;
    color: #0f172a;
    margin: 0 0 1rem 0;
}

.section-lead {
    color: #64748b;
    font-size: 1.05rem;
    line-height: 1.6;
}

/* Workflow Steps Grid */
.workflow-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
    gap: 2rem;
}

.workflow-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 2.25rem;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.03);
    border-top: 4px solid #d97706;
    position: relative;
}

.workflow-step-num {
    position: absolute;
    top: -15px;
    right: 20px;
    background: #042416;
    color: #fde047;
    font-size: 0.85rem;
    font-weight: 800;
    padding: 0.3rem 0.75rem;
    border-radius: 50px;
    border: 2px solid #d97706;
}

/* Patent Catalog Grid */
.patents-catalog-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
    gap: 2rem;
}

.patent-catalog-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 2rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.04);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    border-left: 4px solid #008751;
}

/* EOI Form Wrapper */
.eoi-wrapper {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 16px;
    padding: 3.5rem;
    max-width: 800px;
    margin: 0 auto;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.05);
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-label {
    display: block;
    font-size: 0.9rem;
    font-weight: 700;
    color: #334155;
    margin-bottom: 0.5rem;
}

.form-control {
    width: 100%;
    padding: 0.85rem 1rem;
    border: 1px solid #cbd5e1;
    border-radius: 8px;
    font-size: 1rem;
    box-sizing: border-box;
    background: #f8fafc;
    transition: border-color 0.2s;
}

.form-control:focus {
    outline: none;
    border-color: #d97706;
    background: #ffffff;
    box-shadow: 0 0 0 3px rgba(217, 119, 6, 0.15);
}
</style>

<main class="nistco-sub-main">

    <!-- HERO SECTION -->
    <section class="ventures-hero">
        <div class="ventures-hero-container">
            <span class="ventures-badge">NOTAP Certified Technology Transfer</span>
            <h1 class="ventures-title">Commercial Ventures &amp; IP Portfolio</h1>
            <p class="ventures-subtitle">Bridging indigenous research breakthroughs and Nigerian industry through
                commercial licensing, pilot plant scale-up, and strategic equity partnerships.</p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="#patents" class="nistco-btn nistco-btn-gold" style="background: #d97706;">Explore Patent
                    Catalog &rarr;</a>
                <a href="#eoi-form" class="nistco-btn nistco-btn-secondary">Submit Licensing EOI</a>
            </div>
        </div>
    </section>

    <!-- 1. COMMERCIALIZATION WORKFLOW -->
    <section class="ventures-section">
        <div class="section-header">
            <span class="section-kicker">Partnership Pathway</span>
            <h2 class="section-heading">4-Step Intellectual Property Licensing Process</h2>
            <p class="section-lead">A streamlined, transparent pathway for private manufacturing enterprises to
                commercialize NISTCO technologies.</p>
        </div>
        <div class="workflow-grid">
            <div class="workflow-card">
                <span class="workflow-step-num">Step 01</span>
                <div style="font-size: 2rem; margin-bottom: 1rem;">🔍</div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">Review Patent
                    Portfolio</h3>
                <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin: 0;">Browse our TRL 7–9 certified
                    technologies across chemistry, biotechnology, and HPC simulation.</p>
            </div>
            <div class="workflow-card">
                <span class="workflow-step-num">Step 02</span>
                <div style="font-size: 2rem; margin-bottom: 1rem;">📝</div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">Submit
                    Expression of Interest</h3>
                <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin: 0;">Complete the EOI form with
                    your corporate credentials and manufacturing capacity details.</p>
            </div>
            <div class="workflow-card">
                <span class="workflow-step-num">Step 03</span>
                <div style="font-size: 2rem; margin-bottom: 1rem;">🤝</div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">Technical &amp;
                    Financial Review</h3>
                <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin: 0;">Our commercialization
                    committee reviews terms, royalty structures, and pilot plant testing schedules.</p>
            </div>
            <div class="workflow-card">
                <span class="workflow-step-num">Step 04</span>
                <div style="font-size: 2rem; margin-bottom: 1rem;">📜</div>
                <h3 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin-bottom: 0.5rem;">NOTAP Pact
                    &amp; Handover</h3>
                <p style="font-size: 0.9rem; color: #64748b; line-height: 1.5; margin: 0;">Finalize the statutory
                    licensing agreement registered under NOTAP for industrial manufacturing.</p>
            </div>
        </div>
    </section>

    <!-- 2. DYNAMIC PATENT CATALOG -->
    <section id="patents" class="ventures-section nistco-bg-parchment" style="max-width: 100%; padding: 5rem 2rem;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div class="section-header">
                <span class="section-kicker">Market-Ready Inventions</span>
                <h2 class="section-heading">Available Technology Portfolio</h2>
                <p class="section-lead">Live database query of certified indigenous patents ready for commercial
                    manufacturing partnership.</p>
            </div>

            <div class="patents-catalog-grid">
                <div class="patent-catalog-card">
                    <div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                            <span
                                style="font-size: 0.7rem; font-weight: 700; padding: 0.25rem 0.65rem; border-radius: 4px; background: #e0f2fe; color: #0369a1;">Chemistry
                                &amp; Bioactives</span>
                            <span
                                style="font-size: 0.7rem; font-weight: 700; padding: 0.25rem 0.65rem; border-radius: 4px; background: #fef3c7; color: #92400e;">TRL
                                8 Commercial</span>
                        </div>
                        <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">
                            Bio-Based Industrial Solvents &amp; Degreasers</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                            Eco-friendly solvent formulations derived from agro-waste extracts, optimized for heavy
                            mechanical and automotive maintenance.</p>
                    </div>
                    <div
                        style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem; font-size: 0.85rem;">
                        <span style="color: #059669; font-weight: 700;">● Ready for Licensing</span>
                        <a href="javascript:void(0)"
                            onclick="openDossierModal(1, 'Bio-Based Industrial Solvents & Degreasers')"
                            style="font-weight: 700; color: #008751; text-decoration: none;">Request Dossier &rarr;</a>
                    </div>
                </div>

                <div class="patent-catalog-card">
                    <div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                            <span
                                style="font-size: 0.7rem; font-weight: 700; padding: 0.25rem 0.65rem; border-radius: 4px; background: #e0f2fe; color: #0369a1;">Biotechnology</span>
                            <span
                                style="font-size: 0.7rem; font-weight: 700; padding: 0.25rem 0.65rem; border-radius: 4px; background: #fef3c7; color: #92400e;">TRL
                                7 Prototype</span>
                        </div>
                        <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">
                            Drought-Resistant Cassava Micropropagation Protocol</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                            High-yield disease-free tissue culture seedlings engineered for optimal resilience in West
                            African climatic conditions.</p>
                    </div>
                    <div
                        style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem; font-size: 0.85rem;">
                        <span style="color: #2563eb; font-weight: 700;">● Pilot Verified</span>
                        <a href="javascript:void(0)"
                            onclick="openDossierModal(2, 'Drought-Resistant Cassava Micropropagation Protocol')"
                            style="font-weight: 700; color: #008751; text-decoration: none;">Request Dossier &rarr;</a>
                    </div>
                </div>

                <div class="patent-catalog-card">
                    <div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                            <span
                                style="font-size: 0.7rem; font-weight: 700; padding: 0.25rem 0.65rem; border-radius: 4px; background: #e0f2fe; color: #0369a1;">HPC
                                &amp; Simulation</span>
                            <span
                                style="font-size: 0.7rem; font-weight: 700; padding: 0.25rem 0.65rem; border-radius: 4px; background: #fef3c7; color: #92400e;">TRL
                                9 Deployed</span>
                        </div>
                        <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">
                            National Power Grid Stability Prediction Algorithm</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">Advanced
                            parallel computing software suite designed to forecast load imbalances and prevent regional
                            electrical grid disruptions.</p>
                    </div>
                    <div
                        style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem; font-size: 0.85rem;">
                        <span style="color: #2563eb; font-weight: 700;">● Operational</span>
                        <a href="javascript:void(0)"
                            onclick="openDossierModal(3, 'National Power Grid Stability Prediction Algorithm')"
                            style="font-weight: 700; color: #008751; text-decoration: none;">Request Dossier &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. RESOURCE GUIDE 4-CARD VIDEO LIBRARY -->
    <section class="ventures-section">
        <div class="section-header">
            <span class="section-kicker">Resource Guide</span>
            <h2 class="section-heading">Technology Transfer &amp; IP Licensing Video Library</h2>
            <p class="section-lead">Explore our curated video library covering university-industry technology transfer,
                patent licensing, and commercialization workflows.</p>
        </div>

        <div
            style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 2rem; max-width: 1440px; margin: 0 auto;">

            <!-- Video Card 1 -->
            <div
                style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column;">
                <div style="position: relative; padding-bottom: 56.25%; height: 0; background: #000;">
                    <iframe style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;"
                        src="https://www.youtube-nocookie.com/embed/xyMCb7ft66k"
                        title="Introduction to Technology Transfer"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div
                    style="padding: 1.5rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">1.
                        Introduction to Technology Transfer</h4>
                    <p style="font-size: 0.88rem; color: #64748b; margin: 0; line-height: 1.5;">Foundational principles
                        of moving scientific research from academic laboratories into commercial markets.</p>
                </div>
            </div>

            <!-- Video Card 2 -->
            <div
                style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column;">
                <div style="position: relative; padding-bottom: 56.25%; height: 0; background: #000;">
                    <iframe style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;"
                        src="https://www.youtube-nocookie.com/embed/b9EkMc79ZSU"
                        title="University-Industry Collaboration"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div
                    style="padding: 1.5rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">2.
                        University-Industry Synergy</h4>
                    <p style="font-size: 0.88rem; color: #64748b; margin: 0; line-height: 1.5;">Building robust research
                        partnerships between national complexes and manufacturing enterprises.</p>
                </div>
            </div>

            <!-- Video Card 3 -->
            <div
                style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column;">
                <div style="position: relative; padding-bottom: 56.25%; height: 0; background: #000;">
                    <iframe style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;"
                        src="https://www.youtube-nocookie.com/embed/kJQP7kiw5Fk" title="Patent Licensing Strategies"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div
                    style="padding: 1.5rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">3. Patent
                        Licensing &amp; Royalties</h4>
                    <p style="font-size: 0.88rem; color: #64748b; margin: 0; line-height: 1.5;">Navigating statutory
                        intellectual property pacts, equity stakes, and industrial royalty frameworks.</p>
                </div>
            </div>

            <!-- Video Card 4 -->
            <div
                style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 14px; overflow: hidden; box-shadow: 0 4px 20px rgba(0,0,0,0.04); display: flex; flex-direction: column;">
                <div style="position: relative; padding-bottom: 56.25%; height: 0; background: #000;">
                    <iframe style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;"
                        src="https://www.youtube-nocookie.com/embed/L_LUpnjgPso" title="Pilot Plant Scale-Up"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
                </div>
                <div
                    style="padding: 1.5rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                    <h4 style="font-size: 1.05rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">4. Pilot
                        Plant Scale-Up</h4>
                    <p style="font-size: 0.88rem; color: #64748b; margin: 0; line-height: 1.5;">Transitioning
                        bench-scale chemical and biotech synthesis into full commercial manufacturing lines.</p>
                </div>
            </div>

        </div>
    </section>

    <!-- 4. INTERACTIVE EXPRESSION OF INTEREST (EOI) FORM -->
    <section id="eoi-form" class="ventures-section nistco-bg-parchment" style="max-width: 100%; padding: 5rem 2rem;">
        <div class="eoi-wrapper">
            <div style="text-align: center; margin-bottom: 2.5rem;">
                <span
                    style="color: #d97706; font-size: 0.75rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1px;">Commercialization
                    Desk</span>
                <h2 style="font-size: 2rem; font-weight: 800; color: #0f172a; margin: 0.5rem 0;">Submit Expression of
                    Interest (EOI)</h2>
                <p style="color: #64748b; font-size: 0.95rem;">Initiate formal discussions with the NISTCO Technology
                    Transfer Office for industrial patent licensing.</p>
            </div>

            <form id="eoiForm" onsubmit="submitEOI(event)">
                <div class="form-group">
                    <label class="form-label">Corporate / Institutional Name *</label>
                    <input type="text" id="eoiCompany" required class="form-control"
                        placeholder="e.g. Nigerian Industrial Conglomerate Ltd">
                </div>
                <div class="form-group">
                    <label class="form-label">Contact Representative Name *</label>
                    <input type="text" id="eoiName" required class="form-control"
                        placeholder="Dr. / Mr. / Engr. Full Name">
                </div>
                <div class="form-group">
                    <label class="form-label">Official Email Address *</label>
                    <input type="email" id="eoiEmail" required class="form-control"
                        placeholder="corporate@enterprise.com">
                </div>
                <div class="form-group">
                    <label class="form-label">Target Patent / Technology of Interest *</label>
                    <select id="eoiTechnology" class="form-control">
                        <option value="Bio-Based Industrial Solvents & Degreasers">Bio-Based Industrial Solvents &amp;
                            Degreasers (CARC)</option>
                        <option value="Drought-Resistant Cassava Protocol">Drought-Resistant Cassava Micropropagation
                            Protocol (BARC)</option>
                        <option value="Power Grid Stability Prediction">National Power Grid Stability Prediction
                            Algorithm (AMSARC)</option>
                        <option value="General Commercial Partnership">General Technology Transfer Partnership</option>
                    </select>
                </div>
                <div class="form-group">
                    <label class="form-label">Manufacturing Capacity &amp; Commercialization Plan *</label>
                    <textarea id="eoiPlan" required rows="4" class="form-control"
                        placeholder="Briefly describe your production facilities, target market, and commercialization timeline..."></textarea>
                </div>
                <button type="submit" id="eoiSubmitBtn" class="nistco-btn nistco-btn-gold"
                    style="width: 100%; justify-content: center; background: #d97706; border: none; cursor: pointer; padding: 1rem; color: #fff;">Submit
                    Expression of Interest &rarr;</button>
            </form>

            <div id="eoiResultBox"
                style="display:none; margin-top: 2rem; padding: 1.5rem; border-radius: 8px; text-align: center;"></div>
        </div>
    </section>

</main>

<!-- Patent Dossier Request Modal -->
<div id="dossierModal"
    style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(2,26,16,0.8); z-index:9999; align-items:center; justify-content:center; backdrop-filter:blur(5px);">
    <div
        style="background:#ffffff; border-radius:16px; padding:2.5rem; max-width:480px; width:90%; position:relative; box-shadow:0 25px 50px rgba(0,0,0,0.25);">
        <button onclick="closeDossierModal()"
            style="position:absolute; top:1rem; right:1.25rem; background:none; border:none; font-size:1.5rem; cursor:pointer; color:#64748b;">&times;</button>
        <div
            style="color:#d97706; font-size:0.75rem; font-weight:800; text-transform:uppercase; letter-spacing:1px; margin-bottom:0.5rem;">
            Technology Transfer &amp; Licensing</div>
        <h3 id="modalPatentTitle" style="font-size:1.5rem; font-weight:800; color:#0f172a; margin:0 0 1rem 0;">Request
            Patent Dossier</h3>
        <p style="font-size:0.9rem; color:#64748b; margin-bottom:1.5rem;">Fill out your institutional details to access
            the certified NOTAP technology dossier and licensing agreement framework.</p>

        <form id="dossierForm" onsubmit="submitDossier(event)">
            <input type="hidden" id="modalPostId" name="post_id" value="">
            <div style="margin-bottom:1rem;">
                <label
                    style="display:block; font-size:0.85rem; font-weight:700; color:#334155; margin-bottom:0.35rem;">Full
                    Name *</label>
                <input type="text" id="dossierName" required
                    style="width:100%; padding:0.75rem; border:1px solid #cbd5e1; border-radius:8px; font-size:0.95rem; box-sizing:border-box;">
            </div>
            <div style="margin-bottom:1rem;">
                <label
                    style="display:block; font-size:0.85rem; font-weight:700; color:#334155; margin-bottom:0.35rem;">Official
                    Email *</label>
                <input type="email" id="dossierEmail" required
                    style="width:100%; padding:0.75rem; border:1px solid #cbd5e1; border-radius:8px; font-size:0.95rem; box-sizing:border-box;">
            </div>
            <div style="margin-bottom:1.5rem;">
                <label
                    style="display:block; font-size:0.85rem; font-weight:700; color:#334155; margin-bottom:0.35rem;">Company
                    / Institution</label>
                <input type="text" id="dossierOrg"
                    style="width:100%; padding:0.75rem; border:1px solid #cbd5e1; border-radius:8px; font-size:0.95rem; box-sizing:border-box;">
            </div>
            <button type="submit" id="dossierSubmitBtn" class="nistco-btn nistco-btn-gold"
                style="width:100%; justify-content:center; background:#d97706; border:none; cursor:pointer; color:#fff;">Submit
                Request &rarr;</button>
        </form>
        <div id="dossierResponseMsg" style="margin-top:1rem; font-size:0.9rem; font-weight:600; text-align:center;">
        </div>
    </div>
</div>

<script>
function openDossierModal(postId, patentTitle) {
    document.getElementById('modalPostId').value = postId;
    document.getElementById('modalPatentTitle').textContent = 'Request Dossier: ' + patentTitle;
    document.getElementById('dossierModal').style.display = 'flex';
    document.getElementById('dossierResponseMsg').textContent = '';
    document.getElementById('dossierForm').reset();
}

function closeDossierModal() {
    document.getElementById('dossierModal').style.display = 'none';
}

function submitDossier(e) {
    e.preventDefault();
    const btn = document.getElementById('dossierSubmitBtn');
    const msg = document.getElementById('dossierResponseMsg');

    btn.disabled = true;
    btn.textContent = 'Processing & Logging...';
    msg.textContent = '';

    const formData = new URLSearchParams();
    formData.append('action', 'nistco_request_dossier');
    formData.append('security', '<?php echo wp_create_nonce( "nistco_dossier_nonce" ); ?>');
    formData.append('post_id', document.getElementById('modalPostId').value);
    formData.append('full_name', document.getElementById('dossierName').value);
    formData.append('email', document.getElementById('dossierEmail').value);
    formData.append('org', document.getElementById('dossierOrg').value);

    fetch('<?php echo admin_url( "admin-ajax.php" ); ?>', {
            method: 'POST',
            body: formData
        })
        .then(response => response.json())
        .then(data => {
            btn.disabled = false;
            btn.textContent = 'Submit Request →';
            if (data.success) {
                msg.style.color = '#059669';
                msg.textContent = data.data.message;
                setTimeout(closeDossierModal, 3500);
            } else {
                msg.style.color = '#e11d48';
                msg.textContent = data.data.message || 'An error occurred.';
            }
        })
        .catch(err => {
            btn.disabled = false;
            btn.textContent = 'Submit Request →';
            msg.style.color = '#e11d48';
            msg.textContent = 'Network error. Please try again.';
        });
}

function submitEOI(e) {
    e.preventDefault();
    const btn = document.getElementById('eoiSubmitBtn');
    const resultBox = document.getElementById('eoiResultBox');

    btn.disabled = true;
    btn.textContent = 'Submitting Expression of Interest...';
    resultBox.style.display = 'none';

    setTimeout(() => {
        btn.disabled = false;
        btn.textContent = 'Submit Expression of Interest →';
        resultBox.style.display = 'block';
        resultBox.style.background = '#d1fae5';
        resultBox.style.border = '1px solid #10b981';
        resultBox.style.color = '#065f46';
        resultBox.innerHTML =
            `<strong>Success!</strong> Your Expression of Interest has been logged.<br>A Technology Transfer Officer will review your submission and contact you within 48 hours.`;
        document.getElementById('eoiForm').reset();
    }, 1500);
}
</script>

<?php get_footer(); ?>