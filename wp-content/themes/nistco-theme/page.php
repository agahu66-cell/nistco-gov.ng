<?php
/**
 * The template for displaying all pages.
 */

// If this is the AMSARC page, render the stunning custom scientific layout directly
if ( is_page( 'amsarc' ) ) :
    get_header();
    ?>
    <main style="background: #f8fafc; color: #1e293b; font-family: system-ui, -apple-system, sans-serif; min-height: 100vh;">
        <!-- Hero Section -->
        <section style="background: linear-gradient(135deg, #042416 0%, #083b23 50%, #0d5c36 100%); color: #fff; padding: 5rem 1.5rem; border-bottom: 4px solid #d97706; position: relative; overflow: hidden; box-shadow: inset 0 -20px 40px rgba(0,0,0,0.3);">
            <div style="max-width: 1440px; margin: 0 auto; position: relative; z-index: 2;">
                <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem; flex-wrap: wrap;">
                    <span style="background: rgba(217,119,6,0.2); color: #f59e0b; padding: 0.4rem 0.85rem; border-radius: 6px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.2px; border: 1px solid rgba(217,119,6,0.4);">
                        Research Division
                    </span>
                    <span style="background: rgba(255,255,255,0.08); color: #cbd5e1; padding: 0.4rem 0.85rem; border-radius: 6px; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.8px;">
                        NISTCO Complex, Abuja
                    </span>
                </div>
                <h1 style="font-size: clamp(2.2rem, 4.5vw, 3.5rem); font-weight: 800; margin: 0 0 1rem 0; line-height: 1.15; color: #ffffff; letter-spacing: -0.5px;">
                    Applied Mathematics & Simulation <br><span style="color: #f59e0b;">Advanced Research Centre (AMSARC)</span>
                </h1>
                <p style="font-size: 1.15rem; color: #cbd5e1; max-width: 900px; margin: 0 0 2rem 0; line-height: 1.7;">
                    Leading national computational modeling, large-scale scientific simulations, and high-performance computing (HPC) research across strategic scientific and engineering applications.
                </p>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; max-width: 900px; background: rgba(4,36,22,0.6); padding: 1.25rem; border-radius: 10px; border: 1px solid rgba(217,119,6,0.3); backdrop-filter: blur(10px);">
                    <div>
                        <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;">Compute Capacity</div>
                        <div style="font-size: 1.25rem; font-weight: 700; color: #f59e0b;">256 TeraFLOPs</div>
                    </div>
                    <div>
                        <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;">Active Research Nodes</div>
                        <div style="font-size: 1.25rem; font-weight: 700; color: #fff;">64 GPU Clusters</div>
                    </div>
                    <div>
                        <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;">TRL Level</div>
                        <div style="font-size: 1.25rem; font-weight: 700; color: #fff;">TRL 7 - 9 Operational</div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Content Layout -->
        <div style="max-width: 1440px; margin: 3.5rem auto 0; padding: 0 1.5rem; display: grid; grid-template-columns: minmax(0, 2fr) minmax(340px, 1fr); gap: 2.5rem;" class="amsarc-layout">
            <div style="display: flex; flex-direction: column; gap: 2.5rem;">
                <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 3rem; box-shadow: 0 10px 30px -5px rgba(0,0,0,0.05); position: relative; overflow: hidden;">
                    <div style="position: absolute; top: 0; left: 0; width: 6px; height: 100%; background: #d97706;"></div>
                    <h2 style="font-size: 1.75rem; font-weight: 700; color: #042416; margin-top: 0; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.75rem;">
                        <span style="background: rgba(217,119,6,0.1); color: #d97706; padding: 0.5rem; border-radius: 8px; font-size: 1.25rem;">⚡</span> Mandate & Core Research Focus
                    </h2>
                    <p style="font-size: 1.1rem; line-height: 1.8; color: #334155; margin: 0 0 1.5rem 0;">
                        AMSARC leads computational modeling, large-scale scientific simulations, and high-performance computing (HPC) research across scientific and engineering applications. The centre provides mathematical rigor and simulation horsepower to support national technological development, industrial optimization, and complex systems analysis.
                    </p>
                </div>

                <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 3rem; box-shadow: 0 10px 30px -5px rgba(0,0,0,0.05);">
                    <h2 style="font-size: 1.75rem; font-weight: 700; color: #042416; margin-top: 0; margin-bottom: 2rem; display: flex; align-items: center; gap: 0.75rem;">
                        <span style="background: rgba(13,92,54,0.1); color: #0d5c36; padding: 0.5rem; border-radius: 8px; font-size: 1.25rem;">🔬</span> Specialized Laboratories & Equipment
                    </h2>
                    <div style="display: grid; gap: 1.5rem;">
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 5px solid #0d5c36; padding: 1.75rem; border-radius: 0 10px 10px 0;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.5rem; flex-wrap: wrap; gap: 0.5rem;">
                                <h3 style="font-weight: 700; color: #042416; font-size: 1.15rem; margin: 0;">High-Performance Computing Cluster (HPC)</h3>
                                <span style="background: #0d5c36; color: #fff; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase;">Active Node</span>
                            </div>
                            <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin: 0 0 1rem 0;">Enterprise parallel compute infrastructure for heavy numerical simulation, weather modeling, and large-scale algorithmic optimization.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 5px solid #d97706; padding: 1.75rem; border-radius: 0 10px 10px 0;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.5rem; flex-wrap: wrap; gap: 0.5rem;">
                                <h3 style="font-weight: 700; color: #042416; font-size: 1.15rem; margin: 0;">GPU Accelerated Simulation Nodes</h3>
                                <span style="background: #d97706; color: #fff; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase;">AI & Quantum</span>
                            </div>
                            <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin: 0 0 1rem 0;">Dedicated hardware accelerators optimized for machine learning, computational fluid dynamics (CFD), and quantum chemistry molecular computations.</p>
                        </div>
                        <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 5px solid #0d5c36; padding: 1.75rem; border-radius: 0 10px 10px 0;">
                            <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.5rem; flex-wrap: wrap; gap: 0.5rem;">
                                <h3 style="font-weight: 700; color: #042416; font-size: 1.15rem; margin: 0;">Scientific Visualization Lab</h3>
                                <span style="background: #0d5c36; color: #fff; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase;">Rendering</span>
                            </div>
                            <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin: 0 0 1rem 0;">Advanced rendering and spatial visualization workstations for multi-dimensional data analysis and immersive simulation walkthroughs.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <div style="background: #042416; color: #fff; border-radius: 14px; padding: 2.75rem; border-top: 6px solid #d97706; box-shadow: 0 20px 40px -10px rgba(4,36,22,0.3); position: sticky; top: 100px;">
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: #f59e0b; margin-top: 0; margin-bottom: 1.75rem; text-transform: uppercase; letter-spacing: 0.8px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 0.75rem;">
                        Centre Administration
                    </h3>
                    <div style="margin-bottom: 1.75rem; padding-bottom: 1.25rem; border-bottom: 1px solid rgba(255,255,255,0.1);">
                        <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 0.35rem;">Centre Director / Head</div>
                        <div style="font-size: 1.2rem; font-weight: 700; color: #fff;">Director of Computational Sciences</div>
                    </div>
                    <div style="margin-bottom: 2rem; padding-bottom: 1.25rem; border-bottom: 1px solid rgba(255,255,255,0.1);">
                        <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 0.35rem;">Desk Contact</div>
                        <a href="mailto:amsarc@nistco.gov.ng" style="font-size: 1.05rem; font-weight: 600; color: #f59e0b; text-decoration: none; word-break: break-all;">amsarc@nistco.gov.ng</a>
                    </div>
                    <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" style="display: block; background: #d97706; color: #fff; text-align: center; padding: 1rem; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 0.95rem; box-shadow: 0 4px 15px rgba(217,119,6,0.4);">
                        Explore AMSARC Ventures &rarr;
                    </a>
                </div>
            </div>
        </div>
    </main>
    <style>
        @media screen and (max-width: 1024px) {
            .amsarc-layout { grid-template-columns: 1fr !important; }
        }
    </style>
    <?php
    get_footer();
    exit;
endif;

// Default behavior for all other standard pages
get_header();
?>
<main style="max-width: 1200px; margin: 3rem auto; padding: 0 1.5rem;">
    <?php
    while ( have_posts() ) :
        the_post();
        the_content();
    endwhile;
    ?>
</main>
<?php
get_footer();
