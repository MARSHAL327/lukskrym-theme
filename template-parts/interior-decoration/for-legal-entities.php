<?php 

/*
	Дополнительно для юридических лиц
*/

 ?>

<div class="section for-legal-entities">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<div class="for-legal-entities__img">
					<?php if ( get_field( 'for_legal_entities_img' ) ) { ?>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhrwABAIAAAP///wAAACH5BAEAAAEALAAAAACvAAEAAAIMjI+py+0Po5y0WlQAADs=" data-src="<?php the_field( 'for_legal_entities_img' ); ?>" alt="Для юридических лиц" />
					<?php } ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="for-legal-entities__text">
					<?php the_field( 'for_legal_entities_text' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>
