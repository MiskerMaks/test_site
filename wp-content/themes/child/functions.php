<?php

// register post type
add_action( 'init', 'films_init' );
function films_init(){
	register_post_type('films', array(
		'label'  => null,
		'labels' => array(
			'name'               => 'Фильмы', // основное название для типа записи
			'singular_name'      => 'Фильмы', // название для одной записи этого типа
			'add_new'            => 'Добавить фильм', // для добавления новой записи
			'add_new_item'       => 'Добавление фильма', // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => 'Редактирование записи', // для редактирования типа записи
			'new_item'           => 'Новое ____', // текст новой записи
			'view_item'          => 'Смотреть ____', // для просмотра записи этого типа.
			'search_items'       => 'Искать ____', // для поиска по этим типам записи
			'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
			'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
			'parent_item_colon'  => '', // для родителей (у древовидных типов)
			'menu_name'          => 'Фильмы', // название меню
		),
		'description'         => '',
		'public'              => true,
		'publicly_queryable'  => null, // зависит от public
		'exclude_from_search' => null, // зависит от public
		'show_ui'             => null, // зависит от public
		'show_in_menu'        => null, // показывать ли в меню адмнки
		'show_in_admin_bar'   => null, // по умолчанию значение show_in_menu
		'show_in_nav_menus'   => null, // зависит от public
		'show_in_rest'        => null, // добавить в REST API. C WP 4.7
		'rest_base'           => null, // $post_type. C WP 4.7
		'menu_position'       => 5,
		'menu_icon'           => null, 
		//'capability_type'   => 'post',
		//'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
		//'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
		'hierarchical'        => false,
		'supports'            => array('title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'),
		'taxonomies'          => array(),
		'has_archive'         => false,
		'rewrite'             => true,
		'query_var'           => true,

	
	) );
	// create a new taxonomy
	register_taxonomy(
		'films_genre',
		'films',
		array(
			'label' => __( 'Жанры' ),
			'rewrite' => array( 'slug' => 'genre' ),
		)
	);
	register_taxonomy(
		'films_сountries',
		'films',
		array(
			'label' => __( 'Страны' ),
			'rewrite' => array( 'slug' => 'country' ),
		)
	);
	register_taxonomy(
		'films_years',
		'films',
		array(
			'label' => __( 'Год' ),
			'rewrite' => array( 'slug' => 'year' ),
		)
	);
	register_taxonomy(
		'films_actors',
		'films',
		array(
			'label' => __( 'Актеры' ),
			'rewrite' => array( 'slug' => 'actors' ),
		)
	);
}



add_shortcode( 'last_posts', 'lasts');
function lasts($atts){
	$atts = shortcode_atts( array(
		'count' => 5
		), $atts );

	$args = array(
		'post_type' => 'films',
		'post_per_page' => $atts['count']
		);
	$out_posts = get_posts( $args );
	$out = '<ul>';
	foreach ($out_posts as $post) {
		setup_postdata( $post );
		$out .= '<li><a href="'. get_the_permalink($post->ID) .'">'. get_the_title($post->ID) .'</a></li>';
	}
	$out .= '</ul>';
	wp_reset_postdata();

	return $out;
}