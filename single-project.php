<?php 

/*
Template Name: Проект
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

		<div class="project-page">
			<div class="row">
				<div class="col-xl-6">
					<div class="project-page__gallery fotorama" data-allowfullscreen="true" data-fit="scaledown" data-nav="thumbs" data-thumbwidth="240" data-thumbheight="135" data-thumbmargin="20" data-thumbborderwidth="0" data-width="100%">

						<?php $project_gallery = get_field( 'project_gallery' ); ?>

						<?php if ( $project_gallery ) :  ?>
							<?php foreach ( $project_gallery as $project_gallery_image ): ?>

								<a href="<?php echo esc_url($project_gallery_image['url']); ?>">
									<img src="<?php echo esc_url($project_gallery_image['url']); ?>" alt="фото <?php the_title(); ?>" />
								</a>

							<?php endforeach; ?>
						<?php endif; ?>

					</div>
				</div>
				<div class="col-xl-6">
					<div class="project-page__description">
						<div class="project-page-info">
							<div class="project-page-info__item">
								<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M447.9 332l.1 136c0 6.6-5.4 12-12 12l-136-.1c-6.6 0-12-5.4-12-12v-27.8c0-6.7 5.5-12.1 12.2-12l61.4 2.3 1.4-1.4-139-139L85 429l1.4 1.4 61.4-2.3c6.7-.1 12.2 5.3 12.2 12v27.8c0 6.6-5.4 12-12 12L12 480c-6.6 0-12-5.4-12-12l.1-136c0-6.6 5.4-12 12-12h27.8c6.7 0 12.1 5.5 12 12.2l-2.3 61.4L51 395l139-139L51 117l-1.4 1.4 2.3 61.4c.1 6.7-5.3 12.2-12 12.2H12.1c-6.6 0-12-5.4-12-12L0 44c0-6.6 5.4-12 12-12l136 .1c6.6 0 12 5.4 12 12v27.8c0 6.7-5.5 12.1-12.2 12l-61.4-2.3L85 83l139 139L363 83l-1.4-1.4-61.4 2.3c-6.7.1-12.2-5.3-12.2-12V44.1c0-6.6 5.4-12 12-12l136-.1c6.6 0 12 5.4 12 12l-.1 136c0 6.6-5.4 12-12 12h-27.8c-6.7 0-12.1-5.5-12-12.2l2.3-61.4-1.4-1.4-139 139 139 139 1.4-1.4-2.3-61.4c-.1-6.7 5.3-12.2 12-12.2h27.8c6.6 0 12 5.4 12 12z"/></svg></span>
								<span class="title"><?php the_field( 'project_area' ); ?></span>
							</div>

							<?php if ( get_field('project_bedrooms') ) { ?>
								<div class="project-page-info__item">
									<span class="icon"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bed-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-bed-alt fa-w-16 fa-3x"><path d="M80,160a32,32,0,0,1,32-32h96a32,32,0,0,1,32,32v32h32V160a32,32,0,0,1,32-32h96a32,32,0,0,1,32,32v32h48V64a32,32,0,0,0-32-32H64A32,32,0,0,0,32,64V192H80Zm368,64H64A64,64,0,0,0,0,288V464a16,16,0,0,0,16,16H32a16,16,0,0,0,16-16V416H464v48a16,16,0,0,0,16,16h16a16,16,0,0,0,16-16V288A64,64,0,0,0,448,224Zm16,144H48V288a16,16,0,0,1,16-16H448a16,16,0,0,1,16,16Z" class=""></path></svg></span>
									<span class="title">Спален: <?php the_field( 'project_bedrooms' ); ?></span>
								</div>
							<?php } ?>

							<?php if ( get_field('project_rooms') ) { ?>
								<div class="project-page-info__item">
									<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M400 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm-6 400H54c-3.3 0-6-2.7-6-6V86c0-3.3 2.7-6 6-6h340c3.3 0 6 2.7 6 6v340c0 3.3-2.7 6-6 6z"/></svg></span>
									<span class="title">Помещений: <?php the_field( 'project_rooms' ); ?></span>
								</div>
							<?php } ?>

							<div class="project-page-info__item">
								<span class="icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M500 256H80V112c0-17.645 14.355-32 32-32 11.351 0 21.332 5.945 27.015 14.88-16.492 25.207-14.687 59.576 6.838 83.035-4.176 4.713-4.021 11.916.491 16.428l11.314 11.314c4.686 4.686 12.284 4.686 16.971 0l95.03-95.029c4.686-4.686 4.686-12.284 0-16.971l-11.314-11.314c-4.512-4.512-11.715-4.666-16.428-.491-17.949-16.469-42.294-21.429-64.178-15.365C163.281 45.667 139.212 32 112 32c-44.112 0-80 35.888-80 80v144H12c-6.627 0-12 5.373-12 12v24c0 6.627 5.373 12 12 12h20v48c0 32.119 15.777 60.55 40 77.977V468c0 6.627 5.373 12 12 12h24c6.627 0 12-5.373 12-12v-20.334c2.638.218 5.305.334 8 .334h256c2.695 0 5.362-.117 8-.334V468c0 6.627 5.373 12 12 12h24c6.627 0 12-5.373 12-12v-38.023c24.223-17.427 40-45.858 40-77.977v-48h20c6.627 0 12-5.373 12-12v-24c0-6.627-5.373-12-12-12zM176.202 112.201c10.396-10.397 26.553-10.726 37.338-2.025l-39.363 39.363c-8.725-10.813-8.348-26.966 2.025-37.338zM432 352c0 26.467-21.533 48-48 48H128c-26.467 0-48-21.533-48-48v-48h352v48z"/></svg></span>
								<span class="title">Санузлов: <?php the_field( 'project_bathroom' ); ?></span>
							</div>
						</div>
						<h1 class="page-title">
							<?php the_field( 'project_title' ); ?>
						</h1>
						<div class="project-page-text">
							<?php the_field( 'project_text' ); ?>
						</div>
						<a href="#projectOrder" class="button button-popup">Заказать под ключ</a>

						<div class="d-none">
							<div id="projectOrder" class="popup-form callback order-form">
								<div class="popup-form__title">
									<h3 class="form-title">Заказать <span><?php the_field( 'project_title' ); ?></span></h3>
								</div>
								
								<?php
									echo do_shortcode('[contact-form-7 id="499" title="Заказать проект под ключ"]');
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

			<div class="project-page-feature">
				<div class="row">
					<div class="col-xl-6">
						<div class="tabs-wrapper">
							<div class="tabs">
								<?php if ( get_field( 'floor_4' ) ) { ?>
									<span class="tab">Цокольный этаж</span>
								<?php } ?>
								<?php if ( get_field( 'floor_1' ) ) { ?>
									<span class="tab">Этаж 1</span>
								<?php } ?>

								<?php if ( get_field( 'floor_2' ) ) { ?>
									<span class="tab">Этаж 2</span>
								<?php } ?>

								<?php if ( get_field( 'floor_3' ) ) { ?>
									<span class="tab">Этаж 3</span>
								<?php } ?>

								<span class="tab">Изменить планировку</span>
							</div>

							<div class="tabs-content">
<?php if ( get_field( 'floor_4' ) ) { ?>
									<div class="tab-item">
										<img class="lazy" src="data:image/gif;base64,R0lGODlhSwBMAIAAAP///wAAACH5BAEAAAEALAAAAABLAEwAAAJTjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7LY7VAAAOw==" data-src="<?php the_field( 'floor_4' ); ?>" alt="План цокольного этажа" />
									</div>
								<?php } ?>
								<?php if ( get_field( 'floor_1' ) ) { ?>
									<div class="tab-item">
										<img class="lazy" src="data:image/gif;base64,R0lGODlhSwBMAIAAAP///wAAACH5BAEAAAEALAAAAABLAEwAAAJTjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7LY7VAAAOw==" data-src="<?php the_field( 'floor_1' ); ?>" alt="План 1-го этажа" />
									</div>
								<?php } ?>

								<?php if ( get_field( 'floor_2' ) ) { ?>
									<div class="tab-item">
										<img class="lazy" src="data:image/gif;base64,R0lGODlhSwBMAIAAAP///wAAACH5BAEAAAEALAAAAABLAEwAAAJTjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7LY7VAAAOw==" data-src="<?php the_field( 'floor_2' ); ?>" alt="План 2-го этажа" />
									</div>
								<?php } ?>

								<?php if ( get_field( 'floor_3' ) ) { ?>
									<div class="tab-item">
										<img class="lazy" src="data:image/gif;base64,R0lGODlhSwBMAIAAAP///wAAACH5BAEAAAEALAAAAABLAEwAAAJTjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7LY7VAAAOw==" data-src="<?php the_field( 'floor_3' ); ?>" alt="План 2-го этажа" />
									</div>
								<?php } ?>

								<div class="tab-item">
									<div id="changeLayoutForm" class="change-layout">
										<?php
											echo do_shortcode('[contact-form-7 id="500" title="Изменить планировку"]');
										?>
									</div>
									<script>
										jQuery(document).ready(function($) {
											let projectTitle = $('.project__description').find('.page-title').text().trim();

											let orderText = $('#changeLayoutForm').find('.order-text');

											orderText.html(projectTitle);
										});
									</script>
								</div>
							</div>

						</div>
					</div>

					<div class="col-xl-6">
						<div class="characteristics">
							<h2 class="section-title">Характеристики проекта:</h2>

							<?php if ( have_rows( 'characteristics' ) ) : ?>
								<?php while ( have_rows( 'characteristics' ) ) : the_row(); ?>

									<div class="characteristics-item">

										<?php if ( get_sub_field( 'characteristics_title' ) ) { ?>
											<span class="characteristics-item__title">
												<?php the_sub_field( 'characteristics_title' ); ?>
											</span>
										<?php } ?>

										<?php if ( get_sub_field( 'characteristics_value' ) ) { ?>
											<span class="characteristics-item__value">
												<?php the_sub_field( 'characteristics_value' ); ?>
											</span>
										<?php } ?>
									</div>

								<?php endwhile; ?>
							<?php else : ?>
								<?php // no rows found ?>
							<?php endif; ?>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<?php $related_portfolio = get_field( 'related_portfolio' ); ?>
	<?php if ( $related_portfolio ): ?>
		<div class="section section-order-consultation section-related-portfolio paraxify" style="background-image: url('/wp-content/themes/lukskrym/assets/images/bg/order-departure-bg-2.jpg'); background-position: center 77.25px;">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-6 related-portfolio-wrapper">
						<div class="related-portfolio">
							<?php $post_title = get_the_title(); ?>

							<?php foreach ( $related_portfolio as $post ):  ?>
							<?php setup_postdata ( $post ); ?>
							
								<a href="<?php the_permalink($post); ?>" target="_blank" class="related-portfolio__item" style="background-image: url('<?php the_post_thumbnail_url( 'large' ); ?>');">
									<div class="section-title">
										<div>Дом, построенный по проекту <?php echo $post_title; ?></div>
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

	
	<?php if ( get_field( 'similar_projects_title' ) ) { ?>

		<div class="similar-projects">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<h2 class="section-title">
							<?php the_field( 'similar_projects_title' ); ?>
						</h2>
					</div>
				</div>

				<?php $projects = get_field( 'similar_projects_items' ); $noCount = true; ?>

                <?php include 'template-parts/projects/finished-projects.php'; ?>


			</div>
		</div>

	<?php } ?>

</div>

<?php get_footer(); ?>