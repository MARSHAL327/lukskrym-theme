<?php 

/*
Template Name: Блог
*/

 ?>

<?php get_header(); ?>

<div class="page-content page-content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumbs">
					<?php true_breadcrumbs(); ?>
				</div>
			</div>

			<div class="col-12 text-center">
				<h1 class="page-title">
					<?php the_field( 'blog_title' ); ?>
				</h1>
			</div>
		</div>

		<div class="row row-blog-posts">
			<div class="col-md-4 col-lg-3">
				<div class="categories">
					<h2 class="categories__title">Рубрики</h2>
					<ul>
						<?php wp_list_categories('hide_empty=0&title_li=&hierarchical=0&show_count=0&use_desc_for_title=0&child_of=5'); ?>
					</ul>
				</div>

				<?php get_template_part('template-parts/home/roadmap'); ?>
			</div>
			
			<div class="col-md-8 col-lg-9">
				<div class="posts-wrapper">

				<?php  
					$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
					$params = array(
						'posts_per_page' => 5, // количество постов на странице
						'post_type'      => 'post', // тип постов
						'cat'    	 	 => 5, // id категории
						'paged'          => $current_page // текущая страница
					);
					query_posts($params);
					 
					$wp_query->is_archive = true;
					$wp_query->is_home = false;

					while ( have_posts() ): the_post(); ?>

						<div class="post-card">
							<div class="post-card__img">
								<a href="<?php the_permalink($post); ?>">
									<img src="<?php the_post_thumbnail_url( 'post-image-thumb' ); ?>" alt="<?php the_title(); ?>">
								</a>
							</div>
							<div class="post-card__description">
								<div class="post-date"><?php the_time('j F Y'); ?></div>
								<div class="post-title">
									<h3><a href="<?php the_permalink($post); ?>">
										<?php the_title(); ?>
									</a></h3>
								</div>
								<div class="post-excerpt">
									<?php if ( get_field( 'post_excerpt' ) ) { ?>
										<p><?php the_field( 'post_excerpt' ); ?></p>
									<?php } else {
										the_excerpt();
									} ?>
								</div>
								<a href="<?php the_permalink(); ?>" rel="bookmark" class="button">Читать дальше...</a>
							</div>
						</div>
						
					<?php endwhile; ?>

					<div class="pagination">
						<?php 
							echo paginate_links(
								array(
									'prev_next' => true,
									'prev_text' => __( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"/></svg>' ),
									'next_text' => __( '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>' ),
									'mid_size' => 1,
									'end_size' => 1,
								)
							);
						 ?>
					 </div>
				</div>
			</div>
		</div>

	</div>
</div>

<?php get_footer(); ?>