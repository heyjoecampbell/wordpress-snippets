  
<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

//Add Media URL Column with Link
function muc_column( $cols ) {
        $cols["media_url"] = "Size/Link";
        return $cols;
}
function muc_value( $column_name, $id ) {
  $meta = wp_get_attachment_metadata($id);
           if(isset($meta['width'])) {
           $mediaLink = $meta['width'].' x '.$meta['height'];	
		   }
    else {$mediaLink = 'Media Link';}
  if ( $column_name == "media_url" ) echo '<a href="'. wp_get_attachment_url( $id ). '" target="_blank">'.$mediaLink.'</a>';
}
add_filter( 'manage_media_columns', 'muc_column' );
add_action( 'manage_media_custom_column', 'muc_value', 10, 2 );
