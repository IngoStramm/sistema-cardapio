<?php

function sc_debug( $debug ) {
	echo '<pre>';
	var_dump( $debug );
	echo '</pre>';
}

add_action( 'template_redirect', 'front_page_template_redirect' );

function front_page_template_redirect() {

    if ( is_front_page() ) :

    	$post_id = get_the_ID();
    	$pdf = get_post_meta( $post_id, 'sc_frontpage_pdf', true );

    	if( $pdf ) :

    		$url = '';
    		$ua = strtolower( $_SERVER[ 'HTTP_USER_AGENT' ] );
    		if( stripos( $ua, 'android' ) !== false ) :
	       		$url .= 'http://docs.google.com/gview?embedded=true&url=' . $pdf;
	       		// sc_debug( 'android' );
	       	else:
	       		$url .= $pdf;
	       		// sc_debug( 'not android' );
    		endif;

       		wp_redirect( $url );
        	exit;

		endif;

    endif;
}