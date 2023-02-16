<?php 

/*
	Дизайн
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
			swapElements($('#portfolio-projects .row-design .col-lg-4'), 0, 2);
		});
	});
</script>

<?php $portfolio_design = get_field( 'portfolio_design' ); ?>

<?php if ( $portfolio_design ): ?>

	<?php foreach ( $portfolio_design as $post ):  ?>

		<?php setup_postdata ( $post ); ?>

		<div class="col-md-6 col-lg-4">
			<div class="portfolio-item">
				<a href="<?php the_permalink($post); ?>" class="open-gallery">
					<img src="<?php the_post_thumbnail_url( 'portfolio-item-image-thumb' ); ?>" alt="<?php the_title(); ?>">

					<div class="portfolio-item__title">
						<div class="h3"><?php the_title(); ?></div>
						<span class="button">Подробнее</span>
					</div>
				</a>
			</div>
		</div>

	<?php endforeach; ?>

	<?php wp_reset_postdata(); ?>

<?php endif; ?>