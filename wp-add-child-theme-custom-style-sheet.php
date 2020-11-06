<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

// Add Child Theme Custom Style Sheet

function custom_child_style_sheet() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); // CHANGE to your style Sheet filename
}

add_action('wp_enqueue_scripts', 'custom_child_style_sheet');
