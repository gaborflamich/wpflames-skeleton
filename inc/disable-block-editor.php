<?php defined( 'ABSPATH' ) || exit; 

// =============================================================
// Disable Block Editor for Widgets
// =============================================================
add_filter( 'use_widgets_block_editor', '__return_false' );