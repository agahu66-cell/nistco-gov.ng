<?php
/**
 * Nigeria Innovation, Science and Technology Complex (NISTCO)
 * Publications & Research Live Search Endpoints
 * File: inc/ajax-search.php
 *
 * @package NistcoTheme
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

function nistco_enqueue_live_search_scripts() {
    if ( in_array( get_post_type(), array( 'publication', 'research_centre' ) ) || is_post_type_archive( 'publication' ) || is_page_template( 'page-templates/publications.php' ) ) {
        wp_localize_script( 'jquery', 'nistco_search_object', array(
            'ajax_url' => admin_url( 'admin-ajax.php' ),
            'nonce'    => wp_create_nonce( 'nistco_pub_search_nonce' ),
        ) );
    }
}
add_action( 'wp_enqueue_scripts', 'nistco_enqueue_live_search_scripts' );

function nistco_ajax_search_publications() {
    check_ajax_referer( 'nistco_pub_search_nonce', 'security' );
    $term = isset( $_POST['term'] ) ? sanitize_text_field( wp_unslash( $_POST['term'] ) ) : '';

    if ( strlen( $term ) < 2 ) {
        wp_send_json_success( array( 'results' => array(), 'count' => 0 ) );
    }

    $search_args = array(
        'post_type'      => 'publication',
        'post_status'    => 'publish',
        'posts_per_page' => 6,
        's'              => $term,
    );

    if ( str_contains( $term, '10.' ) || str_contains( $term, '/' ) ) {
        $search_args['meta_query'] = array(
            'relation' => 'OR',
            array(
                'key'     => '_publication_doi',
                'value'   => $term,
                'compare' => 'LIKE',
            ),
            array(
                'key'     => '_publication_authors',
                'value'   => $term,
                'compare' => 'LIKE',
            ),
        );
        unset( $search_args['s'] );
    }

    $query   = new WP_Query( $search_args );
    $results = array();

    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            $pid        = get_the_ID();
            $authors    = get_post_meta( $pid, '_publication_authors', true ) ?: 'NISTCO Research Fellows';
            $year       = get_post_meta( $pid, '_publication_year', true ) ?: get_the_date( 'Y' );
            $doi        = get_post_meta( $pid, '_publication_doi', true );
            $centre_id  = get_post_meta( $pid, '_publication_centre_id', true );
            $centre     = ( $centre_id && get_post_status( $centre_id ) ) ? get_the_title( $centre_id ) : '';

            $results[] = array(
                'id'        => $pid,
                'title'     => html_entity_decode( get_the_title(), ENT_QUOTES, 'UTF-8' ),
                'permalink' => get_permalink(),
                'authors'   => esc_html( wp_trim_words( $authors, 8 ) ),
                'year'      => esc_html( $year ),
                'centre'    => esc_html( $centre ),
                'doi'       => esc_html( $doi ),
            );
        }
        wp_reset_postdata();
    }

    wp_send_json_success( array(
        'results' => $results,
        'count'   => count( $results ),
        'total'   => $query->found_posts,
    ) );
}
add_action( 'wp_ajax_nistco_search_publications', 'nistco_ajax_search_publications' );
add_action( 'wp_ajax_nopriv_nistco_search_publications', 'nistco_ajax_search_publications' );

if ( ! function_exists( 'shestco_search_publications' ) ) {
    function shestco_search_publications() {
        nistco_ajax_search_publications();
    }
}
add_action( 'wp_ajax_shestco_search_publications', 'nistco_ajax_search_publications' );
add_action( 'wp_ajax_nopriv_shestco_search_publications', 'nistco_ajax_search_publications' );
