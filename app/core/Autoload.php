<?php  
//class autoload for url metod

namespace core;
class Autoload{


	public static function run(){

		spl_autoload_register(function($class){
			$ruta = str_replace("\\", "/", $class) . ".php";
			include_once $ruta;
		});
	}

}
?>