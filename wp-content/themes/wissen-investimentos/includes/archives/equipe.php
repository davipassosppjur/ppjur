<?php

	add_action( 'cmb2_admin_init', 'metaboxes_equipe' );

	function metaboxes_equipe() {
		$equipe_item = new_cmb2_box( array(
			'id'            => 'equipe_item',
			'title'         => __( 'Detalhes do integrante da equipe' ),
			'object_types'  => array( 'equipe192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

		$equipe_item->add_field( array(
			'name'       => __( 'Imagem do integrante' ),
			'desc'       => __( 'Tamanho recomendado <strong>296x400</strong>' ),
			'id'         => 'wsg_equipe_item_img',
			'type' => 'file',
			'preview_size' => array( 296/1, 400/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		$equipe_item->add_field( array(
			'name'       => __( 'Cargo do integrante' ),
			'id'         => 'wsg_equipe_item_cargo',
			'type'       => 'text',
		) );

		$equipe_item->add_field( array(
			'name'       => __( 'Redes sociais' ),
			'id'         => 'wsg_equipe_item_rd',
			'type'       => 'title',
		) );
		$equipe_redes_sociais = $equipe_item->add_field( array(
			'id'            => 'equipe_redes_sociais',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$equipe_item->add_group_field( $equipe_redes_sociais, array(
			'name'       => __( 'Ícone' ),
			'id'         => 'wsg_equipe_redes_sociais_icone',
			'type'       => 'text_small',
		) );
		$equipe_item->add_group_field( $equipe_redes_sociais, array(
			'name'       => __( 'Link' ),
			'id'         => 'wsg_equipe_redes_sociais_link',
			'type'       => 'text',
		) );


	}

?>