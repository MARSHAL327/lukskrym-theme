<?php 

/*
	Что важно при строительстве дома
*/

 ?>

<div class="section important-construction">
	<div class="container">
		<div class="row row--1">
			<div class="col-xxl-6">
				<h2 class="section-title">
					<?php the_field( 'important_construction_title' ); ?>
				</h2>
				<div class="important-construction__text">
					<?php the_field( 'important_construction_text' ); ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="important-construction__img">
					<?php if ( get_field( 'important_construction_img' ) ) { ?>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhjABZAIAAAP///wAAACH5BAEAAAEALAAAAACMAFkAAAKEjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+Qka2lMAADs=" data-src="<?php the_field( 'important_construction_img' ); ?>" title="<?php the_title(); ?> город севастополь и Крым" alt="<?php the_title(); ?> севастополь" />
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="row row--2">
			<div class="col-xxl-6">
				<div class="important-construction__img--2">
					<?php if ( get_field( 'important_construction_img_2' ) ) { ?>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhjABZAIAAAP///wAAACH5BAEAAAEALAAAAACMAFkAAAKEjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+Qka2lMAADs=" data-src="<?php the_field( 'important_construction_img_2' ); ?>" alt="<?php the_title(); ?>" />
					<?php } ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="important-construction__text--2">
					<?php the_field( 'important_construction_text_2' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>