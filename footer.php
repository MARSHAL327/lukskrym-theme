<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lukskrym
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="container">
			<div class="site-footer__wrapper">
                <div class="logo">
                    <a href="https://lukskrym.ru/"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/logo/logo-white.png' ?>" alt="Luks - Индивидуальное строительство домов и коттеджей под ключ в Севастополе"></a>
                    <div class="site-description">Индивидуальное строительство домов и коттеджей под ключ</div>
                </div>
                <div class="site-footer__col site-footer__menu">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : ?>
                    <?php endif; ?>
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-2') ) : ?>
                    <?php endif; ?>
                </div>
                <div class="site-footer__col site-footer__contacts">
                    <div class="footer-contacts">
                        <div class="phones">
                            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M493.09 351.3L384.7 304.8a31.36 31.36 0 0 0-36.5 8.9l-44.1 53.9A350 350 0 0 1 144.5 208l53.9-44.1a31.35 31.35 0 0 0 8.9-36.49l-46.5-108.5A31.33 31.33 0 0 0 125 .81L24.2 24.11A31.05 31.05 0 0 0 0 54.51C0 307.8 205.3 512 457.49 512A31.23 31.23 0 0 0 488 487.7L511.19 387a31.21 31.21 0 0 0-18.1-35.7zM456.89 480C222.4 479.7 32.3 289.7 32.1 55.21l99.6-23 46 107.39-72.8 59.5C153.3 302.3 209.4 358.6 313 407.2l59.5-72.8 107.39 46z"/></svg></span>
                            <ul>
                                <li><a href="tel:88005116972"><?php the_field( 'phone_1', 8 ); ?></a></li>
                                <li><a href="tel:+79789083406"><?php the_field( 'phone_2', 8 ); ?></a></li>
                            </ul>
                        </div>
                        <div class="messengers">
                            <?php include 'template-parts/base/messengers.php'; ?>
                        </div>
                        <?php if( get_field('email', 8 ) ): ?>
                            <div class="email">
                                <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M464 64H48C21.5 64 0 85.5 0 112v288c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V112c0-26.5-21.5-48-48-48zM48 96h416c8.8 0 16 7.2 16 16v41.4c-21.9 18.5-53.2 44-150.6 121.3-16.9 13.4-50.2 45.7-73.4 45.3-23.2.4-56.6-31.9-73.4-45.3C85.2 197.4 53.9 171.9 32 153.4V112c0-8.8 7.2-16 16-16zm416 320H48c-8.8 0-16-7.2-16-16V195c22.8 18.7 58.8 47.6 130.7 104.7 20.5 16.4 56.7 52.5 93.3 52.3 36.4.3 72.3-35.5 93.3-52.3 71.9-57.1 107.9-86 130.7-104.7v205c0 8.8-7.2 16-16 16z"/></svg></span>
                                <div><a href="mailto:<?php the_field( 'email', 8 ); ?>" target="_blank"><?php the_field( 'email', 8 ); ?></a><span class="note">Пишите в любое время дня и ночи</span></div>
                            </div>
                        <?php endif; ?>
                        <div class="address">
                            <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M560 160c-2 0-4 .4-6 1.2L384 224l-10.3-3.6C397 185.5 416 149.2 416 123 416 55 358.7 0 288 0S160 55.1 160 123c0 11.8 4 25.8 10.4 40.6L20.1 216C8 220.8 0 232.6 0 245.7V496c0 9.2 7.5 16 16 16 2 0 4-.4 6-1.2L192 448l172 60.7c13 4.3 27 4.4 40 .2L555.9 456c12.2-4.9 20.1-16.6 20.1-29.7V176c0-9.2-7.5-16-16-16zM176 419.8L31.9 473l-1.3-226.9L176 195.6zM288 32c52.9 0 96 40.8 96 91 0 27-38.1 88.9-96 156.8-57.9-67.9-96-129.8-96-156.8 0-50.2 43.1-91 96-91zm80 444.2l-160-56.5V228.8c24.4 35.3 52.1 68 67.7 85.7 3.2 3.7 7.8 5.5 12.3 5.5s9-1.8 12.3-5.5c12.8-14.5 33.7-39.1 54.3-66.9l13.4 4.7zm32 .2V252.2L544.1 199l1.3 226.9zM312 128c0-13.3-10.8-24-24-24s-24 10.7-24 24c0 13.2 10.8 24 24 24s24-10.7 24-24z"/></svg></span>
                            <div>
                                <span><?php the_field( 'address', 8 ); ?></span>
                                <span>Режим работы: <?php the_field( 'text_open', 8 ); ?></span>
                                <br>ООО "Лукс"
                                <br>ОГРН: 1159204004717<br>
                                ИНН: 9204548225<br>

                            </div>
                        </div>
                    </div>
                    <?php include 'template-parts/base/social-footer.php'; ?>
                </div>

            </div>
			<div class="row">
				<div class="col-12">
					<div class="site-info">
						<div class="copyright">
							© ООО «Лукс» <?php echo date('Y'); ?>. Все права защищены.
							<span>Информация на сайте не является публичной офертой.</span>
						</div>
						<div class="privacy">
							<a href="<?php echo site_url() . '/privacy/' ?>">Политика конфиденциальности</a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<a id="toTop" href="#" class="button-up">
			<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-up" viewBox="0 0 16 16">
			  <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
			</svg>
		</a>
		
	</footer><!-- #colophon -->
</div><!-- #page -->

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

<?php wp_footer(); ?>

<script src="https://lukskrym.ru/amo/amoHook.js" ></script>
</body>
</html>
