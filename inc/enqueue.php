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
    // CSS
    wp_enqueue_style( 'custom-css', THEME . '/assets/build/style.css' );

    // JavaScript
    wp_enqueue_script( 'menu-js', THEME . '/components/core/header/menu/mobile/toggle/toggle.js', array(), '1.0.0', true );
    wp_enqueue_script( 'sliding-menu-js', THEME . '/components/core/header/menu/mobile/slide/menu-slide.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'add_custom_scripts' );