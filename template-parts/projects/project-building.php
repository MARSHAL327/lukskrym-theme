<?php 

/*
	ПОЧЕМУ СТРОИТЕЛЬСТВО ДОМА СТОИТ НАЧАТЬ С РАЗРАБОТКИ ПРОЕКТА?
*/

 ?>

<?php if ( have_rows( 'project_building_group' ) ) : ?>
	<?php while ( have_rows( 'project_building_group' ) ) : the_row(); ?>

		<div class="section-project-building">
			<div class="container">
				<div class="row">
					<div class="col-xxl-6">
						<div class="project-building-text project-building-text--first">
							<?php the_sub_field( 'project_building_text_1' ); ?>
						</div>
					</div>

					<div class="col-xxl-6">
						<div class="project-building-img project-building-img--first">
							<?php if ( get_sub_field( 'project_building_group_img_1' ) ) { ?>
								<img class="lazy" src="data:image/gif;base64,R0lGODlhBAADAIAAAP///wAAACH5BAEAAAEALAAAAAAEAAMAAAIDjI9WADs=" data-src="<?php the_sub_field( 'project_building_group_img_1' ); ?>" alt="Проект дома" />
							<?php } ?>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-xxl-6">
						<div class="project-building-img">
							<?php if ( get_sub_field( 'project_building_group_img_2' ) ) { ?>
								<img class="lazy" src="data:image/gif;base64,R0lGODlhCAAFAIAAAP///wAAACH5BAEAAAEALAAAAAAIAAUAAAIFjI+py1gAOw==" data-src="<?php the_sub_field( 'project_building_group_img_2' ); ?>" alt="Проект дома" />
							<?php } ?>
						</div>
					</div>
					<div class="col-xxl-6">
						<div class="project-building-text">
							<?php the_sub_field( 'project_building_text_2' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>

	<?php endwhile; ?>
<?php else : ?>
	<?php // no rows found ?>
<?php endif; ?>