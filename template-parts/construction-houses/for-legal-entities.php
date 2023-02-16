<?php 

/*
	Для юридических лиц и организаций мы предлагаем
*/

 ?>

<div class="section section-for-legal-entities">
	<div class="container">
		<div class="for-legal-entities">
			<div class="row">
				<div class="col-lg-6">
					<?php if ( get_field( 'for_legal_entities_img' ) ) { ?>
						<img src="<?php the_field( 'for_legal_entities_img' ); ?>" alt="<?php the_field( 'for_legal_entities_title' ); ?>" />
					<?php } ?>
				</div>
				<div class="col-lg-6">
					<div class="for-legal-entities__description">
						<h2 class="section-title">
							<?php the_field( 'for_legal_entities_title' ); ?>
						</h2>
						<?php the_field( 'for_legal_entities_text' ); ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="for-legal-entities__text">
						<?php the_field( 'for_legal_entities_text_end' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>