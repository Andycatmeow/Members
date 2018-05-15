<?PHP
include_once '../application/authentication/Auth.php';
include_once '../application/libs/Parsedown.php';

if (Auth::check_login($this->myDb) == true) { $login = true; } else { $login = false; }

?>

<?php
    $html = '
    <div class="container">
        <h2>Profile:</h2>
        <p>Username: <b>'.$profile->username.'</b></p>
        <p>Email: <b>'.$profile->email.'</b></p>
    </div>
    ';
    echo $html;
?>