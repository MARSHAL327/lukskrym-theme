<?php 

/*
	Проблемы и причины реконструкции 
*/

 ?>

<div class="section section-problems-and-causes">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xxl-6">
				<div class="problems-and-causes-text">
					<?php the_field( 'problems_and_causes_text' ); ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="problems-and-causes-img">
					<?php if ( get_field( 'problems_and_causes_img' ) ) { ?>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhGAGBAIAAAP///wAAACH5BAEAAAEALAAAAAAYAYEAAAL1jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLT1NXW19jZ2tvc3d7f0NHi4+Tl5ufo6err7O3u7+Dh8vP09fb3+Pn6+/z9/v/w8woMCBBAsaPIgwocKFDBs6fAjRSQEAOw==" data-src="<?php the_field( 'problems_and_causes_img' ); ?>" alt="Износ конструкций" />
					<?php } ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xxl-8 offset-xxl-2">
				<div class="problems-and-causes-text--2">
					<div class="row">
						<div class="col-12 text-center">
							<h3 class="section-title">
								<?php the_field( 'problems_and_causes_text_2_title' ); ?>
							</h3>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php the_field( 'problems_and_causes_text_2' ); ?>
						</div>
						<div class="col-lg-6">
							<?php the_field( 'problems_and_causes_text_3' ); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>