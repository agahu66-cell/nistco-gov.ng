<?php
/**
 * NASTCO 404 Error Node
 * Displays tactical glitch interface for missing coordinates.
 */
get_header(); ?>

<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/nastco-core.css' ); ?>">
<link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() . '/assets/css/404.css' ); ?>">

<!-- Forced Tactical Slate Background Override -->
<main id="main-content" style="background-color: #020617; min-height: 100vh; background-image: linear-gradient(rgba(0, 210, 133, 0.04) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 210, 133, 0.04) 1px, transparent 1px); background-size: 40px 40px; overflow: hidden;">

    <section class="error-hero cn-reveal-group">
        <div class="ventures-container" style="transform-style: preserve-3d;">
            
            <div class="glitch-wrapper cn-cascade">
                <h1 class="glitch-text" data-text="404">404</h1>
            </div>

            <h2 class="error-subtitle cn-cascade">Restricted Sector</h2>
            
            <p class="error-desc cn-cascade">
                FATAL EXCEPTION: The operational coordinates you are attempting to access do not exist, have been expunged, or require elevated clearance levels.
            </p>
            
            <div class="cn-cascade">
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn-retreat">
                    <span>←</span> Return to Operations Command
                </a>
            </div>
            
        </div>
    </section>

</main>

<script src="<?php echo esc_url( get_template_directory_uri() . '/assets/js/nastco-core.js' ); ?>"></script>

<?php get_footer(); ?>
