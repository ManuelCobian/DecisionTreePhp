<?php
//namespace controller;
define('PROJECT_ROOT_PATH', __DIR__);
require_once ("models/Model.php");


//require_once('../../master-libs/slr.php');



//include_once($_SERVER['DOCUMENT_ROOT']."/master-libs/slr.php");



//include_once("../../server/slr.php");

use core\ControllerBase as ControllerBase;

//use model\Usuario as Usuario;

class PublicController extends ControllerBase
{

  //controlador para hacer crud
  public function __construct()
  { 
    parent::__construct();
  }



  public function index(){
    ini_set('memory_limit', '-1');
    @set_time_limit(-1);
    $script = "";

          $script.= '<script type="text/javascript"> function cargar() { ';
          $script.= ' /* Traer el widget */
                  
                  ';
          $script.= ' } ';
          $script.= ' var link = document.getElementById("cuadros"); ';
          $script.= ' link.onload = cargar(); ';
          $script.= '</script>';

          


          $script=array('admin/scripts');


          $this->view("templates/Template", array(
            "allusers" =>"",
            "Hola" => "videoEjemplo de MVC",
            "title"=>"Welcome",
            "contraer"=>true,
            "pagina"=>"templates/TempleteUser",
            "carpeta"=>1,
            "pagina_interna"=>"admin/panel",
            //"scripts_chart"=>$script,
              "carpeta"=>2,
            "scripts"=>$script,
          )); 


  }



  
}

?>