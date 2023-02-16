<?php 

/*
Template Name: Портфолио
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

		<div id="portfolio-projects" class="portfolio">
			<div class="row">
				<div class="col-12">
					<div class="tabs-wrapper">
						<div class="tabs">
							<span class="tab">Строительство</span>
							<span class="tab">Отделка</span>
							<span class="tab">Реконструкция</span>
							<span class="tab">Проектирование</span>
							<span class="tab">Дизайн</span>
						</div>

						<div class="tabs-content">
							<div class="tab-item">
								<div class="row row-building">
									<?php include 'template-parts/page-portfolio/building.php'; ?>
								</div>
							</div>

							<div class="tab-item">
								<div class="row row-finishing">
									<?php include 'template-parts/page-portfolio/finishing.php'; ?>
								</div>
							</div>

							<div class="tab-item">
								<div class="row row-reconstruction">
									<?php include 'template-parts/page-portfolio/reconstruction.php'; ?>
								</div>
							</div>

							<div class="tab-item">
								<div class="row row-engineering">
									<?php include 'template-parts/page-portfolio/engineering.php'; ?>
								</div>
							</div>

							<div class="tab-item">
								<div class="row row-design">
									<?php include 'template-parts/page-portfolio/design.php'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php
        include 'template-parts/mortgage_block.php';
        include 'template-parts/projects/order-calculation.php';
    ?>

	<div class="section section-video">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="section-title">
						<?php the_field( 'section_video_title', 39 ); ?>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-10 offset-1">
					<div class="owl-carousel carousel-video">

						<?php if ( have_rows( 'video' ) ) : ?>
							<?php while ( have_rows( 'video' ) ) : the_row(); ?>

								<div class="carousel-video__item">
									
									<?php
										$video_url = get_sub_field( 'video_url' );

										echo iframe_lezy('<iframe width="560" height="315" src="'. $video_url .'?showinfo=0&rel=0;" title="YouTube video player" frameborder="0" allowfullscreen></iframe>');
									?>

									<div class="video-title">
										<?php the_sub_field( 'video_title' ); ?>
									</div>
									
								</div>

							<?php endwhile; ?>
						<?php else : ?>
							
							<?php while ( have_rows( 'video', 39 ) ) : the_row(); ?>

								<div class="carousel-video__item">
									
									<?php
										$video_url = get_sub_field( 'video_url' );

										echo iframe_lezy('<iframe width="560" height="315" src="'. $video_url .'?showinfo=0&rel=0;" title="YouTube video player" frameborder="0" allowfullscreen></iframe>');
									?>

									<div class="video-title">
										<?php the_sub_field( 'video_title' ); ?>
									</div>
									
								</div>

							<?php endwhile; ?>

						<?php endif; ?>

						<?php
							function iframe_lezy($s) {
								return '<div class="video ratio-16-9 lezy">'.str_replace('iframe', 'eframe', $s).'</div>';
							}
						?>

					</div>

					<script>
						jQuery(document).ready(function($) {
							const hs = $(window).innerHeight();
							$(window).scroll(function () {
								let sp = $(this).scrollTop()+hs;

								$('.video.lezy').each(function(i,e){
									if (sp > $(e).offset().top) {
										let html = $(e).html();
										html = html.replace('eframe', 'iframe');
										$(e).html(html).removeClass('lezy');
									}
								});
							});
						});
					</script>
				</div>
			</div>
		</div>
	</div>

	<?php include 'template-parts/home/news.php'; ?>
</div>

<?php get_footer(); ?>