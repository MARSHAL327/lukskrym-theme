<?php 

/*
Template Name: Портфолио дочерняя (строительство)
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

		<div class="portfolio-items">
			<div class="row">
				
 			<?php 
				$category_id = get_field( 'category_id' );

				$posts = get_posts(array(
					'numberposts' => -1,
					'category'    => $category_id,
					'orderby'     => 'date',
					'order'       => 'DESC',
					'include'     => array(),
					'exclude'     => array(),
					'meta_key'    => '',
					'meta_value'  => '',
					'post_type'   => 'post',
					'nopaging'	  => true,
					'suppress_filters' => true
				));

				$counter = 0;

				foreach( $posts as $post ) {
				setup_postdata($post); ?>

					<?php $counter++; ?>

					<div class="col-md-6 col-lg-4">
						<div class="portfolio-item portfolio-building-gallery-<?php echo $counter; ?>">
							<a href="<?php the_post_thumbnail_url( 'portfolio-item-image-thumb' ); ?>" class="open-gallery">
								<img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php the_post_thumbnail_url( 'portfolio-item-image-thumb' ); ?>" alt="<?php the_title(); ?>">

								<div class="portfolio-item__title">
									<h3><?php the_title(); ?></h3>
									<span class="button">Подробнее</span>
								</div>
							</a>

							<?php $project_gallery = get_field( 'project_gallery' ); ?>

							<div class="hidden">
								<?php if ( have_rows( 'project_video' ) ) : ?>
									<?php while ( have_rows( 'project_video' ) ) : the_row(); ?>

										<?php if ( get_sub_field( 'project_video_url' ) ) { ?>

											<a href="<?php the_sub_field( 'project_video_url' ); ?>" class="mfp-iframe"></a>

										<?php } ?>

									<?php endwhile; ?>
								<?php endif; ?>

								<?php if ( $project_gallery ) :  ?>
									<?php foreach ( $project_gallery as $project_gallery_image ): ?>

										<a href="<?php echo esc_url($project_gallery_image['url']); ?>">
											<img class="lazy mfp-image" src="data:image/gif;base64,R0lGODlhBQADAIAAAP///wAAACH5BAEAAAEALAAAAAAFAAMAAAIDjI9ZADs=" data-src="<?php echo esc_url($project_gallery_image['url']); ?>" alt="<?php the_title(); ?>" />
										</a>

									<?php endforeach; ?>
								<?php endif; ?>
							</div>
						</div>

						<script>
							jQuery(document).ready(function($) {
								$('.portfolio-building-gallery-<?php echo $counter; ?>').magnificPopup({
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

				<?php wp_reset_postdata(); } ?>

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