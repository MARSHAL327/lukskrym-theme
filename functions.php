<?php
/**
 * lukskrym functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package lukskrym
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.2.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function lukskrym_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on lukskrym, use a find and replace
		* to change 'lukskrym' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'lukskrym', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	add_image_size( 'post-image-thumb', 576, 360, true );
	add_image_size( 'portfolio-item-image-thumb', 480, 480, true );
	add_image_size( 'portfolio-news-item-thumb', 200, 200, true );
	add_image_size( 'portfolio-items-item-image-thumb', 480, 412, true );
	add_image_size( 'project-card-thumb', 576, 411, true );
	add_image_size( 'post-image-large', 1200, 650, true );
	add_image_size( 'offers-item-thumb', 780, 460, true );
	add_image_size( 'additional-services-item-img', 720, 405, true );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'main-menu' => esc_html__( 'Primary', 'lukskrym' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'lukskrym_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 72,
			'width'       => 92,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'lukskrym_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lukskrym_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'lukskrym_content_width', 640 );
}
add_action( 'after_setup_theme', 'lukskrym_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lukskrym_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'lukskrym' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'lukskrym' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'lukskrym_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function lukskrym_scripts() {
	
	wp_register_style( 'lukskrym-style', get_stylesheet_directory_uri() . '/assets/css/theme.min.css', array('tablepress-default', 'contact-form-7'), '1.9', 'all');

	wp_enqueue_style( 'lukskrym-style' );

	wp_enqueue_script( 'lukskrym-script', get_stylesheet_directory_uri() . '/assets/js/theme.min.js', array('jquery'), _S_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'lukskrym_scripts' );

register_sidebar(array(
	'name' => 'Footer Widget 1',
	'id' => 'footer-1',
	'description' => 'Меню в подвале 1',
	'before_widget' => '<div class="footer-menu">',
	'after_widget' => '</div>',
	'before_title' => '<h4>',
	'after_title' => '</h4>',
	));
register_sidebar(array(
'name' => 'Footer Widget 2',
'id' => 'footer-2',
'description' => 'Меню в подвале 2',
'before_widget' => '<div class="footer-menu">',
'after_widget' => '</div>',
'before_title' => '<h4>',
'after_title' => '</h4>',
));

/**
 * Breadcrumbs
 */
function true_breadcrumbs() {
 
	// получаем номер текущей страницы
	$page_num = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
 
	$separator = ' <span>/</span> ';
 
	// если главная страница сайта
	if ( is_front_page() ) {
 
 
	} else { // не главная
 
		echo '<a href="' . site_url() . '">Главная</a>' . $separator;
 
		if ( is_single() ) { // записи

			$post_categories = get_the_category();

			if ( ! empty( $post_categories[0]->cat_ID ) ) {
				$url_bread = get_category_parents( $post_categories[0]->cat_ID, true, $separator );
				$stripos = stripos($url_bread,'https://lukskrym.ru/category/portfolio/');
				$stripos1 = stripos($url_bread,'https://lukskrym.ru/category/real-estate/');
				$stripos2 = stripos($url_bread,'https://lukskrym.ru/category/projects/');
				if($stripos!==false){
					echo '<a href="/portfolio/">Портфолио</a>' . $separator;
				}
				elseif($stripos1!==false){
						echo '<a href="/offers/">Недвижимость</a>' . $separator;
				}
				elseif($stripos2!==false){
						echo '<a href="/projects/">Проекты</a>' . $separator;
				}
				else{
					echo get_category_parents( $post_categories[0]->cat_ID, true, $separator );}//крошки тут
				
				echo the_title();
			}
 
		} elseif ( is_page() ){ // страницы WordPress
 
			global $post;
			// если у текущей страницы существует родительская
			if ( $post->post_parent ) {
			 
				$parent_id  = $post->post_parent; // присвоим в переменную
				$breadcrumbs = array(); 
			 
				while ( $parent_id ) {
					$page = get_page( $parent_id );
					$breadcrumbs[] = '<a href="' . get_permalink( $page->ID ) . '">' . get_the_title( $page->ID ) . '</a>';
					$parent_id = $page->post_parent;
				}
			 
				echo join( $separator, array_reverse( $breadcrumbs ) ) . $separator;
				the_title();
			 
			} else {
				the_title();
			}
 
		} elseif ( is_category() ) {
 			
 			$current_cat = get_queried_object();
			// если родительская рубрика существует
			if ( $current_cat->parent ) {
				echo get_category_parents( $current_cat->parent, true, $separator ); echo single_cat_title();
			} else {
				single_cat_title();
			}
 
		} elseif ( is_tag() ) {
 
			single_tag_title();
 
		} elseif ( is_day() ) { // архивы (по дням)
 
			echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
			echo '<a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a>' . $separator;
			echo get_the_time('d');
 
		} elseif ( is_month() ) { // архивы (по месяцам)
 
			echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
			echo get_the_time('F');
 
		} elseif ( is_year() ) { // архивы (по годам)
 
			echo get_the_time( 'Y' );
 
		} elseif ( is_author() ) { // архивы по авторам
 
			global $author;
			$userdata = get_userdata( $author );
			echo 'Опубликовал(а) ' . $userdata->display_name;
 
		} elseif ( is_404() ) { // если страницы не существует
 
			echo 'Ошибка 404';
 
		}
	}
}

// Изменение длины обрезаемого текста при выводе постов
add_filter( 'excerpt_length', function(){
	return 30;
} );

// Удаление конструкции [...] на конце описания поста
add_filter('excerpt_more', function($more) {
	return '';
});

## Удаляет "Рубрика: ", "Метка: " и т.д. из заголовка архива
add_filter( 'get_the_archive_title', function( $title ){
	return preg_replace('~^[^:]+: ~', '', $title );
});

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

remove_action( 'wp_head', 'feed_links', 2 ); // Удаляет ссылки RSS-лент записи и комментариев
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Удаляет ссылки RSS-лент категорий и архивов
remove_action( 'wp_head', 'rsd_link' ); // Удаляет RSD ссылку для удаленной публикации
remove_action( 'wp_head', 'wlwmanifest_link' ); // Удаляет ссылку Windows для Live Writer
remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0); // Удаляет короткую ссылку
remove_action( 'wp_head', 'wp_generator' ); // Удаляет информацию о версии WordPress
remove_action('wp_head', 'print_emoji_detection_script', 7); // Удаляет Emoji
remove_action('wp_print_styles', 'print_emoji_styles'); // Удаляет Emoji


function wpcf7_load_js_not_safari11() { 
	global $is_safari; 
	if($is_safari) { 
		return false; 
	} else { 
		return true; 
	} 
}
add_filter( 'wpcf7_load_js', 'wpcf7_load_js_not_safari11' );



// цели метрики кроме "скачать каталог" на главной 22 06 2022
add_action( 'wp_head', 'custom_code_head' );
function custom_code_head() {
?>

<script type="text/javascript">
document.addEventListener( 'wpcf7mailsent', function( event ) {
    if ( '573' == event.detail.contactFormId ) {
        ym(56495935, 'reachGoal', 'click'); return true;
    }
    if ( '169' == event.detail.contactFormId ) {
        ym(56495935, 'reachGoal', 'click'); return true;
    }
 if ( '4904' == event.detail.contactFormId ) {
        ym(56495935, 'reachGoal', 'click'); return true;
    }
 if ( '75' == event.detail.contactFormId ) {
        ym(56495935, 'reachGoal', 'click'); return true;
    }
 if ( '4213' == event.detail.contactFormId ) {
        ym(56495935, 'reachGoal', 'click'); return true;
    }
 if ( '171' == event.detail.contactFormId ) {
        ym(56495935, 'reachGoal', 'click'); return true;
    }
 if ( '499' == event.detail.contactFormId ) {
        ym(56495935, 'reachGoal', 'click'); return true;
    }
 if ( '90' == event.detail.contactFormId ) {
        ym(56495935, 'reachGoal', 'click'); return true;
    }
 if ( '5003' == event.detail.contactFormId ) {
        ym(56495935, 'reachGoal', 'click'); return true;
    }
 if ( '500' == event.detail.contactFormId ) {
        ym(56495935, 'reachGoal', 'click'); return true;
    }
 if ( '5' == event.detail.contactFormId ) {
        ym(56495935, 'reachGoal', 'click'); return true;
    }
});
</script>
<?php
}

add_filter( 'wpseo_canonical', 'yoast_seo_canonical_slash_remove' );

function yoast_seo_canonical_slash_remove( $canonical_url ) {
    return untrailingslashit( $canonical_url );
}

function getCharacteristicsTitleKeys($characteristics){
    $resultArray = [];

    foreach ($characteristics as $characteristic) {
        $resultArray[$characteristic["characteristics_title"]] = $characteristic["characteristics_value"];
    }

    return $resultArray;
}

function getFloorCount($floorNumbers){
    $floorCount = 0;

    foreach ($floorNumbers as $floorNumber) {
        if( get_field("floor_" . $floorNumber) )
            $floorCount++;
    }

    return $floorCount;
}

function number($value, $words, $show = true) {
    $num = $value % 100;
    if ($num > 19) {
        $num = $num % 10;
    }

    $out = ($show) ?  $value . ' ' : '';
    switch ($num) {
        case 1:  $out .= $words[0]; break;
        case 2:
        case 3:
        case 4:  $out .= $words[1]; break;
        default: $out .= $words[2]; break;
    }

    return $out;
}

function add_menu_link_class( $atts, $item, $args ) {
    if (property_exists($args, 'link_class')) {
        $atts['class'] = $args->link_class;
    }
    return $atts;
}

add_filter('nav_menu_link_attributes', 'add_menu_link_class', 1, 3);

function add_menu_list_item_class($classes, $item, $args)
{
    if (property_exists($args, 'list_item_class')) {
        $classes[] = $args->list_item_class;
    }
    return $classes;
}

add_filter('nav_menu_css_class', 'add_menu_list_item_class', 1, 3);

$bankLogos = [
    [
        "color" => "/assets/images/BR_logo_white_letter.png",
        "white" => "/assets/images/BR_logo_white.png",
    ],
    [
        "color" => "/assets/images/LOGO_HOME_white_letter.png",
        "white" => "/assets/images/LOGO_HOME_white.png",
    ],
    [
        "color" => "/assets/images/SBER_LOGO_white_letter.png",
        "white" => "/assets/images/SBER_LOGO_white.png",
    ],
    [
        "color" => "/assets/images/RNCB_white_letter.png",
        "white" => "/assets/images/RNCB_white.png",
    ],
];