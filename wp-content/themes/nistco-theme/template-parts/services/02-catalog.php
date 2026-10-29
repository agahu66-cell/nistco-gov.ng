<?php
/**
 * Template Part: Services Grid Catalog
 */
defined( 'ABSPATH' ) || exit;

$services = [
    [ 'icon' => '☢️', 'centre' => 'NTC • Nuclear Tech', 'name' => 'Gamma Irradiation & Sterilization', 'desc' => 'High-dose cobalt-60 gamma processing for medical device sterilization, agricultural pest control, and polymer cross-linking.' ],
    [ 'icon' => '⚗️', 'centre' => 'CARC • Chemistry', 'name' => 'Advanced Chemical Spectrometry', 'desc' => 'GC-MS, FTIR, and atomic absorption spectroscopy for environmental sample analysis, mineral assays, and purity verification.' ],
    [ 'icon' => '🧬', 'centre' => 'BARC • Biotech', 'name' => 'Molecular Pathology & DNA Assays', 'desc' => 'PCR-based genetic sequencing, enzyme activity benchmarking, and bio-fermentation pilot testing for industrial biotech.' ],
    [ 'icon' => '☀️', 'centre' => 'PARC • Physics', 'name' => 'Photovoltaic & Laser Calibration', 'desc' => 'Spectral responsivity testing for solar modules and precision calibration of industrial optical and laser equipment.' ],
    [ 'icon' => '⚙️', 'centre' => 'AEPC • Prototyping', 'name' => 'Multi-Axis CNC Machining & Casting', 'desc' => 'Custom alloy fabrication, precision gear cutting, and rapid CAD-to-metal prototyping for heavy machinery.' ],
    [ 'icon' => '💻', 'centre' => 'AMSARC • Simulation', 'name' => 'Computational Fluid Dynamics (CFD)', 'desc' => 'High-performance numerical simulation and aerodynamic stress modeling for engineering design validation.' ],
];
?>
<section class="services-container">
    <div class="services-grid">
        <?php foreach ( $services as $s ) : ?>
            <div class="service-card-3d">
                <div>
                    <div class="service-icon"><?php echo esc_html( $s['icon'] ); ?></div>
                    <h3 class="service-name"><?php echo esc_html( $s['name'] ); ?></h3>
                    <p class="service-desc"><?php echo esc_html( $s['desc'] ); ?></p>
                </div>
                <div class="service-footer">
                    <span class="service-centre-tag"><?php echo esc_html( $s['centre'] ); ?></span>
                    <a href="#contact" class="filter-btn" style="padding: 0.4rem 0.85rem; font-size: 0.78rem;">Book Assay</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
