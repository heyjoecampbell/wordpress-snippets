<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

/*
Add Custom Current Menu Item Class
this adds the class 'parent_url' to current menu based on url
style 'parent_url' to your liking OR change the class name to desired class
source: https://web.archive.org/web/20170104065109/http://www.rarescosma.com/2010/11/add-a-class-to-wp_nav_menu-items-with-urls-included-in-the-current-url/
*/

add_filter( 'nav_menu_css_class', 'add_parent_url_menu_class', 10, 2 );

function add_parent_url_menu_class( $classes = array(), $item = false ) {
	// Get current URL
	$current_url = current_url();
	
	// Get homepage URL
	$homepage_url = trailingslashit( get_bloginfo( 'url' ) );
		
	// Exclude 404 and homepage
	if( is_404() or $item->url == $homepage_url ) return $classes;
	
	if ( strstr( $current_url, $item->url) ) {
		// Add the 'parent_url' class - change to desire class
		$classes[] = 'parent_url';
	}
	
	return $classes;
}

function current_url() {
	// Protocol
	$url = ( 'on' == $_SERVER['HTTPS'] ) ? 'https://' : 'http://';
	
	$url .= $_SERVER['SERVER_NAME'];
	
	// Port
	$url .= ( '80' == $_SERVER['SERVER_PORT'] ) ? '' : ':' . $_SERVER['SERVER_PORT'];
	
	$url .= $_SERVER['REQUEST_URI'];
	
	return trailingslashit( $url );
}
