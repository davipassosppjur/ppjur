<?php
	get_header();

	$id_page = get_page_by_path( 'contato', OBJECT, 'page' )->ID;

	$id_telefones = get_page_by_path( 'telefones', OBJECT, 'contatos' )->ID;
	$id_email = get_page_by_path( 'email', OBJECT, 'contatos' )->ID;
	$id_endereco = get_page_by_path( 'endereco', OBJECT, 'contatos' )->ID;

	$wsg_contato_widget = get_post_meta($id_page, 'wsg_contato_widget', true);
?>

	<?php include "inc-breadcrumbs.php"; ?>

	<section class="wq-01-contato">
		<div class="container">
			<div class="row">
				<div class="col-xl-3 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="wq-titulo_1">
						<h3><?php echo get_post_meta( $id_page, 'wsg_contato_01_titulo', true ); ?></h3>
					</div>
				</div>
				<div class="col-xl-9 col-lg-12 col-md-12 col-sm-12 col-12">
					<div class="wq-new-contato">
						<?php echo do_shortcode('[wpforms id="403" title="false"]'); ?><!-- {admin_email} -->

						<!-- <form action="#" onsubmit="return submitFormWithRecaptcha(this);" class="contact-form" method="POST">

							<input type="hidden" name="subject_email" value="Enviado pelo site">
							<input required type="hidden" name="title_email" value="Contato enviado pelo formulário da página: <?php the_title(); ?>">

							<input type="hidden" name="label-send-data-name" value="Nome">
							<input required type="text" name="send-data-name" placeholder="Qual é o seu nome?">

							<div class="row">
								<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
									<input type="hidden" name="label-send-data-phone" value="Telefone">
									<input required type="text" name="send-data-phone" placeholder="Qual é o seu telefone?" class="inputphone">
								</div>
								<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
									<input type="hidden" name="label-send-data-email" value="Email">
									<input required type="email" name="send-data-email" placeholder="Qual é o seu melhor email?">
								</div>
							</div>

							<input type="hidden" name="label-send-data-message" value="Mensagem">
							<textarea name="label-send-data-message" placeholder="Deixe sua mensagem..."></textarea>

							<?php if (strlen($wsg_contato_widget) > 0) { ?>
								<div class="g-recaptcha invisible-recaptcha" id="recaptcha-<?php echo md5(uniqid(rand(), true)); ?>" data-sitekey="<?php echo $wsg_contato_widget; ?>" data-size="invisible"></div>
							<?php } ?>

							<button class="wq-btn_1" type="submit">Enviar</button>
						</form> -->
						<div class="wq-conteudo">
							<p class="wq-contato">
								<a href="<?php echo wpautop(get_post_meta( $id_endereco, 'wsg_endereco_link', true )); ?>">
									<span class="flaticon-placeholder-1"></span>
									<?php echo get_post_meta( $id_endereco, 'wsg_endereco', true ); ?>
								</a>
								<?php
									$wsg_emails = get_post_meta( $id_email, 'wsg_emails', true );
									foreach ( (array) $wsg_emails as $key => $email ) {
								?>
									<a href="mailto:<?php echo $email; ?>" target="_blank">
										<span class="flaticon-mail-1"></span>
										<?php echo $email; ?>
									</a>
								<?php } ?>
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
									<a href="<?php echo $wsg_telefone_link; ?>" target="_blank">
										<span class="flaticon-<?php echo $wsg_telefone_icone; ?>"></span>
										<?php echo $wsg_telefone_nmr; ?>
									</a>
								<?php } ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<?php if($wsg_contato_01_mapa = get_post_meta( $id_page, 'wsg_contato_01_mapa', true )){ ?>
		<section class="wq-mapa">
			<?php echo $wsg_contato_01_mapa; ?>
		</section>
	<?php } ?>

<?php get_footer(); ?>