<?php 


/*
	Выбирая нас, вы получите
*/


 ?>

<div class="section section-choose-us">
	<div class="container">
		<div class="row">
			<div class="col-12 col-xl-6">
				<h2 class="section-title">
					<?php the_field( 'choose_us_title' ); ?>
				</h2>

				<div class="choose-us-list">	
					<?php if ( have_rows( 'choose_us_list' ) ) : ?>
						<?php while ( have_rows( 'choose_us_list' ) ) : the_row(); ?>

							<div class="choose-us-list__item">
								<div class="icon">
									<?php if ( get_sub_field( 'choose_us_list_item_icon' ) ) { ?>
										<img src="<?php the_sub_field( 'choose_us_list_item_icon' ); ?>" alt="<?php the_sub_field( 'choose_us_list_item_text' ); ?>" />
									<?php } ?>
								</div>
								<div class="title">
									<?php the_sub_field( 'choose_us_list_item_text' ); ?>
								</div>
							</div>

						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>
				</div>
			</div>

			<div class="d-none d-xl-block col-xl-6">
				<?php if ( get_field( 'choose_us_img' ) ) { ?>
					<div class="choose-us-img">
						<img src="<?php the_field( 'choose_us_img' ); ?>" alt="<?php the_field( 'choose_us_title' ); ?>" />
					</div>
				<?php } ?>
			</div>

		</div>
	</div>
</div>