<?php
/**
 * NASTCO Sovereign Portal — Executive 3D Footer
 * Synchronized with Remodeled Header Routes, 6 Research Directorates & LiveLedger Telemetry
 */
defined( 'ABSPATH' ) || exit;

$logo_url = get_template_directory_uri() . '/assets/images/nastco-logo.png';

$footer_centres = array(
    'amsarc' => array(
        'code'   => 'AMSARC',
        'name'   => 'Applied Mathematics and Simulation Advanced Research Centre',
        'accent' => '#38bdf8',
    ),
    'barc' => array(
        'code'   => 'BARC',
        'name'   => 'Biotechnology Advanced Research Centre',
        'accent' => '#10b981',
    ),
    'carc' => array(
        'code'   => 'CARC',
        'name'   => 'Chemistry Advanced Research Centre',
        'accent' => '#f59e0b',
    ),
    'parc' => array(
        'code'   => 'PARC',
        'name'   => 'Physics Advanced Research Centre',
        'accent' => '#a855f7',
    ),
    'aepc' => array(
        'code'   => 'AEPC',
        'name'   => 'Advanced Electric Power Centre',
        'accent' => '#facc15',
    ),
    'ntc' => array(
        'code'   => 'NTC',
        'name'   => 'Nuclear Technology Centre',
        'accent' => '#ef4444',
    ),
);
?>

<style id="nastco-remodeled-executive-footer-css">
    .nastco-exec-Footer {
        position: relative;
        background: linear-gradient(180deg, #071022 0%, #040914 65%, #02050c 100%);
        color: #f8fafc;
        border-top: 1px solid rgba(250, 204, 21, 0.28);
        box-shadow: 0 -18px 45px rgba(0, 0, 0, 0.78), inset 0 1px 0 rgba(255, 255, 255, 0.08);
        font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        overflow: hidden;
    }
    .nastco-exec-Footer::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 2px;
        background: linear-gradient(90deg, transparent 0%, #facc15 25%, #10b981 50%, #38bdf8 75%, transparent 100%);
        opacity: 0.85;
    }
    .nastco-exec-Footer__container {
        max-width: 1380px;
        margin: 0 auto;
        padding: 4rem 1.75rem 2.5rem;
    }

    /* Top Telemetry Banner inside Footer */
    .nastco-exec-Footer__ctaStrip {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1.5rem;
        padding: 1.5rem 2rem;
        margin-bottom: 3.25rem;
        background: rgba(11, 22, 44, 0.78);
        border: 1px solid rgba(250, 204, 21, 0.25);
        border-radius: 18px;
        box-shadow: 0 16px 36px rgba(0, 0, 0, 0.55), inset 0 1px 0 rgba(255, 255, 255, 0.1);
    }
    .nastco-exec-Footer__ctaText h3 {
        margin: 0 0 0.35rem;
        font-size: 1.15rem;
        font-weight: 900;
        color: #ffffff;
        letter-spacing: 0.02em;
    }
    .nastco-exec-Footer__ctaText p {
        margin: 0;
        font-size: 0.84rem;
        color: #94a3b8;
    }
    .nastco-exec-Footer__ctaActions {
        display: flex;
        align-items: center;
        gap: 0.75rem;
        flex-wrap: wrap;
    }

    /* 4-Column Main Footer Grid */
    .nastco-exec-Footer__grid {
        display: grid;
        grid-template-columns: 1.35fr 1fr 1.45fr 1.1fr;
        gap: 2.5rem;
        padding-bottom: 3rem;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
    }
    .nastco-exec-Footer__colTitle {
        font-size: 0.78rem;
        font-weight: 900;
        text-transform: uppercase;
        letter-spacing: 0.09em;
        color: #facc15;
        margin: 0 0 1.25rem;
        display: flex;
        align-items: center;
        gap: 0.5rem;
    }
    .nastco-exec-Footer__colTitle::after {
        content: "";
        flex: 1;
        height: 1px;
        background: linear-gradient(90deg, rgba(250, 204, 21, 0.35), transparent);
    }

    /* Column 1: Institutional Identity */
    .nastco-exec-Footer__desc {
        font-size: 0.85rem;
        line-height: 1.68;
        color: #94a3b8;
        margin: 1rem 0 1.35rem;
    }
    .nastco-exec-Footer__hqBox {
        background: rgba(4, 9, 20, 0.75);
        border: 1px solid rgba(255, 255, 255, 0.08);
        border-left: 3px solid #10b981;
        border-radius: 12px;
        padding: 0.9rem 1.1rem;
        font-size: 0.78rem;
        line-height: 1.55;
        color: #cbd5e1;
    }
    .nastco-exec-Footer__hqBox strong {
        color: #ffffff;
        display: block;
        margin-bottom: 0.2rem;
    }

    /* Column 2 & 4: Standard Route Lists */
    .nastco-exec-Footer__list {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 0.6rem;
    }
    .nastco-exec-Footer__list a {
        display: inline-flex;
        align-items: center;
        justify-content: space-between;
        padding: 0.48rem 0.75rem;
        border-radius: 9px;
        color: #cbd5e1;
        text-decoration: none;
        font-size: 0.83rem;
        font-weight: 600;
        background: rgba(255, 255, 255, 0.02);
        border: 1px solid transparent;
        transition: all 0.2s ease;
    }
    .nastco-exec-Footer__list a:hover {
        color: #ffffff;
        background: rgba(250, 204, 21, 0.08);
        border-color: rgba(250, 204, 21, 0.28);
        transform: translateX(4px);
    }

    /* Column 3: 6 Sovereign Research Directorates List */
    .nastco-exec-Footer__centresList {
        list-style: none;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        gap: 0.5rem;
    }
    .nastco-exec-Footer__centreLink {
        display: flex;
        align-items: center;
        gap: 0.65rem;
        padding: 0.5rem 0.75rem;
        border-radius: 10px;
        background: rgba(11, 22, 44, 0.55);
        border: 1px solid rgba(255, 255, 255, 0.06);
        border-left: 3px solid var(--foot-accent, #38bdf8);
        text-decoration: none;
        transition: all 0.2s ease;
    }
    .nastco-exec-Footer__centreLink:hover {
        background: rgba(20, 35, 66, 0.9);
        border-color: var(--foot-accent, #38bdf8);
        transform: translateX(4px);
    }
    .nastco-exec-Footer__centreCode {
        font-size: 0.72rem;
        font-weight: 900;
        color: var(--foot-accent, #38bdf8);
        letter-spacing: 0.06em;
        min-width: 58px;
    }
    .nastco-exec-Footer__centreName {
        font-size: 0.78rem;
        font-weight: 600;
        color: #e2e8f0;
        line-height: 1.25;
    }

    /* Royalty Split Telemetry Box in Column 4 */
    .nastco-exec-Footer__splitCard {
        margin-top: 1rem;
        background: rgba(4, 9, 20, 0.8);
        border: 1px solid rgba(250, 204, 21, 0.24);
        border-radius: 12px;
        padding: 0.9rem 1rem;
    }
    .nastco-exec-Footer__splitTitle {
        font-size: 0.7rem;
        font-weight: 800;
        color: #facc15;
        text-transform: uppercase;
        letter-spacing: 0.07em;
        margin-bottom: 0.55rem;
    }
    .nastco-exec-Footer__splitBar {
        display: flex;
        height: 7px;
        border-radius: 999px;
        overflow: hidden;
        margin-bottom: 0.55rem;
    }
    .nastco-exec-Footer__splitMeta {
        display: flex;
        justify-content: space-between;
        font-size: 0.7rem;
        color: #94a3b8;
        font-weight: 700;
    }

    /* Bottom Statutory Copyright Strip */
    .nastco-exec-Footer__bottom {
        padding-top: 1.75rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
        font-size: 0.76rem;
        color: #64748b;
    }
    .nastco-exec-Footer__bottomLinks {
        display: flex;
        align-items: center;
        gap: 1.25rem;
        flex-wrap: wrap;
    }
    .nastco-exec-Footer__bottomLinks a {
        color: #94a3b8;
        text-decoration: none;
        font-weight: 600;
        transition: color 0.2s ease;
    }
    .nastco-exec-Footer__bottomLinks a:hover {
        color: #facc15;
    }

    @media (max-width: 1080px) {
        .nastco-exec-Footer__grid {
            grid-template-columns: repeat(2, 1fr);
        }
    }
    @media (max-width: 640px) {
        .nastco-exec-Footer__grid {
            grid-template-columns: 1fr;
        }
        .nastco-exec-Footer__ctaStrip {
            padding: 1.25rem;
        }
    }
</style>

<footer id="colophon" class="site-footer nastco-exec-Footer">
    <div class="nastco-exec-Footer__container">

        <!-- Top Sovereign Command Callout Strip -->
        <div class="nastco-exec-Footer__ctaStrip">
            <div class="nastco-exec-Footer__ctaText">
                <h3>Sovereign R&amp;D Commercialization &amp; Laboratory Infrastructure</h3>
                <p>Explore the 6 NASTCO Research Directorates, verify real-time LiveLedger royalties, or dispatch an executive lab request.</p>
            </div>
            <div class="nastco-exec-Footer__ctaActions">
                <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="nastco-exec-BtnLedger">
                    <span>🔬 All 6 Research Centres</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/#executive-financial-dashboard' ) ); ?>" class="nastco-exec-BtnLedger">
                    <span>📊 LiveLedger Telemetry</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/commercial-ventures-2/' ) ); ?>" class="nastco-exec-BtnDispatch">
                    <span>⚡ Executive Dispatch</span>
                </a>
            </div>
        </div>

        <!-- 4-Column Synchronized Footer Grid -->
        <div class="nastco-exec-Footer__grid">

            <!-- Column 1: Brand Seal & Campus Telemetry -->
            <div>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nastco-exec-Brand" style="margin-bottom: 0.75rem;">
                    <div class="nastco-exec-Brand__crest">
                        <img src="<?php echo esc_url( $logo_url ); ?>" alt="NASTCO Crest" onerror="this.style.display='none'; this.parentNode.innerText='NASTCO';">
                    </div>
                    <div class="nastco-exec-Brand__text">
                        <span class="nastco-exec-Brand__acronym">
                            NASTCO <span class="nastco-exec-Brand__tag">FGN</span>
                        </span>
                        <span class="nastco-exec-Brand__fullname">National Science &amp; Technology Complex</span>
                    </div>
                </a>

                <p class="nastco-exec-Footer__desc">
                    Nigeria's premier sovereign scientific research, multi-physics simulation, biotechnology, electric power, and nuclear technology complex advancing indigenous industrial commercialization.
                </p>

                <div class="nastco-exec-Footer__hqBox">
                    <strong>📍 Sheda Science City Headquarters</strong>
                    KM 10 Gwagwalada–Lokoja Road, Sheda, Kwali Area Council, Abuja FCT, Nigeria.<br>
                    <span style="color:#10b981; font-weight:700;">&#9679; Gate 2 Sentinel &amp; Satellite Gateway Online</span>
                </div>
            </div>

            <!-- Column 2: Sovereign Portal Navigation (Mirrors Header) -->
            <div>
                <h4 class="nastco-exec-Footer__colTitle">Sovereign Navigation</h4>
                <ul class="nastco-exec-Footer__list">
                    <li>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                            <span>Command Hub (Home)</span> <span>&#8594;</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">
                            <span>About Complex</span> <span>&#8594;</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>">
                            <span>Research Centres Matrix</span> <span style="color:#facc15;">6 Hubs</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/commercial-ventures-2/' ) ); ?>">
                            <span>Ventures &amp; IP Portfolio</span> <span>&#8594;</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">
                            <span>Lab Services &amp; Testing</span> <span>&#8594;</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/#executive-financial-dashboard' ) ); ?>">
                            <span>Looker Studio LiveLedger</span> <span style="color:#10b981;">Live</span>
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Column 3: The 6 Research Directorates (Direct 3D Hub Links) -->
            <div>
                <h4 class="nastco-exec-Footer__colTitle">Six Research Directorates</h4>
                <ul class="nastco-exec-Footer__centresList">
                    <?php foreach ( $footer_centres as $slug => $centre ) : ?>
                        <li>
                            <a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"
                               class="nastco-exec-Footer__centreLink"
                               style="--foot-accent: <?php echo esc_attr( $centre['accent'] ); ?>;">
                                <span class="nastco-exec-Footer__centreCode"><?php echo esc_html( $centre['code'] ); ?></span>
                                <span class="nastco-exec-Footer__centreName"><?php echo esc_html( $centre['name'] ); ?></span>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

            <!-- Column 4: Commercialization & Telemetry API Endpoints -->
            <div>
                <h4 class="nastco-exec-Footer__colTitle">Telemetry &amp; Governance</h4>
                <ul class="nastco-exec-Footer__list">
                    <li>
                        <a href="<?php echo esc_url( home_url( '/wp-json/nastco/v1/ledger-sync' ) ); ?>" target="_blank" rel="noopener">
                            <span>LiveLedger REST API</span> <span style="color:#38bdf8; font-family:monospace;">JSON</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/commercial-ventures-2/?centre=amsarc' ) ); ?>">
                            <span>AMSARC Venture Filter</span> <span>&#8594;</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/commercial-ventures-2/?centre=barc' ) ); ?>">
                            <span>BARC Venture Filter</span> <span>&#8594;</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/services/?centre=aepc' ) ); ?>">
                            <span>Request Lab Access</span> <span>&#8594;</span>
                        </a>
                    </li>
                </ul>

                <div class="nastco-exec-Footer__splitCard">
                    <div class="nastco-exec-Footer__splitTitle">Statutory Royalty Split (NOTAP / PPA)</div>
                    <div class="nastco-exec-Footer__splitBar">
                        <div style="width:40%; background:#10b981;"></div>
                        <div style="width:35%; background:#facc15;"></div>
                        <div style="width:25%; background:#a855f7;"></div>
                    </div>
                    <div class="nastco-exec-Footer__splitMeta">
                        <span style="color:#10b981;">40% Inventors</span>
                        <span style="color:#facc15;">35% Centre</span>
                        <span style="color:#a855f7;">25% NASTCO</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- Bottom Copyright & Statutory Compliance Strip -->
        <div class="nastco-exec-Footer__bottom">
            <div>
                &copy; <?php echo esc_html( gmdate( 'Y' ) ); ?> <strong>National Science and Technology Complex (NASTCO)</strong> • Federal Republic of Nigeria. All Rights Reserved.
            </div>
            <div class="nastco-exec-Footer__bottomLinks">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Command Hub</a>
                <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>">Research Centres</a>
                <a href="<?php echo esc_url( home_url( '/commercial-ventures-2/' ) ); ?>">Ventures &amp; IP</a>
                <a href="<?php echo esc_url( home_url( '/#executive-financial-dashboard' ) ); ?>">Looker Studio Ledger</a>
            </div>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
