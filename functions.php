<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Back-End Functions
// =============================================================
require get_theme_file_path('backend/backend.php');

// =============================================================
// Front-End Functions
// =============================================================
require get_theme_file_path('components/components.php');

// =============================================================
// Enqueue Scripts
// =============================================================
require get_theme_file_path('inc/enqueue.php');

// =============================================================
// Add Social Icon to Navigation
// =============================================================
require get_theme_file_path('components/core/header/social-icon.php');

// =============================================================
// Add Page Slug to Body Class
// =============================================================
require get_theme_file_path('inc/body-class.php');

// =============================================================
// Add Image Size
// =============================================================
require get_theme_file_path('inc/image-size.php');

// =============================================================
// Featured Image
// =============================================================
require get_theme_file_path('inc/featured-image.php');

// =============================================================
// Excerpt functions
// =============================================================
require get_theme_file_path('inc/excerpt.php');

// =============================================================
// Disable Block Editor for Widgets
// =============================================================
require get_theme_file_path('inc/disable-block-editor.php');

// =============================================================
// Display Child Pages of Parent Page
// =============================================================
require get_theme_file_path('inc/display-child-pages.php');

// =========================================================================
// Register Custom Nav Menus
// =========================================================================
require get_theme_file_path('inc/register-custom-nav-menu.php');

// =========================================================================
// Chevron to nav menu has children
// =========================================================================
require get_theme_file_path('inc/chevron-to-nav-menu.php');