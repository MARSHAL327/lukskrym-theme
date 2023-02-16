<?php 

/*
	Наша команда
*/

 ?>

<div class="section section-team">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-title">
					<?php the_field( 'section_team_title' ); ?>
				</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="team-wrapper">
					
					<?php if ( have_rows( 'team_memebers' ) ) : ?>
						<?php while ( have_rows( 'team_memebers' ) ) : the_row(); ?>

							<div class="team-item wow fadeIn">
								<div class="team-item__img">
									<?php if ( get_sub_field( 'team_memeber_img' ) ) { ?>
										<img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php the_sub_field( 'team_memeber_img' ); ?>" alt="<?php the_sub_field( 'team_memeber_name' ); ?>" />
									<?php } ?>
								</div>
								<div class="team-item__name">
									<?php the_sub_field( 'team_memeber_name' ); ?>
								</div>
								<div class="team-item__position">
									<?php the_sub_field( 'team_memeber_position' ); ?>
								</div>
							</div>

						<?php endwhile; ?>
					<?php else : ?>
						<?php // no rows found ?>
					<?php endif; ?>

				</div>
			</div>

			<div class="col-10 offset-1">
				<div class="owl-carousel carousel-team">
					
					<?php if ( have_rows( 'team_memebers' ) ) : ?>
						<?php while ( have_rows( 'team_memebers' ) ) : the_row(); ?>

							<div class="team-item">
								<div class="team-item__img">
									<?php if ( get_sub_field( 'team_memeber_img' ) ) { ?>
										<img class="owl-lazy" data-src="<?php the_sub_field( 'team_memeber_img' ); ?>" alt="<?php the_sub_field( 'team_memeber_name' ); ?>" />
									<?php } ?>
								</div>
								<div class="team-item__name">
									<?php the_sub_field( 'team_memeber_name' ); ?>
								</div>
								<div class="team-item__position">
									<?php the_sub_field( 'team_memeber_position' ); ?>
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