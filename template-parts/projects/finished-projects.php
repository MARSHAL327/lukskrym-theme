<?php

/*
	Проекты
*/

?>

<div class="row">

    <?php
    $posts = get_posts([
        'numberposts' => -1,
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
    ]);

    foreach ($posts as $post) {
        setup_postdata($post);
        $characteristicsTitleKeys = getCharacteristicsTitleKeys(get_field("characteristics"));
        $floorCount = getFloorCount([1, 2, 3]);

        $props = [
//            [
//                "value" => get_field("project_area"),
//                "text" => get_field("project_area"),
//                "icon" => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 682.66669 682.66669" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><defs id="defs5218"><clipPath clipPathUnits="userSpaceOnUse" id="clipPath5228"><path d="M 0,512 H 512 V 0 H 0 Z" id="path5226" fill="#000000" data-original="#000000"></path></clipPath><clipPath clipPathUnits="userSpaceOnUse" id="clipPath5248"><path d="M 0,512 H 512 V 0 H 0 Z" id="path5246" fill="#000000" data-original="#000000"></path></clipPath></defs><g id="g5220" transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)"><g id="g5222"><g id="g5224" clip-path="url(#clipPath5228)"><g id="g5230" transform="translate(215.9155,143.7744)"><path d="m 0,0 h -208.416 v 336.677 h 32.062 l 48.1,24.049" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5232" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g></g></g><g id="g5234" transform="translate(368.2256,448.3872)"><path d="M 0,0 V 32.064 H -264.532" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5236" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5238" transform="translate(368.2256,296.0845)"><path d="M 0,0 V 120.236" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5240" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5242"><g id="g5244" clip-path="url(#clipPath5248)"><g id="g5250" transform="translate(488.4717,197.8921)"><path d="m 0,0 c 10.213,-18.408 16.028,-39.592 16.028,-62.134 0,-70.835 -57.423,-128.258 -128.258,-128.258 -70.835,0 -128.258,57.423 -128.258,128.258 0,70.835 57.423,128.258 128.258,128.258 36.669,0 69.744,-15.388 93.12,-40.059" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5252" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5254" transform="translate(135.7583,272.0322)"><path d="M 0,0 V -128.258" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5256" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5258" transform="translate(135.7583,480.4517)"><path d="m 0,0 v -152.306 l 32.064,-40.081" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5260" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5262" transform="translate(288.0645,360.2095)"><path d="M 0,0 H 80.161" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5264" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5266" transform="translate(143.7744,360.2095)"><path d="m 0,0 h 88.175 l 40.083,32.065" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5268" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5270" transform="translate(312.1128,159.8066)"><path d="M 0,0 V -72.146" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5272" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5274" transform="translate(352.1934,87.6611)"><path d="m 0,0 v 52.105 c 0,11.068 -8.972,20.041 -20.04,20.041 -11.068,0 -20.041,-8.973 -20.041,-20.041 V 0" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5276" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5278" transform="translate(392.2744,87.6611)"><path d="m 0,0 v 52.105 c 0,11.068 -8.973,20.041 -20.041,20.041 -11.067,0 -20.04,-8.973 -20.04,-20.041 V 0" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5280" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5282" transform="translate(416.3228,175.8389)"><path d="m 0,0 v 0.88 c 0,8.368 6.784,15.152 15.152,15.152 12.158,0 18.246,-14.699 9.649,-23.295 L 0,-32.064 h 32.064" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5284" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5286" transform="translate(15.5161,95.6772)"><path d="M 0,0 H 200.403" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5288" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5290" transform="translate(31.5483,111.7095)"><path d="M 0,0 -24.048,-16.032 0,-32.064" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5292" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5294" transform="translate(416.3228,472.4355)"><path d="M 0,0 V -184.371" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5296" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g5298" transform="translate(432.355,456.4033)"><path d="M 0,0 -16.032,24.048 -32.064,0" style="stroke-width:15;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path5300" fill="none" stroke="#000000" stroke-width="15" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g></g></g></g></g></svg>',
//            ],
            [
                "value" => $characteristicsTitleKeys["Габариты дома"],
                "text" => $characteristicsTitleKeys["Габариты дома"],
                "icon" => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 96 96" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g id="Layer_4"><g><path d="m27.889 41.588h5.122v15.673c0 2.952 2.402 5.356 5.356 5.356h34.41c2.952 0 5.356-2.403 5.356-5.356v-15.673h6.925c.957 0 1.802-.605 2.205-1.581.437-1.056.243-2.252-.479-2.972l-27.7-27.904c-1.465-1.463-3.805-1.511-5.225-.096l-27.69 28.043c-.722.721-.918 1.9-.49 2.936.402.971 1.248 1.574 2.21 1.574zm32.38 17.962h-7.915v-12.68c0-.365.297-.663.663-.663h6.59c.365 0 .663.297.663.663v12.68zm14.799-2.289c0 1.262-1.027 2.29-2.29 2.29h-9.443v-12.681c0-2.056-1.673-3.729-3.729-3.729h-6.59c-2.056 0-3.729 1.673-3.729 3.729v12.68h-10.92c-1.263 0-2.29-1.028-2.29-2.29v-16.742l20.39-20.404 18.971 18.972c-.222.266-.371.595-.371.968v17.207zm-19.034-46.062c.234-.236.645-.136.877.096l27.03 27.227h-4.73l-20.575-20.576c-1.192-1.194-3.131-1.194-4.323 0l-20.575 20.576h-4.684z" fill="#000000" data-original="#000000"></path><path d="m10.515 53.368c-.599-.599-1.569-.599-2.168 0s-.599 1.569 0 2.168l5.585 5.584c.676.677 1.574 1.048 2.53 1.048.955 0 1.854-.371 2.529-1.048l5.585-5.584c.599-.599.599-1.569 0-2.168s-1.569-.599-2.168 0l-4.414 4.412v-44.874l4.413 4.414c.299.299.693.449 1.085.449s.785-.15 1.084-.449c.599-.599.599-1.569 0-2.168l-5.585-5.586c-.348-.349-.774-.581-1.212-.773-.775-.338-2.125-.16-2.636 0-.452.141-.863.424-1.212.773l-5.585 5.586c-.599.599-.599 1.569 0 2.168s1.569.599 2.168 0l4.413-4.414v44.874z" fill="#000000" data-original="#000000"></path><path d="m31.781 87.548c.299.299.692.449 1.084.449.393 0 .786-.15 1.084-.449.599-.599.599-1.569.001-2.168l-4.413-4.414h54.247l-4.413 4.414c-.599.599-.599 1.569 0 2.168.299.299.692.449 1.084.449s.785-.15 1.084-.449l5.584-5.584c.356-.355.5-.686.799-1.231.253-.46.226-2.127-.001-2.602-.251-.525-.442-.872-.798-1.228l-5.583-5.583c-.599-.599-1.569-.599-2.168 0s-.599 1.569 0 2.168l4.413 4.412h-54.248l4.412-4.412c.599-.599.599-1.569.001-2.168-.599-.599-1.57-.599-2.169 0l-5.585 5.584c-.676.677-1.047 1.575-1.047 2.529 0 .956.372 1.857 1.047 2.529z" fill="#000000" data-original="#000000"></path></g></g></g></svg>',
            ],
            [
                "value" => $floorCount,
                "text" => number($floorCount, ["этаж", "этажа", "этажей"]),
                "icon" => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 510 510" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><g><path d="m510 52.5v-30h-154.268l-315 195h-40.732v30h30v150h-30v90h510v-270h-30v-165zm-195 165v60h-45v-166.644l75-46.429v153.073zm-105 60v60h-45v-161.644l75-46.429v148.073zm-150-36.644 75-46.429v143.073h-30v60h-45zm420 216.644h-450v-30h105v-60h105v-60h105v-60h135zm-30-240h-75v-165h75z" fill="#000000" data-original="#000000" class=""></path></g></g></svg>',
            ],
            [
                "value" => get_field("project_bathroom"),
                "text" => get_field("project_bathroom") . " сануз.",
                "icon" => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M500 256H80V112c0-17.645 14.355-32 32-32 11.351 0 21.332 5.945 27.015 14.88-16.492 25.207-14.687 59.576 6.838 83.035-4.176 4.713-4.021 11.916.491 16.428l11.314 11.314c4.686 4.686 12.284 4.686 16.971 0l95.03-95.029c4.686-4.686 4.686-12.284 0-16.971l-11.314-11.314c-4.512-4.512-11.715-4.666-16.428-.491-17.949-16.469-42.294-21.429-64.178-15.365C163.281 45.667 139.212 32 112 32c-44.112 0-80 35.888-80 80v144H12c-6.627 0-12 5.373-12 12v24c0 6.627 5.373 12 12 12h20v48c0 32.119 15.777 60.55 40 77.977V468c0 6.627 5.373 12 12 12h24c6.627 0 12-5.373 12-12v-20.334c2.638.218 5.305.334 8 .334h256c2.695 0 5.362-.117 8-.334V468c0 6.627 5.373 12 12 12h24c6.627 0 12-5.373 12-12v-38.023c24.223-17.427 40-45.858 40-77.977v-48h20c6.627 0 12-5.373 12-12v-24c0-6.627-5.373-12-12-12zM176.202 112.201c10.396-10.397 26.553-10.726 37.338-2.025l-39.363 39.363c-8.725-10.813-8.348-26.966 2.025-37.338zM432 352c0 26.467-21.533 48-48 48H128c-26.467 0-48-21.533-48-48v-48h352v48z"></path></svg>',
            ],
            [
                "value" => get_field("project_bedrooms"),
                "text" => get_field("project_bedrooms") . " спал.",
                "icon" => '<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="bed-alt" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="svg-inline--fa fa-bed-alt fa-w-16 fa-3x"><path d="M80,160a32,32,0,0,1,32-32h96a32,32,0,0,1,32,32v32h32V160a32,32,0,0,1,32-32h96a32,32,0,0,1,32,32v32h48V64a32,32,0,0,0-32-32H64A32,32,0,0,0,32,64V192H80Zm368,64H64A64,64,0,0,0,0,288V464a16,16,0,0,0,16,16H32a16,16,0,0,0,16-16V416H464v48a16,16,0,0,0,16,16h16a16,16,0,0,0,16-16V288A64,64,0,0,0,448,224Zm16,144H48V288a16,16,0,0,1,16-16H448a16,16,0,0,1,16,16Z" class=""></path></svg>',
            ],
//            [
//                "value" => get_field("project_rooms"),
//                "text" => get_field("project_rooms") . " помещ.",
//                "icon" => '<svg xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" width="512" height="512" x="0" y="0" viewBox="0 0 682.66669 682.66669" style="enable-background:new 0 0 512 512" xml:space="preserve" class=""><g><defs id="defs214"><clipPath clipPathUnits="userSpaceOnUse" id="clipPath224"><path d="M 0,512 H 512 V 0 H 0 Z" id="path222" fill="#000000" data-original="#000000"></path></clipPath><clipPath clipPathUnits="userSpaceOnUse" id="clipPath244"><path d="M 0,512 H 512 V 0 H 0 Z" id="path242" fill="#000000" data-original="#000000"></path></clipPath></defs><g id="g216" transform="matrix(1.3333333,0,0,-1.3333333,0,682.66667)"><g id="g218"><g id="g220" clip-path="url(#clipPath224)"><g id="g226" transform="translate(374.999,15)"><path d="m 0,0 h -359.999 v 482 h 482 V 0 H 76" style="stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path228" fill="none" stroke="#000000" stroke-width="30" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g230" transform="translate(298.8437,491.5786)"><path d="M 0,0 V -196.154" style="stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path232" fill="none" stroke="#000000" stroke-width="30" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g></g></g><g id="g234" transform="translate(414.835,295.4243)"><path d="M 0,0 H -264.024" style="stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path236" fill="none" stroke="#000000" stroke-width="30" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g238"><g id="g240" clip-path="url(#clipPath244)"><g id="g246" transform="translate(15,295.4243)"><path d="M 0,0 H 59.188" style="stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path248" fill="none" stroke="#000000" stroke-width="30" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g250" transform="translate(15,208.8003)"><path d="M 0,0 H 59.188" style="stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path252" fill="none" stroke="#000000" stroke-width="30" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g254" transform="translate(210.8145,14.4209)"><path d="M 0,0 V 194.379" style="stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path256" fill="none" stroke="#000000" stroke-width="30" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g><g id="g258" transform="translate(330.4424,91)"><path d="M 0,0 V 117.8 H 166.558" style="stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path260" fill="none" stroke="#000000" stroke-width="30" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g></g></g><g id="g262" transform="translate(150.811,208.8003)"><path d="M 0,0 H 99.189" style="stroke-width:30;stroke-linecap:butt;stroke-linejoin:miter;stroke-miterlimit:10;stroke-dasharray:none;stroke-opacity:1" id="path264" fill="none" stroke="#000000" stroke-width="30" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="none" stroke-opacity="" data-original="#000000" class=""></path></g></g></g></svg>',
//            ],
        ];

        ?>

        <div class="col-sm-6 col-xl-4 mix <?php $project_categories = get_field('project_categories');
        foreach ($project_categories as $project_category): echo $project_category['value'];
            echo ' '; endforeach; ?>">
            <div class="project-card">
                <a href="<?php the_permalink($post); ?>" class="project-card-inner">
                    <img class="lazy"
                         src="data:image/gif;base64,R0lGODlhSAAFAIAAAP///wAAACH5BAEAAAEALAAAAABIAAUAAAIRjI+py+0Po5y02ouz3rz7VgAAOw=="
                         data-src="<?php the_post_thumbnail_url('project-card-thumb'); ?>"
                         alt="Проект дома <?php the_title(); ?>">
                    <div class="project-card__title">
                        <h3 class="project-title"><?php the_title(); ?></h3>
                        <div class="project-area">
                                <span class="project-area__icon">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 448 512">
                                        <path d="M447.9 332l.1 136c0 6.6-5.4 12-12 12l-136-.1c-6.6 0-12-5.4-12-12v-27.8c0-6.7 5.5-12.1 12.2-12l61.4 2.3 1.4-1.4-139-139L85 429l1.4 1.4 61.4-2.3c6.7-.1 12.2 5.3 12.2 12v27.8c0 6.6-5.4 12-12 12L12 480c-6.6 0-12-5.4-12-12l.1-136c0-6.6 5.4-12 12-12h27.8c6.7 0 12.1 5.5 12 12.2l-2.3 61.4L51 395l139-139L51 117l-1.4 1.4 2.3 61.4c.1 6.7-5.3 12.2-12 12.2H12.1c-6.6 0-12-5.4-12-12L0 44c0-6.6 5.4-12 12-12l136 .1c6.6 0 12 5.4 12 12v27.8c0 6.7-5.5 12.1-12.2 12l-61.4-2.3L85 83l139 139L363 83l-1.4-1.4-61.4 2.3c-6.7.1-12.2-5.3-12.2-12V44.1c0-6.6 5.4-12 12-12l136-.1c6.6 0 12 5.4 12 12l-.1 136c0 6.6-5.4 12-12 12h-27.8c-6.7 0-12.1-5.5-12-12.2l2.3-61.4-1.4-1.4-139 139 139 139 1.4-1.4-2.3-61.4c-.1-6.7 5.3-12.2 12-12.2h27.8c6.6 0 12 5.4 12 12z"/>
                                    </svg>
                                </span>
                            <span class="project-area__title"><?php the_field('project_area_rooms'); ?></span>
                        </div>
                    </div>
                    <div class="project-card__description">
                        <?php if (get_field('project_bedrooms')) { ?>
                            <span class="title">Спален: <?php the_field('project_bedrooms'); ?></span>
                        <?php } ?>
                        <?php if (get_field('project_rooms')) { ?>
                            <span class="title">Помещений: <?php the_field('project_rooms'); ?></span>
                        <?php } ?>
                        <p><?php the_field('project_exerpt'); ?></p>
                        <span class="more">Посмотреть проект</span>
                    </div>
                </a>
                <?php if (get_field("project_price")): ?>
                    <div class="project-card__price">
                        <?= number_format(get_field("project_price"), 0, '', ' '); ?> ₽
                    </div>
                <?php endif; ?>
                <div class="project-card__props">
                    <?php foreach ($props as $prop): ?>
                        <?php if ($prop["value"]): ?>
                            <div class="project-card__prop">
                                <div class="project-card__props-icon">
                                    <?= $prop["icon"] ?>
                                </div>
                                <div class="project-card__props-value">
                                    <?= $prop["text"] ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <?php wp_reset_postdata();
    } ?>

</div>