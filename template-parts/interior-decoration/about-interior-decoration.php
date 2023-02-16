<?php 

/*
	Внутренняя отделка
*/

 ?>

<div class="section section-about-shell-houses about-interior-decoration">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<div class="shell-houses-img about-interior-decoration__img">
					<?php if ( get_field( 'about_interior_decoration_img' ) ) { ?>
						<img src="<?php the_field( 'about_interior_decoration_img' ); ?>" alt="<?php the_title(); ?>" />
					<?php } ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="shell-houses-description about-interior-decoration__text">
					<?php the_field( 'about_interior_decoration_text' ); ?>
				</div>
			</div>
		</div>

		<div class="which-includes">
			<div class="row">
				<div class="col-xxl-6">
					<div class="which-includes__text">
						<?php the_field( 'which_includes_text' ); ?>
					</div>
				</div>
				<div class="col-xxl-6">
					<div class="which-includes__img">
						<?php if ( get_field( 'which_includes_img' ) ) { ?>
							<img class="lazy" src="data:image/gif;base64,R0lGODlhrwABAIAAAP///wAAACH5BAEAAAEALAAAAACvAAEAAAIMjI+py+0Po5y0WlQAADs=" data-src="<?php the_field( 'which_includes_img' ); ?>" alt="<?php the_title(); ?>" />
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
