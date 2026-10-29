<?php
/**
 * Template Name: Strategic Resources Terminal
 * Template Post Type: page
 */
get_header();

// 1. Sanitize incoming filter & search parameters
$active_directorate = isset( $_GET['directorate'] ) ? sanitize_key( $_GET['directorate'] ) : '';
$active_category    = isset($_GET['category'] ) ? sanitize_key( $_GET['category'] ) : '';$search_query       = isset( $_GET['res_search'] ) ? sanitize_text_field( wp_unslash( $_GET['res_search'] ) ) : '';
?>

<style>
/* ==========================================================================
   STRATEGIC RESOURCES TERMINAL STYLES (INLINE CACHE-BYPASS)
   ========================================================================== */
.res-terminal-container {
    max-width: 1400px;
    margin: 0 auto;
    padding: 3rem 2rem 6rem 2rem;
}

.res-header-node {
    margin-bottom: 2.5rem;
    border-bottom: 1px solid rgba(0, 210, 133, 0.2);
    padding-bottom: 2rem;
}

.res-telemetry-tag {
    font-family: 'Courier New', monospace;
    font-size: 0.8rem;
    color: #00d285;
    letter-spacing: 2px;
    display: inline-block;
    margin-bottom: 0.5rem;
}

.res-title {
    font-size: 2.8rem;
    font-weight: 900;
    color: #ffffff;
    letter-spacing: 2px;
    text-transform: uppercase;
    margin: 0 0 1rem 0;
}

.res-subtitle {
    color: #94a3b8;
    font-size: 1rem;
    max-width: 700px;
    line-height: 1.6;
    margin: 0;
}

/* Two-Tier Filter Bar HUD */
.filter-bar-hud {
    background: rgba(15, 23, 42, 0.7);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-radius: 8px;
    padding: 1.5rem;
    margin-bottom: 2.5rem;
    display: flex;
    flex-direction: column;
    gap: 1.2rem;
    backdrop-filter: blur(15px);
}

.filter-tier-row {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    justify-content: space-between;
    gap: 1.2rem;
}

.filter-tier-row.secondary-tier {
    padding-top: 1rem;
    border-top: 1px solid rgba(255, 255, 255, 0.05);
}

.filter-group {
    display: flex;
    flex-wrap: wrap;
    align-items: center;
    gap: 0.55rem;
}

.filter-label {
    font-family: 'Courier New', monospace;
    font-size: 0.75rem;
    color: #64748b;
    text-transform: uppercase;
    letter-spacing: 1px;
    margin-right: 0.4rem;
}

.filter-pill {
    display: inline-flex;
    align-items: center;
    gap: 0.4rem;
    background: rgba(2, 6, 23, 0.6);
    border: 1px solid rgba(255, 255, 255, 0.08);
    color: #94a3b8;
    padding: 0.35rem 0.8rem;
    border-radius: 4px;
    font-family: 'Courier New', monospace;
    font-size: 0.75rem;
    font-weight: 700;
    text-decoration: none;
    letter-spacing: 0.5px;
    transition: all 0.25s ease;
}

.filter-pill:hover {
    color: #ffffff;
    border-color: rgba(0, 210, 133, 0.4);
    background: rgba(0, 210, 133, 0.05);
}

.filter-pill.active {
    color: #00d285;
    border-color: #00d285;
    background: rgba(0, 210, 133, 0.12);
    box-shadow: 0 0 12px rgba(0, 210, 133, 0.2);
}

/* Category pill variant in cyber cyan */
.filter-pill.cat-pill.active {
    color: #38bdf8;
    border-color: #38bdf8;
    background: rgba(56, 189, 248, 0.12);
    box-shadow: 0 0 12px rgba(56, 189, 248, 0.2);
}

.reset-pill {
    color: #f43f5e;
    border-color: rgba(244, 63, 94, 0.3);
    background: rgba(244, 63, 94, 0.06);
}

.reset-pill:hover {
    background: rgba(244, 63, 94, 0.15);
    border-color: #f43f5e;
    color: #ffffff;
}

/* Controls Node (Counter + Input) */
.hud-controls-cluster {
    display: flex;
    align-items: center;
    gap: 1rem;
    flex-grow: 0.5;
    justify-content: flex-end;
}

.hud-counter-badge {
    font-family: 'Courier New', monospace;
    font-size: 0.78rem;
    font-weight: 700;
    letter-spacing: 1px;
    color: #38bdf8;
    background: rgba(56, 189, 248, 0.08);
    border: 1px solid rgba(56, 189, 248, 0.25);
    padding: 0.45rem 0.8rem;
    border-radius: 4px;
    white-space: nowrap;
    transition: all 0.3s ease;
}

.hud-counter-badge.zero-matches {
    color: #f43f5e;
    border-color: rgba(244, 63, 94, 0.4);
    background: rgba(244, 63, 94, 0.08);
}

/* Instant Search Input Node */
.hud-search-node {
    display: flex;
    align-items: center;
    position: relative;
    min-width: 240px;
    width: 100%;
    max-width: 320px;
}

.hud-search-icon {
    position: absolute;
    left: 12px;
    font-size: 0.85rem;
    color: #64748b;
    pointer-events: none;
    transition: color 0.3s ease;
}

.hud-search-input {
    width: 100%;
    background: rgba(2, 6, 23, 0.8);
    border: 1px solid rgba(255, 255, 255, 0.1);
    border-radius: 4px;
    padding: 0.5rem 2.2rem 0.5rem 2.2rem;
    font-family: 'Courier New', monospace;
    font-size: 0.82rem;
    color: #ffffff;
    outline: none;
    transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
}

.hud-search-input:focus {
    border-color: #00d285;
    box-shadow: 0 0 15px rgba(0, 210, 133, 0.25);
    background: rgba(2, 6, 23, 0.95);
}

.hud-search-input:focus ~ .hud-search-icon {
    color: #00d285;
}

.hud-search-clear {
    position: absolute;
    right: 10px;
    background: none;
    border: none;
    color: #64748b;
    font-size: 0.9rem;
    cursor: pointer;
    display: none;
    padding: 2px 5px;
    line-height: 1;
}

.hud-search-clear:hover {
    color: #f43f5e;
}

/* Resources 3D Matrix Grid */
.resource-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(340px, 1fr));
    gap: 2rem;
}

.resource-card {
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.8) 0%, rgba(2, 6, 23, 0.95) 100%);
    border: 1px solid rgba(255, 255, 255, 0.06);
    border-top: 2px solid #00d285;
    border-radius: 8px;
    padding: 2rem;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
    transition: transform 0.3s cubic-bezier(0.25, 1, 0.5, 1), box-shadow 0.3s ease, border-color 0.3s ease;
    position: relative;
    overflow: hidden;
}

.resource-card:hover {
    transform: translateY(-6px);
    border-top-color: #38bdf8;
    box-shadow: 0 25px 45px rgba(0, 0, 0, 0.7), inset 0 0 15px rgba(0, 210, 133, 0.05);
}

.card-top-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.2rem;
    font-family: 'Courier New', monospace;
    font-size: 0.75rem;
    gap: 0.5rem;
    flex-wrap: wrap;
}

.card-directorate-badge {
    background: rgba(56, 189, 248, 0.1);
    border: 1px solid rgba(56, 189, 248, 0.3);
    color: #38bdf8;
    padding: 0.2rem 0.5rem;
    border-radius: 4px;
    font-weight: 700;
}

.card-category-badge {
    color: #00d285;
    border: 1px solid rgba(0, 210, 133, 0.3);
    background: rgba(0, 210, 133, 0.08);
    padding: 0.2rem 0.5rem;
    border-radius: 4px;
}

.card-filetype-badge {
    color: #64748b;
    border: 1px solid rgba(255, 255, 255, 0.06);
    padding: 0.2rem 0.5rem;
    border-radius: 4px;
}

.card-title {
    font-size: 1.25rem;
    font-weight: 800;
    color: #ffffff;
    line-height: 1.4;
    margin: 0 0 1rem 0;
    letter-spacing: 0.5px;
}

.card-content {
    color: #94a3b8;
    font-size: 0.9rem;
    line-height: 1.6;
    margin-bottom: 2rem;
    flex-grow: 1;
}

.card-actions {
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-top: 1px solid rgba(255, 255, 255, 0.06);
    padding-top: 1.2rem;
}

.card-download-btn {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    background: transparent;
    border: 1px solid #00d285;
    color: #00d285;
    padding: 0.6rem 1.2rem;
    font-family: 'Courier New', monospace;
    font-size: 0.78rem;
    font-weight: 800;
    text-transform: uppercase;
    text-decoration: none;
    border-radius: 4px;
    letter-spacing: 1px;
    transition: all 0.3s ease;
}

.card-download-btn:hover {
    background: #00d285;
    color: #020617;
    box-shadow: 0 0 15px rgba(0, 210, 133, 0.4);
}

.card-timestamp {
    font-family: 'Courier New', monospace;
    font-size: 0.7rem;
    color: #64748b;
}

.empty-state-notice {
    grid-column: 1 / -1;
    text-align: center;
    padding: 5rem 2rem;
    background: rgba(15, 23, 42, 0.4);
    border: 1px dashed rgba(255, 255, 255, 0.1);
    border-radius: 8px;
    font-family: 'Courier New', monospace;
    color: #64748b;
}
</style>

<main id="main-content" style="background-color: #020617; min-height: 100vh; background-image: linear-gradient(rgba(0, 210, 133, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 210, 133, 0.03) 1px, transparent 1px); background-size: 40px 40px;">
    
    <div class="res-terminal-container">
        
        <!-- Header Node -->
        <header class="res-header-node">
            <span class="res-telemetry-tag">[SECTOR_02: REPOSITORY_UPLINK]</span>
            <h1 class="res-title">Strategic Resources Database</h1>
            <p class="res-subtitle">
                Centralized clearance clearinghouse for structural datasets, peer-reviewed monographs, standard operating procedures, and technical documentation across all sovereign directorates.
            </p>
        </header>

        <!-- Multi-Tier Filter HUD -->
        <section class="filter-bar-hud">
            
            <!-- Tier 1: Directorate Taxonomy + Search Controls -->
            <div class="filter-tier-row">
                <div class="filter-group">
                    <span class="filter-label">Directorate:</span>
                    
                    <a href="<?php echo esc_url( remove_query_arg( 'directorate' ) ); ?>" 
                       class="filter-pill <?php echo empty( $active_directorate ) ? 'active' : ''; ?>">
                        ALL_SECTORS
                    </a>

                    <?php
                    $directorates = array(
                        'amsarc' => 'AMSARC',
                        'parc'   => 'PARC',
                        'carc'   => 'CARC',
                        'ntc'    => 'NTC',
                        'aepc'   => 'AEPC',
                    );

                    foreach ( $directorates as$slug => $label ) :$is_active = ( $active_directorate ===$slug );
                        $pill_url  = add_query_arg( 'directorate',$slug );
                        ?>
                        <a href="<?php echo esc_url( $pill_url ); ?>" 
                           class="filter-pill <?php echo $is_active ? 'active' : ''; ?>">
                            <?php echo esc_html( $label ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <!-- Live Counter & Instant Search -->
                <div class="hud-controls-cluster">
                    <div class="hud-counter-badge" id="hudMatchCounter">[MATCHES: 0/0]</div>

                    <div class="hud-search-node">
                        <span class="hud-search-icon">🔍</span>
                        <input type="text" 
                               id="hudInstantSearch" 
                               class="hud-search-input" 
                               placeholder="FILTER_KEYWORDS..." 
                               value="<?php echo esc_attr( $search_query ); ?>" 
                               autocomplete="off" 
                               spellcheck="false" 
                               aria-label="Instant Keyword Filter">
                        <button type="button" id="hudSearchClear" class="hud-search-clear" aria-label="Clear Keyword Search">✕</button>
                    </div>
                </div>
            </div>

            <!-- Tier 2: Resource Category Sub-Filter Pills -->
            <div class="filter-tier-row secondary-tier">
                <div class="filter-group">
                    <span class="filter-label">Classification:</span>

                    <a href="<?php echo esc_url( remove_query_arg( 'category' ) ); ?>" 
                       class="filter-pill cat-pill <?php echo empty( $active_category ) ? 'active' : ''; ?>">
                        ALL_TYPES
                    </a>

                    <?php
                    $categories = array(
                        'publications' => 'Publications',
                        'protocols'    => 'Protocols',
                        'datasets'     => 'Datasets',
                    );

                    foreach ( $categories as$c_slug => $c_label ) :$is_cat_active = ( $active_category ===$c_slug );
                        $cat_url       = add_query_arg( 'category',$c_slug );
                        ?>
                        <a href="<?php echo esc_url( $cat_url ); ?>" 
                           class="filter-pill cat-pill <?php echo $is_cat_active ? 'active' : ''; ?>">
                            <?php echo esc_html( $c_label ); ?>
                        </a>
                    <?php endforeach; ?>
                </div>

                <?php if ( ! empty( $active_directorate ) ||{} ! empty( $active_category ) ) : ?>
                    <div>
                        <a href="<?php echo esc_url( get_permalink() ); ?>" class="filter-pill reset-pill">
                            ✕ RESET_ALL_FILTERS
                        </a>
                    </div>
                <?php endif; ?>
            </div>

        </section>

        <!-- 3D Resource Grid Query Loop -->
        <div class="resource-grid" id="resourceCardsGrid">
            <?php
            $query_args = array(
                'post_type'      => 'nastco_resource',
                'posts_per_page' => 20,
                'orderby'        => 'date',
                'order'          => 'DESC',
            );

            // Build Compound Taxonomy Query
            $tax_query = array();

            if ( ! empty( $active_directorate ) ) {$tax_query[] = array(
                    'taxonomy' => 'directorate',
                    'field'    => 'slug',
                    'terms'    => $active_directorate,
                );
            }

            if ( ! empty( $active_category ) ) {$tax_query[] = array(
                    'taxonomy' => 'resource_category',
                    'field'    => 'slug',
                    'terms'    => $active_category,
                );
            }

            if ( count( $tax_query ) > 1 ) {$tax_query['relation'] = 'AND';
            }

            if ( ! empty( $tax_query ) ) {
                $query_args['tax_query'] =$tax_query;
            }

            if ( ! empty( $search_query ) ) {
                $query_args['s'] =$search_query;
            }

            $resources = new WP_Query($query_args );

            if ( $resources->have_posts() ) :
                while ( $resources->have_posts() ) : $resources->the_post();$file_type = get_post_meta( get_the_ID(), '_nastco_file_type', true );
                    if ( empty( $file_type ) ) {$file_type = 'DOCUMENT';
                    }

                    $custom_url   = get_post_meta( get_the_ID(), '_nastco_download_url', true );$download_url = $custom_url ? $custom_url : get_permalink();

                    // Directorate Term
                    $dir_terms = get_the_terms( get_the_ID(), 'directorate' );
                    $dir_label = ( ! empty( $dir_terms ) && ! is_wp_error( $dir_terms ) ) ? strtoupper( $dir_terms[0]->slug ) : 'GENERAL';

                    // Category Term
                    $cat_terms = get_the_terms( get_the_ID(), 'resource_category' );
                    $cat_label = ( ! empty( $cat_terms ) && ! is_wp_error( $cat_terms ) ) ? strtoupper( $cat_terms[0]->name ) : '';

                    $searchable_text = strtolower( get_the_title() . ' ' . get_the_content() . ' ' . $dir_label . ' ' . $cat_label . ' ' .$file_type );
                    ?>
                    <article class="resource-card" data-search-target="<?php echo esc_attr( $searchable_text ); ?>">
                        <div>
                            <div class="card-top-meta">
                                <div style="display: flex; gap: 0.4rem; align-items: center;">
                                    <span class="card-directorate-badge"><?php echo esc_html( $dir_label ); ?></span>
                                    <?php if ( $cat_label ) : ?>
                                        <span class="card-category-badge"><?php echo esc_html( $cat_label ); ?></span>
                                    <?php endif; ?>
                                </div>
                                <span class="card-filetype-badge"><?php echo esc_html( strtoupper( $file_type ) ); ?></span>
                            </div>

                            <h2 class="card-title"><?php the_title(); ?></h2>
                            
                            <div class="card-content">
                                <?php echo wp_trim_words( get_the_excerpt() ? get_the_excerpt() : get_the_content(), 22, '...' ); ?>
                            </div>
                        </div>

                        <div class="card-actions">
                            <a href="<?php echo esc_url( $download_url ); ?>" class="card-download-btn">
                                <span>📥</span> SECURE_PULL
                            </a>
                            <span class="card-timestamp"><?php echo get_the_date('Y.m.d'); ?></span>
                        </div>
                    </article>
                    <?php
                endwhile;
                wp_reset_postdata();
            else :
                ?>
                <div class="empty-state-notice" id="dbEmptyNotice">
                    <p style="font-size: 1.1rem; color: #94a3b8; margin-bottom: 0.5rem;">[NO_RECORDS_LOCATED]</p>
                    <p>No classified strategic documents are currently tagged to this combined filter intersection.</p>
                    <a href="<?php echo esc_url( get_permalink() ); ?>" style="color: #00d285; text-decoration: underline; margin-top: 1rem; display: inline-block;">Reset All Parameters</a>
                </div>
                <?php
            endif;
            ?>

            <!-- Dynamic JS Empty State Notice -->
            <div class="empty-state-notice" id="jsEmptyNotice" style="display: none;">
                <p style="font-size: 1.1rem; color: #94a3b8; margin-bottom: 0.5rem;">[NO_CLIENT_MATCHES]</p>
                <p>No currently loaded strategic resources match the active keyword filter.</p>
            </div>
        </div>

    </div>

</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('hudInstantSearch');
    const clearBtn    = document.getElementById('hudSearchClear');
    const counter     = document.getElementById('hudMatchCounter');
    const cards       = document.querySelectorAll('.resource-card');
    const jsEmpty     = document.getElementById('jsEmptyNotice');
    const totalCards  = cards.length;

    function updateMatchCounter(matches) {
        if (!counter) return;
        counter.textContent = `[MATCHES: ${matches}/${totalCards}]`;
        if (matches === 0 && totalCards > 0) {
            counter.classList.add('zero-matches');
        } else {
            counter.classList.remove('zero-matches');
        }
    }

    updateMatchCounter(totalCards);

    if (!searchInput) return;

    function executeInstantFilter() {
        const query = searchInput.value.trim().toLowerCase();
        let matches = 0;

        if (clearBtn) {
            clearBtn.style.display = query.length > 0 ? 'block' : 'none';
        }

        cards.forEach(function(card) {
            const target = card.getAttribute('data-search-target') || '';
            if (query === '' || target.indexOf(query) !== -1) {
                card.style.display = 'flex';
                matches++;
            } else {
                card.style.display = 'none';
            }
        });

        updateMatchCounter(matches);

        if (jsEmpty) {
            jsEmpty.style.display = (matches === 0 && totalCards > 0) ? 'block' : 'none';
        }
    }

    searchInput.addEventListener('input', executeInstantFilter);

    if (clearBtn) {
        clearBtn.addEventListener('click', function() {
            searchInput.value = '';
            executeInstantFilter();
            searchInput.focus();
        });
    }

    if (searchInput.value.trim().length > 0) {
        executeInstantFilter();
    }
});
</script>

<?php get_footer(); ?>
