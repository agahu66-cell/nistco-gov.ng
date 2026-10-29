<?php
/**
 * Front Page Partial 05: Lab Services & Executive Dispatch CTA
 */
defined( 'ABSPATH' ) || exit;

$about_url    = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'about', 'page-about.php' ) : home_url( '/about/' );
$services_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'services', 'page-services.php' ) : home_url( '/services/' );
?>
<section class="fp-section fp-cta-section">
    <div class="fp-container">
        <div class="fp-cta-box-3d color-theme-emerald">
            <div>
                <span class="fp-eyebrow">INDUSTRIAL &amp; GOVERNMENTAL OFF-TAKING</span>
                <h2 class="text-3d-extrude">Require Certified Analytical Testing or Gamma Irradiation?</h2>
                <p class="text-3d-relief">Schedule Cobalt-60 sterilization, GC-MS chemical spectrometry, DNA sequencing, or precision CNC prototyping directly with our laboratories.</p>
            </div>
            <div class="fp-cta-buttons">
                <a href="<?php echo esc_url( $services_url ); ?>" class="btn-3d-primary">Browse Lab Services Catalog</a>
                <a href="<?php echo esc_url( $about_url . '#contact' ); ?>" class="btn-3d-secondary">Transmit Executive Dispatch</a>
            </div>
        </div>
    </div>
</section>
