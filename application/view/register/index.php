<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Register</title>
        <link rel="stylesheet" href="css/style.css" />
    </head>
    <body>

        <div id="wrap">
        <div class="login">

        <?php

        if (isset($_GET['error'])) {
            echo '<p class="error">Error Logging In!</p>';
        }

        ?>

        <div class="registration-block">
            <div class="block-header group">
                <h2 class="block-title">Registration</h2>
            </div>
            <div class="form-block">
                <div class="form-header">
                    <h4>Create new member</h4>
                </div>
                <div class="form-content">
                    
                <form action="<?php echo URL; ?>register/registerprocess" method="post" name="login_form" enctype="multipart/form-data">

                <div class="form-group">

                    <div class="form-group">
                        <label>Username:</label>
                        <input type="text" name="username" placeholder="username">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" name="email" placeholder="email">
                    </div>

                    <div class="form-group">
                        <label>Password:</label>
                        <input type="text" name="password" placeholder="password">
                    </div>

                    <div class="form-group">
                        <input type="submit" name="submit" value="Register">
                    </div>
                </form>

                </div>
            </div>
        </div>

        

        <?php

        if (Auth::check_login($this->myDb) == true) {
            //echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
            //echo '<p>Do you want to change user? <a href="login/logout">Log out</a>.</p>';
        } else {
            //echo '<p>Currently logged ' . $logged . '.</p>';
        }

        ?>

        </div>
        </div>

    </body>
</html>