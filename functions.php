<?php 
add_action( 'wp_enqueue_scripts' , function(){;
    // Пишите  после wp_enqueue_style в  ('MyStyle', ) всё что угодно это название для понимания  так же со скриптами
    wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css' ); //Подключает стили css файлы 
    wp_enqueue_style( 'fonts-gstatic', 'https://fonts.gstatic.com'); // Подключаем шрифты с сайта Google fonts
    wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Pacifico&display=swap','https://fonts.googleapis.com/css2?family=Bad+Script&display=swap'); //  подключение конкретных шрифтов


	
	wp_deregister_script('jquery'); // находим и подключаем встроеную библеотеку Jqery в Wordpress
	wp_register_script('jquery','https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'); //Подключаем  к сайту нашу ссылку  к библеотеке Jqery
	wp_enqueue_script('jquery');

	wp_enqueue_script( 'script', get_template_directory_uri() .'/assets/js/script.min.js', array('jquery'), 'null', true ); // Подключаем скрипты  к нашему сайту
});

add_action('after_setup_theme','myMenu'); //вызывает создаёт меню в пункте Страницы в админ панели которое можно редактировать для заказщика 

function myMenu() { //Регестрируем меню в админке
	register_nav_menu( 'Menu', 'Меню' );
}

add_theme_support('post-thumbnails');// посты подержка изображений добавление изображений в записи (post)
add_theme_support('title-tag'); // Позволяет добавить Заголовок через настройки страницы , админ панели 
add_theme_support('custom-logo');// Позволяет добавить логотип через настройки страницы , админ панели 


// Ниже код позволяет добавть SVG в список разрешенных для загрузки файлов.
add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
add_filter( 'wp_check_filetype_and_ext', 'fix_svg_mime_type', 10, 5 );

# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) ){
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	}
	else {
		$dosvg = ( '.svg' === strtolower( substr( $filename, -4 ) ) );
	}

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext']  = false;
			$data['type'] = false;
		}

	}

	return $data;
}
?>

