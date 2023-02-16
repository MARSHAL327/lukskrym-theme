<?php 

/*
	Специфика региона
*/

 ?>

<div class="section section-region-specifics paraxify">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-title">
					<?php the_field( 'region_specifics_title' ); ?>
				</h2>
				<div class="region-specifics">
					<?php the_field( 'region_specifics_text' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>