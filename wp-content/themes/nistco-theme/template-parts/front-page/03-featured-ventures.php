<?php
/**
 * Front Page Partial 03: Sovereign Venture Marketplace (Ultra-Modern Orbital Glass Carousel)
 */
defined( 'ABSPATH' ) || exit;

$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );

$patents = [
    [
        'code'      => 'CARC • #NG/P/2024/892',
        'trl'       => 'TRL 8 • COMMERCIAL OFF-TAKE',
        'title'     => 'High-Efficiency Zeolite Cracking Catalysts',
        'desc'      => 'Synthetic aluminosilicate zeolites engineered for domestic petrochemical refining, heavy residual cracking, and emission scrubbing.',
        'offtaker'  => 'Petrochemical Refining Industry',
        'theme'     => 'color-theme-gold'
    ],
    [
        'code'      => 'PARC • #NG/P/2023/411',
        'trl'       => 'TRL 9 • FIELD TESTED',
        'title'     => 'Bifacial Perovskite-Silicon Solar Modules',
        'desc'      => 'High-temperature resilient photovoltaic cells optimized for sub-Saharan solar irradiance, delivering +21.4% conversion efficiency.',
        'offtaker'  => 'Clean Energy & REA Mini-Grids',
        'theme'     => 'color-theme-violet'
    ],
    [
        'code'      => 'AMSARC • AI SOLVER',
        'trl'       => 'TRL 7 • PROTOTYPE',
        'title'     => 'PINNs Supersonic & Structural Flow Solver',
        'desc'      => 'Physics-Informed Neural Network software accelerating aerodynamic stress testing and structural simulation without mesh bottlenecks.',
        'offtaker'  => 'Aerospace & Civil Defense',
        'theme'     => 'color-theme-cyan'
    ],
    [
        'code'      => 'BARC • GENOMICS',
        'trl'       => 'TRL 8 • SCALE-UP',
        'title'     => 'Thermotolerant Cassava Bio-Ethanol Strains',
        'desc'      => 'Proprietary enzyme-engineered microbial strains yielding 34% higher bio-ethanol conversion for industrial biofuel manufacturing.',
        'offtaker'  => 'Biofuel & Agri-Processing',
        'theme'     => 'color-theme-emerald'
    ],
    [
        'code'      => 'NTC • GAMMA GIF',
        'trl'       => 'TRL 9 • CERTIFIED',
        'title'     => 'Cobalt-60 Agro-Export Sterilization Protocol',
        'desc'      => 'High-throughput gamma irradiation dosimetry eliminating aflatoxin and microbial loads in Nigerian agricultural commodity exports.',
        'offtaker'  => 'Export Agriculture & Pharma',
        'theme'     => 'color-theme-crimson'
    ]
];
?>
<section class="fp-section fp-ventures-spotlight" id="featured-patents">
    <div class="fp-container">
        <div class="fp-split-header">
            <div>
                <span class="fp-eyebrow">SOVEREIGN VENTURE MARKETPLACE</span>
                <h2 class="fp-section-title text-3d-extrude">High-Impact Commercialized Patents</h2>
                <p class="fp-section-desc text-3d-relief">Explore TRL 7–9 patented technologies available for exclusive industrial off-taking under the 40/35/25 statutory framework.</p>
            </div>
            <a href="<?php echo esc_url( $ventures_url ); ?>" class="btn-3d-secondary">Access Full IP Marketplace →</a>
        </div>
    </div>

    <!-- Ultra-Modern 3D Orbital Glassmorphic Carousel Track -->
    <div class="sovereign-orbital-carousel-wrap">
        <div class="sovereign-orbital-track">
            <?php foreach ( array_merge( $patents, $patents ) as $p ) : ?>
                <div class="abt-card-3d orbital-patent-card <?php echo esc_attr( $p['theme'] ); ?>">
                    <div class="orbital-card-glow"></div>
                    <div class="v-meta-row">
                        <span class="v-badge"><?php echo esc_html( $p['code'] ); ?></span>
                        <span class="v-trl"><span class="pulse-dot-green"></span> <?php echo esc_html( $p['trl'] ); ?></span>
                    </div>
                    <h3 class="text-3d-card-title"><?php echo esc_html( $p['title'] ); ?></h3>
                    <p class="text-3d-relief"><?php echo esc_html( $p['desc'] ); ?></p>
                    <div class="v-offtaker-row">
                        <span>Off-Taker: <strong><?php echo esc_html( $p['offtaker'] ); ?></strong></span>
                        <a href="<?php echo esc_url( $ventures_url ); ?>" class="orbital-inspect-btn">License IP →</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
