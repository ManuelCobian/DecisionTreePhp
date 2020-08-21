<?php
namespace core;
class HelpView{

	
    //method to sed url for get and ingrese and other controller or action
    public function url($controlador=CONTROLADOR_DEFECTO,$accion=ACCION_DEFECTO){
        $urlString="index.php?controller=".$controlador."&action=".$accion;
        return $urlString;
    }
     
    //Helpers para las vistas
}
?>