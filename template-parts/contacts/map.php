<?php 

/*
	Карта
*/

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
					center: [44.599059, 33.521165],
					zoom: 14
				});

				myMap.behaviors.disable('scrollZoom');
				if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)){
					myMap.behaviors.disable('drag');
				}

				myMap.geoObjects
					.add(new ymaps.Placemark([44.599059, 33.521165], {
						balloonContent: '<strong>LUKS<br>г. Севастополь, ул. Гоголя 8<br><a href="https://yandex.ru/maps/?rtext=~44.599059%2C33.521165" target="_blank">Построить маршрут</a></strong>'
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