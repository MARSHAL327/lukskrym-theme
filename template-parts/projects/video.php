<?php 

/*
	Слайдер видео
*/

 ?>

<div class="section section-video">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="section-title">
					<?php the_field( 'section_video_title', 39 ); ?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-10 offset-1">
				<div class="owl-carousel carousel-video">

					<?php if ( have_rows( 'video', 39) ) : ?>
						<?php while ( have_rows( 'video', 39) ) : the_row(); ?>

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
						<?php // no rows found ?>
					<?php endif; ?>

					<?php
						function iframe_lezy($s) {
							return '<div class="video ratio-16-9 lezy">'.str_replace('iframe', 'eframe', $s).'</div>';
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
							})
						});
					})
				</script>
			</div>
		</div>
	</div>
</div>