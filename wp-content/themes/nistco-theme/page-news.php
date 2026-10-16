<?php
/**
 * Template Name: News, Media & Press Releases
 * Description: Official institutional newsroom, ministerial dispatches, press releases, visual broadcasts, fully populated curated research video feed, official announcements, and media accreditation desk for NISTCO.
 * File: page-news.php
 *
 * @package NistcoTheme
 * @version 3.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();
$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

// Query 1: Featured Sticky / Latest Headline
$featured_news_query = new WP_Query( array(
    'post_type'           => 'post',
    'post_status'         => 'publish',
    'posts_per_page'      => 1,
    'ignore_sticky_posts' => 1,
) );

// Query 2: Standard News Stream (Excluding the featured item)
$featured_id = 0;
if ( $featured_news_query->have_posts() ) {
    $featured_id = $featured_news_query->posts[0]->ID;
}

$news_stream_query = new WP_Query( array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 6,
    'paged'          => $paged,
    'post__not_in'   => array( $featured_id ),
) );
?>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: ACTIVE BROADCAST TELEMETRY & RADAR WAVE MATRIX
         ========================================================================= -->
    <section class="mc-hero-section mc-news-hero">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container">
            <div class="mc-hero-grid">

                <!-- Left Column: Press Desk Header -->
                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb"
                        style="margin-bottom: 1rem; font-size: 0.95rem;">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
                            style="color: #86efac; font-weight: 700; text-decoration: none;">🏠 Home</a>
                        <span style="color: #64748b; margin: 0 0.5rem;">&rsaquo;</span>
                        <span class="breadcrumb-current" style="color: #ffffff;">News &amp; Media Room</span>
                    </nav>

                    <div class="mc-hero-badges">
                        <span class="mc-pill mc-pill-green">Media &amp; Communications Desk</span>
                        <span class="mc-pill mc-pill-gold">Official Government Dispatches</span>
                    </div>

                    <h1 class="mc-hero-title">
                        Scientific Breakthroughs, Press Releases &amp; Symposia
                    </h1>

                    <p class="mc-hero-subtitle">
                        Timely reports on indigenous research breakthroughs, presidential STI directives, technology
                        commercialization partnerships, visiting fellow symposia, and institutional announcements.
                    </p>

                    <div class="about-nav-pill-group"
                        style="display: flex; gap: 0.75rem; flex-wrap: wrap; align-items: center; margin-top: 1.5rem;">
                        <span class="jump-label" style="color: #fde047; font-weight: 700;">Jump To:</span>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="about-nav-pill"
                            style="background: #008751; color: #ffffff; text-decoration: none; font-weight: 700;">🏠
                            Return to Home</a>
                        <a href="#featured-dispatch" class="about-nav-pill">⭐ Featured Story</a>
                        <a href="#official-announcements" class="about-nav-pill">📰 Official Announcements</a>
                        <a href="#visual-broadcasts" class="about-nav-pill">🎥 Visual Broadcasts</a>
                        <a href="#advanced-video-feed" class="about-nav-pill">🔬 Advanced Video Feed</a>
                        <a href="#news-stream" class="about-nav-pill">🗂️ Chronological Archive</a>
                    </div>
                </div>

                <!-- Right Column: ACTIVE MOTION SVG (Broadcasting Satellite Wave Array) -->
                <div class="about-3d-viewport">
                    <div class="about-3d-stage">
                        <svg class="mc-active-svg-canvas" viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <defs>
                                <radialGradient id="newsWaveGrad" cx="50%" cy="50%" r="50%">
                                    <stop offset="0%" stop-color="#86efac" stop-opacity="0.8" />
                                    <stop offset="50%" stop-color="#0d5c3a" stop-opacity="0.3" />
                                    <stop offset="100%" stop-color="#042416" stop-opacity="0" />
                                </radialGradient>
                            </defs>
                            <circle cx="160" cy="160" r="135" fill="none" stroke="#86efac" stroke-width="1.8"
                                stroke-dasharray="10 6" class="svg-rot-cw-slow" />
                            <circle cx="160" cy="160" r="100" fill="none" stroke="rgba(253,224,71,0.5)"
                                stroke-width="1.5" stroke-dasharray="6 4" class="svg-rot-ccw-mid" />
                            <circle cx="160" cy="160" r="65" fill="none" stroke="#86efac" stroke-width="1.2" />
                            <g class="svg-wave-bar">
                                <path d="M 160,160 L 270,75 A 130,130 0 0,0 50,75 Z" fill="url(#newsWaveGrad)"
                                    stroke="#86efac" stroke-width="2" />
                                <path d="M 160,160 L 270,245 A 130,130 0 0,1 50,245 Z" fill="url(#newsWaveGrad)"
                                    stroke="#fde047" stroke-width="1.5" opacity="0.6" />
                            </g>
                            <circle cx="160" cy="160" r="24" fill="#042416" stroke="#fde047" stroke-width="3"
                                class="svg-pulse-core" />
                            <text x="160" y="167" text-anchor="middle" font-size="18" fill="#fde047">📡</text>
                        </svg>
                    </div>
                </div>

            </div>
        </div>

        <!-- Docked Media Protocol Ribbon -->
        <div class="about-factlet-bar">
            <div class="container about-factlet-container">
                <div class="factlet-item">
                    <span class="factlet-kicker">Press Contact</span>
                    <strong class="factlet-value">press@nistco.gov.ng</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Frequency of Updates</span>
                    <strong class="factlet-value">Real-Time Statutory Releases</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Syndication</span>
                    <strong class="factlet-value">RSS 2.0 &amp; Media Direct Feeds</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Media Enquiries</span>
                    <strong class="factlet-value">Corporate Affairs Directorate</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. FEATURED HEADLINE DISPATCH SPOTLIGHT
         ========================================================================= -->
    <?php if ( $featured_news_query->have_posts() && 1 === $paged ) : ?>
    <section id="featured-dispatch" class="mc-section mc-bg-white mc-border-bottom">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header">
                <span class="mc-section-kicker">Top Story &bull; Lead Editorial</span>
                <h2 class="mc-section-title">Featured Institutional Dispatch</h2>
            </div>

            <?php while ( $featured_news_query->have_posts() ) : $featured_news_query->the_post(); ?>
            <article class="admin-card admin-card-lead reveal-on-scroll" style="margin-top: 0;">
                <div class="admin-photo-wrapper">
                    <?php if ( has_post_thumbnail() ) : ?>
                    <?php the_post_thumbnail( 'large', array( 'class' => 'admin-photo' ) ); ?>
                    <?php else : ?>
                    <div
                        style="width: 100%; height: 100%; background: #042416; display: flex; align-items: center; justify-content: center; font-size: 3rem;">
                        🔬</div>
                    <?php endif; ?>
                    <div class="admin-photo-overlay">
                        <span class="admin-cadre-tag"><?php echo esc_html( get_the_date( 'F j, Y' ) ); ?></span>
                    </div>
                </div>

                <div class="admin-details">
                    <span class="admin-rank-badge">⚡ Priority Release</span>
                    <h3 class="admin-name" style="font-size: clamp(1.4rem, 2.5vw, 1.85rem);">
                        <a href="<?php the_permalink(); ?>"
                            style="color: inherit; text-decoration: none;"><?php the_title(); ?></a>
                    </h3>
                    <p class="admin-division" style="font-size: 1rem; margin-bottom: 1.5rem;">
                        <?php echo wp_trim_words( get_the_excerpt(), 35 ); ?>
                    </p>

                    <div class="admin-actions">
                        <a href="<?php the_permalink(); ?>" class="mc-btn mc-btn-primary"
                            style="text-decoration: none;">
                            <span>Read Full Article &rarr;</span>
                        </a>
                        <span style="font-size: 0.82rem; color: var(--mc-text-muted);">
                            By <?php the_author(); ?> &bull; Directorate of Corporate Affairs
                        </span>
                    </div>
                </div>
            </article>
            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </section>
    <?php endif; ?>

    <!-- =========================================================================
         3. OFFICIAL ANNOUNCEMENTS: LATEST PRESS RELEASES & BRIEFINGS
         ========================================================================= -->
    <section id="official-announcements" class="mc-section mc-bg-parchment mc-border-bottom"
        style="padding: 5rem 2rem;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">
            <div class="mc-section-header" style="text-align: center; margin-bottom: 3.5rem;">
                <span class="mc-section-kicker"
                    style="color: #008751; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Official
                    Announcements</span>
                <h2 class="mc-section-title"
                    style="font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0;">Latest Press
                    Releases &amp; Briefings</h2>
                <p style="color: #64748b; font-size: 1.05rem; line-height: 1.6; max-width: 720px; margin: 0 auto;">
                    Direct statutory communiqués, technology commercialization approvals, and inter-ministerial
                    resolutions issued by NISTCO executive management.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem;">
                <!-- Announcement 1 -->
                <article class="mc-pub-card reveal-on-scroll"
                    style="background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; border-top: 4px solid #008751; padding: 2.25rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                            <span
                                style="font-size: 0.75rem; font-weight: 800; background: #d1fae5; color: #065f46; padding: 0.3rem 0.8rem; border-radius: 50px;">Press
                                Release</span>
                            <span style="font-size: 0.85rem; color: #64748b; font-weight: 700;">October 14, 2026</span>
                        </div>
                        <h3
                            style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0; line-height: 1.35;">
                            NISTCO Secures NOTAP Certification for 12 Indigenous Patents</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">The
                            National Office for Technology Acquisition and Promotion (NOTAP) formally issues commercial
                            licensing charters for indigenous bio-fertilizers and organic chemical resins produced at
                            the Sheda pilot facility.</p>
                    </div>
                    <div
                        style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem;">
                        <span style="font-size: 0.8rem; font-weight: 800; color: #008751;">Dispatched: Executive
                            Desk</span>
                        <a href="#featured-dispatch"
                            style="color: #008751; font-weight: 800; text-decoration: none; font-size: 0.9rem;">Read
                            Circular &rarr;</a>
                    </div>
                </article>

                <!-- Announcement 2 -->
                <article class="mc-pub-card reveal-on-scroll"
                    style="background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; border-top: 4px solid #d97706; padding: 2.25rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                            <span
                                style="font-size: 0.75rem; font-weight: 800; background: #fef3c7; color: #92400e; padding: 0.3rem 0.8rem; border-radius: 50px;">Ministerial
                                Briefing</span>
                            <span style="font-size: 0.85rem; color: #64748b; font-weight: 700;">October 8, 2026</span>
                        </div>
                        <h3
                            style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0; line-height: 1.35;">
                            Federal Ministry of Innovation (FMIST) Approves Shared Laboratory Access</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">Under
                            Presidential Executive Order No. 5, federal universities and private researchers are granted
                            scheduled open access to NISTCO's high-field NMR and nuclear calibration cells.</p>
                    </div>
                    <div
                        style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem;">
                        <span style="font-size: 0.8rem; font-weight: 800; color: #d97706;">Dispatched: Ministerial
                            Desk</span>
                        <a href="#featured-dispatch"
                            style="color: #d97706; font-weight: 800; text-decoration: none; font-size: 0.9rem;">Read
                            Circular &rarr;</a>
                    </div>
                </article>

                <!-- Announcement 3 -->
                <article class="mc-pub-card reveal-on-scroll"
                    style="background: #ffffff; border-radius: 16px; border: 1px solid #e2e8f0; border-top: 4px solid #0284c7; padding: 2.25rem; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column; justify-content: space-between;">
                    <div>
                        <div
                            style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 1rem;">
                            <span
                                style="font-size: 0.75rem; font-weight: 800; background: #e0f2fe; color: #0369a1; padding: 0.3rem 0.8rem; border-radius: 50px;">Symposium
                                Bulletin</span>
                            <span style="font-size: 0.85rem; color: #64748b; font-weight: 700;">September 30,
                                2026</span>
                        </div>
                        <h3
                            style="font-size: 1.25rem; font-weight: 800; color: #0f172a; margin: 0 0 0.75rem 0; line-height: 1.35;">
                            Annual Sheda Science &amp; Industrial Technology Conclave Announced</h3>
                        <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin-bottom: 1.5rem;">
                            Registration is officially open for the 2026 Multidisciplinary Research Symposia, convening
                            pan-African scientists, patent licensing attorneys, and manufacturing executives.</p>
                    </div>
                    <div
                        style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f1f5f9; padding-top: 1rem;">
                        <span style="font-size: 0.8rem; font-weight: 800; color: #0284c7;">Dispatched: Directorate
                            R&amp;D</span>
                        <a href="#featured-dispatch"
                            style="color: #0284c7; font-weight: 800; text-decoration: none; font-size: 0.9rem;">Read
                            Circular &rarr;</a>
                    </div>
                </article>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         4. VISUAL BROADCASTS & HIGH-DEFINITION VIDEO STREAM
         ========================================================================= -->
    <section id="visual-broadcasts" class="mc-section mc-bg-white mc-border-bottom" style="padding: 5rem 2rem;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">
            <div class="mc-section-header" style="text-align: center; margin-bottom: 3.5rem;">
                <span class="mc-section-kicker"
                    style="color: #008751; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Visual
                    Broadcasts</span>
                <h2 class="mc-section-title"
                    style="font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0;">High-Definition
                    Documentary &amp; Video Stream</h2>
                <p style="color: #64748b; font-size: 1.05rem; line-height: 1.6; max-width: 720px; margin: 0 auto;">
                    Immersive 1080p video broadcasts detailing our 2,000-hectare research campus, nuclear safety
                    facilities, and supercomputing clusters.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem;">
                <!-- Responsive 1080p Video Container 1 -->
                <div
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04);">
                    <div style="position: relative; width: 100%; aspect-ratio: 16/9; background: #000;">
                        <iframe style="position: absolute; inset: 0; width: 100%; height: 100%; border: 0;"
                            src="https://www.youtube-nocookie.com/embed/xyMCb7ft66k"
                            title="Inside NISTCO Research Complex"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div style="padding: 2rem;">
                        <span
                            style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; display: block; margin-bottom: 0.5rem;">HD
                            Feature &bull; 1080p</span>
                        <h4 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">Inside
                            Nigeria's Apex Science Complex</h4>
                        <p style="font-size: 0.9rem; color: #64748b; margin: 0; line-height: 1.6;">An exclusive
                            cinematic walkthrough of the Sheda research campus, showcasing high-field NMR spectrometry
                            and biotechnology cleanrooms.</p>
                    </div>
                </div>

                <!-- Responsive 1080p Video Container 2 -->
                <div
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 4px solid #d97706;">
                    <div style="position: relative; width: 100%; aspect-ratio: 16/9; background: #000;">
                        <iframe style="position: absolute; inset: 0; width: 100%; height: 100%; border: 0;"
                            src="https://www.youtube-nocookie.com/embed/b9EkMc79ZSU"
                            title="Technology Commercialization in Nigeria"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div style="padding: 2rem;">
                        <span
                            style="font-size: 0.75rem; font-weight: 800; color: #d97706; text-transform: uppercase; display: block; margin-bottom: 0.5rem;">Technology
                            Transfer &bull; Special Report</span>
                        <h4 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">From
                            Laboratory Bench to Industrial Market</h4>
                        <p style="font-size: 0.9rem; color: #64748b; margin: 0; line-height: 1.6;">How NISTCO's
                            NOTAP-certified patents are transforming Nigerian manufacturing enterprises through
                            commercial licensing.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         5. ADVANCED SCIENTIFIC RESEARCH VIDEO FEED (CURATED POPULATED BROADCASTS)
         ========================================================================= -->
    <section id="advanced-video-feed" class="mc-section mc-bg-parchment mc-border-bottom"
        style="padding: 5rem 2rem; background: #f8fafc;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">
            <div class="mc-section-header" style="text-align: center; margin-bottom: 3.5rem;">
                <span class="mc-section-kicker"
                    style="color: #008751; font-weight: 800; text-transform: uppercase; font-size: 0.85rem; letter-spacing: 1.5px; display: block; margin-bottom: 0.5rem;">Curated
                    Broadcasts</span>
                <h2 class="mc-section-title"
                    style="font-size: 2.25rem; font-weight: 800; color: #0f172a; margin: 0 0 1rem 0;">Advanced
                    Scientific Research Video Feed</h2>
                <p style="color: #64748b; font-size: 1.05rem; line-height: 1.6; max-width: 720px; margin: 0 auto;">
                    Browse active technical briefings, supercomputing simulation overviews, and pilot plant
                    demonstrations filmed across our 6 multidisciplinary research directorates.</p>
            </div>

            <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr)); gap: 2rem;">
                <!-- Curated Video 1 -->
                <div
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04); display: flex; flex-direction: column;">
                    <div style="position: relative; width: 100%; aspect-ratio: 16/9; background: #000;">
                        <iframe style="position: absolute; inset: 0; width: 100%; height: 100%; border: 0;"
                            src="https://www.youtube-nocookie.com/embed/kJQP7kiw5Fk"
                            title="Scientific Research & Instrumentation"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div
                        style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span
                                style="font-size: 0.75rem; font-weight: 800; color: #008751; text-transform: uppercase; display: block; margin-bottom: 0.5rem;">Metrology
                                &bull; 1080p</span>
                            <h4 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">
                                Advanced Laboratory Metrology &amp; High-Field NMR</h4>
                            <p style="font-size: 0.9rem; color: #64748b; margin: 0; line-height: 1.6;">Technical
                                showcase of high-precision multi-nuclear NMR spectrometry and spectroscopic assay
                                equipment deployed at CARC.</p>
                        </div>
                    </div>
                </div>

                <!-- Curated Video 2 -->
                <div
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 4px solid #d97706; display: flex; flex-direction: column;">
                    <div style="position: relative; width: 100%; aspect-ratio: 16/9; background: #000;">
                        <iframe style="position: absolute; inset: 0; width: 100%; height: 100%; border: 0;"
                            src="https://www.youtube-nocookie.com/embed/b9EkMc79ZSU" title="Pilot Plant Scale-Up"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div
                        style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span
                                style="font-size: 0.75rem; font-weight: 800; color: #d97706; text-transform: uppercase; display: block; margin-bottom: 0.5rem;">Commercialization
                                &bull; 1080p</span>
                            <h4 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">
                                Agro-Biotech Pilot Manufacturing &amp; Tissue Culture</h4>
                            <p style="font-size: 0.9rem; color: #64748b; margin: 0; line-height: 1.6;">A guided tour of
                                BARC's cleanroom tissue culture propagation nurseries producing over 1.2 million
                                disease-free seedlings annually.</p>
                        </div>
                    </div>
                </div>

                <!-- Curated Video 3 -->
                <div
                    style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 16px; overflow: hidden; box-shadow: 0 10px 30px rgba(0,0,0,0.04); border-top: 4px solid #0284c7; display: flex; flex-direction: column;">
                    <div style="position: relative; width: 100%; aspect-ratio: 16/9; background: #000;">
                        <iframe style="position: absolute; inset: 0; width: 100%; height: 100%; border: 0;"
                            src="https://www.youtube-nocookie.com/embed/xyMCb7ft66k"
                            title="Simulation & HPC Supercomputing"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen></iframe>
                    </div>
                    <div
                        style="padding: 2rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                        <div>
                            <span
                                style="font-size: 0.75rem; font-weight: 800; color: #0284c7; text-transform: uppercase; display: block; margin-bottom: 0.5rem;">HPC
                                Supercomputing &bull; 1080p</span>
                            <h4 style="font-size: 1.2rem; font-weight: 800; color: #0f172a; margin: 0 0 0.5rem 0;">
                                AMSARC 1,024-Core HPC Cluster Architecture</h4>
                            <p style="font-size: 0.9rem; color: #64748b; margin: 0; line-height: 1.6;">Demonstration of
                                parallel fluid dynamics, seismic simulations, and predictive artificial intelligence
                                running on NISTCO supercomputers.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         6. CHRONOLOGICAL NEWS STREAM & PAGINATION
         ========================================================================= -->
    <section id="news-stream" class="mc-section mc-bg-white" style="padding: 5rem 2rem;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-pubs-header">
                <div>
                    <span class="mc-section-kicker">Archive Stream</span>
                    <h2 class="mc-section-title">Chronological News Dispatches</h2>
                </div>
                <span style="font-size: 0.88rem; color: var(--mc-text-muted);">
                    Showing Page <?php echo esc_html( $paged ); ?> of
                    <?php echo esc_html( $news_stream_query->max_num_pages ?: 1 ); ?>
                </span>
            </div>

            <?php if ( $news_stream_query->have_posts() ) : ?>
            <div class="mc-pubs-grid">
                <?php while ( $news_stream_query->have_posts() ) : $news_stream_query->the_post(); ?>
                <article class="mc-pub-card reveal-on-scroll">
                    <div class="mc-pub-pills">
                        <span class="mc-pub-year"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
                        <span class="mc-pub-centre">
                            🏛️ <?php echo esc_html( get_the_category()[0]->name ?? 'General News' ); ?>
                        </span>
                    </div>

                    <h3 class="mc-pub-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>

                    <p class="mc-pub-excerpt">
                        <?php echo wp_trim_words( get_the_excerpt(), 20 ); ?>
                    </p>

                    <div class="mc-pub-footer">
                        <a href="<?php the_permalink(); ?>" class="mc-btn-cite"
                            style="text-decoration: none !important;">
                            Read Full Dispatch &rarr;
                        </a>
                        <span style="font-size: 0.78rem; color: var(--mc-text-muted);">
                            ⏱️
                            <?php echo esc_html( ceil( str_word_count( wp_strip_all_tags( get_the_content() ) ) / 200 ) ); ?>
                            min read
                        </span>
                    </div>
                </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <!-- Numbered Pagination -->
            <div style="margin-top: 3.5rem; display: flex; justify-content: center; gap: 0.5rem;">
                <?php
                echo paginate_links( array(
                    'total'     => $news_stream_query->max_num_pages,
                    'current'   => $paged,
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                    'type'      => 'list',
                ) );
                ?>
            </div>

            <?php else : ?>
            <div class="inno-no-results-card">
                <span class="no-results-icon">📰</span>
                <h3>No Additional Archive Records Found</h3>
                <p>Check back shortly for upcoming editorial dispatches, symposium notifications, and ministerial
                    communiqués.</p>
            </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- =========================================================================
         7. MEDIA ACCREDITATION & PRESS CORRESPONDENT CALLOUT
         ========================================================================= -->
    <section id="media-accreditation" class="mc-section mc-bg-parchment mc-border-top" style="padding: 5rem 2rem;">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="inno-dispatch-box reveal-on-scroll">
                <div class="dispatch-left">
                    <span class="dispatch-kicker">Media &amp; Press Relations</span>
                    <h3 class="dispatch-title">Journalist Accreditation &amp; Press Briefing Requests</h3>
                    <p class="dispatch-desc">
                        Accredited journalists, science correspondents, and broadcast crews seeking official interviews
                        with the Director-General, technical tours of our 2,000-hectare campus, or high-resolution
                        imagery may contact the Press Desk.
                    </p>
                </div>
                <div class="dispatch-right">
                    <a href="mailto:press@nistco.gov.ng" class="mc-btn mc-btn-primary"
                        style="font-size: 0.95rem; padding: 0.85rem 1.75rem;">
                        <span>✉️</span>
                        <span>Contact Corporate Affairs Desk</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();