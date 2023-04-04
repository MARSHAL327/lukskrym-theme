<?php 

/*
	Карта
*/

$mapCoords = get_field("map_coord");
 ?>

<div class="map">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-title">Схема проезда</h2>
			</div>
		</div>
	</div>
	<div id="map" class="map-wrapper">
		<script src="https://api-maps.yandex.ru/2.1/?apikey=ab6a5dd8-c65e-4f4e-9e9a-eea63b553be5&lang=ru_RU" type="text/javascript"></script>
		<script>
			ymaps.ready(init);

			function init(){
				var myMap = new ymaps.Map("map", {
					center: [<?= $mapCoords["lat"] ?>, <?= $mapCoords["lon"] ?>],
					zoom: 14
				});

				myMap.behaviors.disable('scrollZoom');
				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
					myMap.behaviors.disable('drag');
				}

				myMap.geoObjects
					.add(new ymaps.Placemark([<?= $mapCoords["lat"] ?>, <?= $mapCoords["lon"] ?>], {
						balloonContent: '<strong>LUKS<br><?= get_field("address") ?><br><a href="https://yandex.ru/maps/?rtext=~<?= $mapCoords["lat"] ?>%2C<?= $mapCoords["lon"] ?>" target="_blank">Построить маршрут</a></strong>'
					}, {
						iconLayout: 'default#image',
						iconImageHref: '<?php echo get_stylesheet_directory_uri() . '/assets/images/luks-yamap.png' ?>',
						iconImageSize: [77, 60],
						iconImageOffset: [-10, 0]
					}))
			}
		</script>
	</div>
</div>