<?php
/**
 * Template Name: Public Procurement & Active Tenders Archive
 * Post Type Archive: procurement_tender
 * File: archive-procurement_tender.php
 */

get_header();

$current_time = time();

$tenders_query = new WP_Query( array(
    'post_type'      => 'procurement_tender',
    'post_status'    => 'publish',
    'posts_per_page' => -1,
    'orderby'        => 'meta_value',
    'meta_key'       => '_tender_deadline',
    'order'          => 'ASC',
    // Fallback order by post date if meta_key is missing
    'meta_query'     => array(
        'relation' => 'OR',
        array(
            'key'     => '_tender_deadline',
            'compare' => 'EXISTS',
        ),
        array(
            'key'     => '_tender_deadline',
            'compare' => 'NOT EXISTS',
        ),
    ),
) );

$category_labels = array(
    'works'    => 'Category A: Works & Civil Infrastructure',
    'goods'    => 'Category B: Laboratory Goods, Equipment & Chemicals',
    'services' => 'Category C: Consultancy & Non-Consultancy Services',
);
?>

<main class="site-main">

    <!-- 1. HERO HEADER -->
    <section class="about-hero"
        style="background: linear-gradient(135deg, var(--primary-dark) 0%, #0c3e27 100%); padding: clamp(3.5rem, 6vw, 5rem) 1.5rem; border-bottom: 4px solid var(--accent-gold);">
        <div class="container">
            <div style="max-width: 880px;">
                <span
                    style="display: inline-block; background: rgba(255,255,255,0.12); color: #86efac; padding: 0.35rem 0.9rem; border-radius: 9999px; font-size: 0.82rem; font-weight: 700; text-transform: uppercase; letter-spacing: 0.75px; margin-bottom: 1.25rem;">
                    Bureau of Public Procurement (BPP) Desk
                </span>
                <h1
                    style="font-size: clamp(2.2rem, 5vw, 3rem); font-weight: 800; line-height: 1.2; margin: 0 0 1.25rem 0; color: #ffffff;">
                    Public Procurement & Tender Solicitations
                </h1>
                <p style="font-size: 1.15rem; line-height: 1.7; color: #e5e7eb; margin: 0;">
                    Official notices for Expressions of Interest (EOI), Invitations to Tender (ITT), and Requests for
                    Quotations (RFQ) in compliance with the Public Procurement Act 2007.
                </p>
            </div>
        </div>
    </section>

    <!-- 2. STATUTORY ELIGIBILITY NOTICE -->
    <section
        style="background: var(--primary-light); border-bottom: 1px solid var(--border-color); padding: 1.75rem 1.5rem;">
        <div class="container">
            <div style="display: flex; gap: 1.25rem; align-items: center;">
                <span style="font-size: 2rem;">📜</span>
                <div>
                    <h3
                        style="color: var(--primary-dark); font-size: 1.05rem; font-weight: 800; margin: 0 0 0.25rem 0;">
                        Mandatory Eligibility Criteria</h3>
                    <p style="color: var(--text-main); font-size: 0.88rem; margin: 0; line-height: 1.5;">
                        All prospective contractors, suppliers, and consultants must provide valid evidence of
                        <strong>CAC Registration</strong>, <strong>Tax Clearance (TCC)</strong>, <strong>PENCOM
                            Compliance</strong>, <strong>ITF Certificate</strong>, <strong>NSITF Clearance</strong>, and
                        registration on the <strong>BPP National Database (IRR)</strong>.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- 3. TENDER LISTINGS -->
    <section style="padding: 4.5rem 1.5rem; background: #ffffff;">
        <div class="container">

            <div style="margin-bottom: 2.5rem;">
                <h2 style="font-size: 1.8rem; color: var(--primary-dark); font-weight: 800; margin: 0 0 0.5rem 0;">
                    Current Open Invitations to Tender (ITT)
                </h2>
                <p style="color: var(--text-muted); font-size: 1rem; margin: 0;">
                    Preview terms in-browser or download standard bidding documents before submission deadlines.
                </p>
            </div>

            <?php if ( $tenders_query->have_posts() ) : ?>
            <div style="display: flex; flex-direction: column; gap: 1.5rem;">
                <?php while ( $tenders_query->have_posts() ) : $tenders_query->the_post(); 
                        $tender_id    = get_the_ID();
                        $ref_no       = get_post_meta( $tender_id, '_tender_ref_no', true ) ?: 'REF-' . $tender_id;
                        $cat_slug     = get_post_meta( $tender_id, '_tender_category', true ) ?: 'goods';
                        $category_txt = $category_labels[ $cat_slug ] ?? ucfirst( $cat_slug );
                        $deadline_raw = get_post_meta( $tender_id, '_tender_deadline', true );
                        $opening_raw  = get_post_meta( $tender_id, '_tender_opening_date', true );
                        $tender_fee   = get_post_meta( $tender_id, '_tender_tender_fee', true );
                        $doc_url      = get_post_meta( $tender_id, '_tender_doc_url', true );
                        
                        $is_closed = false;
                        if ( ! empty( $deadline_raw ) && strtotime( $deadline_raw ) < $current_time ) {
                            $is_closed = true;
                        }
                    ?>
                <article
                    style="background: #ffffff; border: 1px solid var(--border-color); border-top: 4px solid <?php echo $is_closed ? '#94a3b8' : 'var(--primary-color)'; ?>; border-radius: 8px; padding: 2rem; box-shadow: var(--shadow-sm);">

                    <div
                        style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap; gap: 1rem; margin-bottom: 1rem;">
                        <div>
                            <span
                                style="background: var(--bg-light); color: var(--text-muted); font-family: monospace; font-size: 0.82rem; font-weight: 700; padding: 0.25rem 0.6rem; border-radius: 4px; border: 1px solid var(--border-color);">
                                REF: <?php echo esc_html( $ref_no ); ?>
                            </span>
                            <span
                                style="background: <?php echo $is_closed ? '#fee2e2; color: #991b1b;' : '#f0fdf4; color: #166534;'; ?> font-size: 0.78rem; font-weight: 800; padding: 0.25rem 0.6rem; border-radius: 4px; margin-left: 0.5rem; text-transform: uppercase;">
                                <?php echo $is_closed ? 'Closed / Under Evaluation' : 'Active Solicitation'; ?>
                            </span>
                        </div>
                        <span style="font-size: 0.85rem; font-weight: 700; color: var(--primary-dark);">
                            <?php echo esc_html( $category_txt ); ?>
                        </span>
                    </div>

                    <h3
                        style="font-size: 1.35rem; color: var(--primary-dark); font-weight: 800; margin: 0 0 1rem 0; line-height: 1.35;">
                        <?php the_title(); ?>
                    </h3>

                    <div style="font-size: 0.95rem; line-height: 1.6; color: var(--text-main); margin-bottom: 1.5rem;">
                        <?php the_content(); ?>
                    </div>

                    <!-- Deadlines & Tender Fee Box -->
                    <div
                        style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1rem; background: var(--bg-light); border: 1px solid var(--border-color); border-radius: 6px; padding: 1.25rem; margin-bottom: 1.25rem;">
                        <div>
                            <strong
                                style="color: var(--primary-dark); font-size: 0.8rem; text-transform: uppercase; display: block;">Submission
                                Deadline:</strong>
                            <span
                                style="color: <?php echo $is_closed ? '#dc2626' : 'var(--primary-color)'; ?>; font-weight: 700; font-size: 0.95rem;">
                                🗓️
                                <?php echo ! empty( $deadline_raw ) ? esc_html( date( 'M j, Y - g:i A', strtotime( $deadline_raw ) ) ) : 'Consult Document'; ?>
                            </span>
                        </div>

                        <?php if ( ! empty( $opening_raw ) ) : ?>
                        <div>
                            <strong
                                style="color: var(--primary-dark); font-size: 0.8rem; text-transform: uppercase; display: block;">Public
                                Bid Opening:</strong>
                            <span style="color: var(--text-main); font-weight: 600; font-size: 0.9rem;">
                                🏛️ <?php echo esc_html( date( 'M j, Y - g:i A', strtotime( $opening_raw ) ) ); ?>
                            </span>
                        </div>
                        <?php endif; ?>

                        <?php if ( ! empty( $tender_fee ) ) : ?>
                        <div>
                            <strong
                                style="color: var(--primary-dark); font-size: 0.8rem; text-transform: uppercase; display: block;">Processing
                                Fee:</strong>
                            <span style="color: var(--text-main); font-size: 0.88rem;">
                                💳 <?php echo esc_html( $tender_fee ); ?>
                            </span>
                        </div>
                        <?php endif; ?>
                    </div>

                    <!-- Action Buttons: In-Browser Preview & Direct Download -->
                    <div style="display: flex; justify-content: flex-end; gap: 0.6rem; flex-wrap: wrap;">
                        <?php if ( ! $is_closed && ! empty( $doc_url ) ) : ?>
                        <!-- In-Browser SBD PDF Preview Button -->
                        <button type="button" class="btn-pdf-preview" data-pdf-url="<?php echo esc_url( $doc_url ); ?>"
                            data-pdf-title="<?php echo esc_attr( '[' . $ref_no . '] ' . get_the_title() ); ?>">
                            👁️ Preview SBD (PDF)
                        </button>

                        <!-- Direct Download Button -->
                        <a href="<?php echo esc_url( $doc_url ); ?>" download
                            style="background: var(--bg-light); border: 1px solid var(--border-color); color: var(--primary-dark); padding: 0.65rem 1.25rem; border-radius: 6px; font-weight: 700; font-size: 0.88rem; text-decoration: none; display: inline-flex; align-items: center; gap: 6px;">
                            📥 Download SBD
                        </a>
                        <?php elseif ( $is_closed ) : ?>
                        <span
                            style="background: #e2e8f0; color: #64748b; padding: 0.65rem 1.25rem; border-radius: 6px; font-weight: 700; font-size: 0.88rem;">
                            Bidding Elapsed
                        </span>
                        <?php else : ?>
                        <a href="mailto:procurement@shestco.gov.ng"
                            style="background: var(--primary-color); color: #ffffff; padding: 0.65rem 1.25rem; border-radius: 6px; font-weight: 700; font-size: 0.88rem; text-decoration: none;">
                            Inquire with Procurement Desk
                        </a>
                        <?php endif; ?>
                    </div>

                </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <?php else : ?>
            <div
                style="background: var(--bg-light); border: 1px solid var(--border-color); border-radius: 8px; padding: 3.5rem; text-align: center;">
                <div style="font-size: 2.5rem; margin-bottom: 0.5rem;">📋</div>
                <h3 style="color: var(--primary-dark); font-size: 1.35rem; margin: 0 0 0.5rem 0;">No Active Tender
                    Solicitations at this Time</h3>
                <p
                    style="color: var(--text-muted); font-size: 0.95rem; max-width: 600px; margin: 0 auto 1.5rem auto; line-height: 1.6;">
                    All statutory tenders are advertised in the Federal Tenders Journal and national dailies.
                </p>
                <a href="mailto:procurement@shestco.gov.ng"
                    style="background: var(--primary-color); color: #fff; text-decoration: none; padding: 0.65rem 1.25rem; border-radius: 6px; font-weight: 600;">
                    Contact Procurement Secretariat
                </a>
            </div>
            <?php endif; ?>

        </div>
    </section>

</main>

<!-- =========================================================================
     FULLSCREEN PDF VIEWER MODAL CONTAINER
     ========================================================================= -->
<div id="pdf-viewer-modal" class="pdf-modal-backdrop" aria-hidden="true" role="dialog" aria-modal="true"
    style="display: none;">
    <div class="pdf-modal-container">

        <div class="pdf-modal-header">
            <div class="pdf-modal-title-wrap">
                <span class="pdf-modal-badge">Bidding Document</span>
                <h3 id="pdf-modal-title" class="pdf-modal-title">Standard Bidding Document Preview</h3>
            </div>

            <div class="pdf-modal-actions">
                <a id="pdf-modal-newtab-btn" href="#" target="_blank" rel="noopener noreferrer" class="pdf-modal-btn"
                    title="Open in New Tab">
                    ↗ Open Tab
                </a>
                <a id="pdf-modal-download-btn" href="#" download class="pdf-modal-btn pdf-modal-btn-download"
                    title="Download Document">
                    📥 Download
                </a>
                <button type="button" id="pdf-modal-close-btn" class="pdf-modal-btn-close"
                    aria-label="Close Preview">&times;</button>
            </div>
        </div>

        <div class="pdf-modal-body">
            <div id="pdf-modal-loader" class="pdf-modal-loader">
                <div class="pdf-modal-spinner"></div>
                <p>Loading Standard Bidding Document...</p>
            </div>
            <iframe id="pdf-modal-iframe" class="pdf-modal-iframe" src="" frameborder="0"
                title="PDF Document Viewer"></iframe>
        </div>

    </div>
</div>

<span class="<?php echo $is_closed ? '' : 'badge-active-pulse'; ?>"
    style="background: <?php echo $is_closed ? '#fee2e2; color: #991b1b;' : '#f0fdf4; color: #166534;'; ?> font-size: 0.78rem; font-weight: 800; padding: 0.3rem 0.75rem; border-radius: 9999px; text-transform: uppercase;">
    <?php echo $is_closed ? 'Closed / Evaluation' : 'Active Solicitation'; ?>
</span>
<?php
get_footer();