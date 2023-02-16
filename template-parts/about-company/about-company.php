<?php 

/*
	О компании
*/

 ?>

<div class="col-12">
	<div class="director-message">
		<div class="row">
			<div class="col-lg-7">
				<div class="director-message__text">
					<h3>Ксенофонтов Михаил Алексеевич</h3>
                    <p class="note">Генеральный директор ООО «Luks»</p>
                    <p class="quote">Мы ответственно относимся к каждому доверенному нам проекту, независимо от объема и сложности работы</p>
                    <iframe src="https://yandex.ru/sprav/widget/rating-badge/97944610943?type=rating" width="150" height="50" frameborder="0"></iframe>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="director-message__img">
					<img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/director-2.png' ?>" alt="Ксенофонтов Михаил Алексеевич">
				</div>
			</div>
		</div>
	</div>
</div>

<?php if( get_field( 'about_company_text' ) ): ?>
    <div class="col-12">
        <div class="about-company-description">
            <div class="row">
                <div class="col-lg-9">
                    <div class="about-company-text">
                        <?php the_field( 'about_company_text' ); ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="about-company-counter">

                        <?php if ( have_rows( 'about_company_counter' ) ) : ?>
                            <?php while ( have_rows( 'about_company_counter' ) ) : the_row(); ?>

                                <div class="about-company-counter__item wow fadeInDown">
                                    <div class="number">
                                        <?php the_sub_field( 'about_company_counter_number' ); ?>
                                    </div>
                                    <div class="title">
                                        <?php the_sub_field( 'about_company_counter_text' ); ?>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        <?php else : ?>
                            <?php // no rows found ?>
                        <?php endif; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>