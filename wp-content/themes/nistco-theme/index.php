<?php
/**
 * Main Fallback Template & News/Press Release Archive
 * File: index.php
 */

get_header();
?>

<main class="site-main">

    <!-- HERO HEADER -->
    <section class="about-hero"
        style="background: linear-gradient(135deg, var(--primary-dark) 0%, #0c3e27 100%); padding: clamp(3.5rem, 6vw, 4.5rem) 1.5rem; border-bottom: 4px solid var(--accent-gold);">
        <div class="container">
            <div style="max-width: 880px;">
                <span
                    style="display: inline-block; background: rgba(255,255,255,0.12); color: #86efac; padding: 0.35rem 0.9rem; border-radius: 9999px; font-size: 0.82rem; font-weight: 800; text-transform: uppercase; letter-spacing: 0.75px; margin-bottom: 1.25rem;">
                    Official Media & Press
                </span>
                <h1
                    style="font-size: clamp(2.2rem, 5vw, 3rem); font-weight: 800; line-height: 1.2; margin: 0 0 1rem 0; color: #ffffff;">
                    News, Circulars & Media Statements
                </h1>
                <p style="font-size: 1.12rem; line-height: 1.7; color: #e5e7eb; margin: 0;">
                    Official updates, research breakthroughs, technology incubation milestones, and institutional press
                    releases from the Sheda Science and Technology Complex.
                </p>
            </div>
        </div>
    </section>

    <!-- LISTINGS -->
    <section style="padding: 5rem 1.5rem; background: #ffffff;">
        <div class="container">

            <?php if ( have_posts() ) : ?>
            <div
                style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2rem; margin-bottom: 3.5rem;">
                <?php while ( have_posts() ) : the_post(); ?>
                <article
                    style="background: #ffffff; border: 1px solid var(--border-color); border-radius: 8px; overflow: hidden; box-shadow: var(--shadow-sm); display: flex; flex-direction: column; transition: var(--transition);">

                    <?php if ( has_post_thumbnail() ) : ?>
                    <div style="width: 100%; height: 210px; overflow: hidden;">
                        <?php the_post_thumbnail( 'centre-card', array( 'style' => 'width:100%; height:100%; object-fit:cover;' ) ); ?>
                    </div>
                    <?php endif; ?>

                    <div style="padding: 1.75rem; display: flex; flex-direction: column; flex-grow: 1;">
                        <div style="display: flex; gap: 0.5rem; align-items: center; margin-bottom: 0.65rem;">
                            <span
                                style="background: var(--primary-light); color: var(--primary-color); font-size: 0.75rem; font-weight: 800; padding: 0.15rem 0.55rem; border-radius: 4px;">
                                <?php echo esc_html( get_the_date( 'M j, Y' ) ); ?>
                            </span>
                        </div>

                        <h2 style="font-size: 1.25rem; font-weight: 800; margin: 0 0 0.75rem 0; line-height: 1.35;">
                            <a href="<?php the_permalink(); ?>"
                                style="color: var(--primary-dark); text-decoration: none;">
                                <?php the_title(); ?>
                            </a>
                        </h2>

                        <p
                            style="color: var(--text-muted); font-size: 0.9rem; line-height: 1.6; margin: 0 0 1.25rem 0; flex-grow: 1;">
                            <?php echo wp_trim_words( get_the_excerpt(), 22 ); ?>
                        </p>

                        <a href="<?php the_permalink(); ?>"
                            style="color: var(--primary-color); font-weight: 700; font-size: 0.88rem; text-decoration: none;">
                            Read Full Statement &rarr;
                        </a>
                    </div>

                </article>
                <?php endwhile; ?>
            </div>

            <div style="display: flex; justify-content: center; gap: 0.5rem;">
                <?php
                    echo paginate_links( array(
                        'prev_text' => '&larr; Previous',
                        'next_text' => 'Next &rarr;',
                    ) );
                    ?>
            </div>

            <?php else : ?>
            <div
                style="background: var(--bg-light); border: 1px solid var(--border-color); border-radius: 8px; padding: 3.5rem; text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">📰</div>
                <h3 style="color: var(--primary-dark); font-size: 1.35rem; margin: 0 0 0.5rem 0;">No Media Bulletins
                    Found</h3>
                <p style="color: var(--text-muted); font-size: 0.95rem; margin: 0 0 1.5rem 0;">Press statements and
                    circulars will be published here.</p>
            </div>
            <?php endif; ?>

        </div>
    </section>

</main>

<?php
get_footer();