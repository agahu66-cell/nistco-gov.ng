<?php
/**
 * NISTCO / SHESTCO Custom Meta Boxes
 * Handles custom fields for Publications, Procurement Tenders, and Commercial Patents.
 * File: inc/meta-boxes.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/* =========================================================================
   1. ENQUEUE ADMIN MEDIA & SCRIPT FOR DOCUMENT UPLOADS
   ========================================================================= */

function shestco_admin_meta_box_assets( $hook ) {
    global $post_type;

    if ( in_array( $post_type, array( 'publication', 'procurement_tender', 'patent' ), true ) ) {
        wp_enqueue_media();

        wp_add_inline_script( 'jquery', '
            jQuery(document).ready(function($) {
                $(document).on("click", ".shestco-upload-btn", function(e) {
                    e.preventDefault();
                    var $button = $(this);
                    var targetInputId = $button.data("target");
                    var $targetInput = $("#" + targetInputId);

                    var fileFrame = wp.media({
                        title: "Select or Upload Official Document",
                        button: { text: "Use This Document" },
                        multiple: false
                    });

                    fileFrame.on("select", function() {
                        var attachment = fileFrame.state().get("selection").first().toJSON();
                        $targetInput.val(attachment.url);
                    });

                    fileFrame.open();
                });
            });
        ' );
    }
}
add_action( 'admin_enqueue_scripts', 'shestco_admin_meta_box_assets' );

/* =========================================================================
   2. REGISTER CUSTOM META BOXES
   ========================================================================= */

function shestco_register_custom_meta_boxes() {
    // 1. Publication Details
    add_meta_box(
        'shestco_publication_meta',
        __( '📚 Publication Metadata & Repository Details', 'shestco-theme' ),
        'shestco_render_publication_meta_box',
        'publication',
        'normal',
        'high'
    );

    // 2. Procurement Tender Details
    add_meta_box(
        'shestco_tender_meta',
        __( '📋 BPP Procurement Tender Details & SBD Solicitation', 'shestco-theme' ),
        'shestco_render_tender_meta_box',
        'procurement_tender',
        'normal',
        'high'
    );

    // 3. Commercial Patents & Technologies
    add_meta_box(
        'shestco_patent_meta',
        __( '⚡ NOTAP Patent & Technology Transfer Details', 'shestco-theme' ),
        'shestco_render_patent_meta_box',
        array( 'patent', 'page' ), // Can also attach to dedicated CPT or Innovation pages
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'shestco_register_custom_meta_boxes' );

/* =========================================================================
   3. RENDER META BOXES
   ========================================================================= */

/**
 * Render: Publication Meta Box
 */
function shestco_render_publication_meta_box( $post ) {
    wp_nonce_field( 'shestco_save_publication_meta', 'shestco_publication_nonce' );

    $authors     = get_post_meta( $post->ID, '_publication_authors', true );
    $year        = get_post_meta( $post->ID, '_publication_year', true ) ?: date( 'Y' );
    $doi         = get_post_meta( $post->ID, '_publication_doi', true );
    $pdf_url     = get_post_meta( $post->ID, '_publication_url', true );
    $centre_id   = get_post_meta( $post->ID, '_publication_centre_id', true );

    // Query available Research Centres
    $centres = get_posts( array(
        'post_type'      => 'research_centre',
        'posts_per_page' => -1,
        'post_status'    => 'publish',
        'orderby'        => 'title',
        'order'          => 'ASC',
    ) );
    ?>
<style>
.shestco-meta-table {
    width: 100%;
    border-collapse: collapse;
}

.shestco-meta-table th {
    width: 220px;
    text-align: left;
    padding: 12px 10px;
    font-weight: 600;
    color: #042416;
}

.shestco-meta-table td {
    padding: 10px;
}

.shestco-meta-input {
    width: 100%;
    max-width: 550px;
    padding: 6px 10px;
}

.shestco-meta-desc {
    font-size: 12px;
    color: #64748b;
    margin-top: 4px;
}
</style>

<table class="shestco-meta-table">
    <tr>
        <th><label for="shestco_pub_authors"><?php esc_html_e( 'Author(s) / Fellows:', 'shestco-theme' ); ?></label>
        </th>
        <td>
            <input type="text" id="shestco_pub_authors" name="shestco_pub_authors"
                value="<?php echo esc_attr( $authors ); ?>" class="shestco-meta-input"
                placeholder="e.g. Prof. C. O. Eze, Dr. Fatima Abdullahi">
            <div class="shestco-meta-desc">
                <?php esc_html_e( 'Separate multiple authors with commas. Used for BibTeX/RIS citation generator.', 'shestco-theme' ); ?>
            </div>
        </td>
    </tr>
    <tr>
        <th><label for="shestco_pub_year"><?php esc_html_e( 'Publication Year:', 'shestco-theme' ); ?></label></th>
        <td>
            <input type="number" id="shestco_pub_year" name="shestco_pub_year" value="<?php echo esc_attr( $year ); ?>"
                class="shestco-meta-input" style="max-width: 140px;" min="1990" max="2099">
        </td>
    </tr>
    <tr>
        <th><label
                for="shestco_pub_doi"><?php esc_html_e( 'Digital Object Identifier (DOI):', 'shestco-theme' ); ?></label>
        </th>
        <td>
            <input type="text" id="shestco_pub_doi" name="shestco_pub_doi" value="<?php echo esc_attr( $doi ); ?>"
                class="shestco-meta-input" placeholder="e.g. 10.1016/j.biortech.2026.12845">
        </td>
    </tr>
    <tr>
        <th><label
                for="shestco_pub_centre"><?php esc_html_e( 'Affiliated Research Centre:', 'shestco-theme' ); ?></label>
        </th>
        <td>
            <select id="shestco_pub_centre" name="shestco_pub_centre" class="shestco-meta-input">
                <option value=""><?php esc_html_e( '— Select Research Centre —', 'shestco-theme' ); ?></option>
                <?php foreach ( $centres as $centre ) : ?>
                <option value="<?php echo esc_attr( $centre->ID ); ?>" <?php selected( $centre_id, $centre->ID ); ?>>
                    <?php echo esc_html( $centre->post_title ); ?>
                </option>
                <?php endforeach; ?>
            </select>
        </td>
    </tr>
    <tr>
        <th><label
                for="shestco_pub_pdf_url"><?php esc_html_e( 'Full-Text PDF Document URL:', 'shestco-theme' ); ?></label>
        </th>
        <td>
            <div style="display: flex; gap: 8px; max-width: 550px;">
                <input type="url" id="shestco_pub_pdf_url" name="shestco_pub_pdf_url"
                    value="<?php echo esc_url( $pdf_url ); ?>" class="shestco-meta-input" placeholder="https://...">
                <button type="button" class="button shestco-upload-btn"
                    data-target="shestco_pub_pdf_url"><?php esc_html_e( 'Upload / Select PDF', 'shestco-theme' ); ?></button>
            </div>
            <div class="shestco-meta-desc">
                <?php esc_html_e( 'Provides instant inline viewing via the PDF Viewer modal.', 'shestco-theme' ); ?>
            </div>
        </td>
    </tr>
</table>
<?php
}

/**
 * Render: Procurement Tender Meta Box
 */
function shestco_render_tender_meta_box( $post ) {
    wp_nonce_field( 'shestco_save_tender_meta', 'shestco_tender_nonce' );

    $ref_no   = get_post_meta( $post->ID, '_tender_ref_no', true ) ?: 'NISTCO/PROC/' . date( 'Y' ) . '/' . $post->ID;
    $deadline = get_post_meta( $post->ID, '_tender_deadline', true );
    $doc_url  = get_post_meta( $post->ID, '_tender_doc_url', true );
    ?>
<table class="shestco-meta-table">
    <tr>
        <th><label
                for="shestco_tender_ref_no"><?php esc_html_e( 'Tender Reference Number (BPP):', 'shestco-theme' ); ?></label>
        </th>
        <td>
            <input type="text" id="shestco_tender_ref_no" name="shestco_tender_ref_no"
                value="<?php echo esc_attr( $ref_no ); ?>" class="shestco-meta-input"
                placeholder="e.g. NISTCO/PROC/WORKS/2026/04">
        </td>
    </tr>
    <tr>
        <th><label
                for="shestco_tender_deadline"><?php esc_html_e( 'Bid Submission Deadline:', 'shestco-theme' ); ?></label>
        </th>
        <td>
            <input type="datetime-local" id="shestco_tender_deadline" name="shestco_tender_deadline"
                value="<?php echo esc_attr( $deadline ? date( 'Y-m-d\TH:i', strtotime( $deadline ) ) : '' ); ?>"
                class="shestco-meta-input" style="max-width: 260px;">
            <div class="shestco-meta-desc">
                <?php esc_html_e( 'Active notices are dynamically sorted by nearest upcoming closing deadline.', 'shestco-theme' ); ?>
            </div>
        </td>
    </tr>
    <tr>
        <th><label
                for="shestco_tender_doc_url"><?php esc_html_e( 'Standard Bidding Document (SBD) PDF:', 'shestco-theme' ); ?></label>
        </th>
        <td>
            <div style="display: flex; gap: 8px; max-width: 550px;">
                <input type="url" id="shestco_tender_doc_url" name="shestco_tender_doc_url"
                    value="<?php echo esc_url( $doc_url ); ?>" class="shestco-meta-input" placeholder="https://...">
                <button type="button" class="button shestco-upload-btn"
                    data-target="shestco_tender_doc_url"><?php esc_html_e( 'Upload SBD File', 'shestco-theme' ); ?></button>
            </div>
        </td>
    </tr>
</table>
<?php
}

/**
 * Render: Commercial Patent & Technology Meta Box
 */
function shestco_render_patent_meta_box( $post ) {
    wp_nonce_field( 'shestco_save_patent_meta', 'shestco_patent_nonce' );

    $patent_ref = get_post_meta( $post->ID, '_patent_ref_no', true );
    $trl        = get_post_meta( $post->ID, '_patent_trl', true ) ?: '8';
    $model      = get_post_meta( $post->ID, '_patent_licensing_model', true ) ?: 'Non-Exclusive Commercial License';
    $status     = get_post_meta( $post->ID, '_patent_status', true ) ?: 'ready';
    $centre     = get_post_meta( $post->ID, '_patent_centre', true ) ?: 'biotech';
    ?>
<table class="shestco-meta-table">
    <tr>
        <th><label
                for="shestco_patent_ref_no"><?php esc_html_e( 'NOTAP Patent Reference No:', 'shestco-theme' ); ?></label>
        </th>
        <td>
            <input type="text" id="shestco_patent_ref_no" name="shestco_patent_ref_no"
                value="<?php echo esc_attr( $patent_ref ); ?>" class="shestco-meta-input"
                placeholder="e.g. NG/P/2026/00821">
        </td>
    </tr>
    <tr>
        <th><label
                for="shestco_patent_trl"><?php esc_html_e( 'Technology Readiness Level (TRL):', 'shestco-theme' ); ?></label>
        </th>
        <td>
            <select id="shestco_patent_trl" name="shestco_patent_trl" class="shestco-meta-input"
                style="max-width: 280px;">
                <option value="1" <?php selected( $trl, '1' ); ?>>TRL 1: Basic Principles Observed</option>
                <option value="2" <?php selected( $trl, '2' ); ?>>TRL 2: Technology Concept Formulated</option>
                <option value="3" <?php selected( $trl, '3' ); ?>>TRL 3: Experimental Proof of Concept</option>
                <option value="4" <?php selected( $trl, '4' ); ?>>TRL 4: Technology Validated in Lab</option>
                <option value="5" <?php selected( $trl, '5' ); ?>>TRL 5: Validated in Relevant Environment</option>
                <option value="6" <?php selected( $trl, '6' ); ?>>TRL 6: Demonstrated in Relevant Environment</option>
                <option value="7" <?php selected( $trl, '7' ); ?>>TRL 7: System Prototype Demonstrated</option>
                <option value="8" <?php selected( $trl, '8' ); ?>>TRL 8: System Complete & Qualified</option>
                <option value="9" <?php selected( $trl, '9' ); ?>>TRL 9: Commercial Deployment</option>
            </select>
        </td>
    </tr>
    <tr>
        <th><label
                for="shestco_patent_centre"><?php esc_html_e( 'Discipline / Originating Centre:', 'shestco-theme' ); ?></label>
        </th>
        <td>
            <select id="shestco_patent_centre" name="shestco_patent_centre" class="shestco-meta-input"
                style="max-width: 280px;">
                <option value="biotech" <?php selected( $centre, 'biotech' ); ?>>🧬 Biotechnology (BARC)</option>
                <option value="simulation" <?php selected( $centre, 'simulation' ); ?>>💻 Simulation &amp; HPC (AMSARC)
                </option>
                <option value="chemistry" <?php selected( $centre, 'chemistry' ); ?>>🧪 Chemical Sciences (CARC)
                </option>
                <option value="physics" <?php selected( $centre, 'physics' ); ?>>🔬 Physical Sciences (PARC)</option>
                <option value="nuclear" <?php selected( $centre, 'nuclear' ); ?>>⚛️ Nuclear Technology Centre (NTC)
                </option>
                <option value="engineering" <?php selected( $centre, 'engineering' ); ?>>⚙️ Precision Engineering
                    Workshop</option>
            </select>
        </td>
    </tr>
    <tr>
        <th><label for="shestco_patent_model"><?php esc_html_e( 'Licensing Model:', 'shestco-theme' ); ?></label></th>
        <td>
            <input type="text" id="shestco_patent_model" name="shestco_patent_model"
                value="<?php echo esc_attr( $model ); ?>" class="shestco-meta-input"
                placeholder="e.g. Non-Exclusive License, Joint Venture, Tier 1">
        </td>
    </tr>
    <tr>
        <th><label
                for="shestco_patent_status"><?php esc_html_e( 'Commercial Status Indicator:', 'shestco-theme' ); ?></label>
        </th>
        <td>
            <select id="shestco_patent_status" name="shestco_patent_status" class="shestco-meta-input"
                style="max-width: 240px;">
                <option value="ready" <?php selected( $status, 'ready' ); ?>>● Production Ready</option>
                <option value="deployed" <?php selected( $status, 'deployed' ); ?>>● Actively Commercialized</option>
                <option value="pilot" <?php selected( $status, 'pilot' ); ?>>● Pilot Scale Testing</option>
            </select>
        </td>
    </tr>
</table>
<?php
}

/* =========================================================================
   4. DATA SANITIZATION & SECURE SAVE HANDLER
   ========================================================================= */

function shestco_save_custom_meta_box_data( $post_id ) {
    // Avoid autosaves
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }

    // Check permissions
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    // 1. Save Publication Meta
    if ( isset( $_POST['shestco_publication_nonce'] ) && wp_verify_nonce( $_POST['shestco_publication_nonce'], 'shestco_save_publication_meta' ) ) {
        if ( isset( $_POST['shestco_pub_authors'] ) ) {
            update_post_meta( $post_id, '_publication_authors', sanitize_text_field( $_POST['shestco_pub_authors'] ) );
        }
        if ( isset( $_POST['shestco_pub_year'] ) ) {
            update_post_meta( $post_id, '_publication_year', absint( $_POST['shestco_pub_year'] ) );
        }
        if ( isset( $_POST['shestco_pub_doi'] ) ) {
            update_post_meta( $post_id, '_publication_doi', sanitize_text_field( $_POST['shestco_pub_doi'] ) );
        }
        if ( isset( $_POST['shestco_pub_centre'] ) ) {
            update_post_meta( $post_id, '_publication_centre_id', absint( $_POST['shestco_pub_centre'] ) );
        }
        if ( isset( $_POST['shestco_pub_pdf_url'] ) ) {
            update_post_meta( $post_id, '_publication_url', esc_url_raw( $_POST['shestco_pub_pdf_url'] ) );
        }
    }

    // 2. Save Tender Meta
    if ( isset( $_POST['shestco_tender_nonce'] ) && wp_verify_nonce( $_POST['shestco_tender_nonce'], 'shestco_save_tender_meta' ) ) {
        if ( isset( $_POST['shestco_tender_ref_no'] ) ) {
            update_post_meta( $post_id, '_tender_ref_no', sanitize_text_field( $_POST['shestco_tender_ref_no'] ) );
        }
        if ( isset( $_POST['shestco_tender_deadline'] ) ) {
            $deadline = sanitize_text_field( $_POST['shestco_tender_deadline'] );
            if ( $deadline ) {
                update_post_meta( $post_id, '_tender_deadline', date( 'Y-m-d H:i:s', strtotime( $deadline ) ) );
            } else {
                delete_post_meta( $post_id, '_tender_deadline' );
            }
        }
        if ( isset( $_POST['shestco_tender_doc_url'] ) ) {
            update_post_meta( $post_id, '_tender_doc_url', esc_url_raw( $_POST['shestco_tender_doc_url'] ) );
        }
    }

    // 3. Save Patent Meta
    if ( isset( $_POST['shestco_patent_nonce'] ) && wp_verify_nonce( $_POST['shestco_patent_nonce'], 'shestco_save_patent_meta' ) ) {
        if ( isset( $_POST['shestco_patent_ref_no'] ) ) {
            update_post_meta( $post_id, '_patent_ref_no', sanitize_text_field( $_POST['shestco_patent_ref_no'] ) );
        }
        if ( isset( $_POST['shestco_patent_trl'] ) ) {
            update_post_meta( $post_id, '_patent_trl', sanitize_text_field( $_POST['shestco_patent_trl'] ) );
        }
        if ( isset( $_POST['shestco_patent_centre'] ) ) {
            update_post_meta( $post_id, '_patent_centre', sanitize_text_field( $_POST['shestco_patent_centre'] ) );
        }
        if ( isset( $_POST['shestco_patent_model'] ) ) {
            update_post_meta( $post_id, '_patent_licensing_model', sanitize_text_field( $_POST['shestco_patent_model'] ) );
        }
        if ( isset( $_POST['shestco_patent_status'] ) ) {
            update_post_meta( $post_id, '_patent_status', sanitize_text_field( $_POST['shestco_patent_status'] ) );
        }
    }
}
add_action( 'save_post', 'shestco_save_custom_meta_box_data' );