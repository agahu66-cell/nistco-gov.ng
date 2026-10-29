<?php
/**
 * NASTCO Sovereign Portal — Header Template
 */
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'nastco-sovereign-body' ); ?>>
<?php wp_body_open(); ?>

<header id="masthead" class="site-header nastco-sticky-header">
    <div class="site-branding-container">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="site-logo-link">
            <span class="pulse-dot-green"></span>
            <span class="brand-title">NASTCO SOVEREIGN HUB</span>
        </a>
        <nav id="site-navigation" class="main-navigation">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary',
                'menu_id'        => 'primary-menu',
                'fallback_cb'    => false,
            ) );
            ?>
        </nav>
    </div>
</header>
