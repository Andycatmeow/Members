<?php

include_once APP.'authentication/Auth.php';

class Register extends Controller {
    /**
     * Index
     */
    public function index() {

        Auth::security_session_start();

        if (Auth::check_login($this->myDb) == true) {
            echo '<p>You already logged in. Mayby <a href="/login/logout">Logout</a>?';
        } else {
            require APP . 'view/register/index.php';
        }
    }

    /**
     * register
     */
    public function registerProcess() {
         
        Auth::security_session_start();
         
        if (isset($_POST['username'], $_POST['email'], $_POST['password'])) {
            $username = $_POST['username'];
            $email = $_POST['email'];
            $password = $_POST['password'];
         
            if (Auth::register($username, $email, $password, $this->myDb) == true) {
                echo "<h1>Registration successful!</h1>";
                //header('location: ' . URL . '');
            } else {
                echo "Register failed <br>";
            }
        } else {
            echo 'Invalid Request';
        }
    }
}

?>