<?php
/********* DO NOT COPY THE PARTS ABOVE THIS LINE *********/

// Redirect WordPress Dashboard to Another Page

add_action('load-index.php', 'dashboard_redirect');
function dashboard_redirect(){
wp_redirect(admin_url('/edit.php')); // change to desired page - include slash
  exit();
}
