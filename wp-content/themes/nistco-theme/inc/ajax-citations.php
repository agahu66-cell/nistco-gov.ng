<?php
/**
 * NISTCO Citation AJAX Handlers (BibTeX & RIS)
 */

add_action( "wp_ajax_nistco_get_citation", "nistco_handle_citation_export" );
add_action( "wp_ajax_nopriv_nistco_get_citation", "nistco_handle_citation_export" );

function nistco_parse_author_list( $raw ) {
    if ( empty( $raw ) ) return array();
    $cleaned = str_replace( array( " & ", " and ", ";" ), " | ", $raw );
    $segments = array_map( "trim", explode( "|", $cleaned ) );
    $authors = array();
    foreach ( $segments as $seg ) {
        $seg = trim( $seg, ", \t\n\r\0\x0B" );
        if ( ! empty( $seg ) ) {
            $authors[] = $seg;
        }
    }
    return $authors;
}

function nistco_handle_citation_export() {
    $post_id = isset( $_REQUEST["post_id"] ) ? absint( $_REQUEST["post_id"] ) : 0;
    $format  = isset( $_REQUEST["format"] ) ? sanitize_text_field( $_REQUEST["format"] ) : "bibtex";

    if ( ! $post_id || get_post_type( $post_id ) !== "publication" ) {
        wp_send_json_error( "Invalid publication identifier.", 404 );
    }

    $title       = get_the_title( $post_id );
    $authors_raw = get_post_meta( $post_id, "_publication_authors", true );
    $journal     = get_post_meta( $post_id, "_publication_journal", true );
    $year        = get_post_meta( $post_id, "_publication_year", true ) ?: date( "Y" );
    $doi         = get_post_meta( $post_id, "_publication_doi", true );
    $key         = "nistco_" . $post_id . "_" . $year;
    $author_list = nistco_parse_author_list( $authors_raw );

    if ( $format === "ris" ) {
        header( "Content-Type: text/plain; charset=utf-8" );
        echo "TY  - JOUR\r\n";
        echo "TI  - " . $title . "\r\n";
        foreach ( $author_list as $author ) {
            echo "AU  - " . $author . "\r\n";
        }
        if ( ! empty( $journal ) ) { echo "JO  - " . $journal . "\r\n"; }
        echo "PY  - " . $year . "\r\n";
        if ( ! empty( $doi ) ) { echo "DO  - " . $doi . "\r\n"; }
        echo "ER  - \r\n";
        wp_die();
    }

    $bib_authors = implode( " and ", $author_list );
    header( "Content-Type: text/plain; charset=utf-8" );
    echo "@article{" . $key . ",\r\n";
    echo "  title     = {" . $title . "},\r\n";
    if ( ! empty( $bib_authors ) ) { echo "  author    = {" . $bib_authors . "},\r\n"; }
    if ( ! empty( $journal ) ) { echo "  journal   = {" . $journal . "},\r\n"; }
    echo "  year      = {" . $year . "},\r\n";
    if ( ! empty( $doi ) ) { echo "  doi       = {" . $doi . "}\r\n"; }
    echo "}\r\n";
    wp_die();
}
