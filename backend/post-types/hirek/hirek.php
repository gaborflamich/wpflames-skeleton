<?php defined( 'ABSPATH' ) || exit; 

// =========================================================================
// Hírek
// =========================================================================
function custom_post_type_hirek() {
    $post_type_slug = 'hirek';
    $post_type_name = ucfirst($post_type_slug);
    register_post_type($post_type_slug, array(
        'public' => true,
        'show_in_rest' => true,
        'has_archive' => true,
        'supports' => array( 'title', 'editor', 'thumbnail', 'author'),
        'rewrite' => array('slug' => $post_type_slug),
        'labels' => array(
             'name' => 'Hírek',
             'add_new_item' => 'Add New '.$post_type_name,
             'edit_item' => 'Edit '.$post_type_name,
             'all_items' => 'All '.$post_type_name,
             'singular_name' => $post_type_name,
        ),
        'menu_icon' => 'dashicons-list-view'
    ));
    register_taxonomy(
        'napelem_hirek',
        'hirek',
        array(
            'label' => __( 'Kategória' ),
            'rewrite' => array( 'slug' => 'cat-type' ),
            'hierarchical' => true,
            'show_admin_column' => true,
            'show_in_rest' => true
        )
    );
}
add_action('init', 'custom_post_type_hirek');