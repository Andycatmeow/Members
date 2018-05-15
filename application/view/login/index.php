<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Log In</title>
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
                <h2 class="block-title">Log In</h2>
            </div>
            <div class="form-block">
                <div class="form-header">
                    <h4>Log In</h4>
                </div>
                <div class="form-content">

                    <form action="<?php echo URL; ?>login/loginprocess" method="post" name="login_form">

                        <div class="form-group">
                            <label>Email:</label>
                            <input type="text" name="email" placeholder="email" required/>
                        </div>

                        <div class="form-group">
                            <label>Password:</label>
                            <input type="text" name="password" placeholder="password" id="password" required/>
                        </div>

                        <div class="form-group">
                            <input type="submit" value="Login" /> 
                        </div>

                    </form>

                <?php

                    if (Auth::check_login($this->myDb) == true) {
                        echo '<p>Currently logged ' . $logged . ' as ' . htmlentities($_SESSION['username']) . '.</p>';
                        echo '<p>Do you want to change user? <a href="login/logout">Log out</a>.</p>';
                    } else {
                        echo '<p>Currently logged ' . $logged . '.</p>';
                    }

                ?>

                </div>
            </div>
        </div>
        
        </div>
        </div>

    </body>
</html>