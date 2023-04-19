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

if (!empty(get_query_var("filter")) || !empty($_GET))
    $projectQueryFilter = [
        'relation' => 'AND',
    ];

$filterQuery = get_query_var("filter");
if ($filterQuery && $filterQuery != "filter" && $filterQuery != "filter/gotovye-proekty") {
    $projectQueryFilter[] = [
        'key' => 'project_categories',
        'value' => '"' . get_query_var("filter") . '"',
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

<?php include 'filter-block.php'; ?>


<?php
$defaultProjectParams['meta_query'] = $projectQueryFilter;
$projects = get_posts($defaultProjectParams);
include 'finished-projects.php';
?>