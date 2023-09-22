<?php 
	
	class RegisterView extends View {
		function registerSuccess($user_id){
		  $this->answ3er(["status" => true, "user_id" => $user_id]); //ключ згначення 

		}
		
		
		function registerError(){
			$this->answer(["status" => false, "message" => "register user is failed!!!"]);
		}
	}
?>