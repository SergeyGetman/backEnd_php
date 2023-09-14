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
		return $_POST;
	}
	
	static function getGet(){
		return $_GET;
	}
	
	

	
}

Routes::init();

?>