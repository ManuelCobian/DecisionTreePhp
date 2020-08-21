<?php
namespace core;

function cargarControlador($controller){
    $controlador=ucwords($controller).'Controller';
    $strFileController='controllers/'.$controlador.'.php';

    if(!is_file($strFileController)){
        $strFileController='controllers/'.ucwords(CONTROLADOR_DEFAULT).'Controller.php';   
    }

    require_once $strFileController;
    $controllerObj=new $controlador();
    return $controllerObj;
}

function cargarAccion($controllerObj,$action){
    $accion=$action;
    $controllerObj->$accion();
}

function lanzarAccion($controllerObj){
    if(isset($_GET["action"]) && method_exists($controllerObj, $_GET["action"])){
        cargarAccion($controllerObj, $_GET["action"]);
    }else{
        cargarAccion($controllerObj, ACCION_DEFECTO);
    }
}

 
?>
