<?php
/**
 * Nigeria Innovation, Science and Technology Complex (NISTCO)
 * Theme Bootstrap Loader
 * File: functions.php
 *
 * @package NistcoTheme
 */

// ===============================
// 1. Register AJAX actions
// ===============================
add_action('wp_ajax_nistco_get_citation', 'nistco_get_citation_handler');
add_action('wp_ajax_nopriv_nistco_get_citation', 'nistco_get_citation_handler');

// ===============================
// 2. Define the handler function
// ===============================
function nistco_get_citation_handler() {
    $post_id = isset($_GET['post_id']) ? intval($_GET['post_id']) : 0;
    $format  = isset($_GET['format']) ? sanitize_text_field($_GET['format']) : 'bibtex';

    if (!$post_id) {
        wp_send_json_error('Invalid post ID');
    }

    // Fetch citation from post meta (you can adjust to your data source)
    if ($format === 'bibtex') {
        $citation = get_post_meta($post_id, '_citation_bibtex', true);
    } else {
        $citation = get_post_meta($post_id, '_citation_ris', true);
    }

    if (!$citation) {
        $citation = 'Citation not available.';
    }

    // Return plain text response
    echo esc_textarea($citation);
    wp_die(); // Important to end AJAX properly
}

// ===============================
// 3. Add Citation Meta Box
// ===============================
function nistco_add_citation_meta_box() {
    add_meta_box(
        'nistco_citation_meta',
        __('Publication Citations', 'nistco'),
        'nistco_render_citation_meta_box',
        'publication', // Post type where citations are stored
        'normal',
        'default'
    );
}
add_action('add_meta_boxes', 'nistco_add_citation_meta_box');



function nistco_render_citation_meta_box($post) {
    $bibtex = get_post_meta($post->ID, '_citation_bibtex', true);
    $ris    = get_post_meta($post->ID, '_citation_ris', true);

    wp_nonce_field('nistco_citation_meta_nonce', 'nistco_citation_meta_nonce_field');
    ?>
<p><label for="citation_bibtex"><?php _e('BibTeX Citation', 'nistco'); ?></label></p>
<textarea id="citation_bibtex" name="citation_bibtex" rows="6"
    style="width:100%;"><?php echo esc_textarea($bibtex); ?></textarea>

<p><label for="citation_ris"><?php _e('RIS Citation', 'nistco'); ?></label></p>
<textarea id="citation_ris" name="citation_ris" rows="6"
    style="width:100%;"><?php echo esc_textarea($ris); ?></textarea>
<?php
}

function nistco_save_citation_meta($post_id) {
    if (!isset($_POST['nistco_citation_meta_nonce_field']) ||
        !wp_verify_nonce($_POST['nistco_citation_meta_nonce_field'], 'nistco_citation_meta_nonce')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if (isset($_POST['citation_bibtex'])) {
        update_post_meta($post_id, '_citation_bibtex', sanitize_textarea_field($_POST['citation_bibtex']));
    }

    if (isset($_POST['citation_ris'])) {
        update_post_meta($post_id, '_citation_ris', sanitize_textarea_field($_POST['citation_ris']));
    }
}
add_action('save_post_publication', 'nistco_save_citation_meta');


$nistco_includes = array(
    '/inc/setup.php',
    '/inc/branding.php',
    '/inc/enqueue.php',
    '/inc/post-types.php',
    '/inc/customizer.php',
    '/inc/template-helpers.php',
    '/inc/ajax-handlers.php',
    '/inc/ajax-search.php',
    '/inc/meta-boxes.php',
    '/inc/schema-seo.php',
);

foreach ( $nistco_includes as $file ) {
    $filepath = get_template_directory() . $file;
    if ( file_exists( $filepath ) ) {
        require_once $filepath;
    }
}

function nistco_rewrite_flush() {
    if ( function_exists( 'nistco_register_cpts' ) ) {
        nistco_register_cpts();
    }
    flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'nistco_register_cpts' );

require_once get_template_directory() . '/inc/ajax-citations.php';

add_action("wp_enqueue_scripts", function() {
    if (is_singular("publication") || is_post_type_archive("publication")) {
        wp_enqueue_script(
            "nistco-citation-modal",
            get_template_directory_uri() . "/assets/js/citation-modal.js",
            array("jquery"),
            "2.5.1",
            true
        );
    }
});

add_action("wp_enqueue_scripts", function() {
    if (is_singular("publication") || is_post_type_archive("publication")) {
        wp_enqueue_script(
            "nistco-citation-modal",
            get_template_directory_uri() . "/assets/js/citation-modal.js",
            array("jquery"),
            "2.5.1",
            true
        );
    }
});

add_action("wp_enqueue_scripts", function() {
    if (is_singular("publication") || is_post_type_archive("publication")) {
        wp_enqueue_script(
            "nistco-citation-modal",
            get_template_directory_uri() . "/assets/js/citation-modal.js",
            array("jquery"),
            "2.5.1",
            true
        );
    }
});