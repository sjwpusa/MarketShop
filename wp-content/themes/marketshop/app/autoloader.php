<?php
class Autoloader {

	public function __construct(  )
	{
		spl_autoload_register(array($this,'autoloader'));
    }

	public function autoloader ($class_name)
	{

		$file=$this->convert_class_to_file($class_name);

		if (is_file($file) && file_exists($file) && is_readable($file))
		{
			include $file;
		}

    }

	public function convert_class_to_file($class_name)
	{
		 return  THEME_PATH.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'classes'.DIRECTORY_SEPARATOR.'class-'.strtolower($class_name).'.php';
    }

}

new AutoLoader();