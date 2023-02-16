<?php 

/*
	Наши услуги
*/


 ?>

<div class="services">
	<div class="row">
		<div class="col-12">

			<div class="services-row">
				<div class="services-column">
					<div class="services-item">
						<a href="<?php the_field( 'service_url_1', 2 ); ?>/">
							<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/services/services-item-1.png' ?>" alt="<?php the_field( 'service_title_1', 2 ); ?>">
							<div class="services-item__title services-item__title--first">
								<?php the_field( 'service_title_1', 2 ); ?>
								<span><?php the_field( 'service_text_1', 2 ); ?></span>
							</div>
						</a>
					</div>
					<div class="services-item">
						<a href="<?php the_field( 'service_url_2', 2 ); ?>/">
							<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/services/services-item-2.png' ?>" alt="<?php the_field( 'service_title_2', 2 ); ?>">
							<div class="services-item__title services-item__title--wide">
								<?php the_field( 'service_title_2', 2 ); ?>
								<span><?php the_field( 'service_text_2', 2 ); ?></span>
							</div>
						</a>
					</div>
				</div>
				<div class="services-column">
					<div class="services-item">
						<a href="<?php the_field( 'service_url_3', 2 ); ?>/">
							<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/services/services-item-3.png' ?>" alt="<?php the_field( 'service_title_3', 2 ); ?>">
							<div class="services-item__title services-item__title--wide">
								<?php the_field( 'service_title_3', 2 ); ?>
								<span><?php the_field( 'service_text_3', 2 ); ?></span>
							</div>
						</a>
					</div>
				</div>
			</div>

			<div class="services-row wow fadeIn">
				<div class="services-column">
					<div class="services-item">
						<a href="<?php the_field( 'service_url_4', 2 ); ?>/">
							<img class="lazy" src="data:image/gif;base64,R0lGODlhJQAhAIAAAP///wAAACH5BAEAAAEALAAAAAAlACEAAAIhjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTMcFADs=" data-src="<?php echo get_stylesheet_directory_uri() . '/assets/images/services/services-item-4.png' ?>" alt="<?php the_field( 'service_title_4', 2 ); ?>">
							<div class="services-item__title services-item__title--wide">
								<?php the_field( 'service_title_4', 2 ); ?>
								<span><?php the_field( 'service_text_4', 2 ); ?></span>
							</div>
						</a>
					</div>
				</div>
				<div class="services-column">
					<div class="services-row">
						<div class="services-item">
							<a href="<?php the_field( 'service_url_5', 2 ); ?>/">
								<img class="lazy" src="data:image/gif;base64,R0lGODlhJAAZAIAAAP///wAAACH5BAEAAAEALAAAAAAkABkAAAIcjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrZrAQA7" data-src="<?php echo get_stylesheet_directory_uri() . '/assets/images/services/services-item-5.png' ?>" alt="<?php the_field( 'service_title_5', 2 ); ?>">
								<div class="services-item__title services-item__title--small">
									<?php the_field( 'service_title_5', 2 ); ?>
									<span><?php the_field( 'service_text_5', 2 ); ?></span>
								</div>
							</a>
						</div>
						<div class="services-item">
							<a href="<?php the_field( 'service_url_6', 2 ); ?>/">
								<img class="lazy" src="data:image/gif;base64,R0lGODlhJAAZAIAAAP///wAAACH5BAEAAAEALAAAAAAkABkAAAIcjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrZrAQA7" data-src="<?php echo get_stylesheet_directory_uri() . '/assets/images/services/services-item-6.png' ?>" alt="<?php the_field( 'service_title_6', 2 ); ?>">
								<div class="services-item__title services-item__title--small">
									<?php the_field( 'service_title_6', 2 ); ?>
									<span><?php the_field( 'service_text_6', 2 ); ?></span>
								</div>
							</a>
						</div>
					</div>
					<div class="services-item">
						<a href="<?php the_field( 'service_url_7', 2 ); ?>/">
							<img class="lazy" src="data:image/gif;base64,R0lGODlhJQATAIAAAP///wAAACH5BAEAAAEALAAAAAAlABMAAAIYjI+py+0Po5y02ouz3rz7D4biSJbmiaYFADs=" data-src="<?php echo get_stylesheet_directory_uri() . '/assets/images/services/services-item-7.png' ?>" alt="<?php the_field( 'service_title_7', 2 ); ?>">
							<div class="services-item__title services-item__title--wide">
								<?php the_field( 'service_title_7', 2 ); ?>
								<span><?php the_field( 'service_text_7', 2 ); ?></span>
							</div>
						</a>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>