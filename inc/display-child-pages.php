<?php defined( 'ABSPATH' ) || exit; 

// =========================================================================
// Display Child Pages of Parent Page
// =========================================================================
function display_list_child_pages() { 
    global $post; 
    if ( is_page() && $post->post_parent )
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->post_parent . '&echo=0' );
    else
        $childpages = wp_list_pages( 'sort_column=menu_order&title_li=&child_of=' . $post->ID . '&echo=0' );
    if ( $childpages ) {
        $string = '<ul class="wpb_page_list">' . $childpages . '</ul>';
    }
    return $string;
}
add_shortcode('display_childpages', 'display_list_child_pages');