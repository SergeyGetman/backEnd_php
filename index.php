<?php
	require_once('config.php'); // connect file configuration
	
	//If current route is not false, then require controller
	if(Routes::$current_route){
		require_once('controllers/'.ucfirst(Routes::$current_route).'Controller.php');
		
		$controller_name = ucfirst(Routes::$current_route).'Controller';
		$mvc = new $controller_name(ucfirst(Routes::$current_route));
		$mvc->run();
		
	}else{
		echo 'route no defined.  .\ <br />';
		 echo 'route no defined. Current route: ' . Routes::$current_route;
	}
	
?>