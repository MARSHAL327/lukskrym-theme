<?php 

/*
	О строительстве домов из газобетона (первый экран)
*/

 ?>

<div class="section section-about-shell-houses section-about-aerated-concrete">
	<div class="container">
		<div class="row">
			<div class="col-xl-6">
				<?php if ( get_field( 'about_shell_houses_img' ) ) { ?>
					<div class="shell-houses-img aerated-concrete-img">
						<img src="<?php the_field( 'about_shell_houses_img' ); ?>" alt="<?php the_title(); ?>" />
					</div>
				<?php } ?>
			</div>
			<div class="col-xl-6">
				<div class="shell-houses-description">
					<?php the_field( 'about_aerated_concrete_text' ); ?>
				</div>
			</div>

			<div class="col-12">
				<?php the_field( 'about_aerated_concrete_text_2' ); ?>
			</div>
		</div>
	</div>
</div>