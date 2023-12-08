<?php defined( 'ABSPATH' ) || exit; 
// =========================================================================
// MOBILE Chevron to nav menu has children
// =========================================================================
function parent_menu_dropdown( $item_output, $item, $depth, $args ) {
    if ( is_nav_menu( 'Primary' ) && ! empty( $item->classes ) ) {
        if ( in_array( 'menu-item-has-children', $item->classes ) ) {
            // Helyezzük el a span-t az <a> tag záró tagje előtt
            $item_output = preg_replace('/(<a[^>]*>)(.*)(<\/a>)/', '$1$2 <span>›</span>$3', $item_output);

            // Ha a mélység 1, akkor adjunk hozzá egy id="l2" attribútumot
            if ($depth === 1) {
                $item_output = preg_replace('/(<a)([^>]*>)/', '$1 id="l2"$2', $item_output);
            }
        }
    }

    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'parent_menu_dropdown', 10, 4 );


// =========================================================================
// Add chevron to sub menu
// =========================================================================
function parent_menu_dropdown_desktop( $item_output, $item, $depth, $args ) {
    
    if ( is_nav_menu( 'Primary' ) && ! empty( $item->classes ) && in_array( 'menu-item-has-children', $item->classes ) ) {
        return $item_output . '<i class="icon icon-chevron-down"></i>';
    }
    
    return $item_output;
}
add_filter( 'walker_nav_menu_start_el', 'parent_menu_dropdown_desktop', 10, 4 );
remove_filter( 'walker_nav_menu_start_el', 'parent_menu_dropdown_desktop', 10, 4 );