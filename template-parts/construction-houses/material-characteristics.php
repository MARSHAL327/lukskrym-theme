<?php 


/*
	Xарактеристики материалов
*/


 ?>

<div class="section section-material-characteristics">
	<div class="container">
		<div class="material-characteristics">
			<div class="row">
				<div class="col-lg-6 col-xl-7">
					<div class="material-characteristics__title">
						<h3 class="section-title wow fadeInDown">
							<?php the_field( 'material_characteristics_title' ); ?>
						</h3>
						<a href="<?php the_field( 'material_characteristics_url' ); ?>" class="button button-accent wow fadeInUp" download>Скачать</a>
					</div>
				</div>
				<div class="col-lg-6 col-xl-5">
					<div class="material-characteristics__img">
						<?php if ( get_field( 'material_characteristics_img' ) ) { ?>
							<img src="<?php the_field( 'material_characteristics_img' ); ?>" alt="<?php the_field( 'material_characteristics_title' ); ?>" />
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>