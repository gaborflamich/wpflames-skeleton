<?php defined( 'ABSPATH' ) || exit; 

// =========================================================================
// DISALLOW PNG, GIF, TIF
// =========================================================================
function theme_restrict_mime_types( $mime_types ){
    $mime_types = array(
        'pdf' => 'application/pdf',
        'jpg|jpeg' => 'image/jpeg',
        'webp' => 'image/webp',
    );
    return $mime_types;
}
add_filter( 'upload_mimes', 'theme_restrict_mime_types' );