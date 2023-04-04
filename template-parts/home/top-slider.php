<?php

/*
	Слайдер на главной
*/

/**
 * @var $bankLogos
 */

$homeSlider = get_field('home_slider');
$marquizLink = get_field("marquiz_link", 8);
$emptyElements = 0;

foreach ($homeSlider as $slide) {
    if( trim($slide["title"]) == "" && trim($slide["description"]) == "" )
        $emptyElements++;
}

$onlyFirstSlideFilled = count($homeSlider) - 1 == $emptyElements ? "true" : "false"
?>

<div class="header-slider">
    <div class="frontpage-slides">
        <div class="swiper frontpage-slides__swiper"
             data-only-first-slide-filled="<?= $onlyFirstSlideFilled ?>"
             style="--swiper-pagination-color: #007a9b;">
            <div class="swiper-wrapper" >
                <?php foreach ($homeSlider as $slide): ?>
                    <div class="swiper-slide"
                         data-title="<?= $slide["title"] ?>"
                         data-description="<?= $slide["description"] ?>"
                         data-link="<?= $slide["link"] ?>">
                        <img src="<?= $slide["img"]["url"]; ?>"/>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header-content">
                    <div class="header-content__center">
                        <div class="header-content__title">
                            <h1><?= $homeSlider[0]["title"] ?> <span><?= $homeSlider[0]["description"] ?></span> </h1>
                        </div>
                        <?php if( $bankLogos ): ?>
                            <a href="/ipoteka" class="header-content__mortgage-block">
                                <div class="header-content__mortgage-block__item">
                                    <svg width="18" height="17" viewBox="0 0 18 17" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2.49999 9.40019H1.79999C1.62201 9.40019 1.44802 9.34739 1.30004 9.24849C1.15206 9.14959 1.03674 9.00902 0.968666 8.84457C0.900485 8.68012 0.882619 8.49913 0.91733 8.32452C0.952044 8.1499 1.03778 7.98949 1.16369 7.86362C1.1637 7.86361 1.1637 7.86361 1.1637 7.8636L3.69998 5.32733V2.10023C3.69998 1.60313 4.10288 1.20024 4.59998 1.20024H5.39997C5.89708 1.20024 6.29997 1.60313 6.29997 2.10023V2.72736L8.36359 0.664002L2.49999 9.40019ZM2.49999 9.40019V15.6002H1.4C1.12371 15.6002 0.9 15.8239 0.9 16.1002C0.9 16.3764 1.12371 16.6002 1.4 16.6002H16.5999C16.8762 16.6002 17.0999 16.3764 17.0999 16.1002C17.0999 15.8239 16.8762 15.6002 16.5999 15.6002H15.4999V9.40019H16.1999H16.1999C16.3779 9.40014 16.5519 9.34734 16.6999 9.24846C16.8479 9.14957 16.9633 9.00904 17.0315 8.84462L17.0315 8.84457C17.0996 8.6801 17.1174 8.49914 17.0827 8.32455C17.048 8.14996 16.9623 7.98957 16.8365 7.86364L16.8365 7.86362L9.63651 0.663657L9.63645 0.6636C9.46071 0.488142 9.23019 0.400244 8.99995 0.400244C8.76975 0.400244 8.53919 0.488122 8.36366 0.663934L2.49999 9.40019ZM14.4999 8.5002V15.6002H3.49999V8.5002V8.4002H3.39999H2.04142L8.99995 1.44166L15.9585 8.4002H14.5999H14.4999V8.5002ZM4.69998 2.20023H5.29997V3.72733L4.69998 4.32733V2.20023Z"
                                              fill="white" stroke="white" stroke-width="0.2"/>
                                        <path d="M5.44644 13.7462L5.37573 13.8169L5.44644 13.8877L6.01212 14.4533L6.08283 14.5241L6.15354 14.4533L12.5534 8.05351L12.6241 7.98279L12.5533 7.91208L11.9877 7.34643L11.917 7.27572L11.8462 7.34643L5.44644 13.7462ZM6.99995 7.20005C6.06262 7.20005 5.29996 7.9624 5.29996 8.90004C5.29996 9.83769 6.06288 10.6 6.99995 10.6C7.93729 10.6 8.69994 9.83768 8.69994 8.90004C8.69994 7.9624 7.93729 7.20005 6.99995 7.20005ZM6.99995 9.60003C6.61386 9.60003 6.29996 9.28589 6.29996 8.90004C6.29996 8.51419 6.61386 8.20004 6.99995 8.20004C7.38604 8.20004 7.69995 8.51419 7.69995 8.90004C7.69995 9.28589 7.38604 9.60003 6.99995 9.60003ZM10.9999 11.2C10.0626 11.2 9.29994 11.9624 9.29994 12.9C9.29994 13.8377 10.0626 14.6 10.9999 14.6C11.9373 14.6 12.6999 13.8377 12.6999 12.9C12.6999 11.9624 11.9373 11.2 10.9999 11.2ZM10.9999 13.6C10.6138 13.6 10.2999 13.2859 10.2999 12.9C10.2999 12.5142 10.6138 12.2 10.9999 12.2C11.386 12.2 11.6999 12.5142 11.6999 12.9C11.6999 13.2859 11.386 13.6 10.9999 13.6Z"
                                              fill="white" stroke="white" stroke-width="0.2"/>
                                    </svg>
                                    <span>Ипотека от 4 банков</span>
                                </div>
                                <div class="bank-items">
                                    <?php foreach ($bankLogos as $bankLogo): ?>
                                        <div class="bank-items__item">
                                            <img class="bank-items__item_color"
                                                 src="<?= get_template_directory_uri() . $bankLogo["color"] ?>" alt="">
                                            <img class="bank-items__item_white"
                                                 src="<?= get_template_directory_uri() . $bankLogo["white"] ?>"
                                                 alt="">
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </a>
                        <?php endif; ?>
                        <div class="header-content__buttons">
                            <a href="<?= $homeSlider[0]["link"] ? : $marquizLink ?>"
                               data-default-marquiz="<?= $marquizLink ?>"
                               class="button header-content__buttons_link">Рассчитать строительство</a>
                            <a href="<?= $marquizLink ?>" class="button button-spacial">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.5014 17.5014C6.5014 17.2362 6.39605 16.9818 6.20851 16.7943C6.02097 16.6067 5.76662 16.5014 5.5014 16.5014C5.23619 16.5014 4.98183 16.6067 4.7943 16.7943C4.60676 16.9818 4.5014 17.2362 4.5014 17.5014L4.5014 19.5014C4.5014 19.7666 4.60676 20.0209 4.7943 20.2085C4.98183 20.396 5.23619 20.5014 5.5014 20.5014L19.5014 20.5014C19.7666 20.5014 20.021 20.396 20.2085 20.2085C20.396 20.0209 20.5014 19.7666 20.5014 19.5014L20.5014 17.5014C20.5014 17.2362 20.396 16.9818 20.2085 16.7943C20.021 16.6067 19.7666 16.5014 19.5014 16.5014C19.2362 16.5014 18.9818 16.6067 18.7943 16.7943C18.6068 16.9818 18.5014 17.2362 18.5014 17.5014L18.5014 18.5014L6.5014 18.5014L6.5014 17.5014Z"
                                          fill="#007A9B"/>
                                    <path d="M13.08 15.3186L17.08 12.4986C17.2956 12.3457 17.4418 12.1136 17.4868 11.8531C17.5318 11.5927 17.4718 11.325 17.32 11.1086C17.2442 11.0004 17.1477 10.9084 17.0362 10.8377C16.9246 10.767 16.8002 10.7192 16.67 10.6968C16.5398 10.6745 16.4065 10.6782 16.2778 10.7077C16.1491 10.7372 16.0275 10.7919 15.92 10.8686L13.5 12.5886L13.5 12.4986L13.5 4.4986C13.5 4.23338 13.3946 3.97903 13.2071 3.79149C13.0196 3.60395 12.7652 3.4986 12.5 3.4986C12.2348 3.4986 11.9804 3.60395 11.7929 3.79149C11.6053 3.97903 11.5 4.23338 11.5 4.4986L11.5 12.4986L9.09999 10.6986C8.99493 10.6198 8.87538 10.5625 8.74817 10.5299C8.62096 10.4973 8.48857 10.4901 8.35857 10.5086C8.22856 10.5272 8.10349 10.5712 7.99049 10.6381C7.8775 10.705 7.77878 10.7935 7.69999 10.8986C7.57017 11.0717 7.49999 11.2822 7.49999 11.4986C7.49999 11.6538 7.53613 11.807 7.60556 11.9458C7.67499 12.0847 7.77579 12.2054 7.89999 12.2986L11.9 15.2986C12.0691 15.4267 12.2746 15.4976 12.4867 15.5012C12.6988 15.5048 12.9066 15.4409 13.08 15.3186Z"
                                          fill="#007A9B"/>
                                </svg>
                                Скачать каталог проектов
                            </a>
                        </div>
                    </div>
                    <ul class="header-content__advantages">
                        <li><a href="/services/selection-building-site/">Подберем<br> участок</a></li>
                        <li><a href="/services/individual-design/">Разработаем<br> проект</a></li>
                        <li><a href="/services/construction-of-private-houses/">Выполним все работы<br> под ключ</a>
                        </li>
                        <li><a href="/services/permits/">Введем в эксплуатацию<br> и подключим к сетям</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
	

	<div class="hidden">
		<div id="orderCalcForm" class="popup-form order-calc-form">
			<div class="popup-form__title">
				<div class="form-title">Рассчитать стоимость строительства</div>
				<p>Специалист свяжется с вами в течение часа</p>
			</div>
			<?php
				echo do_shortcode('[contact-form-7 id="90" title="Заказать расчет"]');
			?>
		</div>
	</div>
</div>