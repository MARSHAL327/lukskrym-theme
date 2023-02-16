<?php 

/*
Template Name: Отзывы
*/

$pages = get_pages( [
    'sort_order'   => 'ASC',
    'sort_column'  => 'post_title',
    'hierarchical' => 1,
    'exclude'      => '',
    'include'      => '',
    'meta_key'     => '',
    'meta_value'   => '',
    'authors'      => '',
    'child_of'     => 0,
    'parent'       => -1,
    'exclude_tree' => '',
    'number'       => '',
    'offset'       => 0,
    'post_type'    => 'page',
    'post_status'  => 'publish',
] );

wp_reset_postdata();
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
				<div class="page-title"></div>
			</div>
		</div>

        <div class="row">
            <?php include 'template-parts/about-company/about-company.php'; ?>
        </div>
	</div>

	<?php
        include 'template-parts/reviews/video-reviews.php';
        include 'template-parts/reviews/text-reviews.php';
        include 'template-parts/mortgage_block.php';
    ?>

</div>

<?php get_footer(); ?>