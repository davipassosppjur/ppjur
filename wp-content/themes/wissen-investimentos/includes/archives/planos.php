<?php

	add_action( 'cmb2_admin_init', 'metaboxes_planos' );

	function metaboxes_planos() {

		// Detalhes do Plano
		$planos_item = new_cmb2_box( array(
			'id'            => 'planos_item',
			'title'         => __( 'Detalhes do Plano' ),
			'object_types'  => array( 'planos192', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

		$planos_item->add_field( array(
			'name'       => __( 'Subtítulo do plano' ),
			'id'         => 'wsg_planos_item_subtitulo',
			'type'       => 'text',
		) );
		$planos_item->add_field( array(
			'name'       => __( 'Resumo do plano' ),
			'id'         => 'wsg_planos_item_resumo',
			'type'       => 'wysiwyg',
		) );
		$planos_item->add_field( array(
			'name'       => __( 'Link do Botão' ),
			'id'         => 'wsg_planos_item_btn_link',
			'type'       => 'text_url',
		) );
		$planos_item->add_field( array(
			'name'       => __( 'Texto do Botão' ),
			'id'         => 'wsg_planos_item_btn_texto',
			'type'       => 'text',
		) );
		$planos_item_conteudos = $planos_item->add_field( array(
			'id'            => 'planos_item_conteudos',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$planos_item->add_group_field( $planos_item_conteudos, array(
			'name'       => __( 'título do item' ),
			'id'         => 'wsg_planos_item_conteudos_valor',
			'type'       => 'text',
		) );
		$planos_item->add_group_field( $planos_item_conteudos, array(
			'name'       => __( 'Lista do item' ),
			'id'         => 'wsg_planos_item_conteudos_legenda',
			'type'       => 'text',
			'repeatable' => true
		) );

	}

?>