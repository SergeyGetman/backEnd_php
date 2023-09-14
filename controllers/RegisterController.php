<?php 

	class RegisterController extends Controller {
		
		function run(){
			$form_data = Routes::getPost();
			if($this->model->checkInData($form_data)){
				$result_model =	$this->model->addUser($form_data);
				$this->view->registerSuccess($result_model);
			}else{
				$this->view->registerError();
			}
		}
		
		
	} 

?>