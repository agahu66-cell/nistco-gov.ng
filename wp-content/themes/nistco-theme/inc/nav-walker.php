<?php
/**
 * NASTCO Tactical Nav Walker (Dropdown Enabled)
 * Injects sector counters, tactical CSS classes, and glassmorphic submenu wrappers.
 */

class NASTCO_Nav_Walker extends Walker_Nav_Menu {
    private $item_counter = 0;

    // 1. Wrap submenus in the tactical dropdown container
    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "<ul class=\"sub-menu tactical-dropdown\">\n";
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= "</ul>\n";
    }

    // 2. Process individual menu items
    public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        if ( $depth === 0 ) {
            $this->item_counter++;
        }
        
        $menu_item = $data_object;
        $classes = empty( $menu_item->classes ) ? array() : (array) $menu_item->classes;
        $is_active = in_array( 'current-menu-item', $classes ) || in_array( 'current_page_item', $classes );

        $link_classes = 'nav-link-item' . ( $is_active ? ' active' : '' );
        if ( $this->has_children ) {
            $link_classes .= ' has-dropdown';
        }

        $attributes  = ! empty( $menu_item->attr_title ) ? ' title="'  . esc_attr( $menu_item->attr_title ) . '"' : '';
        $attributes .= ! empty( $menu_item->target )     ? ' target="' . esc_attr( $menu_item->target     ) . '"' : '';
        $attributes .= ! empty( $menu_item->xfn )        ? ' rel="'    . esc_attr( $menu_item->xfn        ) . '"' : '';
        $attributes .= ! empty( $menu_item->url )        ? ' href="'   . esc_url( $menu_item->url         ) . '"' : '';
        $attributes .= ' class="' . esc_attr( $link_classes ) . '"';

        $title = apply_filters( 'the_title', $menu_item->title, $menu_item->ID );
        
        // Only top-level items get sector codes. Parents get chevrons.
        $sector_code = $depth === 0 ? sprintf( '[%02d]', $this->item_counter ) : '';
        $dropdown_icon = $this->has_children ? '<span class="dropdown-chevron">▼</span>' : '';

        $item_output  = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= '<span>' . $args->link_before . $title . $args->link_after . $dropdown_icon . '</span>';
        if ( $sector_code ) {
            $item_output .= '<span class="nav-sector-code">' . esc_html( $sector_code ) . '</span>';
        }
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= '<li>' . $item_output;
    }

    public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}
