<?php 

/*
Template Name: Экспериментальное строительство
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

	<div class="section section-about-shell-houses section-about-experimental-building">
		<div class="container">
			<div class="row">
				<div class="col-xxl-6">
					<?php if ( get_field( 'about_experimental_building_img' ) ) { ?>
						<div class="shell-houses-img aerated-concrete-img">
							<img src="<?php the_field( 'about_experimental_building_img' ); ?>" alt="<?php the_title(); ?>" />
						</div>
					<?php } ?>
				</div>
				<div class="col-xxl-6">
					<div class="shell-houses-description experimental-building-text">
						<?php the_field( 'about_experimental_building_text' ); ?>
					</div>
				</div>
				<div class="col-12">
					<div class="experimental-building-text-2">
						<?php the_field( 'about_experimental_building_text_2' ); ?>
					</div>
				</div>
			</div>

			<div class="row row-2">
				<div class="col-xxl-6">
					<div class="experimental-building-text-3">
						<?php the_field( 'about_experimental_building_text_3' ); ?>
					</div>
				</div>
				<div class="col-xxl-6">
					<?php if ( get_field( 'about_experimental_building_img_2' ) ) { ?>
						<div class="shell-houses-img aerated-concrete-img">
							<img class="lazy" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAEALAAAAAAQAAkAAAIKjI+py+0Po5yUFQA7" data-src="<?php the_field( 'about_experimental_building_img_2' ); ?>" alt="<?php the_title(); ?>" />
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<?php include 'template-parts/projects/order-calculation.php'; ?>

	<div class="section section-about-experimental-building--2">
		<div class="container">
			<div class="row">
				<div class="col-xxl-6">
					<?php if ( get_field( 'about_experimental_building_img_3' ) ) { ?>
						<div class="shell-houses-img aerated-concrete-img">
							<img class="lazy" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAEALAAAAAAQAAkAAAIKjI+py+0Po5yUFQA7" data-src="<?php the_field( 'about_experimental_building_img_3' ); ?>" alt="<?php the_title(); ?>" />
						</div>
					<?php } ?>
				</div>
				<div class="col-xxl-6">
					<div class="experimental-building-text-4">
						<?php the_field( 'about_experimental_building_text_4' ); ?>
					</div>
				</div>
				<div class="col-12">
					<div class="experimental-building-text-5">
						<?php the_field( 'about_experimental_building_text_5' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section section-region-specifics paraxify">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="region-specifics">
						<?php the_field( 'about_experimental_building_text_6' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'template-parts/home/news.php'; ?>
</div>

<?php get_footer(); ?>