<?php
/**
 * NISTCO / SHESTCO Structured Data & Open Graph SEO Engine
 * Outputs Schema.org JSON-LD and Highwire Press citation tags for Google Scholar and indexing engines.
 * File: inc/schema-seo.php
 *
 * @package ShestcoTheme
 * @version 2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

/**
 * Render Highwire Press meta tags for scholarly indexing (Google Scholar / CrossRef)
 */
function shestco_render_highwire_meta_tags() {
    if ( is_singular( 'publication' ) ) {
        global $post;
        $pid     = $post->ID;
        $authors = get_post_meta( $pid, '_publication_authors', true ) ?: 'NISTCO Research Fellows';
        $year    = get_post_meta( $pid, '_publication_year', true ) ?: get_the_date( 'Y', $pid );
        $doi     = get_post_meta( $pid, '_publication_doi', true );
        $pdf_url = get_post_meta( $pid, '_publication_url', true );

        echo "\n<!-- Highwire Press & Academic Metadata -->\n";
        echo '<meta name="citation_title" content="' . esc_attr( get_the_title( $pid ) ) . '">' . "\n";
        echo '<meta name="citation_publication_date" content="' . esc_attr( $year ) . '">' . "\n";
        echo '<meta name="citation_journal_title" content="Nigeria Innovation, Science & Technology Complex Scientific Annals">' . "\n";

        $authors_array = preg_split( '/[,;]/', $authors );
        foreach ( $authors_array as $author ) {
            if ( trim( $author ) ) {
                echo '<meta name="citation_author" content="' . esc_attr( trim( $author ) ) . '">' . "\n";
            }
        }

        if ( ! empty( $doi ) ) {
            echo '<meta name="citation_doi" content="' . esc_attr( $doi ) . '">' . "\n";
        }

        if ( ! empty( $pdf_url ) ) {
            echo '<meta name="citation_pdf_url" content="' . esc_url( $pdf_url ) . '">' . "\n";
        }
    }
}
add_action( 'wp_head', 'shestco_render_highwire_meta_tags', 2 );

/**
 * Render Schema.org JSON-LD Graph for Government Entity, Academic Articles, and Public Tenders
 */
function shestco_render_json_ld_graph() {
    $schema = array(
        '@context' => 'https://schema.org',
        '@graph'   => array(),
    );

    // 1. Apex Parent Organization: NISTCO
    $org_id     = esc_url( home_url( '/#organization' ) );
    $org_schema = array(
        '@type'              => 'GovernmentOrganization',
        '@id'                => $org_id,
        'name'               => 'Nigeria Innovation, Science & Technology Complex (NISTCO)',
        'alternateName'      => 'SHESTCO',
        'url'                => esc_url( home_url( '/' ) ),
        'logo'               => esc_url( get_template_directory_uri() . '/assets/images/logo.png' ),
        'description'        => 'Apex federal multidisciplinary science sanctuary mandated to execute frontier basic and applied research, operate national demonstration pilot plants, and advance technology commercialization.',
        'parentOrganization' => array(
            '@type' => 'GovernmentOrganization',
            'name'  => 'Federal Ministry of Innovation, Science and Technology (FMIST)',
            'url'   => 'https://scienceandtech.gov.ng',
        ),
        'address'            => array(
            '@type'           => 'PostalAddress',
            'streetAddress'   => 'Abuja-Lokoja Expressway, Sheda',
            'addressLocality' => 'Abuja',
            'addressRegion'   => 'Federal Capital Territory',
            'postalCode'      => '900001',
            'addressCountry'  => 'NG',
        ),
        'geo'                => array(
            '@type'     => 'GeoCoordinates',
            'latitude'  => 8.8617,
            'longitude' => 7.0018,
        ),
    );
    $schema['@graph'][] = $org_schema;

    // 2. Singular Publication -> ScholarlyArticle
    if ( is_singular( 'publication' ) ) {
        global $post;
        $pid      = $post->ID;
        $authors  = get_post_meta( $pid, '_publication_authors', true ) ?: 'NISTCO Research Fellows';
        $doi      = get_post_meta( $pid, '_publication_doi', true );
        $pdf_url  = get_post_meta( $pid, '_publication_url', true );

        $article_schema = array(
            '@type'            => 'ScholarlyArticle',
            '@id'              => esc_url( get_permalink( $pid ) ),
            'headline'         => get_the_title( $pid ),
            'name'             => get_the_title( $pid ),
            'description'      => wp_strip_all_tags( get_the_excerpt( $pid ) ),
            'datePublished'    => get_the_date( 'c', $pid ),
            'dateModified'     => get_the_modified_date( 'c', $pid ),
            'mainEntityOfPage' => esc_url( get_permalink( $pid ) ),
            'publisher'        => array(
                '@id' => $org_id,
            ),
            'author'           => array(
                '@type' => 'Person',
                'name'  => $authors,
            ),
        );

        if ( ! empty( $doi ) ) {
            $article_schema['identifier'] = 'https://doi.org/' . $doi;
            $article_schema['sameAs']     = 'https://doi.org/' . $doi;
        }

        if ( ! empty( $pdf_url ) ) {
            $article_schema['encoding'] = array(
                '@type'          => 'MediaObject',
                'contentUrl'     => esc_url( $pdf_url ),
                'encodingFormat' => 'application/pdf',
            );
        }

        $schema['@graph'][] = $article_schema;
    }

    // 3. Singular Procurement Tender -> GovernmentService / Solicitation Notice
    if ( is_singular( 'procurement_tender' ) ) {
        global $post;
        $tid      = $post->ID;
        $ref_no   = get_post_meta( $tid, '_tender_ref_no', true ) ?: 'NISTCO/PROC/' . $tid;
        $deadline = get_post_meta( $tid, '_tender_deadline', true );
        $doc_url  = get_post_meta( $tid, '_tender_doc_url', true );

        $tender_schema = array(
            '@type'            => 'GovernmentService',
            '@id'              => esc_url( get_permalink( $tid ) ),
            'name'             => '[' . $ref_no . '] ' . get_the_title( $tid ),
            'serviceType'      => 'Public Procurement Solicitation',
            'provider'         => array(
                '@id' => $org_id,
            ),
            'description'      => wp_strip_all_tags( get_the_excerpt( $tid ) ),
            'mainEntityOfPage' => esc_url( get_permalink( $tid ) ),
        );

        if ( ! empty( $deadline ) ) {
            $tender_schema['validThrough'] = date( 'c', strtotime( $deadline ) );
        }

        if ( ! empty( $doc_url ) ) {
            $tender_schema['hasOfferCatalog'] = array(
                '@type' => 'OfferCatalog',
                'name'  => 'Standard Bidding Documents (SBD)',
                'url'   => esc_url( $doc_url ),
            );
        }

        $schema['@graph'][] = $tender_schema;
    }

    // 4. Singular Research Centre -> EducationalOrganization / Research Center
    if ( is_singular( 'research_centre' ) ) {
        global $post;
        $cid = $post->ID;

        $centre_schema = array(
            '@type'            => 'ResearchOrganization',
            '@id'              => esc_url( get_permalink( $cid ) ),
            'name'             => get_the_title( $cid ),
            'description'      => wp_strip_all_tags( get_the_excerpt( $cid ) ),
            'parentOrganization' => array(
                '@id' => $org_id,
            ),
            'mainEntityOfPage' => esc_url( get_permalink( $cid ) ),
        );

        $schema['@graph'][] = $centre_schema;
    }

    echo "\n<!-- NISTCO JSON-LD Schema Graph -->\n";
    echo '<script type="application/ld+json">' . wp_json_encode( $schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT ) . "</script>\n";
}
add_action( 'wp_head', 'shestco_render_json_ld_graph', 3 );