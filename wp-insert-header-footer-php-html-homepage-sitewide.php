<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/


// ADD CODE TO HEAD - HOMEPAGE ----------------------------------------------------- //
function addto_wphead_homepage() {
if ( is_front_page() ) {
// Homepage HTML Header Code + + + + + + + + + + + Enter Below ?>
  
  
<?php }} add_action( 'wp_head', 'addto_wphead_homepage' );

// ADD CODE TO HEAD ------------------------------------------------------ //
function addto_wphead() {{
// PHP Header Code + + + + + + + + + + + Enter Below

  
}{ // HTML Header Code + + + + + + + + + + + Enter Below ?>

  
<?php }} add_action( 'wp_head', 'addto_wphead' );

// ADD CODE TO FOOTER ------------------------------------------------------ //
function addto_footer() {{
// PHP Header Code + + + + + + + + + + + Enter Below
  
  
}{ // HTML Footer Code + + + + + + + + + + + Enter Below ?>

  
<?php }} add_action( 'wp_footer', 'addto_footer' );
