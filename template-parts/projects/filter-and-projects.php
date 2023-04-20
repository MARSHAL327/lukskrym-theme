<?php

function beetwenFilter($propName, $item){
    return [
        'key' => $propName,
        'value' => explode("-", $item),
        'compare' => 'BETWEEN',
        'type' => 'NUMERIC',
    ];
}

$defaultProjectParams = [
    'category' => 13,
    'orderby' => 'date',
    'order' => 'ASC',
    'include' => [],
    'exclude' => [],
    'meta_key' => '',
    'meta_value' => '',
    'post_type' => 'post',
    'nopaging' => true,
    'suppress_filters' => true,
];
$projectQueryFilter = [];
$filterQuery = getFilterName($_SERVER["REQUEST_URI"]);

if (($filterQuery != "clear" && !empty($filterQuery)) || !empty($_GET))
    $projectQueryFilter = [
        'relation' => 'AND',
    ];

if ($filterQuery && $filterQuery != "clear") {
    $projectQueryFilter[] = [
        'key' => 'project_categories',
        'value' => '"' . $filterQuery . '"',
        'compare' => 'LIKE',
    ];
}

foreach ($_GET as $propName => $items) {
    $projectQueryFilter[$propName] = [
        'relation' => 'OR',
    ];

    switch ($propName) {
        case "project_price":
            $projectQueryFilter[$propName][] = beetwenFilter($propName, $items);
            $projectQueryFilter[$propName][] = [
                'key' => $propName,
                'compare' => 'NOT EXISTS',
            ];
            break;
    }

    if( is_array($items) ){
        foreach ($items as $item) {
            switch ($propName) {
                case "project_categories":
                    $projectQueryFilter[$propName][] = [
                        'key' => $propName,
                        'value' => '"' . $item . '"',
                        'compare' => 'LIKE',
                    ];
                    break;
                case "project_area_rooms":
                    $projectQueryFilter[$propName][] = beetwenFilter($propName, $item);
                    break;
            }
        }
    }
}

$allProjects = get_posts($defaultProjectParams);
?>

    <div class="row">
        <div class="col-12">
            <div class="breadcrumbs">
                <?php true_breadcrumbs(); ?>
            </div>
        </div>
        <div class="col-12 text-center">
            <h1 class="page-title">
                <?php the_field('page_projects_title'); ?>
            </h1>
        </div>
    </div>

<?php include 'filter-block.php'; ?>

<?php
$defaultProjectParams['meta_query'] = $projectQueryFilter;
$projects = get_posts($defaultProjectParams);
include 'finished-projects.php';
?>