<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package lukskrym
 */

get_header();
?>

<div class="page-content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumbs">
					<?php true_breadcrumbs(); ?>
				</div>
			</div>
		</div>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<article class="article">
				<div class="row">
					<div class="col-12 text-center">
						<div class="article__title">
							<h1 class="page-title">
								<?php if ( get_field('sample_page_title') ) {
									the_field( 'sample_page_title' );
								} else {
									the_title();
								} ?>
							</h1>
						</div>
					</div>
				</div>

				<div class="row row-fd">
					<div class="col-lg-3">
						<div class="categories">
							<h2 class="categories__title">Рубрики</h2>
							<ul>
								<?php wp_list_categories('hide_empty=0&title_li=&hierarchical=0&show_count=0&use_desc_for_title=0&child_of=5'); ?>
							</ul>
						</div>

						<?php get_template_part('template-parts/home/roadmap'); ?>
					</div>

					<div class="col-lg-9">
						<div class="posts-wrapper">
<!-- 							<div class="article__img">
								<?php the_post_thumbnail('post-image-large'); ?>
							</div> -->
							
							<div class="article__text">
								<?php the_content(); ?>

								<!-- <script src="https://yastatic.net/share2/share.js"></script>
								<div class="share">
									<div class="ya-share2" data-curtain data-shape="round" data-services="vkontakte,facebook,odnoklassniki,telegram,viber,whatsapp"></div>
								</div> -->
							</div>
						</div>
					</div>
				</div>
			</article>

		<?php endwhile; ?>			
		<?php endif; ?>

	</div>

	<?php 

		include 'template-parts/projects/order-calculation.php';
		include 'template-parts/home/news.php';

	 ?>
</div>

<?php
get_footer();
