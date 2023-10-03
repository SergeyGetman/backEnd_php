<?php 

class LoginController extends Controller {

    function run (){
        $form_dataLogin = (array)Routes::getPost();
        $this->view->answer($form_dataLogin);
    }

}

?>