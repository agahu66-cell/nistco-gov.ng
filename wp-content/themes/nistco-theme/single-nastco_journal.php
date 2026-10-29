<?php
/**
 * Single Template for NASTCO Journal Articles
 * Renders the full reading view for peer-reviewed monographs.
 */
get_header(); ?>

<style>
/* ==========================================================================
   SINGLE MONOGRAPH READING TERMINAL (INLINE CACHE-BYPASS)
   ========================================================================== */
.journal-single-container {
    max-width: 900px; /* Narrower width for optimal reading typography */
    margin: 0 auto;
    padding: 3rem 2rem 8rem 2rem;
}

.tactical-back-link {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: #00d285;
    font-family: 'Courier New', monospace;
    font-size: 0.85rem;
    font-weight: 700;
    text-transform: uppercase;
    text-decoration: none;
    margin-bottom: 3rem;
    padding: 0.5rem 1rem;
    background: rgba(0, 210, 133, 0.05);
    border: 1px solid rgba(0, 210, 133, 0.3);
    border-radius: 4px;
    transition: all 0.3s ease;
}

.tactical-back-link:hover {
    background: rgba(0, 210, 133, 0.15);
    color: #ffffff;
    border-color: #00d285;
    transform: translateX(-5px);
}

.monograph-header {
    margin-bottom: 3rem;
    border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    padding-bottom: 2rem;
}

.monograph-top-meta {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 1.5rem;
    font-family: 'Courier New', monospace;
    font-size: 0.8rem;
}

.field-badge {
    background: rgba(56, 189, 248, 0.1);
    border: 1px solid rgba(56, 189, 248, 0.3);
    color: #38bdf8;
    padding: 0.3rem 0.8rem;
    border-radius: 4px;
    font-weight: 700;
    text-transform: uppercase;
}

.status-badge {
    color: #00d285;
    border: 1px solid rgba(0, 210, 133, 0.3);
    padding: 0.3rem 0.8rem;
    border-radius: 4px;
    background: rgba(0, 210, 133, 0.05);
}

.monograph-title {
    font-size: 2.5rem;
    font-weight: 900;
    color: #ffffff;
    line-height: 1.3;
    margin: 0 0 1.5rem 0;
    letter-spacing: 0.5px;
}

.monograph-author-row {
    display: flex;
    align-items: center;
    gap: 1.5rem;
    margin-bottom: 1.5rem;
}

.author-name {
    color: #cbd5e1;
    font-size: 1.1rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.6rem;
}

.author-name::before {
    content: '👤';
    font-size: 1.2rem;
}

.monograph-tech-meta {
    display: flex;
    flex-wrap: wrap;
    gap: 1.5rem;
    font-family: 'Courier New', monospace;
    font-size: 0.85rem;
    color: #64748b;
    background: rgba(2, 6, 23, 0.6);
    padding: 1rem;
    border-radius: 6px;
    border: 1px dashed rgba(255, 255, 255, 0.1);
}

.meta-data-point span {
    color: #94a3b8;
    font-weight: 700;
}

.monograph-content-matrix {
    color: #94a3b8;
    font-size: 1.1rem;
    line-height: 1.8;
    background: linear-gradient(145deg, rgba(15, 23, 42, 0.7) 0%, rgba(2, 6, 23, 0.9) 100%);
    border: 1px solid rgba(255, 255, 255, 0.05);
    border-top: 3px solid #38bdf8;
    border-radius: 8px;
    padding: 3rem;
    backdrop-filter: blur(15px);
    box-shadow: 0 15px 35px rgba(0, 0, 0, 0.5);
}

.monograph-content-matrix h2, 
.monograph-content-matrix h3 {
    color: #ffffff;
    margin-top: 3rem;
    margin-bottom: 1.5rem;
    font-weight: 800;
    letter-spacing: 0.5px;
}

.monograph-content-matrix p {
    margin-bottom: 1.5rem;
}

.monograph-content-matrix blockquote {
    border-left: 3px solid #00d285;
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    color: #cbd5e1;
    background: rgba(0, 210, 133, 0.03);
    padding: 1.5rem;
    border-radius: 0 6px 6px 0;
}

.monograph-content-matrix a {
    color: #38bdf8;
    text-decoration: none;
    border-bottom: 1px dashed rgba(56, 189, 248, 0.5);
    transition: all 0.3s ease;
}

.monograph-content-matrix a:hover {
    color: #ffffff;
    border-bottom-style: solid;
}
</style>

<main id="main-content" style="background-color: #020617; background-image: linear-gradient(rgba(0, 210, 133, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 210, 133, 0.03) 1px, transparent 1px); background-size: 40px 40px;">
    <div class="journal-single-container">
        
        <?php while ( have_posts() ) : the_post(); 
            
            // Retrieve Metadata
            $doi    = get_post_meta( get_the_ID(), '_nastco_doi', true ) ?: 'DOI: PENDING';
            $author = get_post_meta( get_the_ID(), '_nastco_author', true ) ?: 'NASTCO Research Team';
            $status = get_post_meta( get_the_ID(), '_nastco_status', true ) ?: 'In Review';
            $date   = get_the_date('Y.m.d');
            
            // Retrieve Taxonomy
            $terms = get_the_terms( get_the_ID(), 'research_field' );
            $field = ( ! empty( $terms ) && ! is_wp_error( $terms ) ) ? $terms[0]->name : 'Multidisciplinary';
        ?>

        <!-- Tactical Return Link -->
        <a href="<?php echo esc_url( home_url( '/journal/' ) ); ?>" class="tactical-back-link">
            ← Return to Index
        </a>

        <!-- Monograph Header Data -->
        <header class="monograph-header">
            <div class="monograph-top-meta">
                <span class="field-badge"><?php echo esc_html( $field ); ?></span>
                <span class="status-badge">✓ <?php echo esc_html( strtoupper( $status ) ); ?></span>
            </div>
            
            <h1 class="monograph-title"><?php the_title(); ?></h1>
            
            <div class="monograph-author-row">
                <div class="author-name">Lead Researcher: <?php echo esc_html( $author ); ?></div>
            </div>

            <div class="monograph-tech-meta">
                <div class="meta-data-point">TIMESTAMP: <span><?php echo esc_html( $date ); ?></span></div>
                <div class="meta-data-point">IDENTIFIER: <span><?php echo esc_html( $doi ); ?></span></div>
                <div class="meta-data-point">CLEARANCE: <span>UNCLASSIFIED</span></div>
            </div>
        </header>

        <!-- Main Content Matrix -->
        <article class="monograph-content-matrix">
            <?php the_content(); ?>
        </article>

        <?php endwhile; ?>

    </div>
</main>

<?php get_footer(); ?>
