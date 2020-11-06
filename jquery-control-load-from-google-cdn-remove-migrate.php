<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

// Load jQuery from Google Library

function replace_jquery() {
	if (!is_admin()) {
		// comment out the next two lines to load the local copy of jQuery
		wp_deregister_script('jquery');
		wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js', false, '1.11.3');
		wp_enqueue_script('jquery');
	}
}
add_action('init', 'replace_jquery');

// Remove jQuery Migrate

function cedaro_dequeue_jquery_migrate( $scripts ) {
	if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
		$jquery_dependencies = $scripts->registered['jquery']->deps;
		$scripts->registered['jquery']->deps = array_diff( $jquery_dependencies, array( 'jquery-migrate' ) );
	}
}
add_action( 'wp_default_scripts', 'cedaro_dequeue_jquery_migrate' );
