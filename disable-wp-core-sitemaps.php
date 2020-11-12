<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

/*
Disable WP Core Sitemaps
source: https://perishablepress.com/wordpress-disable-wp-sitemaps/
*/

add_filter('wp_sitemaps_enabled', '__return_false');
