<?php

class Profiles extends Controller {
    
    /**
     * index (show all profile)
     */
    public function index() {
        include_once '../application/authentication/Auth.php';
        Auth::security_session_start();
        if (Auth::check_login($this->myDb) == true) {
            $profiles = $this->model->getAllProfiles();

            require APP . 'view/_templates/profile_header.php';
            require APP . 'view/profiles/index.php';
            require APP . 'view/_templates/footer.php';

        } else {
            echo "404 error";
        }
    }

    public function viewProfile($user_id) {
        include_once '../application/authentication/Auth.php';
        Auth::security_session_start();
        if (Auth::check_login($this->myDb) == true) {
            $profile = $this->model->getProfile($user_id);
            $userNews = $this->model->getUserNews($user_id);

            require APP . 'view/_templates/profile_header.php';
            require APP . 'view/profile/index.php';
            require APP . 'view/_templates/footer.php';

        } else {
            echo "404 error";
        }
    }

}
