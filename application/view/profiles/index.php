<?PHP
include_once '../application/authentication/Auth.php';
?>

<?php
    foreach ($profiles as $profile) {
        $html = '
        <div class="container-profile a-'.$profile->id.'">
            <div class="username">
                <a href="profiles/viewprofile/'.$profile->id.'"><h2>'.$profile->username.'</h2></a>
            </div>
            <div class="avatar">
                <img src="public/img/user.png">
            </div>
            <div class="contacts">
                <p>'.$profile->email.'</p>
            </div>
            <div class="description">
                <p>I’m a product designer who also loves front-end technologies.</p>
            </div>
            <div class="buttons group">
                <a class="profile-btn" href="profiles/follow/'.$profile->id.'">Follow</a>
                <a class="profile-btn" href="profiles/viewprofile/'.$profile->id.'">View Profile</a>
            </div>
        ';
        $html .= '
        </div>
        ';
        echo $html;
    }

?>