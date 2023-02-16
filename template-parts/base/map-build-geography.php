<?php 

/*
	Карта география строительства
*/

 ?>

<div class="map">
	<div id="buildMap" class="map-wrapper map-build">
	
		<script async src="https://api-maps.yandex.ru/2.1/?apikey=ab6a5dd8-c65e-4f4e-9e9a-eea63b553be5&lang=ru_RU" type="text/javascript"></script>

		<?php 
			if ( wp_is_mobile() ) {
				$result_mobile = 7;
			} else {
				$result_mobile = 9;
			}
		 ?>
		<script>
			setTimeout(function(){
				ymaps.ready(init);
			}, 3000);

			function init(){
				var myMap = new ymaps.Map("buildMap", {
					center: [44.833513, 33.949832],
					zoom: <? echo $result_mobile;?>
				});
				myMap.behaviors.disable('scrollZoom');
				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
					myMap.behaviors.disable('drag');
				}

				myMap.geoObjects
				<?php if ( have_rows( 'geotags', 20 ) ) : ?>
					<?php while ( have_rows( 'geotags', 20 ) ) : the_row(); ?>

					.add(new ymaps.Placemark([<?php the_sub_field( 'geotag_width' ); ?>, <?php the_sub_field( 'geotag_longitude' ); ?>], {
						balloonContent: '<strong><?php the_sub_field( 'geotag_address' ); ?></strong>'
					}, {
						iconLayout: 'default#image',
						iconImageHref: '/wp-content/themes/lukskrym/assets/images/luks.png',
						iconImageSize: [35, 24],
						iconImageOffset: [0, 0]
					}))
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>

			}
		</script>

	</div>
</div>