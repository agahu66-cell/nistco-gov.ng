<?php
/**
 * The header for NISTCO Theme
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

<header class="site-header" style="background: #ffffff; border-bottom: 3px solid var(--mc-green, #0d5c36); box-shadow: 0 2px 10px rgba(4,36,22,0.06); position: sticky; top: 0; z-index: 1000;">
    <div class="nistco-container" style="max-width: 1280px; margin: 0 auto; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
        
        <div class="site-branding" style="display: flex; align-items: center; gap: 1rem;">
            <?php if ( has_custom_logo() ) : ?>
                <?php the_custom_logo(); ?>
            <?php else : ?>
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                    <div style="width: 42px; height: 42px; background: #042416; color: #d97706; display: flex; align-items: center; justify-content: center; font-weight: 800; border-radius: 8px; font-size: 1.25rem; border: 2px solid #d97706;">N</div>
                    <div>
                        <span style="display: block; font-size: 1.125rem; font-weight: 800; color: #042416; line-height: 1.2; letter-spacing: -0.5px;">NISTCO</span>
                        <span style="display: block; font-size: 0.7rem; font-weight: 600; color: #6b7280; text-transform: uppercase; letter-spacing: 1px;">Federal Research Complex</span>
                    </div>
                </a>
            <?php endif; ?>
        </div>

        <div style="display: flex; align-items: center; gap: 2rem; flex-wrap: wrap;">
            <nav class="nistco-nav" style="display: flex; gap: 1.5rem; align-items: center; font-size: 0.95rem; font-weight: 600;">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nistco-nav-link" style="color: #374151; text-decoration: none; transition: color 0.2s;">Home</a>
                <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>" class="nistco-nav-link" style="color: #374151; text-decoration: none; transition: color 0.2s;">About Us</a>
                <a href="<?php echo esc_url( home_url( '/servicom/' ) ); ?>" class="nistco-nav-link <?php echo is_page('servicom') ? 'active' : ''; ?>" style="color: #d97706; text-decoration: none; transition: color 0.2s; border-bottom: 2px solid #d97706; padding-bottom: 2px;">SERVICOM</a>
            </nav>

            <div class="nistco-header-social" style="display: flex; gap: 0.75rem; align-items: center; border-left: 1px solid #e5e7eb; padding-left: 1.5rem;">
                <a href="https://facebook.com/nistco.ng" target="_blank" rel="noopener" aria-label="Facebook" style="width: 32px; height: 32px; border-radius: 50%; background: #f3f4f6; color: #4b5563; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: 0.9rem; font-weight: bold; transition: all 0.2s;">f</a>
                <a href="https://twitter.com/nistco_ng" target="_blank" rel="noopener" aria-label="Twitter / X" style="width: 32px; height: 32px; border-radius: 50%; background: #f3f4f6; color: #4b5563; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: 0.9rem; transition: all 0.2s;">𝕏</a>
                <a href="https://linkedin.com/company/nistco-ng" target="_blank" rel="noopener" aria-label="LinkedIn" style="width: 32px; height: 32px; border-radius: 50%; background: #f3f4f6; color: #4b5563; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: 0.85rem; transition: all 0.2s;">in</a>
                <a href="https://youtube.com/@nistco_ng" target="_blank" rel="noopener" aria-label="YouTube" style="width: 32px; height: 32px; border-radius: 50%; background: #f3f4f6; color: #4b5563; display: flex; align-items: center; justify-content: center; text-decoration: none; font-size: 0.8rem; transition: all 0.2s;">▶</a>
            </div>
        </div>

    </div>
</header>
