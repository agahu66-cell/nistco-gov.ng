<?php
/**
 * The header for NISTCO Theme - Modern Responsive with Hamburger & Full Menu
 */
?>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
    <style>
        @media (max-width: 1100px) {
        }
    </style>
</head>
<body <?php body_class(); ?> style="margin: 0; font-family: system-ui, -apple-system, sans-serif; background: #f8fafc; color: #1e293b;">
<?php wp_body_open(); ?>

<header style="background: #042416; color: #fff; border-bottom: 3px solid #d97706; position: sticky; top: 0; z-index: 1000; box-shadow: 0 4px 15px rgba(4,36,22,0.15);">
    <div style="max-width: 1440px; margin: 0 auto; padding: 0.85rem 2rem; display: flex; justify-content: space-between; align-items: center;">
        
        <div style="display: flex; align-items: center; gap: 0.75rem;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #fff; text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                <div style="background: #0d5c36; width: 42px; height: 42px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.25rem; color: #d97706; border: 1px solid rgba(217,119,6,0.4); box-shadow: 0 2px 5px rgba(0,0,0,0.2);">N</div>
                <div>
                    <div style="font-weight: 700; font-size: 1.15rem; letter-spacing: 0.5px; line-height: 1.2;">NISTCO</div>
                    <div style="font-size: 0.7rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.8px;">Innovation & Science</div>
                </div>
            </a>
        </div>

        <nav class="nistco-desktop-nav" style="display: flex; align-items: center; gap: 1.25rem;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 0.9rem; font-weight: 500;">Home</a>
            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 0.9rem; font-weight: 500;">About</a>
            
            <div class="nistco-dropdown" style="position: relative;">
                <button style="background: none; border: none; color: #e2e8f0; font-size: 0.9rem; font-weight: 500; cursor: pointer; padding: 0.5rem 0; display: flex; align-items: center; gap: 0.3rem;">
                    Centres <span style="font-size: 0.65rem;">▼</span>
                </button>
                <div class="nistco-dropdown-menu" style="display: none; position: absolute; top: 100%; left: 0; background: #042416; min-width: 280px; box-shadow: 0 10px 25px rgba(0,0,0,0.3); border-radius: 6px; border: 1px solid rgba(217,119,6,0.3); padding: 0.5rem 0; z-index: 100;">
                    <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" style="display: block; padding: 0.5rem 1rem; color: #e2e8f0; text-decoration: none; font-size: 0.85rem;">AMSARC (Math & Simulation)</a>
                    <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" style="display: block; padding: 0.5rem 1rem; color: #e2e8f0; text-decoration: none; font-size: 0.85rem;">BARC (Biotechnology)</a>
                    <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" style="display: block; padding: 0.5rem 1rem; color: #e2e8f0; text-decoration: none; font-size: 0.85rem;">CARC (Chemical)</a>
                    <a href="<?php echo esc_url( home_url( '/centres/parc/' ) ); ?>" style="display: block; padding: 0.5rem 1rem; color: #e2e8f0; text-decoration: none; font-size: 0.85rem;">PARC (Physical)</a>
                    <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" style="display: block; padding: 0.5rem 1rem; color: #e2e8f0; text-decoration: none; font-size: 0.85rem;">NTC (Nuclear Technology)</a>
                    <a href="<?php echo esc_url( home_url( '/centres/pew/' ) ); ?>" style="display: block; padding: 0.5rem 1rem; color: #e2e8f0; text-decoration: none; font-size: 0.85rem;">Precision Engineering Workshop</a>
                </div>
            </div>

            <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 0.9rem; font-weight: 500;">Commercial Ventures</a>
            <a href="<?php echo esc_url( home_url( '/procurement/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 0.9rem; font-weight: 500;">Procurement</a>
            <a href="<?php echo esc_url( home_url( '/media/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 0.9rem; font-weight: 500;">Media</a>
            <a href="<?php echo esc_url( home_url( '/dashboard/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 0.9rem; font-weight: 500;">Staff Dashboard</a>
        </nav>

        <div style="display: flex; align-items: center; gap: 1rem;">
            <div class="nistco-socials" style="display: flex; align-items: center; gap: 0.75rem;">
                <a href="https://twitter.com" target="_blank" aria-label="Twitter" style="color: #cbd5e1; text-decoration: none; font-size: 0.9rem; font-weight: 600;">𝕏</a>
                <a href="https://linkedin.com" target="_blank" aria-label="LinkedIn" style="color: #cbd5e1; text-decoration: none; font-size: 0.9rem; font-weight: 600;">in</a>
            </div>
            <button id="nistco-menu-toggle" aria-label="Toggle Navigation" style="background: #0d5c36; border: 1px solid rgba(217,119,6,0.4); color: #fff; width: 40px; height: 40px; border-radius: 6px; display: none; flex-direction: column; justify-content: center; align-items: center; gap: 5px; cursor: pointer;">
                <span style="width: 20px; height: 2px; background: #fff; display: block; border-radius: 2px;"></span>
                <span style="width: 20px; height: 2px; background: #fff; display: block; border-radius: 2px;"></span>
                <span style="width: 20px; height: 2px; background: #fff; display: block; border-radius: 2px;"></span>
            </button>
        </div>

    </div>

    <div id="nistco-mobile-drawer" style="display: none; background: #031b10; border-top: 1px solid rgba(217,119,6,0.3); padding: 1.5rem 2rem;">
        <div style="display: flex; flex-direction: column; gap: 1rem;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 1rem; font-weight: 500;">Home</a>
            <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 1rem; font-weight: 500;">About NISTCO</a>
            <div style="font-weight: 600; color: #d97706; font-size: 0.9rem; margin-top: 0.25rem; text-transform: uppercase; letter-spacing: 0.5px;">Research Centres</div>
            <div style="padding-left: 1rem; display: flex; flex-direction: column; gap: 0.5rem;">
                <a href="<?php echo esc_url( home_url( '/centres/amsarc/' ) ); ?>" style="color: #cbd5e1; text-decoration: none; font-size: 0.9rem;">AMSARC (Math & Simulation)</a>
                <a href="<?php echo esc_url( home_url( '/centres/barc/' ) ); ?>" style="color: #cbd5e1; text-decoration: none; font-size: 0.9rem;">BARC (Biotechnology)</a>
                <a href="<?php echo esc_url( home_url( '/centres/carc/' ) ); ?>" style="color: #cbd5e1; text-decoration: none; font-size: 0.9rem;">CARC (Chemical)</a>
                <a href="<?php echo esc_url( home_url( '/centres/parc/' ) ); ?>" style="color: #cbd5e1; text-decoration: none; font-size: 0.9rem;">PARC (Physical)</a>
                <a href="<?php echo esc_url( home_url( '/centres/ntc/' ) ); ?>" style="color: #cbd5e1; text-decoration: none; font-size: 0.9rem;">NTC (Nuclear Technology)</a>
                <a href="<?php echo esc_url( home_url( '/centres/pew/' ) ); ?>" style="color: #cbd5e1; text-decoration: none; font-size: 0.9rem;">Precision Engineering Workshop</a>
            </div>
            <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 1rem; font-weight: 500; margin-top: 0.25rem;">Commercial Ventures</a>
            <a href="<?php echo esc_url( home_url( '/procurement/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 1rem; font-weight: 500;">Procurement</a>
            <a href="<?php echo esc_url( home_url( '/media/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 1rem; font-weight: 500;">Media</a>
            <a href="<?php echo esc_url( home_url( '/dashboard/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 1rem; font-weight: 500;">Staff Dashboard</a>
            
            <div style="border-top: 1px solid rgba(255,255,255,0.1); padding-top: 1rem; display: flex; gap: 1.5rem; margin-top: 0.5rem;">
                <a href="https://twitter.com" target="_blank" style="color: #d97706; text-decoration: none; font-size: 0.95rem; font-weight: 600;">Twitter / X</a>
                <a href="https://linkedin.com" target="_blank" style="color: #d97706; text-decoration: none; font-size: 0.95rem; font-weight: 600;">LinkedIn</a>
            </div>
        </div>
    </div>
</header>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const toggleBtn = document.getElementById('nistco-menu-toggle');
    const mobileDrawer = document.getElementById('nistco-mobile-drawer');
    const dropdownParent = document.querySelector('.nistco-dropdown');
    
    if (toggleBtn && mobileDrawer) {
        toggleBtn.addEventListener('click', function() {
            if (mobileDrawer.style.display === 'none' || mobileDrawer.style.display === '') {
                mobileDrawer.style.display = 'block';
            } else {
                mobileDrawer.style.display = 'none';
            }
        });
    }

    if (dropdownParent) {
        const menu = dropdownParent.querySelector('.nistco-dropdown-menu');
        dropdownParent.addEventListener('mouseenter', () => { menu.style.display = 'block'; });
        dropdownParent.addEventListener('mouseleave', () => { menu.style.display = 'none'; });
    }
});
</script>
