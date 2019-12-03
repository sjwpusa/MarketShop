<?php

if( ! defined("ABSPATH") ) exit;


if( ! defined( "THEME_PATH" ) ){
	define("THEME_PATH", get_template_directory() );
}

if( ! defined( "VIEW_PATH" ) ){
    define("VIEW_PATH", THEME_PATH.DIRECTORY_SEPARATOR.'views' );
}
if( ! defined( "THEME_URI" ) ){
	define("THEME_URI", get_template_directory_uri() );
}

include "app/autoloader.php";

add_action('after_setup_theme','Initializer::setup');

add_action('init','PostTypes::make_product_post_type');

add_action('add_meta_boxes','MetaBoxes::register_product_price_meta_box');

add_action('save_post','MetaBoxes::product_price_save_handler');

add_action('pre_post_update','MetaBoxes::product_price_save_handler');

add_filter('manage_product_posts_columns','PostTypes::add_price_column');
add_action('manage_product_posts_custom_column','PostTypes::show_price_value_column',10,2);

