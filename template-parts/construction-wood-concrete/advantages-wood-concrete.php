<?php 

/*
	Достоинства арболита
*/

 ?>

<div class="section section-advantages-wood-concrete">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<div class="advantages-wood-concrete-text">
					<h2 class="section-title">
						<?php the_field( 'advantages_wood_concrete_title' ); ?>
					</h2>
					<div class="advantages-ceramic-blocks__text">
						<?php the_field( 'advantages_wood_concrete_text' ); ?>
					</div>
				</div>
			</div>
			<div class="col-xxl-6">
				<?php if ( get_field( 'advantages_wood_concrete_img' ) ) { ?>
					<div class="advantages-wood-concrete-img">
						<img class="lazy" src="data:image/gif;base64,R0lGODlhQQAsAIAAAP///wAAACH5BAEAAAEALAAAAABBACwAAAI4jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvPpKAAAOw==" data-src="<?php the_field( 'advantages_wood_concrete_img' ); ?>" alt="<?php the_field( 'advantages_wood_concrete_title' ); ?>" />
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
</div>