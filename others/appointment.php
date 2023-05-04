<?php

if (isseet($_POST['submit'])) {
    $email = $_POST['email'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $address = $_POST['address'];
    $time = $_POST['time'];


    $mysqli = new mysqli('localhost', 'root', '', 'mydb');
    $insert = $mysqli->query("INSERT INTO parse(appointment_tb)VALUES('$email', '$firstname', '$lastname', '$address', '$time')");

    if ($insert) {
        echo "Succesful";
    } else {
        echo "Error!!!";
    }

}


?>