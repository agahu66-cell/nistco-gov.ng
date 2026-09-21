<?php
/**
 * Single Advanced Research Centre Template
 * File: single-research_centre.php
 *
 * @package NistcoTheme
 */

get_header();
?>

<main id="primary" class="site-main centre-single-container" style="max-width: 1200px; margin: 2rem auto; padding: 0 1.5rem;">
    <?php while ( have_posts() ) : the_post();
        $acronym    = get_post_meta( get_the_ID(), '_centre_acronym', true );
        $head_name  = get_post_meta( get_the_ID(), '_centre_director', true );
        $facilities = get_post_meta( get_the_ID(), '_centre_facilities', true );
        $contact_em = get_post_meta( get_the_ID(), '_centre_contact_email', true );
    ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class( 'centre-article entry-content' ); ?>>
            <header class="centre-header" style="border-bottom: 2px solid #e2e8f0; padding-bottom: 1.5rem; margin-bottom: 2rem;">
                <div class="centre-meta-top" style="display: flex; gap: 0.75rem; margin-bottom: 1rem; align-items: center;">
                    <?php if ( ! empty( $acronym ) ) : ?>
                        <span class="badge badge-acronym" style="background: #0D5C3A; color: #fff; padding: 0.35rem 0.85rem; border-radius: 9999px; font-size: 0.9rem; font-weight: 700;"><?php echo esc_html( $acronym ); ?></span>
                    <?php endif; ?>
                    <span class="badge badge-unit" style="background: #1e293b; color: #f8fafc; padding: 0.35rem 0.75rem; border-radius: 9999px; font-size: 0.875rem; font-weight: 500;">Advanced Research Centre</span>
                </div>

                <h1 class="centre-title" style="font-size: 2.25rem; line-height: 1.25; margin-bottom: 1.5rem; color: #0f172a;"><?php the_title(); ?></h1>

                <div class="centre-dossier-bar" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.25rem;">
                    <?php if ( ! empty( $head_name ) ) : ?>
                        <div class="dossier-item">
                            <span class="label" style="display: block; font-size: 0.8rem; text-transform: uppercase; color: #64748b; font-weight: 600;">Centre Director / Head:</span>
                            <strong style="color: #0f172a; font-size: 1rem;"><?php echo esc_html( $head_name ); ?></strong>
                        </div>
                    <?php endif; ?>
                    <?php if ( ! empty( $contact_em ) ) : ?>
                        <div class="dossier-item">
                            <span class="label" style="display: block; font-size: 0.8rem; text-transform: uppercase; color: #64748b; font-weight: 600;">Desk Contact:</span>
                            <a href="mailto:<?php echo esc_attr( $contact_em ); ?>" style="color: #0D5C3A; font-weight: 600; text-decoration: none;"><?php echo esc_html( $contact_em ); ?></a>
                        </div>
                    <?php endif; ?>
                </div>
            </header>

            <div class="centre-body" style="font-size: 1.125rem; line-height: 1.8; color: #334155; margin-bottom: 2.5rem;">
                <h2 style="font-size: 1.4rem; color: #0f172a; margin-bottom: 0.75rem;">Mandate & Core Research Focus</h2>
                <?php the_content(); ?>
            </div>

            <?php if ( ! empty( $facilities ) ) : ?>
                <div class="centre-facilities" style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 8px; padding: 1.5rem; margin-bottom: 2.5rem;">
                    <h3 style="font-size: 1.25rem; color: #0f172a; margin-top: 0; margin-bottom: 0.75rem;">Specialized Laboratories & Equipment</h3>
                    <p style="margin: 0; line-height: 1.7; color: #475569;"><?php echo nl2br( esc_html( $facilities ) ); ?></p>
                </div>
            <?php endif; ?>
        </article>
    <?php endwhile; ?>
</main>

<?php
get_footer();
