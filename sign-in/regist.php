<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];


    $mysqli = new mysqli("localhost", "root", "", "aamusted_scp");
    $query = $mysqli->query("INSERT INTO users_tb (email, password) VALUES ('$email', '$password')");
    if ($query) {
        header('Location: index.html');
        //echo "Registration Succesfull";
    }

} else {
    echo "Error ";

}


?>