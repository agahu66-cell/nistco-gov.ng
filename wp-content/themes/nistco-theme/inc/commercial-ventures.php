<?php
/**
 * NISTCO Commercial Ventures & Inventory Management CPT & Meta Boxes
 */

// 1. Register Custom Post Type: nistco_venture
function nistco_register_venture_cpt() {
    $labels = array(
        'name'                  => 'Commercial Ventures',
        'singular_name'         => 'Commercial Venture',
        'menu_name'             => 'Commercial Ventures',
        'add_new'               => 'Add New Venture',
        'add_new_item'          => 'Add New Commercial Venture',
        'edit_item'             => 'Edit Venture',
        'new_item'              => 'New Venture',
        'view_item'             => 'View Venture',
        'search_items'          => 'Search Commercial Ventures',
        'not_found'             => 'No ventures found',
        'not_found_in_trash'    => 'No ventures found in Trash',
        'all_items'             => 'All Ventures',
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'has_archive'         => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'menu_position'       => 20,
        'menu_icon'           => 'dashicons-store',
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields' ),
        'show_in_rest'        => true,
    );

    register_post_type( 'nistco_venture', $args );
}
add_action( 'init', 'nistco_register_venture_cpt' );

// 2. Add Meta Boxes for Commercial Ventures
function nistco_add_venture_meta_boxes() {
    add_meta_box(
        'nistco_venture_details',
        'NISTCO Commercial & Patent Metadata (NOTAP & TRL)',
        'nistco_venture_meta_box_html',
        'nistco_venture',
        'normal',
        'high'
    );
}
add_action( 'add_meta_boxes', 'nistco_add_venture_meta_boxes' );

function nistco_venture_meta_box_html( $post ) {
    wp_nonce_field( 'nistco_save_venture_meta', 'nistco_venture_nonce' );

    $notap_ref      = get_post_meta( $post->ID, '_nistco_notap_ref', true );
    $trl_level      = get_post_meta( $post->ID, '_nistco_trl_level', true );
    $centre_code    = get_post_meta( $post->ID, '_nistco_centre_code', true );
    $comm_status    = get_post_meta( $post->ID, '_nistco_comm_status', true );
    $unit_price     = get_post_meta( $post->ID, '_nistco_unit_price', true );
    $royalty_rate   = get_post_meta( $post->ID, '_nistco_royalty_rate', true );
    $stock_qty      = get_post_meta( $post->ID, '_nistco_stock_qty', true );
    $sku            = get_post_meta( $post->ID, '_nistco_sku', true );
    ?>
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; padding: 0.5rem; font-family: sans-serif;">
        
        <div>
            <label for="nistco_notap_ref" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: #042416;">NOTAP Patent Reference No:</label>
            <input type="text" id="nistco_notap_ref" name="nistco_notap_ref" value="<?php echo esc_attr( $notap_ref ); ?>" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;" placeholder="e.g., NOTAP/PAT/2026/049">
        </div>

        <div>
            <label for="nistco_sku" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: #042416;">Product / Patent SKU:</label>
            <input type="text" id="nistco_sku" name="nistco_sku" value="<?php echo esc_attr( $sku ); ?>" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;" placeholder="e.g., BARC-BIO-001">
        </div>

        <div>
            <label for="nistco_trl_level" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: #042416;">Technology Readiness Level (TRL):</label>
            <select id="nistco_trl_level" name="nistco_trl_level" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;">
                <?php
                $trls = array(
                    'TRL 1' => 'TRL 1: Basic Principles Observed',
                    'TRL 2' => 'TRL 2: Technology Concept Formulated',
                    'TRL 3' => 'TRL 3: Experimental Proof of Concept',
                    'TRL 4' => 'TRL 4: Technology Validated in Lab',
                    'TRL 5' => 'TRL 5: Validated in Relevant Environment',
                    'TRL 6' => 'TRL 6: Demonstrated in Relevant Environment',
                    'TRL 7' => 'TRL 7: System Prototype Demonstrated',
                    'TRL 8' => 'TRL 8: System Complete & Qualified',
                    'TRL 9' => 'TRL 9: Commercial Deployment'
                );
                foreach ( $trls as $key => $label ) {
                    echo '<option value="' . esc_attr( $key ) . '" ' . selected( $trl_level, $key, false ) . '>' . esc_html( $label ) . '</option>';
                }
                ?>
            </select>
        </div>

        <div>
            <label for="nistco_centre_code" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: #042416;">Originating Research Centre:</label>
            <select id="nistco_centre_code" name="nistco_centre_code" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;">
                <?php
                $centres = array(
                    'AMSARC' => 'AMSARC - Applied Mathematics & Simulation Advanced Research Centre',
                    'BARC'   => 'BARC - Biotechnology Advanced Research Centre',
                    'CARC'   => 'CARC - Chemical Advanced Research Centre',
                    'PARC'   => 'PARC - Physical Advanced Research Centre',
                    'NTC'    => 'NTC - Nuclear Technology Centre',
                    'PEW'    => 'Precision Engineering Workshop'
                );
                foreach ( $centres as $code => $label ) {
                    echo '<option value="' . esc_attr( $code ) . '" ' . selected( $centre_code, $code, false ) . '>' . esc_html( $label ) . '</option>';
                }
                ?>
            </select>
        </div>

        <div>
            <label for="nistco_comm_status" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: #042416;">Commercial Status Indicator:</label>
            <select id="nistco_comm_status" name="nistco_comm_status" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;">
                <?php
                $statuses = array(
                    'Production Ready'        => 'Production Ready',
                    'Actively Commercialized' => 'Actively Commercialized',
                    'Pilot Scale Testing'     => 'Pilot Scale Testing',
                    'Patent Pending'          => 'Patent Pending'
                );
                foreach ( $statuses as $st => $label ) {
                    echo '<option value="' . esc_attr( $st ) . '" ' . selected( $comm_status, $st, false ) . '>' . esc_html( $label ) . '</option>';
                }
                ?>
            </select>
        </div>

        <div>
            <label for="nistco_unit_price" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: #042416;">Unit Price (NGN):</label>
            <input type="number" step="0.01" id="nistco_unit_price" name="nistco_unit_price" value="<?php echo esc_attr( $unit_price ); ?>" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;" placeholder="0.00">
        </div>

        <div>
            <label for="nistco_royalty_rate" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: #042416;">Statutory Royalty Rate (%):</label>
            <input type="number" step="0.01" id="nistco_royalty_rate" name="nistco_royalty_rate" value="<?php echo esc_attr( $royalty_rate ? $royalty_rate : '5.00' ); ?>" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;" placeholder="5.00">
        </div>

        <div>
            <label for="nistco_stock_qty" style="display: block; font-weight: 600; margin-bottom: 0.5rem; color: #042416;">Stock Quantity / Batch Units:</label>
            <input type="number" id="nistco_stock_qty" name="nistco_stock_qty" value="<?php echo esc_attr( $stock_qty ); ?>" style="width: 100%; padding: 0.5rem; border: 1px solid #cbd5e1; border-radius: 4px;" placeholder="0">
        </div>

    </div>
    <?php
}

// 3. Save Meta Box Data & Sync Inventory Table
function nistco_save_venture_meta( $post_id ) {
    if ( ! isset( $_POST['nistco_venture_nonce'] ) || ! wp_verify_nonce( $_POST['nistco_venture_nonce'], 'nistco_save_venture_meta' ) ) {
        return;
    }
    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
        return;
    }
    if ( ! current_user_can( 'edit_post', $post_id ) ) {
        return;
    }

    $fields = array(
        '_nistco_notap_ref'    => sanitize_text_field( $_POST['nistco_notap_ref'] ?? '' ),
        '_nistco_trl_level'    => sanitize_text_field( $_POST['nistco_trl_level'] ?? '' ),
        '_nistco_centre_code'  => sanitize_text_field( $_POST['nistco_centre_code'] ?? '' ),
        '_nistco_comm_status'  => sanitize_text_field( $_POST['nistco_comm_status'] ?? '' ),
        '_nistco_unit_price'   => floatval( $_POST['nistco_unit_price'] ?? 0 ),
        '_nistco_royalty_rate' => floatval( $_POST['nistco_royalty_rate'] ?? 5.00 ),
        '_nistco_stock_qty'    => intval( $_POST['nistco_stock_qty'] ?? 0 ),
        '_nistco_sku'          => sanitize_text_field( $_POST['nistco_sku'] ?? '' ),
    );

    foreach ( $fields as $key => $value ) {
        update_post_meta( $post_id, $key, $value );
    }

    // Sync with custom inventory table wp_nistco_commercial_inventory
    global $wpdb;
    $table_name = $wpdb->prefix . 'nistco_commercial_inventory';
    
    $exists = $wpdb->get_var( $wpdb->prepare( "SELECT id FROM {$table_name} WHERE post_id = %d", $post_id ) );
    
    $sku = $fields['_nistco_sku'] ? $fields['_nistco_sku'] : 'NISTCO-' . $post_id;
    
    if ( $exists ) {
        $wpdb->update(
            $table_name,
            array(
                'sku'            => $sku,
                'unit_price'     => $fields['_nistco_unit_price'],
                'royalty_rate'   => $fields['_nistco_royalty_rate'],
                'stock_quantity' => $fields['_nistco_stock_qty'],
                'centre_code'    => $fields['_nistco_centre_code'],
                'status'         => $fields['_nistco_comm_status'],
            ),
            array( 'post_id' => $post_id ),
            array( '%s', '%f', '%f', '%d', '%s', '%s' ),
            array( '%d' )
        );
    } else {
        $wpdb->insert(
            $table_name,
            array(
                'post_id'        => $post_id,
                'sku'            => $sku,
                'unit_price'     => $fields['_nistco_unit_price'],
                'royalty_rate'   => $fields['_nistco_royalty_rate'],
                'stock_quantity' => $fields['_nistco_stock_qty'],
                'centre_code'    => $fields['_nistco_centre_code'],
                'status'         => $fields['_nistco_comm_status'],
            ),
            array( '%d', '%s', '%f', '%f', '%d', '%s', '%s' )
        );
    }
}
add_action( 'save_post_nistco_venture', 'nistco_save_venture_meta' );

// 4. Create Custom MariaDB Inventory Table
function nistco_create_inventory_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'nistco_commercial_inventory';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE IF NOT EXISTS $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        post_id bigint(20) NOT NULL,
        sku varchar(100) NOT NULL,
        unit_price decimal(12,2) NOT NULL DEFAULT '0.00',
        royalty_rate decimal(5,2) NOT NULL DEFAULT '5.00',
        stock_quantity int(11) NOT NULL DEFAULT '0',
        centre_code varchar(50) NOT NULL,
        status varchar(50) NOT NULL DEFAULT 'Active',
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY  (id),
        UNIQUE KEY post_id (post_id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
add_action( 'after_switch_theme', 'nistco_create_inventory_table' );
add_action( 'init', 'nistco_create_inventory_table' );
