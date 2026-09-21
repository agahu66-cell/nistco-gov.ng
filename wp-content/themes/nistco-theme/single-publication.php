<?php
/**
 * Single Publication Template
 * File: single-publication.php
 *
 * @package NistcoTheme
 */

get_header();
?>

<main id="primary" class="site-main publication-single-container" style="max-width: 1200px; margin: 2rem auto; padding: 0 1.5rem;">
    <?php while ( have_posts() ) : the_post();
        $authors  = get_post_meta( get_the_ID(), '_publication_authors', true );
        $journal  = get_post_meta( get_the_ID(), '_publication_journal', true );
        $year     = get_post_meta( get_the_ID(), '_publication_year', true );
        $doi      = get_post_meta( get_the_ID(), '_publication_doi', true );
        $centre   = get_post_meta( get_the_ID(), '_publication_centre', true );
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'publication-article entry-content' ); ?>>
            <header class="publication-header" style="border-bottom: 2px solid #e2e8f0; padding-bottom: 1.5rem; margin-bottom: 2rem;">
                <div class="publication-meta-top" style="display: flex; gap: 0.75rem; margin-bottom: 1rem; align-items: center; flex-wrap: wrap;">
                    <?php if ( ! empty( $centre ) ) : ?>
                        <span class="badge badge-centre" style="background: #0f766e; color: #fff; padding: 0.35rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 600;"><?php echo esc_html( $centre ); ?></span>
                    <?php endif; ?>
                    <?php if ( ! empty( $year ) ) : ?>
                        <span class="badge badge-year" style="background: #1e293b; color: #f8fafc; padding: 0.35rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 500;"><?php echo esc_html( $year ); ?></span>
                    <?php endif; ?>
                </div>

                <h1 class="publication-title" style="font-size: 2.25rem; line-height: 1.25; margin-bottom: 1rem; color: #0f172a;"><?php the_title(); ?></h1>

                <?php if ( ! empty( $authors ) ) : ?>
                    <div class="publication-authors" style="font-size: 1.1rem; color: #475569; margin-bottom: 1.25rem; font-weight: 500;">
                        <?php echo esc_html( $authors ); ?>
                    </div>
                <?php endif; ?>

                <div class="publication-meta-bar" style="display: flex; flex-wrap: wrap; gap: 1.5rem; align-items: center; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1rem 1.25rem; margin-bottom: 1.5rem;">
                    <?php if ( ! empty( $journal ) ) : ?>
                        <div class="meta-item">
                            <span style="font-size: 0.8rem; text-transform: uppercase; color: #64748b; font-weight: 600; display: block;">Journal</span>
                            <strong style="color: #0f172a;"><?php echo esc_html( $journal ); ?></strong>
                        </div>
                    <?php endif; ?>
                    <?php if ( ! empty( $doi ) ) : ?>
                        <div class="meta-item">
                            <span style="font-size: 0.8rem; text-transform: uppercase; color: #64748b; font-weight: 600; display: block;">Digital Object Identifier</span>
                            <a href="https://doi.org/<?php echo esc_attr( $doi ); ?>" target="_blank" rel="noopener" style="color: #0f766e; font-weight: 600; text-decoration: none;">doi:<?php echo esc_html( $doi ); ?></a>
                        </div>
                    <?php endif; ?>
                    <div class="meta-item-action" style="margin-left: auto;">
                        <button type="button" class="btn btn-cite-trigger" data-post-id="<?php the_ID(); ?>" style="background: #0D5C3A; color: #ffffff; border: none; padding: 0.65rem 1.25rem; border-radius: 6px; font-weight: 600; cursor: pointer; display: inline-flex; align-items: center; gap: 0.5rem;">
                            <span>&quot;</span> Cite Article / Export
                        </button>
                    </div>
                </div>
            </header>

            <div class="publication-abstract" style="margin-bottom: 2.5rem;">
                <h2 style="font-size: 1.35rem; color: #0f172a; margin-bottom: 0.75rem;">Abstract</h2>
                <div class="abstract-content" style="font-size: 1.1rem; line-height: 1.8; color: #334155;">
                    <?php the_content(); ?>
                </div>
            </div>
        </article>
    <?php endwhile; ?>
</main>

<?php
get_footer();
