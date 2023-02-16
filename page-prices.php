<?php

/*
Template Name: Цены
*/


?>

<?php get_header(); ?>

    <div class="page-content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumbs">
                        <?php true_breadcrumbs(); ?>
                    </div>
                </div>
                <div class="col-12 text-center d-none">
                    <div class="page-title">
                        <?php the_title(); ?>
                    </div>
                </div>
            </div>

            <div class="prices tabs-wrapper tabs-wrapper__menu tabs-wrapper--prices">
                <div class="row">
                    <div class="col-lg-4 col-xxl-3">
                        <div class="tabs">
                            <?php wp_nav_menu([
                                'menu' => '33',
                                'menu_class' => 'tabs-menu',
                                'link_after' => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512"><path d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z"></path></svg>',
                                'list_item_class' => '',
                                'link_class' => 'tab',
                            ]); ?>
                        </div>

                        <a href="<?php the_field( 'price_example', 22 ); ?>" class="button button--prices" download>Скачать пример готовой сметы</a>
                    </div>

                    <div class="col-lg-8 col-xxl-9">
                        <div id="pricesTabsContent" class="tabs-content">
                            <div class="tab-item">
                                <h1 class="section-title"><?= the_title() ?></h1>
                                <div class="row">
                                    <?php
                                    if( get_the_content() ){
                                        the_content();
                                    } else {
                                        include "template-parts/prices/prices-cards.php";
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="no-offer">
                                <p>Предложение не является публичной офертой. Цена может меняться в зависимости от сложности, объема и удаленности объекта. Актуальную стоимость вы можете узнать, позвонив нам по телефону <a href="tel:<?php the_field( 'phone_1', 8 ); ?>"><?php the_field( 'phone_1', 8 ); ?></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'template-parts/mortgage_block.php'; ?>

    <div class="section section-order-consultation section-order-form">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="section-title">
                        <?php the_field( 'manager_title', 22 ); ?>
                    </div>
                    <p><?php the_field( 'manager_subtitle', 22 ); ?></p>

                    <div class="manager">
                        <div class="manager__img">
                            <img src="<?php the_field( 'manager_img', 22 ); ?>" alt="Менеджер отдела продаж">
                        </div>
                        <div class="manager__text">
                            <div class="name"><?php the_field( 'manager_name', 22 ); ?></div>
                            <p><?php the_field( 'manager_position', 22 ); ?></p>
                            <a href="https://wa.me/<?php the_field( 'whatsapp', 8 ); ?>" class="button button-accent" target="_blank">
                                <svg width="28" height="28" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M24 48C37.2548 48 48 37.2548 48 24C48 10.7452 37.2548 0 24 0C10.7452 0 0 10.7452 0 24C0 37.2548 10.7452 48 24 48Z" fill="#25D366"/><path fill-rule="evenodd" clip-rule="evenodd" d="M24.7911 37.3525H24.7852C22.3967 37.3517 20.0498 36.7524 17.9653 35.6154L10.4 37.6L12.4246 30.2048C11.1757 28.0405 10.5186 25.5855 10.5196 23.0702C10.5228 15.2017 16.9248 8.79999 24.7909 8.79999C28.6086 8.80164 32.1918 10.2879 34.8862 12.9854C37.5806 15.6828 39.0636 19.2683 39.0621 23.0815C39.059 30.9483 32.6595 37.3493 24.7911 37.3525ZM18.3159 33.0319L18.749 33.2889C20.5702 34.3697 22.6578 34.9415 24.7863 34.9423H24.7911C31.3288 34.9423 36.6499 29.6211 36.6525 23.0807C36.6538 19.9112 35.4212 16.9311 33.1817 14.689C30.9422 12.4469 27.964 11.2115 24.7957 11.2104C18.2529 11.2104 12.9318 16.5311 12.9292 23.0711C12.9283 25.3124 13.5554 27.4951 14.7427 29.3836L15.0248 29.8324L13.8265 34.2095L18.3159 33.0319ZM31.4924 26.154C31.7411 26.2742 31.9091 26.3554 31.9808 26.4751C32.0699 26.6238 32.0699 27.3378 31.7729 28.1708C31.4756 29.0038 30.051 29.764 29.3659 29.8663C28.7516 29.9582 27.9741 29.9965 27.1199 29.725C26.602 29.5607 25.9379 29.3413 25.0871 28.9739C21.7442 27.5304 19.485 24.2904 19.058 23.678C19.0281 23.6351 19.0072 23.6051 18.9955 23.5895L18.9927 23.5857C18.804 23.3339 17.5395 21.6468 17.5395 19.9008C17.5395 18.2582 18.3463 17.3973 18.7177 17.001C18.7432 16.9739 18.7666 16.9489 18.7875 16.926C19.1144 16.569 19.5007 16.4797 19.7384 16.4797C19.9761 16.4797 20.2141 16.4819 20.4219 16.4924C20.4475 16.4937 20.4742 16.4935 20.5017 16.4933C20.7095 16.4921 20.9686 16.4906 21.2242 17.1045C21.3225 17.3407 21.4664 17.691 21.6181 18.0604C21.9249 18.8074 22.264 19.6328 22.3236 19.7522C22.4128 19.9307 22.4722 20.1389 22.3533 20.3769C22.3355 20.4126 22.319 20.4463 22.3032 20.4785C22.2139 20.6608 22.1483 20.7948 21.9967 20.9718C21.9372 21.0413 21.8756 21.1163 21.814 21.1913C21.6913 21.3407 21.5687 21.4901 21.4619 21.5965C21.2833 21.7743 21.0975 21.9672 21.3055 22.3242C21.5135 22.6812 22.2292 23.8489 23.2892 24.7945C24.4288 25.8109 25.4192 26.2405 25.9212 26.4582C26.0192 26.5008 26.0986 26.5352 26.1569 26.5644C26.5133 26.7429 26.7213 26.713 26.9294 26.4751C27.1374 26.2371 27.8208 25.4338 28.0584 25.0769C28.2961 24.7201 28.5339 24.7795 28.8607 24.8984C29.1877 25.0176 30.9408 25.8801 31.2974 26.0586C31.367 26.0934 31.4321 26.1249 31.4924 26.154Z" fill="#FDFDFD"/></svg>
                                Спросите в WhatsApp
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-5 offset-xl-1">
                    <div class="consultation-form form">
                        <div class="section-title form__title">
                            <?php the_field( 'form_title', 22 ); ?>
                        </div>
                        <p class="form__text"><?php the_field( 'form_text', 22 ); ?></p>
                        <?php
                        echo do_shortcode('[contact-form-7 id="171" title="Заказать консультацию"]');
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php

// include 'template-parts/home/order-consultation.php';
include 'template-parts/home/news.php';

?>


<?php get_footer(); ?>