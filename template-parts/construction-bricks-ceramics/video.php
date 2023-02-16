<?php 

/*
	Видео
*/

 ?>

<div class="section section-video">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h3 class="section-title">
					<?php the_field( 'section_video_title' ); ?>
				</h3>
			</div>
		</div>

		<div class="row">
			<div class="col-xl-8 offset-xl-2">

				<?php if ( get_field( 'video_url' ) ) :  ?>

					<?php
						$video_url = get_field( 'video_url' );

						echo iframe_lezy('<iframe width="560" height="315" src="'. $video_url .'?showinfo=0&rel=0;" title="YouTube video player" frameborder="0" allowfullscreen></iframe>');
					?>

				<?php endif; ?>

				<?php
					function iframe_lezy($s) {
						return '<div class="video ratio-16-9 lezy">'.str_replace('iframe', 'eframe', $s).'</div>';
					}
				?>

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