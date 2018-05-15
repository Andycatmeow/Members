<?php

    $mysqli = new mysqli("127.0.0.1", "root", "", "members");
    if ($mysqli->connect_errno) {
        echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $mysqli->real_query("SELECT id, email, date_of_birth FROM members ORDER BY id ASC");
    $result = $mysqli->use_result();

    $today = date("Y-m-d");

    while ($row = $result->fetch_assoc()) {
        echo " id = " . $row['id'] . "\n";
        echo " email = " . $row['email'] . "\n";
        echo " date of birth = " . $row['date_of_birth'] . "\n";


        $todayDateArray = date_parse($today);
        $dateOfBirthArray = date_parse($row['date_of_birth']);
        $userBirthMonth = $dateOfBirthArray['month'];
        $userBirthDay = $dateOfBirthArray['day'];

        $todayDay = $todayDateArray['day'];
        $todayMonth = $todayDateArray['month'];

        if ($userBirthDay == $todayDay && $userBirthMonth == $todayMonth) {
            sendUserMail($row['email']);
            echo "| Email sended |";
        }
    }

    function sendUserMail($mail) {
        $to = ".$mail.";
        $subject = "Birthday reminders";
        $message = "Happy birthday!";
        $headers = "From: webmaster@example.com" . "\r\n" .
        "CC: admin@example.com";

        mail($to, $subject, $message, $headers);

        echo "send mail to member";
    }

?>