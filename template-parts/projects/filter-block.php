<?php 

/*
	Фильтр проектов
*/

 ?>

<div class="filter-block">
    <div class="filter-btn">
        <button id="filterBtn" class="button button--filter">Выбрать категорию</button>
    </div>

    <ul class="filter-block__list">
        <li class="filter-block__element">
            <span class="filter-block__btn filter-block__btn--active filter" data-filter="all">Все проекты</span>
        </li>
        <li class="filter-block__element">
            <span class="filter-block__btn filter" data-filter=".one-floor">Один этаж</span>
        </li>
        <li class="filter-block__element">
            <span class="filter-block__btn filter" data-filter=".two-floors">Два этажа</span>
        </li>
        <li class="filter-block__element">
            <span class="filter-block__btn filter" data-filter=".three-floors">Три этажа</span>
        </li>
        <li class="filter-block__element">
            <span class="filter-block__btn filter" data-filter=".two-families">На 2 семьи</span>
        </li>
        <li class="filter-block__element">
            <span class="filter-block__btn filter" data-filter=".flat-roof">Плоская крыша</span>
        </li>
        <li class="filter-block__element">
            <span class="filter-block__btn filter" data-filter=".attic">С мансардой</span>
        </li>
        <li class="filter-block__element">
            <span class="filter-block__btn filter" data-filter=".garage">С гаражом</span>
        </li>
        <li class="filter-block__element">
            <span class="filter-block__btn filter" data-filter=".small-houses">Маленькие дома</span>
        </li>
        <li class="filter-block__element">
            <span class="filter-block__btn filter" data-filter=".narrow-land">Для узких участков</span>
        </li>
        <li class="filter-block__element">
            <span class="filter-block__btn filter" data-filter=".aerated-concrete">Из газобетона</span>
        </li>
        <li class="filter-block__element">
            <span class="filter-block__btn filter" data-filter=".coquina">Из ракушечника</span>
        </li>
        <li class="filter-block__element">
            <span class="filter-block__btn filter" data-filter=".popular">Популярные</span>
        </li>
    </ul>
</div>
