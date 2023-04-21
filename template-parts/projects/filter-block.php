<?php

/**
 * @var $allProjects
 */

/*
	Фильтр проектов
*/

function filterBlock($filterProp)
{
    if( empty($filterProp["values"]) ) {  echo ""; return; }
    $defaultGetParams = $_GET;
    ?>
    <div class="filters-block">
        <div class="filters-block__title">
            <?= $filterProp["name"] ?>
        </div>
        <div class="filters-block__values <?= $filterProp["type"] == "slider" ? "filters-block__values_slider" : "" ?>">
            <?php if ($filterProp["type"] == "select"): ?>
                <?php foreach ($filterProp["values"] as $filterPropKey => $filterPropValue): ?>
                    <?php
                    $filterQuery = getFilterName($_SERVER["REQUEST_URI"]);

                    $activeItem = $_GET[$filterProp["slug"]] ? array_search($filterPropKey, $_GET[$filterProp["slug"]]) : false;
                    $isActive = $filterProp["slug"] ?
                        ($activeItem !== false):
                        $filterQuery == $filterPropKey;

                    if ($filterProp["get"]) {
                        if ($isActive) {
                            unset($_GET[$filterProp["slug"]][$activeItem]);
                            if( empty($_GET[$filterProp["slug"]]) ) unset($_GET[$filterProp["slug"]]);
                        } else {
                            $_GET[$filterProp["slug"]][] = $filterPropKey;
                        }

                        $link = urldecode("/gotovye-proekty/" . $filterQuery . (!empty($_GET) ? "?" . http_build_query($_GET) : "") );
                        $_GET = $defaultGetParams;
                    } else {
                        $link = "/gotovye-proekty/" .
                            ($isActive ? "" : $filterPropKey) . // формирование ссылки для особенностей
                            ($_SERVER["QUERY_STRING"] ? "?$_SERVER[QUERY_STRING]" : ""); // формирование гет параметров
                    }
                    ?>
                    <a href="<?= $link ?>" class="filters-block__values__item <?= $isActive ? "active" : "" ?>">
                        <?= $filterPropValue ?>
                    </a>
                <?php endforeach; ?>
            <?php endif; ?>
            <?php if( $filterProp["type"] == "slider" ): ?>
                <div class="slider">
                    <div class="slider__values">
                        <div id="slider__values_min"><?= priceFormat($filterProp["values"]["min"]) ?></div>
                        <div id="slider__values_max"><?= priceFormat($filterProp["values"]["max"]) ?></div>
                    </div>
                    <div id="slider"
                         data-min="<?= $filterProp["values"]["min"] ?>"
                         data-max="<?= $filterProp["values"]["max"] ?>"
                    ></div>
                </div>
            <?php endif; ?>
        </div>
    </div>
    <?php
}

$filterValues = [
    "floors" => [],
    "prices" => [],
    "square" => [],
    "props" => [],
];

$min = null;
$max = null;

foreach ($allProjects as $post) {
    setup_postdata($post);
    $price = get_field("project_price");

    if ($price !== null) {
        if ($price < $min || $min === null)
            $min = $price;

        if ($price > $max || $max === null)
            $max = $price;
    }

    foreach (get_field("project_categories") as $category) {
        if (strpos($category["value"], "floor") !== false) {
            $filterValues["floors"][$category["value"]] = $category["label"];
        } else {
            $filterValues["props"][$category["value"]] = $category["label"];
        }
    }

    wp_reset_postdata();
}

$filterValues["prices"]["min"] = $min;
$filterValues["prices"]["max"] = $max;

$filterProps = [
    [
        "name" => "Количество этажей",
        "slug" => "project_categories",
        "values" => $filterValues["floors"],
        "type" => "select",
        "get" => true,
    ],
    [
        "name" => "Общая площадь",
        "slug" => "project_area_rooms",
        "values" => [
            "0-100" => "до 100 м<sup>2</sup>",
            "100-150" => "от 100 до 150 м<sup>2</sup>",
            "150-10000" => "от 150 м<sup>2</sup>",
        ],
        "type" => "select",
        "get" => true,
    ],
    [
        "name" => "Стоимость",
        "slug" => "project_price",
        "values" => $filterValues["prices"],
        "type" => "slider",
        "get" => true,
    ],
];

$childPosts = getChildPostsSlug(39);

$features = [
    "name" => "Особенности",
    "values" => [] ,
    "type" => "select",
];

?>

<section>
    <div class="filter">
        <div class="filter__header">
            <div class="filter__title">
                Выбор по параметрам
            </div>
            <a href="/gotovye-proekty" class="filter__clear">
                Очистить фильтр
            </a>
        </div>
        <div class="filters">
            <div class="filters__line-3-fr">
                <?php foreach ($filterProps as $filterProp): ?>
                    <?php filterBlock($filterProp) ?>
                <?php endforeach; ?>
            </div>
            <div class="filters__line">
                <?php filterBlock($features) ?>
            </div>
        </div>
    </div>
</section>
