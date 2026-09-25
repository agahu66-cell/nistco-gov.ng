<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <style>
    :root {
        --primary-color: #0D5C3A;
        --primary-dark: #073B24;
        --text-main: #1F2937;
        --text-muted: #4B5563;
        --border-color: #E5E7EB;
        --bg-light: #F9FAFB;
    }

    body {
        margin: 0;
        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
        color: var(--text-main);
        background-color: #ffffff;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 0 1.5rem;
        box-sizing: border-box;
    }

    /* Top Government Bar */
    .gov-topbar {
        background: var(--primary-dark);
        color: #ffffff;
        font-size: 0.82rem;
        padding: 0.45rem 0;
    }

    .gov-topbar .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        gap: 1rem;
    }

    /* Site Header */
    .site-header {
        background: #ffffff;
        border-bottom: 2px solid var(--border-color);
        position: sticky;
        top: 0;
        z-index: 1000;
    }

    .header-inner {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.85rem 0;
    }

    .site-branding a {
        text-decoration: none;
        display: block;
    }

    .site-branding h1 {
        margin: 0;
        font-size: 1.45rem;
        color: var(--primary-color);
        font-weight: 800;
        letter-spacing: -0.5px;
        line-height: 1.2;
    }

    .site-branding p {
        margin: 0;
        font-size: 0.8rem;
        color: var(--text-muted);
    }

    /* =========================================================================
       DESKTOP NAVIGATION
       ========================================================================= */
    .primary-nav {
        display: flex;
        align-items: center;
    }

    .primary-nav ul {
        display: flex;
        list-style: none;
        margin: 0;
        padding: 0;
        gap: 1.5rem;
        align-items: center;
    }

    .primary-nav li {
        position: relative;
    }

    .primary-nav a {
        color: var(--text-main);
        text-decoration: none;
        font-weight: 600;
        font-size: 0.95rem;
        padding: 0.5rem 0;
        display: inline-block;
        transition: color 0.2s;
    }

    .primary-nav a:hover,
    .primary-nav .current-menu-item>a {
        color: var(--primary-color);
    }

    /* Desktop Dropdowns */
    .primary-nav ul ul {
        display: none;
        position: absolute;
        top: 100%;
        left: 0;
        background: #ffffff;
        min-width: 240px;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        border: 1px solid var(--border-color);
        border-radius: 6px;
        padding: 0.5rem 0;
        flex-direction: column;
        gap: 0;
        z-index: 1000;
    }

    .primary-nav ul ul li {
        width: 100%;
    }

    .primary-nav ul ul a {
        padding: 0.65rem 1.25rem;
        display: block;
        font-size: 0.88rem;
        font-weight: 500;
    }

    .primary-nav ul ul a:hover {
        background: var(--bg-light);
        color: var(--primary-color);
    }

    .primary-nav li:hover>ul {
        display: flex;
    }

    /* Hide mobile accordion button on desktop */
    .submenu-toggle-btn {
        display: none;
    }

    /* =========================================================================
       HAMBURGER BUTTON TOGGLE
       ========================================================================= */
    .mobile-nav-toggle {
        display: none;
        background: transparent;
        border: 1px solid var(--border-color);
        border-radius: 6px;
        padding: 0.55rem;
        cursor: pointer;
        outline: none;
        flex-direction: column;
        justify-content: space-around;
        width: 40px;
        height: 40px;
        box-sizing: border-box;
        z-index: 1001;
        transition: border-color 0.2s;
    }

    .mobile-nav-toggle:hover {
        border-color: var(--primary-color);
    }

    .mobile-nav-toggle .bar {
        width: 100%;
        height: 2px;
        background-color: var(--primary-dark);
        border-radius: 2px;
        transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        transform-origin: center;
    }

    .mobile-nav-toggle[aria-expanded="true"] .bar:nth-child(1) {
        transform: translateY(8px) rotate(45deg);
    }

    .mobile-nav-toggle[aria-expanded="true"] .bar:nth-child(2) {
        opacity: 0;
        transform: scaleX(0);
    }

    .mobile-nav-toggle[aria-expanded="true"] .bar:nth-child(3) {
        transform: translateY(-8px) rotate(-45deg);
    }

    /* Backdrop Overlay */
    .nav-backdrop {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background: rgba(0, 0, 0, 0.55);
        backdrop-filter: blur(2px);
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transition: opacity 0.3s ease, visibility 0.3s ease;
        z-index: 998;
    }

    .nav-backdrop.is-active {
        opacity: 1;
        visibility: visible;
        pointer-events: auto;
    }

    /* =========================================================================
       MOBILE RESPONSIVE BREAKPOINT (< 860px)
       ========================================================================= */
    @media screen and (max-width: 860px) {
        .gov-topbar {
            display: none;
        }

        .mobile-nav-toggle {
            display: flex;
        }

        .primary-nav {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background: #ffffff;
            border-bottom: 2px solid var(--primary-color);
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.15);
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.35s ease-in-out, opacity 0.3s ease;
            opacity: 0;
            visibility: hidden;
        }

        .primary-nav.is-open {
            max-height: 80vh;
            overflow-y: auto;
            opacity: 1;
            visibility: visible;
        }

        .primary-nav ul {
            flex-direction: column;
            align-items: stretch;
            padding: 1rem 1.5rem 1.5rem 1.5rem;
            gap: 0;
            width: 100%;
            box-sizing: border-box;
        }

        .primary-nav li {
            border-bottom: 1px solid var(--border-color);
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
            justify-content: space-between;
        }

        .primary-nav li:last-child {
            border-bottom: none;
        }

        .primary-nav a {
            padding: 0.75rem 0;
            font-size: 1rem;
            flex-grow: 1;
        }

        /* Accordion Toggle (+/-) Button */
        .submenu-toggle-btn {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            border: 1px solid var(--border-color);
            background: var(--bg-light);
            color: var(--primary-dark);
            border-radius: 4px;
            font-size: 1.25rem;
            font-weight: 700;
            cursor: pointer;
            line-height: 1;
            user-select: none;
            transition: all 0.2s ease;
            margin-left: 0.5rem;
        }

        .submenu-toggle-btn:hover {
            background: #e5e7eb;
            border-color: var(--primary-color);
        }

        .submenu-toggle-btn[aria-expanded="true"] {
            background: rgba(13, 92, 58, 0.1);
            color: var(--primary-color);
            border-color: var(--primary-color);
        }

        /* Collapsible Sub-menu */
        .primary-nav ul ul {
            display: block;
            position: static;
            box-shadow: none;
            border: none;
            border-left: 3px solid var(--primary-color);
            border-radius: 0;
            background: var(--bg-light);
            padding: 0 0 0 1rem;
            margin: 0 0 0.5rem 0;
            width: 100%;
            max-height: 0;
            overflow: hidden;
            opacity: 0;
            visibility: hidden;
            transition: max-height 0.35s ease-in-out, opacity 0.25s ease, padding 0.3s ease;
            box-sizing: border-box;
        }

        /* Sub-menu Open State */
        .primary-nav ul ul.is-open {
            max-height: 600px;
            opacity: 1;
            visibility: visible;
            padding: 0.35rem 0 0.5rem 1rem;
        }

        .primary-nav ul ul li {
            border-bottom: 1px dashed var(--border-color);
        }

        .primary-nav ul ul li:last-child {
            border-bottom: none;
        }

        .primary-nav ul ul a {
            padding: 0.55rem 0;
            font-size: 0.9rem;
        }
    }
    </style>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Dark Backdrop Overlay -->
    <div class="nav-backdrop" id="nav-backdrop" aria-hidden="true"></div>

    <!-- Official Topbar Banner -->
    <div class="gov-topbar">
        <div class="container">
            <span>Federal Ministry of Innovation, Science and Technology</span>
            <span>Complex Portal | Sheda, Abuja</span>
        </div>
    </div>

    <!-- Main Navigation Header -->
    <header class="site-header">
        <div class="header-inner container">

            <!-- Site Identity / Branding -->
            <div class="site-branding">
                <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
                <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                    <h1><?php bloginfo( 'name' ); ?></h1>
                    <p><?php bloginfo( 'description' ); ?></p>
                </a>
                <?php endif; ?>
            </div>

            <!-- Hamburger Toggle Button -->
            <button class="mobile-nav-toggle" id="mobile-nav-toggle" aria-expanded="false"
                aria-controls="primary-nav-menu" aria-label="Toggle Navigation Menu">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <!-- Navigation Drawer -->
            <nav class="primary-nav" id="primary-nav-menu" aria-label="Primary Navigation">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary',
                    'container'      => false,
                    'menu_class'     => 'nav-menu',
                    'fallback_cb'    => function() {
                        echo '<ul>
                            <li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>
                            <li><a href="' . esc_url( home_url( '/about-us/' ) ) . '">About Us</a></li>
                            <li class="menu-item-has-children">
                                <a href="' . esc_url( get_post_type_archive_link( 'research_centre' ) ) . '">Research Centres</a>
                                <ul class="sub-menu">
                                    <li><a href="' . esc_url( home_url( '/research-centres/biotechnology-advanced-research-centre/' ) ) . '">Biotechnology (BARC)</a></li>
                                    <li><a href="' . esc_url( home_url( '/research-centres/applied-mathematics-and-simulation-advanced-research-centre/' ) ) . '">Applied Maths & Simulation (AMSARC)</a></li>
                                </ul>
                            </li>
                            <li><a href="' . esc_url( home_url( '/procurement/' ) ) . '">Procurement & BPP Desk</a></li>
                            <li><a href="' . esc_url( get_post_type_archive_link( 'publication' ) ) . '">Publications</a></li>
                            <li><a href="' . esc_url( home_url( '/news/' ) ) . '">News</a></li>
                            <li><a href="' . esc_url( home_url( '/staff-login/' ) ) . '" style="color: var(--primary-color); font-weight: 700;">Staff Login</a></li>
                        </ul>';
                    },
                ) );
                ?>
            </nav>

        </div>
    </header>

    <!-- Mobile Navigation & Submenu Accordion Engine -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var toggleBtn = document.getElementById('mobile-nav-toggle');
        var navMenu = document.getElementById('primary-nav-menu');
        var backdrop = document.getElementById('nav-backdrop');

        if (!toggleBtn || !navMenu || !backdrop) return;

        // 1. Drawer Toggle & Scroll Lock
        function setMenuState(open) {
            toggleBtn.setAttribute('aria-expanded', open ? 'true' : 'false');
            navMenu.classList.toggle('is-open', open);
            backdrop.classList.toggle('is-active', open);
            document.body.style.overflow = open ? 'hidden' : '';
        }

        toggleBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            var isOpen = toggleBtn.getAttribute('aria-expanded') === 'true';
            setMenuState(!isOpen);
        });

        backdrop.addEventListener('click', function() {
            setMenuState(false);
        });

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && navMenu.classList.contains('is-open')) {
                setMenuState(false);
                toggleBtn.focus();
            }
        });

        // 2. Inject Accordion +/- Buttons for Sub-menus
        var parentItems = navMenu.querySelectorAll('li');
        parentItems.forEach(function(item) {
            var subMenu = item.querySelector('ul');
            if (!subMenu) return;

            // Mark item with children
            item.classList.add('has-submenu');

            // Create button toggle
            var btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'submenu-toggle-btn';
            btn.setAttribute('aria-expanded', 'false');
            btn.setAttribute('aria-label', 'Toggle Submenu');
            btn.textContent = '+';

            // Insert button right before the sub-menu <ul>
            item.insertBefore(btn, subMenu);

            // Accordion click handler
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                e.stopPropagation();

                var isOpen = subMenu.classList.contains('is-open');
                if (isOpen) {
                    subMenu.classList.remove('is-open');
                    btn.setAttribute('aria-expanded', 'false');
                    btn.textContent = '+';
                } else {
                    subMenu.classList.add('is-open');
                    btn.setAttribute('aria-expanded', 'true');
                    btn.textContent = '−';
                }
            });
        });
    });
    </script>