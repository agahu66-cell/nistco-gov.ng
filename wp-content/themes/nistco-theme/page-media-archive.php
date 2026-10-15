<?php
/**
 * Template Name: NISTCO Media, Press & Documentaries Archive
 * Description: Public information portal showcasing press releases, ministerial bulletins, video documentaries, and downloadable press kits.
 * File: page-media-archive.php
 *
 * @package NistcoTheme
 * @version 1.0.0
 */

get_header();
?>

<style>
.nistco-sub-main { background: #f8fafc; color: #1e293b; font-family: system-ui, -apple-system, sans-serif; overflow-x: hidden; }

/* Hero Section */
.media-hero {
    background: linear-gradient(135deg, #021a10 0%, #032d1c 50%, #043822 100%);
    color: #ffffff;
    padding: 6rem 2rem 7rem 2rem;
    position: relative;
    overflow: hidden;
}
.media-hero-container { max-width: 1440px; margin: 0 auto; position: relative; z-index: 2; }
.media-badge { font-size: 0.75rem; font-weight: 800; text-transform: uppercase; padding: 0.35rem 0.85rem; border-radius: 50px; background: #059669; color: #fff; letter-spacing: 1px; display: inline-block; margin-bottom: 1.25rem; box-shadow: 0 4px 14px rgba(0,0,0,0.3); }
.media-title { font-size: clamp(2.25rem, 4vw, 3.5rem); font-weight: 800; line-height: 1.15; margin: 0 0 1rem 0; color: #fff; }
.media-subtitle { font-size: 1.15rem; color: #cbd5e1; max-width: 750px; line-height: 1.7; margin-bottom: 2.5rem; }

/* Sections */
.media-section { padding: 5rem 2rem; max-width: 1440px; margin: 0 auto; }
.section-header { text-align: center; max-width: 700px; margin: 0 auto 3.5rem auto; }
.section-kicker { color: #059669; font-size: 0.8rem; font-weight: 800; text-transform: uppercase; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem; }
.section-heading { font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0; }
.section-lead { color: #64748b; font-size: 1.05rem; line-height: 1.6; }

/* Filter Tabs */
.media-filters { display: flex; gap: 1rem; justify-content: center; margin-bottom: 3rem; flex-wrap: wrap; }
.media-filter-btn { background: #ffffff; border: 1px solid #cbd5e1; color: #334155; padding: 0.6rem 1.25rem; border-radius: 50px; font-weight: 700; font-size: 0.9rem; cursor: pointer; transition: all 0.2s; }
.media-filter-btn.active, .media-filter-btn:hover { background: #008751; color: #ffffff; border-color: #008751; }

/* Press Release Grid */
.press-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(350px, 1fr)); gap: 2rem; }
.press-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; padding: 2.25rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between; border-top: 4px solid #008751; transition: transform 0.2s; }
.press-card:hover { transform: translateY(-4px); }

/* Documentaries Grid */
.doc-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap: 2rem; }
.doc-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; }
</style>

<main class="nistco-sub-main">

    <!-- HERO SECTION -->
    <section class="media-hero">
        <div class="media-hero-container">
            <span class="media-badge">Public Information Desk</span>
            <h1 class="media-title">Media, Press &amp; Documentaries Archive</h1>
            <p class="media-subtitle">Official press releases, ministerial briefings, documentary broadcasts, and downloadable media assets chronicling NISTCO's national R&amp;D milestones.</p>
            <div style="display: flex; gap: 1rem; flex-wrap: wrap;">
                <a href="#press" class="nistco-btn nistco-btn-primary" style="background: #059669;">Explore Press Releases &rarr;</a>
                <a href="#documentaries" class="nistco-btn nistco-btn-secondary">Watch Documentaries</a>
            </div>
        </div>
    </section>

    <!-- FILTER TABS -->
    <div style="padding-top: 3rem; background: #f8fafc;">
        <div class="media-filters">
            <button class="media-filter-btn active" onclick="filterMedia('all')">All Publications</button>
            <button class="media-filter-btn" onclick="filterMedia('press')">Press Releases</button>
            <button class="media-filter-btn" onclick="filterMedia('bulletins')">Ministerial Bulletins</button>
            <button class="media-filter-btn" onclick="filterMedia('video')">Video Documentaries</button>
        </div>
    </div>

    <!-- 1. LATEST PRESS RELEASES -->
    <section id="press" class="media-section" style="padding-top: 2rem;">
        <div class="section-header">
            <span class="section-kicker">Official Announcements</span>
            <h2 class="section-heading">Latest Press Releases &amp; Briefings</h2>
            <p class="section-lead">Verified news and milestones directly from the NISTCO Directorate of Public Information.</p>
        </div>

        <div class="press-grid">
            
            <!-- Press Release 1 -->
            <div class="press-card">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span style="font-size: 0.75rem; font-weight: 800; background: #d1fae5; color: #065f46; padding: 0.25rem 0.75rem; border-radius: 50px;">Press Release</span>
                        <span style="font-size: 0.85rem; color: #64748b; font-weight: 700;">October 12, 2026</span>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">NISTCO Secures 12 New NOTAP Industrial Patent Certifications</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">The National Office for Technology Acquisition and Promotion (NOTAP) formally certifies twelve indigenous R&amp;D breakthroughs across chemical synthesis and biotechnology.</p>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem;">
                    <span style="color: #008751; font-weight: 700; font-size: 0.85rem;">Official Dispatch</span>
                    <a href="#" style="font-weight: 700; color: #059669; text-decoration: none; font-size: 0.9rem;">Read Full Release &rarr;</a>
                </div>
            </div>

            <!-- Press Release 2 -->
            <div class="press-card" style="border-top-color: #d97706;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span style="font-size: 0.75rem; font-weight: 800; background: #fef3c7; color: #92400e; padding: 0.25rem 0.75rem; border-radius: 50px;">Ministerial Briefing</span>
                        <span style="font-size: 0.85rem; color: #64748b; font-weight: 700;">September 28, 2026</span>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">FMIST Minister Inspects 500 kVA Solar Microgrid &amp; HPC Facility</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">Hon. Minister Dr. Kingsley Tochukwu Ude commends NISTCO's zero-carbon research microgrid and 1,024-core supercomputing cluster during the Abuja campus inspection tour.</p>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem;">
                    <span style="color: #008751; font-weight: 700; font-size: 0.85rem;">Ministerial Dispatch</span>
                    <a href="#" style="font-weight: 700; color: #d97706; text-decoration: none; font-size: 0.9rem;">Read Full Release &rarr;</a>
                </div>
            </div>

            <!-- Press Release 3 -->
            <div class="press-card" style="border-top-color: #0284c7;">
                <div>
                    <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                        <span style="font-size: 0.75rem; font-weight: 800; background: #e0f2fe; color: #0369a1; padding: 0.25rem 0.75rem; border-radius: 50px;">Research Bulletin</span>
                        <span style="font-size: 0.85rem; color: #64748b; font-weight: 700;">September 15, 2026</span>
                    </div>
                    <h3 style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">AMSARC Launches Open-Access HPC Simulation Portal for Nigerian Universities</h3>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">Academic researchers and postgraduate fellows can now securely submit computational fluid dynamics and seismic models directly to the 256 TeraFLOPs cluster.</p>
                </div>
                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem;">
                    <span style="color: #008751; font-weight: 700; font-size: 0.85rem;">Academic Dispatch</span>
                    <a href="#" style="font-weight: 700; color: #0284c7; text-decoration: none; font-size: 0.9rem;">Read Full Release &rarr;</a>
                </div>
            </div>

        </div>
    </section>

    <!-- 2. VIDEO DOCUMENTARIES & BROADCASTS -->
    <section id="documentaries" class="media-section nistco-bg-parchment" style="max-width: 100%; padding: 5rem 2rem;">
        <div style="max-width: 1440px; margin: 0 auto;">
            <div class="section-header">
                <span class="section-kicker">Visual Archive</span>
                <h2 class="section-heading">Documentary Broadcasts &amp; Facility Tours</h2>
                <p class="section-lead">Immersive video features highlighting NISTCO's laboratories, nuclear safety cells, and advanced prototyping workshops.</p>
            </div>

            <div class="doc-grid">
                
                <!-- Documentary 1 -->
                <div class="doc-card">
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; background: #000;">
                        <iframe style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;" src="https://www.youtube-nocookie.com/embed/xyMCb7ft66k" title="Inside NISTCO Research Complex" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div style="padding: 1.75rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #ffffff;">
                        <div>
                            <span style="font-size: 0.75rem; font-weight: 800; color: #059669; text-transform: uppercase;">Documentary Feature</span>
                            <h4 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.35rem 0 0.5rem 0;">Inside Nigeria's Apex Science Complex</h4>
                            <p style="font-size: 0.88rem; color: #64748b; margin: 0; line-height: 1.5;">An exclusive walkthrough of the Sheda research campus, showcasing high-field NMR spectrometers and biotechnology cleanrooms.</p>
                        </div>
                    </div>
                </div>

                <!-- Documentary 2 -->
                <div class="doc-card">
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; background: #000;">
                        <iframe style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;" src="https://www.youtube-nocookie.com/embed/b9EkMc79ZSU" title="Technology Commercialization in Nigeria" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div style="padding: 1.75rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #ffffff;">
                        <div>
                            <span style="font-size: 0.75rem; font-weight: 800; color: #d97706; text-transform: uppercase;">Technology Transfer</span>
                            <h4 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.35rem 0 0.5rem 0;">From Laboratory Bench to Industrial Market</h4>
                            <p style="font-size: 0.88rem; color: #64748b; margin: 0; line-height: 1.5;">How NISTCO's NOTAP-certified patents are transforming Nigerian manufacturing enterprises through commercial licensing.</p>
                        </div>
                    </div>
                </div>

                <!-- Documentary 3 -->
                <div class="doc-card">
                    <div style="position: relative; padding-bottom: 56.25%; height: 0; background: #000;">
                        <iframe style="position: absolute; top:0; left:0; width:100%; height:100%; border:0;" src="https://www.youtube-nocookie.com/embed/kJQP7kiw5Fk" title="HPC and Supercomputing in Abuja" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div style="padding: 1.75rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between; background: #ffffff;">
                        <div>
                            <span style="font-size: 0.75rem; font-weight: 800; color: #0284c7; text-transform: uppercase;">Supercomputing Suite</span>
                            <h4 style="font-size: 1.15rem; font-weight: 800; color: #0f172a; margin: 0.35rem 0 0.5rem 0;">Supercomputing Powering National Grid Stability</h4>
                            <p style="font-size: 0.88rem; color: #64748b; margin: 0; line-height: 1.5;">Exploring AMSARC's parallel computing clusters and their vital role in forecasting electrical grid imbalances.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- VIDEO CAROUSEL SHOWCASE -->
    <section class="media-section">
        <div class="section-header">
            <span class="section-kicker">Curated Broadcasts</span>
            <h2 class="section-heading">Science &amp; Technology Video Guides</h2>
            <p class="section-lead">Explore additional video resources covering laboratory safety, metrology, and industrial prototyping.</p>
        </div>

        <Carousel>
          <Video source="youtube" query="nigeria laboratory instrumentation and scientific research documentary" count="3"/>
        </Carousel>
    </section>

</main>

<script>
function filterMedia(category) {
    const btns = document.querySelectorAll('.media-filter-btn');
    btns.forEach(b => b.classList.remove('active'));
    event.target.classList.add('active');
    // Filter logic can be expanded here for dynamic AJAX filtering
}
</script>

<?php get_footer(); ?>
