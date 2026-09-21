<?php
/**
 * Single Procurement Tender Template
 * File: single-procurement_tender.php
 *
 * @package NistcoTheme
 */

get_header();
?>

<main id="primary" class="site-main tender-single-container" style="max-width: 1200px; margin: 2rem auto; padding: 0 1.5rem;">
    <?php while ( have_posts() ) : the_post();
        $tender_ref     = get_post_meta( get_the_ID(), '_tender_reference_no', true );
        $closing_date   = get_post_meta( get_the_ID(), '_tender_closing_date', true );
        $tender_status  = get_post_meta( get_the_ID(), '_tender_status', true );
        $category       = get_post_meta( get_the_ID(), '_tender_category', true );
        $doc_url        = get_post_meta( get_the_ID(), '_tender_document_url', true );
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'tender-article entry-content' ); ?>>
            <header class="tender-header" style="border-bottom: 2px solid #e2e8f0; padding-bottom: 1.5rem; margin-bottom: 2rem;">
                <div class="tender-meta-top" style="display: flex; gap: 0.75rem; margin-bottom: 1rem; align-items: center; flex-wrap: wrap;">
                    <?php if ( ! empty( $tender_status ) ) : ?>
                        <span class="badge badge-status" style="background: #0D5C3A; color: #fff; padding: 0.35rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 600;"><?php echo esc_html( $tender_status ); ?></span>
                    <?php endif; ?>
                    <?php if ( ! empty( $category ) ) : ?>
                        <span class="badge badge-category" style="background: #1e293b; color: #f8fafc; padding: 0.35rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 500;"><?php echo esc_html( $category ); ?></span>
                    <?php endif; ?>
                </div>

                <h1 class="tender-title" style="font-size: 2.25rem; line-height: 1.25; margin-bottom: 1.5rem; color: #0f172a;"><?php the_title(); ?></h1>

                <div class="tender-dossier-bar" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.25rem;">
                    <?php if ( ! empty( $tender_ref ) ) : ?>
                        <div class="dossier-item">
                            <span class="label" style="display: block; font-size: 0.8rem; text-transform: uppercase; color: #64748b; font-weight: 600;">Tender Reference:</span>
                            <strong style="color: #0f172a; font-size: 1rem;"><?php echo esc_html( $tender_ref ); ?></strong>
                        </div>
                    <?php endif; ?>
                    <?php if ( ! empty( $closing_date ) ) : ?>
                        <div class="dossier-item">
                            <span class="label" style="display: block; font-size: 0.8rem; text-transform: uppercase; color: #64748b; font-weight: 600;">Submission Deadline:</span>
                            <strong style="color: #b91c1c; font-size: 1rem;"><?php echo esc_html( $closing_date ); ?></strong>
                        </div>
                    <?php endif; ?>
                    <?php if ( ! empty( $doc_url ) ) : ?>
                        <div class="dossier-item" style="display: flex; align-items: center;">
                            <a href="<?php echo esc_url( $doc_url ); ?>" target="_blank" rel="noopener" style="background: #0D5C3A; color: #fff; text-decoration: none; padding: 0.5rem 1rem; border-radius: 6px; font-weight: 600; font-size: 0.9rem;">Download Tender Dossier (PDF)</a>
                        </div>
                    <?php endif; ?>
                </div>
            </header>

            <div class="tender-body" style="font-size: 1.125rem; line-height: 1.8; color: #334155; margin-bottom: 2.5rem;">
                <h2 style="font-size: 1.4rem; color: #0f172a; margin-bottom: 0.75rem;">Scope of Works / Technical Requirements</h2>
                <?php the_content(); ?>
            </div>

            <footer class="tender-footer" style="background: #fffbeb; border: 1px solid #fef3c7; border-radius: 8px; padding: 1.5rem; margin-top: 2.5rem;">
                <h3 style="margin-top: 0; color: #92400e; font-size: 1.15rem;">BPP Compliance & Submission Notice</h3>
                <p style="margin: 0; font-size: 0.95rem; line-height: 1.6; color: #78350f;">All bids must adhere to the Public Procurement Act and statutory requirements of the Bureau of Public Procurement (BPP). Late bids will be rejected at public opening.</p>
            </footer>
        </article>
    <?php endwhile; ?>
</main>

<?php
get_footer();
