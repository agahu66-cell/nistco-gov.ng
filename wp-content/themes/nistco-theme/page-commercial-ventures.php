<?php
/**
 * Template Name: NISTCO Commercial Ventures Marketplace
 * Description: Public and staff marketplace for NISTCO research ventures, patents, and inventory telemetry.
 */

get_header();
global $wpdb;
$table_name = $wpdb->prefix . 'nistco_commercial_inventory';
?>

<main id="primary" class="site-main" style="background: #f8fafc; min-height: 80vh; padding: 3rem 0;">
    <div class="nistco-container" style="max-width: 1440px; margin: 0 auto; padding: 0 2rem;">
        
        <div style="background: linear-gradient(135deg, #042416 0%, #0d5c36 100%); border-radius: 12px; padding: 3rem; color: #fff; margin-bottom: 3rem; box-shadow: 0 4px 20px rgba(4,36,22,0.1);">
            <span style="background: rgba(217, 119, 6, 0.2); color: #d97706; padding: 0.25rem 0.75rem; border-radius: 4px; font-size: 0.75rem; font-weight: 700; text-transform: uppercase; border: 1px solid rgba(217,119,6,0.4);">
                Technology Transfer & Commercialization
            </span>
            <h1 style="font-size: 2.5rem; margin-top: 0.5rem; margin-bottom: 0.75rem;">NISTCO Commercial Ventures Marketplace</h1>
            <p style="color: #d1d5db; font-size: 1.05rem; max-width: 800px; line-height: 1.6; margin: 0;">
                Explore patent-protected research outputs, indigenous technological innovations, and commercial inventory across AMSARC, BARC, CARC, PARC, NTC, and the Precision Engineering Workshop.
            </p>
        </div>

        <?php
        $args = array(
            'post_type'      => 'nistco_venture',
            'posts_per_page' => -1,
            'post_status'    => 'publish',
        );
        $ventures_query = new WP_Query( $args );

        if ( $ventures_query->have_posts() ) :
        ?>
            <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 2rem;">
                <?php while ( $ventures_query->have_posts() ) : $ventures_query->the_post(); 
                    $post_id = get_the_ID();
                    $notap = get_post_meta( $post_id, '_nistco_notap_ref', true );
                    $trl = get_post_meta( $post_id, '_nistco_trl_level', true );
                    $centre = get_post_meta( $post_id, '_nistco_centre_code', true );
                    $status = get_post_meta( $post_id, '_nistco_comm_status', true );
                    $price = get_post_meta( $post_id, '_nistco_unit_price', true );
                    $stock = get_post_meta( $post_id, '_nistco_stock_qty', true );
                ?>
                    <div style="background: #fff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border-top: 4px solid #042416; display: flex; flex-direction: column;">
                        <?php if ( has_post_thumbnail() ) : ?>
                            <div style="height: 200px; overflow: hidden;">
                                <?php the_post_thumbnail( 'medium_large', array( 'style' => 'width: 100%; height: 100%; object-fit: cover;' ) ); ?>
                            </div>
                        <?php endif; ?>
                        
                        <div style="padding: 1.75rem; flex-grow: 1; display: flex; flex-direction: column; justify-content: space-between;">
                            <div>
                                <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 0.75rem;">
                                    <span style="background: #ecfdf5; color: #042416; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.75rem; font-weight: 700;">
                                        <?php echo esc_html( $centre ? $centre : 'NISTCO' ); ?>
                                    </span>
                                    <span style="font-size: 0.8rem; color: #d97706; font-weight: 600;">
                                        <?php echo esc_html( $trl ? $trl : 'TRL 5' ); ?>
                                    </span>
                                </div>

                                <h3 style="color: #042416; font-size: 1.25rem; margin-bottom: 0.75rem;">
                                    <a href="<?php the_permalink(); ?>" style="color: inherit; text-decoration: none;"><?php the_title(); ?></a>
                                </h3>

                                <p style="color: #6b7280; font-size: 0.9rem; line-height: 1.5; margin-bottom: 1.25rem;">
                                    <?php echo esc_html( wp_trim_words( get_the_excerpt(), 18, '...' ) ); ?>
                                </p>

                                <div style="font-size: 0.85rem; color: #374151; background: #f8fafc; padding: 0.75rem; border-radius: 6px; margin-bottom: 1.25rem;">
                                    <div style="margin-bottom: 0.3rem;"><strong>NOTAP Ref:</strong> <?php echo esc_html( $notap ? $notap : 'Pending' ); ?></div>
                                    <div><strong>Status:</strong> <span style="color: #10b981; font-weight: 600;"><?php echo esc_html( $status ? $status : 'Active' ); ?></span></div>
                                </div>
                            </div>

                            <div style="border-top: 1px solid #e5e7eb; padding-top: 1rem; display: flex; justify-content: space-between; align-items: center;">
                                <div>
                                    <div style="font-size: 0.75rem; color: #9ca3af; text-transform: uppercase;">Unit Price</div>
                                    <div style="font-size: 1.25rem; font-weight: 700; color: #042416;">
                                        ₦<?php echo number_format( floatval( $price ), 2 ); ?>
                                    </div>
                                </div>
                                <a href="<?php the_permalink(); ?>" style="background: #042416; color: #fff; padding: 0.5rem 1rem; border-radius: 6px; font-size: 0.85rem; text-decoration: none; font-weight: 600;">
                                    View Details &rarr;
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
        <?php else : ?>
            <div style="background: #fff; border-radius: 12px; padding: 4rem; text-align: center; box-shadow: 0 4px 15px rgba(0,0,0,0.05);">
                <h3 style="color: #042416; font-size: 1.5rem; margin-bottom: 1rem;">No Commercial Ventures Published Yet</h3>
                <p style="color: #6b7280; margin-bottom: 2rem;">Add your first research output or patent in the WordPress admin dashboard to populate the marketplace.</p>
                <a href="<?php echo esc_url( admin_url('post-new.php?post_type=nistco_venture') ); ?>" style="background: #042416; color: #fff; padding: 0.75rem 1.5rem; border-radius: 6px; font-weight: 600; text-decoration: none;">
                    + Add New Venture
                </a>
            </div>
        <?php endif; ?>

    </div>
</main>

<?php
get_footer();
