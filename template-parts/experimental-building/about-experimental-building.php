<?php 

/*
	Экспериментальное строительство (первый экран)
*/

 ?>

<div class="section section-about-shell-houses section-about-experimental-building">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<?php if ( get_field( 'about_experimental_building_img' ) ) { ?>
					<div class="shell-houses-img aerated-concrete-img">
						<img src="<?php the_field( 'about_experimental_building_img' ); ?>" alt="<?php the_title(); ?>" />
					</div>
				<?php } ?>
			</div>
			<div class="col-xxl-6">
				<div class="shell-houses-description about-wood-concrete-description">
					<?php the_field( 'about_experimental_building_text' ); ?>
				</div>
			</div>
			<div class="col-12">
				<div class="about-wood-concrete-description-2">
					<?php the_field( 'about_experimental_building_text_2' ); ?>
				</div>
			</div>
		</div>

		<div class="row row-2 align-items-center">
			<div class="col-xxl-6">
				<div class="about-wood-concrete-description-3">
					<?php the_field( 'about_experimental_building_text_3' ); ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<?php if ( get_field( 'about_experimental_building_img_2' ) ) { ?>
					<div class="shell-houses-img aerated-concrete-img">
						<img src="<?php the_field( 'about_experimental_building_img_2' ); ?>" alt="<?php the_title(); ?>" />
					</div>
				<?php } ?>
			</div>
		</div>

		<div class="row align-items-center">
			<div class="col-xxl-6">
				<?php if ( get_field( 'about_experimental_building_img_3' ) ) { ?>
					<div class="shell-houses-img aerated-concrete-img">
						<img src="<?php the_field( 'about_experimental_building_img_3' ); ?>" alt="<?php the_title(); ?>" />
					</div>
				<?php } ?>
			</div>
			<div class="col-xxl-6">
				<div class="about-wood-concrete-description-3">
					<?php the_field( 'about_experimental_building_text_4' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>