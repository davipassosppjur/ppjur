<?php
	get_header();

	$id_page = get_page_by_path( 'quem-somos', OBJECT, 'page' )->ID;
?>

	<?php include "inc-breadcrumbs.php"; ?>

	<section class="wq-01-sobre">
		<div class="container">
			<div class="row">
				<div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12">
					<div class="wq-carousel_sobre">
						<?php
							$wsg_sobre_01_imgs = get_post_meta( $id_page, 'wsg_sobre_01_imgs', true );
							foreach ($wsg_sobre_01_imgs as $key => $value) {
						?>
							<figure>
								<?php
									getImageThumb($key,'500x500');
								?>
							</figure>
						<?php } ?>
					</div>
				</div>
				<div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12">
					<div class="wq-conteudo">
						<div class="wq-titulo_1">
							<h2><?php echo get_post_meta( $id_page, 'wsg_sobre_01_titulo', true ); ?></h2>
						</div>
						<?php echo wpautop(get_post_meta( $id_page, 'wsg_sobre_01_conteudo', true )); ?>
						<a href="<?php echo get_post_meta( $id_page,'wsg_sobre_01_btn_link', true) ?>" class="wq-btn_1">
							<?php echo get_post_meta( $id_page,'wsg_sobre_01_btn_text', true) ?>
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="wq-valores">
		<div class="container">
			<div class="wq-titulo_1">
				<h2><?php echo get_post_meta( $id_page, 'wsg_sobre_04_titulo', true ); ?></h2>
			</div>
			<div class="wq-valores_tabs">
				<ul class="nav nav-tabs">
					<?php
						$entries = get_post_meta( $id_page, 'sobre_04_items', true );
						$position = 0;

						foreach ( (array) $entries as $key => $entry ) {
							$position++;

							if ( isset( $entry['wsg_sobre_04_items_titulo'] ) ) {
								$wsg_sobre_04_items_titulo = $entry['wsg_sobre_04_items_titulo'];
							}
					?>
						<li class="">
							<a class="tabs-btn" data-toggle="tab" href="#tab-<?php echo $position; ?>">
								<?php echo $wsg_sobre_04_items_titulo; ?>
							</a>
						</li>
					<?php } ?>
				</ul>
				<div class="tab-content">
					<?php
						$entries = get_post_meta( $id_page, 'sobre_04_items', true );
						$position = 0;

						foreach ( (array) $entries as $key => $entry ) {
							$position++;

							if ( isset( $entry['wsg_sobre_04_items_texto'] ) ) {
								$wsg_sobre_04_items_texto = $entry['wsg_sobre_04_items_texto'];
							}
					?>
						<div class="tab-pane fade" id="tab-<?php echo $position; ?>">
							<?php echo wpautop($wsg_sobre_04_items_texto); ?>
						</div>
					<?php } ?>
				</div>
			</div>
			<div class="wq-valores_carousel mobile-only">
				<?php
					$entries = get_post_meta( $id_page, 'sobre_04_items', true );

					foreach ( (array) $entries as $key => $entry ) {

						if ( isset( $entry['wsg_sobre_04_items_titulo'] ) ) {
							$wsg_sobre_04_items_titulo = $entry['wsg_sobre_04_items_titulo'];
						}
						if ( isset( $entry['wsg_sobre_04_items_texto'] ) ) {
							$wsg_sobre_04_items_texto = $entry['wsg_sobre_04_items_texto'];
						}
				?>
					<div class="wq-valores_box">
						<h2><?php echo $wsg_sobre_04_items_titulo; ?></h2>
						<?php echo wpautop($wsg_sobre_04_items_texto); ?>
					</div>
				<?php } ?>
			</div>
		</div>
	</section>

	<section class="wq-equipe">
		<div class="container">
			<div class="wq-titulo_1">
				<h2><?php echo get_post_meta( $id_page, 'wsg_sobre_03_titulo', true ); ?></h2>
			</div>
			<?php echo wpautop(get_post_meta( $id_page, 'wsg_sobre_03_texto', true )); ?>
			<div class="wq-carousel_equipe">
				<?php
					$arrayQueryServicos = array(
						'post_type'				=> array( 'equipe192' ),
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page'		=> '-1',
					);
					$queryServicos = new WP_Query($arrayQueryServicos);
					while ( $queryServicos->have_posts()) {
						$queryServicos->the_post();
				?>
					<div class="wq-equipe_item">
						<figure>
							<?php
								$wsg_equipe_item_img_id = get_post_meta( get_the_ID(), 'wsg_equipe_item_img_id', true );
								getImageThumb($wsg_equipe_item_img_id,'296x400');
							?>
							<figcaption>
								<ul class="wq-midias-sociais">
									<?php
										$entries = get_post_meta( get_the_ID(), 'equipe_redes_sociais', true );

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
							<h2><?php the_title(); ?></h2>
							<p><?php echo get_post_meta( get_the_ID(), 'wsg_equipe_item_cargo', true ) ?></p>
						</div>
					</div>
				<?php }wp_reset_query(); ?>
			</div>
		</div>
	</section>

	<?php include "inc-newsletter.php"; ?>

<?php get_footer(); ?>