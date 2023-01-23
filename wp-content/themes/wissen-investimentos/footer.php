<?php
	$id_sobre = get_page_by_path( 'quem-somos', OBJECT, 'page' )->ID;
	$id_admin = get_page_by_path( 'slug-outras-info', OBJECT, 'adminpanel' )->ID;

	$id_logo = get_page_by_path( 'configuracoes-da-logo', OBJECT, 'gerais' )->ID;

	$id_telefones = get_page_by_path( 'telefones', OBJECT, 'contatos' )->ID;
	$id_email = get_page_by_path( 'email', OBJECT, 'contatos' )->ID;
	$id_endereco = get_page_by_path( 'endereco', OBJECT, 'contatos' )->ID;
?>

	<?php
		$wsg_whatsapp_popup_link = get_post_meta( $id_telefones, 'wsg_whatsapp_popup_link', true );
		if ( !empty($wsg_whatsapp_popup_link) ) {
	?>
		<div class="wq-whatsapp_btn">
			<a href="<?php echo $wsg_whatsapp_popup_link; ?>" target="_blank">
				<span class="flaticon-whatsapp-2"></span>
			</a>
		</div>
	<?php } ?>


	<footer class="wq-footer">
		<div class="wq-footer_top">
			<div class="container">
				<div class="row">
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
						<div class="wq-logo">
							<a href="<?php bloginfo('url'); ?>/">
								<?php
									$wsg_logo_footer_img_id = get_post_meta( $id_logo, 'wsg_logo_footer_img_id', true );
									echo getImageThumb($wsg_logo_footer_img_id, 'full');
								?>
							</a>
						</div>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
						<h4>
							<?php
								$menu_location = 'footer-menu';
								$menu_locations = get_nav_menu_locations();
								$menu_object = (isset($menu_locations[$menu_location]) ? wp_get_nav_menu_object($menu_locations[$menu_location]) : null);
								$menu_name = (isset($menu_object->name) ? $menu_object->name : '');
								echo esc_html($menu_name);
							?>
						</h4>
						<ul class="wq-footer_menu">
							<?php
								$menu_name = 'footer-menu';
								$locations = get_nav_menu_locations();
								$menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
								$primaryNav = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
								wp_nav_menu( array(
									'menu'            => 'footer-menu',
									'theme_location'  => 'footer-menu',
									'container'       => '',
									'menu_class'      => 'menu',
									'echo'            => true,
									'fallback_cb'     => 'wp_page_menu',
									'items_wrap'      => '%3$s',
									'depth'           => 3,
								) );
							?>
						</ul>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
						<h4>Nos siga</h4>
						<ul class="wq-midias-sociais">
							<?php
								$arrayQuery_Midias_Sociais = array(
									'post_type'			=> array( 'redes_sociais' ),
									'posts_per_page'	=> '-1',
									'orderby' 			=> 'menu_order',
									'order' 			=> 'ASC',
								);
								$query_Midias_Sociais = new WP_Query($arrayQuery_Midias_Sociais);

								while ( $query_Midias_Sociais->have_posts()) {
									$query_Midias_Sociais->the_post();
							?>
								<li>
									<a href="<?php echo get_post_meta( get_the_ID(), 'wsg_redes_sociais_link', true ); ?>" target="_blank">
										<span class="flaticon-<?php echo get_post_meta( get_the_ID(), 'wsg_redes_sociais_titulo', true ); ?>"></span>
									</a>
								</li>
							<?php
								} wp_reset_query();
							?>
						</ul>
					</div>
					<div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
						<h4>Contatos</h4>
						<div class="wq-footer_contatos">
							<?php
								$wsg_emails = get_post_meta( $id_email, 'wsg_emails', true );
								foreach ( (array) $wsg_emails as $key => $email ) {
							?>
								<li>
									<a href="mailto:<?php echo $email; ?>" target="_blank">
										<span class="flaticon-mail-2"></span>
										<p>
											<span>Email</span>
											<?php echo $email; ?>
										</p>
									</a>
								</li>
							<?php
									if (count($wsg_emails) > 1) {
										break;
									}
								}
							?>
							<?php
								$entries = get_post_meta( $id_telefones, 'wsg_telefone_items', true );

								foreach ( (array) $entries as $key => $entry ) {

									if ( isset( $entry['wsg_telefone_nmr'] ) ) {
										$wsg_telefone_nmr = $entry['wsg_telefone_nmr'];
									}
									if ( isset( $entry['wsg_telefone_link'] ) ) {
										$wsg_telefone_link = $entry['wsg_telefone_link'];
									}
									if ( isset( $entry['wsg_telefone_icone'] ) ) {
										$wsg_telefone_icone = $entry['wsg_telefone_icone'];
									}
							?>
								<li>
									<a href="<?php echo $wsg_telefone_link; ?>">
										<?php if ( $wsg_telefone_icone == "phone-1" ){ ?>
											<span class="flaticon-phone-2"></span>
											<p>
												<span>Telefone</span>
										<?php } else { ?>
											<span class="flaticon-whatsapp-2"></span>
											<p>
												<span>Whatsapp</span>
										<?php } ?>
											<?php echo $wsg_telefone_nmr; ?>
										</p>
									</a>
								</li>
							<?php } ?>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="wq-copyright">
			<div class="container">
				<div class="row">
					<?php echo wpautop(get_post_meta( $id_sobre, 'wsg_sobre_footer_copyright', true )); ?>
					<?php echo wpautop(get_post_meta( $id_admin, 'agency_setting_footer_site_content', true )); ?>
				</div>
			</div>
		</div>
	</footer>

	<?php
		$id_google = get_page_by_path( 'configuracoes-do-google', OBJECT, 'gerais' )->ID;

		echo get_post_meta( $id_google, 'script_analytics', true );
	?>

	<script src="<?php bloginfo('template_url') ?>/js-template/footer-load.js"></script>

	<?php wp_footer(); ?>

</body>
</html>