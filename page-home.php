<?php 

/*
Template Name: Главная страница
*/


 ?>

<?php get_header(); ?>

<div class="page-content">

	<?php 

		include 'template-parts/home/top-slider.php';
		include 'template-parts/home/advantages.php';

	 ?>

	<div class="section section-services">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="section-title">
						<?php the_field( 'section_services_title' ); ?>
					</div>
				</div>
			</div>

			<?php include 'template-parts/home/services.php'; ?>
		</div>
	</div>

	<?php 

		include 'template-parts/home/about-company.php';
		include 'template-parts/home/company-advantages.php';
		include 'template-parts/home/order-departure.php';
		include 'template-parts/home/portfolio.php';
        include 'template-parts/mortgage_block.php';
        include 'template-parts/home/order-consultation.php';
		include 'template-parts/home/certificates.php';
		include 'template-parts/home/partners.php';
		include 'template-parts/home/video.php';
		include 'template-parts/home/news.php';

	 ?>

 </div>

<?php get_footer(); ?>