<?php

/**
 * @var $projects
 * @var $allProjects
 * @var $noCount
 */

/*
	Проекты
*/

if (!$noCount):
    $projectsNum = count($projects);
    $allProjectsNum = count($allProjects);
?>

    <div class="projects__count">
        <?php if( $projectsNum == 0 ): ?>
            <p>Проектов по заданному фильтру не найдено</p>
            <a href="/gotovye-proekty" class="button filter__clear">
                Очистить фильтр
            </a>
        <?php else: ?>
            <p>Показано проектов: <?= $projectsNum ?> из <?= $allProjectsNum ?></p>
        <?php endif; ?>
    </div>
<?php endif; ?>

<div class="projects">

    <?php

    foreach ($projects as $post):
        setup_postdata($post);
        $characteristicsTitleKeys = getCharacteristicsTitleKeys(get_field("characteristics"));

        $props = [
            [
                "icon" => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M447.9 332l.1 136c0 6.6-5.4 12-12 12l-136-.1c-6.6 0-12-5.4-12-12v-27.8c0-6.7 5.5-12.1 12.2-12l61.4 2.3 1.4-1.4-139-139L85 429l1.4 1.4 61.4-2.3c6.7-.1 12.2 5.3 12.2 12v27.8c0 6.6-5.4 12-12 12L12 480c-6.6 0-12-5.4-12-12l.1-136c0-6.6 5.4-12 12-12h27.8c6.7 0 12.1 5.5 12 12.2l-2.3 61.4L51 395l139-139L51 117l-1.4 1.4 2.3 61.4c.1 6.7-5.3 12.2-12 12.2H12.1c-6.6 0-12-5.4-12-12L0 44c0-6.6 5.4-12 12-12l136 .1c6.6 0 12 5.4 12 12v27.8c0 6.7-5.5 12.1-12.2 12l-61.4-2.3L85 83l139 139L363 83l-1.4-1.4-61.4 2.3c-6.7.1-12.2-5.3-12.2-12V44.1c0-6.6 5.4-12 12-12l136-.1c6.6 0 12 5.4 12 12l-.1 136c0 6.6-5.4 12-12 12h-27.8c-6.7 0-12.1-5.5-12-12.2l2.3-61.4-1.4-1.4-139 139 139 139 1.4-1.4-2.3-61.4c-.1-6.7 5.3-12.2 12-12.2h27.8c6.6 0 12 5.4 12 12z"></path></svg>',
                "name" => "Площадь помещений дома",
                "title" => "Площадь",
            ],
            [
                "icon" => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 96 96" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g id="Layer_4"><g><path d="m27.889 41.588h5.122v15.673c0 2.952 2.402 5.356 5.356 5.356h34.41c2.952 0 5.356-2.403 5.356-5.356v-15.673h6.925c.957 0 1.802-.605 2.205-1.581.437-1.056.243-2.252-.479-2.972l-27.7-27.904c-1.465-1.463-3.805-1.511-5.225-.096l-27.69 28.043c-.722.721-.918 1.9-.49 2.936.402.971 1.248 1.574 2.21 1.574zm32.38 17.962h-7.915v-12.68c0-.365.297-.663.663-.663h6.59c.365 0 .663.297.663.663v12.68zm14.799-2.289c0 1.262-1.027 2.29-2.29 2.29h-9.443v-12.681c0-2.056-1.673-3.729-3.729-3.729h-6.59c-2.056 0-3.729 1.673-3.729 3.729v12.68h-10.92c-1.263 0-2.29-1.028-2.29-2.29v-16.742l20.39-20.404 18.971 18.972c-.222.266-.371.595-.371.968v17.207zm-19.034-46.062c.234-.236.645-.136.877.096l27.03 27.227h-4.73l-20.575-20.576c-1.192-1.194-3.131-1.194-4.323 0l-20.575 20.576h-4.684z" fill="#000000" data-original="#000000"></path><path d="m10.515 53.368c-.599-.599-1.569-.599-2.168 0s-.599 1.569 0 2.168l5.585 5.584c.676.677 1.574 1.048 2.53 1.048.955 0 1.854-.371 2.529-1.048l5.585-5.584c.599-.599.599-1.569 0-2.168s-1.569-.599-2.168 0l-4.414 4.412v-44.874l4.413 4.414c.299.299.693.449 1.085.449s.785-.15 1.084-.449c.599-.599.599-1.569 0-2.168l-5.585-5.586c-.348-.349-.774-.581-1.212-.773-.775-.338-2.125-.16-2.636 0-.452.141-.863.424-1.212.773l-5.585 5.586c-.599.599-.599 1.569 0 2.168s1.569.599 2.168 0l4.413-4.414v44.874z" fill="#000000" data-original="#000000"></path><path d="m31.781 87.548c.299.299.692.449 1.084.449.393 0 .786-.15 1.084-.449.599-.599.599-1.569.001-2.168l-4.413-4.414h54.247l-4.413 4.414c-.599.599-.599 1.569 0 2.168.299.299.692.449 1.084.449s.785-.15 1.084-.449l5.584-5.584c.356-.355.5-.686.799-1.231.253-.46.226-2.127-.001-2.602-.251-.525-.442-.872-.798-1.228l-5.583-5.583c-.599-.599-1.569-.599-2.168 0s-.599 1.569 0 2.168l4.413 4.412h-54.248l4.412-4.412c.599-.599.599-1.569.001-2.168-.599-.599-1.57-.599-2.169 0l-5.585 5.584c-.676.677-1.047 1.575-1.047 2.529 0 .956.372 1.857 1.047 2.529z" fill="#000000" data-original="#000000"></path></g></g></g></svg>',
                "name" => "Габариты дома",
                "title" => "Размер",
            ],
        ]
        ?>

        <a href="<?= get_permalink($post); ?>" class="project">
            <img class="lazy project__img"
                 src="data:image/gif;base64,R0lGODlhSAAFAIAAAP///wAAACH5BAEAAAEALAAAAABIAAUAAAIRjI+py+0Po5y02ouz3rz7VgAAOw=="
                 data-src="<?php the_post_thumbnail_url('project-card-thumb'); ?>"
                 alt="Проект дома <?php the_title(); ?>">
            <div class="project__info">
                <div class="project__params">
                    <?php foreach ($props as $prop): ?>
                        <?php if ($characteristicsTitleKeys[$prop["name"]]): ?>
                            <div class="project__params__item">
                                <div class="project__params__icon"><?= $prop["icon"] ?></div>
                                <div>
                                    <div class="project__params__name"><?= $prop["title"] ?></div>
                                    <div class="project__params__value"><?= $characteristicsTitleKeys[$prop["name"]] ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="project__name">
                    <?= get_the_title() ?>
                </div>
                <div class="project__price">
                    <?php if (get_field("project_price")): ?>
                        <?= priceFormat(get_field("project_price")) ?>
                    <?php else: ?>
                        Нет цены
                    <?php endif; ?>
                    <div class="project__more">
                        <span>Смотреть проект</span>
                        <svg width="51" height="8" viewBox="0 0 51 8" fill="none"
                             xmlns="http://www.w3.org/2000/svg">
                            <path d="M50.3536 4.35356C50.5488 4.1583 50.5488 3.84171 50.3536 3.64645L47.1716 0.46447C46.9763 0.269208 46.6597 0.269208 46.4645 0.46447C46.2692 0.659732 46.2692 0.976315 46.4645 1.17158L49.2929 4L46.4645 6.82843C46.2692 7.02369 46.2692 7.34028 46.4645 7.53554C46.6597 7.7308 46.9763 7.7308 47.1716 7.53554L50.3536 4.35356ZM-4.37114e-08 4.5L50 4.5L50 3.5L4.37114e-08 3.5L-4.37114e-08 4.5Z"
                                  fill="#CCCCCC"/>
                        </svg>
                    </div>

                </div>
            </div>
        </a>

        <?php
        wp_reset_postdata();
    endforeach;
    ?>
</div>


