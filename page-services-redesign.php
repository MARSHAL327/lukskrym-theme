<?php
/*
Template Name: Услуга редизайн
*/
 ?>
<?php get_header(); ?>

<div class="page-content">

		<?php $banner = get_field('banner'); ?>
	<section class="section top-screen" <?php if($banner['izobrazhenie_bannera']) { ?>style="background-image: url(<?php echo $banner['izobrazhenie_bannera']['sizes']['large']; ?>);"<?php } ?>>
		<div class="container">
			<div class="top-screen__wrap">
				<div class="top-screen__content">
					<div class="breadcrumbs">
						<a href="/">Главная</a> <span>/</span>
						<a href="/services/">Наши услуги</a> <span>/</span>
						<?php the_title(); ?>
					</div>
					<div class="top-screen__title">
						<h1><?php echo $banner['zagolovok']; ?></h1>
					</div>
					<div class="top-screen__subtitle"><?php echo $banner['podzagolovok']; ?></div>
					<div class="top-screen__text"><?php echo $banner['opisanie']; ?></div>
					<div class="top-screen__buttons">
						<!-- <a href="#orderCalcForm" class="button button-popup">Рассчитать строительство</a>
						<a href="#callback-catalog" class="button button-spacial button-popup" download="">Скачать каталог проектов</a> -->
						<a href="<?= get_field("marquiz_link", 8) ?>" class="button">Рассчитать строительство</a>
						<a href="<?= get_field("marquiz_link", 8) ?>" class="button button-spacial">Скачать каталог проектов</a>
					</div>
               <?php if($banner['preimushhestva']) { ?>
					<div class="block-advantages">
						<?php foreach ($banner['preimushhestva'] as $v_adv) { ?>
							<div class="block-advantages__item"><?php echo $v_adv['tekst']; ?></div>
						<?php } ?>
					</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</div>

	<?php if (get_field('opisanie_pod_bannerom')['opisanie']) { ?>
	<section class="section text-image">
		<div class="container">
			<div class="text-image__wrap">
				<div class="text-image__body">
						<h2 class="section-title"><?php echo get_field('opisanie_pod_bannerom')['zagolovok']; ?></h2>
						<div class="text-image__text">
							<?php echo get_field('opisanie_pod_bannerom')['opisanie']; ?>
						</div>
				</div>
				<div class="text-image__image">
					<img src="<?php echo get_field('opisanie_pod_bannerom')['izobrazhenie']['sizes']['large']; ?>" alt="<?php echo get_field('opisanie_pod_bannerom')['izobrazhenie']['alt']; ?>" title="<?php echo get_field('opisanie_pod_bannerom')['izobrazhenie']['title']; ?>">
				</div>
			</div>
		</div>
	</section>
	<?php } ?>

    <?php include 'template-parts/mortgage_block.php'; ?>

	<div class="section section-order-consultation section-order-form">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<div class="section-title">
						<?php the_field( 'manager_title' ); ?>
					</div>
					<p><?php the_field( 'manager_subtitle'); ?></p>

					<div class="manager">
						<div class="manager__img">
							<img src="<?php the_field( 'manager_img' ); ?>" alt="<?php the_field( 'manager_name' ); ?>" title="<?php the_field( 'manager_position' ); ?>">
						</div>
						<div class="manager__text">
							<div class="name"><?php the_field( 'manager_name' ); ?></div>
							<p><?php the_field( 'manager_position' ); ?></p>
							<a href="https://wa.me/<?php the_field( 'whatsapp', 8 ); ?>" class="button button-accent" target="_blank">
								<svg width="28" height="28" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48Z" fill="#25D366"/><path fill-rule="evenodd" clip-rule="evenodd" d="M24.7911 37.3525H24.7852C22.3967 37.3517 20.0498 36.7524 17.9653 35.6154L10.4 37.6L12.4246 30.2048C11.1757 28.0405 10.5186 25.5855 10.5196 23.0702C10.5228 15.2017 16.9248 8.79999 24.7909 8.79999C28.6086 8.80164 32.1918 10.2879 34.8862 12.9854C37.5806 15.6828 39.0636 19.2683 39.0621 23.0815C39.059 30.9483 32.6595 37.3493 24.7911 37.3525ZM18.3159 33.0319L18.749 33.2889C20.5702 34.3697 22.6578 34.9415 24.7863 34.9423H24.7911C31.3288 34.9423 36.6499 29.6211 36.6525 23.0807C36.6538 19.9112 35.4212 16.9311 33.1817 14.689C30.9422 12.4469 27.964 11.2115 24.7957 11.2104C18.2529 11.2104 12.9318 16.5311 12.9292 23.0711C12.9283 25.3124 13.5554 27.4951 14.7427 29.3836L15.0248 29.8324L13.8265 34.2095L18.3159 33.0319ZM31.4924 26.154C31.7411 26.2742 31.9091 26.3554 31.9808 26.4751C32.0699 26.6238 32.0699 27.3378 31.7729 28.1708C31.4756 29.0038 30.051 29.764 29.3659 29.8663C28.7516 29.9582 27.9741 29.9965 27.1199 29.725C26.602 29.5607 25.9379 29.3413 25.0871 28.9739C21.7442 27.5304 19.485 24.2904 19.058 23.678C19.0281 23.6351 19.0072 23.6051 18.9955 23.5895L18.9927 23.5857C18.804 23.3339 17.5395 21.6468 17.5395 19.9008C17.5395 18.2582 18.3463 17.3973 18.7177 17.001C18.7432 16.9739 18.7666 16.9489 18.7875 16.926C19.1144 16.569 19.5007 16.4797 19.7384 16.4797C19.9761 16.4797 20.2141 16.4819 20.4219 16.4924C20.4475 16.4937 20.4742 16.4935 20.5017 16.4933C20.7095 16.4921 20.9686 16.4906 21.2242 17.1045C21.3225 17.3407 21.4664 17.691 21.6181 18.0604C21.9249 18.8074 22.264 19.6328 22.3236 19.7522C22.4128 19.9307 22.4722 20.1389 22.3533 20.3769C22.3355 20.4126 22.319 20.4463 22.3032 20.4785C22.2139 20.6608 22.1483 20.7948 21.9967 20.9718C21.9372 21.0413 21.8756 21.1163 21.814 21.1913C21.6913 21.3407 21.5687 21.4901 21.4619 21.5965C21.2833 21.7743 21.0975 21.9672 21.3055 22.3242C21.5135 22.6812 22.2292 23.8489 23.2892 24.7945C24.4288 25.8109 25.4192 26.2405 25.9212 26.4582C26.0192 26.5008 26.0986 26.5352 26.1569 26.5644C26.5133 26.7429 26.7213 26.713 26.9294 26.4751C27.1374 26.2371 27.8208 25.4338 28.0584 25.0769C28.2961 24.7201 28.5339 24.7795 28.8607 24.8984C29.1877 25.0176 30.9408 25.8801 31.2974 26.0586C31.367 26.0934 31.4321 26.1249 31.4924 26.154Z" fill="#FDFDFD"/></svg>
								Спросите в WhatsApp
							</a>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-xl-5 offset-xl-1">
					<div class="consultation-form form">
						<div class="section-title form__title">
							<?php the_field( 'form_title' ); ?>
						</div>
						<p class="form__text"><?php the_field( 'form_text' ); ?></p>
						<?php
							echo do_shortcode('[contact-form-7 id="171" title="Заказать консультацию"]');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>

		<?php if(get_field('etapy')['bloki']) { ?>
			<div class="section section-building-stages">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center wow fadeInDown">
							<?php if (get_field('etapy')['zagolovok']) { ?>
								<h2 class="section-title section-building-stages__title">
									<?php echo get_field('etapy')['zagolovok']; ?>
								</h2>
							<?php } ?>
						</div>
					</div>
					<div class="row">
						<div class="col-12 building-stages-wrap">
							<div class="building-stages">
								<div class="steps">
									<?php foreach (get_field('etapy')['bloki'] as $k_step => $v_step) {
										$background = "#007A9B";
										if($k_step==1) {
											$background = "#29ABE2";
										} elseif($k_step==2) {
											$background = "#FBB03B";
										} elseif($k_step==3) {
											$background = "#F15A24";
										} elseif($k_step==4) {
											$background = "#009245";
										} elseif($k_step==5) {
											$background = "#FCB06C";
										}
										if($k_step==0) { ?>
										<div class="steps__item step-item" style="background-color: #007A9B;">
											<div class="step-item__line"></div>
											<div class="step-item__item">
												<?php if($v_step['ssylka']) { ?>
													<a href='<?php echo $v_step['ssylka']; ?>' class="building-stages__button building-stages__button-left">
														<img src="https://lukskrym.ru/wp-content/uploads/2022/02/arrow-left.png" alt="arrow">
														<span>Перейти</span>
													</a>
												<?php } ?>
											</div>
											<div class="step-item__item">
												<div class="step-item__name"><?php echo $v_step['zagolovok']; ?></div>
												<div class="step-item__info"><?php echo $v_step['sroki']; ?></div>
												<div class="step-item__text"><?php echo $v_step['tekst']; ?></div>
											</div>
										</div>
									<?php } elseif(count(get_field('etapy')['bloki'])==$k_step+1) { ?>
										<div class="steps__item step-item" style="background-color: #DA95F4;">
											<div class="step-item__line"></div>
											<div class="step-item__item">
												<?php if($v_step['ssylka']) { ?>
													<a href='<?php echo $v_step['ssylka']; ?>' class="building-stages__button building-stages__button-right">
														<span>Перейти</span>
														<img src="https://lukskrym.ru/wp-content/uploads/2022/02/arrow-right.png" alt="arrow">
													</a>
												<?php } ?>
											</div>
											<div class="step-item__item">
												<div class="step-item__name"><?php echo $v_step['zagolovok']; ?></div>
												<div class="step-item__info"><?php echo $v_step['sroki']; ?></div>
												<div class="step-item__text"><?php echo $v_step['tekst']; ?></div>
											</div>
										</div>

									<?php } elseif(($k_step % 2) == 0 ){ ?>
										<div class="steps__item step-item" style="background-color: <?php echo $background; ?>;">
											<div class="step-item__line"></div>
											<div class="step-item__item step-item__item_top">
												<div class="step-item__number"><?php echo $k_step; ?></div>
											</div>
											<div class="step-item__item">
												<div class="step-item__name"><?php echo $v_step['zagolovok']; ?></div>
												<div class="step-item__info"><?php echo $v_step['sroki']; ?></div>
												<div class="step-item__text"><?php echo $v_step['tekst']; ?></div>
											</div>
										</div>

									<?php }else{ ?>
										<div class="steps__item step-item" style="background-color: <?php echo $background; ?>;">
											<div class="step-item__line"></div>
											<div class="step-item__item">
												<div class="step-item__name"><?php echo $v_step['zagolovok']; ?></div>
												<div class="step-item__info"><?php echo $v_step['sroki']; ?></div>
												<div class="step-item__text"><?php echo $v_step['tekst']; ?></div>
											</div>
											<div class="step-item__item">
												<div class="step-item__number"><?php echo $k_step; ?></div>
											</div>
										</div>

									<?php }
									} ?>

<!--
									<div class="steps__item step-item" style="background-color: #F15A24;">
										<div class="step-item__line"></div>
										<div class="step-item__item step-item__item_top">
											<div class="step-item__name">Разработка конструктива (КЖ / КМ)</div>
											<div class="step-item__info">2 недели</div>
											<div class="step-item__text">Разработка проектной документации для получения согласований и заключения экспертизы</div>
										</div>
										<div class="step-item__item">
											<div class="step-item__number">3</div>
										</div>
									</div>
									<div class="steps__item step-item" style="background-color: #009245;">
										<div class="step-item__line"></div>
										<div class="step-item__item step-item__item_top">
											<div class="step-item__number">4</div>
										</div>
										<div class="step-item__item">
											<div class="step-item__name">Проектирование инженерных сетей (ОВ, ВК, ЭО)</div>
											<div class="step-item__info">2 недели</div>
											<div class="step-item__text">Экспертиза проектной документации</div>
										</div>
									</div>
									<div class="steps__item step-item" style="background-color: #FCB06C;">
										<div class="step-item__line"></div>
										<div class="step-item__item step-item__item_top">
											<div class="step-item__name">Разработка генерального плана и наружных сетей</div>
											<div class="step-item__info">2 недели</div>
											<div class="step-item__text">Разработка рабочей документации</div>
										</div>
										<div class="step-item__item">
											<div class="step-item__number">5</div>
										</div>
									</div> -->

							</div>
						</div>
					</div>
				</div>
			</div>
		<?php } ?>
            <?php if(get_field('opisanie_pered_portfolio')['opisanie']) { ?>
			<div class="section full-cycle-company text-image">
				<div class="container">
					<div class="row">
						<?php if(get_field('opisanie_pered_portfolio')['zagolovok']) { ?>
						<div class="col-12 text-center">
							<div class="full-cycle-company__title">
								<h2 class="section-title"><?php echo get_field('opisanie_pered_portfolio')['zagolovok']; ?></h2>
							</div>
						</div>
						<?php } ?>
						<div class="col-12">
							<div class="full-cycle-company__text">
								<?php echo get_field('opisanie_pered_portfolio')['opisanie']; ?>
							</div>
						</div>
					</div>
				</div>
			</div>
         <?php } ?>

         <?php if(get_field('portfolio')['bloki']) { ?>
			<div style="padding-top: 0px;" class="section block-portfolio">
				<div class="container">
					<div class="section-title">
						Портфолио
					</div>
					<div class="block-portfolio__items">
                  <?php //print_r(get_field('portfolio')['bloki'][0]['portfolio']);

                  foreach (get_field('portfolio')['bloki'][0]['portfolio'] as $v_portf) { ?>
                      <div class="portfolio-item">
                          <a href="<?php echo get_the_permalink($v_portf->ID) ?>" class="open-gallery">
                              <img class="lazy loaded" src="<?php echo get_the_post_thumbnail_url( $v_portf->ID, 'portfolio-item-image-thumb'); ?>" data-src="<?php echo get_the_post_thumbnail_url( $v_portf->ID, 'portfolio-item-image-thumb'); ?>" alt="<?php echo get_the_title($v_portf->ID); ?>" data-was-processed="true">
                              <div class="portfolio-item__title">
                                  <div class="portfolio-item__name"><?php echo get_the_title($v_portf->ID); ?></div>
                                  <span class="button">Подробнее</span>
                              </div>
                          </a>
                      </div>
                  <?php } ?>
					</div>
					<div class="block-portfolio__buttons">
						<a href="/portfolio/" class="button">Смотреть все портфолио</a>
					</div>
				</div>
			</div>
         <?php } ?>

			<?php if (get_field('projects_title')) { ?>
				<div class="section section-projects">
					<div class="container">
						<div class="row">
							<div class="col-12 text-center">
								<h2 class="section-title">
									<?php the_field('projects_title') ?>
								</h2>
							</div>
						</div>

						<div class="projects-list">
							<div class="row">

							<?php $projects = get_field( 'projects_list' ); ?>

							<?php include 'template-parts/projects/finished-projects.php'; ?>

							</div>
						</div>
					</div>
				</div>
			<?php } ?>

			<?php if(!empty(get_field('czeny')['prajs'])) { ?>
				<div class="section prices-accordion">
						<div class="container">
							<h2 class="section-title">
								<?php echo get_field('czeny')['zagolovok']; ?>
								<!-- <button class="prices-accordion__button"></button> -->
							</h2>
							<div class="prices-accordion__spoiler">
								<div class="table-wrapper">
									<?php if(get_field('czeny')['prajs'] == "Цены за кв. м строительства дома") { ?>
										<div class="tab-item">
											<div class="row">

												<?php $counter = 0; ?>

												<?php if ( have_rows( 'czeny_za_m2_stroitelstva', 22 ) ) : ?>
													<?php while ( have_rows( 'czeny_za_m2_stroitelstva', 22 ) ) : the_row(); ?>

													<?php $counter++; ?>

													<div class="col-md-4">
														<div class="price-card price-card--<?php echo $counter; ?>">
															<div class="price-card__header">
																<?php the_sub_field( 'price_card_header' ); ?>
															</div>
															<div class="price-card__description">
																<?php the_sub_field( 'price_card_description' ); ?>
															</div>
															<div class="price-card__price text-center">
																от
																<span><?php the_sub_field( 'price_card_price' ); ?></span> руб./кв. м
															</div>
															<div class="price-card__btn text-center">
																<a href="#rateOrder-<?php echo $counter; ?>" class="button button-popup">Заказать сейчас</a>
															</div>

															<div class="d-none">
																<div id="rateOrder-<?php echo $counter; ?>" class="popup-form callback order-form">
																	<div class="popup-form__title">
																		<div class="form-title"></div>
																	</div>

																	<?php
																		echo do_shortcode('[contact-form-7 id="4213" title="Заказать комплектацию"]');
																	?>
																</div>

																<script>
																	jQuery(document).ready(function($) {
																		let priceTitle = $('.price-card--<?php echo $counter; ?>').find('.price-card__header > p').text().trim();

																		let orderText = $('#rateOrder-<?php echo $counter; ?>').find('.order-text');

																		orderText.html(priceTitle);

																		$('#rateOrder-<?php echo $counter; ?>').find('.form-title').html(priceTitle);
																	});
																</script>
															</div>
														</div>
													</div>

													<?php endwhile; ?>
												<?php else : ?>
													<?php // no rows found ?>
												<?php endif; ?>

												<div class="col-12">
													<div class="note" style="font-size: 14px; margin: 35px 0 20px; background: #f5f5f5; padding: 20px 20px 5px 20px;">
														<?php the_field( 'note', 22 ); ?>
													</div>
												</div>
											</div>
										</div>

									<?php } elseif(get_field('czeny')['prajs'] == "Цены на проектирование домов") { ?>
										<div class="tab-item">
											<div class="table-wrapper">
												<?php the_field( 'czeny_na_proektirovanie_domov', 22 ); ?>
											</div>
										</div>
									<?php } elseif(get_field('czeny')['prajs'] == "Цены на строительные работы") { ?>
										<div class="tab-item">
											<div class="table-wrapper">
												<?php the_field( 'czeny_na_stroitelnye_raboty', 22 ); ?>
											</div>
										</div>
									<?php } elseif(get_field('czeny')['prajs'] == "Цены на инженерные коммуникации") { ?>
										<div class="tab-item">
											<div class="table-wrapper">
												<?php the_field( 'czeny_na_inzhenernye_kommunikaczii', 22 ); ?>
											</div>
										</div>
									<?php } elseif(get_field('czeny')['prajs'] == "Цены на дизайн интерьера, экстерьера") { ?>
										<div class="tab-item">
											<div class="table-wrapper">
												<?php the_field( 'czeny_na_dizajn_interera_eksterera', 22 ); ?>
											</div>
										</div>
									<?php } elseif(get_field('czeny')['prajs'] == "Цены на ремонтно-отделочные работы") { ?>
										<div class="tab-item">
											<div class="table-wrapper">
												<?php the_field( 'czeny_na_remontno_otdelochnye_raboty', 22 ); ?>
											</div>
										</div>
									<?php } ?>
									</div>
							</div>
							<div class="show-more text-center">
								<a id="showMore" href="#" class="button">Показать полностью</a>
							</div>
						</div>
				</div>
			<?php } ?>

		<?php $speczialist = get_field('speczialist');
		if($speczialist['fio']) { ?>
		<div class="section specialists">
			<div class="container">
				<div class="specialists__wrap">
					<div class="specialists__image">
						<?php if($speczialist['foto']) { ?>
							<img src="<?php echo $speczialist['foto']['sizes']['large']; ?>" alt="<?php echo $speczialist['fio']; ?>" title="<?php echo $speczialist['dolzhnost']; ?>">
						<?php } ?>
					</div>
					<div class="specialists__body">
						<div class="specialists__title"><?php echo $speczialist['fio']; ?></div>
						<span class="specialists__name"><?php echo $speczialist['dolzhnost']; ?></span>
						<?php if($speczialist['spisok']) { ?>
						<ul class="specialists__list">
							<?php foreach ($speczialist['spisok'] as $v_li) { ?>
								<li>
									<span>
										<?php echo $v_li['tekst']; ?>
									</span>
								</li>
							<?php } ?>
						</ul>
						<?php } ?>
						<div class="specialists__button">
							<a href="#callback-form" class="button button-popup">связаться для консультации</a>
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php } ?>

		<?php if(get_field('seo_tekst')['opisanie']) { ?>
		<section class="section text-image">
			<div class="container">
				<div class="text-image__wrap">
					<div class="text-image__body">
						<h2 class="section-title"><?php echo get_field('seo_tekst')['zagolovok']; ?></h2>
						<div class="text-image__text">
							<?php echo get_field('seo_tekst')['opisanie']; ?>
						</div>
					</div>
					<div class="text-image__image">
						<img src="<?php echo get_field('seo_tekst')['izobrazhenie']['sizes']['large']; ?>" alt="<?php echo get_field('seo_tekst')['izobrazhenie']['alt']; ?>" title="<?php echo get_field('seo_tekst')['izobrazhenie']['title']; ?>">
					</div>
				</div>
			</div>
		</section>
      <?php } ?>

		<div style="padding-top:10px;" class="section section-video">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div style="margin-bottom:10px;" class="section-title">
							<?php the_field( 'section_video_title', 2 ); ?>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-10 offset-1">
						<div class="owl-carousel carousel-video">

							<?php if ( have_rows( 'video' ) ) : ?>
								<?php while ( have_rows( 'video' ) ) : the_row(); ?>

									<div class="carousel-video__item">

										<?php
											$video_url = get_sub_field( 'video_url' );

											echo iframe_lezy('<iframe width="560" height="315" src="'. $video_url .'?showinfo=0&rel=0;" title="YouTube video player" frameborder="0" allowfullscreen></iframe>');
										?>

										<div class="video-title">
											<?php the_sub_field( 'video_title' ); ?>
										</div>

									</div>

								<?php endwhile; ?>
							<?php else : ?>

								<?php while ( have_rows( 'video', 2 ) ) : the_row(); ?>

									<div class="carousel-video__item">

										<?php
											$video_url = get_sub_field( 'video_url' );

											echo iframe_lezy('<iframe width="560" height="315" src="'. $video_url .'?showinfo=0&rel=0;" title="YouTube video player" frameborder="0" allowfullscreen></iframe>');
                                        ?>

                                        <div class="video-title">
                                            <?php the_sub_field('video_title'); ?>
                                        </div>

                                    </div>

                                <?php endwhile; ?>

                            <?php endif; ?>

                            <?php
                                function iframe_lezy($s) {
                                    return '<div class="video ratio-16-9 lezy">' . str_replace('iframe', 'eframe', $s) . '</div>';
                                }
                            ?>

						</div>

						<script>
							jQuery(document).ready(function($) {
								const hs = $(window).innerHeight();
								$(window).scroll(function () {
									let sp = $(this).scrollTop()+hs;

									$('.video.lezy').each(function(i,e){
										if (sp > $(e).offset().top) {
											let html = $(e).html();
											html = html.replace('eframe', 'iframe');
											$(e).html(html).removeClass('lezy');
										}
									});
								});
							});
						</script>
					</div>
				</div>
			</div>
        </div>

    <div class="section section-director">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div style="margin-top:10px;" class="page-title">
                        Будем рады видеть Вас в числе <br>наших заказчиков
                    </div>
                </div>
                <?php include 'template-parts/about-company/about-company.php'; ?>
            </div>
        </div>
    </div>

<?php
include 'template-parts/home/order-consultation.php';
?>
<?php
if (get_field('na_chto_obratit_vnimanie')['opisanie'] != '') {
    ?>
			<div class="section building-from text-image">
				<div class="container">
					<div class="row">

						<div class="col-lg-6">
							<div class="building-from__text text-image__text">
<!--img class="lazy loaded" style="float:right !important; padding:5px;" src="<?php echo get_field('na_chto_obratit_vnimanie')['izobrazhenie']['sizes']['medium_large']; ?>" data-src="<?php echo get_field('na_chto_obratit_vnimanie')['izobrazhenie']['sizes']['medium']; ?>" title="постройка элитных домов в Севастополе" alt="Дом, построенный компанией Luks в Севастополе под ключ" data-was-processed="true"-->
								<div class="section-title"><?php echo get_field('na_chto_obratit_vnimanie')['zagolovok']; ?></div>
								<?php echo get_field('na_chto_obratit_vnimanie')['opisanie']; ?>
                                <?php if(get_field('na_chto_obratit_vnimanie')['opisanie1']) {
                                    echo get_field('na_chto_obratit_vnimanie')['opisanie1'];
                                } ?>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="building-from__img">
								<img class="lazy loaded" src="<?php echo get_field('na_chto_obratit_vnimanie')['izobrazhenie']['sizes']['large']; ?>" data-src="<?php echo get_field('na_chto_obratit_vnimanie')['izobrazhenie']['sizes']['large']; ?>" title="<?php echo get_field('na_chto_obratit_vnimanie')['izobrazhenie']['title']; ?>" alt="<?php echo get_field('na_chto_obratit_vnimanie')['izobrazhenie']['alt']; ?>" data-was-processed="true">
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>

			<div style="padding-top:20px;" class="section section-build-geography build-geography_services">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center">
							<div class="section-title wow fadeInDown">
								География строительства
							</div>
							<p class="section-description wow fadeInUp">
								Построенные дома в Севастополе и Крыму
							</p>
						</div>
					</div>

					<div class="row">
						<div class="col-12">
							<?php get_template_part( 'template-parts/base/map-build-geography' ); ?>
						</div>
					</div>
				</div>
			</div>

			<?php if (get_field('seo_tekst_3')) : ?>
				<div class="section building-from">
					<div class="container">
						<div class="row">
							<?php echo get_field('seo_tekst_3') ?>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>

<?php get_footer(); ?>