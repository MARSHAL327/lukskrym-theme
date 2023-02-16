<?php 

/*
	ПОЧЕМУ СТОИТ КУПИТЬ ПРОЕКТ ДОМА ИМЕННО У НАС?
*/

 ?>

<?php if ( have_rows( 'page_project_advantages' ) ) : ?>
	<?php while ( have_rows( 'page_project_advantages' ) ) : the_row(); ?>

	<div class="section-project-advantages">
		<div class="row">
			<div class="col-lg-6">
				<h2 class="section-title">
					<?php the_field( 'page_project_advantages_title' ); ?>
				</h2>

				<div class="advantages-item">
					<?php if ( get_sub_field( 'project_advantage_icon_1' ) ) { ?>
						<div class="advantages-item__icon">
							<img src="<?php the_sub_field( 'project_advantage_icon_1' ); ?>" alt="<?php the_sub_field( 'project_advantage_title_1' ); ?>" />
						</div>
					<?php } ?>

					<div class="advantages-item__description">
						<div class="title"><?php the_sub_field( 'project_advantage_title_1' ); ?></div>
						<p><?php the_sub_field( 'project_advantage_text_1' ); ?></p>
					</div>
				</div>

				<div class="advantages-item">
					<?php if ( get_sub_field( 'project_advantage_icon_2' ) ) { ?>
						<div class="advantages-item__icon">
							<img src="<?php the_sub_field( 'project_advantage_icon_2' ); ?>" alt="<?php the_sub_field( 'project_advantage_title_2' ); ?>" />
						</div>
					<?php } ?>

					<div class="advantages-item__description">
						<div class="title"><?php the_sub_field( 'project_advantage_title_2' ); ?></div>
						<p><?php the_sub_field( 'project_advantage_text_2' ); ?></p>
					</div>
				</div>
			</div>

			<div class="col-lg-6">
				<div class="advantages-item">
					<?php if ( get_sub_field( 'project_advantage_icon_3' ) ) { ?>
						<div class="advantages-item__icon">
							<img src="<?php the_sub_field( 'project_advantage_icon_3' ); ?>" alt="<?php the_sub_field( 'project_advantage_title_3' ); ?>" />
						</div>
					<?php } ?>

					<div class="advantages-item__description">
						<div class="title"><?php the_sub_field( 'project_advantage_title_3' ); ?></div>
						<p><?php the_sub_field( 'project_advantage_text_3' ); ?></p>
					</div>
				</div>

				<div class="advantages-item">
					<?php if ( get_sub_field( 'project_advantage_icon_4' ) ) { ?>
						<div class="advantages-item__icon">
							<img src="<?php the_sub_field( 'project_advantage_icon_4' ); ?>" alt="<?php the_sub_field( 'project_advantage_title_4' ); ?>" />
						</div>
					<?php } ?>

					<div class="advantages-item__description">
						<div class="title"><?php the_sub_field( 'project_advantage_title_4' ); ?></div>
						<p><?php the_sub_field( 'project_advantage_text_4' ); ?></p>
					</div>
				</div>

				<div class="advantages-item">
					<?php if ( get_sub_field( 'project_advantage_icon_5' ) ) { ?>
						<div class="advantages-item__icon">
							<img src="<?php the_sub_field( 'project_advantage_icon_5' ); ?>" alt="<?php the_sub_field( 'project_advantage_title_5' ); ?>" />
						</div>
					<?php } ?>

					<div class="advantages-item__description">
						<div class="title"><?php the_sub_field( 'project_advantage_title_5' ); ?></div>
						<p><?php the_sub_field( 'project_advantage_text_5' ); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>