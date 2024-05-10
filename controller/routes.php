<?php 
include 'config/static.php';
include 'controller/main.php';
include 'function/main.php';

#GET
Router::url('/', 'get', function() { return view('home'); });
Router::url('login', 'get', 'AuthController::login');
Router::url('register', 'get', 'AuthController::register');
Router::url('dashboard', 'get', 'ContactController::contacts');
Router::url('contact/edit', 'get', 'ContactController::edit');
Router::url('contact/delete', 'get', 'ContactController::remove');

#POST
Router::url('login', 'post', 'AuthController::saveLogin');
Router::url('register', 'post', 'AuthController::saveRegister');
Router::url('contact/edit', 'post', 'ContactController::saveEdit');

new Router();

?>