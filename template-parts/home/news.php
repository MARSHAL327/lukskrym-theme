<?php 

/*
	Новости
*/


 ?>

<div class="section section-news">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="section-title">Новости</div>
			</div>
		</div>

		<div class="row">
			<div class="col-10 offset-1">
				<div class="owl-carousel carousel-news">

					<?php 
						$posts = get_posts(array(
							'post_type'   => 'post',
							'category'    => 5,
							'numberposts' => 8,
							'orderby'     => 'date',
							'order'       => 'DESC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  => '',
							'suppress_filters' => true
						));

					foreach( $posts as $post ) {

					setup_postdata($post); ?>

						<div class="news-card">
							<a href="<?php the_permalink($post); ?>" class="news-card__img">
								<img class="owl-lazy" data-src="<?php the_post_thumbnail_url( 'post-image-thumb' ); ?>" alt="<?php the_title(); ?>">
							</a>
							<div class="news-card__date">
								<?php the_time('j F Y'); ?>
							</div>
							<div class="news-card__title"><a class="newsh3" href="<?php the_permalink($post); ?>">
								<?php the_title(); ?></a>
							</div>
						</div>

					<?php wp_reset_postdata(); } ?>

				</div>
			</div>
		</div>

	</div>
</div>