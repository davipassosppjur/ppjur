<?php
	$id_logo = get_page_by_path( 'configuracoes-da-logo', OBJECT, 'gerais' )->ID;

	$id_email = get_page_by_path( 'email', OBJECT, 'contatos' )->ID; 
	$id_telefones = get_page_by_path( 'telefones', OBJECT, 'contatos' )->ID; 

	$id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>

<meta name="google-site-verification" content="CZY9vExCidM9XuAxAAwj4-HoLzspZitN0TGBO8xbvXY" />

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5V8KXFR');</script>
<!-- End Google Tag Manager -->



	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|', true, 'right'); ?></title>

	<?php
		$wsg_favicon_img_id = get_post_meta( $id_logo, 'wsg_favicon_img_id', true );
		if ($wsg_favicon_img_id !== NULL && strlen($wsg_favicon_img_id) > 0) {
			$wsg_favicon = wp_get_attachment_image_src($wsg_favicon_img_id);
			if ($wsg_favicon !== NULL && count($wsg_favicon) > 0) {
				?>
					<link rel="icon" href="<?php echo $wsg_favicon[0]; ?>" type="image/x-icon"/>
				<?php
			}
		}
	?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/bootstrap/dist/css/bootstrap-grid.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/bootstrap/dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/lity.min.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/aos.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">

	<?php if ( is_page('quem-somos') ) { ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sobre.css">

	<?php } elseif ( is_post_type_archive('servicos192') || is_singular('servicos192') ) { ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/palestras.css">

	<?php } elseif ( is_page('mentoria') ) { ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/palestras.css">

	<?php } elseif ( is_page('contato') ) { ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/contato.css">

	<?php } elseif ( is_page('blog') || is_category() || is_search() || is_tag() || is_date() || is_single() ) { ?>
		<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/blog.css">

	<?php } ?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/mobile.css">


	<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/bootstrap/dist/js/bootstrap.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/bootstrap/dist/js/bootstrap.bundle.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/aos.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/carousel.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/lity.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/efeitos.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/rellax.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/jquery.magnific-popup.min.js"></script>

	<meta name="wq_url_theme" content="<?php bloginfo('template_url'); ?>/">
	<!-- -->
	<link rel="stylesheet" href="<?php bloginfo('template_url') ?>/js-template/sweetalert2/sweetalert2.min.css">
	<script src="<?php bloginfo('template_url') ?>/js-template/sweetalert2/sweetalert2.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js-template/jquery.blockUI.js"></script>

	<script src="<?php bloginfo('template_url') ?>/js-template/jquery.maskedinput.min.js"></script>
	<script src="<?php bloginfo('template_url') ?>/js-template/script-template.js"></script>

	<!-- -->
	<script src='https://www.google.com/recaptcha/api.js?onload=onloadCallbackFormsRecaptcha&render=explicit' async defer></script>

	<?php wp_head(); ?>

	<?php
		$id_google = get_page_by_path( 'configuracoes-do-google', OBJECT, 'gerais' )->ID;

		echo get_post_meta( $id_google, 'pixel_de_conversao_facebook', true );
		echo get_post_meta( $id_google, 'code_webmaster_tools', true );
	?>
</head>

<body>


<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5V8KXFR"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->


	<header class="wq-header wq-header_horizontal">
		<div class="wq-header_bottom">
			<div class="container-fluid">
				<nav class="navbar navbar-expand-lg navbar-light header-nav">
					<div class="wq-logo navbar-brand">
						<a href="<?php bloginfo('url'); ?>/">
							<?php
								$wsg_logo_header_img_id = get_post_meta( $id_logo, 'wsg_logo_header_img_id', true );
								echo getImageThumb($wsg_logo_header_img_id, 'full');
							?>
						</a>
					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#menuMobile" aria-controls="menuMobile" aria-expanded="false" aria-label="Toggle navigation">
						<span>
							<img src="<?php bloginfo( 'template_url' ); ?>/img/menu-button-of-three-horizontal-lines.png" alt="" title="">
						</span>
					</button>
					<?php
						wp_nav_menu( array(
							'theme_location'    => 'header-menu',
							'depth'             => 2,
							'container'         => 'div',
							'container_class'   => 'collapse navbar-collapse',
							'container_id'      => 'menuMobile',
							'menu_class'        => 'navbar-nav wq-menu_principal header',
							'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
							'walker'            => new WP_Bootstrap_Navwalker(),
						) );
					?>

					<script>
						$('.navbar-nav.header').append(`
							<li class="nav-item">
								<a class="wq-btn_1" href="<?php echo get_post_meta( $id_home, 'wsg_header_btn_link' , true); ?>" ><?php echo get_post_meta( $id_home, 'wsg_header_btn_texto' , true); ?></a>
							</li>
						`);
					</script>
				</nav>
			</div>
		</div>
	</header>