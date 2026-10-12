<?php
/**
 * NISTCO Institutional Metrics Section with Live Count-up Animation
 */
$metrics = [
    [
        "target" => 7,
        "suffix" => "",
        "comma"  => false,
        "title"  => "Research Centres & Divisions",
        "desc"   => "Biotech, HPC, Chem, Phys, Nuclear & Tooling"
    ],
    [
        "target" => 5,
        "suffix" => "+",
        "comma"  => false,
        "title"  => "Scientific Publications",
        "desc"   => "Peer-reviewed & indexed research repository"
    ],
    [
        "target" => 2000,
        "suffix" => "",
        "comma"  => true,
        "title"  => "Hectares Campus Footprint",
        "desc"   => "Abuja-Lokoja Technology Corridor sanctuary"
    ],
    [
        "target" => 16,
        "suffix" => "+",
        "comma"  => false,
        "title"  => "Registered Patents",
        "desc"   => "NOTAP-certified indigenous technologies"
    ],
    [
        "target" => 4,
        "suffix" => "",
        "comma"  => false,
        "title"  => "Demonstration Pilot Plants",
        "desc"   => "500L synthesis, tissue culture & precision CNC"
    ],
    [
        "target" => 500,
        "suffix" => " kVA",
        "comma"  => false,
        "title"  => "Clean Energy Microgrid",
        "desc"   => "Dedicated solar hybrid for NMR & HPC compute"
    ],
    [
        "target" => 100,
        "suffix" => "%",
        "comma"  => false,
        "title"  => "Open Researcher Access",
        "desc"   => "Shared national laboratory & residency facilities"
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
        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 2rem;">
            <?php foreach ( $metrics as $metric ) : ?>
                <div style="background: rgba(255,255,255,0.04); border: 1px solid rgba(217,119,6,0.2); border-radius: 8px; padding: 1.75rem; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.2);">
                    <div class="nistco-counter" 
                         data-target="<?php echo esc_attr( $metric['target'] ); ?>" 
                         data-suffix="<?php echo esc_attr( $metric['suffix'] ); ?>" 
                         data-comma="<?php echo $metric['comma'] ? 'true' : 'false'; ?>"
                         style="font-size: 2.5rem; font-weight: 800; color: #d97706; line-height: 1; margin-bottom: 0.5rem;">
                         0<?php echo esc_html( $metric['suffix'] ); ?>
                    </div>
                    <div style="font-size: 1rem; font-weight: 700; color: #fff; margin-bottom: 0.3rem;"><?php echo esc_html( $metric['title'] ); ?></div>
                    <div style="font-size: 0.8rem; color: #94a3b8;"><?php echo esc_html( $metric['desc'] ); ?></div>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const counters = document.querySelectorAll('.nistco-counter');
    
    const observer = new IntersectionObserver((entries, observerInstance) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const el = entry.target;
                const target = parseFloat(el.getAttribute('data-target'));
                const suffix = el.getAttribute('data-suffix') || '';
                const isComma = el.getAttribute('data-comma') === 'true';
                
                let startTime = null;
                const duration = 2000; // 2 seconds count-up duration

                function step(currentTime) {
                    if (!startTime) startTime = currentTime;
                    const progress = Math.min((currentTime - startTime) / duration, 1);
                    
                    const easeProgress = progress === 1 ? 1 : 1 - Math.pow(2, -10 * progress);
                    const currentVal = target * easeProgress;

                    let formatted = Math.floor(currentVal);
                    if (isComma) {
                        formatted = formatted.toLocaleString();
                    }

                    el.textContent = formatted + suffix;

                    if (progress < 1) {
                        requestAnimationFrame(step);
                    } else {
                        let finalVal = target;
                        if (isComma) {
                            finalVal = finalVal.toLocaleString();
                        }
                        el.textContent = finalVal + suffix;
                    }
                }

                requestAnimationFrame(step);
                observerInstance.unobserve(el);
            }
        });
    }, { threshold: 0.2 });

    counters.forEach(counter => observer.observe(counter));
});
</script>
