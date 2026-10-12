<?php
/**
 * Template Name: CARC Centre Page
 * Description: High-impact institutional layout for CARC (Chemistry Advanced Research Centre)
 */

get_header();
?>

<main style="background: #f8fafc; color: #1e293b; font-family: system-ui, -apple-system, sans-serif; min-height: 100vh;">
    
    <!-- Hero Section -->
    <section style="background: linear-gradient(135deg, #042416 0%, #083b23 50%, #0d5c36 100%); color: #fff; padding: 5rem 1.5rem; border-bottom: 4px solid #d97706; position: relative; overflow: hidden; box-shadow: inset 0 -20px 40px rgba(0,0,0,0.3);">
        <div style="max-width: 1440px; margin: 0 auto; position: relative; z-index: 2;">
            
            <div style="display: flex; align-items: center; gap: 0.75rem; margin-bottom: 1.25rem; flex-wrap: wrap;">
                <span style="background: rgba(217,119,6,0.2); color: #f59e0b; padding: 0.4rem 0.85rem; border-radius: 6px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; letter-spacing: 1.2px; border: 1px solid rgba(217,119,6,0.4);">
                    Advanced Research Centre
                </span>
                <span style="background: rgba(255,255,255,0.08); color: #cbd5e1; padding: 0.4rem 0.85rem; border-radius: 6px; font-size: 0.75rem; font-weight: 600; letter-spacing: 0.8px;">
                    NISTCO Complex, Abuja
                </span>
            </div>

            <h1 style="font-size: clamp(2.2rem, 4.5vw, 3.5rem); font-weight: 800; margin: 0 0 1rem 0; line-height: 1.15; color: #ffffff; letter-spacing: -0.5px;">
                Chemistry Advanced Research Centre <br><span style="color: #f59e0b;">(CARC)</span>
            </h1>

            <p style="font-size: 1.15rem; color: #cbd5e1; max-width: 900px; margin: 0 0 2rem 0; line-height: 1.7;">
                Specializes in industrial chemical synthesis, environmental remediation chemistry, extraction of bioactive natural compounds, and material characterization for indigenous manufacturing applications.
            </p>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 1rem; max-width: 900px; background: rgba(4,36,22,0.6); padding: 1.25rem; border-radius: 10px; border: 1px solid rgba(217,119,6,0.3); backdrop-filter: blur(10px);">
                <div>
                    <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;">Core Focus</div>
                    <div style="font-size: 1.25rem; font-weight: 700; color: #f59e0b;">Chemical Synthesis & Bioactives</div>
                </div>
                <div>
                    <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;">Instrumentation Suite</div>
                    <div style="font-size: 1.25rem; font-weight: 700; color: #fff;">FTIR, UV-Vis, HPLC & GC-MS</div>
                </div>
                <div>
                    <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px;">Application Domain</div>
                    <div style="font-size: 1.25rem; font-weight: 700; color: #fff;">Indigenous Manufacturing</div>
                </div>
            </div>

        </div>
    </section>

    <!-- Main Content Layout -->
    <div style="max-width: 1440px; margin: 3.5rem auto 0; padding: 0 1.5rem; display: grid; grid-template-columns: minmax(0, 2fr) minmax(340px, 1fr); gap: 2.5rem;" class="carc-layout">
        
        <div style="display: flex; flex-direction: column; gap: 2.5rem;">
            
            <!-- Mandate Card -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 3rem; box-shadow: 0 10px 30px -5px rgba(0,0,0,0.05); position: relative; overflow: hidden;">
                <div style="position: absolute; top: 0; left: 0; width: 6px; height: 100%; background: #d97706;"></div>
                <h2 style="font-size: 1.75rem; font-weight: 700; color: #042416; margin-top: 0; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.75rem;">
                    <span style="background: rgba(217,119,6,0.1); color: #d97706; padding: 0.5rem; border-radius: 8px; font-size: 1.25rem;">🧪</span> Mandate & Core Research Focus
                </h2>
                <p style="font-size: 1.1rem; line-height: 1.8; color: #334155; margin: 0;">
                    CARC specializes in industrial chemical synthesis, environmental remediation chemistry, extraction of bioactive natural compounds, and material characterization for indigenous manufacturing applications.
                </p>
            </div>

            <!-- Laboratories & Equipment Grid -->
            <div style="background: #fff; border: 1px solid #e2e8f0; border-radius: 14px; padding: 3rem; box-shadow: 0 10px 30px -5px rgba(0,0,0,0.05);">
                <h2 style="font-size: 1.75rem; font-weight: 700; color: #042416; margin-top: 0; margin-bottom: 2rem; display: flex; align-items: center; gap: 0.75rem;">
                    <span style="background: rgba(13,92,54,0.1); color: #0d5c36; padding: 0.5rem; border-radius: 8px; font-size: 1.25rem;">🔬</span> Specialized Laboratories & Equipment
                </h2>
                
                <div style="display: grid; gap: 1.5rem;">
                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 5px solid #0d5c36; padding: 1.75rem; border-radius: 0 10px 10px 0;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.5rem; flex-wrap: wrap; gap: 0.5rem;">
                            <h3 style="font-weight: 700; color: #042416; font-size: 1.15rem; margin: 0;">Spectroscopy Suite (FTIR, UV-Vis)</h3>
                            <span style="background: #0d5c36; color: #fff; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase;">Active Suite</span>
                        </div>
                        <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin: 0;">
                            High-precision Fourier Transform Infrared and Ultraviolet-Visible spectroscopy for functional group identification and molecular structure verification.
                        </p>
                    </div>

                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 5px solid #d97706; padding: 1.75rem; border-radius: 0 10px 10px 0;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.5rem; flex-wrap: wrap; gap: 0.5rem;">
                            <h3 style="font-weight: 700; color: #042416; font-size: 1.15rem; margin: 0;">Chromatography Lab (HPLC, GC-MS)</h3>
                            <span style="background: #d97706; color: #fff; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase;">Separation & Analysis</span>
                        </div>
                        <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin: 0;">
                            Advanced High-Performance Liquid Chromatography and Gas Chromatography-Mass Spectrometry systems for complex compound separation and trace pollutant detection.
                        </p>
                    </div>

                    <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-left: 5px solid #0d5c36; padding: 1.75rem; border-radius: 0 10px 10px 0;">
                        <div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 0.5rem; flex-wrap: wrap; gap: 0.5rem;">
                            <h3 style="font-weight: 700; color: #042416; font-size: 1.15rem; margin: 0;">Material Synthesis and Thermal Analysis Lab</h3>
                            <span style="background: #0d5c36; color: #fff; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.7rem; font-weight: 700; text-transform: uppercase;">Synthesis & Testing</span>
                        </div>
                        <p style="font-size: 0.95rem; color: #64748b; line-height: 1.6; margin: 0;">
                            Dedicated reactors and thermal analytical instrumentation for polymer characterization, nanomaterials development, and chemical formulation stress testing.
                        </p>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Column -->
        <div>
            <div style="background: #042416; color: #fff; border-radius: 14px; padding: 2.75rem; border-top: 6px solid #d97706; box-shadow: 0 20px 40px -10px rgba(4,36,22,0.3); position: sticky; top: 100px;">
                
                <h3 style="font-size: 1.25rem; font-weight: 700; color: #f59e0b; margin-top: 0; margin-bottom: 1.75rem; text-transform: uppercase; letter-spacing: 0.8px; border-bottom: 1px solid rgba(255,255,255,0.1); padding-bottom: 0.75rem;">
                    Centre Administration
                </h3>
                
                <div style="margin-bottom: 1.75rem; padding-bottom: 1.25rem; border-bottom: 1px solid rgba(255,255,255,0.1);">
                    <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 0.35rem;">Centre Director / Head</div>
                    <div style="font-size: 1.2rem; font-weight: 700; color: #fff;">Director of Chemical Sciences</div>
                </div>

                <div style="margin-bottom: 2rem; padding-bottom: 1.25rem; border-bottom: 1px solid rgba(255,255,255,0.1);">
                    <div style="font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.8px; margin-bottom: 0.35rem;">Desk Contact</div>
                    <a href="mailto:carc@shestco.gov.ng" style="font-size: 1.05rem; font-weight: 600; color: #f59e0b; text-decoration: none; word-break: break-all;">carc@shestco.gov.ng</a>
                </div>

                <a href="<?php echo esc_url( home_url( '/commercial-ventures/' ) ); ?>" style="display: block; background: #d97706; color: #fff; text-align: center; padding: 1rem; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 0.95rem; box-shadow: 0 4px 15px rgba(217,119,6,0.4);">
                    Explore CARC Ventures &rarr;
                </a>

            </div>
        </div>

    </div>
</main>

<style>
    @media screen and (max-width: 1024px) {
        .carc-layout {
            grid-template-columns: 1fr !important;
        }
    }
</style>

<?php
get_footer();
