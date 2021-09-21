<?php

add_action( 'wp_enqueue_scripts', 'sc_scripts' );

function sc_scripts() {

	if ( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) :
		wp_enqueue_script( 'sistema-cardapio-livereload', 'http://localhost:35729/livereload.js?snipver=1', array(), null, true );
	endif;

	$min = ( in_array( $_SERVER['REMOTE_ADDR'], array( '127.0.0.1', '::1' ) ) ) ? '' : '.min';

	wp_enqueue_style( 'sistema-cardapio-style', SC_URL . 'assets/css/style.css', array(), false, 'all' );

	// wp_enqueue_script( 'jquery-mask', SC_URL . 'assets/lib/jquery.mask' . $min . '.js', array( 'jquery' ), '1.14.16', true );

	wp_register_script( 'sistema-cardapio-script', SC_URL . 'assets/js/sistema-cardapio-script' . $min . '.js', array( 'jquery' ), '1.0.0', true );

	wp_enqueue_script( 'sistema-cardapio-script' );

	wp_localize_script( 'sistema-cardapio-script', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );

}