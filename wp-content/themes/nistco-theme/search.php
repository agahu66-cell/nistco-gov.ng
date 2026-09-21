<?php
/**
 * Universal Portal Search Engine
 * Handles full-text queries across Research Centres, Publications, Tenders, Gazettes, and News.
 * File: search.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri     = get_template_directory_uri();
$search_query  = get_search_query();
$total_results = (int) $wp_query->found_posts;
?>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: ACTIVE SEARCH BEAM & KINETIC SENSOR MATRIX
         ========================================================================= -->
    <section class="mc-hero-section mc-search-hero">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container">
            <div class="mc-hero-grid">

                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">Portal Search</span>
                    </nav>

                    <div class="mc-hero-badges">
                        <span class="mc-pill mc-pill-gold">Institutional Search Engine</span>
                        <span class="mc-pill mc-pill-green"><?php echo esc_html( $total_results ); ?> Matching
                            Records</span>
                    </div>

                    <h1 class="mc-hero-title">
                        Search Results: &ldquo;<?php echo esc_html( $search_query ); ?>&rdquo;
                    </h1>

                    <p class="mc-hero-subtitle">
                        Cross-referencing research centre profiles, scientific repository publications, NOTAP commercial
                        patents, and public procurement solicitations.
                    </p>

                    <!-- Search Input Bar -->
                    <div class="inno-search-box" style="margin-top: 1.5rem; max-width: 650px;">
                        <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>"
                            style="width: 100%; display: flex; position: relative;">
                            <span class="search-icon" style="top: 50%; transform: translateY(-50%);">🔍</span>
                            <input type="text" name="s" value="<?php echo esc_attr( $search_query ); ?>"
                                placeholder="Search across all records..." required
                                style="width: 100%; background: #ffffff;">
                            <button type="submit" class="mc-btn mc-btn-primary"
                                style="position: absolute; right: 4px; top: 4px; bottom: 4px; padding: 0 1.25rem; border-radius: 6px;">Search</button>
                        </form>
                    </div>
                </div>

                <!-- Right Column: ACTIVE MOTION SVG (3D Kinetic Search Matrix) -->
                <div class="about-3d-viewport">
                    <div class="about-3d-stage">
                        <svg class="mc-active-svg-canvas" viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <!-- Dual Concentric Range Rings -->
                            <circle cx="160" cy="160" r="130" fill="none" stroke="#86efac" stroke-width="2"
                                stroke-dasharray="10 6" class="svg-rot-cw-slow" />
                            <circle cx="160" cy="160" r="95" fill="none" stroke="rgba(253,224,71,0.5)"
                                stroke-width="1.5" stroke-dasharray="6 4" class="svg-rot-ccw-mid" />

                            <!-- Search Crosshair Beams -->
                            <g class="svg-radar-arm">
                                <line x1="160" y1="160" x2="280" y2="100" stroke="#fde047" stroke-width="2.5" />
                                <polygon points="280,100 260,90 265,110" fill="#fde047" />
                            </g>

                            <!-- Quantum Pulse Center -->
                            <g class="svg-pulse-core">
                                <circle cx="160" cy="160" r="24" fill="#042416" stroke="#86efac" stroke-width="3" />
                                <text x="160" y="167" text-anchor="middle" font-size="18" fill="#86efac">🔍</text>
                            </g>
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. SEARCH RESULTS STREAM
         ========================================================================= -->
    <section class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <?php if ( have_posts() ) : ?>
            <div class="mc-pubs-grid">
                <?php while ( have_posts() ) : the_post(); 
                    $post_type = get_post_type();
                    $type_label = 'Institutional Article';
                    $type_icon  = '📄';

                    if ( 'publication' === $post_type ) {
                        $type_label = 'Scientific Publication';
                        $type_icon  = '📚';
                    } elseif ( 'procurement_tender' === $post_type ) {
                        $type_label = 'Public BPP Tender';
                        $type_icon  = '📋';
                    } elseif ( 'research_centre' === $post_type ) {
                        $type_label = 'Research Centre';
                        $type_icon  = '🔬';
                    }
                ?>
                <article class="mc-pub-card reveal-on-scroll">
                    <div class="mc-pub-pills">
                        <span class="mc-pub-year"><?php echo esc_html( $type_icon . ' ' . $type_label ); ?></span>
                        <span class="mc-pub-centre"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
                    </div>

                    <h3 class="mc-pub-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>

                    <p class="mc-pub-excerpt">
                        <?php echo wp_trim_words( get_the_excerpt(), 22 ); ?>
                    </p>

                    <div class="mc-pub-footer">
                        <a href="<?php the_permalink(); ?>" class="mc-btn-cite"
                            style="text-decoration: none !important;">
                            Access Record &rarr;
                        </a>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div style="margin-top: 3.5rem; display: flex; justify-content: center;">
                <?php
                echo paginate_links( array(
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                    'type'      => 'list',
                ) );
                ?>
            </div>

            <?php else : ?>
            <div class="inno-no-results-card">
                <span class="no-results-icon">🔍</span>
                <h3>No Matching Records Found</h3>
                <p>We could not find any records matching "<strong><?php echo esc_html( $search_query ); ?></strong>".
                    Try checking for spelling errors or searching for broader terms like <em>Biotechnology</em>,
                    <em>NMR</em>, <em>Tenders</em>, or <em>Patents</em>.
                </p>
                <div style="margin-top: 1.5rem;">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="mc-btn mc-btn-primary">Return to
                        Homepage</a>
                </div>
            </div>
            <?php endif; ?>

        </div>
    </section>

</main>

<?php
get_footer();