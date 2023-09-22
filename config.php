<?php 

error_reporting(E_ALL);
ini_set('display_errors', 1);

// config connect DB
	const DB_HOST = 'localhost'; 
	const DB_NAME = 'roud-map';
	const DB_USER = 'root';
	const DB_PASS = '';

//connect-include CORE Classes 

	require_once("core/RoutesClass.php");
	require_once("core/ControllerClass.php");
	require_once("core/ModelClass.php");
	require_once("core/ViewClass.php");
	require_once("core/DBClass.php");
	require_once("core/ValidateClass.php");


?>