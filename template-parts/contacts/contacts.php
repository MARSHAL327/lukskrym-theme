<?php

/*
	Контакты
*/

$contacts = [
    "email" => [
        "name" => "E-mail",
    ],
    "email_accounting" => [
        "name" => "Экономический отдел",
    ],
    "email_purchases" => [
        "name" => "Отдел закупок",
    ],
];

$phones = ["phone_2", "phone_1"];
$countPhones = 0;

foreach ($phones as $phone) {
    if( get_field($phone, 8) ) $countPhones++;
}

?>

<div class="contacts">
    <div class="row">
        <div class="col-12 text-center d-none">
            <h1 class="page-title"><?php the_title(); ?></h1>
        </div>

        <div class="col-lg-6 col-xl-5">
			<div class="contacts-items">
				<h2>Контактная информация</h2>
				<ul class="contacts-info">
                    <?php if( $countPhones > 0 ): ?>
                        <li class="phone">
                            Телефон:
                            <?php foreach ($phones as $i => $phone): ?>
                            <?php if( get_field( $phone, 8 ) ): ?>
                                    <span>
                                    <a href="tel:<?php the_field( $phone, 8 ); ?>">
                                        <?php the_field( $phone, 8 ); ?>
                                    </a>
                                        <?= $countPhones != $i + 1 ? "," : "" ?>
                                </span>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </li>
                    <?php endif; ?>

                    <?php if( get_field( 'postcode', 8 ) || get_field( 'address', 8 ) ): ?>
                        <li>Адрес:
                            <?php if( get_field( 'postcode', 8 ) ): ?>
                                <span><?php the_field( 'postcode', 8 ); ?>,</span>
                            <?php endif; ?>
                            <?php if( get_field( 'address', 8 ) ): ?>
                                <span><?php the_field( 'address', 8 ); ?></span>
                            <?php endif; ?>
                        </li>
                    <?php endif; ?>

                    <?php foreach ($contacts as $contactName => $contact): ?>
                        <?php if( get_field( $contactName, 8 ) ): ?>
                            <li><?= $contact["name"] ?>:
                                <a href="mailto:<?php the_field( $contactName, 8 ); ?>"
                                   target="_blank"><?php the_field( $contactName, 8 ); ?>
                                </a>
                            </li>
                        <?php endif; ?>
                    <?php endforeach; ?>

                    <?php if( get_field( 'text_open', 8 ) ): ?>
                        <li class="open">Время работы: <span><?php the_field( 'text_open', 8 ); ?></span></li>
                    <?php endif; ?>
				</ul>
			</div>
		</div>
		<div class="col-lg-6">
			<div class="contacts-items">
				<h2>Юридическая информация</h2>
				<ul class="contacts-info legal-info">
					<li>ООО «ЛУКС»</li>
					<li><span>ОГРН:</span> <?php the_field( 'ogrn', 8 ); ?></li>
					<li><span>ИНН:</span> <?php the_field( 'inn', 8 ); ?></li>
					<li><span>КПП:</span> <?php the_field( 'kpp', 8 ); ?></li>
					<li><span>Ген. Директор:</span> <?php the_field( 'director', 8 ); ?></li>
				</ul>
				<ul class="licenses">
					<li><a href="<?php the_field( 'company_license_certificates', 8 ); ?>" target="blank">Лицензии и свидетельства</a></li>
					<li><a href="<?php the_field( 'company_info', 8 ); ?>" target="blank">Информация о компании</a></li>
				</ul>
				<a href="<?php the_field( 'company_card', 8 ); ?>" class="button" download>Скачать карточку предприятия</a>
			</div>
		</div>
	</div>
</div>