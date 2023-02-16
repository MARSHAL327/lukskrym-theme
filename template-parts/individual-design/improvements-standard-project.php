<?php 

/*
	Какие доработки можно внести в типовой проект
*/

 ?>

<div class="section improvements-standard-project">
	<div class="container">
		<div class="row">
			<div class="col-xxl-6">
				<div class="improvements-standard-project__img">
					<?php if ( get_field( 'improvements_standard_project_img' ) ) { ?>
						<img class="lazy" src="data:image/gif;base64,R0lGODlhrwABAIAAAP///wAAACH5BAEAAAEALAAAAACvAAEAAAIMjI+py+0Po5y0WlQAADs=" data-src="<?php the_field( 'improvements_standard_project_img' ); ?>" alt="Проект дома" />
					<?php } ?>
				</div>
			</div>
			<div class="col-xxl-6">
				<div class="improvements-standard-project__text">
					<?php the_field( 'improvements_standard_project_text' ); ?>
				</div>
			</div>
		</div>
	</div>
</div>