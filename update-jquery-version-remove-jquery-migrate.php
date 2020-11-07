<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

/*
Replace jQuery Library
source: https://www.wpbeginner.com/wp-themes/replace-default-wordpress-jquery-script-with-google-library/
*/
function modify_jquery() {
    if (!is_admin()) {
        // comment out the next two lines to load the local copy of jQuery
        wp_deregister_script('jquery');
        wp_register_script('jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, '3.5.1'); // update URL to preferred version and provider
        wp_enqueue_script('jquery');
    }
}
add_action('init', 'modify_jquery');

// Remove jQuery Migrate
function cedaro_dequeue_jquery_migrate( $scripts ) {
	if ( ! is_admin() && ! empty( $scripts->registered['jquery'] ) ) {
		$jquery_dependencies = $scripts->registered['jquery']->deps;
		$scripts->registered['jquery']->deps = array_diff( $jquery_dependencies, array( 'jquery-migrate' ) );
	}
}
add_action( 'wp_default_scripts', 'cedaro_dequeue_jquery_migrate' );
