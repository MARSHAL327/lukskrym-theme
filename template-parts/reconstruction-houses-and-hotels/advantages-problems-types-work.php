<?php 

/*
	Плюсы, проблемы, виды работ
*/

 ?>

<div class="section section-advantages-problems-types-work">
	<div class="container">
		<div class="row">
			<div class="col-xl-10 offset-xl-1 col-xxl-8 offset-xxl-2">
				<div class="advantages-problems-types-work">
					<?php the_field( 'advantages_problems_types_work' ); ?>
				</div>
			</div>
		</div>

		<div class="types-work">
			<div class="row align-items-center">
				<div class="col-xxl-6">
					<div class="types-work__img">
						<?php if ( get_field( 'types_work_img' ) ) { ?>
							<img class="lazy" src="data:image/gif;base64,R0lGODlhIQATAIAAAP///wAAACH5BAEAAAEALAAAAAAhABMAAAIXjI+py+0Po5y02ouz3rz7D4biSJYmWQAAOw==" data-src="<?php the_field( 'types_work_img' ); ?>" alt="Виды работ по реконструкции" />
						<?php } ?>
					</div>
				</div>
				<div class="col-xxl-6">
					<div class="types-work__text">
						<?php the_field( 'advantages_problems_types_work_2' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
