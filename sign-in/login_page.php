<?php

if (isset($_POST['submit'])) {
$email = $_POST['email'];
$password = $_POST['password'];

$conn = mysqli_connect("localhost", "root", "", "aamusted_scp");
$query = "SELECT * FROM users_tb WHERE email='$email' AND password='$password'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) == 1) {
$_SESSION['email'] = $email;
header('Location: index.html');
//echo "Hello";
} else {
echo "Invalid username or password";
}
}





?>