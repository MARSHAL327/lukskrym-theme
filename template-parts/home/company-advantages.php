<?php 

/*
	Преимущества работы с компанией
*/


 ?>

<div class="section section-company-advantages">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<div class="section-title">
					<?php the_field( 'company_advantages_title', 2 ); ?>
				</div>
			</div>
		</div>

		<div class="company-advantages">
			<div class="row justify-content-center">
				
				<?php if ( have_rows( 'company_advantages', 2 ) ) : ?>
					<?php while ( have_rows( 'company_advantages', 2 ) ) : the_row(); ?>

						<div class="col-xl-6 col-xxl-4">
							<div class="company-advantages-item">
								<div class="company-advantages-item__icon">
									<?php if ( get_sub_field( 'company_advantage_icon' ) ) { ?>
										<img src="<?php the_sub_field( 'company_advantage_icon' ); ?>" alt="<?php the_sub_field( 'company_advantage_title' ); ?>" />
									<?php } ?>
								</div>
								<div class="company-advantages-item__title">
									<div class="h4"><?php the_sub_field( 'company_advantage_title' ); ?></div>
									<p><?php the_sub_field( 'company_advantage_text' ); ?></p>
								</div>
							</div>
						</div>

					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>

			</div>

			<div class="row">
				<div class="company-advantages__accent text-center">
					<span><?php the_field( 'company_advantages_accent', 2 ); ?></span>

					<a href="<?php the_field( 'company_advantages_reviews_url', 2 ); ?>" class="button" target="_blank">Отзывы о нашей работе вы можете посмотреть здесь</a>

					<a href="<?php the_field( 'company_advantages_reviews_url', 2 ); ?>" class="button button--mobile" target="_blank">Смотреть отзывы</a>
				</div>
			</div>
		</div>
	</div>
</div>