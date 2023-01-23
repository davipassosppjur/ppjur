<?php

	// tamanhos dinâmicos para thumbs
	function tamanhos_thumbs(){

		// Ativando suporte para imagem destacada
		add_theme_support('post-thumbnails');
		add_image_size( '1920x490', 1920, 490, true );
		add_image_size( '1920x400', 1920, 400, true );
		add_image_size( '1920x200', 1920, 200, true );
		add_image_size( '750x416', 750, 416, true );
		add_image_size( '560x480', 560, 480, true );
		add_image_size( '500x500', 500, 500, true );
		add_image_size( '360x216', 360, 216, true );
		add_image_size( '354x354', 354, 354, true );
		add_image_size( '320x320', 320, 320, true );
		add_image_size( '296x400', 296, 400, true );
		add_image_size( '120x120', 120, 120, true );
		add_image_size( '64x64', 64, 64, true );
	}
	add_action('after_setup_theme', 'tamanhos_thumbs');

?>