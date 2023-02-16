<?php 


/*
	Выбираем форму и материал для строительства загородных домов и отелей
*/


 ?>

<div class="section section-construction-types">
	<div class="container">
		<div class="construction-types">
			<div class="row">
				
				<?php if ( have_rows( 'construction_types',1361 ) ) : ?>
					<?php while ( have_rows( 'construction_types' ,1361 ) ) : the_row(); ?>

						<div class="col-lg-6 wow fadeIn">
							<div class="construction-types__item">
								<a href="<?php the_sub_field( 'construction_type_url' ); ?>" class="types-url">
									<?php if ( get_sub_field( 'construction_type_img' ) ) { ?>
										<img src="<?php the_sub_field( 'construction_type_img' ); ?>" alt="<?php the_sub_field( 'construction_type_title' ); ?>" />
									<?php } ?>
									<h3 class="types-title">
										<?php the_sub_field( 'construction_type_title' ); ?>
									</h3>
								</a>
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