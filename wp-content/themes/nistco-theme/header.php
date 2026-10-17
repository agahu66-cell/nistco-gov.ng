<?php
/**
 * NASTCO Institutional Header Template
 * 
 * Research Centre Designations:
 * - AMSARC: Applied Mathematics & Simulation Advanced Research Centre
 * - BARC: Biotechnology Advanced Research Centre
 * - CARC: Chemistry Advanced Research Centre
 * - PARC: Physics Advanced Research Centre
 * - AEPC: Advanced Engineering & Prototype Centre
 * - NTC: Nuclear Technology Centre (SSDL Labs)
 *
 * @package NASTCO
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <style>
        :root {
            --nastco-green-flag: #008751;
            --nastco-nav-dark: #070e18;
            --nastco-nav-surface: #0e1928;
            --nastco-nav-border: rgba(255, 255, 255, 0.08);
            --nastco-nav-text: #e2e8f0;
            --nastco-nav-accent: #00d285;
            --nastco-gold: #d4af37;
            --nastco-gold-bright: #f59e0b;
            --nastco-gold-glow: rgba(212, 175, 55, 0.28);
        }

        .nistco-masthead {
            position: sticky;
            top: 0;
            z-index: 1000;
            background: rgba(7, 14, 24, 0.95);
            backdrop-filter: blur(14px);
            -webkit-backdrop-filter: blur(14px);
            border-bottom: 2px solid var(--nastco-gold);
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.5), 0 1px 0 var(--nastco-gold-glow);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
        }

        /* Federal Top Utility Strip with Gold Accents */
        .nistco-fed-bar {
            background: #03060a;
            border-bottom: 1px solid rgba(212, 175, 55, 0.2);
            font-size: 0.74rem;
            color: #94a3b8;
            padding: 0.4rem 0;
            letter-spacing: 0.35px;
        }

        .nistco-fed-inner {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0 1.75rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nistco-fed-flag {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            font-weight: 700;
            color: #cbd5e1;
        }

        .fed-flag-icon {
            display: inline-flex;
            width: 14px;
            height: 9px;
            border: 1px solid rgba(255,255,255,0.25);
        }
        .fed-flag-icon span:nth-child(1), .fed-flag-icon span:nth-child(3) { width: 33.33%; background: var(--nastco-green-flag); }
        .fed-flag-icon span:nth-child(2) { width: 33.34%; background: #ffffff; }

        .fed-senate-tag {
            background: rgba(212, 175, 55, 0.12);
            color: var(--nastco-gold);
            border: 1px solid rgba(212, 175, 55, 0.35);
            padding: 0.15rem 0.5rem;
            border-radius: 4px;
            font-size: 0.68rem;
            font-weight: 800;
            letter-spacing: 0.6px;
            text-transform: uppercase;
        }

        .nistco-fed-right {
            display: flex;
            align-items: center;
            gap: 1.25rem;
        }

        .nistco-fed-socials {
            display: inline-flex;
            align-items: center;
            gap: 0.75rem;
            padding-right: 1rem;
            border-right: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nistco-fed-socials a {
            color: #94a3b8;
            display: inline-flex;
            align-items: center;
            text-decoration: none;
            transition: color 0.2s ease, transform 0.2s ease;
        }

        .nistco-fed-socials a:hover {
            color: var(--nastco-gold-bright);
            transform: translateY(-1px);
        }

        .nistco-fed-links {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .nistco-fed-links a {
            color: #94a3b8;
            text-decoration: none;
            transition: color 0.2s ease;
        }
        .nistco-fed-links a:hover { color: var(--nastco-gold-bright); }

        /* Main Navigation Bar */
        .nistco-nav-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0.65rem 1.75rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .nistco-brand-anchor {
            display: flex;
            align-items: center;
            gap: 1rem;
            text-decoration: none;
            color: inherit;
        }

        .nistco-brand-logo {
            border-radius: 50%;
            clip-path: circle(48.5% at 50% 50%);
            width: 52px;
            height: 52px;
            object-fit: contain;
            display: block;
            border: 2px solid var(--nastco-gold);
            filter: drop-shadow(0 0 12px var(--nastco-gold-glow));
            transition: transform 0.25s ease, filter 0.25s ease;
        }

        .nistco-brand-anchor:hover .nistco-brand-logo {
            transform: scale(1.05) rotate(2deg);
            filter: drop-shadow(0 0 16px rgba(212, 175, 55, 0.5));
        }

        .nistco-brand-text {
            display: flex;
            flex-direction: column;
        }

        .nistco-brand-title {
            font-size: 1.35rem;
            font-weight: 900;
            color: #ffffff;
            letter-spacing: -0.5px;
            line-height: 1.1;
        }

        .nistco-brand-sub {
            font-size: 0.68rem;
            font-weight: 700;
            color: var(--nastco-gold);
            letter-spacing: 0.9px;
            text-transform: uppercase;
        }

        .nistco-nav-menu {
            display: flex;
            align-items: center;
            gap: 0.4rem;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nistco-nav-item {
            position: relative;
        }

        .nistco-nav-link {
            display: inline-flex;
            align-items: center;
            gap: 0.4rem;
            padding: 0.55rem 0.95rem;
            font-size: 0.88rem;
            font-weight: 700;
            color: var(--nastco-nav-text);
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.2s ease;
        }

        .nistco-nav-link:hover,
        .nistco-nav-link:focus-visible {
            background: rgba(255, 255, 255, 0.05);
            color: var(--nastco-gold);
        }

        .nistco-nav-link.active {
            color: var(--nastco-gold);
            background: rgba(212, 175, 55, 0.08);
            border-bottom: 2px solid var(--nastco-gold);
        }

        /* Gold-Accented Commercial Ventures Pulse Badge */
        .badge-ventures-pulse {
            display: inline-flex;
            align-items: center;
            gap: 0.35rem;
            padding: 0.2rem 0.55rem;
            background: rgba(212, 175, 55, 0.12);
            border: 1px solid rgba(212, 175, 55, 0.4);
            color: var(--nastco-gold);
            border-radius: 6px;
            font-size: 0.72rem;
            font-weight: 800;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .pulse-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: var(--nastco-gold);
            box-shadow: 0 0 8px var(--nastco-gold);
            animation: nistcoPulse 2s infinite;
        }

        @keyframes nistcoPulse {
            0%, 100% { opacity: 1; transform: scale(1); }
            50% { opacity: 0.4; transform: scale(0.8); }
        }

        /* Centres Dropdown Menu */
        .nistco-dropdown-menu {
            position: absolute;
            top: 100%;
            left: 0;
            min-width: 360px;
            background: var(--nastco-nav-surface);
            border: 1px solid rgba(212, 175, 55, 0.3);
            border-top: 3px solid var(--nastco-gold);
            border-radius: 12px;
            padding: 0.75rem 0;
            box-shadow: 0 20px 45px rgba(0, 0, 0, 0.6);
            opacity: 0;
            visibility: hidden;
            transform: translateY(10px);
            transition: all 0.2s cubic-bezier(0.16, 1, 0.3, 1);
            list-style: none;
            margin: 0.5rem 0 0 0;
            z-index: 1100;
        }

        .nistco-nav-item:hover .nistco-dropdown-menu,
        .nistco-nav-item:focus-within .nistco-dropdown-menu {
            opacity: 1;
            visibility: visible;
            transform: translateY(0);
        }

        .nistco-dropdown-link {
            display: flex;
            flex-direction: column;
            padding: 0.7rem 1.25rem;
            text-decoration: none;
            transition: background 0.15s ease;
            border-bottom: 1px solid rgba(255, 255, 255, 0.03);
        }

        .nistco-dropdown-link:last-child {
            border-bottom: none;
        }

        .nistco-dropdown-link:hover {
            background: rgba(212, 175, 55, 0.06);
        }

        .dropdown-title {
            font-size: 0.88rem;
            font-weight: 800;
            color: #ffffff;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .dropdown-desc {
            font-size: 0.74rem;
            color: #94a3b8;
            margin-top: 0.15rem;
        }

        .nistco-nav-actions {
            display: flex;
            align-items: center;
            gap: 1rem;
        }

        .btn-covenant-partner {
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            padding: 0.6rem 1.15rem;
            background: linear-gradient(135deg, #d4af37 0%, #b8860b 100%);
            color: #060d17;
            border-radius: 8px;
            font-size: 0.84rem;
            font-weight: 800;
            text-decoration: none;
            letter-spacing: 0.3px;
            box-shadow: 0 4px 15px rgba(212, 175, 55, 0.25);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .btn-covenant-partner:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 22px rgba(212, 175, 55, 0.4);
        }

        .nistco-burger-toggle {
            display: none;
            background: transparent;
            border: 1px solid var(--nastco-nav-border);
            border-radius: 8px;
            padding: 0.55rem;
            cursor: pointer;
            color: #ffffff;
        }

        .nistco-burger-icon {
            width: 22px;
            height: 16px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .nistco-burger-icon span {
            height: 2px;
            width: 100%;
            background: var(--nastco-gold);
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        @media (max-width: 1080px) {
            .nistco-nav-menu,
            .nistco-fed-right,
            .btn-covenant-partner {
                display: none;
            }

            .nistco-burger-toggle {
                display: flex;
            }

            .nistco-nav-menu.mobile-open {
                display: flex;
                flex-direction: column;
                align-items: stretch;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: #09121f;
                border-bottom: 2px solid var(--nastco-gold);
                padding: 1.5rem;
                gap: 0.6rem;
            }

            .nistco-dropdown-menu {
                position: static;
                visibility: visible;
                opacity: 1;
                transform: none;
                box-shadow: none;
                background: rgba(0,0,0,0.25);
                margin: 0.5rem 0;
            }
        }
    </style>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<a class="screen-reader-text" href="#main-content" style="position:absolute;left:-9999px;top:auto;width:1px;height:1px;overflow:hidden;">
    <?php esc_html_e( 'Skip to main content', 'nistco-theme' ); ?>
</a>

<header class="nistco-masthead" role="banner">
    <!-- Federal STI Identity & Social Strip -->
    <div class="nistco-fed-bar">
        <div class="nistco-fed-inner">
            <div class="nistco-fed-flag">
                <span class="fed-flag-icon" aria-hidden="true">
                    <span></span><span></span><span></span>
                </span>
                <span>Federal Ministry of Innovation, Science & Technology</span>
                <span class="fed-senate-tag">Enacted Transition • Senate Passage Pipeline</span>
            </div>

            <div class="nistco-fed-right">
                <div class="nistco-fed-socials" aria-label="NASTCO Social Channels">
                    <a href="https://x.com/nastcogovng" target="_blank" rel="noopener noreferrer" title="Follow NASTCO on X / Twitter" aria-label="X (Twitter)">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                    </a>
                    <a href="https://linkedin.com/company/nastcogovng" target="_blank" rel="noopener noreferrer" title="Connect on LinkedIn" aria-label="LinkedIn">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                    <a href="https://youtube.com/@nastcogovng" target="_blank" rel="noopener noreferrer" title="Subscribe on YouTube" aria-label="YouTube">
                        <svg width="15" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M23.498 6.186a3.016 3.016 0 0 0-2.122-2.136C19.505 3.545 12 3.545 12 3.545s-7.505 0-9.377.505A3.017 3.017 0 0 0 .502 6.186C0 8.07 0 12 0 12s0 3.93.502 5.814a3.016 3.016 0 0 0 2.122 2.136c1.871.505 9.376.505 9.376.505s7.505 0 9.377-.505a3.015 3.015 0 0 0 2.122-2.136C24 15.93 24 12 24 12s0-3.93-.502-5.814zM9.545 15.568V8.432L15.818 12l-6.273 3.568z"/></svg>
                    </a>
                    <a href="https://facebook.com/nastcogovng" target="_blank" rel="noopener noreferrer" title="Follow on Facebook" aria-label="Facebook">
                        <svg width="13" height="13" viewBox="0 0 24 24" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                    </a>
                </div>

                <div class="nistco-fed-links">
                    <a href="<?php echo esc_url( home_url( '/statutory-mandate/' ) ); ?>">Statutory STI Charter</a>
                    <span>•</span>
                    <a href="<?php echo esc_url( home_url( '/notap-accreditation/' ) ); ?>">NOTAP Protocol</a>
                    <span>•</span>
                    <a href="<?php echo esc_url( home_url( '/portal/' ) ); ?>">Researcher Intranet</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Navigation Bar -->
    <nav class="nistco-nav-container" aria-label="<?php esc_attr_e( 'Main Institutional Navigation', 'nistco-theme' ); ?>">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nistco-brand-anchor" rel="home">
            <img class="nistco-brand-logo" 
                 src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/nastco-logo.png' ); ?>" 
                 alt="National Science and Technology Complex (NASTCO) Official Seal" 
                 width="52" 
                 height="52"
                 loading="eager">
            <div class="nistco-brand-text">
                <span class="nistco-brand-title">NASTCO</span>
                <span class="nistco-brand-sub">National Science and Technology Complex</span>
            </div>
        </a>

        <ul class="nistco-nav-menu" id="nistcoPrimaryNav">
            <li class="nistco-nav-item">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nistco-nav-link <?php echo is_front_page() ? 'active' : ''; ?>">
                    Home
                </a>
            </li>

            <!-- Research Centres Dropdown -->
            <li class="nistco-nav-item">
                <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="nistco-nav-link" aria-haspopup="true" aria-expanded="false">
                    Research Centres
                    <svg width="10" height="6" viewBox="0 0 10 6" fill="none" aria-hidden="true">
                        <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </a>
                <ul class="nistco-dropdown-menu" aria-label="Specialized Research Centres">
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" class="nistco-dropdown-link">
                            <span class="dropdown-title">AMSARC <span style="color:var(--nastco-gold);font-size:0.75rem;">CFD & AI</span></span>
                            <span class="dropdown-desc">Applied Mathematics & Simulation Advanced Research Centre</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" class="nistco-dropdown-link">
                            <span class="dropdown-title">BARC <span style="color:#10b981;font-size:0.75rem;">Biotech</span></span>
                            <span class="dropdown-desc">Biotechnology Advanced Research Centre</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" class="nistco-dropdown-link">
                            <span class="dropdown-title">CARC <span style="color:#f59e0b;font-size:0.75rem;">Chemistry</span></span>
                            <span class="dropdown-desc">Chemistry Advanced Research Centre</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/parc/' ) ); ?>" class="nistco-dropdown-link">
                            <span class="dropdown-title">PARC <span style="color:#38bdf8;font-size:0.75rem;">Physics & Laser</span></span>
                            <span class="dropdown-desc">Physics Advanced Research Centre</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/aepc/' ) ); ?>" class="nistco-dropdown-link">
                            <span class="dropdown-title">AEPC <span style="color:#06b6d4;font-size:0.75rem;">Prototype & CNC</span></span>
                            <span class="dropdown-desc">Advanced Engineering & Prototype Centre</span>
                        </a>
                    </li>
                    <li>
                        <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" class="nistco-dropdown-link">
                            <span class="dropdown-title">NTC <span style="color:#e11d48;font-size:0.75rem;">Dosimetry</span></span>
                            <span class="dropdown-desc">Nuclear Technology Centre (SSDL Labs)</span>
                        </a>
                    </li>
                </ul>
            </li>

            <li class="nistco-nav-item">
                <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" 
                   class="nistco-nav-link <?php echo is_page( 'commercial-ventures' ) ? 'active' : ''; ?>">
                    <span>Commercial Ventures</span>
                    <span class="badge-ventures-pulse">
                        <span class="pulse-dot"></span>
                        40/35/25
                    </span>
                </a>
            </li>

            <li class="nistco-nav-item">
                <a href="<?php echo esc_url( home_url( '/innovations/' ) ); ?>" class="nistco-nav-link">
                    Innovations & Patents
                </a>
            </li>

            <li class="nistco-nav-item">
                <a href="<?php echo esc_url( home_url( '/procurement/' ) ); ?>" class="nistco-nav-link">
                    Procurement
                </a>
            </li>

            <li class="nistco-nav-item">
                <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="nistco-nav-link">
                    Contact
                </a>
            </li>
        </ul>

        <div class="nistco-nav-actions">
            <a href="<?php echo esc_url( home_url( '/commercial-ventures/#licensing' ) ); ?>" class="btn-covenant-partner">
                <span>Engage Commercial IP</span>
                <svg width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true">
                    <path d="M1 11L11 1M11 1H3M11 1V9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </a>

            <button class="nistco-burger-toggle" id="nistcoBurgerBtn" aria-label="Toggle Navigation Menu" aria-controls="nistcoPrimaryNav" aria-expanded="false">
                <div class="nistco-burger-icon" aria-hidden="true">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
        </div>
    </nav>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const burgerBtn = document.getElementById('nistcoBurgerBtn');
    const primaryNav = document.getElementById('nistcoPrimaryNav');

    if (burgerBtn && primaryNav) {
        burgerBtn.addEventListener('click', function() {
            const isExpanded = burgerBtn.getAttribute('aria-expanded') === 'true';
            burgerBtn.setAttribute('aria-expanded', !isExpanded);
            primaryNav.classList.toggle('mobile-open');
        });
    }
});
</script>

<div id="main-content" tabindex="-1">
