<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package lukskrym
 */

$phone1 = get_field('phone_1', 8);
$phone2 = get_field('phone_2', 8);

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <meta name="google-site-verification" content="XuvyZ4eDIHP23Kk-1XpYtF_zkZzFcXbNKocCT8RZkDU"/>
    <meta name="yandex-verification" content="5e2a8878bd116d16" />
    <meta name="google-site-verification" content="ThCvIQJuNs7902jtGylmBxmzkOVsaEqJ7uX3kF4k9zA" />
    <meta name="facebook-domain-verification" content="oxa8s61l7116982m1p2es4df9dma1r" />
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/assets/css/new-style.css">

    <?php wp_head(); ?>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117091202-1"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-117091202-1');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(56495935, "init", {
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/56495935" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

    <!-- Google Tag Manager (noscript) -->

    <!-- End Google Tag Manager (noscript) -->

    <!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
            n.callMethod.apply(n,arguments):n.queue.push(arguments)};
            if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
            n.queue=[];t=b.createElement(e);t.async=!0;
            t.src=v;s=b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t,s)}(window, document,'script',
            'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '4056938707754108');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
                   src="https://www.facebook.com/tr?id=4056938707754108&ev=PageView&noscript=1"
        /></noscript>
    <!-- End Facebook Pixel Code -->
    <!-- VK Pixel Code -->
    <script type="text/javascript">!function(){var t=document.createElement("script");t.type="text/javascript",t.async=!0,t.src='https://vk.com/js/api/openapi.js?169',t.onload=function(){VK.Retargeting.Init("VK-RTRG-1463319-d7BAm"),VK.Retargeting.Hit()},document.head.appendChild(t)}();</script><noscript><img src="https://vk.com/rtrg?p=VK-RTRG-1463319-d7BAm" style="position:fixed; left:-999px;" alt=""/></noscript>
    <!-- END VK Pixel Code -->

    <!-- Click-antispam Code -->
    <script defer src="https://af.click.ru/af.js?id=11874"></script>
    <!-- END Click-antispam Code -->

    <!-- videowidjet Code -->
    <script src="https://app.vidwidget.ru/s/26b93f32-f751-4599-8b46-f38a1677166d/"></script>
    <!-- END videowidjet Code -->

    <!-- Marquiz script start -->
    <script>
        (function(w, d, s, o){
            var j = d.createElement(s); j.async = true; j.src = '//script.marquiz.ru/v2.js';j.onload = function() {
                if (document.readyState !== 'loading') Marquiz.init(o);
                else document.addEventListener("DOMContentLoaded", function() {
                    Marquiz.init(o);
                    console.log(Marquiz)
                });
            };
            d.head.insertBefore(j, d.head.firstElementChild);
        })(window, document, 'script', {
                host: '//quiz.marquiz.ru',
                region: 'eu',
                id: '631edb55849643004fb05df8',
                autoOpen: 180,
                autoOpenFreq: 'once',
                openOnExit: true,
                disableOnMobile: false
            }
        );
    </script>
    <!-- Marquiz script end -->

</head>

<body <?php if(is_page_template('page-redesign.php')) { ?>class="home page-template page-template-page-home page-template-page-home-php page page-id-2 wp-custom-logo" <? } ?> <?php body_class(); ?> >
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TJMRPB3"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<noscript>
    <div><img src="https://mc.yandex.ru/watch/56495935" style="position:absolute; left:-9999px;" alt=""/></div>
</noscript>


<?php wp_body_open(); ?>
<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="top-line">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="top-line__wrapper">
                            <div class="top-line__inner">
                                <div class="address-rating">
                                    <div class="address">
                                        <span class="top-line__icon"><svg xmlns="http://www.w3.org/2000/svg"
                                                                          viewBox="0 0 384 512"><path
                                                        d="M192 96c-52.935 0-96 43.065-96 96s43.065 96 96 96 96-43.065 96-96-43.065-96-96-96zm0 160c-35.29 0-64-28.71-64-64s28.71-64 64-64 64 28.71 64 64-28.71 64-64 64zm0-256C85.961 0 0 85.961 0 192c0 77.413 26.97 99.031 172.268 309.67 9.534 13.772 29.929 13.774 39.465 0C357.03 291.031 384 269.413 384 192 384 85.961 298.039 0 192 0zm0 473.931C52.705 272.488 32 256.494 32 192c0-42.738 16.643-82.917 46.863-113.137S149.262 32 192 32s82.917 16.643 113.137 46.863S352 149.262 352 192c0 64.49-20.692 80.47-160 281.931z"/></svg></span>
                                        <a href="<?php echo site_url() . '/contacts/' ?>"><?php the_field('address', 8); ?></a>
                                    </div>
                                    <?php if (get_field("yandex_rating", 8)): ?>
                                        <a href="https://yandex.ru/maps/org/luks/97944610943/reviews/?ll=33.521246%2C44.599104&z=16"
                                           rel="nofollow" class="rating" target="_blank">
                                            <img src="<?= get_stylesheet_directory_uri() . '/assets/images/y-rating.png' ?>"/>
                                            <span class="rating__value"><?= get_field("yandex_rating", 8) ?></span>
                                        </a>
                                    <?php endif; ?>
                                </div>
                                <?php //include "template-parts/base/banks-header.php" ?>
                                <div class="open">
                                    <?php if (get_field('text_open', 8)): ?>
                                        <span class="top-line__icon">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                 xmlns="http://www.w3.org/2000/svg">
                                                <path d="M8 0C6.41775 0 4.87104 0.469192 3.55544 1.34824C2.23985 2.22729 1.21447 3.47672 0.608967 4.93853C0.00346629 6.40034 -0.15496 8.00887 0.153721 9.56072C0.462403 11.1126 1.22433 12.538 2.34315 13.6569C3.46197 14.7757 4.88743 15.5376 6.43928 15.8463C7.99113 16.155 9.59966 15.9965 11.0615 15.391C12.5233 14.7855 13.7727 13.7602 14.6518 12.4446C15.5308 11.129 16 9.58225 16 8C15.9977 5.87897 15.1541 3.84547 13.6543 2.34568C12.1545 0.845886 10.121 0.00229405 8 0ZM8 14.6667C6.68146 14.6667 5.39253 14.2757 4.2962 13.5431C3.19987 12.8106 2.34539 11.7694 1.84081 10.5512C1.33622 9.33305 1.2042 7.99261 1.46144 6.6994C1.71867 5.40619 2.35361 4.21831 3.28596 3.28596C4.21831 2.35361 5.4062 1.71867 6.6994 1.46143C7.99261 1.2042 9.33305 1.33622 10.5512 1.8408C11.7694 2.34539 12.8106 3.19987 13.5431 4.2962C14.2757 5.39253 14.6667 6.68146 14.6667 8C14.6647 9.76752 13.9617 11.4621 12.7119 12.7119C11.4621 13.9617 9.76752 14.6647 8 14.6667Z"
                                                      fill="#007A9B"/>
                                                <path d="M8.00001 4C7.82319 4 7.65363 4.07024 7.5286 4.19526C7.40358 4.32029 7.33334 4.48986 7.33334 4.66667V7.55L5.08601 8.958C4.93572 9.05189 4.82888 9.20163 4.789 9.37429C4.74911 9.54695 4.77945 9.72838 4.87334 9.87867C4.96722 10.029 5.11697 10.1358 5.28963 10.1757C5.46229 10.2156 5.64372 10.1852 5.794 10.0913L8.35401 8.49133C8.45073 8.43073 8.53027 8.34631 8.58502 8.24616C8.63977 8.146 8.66788 8.03347 8.66667 7.91933V4.66667C8.66667 4.48986 8.59643 4.32029 8.47141 4.19526C8.34639 4.07024 8.17682 4 8.00001 4Z"
                                                      fill="#007A9B"/>
                                            </svg>
                                        </span>
                                        Режим работы: <?php the_field('text_open', 8); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="social">
                                    <?php include 'template-parts/base/social.php'; ?>
                                </div>
                            </div>
                            <div class="request-call">
                                <a href="#callback-form" class="button button-popup">Заказать звонок</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="header-nav-inner">
                            <div class="logo">
                                <?php
                                if ( is_front_page() ) { ?>

                                    <a href="<?php echo home_url(); ?>" class="logo-white">
                                        <img src="<?= get_stylesheet_directory_uri() . '/assets/images/logo/logo-white-small.png' ?>"
                                             alt="Luks - Индивидуальное строительство домов и коттеджей под ключ">
                                    </a>

                                    <div class="logo-dark">
                                        <?php the_custom_logo(); ?>
                                    </div>
                                <?php } else {
                                    the_custom_logo();
                                }

                                ?>
                            </div>

                            <div class="main-navigation">

                                <nav id="site-navigation" class="main-navigation">
                                    <?php
                                    wp_nav_menu(
                                        [
                                            'theme_location' => 'main-menu',
                                            'menu_id' => 'primary-menu',
                                        ]
                                    );
                                    ?>
                                </nav>
                            </div>
                            <div class="phones">
                                <ul>
                                    <li><a href="tel:<?= $phone1 ?>" class="tel"><?= $phone1 ?></a></li>
                                    <li><a href="tel:<?= $phone2 ?>" class="tel"><?= $phone2 ?></a></li>
                                </ul>

                                <a href="#callback-form" class="button button-popup">Заказать звонок</a>
                                <a href="tel:<?= $phone2 ?>" class="mobile-call" style="color:green !important;padding-right:20px;">
                                    <img src="https://lukskrym.ru/wp-content/uploads/2022/04/pngwing.com1_-e1650366698184.png">
                                </a>
                                <button id="mobileNavButton" class="cmn-toggle-switch cmn-toggle-switch__htx">
                                    <span>toggle menu</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <nav id="mobileNav" class="mobile-navigation">
        <?php
        wp_nav_menu(
            [
                'theme_location' => 'main-menu',
                'menu_id' => 'primary-menu',
            ]
        );
        ?>

        <div class="phones">
            <ul>
                <li><a href="tel:<?= $phone1 ?>"><?= $phone1 ?></a></li>
                <li><a href="tel:<?= $phone2 ?>"><?= $phone2 ?></a></li>
            </ul>
        </div>

        <a href="#callback-form" class="button button-popup button-accent">Заказать звонок</a>
    </nav>

    <script>
        let hamburger = document.querySelector('#mobileNavButton');
        let menu = document.querySelector('#mobileNav');

        const toggleMenu = () => {
            hamburger.classList.toggle('active');
            menu.classList.toggle('active');
        }

        hamburger.addEventListener('click', e => {
            e.stopPropagation();
            toggleMenu();
        });

        document.addEventListener('click', e => {
            let target = e.target;
            let its_menu = target == menu || menu.contains(target);
            let its_hamburger = target == hamburger;
            let menu_is_active = menu.classList.contains('active');

            if (!its_menu && !its_hamburger && menu_is_active) {
                toggleMenu();
            }
        })
    </script>

    <div class="hidden">
        <div id="callback-form" class="popup-form callback">
            <div class="popup-form__title">
                <div class="form-title">Заказать звонок</div>
                <p>Оставьте заявку на консультацию и наш специалист свяжется с вами</p>
            </div>
            <?php
            echo do_shortcode('[contact-form-7 id="75" title="Заказать звонок"]');
            ?>
        </div>
    </div>
    <div class="hidden">
        <div id="callback-catalog" class="popup-form callback">
            <div class="popup-form__title">
                <div class="form-title">Заказать каталог</div>
                <p>Оставьте заявку и мы отправим каталог проектов Вам на почту</p>
            </div>
            <?php
            echo do_shortcode('[contact-form-7 id="5729" title="Заказ каталога"]');
            ?>
        </div>
    </div>

	