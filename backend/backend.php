<?php defined( 'ABSPATH' ) || exit; 

// Define constants
define('THEME', get_stylesheet_directory_uri());

// Underscore
require get_theme_file_path('backend/underscore/underscore-functions.php');

// Translations
require get_theme_file_path('backend/translations/translations.php');

// Admin
require get_theme_file_path('backend/admin/login-logo.php');

// Cleaning
require get_theme_file_path('backend/clean/remove-junk.php');
require get_theme_file_path('backend/clean/disable-comments.php');
require get_theme_file_path('backend/clean/remove-dashboard-notices.php');

// SMTP Mailgun
require get_theme_file_path('backend/smtp/mailgun.php');

// Post Types
require get_theme_file_path('backend/post-types/post-types.php');

// ACF Options Pages
require get_theme_file_path('backend/options-pages/options-pages.php');

// SEO
require get_theme_file_path('backend/seo/async.php');
require get_theme_file_path('backend/seo/remove-accents.php');
require get_theme_file_path('backend/seo/automatic-alt-tag.php');
require get_theme_file_path('backend/seo/disallow-png-upload.php');
require get_theme_file_path('backend/seo/optimize-images.php');

// Lightbox Gallery
require get_theme_file_path('backend/lightbox/lightbox.php');