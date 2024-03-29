<?php

/*
Template Name: Ипотека
*/

/**
 * @var $bankLogos
 */

$phone2 = get_field('phone_2', 8);
$whatsAppLink = get_field("whatsapp", 8);
$mortgageTypes = get_field("mortgage_types") ?? [];
$specialCredits = get_field("special_credits") ?? [];
$firstColumn = get_field("first_column") ?? [];
$secondColumn = get_field("second_column") ?? [];
$additionalBlock = get_field("additional_block") ?? [];
$colorAndWhiteBankLogo = get_field("color_and_white_bank_logo") ?? [];
$mortgageTypesWithSteps = [];

foreach ($mortgageTypes as $mortgageType) {
    if ($mortgageType["credit_steps"]) {
        $mortgageTypesWithSteps[] = $mortgageType;
    }
}

?>

<?php get_header(); ?>

    <div class="page-content-wrapper page-content-wrapper_no-padding">
        <section class="background background_blur background_brightness section-order-consultation section-order-form"
                 style="background-image: url(<?= get_stylesheet_directory_uri() . '/assets/images/bg/credit_bg.png' ?>)">
            <div class="container">
                <div class="form-description">
                    <div class="form-description__description">
                        <h1><?= get_field("h1_title") ?></h1>
                        <div class="form-description__description-block">
                            <span><?= get_field("bank_description") ?></span>
                            <div class="bank-items <?= count($colorAndWhiteBankLogo) > 4 ? "bank-items_grid" : "" ?>">
                                <?php foreach ($colorAndWhiteBankLogo as $bankLogo): ?>
                                    <div class="bank-items__item">
                                        <img src="<?= $bankLogo["url"] ?>" alt="">
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="form-description__description-block">
                        <span style="color: #A0A0A0">
                            <?= get_field("text_with_credit") ?>
                        </span>
                            <div class="mortgage-types">
                                <?php foreach ($mortgageTypes as $mortgageType): ?>
                                    <div class="mortgage-types__item">
                                        <img src="<?= $mortgageType["icon"]["url"] ?>" alt="">
                                        <?= $mortgageType["name"] ?>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                    <div class="form-description__form form">
                        <div class="section-title form__title">
                            Получите условия
                        </div>
                        <?= do_shortcode('[contact-form-7 id="12170" title="Ипотека"]') ?>
                    </div>
                </div>
            </div>


        </section>
    </div>

    <div class="container">
        <section class="row mortgage-documents">
            <div class="col-md-8 col-lg-9">
                <div class="row">
                    <?php if ($firstColumn["title"] || $firstColumn["items"]): ?>
                        <div class="col-md-6">
                            <h4><?= $firstColumn["title"] ?></h4>
                            <?php if ($firstColumn["items"]): ?>
                                <div class="lists-block">
                                    <ol>
                                        <?php foreach ($firstColumn["items"] as $item): ?>
                                            <li><?= $item["item"] ?></li>
                                        <?php endforeach; ?>
                                    </ol>
                                </div>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($secondColumn["title"] || $secondColumn["items"] || $secondColumn["description"]): ?>
                        <div class="col-md-6">
                            <h4><?= $secondColumn["title"] ?></h4>
                            <?php if ($secondColumn["items"]): ?>
                                <div class="lists-block">
                                    <ol>
                                        <?php foreach ($secondColumn["items"] as $item): ?>
                                            <li><?= $item["item"] ?></li>
                                        <?php endforeach; ?>
                                    </ol>
                                </div>
                            <?php endif; ?>
                            <span><?= $secondColumn["description"] ?></span>
                        </div>
                    <?php endif; ?>
                </div>
                <?php if ($additionalBlock["title"] || $additionalBlock["description"]): ?>
                    <div class="row mt-5">
                        <h4><?= $additionalBlock["title"] ?></h4>
                        <p>
                            <?= $additionalBlock["description"] ?>
                        </p>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-md-4 col-lg-3">
                <?php include 'template-parts/home/roadmap.php'; ?>
            </div>
        </section>

        <section>
            <h2><?= get_field("calculator_title") ?></h2>
            <div class="credit-calculator">
                <div class="input-sliders">
                    <div class="input-sliders__item">
                        <div class="input-sliders__line">
                            <span>Сумма ипотеки</span>
                            <span class="input-sliders__result"><span id="credit-sum">0</span> ₽</span>
                        </div>
                        <input name="credit-sum" class="input-sliders__slider" type="range" min="100000" max="12000000" step="100000" value="2000000">
                        <div class="input-sliders__line">
                            <span>100 тыс ₽</span>
                            <span>12 млн ₽</span>
                        </div>
                    </div>
                    <div class="input-sliders__item">
                        <div class="input-sliders__line">
                            <span>Срок ипотеки</span>
                            <span class="input-sliders__result"><span id="credit-term">0</span> лет</span>
                        </div>
                        <input name="credit-term" class="input-sliders__slider" type="range" min="5" max="30" step="1" value="15">
                        <div class="input-sliders__line">
                            <span>5 лет</span>
                            <span>30 лет</span>
                        </div>
                    </div>
                    <div class="input-sliders__item">
                        <div class="input-sliders__line">
                            <span>Первоначальный взнос</span>
                            <span class="input-sliders__result"><span id="initial-payment">0</span> %</span>
                        </div>
                        <input name="initial-payment" class="input-sliders__slider" type="range" min="10" max="30" step="1" value="15">
                        <div class="input-sliders__line">
                            <span>10%</span>
                            <span>30%</span>
                        </div>
                    </div>
                </div>
                <div class="credit-result">
                    <div class="credit-result__results">
                        <div class="credit-result__results-item">
                            <span class="text_grey">
                                Ежемесячный платеж
                            </span>
                            <span class="text_bold text_big">
                                <span id="monthly-payment">0</span> ₽
                            </span>
                        </div>
                        <div class="credit-result__results-item">
                            <span class="text_grey">
                                Общая сумма выплат
                            </span>
                            <span class="text_bold text_big">
                                <span id="total-pay">0</span> ₽
                            </span>
                        </div>
                    </div>

                    <?php if( $phone2 || $whatsAppLink ): ?>
                        <div class="credit-result__call">
                            <span class="text_grey">Получить консультацию</span>
                            <?php if( $phone2 ): ?>
                                <h4>
                                    <a href="tel:<?= $phone2 ?>" class="tel"><?= $phone2 ?></a>
                                </h4>
                            <?php endif; ?>
                            <?php if( $whatsAppLink ): ?>
                                <a href="<?= $whatsAppLink ?>" class="whatsapp-btn">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14.5892 11.9226L14.5817 11.9851C12.7492 11.0717 12.5575 10.9501 12.3208 11.3051C12.1567 11.5509 11.6783 12.1084 11.5342 12.2734C11.3883 12.4359 11.2433 12.4484 10.9958 12.3359C10.7458 12.2109 9.94333 11.9484 8.99333 11.0984C8.25333 10.4359 7.75666 9.62339 7.60999 9.37339C7.36583 8.95173 7.87666 8.89173 8.34166 8.01173C8.42499 7.83673 8.38249 7.69923 8.32083 7.57506C8.25833 7.45006 7.76083 6.22506 7.55249 5.73673C7.35249 5.25006 7.14666 5.31173 6.99249 5.31173C6.51249 5.27006 6.16166 5.27673 5.85249 5.59839C4.50749 7.07673 4.84666 8.60173 5.99749 10.2234C8.25916 13.1834 9.46416 13.7284 11.6675 14.4851C12.2625 14.6742 12.805 14.6476 13.2342 14.5859C13.7125 14.5101 14.7067 13.9851 14.9142 13.3976C15.1267 12.8101 15.1267 12.3226 15.0642 12.2101C15.0025 12.0976 14.8392 12.0351 14.5892 11.9226Z"
                                              fill="white"/>
                                        <path d="M17.1 2.87392C10.6925 -3.32025 0.0883333 1.17225 0.0841667 9.91058C0.0841667 11.6573 0.541667 13.3606 1.41333 14.8648L0 19.9998L5.27917 18.6231C11.8667 22.1814 19.9967 17.4564 20 9.91558C20 7.26892 18.9667 4.77808 17.0875 2.90642L17.1 2.87392ZM18.335 9.88809C18.33 16.2489 11.3475 20.2214 5.825 16.9748L5.525 16.7964L2.4 17.6089L3.2375 14.5714L3.03833 14.2589C-0.398333 8.78809 3.55 1.63808 10.06 1.63808C11.1471 1.63535 12.224 1.84827 13.2283 2.26452C14.2326 2.68077 15.1444 3.29209 15.9108 4.06308C16.6815 4.8244 17.2927 5.73159 17.7089 6.7317C18.1251 7.73182 18.338 8.80482 18.335 9.88809Z"
                                              fill="white"/>
                                    </svg>
                                    Написать в WhatsApp
                                </a>
                            <?php endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <p class="text_grey">
                    <?= get_field("calculator_description") ?>
                </p>
            </div>
        </section>

        <?php if ($mortgageTypesWithSteps): ?>
            <section>
                <h2>Доступные виды ипотеки</h2>
                <div class="credit-steps">
                    <?php foreach ($mortgageTypesWithSteps as $mortgageTypeWithSteps): ?>
                        <div class="credit-steps__item">
                            <div class="credit-steps__header">
                                <div class="credit-steps__icon">
                                    <img src="<?= $mortgageTypeWithSteps["icon"]["url"] ?>" alt="">
                                </div>
                                <div class="credit-steps__text">
                                    <h3 class="credit-steps__title">
                                        <?= $mortgageTypeWithSteps["name"] ?>
                                    </h3>
                                    <div class="credit-steps__description">
                                        <?= $mortgageTypeWithSteps["description"] ?>
                                    </div>
                                </div>
                            </div>
                            <div class="credit-steps__steps">
                                <?php foreach ($mortgageTypeWithSteps["credit_steps"] as $i => $credit_step): ?>
                                    <div class="credit-steps__steps-item">
                                        <div class="credit-steps__steps-item__num">0<?= $i + 1 ?></div>
                                        <div class="credit-steps__steps-item__point"></div>
                                        <div class="credit-steps__steps-item__title">
                                            <?= $credit_step["credit_step"] ?>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>

        <?php if( $specialCredits ): ?>
            <section>
                <h2>Специальные предложения по ипотеке</h2>
                <div class="special-credits">
                    <?php foreach ($specialCredits as $specialCredit): ?>
                        <div class="special-credits__item">
                            <div class="special-credits__icon">
                                <img src="<?= $specialCredit["icon"]["url"] ?>" alt="">
                            </div>
                            <h3 class="special-credits__title">
                                <?= $specialCredit["name"] ?>
                            </h3>
                            <div class="special-credits__description">
                                <?= $specialCredit["description"] ?>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>
    </div>

<?php get_footer(); ?>