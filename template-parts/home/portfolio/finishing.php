<?php 

/*
	Отделка
*/

 ?>

<div class="col-md-6 col-lg-4 d-inline-flex">
	<div class="news-items">

		<?php if ( have_rows( 'recommended_news' ) ) : ?>
			<?php while ( have_rows( 'recommended_news' ) ) : the_row(); ?>

				<div class="news-item">
					<a href="<?php the_sub_field( 'recommended_news_url' ); ?>" class="news-item__thumb">
						<?php if ( get_sub_field( 'recommended_news_img' ) ) { ?>
							<img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php the_sub_field( 'recommended_news_img' ); ?>" alt="<?php the_sub_field( 'recommended_news_title' ); ?>">
						<?php } ?>
					</a>
					<div class="news-item__description">
						<div class="date"><?php the_sub_field( 'recommended_news_date' ); ?></div>
						<div class="title"><a href="<?php the_sub_field( 'recommended_news_url' ); ?>">
							<?php the_sub_field( 'recommended_news_title' ); ?>
						</a></div>
						<a href="<?php the_sub_field( 'recommended_news_url' ); ?>" rel="bookmark" class="button button-accent">Читать подробнее</a>
					</div>
				</div>

			<?php endwhile; ?>
		<?php else : ?>
			<?php // no rows found ?>
		<?php endif; ?>

	</div>
</div>

<script>
	jQuery(document).ready(function($) {
		let swapElements = function(siblings, subjectIndex, objectIndex) {
			let subject = $(siblings.get(subjectIndex));
			let object = siblings.get(objectIndex);
			subject.insertAfter(object);
		}
		$(function() {
			swapElements($('#portfolio-projects .row-finishing .col-lg-4'), 0, 2);
		});
	});
</script>

<?php $portfolio_finishing = get_field( 'portfolio_finishing' ); ?>

<?php if ( $portfolio_finishing ): ?>

	<?php $counter = 0; ?>

	<?php foreach ( $portfolio_finishing as $post ):  ?>

		<?php $counter++; ?>

		<?php setup_postdata ( $post ); ?>

		<div class="col-md-6 col-lg-4">
			<div class="portfolio-item portfolio-finishing-gallery-<?php echo $counter; ?>">
				<a href="<?php the_post_thumbnail_url( 'portfolio-item-image-thumb' ); ?>" class="open-gallery">
					<img src="<?php the_post_thumbnail_url( 'portfolio-item-image-thumb' ); ?>" alt="<?php the_title(); ?>">

					<div class="portfolio-item__title">
						<div class="h3"><?php the_title(); ?></div>
						<span class="button">Подробнее</span>
					</div>
				</a>

				<?php $project_gallery = get_field( 'project_gallery' ); ?>

				<div class="hidden">
					<?php if ( $project_gallery ) :  ?>
						<?php foreach ( $project_gallery as $project_gallery_image ): ?>

							<a href="<?php echo esc_url($project_gallery_image['url']); ?>">
								<img class="lazy" src="data:image/gif;base64,R0lGODlhBQADAIAAAP///wAAACH5BAEAAAEALAAAAAAFAAMAAAIDjI9ZADs=" data-src="<?php echo esc_url($project_gallery_image['url']); ?>" alt="<?php the_title(); ?>" />
							</a>

						<?php endforeach; ?>
					<?php endif; ?>
				</div>
			</div>

			<script>
				jQuery(document).ready(function($) {
					$('.portfolio-finishing-gallery-<?php echo $counter; ?>').magnificPopup({
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

	<?php endforeach; ?>

	<?php wp_reset_postdata(); ?>

<?php endif; ?>