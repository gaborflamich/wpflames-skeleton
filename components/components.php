<?php defined( 'ABSPATH' ) || exit; 

// Components
// ****************************

// Theme URL
function theme_url(){ echo get_stylesheet_directory_uri(); }

// Core
function display_header(){ require get_theme_file_path('components/core/header/header.php'); }
function display_footer(){ require get_theme_file_path('components/core/footer/footer.php'); }
function display_sidebar(){ require get_theme_file_path('components/core/sidebar/sidebar.php'); }

function breadcrumbs(){ require get_theme_file_path('components/core/breadcrumbs/breadcrumbs.php'); }
function pagination(){ require get_theme_file_path('components/core/pagination/pagination.php'); }
function cover(){ require get_theme_file_path('components/core/cover/cover.php'); }

// UI
function accordion(){ require get_theme_file_path('components/ui/accordion/accordion.php'); }
function card(){ require get_theme_file_path('components/ui/card/card.php'); }
function box(){ require get_theme_file_path('components/ui/box/box.php'); }
function cta(){ require get_theme_file_path('components/ui/cta/cta.php'); }
function modal(){ require get_theme_file_path('components/ui/modal/modal.php'); }

// Social Icons
function icon_facebook(){ require get_theme_file_path('components/icons/social/facebook.php'); }
function icon_twitter(){ require get_theme_file_path('components/icons/social/twitter.php'); }
function icon_instagram(){ require get_theme_file_path('components/icons/social/instagram.php'); }
function icon_phone(){ require get_theme_file_path('components/icons/social/phone.php'); }
function icon_envelope(){ require get_theme_file_path('components/icons/social/envelope.php'); }
