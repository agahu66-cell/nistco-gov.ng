<?php
/**
 * Nigeria Innovation, Science and Technology Complex (NISTCO)
 * Theme Customizer Panels & Governance Settings
 * File: inc/customizer.php
 *
 * @package NistcoTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function nistco_customize_register( $wp_customize ) {
    $wp_customize->add_panel( 'nistco_governance_panel', array(
        'title'       => __( 'Nigeria Innovation, Science and Technology Complex (commonly known as NISTCO) Governance & Leadership', 'nistco-theme' ),
        'description' => __( 'Configure institutional leadership profiles, official portraits, executive vision statements, and directorate heads.', 'nistco-theme' ),
        'priority'    => 25,
    ) );

    // SECTION 1: PRESIDENCY & APEX PATRONAGE
    $wp_customize->add_section( 'nistco_president_section', array(
        'title'    => __( 'Presidency & Apex Patronage', 'nistco-theme' ),
        'panel'    => 'nistco_governance_panel',
        'priority' => 5,
    ) );

    $wp_customize->add_setting( 'nistco_president_name', array(
        'default'           => 'His Excellency, The President of the Federal Republic of Nigeria',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'nistco_president_name', array(
        'label'   => __( 'President Full Name & Titles', 'nistco-theme' ),
        'section' => 'nistco_president_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'nistco_president_quote', array(
        'default'           => 'Nigeria must build a knowledge-driven economy where indigenous science, domestic patents, and local industrial manufacturing drive our national wealth and global competitiveness.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'nistco_president_quote', array(
        'label'   => __( 'Presidential Statement / Directive', 'nistco-theme' ),
        'section' => 'nistco_president_section',
        'type'    => 'textarea',
    ) );

    $wp_customize->add_setting( 'nistco_president_photo', array(
        'sanitize_callback' => 'esc_url_raw',
    ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'nistco_president_photo', array(
        'label'   => __( 'Official Presidential Portrait', 'nistco-theme' ),
        'section' => 'nistco_president_section',
    ) ) );

    // SECTION 2: SUPERVISORY MINISTRY & BOARD LEADERSHIP
    $wp_customize->add_section( 'nistco_dignitaries_section', array(
        'title'    => __( 'Supervisory Ministry & Board Leadership', 'nistco-theme' ),
        'panel'    => 'nistco_governance_panel',
        'priority' => 10,
    ) );

    $wp_customize->add_setting( 'nistco_minister_name', array(
        'default'           => 'Honourable Minister of Innovation, Science & Technology',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'nistco_minister_name', array(
        'label'   => __( 'Honourable Minister Full Name', 'nistco-theme' ),
        'section' => 'nistco_dignitaries_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'nistco_minister_photo', array( 'sanitize_callback' => 'esc_url_raw' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'nistco_minister_photo', array(
        'label'   => __( 'Minister Official Portrait', 'nistco-theme' ),
        'section' => 'nistco_dignitaries_section',
    ) ) );

    $wp_customize->add_setting( 'nistco_perm_sec_name', array(
        'default'           => 'Permanent Secretary, FMIST',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'nistco_perm_sec_name', array(
        'label'   => __( 'Permanent Secretary Full Name', 'nistco-theme' ),
        'section' => 'nistco_dignitaries_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'nistco_perm_sec_photo', array( 'sanitize_callback' => 'esc_url_raw' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'nistco_perm_sec_photo', array(
        'label'   => __( 'Permanent Secretary Image', 'nistco-theme' ),
        'section' => 'nistco_dignitaries_section',
    ) ) );

    // SECTION 3: EXECUTIVE LEADERSHIP (DG / CEO)
    $wp_customize->add_section( 'nistco_dg_section', array(
        'title'    => __( 'Director-General / CEO Profile', 'nistco-theme' ),
        'panel'    => 'nistco_governance_panel',
        'priority' => 15,
    ) );

    $wp_customize->add_setting( 'nistco_dg_name', array(
        'default'           => 'Prof. Director-General / CEO',
        'sanitize_callback' => 'sanitize_text_field',
    ) );
    $wp_customize->add_control( 'nistco_dg_name', array(
        'label'   => __( 'DG / CEO Full Name & Titles', 'nistco-theme' ),
        'section' => 'nistco_dg_section',
        'type'    => 'text',
    ) );

    $wp_customize->add_setting( 'nistco_dg_quote', array(
        'default'           => 'Our statutory mandate is clear: to ensure that Nigeria does not merely consume global technology, but actively creates, patents, and deploys high-impact scientific discoveries.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ) );
    $wp_customize->add_control( 'nistco_dg_quote', array(
       'label'   => __( 'Executive Vision Statement / Quote', 'nistco-theme' ),
        'section' => 'nistco_dg_section',
        'type'    => 'textarea',
    ) );

    $wp_customize->add_setting( 'nistco_dg_photo', array( 'sanitize_callback' => 'esc_url_raw' ) );
    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'nistco_dg_photo', array(
        'label'   => __( 'DG / CEO Official Portrait', 'nistco-theme' ),
        'section' => 'nistco_dg_section',
    ) ) );

    // SECTION 4: DIRECTORATE LEADERSHIP ROSTER
    $wp_customize->add_section( 'nistco_directors_section', array(
        'title'    => __( 'Directorate Leadership Roster', 'nistco-theme' ),
        'panel'    => 'nistco_governance_panel',
        'priority' => 20,
    ) );

    $directors_def = array(
        'nistco_dir_barc_photo'   => 'Director, BARC (Biotechnology)',
        'nistco_dir_amsarc_photo' => 'Director, AMSARC (Simulation Sciences)',
        'nistco_dir_carc_photo'   => 'Director, CARC (Chemical Sciences)',
        'nistco_dir_parc_photo'   => 'Director, PARC (Physical Sciences)',
        'nistco_dir_ntc_photo'    => 'Director, NTC (Nuclear Technology)',
        'nistco_dir_works_photo'  => 'Director, Works, Services & ICT',
    );

    foreach ( $directors_def as $key => $label ) {
        $wp_customize->add_setting( $key, array( 'sanitize_callback' => 'esc_url_raw' ) );
        $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, $key, array(
            'label'   => __( $label,'nistco-theme' ),
            'section' => 'nistco_directors_section',
        ) ) );
    }
}
add_action( 'customize_register', 'nistco_customize_register' );

if ( ! function_exists( 'shestco_customize_register' ) ) {
    function shestco_customize_register( $wp_customize ) {
        nistco_customize_register( $wp_customize );
    }
}
