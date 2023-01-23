<?php
	get_header();

	$id_page = get_page_by_path( 'home', OBJECT, 'page' )->ID;
?>

	<section class="wq-banner">
		<div class="wq-banner_video">
			<video muted="" autoplay="" loop="" playsinline="">
				<source src="<?php echo get_post_meta( $id_page, 'wsg_banner_video', true ); ?>">
			</video>
		</div>
		<div class="wq-conteudo">
			<div class="container">
				<h2 data-aos="fade-right" ><?php echo get_post_meta( $id_page, 'wsg_banner_titulo', true ); ?></h2>
				<div data-aos="fade-right" data-aos-delay="200">
					<?php echo wpautop(get_post_meta( $id_page, 'wsg_banner_texto', true )); ?>
				</div>
				<div class="wq-banner_btns">
					<a href="<?php echo get_post_meta( $id_page, 'wsg_banner_btn_link_1', true ); ?>" class="wq-btn_1" data-aos="fade-right" data-aos-delay="300">
						<?php echo get_post_meta( $id_page, 'wsg_banner_btn_texto_1', true ); ?></a>
					</a>
					<a href="<?php echo get_post_meta( $id_page, 'wsg_banner_btn_link_2', true ); ?>" class="wq-btn_2" data-aos="fade-left" data-aos-delay="400">
						<?php echo get_post_meta( $id_page, 'wsg_banner_btn_texto_2', true ); ?></a>
					</a>
				</div>
			</div>
		</div>
	</section>

	<?php
		$wsg_call_to_action_1_img_id = get_post_meta($id_page, 'wsg_call_to_action_1_img_id', true);
		$wsg_call_to_action_1_img_id = wp_get_attachment_image_src($wsg_call_to_action_1_img_id, '1920x480');
		$wsg_call_to_action_1_img_id = $wsg_call_to_action_1_img_id[0];
	?>
	<section class="wq-02" style="background-image: url(<?php echo $wsg_call_to_action_1_img_id; ?>);">
		<div class="container">
			<h2><?php echo get_post_meta( $id_page, 'wsg_call_to_action_1_titulo', true ); ?></h2>
			<div class="row">
				<?php
					$entries = get_post_meta( $id_page, 'cta_items', true );

					foreach ( (array) $entries as $key => $entry ) {

						if ( isset( $entry['wsg_cta_items_valor'] ) ) {
							$wsg_cta_items_valor = $entry['wsg_cta_items_valor'];
						}
						if ( isset( $entry['wsg_cta_items_valor_pre'] ) ) {
							$wsg_cta_items_valor_pre = $entry['wsg_cta_items_valor_pre'];
						}
						if ( isset( $entry['wsg_cta_items_valor_pos'] ) ) {
							$wsg_cta_items_valor_pos = $entry['wsg_cta_items_valor_pos'];
						}
						if ( isset( $entry['wsg_cta_items_legenda'] ) ) {
							$wsg_cta_items_legenda = $entry['wsg_cta_items_legenda'];
						}
				?>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
						<h3 class="numberincrement" data-content-before="<?php echo $entry['wsg_cta_items_valor_pre']; ?>" data-content-after="<?php echo $entry['wsg_cta_items_valor_pos']; ?>" data-final="<?php echo $entry['wsg_cta_items_valor']; ?>" data-duration="2000"><?php echo $entry['wsg_cta_items_valor']; ?> </h3>
						<p><?php echo $wsg_cta_items_legenda; ?></p>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<section class="wq-01">
		<div class="container">
			<div class="wq-sobre_box" data-aos="fade-up" data-aos-easing="ease-in-out" data-aos-duration="750">
				<div class="wq-sobre_video">
					<?php echo get_post_meta( $id_page, 'wsg_sobre_iframe', true ); ?>
				</div>
				<div class="wq-sobre_box-conteudo">
					<div class="wq-sobre_box-titulo">
						<h2><?php echo get_post_meta( $id_page, 'wsg_sobre_titulo', true ); ?></h2>
					</div>
					<a href="<?php echo get_post_meta( $id_page, 'wsg_sobre_btn_link', true ); ?>" class="wq-btn_1">
						<?php echo get_post_meta( $id_page, 'wsg_sobre_btn_texto', true ); ?>
					</a>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<figure>
						<?php
							$wsg_sobre_img_id = get_post_meta( $id_page, 'wsg_sobre_img_id', true );
							getImageThumb($wsg_sobre_img_id,'560x480');
						?>
					</figure>
				</div>
				<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
					<div class="wq-conteudo">
						<div class="wq-titulo_1">
							<h1><?php echo get_post_meta( $id_page, 'wsg_sobre_titulo', true ); ?></h1>
						</div>
						<?php echo wpautop(get_post_meta( $id_page, 'wsg_sobre_texto', true )); ?>
						<a href="<?php echo get_post_meta( $id_page, 'wsg_sobre_btn_link', true ); ?>" class="wq-btn_1">
							<?php echo get_post_meta( $id_page, 'wsg_sobre_btn_texto', true ); ?>
						</a>
					</div>
				</div>
			</div> -->
		</div>
	</section>

	<section class="wq-03">
		<div class="container">
			<div class="wq-titulo_1">
				<h3><?php echo get_post_meta( $id_page, 'wsg_planos_titulo', true ); ?></h3>
			</div>
			<?php echo wpautop(get_post_meta( $id_page, 'wsg_planos_subtitulo', true )); ?>
			<div class="wq-carousel_servicos">
				<?php
					$wsg_planos_na_home = get_post_meta( $id_page, 'wsg_planos_na_home', true );

					if( $wsg_planos_na_home ){
						foreach( $wsg_planos_na_home as $attached_post ){
							$post = get_post($attached_post);
				?>
					<div class="wq-plano_item">
						<div class="wq-plano_item-titulo">
							<h2><?php echo get_the_title($post->ID); ?></h2>
							<p><?php echo get_post_meta( $post->ID, 'wsg_planos_item_subtitulo', true ) ?></p>
							<a href="<?php echo get_post_meta( $post->ID, 'wsg_planos_item_btn_link', true ); ?>" class="wq-btn_link">
								<?php echo get_post_meta( $post->ID, 'wsg_planos_item_btn_texto', true ); ?>
								<span class="flaticon-arrow-right"></span>
							</a>
						</div>
						<div class="wq-plano_item-conteudo">
							<?php echo wpautop(get_post_meta( $post->ID, 'wsg_planos_item_resumo', true )); ?>
							<div class="row">
								<?php
									$entries = get_post_meta( $post->ID, 'planos_item_conteudos', true );

									foreach ( (array) $entries as $key => $entry ) {

										if ( isset( $entry['wsg_planos_item_conteudos_valor'] ) ) {
											$wsg_planos_item_conteudos_valor = $entry['wsg_planos_item_conteudos_valor'];
										}
										if ( isset( $entry['wsg_planos_item_conteudos_legenda'] ) ) {
											$wsg_planos_item_conteudos_legenda = $entry['wsg_planos_item_conteudos_legenda'];
										}
								?>
									<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
										<div class="wq-plano-item-list">
											<h3><?php echo $wsg_planos_item_conteudos_valor; ?></h3>
											<ul>
												<?php
													foreach ($wsg_planos_item_conteudos_legenda as $key => $value) {
												?>
													<li><?php echo $value; ?></li>
												<?php } ?>
											</ul>
										</div>
									</div>
								<?php } ?>
							</div>
						</div>
					</div>
				<?php } } ?>
			</div>
		</div>
	</section>

	<?php
		$wsg_call_to_action_2_img_id = get_post_meta($id_page, 'wsg_call_to_action_2_img_id', true);
		$wsg_call_to_action_2_img_id = wp_get_attachment_image_src($wsg_call_to_action_2_img_id, '1920x400');
		$wsg_call_to_action_2_img_id = $wsg_call_to_action_2_img_id[0];
	?>
	<section class="wq-04" style="background-image: url(<?php echo $wsg_call_to_action_2_img_id; ?>);">
		<div class="container">
			<h3><?php echo get_post_meta( $id_page, 'wsg_call_to_action_2_titulo', true ); ?></h3>
			<a href="<?php echo get_post_meta( $id_page, 'wsg_call_to_action_2_btn_link', true ); ?>" class="wq-btn_1"><?php echo get_post_meta( $id_page, 'wsg_call_to_action_2_btn_text', true ); ?></a>
		</div>
	</section>

	<section class="wq-processos">
		<div class="container">
			<div class="wq-titulo_1">
				<h2 ><?php echo get_post_meta( $id_page, 'wsg_processos_titulo', true ); ?></h2>
			</div>
			<div class="wq-processos_box" data-aos="flip-left">
				<figure>
					<?php
						$wsg_processos_img_id = get_post_meta( $id_page, 'wsg_processos_img_id', true );
						getImageThumb($wsg_processos_img_id,'296x400');
					?>
				</figure>
				<ul class="nav nav-tabs">
					<?php
						$entries = get_post_meta( $id_page, 'processos_items', true );

						$position = 0;

						foreach ( (array) $entries as $key => $entry ) {

							$position++;

							if ( isset( $entry['wsg_processos_items_titulo'] ) ) {
								$wsg_processos_items_titulo = $entry['wsg_processos_items_titulo'];
							}
					?>
						<li class="">
							<a class="tabs-btn" data-toggle="tab" href="#aba-0<?php echo $position; ?>">
								<?php echo $wsg_processos_items_titulo; ?>
							</a>
						</li>
					<?php } ?>
				</ul>
				<div class="tab-content">
					<?php
						$entries = get_post_meta( $id_page, 'processos_items', true );

						$position = 0;

						foreach ( (array) $entries as $key => $entry ) {

							$position++;

							if ( isset( $entry['wsg_processos_items_titulo'] ) ) {
								$wsg_processos_items_titulo = $entry['wsg_processos_items_titulo'];
							}
							if ( isset( $entry['wsg_processos_items_subtitulo'] ) ) {
								$wsg_processos_items_subtitulo = $entry['wsg_processos_items_subtitulo'];
							}
							if ( isset( $entry['wsg_processos_items_texto'] ) ) {
								$wsg_processos_items_texto = $entry['wsg_processos_items_texto'];
							}
					?>
						<div class="tab-pane fade" id="aba-0<?php echo $position; ?>">
							<span><?php echo $wsg_processos_items_subtitulo; ?></span>
							<h3><?php echo $wsg_processos_items_titulo; ?></h3>
							<?php echo wpautop($wsg_processos_items_texto); ?>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>

	<section class="wq-equipe">
		<div class="container">
			<div class="wq-titulo_1">
				<h2><?php echo get_post_meta( $id_page, 'wsg_equipe_titulo', true ); ?></h2>
			</div>
			<?php echo wpautop(get_post_meta( $id_page, 'wsg_equipe_texto', true )); ?>
			<div class="wq-carousel_equipe">
				<?php
					$wsg_equipe_na_home = get_post_meta( $id_page, 'wsg_equipe_na_home', true );

					if( $wsg_equipe_na_home ){
						foreach( $wsg_equipe_na_home as $attached_post ){
							$post = get_post($attached_post);
				?>
					<div class="wq-equipe_item">
						<figure>
							<?php
								$wsg_equipe_item_img_id = get_post_meta( $post->ID, 'wsg_equipe_item_img_id', true );
								getImageThumb($wsg_equipe_item_img_id,'296x400');
							?>
							<figcaption>
								<ul class="wq-midias-sociais">
									<?php
										$entries = get_post_meta( $post->ID, 'equipe_redes_sociais', true );

										foreach ( (array) $entries as $key => $entry ) {

											if ( isset( $entry['wsg_equipe_redes_sociais_icone'] ) ) {
												$wsg_equipe_redes_sociais_icone = $entry['wsg_equipe_redes_sociais_icone'];
											}
											if ( isset( $entry['wsg_equipe_redes_sociais_link'] ) ) {
												$wsg_equipe_redes_sociais_link = $entry['wsg_equipe_redes_sociais_link'];
											}
									?>
										<li>
											<a href="<?php echo $wsg_equipe_redes_sociais_link; ?>" target="_blank" class="flaticon-<?php echo $wsg_equipe_redes_sociais_icone; ?>"></a>
										</li>
									<?php } ?>
								</ul>
							</figcaption>
						</figure>
						<div>
							<h2><?php echo get_the_title($post->ID); ?></h2>
							<p><?php echo get_post_meta( $post->ID, 'wsg_equipe_item_cargo', true ) ?></p>
						</div>
					</div>
				<?php } } ?>
			</div>
		</div>
	</section>

	<section class="wq-09">
		<div class="container">
			<div class="wq-titulo_1">
				<h2><?php echo get_post_meta( $id_page, 'wsg_parceiros_titulo', true ); ?></h2>
			</div>
			<div class="wq-carousel_parceiros">
				<?php
					$wsg_parceiros_imgs = get_post_meta( $id_page, 'wsg_parceiros_imgs', true );
					foreach ($wsg_parceiros_imgs as $key => $value) {
				?>
					<figure>
						<?php getImageThumb($key,'full'); ?>
					</figure>
				<?php
					}
				?>
			</div>
		</div>
	</section>

	<?php include "inc-newsletter.php"; ?>

	<section class="wq-05">
		<div class="container">
			<div class="wq-titulo_1">
				<h3><?php echo get_post_meta( $id_page, 'wsg_blog_titulo', true ); ?></h3>
			</div>
			<div class="row">
				<?php
					$args = array (
						'post_type'         => 'noticias192',
						'posts_per_page'    => 3
					);
					$query = new WP_Query( $args );
					$posts = $query->get_posts();
					foreach ($posts as $key => $item) {
						// setup_postdata($item);
						// $categories = get_the_terms( $item->ID, 'category' );
						// $htmlCategory = '';
						// if ( $categories && ! is_wp_error( $categories ) ){
						// 	$draught_links = array();
						// 	foreach ($categories as $category) {
						// 		$cat_Item = '<a href="'.get_term_link($category->term_id, "category").'" title="'.$category->name.'" > '.$category->name.'</a>';
						// 		array_push($draught_links, $cat_Item);
						// 	}
						// 	$htmlCategory = implode(' | ', $draught_links);
						// }
				?>
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
						<figure>
							<?php
								$wsg_noticia_item_img_id = get_post_meta( $item->ID, 'wsg_noticia_item_img_id', true );
								getImageThumb( $wsg_noticia_item_img_id, '360x216');
							?>
						</figure>
						<div class="wq-conteudo">
							<ul class="wq-filtro">
								<li><?php echo get_the_date('d', $item->ID); ?>.<?php echo get_the_date('m', $item->ID); ?>.<?php echo get_the_date('Y', $item->ID); ?></li>
							</ul>
							<h3><?php echo $item->post_title; ?></h3>
							<?php echo wpautop(get_post_meta( $item->ID, 'wsg_noticia_item_resumo', true )); ?>
							<a class="wq-btn_1" href="<?php echo get_post_meta( $item->ID, 'wsg_noticia_item_btn_link', true ); ?>">Saiba mais</a>
						</div>
					</div>
				<?php }wp_reset_query(); ?>
			</div>
		</div>
	</section>


<?php get_footer(); ?>