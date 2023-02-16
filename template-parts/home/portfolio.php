<?php 

/*
	Реализованные объекты
*/


 ?>

<div class="section section-portfolio">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="section-title wow fadeInDown">
					<?php the_field( 'portfolio_title' ); ?>
				</div>
				<p class="section-description wow fadeInUp">
					<?php the_field( 'portfolio_text' ); ?>
				</p>
			</div>
		</div>

		<div id="portfolio-projects" class="portfolio">
			<div class="row">
				<div class="col-12">
					<div class="tabs-wrapper">
						<div class="tabs">
							<span class="tab">Строительство</span>
							<span class="tab">Отделка</span>
							<span class="tab">Реконструкция</span>
							<span class="tab">Проектирование</span>
							<span class="tab">Дизайн</span>
						</div>

						<div class="tabs-content">
							<div class="tab-item">
								<div class="row row-building">
									<?php include 'portfolio/building.php'; ?>
								</div>
							</div>

							<div class="tab-item">
								<div class="row row-finishing">
									<?php include 'portfolio/finishing.php'; ?>
								</div>
							</div>

							<div class="tab-item">
								<div class="row row-reconstruction">
									<?php include 'portfolio/reconstruction.php'; ?>
								</div>
							</div>

							<div class="tab-item">
								<div class="row row-engineering">
									<?php include 'portfolio/engineering.php'; ?>
								</div>
							</div>

							<div class="tab-item">
								<div class="row row-design">
									<?php include 'portfolio/design.php'; ?>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="col-12 text-center">
					<div class="portfolio-button">
						<a href="<?php echo site_url() . '/portfolio/' ?>" class="button">Смотреть все портфолио</a>
					</div>
				</div>

			</div>
		</div>

	</div>
</div>