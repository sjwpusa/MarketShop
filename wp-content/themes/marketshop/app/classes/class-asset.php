<?php
class Asset
{

	public static function __callStatic($metod_name,$args)
	{
		return THEME_URI.'/assets/'.$metod_name.'/'.$args[0];
	}

//	public static function css($file_name)
//	{
//		return $file_url=THEME_URI.'/assets/css/'.$file_name;
//	}
//
//	public static function js($file_name)
//	{
//		return $file_url=THEME_URI.'/assets/js/'.$file_name;
//
//	}
//
//	public static function image($file_name)
//	{
//		return $file_url=THEME_URI.'/assets/image/'.$file_name;
//
//	}

}