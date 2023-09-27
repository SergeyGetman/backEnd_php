<?php 

//запис в БД
	
	class RegisterModel extends Model {
		
		function addUser($form_data_users){
			$insert_user = "INSERT INTO `users`(`id`, `name`, `login`, `email`, `password`) VALUES (0,'".$form_data_users['name']."','".$form_data_users['login']."','".$form_data_users['email']."','".$form_data_users['password']."')";
		    return $this->db->insert($insert_user);
		
		}
		

		function checkInData($data){
			if(!isset($data['name']) || !isset($data['login']) || !isset($data['email']) || !isset($data['password'])){
				return [
					'status' => false,
					'message' => 'no exists all data'
				];
			}
			$valid_name = $this->validate->checkLength($data['name'], 5);
			if(!$valid_name){
				return [
					'status' => false,
					'message' => 'name is invalid'
				];
			}
			return [
				'status' => true,
			];
		}

		function getDataFromDb() {
			$sql = "SELECT * FROM users";
			return $this->db->select($sql); 
		}
		
	}
?>