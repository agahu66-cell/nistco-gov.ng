<?php
/**
 * The header for NISTCO Theme
 */
?>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> style="margin: 0; font-family: system-ui, -apple-system, sans-serif; background: #f8fafc; color: #1e293b;">
<?php wp_body_open(); ?>

<header style="background: #042416; color: #fff; border-bottom: 3px solid #d97706; position: sticky; top: 0; z-index: 1000; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
    <div style="max-width: 1440px; margin: 0 auto; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
        
        <div style="display: flex; align-items: center; gap: 1rem;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #fff; text-decoration: none; display: flex; align-items: center; gap: 0.75rem;">
                <div style="background: #0d5c36; width: 40px; height: 40px; border-radius: 8px; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 1.2rem; color: #d97706; border: 1px solid rgba(217,119,6,0.3);">N</div>
                <div>
                    <div style="font-weight: 700; font-size: 1.1rem; letter-spacing: 0.5px;">NISTCO</div>
                    <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px;">Innovation & Science</div>
                </div>
            </a>
        </div>

        <nav style="display: flex; align-items: center; gap: 1.5rem; flex-wrap: wrap;">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 0.95rem; font-weight: 500;">Home</a>
            <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 0.95rem; font-weight: 500;">Commercial Ventures</a>
            <a href="<?php echo esc_url( home_url( '/dashboard/' ) ); ?>" style="color: #e2e8f0; text-decoration: none; font-size: 0.95rem; font-weight: 500;">Staff Dashboard</a>
            <a href="<?php echo esc_url( admin_url( 'post-new.php?post_type=nistco_venture' ) ); ?>" style="background: #d97706; color: #fff; padding: 0.5rem 1rem; border-radius: 6px; text-decoration: none; font-size: 0.9rem; font-weight: 600; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">+ Add Venture</a>
        </nav>

    </div>
</header>
