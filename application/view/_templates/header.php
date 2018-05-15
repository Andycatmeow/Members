<?php

include_once '../application/authentication/Auth.php';

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Emploees</title>
        <link rel="stylesheet" href="<?php echo URL; ?>css/reset.css">
        <link rel="stylesheet" href="<?php echo URL; ?>css/style.css">
    </head>
    <body>
        <div id="wrap">
            <div id="header" class="group">
                <div class="logo"><h2>Emploees</h2></div>
                <div class="nav group">
                    <ul>
                        <li><a href="<?php echo URL; ?>/emploees">Emploees</a></li>
                        <li><a href="<?php echo URL; ?>/members">Members</a></li>

                        <!-- authentication -->

                        <?php
                            if (Auth::check_login($this->myDb) == true) {
                                echo '<li><a href="'.URL.'/profile">Profile</a></li>';
                                echo '<li><p class="logged-profile-name">Currently logged in as: <span><b>'.$_SESSION["username"].'</b></span></p></li>';
                                echo '<li><a class="last" href="'.URL.'login/logout">Logout</a></li>';
                            } else {
                                echo '<li><a class="" href="'.URL.'login">Login</a></li>';
                                echo '<li><a class="last" href="'.URL.'register">Register</a></li>';
                            }
                        ?>

                    </ul>
                </div>
            </div>

            <!-- content -->