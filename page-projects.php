<?php

/*
Template Name: Готовые проекты
*/


?>

<?php get_header(); ?>

    <div class="page-content-wrapper">

        <div class="ajax-load">
            <div class="ajax-load__loading">
                <span class="loader"></span>
            </div>
            <div id="ajax-load__filter-and-projects">
                <div class="container">
                    <?php
                    include 'template-parts/projects/filter-and-projects.php';
                    include 'template-parts/projects/project-advantages.php';
                    include 'template-parts/mortgage_block.php';
                    ?>
                </div>
                <?php include 'template-parts/home/order-consultation.php'; ?>
                <div class="container">
                    <?php include 'template-parts/projects/project-building.php'; ?>
                </div>
            </div>
        </div>


        <?php
        include 'template-parts/projects/order-calculation.php';
        include 'template-parts/projects/video.php';
        include 'template-parts/home/news.php';

        ?>

    </div>

<?php get_footer(); ?>