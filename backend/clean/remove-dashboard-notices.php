<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Remove all Notices and Warnings from Admin
// =============================================================
function wpflames_hide_notices_wp() { 
    echo '<style> .notice { display: none;} </style>';
}
add_action('admin_head', 'wpflames_hide_notices_wp'); 