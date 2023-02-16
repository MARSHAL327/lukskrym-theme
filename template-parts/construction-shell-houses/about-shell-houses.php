<?php 

/*
	О строительстве домов из ракушечника (первый экран)
*/

 ?>

<div class="section section-about-shell-houses">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-xl-6">
				<?php if ( get_field( 'about_shell_houses_img' ) ) { ?>
					<div class="shell-houses-img">
						<img src="<?php the_field( 'about_shell_houses_img' ); ?>" alt="<?php the_title(); ?>" />
					</div>
				<?php } ?>
			</div>
			<div class="col-lg-7 col-xl-6">
				<div class="shell-houses-description">
					<?php the_field( 'about_shell_houses_text' ); ?>
				</div>
				<div class="shell-houses-advantages">
					
					<?php if ( have_rows( 'shell_advantages' ) ) : ?>
						<?php while ( have_rows( 'shell_advantages' ) ) : the_row(); ?>

							<div class="shell-houses-advantages__item">
								<div class="icon">
									<?php if ( get_sub_field( 'shell_advantage_icon' ) ) { ?>
										<img src="<?php the_sub_field( 'shell_advantage_icon' ); ?>" alt="<?php the_sub_field( 'shell_advantage_text' ); ?>" />
									<?php } ?>
								</div>
								<div class="title">
									<?php the_sub_field( 'shell_advantage_text' ); ?>
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