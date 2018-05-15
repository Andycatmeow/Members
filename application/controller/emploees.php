<?php

class Emploees extends Controller {

    public function index() {
        include_once '../application/authentication/Auth.php';
        Auth::security_session_start();
        if (Auth::check_login($this->myDb) == true) {
            $emploees = $this->model->getAllEmploees();

            require APP . 'view/_templates/header.php';
            require APP . 'view/emploees/index.php';
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
            require APP . 'view/emploees/create.php';
            require APP . 'view/_templates/footer.php';

        } else {
            echo "404 error";
        }
    }

    public function createEmploee() {
        include_once '../application/authentication/Auth.php';

        $upload_dir = URL . "public/uploads/";

        $errors = array('Превышен макс. размер файла, указанный в php.ini',
                        'Превышен макс. размер файла, указанный в форме HTML',
                        'Была отправлена только часть файла',
                        'Файл для отправки не был выбран.'
        );

        if (isset($_POST["first_name"]) &&
            isset($_POST["last_name"]) &&
            isset($_POST["position_id"]) &&
            isset($_POST["hire_date"]) &&
            isset($_POST["salary"]) &&
            isset($_FILES["emploee_pic"])
        ) {
            Auth::security_session_start();
            if (Auth::check_login($this->myDb) == true) {

                $inserted_id = $this->model->createEmploee(
                    $_POST["first_name"],
                    $_POST["last_name"],
                    $_POST["position_id"],
                    $_POST["hire_date"],
                    $_POST["salary"]
                );

                $target_dir = "uploads/profiles/";
                if (mkdir($target_dir.$inserted_id, 0700)) {
                    $userDir = $target_dir.$inserted_id;
                } else {
                    echo "MakeDIR ERROR!";
                }

                $target_file = $userDir ."/". basename($_FILES["emploee_pic"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                if(isset($_POST["submit"])) {
                    $check = getimagesize($_FILES["emploee_pic"]["tmp_name"]);
                    if($check !== false) {
                        echo "File is an image - " . $check["mime"] . ".";
                        $uploadOk = 1;
                    } else {
                        echo "File is not an image.";
                        $uploadOk = 0;
                    }
                }

                if (file_exists($target_file)) {
                    echo "Sorry, file already exists.";
                    $uploadOk = 0;
                }

                if ($_FILES["emploee_pic"]["size"] > 2000000) {
                    echo "Sorry, your file is too large.";
                    $uploadOk = 0;
                }

                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                    $uploadOk = 0;
                }

                if ($uploadOk == 0) {
                    echo "Sorry, your file was not uploaded.";

                } else {
                    if (move_uploaded_file($_FILES["emploee_pic"]["tmp_name"], $target_file)) {
                        echo "The file ". basename( $_FILES["emploee_pic"]["name"]). " has been uploaded.";
                    } else {
                        echo "Sorry, there was an error uploading your file.";
                        echo $_FILES['tmp_name'];
                        print_r($_FILES);
                    }
                }

                $emploee_pic_path = basename($_FILES["emploee_pic"]["name"]);
                $inserted_id = $this->model->setEmploeeImage(
                    $inserted_id,
                    $emploee_pic_path
                );

            } else {
                echo "404 error";
            }
        }

    }

    public function createRandomEmploees() {
        if (isset($_POST["count"])) {
                $this->model->createRandomEmploees(
                    $_POST["count"]
                );
        }
    }

    public function viewEmploee($emploee_id) {
        include_once '../application/authentication/Auth.php';
        Auth::security_session_start();
        if (Auth::check_login($this->myDb) == true) {
            $emploee = $this->model->getEmploee($emploee_id);

            require APP . 'view/_templates/profile_header.php';
            require APP . 'view/emploee/index.php';
            require APP . 'view/_templates/footer.php';

        } else {
            echo "404 error";
        }
    }
    
    public function delete($emploee_id) {
        include_once '../application/authentication/Auth.php';
        
        Auth::security_session_start();
        if (Auth::check_login($this->myDb) == true) {
            $this->model->deleteEmploee($emploee_id);
                header('location: ' . URL . '/emploees');
        } else {
            echo "404 error";
        }
    }

}
