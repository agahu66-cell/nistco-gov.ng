<?php
/**
 * Single Patent & Intellectual Property Template
 * File: single-patent.php
 *
 * @package NistcoTheme
 */

get_header();
?>

<main id="primary" class="site-main patent-single-container" style="max-width: 1200px; margin: 2rem auto; padding: 0 1.5rem;">
    <?php while ( have_posts() ) : the_post();
        $notap_ref   = get_post_meta( get_the_ID(), '_patent_notap_ref', true );
        $trl         = get_post_meta( get_the_ID(), '_patent_trl', true );
        $discipline  = get_post_meta( get_the_ID(), '_patent_discipline', true );
        $licensing   = get_post_meta( get_the_ID(), '_patent_licensing_model', true );
        $comm_status = get_post_meta( get_the_ID(), '_patent_commercial_status', true );
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'patent-article entry-content' ); ?>>
            <header class="patent-header" style="border-bottom: 2px solid #e2e8f0; padding-bottom: 1.5rem; margin-bottom: 2rem;">
                <div class="patent-meta-top" style="display: flex; gap: 0.75rem; margin-bottom: 1rem; align-items: center;">
                    <?php if ( ! empty( $trl ) ) : ?>
                        <span class="badge badge-trl" style="background: #0f766e; color: #fff; padding: 0.35rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 600;"><?php echo esc_html( $trl ); ?></span>
                    <?php endif; ?>
                    <?php if ( ! empty( $comm_status ) ) : ?>
                        <span class="badge badge-status" style="background: #1e293b; color: #f8fafc; padding: 0.35rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 500;"><?php echo esc_html( $comm_status ); ?></span>
                    <?php endif; ?>
                </div>

                <h1 class="patent-title" style="font-size: 2.25rem; line-height: 1.25; margin-bottom: 1.5rem; color: #0f172a;"><?php the_title(); ?></h1>

                <div class="patent-dossier-bar" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.25rem;">
                    <?php if ( ! empty( $notap_ref ) ) : ?>
                        <div class="dossier-item">
                            <span class="label" style="display: block; font-size: 0.8rem; text-transform: uppercase; color: #64748b; font-weight: 600;">NOTAP Reference:</span>
                            <strong style="color: #0f172a; font-size: 1rem;"><?php echo esc_html( $notap_ref ); ?></strong>
                        </div>
                    <?php endif; ?>
                    <?php if ( ! empty( $discipline ) ) : ?>
                        <div class="dossier-item">
                            <span class="label" style="display: block; font-size: 0.8rem; text-transform: uppercase; color: #64748b; font-weight: 600;">Originating Centre:</span>
                            <strong style="color: #0f172a; font-size: 1rem;"><?php echo esc_html( $discipline ); ?></strong>
                        </div>
                    <?php endif; ?>
                    <?php if ( ! empty( $licensing ) ) : ?>
                        <div class="dossier-item">
                            <span class="label" style="display: block; font-size: 0.8rem; text-transform: uppercase; color: #64748b; font-weight: 600;">Licensing Model:</span>
                            <strong style="color: #0f172a; font-size: 1rem;"><?php echo esc_html( $licensing ); ?></strong>
                        </div>
                    <?php endif; ?>
                </div>
            </header>

            <div class="patent-body" style="font-size: 1.125rem; line-height: 1.75; color: #334155; margin-bottom: 2.5rem;">
                <?php the_content(); ?>
            </div>

            <footer class="patent-footer" style="margin-top: 3rem;">
                <div class="commercial-inquiry-box" style="background: #f0fdf4; border: 1px solid #bbf7d0; border-radius: 8px; padding: 1.75rem; text-align: left;">
                    <h3 style="margin-top: 0; color: #166534; font-size: 1.25rem;">Commercialization & Technology Transfer</h3>
                    <p style="color: #15803d; margin-bottom: 1.25rem;">For licensing opportunities, joint industrial piloting, or proprietary tech queries regarding this asset, contact the NISTCO Innovation & Technology Transfer Office.</p>
                    <a href="/innovation-technology-transfer/" class="btn btn-primary" style="display: inline-block; background: #15803d; color: #fff; text-decoration: none; padding: 0.65rem 1.25rem; border-radius: 6px; font-weight: 600;">Initiate Licensing Inquiry</a>
                </div>
            </footer>
        </article>
    <?php endwhile; ?>
</main>

<?php
get_footer();
