<?php 

/*
	Письмо директору
*/

 ?>

<div class="feedback">
	<div class="row">
		<div class="col-lg-5">
			<div class="feedback-img">
				<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/director.png' ?>" alt="Ксенофонтов Михаил Алексеевич">
			</div>
		</div>

		<div class="col-lg-7">
			<div class="feedback-description">
				<h2 class="wow fadeInDown">Письмо директору</h2>
				<p class="quote">“Напишите мне лично,<br> и я отвечу на все Ваши вопросы!”</p>
				<p class="note"><span>Ксенофонтов Михаил Алексеевич,</span> Генеральный директор ООО «Лукс»</p>
				<div class="text-center">
					<a href="#feedbackForm" class="button button-popup">Написать письмо</a>
				</div>

				<div class="hidden">
					<div id="feedbackForm" class="popup-form feedback-form">
						<div class="popup-form__title">
							<h3 class="form-title">Письмо директору</h3>
						</div>
						<?php
							echo do_shortcode('[contact-form-7 id="5" title="Письмо директору"]');
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>