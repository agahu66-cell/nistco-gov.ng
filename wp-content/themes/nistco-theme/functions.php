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

// Prevent redirect_canonical from guessing tenders when visiting /procurement/
add_filter( 'redirect_canonical', function( $redirect_url, $requested_url ) {
    if ( strpos( $requested_url, '/procurement' ) !== false ) {
        return false;
    }
    return $redirect_url;
}, 10, 2 );

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
});// Auto-provision Procurement Desk Page
add_action( 'init', function() {
    if ( ! get_page_by_path( 'procurement' ) ) {
        $page_id = wp_insert_post( array(
            'post_title'     => 'Procurement & BPP Compliance Desk',
            'post_name'      => 'procurement',
            'post_status'    => 'publish',
            'post_type'      => 'page',
            'comment_status' => 'closed',
            'ping_status'    => 'closed',
        ) );
        if ( $page_id && ! is_wp_error( $page_id ) ) {
            update_post_meta( $page_id, '_wp_page_template', 'page-procurement.php' );
            delete_option( 'rewrite_rules' );
            flush_rewrite_rules( true );
        }
    }
} );
/**
 * Filter main query on Directorate taxonomy archives to load research centres.
 */
add_action( 'pre_get_posts', function( $query ) {
    if ( ! is_admin() && $query->is_main_query() && $query->is_tax( 'directorate' ) ) {
        $query->set( 'post_type', array( 'research_centre' ) );
        $query->set( 'posts_per_page', -1 );
    }
} );
require_once get_template_directory() . '/inc/commercial-ventures.php';

require_once get_template_directory() . '/inc/rest-telemetry.php';

/**
 * Register NISTCO Institutional Metrics Block
 */
function nistco_register_institutional_metrics_block() {
    register_block_type( get_template_directory() . '/blocks/institutional-metrics' );
}
add_action( 'init', 'nistco_register_institutional_metrics_block' );
require_once get_template_directory() . '/inc-front-assets.php';

// NISTCO Commercial Ventures Engine & Statutory Royalty Ledger
require_once get_template_directory() . '/inc-venture-db.php';
require_once get_template_directory() . '/inc-venture-api.php';

// NISTCO Commercial Ventures Engine & Statutory Royalty Ledger
require_once get_template_directory() . '/inc-venture-db.php';
require_once get_template_directory() . '/inc-venture-api.php';

/**
 * NASTCO Procurement Module & Assets Registration
 */
require_once get_template_directory() . '/inc-procurement-api.php';

add_action( 'wp_enqueue_scripts', function() {
    if ( is_page_template( 'page-procurement.php' ) || is_page( 'procurement' ) ) {
        wp_enqueue_style( 'nastco-procurement-css', get_template_directory_uri() . '/assets/css/procurement.css', [], '1.2.0' );
        wp_enqueue_script( 'nastco-procurement-engine', get_template_directory_uri() . '/assets/js/procurement-engine.js', [], '1.2.0', true );
        wp_localize_script( 'nastco-procurement-engine', 'nastcoProcVars', [
            'nonce'    => wp_create_nonce( 'wp_rest' ),
            'root_url' => esc_url_raw( rest_url() )
        ] );
    }
} );

/**
 * NASTCO Front Page Assets Registration
 */
add_action( 'wp_enqueue_scripts', function() {
    if ( is_front_page() || is_home() ) {
        wp_enqueue_style( 'nastco-front-page-css', get_template_directory_uri() . '/assets/css/front-page.css', [], '1.3.0' );
        wp_enqueue_script( 'nastco-front-page-js', get_template_directory_uri() . '/assets/js/front-page.js', [], '1.3.0', true );
    }
} );

/**
 * NASTCO Front Page Assets Registration
 */
add_action( 'wp_enqueue_scripts', function() {
    if ( is_front_page() || is_home() ) {
        wp_enqueue_style( 'nastco-front-page-css', get_template_directory_uri() . '/assets/css/front-page.css', [], '1.3.0' );
        wp_enqueue_script( 'nastco-front-page-js', get_template_directory_uri() . '/assets/js/front-page.js', [], '1.3.0', true );
    }
} );

/**
 * NASTCO About Page Assets
 */
add_action( 'wp_enqueue_scripts', function() {
    if ( is_page_template( 'page-about.php' ) || is_page( 'about' ) || is_page( 'about-us' ) ) {
        wp_enqueue_style( 'nastco-about-css', get_template_directory_uri() . '/assets/css/about.css', [], '1.4.0' );
        wp_enqueue_script( 'nastco-about-js', get_template_directory_uri() . '/assets/js/about.js', [], '1.4.0', true );
    }
} );

/* ==========================================================================
   NASTCO: Termii API Secure Direct Dispatch Webhook
   ========================================================================== */
add_action('rest_api_init', function () {
    register_rest_route('nastco/v1', '/secure-dispatch', array(
        'methods' => 'POST',
        'callback' => 'nastco_handle_termii_dispatch',
        'permission_callback' => '__return_true'
    ));
});

function nastco_handle_termii_dispatch($request) {
    $params = $request->get_json_params();
    $org = sanitize_text_field($params['organization']);
    $email = sanitize_email($params['email']);
    $dept = sanitize_text_field($params['department']);
    $message = sanitize_textarea_field($params['message']);
    $is_priority = rest_sanitize_boolean($params['priority']);

    // 🔴 TRIGGER TERMII ONLY IF HIGH-PRIORITY OVERRIDE IS ENGAGED
    if ($is_priority) {
        $termii_url = 'https://api.ng.termii.com/api/sms/send';
        
        // TODO: Replace with your actual live Termii API configuration
        $api_key = 'YOUR_TERMII_API_KEY'; 
        $dg_phone = '2348000000000'; // Target mobile number (format: 234...)

        $sms_message = "🔴 URGENT DISPATCH: {$org} ({$dept})\nContact: {$email}\nMsg: " . substr($message, 0, 90) . "...";

        $body = array(
            "to" => $dg_phone,
            "from" => "NASTCO", // Registered Termii Sender ID
            "sms" => $sms_message,
            "type" => "plain",
            "api_key" => $api_key,
            "channel" => "generic",
        );

        $response = wp_remote_post($termii_url, array(
            'body' => json_encode($body),
            'headers' => array('Content-Type' => 'application/json')
        ));

        if (is_wp_error($response)) {
            return new WP_REST_Response(array('status' => 'error', 'message' => 'Termii API routing failed.'), 500);
        }
    }

    // Log the transmission (can be extended to save to DB)
    return new WP_REST_Response(array('status' => 'success', 'message' => 'Secure transmission executed.'), 200);
}


// Register Tactical Navigation Menu
function nastco_register_menus() {
    register_nav_menus( array(
        'primary' => __( 'Primary Operations Menu', 'nistco' ),
    ) );
}
add_action( 'after_setup_theme', 'nastco_register_menus' );

// Load Tactical Nav Walker
require_once get_template_directory() . '/inc/nav-walker.php';

// Register Directorate Taxonomy for Strategic Resources
function nastco_register_directorate_taxonomy() {
    $labels = array(
        'name'          => __( 'Directorates', 'nistco' ),
        'singular_name' => __( 'Directorate', 'nistco' ),
        'search_items'  => __( 'Search Directorates', 'nistco' ),
        'all_items'     => __( 'All Directorates', 'nistco' ),
        'edit_item'     => __( 'Edit Directorate', 'nistco' ),
        'update_item'   => __( 'Update Directorate', 'nistco' ),
        'add_new_item'  => __( 'Add New Directorate', 'nistco' ),
        'menu_name'     => __( 'Directorates', 'nistco' ),
    );

    register_taxonomy( 'directorate', array( 'nastco_resource' ), array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'directorate' ),
        'show_in_rest'      => true,
    ) );
}
add_action( 'init', 'nastco_register_directorate_taxonomy', 0 );

// Register NASTCO Journal CPT & Taxonomy
function nastco_register_journal_engine() {
    // 1. Research Field Taxonomy
    register_taxonomy( 'research_field', array( 'nastco_journal' ), array(
        'hierarchical'      => true,
        'labels'            => array(
            'name'          => 'Research Fields',
            'singular_name' => 'Research Field',
        ),
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'field' ),
        'show_in_rest'      => true,
    ) );

    // 2. Journal Custom Post Type
    register_post_type( 'nastco_journal', array(
        'labels'            => array(
            'name'          => 'Journal Articles',
            'singular_name' => 'Journal Article',
            'add_new_item'  => 'Add New Article',
        ),
        'public'            => true,
        'has_archive'       => true,
        'menu_icon'         => 'dashicons-welcome-learn-more',
        'supports'          => array( 'title', 'editor', 'excerpt', 'custom-fields', 'author' ),
        'rewrite'           => array( 'slug' => 'journal/article' ),
        'show_in_rest'      => true,
    ) );
}
add_action( 'init', 'nastco_register_journal_engine', 0 );
