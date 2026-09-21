<?php
/**
 * Default Page Template
 * Description: Clean, modern layout for general WordPress standard pages, featuring active telemetry hero, breadcrumbs, scannable typography, and full block alignment support.
 * File: page.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();
?>

<main class="site-main mc-homepage">

    <?php while ( have_posts() ) : the_post(); ?>

    <!-- =========================================================================
         1. HERO BANNER: ACTIVE KINETIC TITLE SHIELD
         ========================================================================= -->
    <section class="mc-hero-section" style="padding: clamp(3.5rem, 5vw, 5rem) 1.5rem 4rem 1.5rem;">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container">
            <div class="mc-hero-grid" style="align-items: center;">

                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current"><?php the_title(); ?></span>
                    </nav>

                    <h1 class="mc-hero-title" style="font-size: clamp(2rem, 4vw, 2.8rem);">
                        <?php the_title(); ?>
                    </h1>

                    <?php if ( has_excerpt() ) : ?>
                    <p class="mc-hero-subtitle" style="margin-bottom: 0;">
                        <?php echo esc_html( get_the_excerpt() ); ?>
                    </p>
                    <?php endif; ?>
                </div>

                <!-- ACTIVE MOTION SVG (Page Context Kinetic Shield) -->
                <div class="about-3d-viewport" style="min-height: 240px;">
                    <div class="about-3d-stage" style="width: 240px; height: 240px;">
                        <svg class="mc-active-svg-canvas" viewBox="0 0 240 240" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <defs>
                                <linearGradient id="pageShieldGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#86efac" />
                                    <stop offset="50%" stop-color="#059669" />
                                    <stop offset="100%" stop-color="#042416" />
                                </linearGradient>
                            </defs>
                            <circle cx="120" cy="120" r="100" fill="none" stroke="url(#pageShieldGrad)" stroke-width="2"
                                class="svg-rot-cw-slow" />
                            <polygon points="120,30 200,75 200,165 120,210 40,165 40,75" fill="none" stroke="#fde047"
                                stroke-width="1.5" stroke-dasharray="6 4" class="svg-rot-ccw-mid" />
                            <circle cx="120" cy="120" r="18" fill="#042416" stroke="#86efac" stroke-width="2.5"
                                class="svg-pulse-core" />
                        </svg>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. PAGE BODY CONTENT
         ========================================================================= -->
    <section class="mc-section mc-bg-white">
        <div class="container"
            style="max-width: 900px; margin: 0 auto; font-size: 1.05rem; line-height: 1.85; color: var(--mc-text-main);">

            <?php if ( has_post_thumbnail() ) : ?>
            <div style="margin-bottom: 2.5rem; border-radius: 10px; overflow: hidden; box-shadow: var(--mc-shadow-md);">
                <?php the_post_thumbnail( 'full', array( 'style' => 'width:100%; height:auto; display:block;' ) ); ?>
            </div>
            <?php endif; ?>

            <div class="entry-content">
                <?php
                the_content();

                wp_link_pages( array(
                    'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'shestco-theme' ),
                    'after'  => '</div>',
                ) );
                ?>
            </div>

        </div>
    </section>

    <?php endwhile; ?>

</main>

<?php
get_footer();