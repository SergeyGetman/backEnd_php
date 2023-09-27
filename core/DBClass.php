<?php 
	//робота з базою данних
	//если абстрактний клас - то без доллару
	
	class DataBase {
		
		private $connect = false;
		
		function __construct(){
			if(!$this->connect){
			$this->connect =  mysqli_connect(DB_HOST, DB_USER, DB_PASS);
				if(!$this->connect){
					 die('Could not connect: ' . mysqli_error());
				}
				if(!mysqli_select_db($this->connect, DB_NAME)){
				   die("Could not select db". mysqli_error($this->connect));
					}
			}
		}
		
		function __destruct(){	
			mysqli_close($this->connect);
		}
		
		function select($sql_request){
			return mysqli_fetch_array(mysqli_query($this->connect, $sql_request));
		}
		
		function insert($sql_query){ //insert запис в БД
			
				mysqli_query($this->connect, $sql_query);
				return mysqli_insert_id($this->connect); //метод повернення останнього id
		}

		function getID($data){
			$id_new = $this->db->query($data);
			
		}
	}

?>