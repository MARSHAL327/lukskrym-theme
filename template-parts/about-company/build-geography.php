<?php 

/*
	География строительства
*/

 ?>

<div class="section section-build-geography">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-title wow fadeInDown">
					<?php the_field( 'build_geography_title' ); ?>
				</h2>
				<p class="section-description wow fadeInUp">
					<?php the_field( 'build_geography_text' ); ?>
				</p>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<?php get_template_part( 'template-parts/base/map-build-geography' ); ?>
			</div>
		</div>
	</div>
</div>