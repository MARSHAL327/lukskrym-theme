<?php 

/*
	Строительство частных домов в Крыму
*/

 ?>

<div class="section section-about-shell-houses about-quality-construction">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<div class="shell-houses-img about-quality-construction__img">
					<?php if ( get_field( 'about_quality_construction_img' ) ) { ?>
						<img src="<?php the_field( 'about_quality_construction_img' ); ?>" alt="<?php the_title(); ?> в Севастополе" title="<?php the_title(); ?> Севастополь" />
					<?php } ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="shell-houses-description about-quality-construction__text">
					<?php the_field( 'about_quality_construction_text' ); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="about-quality-construction__text--2">
					<?php the_field( 'about_quality_construction_text_2' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>