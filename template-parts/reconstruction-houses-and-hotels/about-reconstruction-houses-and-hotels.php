<?php 

/*
	Реконструкция домов и отелей (первый экран)
*/

 ?>

<div class="section section-about-shell-houses section-about-reconstruction-houses-and-hotels">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<?php if ( get_field( 'about_reconstruction_houses_and_hotels_img' ) ) { ?>
					<div class="shell-houses-img about-reconstruction-houses-and-hotels-img">
						<img src="<?php the_field( 'about_reconstruction_houses_and_hotels_img' ); ?>" alt="<?php the_title(); ?>" />
					</div>
				<?php } ?>
			</div>
			<div class="col-xxl-6">
				<div class="shell-houses-description about-reconstruction-houses-and-hotels-text">
					<?php the_field( 'about_reconstruction_houses_and_hotels_text' ); ?>
				</div>
			</div>
			<div class="col-12">
				<div class="about-reconstruction-houses-and-hotels-text--2">
					<?php the_field( 'about_reconstruction_houses_and_hotels_text_2' ); ?>
				</div>
			</div>
			<div class="col-xl-8 offset-xl-2">
				<div class="about-reconstruction-houses-and-hotels-text--3">
					<?php the_field( 'about_reconstruction_houses_and_hotels_text_3' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>