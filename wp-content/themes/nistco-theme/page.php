<?php
/**
 * NASTCO Standard Page Node
 * Fallback architecture for basic pages (About, Privacy Protocol, etc.)
 */
get_header(); ?>

<style>
/* ==========================================================================
   STANDARD PAGE TERMINAL (INLINE CACHE-BYPASS)
   ========================================================================== */
.standard-page-container {
    max-width: 1000px;
    margin: 0 auto;
    padding: 4rem 2rem 8rem 2rem;
    min-height: 65vh;
}

.page-telemetry-tag {
    font-family: 'Courier New', monospace;
    font-size: 0.8rem;
    color: #00d285;
    letter-spacing: 2px;
    display: inline-block;
    margin-bottom: 1rem;
}

.page-title-terminal {
    font-size: 3rem;
    font-weight: 900;
    color: #ffffff;
    text-transform: uppercase;
    letter-spacing: 2px;
    border-bottom: 1px solid rgba(0, 210, 133, 0.3);
    padding-bottom: 1.5rem;
    margin: 0 0 2.5rem 0;
}

.page-content-matrix {
    color: #94a3b8;
    font-size: 1.05rem;
    line-height: 1.8;
    background: rgba(15, 23, 42, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-radius: 8px;
    padding: 3rem;
    backdrop-filter: blur(10px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.4);
}

.page-content-matrix h2, .page-content-matrix h3 {
    color: #38bdf8;
    margin-top: 2.5rem;
    margin-bottom: 1rem;
    font-weight: 800;
    letter-spacing: 1px;
}

.page-content-matrix a {
    color: #00d285;
    text-decoration: none;
    border-bottom: 1px dashed rgba(0, 210, 133, 0.5);
    transition: all 0.3s ease;
}

.page-content-matrix a:hover {
    color: #ffffff;
    border-bottom-style: solid;
}
</style>

<main id="main-content" style="background-color: #020617; background-image: linear-gradient(rgba(0, 210, 133, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 210, 133, 0.03) 1px, transparent 1px); background-size: 40px 40px;">
    <div class="standard-page-container">
        <?php while ( have_posts() ) : the_post(); ?>
            
            <span class="page-telemetry-tag">[SECTOR_DATA: <?php echo strtoupper( get_post_field( 'post_name' ) ); ?>]</span>
            <h1 class="page-title-terminal"><?php the_title(); ?></h1>
            
            <div class="page-content-matrix">
                <?php the_content(); ?>
            </div>

        <?php endwhile; ?>
    </div>
</main>

<?php get_footer(); ?>
