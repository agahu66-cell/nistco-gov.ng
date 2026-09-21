<?php
/**
 * Single Post Template for News, Bulletins & Circulars
 * File: single.php
 */

get_header();

while ( have_posts() ) : the_post();
?>

<main class="site-main container" style="padding: 3.5rem 1.5rem; max-width: 860px; margin: 0 auto;">

    <!-- Breadcrumbs -->
    <nav aria-label="Breadcrumbs" style="margin-bottom: 1.5rem; font-size: 0.88rem; color: var(--text-muted);">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
            style="color: var(--primary-color); text-decoration: none;">Home</a>
        <span style="margin: 0 0.4rem;">&rsaquo;</span>
        <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>"
            style="color: var(--primary-color); text-decoration: none;">Media & News</a>
    </nav>

    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header style="margin-bottom: 2.5rem; border-bottom: 2px solid var(--border-color); padding-bottom: 1.75rem;">
            <div style="display: flex; gap: 0.65rem; align-items: center; margin-bottom: 1rem; flex-wrap: wrap;">
                <span
                    style="background: var(--primary-light); color: var(--primary-color); font-size: 0.8rem; font-weight: 800; padding: 0.2rem 0.65rem; border-radius: 4px;">
                    <?php echo esc_html( get_the_date( 'F j, Y' ) ); ?>
                </span>
                <span style="color: var(--text-muted); font-size: 0.85rem;">
                    Issued by:
                    <strong><?php echo esc_html( get_the_author() ?: 'Corporate Affairs Secretariat' ); ?></strong>
                </span>
            </div>

            <h1
                style="font-size: clamp(2rem, 4.5vw, 2.8rem); color: var(--primary-dark); font-weight: 800; line-height: 1.25; margin: 0 0 1.25rem 0;">
                <?php the_title(); ?>
            </h1>

            <?php if ( has_excerpt() ) : ?>
            <p style="font-size: 1.15rem; line-height: 1.7; color: var(--text-muted); margin: 0; font-style: italic;">
                <?php echo esc_html( get_the_excerpt() ); ?>
            </p>
            <?php endif; ?>
        </header>

        <?php if ( has_post_thumbnail() ) : ?>
        <div
            style="margin-bottom: 2.5rem; border-radius: 8px; overflow: hidden; border: 1px solid var(--border-color);">
            <?php the_post_thumbnail( 'large', array( 'style' => 'width:100%; height:auto; display:block;' ) ); ?>
        </div>
        <?php endif; ?>

        <!-- Post Body -->
        <div class="entry-content"
            style="font-size: 1.1rem; line-height: 1.85; color: var(--text-main); margin-bottom: 3.5rem;">
            <?php the_content(); ?>
        </div>

        <!-- Post Footer -->
        <footer
            style="border-top: 1px solid var(--border-color); padding-top: 1.5rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem;">
            <a href="<?php echo esc_url( home_url( '/news/' ) ); ?>"
                style="color: var(--primary-color); font-weight: 700; text-decoration: none;">
                &larr; Back to News & Media Statements
            </a>
            <button type="button" onclick="window.print()"
                style="background: var(--bg-light); border: 1px solid var(--border-color); color: var(--primary-dark); padding: 0.5rem 1rem; border-radius: 6px; font-weight: 700; cursor: pointer;">
                🖨️ Print Statement
            </button>
        </footer>

    </article>

</main>

<?php
endwhile;
get_footer();