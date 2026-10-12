<?php
/**
 * Block Name: NISTCO Institutional Metrics
 */

$metrics = [
    [
        "value" => "7",
        "title" => "Research Centres & Divisions",
        "desc"  => "Biotech, HPC, Chem, Phys, Nuclear & Tooling"
    ],
    [
        "value" => "5+",
        "title" => "Scientific Publications",
        "desc"  => "Peer-reviewed & indexed research repository"
    ],
    [
        "value" => "2,000",
        "title" => "Hectares Campus Footprint",
        "desc"  => "Abuja-Lokoja Technology Corridor sanctuary"
    ],
    [
        "value" => "16+",
        "title" => "Registered Patents",
        "desc"  => "NOTAP-certified indigenous technologies"
    ],
    [
        "value" => "4",
        "title" => "Demonstration Pilot Plants",
        "desc"  => "500L synthesis, tissue culture & precision CNC"
    ],
    [
        "value" => "500 kVA",
        "title" => "Clean Energy Microgrid",
        "desc"  => "Dedicated solar hybrid for NMR & HPC compute"
    ],
    [
        "value" => "100%",
        "title" => "Open Researcher Access",
        "desc"  => "Shared national laboratory & residency facilities"
    ]
];
?>

<section style="background: #042416; color: #fff; padding: 4rem 2rem; border-top: 3px solid #d97706; border-bottom: 3px solid #d97706; box-sizing: border-box; width: 100%;">
    <div style="max-width: 1440px; margin: 0 auto;">
        
        <!-- Section Header -->
        <div style="text-align: center; margin-bottom: 3rem;">
            <div style="color: #d97706; font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.5px; margin-bottom: 0.5rem;">Institutional Impact</div>
            <h2 style="font-size: 2.25rem; font-weight: 700; margin: 0; color: #ffffff;">Nigeria Innovation Science & Technology Complex</h2>
        </div>

        <!-- Metrics Grid -->
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 2rem;">
            <?php foreach ( $metrics as $metric ) : ?>
                <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(217,119,6,0.2); border-radius: 8px; padding: 1.75rem; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                    <div style="font-size: 2.5rem; font-weight: 800; color: #d97706; line-height: 1; margin-bottom: 0.5rem;"><?php echo esc_html( $metric['value'] ); ?></div>
                    <div style="font-size: 1rem; font-weight: 700; color: #fff; margin-bottom: 0.3rem;"><?php echo esc_html( $metric['title'] ); ?></div>
                    <div style="font-size: 0.8rem; color: #94a3b8;"><?php echo esc_html( $metric['desc'] ); ?></div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>
