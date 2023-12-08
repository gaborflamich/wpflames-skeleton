<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Optimize Images / Max 1600px
// =============================================================
function wpflames_image_threshold($imagesize, $file, $attachment_id){
    return 1600;
}
add_filter( 'big_image_size_threshold', 'wpflames_image_threshold',10,3 );