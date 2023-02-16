<?php 

/*
	Выбирая нас вы получаете
*/


 ?>

<div class="section section-advantages">
	<div class="advantages-row">
		<div class="advantages">

			<div class="section-title text-centerh2">
				<?php the_field( 'section_advantages_title' ); ?>
			</div>

			<?php if ( have_rows( 'advantages' ) ) : ?>
				<?php while ( have_rows( 'advantages' ) ) : the_row(); ?>

					<div class="advantages-item">
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

		<?php get_template_part('template-parts/home/roadmap'); ?>

	</div>
</div>