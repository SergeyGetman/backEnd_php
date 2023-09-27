<?php 
	
	class RegisterView extends View {
		function registerSuccess($user_id){

		  $this->answer(["status" => true, "user_id" => $user_id]); //ключ згначення 

		}
		
		
		function registerError($msg){
			$this->answer(["status" => false, "message" => $msg]);
		}
	}
?>