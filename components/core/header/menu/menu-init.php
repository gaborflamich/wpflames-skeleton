<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Enqueue Scripts
// =============================================================
function add_menu_scripts() {
    wp_enqueue_script( 'toggle-js', THEME . '/components/core/header/menu/mobile/toggle/toggle.js', array(), '1.0.0', true );
    wp_enqueue_script( 'sliding-menu-js', THEME . '/components/core/header/menu/mobile/slide/menu-slide.js', array(), '1.0.0', true );

}
add_action( 'wp_enqueue_scripts', 'add_menu_scripts' );

// =============================================================
// Add Chevron To Nav Menu
// =============================================================
require_once get_theme_file_path('components/core/header/menu/inc/add-chevron-to-nav-menu.php');

// =============================================================
// Register Nav Menus
// =============================================================
require_once get_theme_file_path('components/core/header/menu/inc/register-nav-menus.php');

// =============================================================
// Register Hooks
// =============================================================
require_once get_theme_file_path('components/core/header/menu/inc/register-hooks.php');

// =============================================================
// Display Hooks
// =============================================================
require_once get_theme_file_path('components/core/header/menu/inc/display-hooks.php');

// =============================================================
// Register Components
// =============================================================
require_once get_theme_file_path('components/core/header/menu/inc/register-components.php');

// =============================================================
// Register Nav Walkers
// =============================================================
require_once get_theme_file_path('components/core/header/menu/inc/walkers.php');

// =============================================================
// Add Social Icon to Navigation
// =============================================================
// require_once get_theme_file_path('components/core/header/menu/inc/add-social-icon-to-nav-menu.php');
