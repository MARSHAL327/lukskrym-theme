<?php 

/*
	Обратившись в Luks, Вы сможете:
*/

 ?>

<div class="section section-contact-us">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center wow fadeInDown">
				<h2 class="section-title">
					<?php the_field( 'contact_us_title' ); ?>
				</h2>
			</div>
		</div>

		<div class="contact-us">
			<div class="row">
				
				<?php if ( have_rows( 'contact_us' ) ) : ?>
					<?php while ( have_rows( 'contact_us' ) ) : the_row(); ?>

						<div class="col-md-6 col-xl-3">
							<div class="contact-us__item">
								<div class="icon">
									<?php if ( get_sub_field( 'contact_us_icon' ) ) { ?>
										<img src="<?php the_sub_field( 'contact_us_icon' ); ?>" alt="<?php the_sub_field( 'contact_us_text' ); ?>" />
									<?php } ?>
								</div>
								<div class="title">
									<?php the_sub_field( 'contact_us_text' ); ?>
								</div>
							</div>
						</div>

					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>

			</div>
		</div>
	</div>
</div>