<?php 

/*
	Строительство с соблюдением всех нормативных требований
*/

 ?>

<div class="section section-building-standards">
	<div class="container">
		<div class="building-standards">
			<div class="row">
				<div class="col-xl-8">
					<div class="building-standards__description">
						<h2 class="section-title">
							<?php the_field( 'building_standards_title' ); ?>
						</h2>
						<?php the_field( 'building_standards_text' ); ?>
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