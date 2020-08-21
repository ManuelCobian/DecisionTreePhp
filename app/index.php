<?php  
require_once 'config/constants.php';
require_once 'core/ControllerBase.php';
require_once 'core/LoadController.php';
define('DS', DIRECTORY_SEPARATOR);
define('ROOT', realpath(dirname(__FILE__)) . DS);
define('URL', BASE_URL);
require_once 'core/Autoload.php';

core\Autoload::run();
if (isset($_GET["controller"])) {
	
	//die();
	$controllerObj = core\cargarControlador($_GET["controller"]);
	core\lanzarAccion($controllerObj);
}
else{
	
	$controllerObj = core\cargarControlador(CONTROLADOR_DEFAULT);
	core\lanzarAccion($controllerObj);
}
