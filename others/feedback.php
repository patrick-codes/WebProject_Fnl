<?php

if (isseet($_POST['submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $feedback = $_POST['message'];

    $mysqli = new mysqli('localhost', 'root', '', 'mydb');
    $insert = $mysqli->query("INSERT INTO parse(feedback_tb)VALUES('$fullname','$email', '$subject', '$feedback')");

    if ($insert) {
        echo "Succesful";
    } else {
        echo "Error!!!";
    }

   

}


?>