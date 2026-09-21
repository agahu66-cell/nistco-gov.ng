<?php
/**
 * Archive Template: Patents & Intellectual Property
 * File: archive-patent.php
 *
 * @package NistcoTheme
 */

get_header();
?>

<main id="primary" class="site-main patents-archive-container" style="max-width: 1200px; margin: 2.5rem auto; padding: 0 1.5rem;">
    <header class="archive-header" style="border-bottom: 2px solid #e2e8f0; padding-bottom: 1.5rem; margin-bottom: 2.5rem;">
        <div style="display: flex; justify-content: space-between; align-items: flex-end; flex-wrap: wrap; gap: 1rem;">
            <div>
                <span class="badge" style="background: #0D5C3A; color: #fff; padding: 0.35rem 0.85rem; border-radius: 9999px; font-size: 0.85rem; font-weight: 700; text-transform: uppercase;">Intellectual Property Portfolio</span>
                <h1 class="archive-title" style="font-size: 2.25rem; color: #0f172a; margin: 0.75rem 0 0.5rem 0;">Patented Technologies & Inventions</h1>
                <p style="color: #64748b; font-size: 1.05rem; margin: 0;">Certified research inventions, industrial formulations, and technology assets available for commercial licensing.</p>
            </div>
        </div>
    </header>

    <div class="patents-grid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 1.75rem;">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
            $trl          = get_post_meta( get_the_ID(), '_patent_trl', true );
            $notap_ref    = get_post_meta( get_the_ID(), '_patent_notap_ref', true );
            $status       = get_post_meta( get_the_ID(), '_patent_commercial_status', true );
            $discipline   = get_post_meta( get_the_ID(), '_patent_discipline', true );
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class( 'patent-card' ); ?> style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.5rem; display: flex; flex-direction: column; justify-content: space-between; box-shadow: 0 1px 3px rgba(0,0,0,0.05);">
                <div>
                    <div class="card-meta-top" style="display: flex; gap: 0.5rem; margin-bottom: 0.85rem; flex-wrap: wrap;">
                        <?php if ( ! empty( $trl ) ) : ?>
                            <span class="badge" style="background: #0f766e; color: #ffffff; padding: 0.25rem 0.65rem; border-radius: 9999px; font-size: 0.78rem; font-weight: 600;"><?php echo esc_html( $trl ); ?></span>
                        <?php endif; ?>
                        <?php if ( ! empty( $status ) ) : ?>
                            <span class="badge" style="background: #1e293b; color: #f8fafc; padding: 0.25rem 0.65rem; border-radius: 9999px; font-size: 0.78rem; font-weight: 500;"><?php echo esc_html( $status ); ?></span>
                        <?php endif; ?>
                    </div>

                    <h2 class="card-title" style="font-size: 1.25rem; line-height: 1.4; margin: 0 0 0.75rem 0;">
                        <a href="<?php the_permalink(); ?>" style="color: #0f172a; text-decoration: none;"><?php the_title(); ?></a>
                    </h2>

                    <?php if ( ! empty( $discipline ) ) : ?>
                        <div style="font-size: 0.88rem; color: #475569; margin-bottom: 1rem;">
                            <strong>Centre:</strong> <?php echo esc_html( $discipline ); ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="card-footer" style="border-top: 1px solid #f1f5f9; padding-top: 1rem; margin-top: 1rem; display: flex; justify-content: space-between; align-items: center;">
                    <?php if ( ! empty( $notap_ref ) ) : ?>
                        <span style="font-size: 0.82rem; color: #64748b; font-family: monospace; font-weight: 600;"><?php echo esc_html( $notap_ref ); ?></span>
                    <?php endif; ?>
                    <a href="<?php the_permalink(); ?>" style="color: #0D5C3A; font-weight: 600; font-size: 0.9rem; text-decoration: none;">View Dossier &rarr;</a>
                </div>
            </article>
        <?php endwhile; else : ?>
            <p style="grid-column: 1 / -1; color: #64748b;">No patent assets found in this category.</p>
        <?php endif; ?>
    </div>
</main>

<?php
get_footer();
