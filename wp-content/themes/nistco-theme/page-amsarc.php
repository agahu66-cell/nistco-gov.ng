<?php
/**
 * Template Name: AMSARC Centre Page
 * The template for displaying AMSARC - Applied Mathematics & Simulation Advanced Research Centre
 */

get_header();
?>

<main style="background: #f8fafc; color: #1e293b; padding-bottom: 5rem;">
    
    <!-- Centre Hero Banner -->
    <section style="background: linear-gradient(135deg, #042416 0%, #093822 100%); color: #fff; padding: 4.5rem 1.5rem; border-bottom: 3px solid #d97706;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div style="display: inline-block; background: rgba(217,119,6,0.15); color: #d97706; padding: 0.35rem 0.75rem; border-radius: 4px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 1rem; border: 1px solid rgba(217,119,6,0.3);">
                Research Centre Division
            </div>
            <h1 style="font-size: 2.75rem; font-weight: 800; margin: 0 0 1rem 0; line-height: 1.2; color: #ffffff;">
                Applied Mathematics & Simulation Advanced Research Centre <span style="color: #d97706;">(AMSARC)</span>
            </h1>
            <p style="font-size: 1.15rem; color: #cbd5e1; max-width: 850px; margin: 0; line-height: 1.6;">
                Leading computational modeling, large-scale scientific simulations, and high-performance computing (HPC) research across national scientific and engineering applications.
            </p>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div style="max-width: 1440px; margin: 3rem auto 0; padding: 0 1.5rem; display: grid; grid-template-columns: 2fr 1fr; gap: 2.5rem;">
        
        <!-- Left Column: Mandate & Labs -->
        <div>
            <!-- Mandate Section -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 2.5rem; margin-bottom: 2rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                <h2 style="font-size: 1.5rem; font-weight: 700; color: #042416; margin-top: 0; margin-bottom: 1rem; display: flex; align-items: center; gap: 0.5rem;">
                    <span style="color: #d97706;">⚡</span> Mandate & Core Research Focus
                </h2>
                <p style="font-size: 1.05rem; line-height: 1.7; color: #334155; margin: 0;">
                    AMSARC leads computational modeling, large-scale scientific simulations, and high-performance computing (HPC) research across scientific and engineering applications. The centre provides mathematical rigor and simulation horsepower to support national technological development, industrial optimization, and complex systems analysis.
                </p>
            </div>

            <!-- Laboratories Section -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 2.5rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05);">
                <h2 style="font-size: 1.5rem; font-weight: 700; color: #042416; margin-top: 0; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem;">
                    <span style="color: #d97706;">🔬</span> Specialized Laboratories & Equipment
                </h2>
                
                <div style="display: grid; gap: 1rem;">
                    <div style="background: #f8fafc; border-left: 4px solid #0d5c36; padding: 1.25rem; border-radius: 0 6px 6px 0;">
                        <div style="font-weight: 700; color: #042416; font-size: 1.05rem; margin-bottom: 0.25rem;">High-Performance Computing Cluster (HPC)</div>
                        <div style="font-size: 0.9rem; color: #64748b;">Enterprise parallel compute infrastructure for heavy numerical simulation and algorithmic modeling.</div>
                    </div>

                    <div style="background: #f8fafc; border-left: 4px solid #d97706; padding: 1.25rem; border-radius: 0 6px 6px 0;">
                        <div style="font-weight: 700; color: #042416; font-size: 1.05rem; margin-bottom: 0.25rem;">GPU Accelerated Simulation Nodes</div>
                        <div style="font-size: 0.9rem; color: #64748b;">Dedicated hardware accelerators optimized for machine learning, fluid dynamics, and quantum chemistry computations.</div>
                    </div>

                    <div style="background: #f8fafc; border-left: 4px solid #0d5c36; padding: 1.25rem; border-radius: 0 6px 6px 0;">
                        <div style="font-weight: 700; color: #042416; font-size: 1.05rem; margin-bottom: 0.25rem;">Scientific Visualization Lab</div>
                        <div style="font-size: 0.9rem; color: #64748b;">Advanced rendering and spatial visualization workstations for multi-dimensional data analysis.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Leadership & Desk Contact -->
        <div>
            <div style="background: #042416; color: #fff; border-radius: 10px; padding: 2rem; border-top: 4px solid #d97706; box-shadow: 0 10px 25px rgba(4,36,22,0.15);">
                <h3 style="font-size: 1.2rem; font-weight: 700; color: #d97706; margin-top: 0; margin-bottom: 1.25rem; text-transform: uppercase; letter-spacing: 0.5px;">Centre Administration</h3>
                
                <div style="margin-bottom: 1.5rem; padding-bottom: 1.25rem; border-bottom: 1px solid rgba(255,255,255,0.1);">
                    <div style="font-size: 0.8rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.25rem;">Centre Director / Head</div>
                    <div style="font-size: 1.1rem; font-weight: 700; color: #fff;">Director of Computational Sciences</div>
                </div>

                <div style="margin-bottom: 1.5rem; padding-bottom: 1.25rem; border-bottom: 1px solid rgba(255,255,255,0.1);">
                    <div style="font-size: 0.8rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.25rem;">Desk Contact</div>
                    <a href="mailto:amsarc@nistco.gov.ng" style="font-size: 1rem; font-weight: 600; color: #d97706; text-decoration: none; word-break: break-all;">amsarc@nistco.gov.ng</a>
                </div>

                <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" style="display: block; background: #d97706; color: #fff; text-align: center; padding: 0.75rem; border-radius: 6px; font-weight: 700; text-decoration: none; font-size: 0.9rem; transition: opacity 0.2s;">
                    Explore AMSARC Ventures
                </a>
            </div>
        </div>

    </div>
</main>

<?php
get_footer();
