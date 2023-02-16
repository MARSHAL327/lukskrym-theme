<?php 

/*
	Преимущества работы с нами
*/

 ?>

<div class="section section-company-advantages">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-title">
					<?php the_field( 'section_advantages_title' ); ?>
				</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="company-advantages">
					
					<?php if ( have_rows( 'advantages' ) ) : ?>
						<?php while ( have_rows( 'advantages' ) ) : the_row(); ?>

							<div class="advantages-item wow fadeIn">
								<div class="advantages-item__icon">
									<?php if ( get_sub_field( 'advantage_icon' ) ) { ?>
										<img src="<?php the_sub_field( 'advantage_icon' ); ?>" alt="<?php the_sub_field( 'advantage_text' ); ?>" />
									<?php } ?>
								</div>
								<div class="advantages-item__title">
									<?php the_sub_field( 'advantage_text' ); ?>
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
</div>