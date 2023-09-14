<?php 
	
	//видача відповідей користувачу
	class View {
		function answer($data = false){
			header('Content-Type: application/json');
			echo json_encode($data);
		}
	}

?>