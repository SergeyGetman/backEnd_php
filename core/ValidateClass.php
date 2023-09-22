<?php 

class Validate {


	public static function validateUserData($userFromForm) {
       
        if (isset($userFromForm['name']) && strlen($userFromForm['name']) >= 3) {
            return true;
        }
        return false;
    }
}

$form_data = Routes::getPost();

print_r($form_data); //debug log

$valid = Validate::validateUserData($form_data);


if (!!$valid) {
    echo "Данные валидны.";
} else {
    echo "Данные не валидны.";
}

?>