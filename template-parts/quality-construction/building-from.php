<?php 

/*
	Из чего мы строим дома и коттеджи
*/

 ?>

<div class="section building-from">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<div class="building-from__text">
					<h2 class="section-title">
						<?php the_field( 'building_from_title' ); ?>
					</h2>
					<?php the_field( 'building_from_text' ); ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="building-from__img">
					<?php if ( get_field( 'building_from_img' ) ) { ?>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhrwABAIAAAP///wAAACH5BAEAAAEALAAAAACvAAEAAAIMjI+py+0Po5y0WlQAADs=" data-src="<?php the_field( 'building_from_img' ); ?>" title="постройка элитных домов в Севастополе" alt="Дом, построенный компанией Luks в Севастополе под ключ" />
					<?php } ?>
				</div>
			</div>
			<div class="col-12">
				<div class="building-from__text--2">
					<?php the_field( 'building_from_text_2' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>