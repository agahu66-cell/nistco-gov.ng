<?php
/**
 * Template Name: Public Tenders & Solicitations Desk
 * Description: Dedicated portal for Bureau of Public Procurement (BPP) notices, downloadable Standard Bidding Documents (SBDs), closing countdowns, and bid opening schedules.
 * File: page-tenders.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

get_header();

$theme_uri = get_template_directory_uri();
$paged     = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;

// Query Active and Archival Tenders
$tenders_query = new WP_Query( array(
    'post_type'      => 'procurement_tender',
    'post_status'    => 'publish',
    'posts_per_page' => 9,
    'paged'          => $paged,
    'meta_key'       => '_tender_deadline',
    'orderby'        => 'meta_value',
    'order'          => 'ASC',
) );

$active_count = 0;
?>

<main class="site-main mc-homepage">

    <!-- =========================================================================
         1. HERO SECTION: 3D BIDDING VAULT & BPP COMPLIANCE MATRIX
         ========================================================================= -->
    <section class="mc-hero-section mc-tenders-hero">
        <div class="mc-hero-ambient-1"></div>
        <div class="mc-hero-ambient-2"></div>
        <div class="mc-hero-pattern"></div>

        <div class="container mc-hero-container">
            <div class="mc-hero-grid">

                <!-- Left Column: Solicitations Header -->
                <div class="mc-hero-content">
                    <nav aria-label="Breadcrumb" class="about-breadcrumb">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
                        <span>&rsaquo;</span>
                        <span class="breadcrumb-current">Public Tenders Desk</span>
                    </nav>

                    <div class="mc-hero-badges">
                        <span class="mc-pill mc-pill-green">BPP Statutory Solicitations</span>
                        <span class="mc-pill mc-pill-gold">Federal Bidding Portal</span>
                    </div>

                    <h1 class="mc-hero-title">
                        Invitations to Tender (ITT) &amp; Expressions of Interest
                    </h1>

                    <p class="mc-hero-subtitle">
                        Official solicitations for capital research projects, specialized laboratory instrumentation,
                        pilot plant civil works, and technical consultancies in accordance with the Public Procurement
                        Act 2007.
                    </p>

                    <div class="mc-hero-actions" style="margin-bottom: 2rem;">
                        <a href="#tenders-grid" class="mc-btn mc-btn-primary">
                            <span>📋</span>
                            <span>Explore Active Solicitations</span>
                        </a>

                        <a href="<?php echo esc_url( home_url( '/procurement/#bidding-guidelines' ) ); ?>"
                            class="mc-btn mc-btn-secondary">
                            <span>📜</span>
                            <span>Statutory Vendor Checklist</span>
                        </a>

                        <a href="#tender-faqs" class="mc-btn mc-btn-gold">
                            <span>❓</span>
                            <span>Bidding Guidelines &rarr;</span>
                        </a>
                    </div>

                    <div class="about-nav-pill-group">
                        <span class="jump-label">Jump To:</span>
                        <a href="#tenders-grid" class="about-nav-pill">📋 Active Notices</a>
                        <a href="#tender-schedule" class="about-nav-pill">🗓️ Bid Opening Schedule</a>
                        <a href="#tender-faqs" class="about-nav-pill">❓ Vendor FAQs</a>
                    </div>
                </div>

                <!-- Right Column: ACTIVE MOTION SVG (3D Bidding Vault & Kinetic Cogs) -->
                <div class="about-3d-viewport">
                    <div class="about-3d-stage">
                        <svg class="mc-active-svg-canvas" viewBox="0 0 320 320" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <defs>
                                <linearGradient id="tenderVaultGrad" x1="0%" y1="0%" x2="100%" y2="100%">
                                    <stop offset="0%" stop-color="#fde047" />
                                    <stop offset="50%" stop-color="#0d5c3a" />
                                    <stop offset="100%" stop-color="#042416" />
                                </linearGradient>
                            </defs>

                            <!-- Vault Geometry Frame -->
                            <rect x="45" y="45" width="230" height="230" rx="20" fill="none" stroke="#86efac"
                                stroke-width="2.5" class="svg-rot-cw-slow" />
                            <circle cx="160" cy="160" r="85" fill="none" stroke="url(#tenderVaultGrad)" stroke-width="2"
                                stroke-dasharray="8 4" class="svg-rot-ccw-mid" />

                            <!-- Kinetic Locking Bolts -->
                            <line x1="160" y1="45" x2="160" y2="275" stroke="#fde047" stroke-width="1.5"
                                stroke-dasharray="4 4" />
                            <line x1="45" y1="160" x2="275" y2="160" stroke="#fde047" stroke-width="1.5"
                                stroke-dasharray="4 4" />

                            <!-- Central Vault Key Hub -->
                            <g class="svg-pulse-core">
                                <circle cx="160" cy="160" r="28" fill="#042416" stroke="#fde047" stroke-width="3" />
                                <text x="160" y="168" text-anchor="middle" font-size="20" fill="#fde047">🏛️</text>
                            </g>
                        </svg>
                    </div>
                </div>

            </div>
        </div>

        <!-- Docked BPP Statutory Factlet Ribbon -->
        <div class="about-factlet-bar">
            <div class="container about-factlet-container">
                <div class="factlet-item">
                    <span class="factlet-kicker">Regulatory Compliance</span>
                    <strong class="factlet-value">Bureau of Public Procurement (BPP)</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Bid Submission Venue</span>
                    <strong class="factlet-value">Procurement Directorate, Sheda</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Public Opening Format</span>
                    <strong class="factlet-value">Live Stream &amp; In-Person (Complex Auditorium)</strong>
                </div>
                <div class="factlet-item">
                    <span class="factlet-kicker">Procurement Contact</span>
                    <strong class="factlet-value">procurement@shestco.gov.ng</strong>
                </div>
            </div>
        </div>
    </section>

    <!-- =========================================================================
         2. ACTIVE PUBLIC TENDERS GRID
         ========================================================================= -->
    <section id="tenders-grid" class="mc-section mc-bg-white">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-pubs-header">
                <div>
                    <span class="mc-section-kicker">Public Procurement Desk</span>
                    <h2 class="mc-section-title">Active Solicitations &amp; Tenders Directory</h2>
                    <p class="mc-section-lead" style="margin-top: 0.25rem;">
                        Click on any tender notice to preview its Standard Bidding Document (SBD) or download detailed
                        lots and scope specifications.
                    </p>
                </div>
                <span style="font-size: 0.88rem; color: var(--mc-text-muted);">
                    Showing Page <?php echo esc_html( $paged ); ?> of
                    <?php echo esc_html( $tenders_query->max_num_pages ?: 1 ); ?>
                </span>
            </div>

            <?php if ( $tenders_query->have_posts() ) : ?>
            <div class="mc-pubs-grid">
                <?php while ( $tenders_query->have_posts() ) : $tenders_query->the_post(); 
                    $tid      = get_the_ID();
                    $ref_no   = get_post_meta( $tid, '_tender_ref_no', true ) ?: 'NISTCO/PROC/' . $tid;
                    $deadline = get_post_meta( $tid, '_tender_deadline', true );
                    $doc_url  = get_post_meta( $tid, '_tender_doc_url', true );
                    $is_open  = $deadline ? ( strtotime( $deadline ) >= current_time( 'timestamp' ) ) : true;
                ?>
                <article class="mc-pub-card reveal-on-scroll">
                    <div class="mc-pub-pills">
                        <?php if ( $is_open ) : ?>
                        <span class="mc-badge-danger">Active BPP Tender</span>
                        <?php else : ?>
                        <span class="mc-pub-year" style="background:#cbd5e1; color:#475569;">Closed</span>
                        <?php endif; ?>
                        <span class="mc-pub-year">[<?php echo esc_html( $ref_no ); ?>]</span>
                    </div>

                    <h3 class="mc-pub-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>

                    <p class="mc-pub-excerpt">
                        <?php echo wp_trim_words( get_the_excerpt(), 22 ); ?>
                    </p>

                    <?php if ( $deadline ) : ?>
                    <div
                        style="font-size: 0.82rem; color: #b91c1c; font-weight: 700; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 6px;">
                        <span>⏳ Closing Deadline:</span>
                        <span><?php echo esc_html( date( 'M j, Y - g:i A', strtotime( $deadline ) ) ); ?></span>
                    </div>
                    <?php endif; ?>

                    <div class="mc-pub-footer">
                        <?php if ( ! empty( $doc_url ) ) : ?>
                        <button type="button" class="btn-pdf-preview mc-btn-preview"
                            data-pdf-url="<?php echo esc_url( $doc_url ); ?>"
                            data-pdf-title="<?php echo esc_attr( '[' . $ref_no . '] ' . get_the_title() ); ?>">
                            👁️ Preview SBD
                        </button>
                        <?php endif; ?>

                        <a href="<?php the_permalink(); ?>" class="mc-btn-cite"
                            style="text-decoration: none !important;">
                            Details &rarr;
                        </a>
                    </div>
                </article>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>

            <!-- Numbered Pagination -->
            <div style="margin-top: 3.5rem; display: flex; justify-content: center; gap: 0.5rem;">
                <?php
                echo paginate_links( array(
                    'total'     => $tenders_query->max_num_pages,
                    'current'   => $paged,
                    'prev_text' => '&larr; Previous',
                    'next_text' => 'Next &rarr;',
                    'type'      => 'list',
                ) );
                ?>
            </div>

            <?php else : ?>
            <div class="inno-no-results-card">
                <span class="no-results-icon">📋</span>
                <h3>No Solicitations Found</h3>
                <p>New tender notices will be published here upon statutory approval by the Ministerial Tenders Board.
                </p>
            </div>
            <?php endif; ?>

        </div>
    </section>

    <!-- =========================================================================
         3. STATUTORY TENDER BID OPENING SCHEDULE & VENUE
         ========================================================================= -->
    <section id="tender-schedule" class="mc-section mc-bg-parchment mc-border-top mc-border-bottom">
        <div class="container" style="max-width: 1160px; margin: 0 auto;">

            <div class="mc-section-header mc-text-center">
                <span class="mc-section-kicker">Public Transparency Protocol</span>
                <h2 class="mc-section-title">Bid Submission &amp; Public Opening Rules</h2>
                <p class="mc-section-lead">
                    In compliance with the Public Procurement Act 2007, tender openings are conducted openly in the
                    presence of bidders, civil society, and anti-corruption observers.
                </p>
            </div>

            <div class="inno-steps-grid">
                <div class="inno-step-item reveal-on-scroll">
                    <div class="step-num">01</div>
                    <h3 class="step-title">Strict Deadline Adherence</h3>
                    <p class="step-desc">All physical bids must be submitted into the designated Tenders Box at the
                        Procurement Directorate before 12:00 Noon on the stated deadline date. Late bids are rejected
                        unopened.</p>
                </div>

                <div class="inno-step-item reveal-on-scroll delay-100">
                    <div class="step-num">02</div>
                    <h3 class="step-title">Immediate Public Opening</h3>
                    <p class="step-desc">Technical envelopes are opened immediately following the 12:00 Noon deadline in
                        the Complex Main Auditorium, Sheda, Abuja.</p>
                </div>

                <div class="inno-step-item reveal-on-scroll delay-200">
                    <div class="step-num">03</div>
                    <h3 class="step-title">Observer Presence</h3>
                    <p class="step-desc">Representatives of non-governmental organizations, professional bodies, and
                        anti-corruption observers (ACTU/ICPC) are invited to witness the opening sessions.</p>
                </div>

                <div class="inno-step-item reveal-on-scroll delay-300">
                    <div class="step-num">04</div>
                    <h3 class="step-title">Financial Bid Unsealing</h3>
                    <p class="step-desc">Only bidders that successfully satisfy the pre-qualification technical
                        benchmark will be invited to the subsequent financial bid-opening session.</p>
                </div>
            </div>

            <!-- Tenders Board Contact Callout -->
            <div id="tender-faqs" class="inno-dispatch-box reveal-on-scroll" style="margin-top: 3.5rem;">
                <div class="dispatch-left">
                    <span class="dispatch-kicker">Tenders Board Desk</span>
                    <h3 class="dispatch-title">Official Inquiries &amp; Pre-Bid Clarifications</h3>
                    <p class="dispatch-desc">
                        For official technical clarifications regarding specific lot requirements or Standard Bidding
                        Documents, contact the Head of Procurement.
                    </p>
                </div>
                <div class="dispatch-right">
                    <a href="mailto:procurement@shestco.gov.ng" class="mc-btn mc-btn-primary"
                        style="font-size: 0.95rem; padding: 0.85rem 1.75rem;">
                        <span>✉️</span>
                        <span>Contact Tenders Board</span>
                    </a>
                </div>
            </div>

        </div>
    </section>

</main>

<?php
get_footer();