<?php

if (isseet($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $mysqli = new mysqli('localhost','root','','mydb');
    $insert = $mysqli->query("INSERT INTO parse(login_tb)VALUES('$email', '$password')");

    if($insert){
        echo "Succesful";
    }
    else{
        echo "Error!!!";
    }

    if ($email == "hos@gmail.com" && $password == "hos233") {
        echo "Succesfully logged in";
    }

}


?>