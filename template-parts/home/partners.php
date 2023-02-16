<?php 

/*
	Наши партнеры
*/


 ?>

<div class="section section-partners">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="section-title">
					<?php the_field( 'partners_title' ); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-10 offset-1">
				<div class="owl-carousel carousel-partners">

					<?php $partners = get_field( 'partners' ); ?>

					<?php if ( $partners ) :  ?>
						<?php foreach ( $partners as $partner ): ?>

							<div class="carousel-partners__item">
								<img class="owl-lazy" data-src="<?php echo esc_url($partner['url']); ?>" alt="<?php echo esc_attr($partner['alt']); ?>" />
							</div>

						<?php endforeach; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>

	</div>
</div>