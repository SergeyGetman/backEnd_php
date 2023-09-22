<?php 
	
	//видача відповідей користувачу
	class View {
		function answer($data = false){
			header("Access-Control-Allow-Origin: *");
			header("Access-Control-Allow-Methods: POST");
			header("Access-Control-Allow-Headers: Content-Type");
			header("Access-Control-Max-Age: 86400");
			header('Content-Type: application/json');

        
        //  ответ в формате JSON
			echo json_encode($data);
			exit;
		}
	}

?>