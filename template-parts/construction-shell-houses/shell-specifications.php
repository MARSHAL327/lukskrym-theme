<?php 

/*
	Состав и технические характеристики
*/

 ?>

<div class="section section-shell-specifications">
	<div class="container">
		<div class="shell-specifications">
			<div class="row">
				<div class="col-lg-6">
					<div class="shell-specifications-title">
						<h3 class="section-title">
							<?php the_field( 'shell_specifications_title' ); ?>
						</h3>
					</div>
					<div class="shell-specifications-description">
						<?php the_field( 'shell_specifications_text' ); ?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="shell-specifications-img">
						<?php if ( get_field( 'shell_specifications_img' ) ) { ?>
							<img class="lazy" src="data:image/gif;base64,R0lGODlhQgAlAIAAAP///wAAACH5BAEAAAEALAAAAABCACUAAAIyjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMfgoAOw==" data-src="<?php the_field( 'shell_specifications_img' ); ?>" alt="<?php the_field( 'shell_specifications_title' ); ?>" />
						<?php } ?>
					</div>
				</div>
			</div>
		</div>

		<div class="shell-specifications shell-use">
			<div class="row">
				<div class="col-lg-6">
					<div class="shell-specifications-img">
						<?php if ( get_field( 'shell_use_img' ) ) { ?>
							<img class="lazy" src="data:image/gif;base64,R0lGODlhQgAlAIAAAP///wAAACH5BAEAAAEALAAAAABCACUAAAIyjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMfgoAOw==" data-src="<?php the_field( 'shell_use_img' ); ?>" alt="<?php the_field( 'shell_use_title' ); ?>" />
						<?php } ?>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="shell-specifications-title">
						<h3 class="section-title">
							<?php the_field( 'shell_use_title' ); ?>
						</h3>
					</div>
					<div class="shell-specifications-description">
						<?php the_field( 'shell_use_text' ); ?>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>