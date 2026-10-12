<?php
/**
 * Template Name: AMSARC Centre Page
 * The template for displaying AMSARC - Applied Mathematics & Simulation Advanced Research Centre
 */

get_header();
?>

<main style="background: #f8fafc; color: #1e293b; padding-bottom: 6rem; font-family: system-ui, -apple-system, sans-serif;">
    
    <!-- Centre Hero Banner -->
    <section style="background: linear-gradient(135deg, #042416 0%, #0d5c36 100%); color: #fff; padding: 5rem 1.5rem; border-bottom: 4px solid #d97706; position: relative; overflow: hidden;">
        <div style="max-width: 1440px; margin: 0 auto; position: relative; z-index: 2;">
            <div style="display: inline-flex; align-items: center; gap: 0.5rem; background: rgba(217,119,6,0.15); color: #f59e0b; padding: 0.4rem 0.85rem; border-radius: 6px; font-size: 0.8rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.2px; margin-bottom: 1.25rem; border: 1px solid rgba(217,119,6,0.4);">
                <span>🛡️</span> Research Centre Division
            </div>
            <h1 style="font-size: clamp(2rem, 4vw, 3rem); font-weight: 800; margin: 0 0 1.25rem 0; line-height: 1.15; color: #ffffff;">
                Applied Mathematics & Simulation Advanced Research Centre <span style="color: #f59e0b;">(AMSARC)</span>
            </h1>
            <p style="font-size: 1.2rem; color: #cbd5e1; max-width: 900px; margin: 0; line-height: 1.65;">
                Leading computational modeling, large-scale scientific simulations, and high-performance computing (HPC) research across national scientific and engineering applications.
            </p>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div style="max-width: 1440px; margin: 3.5rem auto 0; padding: 0 1.5rem; display: grid; grid-template-columns: minmax(0, 2fr) minmax(320px, 1fr); gap: 2.5rem;" class="amsarc-grid">
        
        <!-- Left Column: Mandate & Labs -->
        <div style="display: flex; flex-direction: column; gap: 2.5rem;">
            <!-- Mandate Section -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2.75rem; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.05);">
                <h2 style="font-size: 1.65rem; font-weight: 700; color: #042416; margin-top: 0; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.75rem; border-bottom: 2px solid #f1f5f9; padding-bottom: 0.75rem;">
                    <span style="background: rgba(217,119,6,0.1); color: #d97706; padding: 0.4rem; border-radius: 8px; font-size: 1.2rem;">⚡</span> Mandate & Core Research Focus
                </h2>
                <p style="font-size: 1.1rem; line-height: 1.75; color: #334155; margin: 0;">
                    AMSARC leads computational modeling, large-scale scientific simulations, and high-performance computing (HPC) research across scientific and engineering applications. The centre provides mathematical rigor and simulation horsepower to support national technological development, industrial optimization, and complex systems analysis.
                </p>
            </div>

            <!-- Laboratories Section -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 12px; padding: 2.75rem; box-shadow: 0 10px 25px -5px rgba(0,0,0,0.05);">
                <h2 style="font-size: 1.65rem; font-weight: 700; color: #042416; margin-top: 0; margin-bottom: 1.75rem; display: flex; align-items: center; gap: 0.75rem; border-bottom: 2px solid #f1f5f9; padding-bottom: 0.75rem;">
                    <span style="background: rgba(13,92,54,0.1); color: #0d5c36; padding: 0.4rem; border-radius: 8px; font-size: 1.2rem;">🔬</span> Specialized Laboratories & Equipment
                </h2>
                
                <div style="display: grid; gap: 1.25rem;">
                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 5px solid #0d5c36; padding: 1.5rem; border-radius: 0 8px 8px 0;">
                        <div style="font-weight: 700; color: #042416; font-size: 1.1rem; margin-bottom: 0.35rem;">High-Performance Computing Cluster (HPC)</div>
                        <div style="font-size: 0.95rem; color: #64748b; line-height: 1.5;">Enterprise parallel compute infrastructure for heavy numerical simulation and algorithmic modeling.</div>
                    </div>

                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 5px solid #d97706; padding: 1.5rem; border-radius: 0 8px 8px 0;">
                        <div style="font-weight: 700; color: #042416; font-size: 1.1rem; margin-bottom: 0.35rem;">GPU Accelerated Simulation Nodes</div>
                        <div style="font-size: 0.95rem; color: #64748b; line-height: 1.5;">Dedicated hardware accelerators optimized for machine learning, fluid dynamics, and quantum chemistry computations.</div>
                    </div>

                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 5px solid #0d5c36; padding: 1.5rem; border-radius: 0 8px 8px 0;">
                        <div style="font-weight: 700; color: #042416; font-size: 1.1rem; margin-bottom: 0.35rem;">Scientific Visualization Lab</div>
                        <div style="font-size: 0.95rem; color: #64748b; line-height: 1.5;">Advanced rendering and spatial visualization workstations for multi-dimensional data analysis.</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Right Column: Leadership & Desk Contact -->
        <div>
            <div style="background: #042416; color: #fff; border-radius: 12px; padding: 2.5rem; border-top: 5px solid #d97706; box-shadow: 0 15px 30px -5px rgba(4,36,22,0.25); position: sticky; top: 100px;">
                <h3 style="font-size: 1.25rem; font-weight: 700; color: #f59e0b; margin-top: 0; margin-bottom: 1.75rem; text-transform: uppercase; letter-spacing: 0.75px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 0.75rem;">Centre Administration</h3>
                
                <div style="margin-bottom: 1.75rem; padding-bottom: 1.25rem; border-bottom: 1px solid rgba(255,255,255,0.1);">
                    <div style="font-size: 0.8rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 0.35rem;">Centre Director / Head</div>
                    <div style="font-size: 1.15rem; font-weight: 700; color: #fff;">Director of Computational Sciences</div>
                </div>

                <div style="margin-bottom: 2rem; padding-bottom: 1.25rem; border-bottom: 1px solid rgba(255,255,255,0.1);">
                    <div style="font-size: 0.8rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 0.35rem;">Desk Contact</div>
                    <a href="mailto:amsarc@nistco.gov.ng" style="font-size: 1.05rem; font-weight: 600; color: #f59e0b; text-decoration: none; word-break: break-all; transition: opacity 0.2s;" onmouseover="this.style.opacity='0.8'" onmouseout="this.style.opacity='1'">amsarc@nistco.gov.ng</a>
                </div>

                <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" style="display: block; background: #d97706; color: #fff; text-align: center; padding: 0.9rem; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 0.95rem; box-shadow: 0 4px 12px rgba(217,119,6,0.3); transition: background 0.2s;" onmouseover="this.style.background='#b45309'" onmouseout="this.style.background='#d97706'">
                    Explore AMSARC Ventures &rarr;
                </a>
            </div>
        </div>

    </div>
</main>

<style>
    @media screen and (max-width: 1024px) {
        .amsarc-grid {
            grid-template-columns: 1fr !important;
        }
    }
</style>

<?php
get_footer();
