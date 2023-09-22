<?php 

	//батьківський класс моделі, зберігає методи для обробки данних 
	
		class Model{
			public $db = false;
			function __construct(){
				if(!$this->db){
					$this->db = new DataBase;
				}
			}
		}

?>