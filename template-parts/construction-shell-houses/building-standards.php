<?php 

/*
	Строительство с соблюдением всех нормативных требований
*/

 ?>

<div class="section section-building-standards">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-title">
					<?php the_field( 'building_standards_title' ); ?>
				</h2>
			</div>
		</div>

		<div class="building-standards">
			<div class="row">
				<div class="col-xl-8">
					<div class="building-standards__description">
						<?php the_field( 'building_standards_text' ); ?>
					</div>

					<div class="building-standards__items">
						
						<?php if ( have_rows( 'building_standards_items' ) ) : ?>
							<?php while ( have_rows( 'building_standards_items' ) ) : the_row(); ?>

								<div class="standard-item">
									<div class="standard-item__text">
										<h4><?php the_sub_field( 'standard_item_title' ); ?></h4>
										<p><?php the_sub_field( 'standard_item_text' ); ?></p>
									</div>
									<div class="standard-item__img">
										<?php if ( get_sub_field( 'standard_item_img' ) ) { ?>
											<img class="lazy" src="data:image/gif;base64,R0lGODlhZwDRAIAAAP///wAAACH5BAEAAAEALAAAAABnANEAAAK1jI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yu9wsOi8fksvmMTqvX7Lb7DY/L5/S6/Y7P6/f8vv8PGCg4SFhoeIiYqLjI2Oj4CBkpOUlZaXmJmam5ydnp+QkaKjpKWmp6ipqqusra6voKGys7S1tre4ubq7vL2+v7CxwsPExcbHyMnKy8zNzs/AwdLS1dAAA7" data-src="<?php the_sub_field( 'standard_item_img' ); ?>" alt="<?php the_sub_field( 'standard_item_title' ); ?>" />
										<?php } ?>
									</div>
								</div>

							<?php endwhile; ?>
						<?php else : ?>
							<?php // no rows found ?>
						<?php endif; ?>

					</div>
				</div>

				<div class="col-xl-4">
					<div class="news-items">

						<?php $recommended_news = get_field( 'recommended_news' ); ?>

						<?php if ( $recommended_news ): ?>

							<?php foreach ( $recommended_news as $post ):  ?>
							<?php setup_postdata ( $post ); ?>
							
							<div class="news-item">
								<a href="<?php the_permalink($post); ?>" class="news-item__thumb">
									<img src="<?php the_post_thumbnail_url( 'portfolio-news-item-thumb' ); ?>" alt="<?php the_title(); ?>">
								</a>
								<div class="news-item__description">
									<div class="date"><?php the_time('j F Y'); ?></div>
									<h3><a href="<?php the_permalink(); ?>">
										<?php the_title(); ?>
									</a></h3>
									<a href="<?php the_permalink(); ?>" rel="bookmark" class="button button-accent">Читать подробнее</a>
								</div>
							</div>

							<?php endforeach; ?>
							<?php wp_reset_postdata(); ?>

						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>

	</div>
</div>