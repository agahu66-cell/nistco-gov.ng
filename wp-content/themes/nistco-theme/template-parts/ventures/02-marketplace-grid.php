<?php
/**
 * Template Part: Marketplace Grid of Patents & Ventures
 */
defined( 'ABSPATH' ) || exit;

$ventures = [
    [ 'centre' => 'carc', 'badge' => 'CARC • Patent #NG/P/2024/892', 'name' => 'High-Efficiency Zeolite Catalysts', 'desc' => 'Proprietary synthetic zeolite formulations for petroleum residual cracking and industrial emission scrubbing.', 'trl' => 'TRL 8 (Commercial Scale)' ],
    [ 'centre' => 'parc', 'badge' => 'PARC • Patent #NG/P/2023/411', 'name' => 'Bifacial Perovskite Solar Modules', 'desc' => 'Locally optimized bifacial photovoltaic cells engineered for high ambient temperature durability and low degradation.', 'trl' => 'TRL 9 (Deployed)' ],
    [ 'centre' => 'barc', 'badge' => 'BARC • Bio-License #049', 'name' => 'Thermotolerant Cassava Strains', 'desc' => 'Genetically stabilized enzyme-active cassava variants engineered for high-yield industrial bio-ethanol production.', 'trl' => 'TRL 7 (Pilot Plant)' ],
    [ 'centre' => 'aepc', 'badge' => 'AEPC • Defense Tech #012', 'name' => 'Modular CNC Armor Prototyping Rig', 'desc' => 'High-precision multi-axis computer numerical control framework for localized defense hardware fabrication.', 'trl' => 'TRL 8 (Commercial Scale)' ],
    [ 'centre' => 'amsarc', 'badge' => 'AMSARC • AI Simulation', 'desc' => 'PINNs Supersonic Flow Engine', 'name' => 'Physics-Informed Neural Networks for Aerodynamic Simulation', 'desc' => 'Advanced computational fluid dynamics software eliminating high-cost wind tunnel iterations.', 'trl' => 'TRL 6 (Validation)' ],
    [ 'centre' => 'ntc', 'badge' => 'NTC • Nuclear Dosimetry', 'name' => 'Solid-State Radiation Badge Readers', 'desc' => 'Precision luminescence readers for industrial and medical radiological safety compliance monitoring.', 'trl' => 'TRL 9 (Deployed)' ],
];
?>
<section class="ventures-marketplace">
    <div class="ventures-container">
        <div class="ventures-grid">
            <?php foreach ( $ventures as $v ) : ?>
                <div class="venture-card-3d" data-category="<?php echo esc_attr( $v['centre'] ); ?>">
                    <div>
                        <span class="venture-badge"><?php echo esc_html( $v['badge'] ); ?></span>
                        <h3 class="venture-name"><?php echo esc_html( $v['name'] ); ?></h3>
                        <p class="venture-desc"><?php echo esc_html( $v['desc'] ); ?></p>
                    </div>
                    <div class="venture-meta-footer">
                        <span class="venture-trl"><?php echo esc_html( $v['trl'] ); ?></span>
                        <a href="#contact" class="filter-btn" style="padding: 0.4rem 0.85rem; font-size: 0.78rem;">License IP</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
