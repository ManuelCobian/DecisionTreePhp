<?php  
namespace core;
use core\EntityBase as EntityBase;
use core\ModelBase as ModelBase;
//parent controller always extends this when create a new Controller 
//use core\EntidadBase as EntidadBase;
//use core\ModelBase as ModelBase;
use core\HelpView as AyudaVistas;

class ControllerBase
{
    public function __construct()
    {
        //require_once 'EntidadBase.php';
        //require_once 'ModelBase.php';
         foreach (glob('models/*.php') as $file) {
           // var_dump($file);
            require_once $file;
        }
        
    }
    //metod for uplooad views
    public function view($vista, $datos)
    {
        foreach ($datos as $id_assoc => $valor) {
            ${$id_assoc} = $valor;
        }
        //require_once 'core/AyudaVistas.php';
        $helper = new AyudaVistas();

        require_once 'views/' . $vista . 'View.php';
    }

    //method for use redirect in the urls when i need comeback is navigator in controllers
    public function redirect($controlador = CONTROLADOR_DEFECTO, $accion = ACCION_DEFECTO)
    {
         header("Location:index.php?controller=".$controlador."&action=".$accion);
    }
}

?>