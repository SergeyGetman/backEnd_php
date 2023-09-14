<?php 


	
	class RegisterModel extends Model {
		
		function addUser($form_data_users){
			$insert_user = "INSERT INTO `users`(`id`, `name`, `login`, `email`, `password`) VALUES (0,'".$form_data_users['name']."','".$form_data_users['login']."','".$form_data_users['email']."','".$form_data_users['password']."')";
		    return $this->db->insert($insert_user);
		
		}
		
		function checkInData($data){
			if(!isset($data['name']) || !isset($data['login']) || !isset($data['email']) || !isset($data['password'])){
				return false;
			}
			return true;
		}
		
	}
?>