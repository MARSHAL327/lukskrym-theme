<?php 

/*
	О монолитном строительстве (первый экран)
*/

 ?>

<div class="section section-about-shell-houses section-about-aerated-concrete section-about-construction-monolithic">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<?php if ( get_field( 'about_construction_monolithic_img' ) ) { ?>
					<div class="shell-houses-img aerated-concrete-img">
						<img src="<?php the_field( 'about_construction_monolithic_img' ); ?>" alt="<?php the_title(); ?>" />
					</div>
				<?php } ?>
			</div>
			<div class="col-xxl-6">
				<div class="shell-houses-description">
					<?php the_field( 'about_construction_monolithic_text' ); ?>
				</div>
			</div>

			<div class="col-12">
				<?php the_field( 'about_construction_monolithic_text_2' ); ?>
			</div>
		</div>
	</div>
</div>