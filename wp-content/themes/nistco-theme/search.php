<?php
/**
 * NASTCO Search Results Node
 * Displays queried intelligence and data assets.
 */
get_header(); ?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/nastco-core.css' ); ?>">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/search.css' ); ?>">

<!-- Forced Tactical Slate Background Override -->
<main id="main-content" style="background-color: #020617; min-height: 100vh; background-image: linear-gradient(rgba(0, 210, 133, 0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 210, 133, 0.04) 1px, transparent 1px); background-size: 40px 40px;">

    <!-- 1. HERO SECTION -->
    <section class="search-hero cn-reveal-group">
        <div class="ventures-container">
            
            <div class="ops-badge-3d cn-cascade" style="border-color:#38bdf8; color:#38bdf8; background:rgba(56, 189, 248, 0.1);">
                <span>🔍</span> Query Terminal
            </div>

            <h1 class="ventures-title text-3d-deep cn-cascade" style="font-size:3rem; color:#fff;">
                System Query: <span style="color:#00d285; text-shadow:0 0 20px rgba(0,210,133,0.4);"><?php echo get_search_query(); ?></span>
            </h1>
            
            <!-- Secondary Search Bar -->
            <form role="search" method="get" class="terminal-search-form cn-cascade" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <input type="search" class="terminal-search-input" placeholder="Execute new query..." value="<?php echo get_search_query(); ?>" name="s" required />
                <button type="submit" class="terminal-search-btn">Scan Records</button>
            </form>
            
        </div>
    </section>

    <!-- 2. DATA CARDS GRID -->
    <section class="search-results-section">
        <div class="ventures-container">
            <div class="search-grid cn-reveal-group" style="transform-style: preserve-3d;">
                
                <?php if ( have_posts() ) : ?>
                    <?php while ( have_posts() ) : the_post(); 
                        $post_type_label = get_post_type() === 'nastco_resource' ? 'Data Asset' : (get_post_type() === 'page' ? 'Core Node' : 'Intelligence');
                    ?>
                        
                        <div class="result-card cn-cascade">
                            <div class="result-meta">
                                Classification: <span class="highlight"><?php echo esc_html($post_type_label); ?></span>
                            </div>
                            <h3 class="result-title"><?php the_title(); ?></h3>
                            <div class="result-excerpt">
                                <?php echo wp_trim_words( get_the_excerpt() ?: get_the_content(), 20, '...' ); ?>
                            </div>
                            <a href="<?php the_permalink(); ?>" class="btn-read-more">Access Record</a>
                        </div>

                    <?php endwhile; ?>
                    
                    <!-- Basic Pagination -->
                    <div style="grid-column: 1 / -1; display: flex; justify-content: space-between; margin-top: 2rem; transform: translateZ(20px);">
                        <?php previous_posts_link( '<span style="color:#38bdf8; font-weight:bold;">← Previous Sector</span>' ); ?>
                        <?php next_posts_link( '<span style="color:#38bdf8; font-weight:bold;">Next Sector →</span>' ); ?>
                    </div>

                <?php else : ?>
                    
                    <div class="no-results-terminal cn-cascade">
                        <h3>⚠️ DATA NOT FOUND</h3>
                        <p>The queried designation "<?php echo get_search_query(); ?>" does not match any secure protocols, personnel files, or data assets on the NASTCO server.</p>
                        <p style="margin-top:1rem; opacity:0.6;">Check operational clearance or verify query syntax.</p>
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </section>

</main>

<script src="<?php echo esc_url( get_template_directory_uri() . '/assets/js/nastco-core.js' ); ?>"></script>

<?php get_footer(); ?>
