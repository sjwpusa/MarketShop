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
		if ($metod_name=='render')
		{
			self::render_view($args);
		}
	}

	public static function render_view($args)
	{
		return get_template_part('views/'.$args[0]);
	}
}