<?php
/**
 * The Refined 3D Sovereign Header for NASTCO Theme.
 */
defined( 'ABSPATH' ) || exit;

if ( ! function_exists( 'nastco_get_route' ) ) {
    function nastco_get_route( $slug, $template_file = '' ) {
        if ( $template_file ) {
            $pages = get_pages( array(
                'meta_key'   => '_wp_page_template',
                'meta_value' => $template_file,
                'number'     => 1,
            ) );
            if ( ! empty( $pages ) ) {
                return get_permalink( $pages[0]->ID );
            }
        }
        $page = get_page_by_path( $slug );
        return $page ? get_permalink( $page->ID ) : home_url( '/' . trim( $slug, '/' ) . '/' );
    }
}

$about_url    = nastco_get_route( 'about', 'page-about.php' );
$ventures_url = nastco_get_route( 'ventures', 'page-ventures.php' );
$services_url = nastco_get_route( 'services', 'page-services.php' );

$is_about    = is_page( 'about' ) || is_page_template( 'page-about.php' );
$is_ventures = is_page( 'ventures' ) || is_page_template( 'page-ventures.php' );
$is_services = is_page( 'services' ) || is_page_template( 'page-services.php' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="nastco-header-3d-wrapper" id="nastcoGlobalHeader">
    <div class="nastco-telemetry-bar">
        <div class="header-3d-container telemetry-inner">
            <div class="telemetry-left">
                <span class="pulse-dot-green"></span>
                <span class="telemetry-tag">FMIST STATUTORY MANDATE</span>
                <span class="telemetry-divider">|</span>
                <span class="telemetry-meta">KM 10 Gwagwalada-Lokoja Rd, Sheda, Abuja</span>
            </div>
            <div class="telemetry-right">
                <span class="telemetry-pill">PPA 2007: A+</span>
                <span class="telemetry-pill gold">40/35/25 IP LEDGER</span>
            </div>
        </div>
    </div>

    <div class="nastco-masthead-3d">
        <div class="header-3d-container masthead-inner">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-3d-Identity">
                <div class="brand-cube-3d">
                    <span class="cube-emblem">🦅</span>
                </div>
                <div class="brand-typography">
                    <div class="brand-title-row">
                        <span class="brand-acronym">NASTCO</span>
                        <span class="brand-sovereign-badge">NG</span>
                    </div>
                    <span class="brand-fullname">National Science &amp; Technology Complex</span>
                </div>
            </a>

            <button type="button" class="mobile-3d-toggle" id="nastcoMobileToggle" aria-label="Toggle Navigation" aria-expanded="false">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </button>

            <nav class="nav-3d-dock" id="nastcoNavDock" aria-label="Primary Institutional Navigation">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-pill-3d <?php echo is_front_page() ? 'is-active' : ''; ?>">
                    <span class="pill-icon">🏛️</span>
                    <span>Home</span>
                </a>

                <a href="<?php echo esc_url( $about_url ); ?>" class="nav-pill-3d <?php echo $is_about ? 'is-active' : ''; ?>">
                    <span class="pill-icon">📜</span>
                    <span>About Complex</span>
                </a>

                <div class="nav-dropdown-3d" id="nastcoCentresDropdown">
                    <button type="button" class="nav-pill-3d dropdown-trigger-3d" id="centresDropdownBtn" aria-expanded="false">
                        <span class="pill-icon">🔬</span>
                        <span>Research Centres</span>
                        <svg class="chevron-3d" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5">
                            <polyline points="6 9 12 15 18 9"></polyline>
                        </svg>
                    </button>

                    <div class="dropdown-menu-3d" id="centresDropdownMenu">
                        <div class="dropdown-menu-header">
                            <span>6 Specialized Research Directorates</span>
                            <span class="dropdown-badge">TRL 1–9</span>
                        </div>
                        <div class="dropdown-grid-3d">
                            <a href="<?php echo esc_url( $ventures_url . '?centre=amsarc' ); ?>" class="centre-item-3d">
                                <span class="centre-dot cyan"></span>
                                <div>
                                    <strong>AMSARC</strong>
                                    <small>Applied Mathematics &amp; Simulation</small>
                                </div>
                            </a>
                            <a href="<?php echo esc_url( $ventures_url . '?centre=barc' ); ?>" class="centre-item-3d">
                                <span class="centre-dot green"></span>
                                <div>
                                    <strong>BARC</strong>
                                    <small>Biotechnology Advanced Research</small>
                                </div>
                            </a>
                            <a href="<?php echo esc_url( $ventures_url . '?centre=carc' ); ?>" class="centre-item-3d">
                                <span class="centre-dot gold"></span>
                                <div>
                                    <strong>CARC</strong>
                                    <small>Chemistry Advanced Research</small>
                                </div>
                            </a>
                            <a href="<?php echo esc_url( $ventures_url . '?centre=parc' ); ?>" class="centre-item-3d">
                                <span class="centre-dot violet"></span>
                                <div>
                                    <strong>PARC</strong>
                                    <small>Physics &amp; Clean Energy Lab</small>
                                </div>
                            </a>
                            <a href="<?php echo esc_url( $ventures_url . '?centre=aepc' ); ?>" class="centre-item-3d">
                                <span class="centre-dot blue"></span>
                                <div>
                                    <strong>AEPC</strong>
                                    <small>Advanced Engineering &amp; CNC</small>
                                </div>
                            </a>
                            <a href="<?php echo esc_url( $ventures_url . '?centre=ntc' ); ?>" class="centre-item-3d">
                                <span class="centre-dot crimson"></span>
                                <div>
                                    <strong>NTC</strong>
                                    <small>Nuclear Technology &amp; Dosimetry</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

                <a href="<?php echo esc_url( $ventures_url ); ?>" class="nav-pill-3d <?php echo $is_ventures ? 'is-active' : ''; ?>">
                    <span class="pill-icon">💎</span>
                    <span>Ventures &amp; IP</span>
                </a>

                <a href="<?php echo esc_url( $services_url ); ?>" class="nav-pill-3d <?php echo $is_services ? 'is-active' : ''; ?>">
                    <span class="pill-icon">⚙️</span>
                    <span>Lab Services</span>
                </a>

                <a href="<?php echo esc_url( $about_url . '#contact' ); ?>" class="btn-3d-dispatch">
                    <span class="dispatch-led"></span>
                    <span>Executive Dispatch</span>
                </a>
            </nav>
        </div>
    </div>
</header>
