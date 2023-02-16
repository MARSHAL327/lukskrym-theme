<?php 

/*
Template Name: Портфолио
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

		<div class="row">
			<div class="col-12">
				<div class="portfolio-gallery-wrapper">
					<div class="project portfolio-gallery">

						<?php $project_gallery = get_field( 'project_gallery' ); ?>

						<?php if ( $project_gallery ) :  ?>
							<?php foreach ( $project_gallery as $project_gallery_image ): ?>

								<a href="<?php echo esc_url($project_gallery_image['url']); ?>" class="portfolio-gallery__item" style="background-image: url('<?php echo esc_url($project_gallery_image['url']); ?>')">
									<img class="lazy" src="data:image/gif;base64,R0lGODlhYQBBAIAAAP///wAAACH5BAEAAAEALAAAAABhAEEAAAJXjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L590CADs=" data-src="<?php echo esc_url($project_gallery_image['url']); ?>" alt="<?php the_title(); ?>" />
								</a>

							<?php endforeach; ?>
						<?php endif; ?>

						<?php if ( have_rows( 'project_video' ) ) : ?>
							<?php while ( have_rows( 'project_video' ) ) : the_row(); ?>

								<?php if ( get_sub_field( 'project_video_url' ) ) { ?>

									<a href="<?php the_sub_field( 'project_video_url' ); ?>" class="mfp-iframe portfolio-gallery__item portfolio-gallery__item--video" style="background-image: url('<?php the_sub_field( 'project_video_poster' ); ?>')">
										<img src="<?php the_sub_field( 'project_video_poster' ); ?>" alt="<?php the_title(); ?>">
										<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-circle" viewBox="0 0 16 16">
										  <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
										  <path d="M6.271 5.055a.5.5 0 0 1 .52.038l3.5 2.5a.5.5 0 0 1 0 .814l-3.5 2.5A.5.5 0 0 1 6 10.5v-5a.5.5 0 0 1 .271-.445z"/>
										</svg>
									</a>

								<?php } ?>

							<?php endwhile; ?>
						<?php endif; ?>

						<script>
							jQuery(document).ready(function($) {
								$('.portfolio-gallery').magnificPopup({
									delegate: 'a',
									type: 'image',
									tLoading: 'Загрузка изображения',
									mainClass: 'mfp-img-mobile',
									gallery: {
										enabled: true,
										navigateByImgClick: true,
										preload: [0,1] // Will preload 0 - before current, and 1 after the current image
									},
									image: {
										tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
										titleSrc: function(item) {
											return '<small><?php the_title(); ?></small>';
										}
									}
								});
							});
						</script>
					</div>

					<div class="text-center">
						<a href="#" id="loadMore" class="button button-more">Показать еще</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	<?php $related_project = get_field( 'related_project' ); ?>
	<?php if ( $related_project ): ?>
		<div class="section section-order-consultation section-related-portfolio paraxify" style="background-image: url('/wp-content/themes/lukskrym/assets/images/bg/order-departure-bg-2.jpg'); background-position: center 77.25px;">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6 related-portfolio-wrapper">
						<div class="related-portfolio">
							<?php foreach ( $related_project as $post ):  ?>
							<?php setup_postdata ( $post ); ?>

								<a href="<?php the_permalink($post); ?>" target="_blank" class="related-portfolio__item" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');">
									<div class="section-title">
										<div>Проект дома <?php the_title(); ?></div>
									</div>
								</a>

							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>
						</div>
					</div>
					<div class="col-lg-6 order-form-wrapper">
						<?php get_template_part('template-parts/base/manager') ?>
					</div>
				</div>
			</div>
		</div>
	<?php endif; ?>

	<?php 
		include 'template-parts/home/company-advantages.php';
		include 'template-parts/home/order-consultation.php';
	 ?>

</div>

<?php get_footer(); ?>