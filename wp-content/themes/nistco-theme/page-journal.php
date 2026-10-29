<?php
/**
 * Template Name: Journal Terminal
 * Template Post Type: page
 */
get_header(); ?>

<style>
/* ==========================================================================
   JOURNAL TERMINAL STYLES (INLINE CACHE-BYPASS)
   ========================================================================== */
.journal-container { max-width: 1400px; margin: 0 auto; padding: 3rem 2rem 6rem 2rem; }
.journal-header { margin-bottom: 3rem; border-bottom: 1px solid rgba(0, 210, 133, 0.2); padding-bottom: 2rem; }
.telemetry-tag { font-family: 'Courier New', monospace; font-size: 0.8rem; color: #00d285; letter-spacing: 2px; margin-bottom: 0.5rem; display: block; }
.journal-title { font-size: 2.8rem; font-weight: 900; color: #ffffff; letter-spacing: 2px; text-transform: uppercase; margin: 0 0 1rem 0; }
.journal-subtitle { color: #94a3b8; font-size: 1rem; max-width: 700px; line-height: 1.6; margin: 0; }

.journal-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(400px, 1fr)); gap: 2.5rem; }

.article-card {
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.6) 0%, rgba(2, 6, 23, 0.9) 100%);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-left: 3px solid #38bdf8;
    border-radius: 8px;
    padding: 2.5rem;
    display: flex;
    flex-direction: column;
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.4);
    transition: all 0.3s cubic-bezier(0.25, 1, 0.5, 1);
}
.article-card:hover {
    transform: translateY(-5px);
    border-left-color: #00d285;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.6), inset 0 0 15px rgba(0, 210, 133, 0.05);
}

.article-meta-top { display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 1.5rem; font-family: 'Courier New', monospace; font-size: 0.75rem; }
.field-badge { background: rgba(56, 189, 248, 0.1); border: 1px solid rgba(56, 189, 248, 0.3); color: #38bdf8; padding: 0.3rem 0.6rem; border-radius: 4px; font-weight: 700; text-transform: uppercase; }
.status-badge { color: #00d285; border: 1px solid rgba(0, 210, 133, 0.3); padding: 0.3rem 0.6rem; border-radius: 4px; background: rgba(0, 210, 133, 0.05); }

.article-title { font-size: 1.4rem; font-weight: 800; color: #ffffff; line-height: 1.4; margin: 0 0 1rem 0; }
.article-author { color: #cbd5e1; font-size: 0.9rem; font-weight: 600; margin-bottom: 1.5rem; display: flex; align-items: center; gap: 0.5rem; }
.article-author::before { content: '👤'; font-size: 1rem; }

.article-abstract { color: #94a3b8; font-size: 0.95rem; line-height: 1.7; margin-bottom: 2rem; flex-grow: 1; border-left: 2px solid rgba(255,255,255,0.1); padding-left: 1rem; font-style: italic; }

.article-footer { display: flex; justify-content: space-between; align-items: center; border-top: 1px solid rgba(255, 255, 255, 0.06); padding-top: 1.5rem; }
.article-doi { font-family: 'Courier New', monospace; font-size: 0.75rem; color: #64748b; }
.read-btn { display: inline-flex; align-items: center; gap: 0.5rem; color: #38bdf8; font-family: 'Courier New', monospace; font-size: 0.85rem; font-weight: 800; text-transform: uppercase; text-decoration: none; transition: color 0.3s; }
.read-btn:hover { color: #00d285; }
.read-btn::after { content: '→'; font-size: 1.2rem; line-height: 0; }
</style>

<main id="main-content" style="background-color: #020617; min-height: 100vh; background-image: linear-gradient(rgba(0, 210, 133, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 210, 133, 0.03) 1px, transparent 1px); background-size: 40px 40px;">
    <div class="journal-container">
        
        <header class="journal-header">
            <span class="telemetry-tag">[SECTOR_05: ACADEMIC_UPLINK]</span>
            <h1 class="journal-title">NASTCO Research Journal</h1>
            <p class="journal-subtitle">
                The official repository for peer-reviewed scientific monographs, empirical analyses, and technological breakthroughs developed across all sovereign research directorates.
            </p>
        </header>

        <div class="journal-grid">
            <?php
            $journal_query = new WP_Query( array(
                'post_type'      => 'nastco_journal',
                'posts_per_page' => 12,
                'orderby'        => 'date',
                'order'          => 'DESC'
            ) );

            if ( $journal_query->have_posts() ) :
                while ( $journal_query->have_posts() ) : $journal_query->the_post();
                    
                    // Fetch Custom Meta
                    $doi    = get_post_meta( get_the_ID(), '_nastco_doi', true ) ?: 'DOI: PENDING';
                    $author = get_post_meta( get_the_ID(), '_nastco_author', true ) ?: 'NASTCO Research Team';
                    $status = get_post_meta( get_the_ID(), '_nastco_status', true ) ?: 'In Review';
                    
                    // Fetch Field Taxonomy
                    $terms = get_the_terms( get_the_ID(), 'research_field' );
                    $field = ( ! empty( $terms ) && ! is_wp_error( $terms ) ) ? $terms[0]->name : 'Multidisciplinary';
                    ?>
                    
                    <article class="article-card">
                        <div class="article-meta-top">
                            <span class="field-badge"><?php echo esc_html( $field ); ?></span>
                            <span class="status-badge">✓ <?php echo esc_html( strtoupper( $status ) ); ?></span>
                        </div>

                        <h2 class="article-title"><?php the_title(); ?></h2>
                        <div class="article-author"><?php echo esc_html( $author ); ?></div>
                        
                        <div class="article-abstract">
                            "<?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?>"
                        </div>

                        <div class="article-footer">
                            <span class="article-doi"><?php echo esc_html( $doi ); ?></span>
                            <a href="<?php the_permalink(); ?>" class="read-btn">Read Monograph</a>
                        </div>
                    </article>

                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <div style="grid-column: 1/-1; text-align: center; color: #64748b; font-family: 'Courier New', monospace; padding: 4rem; border: 1px dashed rgba(255,255,255,0.1);">
                    [NO_PUBLICATIONS_FOUND_IN_ACTIVE_DATABASE]
                </div>
            <?php endif; ?>
        </div>

    </div>
</main>

<?php get_footer(); ?>
