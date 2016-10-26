<?php

class model_reg {

    public function get_data() {
        
    }

    public function login() {
        $myObject = new user();
        $resultData = $myObject->create($username, $password);
    }

}
