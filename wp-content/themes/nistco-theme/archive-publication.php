<?php
/**
 * Template Name: Scientific Publications & Research Repository
 * Post Type Archive: publication
 * File: archive-publication.php
 */

get_header();

// 1. Fetch filter parameters from GET request
$search_query    = sanitize_text_field( $_GET['pub_search'] ?? '' );
$selected_centre = sanitize_text_field( $_GET['centre_filter'] ?? '' );
$selected_year   = sanitize_text_field( $_GET['year_filter'] ?? '' );

// 2. Build dynamic query
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

$args = array(
    'post_type'      => 'publication',
    'post_status'    => 'publish',
    'paged'          => $paged,
    'posts_per_page' => 10,
    's'              => $search_query,
);

$meta_query = array();

if ( ! empty( $selected_centre ) ) {
    $meta_query[] = array(
        'key'     => '_publication_centre_id',
        'value'   => $selected_centre,
        'compare' => '=',
    );
}

if ( ! empty( $selected_year ) ) {
    $meta_query[] = array(
        'key'     => '_publication_year',
        'value'   => $selected_year,
        'compare' => '=',
    );
}

if ( ! empty( $meta_query ) ) {
    $args['meta_query'] = $meta_query;
}

$repo_query = new WP_Query( $args );
$centres    = get_posts( array( 'post_type' => 'research_centre', 'posts_per_page' => -1, 'post_status' => 'publish' ) );
?>

<main class="site-main">

    <!-- HERO HEADER -->
    <section class="about-hero"
        style="background: linear-gradient(135deg, var(--primary-dark) 0%, #0c3e27 100%); padding: clamp(3.5rem, 6vw, 5rem) 1.5rem; border-bottom: 4px solid var(--accent-gold);">
        <div class="container">
            <div style="max-width: 880px;">
                <span
                    style="display: inline-block; background: rgba(255,255,255,0.12); color: #86efac; padding: 0.35rem 0.9rem; border-radius: 9999px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.75px; margin-bottom: 1.25rem;">
                    Open Science Gateway
                </span>
                <h1
                    style="font-size: clamp(2.2rem, 5vw, 3rem); font-weight: 800; line-height: 1.2; margin: 0 0 1.25rem 0; color: #ffffff;">
                    Scientific Publications & Technical Repository
                </h1>
                <p style="font-size: 1.15rem; line-height: 1.7; color: #e5e7eb; margin: 0;">
                    Peer-reviewed journals, symposium papers, technical monographs, and open data releases published by
                    researchers across all four Advanced Research Centres.
                </p>
            </div>
        </div>
    </section>

    <!-- FILTER & AJAX LIVE SEARCH GATEWAY -->
    <section
        style="background: var(--bg-light); border-bottom: 1px solid var(--border-color); padding: 1.75rem 1.5rem;">
        <div class="container">
            <form id="pub-filter-form" method="GET"
                action="<?php echo esc_url( get_post_type_archive_link( 'publication' ) ); ?>"
                style="display: grid; grid-template-columns: 2fr 1.5fr 1fr auto; gap: 1rem; align-items: end;"
                class="pub-filter-form">

                <!-- Live Search Container -->
                <div class="pub-search-wrapper" style="position: relative;">
                    <label
                        style="display: block; font-size: 0.8rem; font-weight: 700; color: var(--primary-dark); margin-bottom: 0.35rem; text-transform: uppercase;">
                        Search Papers / Keywords
                    </label>
                    <div style="position: relative; display: flex; align-items: center;">
                        <input type="text" id="pub-live-search-input" name="pub_search"
                            value="<?php echo esc_attr( $search_query ); ?>"
                            placeholder="Search titles, authors, DOI..." class="staff-input"
                            style="height: 44px; padding-right: 2.5rem;" autocomplete="off" />
                        <span id="pub-search-spinner" class="pub-search-spinner"
                            style="display: none; position: absolute; right: 12px; font-size: 0.9rem; color: var(--primary-color);">⏳</span>
                    </div>

                    <!-- Dropdown Container -->
                    <div id="pub-live-dropdown" class="pub-live-dropdown" style="display: none;">
                        <div id="pub-live-results-list" class="pub-live-results-list"></div>
                        <div id="pub-live-footer" class="pub-live-footer"></div>
                    </div>
                </div>

                <!-- Centre Filter -->
                <div>
                    <label
                        style="display: block; font-size: 0.8rem; font-weight: 700; color: var(--primary-dark); margin-bottom: 0.35rem; text-transform: uppercase;">
                        Research Centre
                    </label>
                    <select name="centre_filter" class="staff-input" style="height: 44px;">
                        <option value="">All Research Centres</option>
                        <?php foreach ( $centres as $c ) : ?>
                        <option value="<?php echo esc_attr( $c->ID ); ?>"
                            <?php selected( $selected_centre, $c->ID ); ?>>
                            <?php echo esc_html( $c->post_title ); ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                </div>

                <!-- Year Filter -->
                <div>
                    <label
                        style="display: block; font-size: 0.8rem; font-weight: 700; color: var(--primary-dark); margin-bottom: 0.35rem; text-transform: uppercase;">
                        Year
                    </label>
                    <select name="year_filter" class="staff-input" style="height: 44px;">
                        <option value="">All Years</option>
                        <?php 
                        $current_year = (int) date( 'Y' );
                        for ( $y = $current_year; $y >= 2000; $y-- ) : ?>
                        <option value="<?php echo esc_attr( $y ); ?>" <?php selected( $selected_year, $y ); ?>>
                            <?php echo esc_html( $y ); ?>
                        </option>
                        <?php endfor; ?>
                    </select>
                </div>

                <!-- Action Buttons -->
                <div style="display: flex; gap: 0.5rem;">
                    <button type="submit"
                        style="height: 44px; background: var(--primary-color); color: #ffffff; border: none; padding: 0 1.25rem; border-radius: 6px; font-weight: 700; cursor: pointer;">
                        Filter
                    </button>
                    <?php if ( ! empty( $search_query ) || ! empty( $selected_centre ) || ! empty( $selected_year ) ) : ?>
                    <a href="<?php echo esc_url( get_post_type_archive_link( 'publication' ) ); ?>"
                        style="height: 44px; display: inline-flex; align-items: center; justify-content: center; background: #e5e7eb; color: var(--text-main); padding: 0 1rem; border-radius: 6px; text-decoration: none; font-size: 0.85rem; font-weight: 600;">
                        Clear
                    </a>
                    <?php endif; ?>
                </div>

            </form>
        </div>
    </section>

    <!-- LISTINGS -->
    <section style="padding: 4.5rem 1.5rem; background: #ffffff;">
        <div class="container">

            <div style="margin-bottom: 2rem; display: flex; justify-content: space-between; align-items: center;">
                <span style="color: var(--text-muted); font-size: 0.95rem;">
                    Showing <strong><?php echo esc_html( $repo_query->found_posts ); ?></strong> indexed scientific
                    publications
                </span>
            </div>

            <?php if ( $repo_query->have_posts() ) : ?>
            <div style="display: flex; flex-direction: column; gap: 1.5rem; margin-bottom: 3.5rem;">
                <?php while ( $repo_query->have_posts() ) : $repo_query->the_post(); 
                        $pub_id      = get_the_ID();
                        $authors     = get_post_meta( $pub_id, '_publication_authors', true ) ?: 'NISTCO / SHESTCO Research Fellows';
                        $journal     = get_post_meta( $pub_id, '_publication_journal', true );
                        $pub_year    = get_post_meta( $pub_id, '_publication_year', true ) ?: get_the_date( 'Y' );
                        $doi         = get_post_meta( $pub_id, '_publication_doi', true );
                        $pdf_url     = get_post_meta( $pub_id, '_publication_url', true );
                        $centre_id   = get_post_meta( $pub_id, '_publication_centre_id', true );
                        $centre_name = $centre_id ? get_the_title( $centre_id ) : '';

                        // Dynamic Citations
                        $bibtex_citation = function_exists( 'shestco_get_publication_bibtex' ) ? shestco_get_publication_bibtex( $pub_id ) : '';
                        $ris_citation    = function_exists( 'shestco_get_publication_ris' ) ? shestco_get_publication_ris( $pub_id ) : '';
                    ?>
                <article
                    style="background: #ffffff; border: 1px solid var(--border-color); border-left: 5px solid var(--primary-color); border-radius: 8px; padding: 2rem; box-shadow: var(--shadow-sm);"
                    class="pub-card">

                    <div
                        style="display: flex; gap: 0.6rem; flex-wrap: wrap; margin-bottom: 0.75rem; align-items: center;">
                        <span
                            style="background: var(--primary-light); color: var(--primary-color); font-size: 0.78rem; font-weight: 800; padding: 0.2rem 0.6rem; border-radius: 4px;">
                            <?php echo esc_html( $pub_year ); ?>
                        </span>
                        <?php if ( ! empty( $centre_name ) ) : ?>
                        <span
                            style="background: #f1f5f9; color: var(--text-muted); font-size: 0.78rem; font-weight: 600; padding: 0.2rem 0.6rem; border-radius: 4px;">
                            🏛️ <?php echo esc_html( $centre_name ); ?>
                        </span>
                        <?php endif; ?>
                    </div>

                    <h2 style="font-size: 1.35rem; font-weight: 800; margin: 0 0 0.5rem 0; line-height: 1.35;">
                        <a href="<?php the_permalink(); ?>" style="color: var(--primary-dark); text-decoration: none;">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <p style="color: var(--primary-color); font-size: 0.9rem; font-weight: 600; margin: 0 0 0.75rem 0;">
                        ✍️ <?php echo esc_html( $authors ); ?>
                    </p>

                    <?php if ( ! empty( $journal ) ) : ?>
                    <p style="color: var(--text-muted); font-size: 0.88rem; font-style: italic; margin: 0 0 1rem 0;">
                        Published in: <?php echo esc_html( $journal ); ?>
                    </p>
                    <?php endif; ?>

                    <div style="color: var(--text-main); font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem;">
                        <?php echo wp_trim_words( get_the_excerpt(), 40 ); ?>
                    </div>

                    <!-- Action Links Toolbar -->
                    <div
                        style="display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; border-top: 1px solid var(--border-color); padding-top: 1.25rem;">
                        <div>
                            <?php if ( ! empty( $doi ) ) : 
                                        $doi_link = str_starts_with( $doi, 'http' ) ? $doi : 'https://doi.org/' . $doi;
                                    ?>
                            <a href="<?php echo esc_url( $doi_link ); ?>" target="_blank" rel="noopener noreferrer"
                                style="color: var(--text-muted); font-size: 0.85rem; font-family: monospace; text-decoration: none;">
                                🔗 <?php echo esc_html( $doi ); ?>
                            </a>
                            <?php endif; ?>
                        </div>

                        <div style="display: flex; gap: 0.5rem; flex-wrap: wrap;">
                            <a href="<?php the_permalink(); ?>"
                                style="background: var(--bg-light); border: 1px solid var(--border-color); color: var(--text-main); font-size: 0.85rem; font-weight: 700; padding: 0.5rem 0.9rem; border-radius: 6px; text-decoration: none;">
                                Abstract
                            </a>

                            <!-- Citation Export Modal Trigger -->
                            <button type="button" class="btn-cite-trigger"
                                data-title="<?php echo esc_attr( get_the_title() ); ?>"
                                data-bibtex="<?php echo esc_attr( $bibtex_citation ); ?>"
                                data-ris="<?php echo esc_attr( $ris_citation ); ?>">
                                💬 Cite
                            </button>

                            <?php if ( ! empty( $pdf_url ) ) : ?>
                            <!-- In-Browser PDF Preview Modal Trigger -->
                            <button type="button" class="btn-pdf-preview"
                                data-pdf-url="<?php echo esc_url( $pdf_url ); ?>"
                                data-pdf-title="<?php echo esc_attr( get_the_title() ); ?>">
                                👁️ Preview Paper
                            </button>

                            <!-- Direct PDF Download -->
                            <a href="<?php echo esc_url( $pdf_url ); ?>" download
                                style="background: var(--primary-color); color: #ffffff; font-size: 0.85rem; font-weight: 700; padding: 0.5rem 0.9rem; border-radius: 6px; text-decoration: none; display: inline-flex; align-items: center; gap: 4px;">
                                📥 Download
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>

                </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <div style="display: flex; justify-content: center; gap: 0.5rem;">
                <?php
                    echo paginate_links( array(
                        'total'     => $repo_query->max_num_pages,
                        'current'   => $paged,
                        'prev_text' => '&larr; Previous',
                        'next_text' => 'Next &rarr;',
                    ) );
                    ?>
            </div>

            <?php else : ?>
            <div
                style="background: var(--bg-light); border: 1px solid var(--border-color); border-radius: 8px; padding: 3.5rem; text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">🔍</div>
                <h3 style="color: var(--primary-dark); font-size: 1.35rem; margin: 0 0 0.5rem 0;">No Publications Match
                    Your Criteria</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin: 0 0 1.5rem 0;">Try broadening your
                    search keyword or clearing the research centre filter.</p>
                <a href="<?php echo esc_url( get_post_type_archive_link( 'publication' ) ); ?>" class="btn"
                    style="background: var(--primary-color); color: #fff; text-decoration: none; padding: 0.65rem 1.25rem; border-radius: 6px; font-weight: 600;">
                    Reset Repository Filters
                </a>
            </div>
            <?php endif; wp_reset_postdata(); ?>

        </div>
    </section>

</main>

<style>
@media screen and (max-width: 900px) {
    .pub-filter-form {
        grid-template-columns: 1fr 1fr !important;
    }
}

@media screen and (max-width: 600px) {
    .pub-filter-form {
        grid-template-columns: 1fr !important;
    }
}
</style>

<!-- =========================================================================
     1. FULLSCREEN PDF VIEWER MODAL CONTAINER
     ========================================================================= -->
<div id="pdf-viewer-modal" class="pdf-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true"
    style="display: none;">
    <div class="pdf-modal-container">

        <div class="pdf-modal-header">
            <div class="pdf-modal-title-wrap">
                <span class="pdf-modal-badge">PDF Viewer</span>
                <h3 id="pdf-modal-title" class="pdf-modal-title">Scientific Document Preview</h3>
            </div>

            <div class="pdf-modal-actions">
                <a id="pdf-modal-newtab-btn" href="#" target="_blank" rel="noopener noreferrer" class="pdf-modal-btn"
                    title="Open in New Tab">
                    ↗ Open Tab
                </a>
                <a id="pdf-modal-download-btn" href="#" download class="pdf-modal-btn pdf-modal-btn-download"
                    title="Download Document">
                    📥 Download
                </a>
                <button type="button" id="pdf-modal-close-btn" class="pdf-modal-btn-close"
                    aria-label="Close Preview">&times;</button>
            </div>
        </div>

        <div class="pdf-modal-body">
            <div id="pdf-modal-loader" class="pdf-modal-loader">
                <div class="pdf-modal-spinner"></div>
                <p>Loading document from repository...</p>
            </div>
            <iframe id="pdf-modal-iframe" class="pdf-modal-iframe" src="" frameborder="0"
                title="PDF Document Viewer"></iframe>
        </div>

    </div>
</div>

<!-- =========================================================================
     2. CITATION EXPORT MODAL CONTAINER
     ========================================================================= -->
<div id="citation-export-modal" class="cite-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true"
    style="display: none;">
    <div class="cite-modal-container">

        <div class="cite-modal-header">
            <div class="cite-modal-title-wrap">
                <span class="cite-modal-badge">Citation Export</span>
                <h3 id="cite-modal-paper-title" class="cite-modal-paper-title">Publication Citation</h3>
            </div>
            <button type="button" id="cite-modal-close-btn" class="cite-modal-btn-close"
                aria-label="Close Modal">&times;</button>
        </div>

        <div class="cite-modal-tabs">
            <button type="button" class="cite-tab-btn is-active" data-format="bibtex">BibTeX (.bib)</button>
            <button type="button" class="cite-tab-btn" data-format="ris">RIS / EndNote (.ris)</button>
        </div>

        <div class="cite-modal-body">
            <pre class="cite-code-pre"><code id="cite-code-display" class="cite-code-display"></code></pre>
        </div>

        <div class="cite-modal-footer">
            <div class="cite-toast-msg" id="cite-toast-msg">Copied to clipboard!</div>
            <div class="cite-modal-actions">
                <button type="button" id="btn-copy-citation" class="cite-btn-copy">
                    📋 Copy to Clipboard
                </button>
                <button type="button" id="btn-download-citation" class="cite-btn-download">
                    📥 Download File
                </button>
            </div>
        </div>

    </div>
</div>
<button type="button" class="btn-cite-trigger btn-modern-secondary"
    data-title="<?php echo esc_attr( get_the_title() ); ?>" data-bibtex="<?php echo esc_attr( $bibtex_citation ); ?>"
    data-ris="<?php echo esc_attr( $ris_citation ); ?>">
    💬 Cite
</button>

<?php if ( ! empty( $pdf_url ) ) : ?>
<button type="button" class="btn-pdf-preview btn-modern-primary" data-pdf-url="<?php echo esc_url( $pdf_url ); ?>"
    data-pdf-title="<?php echo esc_attr( get_the_title() ); ?>">
    👁️ Preview Paper
</button>
<?php endif; ?>

<?php
get_footer();