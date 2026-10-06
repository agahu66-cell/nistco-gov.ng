<?php
/**
 * The classic header for NISTCO Theme
 *
 * @package NISTCO_Theme
 */
?>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" style="background: #ffffff; border-bottom: 3px solid #042416; box-shadow: 0 4px 15px rgba(4,36,22,0.08); position: sticky; top: 0; z-index: 1000; font-family: system-ui, -apple-system, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;">
    <div style="background: #042416; color: #d1d5db; font-size: 0.75rem; padding: 0.35rem 2rem; border-bottom: 1px solid rgba(255,255,255,0.1);">
        <div style="max-width: 1440px; margin: 0 auto; display: flex; justify-content: space-between; align-items: center;">
            <span>Federal Ministry of Innovation, Science and Technology — Nigeria Innovation Science and Technology Complex (NISTCO)</span>
            <span style="color: #d97706; font-weight: 600;">Abuja, Nigeria</span>
        </div>
    </div>

    <div class="nistco-container" style="max-width: 1440px; margin: 0 auto; padding: 0.75rem 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
        
        <div class="site-branding" style="display: flex; align-items: center; gap: 0.85rem;">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 44px; height: 44px; background: #042416; color: #d97706; display: flex; align-items: center; justify-content: center; font-weight: 900; border-radius: 8px; font-size: 1.35rem; border: 2px solid #d97706; box-shadow: 0 2px 6px rgba(0,0,0,0.15);">N</div>
                    <div>
                        <span style="display: block; font-size: 1.15rem; font-weight: 800; color: #042416; line-height: 1.1; letter-spacing: -0.5px;">NISTCO</span>
                        <span style="display: block; font-size: 0.65rem; font-weight: 700; color: #4b5563; text-transform: uppercase; letter-spacing: 1px;">Research Complex</span>
                    </div>
                </a>
            <?php endif; ?>
        </div>

        <div style="display: flex; align-items: center; gap: 1.5rem; flex-wrap: wrap;">
            <nav class="nistco-nav" style="display: flex; gap: 1.1rem; align-items: center; font-size: 0.85rem; font-weight: 600;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nistco-nav-link" style="color: #374151; text-decoration: none; padding: 0.25rem 0; transition: color 0.2s;" onmouseover="this.style.color='#042416'" onmouseout="this.style.color='#374151'">Home</a>
                <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="nistco-nav-link" style="color: #374151; text-decoration: none; padding: 0.25rem 0; transition: color 0.2s;" onmouseover="this.style.color='#042416'" onmouseout="this.style.color='#374151'">About</a>
                <a href="<?php echo esc_url( home_url( '/centres/' ) ); ?>" class="nistco-nav-link" style="color: #374151; text-decoration: none; padding: 0.25rem 0; transition: color 0.2s;" onmouseover="this.style.color='#042416'" onmouseout="this.style.color='#374151'">Research Centre</a>
                <a href="<?php echo esc_url( home_url( '/procurement/' ) ); ?>" class="nistco-nav-link" style="color: #374151; text-decoration: none; padding: 0.25rem 0; transition: color 0.2s;" onmouseover="this.style.color='#042416'" onmouseout="this.style.color='#374151'">Procurement & BPP Desk</a>
                <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" class="nistco-nav-link" style="color: #374151; text-decoration: none; padding: 0.25rem 0; transition: color 0.2s;" onmouseover="this.style.color='#042416'" onmouseout="this.style.color='#374151'">Commercial Ventures</a>
                <a href="<?php echo esc_url( home_url( '/media/' ) ); ?>" class="nistco-nav-link" style="color: #374151; text-decoration: none; padding: 0.25rem 0; transition: color 0.2s;" onmouseover="this.style.color='#042416'" onmouseout="this.style.color='#374151'">Media</a>
                <a href="<?php echo esc_url( home_url( '/servicom/' ) ); ?>" class="nistco-nav-link <?php echo is_page('servicom') ? 'active' : ''; ?>" style="color: #d97706; text-decoration: none; padding: 0.25rem 0; transition: color 0.2s; border-bottom: 2px solid #d97706; font-weight: 700;" onmouseover="this.style.color='#b45309'" onmouseout="this.style.color='#d97706'">SERVICOM</a>
                <a href="<?php echo esc_url( home_url( '/contact-us/' ) ); ?>" class="nistco-nav-link" style="color: #374151; text-decoration: none; padding: 0.25rem 0; transition: color 0.2s;" onmouseover="this.style.color='#042416'" onmouseout="this.style.color='#374151'">Contact</a>
                
                <a href="<?php echo esc_url( wp_login_url() ); ?>" class="nistco-nav-link" style="background: #042416; color: #ffffff; padding: 0.4rem 0.85rem; border-radius: 4px; text-decoration: none; display: flex; align-items: center; gap: 0.4rem; transition: background 0.2s, transform 0.2s; font-weight: 600;" onmouseover="this.style.background='#0d5c36'; this.style.transform='translateY(-1px)';" onmouseout="this.style.background='#042416'; this.style.transform='translateY(0)';">
                    <svg width="14" height="14" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 3c1.66 0 3 1.34 3 3s-1.34 3-3 3-3-1.34-3-3 1.34-3 3-3zm0 14.2c-2.5 0-4.71-1.28-6-3.22.03-1.99 4-3.08 6-3.08 1.99 0 5.97 1.09 6 3.08-1.29 1.94-3.5 3.22-6 3.22z"/></svg>
                    Login
                </a>
            </nav>

            <div class="nistco-header-social" style="display: flex; gap: 0.4rem; align-items: center; border-left: 1px solid #e5e7eb; padding-left: 1rem;">
                <a href="https://facebook.com/nistco.ng" target="_blank" rel="noopener" aria-label="Facebook" style="width: 32px; height: 32px; border-radius: 50%; background: #f3f4f6; color: #4b5563; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: 0.8rem; font-weight: bold; transition: all 0.25s ease;" onmouseover="this.style.background='#042416'; this.style.color='#ffffff'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='#f3f4f6'; this.style.color='#4b5563'; this.style.transform='translateY(0)';">f</a>
                <a href="https://twitter.com/nistco_ng" target="_blank" rel="noopener" aria-label="Twitter / X" style="width: 32px; height: 32px; border-radius: 50%; background: #f3f4f6; color: #4b5563; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: 0.8rem; transition: all 0.25s ease;" onmouseover="this.style.background='#042416'; this.style.color='#ffffff'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='#f3f4f6'; this.style.color='#4b5563'; this.style.transform='translateY(0)';">𝕏</a>
                <a href="https://linkedin.com/company/nistco-ng" target="_blank" rel="noopener" aria-label="LinkedIn" style="width: 32px; height: 32px; border-radius: 50%; background: #f3f4f6; color: #4b5563; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: 0.75rem; transition: all 0.25s ease;" onmouseover="this.style.background='#042416'; this.style.color='#ffffff'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='#f3f4f6'; this.style.color='#4b5563'; this.style.transform='translateY(0)';">in</a>
                <a href="https://youtube.com/@nistco_ng" target="_blank" rel="noopener" aria-label="YouTube" style="width: 32px; height: 32px; border-radius: 50%; background: #f3f4f6; color: #4b5563; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: 0.7rem; transition: all 0.25s ease;" onmouseover="this.style.background='#042416'; this.style.color='#ffffff'; this.style.transform='translateY(-2px)';" onmouseout="this.style.background='#f3f4f6'; this.style.color='#4b5563'; this.style.transform='translateY(0)';">▶</a>
            </div>
        </div>

    </div>
</header>
