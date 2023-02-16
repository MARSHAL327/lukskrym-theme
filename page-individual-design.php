<?php 

/*
Template Name: Индивидуальное проектирование
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
				<h1 class="page-title">
					<?php the_title(); ?>
				</h1>
			</div>
		</div>
	</div>

	<?php 

		include 'template-parts/individual-design/about-individual-design.php';
		include 'template-parts/individual-design/improvements-standard-project.php';
		include 'template-parts/projects/order-calculation.php';
		include 'template-parts/individual-design/designers-choice.php';
		include 'template-parts/home/news.php';

	 ?>

</div>

<?php get_footer(); ?>