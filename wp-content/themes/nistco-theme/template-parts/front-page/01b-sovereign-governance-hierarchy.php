<?php
/**
 * NASTCO Sovereign Portal — Executive Governance & Statutory Hierarchy Sections
 * Includes:
 *   1. Presidential Mandate Section (President & C-in-C)
 *   2. Federal Executive / Advisory Council (FAC) Section
 *   3. Honourable Minister (FMST / FMIST) Section
 *   4. Permanent Secretary (FMST) Section
 *   5. NASTCO Governing Board Chairman Section
 *   6. Director-General / CEO (NASTCO) Command Section
 */
defined( 'ABSPATH' ) || exit;

$assets_uri = get_template_directory_uri() . '/assets/images';
?>

<style id="nastco-governance-hierarchy-css">
    .nastco-gov-stage {
        padding: 4rem 1.5rem;
        background:
            radial-gradient(circle at 12% 10%, rgba(250, 204, 21, 0.09), transparent 38%),
            radial-gradient(circle at 88% 45%, rgba(16, 185, 129, 0.08), transparent 40%),
            linear-gradient(180deg, #040914 0%, #060f22 50%, #040914 100%);
        color: #f8fafc;
        border-bottom: 1px solid rgba(250, 204, 21, 0.22);
    }
    .nastco-gov-container {
        max-width: 1360px;
        margin: 0 auto;
        display: flex;
        flex-direction: column;
        gap: 3rem;
    }
    .nastco-gov-kicker {
        display: inline-flex;
        align-items: center;
        gap: 0.5rem;
        padding: 0.38rem 0.95rem;
        border-radius: 999px;
        font-size: 0.72rem;
        font-weight: 800;
        letter-spacing: 0.08em;
        text-transform: uppercase;
        margin-bottom: 0.9rem;
    }
    .nastco-gov-card-3d {
        position: relative;
        background: linear-gradient(150deg, rgba(13, 23, 44, 0.92), rgba(5, 11, 24, 0.97));
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 22px;
        padding: 2.5rem;
        box-shadow: 0 24px 55px rgba(0, 0, 0, 0.72), inset 0 1px 0 rgba(255, 255, 255, 0.12);
        overflow: hidden;
        transition: transform 0.3s cubic-bezier(0.16, 1, 0.3, 1), border-color 0.3s ease;
    }
    .nastco-gov-card-3d:hover {
        transform: translateY(-4px);
    }

    /* Portrait & Profile Frame */
    .nastco-gov-split {
        display: grid;
        grid-template-columns: 280px 1fr;
        gap: 2.5rem;
        align-items: center;
    }
    .nastco-gov-portrait-box {
        position: relative;
        border-radius: 18px;
        background: radial-gradient(circle at 50% 25%, rgba(250, 204, 21, 0.22), rgba(4, 9, 20, 0.96));
        border: 2px solid var(--gov-accent, #facc15);
        padding: 1.25rem;
        text-align: center;
        box-shadow: 0 16px 35px rgba(0, 0, 0, 0.65);
    }
    .nastco-gov-avatar {
        width: 150px;
        height: 150px;
        margin: 0 auto 1rem;
        border-radius: 50%;
        background: linear-gradient(135deg, rgba(255,255,255,0.08), rgba(255,255,255,0.02));
        border: 2px solid var(--gov-accent, #facc15);
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 2.2rem;
        font-weight: 900;
        color: var(--gov-accent, #facc15);
        overflow: hidden;
        box-shadow: 0 0 25px rgba(0, 0, 0, 0.6);
    }
    .nastco-gov-avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    .nastco-gov-seal-tag {
        display: inline-block;
        padding: 0.28rem 0.7rem;
        border-radius: 6px;
        font-size: 0.68rem;
        font-weight: 900;
        letter-spacing: 0.07em;
        background: rgba(255, 255, 255, 0.06);
        color: var(--gov-accent, #facc15);
        border: 1px solid var(--gov-accent, #facc15);
        text-transform: uppercase;
    }
    .nastco-gov-name {
        font-size: 1.05rem;
        font-weight: 900;
        color: #ffffff;
        margin: 0.65rem 0 0.2rem;
    }
    .nastco-gov-role {
        font-size: 0.75rem;
        color: #94a3b8;
        font-weight: 700;
    }

    /* Content & Pillar Metrics */
    .nastco-gov-title {
        font-size: clamp(1.55rem, 2.6vw, 2.25rem);
        font-weight: 900;
        color: #ffffff;
        margin: 0 0 0.85rem;
        line-height: 1.2;
    }
    .nastco-gov-quote {
        font-size: 0.98rem;
        line-height: 1.72;
        color: #cbd5e1;
        margin: 0 0 1.5rem;
        padding-left: 1rem;
        border-left: 3px solid var(--gov-accent, #facc15);
    }
    .nastco-gov-pillars {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(195px, 1fr));
        gap: 1rem;
    }
    .nastco-gov-pillar {
        background: rgba(4, 9, 20, 0.68);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-radius: 12px;
        padding: 0.9rem 1.1rem;
    }
    .nastco-gov-pillar strong {
        display: block;
        font-size: 0.88rem;
        color: var(--gov-accent, #facc15);
        margin-bottom: 0.2rem;
    }
    .nastco-gov-pillar span {
        font-size: 0.76rem;
        color: #94a3b8;
    }

    @media (max-width: 900px) {
        .nastco-gov-split {
            grid-template-columns: 1fr;
        }
        .nastco-gov-portrait-box {
            max-width: 320px;
            margin: 0 auto;
        }
    }
</style>

<div class="nastco-gov-stage" id="sovereign-governance-hierarchy">
    <div class="nastco-gov-container">

        <!-- ==============================================================
             SECTION A: PRESIDENTIAL SOVEREIGN MANDATE SECTION
             ============================================================== -->
        <section id="presidential-mandate-section" class="nastco-gov-card-3d" style="--gov-accent: #10b981; border-top: 4px solid #10b981;">
            <div class="nastco-gov-split">
                <div class="nastco-gov-portrait-box">
                    <div class="nastco-gov-avatar">
                        <img src="<?php echo esc_url( $assets_uri . '/president-portrait.jpg' ); ?>" alt="President of the Federal Republic of Nigeria" onerror="this.style.display='none'; this.parentNode.innerText='GCFR';">
                    </div>
                    <span class="nastco-gov-seal-tag">COMMANDER-IN-CHIEF • FGN</span>
                    <div class="nastco-gov-name">His Excellency, Bola Ahmed Tinubu, GCFR</div>
                    <div class="nastco-gov-role">President, Federal Republic of Nigeria</div>
                </div>
                <div>
                    <div class="nastco-gov-kicker" style="background:rgba(16,185,129,0.12); border:1px solid rgba(16,185,129,0.35); color:#10b981;">
                        <span>🇳🇬 PRESIDENTIAL SOVEREIGN SCIENCE &amp; INDUSTRIALIZATION MANDATE</span>
                    </div>
                    <h2 class="nastco-gov-title">Renewed Hope Agenda for Sovereign Scientific &amp; Technological Self-Reliance</h2>
                    <blockquote class="nastco-gov-quote">
                        "Transforming Nigeria from a technology-consuming nation into a sovereign industrial innovator through high-performance computing, biotechnology, clean electric power, and peaceful nuclear applications anchored at Sheda Science City."
                    </blockquote>
                    <div class="nastco-gov-pillars">
                        <div class="nastco-gov-pillar">
                            <strong>Sovereign R&amp;D Priority</strong>
                            <span>Import substitution &amp; indigenous IP commercialization</span>
                        </div>
                        <div class="nastco-gov-pillar">
                            <strong>Presidential Executive Order 5</strong>
                            <span>Local content in science, engineering &amp; technology</span>
                        </div>
                        <div class="nastco-gov-pillar">
                            <strong>National Food &amp; Energy Security</strong>
                            <span>BARC bio-crops &amp; AEPC direct-DC microgrids</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==============================================================
             SECTION B: FAC (FEDERAL EXECUTIVE / ADVISORY COUNCIL) SECTION
             ============================================================== -->
        <section id="fac-council-section" class="nastco-gov-card-3d" style="--gov-accent: #facc15; border-top: 4px solid #facc15;">
            <div class="nastco-gov-split">
                <div class="nastco-gov-portrait-box">
                    <div class="nastco-gov-avatar">
                        <img src="<?php echo esc_url( $assets_uri . '/fac-seal.jpg' ); ?>" alt="FAC Council Seal" onerror="this.style.display='none'; this.parentNode.innerText='FAC';">
                    </div>
                    <span class="nastco-gov-seal-tag">STATUTORY OVERSIGHT</span>
                    <div class="nastco-gov-name">Federal Advisory &amp; Allocation Council (FAC)</div>
                    <div class="nastco-gov-role">National Science, Research &amp; Fiscal Governance</div>
                </div>
                <div>
                    <div class="nastco-gov-kicker" style="background:rgba(250,204,21,0.12); border:1px solid rgba(250,204,21,0.35); color:#facc15;">
                        <span>⚖️ FAC STATUTORY POLICY, FISCAL ALLOCATION &amp; AUDIT COMPLIANCE</span>
                    </div>
                    <h2 class="nastco-gov-title">FAC Strategic Oversight &amp; Sovereign R&amp;D Resource Governance</h2>
                    <blockquote class="nastco-gov-quote">
                        "Ensuring transparent fiscal allocation, inter-ministerial technical synergy, and strict compliance with the Public Procurement Act (PPA 2007) and NOTAP royalty frameworks across all six NASTCO Research Directorates."
                    </blockquote>
                    <div class="nastco-gov-pillars">
                        <div class="nastco-gov-pillar">
                            <strong>100% LiveLedger Audit</strong>
                            <span>Real-time treasury &amp; IGR royalty transparency</span>
                        </div>
                        <div class="nastco-gov-pillar">
                            <strong>PPA 2007 Compliant</strong>
                            <span>Statutory procurement &amp; infrastructure governance</span>
                        </div>
                        <div class="nastco-gov-pillar">
                            <strong>Multi-Sectoral Synergy</strong>
                            <span>Linking academia, defence, energy &amp; industry</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==============================================================
             SECTION C: FMST MINISTER SECTION
             ============================================================== -->
        <section id="fmst-minister-section" class="nastco-gov-card-3d" style="--gov-accent: #38bdf8; border-top: 4px solid #38bdf8;">
            <div class="nastco-gov-split">
                <div class="nastco-gov-portrait-box">
                    <div class="nastco-gov-avatar">
                        <img src="<?php echo esc_url( $assets_uri . '/fmst-minister.jpg' ); ?>" alt="Honourable Minister FMST" onerror="this.style.display='none'; this.parentNode.innerText='HM-FMST';">
                    </div>
                    <span class="nastco-gov-seal-tag">MINISTERIAL PORTFOLIO • FMST</span>
                    <div class="nastco-gov-name">Honourable Minister of Innovation, Science &amp; Technology</div>
                    <div class="nastco-gov-role">Federal Ministry of Innovation, Science &amp; Technology (FMST)</div>
                </div>
                <div>
                    <div class="nastco-gov-kicker" style="background:rgba(56,189,248,0.12); border:1px solid rgba(56,189,248,0.35); color:#38bdf8;">
                        <span>🏛️ FMST MINISTERIAL POLICY DIRECTIVE &amp; COMMERCIALISATION BLUEPRINT</span>
                    </div>
                    <h2 class="nastco-gov-title">Accelerating Lab-to-Market Commercialisation Across Nigeria</h2>
                    <blockquote class="nastco-gov-quote">
                        "Under the supervisory mandate of the Federal Ministry of Innovation, Science and Technology (FMST), NASTCO serves as Nigeria's central scientific engine—translating patented research into industrial joint ventures."
                    </blockquote>
                    <div class="nastco-gov-pillars">
                        <div class="nastco-gov-pillar">
                            <strong>National STI Policy</strong>
                            <span>Driving GDP growth via indigenous patents</span>
                        </div>
                        <div class="nastco-gov-pillar">
                            <strong>NOTAP IP Protection</strong>
                            <span>Sovereign patent filing &amp; licensing enforcement</span>
                        </div>
                        <div class="nastco-gov-pillar">
                            <strong>6-Centre Coordination</strong>
                            <span>Unified ministerial supervision of AMSARC–NTC</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==============================================================
             SECTION D: FMST PERMANENT SECRETARY SECTION
             ============================================================== -->
        <section id="fmst-permsec-section" class="nastco-gov-card-3d" style="--gov-accent: #a855f7; border-top: 4px solid #a855f7;">
            <div class="nastco-gov-split">
                <div class="nastco-gov-portrait-box">
                    <div class="nastco-gov-avatar">
                        <img src="<?php echo esc_url( $assets_uri . '/fmst-permsec.jpg' ); ?>" alt="Permanent Secretary FMST" onerror="this.style.display='none'; this.parentNode.innerText='PS-FMST';">
                    </div>
                    <span class="nastco-gov-seal-tag">ACCOUNTING OFFICER • FMST</span>
                    <div class="nastco-gov-name">Permanent Secretary, FMST</div>
                    <div class="nastco-gov-role">Federal Ministry of Innovation, Science &amp; Technology</div>
                </div>
                <div>
                    <div class="nastco-gov-kicker" style="background:rgba(168,85,247,0.12); border:1px solid rgba(168,85,247,0.35); color:#a855f7;">
                        <span>📋 FMST ADMINISTRATIVE CONTINUITY &amp; CIVIL SERVICE EXCELLENCE</span>
                    </div>
                    <h2 class="nastco-gov-title">Institutional Process Integrity, Civil Service Reforms &amp; Regulatory Assurance</h2>
                    <blockquote class="nastco-gov-quote">
                        "Strengthening administrative efficiency, digital workflow automation, human capital development, and statutory accounting compliance across the Sheda Science City research ecosystem."
                    </blockquote>
                    <div class="nastco-gov-pillars">
                        <div class="nastco-gov-pillar">
                            <strong>FCSC &amp; Public Service Rules</strong>
                            <span>Merit-driven scientific &amp; administrative cadence</span>
                        </div>
                        <div class="nastco-gov-pillar">
                            <strong>Digital Governance</strong>
                            <span>Paperless telemetry &amp; automated KPI tracking</span>
                        </div>
                        <div class="nastco-gov-pillar">
                            <strong>Capital Project Assurance</strong>
                            <span>Timely execution of sovereign laboratory upgrades</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==============================================================
             SECTION E: NASTCO GOVERNING BOARD CHAIR SECTION
             ============================================================== -->
        <section id="nastco-board-chair-section" class="nastco-gov-card-3d" style="--gov-accent: #f59e0b; border-top: 4px solid #f59e0b;">
            <div class="nastco-gov-split">
                <div class="nastco-gov-portrait-box">
                    <div class="nastco-gov-avatar">
                        <img src="<?php echo esc_url( $assets_uri . '/nastco-board-chair.jpg' ); ?>" alt="NASTCO Governing Board Chairman" onerror="this.style.display='none'; this.parentNode.innerText='CHAIR';">
                    </div>
                    <span class="nastco-gov-seal-tag">GOVERNING BOARD • NASTCO</span>
                    <div class="nastco-gov-name">Chairman, NASTCO Governing Board</div>
                    <div class="nastco-gov-role">National Science and Technology Complex (NASTCO)</div>
                </div>
                <div>
                    <div class="nastco-gov-kicker" style="background:rgba(245,158,11,0.12); border:1px solid rgba(245,158,11,0.35); color:#f59e0b;">
                        <span>🛡️ NASTCO GOVERNING BOARD STRATEGIC DIRECTION &amp; VENTURE APPROVALS</span>
                    </div>
                    <h2 class="nastco-gov-title">Governing Board Charter: Public-Private Ventures &amp; 40/35/25 Royalty Equity</h2>
                    <blockquote class="nastco-gov-quote">
                        "Providing strategic board governance to unlock institutional intellectual property, safeguard researcher incentives under the 40% / 35% / 25% royalty formula, and forge global industrial partnerships."
                    </blockquote>
                    <div class="nastco-gov-pillars">
                        <div class="nastco-gov-pillar">
                            <strong>40 / 35 / 25 Royalty Split</strong>
                            <span>Board-ratified equity for inventors &amp; centres</span>
                        </div>
                        <div class="nastco-gov-pillar">
                            <strong>PPP Venture Clearance</strong>
                            <span>Fast-track industrial licensing &amp; spin-offs</span>
                        </div>
                        <div class="nastco-gov-pillar">
                            <strong>Fiduciary Stewardship</strong>
                            <span>Quarterly audit &amp; Looker Studio telemetry review</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==============================================================
             SECTION F: DG/CEO NASTCO EXECUTIVE COMMAND SECTION
             ============================================================== -->
        <section id="nastco-dg-ceo-section" class="nastco-gov-card-3d" style="--gov-accent: #22d3ee; border-top: 4px solid #22d3ee;">
            <div class="nastco-gov-split">
                <div class="nastco-gov-portrait-box">
                    <div class="nastco-gov-avatar">
                        <img src="<?php echo esc_url( $assets_uri . '/nastco-dg-ceo.jpg' ); ?>" alt="Director-General / CEO NASTCO" onerror="this.style.display='none'; this.parentNode.innerText='DG/CEO';">
                    </div>
                    <span class="nastco-gov-seal-tag">CHIEF EXECUTIVE OFFICER • NASTCO</span>
                    <div class="nastco-gov-name">Director-General / CEO</div>
                    <div class="nastco-gov-role">National Science and Technology Complex (NASTCO)</div>
                </div>
                <div>
                    <div class="nastco-gov-kicker" style="background:rgba(34,211,238,0.12); border:1px solid rgba(34,211,238,0.35); color:#22d3ee;">
                        <span>⚡ OFFICE OF THE DIRECTOR-GENERAL / CHIEF EXECUTIVE OFFICER</span>
                    </div>
                    <h2 class="nastco-gov-title">Operational Command of Nigeria's Six Sovereign Research Directorates</h2>
                    <blockquote class="nastco-gov-quote">
                        "Leading day-to-day scientific excellence at Sheda Science City—integrating Applied Mathematics &amp; Simulation (AMSARC), Biotechnology (BARC), Chemistry (CARC), Physics (PARC), Electric Power (AEPC), and Nuclear Technology (NTC) into a unified sovereign powerhouse."
                    </blockquote>
                    <div class="nastco-gov-pillars">
                        <div class="nastco-gov-pillar">
                            <strong>6 Active Directorates</strong>
                            <span>AMSARC • BARC • CARC • PARC • AEPC • NTC</span>
                        </div>
                        <div class="nastco-gov-pillar">
                            <strong>ISO &amp; IAEA Safeguards</strong>
                            <span>Global-standard laboratory accreditation &amp; safety</span>
                        </div>
                        <div class="nastco-gov-pillar">
                            <strong>Direct Executive Dispatch</strong>
                            <span>24/7 digital command hub &amp; client lab onboarding</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>
