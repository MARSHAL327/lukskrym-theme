<?php
/**
 * @var $mortgagePageId
 */
?>

<?php if( get_field("show_mortgage_block") ): ?>
    <div class="section grey-block">
        <div class="container">
            <div class="row">
                <div class="section-title text-center">
                    ИПОТЕКА НА СТРОИТЕЛЬСТВО ДОМА С LUKS
                </div>
            </div>
            <div class="row">
                <div class="banks">
                    <div class="banks__description section-description">
                        Работаем со всеми видами ипотек: стандартная, военная, сельская и IT ипотека
                    </div>

                    <a href="/ipoteka" class="banks__items">
                        <?php foreach (get_field("color_bank_logo", $mortgagePageId) as $bankLogo): ?>
                            <div class="banks__item">
                                <img src="<?= $bankLogo["url"] ?>" alt="">
                            </div>
                        <?php endforeach; ?>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>