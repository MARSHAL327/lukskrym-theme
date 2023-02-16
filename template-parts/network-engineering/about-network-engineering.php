<?php 

/*
	Проектирование и монтаж инженерных сетей (первый экран)
*/

 ?>

<div class="section section-about-shell-houses about-network-engineering">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<div class="shell-houses-img about-network-engineering__img">
					<?php if ( get_field( 'about_network_engineering_img' ) ) { ?>
						<img src="<?php the_field( 'about_network_engineering_img' ); ?>" alt="<?php the_title(); ?>" />
					<?php } ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="shell-houses-description about-network-engineering__text">
					<?php the_field( 'about_network_engineering_text' ); ?>
				</div>
			</div>
			<div class="col-12">
				<div class="about-network-engineering__text--2">
					<?php the_field( 'about_network_engineering_text_2' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>