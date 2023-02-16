<?php 

/*
	Проектирование
*/

 ?>

<?php 
	$posts = get_posts(array(
		'numberposts' => -1,
		'category'    => 18,
		'orderby'     => 'date',
		'order'       => 'DESC',
		'include'     => array(),
		'exclude'     => array(),
		'meta_key'    => '',
		'meta_value'  => '',
		'post_type'   => 'post',
		'nopaging'	  => true,
		'suppress_filters' => true
	));

	foreach( $posts as $post ) {
		setup_postdata($post); ?>

		<div class="col-md-6 col-lg-4">
			<div class="portfolio-item">
				<a href="<?php the_permalink($post); ?>" class="open-gallery">
					<img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php the_post_thumbnail_url( 'portfolio-item-image-thumb' ); ?>" alt="<?php the_title(); ?>">

					<div class="portfolio-item__title">
						<div class="h3"><?php the_title(); ?></div>
						<span class="button">Подробнее</span>
					</div>
				</a>
			</div>
		</div>

	<?php wp_reset_postdata(); } ?>