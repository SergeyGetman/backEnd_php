<?php 
	
	//видача відповідей користувачу
	class View {
		
		function answer($data = false){
		
			//  ответ в формате JSON
			echo json_encode($data);
			exit;
			
		}
	}

?>