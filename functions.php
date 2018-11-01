<?php

function register_my_menu() {
  register_nav_menu('painel-menu',__( 'Painel Menu' ));
}
add_action( 'init', 'register_my_menu' );

require_once( 'acf.php' );

function sidebar_social_icons() {

	$args = array(
		'id'            => 'social_midias',
		'name'          => __( 'Midias Sociais', 'text_domain' ),
    'description'   => __( 'Links para Compatilhar as Postagens.', 'text_domain' ),
    'before_widget' => '<div class="icon_redesSocias">',
		'after_widget'  => '</div>',
	);
	register_sidebar( $args );

}
add_action( 'widgets_init', 'sidebar_social_icons' );

?>
