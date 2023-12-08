<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Change the excerpt more filter
// =============================================================
function custom_excerpt_more( $more ) {
    return '... <div class="more-link-wrap d-none"> <a class="btn-cta read-more" href="'. get_permalink( get_the_ID() ) . '"><span class="text">Tovább</span> <span class="icon"><svg id="arrow-right-long" width="20" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M504.3 273.6l-112.1 104c-6.992 6.484-17.18 8.218-25.94 4.406c-8.758-3.812-14.42-12.45-14.42-21.1L351.9 288H32C14.33 288 .0002 273.7 .0002 255.1S14.33 224 32 224h319.9l0-72c0-9.547 5.66-18.19 14.42-22c8.754-3.809 18.95-2.075 25.94 4.41l112.1 104C514.6 247.9 514.6 264.1 504.3 273.6z"/></svg></span></a></div>';
     }
 add_filter('excerpt_more', 'custom_excerpt_more');

// =============================================================
// Excerpt length
// =============================================================
function modify_excerpt_length( $length ) {
    return 18; 
}
add_filter( 'excerpt_length', 'modify_excerpt_length' );

// =============================================================
// Add class to excerpt
// =============================================================
function add_class_to_excerpt ($post_excerpt) { 
    $post_excerpt = '<p class="box-text">' . $post_excerpt . '</p>';
    return $post_excerpt;
}  
add_filter ('get_the_excerpt','add_class_to_excerpt');