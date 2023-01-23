<?php

// Meus posts types
	function meus_post_types(){

		// Notícias
		register_post_type('noticias192',
			array(
				'labels' 			=> array(
					'name' 			=> __('Notícias'),
					'singular_name'	=> _x('notícia', 'post type singular name'),
					'add_new'		=> _x('Novo notícia', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo notícia', 'portfolio item'),
					'edit_item'		=> _x('Editar notícia', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'noticias'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-admin-post',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);

		// Soluções
		register_post_type('servicos192',
			array(
				'labels' 			=> array(
					'name' 			=> __('Soluções'),
					'singular_name'	=> _x('solução', 'post type singular name'),
					'add_new'		=> _x('Novo solução', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo solução', 'portfolio item'),
					'edit_item'		=> _x('Editar solução', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'solucoes'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-admin-post',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);

		// Planos
		register_post_type('planos192',
			array(
				'labels' 			=> array(
					'name' 			=> __('Planos'),
					'singular_name'	=> _x('Plano', 'post type singular name'),
					'add_new'		=> _x('Novo Plano', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo Plano', 'portfolio item'),
					'edit_item'		=> _x('Editar Plano', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'planos'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-admin-post',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);

		// // Depoimentos
		// register_post_type('depoimentos192',
		// 	array(
		// 		'labels' 			=> array(
		// 			'name' 			=> __('Depoimentos'),
		// 			'singular_name'	=> _x('depoimento', 'post type singular name'),
		// 			'add_new'		=> _x('Novo depoimento', 'portfolio item'),
		// 			'add_new_item'	=> _x('Adicionar novo depoimento', 'portfolio item'),
		// 			'edit_item'		=> _x('Editar depoimento', 'portfolio item'),
		// 		),
		// 		'rewrite' 			=> array('slug' => 'depoimentos'),
		// 		'public' 			=> true,
		// 		'has_archive' 		=> true,
		// 		'menu_icon' 		=> 'dashicons-testimonial',
		// 		'supports' 			=> array('title', 'page-attributes'),
		// 	)
		// );

		// Equipe
		register_post_type('equipe192',
			array(
				'labels' 			=> array(
					'name' 			=> __('Equipe'),
					'singular_name'	=> _x('integrante', 'post type singular name'),
					'add_new'		=> _x('Novo integrante', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo integrante', 'portfolio item'),
					'edit_item'		=> _x('Editar integrante', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'equipe'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-groups',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);

	}
	add_action('init', 'meus_post_types');

?>