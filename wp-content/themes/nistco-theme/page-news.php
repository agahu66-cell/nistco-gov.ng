<?php
/**
 * Template Name: News, Media & Press Releases
 * Description: Official institutional newsroom, ministerial dispatches, press releases, scientific symposia notices, and media accreditation desk for NISTCO.
 * File: page-news.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();
$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

// Query 1: Featured Sticky / Latest Headline
$featured_news_query = new WP_Query( array(
    'post_type'      => 'post',
    'post_status'    => 'publish',
    'posts_per_page' => 1,
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
                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">News &amp; Media Room</span>
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

                    <div class="about-nav-pill-group">
                        <span class="jump-label">Jump To:</span>
                        <a href="#featured-dispatch" class="about-nav-pill">⭐ Featured Story</a>
                        <a href="#news-stream" class="about-nav-pill">📰 Recent Dispatches</a>
                        <a href="#media-accreditation" class="about-nav-pill">🎥 Media Accreditation</a>
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

                            <!-- Outer Telemetry Antenna Ring -->
                            <circle cx="160" cy="160" r="135" fill="none" stroke="#86efac" stroke-width="1.8"
                                stroke-dasharray="10 6" class="svg-rot-cw-slow" />
                            <circle cx="160" cy="160" r="100" fill="none" stroke="rgba(253,224,71,0.5)"
                                stroke-width="1.5" stroke-dasharray="6 4" class="svg-rot-ccw-mid" />
                            <circle cx="160" cy="160" r="65" fill="none" stroke="#86efac" stroke-width="1.2" />

                            <!-- Broadcast Wave Emission Beams -->
                            <g class="svg-wave-bar">
                                <path d="M 160,160 L 270,75 A 130,130 0 0,0 50,75 Z" fill="url(#newsWaveGrad)"
                                    stroke="#86efac" stroke-width="2" />
                                <path d="M 160,160 L 270,245 A 130,130 0 0,1 50,245 Z" fill="url(#newsWaveGrad)"
                                    stroke="#fde047" stroke-width="1.5" opacity="0.6" />
                            </g>

                            <!-- Central Broadcaster Core Node -->
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
                    <strong class="factlet-value">press@shestco.gov.ng</strong>
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
                    <?php the_post_thumbnail( 'shestco-card', array( 'class' => 'admin-photo' ) ); ?>
                    <?php else : ?>
                    <div
                        style="width: 100%; height: 100%; background: #042416; display: flex; align-items: center; justify-content: center; font-size: 3rem;">
                        🔬
                    </div>
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
         3. CHRONOLOGICAL NEWS STREAM & PAGINATION
         ========================================================================= -->
    <section id="news-stream" class="mc-section mc-bg-parchment">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-pubs-header">
                <div>
                    <span class="mc-section-kicker">Chronological Archive</span>
                    <h2 class="mc-section-title">Recent Dispatches &amp; Announcements</h2>
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
                <h3>No Recent News Releases Found</h3>
                <p>Check back shortly for upcoming editorial dispatches, symposium notifications, and ministerial
                    communiqués.</p>
            </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- =========================================================================
         4. MEDIA ACCREDITATION & PRESS CORRESPONDENT CALLOUT
         ========================================================================= -->
    <section id="media-accreditation" class="mc-section mc-bg-white mc-border-top">
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
                    <a href="mailto:press@shestco.gov.ng" class="mc-btn mc-btn-primary"
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