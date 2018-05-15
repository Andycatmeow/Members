<?php

class Members extends Controller {

    public function index() {
        include_once '../application/authentication/Auth.php';
        Auth::security_session_start();
        if (Auth::check_login($this->myDb) == true) {
            $members = $this->model->getAllMembers();

            require APP . 'view/_templates/header.php';
            require APP . 'view/members/index.php';
            require APP . 'view/_templates/footer.php';

        } else {
            echo "404 error";
        }
    }

    public function create() {
        include_once '../application/authentication/Auth.php';
        Auth::security_session_start();
        if (Auth::check_login($this->myDb) == true) {

            require APP . 'view/_templates/header.php';
            require APP . 'view/members/create.php';
            require APP . 'view/_templates/footer.php';

        } else {
            echo "404 error";
        }
    }

    public function createMember() {
        include_once '../application/authentication/Auth.php';

        $upload_dir = URL . "public/uploads/";

        $errors = array('Превышен макс. размер файла, указанный в php.ini',
                        'Превышен макс. размер файла, указанный в форме HTML',
                        'Была отправлена только часть файла',
                        'Файл для отправки не был выбран.'
        );

        if (isset($_POST["first_name"]) &&
            isset($_POST["last_name"]) &&
            isset($_POST["date_of_birth"]) &&
            isset($_POST["phone"]) &&
            isset($_POST["email"]) &&
            isset($_POST["username"]) &&
            isset($_POST["password"]) &&
            isset($_POST["group_id"]) &&
            isset($_FILES["member_pic"])
        ) {
            Auth::security_session_start();
            if (Auth::check_login($this->myDb) == true) {

                echo 
                '
                <ul>
                    <li>'.$_POST["first_name"].'</li>
                    <li>'.$_POST["last_name"].'</li>
                    <li>'.$_POST["date_of_birth"].'</li>
                    <li>'.$_POST["phone"].'</li>
                    <li>'.$_POST["email"].'</li>
                    <li>'.$_POST["username"].'</li>
                    <li>'.$_POST["password"].'</li>
                    <li>'.$_POST["group_id"].'</li>
                    <li>'.$_FILES["member_pic"].'</li>
                </ul>
                ';

                $dateofbirth = date("Y-m-d", strtotime($_POST["date_of_birth"]));
                $inserted_id = $this->model->createMember(
                    $_POST["first_name"],
                    $_POST["last_name"],
                    $dateofbirth,
                    $_POST["phone"],
                    $_POST["email"],
                    $_POST["username"],
                    $_POST["password"],
                    $_POST["group_id"],
                    $_FILES["member_pic"]
                );

                // ----------  Create Cron Job

                //include_once '../application/libs/Crontab.php';
                //Crontab::addJob("/5 * * * *  /usr/bin/php-cgi /home/html/site.ru/123.php > /dev/null 2>&1 ");

            } else {
                echo "404 error";
            }
        } else {
            echo "empty fields error";

            echo 
                '
                <ul>
                    <li>'.$_POST["first_name"].'</li>
                    <li>'.$_POST["last_name"].'</li>
                    <li>'.$_POST["date_of_birth"].'</li>
                    <li>'.$_POST["phone"].'</li>
                    <li>'.$_POST["email"].'</li>
                    <li>'.$_POST["username"].'</li>
                    <li>'.$_POST["password"].'</li>
                    <li>'.$_POST["group_id"].'</li>
                    <li>'.$_FILES["member_pic"].'</li>
                </ul>
                ';
        }

    }

    public function createRandomMembers() {
        if (isset($_POST["count"])) {
                $this->model->createRandomMembers(
                    $_POST["count"]
                );
        }
    }

    public function viewMember($member_id) {
        include_once '../application/authentication/Auth.php';
        Auth::security_session_start();
        if (Auth::check_login($this->myDb) == false) {
            $member = $this->model->getMember($member_id);

            require APP . 'view/_templates/profile_header.php';
            require APP . 'view/member/index.php';
            require APP . 'view/_templates/footer.php';

        } else {
            echo "404 error";
        }
    }
    
    public function delete($member_id) {
        include_once '../application/authentication/Auth.php';
        
        Auth::security_session_start();
        if (Auth::check_login($this->myDb) == true) {
            $this->model->deleteMember($member_id);
                header('location: ' . URL . '/members');
        } else {
            echo "404 error";
        }
    }

}
