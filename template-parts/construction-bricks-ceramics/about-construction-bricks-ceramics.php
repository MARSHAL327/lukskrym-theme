<?php 

/*
	Строительство из кирпича и керамики (первый экран)
*/

 ?>

<div class="section section-about-shell-houses section-about-aerated-concrete section-about-construction-monolithic section-about-construction-bricks-ceramics">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<?php if ( get_field( 'about_construction_bricks_ceramics_img' ) ) { ?>
					<div class="shell-houses-img aerated-concrete-img">
						<img src="<?php the_field( 'about_construction_bricks_ceramics_img' ); ?>" alt="<?php the_title(); ?>" />
					</div>
				<?php } ?>
			</div>
			<div class="col-xxl-6">
				<div class="shell-houses-description construction-bricks-ceramics-description">
					<?php the_field( 'about_construction_bricks_ceramics_text' ); ?>
				</div>
			</div>

			<div class="col-xxl-8 offset-xxl-2">
				<div class="construction-bricks-ceramics-table">
					<?php the_field( 'about_construction_bricks_ceramics_text_2' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>