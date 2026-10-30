<?php
/**
 * NASTCO Sovereign Portal — Remodeled Executive 3D Header & Directorate Mega-Menu
 * Synchronized with Footer Obsidian-Gold-Emerald Palette & Full Route Highlighting
 */
defined( 'ABSPATH' ) || exit;

$logo_url    = get_template_directory_uri() . '/assets/images/nastco-logo.png';
$current_uri = isset( $_SERVER['REQUEST_URI'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REQUEST_URI'] ) ) : '/';

if ( ! function_exists( 'nastco_is_nav_active' ) ) {
    function nastco_is_nav_active( $slug, $current_uri ) {
        if ( $slug === '/' ) {
            return ( $current_uri === '/' || $current_uri === '' ) ? 'is-active' : '';
        }
        return ( strpos( $current_uri, $slug ) !== false ) ? 'is-active' : '';
    }
}

$centres_nav = array(
    'amsarc' => array(
        'code'   => 'AMSARC',
        'name'   => 'Applied Mathematics & Simulation',
        'tag'    => '1.4 PFLOPS • Digital Twins',
        'accent' => '#38bdf8',
    ),
    'barc' => array(
        'code'   => 'BARC',
        'name'   => 'Biotechnology Advanced Research',
        'tag'    => 'BSL-3 Genomics • Bio-Ventures',
        'accent' => '#10b981',
    ),
    'carc' => array(
        'code'   => 'CARC',
        'name'   => 'Chemistry Advanced Research',
        'tag'    => 'ISO 17025 • Solid Minerals',
        'accent' => '#f59e0b',
    ),
    'parc' => array(
        'code'   => 'PARC',
        'name'   => 'Physics Advanced Research',
        'tag'    => 'Semiconductors • Photonics',
        'accent' => '#a855f7',
    ),
    'aepc' => array(
        'code'   => 'AEPC',
        'name'   => 'Advanced Electric Power Centre',
        'tag'    => '96.8% Direct-DC • Solar Grids',
        'accent' => '#facc15',
    ),
    'ntc' => array(
        'code'   => 'NTC',
        'name'   => 'Nuclear Technology Centre',
        'tag'    => 'IAEA Safeguards • Dosimetry',
        'accent' => '#ef4444',
    ),
);

$is_centre_route = preg_match( '#/(centres|amsarc|barc|carc|parc|aepc|ntc)(/|$)#i', $current_uri );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style id="nastco-remodeled-executive-header-css">
        :root {
            --nastco-obsidian: #040914;
            --nastco-navy-panel: #071022;
            --nastco-navy-card: rgba(11, 22, 44, 0.94);
            --nastco-gold: #facc15;
            --nastco-gold-dim: rgba(250, 204, 21, 0.25);
            --nastco-emerald: #10b981;
            --nastco-cyan: #38bdf8;
            --nastco-text: #f8fafc;
            --nastco-muted: #94a3b8;
        }
        body.nastco-sovereign-body {
            background-color: var(--nastco-obsidian);
            color: var(--nastco-text);
            margin: 0;
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            overflow-x: hidden;
        }

        /* 1. Sovereign Command Status Strip (Matches Footer Bottom Bar) */
        .nastco-exec-StatusBar {
            background: linear-gradient(90deg, #02050c 0%, #071226 50%, #02050c 100%);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            padding: 0.45rem 1.75rem;
            font-size: 0.72rem;
            color: var(--nastco-muted);
            letter-spacing: 0.05em;
        }
        .nastco-exec-StatusBar__inner {
            max-width: 1380px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 0.75rem;
        }
        .nastco-exec-StatusBar__left,
        .nastco-exec-StatusBar__right {
            display: flex;
            align-items: center;
            gap: 1.15rem;
            flex-wrap: wrap;
        }
        .nastco-live-indicator {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            color: var(--nastco-emerald);
            font-weight: 800;
            background: rgba(16, 185, 129, 0.1);
            border: 1px solid rgba(16, 185, 129, 0.28);
            padding: 0.18rem 0.65rem;
            border-radius: 999px;
        }
        .nastco-live-dot {
            width: 7px;
            height: 7px;
            border-radius: 50%;
            background: var(--nastco-emerald);
            box-shadow: 0 0 8px var(--nastco-emerald);
            animation: nastcoExecPulse 2s infinite ease-in-out;
        }
        @keyframes nastcoExecPulse {
            0%, 100% { transform: scale(1); opacity: 1; }
            50% { transform: scale(1.35); opacity: 0.5; }
        }
        .nastco-status-divider {
            color: rgba(255, 255, 255, 0.16);
        }
        .nastco-ledger-mini-pill {
            color: var(--nastco-gold);
            font-weight: 700;
            text-decoration: none;
            transition: opacity 0.2s ease;
        }
        .nastco-ledger-mini-pill:hover {
            opacity: 0.85;
        }

        /* 2. Main Remodeled 3D Executive Header (Matches Footer Surface & Gold Accent Line) */
        .nastco-exec-Header {
            position: sticky;
            top: 0;
            z-index: 9999;
            background: linear-gradient(180deg, rgba(4, 9, 20, 0.96) 0%, rgba(7, 16, 34, 0.94) 100%);
            backdrop-filter: blur(20px);
            -webkit-backdrop-filter: blur(20px);
            border-bottom: 1px solid var(--nastco-gold-dim);
            box-shadow: 0 18px 42px rgba(0, 0, 0, 0.78), inset 0 1px 0 rgba(255, 255, 255, 0.08);
        }
        .nastco-exec-Header::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, transparent 0%, var(--nastco-gold) 25%, var(--nastco-emerald) 50%, var(--nastco-cyan) 75%, transparent 100%);
            opacity: 0.75;
        }
        .nastco-exec-Header__container {
            max-width: 1380px;
            margin: 0 auto;
            padding: 0.85rem 1.75rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 1.5rem;
        }

        /* Brand Crest & Seal */
        .nastco-exec-Brand {
            display: flex;
            align-items: center;
            gap: 0.95rem;
            text-decoration: none;
            color: var(--nastco-text);
            group: brand;
        }
        .nastco-exec-Brand__crest {
            width: 48px;
            height: 48px;
            border-radius: 12px;
            background: radial-gradient(circle at 30% 30%, rgba(250, 204, 21, 0.2), rgba(4, 9, 20, 0.95));
            border: 1px solid rgba(250, 204, 21, 0.45);
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.6), inset 0 1px 0 rgba(255, 255, 255, 0.2);
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 900;
            font-size: 0.85rem;
            color: var(--nastco-gold);
            overflow: hidden;
            flex-shrink: 0;
            transition: transform 0.25s ease, border-color 0.25s ease;
        }
        .nastco-exec-Brand:hover .nastco-exec-Brand__crest {
            transform: translateY(-2px);
            border-color: var(--nastco-gold);
        }
        .nastco-exec-Brand__crest img {
            width: 100%;
            height: 100%;
            object-fit: contain;
        }
        .nastco-exec-Brand__text {
            display: flex;
            flex-direction: column;
        }
        .nastco-exec-Brand__acronym {
            font-size: 1.22rem;
            font-weight: 900;
            letter-spacing: 0.08em;
            color: #ffffff;
            line-height: 1.05;
            display: flex;
            align-items: center;
            gap: 0.45rem;
        }
        .nastco-exec-Brand__tag {
            font-size: 0.62rem;
            padding: 0.12rem 0.42rem;
            border-radius: 4px;
            background: rgba(250, 204, 21, 0.14);
            border: 1px solid rgba(250, 204, 21, 0.35);
            color: var(--nastco-gold);
            font-weight: 800;
            letter-spacing: 0.06em;
        }
        .nastco-exec-Brand__fullname {
            font-size: 0.7rem;
            color: #cbd5e1;
            font-weight: 600;
            letter-spacing: 0.03em;
            margin-top: 3px;
        }

        /* Primary Navigation Dock */
        .nastco-exec-Nav {
            display: flex;
            align-items: center;
            gap: 1.15rem;
        }
        .nastco-exec-Nav__list {
            list-style: none;
            margin: 0;
            padding: 0.3rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
            background: rgba(4, 9, 20, 0.65);
            border: 1px solid rgba(255, 255, 255, 0.08);
            border-radius: 14px;
            box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.6);
        }
        .nastco-exec-Nav__item {
            position: relative;
        }
        .nastco-exec-Nav__link {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.58rem 0.95rem;
            color: #cbd5e1;
            text-decoration: none;
            font-size: 0.84rem;
            font-weight: 700;
            border-radius: 10px;
            border: 1px solid transparent;
            transition: all 0.22s ease;
            white-space: nowrap;
        }
        .nastco-exec-Nav__link:hover,
        .nastco-exec-Nav__link.is-active {
            color: #ffffff;
            background: rgba(255, 255, 255, 0.06);
            border-color: rgba(250, 204, 21, 0.3);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.4);
        }
        .nastco-exec-Nav__link.is-active {
            color: var(--nastco-gold);
            background: rgba(250, 204, 21, 0.1);
        }

        /* 2-Column 3D Directorate Mega-Dropdown */
        .nastco-exec-MegaMenu {
            position: absolute;
            top: calc(100% + 12px);
            left: 50%;
            transform: translateX(-50%) translateY(12px);
            width: 620px;
            background: linear-gradient(165deg, #060d1f 0%, #040914 100%);
            border: 1px solid rgba(250, 204, 21, 0.32);
            border-radius: 18px;
            padding: 1.15rem;
            box-shadow: 0 28px 65px rgba(0, 0, 0, 0.9), inset 0 1px 0 rgba(255, 255, 255, 0.12);
            opacity: 0;
            visibility: hidden;
            transition: all 0.26s cubic-bezier(0.16, 1, 0.3, 1);
            z-index: 10000;
        }
        .nastco-exec-Nav__item--has-mega:hover .nastco-exec-MegaMenu,
        .nastco-exec-Nav__item--has-mega:focus-within .nastco-exec-MegaMenu {
            opacity: 1;
            visibility: visible;
            transform: translateX(-50%) translateY(0);
        }
        .nastco-exec-MegaMenu__header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding-bottom: 0.75rem;
            margin-bottom: 0.85rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }
        .nastco-exec-MegaMenu__title {
            font-size: 0.74rem;
            font-weight: 800;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            color: var(--nastco-muted);
        }
        .nastco-exec-MegaMenu__allLink {
            font-size: 0.76rem;
            font-weight: 800;
            color: var(--nastco-gold);
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
        }
        .nastco-exec-MegaMenu__allLink:hover {
            text-decoration: underline;
        }
        .nastco-exec-MegaMenu__grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 0.65rem;
        }
        .nastco-exec-CentreCard {
            display: flex;
            flex-direction: column;
            padding: 0.75rem 0.9rem;
            border-radius: 12px;
            background: rgba(12, 23, 46, 0.7);
            border: 1px solid rgba(255, 255, 255, 0.07);
            border-left: 3px solid var(--dir-accent, #38bdf8);
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .nastco-exec-CentreCard:hover {
            background: rgba(20, 35, 66, 0.95);
            border-color: var(--dir-accent, #38bdf8);
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(0, 0, 0, 0.55);
        }
        .nastco-exec-CentreCard__top {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 0.25rem;
        }
        .nastco-exec-CentreCard__code {
            font-size: 0.78rem;
            font-weight: 900;
            color: var(--dir-accent, #38bdf8);
            letter-spacing: 0.06em;
        }
        .nastco-exec-CentreCard__arrow {
            font-size: 0.75rem;
            color: var(--nastco-muted);
            transition: transform 0.2s ease;
        }
        .nastco-exec-CentreCard:hover .nastco-exec-CentreCard__arrow {
            transform: translateX(3px);
            color: #ffffff;
        }
        .nastco-exec-CentreCard__name {
            font-size: 0.8rem;
            font-weight: 700;
            color: #f8fafc;
            line-height: 1.25;
            margin-bottom: 0.2rem;
        }
        .nastco-exec-CentreCard__meta {
            font-size: 0.68rem;
            color: var(--nastco-muted);
        }

        /* Executive Action Cluster */
        .nastco-exec-Actions {
            display: flex;
            align-items: center;
            gap: 0.65rem;
        }
        .nastco-exec-BtnLedger {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.62rem 0.95rem;
            border-radius: 11px;
            background: rgba(16, 185, 129, 0.12);
            border: 1px solid rgba(16, 185, 129, 0.35);
            color: #34d399 !important;
            font-size: 0.78rem;
            font-weight: 800;
            text-decoration: none;
            letter-spacing: 0.03em;
            transition: all 0.22s ease;
            white-space: nowrap;
        }
        .nastco-exec-BtnLedger:hover {
            background: rgba(16, 185, 129, 0.22);
            transform: translateY(-2px);
        }
        .nastco-exec-BtnDispatch {
            display: inline-flex;
            align-items: center;
            gap: 0.45rem;
            padding: 0.65rem 1.2rem;
            border-radius: 11px;
            background: linear-gradient(135deg, #facc15 0%, #eab308 100%);
            color: #040914 !important;
            font-size: 0.8rem;
            font-weight: 900;
            text-transform: uppercase;
            letter-spacing: 0.04em;
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(250, 204, 21, 0.3), inset 0 1px 0 rgba(255, 255, 255, 0.5);
            transition: all 0.22s ease;
            white-space: nowrap;
        }
        .nastco-exec-BtnDispatch:hover {
            transform: translateY(-2px);
            box-shadow: 0 12px 26px rgba(250, 204, 21, 0.5);
        }

        /* Mobile Drawer Button */
        .nastco-exec-MobileToggle {
            display: none;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(250, 204, 21, 0.35);
            color: #ffffff;
            padding: 0.55rem 0.8rem;
            border-radius: 10px;
            cursor: pointer;
            font-size: 1.15rem;
        }

        @media (max-width: 1140px) {
            .nastco-exec-MobileToggle {
                display: inline-flex;
            }
            .nastco-exec-Nav {
                display: none;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #040914;
                border-bottom: 2px solid var(--nastco-gold);
                padding: 1.25rem 1.5rem;
                flex-direction: column;
                align-items: stretch;
                box-shadow: 0 25px 50px rgba(0, 0, 0, 0.9);
            }
            .nastco-exec-Nav.is-open {
                display: flex;
            }
            .nastco-exec-Nav__list {
                flex-direction: column;
                align-items: stretch;
                background: transparent;
                border: none;
                padding: 0;
            }
            .nastco-exec-MegaMenu {
                position: static;
                transform: none !important;
                width: 100%;
                box-sizing: border-box;
                opacity: 1;
                visibility: visible;
                margin-top: 0.5rem;
                padding: 0.85rem;
                box-shadow: none;
            }
            .nastco-exec-MegaMenu__grid {
                grid-template-columns: 1fr;
            }
            .nastco-exec-Actions {
                margin-top: 1rem;
                justify-content: stretch;
            }
            .nastco-exec-BtnLedger,
            .nastco-exec-BtnDispatch {
                flex: 1;
                justify-content: center;
            }
        }
    </style>
</head>
<body <?php body_class( 'nastco-sovereign-body' ); ?>>
<?php wp_body_open(); ?>

<!-- 1. Sovereign Telemetry Top Status Strip -->
<div class="nastco-exec-StatusBar">
    <div class="nastco-exec-StatusBar__inner">
        <div class="nastco-exec-StatusBar__left">
            <span class="nastco-live-indicator">
                <span class="nastco-live-dot"></span>
                <span>GATE 2 SENTINEL ONLINE</span>
            </span>
            <span>KM 10 GWAGWALADA–LOKOJA RD, SHEDA SCIENCE CITY, ABUJA FCT</span>
        </div>
        <div class="nastco-exec-StatusBar__right">
            <span>STATUTORY ROYALTY SPLIT: <strong>40% / 35% / 25%</strong> (PPA 2007)</span>
            <span class="nastco-status-divider">|</span>
            <a href="<?php echo esc_url( home_url( '/#executive-financial-dashboard' ) ); ?>" class="nastco-ledger-mini-pill">
                📊 LiveLedger Telemetry &#8599;
            </a>
        </div>
    </div>
</div>

<!-- 2. Main Remodeled 3D Executive Header -->
<header id="masthead" class="site-header nastco-exec-Header">
    <div class="nastco-exec-Header__container">

        <!-- Sovereign Brand Seal -->
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="nastco-exec-Brand">
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

        <button class="nastco-exec-MobileToggle" id="nastcoMobileToggle" aria-label="Toggle Sovereign Navigation">&#9776;</button>

        <!-- Primary Navigation & 2-Column Directorate Mega-Menu -->
        <nav id="site-navigation" class="nastco-exec-Nav" aria-label="Primary Sovereign Navigation">
            <ul class="nastco-exec-Nav__list">
                <li class="nastco-exec-Nav__item">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nastco-exec-Nav__link <?php echo esc_attr( nastco_is_nav_active( '/', $current_uri ) ); ?>">
                        Command Hub
                    </a>
                </li>
                <li class="nastco-exec-Nav__item">
                    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="nastco-exec-Nav__link <?php echo esc_attr( nastco_is_nav_active( '/about', $current_uri ) ); ?>">
                        About Complex
                    </a>
                </li>

                <!-- Clickable Research Centres + 6-Directorate 3D Mega-Menu -->
                <li class="nastco-exec-Nav__item nastco-exec-Nav__item--has-mega">
                    <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="nastco-exec-Nav__link <?php echo $is_centre_route ? 'is-active' : ''; ?>">
                        Research Centres <span style="font-size:0.7rem; opacity:0.8;">&#9662;</span>
                    </a>
                    <div class="nastco-exec-MegaMenu">
                        <div class="nastco-exec-MegaMenu__header">
                            <span class="nastco-exec-MegaMenu__title">🔬 Six Sovereign Research Directorates</span>
                            <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="nastco-exec-MegaMenu__allLink">
                                Open Full Centres Matrix &#8594;
                            </a>
                        </div>
                        <div class="nastco-exec-MegaMenu__grid">
                            <?php foreach ( $centres_nav as $slug => $item ) : ?>
                                <a href="<?php echo esc_url( home_url( '/' . $slug . '/' ) ); ?>"
                                   class="nastco-exec-CentreCard"
                                   style="--dir-accent: <?php echo esc_attr( $item['accent'] ); ?>;">
                                    <div class="nastco-exec-CentreCard__top">
                                        <span class="nastco-exec-CentreCard__code"><?php echo esc_html( $item['code'] ); ?></span>
                                        <span class="nastco-exec-CentreCard__arrow">&#8594;</span>
                                    </div>
                                    <div class="nastco-exec-CentreCard__name"><?php echo esc_html( $item['name'] ); ?></div>
                                    <div class="nastco-exec-CentreCard__meta"><?php echo esc_html( $item['tag'] ); ?></div>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </li>

                <li class="nastco-exec-Nav__item">
                    <a href="<?php echo esc_url( home_url( '/commercial-ventures-2/' ) ); ?>" class="nastco-exec-Nav__link <?php echo esc_attr( nastco_is_nav_active( 'venture', $current_uri ) ); ?>">
                        Ventures &amp; IP
                    </a>
                </li>
                <li class="nastco-exec-Nav__item">
                    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="nastco-exec-Nav__link <?php echo esc_attr( nastco_is_nav_active( '/services', $current_uri ) ); ?>">
                        Lab Services
                    </a>
                </li>
            </ul>

            <div class="nastco-exec-Actions">
                <a href="<?php echo esc_url( home_url( '/#executive-financial-dashboard' ) ); ?>" class="nastco-exec-BtnLedger">
                    <span>📊 LiveLedger</span>
                </a>
                <a href="<?php echo esc_url( home_url( '/commercial-ventures-2/' ) ); ?>" class="nastco-exec-BtnDispatch">
                    <span>⚡ Executive Dispatch</span>
                </a>
            </div>
        </nav>

    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var toggleBtn = document.getElementById('nastcoMobileToggle');
    var navBlock  = document.getElementById('site-navigation');
    if (toggleBtn && navBlock) {
        toggleBtn.addEventListener('click', function() {
            navBlock.classList.toggle('is-open');
        });
    }
});
</script>
