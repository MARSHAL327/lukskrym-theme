<?php

/*
	Текстовые отзывы
*/

?>

<?php
$posts = get_posts([
    'post_type' => 'post',
    'category' => 34,
    'numberposts' => 9,
    'orderby' => 'date',
    'order' => 'DESC',
    'include' => [],
    'exclude' => [],
    'meta_key' => '',
    'meta_value' => '',
    'suppress_filters' => true,
]);

if ($posts) { ?>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title">
                        Мы рады каждому отзыву
                    </div>

                    <p class="section-description section-description_left">
                        Как у любой опытной компании, у нас есть положительные и отрицательные отзывы. Мы ничего от вас
                        не
                        скрываем!
                    </p>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="owl-carousel carousel-reviews">
                        <?php
                        $sourceIcons = [
                            "yandex" => '/assets/images/Yandex_znak.svg',
                            "google" => "/assets/images/Google__G__Logo.svg",
                        ];

                        foreach ($posts as $post) {
                            setup_postdata($post); ?>

                            <div class="review-cards__item hidden-block">
                                <div class="review-cards__title-wrapper">
                                    <div class="review-cards__title">
                                        «<?= the_title() ?>»
                                    </div>
                                    <?php if (get_field("source")): ?>
                                        <div class="review-cards__icon">
                                            <img src="<?= get_template_directory_uri() . $sourceIcons[get_field("source")["value"]] ?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                </div>
                                <div class="star-rating">
                                    <div class="rating-result">
                                        <?php for ($i = 0; $i < 5; $i++): ?>
                                            <?php if( $i < get_field("review_rating") ): ?>
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
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
}
wp_reset_postdata();
?>