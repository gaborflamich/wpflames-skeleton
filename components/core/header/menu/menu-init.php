<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Enqueue Scripts
// =============================================================
function add_menu_scripts() {
    wp_enqueue_script( 'menu-js', THEME . '/components/core/header/menu/mobile/toggle/toggle.js', array(), '1.0.0', true );
    wp_enqueue_script( 'sliding-menu-js', THEME . '/components/core/header/menu/mobile/slide/menu-slide.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'add_menu_scripts' );

// =============================================================
// Add Chevron To Nav Menu
// =============================================================
require_once get_theme_file_path('components/core/header/menu/inc/chevron-to-nav-menu.php');

// =========================================================================
// Register Custom Nav Menus
// =========================================================================
require_once get_theme_file_path('components/core/header/menu/inc/register-custom-nav-menu.php');

// =============================================================
// Add Social Icon to Navigation
// =============================================================
require_once get_theme_file_path('components/core/header/menu/inc/social-icon-to-nav-menu.php');