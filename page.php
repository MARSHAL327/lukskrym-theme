<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package lukskrym
 */

get_header(); ?>

<div class="page-content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumbs">
					<?php true_breadcrumbs(); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-10 offset-xl-1 col-xxl-8 offset-xxl-2">

				<article class="article">

					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<div class="article__title text-center">
							<?php if ( get_field('alternative_title') ) { ?>
								<h1 class="page-title">
									<?php the_field( 'alternative_title' ); ?>
								</h1>
							<?php } else { ?>
								<h1 class="page-title">
									<?php the_title(); ?>
								</h1>
							<?php } ?>
						</div>

						<div class="article__img">
							<?php the_post_thumbnail('post-image-large'); ?>
						</div>
						
						<div class="article__text">
							<?php the_content(); ?>
						</div>

					<?php endwhile; ?>			
					<?php endif; ?>

				</article>

			</div>
		</div>
	</div>
</div>

<?php
get_footer();
