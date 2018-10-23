<?php

function register_my_menu() {
  register_nav_menu('painel-menu',__( 'Painel Menu' ));
}
add_action( 'init', 'register_my_menu' );

require_once( 'acf.php' );


?>
