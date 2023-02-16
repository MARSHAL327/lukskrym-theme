<?php 

/*
	Услуги
*/


 ?>

<div class="section section-building-stages">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center wow fadeInDown">
				<h2 class="section-title">
					<?php the_field( 'building_stages_title' ); ?>
				</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="building-stages">

					<?php if ( get_field( 'building_stages_img' ) ) { ?>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhMwAOAIAAAP///wAAACH5BAEAAAEALAAAAAAzAA4AAAIZjI+py+0Po5y02ouz3rz7D4biSJbmiaZPAQA7" data-src="<?php the_field( 'building_stages_img' ); ?>" alt="<?php the_field( 'building_stages_title' ); ?>" />
					<?php } ?>

				</div>

				<div class="timeline">
					<div class="timeline-item timeline-item--engineering">
						<div class="timeline-item__number"><span>1</span></div>
						<div class="timeline-item__text">
							<h3>Проектирование</h3>
							<span>2 месяца</span>
							<p>Выбор проекта, подготовка документации</p>
						</div>
					</div>

					<div class="timeline-item timeline-item--building">
						<div class="timeline-item__number"><span>2</span></div>
						<div class="timeline-item__text">
							<h3>Строительство</h3>
							<span>4 месяца</span>
							<p>Строительный процесс</p>
						</div>
					</div>

					<div class="timeline-item timeline-item--networks">
						<div class="timeline-item__number"><span>3</span></div>
						<div class="timeline-item__text">
							<h3>Окна и инженерные сети</h3>
							<span>2 месяца</span>
							<p>Установка окон и разводка инженерных сетей</p>
						</div>
					</div>

					<div class="timeline-item timeline-item--finishing">
						<div class="timeline-item__number"><span>4</span></div>
						<div class="timeline-item__text">
							<h3>Отделка</h3>
							<span>3 месяца</span>
							<p>Внуренняя и внешняя отделка дома</p>
						</div>
					</div>

					<div class="timeline-item timeline-item--landscaping">
						<div class="timeline-item__number"><span>5</span></div>
						<div class="timeline-item__text">
							<h3>Благоустройство</h3>
							<span>1 месяц</span>
							<p>Мебелировка и ландшафтный дизайн</p>
						</div>
					</div>

				</div>
			</div>
		</div>

	</div>
</div>