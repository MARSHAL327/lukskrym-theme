<?php 

/*
Template Name: Портфолио дочерняя
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
			<div class="row justify-content-center">
				
 			<?php 
				$category_id = get_field( 'category_id' );

				$posts = get_posts(array(
					'numberposts' => -1,
					'category'    => $category_id,
					'orderby'     => 'date',
					'order'       => 'ASC',
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
						<div class="portfolio-item">
							<a href="<?php the_permalink($post); ?>" class="open-gallery">
								<img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php the_post_thumbnail_url( 'portfolio-item-image-thumb' ); ?>" alt="<?php the_title(); ?>">

								<div class="portfolio-item__title">
									<h3><?php the_title(); ?></h3>
									<span class="button">Подробнее</span>
								</div>
							</a>
						</div>
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