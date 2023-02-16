<?php 

/*
	Сертификаты
*/


 ?>

<div class="section section-certificates">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="section-title">
					<?php the_field( 'certificates_title', 2 ); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-10 offset-1">
				<div class="owl-carousel carousel-certificates">

					<?php $certificates = get_field( 'certificates', 2 ); ?>

					<?php if ( $certificates ) :  ?>
						<?php foreach ( $certificates as $certificate ): ?>

							<div class="carousel-certificates__item">
								<a href="<?php echo esc_url($certificate['url']); ?>">
									<img class="owl-lazy" data-src="<?php echo wp_get_attachment_image_url($certificate['id'], 'medium'); ?>" alt="Сертификат соответствия" />
								</a>
							</div>

						<?php endforeach; ?>
					<?php endif; ?>

				</div>
			</div>
		</div>

	</div>
</div>