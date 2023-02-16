<?php 

/*
	Дорожная карта строительства
*/

 ?>

<div class="roadmap">
	<div class="roadmap-description">
		<div class="roadmap-description__title">Дорожная карта строительства дома под ключ</div>
		<p>Путь от начала<br> и до конца с компанией Luks</p>
		<!-- <a href="<?php the_field( 'roadmap_url', 2 ); ?>" class="button button-accent" download>Скачать</a> -->
		<a href="<?= get_field("marquiz_link", 8) ?>" class="button button-accent button-accent--marquiz">Пройти тест и скачать</a>
	</div>
	<div class="roadmap-img">
		<img class="lazy" src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAEALAAAAAABAAEAAAICTAEAOw==" data-src="<?php echo get_stylesheet_directory_uri() . '/assets/images/roadmap.png' ?>" alt="Дорожная карта строительства дома под ключ">
	</div>
</div>