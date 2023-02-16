<?php

/*
	Видеоотзывы
*/

?>

<?php
$posts = get_posts([
    'post_type' => 'post',
    'category_name' => 'videootzyvy',
    'numberposts' => 0,
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => [],
    'exclude' => [],
    'meta_key' => '',
    'meta_value' => '',
    'suppress_filters' => true,
]);

if ($posts) {
    ?>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="section-title" style="margin-bottom: 30px">
                        Отзывы наших заказчиков
                    </h1>
                </div>
            </div>

            <?php
            foreach ($posts as $post) {
                $imgs = get_field("review_gallery");
                $videoCode = get_field("review_video_link");

                setup_postdata($post); ?>
                <div class="row mb-5">
                    <div class="col-md-7 swiper-right-thumb" id="swiper-right-thumb-<?= get_the_ID() ?>">
                        <div class="swiper swiper-right-thumb__slide"
                             style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                        >
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <iframe src="https://www.youtube.com/embed/<?= $videoCode ?>"
                                            title="YouTube video player" frameborder="0"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                            allowfullscreen></iframe>
                                </div>
                                <?php foreach ($imgs as $img): ?>
                                    <div class="swiper-slide">
                                        <img src="<?= $img["url"] ?>" alt="<?= $img["alt"] ?>"/>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                            <div class="slider-nav">
                                <button type="button" role="presentation" class="slider-nav__prev">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"></path>
                                    </svg>
                                </button>
                                <button type="button" role="presentation" class="slider-nav__next">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                                        <path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"></path>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="swiper swiper-right-thumb__thumb">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper-slide__video-icon">
                                        <svg width="64" height="64" viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="32" cy="32" r="32" fill="#007A9B"/>
                                            <path d="M42.2397 31.9999L26.8797 40.868L26.8797 23.1318L42.2397 31.9999Z" fill="white"/>
                                        </svg>
                                    </div>
                                    <img src="//img.youtube.com/vi/<?= $videoCode ?>/mqdefault.jpg" alt="Видеоотзыв">
                                </div>
                                <?php foreach ($imgs as $img): ?>
                                    <div class="swiper-slide">
                                        <img src="<?= $img["url"] ?>" alt="<?= $img["alt"] ?>"/>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-5 video-reviews">
                        <div class="review-cards__item hidden-block">
                            <div class="review-cards__title-wrapper">
                                <div class="review-cards__title">
                                    «<?= the_title() ?>»
                                </div>
                            </div>
                            <div class="star-rating">
                                <div class="rating-result">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <?php if ($i < get_field("review_rating")): ?>
                                            <span class="active"></span>
                                        <?php else: ?>
                                            <span></span>
                                        <?php endif; ?>
                                    <?php endfor; ?>
                                </div>
                            </div>
                            <div class="review-cards__description hidden-block__text">
                                <?= get_field("review_description") ?>
                            </div>
                            <div class="author">
                                <?php if (get_field("review_author_img")): ?>
                                    <div class="author__img">
                                        <img src="<?= get_field("review_author_img")["url"] ?>" alt="">
                                    </div>
                                <?php endif; ?>
                                <div class="author__name">
                                    <?= get_field("review_author_name") ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <?php } ?>

        </div>
    </div>
    <?php
}
wp_reset_postdata();
?>