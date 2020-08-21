<?php  

namespace core;
use libs\FluentPDO\FluentPDO;
use PDO;

class Conexion
{
	
		private static $instance=NULL;
		
		private function __construct(){}
 
		private function __clone(){}
		
		public static function getConnect(){
			$db_cfg = require_once 'config/database.php';
       		
			if (!isset(self::$instance)) {
				
				$pdo_options[PDO::ATTR_ERRMODE]=PDO::ERRMODE_EXCEPTION;
				self::$instance= new PDO($db_cfg['dsn'], $db_cfg['db_user'], $db_cfg['db_password'],$pdo_options);
			}
			return self::$instance;
		}

}

?>