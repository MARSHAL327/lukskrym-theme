<?php 

/*
	Из чего лучше построить дом в Крыму
*/


 ?>

<div class="section section-post-build">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="post-build">
					<div class="post-build__title wow fadeInLeft">
						<h2 class="section-title">
							<?php the_field( 'post_build_title' ); ?>
						</h2>
					</div>
					<div class="post-build__img">
						<img class="lazy" src="data:image/gif;base64,R0lGODlhBAAvAIAAAP///wAAACH5BAEAAAEALAAAAAAEAC8AAAIMjI+py+0Po5y02loAADs=" data-src="<?php echo get_stylesheet_directory_uri() . '/assets/images/post-build-img.png' ?>" alt="<?php the_field( 'post_build_title' ); ?>">
					</div>
					<div class="post-build__description wow fadeInRight">
						<?php the_field( 'post_build_exerpt' ); ?>

						<div class="post-btn">
							<a href="<?php the_field( 'post_build_url' ); ?>" class="button" target="_blank">Читать дальше... <span><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16"> <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/></svg></span></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>