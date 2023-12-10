<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Desktop Menu
// =============================================================
function desktop_menu(){ require get_theme_file_path('components/core/header/menu/desktop/desktop.php'); }
function desktop_menu_top(){ require get_theme_file_path('components/core/header/menu/desktop/desktop-menu-top.php'); }
function desktop_menu_right(){ require get_theme_file_path('components/core/header/menu/desktop/desktop-menu-right.php'); }
function desktop_menu_bottom(){ require get_theme_file_path('components/core/header/menu/desktop/desktop-menu-bottom.php'); }

// =============================================================
// Mobile Menu
// =============================================================
function mobile_menu(){ require get_theme_file_path('components/core/header/menu/mobile/slide/menu-slide.php'); }

// =============================================================
// Toggle Menu
// =============================================================
function toggle(){ require get_theme_file_path('components/core/header/menu/mobile/toggle/toggle.php'); }