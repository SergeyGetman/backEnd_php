<?php 

	class Controller {
		
	    public $model = false; 
		public $view = false;
		
		
		function __construct($name){
			if(!$this->model){
				$this->connectModel($name);
			}
			if(!$this->view){
				$this->connectView($name);
			}
		}
		
		function connectModel($name){
			require_once("models/".$name."Model.php");
			$model_name = $name."Model";
			$this->model = new $model_name;
			
		}	
		
		function connectView($name){
			require_once("views/".$name."View.php");
				$view_name = $name."View";
				$this->view = new $view_name;
			
		}
		
	}

?> 