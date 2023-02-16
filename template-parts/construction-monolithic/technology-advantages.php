<?php 

/*
	Преимущества технологии
*/

 ?>

<div class="section section-technology-advantages">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-xxl-6">
				<?php if ( get_field( 'technology_advantages_img' ) ) { ?>
					<div class="technology-advantages-img">
						<img class="lazy" src="data:image/gif;base64,R0lGODlhEAAJAIAAAP///wAAACH5BAEAAAEALAAAAAAQAAkAAAIKjI+py+0Po5yUFQA7" data-src="<?php the_field( 'technology_advantages_img' ); ?>" alt="<?php the_field( 'technology_advantages_title' ); ?>" />
					</div>
				<?php } ?>
			</div>
			<div class="col-xxl-6">
				<h2 class="section-title">
					<?php the_field( 'technology_advantages_title' ); ?>
				</h2>
				<div class="technology-advantages-text">
					<?php the_field( 'technology_advantages_text' ); ?>
				</div>
			</div>
		</div>

		<div class="quality-design">
			<div class="row align-items-center">
				<div class="col-xl-8">
					<h2 class="section-title">
						<?php the_field( 'technology_advantages_title_2' ); ?>
					</h2>
					<div class="quality-design__text">
						<?php the_field( 'technology_advantages_text_2' ); ?>
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