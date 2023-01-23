<?php
	get_header();

	$id_page = get_page_by_path( 'simulacao', OBJECT, 'page' )->ID;
?>

	<?php include "inc-breadcrumbs.php"; ?>

	<section class="wq-03">
		<div class="container">
			<div class="wq-titulo_1">
				<h3><?php echo get_post_meta( $id_page, 'wsg_simulacao_01_titulo', true ); ?></h3>
			</div>
			<?php echo wpautop(get_post_meta( $id_page, 'wsg_simulacao_01_texto', true )); ?>
			
			<form action="#" onsubmit="return submitFormWithRecaptcha(this);" class="contact-form" method="POST">

				<input type="hidden" name="subject_email" value="Enviado pelo site">
				<input required="" type="hidden" name="title_email" value="Contato enviado pelo formulário da página: Simulação">


				<fieldset>
					<legend>Dados Pessoais</legend>
					<div class="row">
						<div class="col-xl-12">
							<input type="hidden" name="label-send-data-name" value="Nome">
							<input required="" type="text" name="send-data-name" placeholder="Nome">
						</div>
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<input type="hidden" name="label-send-data-email" value="Email">
							<input required="" type="email" name="send-data-email" placeholder="Email">
						</div>
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<input type="hidden" name="label-send-data-phone" value="Telefone">
							<input required="" type="text" name="send-data-phone" placeholder="Telefone" class="inputphone">
						</div>
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<input type="hidden" name="label-send-data-city" value="Cidade">
							<input required="" type="text" name="send-data-city" placeholder="Cidade">
						</div>
						<div class="col-xl-6 col-lg-12 col-md-12 col-sm-12 col-12">
							<input type="hidden" name="label-send-data-state" value="Estado">
							<input required="" type="text" name="send-data-state" placeholder="Estado">
						</div>
					</div>
				</fieldset>
				<fieldset>
					<legend>Dados do Veículo</legend>

					<input type="hidden" name="label-send-data-montadora" value="Montadora do Veículo">
					<input required="" type="text" name="send-data-montadora" placeholder="Montadora do Veículo (Ex.: Chevrolet):">

					<input type="hidden" name="label-send-data-modelo" value="Modelo do Veículo">
					<input required="" type="text" name="send-data-modelo" placeholder="Modelo do Veículo (Ex.: Onix):">

					<input type="hidden" name="label-send-data-ano" value="Ano do Modelo do Veículo">
					<input required="" type="text" name="send-data-ano" placeholder="Ano do Modelo do Veículo (Ex.: 2015):">

					<input type="hidden" name="label-send-data-motorizacao" value="Motorização do Veículo">
					<input required="" type="text" name="send-data-motorizacao" placeholder="Motorização do Veículo (Ex.: 1.6):">
				</fieldset>

				
				<?php if (!empty($wsg_contato_widget)) { ?>
					<div class="g-recaptcha invisible-recaptcha" id="recaptcha-<?php echo md5(uniqid(rand(), true)); ?>" data-sitekey="<?php echo $wsg_contato_widget; ?>" data-size="invisible"></div>
				<?php } ?>

				<button class="wq-btn_1" type="submit">Enviar</button>
			</form>
		</div>
	</section>

	<?php include "inc-newsletter.php"; ?>

<?php get_footer(); ?>