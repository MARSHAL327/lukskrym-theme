<?php 

/*
	Достоинства керамоблоков
*/

 ?>

<div class="section section-advantages-ceramic-blocks">
	<div class="container">
		<div class="advantages-ceramic-blocks">
			<div class="row">
				<div class="col-xxl-6">
					<h2 class="section-title">
						<?php the_field( 'advantages_ceramic_blocks_title' ); ?>
					</h2>
					<div class="advantages-ceramic-blocks__text">
						<?php the_field( 'advantages_ceramic_blocks_text' ); ?>
					</div>
				</div>
				<div class="col-xxl-6">
					<?php if ( get_field( 'advantages_ceramic_blocks_img' ) ) { ?>
						<div class="advantages-ceramic-blocks__img">
							<img class="lazy" src="data:image/gif;base64,R0lGODlhrwB0AIAAAP///wAAACH5BAEAAAEALAAAAACvAHQAAAKvjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zMxcAAA7" data-src="<?php the_field( 'advantages_ceramic_blocks_img' ); ?>" alt="<?php the_field( 'advantages_ceramic_blocks_title' ); ?>" />
						</div>
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="differences-from-brick">
			<div class="row">
				<div class="col-12">
					<h2 class="section-title">
						<?php the_field( 'differences_from_brick_title' ); ?>
					</h2>
					<?php the_field( 'differences_from_brick_text' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>