<?php 

/*
Template Name: Строительство из ракушечника
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

		include 'template-parts/construction-shell-houses/about-shell-houses.php';
		include 'template-parts/construction-shell-houses/shell-specifications.php';
		include 'template-parts/construction-shell-houses/region-specifics.php';
		include 'template-parts/construction-shell-houses/building-standards.php';
		include 'template-parts/projects/order-calculation.php';
		include 'template-parts/construction-shell-houses/video.php';
		include 'template-parts/home/news.php';

	 ?>
</div>

<?php get_footer(); ?>