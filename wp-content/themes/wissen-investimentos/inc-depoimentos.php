
	<section class="wq-07">
		<div class="container">
			<div class="wq-carousel_depoimentos">
				<?php
					$arrayQueryDepoimentos = array(
						'post_type'				=> array( 'depoimentos192' ),
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page'		=> '-1',
					);
					$queryDepoimentos = new WP_Query($arrayQueryDepoimentos);
					while ( $queryDepoimentos->have_posts()) {
						$queryDepoimentos->the_post();
				?>
					<div class="wq-depoimentos_item">
						<figure>
							<?php
								$wsg_depoimento_item_img_id = get_post_meta( get_the_ID(), 'wsg_depoimento_item_img_id', true );
								getImageThumb($wsg_depoimento_item_img_id,'120x120');
							?>
						</figure>
						<h3><?php the_title(); ?></h3>
						<?php echo wpautop(get_post_meta( get_the_ID(), 'wsg_depoimento_item_conteudo', true )); ?>
					</div>
				<?php }wp_reset_query(); ?>
			</div>
		</div>
	</section>