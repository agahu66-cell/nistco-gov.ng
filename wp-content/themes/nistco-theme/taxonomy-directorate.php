<?php
/**
 * Template Name: Directorate Taxonomy Archive
 * Description: Dedicated taxonomy archive displaying all research centres, equipment metrics, and affiliated papers under a specific Directorate.
 * File: taxonomy-directorate.php
 */

get_header();

$current_term = get_queried_object();
$term_id      = $current_term->term_id;
$term_name    = $current_term->name;
$term_desc    = $current_term->description;

// Aggregate metrics across this specific Directorate
$dir_centres_query = new WP_Query( array(
    'post_type'      => 'research_centre',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'fields'         => 'ids',
    'tax_query'      => array(
        array(
            'taxonomy' => 'directorate',
            'field'    => 'term_id',
            'terms'    => $term_id,
        ),
    ),
) );

$dir_centre_ids    = $dir_centres_query->posts;
$total_centres     = count( $dir_centre_ids );
$total_instruments = 0;
$total_papers      = 0;

foreach ( $dir_centre_ids as $cid ) {
    $equip = get_post_meta( $cid, '_shestco_lab_equipment', true );
   if ( is_array( $equip ) ) {
        $total_instruments += count( $equip );
    } else {
        $facilities = get_post_meta( $cid, '_centre_facilities', true );
        if ( is_array( \(equip ) && ! empty(\)equip ) ) {
            $total_instruments += count( array_filter( array_map( 'trim', explode( ',', $facilities ) ) ) );
        }
    }
}
    $total_papers = count( get_posts( array(
        'post_type'      => 'publication',
        'post_status'    => 'publish',
        'posts_per_page' => -1,
        'fields'         => 'ids',
        'meta_query'     => array(
            array(
                'key'     => '_publication_centre_id',
                'value'   => $dir_centre_ids,
                'compare' => 'IN',
            ),
        ),
    ) ) );

// Fetch other active Directorates for bottom switching
$sister_directorates = get_terms( array(
    'taxonomy'   => 'directorate',
    'hide_empty' => true,
    'exclude'    => array( $term_id ),
    'orderby'    => 'name',
    'order'      => 'ASC',
) );
?>

<main class="site-main container" style="padding: 3.5rem 1.5rem; max-width: 1200px; margin: 0 auto;">

    <!-- Breadcrumb Navigation -->
    <nav aria-label="Breadcrumbs" style="margin-bottom: 1.5rem; font-size: 0.88rem; color: var(--text-muted);">
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>"
            style="color: var(--primary-color); text-decoration: none;">Home</a>
        <span style="margin: 0 0.4rem;">&rsaquo;</span>
        <a href="<?php echo esc_url( get_post_type_archive_link( 'research_centre' ) ); ?>"
            style="color: var(--primary-color); text-decoration: none;">Research Centres</a>
        <span style="margin: 0 0.4rem;">&rsaquo;</span>
        <span style="color: var(--text-main); font-weight: 600;">Directorate of
            <?php echo esc_html( $term_name ); ?></span>
    </nav>

    <!-- Directorate Header Banner & Metrics -->
    <header style="margin-bottom: 3rem; border-bottom: 2px solid var(--border-color); padding-bottom: 2rem;">
        <div
            style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1.5rem;">
            <div style="max-width: 800px;">
                <span
                    style="display: inline-block; background: rgba(13, 92, 58, 0.1); color: var(--primary-color); font-weight: 700; font-size: 0.82rem; padding: 0.25rem 0.75rem; border-radius: 9999px; text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.75rem;">
                    Scientific Division
                </span>

                <h1
                    style="font-size: clamp(2rem, 4vw, 2.75rem); color: var(--primary-dark); margin: 0 0 1rem 0; font-weight: 800; line-height: 1.2;">
                    Directorate of <?php echo esc_html( $term_name ); ?>
                </h1>

                <?php if ( ! empty( $term_desc ) ) : ?>
                <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7; margin: 0;">
                    <?php echo esc_html( $term_desc ); ?>
                </p>
                <?php else : ?>
                <p style="color: var(--text-muted); font-size: 1.05rem; line-height: 1.7; margin: 0;">
                    Overseeing specialized laboratories, research outputs, and indigenous technological development
                    within the Directorate of <?php echo esc_html( $term_name ); ?>.
                </p>
                <?php endif; ?>
            </div>

            <!-- Aggregate Directorate Stats -->
            <div style="display: flex; gap: 0.85rem; flex-wrap: wrap;">
                <div
                    style="background: var(--bg-light); border: 1px solid var(--border-color); border-left: 4px solid var(--primary-color); border-radius: 0 6px 6px 0; padding: 0.85rem 1.25rem; min-width: 120px; text-align: center;">
                    <span
                        style="font-size: 1.85rem; font-weight: 800; color: var(--primary-color); display: block; line-height: 1.1;">
                        <?php echo esc_html( $total_centres ); ?>
                    </span>
                    <span
                        style="font-size: 0.72rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px;">
                        <?php echo ( $total_centres === 1 ) ? 'Centre' : 'Centres'; ?>
                    </span>
                </div>

                <div
                    style="background: var(--bg-light); border: 1px solid var(--border-color); border-left: 4px solid var(--primary-color); border-radius: 0 6px 6px 0; padding: 0.85rem 1.25rem; min-width: 120px; text-align: center;">
                    <span
                        style="font-size: 1.85rem; font-weight: 800; color: var(--primary-color); display: block; line-height: 1.1;">
                        <?php echo esc_html( $total_instruments ); ?>+
                    </span>
                    <span
                        style="font-size: 0.72rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px;">
                        Instruments
                    </span>
                </div>

                <div
                    style="background: var(--bg-light); border: 1px solid var(--border-color); border-left: 4px solid var(--primary-color); border-radius: 0 6px 6px 0; padding: 0.85rem 1.25rem; min-width: 120px; text-align: center;">
                    <span
                        style="font-size: 1.85rem; font-weight: 800; color: var(--primary-color); display: block; line-height: 1.1;">
                        <?php echo esc_html( $total_papers ); ?>
                    </span>
                    <span
                        style="font-size: 0.72rem; font-weight: 700; color: var(--text-muted); text-transform: uppercase; letter-spacing: 0.5px;">
                        Papers
                    </span>
                </div>
            </div>
        </div>
    </header>

    <!-- Research Centres Grid -->
    <section style="margin-bottom: 4rem;">
        <?php if ( have_posts() ) : ?>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(340px, 1fr)); gap: 2rem;">
            <?php while ( have_posts() ) : the_post(); 
                    $cid            = get_the_ID();
                    $directorates   = get_the_terms( $cid, 'directorate' );
                    $director_name  = get_post_meta( $cid, '_centre_director', true ) ?: get_post_meta( $cid, '_shestco_director_name', true );
$equipment_list = get_post_meta($cid, '_shestco_lab_equipment', true );
 
if ( is_array( $equipment_list ) ) {
    $equip_count = count( $equipment_list );
} else {
    $facilities  = get_post_meta( $cid, '_centre_facilities', true );
    $equip_count = ! empty( $facilities ) ? count( array_filter( array_map( 'trim', explode( ',', $facilities ) ) ) ) : 0;
}

                    // Query publications count for this single centre
                    $pub_count = count( get_posts( array(
                        'post_type'      => 'publication',
                        'post_status'    => 'publish',
                        'posts_per_page' => -1,
                        'fields'         => 'ids',
                        'meta_query'     => array(
                            array(
                                'key'     => '_publication_centre_id',
                                'value'   => (string) $cid,
                                'compare' => '=',
                            ),
                        ),
                    ) ) );
                ?>
            <article class="dir-centre-card"
                style="background: #ffffff; border: 1px solid var(--border-color); border-radius: 8px; overflow: hidden; display: flex; flex-direction: column; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.03); transition: transform 0.2s, box-shadow 0.2s;">

                <!-- Centre Thumbnail Image -->
                <?php if ( has_post_thumbnail() ) : ?>
                <a href="<?php the_permalink(); ?>" style="display: block; overflow: hidden; height: 190px;">
                    <?php the_post_thumbnail( 'centre-card', array( 'style' => 'width: 100%; height: 100%; object-fit: cover;' ) ); ?>
                </a>
                <?php else : ?>
                <div
                    style="height: 130px; background: linear-gradient(135deg, var(--bg-light) 0%, #e5e7eb 100%); display: flex; align-items: center; justify-content: center; color: var(--text-muted);">
                    <span
                        style="font-size: 0.85rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.5px;">
                        🔬 <?php echo esc_html( $term_name ); ?>
                    </span>
                </div>
                <?php endif; ?>

                <!-- Centre Card Body -->
                <div style="padding: 1.5rem; flex-grow: 1; display: flex; flex-direction: column;">

                    <!-- Directorate Badges (Properly scoped inside loop) -->
                    <?php if ( ! empty( $directorates ) && ! is_wp_error( $directorates ) ) : ?>
                    <div style="display: flex; flex-wrap: wrap; gap: 0.4rem; margin-bottom: 0.65rem;">
                        <?php foreach ( $directorates as $dir_badge ) : ?>
                        <span
                            style="font-size: 0.75rem; font-weight: 700; color: var(--primary-color); text-transform: uppercase; letter-spacing: 0.5px;">
                            <?php echo esc_html( $dir_badge->name ); ?>
                        </span>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                    <h2 style="font-size: 1.25rem; margin: 0 0 0.75rem 0; line-height: 1.35; font-weight: 700;">
                        <a href="<?php the_permalink(); ?>" style="color: var(--primary-dark); text-decoration: none;">
                            <?php the_title(); ?>
                        </a>
                    </h2>

                    <div
                        style="color: var(--text-muted); font-size: 0.92rem; line-height: 1.6; margin-bottom: 1.25rem; flex-grow: 1;">
                        <?php echo wp_trim_words( get_the_excerpt(), 18 ); ?>
                    </div>

                    <!-- Instrumentation & Publications Badges -->
                    <div style="display: flex; gap: 0.5rem; flex-wrap: wrap; margin-bottom: 1.25rem;">
                        <?php if ( $equip_count > 0 ) : ?>
                        <span
                            style="background: rgba(13,92,58,0.1); color: var(--primary-color); padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.78rem; font-weight: 700;">
                            ⚙️ <?php echo esc_html( $equip_count ); ?> Instruments
                        </span>
                        <?php endif; ?>

                        <?php if ( $pub_count > 0 ) : ?>
                        <span
                            style="background: #eff6ff; color: #1d4ed8; border: 1px solid #bfdbfe; padding: 0.2rem 0.6rem; border-radius: 4px; font-size: 0.78rem; font-weight: 700;">
                            📄 <?php echo esc_html( $pub_count ); ?>
                            <?php echo ( $pub_count === 1 ) ? 'Paper' : 'Papers'; ?>
                        </span>
                        <?php endif; ?>
                    </div>

                    <!-- Footer: Head & Link -->
                    <div
                        style="border-top: 1px solid var(--border-color); padding-top: 0.85rem; font-size: 0.85rem; display: flex; justify-content: space-between; align-items: center; gap: 0.5rem;">
                        <div>
                            <?php if ( ! empty( $director_name ) ) : ?>
                            <span style="color: var(--text-muted); font-size: 0.8rem; display: block;">
                                Head: <strong
                                    style="color: var(--text-main);"><?php echo esc_html( $director_name ); ?></strong>
                            </span>
                            <?php endif; ?>
                        </div>

                        <a href="<?php the_permalink(); ?>"
                            style="color: var(--primary-color); font-weight: 700; text-decoration: none; font-size: 0.85rem; white-space: nowrap;">
                            View Facilities &rarr;
                        </a>
                    </div>

                </div>
            </article>
            <?php endwhile; ?>
        </div>

        <!-- Pagination -->
        <div style="margin-top: 3rem; text-align: center;">
            <?php
                the_posts_pagination( array(
                    'mid_size'  => 2,
                    'prev_text' => __( '&larr; Previous', 'shestco-theme' ),
                    'next_text' => __( 'Next &rarr;', 'shestco-theme' ),
                ) );
                ?>
        </div>

        <?php else : ?>
        <div
            style="text-align: center; padding: 4rem 1.5rem; background: var(--bg-light); border: 1px dashed var(--border-color); border-radius: 8px;">
            <span style="font-size: 2.2rem; display: block; margin-bottom: 0.75rem;">🔬</span>
            <h3 style="color: var(--primary-dark); margin: 0 0 0.5rem 0;">No Research Centres in this Directorate</h3>
            <p style="color: var(--text-muted); margin: 0 0 1.5rem 0;">No research centres are currently cataloged under
                the Directorate of <?php echo esc_html( $term_name ); ?>.</p>
            <a href="<?php echo esc_url( get_post_type_archive_link( 'research_centre' ) ); ?>"
                style="background: var(--primary-color); color: #ffffff; padding: 0.65rem 1.25rem; border-radius: 4px; text-decoration: none; font-weight: 600; font-size: 0.88rem;">
                Browse All Research Centres
            </a>
        </div>
        <?php endif; ?>
    </section>

    <!-- Explore Sister Directorates Navigation -->
    <?php if ( ! empty( $sister_directorates ) && ! is_wp_error( $sister_directorates ) ) : ?>
    <section
        style="background: var(--bg-light); border: 1px solid var(--border-color); border-radius: 8px; padding: 1.5rem; margin-top: 2rem;">
        <span
            style="display: block; font-size: 0.8rem; font-weight: 700; color: var(--primary-dark); text-transform: uppercase; letter-spacing: 0.5px; margin-bottom: 0.75rem;">
            Explore Other Scientific Directorates:
        </span>
        <div style="display: flex; gap: 0.65rem; flex-wrap: wrap;">
            <?php foreach ( $sister_directorates as $sister ) : ?>
            <a href="<?php echo esc_url( get_term_link( $sister ) ); ?>" class="sister-dir-pill">
                <?php echo esc_html( $sister->name ); ?> (<?php echo esc_html( $sister->count ); ?>) &rarr;
            </a>
            <?php endforeach; ?>
        </div>
    </section>
    <?php endif; ?>

</main>

<style>
.dir-centre-card:hover {
    transform: translateY(-3px);
    box-shadow: 0 10px 20px -5px rgba(0, 0, 0, 0.08) !important;
    border-color: rgba(13, 92, 58, 0.3) !important;
}

.sister-dir-pill {
    background: #ffffff;
    border: 1px solid var(--border-color);
    color: var(--text-main);
    padding: 0.45rem 0.95rem;
    border-radius: 6px;
    font-size: 0.85rem;
    font-weight: 600;
    text-decoration: none;
    transition: all 0.2s ease;
}

.sister-dir-pill:hover {
    background: var(--primary-color);
    color: #ffffff;
    border-color: var(--primary-color);
}
</style>

<?php
get_footer();