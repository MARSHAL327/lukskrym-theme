<?php 

/*
Template Name: Наши услуги
*/


 ?>

<?php get_header(); ?>

<div class="page-content-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="breadcrumbs">
					<?php true_breadcrumbs(); ?>
				</div>
			</div>
			<div class="col-12 text-center">
				<h1 class="page-title">
					<?php the_field( 'page_services_title' ); ?>
				</h1>
			</div>
		</div>
	</div>

	<div class="section section-services">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="section-title">
						<?php the_field( 'section_services_title' ); ?>
					</h2>
				</div>
			</div>

			<?php include 'template-parts/services/services.php'; ?>
		</div>
	</div>
	<?php  if(get_field('etapy')['bloki']) { ?>
			<div class="section section-building-stages">
				<div class="container">
					<div class="row">
						<div class="col-12 text-center wow fadeInDown">
							<h2 class="section-title">
								<?php echo get_field('etapy')['zagolovok']; ?>
							</h2>
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
											<div class="step-item__item step-item__item_top">
												<div class="step-item__number"><?php echo $k_step+1; ?></div>
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
											<div class="step-item__item step-item__item_top">
												<div class="step-item__number"><?php echo $k_step+1; ?></div>
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
												<div class="step-item__number"><?php echo $k_step+1; ?></div>
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
												<div class="step-item__number"><?php echo $k_step+1; ?></div>
											</div>
										</div>
										
									<?php }
									} ?>						
					
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php }  ?>

	<?php 

		//include 'template-parts/services/building-stages.php'; 
		include 'template-parts/services/section-post.php';
		include 'template-parts/services/additional-services.php';
        include 'template-parts/mortgage_block.php';
		include 'template-parts/home/order-consultation.php';
		include 'template-parts/home/news.php';

	?>

</div>

<?php get_footer(); ?>