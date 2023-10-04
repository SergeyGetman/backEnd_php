<?php 

class LoginView extends View {

    function loginSusses($user_id){
        return $user_id;
    }

    function loginError($message){
        return [$message => "login failed"];
    }

}


?>