<?php 

/*
	Строительство частных домов в Крыму
*/

 ?>

<div class="section section-about-shell-houses about-individual-design">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<div class="shell-houses-img about-individual-design__img">
					<?php if ( get_field( 'about_individual_design_img' ) ) { ?>
						<img src="<?php the_field( 'about_individual_design_img' ); ?>" alt="<?php the_title(); ?>" />
					<?php } ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="shell-houses-description about-individual-design__text">
					<?php the_field( 'about_individual_design_text' ); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="about-individual-design__text--2">
					<?php the_field( 'about_individual_design_text_2' ); ?>
				</div>
			</div>
		</div>

		<div class="row row--3">
			<div class="col-xxl-6">
				<div class="about-individual-design__text--3">
					<?php the_field( 'about_individual_design_text_3' ); ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="about-individual-design__img--3">
					<?php if ( get_field( 'about_individual_design_img_3' ) ) { ?>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhrwABAIAAAP///wAAACH5BAEAAAEALAAAAACvAAEAAAIMjI+py+0Po5y0WlQAADs=" data-src="<?php the_field( 'about_individual_design_img_3' ); ?>" alt="Проект дома" />
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>