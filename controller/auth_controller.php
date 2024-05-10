<?php 
include_once 'model/user_model.php';

class AuthController {
    static function login(){
        view('auth_page/layout', ['url' => 'login']);
    }

    static function register(){
        view('auth_page/layout', ['url' => 'register']);
    }
}

?>