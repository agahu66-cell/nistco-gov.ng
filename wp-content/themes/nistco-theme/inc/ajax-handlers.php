<?php
/**
 * Nigeria Innovation, Science and Technology Complex (NISTCO)
 * AJAX Dispatchers & Form Handlers
 * File: inc/ajax-handlers.php
 *
 * @package NistcoTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function nistco_handle_licensing_eoi() {
    $nonce_verified = false;
    if ( isset( $_POST['nistco_licensing_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nistco_licensing_nonce'] ) ), 'nistco_rating_eoi_nonce' ) ) {
        $nonce_verified = true;
    } elseif ( isset( $_POST['nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nonce'] ) ), 'nistco_rating_eoi_nonce' ) ) {
        $nonce_verified = true;
    } elseif ( isset( $_POST['nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nonce'] ) ), 'shestco_rating_eoi_nonce' ) ) {
        $nonce_verified = true;
    }

    if ( ! $nonce_verified ) {
        wp_send_json_error( array( 'message' => __( 'Security verification failed. Please refresh the page and try again.', 'nistco-theme' ) ), 403 );
    }

    $applicant_name = sanitize_text_field( wp_unslash( $_POST['applicant_name'] ?? '' ) );
    $company_name   = sanitize_text_field( wp_unslash( $_POST['company_name'] ?? '' ) );
    $cac_number     = sanitize_text_field( wp_unslash( $_POST['cac_number'] ?? 'N/A' ) );
    $email          = sanitize_email( wp_unslash( $_POST['applicant_email'] ?? '' ) );
    $phone          = sanitize_text_field( wp_unslash( $_POST['applicant_phone'] ?? '' ) );
    $tech_title     = sanitize_text_field( wp_unslash( $_POST['tech_title'] ?? 'General Licensing Inquiry' ) );
    $tech_ref       = sanitize_text_field( wp_unslash( $_POST['tech_ref'] ?? 'NISTCO/EOI/2026' ) );
    $model          = sanitize_text_field( wp_unslash( $_POST['licensing_model'] ?? 'Non-Exclusive Commercial License' ) );
    $scope          = sanitize_textarea_field( wp_unslash( $_POST['project_scope'] ?? '' ) );

    if ( empty( $applicant_name ) || empty( $company_name ) || empty( $email ) || ! is_email( $email ) ) {
        wp_send_json_error( array( 'message' => __( 'Please complete all required fields with a valid official email address.', 'nistco-theme' ) ), 400 );
    }

    $admin_email = get_option( 'admin_email' );
    $subject     = sprintf( '[NISTCO Technology Transfer EOI] %s - %s', $tech_title, $company_name );
    $ref_code    = 'EOI-' . strtoupper( wp_generate_password( 6, false ) );
    $body        = "A statutory Technology Licensing Expression of Interest has been lodged via the Innovation Gateway:\n\n";
    $body       .= "Reference ID: " . $ref_code . "\n";
    $body       .= "Commercial Technology: " . $tech_title . " (" . $tech_ref . ")\n";
    $body       .= "Applicant Full Name: " . $applicant_name . "\n";
    $body       .= "Organization / Entity: " . $company_name . " (CAC Reg: " . $cac_number . ")\n";
    $body       .= "Official Corporate Email: " . $email . "\n";
    $body       .= "Telephone Contact: " . $phone . "\n";
    $body       .= "Requested Commercialization Model: " . $model . "\n\n";
    $body       .= "Proposed Scope & Industrial Domestication Plan:\n" . ( $scope ? $scope : 'None provided.' ) . "\n\n";
    $body       .= "Timestamp: " . current_time( 'mysql' ) . "\n";
    $body       .= "Client IP: " . ( isset( $_SERVER['REMOTE_ADDR'] ) ? sanitize_text_field( wp_unslash( $_SERVER['REMOTE_ADDR'] ) ) : 'Unknown' ) . "\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: NISTCO Licensing Portal <' . $admin_email . '>',
        'Reply-To: ' . $applicant_name . ' <' . $email . '>',
    );

    wp_mail( $admin_email, $subject, $body, $headers );
    wp_send_json_success( array(
        'message'  => sprintf( __( '✓ Expression of Interest successfully registered. Reference: %s!', 'nistco-theme' ), $ref_code ),
        'ref_code' => $ref_code,
    ) );
}
add_action( 'wp_ajax_nistco_submit_licensing_eoi', 'nistco_handle_licensing_eoi' );
add_action( 'wp_ajax_nopriv_nistco_submit_licensing_eoi', 'nistco_handle_licensing_eoi' );
add_action( 'wp_ajax_shestco_submit_licensing_eoi', 'nistco_handle_licensing_eoi' );
add_action( 'wp_ajax_nopriv_shestco_submit_licensing_eoi', 'nistco_handle_licensing_eoi' );

function nistco_handle_researcher_rating() {
    $nonce_verified = false;
    if ( isset( $_POST['nistco_rating_nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nistco_rating_nonce'] ) ), 'nistco_rating_eoi_nonce' ) ) {
        $nonce_verified = true;
    } elseif ( isset( $_POST['nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nonce'] ) ), 'nistco_rating_eoi_nonce' ) ) {
        $nonce_verified = true;
    } elseif ( isset( $_POST['nonce'] ) && wp_verify_nonce( sanitize_text_field( wp_unslash( $_POST['nonce'] ) ), 'shestco_rating_eoi_nonce' ) ) {
        $nonce_verified = true;
    }

    if ( ! $nonce_verified ) {
        wp_send_json_error( array( 'message' => __( 'Security verification failed. Please refresh the page and try again.', 'nistco-theme' ) ), 403 );
    }

    $reviewer_name = sanitize_text_field( wp_unslash( $_POST['reviewer_name'] ?? '' ) );
    $institution   = sanitize_text_field( wp_unslash( $_POST['institution'] ?? '' ) );
    $centre_used   = sanitize_text_field( wp_unslash( $_POST['centre_used'] ?? 'Central Laboratories Core' ) );
    $score         = sanitize_text_field( wp_unslash( $_POST['score'] ?? '5.0' ) );
    $feedback      = sanitize_textarea_field( wp_unslash( $_POST['feedback_text'] ?? '' ) );

    if ( empty( $reviewer_name ) || empty( $institution ) || empty( $feedback ) ) {
        wp_send_json_error( array( 'message' => __( 'Please provide your name, institution, and residency feedback observations.', 'nistco-theme' ) ), 400 );
    }

    $admin_email = get_option( 'admin_email' );
    $subject     = sprintf( '[NISTCO Facility Rating] New %s Star Review for %s by %s', $score, $centre_used, $reviewer_name );
    $body        = "A verified facility review has been submitted via the Complex Portal:\n\n";
    $body       .= "Researcher / Fellow: " . $reviewer_name . "\n";
    $body       .= "Affiliated Institution: " . $institution . "\n";
    $body       .= "Research Centre / Division Utilized: " . $centre_used . "\n";
    $body       .= "Performance Score: " . $score . " / 5.0\n\n";
    $body       .= "Technical Observations & User Feedback:\n" . $feedback . "\n\n";
    $body       .= "Timestamp: " . current_time( 'mysql' ) . "\n";

    $headers = array(
        'Content-Type: text/plain; charset=UTF-8',
        'From: NISTCO QA Portal <' . $admin_email . '>',
    );

    wp_mail( $admin_email, $subject, $body, $headers );
    wp_send_json_success( array(
        'message' => __( '✓ Thank you! Your residency rating has been transmitted to the Quality Assurance Desk for moderation and publication.', 'nistco-theme' ),
    ) );
}
add_action( 'wp_ajax_nistco_submit_researcher_rating', 'nistco_handle_researcher_rating' );
add_action( 'wp_ajax_nopriv_nistco_submit_researcher_rating', 'nistco_handle_researcher_rating' );
add_action( 'wp_ajax_shestco_submit_researcher_rating', 'nistco_handle_researcher_rating' );
add_action( 'wp_ajax_nopriv_shestco_submit_researcher_rating', 'nistco_handle_researcher_rating' );

if ( ! function_exists( 'shestco_handle_licensing_eoi' ) ) {
    function shestco_handle_licensing_eoi() {
        nistco_handle_licensing_eoi();
    }
}

if ( ! function_exists( 'shestco_handle_researcher_rating' ) ) {
    function shestco_handle_researcher_rating() {
        nistco_handle_researcher_rating();
    }
}
