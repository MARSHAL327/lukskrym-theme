<?php 

/*
Template Name: Монолитное строительство
Template Post Type: post
*/


 ?>

<?php get_header(); ?>

<div class="page-content-wrapper">
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
	</div>

	<?php 

		include 'template-parts/construction-monolithic/about-construction-monolithic.php';
		include 'template-parts/construction-monolithic/work-order.php';
		include 'template-parts/projects/order-calculation.php';
		include 'template-parts/construction-monolithic/technology-advantages.php';
		include 'template-parts/construction-monolithic/region-specifics.php';
		// include 'template-parts/construction-monolithic/video.php';
		include 'template-parts/home/news.php';

	 ?>
</div>

<?php get_footer(); ?>