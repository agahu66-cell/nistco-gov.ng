<?php
/**
 * NISTCO Commercial Ventures & Royalty Ledger Database Models
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

class NISTCO_Ventures_Repository {

    public static function get_table_name() {
        global $wpdb;
        return $wpdb->prefix . 'nistco_ventures';
    }

    public static function migrate() {
        global $wpdb;
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $table_name = self::get_table_name();
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE {$table_name} (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            venture_code VARCHAR(32) NOT NULL UNIQUE,
            title VARCHAR(255) NOT NULL,
            centre_slug VARCHAR(32) NOT NULL,
            venture_type ENUM('patent_license', 'pilot_production', 'contract_rd', 'technical_service') NOT NULL,
            partner_entity VARCHAR(255) NOT NULL,
            notap_reg_no VARCHAR(64) DEFAULT NULL,
            contract_value DECIMAL(14,2) NOT NULL DEFAULT 0.00,
            royalty_rate_pct DECIMAL(5,2) NOT NULL DEFAULT 0.00,
            status ENUM('active', 'under_review', 'terminated', 'fulfilled') NOT NULL DEFAULT 'active',
            commencement_date DATE NOT NULL,
            expiry_date DATE DEFAULT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id),
            INDEX idx_centre_slug (centre_slug),
            INDEX idx_status (status),
            INDEX idx_venture_type (venture_type)
        ) {$charset_collate};";

        dbDelta( $sql );
    }

    public static function create_venture( $data ) {
        global $wpdb;
        $table = self::get_table_name();

        $defaults = [
            'venture_code'      => '',
            'title'             => '',
            'centre_slug'       => '',
            'venture_type'      => 'contract_rd',
            'partner_entity'    => '',
            'notap_reg_no'      => null,
            'contract_value'    => 0.00,
            'royalty_rate_pct'  => 0.00,
            'status'            => 'active',
            'commencement_date' => current_time( 'Y-m-d' ),
            'expiry_date'       => null,
        ];

        $payload = wp_parse_args( $data, $defaults );

        return $wpdb->replace(
            $table,
            [
                'venture_code'      => sanitize_text_field( $payload['venture_code'] ),
                'title'             => sanitize_text_field( $payload['title'] ),
                'centre_slug'       => sanitize_text_field( $payload['centre_slug'] ),
                'venture_type'      => sanitize_text_field( $payload['venture_type'] ),
                'partner_entity'    => sanitize_text_field( $payload['partner_entity'] ),
                'notap_reg_no'      => ! empty( $payload['notap_reg_no'] ) ? sanitize_text_field( $payload['notap_reg_no'] ) : null,
                'contract_value'    => (float) $payload['contract_value'],
                'royalty_rate_pct'  => (float) $payload['royalty_rate_pct'],
                'status'            => sanitize_text_field( $payload['status'] ),
                'commencement_date' => $payload['commencement_date'],
                'expiry_date'       => $payload['expiry_date'],
            ],
            [ '%s', '%s', '%s', '%s', '%s', '%s', '%f', '%f', '%s', '%s', '%s' ]
        );
    }

    public static function get_ventures( $args = [] ) {
        global $wpdb;
        $table = self::get_table_name();

        $where = [ '1=1' ];
        $params = [];

        if ( ! empty( $args['centre_slug'] ) ) {
            $where[] = 'centre_slug = %s';
            $params[] = sanitize_text_field( $args['centre_slug'] );
        }

        if ( ! empty( $args['status'] ) ) {
            $where[] = 'status = %s';
            $params[] = sanitize_text_field( $args['status'] );
        }

        if ( ! empty( $args['venture_type'] ) ) {
            $where[] = 'venture_type = %s';
            $params[] = sanitize_text_field( $args['venture_type'] );
        }

        $where_clause = implode( ' AND ', $where );
        $limit = isset( $args['limit'] ) ? absint( $args['limit'] ) : 50;

        $sql = "SELECT * FROM {$table} WHERE {$where_clause} ORDER BY commencement_date DESC LIMIT {$limit}";

        if ( ! empty( $params ) ) {
            $prepared = $wpdb->prepare( $sql, $params );
            return $wpdb->get_results( $prepared, ARRAY_A );
        }

        return $wpdb->get_results( $sql, ARRAY_A );
    }

    public static function get_portfolio_summary() {
        global $wpdb;
        $table = self::get_table_name();

        $sql = "SELECT 
                    COUNT(id) AS total_agreements,
                    SUM(CASE WHEN status = 'active' THEN 1 ELSE 0 END) AS active_agreements,
                    COALESCE(SUM(contract_value), 0.00) AS total_portfolio_valuation,
                    COALESCE(SUM(CASE WHEN status = 'active' THEN contract_value ELSE 0 END), 0.00) AS active_portfolio_valuation,
                    COUNT(DISTINCT centre_slug) AS active_centres_count
                FROM {$table}";

        $metrics = $wpdb->get_row( $sql, ARRAY_A );

        return [
            'total_agreements'           => (int) ( $metrics['total_agreements'] ?? 0 ),
            'active_agreements'          => (int) ( $metrics['active_agreements'] ?? 0 ),
            'total_portfolio_valuation'  => (float) ( $metrics['total_portfolio_valuation'] ?? 0.00 ),
            'active_portfolio_valuation' => (float) ( $metrics['active_portfolio_valuation'] ?? 0.00 ),
            'active_centres_count'       => (int) ( $metrics['active_centres_count'] ?? 0 ),
        ];
    }
}

class NISTCO_Royalties_Repository {

    public static function get_table_name() {
        global $wpdb;
        return $wpdb->prefix . 'nistco_royalties';
    }

    public static function migrate() {
        global $wpdb;
        require_once ABSPATH . 'wp-admin/includes/upgrade.php';

        $table_name = self::get_table_name();
        $charset_collate = $wpdb->get_charset_collate();

        $sql = "CREATE TABLE {$table_name} (
            id BIGINT(20) UNSIGNED NOT NULL AUTO_INCREMENT,
            transaction_ref VARCHAR(64) NOT NULL UNIQUE,
            venture_id BIGINT(20) UNSIGNED NOT NULL,
            centre_slug VARCHAR(32) NOT NULL,
            gross_receipt DECIMAL(14,2) NOT NULL DEFAULT 0.00,
            statutory_royalty_amount DECIMAL(14,2) NOT NULL DEFAULT 0.00,
            inventor_share DECIMAL(14,2) NOT NULL DEFAULT 0.00,
            centre_share DECIMAL(14,2) NOT NULL DEFAULT 0.00,
            nistco_institutional_share DECIMAL(14,2) NOT NULL DEFAULT 0.00,
            payment_date DATE NOT NULL,
            settlement_status ENUM('pending', 'cleared', 'disbursed') NOT NULL DEFAULT 'pending',
            remittance_reference VARCHAR(128) DEFAULT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            PRIMARY KEY (id),
            INDEX idx_centre_royalties (centre_slug),
            INDEX idx_settlement_status (settlement_status),
            INDEX idx_venture_id (venture_id)
        ) {$charset_collate};";

        dbDelta( $sql );
    }

    public static function record_royalty( $data ) {
        global $wpdb;
        $table = self::get_table_name();

        $gross = (float) ( $data['gross_receipt'] ?? 0.00 );
        $statutory = isset( $data['statutory_royalty_amount'] ) 
            ? (float) $data['statutory_royalty_amount'] 
            : $gross;

        // Automated Statutory Tranche Split: 40% / 35% / 25%
        $inventor_share      = round( $statutory * 0.40, 2 );
        $centre_share        = round( $statutory * 0.35, 2 );
        $institutional_share = round( $statutory * 0.25, 2 );

        return $wpdb->replace(
            $table,
            [
                'transaction_ref'            => sanitize_text_field( $data['transaction_ref'] ),
                'venture_id'                 => absint( $data['venture_id'] ),
                'centre_slug'                => sanitize_text_field( $data['centre_slug'] ),
                'gross_receipt'              => $gross,
                'statutory_royalty_amount'   => $statutory,
                'inventor_share'             => $inventor_share,
                'centre_share'               => $centre_share,
                'nistco_institutional_share' => $institutional_share,
                'payment_date'               => sanitize_text_field( $data['payment_date'] ),
                'settlement_status'          => sanitize_text_field( $data['settlement_status'] ?? 'pending' ),
                'remittance_reference'       => sanitize_text_field( $data['remittance_reference'] ?? '' ),
            ],
            [ '%s', '%d', '%s', '%f', '%f', '%f', '%f', '%f', '%s', '%s', '%s' ]
        );
    }

    public static function get_centre_royalty_summary() {
        global $wpdb;
        $table = self::get_table_name();

        $sql = "SELECT 
                    centre_slug,
                    COUNT(id) AS transaction_count,
                    COALESCE(SUM(gross_receipt), 0.00) AS total_gross_receipts,
                    COALESCE(SUM(statutory_royalty_amount), 0.00) AS total_royalties,
                    COALESCE(SUM(inventor_share), 0.00) AS total_inventor_pool,
                    COALESCE(SUM(centre_share), 0.00) AS total_centre_pool,
                    COALESCE(SUM(nistco_institutional_share), 0.00) AS total_institutional_pool
                FROM {$table}
                WHERE settlement_status IN ('cleared', 'disbursed')
                GROUP BY centre_slug
                ORDER BY total_royalties DESC";

        $results = $wpdb->get_results( $sql, ARRAY_A );
        return ! empty( $results ) ? $results : [];
    }
}
