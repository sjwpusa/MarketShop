<?php
/**
 * Created by PhpStorm.
 * User: saeed
 * Date: 11/25/2019
 * Time: 02:46 PM
 */

class View {

	public static function __callStatic($metod_name,$args)
	{

	    switch ($metod_name)
        {
            case 'render':
                self::render_view($args[0]);

                break;
            case 'renderFile':
                self::render_view_by_include($args[0],$args[1]);
                break;
        }
	}

	public static function render_view($args)
	{
		return get_template_part('views/'.$args[0]);
	}

    public static function render_view_by_include($args,$data=null)
    {
        $view_name=str_replace('.',DIRECTORY_SEPARATOR,$args);
        $view_file_path=VIEW_PATH.DIRECTORY_SEPARATOR.$view_name.'.php';
        if (is_file($view_file_path) && is_readable($view_file_path))
        {
            !empty($data)?extract($data):null;
            include $view_file_path;
        }
	}
}