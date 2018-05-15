<?php

class Profile extends Controller {

    /**
     * index (show profile)
     */
    public function index($user_id = NULL) {
        include_once '../application/authentication/Auth.php';
        Auth::security_session_start();
        if (Auth::check_login($this->myDb) == true) {
            $user_id = $_SESSION['user_id'];
            $profile = $this->model->getProfile($user_id);

            require APP . 'view/_templates/profile_header.php';
            require APP . 'view/profile/index.php';
            require APP . 'view/_templates/footer.php';

        } else {
            echo "404 error";
        }
    }
}
