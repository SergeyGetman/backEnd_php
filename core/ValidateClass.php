<?php 

class Validate {

    //Перевірка строки на довжину
    //str - строка
    //lengts - довжина
    //mode - falde: не менше ніж; true: не більше ніж
    public function checkLength($str, $length, $mode = false){
        if(!$mode){
            if(strlen($str) >= $length){
                return true;
            }
            return false;
        }
        if(strlen($str) <= $length){
            return true;
        }
        return false;
    }


    public function validateUserData ($dataFromForm) {
        if(!isset($dataFromForm['email']) ){
            return ["message" => "email dont found"];
        }
        return ["message" => "valid is OK"];
    }

	// public function validateUserData($userFromForm) {
    //     if (isset($userFromForm['name']) && strlen($userFromForm['name']) >= 3) {
    //         return true;
    //     }
    //     return false;
    // }
}


?>