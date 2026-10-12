<?php
/**
 * The header for NISTCO Theme - Clean & Corrected HTML/CSS
 */
?>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
        .nistco-header-bar {
            background: #042416;
            color: #ffffff;
            border-bottom: 3px solid #d97706;
            position: sticky;
            top: 0;
            z-index: 99999;
            width: 100%;
            font-family: system-ui, -apple-system, sans-serif;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
        }
        .nistco-inner {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0.75rem 1.5rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .nistco-logo-area {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
            color: #ffffff;
        }
        .nistco-logo-badge {
            background: #0d5c36;
            color: #d97706;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.25rem;
            border: 1px solid rgba(217,119,6,0.4);
            flex-shrink: 0;
        }
        .nistco-nav-desktop {
            display: flex;
            align-items: center;
            gap: 1.1rem;
        }
        .nistco-nav-desktop a {
            color: #e2e8f0;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            white-space: nowrap;
            transition: color 0.15s;
        }
        .nistco-nav-desktop a:hover {
            color: #d97706;
        }
        .nistco-dropdown {
            position: relative;
        }
        .nistco-dropdown-menu {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            background: #042416;
            min-width: 260px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border-radius: 6px;
            border: 1px solid rgba(217,119,6,0.3);
            padding: 0.5rem 0;
            z-index: 1000;
        }
        .nistco-dropdown:hover .nistco-dropdown-menu {
            display: block;
        }
        .nistco-dropdown-menu a {
            display: block;
            padding: 0.5rem 1rem;
            font-size: 0.8rem;
            color: #e2e8f0;
        }
        .nistco-dropdown-menu a:hover {
            background: #0d5c36;
            color: #ffffff;
        }
        .nistco-servicom-btn {
            background: #d97706;
            color: #ffffff;
            padding: 0.35rem 0.75rem;
            border-radius: 4px;
            font-size: 0.75rem;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
            white-space: nowrap;
        }
        .nistco-socials {
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }
        .nistco-soc-pill {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(255,255,255,0.08);
            color: #cbd5e1;
            display: flex;
            align-items: center;
            justify-content: center;
            text-decoration: none;
            font-size: 0.75rem;
            font-weight: 600;
            transition: background 0.2s, color 0.2s;
        }
        .nistco-soc-pill:hover {
            background: #d97706;
            color: #ffffff;
        }
        .nistco-burger {
            display: none;
            background: #0d5c36;
            border: 1px solid rgba(217,119,6,0.4);
            color: #fff;
            width: 40px;
            height: 40px;
            border-radius: 6px;
            cursor: pointer;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 5px;
        }
        .nistco-burger span {
            width: 20px;
            height: 2px;
            background: #fff;
            display: block;
            border-radius: 2px;
        }
        .nistco-mobile-drawer {
            display: none;
            background: #031b10;
            border-top: 1px solid rgba(217,119,6,0.3);
            padding: 1.25rem 1.5rem;
            max-height: 80vh;
            overflow-y: auto;
            width: 100%;
            box-sizing: border-box;
        }
        .nistco-mobile-drawer.open {
            display: block;
        }
        .nistco-mobile-drawer a {
            display: block;
            color: #e2e8f0;
            text-decoration: none;
            font-size: 0.95rem;
            font-weight: 500;
            padding: 0.5rem 0;
            border-bottom: 1px solid rgba(255,255,255,0.05);
        }
        @media screen and (max-width: 1100px) {
        }
    </style>
</head>
<body <?php body_class(); ?> style="margin: 0; background: #f8fafc; color: #1e293b;">
<?php wp_body_open(); ?>

<header class="nistco-header-bar">
    <div class="nistco-inner">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nistco-logo-area">
            <div class="nistco-logo-badge">N</div>
            <div>
                <div style="font-size: 1.1rem; font-weight: 700; line-height: 1.1;">NISTCO</div>
                <div style="font-size: 0.65rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px;">Innovation & Science</div>
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
            <a href="<?php echo esc_url( home_url( '/servicom/' ) ); ?>" class="nistco-servicom-btn">🛡️ SERVICOM</a>
        </nav>

        <div style="display: flex; align-items: center; gap: 0.75rem;">
            <div class="nistco-socials">
                <a href="https://twitter.com" target="_blank" class="nistco-soc-pill" title="X / Twitter">𝕏</a>
                <a href="https://facebook.com" target="_blank" class="nistco-soc-pill" title="Facebook">f</a>
                <a href="https://youtube.com" target="_blank" class="nistco-soc-pill" title="YouTube">▶</a>
                <a href="https://linkedin.com" target="_blank" class="nistco-soc-pill" title="LinkedIn">in</a>
            </div>
            <button id="nistcoBurger" class="nistco-burger" aria-label="Toggle Navigation">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>

    <div id="nistcoMobileDrawer" class="nistco-mobile-drawer">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About NISTCO</a>
        <div style="color: #d97706; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; margin-top: 0.75rem; padding-bottom: 0.25rem;">Research Centres</div>
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
        <div style="margin-top: 0.75rem;">
            <a href="<?php echo esc_url( home_url( '/servicom/' ) ); ?>" class="nistco-servicom-btn" style="display: block; text-align: center; padding: 0.6rem;">🛡️ SERVICOM Service Portal</a>
        </div>
        <div style="display: flex; gap: 0.5rem; margin-top: 1rem; padding-top: 0.75rem; border-top: 1px solid rgba(255,255,255,0.1);">
            <a href="https://twitter.com" target="_blank" class="nistco-soc-pill">𝕏</a>
            <a href="https://facebook.com" target="_blank" class="nistco-soc-pill">f</a>
            <a href="https://youtube.com" target="_blank" class="nistco-soc-pill">▶</a>
            <a href="https://linkedin.com" target="_blank" class="nistco-soc-pill">in</a>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    var b = document.getElementById('nistcoBurger');
    var d = document.getElementById('nistcoMobileDrawer');
    if (b && d) {
        b.addEventListener('click', function(e) {
            e.stopPropagation();
            d.classList.toggle('open');
        });
        document.addEventListener('click', function(e) {
                d.classList.remove('open');
            }
        });
    }
});
</script>
