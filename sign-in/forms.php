<?php

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $dpt = $_POST['department'];
    $email = $_POST['email'];
    $phone = $_POST['mob'];
    $notes = $_POST['notes'];


    $mysqli = new mysqli("localhost", "root", "", "aamusted_scp");
    $query = $mysqli->query("INSERT INTO complain_tb (fullname,department,email,phonenumber,notes) VALUES ('$fname','$dpt','$email', '$phone','$notes')");
    if ($query) {
        header('Location: index_success.html');
        //echo "Registration Succesfull";
    }

} else {
    echo "Error ";

}


?>