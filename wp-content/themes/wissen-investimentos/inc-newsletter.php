<?php
	$id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;
	$id_contato = get_page_by_path( 'contato', OBJECT, 'page' )->ID;

	$wsg_contato_widget = get_post_meta($id_contato, 'wsg_contato_widget', true);
?>

	<section class="wq-06">
		<div class="container">
			<div class="row">
				<div class="col-xl-4 col-lg-5 col-md-6 col-sm-12 col-12">
					<div class="wq-titulo_1">
						<h3 data-aos="fade-up"><?php echo get_post_meta( $id_home, 'wsg_newsletter_titulo', true ); ?></h3>
					</div>
				</div>
				<div class="col-xl-8 col-lg-7 col-md-6 col-sm-12 col-12">
					<div class="wq-form" data-aos="fade-down">
						<?php echo do_shortcode('[wpforms id="406" title="false"]'); ?>
						<!-- <form action="#" onsubmit="return submitFormWithRecaptcha(this);" class="contact-form" method="POST">

							<input type="hidden" name="subject_email" value="Newsletter enviado pelo site">
							<?php if (is_post_type_archive('servicos192')) { ?>
								<input required type="hidden" name="title_email" value="Contato enviado pelo formulário da página de serviços">
							<?php } elseif (is_post_type_archive('eventos192')) { ?>
								<input required type="hidden" name="title_email" value="Contato enviado pelo formulário da página de eventos">
							<?php } else{ ?>
								<input required type="hidden" name="title_email" value="Contato enviado pelo formulário da página: <?php the_title(); ?>">
							<?php } ?>

							<input type="hidden" name="label-send-data-name" value="Nome">
							<input required type="text" name="send-data-name" placeholder="Nome completo">

							<input type="hidden" name="label-send-data-email" value="Email">
							<input required type="email" name="send-data-email" placeholder="Email">

							<input type="hidden" name="label-send-data-phone" value="Telefone">
							<input required type="text" name="send-data-phone" placeholder="Telefone" class="inputphone">

							<input type="hidden" name="label-send-data-patrimonio" value="Já possui conta na XP Investimentos?">
							<input required type="text" name="send-data-patrimonio" placeholder="Já possui conta na XP Investimentos?">

							<?php if (strlen($wsg_contato_widget) > 0) { ?>
								<div class="g-recaptcha invisible-recaptcha" id="recaptcha-<?php echo md5(uniqid(rand(), true)); ?>" data-sitekey="<?php echo $wsg_contato_widget; ?>" data-size="invisible"></div>
							<?php } ?>

							<button type="submit" class="wq-btn_1">Enviar</button>
						</form> -->
					</div>
				</div>
			</div>
		</div>
	</section>