<?php
/**
 * NASTCO SOVEREIGN FUNCTIONS ENGINE
 */

function nastco_theme_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    register_nav_menus( array( 'primary' => __( 'Primary Menu', 'nistco' ) ) );
}
add_action( 'after_setup_theme', 'nastco_theme_setup' );

function nastco_register_resources_engine() {
    register_taxonomy( 'directorate', array( 'nastco_resource' ), array( 'hierarchical' => true, 'labels' => array( 'name' => 'Directorates', 'singular_name' => 'Directorate' ), 'show_ui' => true, 'show_admin_column' => true, 'query_var' => true, 'rewrite' => array( 'slug' => 'directorate' ), 'show_in_rest' => true ) );
    register_taxonomy( 'resource_category', array( 'nastco_resource' ), array( 'hierarchical' => true, 'labels' => array( 'name' => 'Resource Categories', 'singular_name' => 'Category' ), 'show_ui' => true, 'show_admin_column' => true, 'query_var' => true, 'rewrite' => array( 'slug' => 'resource-category' ), 'show_in_rest' => true ) );
    register_post_type( 'nastco_resource', array( 'labels' => array( 'name' => 'Strategic Resources', 'singular_name' => 'Resource' ), 'public' => true, 'has_archive' => true, 'menu_icon' => 'dashicons-portfolio', 'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields' ), 'rewrite' => array( 'slug' => 'resources/asset' ), 'show_in_rest' => true ) );
}
add_action( 'init', 'nastco_register_resources_engine', 0 );

function nastco_register_journal_engine() {
    register_taxonomy( 'research_field', array( 'nastco_journal' ), array( 'hierarchical' => true, 'labels' => array( 'name' => 'Research Fields', 'singular_name' => 'Research Field' ), 'show_ui' => true, 'show_admin_column' => true, 'query_var' => true, 'rewrite' => array( 'slug' => 'field' ), 'show_in_rest' => true ) );
    register_post_type( 'nastco_journal', array( 'labels' => array( 'name' => 'Journal Articles', 'singular_name' => 'Journal Article' ), 'public' => true, 'has_archive' => true, 'menu_icon' => 'dashicons-welcome-learn-more', 'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'author' ), 'rewrite' => array( 'slug' => 'journal/article' ), 'show_in_rest' => true ) );
}
add_action( 'init', 'nastco_register_journal_engine', 0 );

function nastco_tactical_login_styles() {
    ?>
    <style type="text/css">
        body.login { background-color: #020617; background-image: linear-gradient(rgba(0, 210, 133, 0.03) 1px, transparent 1px), linear-gradient(90deg, rgba(0, 210, 133, 0.03) 1px, transparent 1px); background-size: 40px 40px; color: #ffffff; font-family: 'Inter', sans-serif; }
        .login h1 a { background-image: none; text-indent: 0; width: auto; height: auto; font-size: 2.2rem; font-weight: 900; letter-spacing: 3px; color: #ffffff; text-transform: uppercase; display: flex; align-items: center; justify-content: center; text-decoration: none; }
        .login h1 a::before { content: 'NASTCO'; }
        .login h1 a::after { content: '_'; color: #00d285; text-shadow: 0 0 12px rgba(0, 210, 133, 0.6); }
        #login { padding: 8% 0 0; width: 380px; }
        .login form { background: linear-gradient(145deg, rgba(15, 23, 42, 0.8) 0%, rgba(2, 6, 23, 0.95) 100%); border: 1px solid rgba(255, 255, 255, 0.06); border-top: 3px solid #00d285; border-radius: 8px; padding: 2.5rem 2rem; box-shadow: 0 15px 35px rgba(0, 0, 0, 0.6), 0 0 20px rgba(0, 210, 133, 0.05); backdrop-filter: blur(15px); margin-top: 1.5rem; }
        .login label { font-family: 'Courier New', monospace; font-size: 0.8rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 0.5rem; display: block; }
        .login input[type="text"], .login input[type="password"] { background: rgba(2, 6, 23, 0.8); border: 1px solid rgba(255, 255, 255, 0.1); border-radius: 4px; color: #00d285; font-family: 'Courier New', monospace; padding: 0.6rem 1rem; font-size: 1rem; box-shadow: none; transition: all 0.3s ease; }
        .login input[type="text"]:focus, .login input[type="password"]:focus { border-color: #00d285; box-shadow: 0 0 15px rgba(0, 210, 133, 0.2); outline: none; }
        .login input[type="checkbox"] { background: rgba(2, 6, 23, 0.8); border: 1px solid rgba(255, 255, 255, 0.2); border-radius: 3px; }
        .login input[type="checkbox"]:checked { background: #00d285; border-color: #00d285; }
        .login .button-primary { background: rgba(0, 210, 133, 0.1); border: 1px solid rgba(0, 210, 133, 0.4); color: #00d285; font-family: 'Courier New', monospace; font-size: 0.9rem; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; border-radius: 4px; padding: 0.4rem; transition: all 0.3s ease; width: 100%; margin-top: 1.5rem; }
        .login .button-primary:hover { background: #00d285; color: #020617; border-color: #00d285; box-shadow: 0 0 20px rgba(0, 210, 133, 0.4); transform: translateY(-2px); }
        .login #backtoblog a, .login #nav a { color: #64748b; font-family: 'Courier New', monospace; font-size: 0.8rem; transition: color 0.3s ease; }
        .login #backtoblog a:hover, .login #nav a:hover { color: #38bdf8; text-decoration: none; }
        .login .privacy-policy-page-link { display: none !important; }
    </style>
    <?php
}
add_action( 'login_enqueue_scripts', 'nastco_tactical_login_styles' );
add_filter( 'login_headerurl', function() { return home_url(); } );
add_filter( 'login_headertext', function() { return 'NASTCO Operations Command'; } );

function nastco_add_dashboard_widgets() { wp_add_dashboard_widget( 'nastco_telemetry_widget', 'NASTCO COMMAND: SYSTEM TELEMETRY', 'nastco_telemetry_widget_render' ); }
add_action( 'wp_dashboard_setup', 'nastco_add_dashboard_widgets' );

function nastco_telemetry_widget_render() {
    $resource_count = wp_count_posts('nastco_resource')->publish;
    $journal_count  = wp_count_posts('nastco_journal')->publish;
    ?>
    <style>
        #nastco_telemetry_widget { background: #020617; border: 1px solid rgba(0, 210, 133, 0.4); border-top: 3px solid #00d285; color: #ffffff; box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3); }
        #nastco_telemetry_widget h2.hndle { border-bottom: 1px solid rgba(0, 210, 133, 0.2); color: #00d285; font-family: 'Courier New', monospace; font-weight: 800; letter-spacing: 1px; background: rgba(2, 6, 23, 0.9); }
        .nastco-admin-panel { font-family: 'Inter', -apple-system, sans-serif; padding: 0.5rem; }
        .nastco-status-row { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; padding-bottom: 1rem; border-bottom: 1px dashed rgba(255, 255, 255, 0.1); }
        .nastco-sys-badge { background: rgba(0, 210, 133, 0.08); border: 1px solid rgba(0, 210, 133, 0.3); color: #00d285; padding: 0.3rem 0.8rem; border-radius: 4px; font-family: 'Courier New', monospace; font-size: 0.75rem; font-weight: 700; display: inline-flex; align-items: center; gap: 0.5rem; }
        .nastco-sys-badge::before { content: ''; width: 6px; height: 6px; background: #00d285; border-radius: 50%; box-shadow: 0 0 8px #00d285; animation: pulse-glow 2s infinite ease-in-out; }
        .nastco-metric-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1rem; margin-bottom: 1.5rem; }
        .nastco-metric-card { background: rgba(15, 23, 42, 0.6); border: 1px solid rgba(255, 255, 255, 0.05); padding: 1.2rem; border-radius: 6px; }
        .nastco-metric-value { font-size: 2rem; font-weight: 900; color: #38bdf8; font-family: 'Courier New', monospace; line-height: 1; margin-bottom: 0.5rem; }
        .nastco-metric-label { font-size: 0.75rem; color: #94a3b8; text-transform: uppercase; letter-spacing: 0.5px; }
        .nastco-terminal-log { background: rgba(0, 0, 0, 0.4); padding: 1rem; border-radius: 4px; border-left: 2px solid #00d285; font-family: 'Courier New', monospace; font-size: 0.75rem; color: #64748b; line-height: 1.6; }
        .nastco-terminal-line span { color: #00d285; margin-right: 0.5rem; }
    </style>
    <div class="nastco-admin-panel">
        <div class="nastco-status-row"><div><span style="color:#94a3b8; font-size: 0.8rem; text-transform:uppercase; font-weight: 700;">Global Matrix</span></div><div class="nastco-sys-badge">SYS_ONLINE</div></div>
        <div class="nastco-metric-grid"><div class="nastco-metric-card"><div class="nastco-metric-value"><?php echo intval($resource_count); ?></div><div class="nastco-metric-label">Active Resources</div></div><div class="nastco-metric-card"><div class="nastco-metric-value" style="color: #00d285;"><?php echo intval($journal_count); ?></div><div class="nastco-metric-label">Journal Monographs</div></div></div>
        <div class="nastco-terminal-log"><div class="nastco-terminal-line"><span>[<?php echo current_time('H:i:s'); ?>]</span> BACKEND_AUTHENTICATION_OK</div><div class="nastco-terminal-line"><span>[<?php echo current_time('H:i:s'); ?>]</span> DIRECTORATE_ROUTING_SYNCED</div><div class="nastco-terminal-line"><span>[<?php echo current_time('H:i:s'); ?>]</span> AWAITING_ADMIN_OVERRIDE_</div></div>
    </div>
    <?php
}

function nastco_clean_dashboard_widgets() {
    remove_meta_box( 'dashboard_quick_press', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_primary', 'dashboard', 'side' );
    remove_meta_box( 'dashboard_right_now', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_activity', 'dashboard', 'normal' );
    remove_meta_box( 'dashboard_site_health', 'dashboard', 'normal' );
}
add_action( 'wp_dashboard_setup', 'nastco_clean_dashboard_widgets', 999 );

add_filter( 'show_admin_bar', '__return_false' );

if ( ! class_exists( 'NASTCO_Sovereign_Walker' ) ) {
    class NASTCO_Sovereign_Walker extends Walker_Nav_Menu {
        function start_lvl( &$output, $depth = 0, $args = null ) { $output .= '<ul class="tactical-dropdown">'; }
        function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
            $classes = empty( $item->classes ) ? array() : (array) $item->classes;
            $active  = in_array('current-menu-item', $classes) ? ' active' : '';
            if ( $depth === 0 && in_array('menu-item-has-children', $classes) ) { $output .= '<li class="has-dropdown-parent">'; } else { $output .= '<li>'; }
            $output .= '<a href="' . esc_url($item->url) . '" class="nav-link-item' . $active;
            if ( $depth === 0 && in_array('menu-item-has-children', $classes) ) { $output .= ' has-dropdown'; }
            $output .= '"><span class="text-3d">' . esc_html($item->title);
            if ( $depth === 0 && in_array('menu-item-has-children', $classes) ) { $output .= ' <span class="dropdown-chevron">▼</span>'; }
            $output .= '</span></a>';
        }
    }
}

/* ==========================================================================
   NASTCO SECURE COMMS: TERMII SMS API DISPATCHER
   ========================================================================== */
add_action('wp_ajax_nastco_send_secure_sms', 'nastco_handle_termii_sms');
add_action('wp_ajax_nopriv_nastco_send_secure_sms', 'nastco_handle_termii_sms');

function nastco_handle_termii_sms() {
    $callsign = sanitize_text_field($_POST['callsign']);
    $routing  = sanitize_text_field($_POST['routing']);
    $payload  = sanitize_textarea_field($_POST['payload']);
    
    if (empty($callsign) || empty($routing) || empty($payload)) {
        wp_send_json_error(array('message' => 'Payload rejected: Missing critical data parameters.'));
    }

    $api_key = 'paste_your_live_termii_api_key_here'; 
    $url     = 'https://api.ng.termii.com/api/sms/send';
    $message = "NASTCO_UPLINK\nOperative: $callsign\nNode: $routing\nData: $payload";
    
    $data = array(
        "to"      => "2348055901165", 
        "from"    => "N-Alert",       
        "sms"     => $message,
        "type"    => "plain",
        "channel" => "generic",
        "api_key" => $api_key,
    );

    $response = wp_remote_post($url, array(
        'headers'     => array('Content-Type' => 'application/json', 'Accept' => 'application/json'),
        'body'        => json_encode($data),
        'method'      => 'POST',
        'data_format' => 'body',
        'timeout'     => 15
    ));

    if (is_wp_error($response)) {
        wp_send_json_error(array('message' => 'Transmission failed: Connection to Termii node severed.'));
    }

    $body = wp_remote_retrieve_body($response);
    $result = json_decode($body);

    if (isset($result->message) && $result->message == 'Successfully Sent') {
        wp_send_json_success(array('message' => 'Payload dispatched successfully.'));
    } else {
        wp_send_json_error(array('message' => 'Termii API Error: ' . $body));
    }
}

/* ==========================================================================
   NASTCO PROJECT TRACKING: DATABASE SCHEMA DEPLOYMENT
   ========================================================================== */
function nastco_deploy_tracking_schema() {
    global $wpdb;
    $installed_ver = get_option('nastco_tracking_db_version');
    $target_ver = '1.0';

    if ($installed_ver !== $target_ver) {
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE {$wpdb->prefix}nastco_projects (
            id bigint(20) NOT NULL AUTO_INCREMENT,
            project_code varchar(50) NOT NULL,
            title varchar(255) NOT NULL,
            directorate varchar(50) NOT NULL,
            contractor varchar(150) DEFAULT NULL,
            total_budget decimal(15,2) NOT NULL DEFAULT 0.00,
            start_date date NOT NULL,
            target_date date NOT NULL,
            status varchar(30) NOT NULL DEFAULT 'PENDING',
            PRIMARY KEY  (id),
            UNIQUE KEY project_code (project_code),
            KEY directorate (directorate),
            KEY status (status)
        ) $charset_collate;

        CREATE TABLE {$wpdb->prefix}nastco_milestones (
            id bigint(20) NOT NULL AUTO_INCREMENT,
            project_id bigint(20) NOT NULL,
            phase_name varchar(150) NOT NULL,
            weight_pct int(3) NOT NULL DEFAULT 0,
            status varchar(30) NOT NULL DEFAULT 'PENDING',
            cleared_date datetime DEFAULT NULL,
            PRIMARY KEY  (id),
            KEY project_id (project_id)
        ) $charset_collate;

        CREATE TABLE {$wpdb->prefix}nastco_disbursements (
            id bigint(20) NOT NULL AUTO_INCREMENT,
            project_id bigint(20) NOT NULL,
            amount decimal(15,2) NOT NULL DEFAULT 0.00,
            tranche varchar(50) NOT NULL,
            auth_officer varchar(100) NOT NULL,
            release_date datetime DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY  (id),
            KEY project_id (project_id)
        ) $charset_collate;";

        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        dbDelta($sql);

        update_option('nastco_tracking_db_version', $target_ver);
    }
}
add_action('admin_init', 'nastco_deploy_tracking_schema');

/* ==========================================================================
   NASTCO PROJECT TRACKING: REST API ENDPOINTS FOR LOOKER STUDIO
   ========================================================================== */
add_action('rest_api_init', 'nastco_register_tracking_endpoints');

function nastco_register_tracking_endpoints() {
    $namespace = 'nastco/v1';

    register_rest_route($namespace, '/projects', array(
        'methods'  => 'GET',
        'callback' => 'nastco_api_get_projects',
        'permission_callback' => 'nastco_api_verify_token'
    ));

    register_rest_route($namespace, '/milestones', array(
        'methods'  => 'GET',
        'callback' => 'nastco_api_get_milestones',
        'permission_callback' => 'nastco_api_verify_token'
    ));

    register_rest_route($namespace, '/disbursements', array(
        'methods'  => 'GET',
        'callback' => 'nastco_api_get_disbursements',
        'permission_callback' => 'nastco_api_verify_token'
    ));
}

function nastco_api_verify_token(WP_REST_Request $request) {
    // Check for token in headers (x-nastco-key) or query string (?api_key=...)
    $api_key = $request->get_header('x-nastco-key') ?: $request->get_param('api_key');
    $valid_key = 'NASTCO_LOOKER_2026_SECURE'; 
    
    if ($api_key !== $valid_key) {
        return new WP_Error('rest_forbidden', 'Tactical clearance denied. Invalid API key.', array('status' => 401));
    }
    return true;
}

function nastco_api_get_projects() {
    global $wpdb;
    $table = $wpdb->prefix . 'nastco_projects';
    $results = $wpdb->get_results("SELECT * FROM $table", ARRAY_A);
    return rest_ensure_response($results);
}

function nastco_api_get_milestones() {
    global $wpdb;
    $table = $wpdb->prefix . 'nastco_milestones';
    $results = $wpdb->get_results("SELECT * FROM $table", ARRAY_A);
    return rest_ensure_response($results);
}

function nastco_api_get_disbursements() {
    global $wpdb;
    $table = $wpdb->prefix . 'nastco_disbursements';
    $results = $wpdb->get_results("SELECT * FROM $table", ARRAY_A);
    return rest_ensure_response($results);
}

/* ==========================================================================
   NASTCO PROJECT TRACKING: WP-ADMIN INTERFACE
   ========================================================================== */
function nastco_project_tracking_menu() {
    add_menu_page(
        'Project Tracking Matrix', // Page title
        'Projects',                // Menu title
        'manage_options',          // Capability
        'nastco-project-tracking', // Menu slug
        'nastco_project_tracking_admin_page', // Callback function
        'dashicons-clipboard',     // Icon
        30                         // Position
    );
}
add_action('admin_menu', 'nastco_project_tracking_menu');

function nastco_project_tracking_admin_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'nastco_projects';
    $message = '';

    // 1. Handle Form Submission
    if (isset($_POST['nastco_add_project']) && check_admin_referer('nastco_add_project_action', 'nastco_add_project_nonce')) {
        $inserted = $wpdb->insert(
            $table_name,
            array(
                'project_code' => sanitize_text_field($_POST['project_code']),
                'title'        => sanitize_text_field($_POST['title']),
                'directorate'  => sanitize_text_field($_POST['directorate']),
                'contractor'   => sanitize_text_field($_POST['contractor']),
                'total_budget' => floatval($_POST['total_budget']),
                'start_date'   => sanitize_text_field($_POST['start_date']),
                'target_date'  => sanitize_text_field($_POST['target_date']),
                'status'       => sanitize_text_field($_POST['status'])
            )
        );

        if ($inserted) {
            $message = '<div class="notice notice-success is-dismissible"><p><strong>UPLINK SUCCESS:</strong> Project registered in the master ledger.</p></div>';
        } else {
            $message = '<div class="notice notice-error is-dismissible"><p><strong>ERROR:</strong> Matrix insertion failed. Check project code uniqueness.</p></div>';
        }
    }

    // 2. Retrieve Master Ledger
    $projects = $wpdb->get_results("SELECT * FROM $table_name ORDER BY id DESC");
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">NASTCO Master Project Ledger</h1>
        <hr class="wp-header-end">
        <?php echo $message; ?>

        <div style="background: #fff; border: 1px solid #ccd0d4; padding: 20px; margin-top: 20px; box-shadow: 0 1px 1px rgba(0,0,0,.04);">
            <h2>Initialize New Project Node</h2>
            <form method="post" action="">
                <?php wp_nonce_field('nastco_add_project_action', 'nastco_add_project_nonce'); ?>
                <table class="form-table" role="presentation">
                    <tbody>
                        <tr>
                            <th scope="row"><label for="project_code">Project Code</label></th>
                            <td><input name="project_code" type="text" id="project_code" value="" class="regular-text" placeholder="e.g. NTC-2026-001" required></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="title">Project Title</label></th>
                            <td><input name="title" type="text" id="title" value="" class="large-text" required></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="directorate">Directorate</label></th>
                            <td>
                                <select name="directorate" id="directorate" required>
                                    <option value="CMD">Central Command HQ</option>
                                    <option value="AMSARC">AMSARC</option>
                                    <option value="BARC">BARC</option>
                                    <option value="CARC">CARC</option>
                                    <option value="PARC">PARC</option>
                                    <option value="AEPC">AEPC</option>
                                    <option value="NTC">NTC</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="contractor">Assigned Contractor</label></th>
                            <td><input name="contractor" type="text" id="contractor" value="" class="regular-text"></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="total_budget">Total Budget (NGN)</label></th>
                            <td><input name="total_budget" type="number" step="0.01" id="total_budget" value="" class="regular-text" required></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="start_date">Start Date</label></th>
                            <td><input name="start_date" type="date" id="start_date" required></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="target_date">Target Completion Date</label></th>
                            <td><input name="target_date" type="date" id="target_date" required></td>
                        </tr>
                        <tr>
                            <th scope="row"><label for="status">Status</label></th>
                            <td>
                                <select name="status" id="status">
                                    <option value="PENDING">PENDING</option>
                                    <option value="ACTIVE">ACTIVE</option>
                                    <option value="HALTED">HALTED</option>
                                    <option value="COMPLETED">COMPLETED</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="submit">
                    <input type="submit" name="nastco_add_project" id="submit" class="button button-primary" value="Commit to Ledger">
                </p>
            </form>
        </div>

        <h2 style="margin-top: 30px;">Active Project Matrix</h2>
        <table class="wp-list-table widefat fixed striped table-view-list">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Code</th>
                    <th>Title</th>
                    <th>Directorate</th>
                    <th>Budget (NGN)</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php if (!empty($projects)) : ?>
                    <?php foreach ($projects as $project) : ?>
                        <tr>
                            <td><?php echo esc_html($project->id); ?></td>
                            <td><strong><?php echo esc_html($project->project_code); ?></strong></td>
                            <td><?php echo esc_html($project->title); ?></td>
                            <td><?php echo esc_html($project->directorate); ?></td>
                            <td>₦<?php echo number_format($project->total_budget, 2); ?></td>
                            <td>
                                <?php 
                                    $color = $project->status === 'ACTIVE' ? 'green' : ($project->status === 'HALTED' ? 'red' : 'orange');
                                    echo "<span style='color: {$color}; font-weight:bold;'>" . esc_html($project->status) . "</span>"; 
                                ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else : ?>
                    <tr>
                        <td colspan="6">No projects currently logged in the matrix.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}

/* ==========================================================================
   NASTCO PROJECT TRACKING: MILESTONES & DISBURSEMENTS UI
   ========================================================================== */
function nastco_project_tracking_submenus() {
    add_submenu_page('nastco-project-tracking', 'Milestone Tracking', 'Milestones', 'manage_options', 'nastco-project-milestones', 'nastco_milestones_admin_page');
    add_submenu_page('nastco-project-tracking', 'Financial Disbursements', 'Disbursements', 'manage_options', 'nastco-project-disbursements', 'nastco_disbursements_admin_page');
}
add_action('admin_menu', 'nastco_project_tracking_submenus', 20);

function nastco_milestones_admin_page() {
    global $wpdb;
    $m_table = $wpdb->prefix . 'nastco_milestones';
    $p_table = $wpdb->prefix . 'nastco_projects';
    $message = '';

    if (isset($_POST['nastco_add_milestone']) && check_admin_referer('nastco_add_milestone_action', 'nastco_add_milestone_nonce')) {
        $inserted = $wpdb->insert($m_table, array(
            'project_id' => intval($_POST['project_id']),
            'phase_name' => sanitize_text_field($_POST['phase_name']),
            'weight_pct' => intval($_POST['weight_pct']),
            'status'     => sanitize_text_field($_POST['status'])
        ));
        $message = $inserted ? '<div class="notice notice-success is-dismissible"><p><strong>UPLINK SUCCESS:</strong> Milestone logged.</p></div>' : '<div class="notice notice-error is-dismissible"><p><strong>ERROR:</strong> Matrix insertion failed.</p></div>';
    }

    $projects = $wpdb->get_results("SELECT id, project_code, title FROM $p_table ORDER BY id DESC");
    $milestones = $wpdb->get_results("SELECT m.*, p.project_code FROM $m_table m JOIN $p_table p ON m.project_id = p.id ORDER BY m.id DESC");
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">Milestone Tracking Matrix</h1>
        <hr class="wp-header-end">
        <?php echo $message; ?>

        <div style="background: #fff; border: 1px solid #ccd0d4; padding: 20px; margin-top: 20px; box-shadow: 0 1px 1px rgba(0,0,0,.04);">
            <h2>Log Project Phase</h2>
            <form method="post" action="">
                <?php wp_nonce_field('nastco_add_milestone_action', 'nastco_add_milestone_nonce'); ?>
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row"><label for="project_id">Select Project</label></th>
                            <td>
                                <select name="project_id" id="project_id" required>
                                    <option value="" disabled selected>-- Select Target Project --</option>
                                    <?php foreach ($projects as $p): ?>
                                        <option value="<?php echo esc_attr($p->id); ?>"><?php echo esc_html($p->project_code . ' - ' . $p->title); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr><th scope="row"><label for="phase_name">Phase Name</label></th><td><input name="phase_name" type="text" class="regular-text" required></td></tr>
                        <tr><th scope="row"><label for="weight_pct">Weight (%)</label></th><td><input name="weight_pct" type="number" min="1" max="100" class="small-text" required></td></tr>
                        <tr>
                            <th scope="row"><label for="status">Phase Status</label></th>
                            <td>
                                <select name="status">
                                    <option value="PENDING">PENDING</option>
                                    <option value="IN_PROGRESS">IN_PROGRESS</option>
                                    <option value="CLEARED">CLEARED</option>
                                </select>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <p class="submit"><input type="submit" name="nastco_add_milestone" class="button button-primary" value="Commit Milestone"></p>
            </form>
        </div>

        <h2 style="margin-top: 30px;">Active Phase Ledger</h2>
        <table class="wp-list-table widefat fixed striped">
            <thead><tr><th>ID</th><th>Project Code</th><th>Phase</th><th>Weight</th><th>Status</th></tr></thead>
            <tbody>
                <?php if (!empty($milestones)) : foreach ($milestones as $m) : ?>
                    <tr>
                        <td><?php echo esc_html($m->id); ?></td>
                        <td><strong><?php echo esc_html($m->project_code); ?></strong></td>
                        <td><?php echo esc_html($m->phase_name); ?></td>
                        <td><?php echo esc_html($m->weight_pct); ?>%</td>
                        <td><?php echo esc_html($m->status); ?></td>
                    </tr>
                <?php endforeach; else: echo '<tr><td colspan="5">No milestones logged.</td></tr>'; endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}

function nastco_disbursements_admin_page() {
    global $wpdb;
    $d_table = $wpdb->prefix . 'nastco_disbursements';
    $p_table = $wpdb->prefix . 'nastco_projects';
    $message = '';

    if (isset($_POST['nastco_add_funds']) && check_admin_referer('nastco_add_funds_action', 'nastco_add_funds_nonce')) {
        $inserted = $wpdb->insert($d_table, array(
            'project_id'   => intval($_POST['project_id']),
            'amount'       => floatval($_POST['amount']),
            'tranche'      => sanitize_text_field($_POST['tranche']),
            'auth_officer' => sanitize_text_field($_POST['auth_officer'])
        ));
        $message = $inserted ? '<div class="notice notice-success is-dismissible"><p><strong>UPLINK SUCCESS:</strong> Disbursement recorded.</p></div>' : '<div class="notice notice-error is-dismissible"><p><strong>ERROR:</strong> Fund matrix insertion failed.</p></div>';
    }

    $projects = $wpdb->get_results("SELECT id, project_code, title FROM $p_table ORDER BY id DESC");
    $funds = $wpdb->get_results("SELECT d.*, p.project_code FROM $d_table d JOIN $p_table p ON d.project_id = p.id ORDER BY d.id DESC");
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">Financial Disbursement Matrix</h1>
        <hr class="wp-header-end">
        <?php echo $message; ?>

        <div style="background: #fff; border: 1px solid #ccd0d4; padding: 20px; margin-top: 20px; box-shadow: 0 1px 1px rgba(0,0,0,.04);">
            <h2>Authorize Release</h2>
            <form method="post" action="">
                <?php wp_nonce_field('nastco_add_funds_action', 'nastco_add_funds_nonce'); ?>
                <table class="form-table">
                    <tbody>
                        <tr>
                            <th scope="row"><label for="project_id">Select Project</label></th>
                            <td>
                                <select name="project_id" required>
                                    <option value="" disabled selected>-- Select Target Project --</option>
                                    <?php foreach ($projects as $p): ?>
                                        <option value="<?php echo esc_attr($p->id); ?>"><?php echo esc_html($p->project_code . ' - ' . $p->title); ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </td>
                        </tr>
                        <tr><th scope="row"><label for="amount">Amount (NGN)</label></th><td><input name="amount" type="number" step="0.01" class="regular-text" required></td></tr>
                        <tr><th scope="row"><label for="tranche">Tranche / Description</label></th><td><input name="tranche" type="text" class="regular-text" placeholder="e.g. Mobilization Fee" required></td></tr>
                        <tr><th scope="row"><label for="auth_officer">Authorizing Officer</label></th><td><input name="auth_officer" type="text" class="regular-text" required></td></tr>
                    </tbody>
                </table>
                <p class="submit"><input type="submit" name="nastco_add_funds" class="button button-primary" value="Record Disbursement"></p>
            </form>
        </div>

        <h2 style="margin-top: 30px;">Disbursement Ledger</h2>
        <table class="wp-list-table widefat fixed striped">
            <thead><tr><th>ID</th><th>Project Code</th><th>Tranche</th><th>Amount (NGN)</th><th>Authorized By</th><th>Date</th></tr></thead>
            <tbody>
                <?php if (!empty($funds)) : foreach ($funds as $f) : ?>
                    <tr>
                        <td><?php echo esc_html($f->id); ?></td>
                        <td><strong><?php echo esc_html($f->project_code); ?></strong></td>
                        <td><?php echo esc_html($f->tranche); ?></td>
                        <td>₦<?php echo number_format($f->amount, 2); ?></td>
                        <td><?php echo esc_html($f->auth_officer); ?></td>
                        <td><?php echo esc_html($f->release_date); ?></td>
                    </tr>
                <?php endforeach; else: echo '<tr><td colspan="6">No disbursements logged.</td></tr>'; endif; ?>
            </tbody>
        </table>
    </div>
    <?php
}

/* ==========================================================================
   NASTCO PROJECT TRACKING: WP-CLI TERMINAL MANAGEMENT
   ========================================================================== */
if ( defined( 'WP_CLI' ) && WP_CLI ) {
    class NASTCO_CLI_Command {
        
        /**
         * List all projects in the master ledger.
         * Usage: wp nastco list
         */
        public function list( $args, $assoc_args ) {
            global $wpdb;
            $table = $wpdb->prefix . 'nastco_projects';
            $projects = $wpdb->get_results("SELECT id, project_code, title, directorate, status FROM $table", ARRAY_A);
            
            if (empty($projects)) {
                WP_CLI::warning("The NASTCO master ledger is currently empty.");
                return;
            }
            \WP_CLI\Utils\format_items('table', $projects, array('id', 'project_code', 'title', 'directorate', 'status'));
        }

        /**
         * Create a new project.
         * Usage: wp nastco create --code="NTC-002" --title="Core Upgrades" --directorate="AMSARC" --start="2026-11-01" --target="2027-01-01"
         */
        public function create( $args, $assoc_args ) {
            global $wpdb;
            $table = $wpdb->prefix . 'nastco_projects';
            
            if ( !isset($assoc_args['code'], $assoc_args['title'], $assoc_args['directorate'], $assoc_args['start'], $assoc_args['target']) ) {
                WP_CLI::error("Missing parameters. Required: --code, --title, --directorate, --start, --target");
            }

            $inserted = $wpdb->insert( $table, array(
                'project_code' => $assoc_args['code'],
                'title'        => $assoc_args['title'],
                'directorate'  => $assoc_args['directorate'],
                'contractor'   => $assoc_args['contractor'] ?? '',
                'total_budget' => floatval($assoc_args['budget'] ?? 0),
                'start_date'   => $assoc_args['start'],
                'target_date'  => $assoc_args['target'],
                'status'       => $assoc_args['status'] ?? 'PENDING'
            ));

            if ($inserted) {
                WP_CLI::success("Project {$assoc_args['code']} successfully injected into the master ledger.");
            } else {
                WP_CLI::error("Matrix insertion failed. Ensure project code is unique.");
            }
        }

        /**
         * Update an existing project.
         * Usage: wp nastco update <id> --status="COMPLETED" --budget=15500000
         */
        public function update( $args, $assoc_args ) {
            global $wpdb;
            $table = $wpdb->prefix . 'nastco_projects';
            list( $id ) = $args;
            
            if (empty($assoc_args)) WP_CLI::error("No parameters provided for update.");
            
            $updated = $wpdb->update( $table, $assoc_args, array( 'id' => $id ) );
            if ($updated !== false) {
                WP_CLI::success("Project ID {$id} successfully updated.");
            } else {
                WP_CLI::error("Update failed. Project ID may not exist or data is unchanged.");
            }
        }

        /**
         * Purge a project from the matrix.
         * Usage: wp nastco delete <id>
         */
        public function delete( $args, $assoc_args ) {
            global $wpdb;
            $table = $wpdb->prefix . 'nastco_projects';
            list( $id ) = $args;
            
            $deleted = $wpdb->delete( $table, array( 'id' => $id ) );
            if ($deleted) {
                WP_CLI::success("Project ID {$id} purged from the ledger.");
            } else {
                WP_CLI::error("Failed to purge project. Invalid ID.");
            }
        }

        /**
         * Log a project milestone.
         * Usage: wp nastco add_milestone <project_id> --phase="Foundation" --weight=25 --status="CLEARED"
         */
        public function add_milestone( $args, $assoc_args ) {
            global $wpdb;
            list( $project_id ) = $args;
            $table = $wpdb->prefix . 'nastco_milestones';
            if ( !isset($assoc_args['phase'], $assoc_args['weight']) ) WP_CLI::error("Required: --phase, --weight");
            $inserted = $wpdb->insert( $table, array(
                'project_id' => $project_id,
                'phase_name' => $assoc_args['phase'],
                'weight_pct' => intval($assoc_args['weight']),
                'status'     => $assoc_args['status'] ?? 'PENDING',
                'cleared_date'=> (isset($assoc_args['status']) && $assoc_args['status'] === 'CLEARED') ? current_time('mysql') : null
            ));
            if ($inserted) WP_CLI::success("Milestone '{$assoc_args['phase']}' logged for Project ID {$project_id}.");
            else WP_CLI::error("Failed to log milestone.");
        }

        /**
         * Log a financial disbursement.
         * Usage: wp nastco add_funds <project_id> --amount=5000000 --tranche="Mobilization" --officer="CMD-01"
         */
        public function add_funds( $args, $assoc_args ) {
            global $wpdb;
            list( $project_id ) = $args;
            $table = $wpdb->prefix . 'nastco_disbursements';
            if ( !isset($assoc_args['amount'], $assoc_args['tranche'], $assoc_args['officer']) ) WP_CLI::error("Required: --amount, --tranche, --officer");
            $inserted = $wpdb->insert( $table, array(
                'project_id'   => $project_id,
                'amount'       => floatval($assoc_args['amount']),
                'tranche'      => $assoc_args['tranche'],
                'auth_officer' => $assoc_args['officer']
            ));
            if ($inserted) WP_CLI::success("Disbursement of NGN {$assoc_args['amount']} logged for Project ID {$project_id}.");
            else WP_CLI::error("Failed to log disbursement.");
        }

        public function list_milestones( $args, $assoc_args ) {
            global $wpdb;
            list( $project_id ) = $args;
            $table = $wpdb->prefix . 'nastco_milestones';
            $data = $wpdb->get_results($wpdb->prepare("SELECT id, phase_name, weight_pct, status FROM $table WHERE project_id = %d", $project_id), ARRAY_A);
            if (empty($data)) WP_CLI::warning("No milestones for Project ID {$project_id}.");
            else \WP_CLI\Utils\format_items('table', $data, array('id', 'phase_name', 'weight_pct', 'status'));
        }

        public function list_funds( $args, $assoc_args ) {
            global $wpdb;
            list( $project_id ) = $args;
            $table = $wpdb->prefix . 'nastco_disbursements';
            $data = $wpdb->get_results($wpdb->prepare("SELECT id, tranche, amount, auth_officer FROM $table WHERE project_id = %d", $project_id), ARRAY_A);
            if (empty($data)) WP_CLI::warning("No disbursements for Project ID {$project_id}.");
            else \WP_CLI\Utils\format_items('table', $data, array('id', 'tranche', 'amount', 'auth_officer'));
        }
    }
    WP_CLI::add_command( 'nastco', 'NASTCO_CLI_Command' );
}

/* ==========================================================================
   NASTCO PROJECT TRACKING: FRONTEND SHORTCODES
   ========================================================================== */
add_shortcode('nastco_project', 'nastco_project_shortcode_handler');

function nastco_project_shortcode_handler($atts) {
    global $wpdb;
    $atts = shortcode_atts(array('code' => ''), $atts, 'nastco_project');

    if (empty($atts['code'])) {
        return '<p style="color:red; font-family:monospace;">[NASTCO Error: Project code required]</p>';
    }

    $project_table = $wpdb->prefix . 'nastco_projects';
    $milestone_table = $wpdb->prefix . 'nastco_milestones';
    $funds_table = $wpdb->prefix . 'nastco_disbursements';

    // 1. Fetch master project data
    $project = $wpdb->get_row($wpdb->prepare("SELECT * FROM $project_table WHERE project_code = %s", $atts['code']));

    if (!$project) {
        return '<p style="color:red; font-family:monospace;">[NASTCO Error: Project not found in master ledger]</p>';
    }

    // 2. Calculate operational progress
    $progress = $wpdb->get_var($wpdb->prepare("SELECT SUM(weight_pct) FROM $milestone_table WHERE project_id = %d AND status = 'CLEARED'", $project->id));
    $progress = $progress ? min(100, intval($progress)) : 0;

    // 3. Calculate financial burn rate
    $disbursed = $wpdb->get_var($wpdb->prepare("SELECT SUM(amount) FROM $funds_table WHERE project_id = %d", $project->id));
    $disbursed = $disbursed ? floatval($disbursed) : 0;
    $budget = floatval($project->total_budget);
    $financial_pct = $budget > 0 ? min(100, round(($disbursed / $budget) * 100)) : 0;

    // Determine UI Colors
    $status_color = '#f59e0b'; // PENDING (orange)
    if ($project->status === 'ACTIVE') $status_color = '#10b981'; // Green
    if ($project->status === 'HALTED') $status_color = '#ef4444'; // Red
    if ($project->status === 'COMPLETED') $status_color = '#3b82f6'; // Blue

    ob_start();
    ?>
    <div style="font-family: system-ui, -apple-system, sans-serif; background: #ffffff; border: 1px solid #e5e7eb; border-radius: 8px; padding: 24px; max-width: 600px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); margin: 20px 0;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 16px;">
            <div>
                <h3 style="margin: 0 0 4px 0; font-size: 1.25rem; font-weight: 700; color: #111827;"><?php echo esc_html($project->title); ?></h3>
                <span style="font-size: 0.875rem; color: #6b7280; font-family: monospace;"><?php echo esc_html($project->project_code); ?> | Node: <?php echo esc_html($project->directorate); ?></span>
            </div>
            <span style="background: <?php echo $status_color; ?>20; color: <?php echo $status_color; ?>; padding: 4px 12px; border-radius: 9999px; font-size: 0.75rem; font-weight: 700; letter-spacing: 0.05em; text-transform: uppercase;">
                <?php echo esc_html($project->status); ?>
            </span>
        </div>
        
        <!-- Phase Progress -->
        <div style="margin-bottom: 8px; display: flex; justify-content: space-between; font-size: 0.875rem; font-weight: 600; color: #374151;">
            <span>Phase Completion</span>
            <span><?php echo $progress; ?>%</span>
        </div>
        <div style="width: 100%; background-color: #f3f4f6; border-radius: 9999px; height: 12px; overflow: hidden; margin-bottom: 20px;">
            <div style="background-color: <?php echo $status_color; ?>; height: 12px; border-radius: 9999px; width: <?php echo $progress; ?>%; transition: width 0.5s ease-in-out;"></div>
        </div>

        <!-- Financial Disbursements -->
        <div style="margin-bottom: 8px; display: flex; justify-content: space-between; font-size: 0.875rem; font-weight: 600; color: #374151;">
            <span>Disbursements (₦<?php echo number_format($disbursed); ?> / ₦<?php echo number_format($budget); ?>)</span>
            <span><?php echo $financial_pct; ?>%</span>
        </div>
        <div style="width: 100%; background-color: #f3f4f6; border-radius: 9999px; height: 12px; overflow: hidden;">
            <div style="background-color: #8b5cf6; height: 12px; border-radius: 9999px; width: <?php echo $financial_pct; ?>%; transition: width 0.5s ease-in-out;"></div>
        </div>
        
        <!-- Metadata -->
        <div style="display: flex; justify-content: space-between; margin-top: 20px; font-size: 0.75rem; color: #6b7280; border-top: 1px solid #e5e7eb; padding-top: 16px;">
            <span>Commenced: <?php echo date('M j, Y', strtotime($project->start_date)); ?></span>
            <span>Target: <?php echo date('M j, Y', strtotime($project->target_date)); ?></span>
        </div>
    </div>
    <?php
    return ob_get_clean();
}
/* ==========================================================================
   NASTCO PROJECT TRACKING: ELEMENTOR INTEGRATION
   ========================================================================== */
function nastco_register_elementor_widget( $widgets_manager ) {
    require_once( get_stylesheet_directory() . '/nastco-elementor-widget.php' );
    $widgets_manager->register( new \Elementor_Nastco_Project_Widget() );
}
add_action( 'elementor/widgets/register', 'nastco_register_elementor_widget' );

// NISTCO Venture Commerce & Royalty Telemetry API
require_once get_template_directory() . '/inc-venture-api.php';

/**
 * ==========================================================================
 * NASTCO TERMII SMS / WHATSAPP DISPATCH TELEMETRY ENDPOINT
 * ==========================================================================
 */
add_action( 'rest_api_init', function () {
    register_rest_route( 'nastco/v1', '/dispatch', array(
        'methods'             => 'POST',
        'callback'            => 'nastco_handle_form_dispatch',
        'permission_callback' => '__return_true',
    ));
});

function nastco_handle_form_dispatch( $request ) {
    $params = $request->get_json_params();

    $name    = sanitize_text_field( $params['name'] ?? '' );
    $email   = sanitize_email( $params['email'] ?? '' );
    $phone   = sanitize_text_field( $params['phone'] ?? '' );
    $subject = sanitize_text_field( $params['subject'] ?? '' );
    $message = sanitize_textarea_field( $params['message'] ?? '' );

    if ( empty( $name ) || empty( $phone ) || empty( $message ) ) {
        return new WP_REST_Response( array( 'success' => false, 'message' => 'Required fields missing.' ), 400 );
    }

    $sms_message = sprintf(
        '[NASTCO DISPATCH] From: %s (%s). Subject: %s. Msg: %s',
        $name, $phone, $subject, substr( $message, 0, 120 )
    );

    $termii_api_key  = defined( 'TERMII_API_KEY' ) ? TERMII_API_KEY : 'YOUR_TERMII_API_KEY';
    $sender_id       = defined( 'TERMII_SENDER_ID' ) ? TERMII_SENDER_ID : 'NASTCO';
    $executive_phone = '2348000000000'; // Target executive mobile number

    $payload = array(
        'api_key' => $termii_api_key,
        'to'      => $executive_phone,
        'from'    => $sender_id,
        'sms'     => $sms_message,
        'type'    => 'plain',
        'channel' => 'generic',
    );

    $response = wp_remote_post( 'https://v3.api.termii.com/api/sms/send', array(
        'body'    => json_encode( $payload ),
        'headers' => array( 'Content-Type' => 'application/json' ),
        'timeout' => 15,
    ));

    if ( is_wp_error( $response ) ) {
        return new WP_REST_Response( array( 'success' => false, 'message' => 'Telemetry gateway timeout.' ), 500 );
    }

    $body = json_decode( wp_remote_retrieve_body( $response ), true );

    return new WP_REST_Response( array(
        'success' => true,
        'message' => 'Secure transmission dispatched via Termii.',
        'data'    => $body
    ), 200 );
}

// Enqueue dispatch frontend script
add_action( 'wp_enqueue_scripts', function() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();
    if ( file_exists( $theme_dir . '/assets/js/dispatch.js' ) ) {
        wp_enqueue_script(
            'nastco-dispatch-js',
            $theme_uri . '/assets/js/dispatch.js',
            array(),
            filemtime( $theme_dir . '/assets/js/dispatch.js' ),
            true
        );
    }
}, 20 );

/**
 * Enqueue Refined 3D Sovereign Header Assets Globally
 */
add_action( 'wp_enqueue_scripts', function() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    if ( file_exists( $theme_dir . '/assets/css/header-3d.css' ) ) {
        wp_enqueue_style(
            'nastco-header-3d',
            $theme_uri . '/assets/css/header-3d.css',
            array(),
            filemtime( $theme_dir . '/assets/css/header-3d.css' )
        );
    }

    if ( file_exists( $theme_dir . '/assets/js/header-3d.js' ) ) {
        wp_enqueue_script(
            'nastco-header-3d-js',
            $theme_uri . '/assets/js/header-3d.js',
            array(),
            filemtime( $theme_dir . '/assets/js/header-3d.js' ),
            true
        );
    }
}, 15 );

/**
 * Enqueue Refined 3D Sovereign Footer Stylesheet
 */
add_action( 'wp_enqueue_scripts', function() {
    $theme_dir = get_template_directory();
    $theme_uri = get_template_directory_uri();

    if ( file_exists( $theme_dir . '/assets/css/footer-3d.css' ) ) {
        wp_enqueue_style(
            'nastco-footer-3d',
            $theme_uri . '/assets/css/footer-3d.css',
            array( 'nastco-header-3d' ),
            filemtime( $theme_dir . '/assets/css/footer-3d.css' )
        );
    }
}, 16 );

require_once get_template_directory() . '/inc/force-assets-loader.php';

require_once get_template_directory() . '/inc/dispatch-endpoint.php';

require_once get_template_directory() . '/inc/live-ledger-api.php';
