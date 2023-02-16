<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
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
			<div class="col-12 text-center">
				<div class="404-content">
					<h1 class="page-title">Ошибка 404. Страница не найдена</h1>
					<p>Извините, этой страницы больше не существует или она была перемещена по другому адресу.</p>
					<p>Ознакомиться с нашими услугами можно <a href="<?php echo site_url() . '/services/' ?>">здесь</a>.</p>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();
