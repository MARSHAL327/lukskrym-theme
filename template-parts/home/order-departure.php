<?php 

/*
	закажите бесплатный выезд на участок!
*/


 ?>

<div class="section section-order-consultation section-order-form paraxify" style="background-image: url('/wp-content/themes/lukskrym/assets/images/bg/order-departure-bg-2.jpg');">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-6">
				<?php get_template_part('template-parts/base/manager') ?>
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