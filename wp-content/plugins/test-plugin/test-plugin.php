<?php
/**
 * Plugin Name: Мой тестовый плагин
 * Description: Мой тестовый плагин
 * Plugin URI:  https://wp-tes.000webhostapp.com/
 * Author URI:  https://wp-tes.000webhostapp.com/
 * Author:      Максим
 * Version:     Версия 1.0
 */

add_action( 'the_content', 'my_the_content_filter');

function my_the_content_filter($content){

	if( is_singular('films') ){

	$meta_cost = 'Стоимость сеанса: '. get_post_meta(get_the_ID('films'), 'cost-seans', true);
	$meta_date = 'Дата выхода: '. get_post_meta(get_the_ID('films'), 'date', true);
	$meta_genre = get_the_term_list( $post->ID, 'films_genre', 'Жанры: ', ', ', '' );
	$meta_country = get_the_term_list( $post->ID, 'films_сountries', 'Страна: ', ', ', '' );
	$meta = 
		"<div class='col-md-12'>
			<label class='meta col-md-4 label label-success'><span class='glyphicon glyphicon-euro'></span>  $meta_cost</label>
			<label class='meta col-md-4 col-md-offset-4 label label-success'><span class='glyphicon glyphicon-film'></span>  $meta_date</label>
			<div class='meta_center col-md-4'><span class='glyphicon glyphicon-list-alt	'></span>  $meta_genre</div>
			<div class='meta_center col-md-4 col-md-offset-4'><span class='glyphicon glyphicon-globe'></span>  $meta_country</div>
		</div>";
	return $content . $meta;
    } else {
        return $content;
    }
}




