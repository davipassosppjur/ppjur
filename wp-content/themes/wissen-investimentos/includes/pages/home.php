<?php

	add_action( 'cmb2_admin_init', 'metaboxes_home' );

	function metaboxes_home() {

		// Método de especificação de página
		$homePage = get_page_by_path( 'home', OBJECT, 'page' );

		$post_id;

		if (isset($_GET['post'])) {
			$post_id = $_GET['post'];
		}else if(isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		}
		if( !isset( $post_id ) ) return;

		if($homePage && $homePage->ID != $post_id){
			return;
		}

		$header = new_cmb2_box( array(
			'id'            => 'header',
			'title'         => __( 'cabeçalho' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

		$header->add_field( array(
			'name'       => __( 'link do botão' ),
			'id'         => 'wsg_header_btn_link',
			'type'       => 'text_url',
		) );
		$header->add_field( array(
			'name'       => __( 'Texto do botão' ),
			'id'         => 'wsg_header_btn_texto',
			'type'       => 'text',
		) );


		// Metabox Banner
		$banner = new_cmb2_box( array(
			'id'            => 'banner',
			'title'         => __( 'Banner' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$banner->add_field( array(
			'name'       => __( 'Vídeo do banner' ),
			// 'desc'       => __( 'Tamanho recomendado <strong>1920x490</strong>' ),
			'id'         => 'wsg_banner_video',
			'options' => array(
				'url' => false, // Hide the text input for the url
			),
			'type' => 'file',
			'query_args' => array( 'type' => 'video' ),
		) );
		$banner->add_field( array(
			'name'       => __( 'Título do banner' ),
			'id'         => 'wsg_banner_titulo',
			'type'       => 'text',
		) );
		$banner->add_field( array(
			'name'       => __( 'Texto do banner' ),
			'id'         => 'wsg_banner_texto',
			'type'       => 'wysiwyg',
		) );
		$banner->add_field( array(
			'name'       => __( 'Link do botão 01 do banner' ),
			'id'         => 'wsg_banner_btn_link_1',
			'type'       => 'text_url',
		) );
		$banner->add_field( array(
			'name'       => __( 'Texto do botão 01 do banner' ),
			'id'         => 'wsg_banner_btn_texto_1',
			'type'       => 'text',
		) );
		$banner->add_field( array(
			'name'       => __( 'Link do botão 02 do banner' ),
			'id'         => 'wsg_banner_btn_link_2',
			'type'       => 'text_url',
		) );
		$banner->add_field( array(
			'name'       => __( 'Texto do botão 02 do banner' ),
			'id'         => 'wsg_banner_btn_texto_2',
			'type'       => 'text',
		) );

		// Metabox Estatísticas
		$call_to_action_1 = new_cmb2_box( array(
			'id'            => 'call_to_action_1',
			'title'         => __( 'Estatísticas' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$call_to_action_1->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_call_to_action_1_titulo',
			'type'       => 'text',
		) );
		$cta_items = $call_to_action_1->add_field( array(
			'id'            => 'cta_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$call_to_action_1->add_group_field( $cta_items, array(
			'name'       => __( 'Antes do Valor do item' ),
			'id'         => 'wsg_cta_items_valor_pre',
			'type'       => 'text',
		) );
		$call_to_action_1->add_group_field( $cta_items, array(
			'name'       => __( 'Valor do item' ),
			'id'         => 'wsg_cta_items_valor',
			'type'       => 'text',
		) );
		$call_to_action_1->add_group_field( $cta_items, array(
			'name'       => __( 'Depois do Valor do item' ),
			'id'         => 'wsg_cta_items_valor_pos',
			'type'       => 'text',
		) );
		$call_to_action_1->add_group_field( $cta_items, array(
			'name'       => __( 'legenda do item' ),
			'id'         => 'wsg_cta_items_legenda',
			'type'       => 'text',
		) );

		// Metabox Quem somos
		$sobre = new_cmb2_box( array(
			'id'            => 'sobre',
			'title'         => __( 'Quem somos' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => false,
		) );

		$sobre->add_field( array(
			'name'       => __( 'Iframe do vídeo da seção' ),
			'id'         => 'wsg_sobre_iframe',
			'type'       => 'textarea_code',
		) );
		$sobre->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_sobre_titulo',
			'type'       => 'text',
		) );
		$sobre->add_field( array(
			'name'       => __( 'Link do botão da seção' ),
			'id'         => 'wsg_sobre_btn_link',
			'type'       => 'text_url',
		) );
		$sobre->add_field( array(
			'name'       => __( 'Texto do botão da seção' ),
			'id'         => 'wsg_sobre_btn_texto',
			'type'       => 'text',
		) );


		// Metabox Planos
		$planos = new_cmb2_box( array(
			'id'            => 'planos',
			'title'         => __( 'Planos' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$planos->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_planos_titulo',
			'type'       => 'text',
		) );
		$planos->add_field( array(
			'name'       => __( 'Subtítulo da seção' ),
			'id'         => 'wsg_planos_subtitulo',
			'type'       => 'text',
		) );
		$planos->add_field( array(
			'name'    => __( 'Listagem de Planos' ),
			'desc'    => __( 'Arraste os planos da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos planos na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_planos_na_home',
			'type'    => 'custom_attached_posts',
			'column'  => false,
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => -1,
					'post_type'      => 'planos192',
				),
			),
		) );


		// Metabox Chamada para ação
		$call_to_action_2 = new_cmb2_box( array(
			'id'            => 'call_to_action_2',
			'title'         => __( 'Chamada para ação' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$call_to_action_2->add_field( array(
			'name'       => __( 'Imagem de fundo da seção' ),
			'desc'       => __( 'Tamanho recomendado <strong>1920x400</strong>' ),
			'id'         => 'wsg_call_to_action_2_img',
			'type' => 'file',
			'options' => array(
				'url' => false, // Hide the text input for the url
			),
			'preview_size' => array( 1920/1, 400/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$call_to_action_2->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_call_to_action_2_titulo',
			'type'       => 'text',
		) );
		$call_to_action_2->add_field( array(
			'name'       => __( 'Link do botão da seção' ),
			'id'         => 'wsg_call_to_action_2_btn_link',
			'type'       => 'text',
		) );
		$call_to_action_2->add_field( array(
			'name'       => __( 'Texto do botão da seção' ),
			'id'         => 'wsg_call_to_action_2_btn_text',
			'type'       => 'text',
		) );


		// Metabox Processos
		$processos = new_cmb2_box( array(
			'id'            => 'processos',
			'title'         => __( 'Processos' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$processos->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_processos_titulo',
			'type'       => 'text',
		) );
		$processos->add_field( array(
			'name'       => __( 'Imagem da seção' ),
			'desc'       => __( 'Tamanho recomendado <strong>296x400</strong>' ),
			'id'         => 'wsg_processos_img',
			'type' => 'file',
			'options' => array(
				'url' => false, // Hide the text input for the url
			),
			'preview_size' => array( 296/1, 400/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		$processos_items = $processos->add_field( array(
			'id'            => 'processos_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$processos->add_group_field( $processos_items, array(
			'name'       => __( 'Título do item' ),
			'id'         => 'wsg_processos_items_titulo',
			'type'       => 'text',
		) );
		$processos->add_group_field( $processos_items, array(
			'name'       => __( 'Subtitulo do item' ),
			'id'         => 'wsg_processos_items_subtitulo',
			'type'       => 'text',
		) );
		$processos->add_group_field( $processos_items, array(
			'name'       => __( 'Texto do item' ),
			'id'         => 'wsg_processos_items_texto',
			'type'       => 'wysiwyg',
		) );

		// Metabox Equipe
		$equipe = new_cmb2_box( array(
			'id'            => 'equipe',
			'title'         => __( 'Equipe' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$equipe->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_equipe_titulo',
			'type'       => 'text',
		) );
		$equipe->add_field( array(
			'name'       => __( 'Subtítulo da seção' ),
			'id'         => 'wsg_equipe_subtitulo',
			'type'       => 'text',
		) );
		$equipe->add_field( array(
			'name'    => __( 'Listagem de integrantes' ),
			'desc'    => __( 'Arraste os integrantes da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos integrantes na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_equipe_na_home',
			'type'    => 'custom_attached_posts',
			'column'  => false,
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => -1,
					'post_type'      => 'equipe192',
				),
			),
		) );


		// Metabox Parceiros
		$parceiros = new_cmb2_box( array(
			'id'            => 'parceiros',
			'title'         => __( 'Parceiros' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$parceiros->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_parceiros_titulo',
			'type'       => 'text',
		) );
		$parceiros->add_field( array(
			'name'       => __( 'Logos de parceiros' ),
			'desc'       => __( 'Tamanho recomendado <strong>220x90</strong>' ),
			'id'         => 'wsg_parceiros_imgs',
			'type' => 'file_list',
			'options' => array(
				'url' => false, // Hide the text input for the url
			),
			'preview_size' => array( 220/1, 90/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );


		// Metabox Newsletter
		$newsletter = new_cmb2_box( array(
			'id'            => 'newsletter',
			'title'         => __( 'Newsletter' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$newsletter->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_newsletter_titulo',
			'type'       => 'text',
		) );

		// Metabox Notícias
		$blog = new_cmb2_box( array(
			'id'            => 'blog',
			'title'         => __( 'Notícias' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$blog->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_blog_titulo',
			'type'       => 'text',
		) );

	}

?>