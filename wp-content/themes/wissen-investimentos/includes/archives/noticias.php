<?php

	add_action( 'cmb2_admin_init', 'metaboxes_noticias' );

	function metaboxes_noticias() {

		// Detalhes da notícia
		$noticia_item = new_cmb2_box( array(
			'id'            => 'noticia_item',
			'title'         => __( 'Detalhes da notícia' ),
			'object_types'  => array( 'noticias192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

		$noticia_item->add_field( array(
			'name'       => __( 'Ícone da notícia' ),
			'desc'       => __( 'Tamanho recomendado <strong>360x216</strong>' ),
			'id'         => 'wsg_noticia_item_img',
			'type' => 'file',
			'preview_size' => array( 360/1, 216/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$noticia_item->add_field( array(
			'name'       => __( 'Resumo da notícia' ),
			'id'         => 'wsg_noticia_item_resumo',
			'type'       => 'wysiwyg',
		) );
		$noticia_item->add_field( array(
			'name'       => __( 'Link da notícia' ),
			'id'         => 'wsg_noticia_item_btn_link',
			'type'       => 'text_url',
		) );

		// Método de especificação de página
		$projetosPage = get_page_by_path( 'noticias', OBJECT, 'page' );

		$post_id;

		if (isset($_GET['post'])) {
			$post_id = $_GET['post'];
		}else if(isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		}
		if( !isset( $post_id ) ) return;

		if($projetosPage && $projetosPage->ID != $post_id){
			return;
		}


	}

?>