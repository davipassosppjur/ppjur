<?php

	add_action( 'cmb2_admin_init', 'metaboxes_sobre' );

	function metaboxes_sobre() {

		// Método de especificação de página
		$sobrePage = get_page_by_path( 'quem-somos', OBJECT, 'page' );

		$post_id;

		if (isset($_GET['post'])) {
			$post_id = $_GET['post'];
		}else if(isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		}
		if( !isset( $post_id ) ) return;

		if($sobrePage && $sobrePage->ID != $post_id){
			return;
		}

		// Metabox Quem Somos
		$sobre_01 = new_cmb2_box( array(
			'id'            => 'sobre_01',
			'title'         => __( 'Quem Somos' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$sobre_01->add_field( array(
			'name'       => __( 'Imagens da seção' ),
			'desc'       => __( 'Tamanho recomendado <strong>500x500</strong>' ),
			'id'         => 'wsg_sobre_01_imgs',
			'type' => 'file_list',
			'preview_size' => array( 500/2, 500/2 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$sobre_01->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_sobre_01_titulo',
			'type'       => 'text',
		) );
		$sobre_01->add_field( array(
			'name'       => __( 'Texto da seção' ),
			'id'         => 'wsg_sobre_01_conteudo',
			'type'       => 'wysiwyg',
		) );
		$sobre_01->add_field( array(
			'name'       => __( 'Link do botão da seção' ),
			'id'         => 'wsg_sobre_01_btn_link',
			'type'       => 'text',
		) );
		$sobre_01->add_field( array(
			'name'       => __( 'Texto do botão da seção' ),
			'id'         => 'wsg_sobre_01_btn_text',
			'type'       => 'text',
		) );


		// Metabox Valores
		$sobre_04 = new_cmb2_box( array(
			'id'            => 'sobre_04',
			'title'         => __( 'Valores' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$sobre_04->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_sobre_04_titulo',
			'type'       => 'text',
		) );
		$sobre_04_items = $sobre_04->add_field( array(
			'id'            => 'sobre_04_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$sobre_04->add_group_field( $sobre_04_items, array(
			'name'       => __( 'Título do item' ),
			'id'         => 'wsg_sobre_04_items_titulo',
			'type' => 'Text',
		) );
		$sobre_04->add_group_field( $sobre_04_items, array(
			'name'       => __( 'Texto do item' ),
			'id'         => 'wsg_sobre_04_items_texto',
			'type' => 'wysiwyg',
		) );

		// Metabox Equipe
		$sobre_03 = new_cmb2_box( array(
			'id'            => 'sobre_03',
			'title'         => __( 'Equipe' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$sobre_03->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_sobre_03_titulo',
			'type'       => 'text',
		) );


		// Metabox Sobre
		$sobre_footer = new_cmb2_box( array(
			'id'            => 'sobre_footer',
			'title'         => __( 'Rodapé' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$sobre_footer->add_field( array(
			'name'       => __( 'Copyright do rodapé' ),
			'id'         => 'wsg_sobre_footer_copyright',
			'type'       => 'wysiwyg',
		) );


	}

?>