<?php
defined( 'ABSPATH' ) || exit; 

// =========================================================================
// Vélemények
// =========================================================================
function custom_post_type_testimonial() {
    $post_type_slug = 'testimonial';
    $post_type_name = ucfirst($post_type_slug);
    register_post_type($post_type_slug, array(
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => $post_type_slug),
        'labels' => array(
             'name' => 'Vélemények',
             'add_new_item' => 'Add New '.$post_type_name,
             'edit_item' => 'Edit '.$post_type_name,
             'all_items' => 'All '.$post_type_name,
             'singular_name' => $post_type_name,
        ),
        'menu_icon' => 'dashicons-testimonial'
    ));
}
add_action('init', 'custom_post_type_testimonial');