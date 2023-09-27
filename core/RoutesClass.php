<?php 

 class Routes{
	
  public static $current_route = false;
	
	static function init() {
		$route = filter_input(INPUT_GET, 'route', FILTER_SANITIZE_SPECIAL_CHARS);
		if($route){
			self::$current_route = $route;
		}
	}
	
	static function getPost(){
		if(empty($_POST)){
			return json_decode(file_get_contents('php://input'));
		}
		return $_POST;
	}
	
	static function getGet(){
		return $_GET;
	}
	
	

	
}

Routes::init();

?>