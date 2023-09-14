<?php 
	
	class RegisterView extends View {
		function registerSuccess($user_id){
			$this->answer(["status" => true, "user_id" => $user_id]);
		}
		
		function registerError(){
			$this->answer(["status" => false, "message" => "register user is failed!!!"]);
		}
	}
?>