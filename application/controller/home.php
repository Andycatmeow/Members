<?php

class Home extends Controller {
    public function index() {
        include_once '../application/authentication/Auth.php';
        Auth::security_session_start();

        if (Auth::check_login($this->myDb) == true) {
            header('location: ' . URL . '/members');
        } else {
            header('location: ' . URL . '/login');
        }
    }
    public function senduserbirthdaymail() {
        require APP . 'libs/senduserbirthdaymail.php';
    }
}
