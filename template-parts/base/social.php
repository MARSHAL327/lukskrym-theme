<?php

/*
	Соцсети
*/

$socialIcons = [
    "facebook" => [
        "icon" => '/assets/images/social/facebook.svg',
    ],
    "instagram" => [
        "icon" => '/assets/images/social/insta.svg',
    ],
    "vk" => [
        "icon" => '/assets/images/social/vk.svg',
    ],
    "youtube" => [
        "icon" => '/assets/images/social/youtube.svg',
    ],
    "viber" => [
        "icon" => '/assets/images/social/viber.svg',
    ],
    "telegram" => [
        "icon" => '/assets/images/social/telegram.svg',
    ],
    "whatsapp" => [
        "icon" => '/assets/images/social/whatsapp.svg',
    ],
];

$socialCount = 0;

foreach ($socialIcons as $socialName => $social) {
    if (get_field($socialName, 8))
        $socialCount++;
}

?>

<ul class="social-list">
    <?php foreach ($socialIcons as $socialName => $social): ?>
        <?php if (get_field($socialName, 8)): ?>
            <li>
                <a class="social-center-text" rel="nofollow noopener noreferrer" href="<?= get_field($socialName, 8) ?>" target="_blank">
                    <img src="<?php echo get_template_directory_uri() . $social["icon"] ?>"
                         alt="<?= $socialName ?>">
                        <?= $socialCount == 1 ? $socialName : ""; ?>
                </a>
            </li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>