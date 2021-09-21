<?php

add_shortcode( 'sc_pdf', 'sc_pdf' );

function sc_pdf() {

	$post_id = get_the_ID();
	$pdf = get_post_meta( $post_id, 'sc_frontpage_pdf', true );

	$output = '';
	
	if( !$pdf )
		$output .= '<h3>' . __( 'Nenhum arquivo definido.', 'sistema-cardapio' ) . '</h3>';
	else
		$output .= '<iframe class="sistema-cardapio-iframe" src="' . $pdf . '" />';

	return $output;
}