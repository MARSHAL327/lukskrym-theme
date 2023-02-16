<?php 

/*
	О компании
*/


 ?>

<div class="section section-about-company">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center wow fadeInDown">
				<h2 class="section-title">
					<?php the_field( 'about_company_title' ); ?>
				</h2>
			</div>
		</div>

		<div class="about-company">
			<div class="row">
				<div class="col-xl-6">
					<div class="about-company__img">
						<?php if ( get_field( 'about_company_img' ) ) { ?>
							<img class="lazy" src="data:image/gif;base64,R0lGODlhAwACAIAAAP///wAAACH5BAEAAAEALAAAAAADAAIAAAICjF8AOw==" data-src="<?php the_field( 'about_company_img' ); ?>" alt="Строительная компания Luks в Севастополе" />
						<?php } ?>
					</div>
				</div>
				<div class="col-xl-6">
					<div class="about-company__description">
						<?php the_field( 'about_company_text' ); ?>
						<a href="<?php echo site_url() . '/about/' ?>" class="button">Читать подробнее</a>
					</div>
				</div>

				<div class="col-12 text-center about-company__btn">
					<a href="<?php echo site_url() . '/about/' ?>" class="button">Читать подробнее</a>
				</div>
			</div>
		</div>
	</div>
</div>