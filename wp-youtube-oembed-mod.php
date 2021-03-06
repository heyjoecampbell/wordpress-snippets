<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

// YouTube oEmbed Mod - disable related, disable showinfo, apply wmode opaque

function youtube_oembed_mod($html, $url, $attr) {

if ( strpos( $html, "<embed src=" ) !== false )
   { return str_replace('</param><embed', '</param><param name="wmode" value="opaque"></param><embed wmode="opaque" ', $html); }
elseif ( strpos ( $html, 'feature=oembed' ) !== false )
   { return str_replace( 'feature=oembed', 'feature=oembed&wmode=opaque&rel=0&showinfo=0', $html ); }
else
   { return $html; }
}
add_filter( 'embed_oembed_html', 'youtube_oembed_mod', 10, 3);
