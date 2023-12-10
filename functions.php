<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Back-End Functions
// =============================================================
require_once get_theme_file_path('backend/backend.php');

// =============================================================
// Front-End Functions
// =============================================================
require_once get_theme_file_path('components/components.php');

// =============================================================
// Enqueue Scripts
// =============================================================
require_once get_theme_file_path('inc/enqueue.php');

// =============================================================
// Menu Init
// =============================================================
// require_once get_theme_file_path('components/core/header/menu/menu-init.php');

// =============================================================
// Add Page Slug to Body Class
// =============================================================
require_once get_theme_file_path('inc/body-class.php');

// =============================================================
// Add Image Size
// =============================================================
require_once get_theme_file_path('inc/image-size.php');

// =============================================================
// Featured Image
// =============================================================
require_once get_theme_file_path('inc/featured-image.php');

// =============================================================
// Excerpt functions
// =============================================================
require_once get_theme_file_path('inc/excerpt.php');

// =============================================================
// Disable Block Editor for Widgets
// =============================================================
require_once get_theme_file_path('inc/disable-block-editor.php');

// =============================================================
// Display Child Pages of Parent Page
// =============================================================
require_once get_theme_file_path('inc/display-child-pages.php');
