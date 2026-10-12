<?php
/**
 * The header for NISTCO Theme - Isolated, Clean & Bulletproof Responsive Header
 */
?>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
        .nistco-header-root {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif;
            box-sizing: border-box;
            width: 100%;
        }
        .nistco-header-root *, .nistco-header-root *::before, .nistco-header-root *::after {
            box-sizing: border-box;
        }
        .nistco-header-bar {
            box-shadow: 0 4px 12px rgba(0,0,0,0.2);
        }
        .nistco-container {
        }
        .nistco-brand {
        }
        .nistco-logo-box {
        }
        .nistco-brand-text .title {
        }
        .nistco-brand-text .subtitle {
        }
        
        /* Desktop Nav */
        .nistco-nav-desktop {
        }
        .nistco-nav-desktop a {
        }
        .nistco-nav-desktop a:hover {
        }
        
        /* Dropdown */
        .nistco-dropdown {
        }
        .nistco-dropdown-menu {
        }
        .nistco-dropdown:hover .nistco-dropdown-menu {
        }
        .nistco-dropdown-menu a {
        }
        .nistco-dropdown-menu a:hover {
        }

        /* Servicom Badge */
        .nistco-servicom {
        }
        .nistco-servicom:hover {
        }

        /* Socials */
        .nistco-socials {
        }
        .nistco-soc-icon {
        }
        .nistco-soc-icon:hover {
        }

        /* Hamburger */
        .nistco-burger {
        }
        .nistco-burger span {
        }

        /* Mobile Drawer */
        .nistco-mobile-drawer {
        }
        .nistco-mobile-drawer.is-open {
        }
        .nistco-mobile-drawer a {
        }
        .nistco-mobile-drawer a:hover {
        }

        /* Responsive Media Query */
        @media screen and (max-width: 1100px) {
            .nistco-nav-desktop {
            }
            .nistco-socials {
            }
            .nistco-burger {
            }
        }
    </style>
</head>
<body <?php body_class(); ?> style="margin: 0; background: #f8fafc; color: #1e293b;">
<?php wp_body_open(); ?>

<div class="nistco-header-root">
    <header class="nistco-header-bar">
        <div class="nistco-container">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nistco-brand">
                <div class="nistco-logo-box">N</div>
                <div class="nistco-brand-text">
                    <div class="title">NISTCO</div>
                    <div class="subtitle">Innovation & Science</div>
                </div>
            </a>

            <nav class="nistco-nav-desktop">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
                
                <div class="nistco-dropdown">
                    <a href="#" onclick="return false;" style="display: flex; align-items: center; gap: 0.25rem;">Centres <span style="font-size: 0.6rem;">▼</span></a>
                    <div class="nistco-dropdown-menu">
                        <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>">AMSARC (Math & Simulation)</a>
                        <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>">BARC (Biotechnology)</a>
                        <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>">CARC (Chemical)</a>
                        <a href="<?php echo esc_url( home_url( '/centres/parc/' ) ); ?>">PARC (Physical)</a>
                        <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>">NTC (Nuclear Technology)</a>
                        <a href="<?php echo esc_url( home_url( '/centres/pew/' ) ); ?>">Precision Engineering Workshop</a>
                    </div>
                </div>

                <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>">Ventures</a>
                <a href="<?php echo esc_url( home_url( '/procurement/' ) ); ?>">Procurement</a>
                <a href="<?php echo esc_url( home_url( '/publications/' ) ); ?>">Publications</a>
                <a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media</a>
                <a href="<?php echo esc_url( home_url( '/dashboard/' ) ); ?>">Dashboard</a>
                <a href="<?php echo esc_url( home_url( '/servicom/' ) ); ?>" class="nistco-servicom">🛡️ SERVICOM</a>
            </nav>

            <div style="display: flex; align-items: center; gap: 0.75rem;">
                <div class="nistco-socials">
                    <a href="https://twitter.com" target="_blank" class="nistco-soc-icon" title="X / Twitter">𝕏</a>
                    <a href="https://facebook.com" target="_blank" class="nistco-soc-icon" title="Facebook">f</a>
                    <a href="https://youtube.com" target="_blank" class="nistco-soc-icon" title="YouTube">▶</a>
                    <a href="https://linkedin.com" target="_blank" class="nistco-soc-icon" title="LinkedIn">in</a>
                </div>
                <button id="nistcoMenuBtn" class="nistco-burger" aria-label="Toggle Menu">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>

        <div id="nistcoMobileDrawer" class="nistco-mobile-drawer">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About NISTCO</a>
            <div style="color: #d97706; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; margin-top: 0.75rem; padding-bottom: 0.25rem; letter-spacing: 0.5px;">Research Centres</div>
            <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" style="padding-left: 0.75rem; font-size: 0.85rem;">AMSARC (Math & Simulation)</a>
            <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" style="padding-left: 0.75rem; font-size: 0.85rem;">BARC (Biotechnology)</a>
            <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" style="padding-left: 0.75rem; font-size: 0.85rem;">CARC (Chemical)</a>
            <a href="<?php echo esc_url( home_url( '/centres/parc/' ) ); ?>" style="padding-left: 0.75rem; font-size: 0.85rem;">PARC (Physical)</a>
            <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" style="padding-left: 0.75rem; font-size: 0.85rem;">NTC (Nuclear Technology)</a>
            <a href="<?php echo esc_url( home_url( '/centres/pew/' ) ); ?>" style="padding-left: 0.75rem; font-size: 0.85rem;">Precision Engineering Workshop</a>
            <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>">Commercial Ventures</a>
            <a href="<?php echo esc_url( home_url( '/procurement/' ) ); ?>">Procurement & Tenders</a>
            <a href="<?php echo esc_url( home_url( '/publications/' ) ); ?>">Publications Repository</a>
            <a href="<?php echo esc_url( home_url( '/media/' ) ); ?>">Media & Press</a>
            <a href="<?php echo esc_url( home_url( '/dashboard/' ) ); ?>">Staff Dashboard</a>
            <div style="margin-top: 0.75rem; padding-top: 0.5rem;">
                <a href="<?php echo esc_url( home_url( '/servicom/' ) ); ?>" class="nistco-servicom" style="display: block; text-align: center; padding: 0.6rem;">🛡️ SERVICOM Service Portal</a>
            </div>
            <div style="display: flex; gap: 0.5rem; margin-top: 1rem; padding-top: 0.75rem; border-top: 1px solid rgba(255,255,255,0.1);">
                <a href="https://twitter.com" target="_blank" class="nistco-soc-icon">𝕏</a>
                <a href="https://facebook.com" target="_blank" class="nistco-soc-icon">f</a>
                <a href="https://youtube.com" target="_blank" class="nistco-soc-icon">▶</a>
                <a href="https://linkedin.com" target="_blank" class="nistco-soc-icon">in</a>
            </div>
        </div>
    </header>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var btn = document.getElementById('nistcoMenuBtn');
    var drawer = document.getElementById('nistcoMobileDrawer');
    if (btn && drawer) {
        btn.addEventListener('click', function(e) {
            e.stopPropagation();
            drawer.classList.toggle('is-open');
        });
        document.addEventListener('click', function(e) {
                drawer.classList.remove('is-open');
            }
        });
    }
});
</script>
