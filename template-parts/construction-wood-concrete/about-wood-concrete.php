<?php 

/*
	Строительство из арболита (первый экран)
*/

 ?>

<div class="section section-about-shell-houses section-about-wood-concrete">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<?php if ( get_field( 'about_wood_concrete_img' ) ) { ?>
					<div class="shell-houses-img aerated-concrete-img">
						<img src="<?php the_field( 'about_wood_concrete_img' ); ?>" alt="<?php the_title(); ?>" />
					</div>
				<?php } ?>
			</div>
			<div class="col-xxl-6">
				<div class="shell-houses-description about-wood-concrete-description">
					<?php the_field( 'about_wood_concrete_text' ); ?>
				</div>
			</div>
			<div class="col-12">
				<div class="about-wood-concrete-description-2">
					<?php the_field( 'about_wood_concrete_text_2' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>