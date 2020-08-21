<?php  
namespace core;

use core\EntityBase as EntityBase;

class ModelBase extends EntityBase
{
	private $table;

	public function __construct($table)
	{
		$this->table = (string) $table;
		parent::__construct($table);
		//$this->fluent = $this->getConectar()->startFluent();
	}
/*
	public function fluent(){
		return $this->fluent();
	}
*/

	public function ejecutarSql($query)
	{
		$query = $this->db()->query($query);
        if($query == true)
        {
            if($query->rowCount()>1)
            {
                while($row = $query->fetch_object()) 
                {
                   $resultSet[]=$row;
             	}
            }
            elseif($query->rowCount()==1)
            {
                if($row = $query->fetch_object())
                {
                    $resultSet=$row;
                }
            }
            else
            {
                $resultSet=true;
            }
        }else
        {
            $resultSet=false;
        }
         
        return $resultSet;
	}

}

?>