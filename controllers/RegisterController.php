<?php 

	class RegisterController extends Controller {
		
		function run(){	
 
			$form_data = (array)Routes::getPost();
			
			//$this->view->answer($form_data); 
			$res_check = $this->model->checkInData($form_data);
			//$this->view->answer($res_check);
			if($res_check['status']){
				$result_model =	$this->model->addUser($form_data);
				$this->view->registerSuccess($result_model);
			}else{
				$this->view->registerError($res_check['message']);
			}
		}
		
		
	} 

?>