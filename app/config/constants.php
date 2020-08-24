<?php 
$url='http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '')
                      .'://'.$_SERVER['HTTP_HOST'].str_replace('//','/',dirname($_SERVER['SCRIPT_NAME']).'/');

 $url2='http' . ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 's' : '')
                      .'://'.$_SERVER['HTTP_HOST']."/DecisionTreePhp";                     
define("ACCION_DEFECTO", "index");
define("CONTROLADOR_DEFAULT", "public");
define("BASE_URL",$url);
define("BASE_TEMPLATE",$url2);

define ( 'ROOT_USERS' , "img/users/");

 ?>
