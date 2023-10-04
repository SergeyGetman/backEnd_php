<?php 

class LoginModel extends Model {


    function checkinDBdata($userLogin, $userPassword){
        $query = "SELECT * FROM users WHERE login = '$userLogin' AND password = '$userPassword'";
        $resultUserInsideDB = $this->db->select($query);
        if($resultUserInsideDB){
            return [
                "status" => true,
                "data_users" => $resultUserInsideDB
            ];
        }
        return [
            "status" => false,
            'user not found' => false
        ];

    }
    

    function checkUserInBase ($data_login){
        if(!isset($data_login['login']) || !isset($data_login['password'])){
            return [
                'status' => false,
                'message' => 'no user found'
            ];

       }
            return [
                "user found" => true
            ];
     } 
}

?>