<?php
/**
 * NASTCO Global 3D Header — Research Centres Dropdown Mega-Menu
 */
defined( 'ABSPATH' ) || exit;
$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );
?>
<div class="nav-dropdown-3d" id="navCentresDropdown">
    <button type="button" class="nav-pill-3d" id="centresDropdownToggle">
        <span class="pill-icon">🔬</span>
        <span>Research Centres</span>
        <span class="chevron-3d">▼</span>
    </button>
    <div class="dropdown-menu-3d">
        <div class="dropdown-menu-header">
            <span>Directorate Grid</span>
            <span class="dropdown-badge">TRL 1–9</span>
        </div>
        <div class="dropdown-grid-3d">
            <a href="<?php echo esc_url( $ventures_url . '?centre=amsarc' ); ?>" class="centre-item-3d">
                <span class="centre-dot cyan"></span>
                <div>
                    <strong>AMSARC</strong>
                    <small>AI &amp; Simulation</small>
                </div>
            </a>
            <a href="<?php echo esc_url( $ventures_url . '?centre=barc' ); ?>" class="centre-item-3d">
                <span class="centre-dot green"></span>
                <div>
                    <strong>BARC</strong>
                    <small>Biotechnology</small>
                </div>
            </a>
            <a href="<?php echo esc_url( $ventures_url . '?centre=carc' ); ?>" class="centre-item-3d">
                <span class="centre-dot gold"></span>
                <div>
                    <strong>CARC</strong>
                    <small>Chemistry &amp; Catalysts</small>
                </div>
            </a>
            <a href="<?php echo esc_url( $ventures_url . '?centre=parc' ); ?>" class="centre-item-3d">
                <span class="centre-dot violet"></span>
                <div>
                    <strong>PARC</strong>
                    <small>Physics &amp; Solar</small>
                </div>
            </a>
            <a href="<?php echo esc_url( $ventures_url . '?centre=aepc' ); ?>" class="centre-item-3d">
                <span class="centre-dot blue"></span>
                <div>
                    <strong>AEPC</strong>
                    <small>Engineering &amp; CNC</small>
                </div>
            </a>
            <a href="<?php echo esc_url( $ventures_url . '?centre=ntc' ); ?>" class="centre-item-3d">
                <span class="centre-dot crimson"></span>
                <div>
                    <strong>NTC</strong>
                    <small>Nuclear &amp; Gamma GIF</small>
                </div>
            </a>
        </div>
    </div>
</div>
