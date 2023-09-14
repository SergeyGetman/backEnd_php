<?php 

	//батьківський класс моделі, зберігає методи для обробки данних 
	
		class Model{
			public $db = false;
			function __construct(){
			 $this->db = new DataBase;
			}
		}

?>