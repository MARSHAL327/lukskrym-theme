<?php 

/*
	Что важно при выборе проектировщика
*/

 ?>

<div class="section designers-choice">
	<div class="container">

		<div class="row">
			<div class="col-12">
				<div class="designers-choice__text">
					<?php the_field( 'designers_choice_text' ); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xxl-6">
				<div class="designers-choice__text--2">
					<?php the_field( 'designers_choice_text_2' ); ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="designers-choice__img--2">
					<?php if ( get_field( 'designers_choice_img' ) ) { ?>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhrwABAIAAAP///wAAACH5BAEAAAEALAAAAACvAAEAAAIMjI+py+0Po5y0WlQAADs=" data-src="<?php the_field( 'designers_choice_img' ); ?>" alt="Проект дома" />
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="designers-choice__text--3">
					<?php the_field( 'designers_choice_text_3' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section section-region-specifics paraxify">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="region-specifics">
					<?php the_field( 'designers_choice_text_4' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="section example-sections-projects">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="example-sections-projects__text">
					<?php the_field( 'example_sections_projects' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>