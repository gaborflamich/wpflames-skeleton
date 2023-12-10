<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Enqueue Admin CSS
// =============================================================
function admin_css() {
    wp_enqueue_style( 'admin_css', THEME . '/assets/build/wpadmin.css' );
}
add_action('admin_print_styles', 'admin_css' );

// =============================================================
// Enqueue Scripts
// =============================================================
function add_custom_scripts() {
    wp_enqueue_style( 'custom-css', THEME . '/assets/build/style.css' );
}
add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );