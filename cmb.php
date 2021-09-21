<?php

function sc_show_if_front_page( $cmb ) {
	// Don't show this metabox if it's not the front page template.
	if ( get_option( 'page_on_front' ) !== $cmb->object_id ) {
		return false;
	}
	return true;
}

add_action( 'cmb2_admin_init', 'sc_register_frontpage_metabox' );

function sc_register_frontpage_metabox() {

	$cmb = new_cmb2_box( array(
		'id'            => 'sc_frontpage_metabox',
		'title'         => esc_html__( 'Cardápio', 'sistema-cardapio' ),
		'object_types'  => array( 'page' ), // Post type
		'show_on_cb' => 'sc_show_if_front_page', // function should return a bool value
	) );

	$cmb->add_field( array(
		'name' => esc_html__( 'Arquivo PDF', 'sistema-cardapio' ),
		'desc' => esc_html__( 'Faça o upload do arquivo PDF do Cardápio ou insiria a URL.', 'sistema-cardapio' ),
		'id'   => 'sc_frontpage_pdf',
		'type' => 'file',
	) );

}