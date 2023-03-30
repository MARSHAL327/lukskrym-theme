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
                        <div class="banks__item">
                            <img src="<?= get_template_directory_uri() . "/assets/images/BR_logo.png" ?>" alt="">
                        </div>
                        <div class="banks__item">
                            <img src="<?= get_template_directory_uri() . "/assets/images/LOGO_HOME.png" ?>" alt="">
                        </div>
                        <div class="banks__item">
                            <img src="<?= get_template_directory_uri() . "/assets/images/SBER_LOGO.png" ?>" alt="">
                        </div>
                        <div class="banks__item">
                            <img src="<?= get_template_directory_uri() . "/assets/images/RNCB.png" ?>" alt="">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>