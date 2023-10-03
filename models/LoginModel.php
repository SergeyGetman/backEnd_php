<?php 

class LoginModel extends Model {
    

    function checkUserInBase ($data_login){
        if(!isset($data['login']) || !isset($data['password'])){
            return [
                'status' => false,
                'message' => 'no user found'
            ];

    }
    return [
        "user found" => true
    ];

} 


?>