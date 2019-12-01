<?php

if( ! defined("ABSPATH") ) exit;


if( ! defined( "THEME_PATH" ) ){
	define("THEME_PATH", get_template_directory() );
}
if( ! defined( "THEME_URI" ) ){
	define("THEME_URI", get_template_directory_uri() );
}

include "app/autoloader.php";

add_action('after_setup_theme','Initializer::setup');


