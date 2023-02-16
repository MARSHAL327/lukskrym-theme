<?php 

/*
	Почему мы лучшие в своем деле
*/

 ?>

<div class="section why-we-best">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="why-we-best__text">
					<?php the_field( 'why_we_best_text' ); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xxl-6">
				<div class="why-we-best__text--2">
					<?php the_field( 'why_we_best_text_2' ); ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="why-we-best__img">
					<?php if ( get_field( 'why_we_best_img' ) ) { ?>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhrwABAIAAAP///wAAACH5BAEAAAEALAAAAACvAAEAAAIMjI+py+0Po5y0WlQAADs=" data-src="<?php the_field( 'why_we_best_img' ); ?>" alt="<?php the_title(); ?>" />
					<?php } ?>
				</div>
			</div>
		</div>
	</div>
</div>