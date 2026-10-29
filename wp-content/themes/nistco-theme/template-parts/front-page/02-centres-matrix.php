<?php
/**
 * Front Page Partial 02: 6 Core Research Centres 3D Matrix (Animated Icons & Perfect Text Fit)
 */
defined( 'ABSPATH' ) || exit;

$ventures_url = function_exists( 'nastco_get_route' ) ? nastco_get_route( 'ventures', 'page-ventures.php' ) : home_url( '/ventures/' );

$centres = [
    [
        'slug'   => 'amsarc',
        'code'   => 'AMSARC',
        'theme'  => 'color-theme-cyan',
        'icon'   => '💻',
        'anim'   => 'anim-quantum-pulse',
        'name'   => 'Applied Mathematics & Simulation Advanced Research Centre',
        'focus'  => 'PINNs neural solvers, CFD fluid aerodynamics & cryptographic modeling.',
        'metric' => 'AI & Numerical Core'
    ],
    [
        'slug'   => 'barc',
        'code'   => 'BARC',
        'theme'  => 'color-theme-emerald',
        'icon'   => '🧬',
        'anim'   => 'anim-bio-float',
        'name'   => 'Biotechnology Advanced Research Centre',
        'focus'  => 'Genomic sequencing, bio-ethanol strains & molecular diagnostics.',
        'metric' => 'Bio-Reactors & Genomics'
    ],
    [
        'slug'   => 'carc',
        'code'   => 'CARC',
        'theme'  => 'color-theme-gold',
        'icon'   => '⚗️',
        'anim'   => 'anim-catalyst-glow',
        'name'   => 'Chemistry Advanced Research Centre',
        'focus'  => 'Zeolite petrochemical cracking catalysts & GC-MS spectrometry.',
        'metric' => 'Catalysts & Polymers'
    ],
    [
        'slug'   => 'parc',
        'code'   => 'PARC',
        'theme'  => 'color-theme-violet',
        'icon'   => '☀️',
        'anim'   => 'anim-solar-spin',
        'name'   => 'Physics Advanced Research Centre',
        'focus'  => 'Bifacial perovskite solar modules & thin-film semiconductors.',
        'metric' => 'Photovoltaics & Lasers'
    ],
    [
        'slug'   => 'aepc',
        'code'   => 'AEPC',
        'theme'  => 'color-theme-cobalt',
        'icon'   => '⚙️',
        'anim'   => 'anim-cnc-rotate',
        'name'   => 'Advanced Engineering & Prototyping Centre',
        'focus'  => 'Multi-axis CNC precision machining & industrial hardware tooling.',
        'metric' => 'Multi-Axis CNC Rig'
    ],
    [
        'slug'   => 'ntc',
        'code'   => 'NTC',
        'theme'  => 'color-theme-crimson',
        'icon'   => '☢️',
        'anim'   => 'anim-radiation-wave',
        'name'   => 'Nuclear Technology Centre',
        'focus'  => 'Cobalt-60 Gamma Irradiation Facility (GIF) & medical sterilization.',
        'metric' => 'Gamma Irradiation (GIF)'
    ],
];
?>
<section class="fp-section fp-centres-section" id="centres">
    <div class="fp-container">
        <div class="fp-section-head">
            <span class="fp-eyebrow">MULTI-DISCIPLINARY SCIENTIFIC INFRASTRUCTURE</span>
            <h2 class="fp-section-title text-3d-extrude">Six Specialized Research Directorates</h2>
            <p class="fp-section-desc text-3d-relief">Click any directorate to inspect its commercial IP portfolio and active licensing ventures.</p>
        </div>

        <div class="fp-centres-grid">
            <?php foreach ( $centres as $c ) : ?>
                <a href="<?php echo esc_url( $ventures_url . '?centre=' . $c['slug'] ); ?>" class="fp-centre-card-3d <?php echo esc_attr( $c['theme'] ); ?>">
                    <div class="centre-card-top">
                        <span class="centre-icon-3d <?php echo esc_attr( $c['anim'] ); ?>"><?php echo esc_html( $c['icon'] ); ?></span>
                        <span class="centre-code-pill"><?php echo esc_html( $c['code'] ); ?></span>
                    </div>
                    <h3 class="centre-card-title"><?php echo esc_html( $c['name'] ); ?></h3>
                    <p class="centre-card-desc"><?php echo esc_html( $c['focus'] ); ?></p>
                    <div class="centre-card-footer">
                        <span class="centre-metric-tag"><?php echo esc_html( $c['metric'] ); ?></span>
                        <span class="centre-link-arrow">Explore IP →</span>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
