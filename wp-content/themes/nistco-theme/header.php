<?php
/**
 * The header for NISTCO Theme - Fully Responsive & Professional OG Architecture
 */
?>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
        .nistco-site-header {
            background: #042416;
            color: #fff;
            border-bottom: 3px solid #d97706;
            position: sticky;
            top: 0;
            z-index: 9999;
            box-shadow: 0 4px 15px rgba(4,36,22,0.15);
            font-family: system-ui, -apple-system, sans-serif;
        }
        .nistco-header-container {
            max-width: 1440px;
            margin: 0 auto;
            padding: 0.75rem 1.5rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .nistco-brand {
            display: flex;
            align-items: center;
            gap: 0.75rem;
            text-decoration: none;
            color: #fff;
        }
        .nistco-brand-icon {
            background: #0d5c36;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 1.2rem;
            color: #d97706;
            border: 1px solid rgba(217,119,6,0.4);
            box-shadow: 0 2px 5px rgba(0,0,0,0.2);
            flex-shrink: 0;
        }
        .nistco-brand-title {
            font-weight: 700;
            font-size: 1.05rem;
            letter-spacing: 0.5px;
            line-height: 1.2;
        }
        .nistco-brand-subtitle {
            font-size: 0.65rem;
            color: #94a3b8;
            text-transform: uppercase;
            letter-spacing: 0.8px;
        }
        .nistco-desktop-nav {
            display: flex;
            align-items: center;
            gap: 1rem;
        }
        .nistco-nav-link {
            color: #e2e8f0;
            text-decoration: none;
            font-size: 0.85rem;
            font-weight: 500;
            transition: color 0.2s ease;
            white-space: nowrap;
            padding: 0.25rem 0;
        }
        .nistco-nav-link:hover {
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
            box-shadow: 0 10px 25px rgba(0,0,0,0.3);
            border-radius: 6px;
            border: 1px solid rgba(217,119,6,0.3);
            padding: 0.5rem 0;
            z-index: 100;
        }
        .nistco-dropdown:hover .nistco-dropdown-menu {
        }
        .nistco-dropdown-item {
            display: block;
            padding: 0.45rem 1rem;
            color: #e2e8f0;
            text-decoration: none;
            font-size: 0.8rem;
            transition: background 0.15s;
        }
        .nistco-dropdown-item:hover {
            background: #0d5c36;
        }
        .nistco-servicom-btn {
            background: #d97706;
            color: #fff;
            padding: 0.35rem 0.65rem;
            border-radius: 4px;
            text-decoration: none;
            font-size: 0.75rem;
            font-weight: 700;
            display: inline-flex;
            align-items: center;
            gap: 0.3rem;
            transition: opacity 0.2s;
            white-space: nowrap;
        }
        .nistco-servicom-btn:hover {
            opacity: 0.9;
        }
        .nistco-desktop-socials {
            display: flex;
            align-items: center;
            gap: 0.4rem;
        }
        .nistco-social-pill {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.08);
            color: #cbd5e1;
            text-decoration: none;
            font-size: 0.75rem;
            font-weight: 600;
            transition: background 0.2s ease, color 0.2s ease;
        }
        .nistco-social-pill:hover {
            background: #d97706;
            color: #fff;
        }
        .nistco-menu-toggle {
            background: #0d5c36;
            border: 1px solid rgba(217,119,6,0.4);
            color: #fff;
            width: 42px;
            height: 42px;
            border-radius: 6px;
            display: none;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            gap: 5px;
            cursor: pointer;
        }
        .nistco-menu-toggle span {
            width: 22px;
            height: 2px;
            background: #fff;
            display: block;
            border-radius: 2px;
        }
        .nistco-mobile-drawer {
            display: none;
            background: #031b10;
            border-top: 1px solid rgba(217, 119, 6, 0.3);
            padding: 1.5rem;
            max-height: 85vh;
            overflow-y: auto;
            width: 100%;
            box-sizing: border-box;
        }
        .nistco-mobile-drawer.open {
        }
        .nistco-mobile-nav-link {
            color: #e2e8f0;
            text-decoration: none;
            font-size: 1rem;
            font-weight: 500;
            display: block;
            padding: 0.35rem 0;
        }
        .nistco-mobile-nav-link:hover {
            color: #d97706;
        }

        /* Responsive Breakpoint Switch */
        @media screen and (max-width: 1200px) {
        }
        @media screen and (min-width: 1201px) {
        }
    </style>
</head>
<body <?php body_class(); ?> style="margin: 0; background: #f8fafc; color: #1e293b;">
<?php wp_body_open(); ?>

<header class="nistco-site-header">
    <div class="nistco-header-container">
        
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nistco-brand">
            <div class="nistco-brand-icon">N</div>
            <div>
                <div class="nistco-brand-title">NISTCO</div>
                <div class="nistco-brand-subtitle">Innovation & Science</div>
            </div>
        </a>

        <nav class="nistco-desktop-nav">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nistco-nav-link">Home</a>
            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="nistco-nav-link">About</a>
            
            <div class="nistco-dropdown">
                <button class="nistco-nav-link" style="background: none; border: none; cursor: pointer; display: flex; align-items: center; gap: 0.25rem; font-family: inherit;">
                    Centres <span style="font-size: 0.6rem;">▼</span>
                </button>
                <div class="nistco-dropdown-menu">
                    <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" class="nistco-dropdown-item">AMSARC (Math & Simulation)</a>
                    <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" class="nistco-dropdown-item">BARC (Biotechnology)</a>
                    <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" class="nistco-dropdown-item">CARC (Chemical)</a>
                    <a href="<?php echo esc_url( home_url( '/centres/parc/' ) ); ?>" class="nistco-dropdown-item">PARC (Physical)</a>
                    <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" class="nistco-dropdown-item">NTC (Nuclear Technology)</a>
                    <a href="<?php echo esc_url( home_url( '/centres/pew/' ) ); ?>" class="nistco-dropdown-item">Precision Engineering Workshop</a>
                </div>
            </div>

            <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" class="nistco-nav-link">Ventures</a>
            <a href="<?php echo esc_url( home_url( '/procurement/' ) ); ?>" class="nistco-nav-link">Procurement</a>
            <a href="<?php echo esc_url( home_url( '/publications/' ) ); ?>" class="nistco-nav-link">Publications</a>
            <a href="<?php echo esc_url( home_url( '/media/' ) ); ?>" class="nistco-nav-link">Media</a>
            <a href="<?php echo esc_url( home_url( '/dashboard/' ) ); ?>" class="nistco-nav-link">Dashboard</a>
            
            <a href="<?php echo esc_url( home_url( '/servicom/' ) ); ?>" class="nistco-servicom-btn" title="SERVICOM Service Delivery Commitment">
                🛡️ SERVICOM
            </a>
        </nav>

        <div style="display: flex; align-items: center; gap: 0.75rem;">
            <div class="nistco-desktop-socials">
                <a href="https://twitter.com" target="_blank" class="nistco-social-pill" title="X / Twitter">𝕏</a>
                <a href="https://facebook.com" target="_blank" class="nistco-social-pill" title="Facebook">f</a>
                <a href="https://youtube.com" target="_blank" class="nistco-social-pill" title="YouTube">▶</a>
                <a href="https://linkedin.com" target="_blank" class="nistco-social-pill" title="LinkedIn">in</a>
            </div>

            <button id="nistco-menu-toggle" class="nistco-menu-toggle" aria-label="Toggle Navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>

    </div>

    <div id="nistco-mobile-drawer" class="nistco-mobile-drawer">
        <div style="display: flex; flex-direction: column; gap: 1rem;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nistco-mobile-nav-link">Home</a>
            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="nistco-mobile-nav-link">About NISTCO</a>
            
            <div style="font-weight: 600; color: #d97706; font-size: 0.85rem; text-transform: uppercase; letter-spacing: 0.5px;">Research Centres</div>
            <div style="padding-left: 0.75rem; display: flex; flex-direction: column; gap: 0.5rem; border-left: 2px solid rgba(217,119,6,0.3);">
                <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" class="nistco-mobile-nav-link" style="font-size: 0.9rem;">AMSARC (Math & Simulation)</a>
                <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" class="nistco-mobile-nav-link" style="font-size: 0.9rem;">BARC (Biotechnology)</a>
                <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" class="nistco-mobile-nav-link" style="font-size: 0.9rem;">CARC (Chemical)</a>
                <a href="<?php echo esc_url( home_url( '/centres/parc/' ) ); ?>" class="nistco-mobile-nav-link" style="font-size: 0.9rem;">PARC (Physical)</a>
                <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" class="nistco-mobile-nav-link" style="font-size: 0.9rem;">NTC (Nuclear Technology)</a>
                <a href="<?php echo esc_url( home_url( '/centres/pew/' ) ); ?>" class="nistco-mobile-nav-link" style="font-size: 0.9rem;">Precision Engineering Workshop</a>
            </div>

            <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" class="nistco-mobile-nav-link">Commercial Ventures</a>
            <a href="<?php echo esc_url( home_url( '/procurement/' ) ); ?>" class="nistco-mobile-nav-link">Procurement & Tenders</a>
            <a href="<?php echo esc_url( home_url( '/publications/' ) ); ?>" class="nistco-mobile-nav-link">Publications Repository</a>
            <a href="<?php echo esc_url( home_url( '/media/' ) ); ?>" class="nistco-mobile-nav-link">Media & Press</a>
            <a href="<?php echo esc_url( home_url( '/dashboard/' ) ); ?>" class="nistco-mobile-nav-link">Staff Dashboard</a>
            
            <a href="<?php echo esc_url( home_url( '/servicom/' ) ); ?>" class="nistco-servicom-btn" style="justify-content: center; padding: 0.6rem; margin-top: 0.25rem;">
                🛡️ SERVICOM Service Portal
            </a>
            
            <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem; display: flex; gap: 1rem; align-items: center; flex-wrap: wrap;">
                <a href="https://twitter.com" target="_blank" class="nistco-social-pill" title="X / Twitter">𝕏</a>
                <a href="https://facebook.com" target="_blank" class="nistco-social-pill" title="Facebook">f</a>
                <a href="https://youtube.com" target="_blank" class="nistco-social-pill" title="YouTube">▶</a>
                <a href="https://linkedin.com" target="_blank" class="nistco-social-pill" title="LinkedIn">in</a>
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('nistco-menu-toggle');
    const mobileDrawer = document.getElementById('nistco-mobile-drawer');
    
    if (toggleBtn && mobileDrawer) {
        toggleBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            mobileDrawer.classList.toggle('open');
        });

        // Close drawer when clicking outside
        document.addEventListener('click', function(e) {
                mobileDrawer.classList.remove('open');
            }
        });
    }
});
</script>
