<?php 

/*
Template Name: Участки
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
		</div>

		<div class="project">
			<div class="row">
				<div class="col-xl-6">
					<div class="project__gallery fotorama" data-allowfullscreen="true" data-fit="scaledown" data-nav="thumbs" data-thumbwidth="240" data-thumbheight="135" data-thumbmargin="20" data-thumbborderwidth="0" data-width="100%">

						<?php $land_gallery = get_field( 'land_gallery' ); ?>

						<?php if ( $land_gallery ) :  ?>
							<?php foreach ( $land_gallery as $land_gallery_image ): ?>

								<a href="<?php echo esc_url($land_gallery_image['url']); ?>">
									<img src="<?php echo esc_url($land_gallery_image['url']); ?>" alt="фото <?php the_title(); ?>" />
								</a>

							<?php endforeach; ?>
						<?php endif; ?>

						<?php if ( have_rows( 'land_video' ) ) : ?>
							<?php while ( have_rows( 'land_video' ) ) : the_row(); ?>

								<?php if ( get_sub_field( 'land_video_url' ) ) { ?>

									<a href="<?php the_sub_field( 'land_video_url' ); ?>"
									data-video="true">
										<img alt="фото <?php the_title(); ?>" src="<?php the_sub_field( 'land_video_placeholder' ); ?>">
									</a>

								<?php } ?>

							<?php endwhile; ?>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>

					</div>
				</div>

				<div class="col-xl-6">
					<div class="project__description">
						<h1 class="page-title">
							<?php the_title(); ?>
						</h1>

						<div class="description">
							<?php the_field( 'land_description' ); ?>
						</div>

						<a href="#projectOrder" class="button button-popup">Получить консультацию</a>

						<div class="d-none">
							<div id="projectOrder" class="popup-form callback order-form">
								<div class="popup-form__title">
									<h3 class="form-title">Заявка на консультацию</h3>
								</div>
								
								<?php
									echo do_shortcode('[contact-form-7 id="5003" title="Заявка на консультацию (недвижимость)"]');
								?>
							</div>

							<script>
								jQuery(document).ready(function($) {
									let projectTitle = $('.project__description').find('.page-title').text().trim();

									let orderText = $('#projectOrder').find('.order-text');

									orderText.html(projectTitle);
								});
							</script>
						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<?php 

		include 'template-parts/projects/order-calculation.php';
		include 'template-parts/home/news.php';

	 ?>
</div>

<?php get_footer(); ?>
