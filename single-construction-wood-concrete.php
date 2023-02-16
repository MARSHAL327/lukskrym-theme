<?php 

/*
Template Name: Строительство из арболита
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

		include 'template-parts/construction-wood-concrete/about-wood-concrete.php';
		include 'template-parts/construction-wood-concrete/advantages-wood-concrete.php';
		include 'template-parts/construction-wood-concrete/region-specifics.php';
		// include 'template-parts/construction-wood-concrete/video.php';
		include 'template-parts/home/news.php';

	 ?>
</div>

<?php get_footer(); ?>