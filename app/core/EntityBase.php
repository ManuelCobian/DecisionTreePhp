<?php  


class EntityBase 
{
	private $table, $db, $conectar,$db2,$settings_main,$db_jom;

	public function __construct($table,$settings){
		
		require "connection.php";
		$this->conectar = connection::getConnect();
		
		$this->db=$this->conectar->getConnect();
	}

	

	
	public function db(){
		return $this->db;
	}

	
	public function getAll($user_id=-1,$isadmin=-1){
		$query = $this->db->query("SELECT * FROM $this->table limit 100");
		while ($row = $query->fetchObject()) {
           $resultSet[]=$row;
        }
        return $resultSet;
	}

	
	

	public function get_tag(){
		$sql = 'SELECT DISTINCT tag FROM tag_relationships';
		$statement = $this->db2->prepare($sql);
		$statement->execute();
		if ($this->settings['debug'] === true){
			print $sql.PHP_EOL;
		}
		$result = $statement->fetch(PDO::FETCH_ASSOC);
		return $result;
	}


	public function getAlls(){
		$query = $this->db->query("SELECT * FROM $this->table ");
		while ($row = $query->fetchObject()) {
           $resultSet[]=$row;
        }
        return $resultSet;
	}


		public function getByUser_campain($table=-1,$campos=-1,$id=-1,$name=-1)
	{	
		if ($campos!="" and $id>0) {
			# code...
			$query = $this->db->query("SELECT $campos FROM $table WHERE id=$id");
		}else{
			$query = $this->db->query("SELECT * FROM $table WHERE username like '%$name%'");
		}
		

		$resultSet = null;

		if($row = $query->fetchObject()) {
           $resultSet=$row;
        }
		return $resultSet;
	}
 

	public function getById($table,$campos,$id)
	{	
		if ($campos!="") {
			# code...
			$query = $this->db->query("SELECT $campos FROM $table WHERE id=$id");
		}else{
			$query = $this->db->query("SELECT * FROM $table WHERE id=$id");
		}
		

		$resultSet = false;

		if($row = $query->fetchObject()) {
           $resultSet=$row;
        }
		return $resultSet;
	}


	public function getByKey($table,$campos,$id)
	{	
		if ($campos!="") {
			# code...
			$query = $this->db->query("SELECT $campos FROM $table WHERE consumer_key LIKE  %$id%");
		}else{
			$query = $this->db->query("SELECT * FROM $table WHERE consumer_key=$id");
		}
		



		if($row = $query->fetchObject()) {
           $resultSet=$row;
        }
		return $resultSet;
	}

	public function getBy($column, $value)
	{
		$query=$this->db->query("SELECT * FROM $this->table WHERE $column='$value'");
        while($row = $query->fetchObject()) {
           $resultSet[]=$row;
        }
		return $resultSet;
	}
	public function deleteById($id)
	{
 		$query=$this->db->query("DELETE FROM $this->table WHERE id=$id"); 
		return $query;
	}

}

?>
