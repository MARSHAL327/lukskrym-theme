<?php 

/*
	Проектирование инженерных коммуникаций
*/

 ?>

<div class="section engineering-communications-design">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="section-title">
					<?php the_field( 'engineering_communications_design_title' ); ?>
				</h2>
			</div>
		</div>

		<div class="row">
			<div class="col-xxl-6">
				<div class="engineering-communications-design__text">
					<?php the_field( 'engineering_communications_design_text' ); ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="engineering-communications-design__img">
					<?php if ( get_field( 'engineering_communications_design_img' ) ) { ?>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhrwABAIAAAP///wAAACH5BAEAAAEALAAAAACvAAEAAAIMjI+py+0Po5y0WlQAADs=" data-src="<?php the_field( 'engineering_communications_design_img' ); ?>" alt="Инженерные коммуникации" />
					<?php } ?>
				</div>
			</div>
			<div class="col-12">
				<div class="engineering-communications-design__text--2">
					<?php the_field( 'engineering_communications_design_text_2' ); ?>
				</div>
			</div>
		</div>

		<div class="outdoor-communications">
			<div class="row">
				<div class="col-xxl-6">
					<div class="outdoor-communications__img">
						<?php if ( get_field( 'outdoor_communications_img' ) ) { ?>
							<img class="lazy" src="data:image/gif;base64,R0lGODlhrwABAIAAAP///wAAACH5BAEAAAEALAAAAACvAAEAAAIMjI+py+0Po5y0WlQAADs=" data-src="<?php the_field( 'outdoor_communications_img' ); ?>" alt="Инженерные коммуникации" />
						<?php } ?>
					</div>
				</div>
				<div class="col-xxl-6">
					<div class="outdoor-communications__text">
						<?php the_field( 'outdoor_communications_text' ); ?>
					</div>
				</div>
			</div>
		</div>

		<div class="outdoor-communications internal-communications">
			<div class="row">
				<div class="col-xxl-6">
					<div class="outdoor-communications__text internal-communications__text">
						<?php the_field( 'internal_communications_text' ); ?>
					</div>
				</div>
				<div class="col-xxl-6">
					<div class="outdoor-communications__img internal-communications__img">
						<?php if ( get_field( 'internal_communications_img' ) ) { ?>
							<img class="lazy" src="data:image/gif;base64,R0lGODlhrwABAIAAAP///wAAACH5BAEAAAEALAAAAACvAAEAAAIMjI+py+0Po5y0WlQAADs=" data-src="<?php the_field( 'internal_communications_img' ); ?>" alt="Инженерные коммуникации" />
						<?php } ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-12">
					<div class="internal-communications__text--2">
						<?php the_field( 'internal_communications_text_2' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>