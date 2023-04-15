<?php 

/*
Template Name: Готовые проекты
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
					<?php the_field( 'page_projects_title' ); ?>
				</h1>
			</div>
		</div>

        <?php include 'template-parts/projects/filter-block.php'; ?>


        <?php
        $projects = get_posts([
//            'posts_per_page' => -1,
            'category' => 13,
            'orderby' => 'date',
            'order' => 'ASC',
            'include' => [],
            'exclude' => [],
            'meta_key' => '',
            'meta_value' => '',
            'post_type' => 'post',
            'nopaging' => true,
            'suppress_filters' => true,
        ]);

        include 'template-parts/projects/finished-projects.php';
        ?>

        <?php include 'template-parts/projects/project-advantages.php'; ?>

	</div>

	<?php

        include 'template-parts/mortgage_block.php';
		include 'template-parts/home/order-consultation.php'; 
		include 'template-parts/projects/project-building.php';
		include 'template-parts/projects/order-calculation.php';
		include 'template-parts/projects/video.php';
		include 'template-parts/home/news.php';

	?>
	
</div>

<?php get_footer(); ?>