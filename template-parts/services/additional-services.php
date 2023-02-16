<?php 

/*
	Дополнительные услуги
*/


 ?>

<div class="section section-additional-services">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center wow fadeInDown">
				<h2 class="section-title">Дополнительные услуги</h2>
			</div>
		</div>

		<div class="additional-services">
			<div class="row">

				<?php $additional_services = get_field( 'additional_services' ); ?>

					<?php if ( $additional_services ): ?>

						<?php foreach ( $additional_services as $post ):  ?>
						<?php setup_postdata ( $post ); ?>

						<div class="col-md-6 col-xl-4 wow fadeIn">
							<div class="additional-services-item">
								<a class="additional-services-item__img" href="<?php the_permalink($post); ?>">
									<img class="lazy" scr="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAEALAAAAAAQAAkAAAIKjI+py+0Po5yUFQA7" data-src="<?php the_post_thumbnail_url( 'additional-services-item-img' ); ?>" alt="<?php the_title(); ?>" />
								</a>
								<h3 class="additional-services-item__title">
									<a href="<?php the_permalink($post); ?>">
										<?php the_title(); ?>
								</a></h3>
							</div>
						</div>

						<?php endforeach; ?>
						<?php wp_reset_postdata(); ?>

					<?php endif; ?>

			</div>
		</div>
	</div>
</div>