<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

/*
Append Media Timestamp
source: https://wp-mix.com/rename-uploaded-files-wordpress/
*/

function append_media_timestamp($filename) {
	
	$timestamp = time(); //epoch time  |  formatted date >> date("YmdGs")
	$append = apply_filters('usp_file_append_random', true, $filename, $random);
	
	if (!$append) return $filename;
	
	$info = pathinfo($filename);
	$ext  = (isset($info['extension']) && !empty($info['extension'])) ? '.'. $info['extension'] : '';
	$name = basename($filename, $ext) .'-'. $timestamp;
	
	return $name . $ext;
	
}
add_filter('sanitize_file_name', 'append_media_timestamp', 10);
