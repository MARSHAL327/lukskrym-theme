<?php 

/*
Template Name: Спецпредложения
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
			<div class="col-12 text-center">
				<h1 class="page-title">
					<?php the_field( 'page_offers_title' ); ?>
				</h1>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="tabs-wrapper">
					<div class="tabs">
						<?php 
							$land = get_field( 'land' );
							$finished_houses = get_field( 'finished_houses' );
							$kp_wine_village = get_field( 'kp_wine_village' );
							$mortgage = get_field( 'mortgage' );
							$special_offers = get_field( 'special_offers' );
							$investors = get_field( 'investors' );
						 ?>

						<?php if ( $land ): ?>
							<span class="tab">Участки</span>
						<?php endif; ?>

						<?php if ( $finished_houses ): ?>
							<span class="tab">Готовые дома</span>
						<?php endif; ?>

						<?php if ( $kp_wine_village ): ?>
							<span class="tab">Коттeджные поселки</span>
						<?php endif; ?>

						<?php if ( $mortgage ): ?>
							<span class="tab">Ипотека и кредитные программы</span>
						<?php endif; ?>

						<?php if ( $special_offers ): ?>
							<span class="tab">Спецпредложения</span>
						<?php endif; ?>

						<?php if ( $investors ): ?>
							<span class="tab">Для инвесторов</span>
						<?php endif; ?>
					</div>

					<div class="tabs-content">

						<?php if ( $land ): ?>
							<div class="tab-item">
								<div class="row">

									<?php foreach ( $land as $post ): ?>
									<?php setup_postdata ( $post ); ?>
									
										<div class="col-lg-6">
											<div class="offers-item">
												<a href="<?php the_permalink($post); ?>" class="offers-item__thumb">
													<img src="<?php the_post_thumbnail_url( 'offers-item-thumb' ); ?>" alt="<?php the_title(); ?>">
												</a>
												<div class="date"><?php the_time('j F Y'); ?></div>
												<h3 class="title"><a href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a></h3>
											</div>
										</div>

									<?php endforeach; ?>
									<?php wp_reset_postdata(); ?>

								</div>
							</div>
						<?php endif; ?>

						<?php if ( $finished_houses ): ?>
							<div class="tab-item">
								<div class="row">

									<?php foreach ( $finished_houses as $post ): ?>
									<?php setup_postdata ( $post ); ?>
									
										<div class="col-lg-6">
											<div class="offers-item">
												<a href="<?php the_permalink($post); ?>" class="offers-item__thumb">
													<img src="<?php the_post_thumbnail_url( 'offers-item-thumb' ); ?>" alt="<?php the_title(); ?>">
												</a>
												<div class="date"><?php the_time('j F Y'); ?></div>
												<h3 class="title"><a href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a></h3>
											</div>
										</div>

									<?php endforeach; ?>
									<?php wp_reset_postdata(); ?>

								</div>
							</div>
						<?php endif; ?>

						<?php if ( $kp_wine_village ): ?>
							<div class="tab-item">
								<div class="row">

									<?php foreach ( $kp_wine_village as $post ): ?>
									<?php setup_postdata ( $post ); ?>
									
										<div class="col-lg-6">
											<div class="offers-item">
												<a href="<?php the_permalink($post); ?>" class="offers-item__thumb">
													<img src="<?php the_post_thumbnail_url( 'offers-item-thumb' ); ?>" alt="<?php the_title(); ?>">
												</a>
												<div class="date"><?php the_time('j F Y'); ?></div>
												<h3 class="title"><a href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a></h3>
											</div>
										</div>

									<?php endforeach; ?>
									<?php wp_reset_postdata(); ?>

								</div>
							</div>
						<?php endif; ?>
						
						<?php if ( $mortgage ): ?>
							<div class="tab-item">
								<div class="row">

									<?php foreach ( $mortgage as $post ): ?>
									<?php setup_postdata ( $post ); ?>
									
										<div class="col-lg-6">
											<div class="offers-item">
												<a href="<?php the_permalink($post); ?>" class="offers-item__thumb">
													<img src="<?php the_post_thumbnail_url( 'offers-item-thumb' ); ?>" alt="<?php the_title(); ?>">
												</a>
												<div class="date"><?php the_time('j F Y'); ?></div>
												<h3 class="title"><a href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a></h3>
											</div>
										</div>

									<?php endforeach; ?>
									<?php wp_reset_postdata(); ?>

								</div>
							</div>
						<?php endif; ?>

						<?php if ( $special_offers ): ?>
							<div class="tab-item">
								<div class="row">

									<?php foreach ( $special_offers as $post ): ?>
									<?php setup_postdata ( $post ); ?>
									
										<div class="col-lg-6">
											<div class="offers-item">
												<a href="<?php the_permalink($post); ?>" class="offers-item__thumb">
													<img src="<?php the_post_thumbnail_url( 'offers-item-thumb' ); ?>" alt="<?php the_title(); ?>">
												</a>
												<div class="date"><?php the_time('j F Y'); ?></div>
												<h3 class="title"><a href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a></h3>
											</div>
										</div>

									<?php endforeach; ?>
									<?php wp_reset_postdata(); ?>

								</div>
							</div>
						<?php endif; ?>

						<?php if ( $investors ): ?>
							<div class="tab-item">
								<div class="row">

									<?php foreach ( $investors as $post ): ?>
									<?php setup_postdata ( $post ); ?>
									
										<div class="col-lg-6">
											<div class="offers-item">
												<a href="<?php the_permalink($post); ?>" class="offers-item__thumb">
													<img src="<?php the_post_thumbnail_url( 'offers-item-thumb' ); ?>" alt="<?php the_title(); ?>">
												</a>
												<div class="date"><?php the_time('j F Y'); ?></div>
												<h3 class="title"><a href="<?php the_permalink(); ?>">
													<?php the_title(); ?>
												</a></h3>
											</div>
										</div>

									<?php endforeach; ?>
									<?php wp_reset_postdata(); ?>

								</div>
							</div>
						<?php endif; ?>

					</div>

				</div>
			</div>
		</div>
	</div>

	<?php
        include 'template-parts/mortgage_block.php';
		include 'template-parts/home/order-consultation.php';
		include 'template-parts/home/news.php';

	?>

</div>

<?php get_footer(); ?>