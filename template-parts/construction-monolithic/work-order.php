<?php 

/*
	Порядок производства работ
*/

 ?>

<div class="section section-work-order">
	<div class="container">
		<div class="shell-specifications">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="section-title">
						<?php the_field( 'work_order_title' ); ?>
					</h2>
				</div>
			</div>
			<div class="work-order-description">
				<div class="row">
					<div class="col-xxl-6">
						<div class="work-order-description__text">
							<?php the_field( 'work_order_title_text' ); ?>
						</div>
					</div>
					<div class="col-xxl-6">
						<?php if ( get_field( 'work_order_img' ) ) { ?>
							<div class="work-order-description__img">
								<img class="lazy" src="data:image/gif;base64,R0lGODlhTwA0AIAAAP///wAAACH5BAEAAAEALAAAAABPADQAAAJFjI+py+0Po5y02ouz3rz7D4biSJbmiabqyrbuC8fyTNf2jef6zvf+DwwKh8Si8YhMKpfMpvMJjUqn1Kr1is1qt9yuN1IAADs=" data-src="<?php the_field( 'work_order_img' ); ?>" alt="<?php the_title(); ?>" />
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>