<?php
/**
 * Template Name: Commercial Ventures Marketplace
 * Description: Marketplace page template for NISTCO commercialized research products.
 */

get_header();

global $wpdb;
$table_name = $wpdb->prefix . 'nistco_commercial_inventory';
?>

<main id="primary" class="site-main">
    <section class="nistco-section" style="padding: 4rem 0; background: linear-gradient(135deg, #042416 0%, #0d5c36 100%); color: #fff;">
        <div class="nistco-container" style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <span style="color: #d97706; text-transform: uppercase; letter-spacing: 2px; font-weight: 600; font-size: 0.85rem;">Technology Transfer & Marketplace</span>
            <h1 style="font-size: 2.75rem; margin-top: 0.5rem; margin-bottom: 1rem;">NISTCO Commercial Ventures</h1>
            <p style="color: #d1d5db; max-width: 700px; font-size: 1.125rem; line-height: 1.6;">
                Discover commercialized research outputs, patented technologies, and innovative products developed across our advanced research centres.
            </p>
        </div>
    </section>

    <section class="nistco-section" style="padding: 5rem 0; background: #f8fafc;">
        <div class="nistco-container" style="max-width: 1280px; margin: 0 auto; padding: 0 2rem;">
            <?php
            $args = array(
                'post_type'      => 'nistco_venture',
                'posts_per_page' => 12,
                'post_status'    => 'publish',
            );
            $ventures_query = new WP_Query( $args );

            if ( $ventures_query->have_posts() ) :
            ?>
                <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 2.5rem;">
                    <?php 
                    while ( $ventures_query->have_posts() ) : 
                        $ventures_query->the_post(); 
                        $post_id = get_the_ID();
                        $inv = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM {$table_name} WHERE post_id = %d", $post_id ) );
                        $price = $inv ? number_format($inv->unit_price, 2) : 'Contact for Pricing';
                        $stock = $inv ? $inv->stock_quantity : 'Available';
                        $centre = $inv ? $inv->centre_code : 'NISTCO';
                    ?>
                        <article style="background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 20px rgba(4,36,22,0.06); border: 1px solid #e5e7eb; display: flex; flex-direction: column;">
                            <?php if ( has_post_thumbnail() ) : ?>
                                <div style="height: 200px; overflow: hidden;">
                                    <?php the_post_thumbnail('medium_large', array('style' => 'width: 100%; height: 100%; object-fit: cover;')); ?>
                                </div>
                            <?php else : ?>
                                <div style="height: 160px; background: #042416; color: #d97706; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.25rem;">
                                    NISTCO VENTURE
                                </div>
                            <?php endif; ?>

                            <div style="padding: 2rem; display: flex; flex-direction: column; flex-grow: 1;">
                                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                                    <span style="padding: 0.25rem 0.6rem; background: #ecfdf5; color: #042416; font-size: 0.7rem; font-weight: 700; border-radius: 4px; text-transform: uppercase;"><?php echo esc_html($centre); ?></span>
                                    <span style="color: #d97706; font-weight: 700; font-size: 0.9rem;">₦<?php echo esc_html($price); ?></span>
                                </div>

                                <h3 style="font-size: 1.25rem; color: #042416; margin-bottom: 0.75rem;">
                                    <a href="<?php the_permalink(); ?>" style="color: #042416; text-decoration: none;"><?php the_title(); ?></a>
                                </h3>

                                <div style="color: #4b5563; font-size: 0.95rem; line-height: 1.6; margin-bottom: 1.5rem; flex-grow: 1;">
                                    <?php the_excerpt(); ?>
                                </div>

                                <div style="display: flex; justify-content: space-between; align-items: center; border-top: 1px solid #f3f4f6; padding-top: 1rem;">
                                    <span style="font-size: 0.8rem; color: #6b7280;">Stock: <?php echo esc_html($stock); ?> units</span>
                                    <a href="<?php the_permalink(); ?>" style="background: #042416; color: #fff; padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.85rem; font-weight: 600; text-decoration: none; transition: background 0.2s;">View Details</a>
                                </div>
                            </div>
                        </article>
                    <?php endwhile; wp_reset_postdata(); ?>
                </div>

            <?php else : ?>
                <div style="text-align: center; padding: 4rem 2rem; background: #fff; border-radius: 12px; box-shadow: 0 4px 20px rgba(4,36,22,0.04); max-width: 600px; margin: 0 auto;">
                    <div style="width: 60px; height: 60px; background: #ecfdf5; color: #042416; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 1.5rem; margin: 0 auto 1.5rem auto;">📦</div>
                    <h3 style="color: #042416; font-size: 1.5rem; margin-bottom: 1rem;">Commercial Ventures Launching Soon</h3>
                    <p style="color: #6b7280; line-height: 1.6; margin-bottom: 2rem;">
                        Our research commercialization pipeline is currently populating initial patents and prototype inventories from AMSARC, BARC, and CARC. Add your first venture in the WordPress dashboard to display it here.
                    </p>
                    <div style="display: flex; gap: 1rem; justify-content: center;">
                        <a href="<?php echo esc_url( admin_url('post-new.php?post_type=nistco_venture') ); ?>" style="background: #042416; color: #fff; padding: 0.75rem 1.5rem; border-radius: 6px; text-decoration: none; font-weight: 600;">+ Add New Venture</a>
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="background: #f3f4f6; color: #374151; padding: 0.75rem 1.5rem; border-radius: 6px; text-decoration: none; font-weight: 600;">Return Home</a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<?php
get_footer();
