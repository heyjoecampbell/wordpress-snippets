<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

// Make Admin Edit List -View- Open in a New Window
function change_post_row_actions( $actions, $post ) {
	unset( $actions['view'] );
	$actions['view'] .= '<a href="'.get_the_permalink($post->ID).'" target="_blank">View</a>';
	return $actions;
}
add_filter( 'page_row_actions', 'change_post_row_actions', 10, 2 );
