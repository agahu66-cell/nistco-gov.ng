<?php
/**
 * Nigeria Innovation, Science and Technology Complex (NISTCO)
 * Template Helpers & Citation Generators
 * File: inc/template-helpers.php
 *
 * @package NistcoTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function nistco_get_leader_photo( $mod_key, $default_rel_path = '', $alt_text = '' ) {
    $photo_url = get_theme_mod( $mod_key );
    if ( ! empty( $photo_url ) ) {
        return sprintf( '<img src="%s" alt="%s" class="leader-photo" loading="lazy">', esc_url( $photo_url ), esc_attr( $alt_text ) );
    }
    if ( ! empty( $default_rel_path ) ) {
        $theme_uri = get_template_directory_uri();
        return sprintf( '<img src="%s" alt="%s" class="leader-photo default" loading="lazy">', esc_url( $theme_uri . $default_rel_path ), esc_attr( $alt_text ) );
    }
    $svg = '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#ccc"><path d="M12 12a5 5 0 1 0 0-10 5 5 0 0 0 0 10zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"/></svg>';
    return sprintf( '<img src="data:image/svg+xml;utf8,%s" alt="%s" class="leader-photo placeholder">', rawurlencode( $svg ), esc_attr( $alt_text ) );
}

if ( ! function_exists( 'shestco_get_leader_photo' ) ) {
    function shestco_get_leader_photo( $mod_key, $default_rel_path = '', $alt_text = '' ) {
        return nistco_get_leader_photo( $mod_key, $default_rel_path, $alt_text );
    }
}

function nistco_get_publication_bibtex( $post_id ) {
    $post = get_post( $post_id );
    if ( ! $post ) {
        return '';
    }
    $title   = get_the_title( $post_id );
    $authors = get_post_meta( $post_id, '_publication_authors', true ) ?: 'NISTCO Research Fellows';
    $year    = get_post_meta( $post_id, '_publication_year', true ) ?: get_the_date( 'Y', $post_id );
    $doi     = get_post_meta( $post_id, '_publication_doi', true );
    $slug    = sanitize_title( $title );

    $bib  = "@article{" . esc_attr( $slug . '_' . $year ) . ",\n";
    $bib .= "  title = {" . esc_attr( $title ) . "},\n";
    $bib .= "  author = {" . esc_attr( $authors ) . "},\n";
    $bib .= "  journal = {Nigeria Innovation, Science & Technology Complex Scientific Annals},\n";
    $bib .= "  year = {" . esc_attr( $year ) . "},\n";
    if ( ! empty( $doi ) ) {
        $bib .= "  doi = {" . esc_attr( $doi ) . "},\n";
        $bib .= "  url = {https://doi.org/" . esc_attr( $doi ) . "}\n";
    } else {
        $bib .= "  url = {" . esc_url( get_permalink( $post_id ) ) . "}\n";
    }
    $bib .= "}";
    return $bib;
}

if ( ! function_exists( 'shestco_get_publication_bibtex' ) ) {
    function shestco_get_publication_bibtex( $post_id ) {
        return nistco_get_publication_bibtex( $post_id );
    }
}

function nistco_get_publication_ris( $post_id ) {
    $post = get_post( $post_id );
    if ( ! $post ) {
        return '';
    }
    $title   = get_the_title( $post_id );
    $authors = get_post_meta( $post_id, '_publication_authors', true ) ?: 'NISTCO Research Fellows';
    $year    = get_post_meta( $post_id, '_publication_year', true ) ?: get_the_date( 'Y', $post_id );
    $doi     = get_post_meta( $post_id, '_publication_doi', true );

    $ris  = "TY  - JOUR\r\n";
    $ris .= "TI  - " . esc_attr( $title ) . "\r\n";
    $authors_array = preg_split( '/[,;]/', $authors );
    foreach ( $authors_array as $author ) {
        if ( trim( $author ) ) {
            $ris .= "AU  - " . esc_attr( trim( $author ) ) . "\r\n";
        }
    }
    $ris .= "PY  - " . esc_attr( $year ) . "\r\n";
    $ris .= "JO  - Nigeria Innovation, Science & Technology Complex Scientific Annals\r\n";
    if ( ! empty( $doi ) ) {
        $ris .= "DO  - " . esc_attr( $doi ) . "\r\n";
        $ris .= "UR  - https://doi.org/" . esc_attr( $doi ) . "\r\n";
    } else {
        $ris .= "UR  - " . esc_url( get_permalink( $post_id ) ) . "\r\n";
    }
    $ris .= "ER  - \r\n";
    return $ris;
}

if ( ! function_exists( 'shestco_get_publication_ris' ) ) {
    function shestco_get_publication_ris( $post_id ) {
        return nistco_get_publication_ris( $post_id );
    }
}

function nistco_get_tender_status( $deadline_datetime ) {
    if ( empty( $deadline_datetime ) ) {
        return array(
            'badge_class' => 'status-open',
            'label'       => __( 'Open for Submission', 'nistco-theme' ),
            'is_closed'   => false,
        );
    }
    $deadline_ts = strtotime( $deadline_datetime );
    $now_ts      = current_time( 'timestamp' );
    if ( $deadline_ts < $now_ts ) {
        return array(
            'badge_class' => 'status-closed',
            'label'       => __( 'Submission Closed', 'nistco-theme' ),
            'is_closed'   => true,
        );
    }
    $days_left = ceil( ( $deadline_ts - $now_ts ) / DAY_IN_SECONDS );
    return array(
        'badge_class' => ( $days_left <= 3 ) ? 'status-urgent' : 'status-open',
        'label'       => sprintf( _n( '%s Day Remaining', '%s Days Remaining', $days_left, 'nistco-theme' ), number_format_i18n( $days_left ) ),
        'is_closed'   => false,
    );
}

if ( ! function_exists( 'shestco_get_tender_status' ) ) {
    function shestco_get_tender_status( $deadline_datetime ) {
        return nistco_get_tender_status( $deadline_datetime );
    }
}
