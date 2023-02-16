<?php 

/*
Template Name: Портфолио дочерняя (с галереей)
*/


 ?>

<?php get_header(); ?>

<div class="page-content page-content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumbs">
					<?php true_breadcrumbs(); ?>
				</div>
			</div>
			<div class="col-12 text-center">
				<h1 class="page-title"><?php the_title(); ?></h1>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="portfolio-gallery-wrapper">
					<div class="portfolio-gallery">
						<?php $portfolio_gallery = get_field( 'portfolio_gallery' ); ?>

						<?php if ( $portfolio_gallery ) :  ?>
							<?php foreach ( $portfolio_gallery as $portfolio_gallery_image ): ?>

								<a href="<?php echo esc_url($portfolio_gallery_image['url']); ?>" class="portfolio-gallery__item">
									<img class="lazy" src="data:image/gif;base64,R0lGODlhBQADAIAAAP///wAAACH5BAEAAAEALAAAAAAFAAMAAAIDjI9ZADs=" data-src="<?php echo esc_url($portfolio_gallery_image['url']); ?>" alt="<?php the_title(); ?>" />
								</a>

							<?php endforeach; ?>
						<?php endif; ?>

						<script>
							jQuery(document).ready(function($) {
								$('.portfolio-gallery').magnificPopup({
									delegate: 'a',
									type: 'image',
									tLoading: 'Loading image #%curr%...',
									mainClass: 'mfp-img-mobile',
									gallery: {
										enabled: true,
										navigateByImgClick: true,
										preload: [0,1] // Will preload 0 - before current, and 1 after the current image
									},
									image: {
										tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
										titleSrc: function(item) {
											return '<small><?php the_title(); ?></small>';
										}
									}
								});
							});
						</script>
					</div>

					<div class="text-center">
						<a href="#" id="loadMore" class="button button-more">Показать еще</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php

		include 'template-parts/projects/order-calculation.php';
		include 'template-parts/projects/video.php';
		include 'template-parts/home/news.php';

	 ?>
</div>

<?php get_footer(); ?>