<?php 

/*
Template Name: Портфолио (кейс)
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

		<div class="article">
			<div class="row">
				<div class="col-12 text-center">
					<div class="article__title">
						<h1 class="page-title"><?php the_title(); ?></h1>
					</div>
				</div>
			</div>

			<div class="row row-fd">
				<div class="col-lg-3">
					<div class="categories">
						<div class="categories__title">Популярные проекты</div>
						
						<div class="popular-projects">
							
							<?php $popular_projects = get_field( 'popular_projects', 41 ); ?>

							<?php if ( $popular_projects ): ?>

								<?php foreach ( $popular_projects as $post ):  ?>
								<?php setup_postdata ( $post ); ?>
								
								<div class="popular-projects__item">
									<a href="<?php the_permalink($post); ?>" class="project-thumb">
										<img class="lazy" src="data:image/gif;base64,R0lGODlhSAAFAIAAAP///wAAACH5BAEAAAEALAAAAABIAAUAAAIRjI+py+0Po5y02ouz3rz7VgAAOw==" data-src="<?php the_post_thumbnail_url( 'project-card-thumb' ); ?>" alt="<?php the_title(); ?>">
									</a>
									<div class="project-description">
										<div class="titleh3">
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										</div>
										<div class="project-info">
										<div class="project-info__item">
											<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M447.9 332l.1 136c0 6.6-5.4 12-12 12l-136-.1c-6.6 0-12-5.4-12-12v-27.8c0-6.7 5.5-12.1 12.2-12l61.4 2.3 1.4-1.4-139-139L85 429l1.4 1.4 61.4-2.3c6.7-.1 12.2 5.3 12.2 12v27.8c0 6.6-5.4 12-12 12L12 480c-6.6 0-12-5.4-12-12l.1-136c0-6.6 5.4-12 12-12h27.8c6.7 0 12.1 5.5 12 12.2l-2.3 61.4L51 395l139-139L51 117l-1.4 1.4 2.3 61.4c.1 6.7-5.3 12.2-12 12.2H12.1c-6.6 0-12-5.4-12-12L0 44c0-6.6 5.4-12 12-12l136 .1c6.6 0 12 5.4 12 12v27.8c0 6.7-5.5 12.1-12.2 12l-61.4-2.3L85 83l139 139L363 83l-1.4-1.4-61.4 2.3c-6.7.1-12.2-5.3-12.2-12V44.1c0-6.6 5.4-12 12-12l136-.1c6.6 0 12 5.4 12 12l-.1 136c0 6.6-5.4 12-12 12h-27.8c-6.7 0-12.1-5.5-12-12.2l2.3-61.4-1.4-1.4-139 139 139 139 1.4-1.4-2.3-61.4c-.1-6.7 5.3-12.2 12-12.2h27.8c6.6 0 12 5.4 12 12z"/></svg></span>
											<span class="title"><?php the_field( 'project_area' ); ?></span>
										</div>

										<?php if ( get_field('project_bedrooms') ) { ?>
											<div class="project-info__item">
												<span class="icon"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bed-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-bed-alt fa-w-16 fa-3x"><path d="M80,160a32,32,0,0,1,32-32h96a32,32,0,0,1,32,32v32h32V160a32,32,0,0,1,32-32h96a32,32,0,0,1,32,32v32h48V64a32,32,0,0,0-32-32H64A32,32,0,0,0,32,64V192H80Zm368,64H64A64,64,0,0,0,0,288V464a16,16,0,0,0,16,16H32a16,16,0,0,0,16-16V416H464v48a16,16,0,0,0,16,16h16a16,16,0,0,0,16-16V288A64,64,0,0,0,448,224Zm16,144H48V288a16,16,0,0,1,16-16H448a16,16,0,0,1,16,16Z" class=""></path></svg></span>
												<span class="title"><?php the_field( 'project_bedrooms' ); ?></span>
											</div>
										<?php } ?>
									</div>
									</div>
								</div>

								<?php endforeach; ?>
								<?php wp_reset_postdata(); ?>

							<?php endif; ?>

							<a href="/wp-content/uploads/2022/02/katalog-luks-2022_a4_compressed.pdf" class="button button--prices" download="">Скачать каталог проектов</a>

						</div>
					</div>

					<?php get_template_part('template-parts/home/roadmap'); ?>

					<a href="#orderCalcForm" class="button button-popup button--prices">Рассчитать стоимость строительства</a>

					<div class="hidden">
						<div id="orderCalcForm" class="popup-form order-calc-form">
							<div class="popup-form__title">
								<div class="form-title">Рассчитать стоимость строительства</div>>
								<p>Специалист свяжется с вами в течение часа</p>
							</div>
							<?php
								echo do_shortcode('[contact-form-7 id="90" title="Заказать расчет"]');
							?>
						</div>
					</div>
				</div>

				<div class="col-lg-9">
					<div class="posts-wrapper project-portfolio-blocks">

					<?php if ( have_rows( 'project_portfolio_blocks' ) ) : ?>
						<?php	while ( have_rows( 'project_portfolio_blocks' ) ) : the_row(); ?>

							<?php	if ( get_row_layout() == 'text' ): ?>

								<div class="project-portfolio-blocks__text">
									<?php the_sub_field('project_portfolio_block_text'); ?>
								</div>

							<?php	elseif ( get_row_layout() == 'img' ): ?>

								<div class="project-portfolio-blocks__img">
									<?php if ( get_sub_field( 'project_portfolio_block_img' ) ) { ?>
										<a href="<?php the_sub_field( 'project_portfolio_block_img' ); ?>" class="project-portfolio-img">
											<img class="lazy" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAEALAAAAAAQAAkAAAIKjI+py+0Po5yUFQA7" data-src="<?php the_sub_field( 'project_portfolio_block_img' ); ?>" alt="Дизайн-проект дома <?php the_title(); ?>" />
										</a>
									<?php } ?>
								</div>

							<?php elseif ( get_row_layout() == 'gallery' ): ?>

								<?php $gallery = get_sub_field( 'project_portfolio_block_gallery' ); ?>

								<div class="project-portfolio-blocks__img project-portfolio-blocks__gallery">
									<?php foreach ( $gallery as $gallery_image ): ?>
										<a href="<?php echo esc_url($gallery_image['url']); ?>" class="project-portfolio-img">
											<img class="lazy" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAEALAAAAAAQAAkAAAIKjI+py+0Po5yUFQA7" data-src="<?php echo esc_url($gallery_image['url']); ?>" alt="Дизайн-проект дома <?php the_title(); ?>" />
										</a>
									<?php endforeach; ?>
								</div>

							<?php elseif ( get_row_layout() == 'gallery_three_img' ): ?>

								<?php $gallery_3_img = get_sub_field( 'project_portfolio_block_gallery_three_img' ); ?>

								<div class="project-portfolio-blocks__img project-portfolio-blocks__gallery project-portfolio-blocks__gallery--three-img">
									<?php foreach ( $gallery_3_img as $gallery_3_img_image ): ?>
										<a href="<?php echo esc_url($gallery_3_img_image['url']); ?>" class="project-portfolio-img">
											<img class="lazy" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAEALAAAAAAQAAkAAAIKjI+py+0Po5yUFQA7" data-src="<?php echo esc_url($gallery_3_img_image['url']); ?>" alt="Дизайн-проект дома <?php the_title(); ?>" />
										</a>
									<?php endforeach; ?>
								</div>

							<?php	endif;

						endwhile;
					else:
						// no rows found
					endif; ?>

					<script>
						jQuery(document).ready(function($) {
							$('.project-portfolio-blocks__img').magnificPopup({
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
				</div>
			</div>
		</div>
	</div>

	<div class="section section-order-departure section-order-calculation paraxify">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<div class="section-title_h3">Заказать дизайн-проект объекта недвижимости</div>
					<p class="section-description">Наш специалист свяжется с вами в течение часа для просчета стоимости проекта</p>
				</div>
			</div>

			<div class="row">
				<div class="col-xl-10 offset-xl-1">
					<div class="order-departure-form">
						<?php
							echo do_shortcode('[contact-form-7 id="4904" title="Заказать дизайн-проект"]');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php include 'template-parts/home/news.php'; ?>

</div>

<?php get_footer(); ?>