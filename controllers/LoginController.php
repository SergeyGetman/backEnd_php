<?php 

class LoginController extends Controller {

    function run (){
        $form_dataLogin = (array)Routes::getPost();
        //$this->view->answer($form_dataLogin);
        $result_find_userDB = $this->model->checkinDBdata($form_dataLogin['login'], $form_dataLogin['password']);
        $this->view->answer($result_find_userDB);
        // $isUserInDB = $this->model->checkUserInBase($form_dataLogin);
        //     $this->view->answer($isUserInDB);
    }

}

?>