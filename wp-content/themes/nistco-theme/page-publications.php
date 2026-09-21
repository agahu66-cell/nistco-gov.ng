<?php
/**
 * Template Name: Scientific Publications & Open Repository
 * Description: Open science repository featuring DOI badges, BibTeX/RIS export tools, live discipline filter, Highwire compliance metadata, and peer-reviewed research papers from NISTCO fellows.
 * File: page-publications.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();
$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

// Query Peer-Reviewed Scientific Publications
$pubs_query = new WP_Query( array(
    'post_type'      => 'publication',
    'post_status'    => 'publish',
    'posts_per_page' => 9,
    'paged'          => $paged,
    'orderby'        => 'date',
    'order'          => 'DESC',
) );

$total_pubs = (int) ( wp_count_posts( 'publication' )->publish ?? 0 );
?>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: 3D OPEN KNOWLEDGE ORBITS & DNA SPIRAL ARRAY
         ========================================================================= -->
    <section class="mc-hero-section mc-pubs-hero">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container">
            <div class="mc-hero-grid">

                <!-- Left Column: Open Repository Header -->
                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">Scientific Repository</span>
                    </nav>

                    <div class="mc-hero-badges">
                        <span class="mc-pill mc-pill-green">Open Science Repository</span>
                        <span class="mc-pill mc-pill-gold">Highwire &amp; DOI Indexed</span>
                    </div>

                    <h1 class="mc-hero-title">
                        Scientific Annals, Peer-Reviewed Articles &amp; Datasets
                    </h1>

                    <p class="mc-hero-subtitle">
                        Discover, cite, and download frontier research publications produced across NISTCO's
                        multidisciplinary research divisions: Biotechnology, Simulation Sciences, Chemistry, Physics,
                        Nuclear Technology, and Precision Engineering.
                    </p>

                    <div class="mc-hero-actions" style="margin-bottom: 2rem;">
                        <a href="#repository-stream" class="mc-btn mc-btn-primary">
                            <span>📚</span>
                            <span>Explore Repository (<?php echo esc_html( $total_pubs ?: '120+' ); ?>)</span>
                        </a>

                        <a href="#citation-tools" class="mc-btn mc-btn-secondary">
                            <span>💬</span>
                            <span>Citation Export (BibTeX/RIS)</span>
                        </a>

                        <a href="#call-for-papers" class="mc-btn mc-btn-gold">
                            <span>✍️</span>
                            <span>Submit a Manuscript &rarr;</span>
                        </a>
                    </div>

                    <div class="about-nav-pill-group">
                        <span class="jump-label">Filter By:</span>
                        <a href="#repository-stream" class="about-nav-pill">All Papers</a>
                        <a href="#repository-stream" class="about-nav-pill">🧬 Biotechnology</a>
                        <a href="#repository-stream" class="about-nav-pill">💻 Simulation</a>
                        <a href="#repository-stream" class="about-nav-pill">🧪 Chemical</a>
                        <a href="#repository-stream" class="about-nav-pill">⚛️ Nuclear</a>
                    </div>
                </div>

                <!-- Right Column: ACTIVE MOTION SVG (Open Knowledge Orbit & DNA Double Helix) -->
                <div class="about-3d-viewport">
                    <div class="about-3d-stage">
                        <svg class="mc-active-svg-canvas" viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <defs>
                                <linearGradient id="pubOrbitGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#38bdf8" />
                                    <stop offset="50%" stop-color="#86efac" />
                                    <stop offset="100%" stop-color="#fde047" />
                                </linearGradient>
                            </defs>

                            <!-- Gyroscopic Orbital Ellipses -->
                            <ellipse cx="160" cy="160" rx="140" ry="55" fill="none" stroke="#38bdf8" stroke-width="2"
                                class="svg-rot-cw-slow" />
                            <ellipse cx="160" cy="160" rx="55" ry="140" fill="none" stroke="#fde047" stroke-width="2"
                                class="svg-rot-ccw-mid" />
                            <circle cx="160" cy="160" r="125" fill="none" stroke="#86efac" stroke-width="1.8"
                                stroke-dasharray="8 6" class="svg-rot-cw-fast" />

                            <!-- Active Quantum Data Core -->
                            <g class="svg-pulse-core">
                                <circle cx="160" cy="160" r="28" fill="#042416" stroke="url(#pubOrbitGrad)"
                                    stroke-width="3" />
                                <text x="160" y="167" text-anchor="middle" font-size="20" fill="#86efac">📚</text>
                            </g>

                            <!-- Orbiting Node Satellites -->
                            <circle cx="160" cy="20" r="6" fill="#38bdf8" class="svg-orbiting-node" />
                            <circle cx="300" cy="160" r="6" fill="#fde047" class="svg-orbiting-node" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>

        <!-- Docked Indexing Protocol Ribbon -->
        <div class="about-factlet-bar">
            <div class="container about-factlet-container">
                <div class="factlet-item">
                    <span class="factlet-kicker">Indexing Standard</span>
                    <strong class="factlet-value">Highwire &amp; Google Scholar Schema</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Open Access Status</span>
                    <strong class="factlet-value">100% Free Public Repository</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Citation Export</span>
                    <strong class="factlet-value">One-Click BibTeX &amp; RIS (EndNote)</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Editorial Standards</span>
                    <strong class="factlet-value">Rigorous Double-Blind Peer Review</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. INTERACTIVE SEARCH & REPOSITORY STREAM
         ========================================================================= -->
    <section id="repository-stream" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-pubs-header">
                <div>
                    <span class="mc-section-kicker">Scientific Annals Archive</span>
                    <h2 class="mc-section-title">Published Articles &amp; Monographs</h2>
                    <p class="mc-section-lead" style="margin-top: 0.25rem;">
                        Search by title, author names, or keywords, and use the citation generator to export formatted
                        reference files for your research.
                    </p>
                </div>
                <span style="font-size: 0.88rem; color: var(--mc-text-muted);">
                    Showing Page <?php echo esc_html( $paged ); ?> of
                    <?php echo esc_html( $pubs_query->max_num_pages ?: 1 ); ?>
                </span>
            </div>

            <?php if ( $pubs_query->have_posts() ) : ?>
            <div class="mc-pubs-grid">
                <?php while ( $pubs_query->have_posts() ) : $pubs_query->the_post(); 
                    $pid         = get_the_ID();
                    $authors     = get_post_meta( $pid, '_publication_authors', true ) ?: 'NISTCO / SHESTCO Research Fellows';
                    $pub_year    = get_post_meta( $pid, '_publication_year', true ) ?: get_the_date( 'Y' );
                    $doi         = get_post_meta( $pid, '_publication_doi', true );
                    $pdf_url     = get_post_meta( $pid, '_publication_url', true );
                    $centre_id   = get_post_meta( $pid, '_publication_centre_id', true );
                    $centre_name = $centre_id ? get_the_title( $centre_id ) : '';
                    
                    $bibtex = function_exists( 'shestco_get_publication_bibtex' ) ? shestco_get_publication_bibtex( $pid ) : '';
                    $ris    = function_exists( 'shestco_get_publication_ris' ) ? shestco_get_publication_ris( $pid ) : '';
                ?>
                <article class="mc-pub-card reveal-on-scroll">
                    <div class="mc-pub-pills">
                        <span class="mc-pub-year"><?php echo esc_html( $pub_year ); ?></span>
                        <?php if ( ! empty( $centre_name ) ) : ?>
                        <span class="mc-pub-centre">🏛️
                            <?php echo esc_html( wp_trim_words( $centre_name, 3 ) ); ?></span>
                        <?php endif; ?>
                        <?php if ( ! empty( $doi ) ) : ?>
                        <span class="mc-pub-centre"
                            style="background:#e0f2fe; color:#0369a1; font-family: monospace;">DOI:
                            <?php echo esc_html( wp_trim_words( $doi, 2 ) ); ?></span>
                        <?php endif; ?>
                    </div>

                    <h3 class="mc-pub-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>

                    <div class="mc-pub-authors">
                        ✍️ <?php echo esc_html( wp_trim_words( $authors, 7 ) ); ?>
                    </div>

                    <p class="mc-pub-excerpt">
                        <?php echo wp_trim_words( get_the_excerpt(), 18 ); ?>
                    </p>

                    <div class="mc-pub-footer">
                        <button type="button" class="btn-cite-trigger mc-btn-cite"
                            data-title="<?php echo esc_attr( get_the_title() ); ?>"
                            data-bibtex="<?php echo esc_attr( $bibtex ); ?>" data-ris="<?php echo esc_attr( $ris ); ?>">
                            💬 Cite Paper
                        </button>

                        <?php if ( ! empty( $pdf_url ) ) : ?>
                        <button type="button" class="btn-pdf-preview mc-btn-preview"
                            data-pdf-url="<?php echo esc_url( $pdf_url ); ?>"
                            data-pdf-title="<?php echo esc_attr( get_the_title() ); ?>">
                            👁️ Preview PDF
                        </button>
                        <?php endif; ?>

                        <a href="<?php the_permalink(); ?>" class="mc-btn-cite"
                            style="text-decoration: none !important;">
                            Details &rarr;
                        </a>
                    </div>
                </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <!-- Numbered Pagination -->
            <div style="margin-top: 3.5rem; display: flex; justify-content: center; gap: 0.5rem;">
                <?php
                echo paginate_links( array(
                    'total'     => $pubs_query->max_num_pages,
                    'current'   => $paged,
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                    'type'      => 'list',
                ) );
                ?>
            </div>

            <?php else : ?>
            <div class="inno-no-results-card">
                <span class="no-results-icon">📚</span>
                <h3>No Research Articles Found</h3>
                <p>Check back shortly as new peer-reviewed journal papers and monographs are processed by the editorial
                    board.</p>
            </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- =========================================================================
         3. CALL FOR PAPERS & RESEARCH RESIDENCY SUBMISSION BANNER
         ========================================================================= -->
    <section id="call-for-papers" class="mc-section mc-bg-parchment mc-border-top">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="inno-cta-banner reveal-on-scroll">
                <div class="cta-content">
                    <span class="cta-kicker">Editorial Submissions &amp; Monographs</span>
                    <h2 class="cta-heading">Submit Your Manuscript to NISTCO Scientific Annals</h2>
                    <p class="cta-lead">
                        Are you a visiting research fellow, university faculty member, or resident doctoral scholar with
                        primary research conducted using NISTCO NMR, HPC, or pilot plant instrumentation?
                    </p>
                    <div class="cta-actions">
                        <a href="mailto:publications@shestco.gov.ng" class="mc-btn mc-btn-primary">
                            <span>📄</span>
                            <span>Submit Manuscript for Review</span>
                        </a>
                        <a href="<?php echo esc_url( home_url( '/facilities/' ) ); ?>" class="mc-btn mc-btn-secondary">
                            <span>🔬</span>
                            <span>Explore Research Instrumentation</span>
                        </a>
                    </div>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();