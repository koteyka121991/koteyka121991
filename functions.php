<?php

add_action( 'wp_enqueue_scripts', 'theme_add_scripts' );
function theme_add_scripts() {
	wp_enqueue_style( 'style-name', get_stylesheet_uri() );

    wp_enqueue_script( 'script-name', get_template_directory_uri() .'/assets/js/main.js', array(), '1.0', true );
}

add_action( 'after_setup_theme', 'theme_register_nav_menu' );
function theme_register_nav_menu() {
	register_nav_menu( 'menu_main_header', 'Меню в шапке' );
  add_theme_support( 'post-thumbnails');
}

add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields() {
  require_once( 'includes/carbon-fields-options/theme-options.php' );
  require_once( 'includes/carbon-fields-options/term-meta.php' );
  require_once( 'includes/carbon-fields-options/post-meta.php' );
}

add_action( 'init', 'register_post_types' );
function register_post_types(){
	register_post_type( 'tehnika', [
		'label'  => null,
		'labels' => [
			'name'               => 'Техника', // основное название для типа записи
			'singular_name'      => 'Техника', // название для одной записи этого типа
			'add_new'            => 'Добавить ', // для добавления новой записи
			'add_new_item'       => 'Добавление ', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование ', // для редактирования типа записи
			'new_item'           => 'Новое ', // текст новой записи
			'view_item'          => 'Смотреть ', // для просмотра записи этого типа.
			'search_items'       => 'Искать ', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Техника', // название меню
		],
		
		'public'              => true,	
		'show_in_nav_menus'   => true, // зависит от public
		'show_in_menu'        => true, // показывать ли в меню адмнки
		'show_in_admin_bar'   => true, // зависит от show_in_menu
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-cart',	
		'hierarchical'        => false,
		'supports'            => [ 'title', 'editor','thumbnail','excerpt' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
		'taxonomies'          => [],
		'has_archive'         => true,
		'rewrite'             => ['slug' => 'tehnika'],
		'query_var'           => true,
	] );
	// список параметров: wp-kama.ru/function/get_taxonomy_labels
	register_taxonomy( 'tehnika-category', [ 'tehnika' ], [
		'label'                 => '', // определяется параметром $labels->name
		'labels'                => [
			'name'              => 'Genres',
			'singular_name'     => 'Genre',
			'search_items'      => 'Search Genres',
			'all_items'         => 'All Genres',
			'view_item '        => 'View Genre',
			'parent_item'       => 'Parent Genre',
			'parent_item_colon' => 'Parent Genre:',
			'edit_item'         => 'Edit Genre',
			'update_item'       => 'Update Genre',
			'add_new_item'      => 'Add New Genre',
			'new_item_name'     => 'New Genre Name',
			'menu_name'         => 'Категории',
			'back_to_items'     => '← Back to Genre',
		],
		'description'           => '', // описание таксономии
		'public'                => true,
		// 'publicly_queryable'    => null, // равен аргументу public
		// 'show_in_nav_menus'     => true, // равен аргументу public
		// 'show_ui'               => true, // равен аргументу public
		// 'show_in_menu'          => true, // равен аргументу show_ui
		// 'show_tagcloud'         => true, // равен аргументу show_ui
		// 'show_in_quick_edit'    => null, // равен аргументу show_ui
		'hierarchical'          => true,

		'rewrite'               =>  ['slug' => 'tehnika'],
		//'query_var'             => $taxonomy, // название параметра запроса
		'capabilities'          => array(),
		'meta_box_cb'           => null, // html метабокса. callback: `post_categories_meta_box` или `post_tags_meta_box`. false — метабокс отключен.
		'show_admin_column'     => false, // авто-создание колонки таксы в таблице ассоциированного типа записи. (с версии 3.5)
		'show_in_rest'          => null, // добавить в REST API
		'rest_base'             => null, // $taxonomy
		// '_builtin'              => false,
		//'update_count_callback' => '_update_post_term_count',
	] );
}


