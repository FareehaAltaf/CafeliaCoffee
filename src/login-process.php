<?php

include 'connection.php';
// authentication using PHP

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {

$email = $_POST['email'];
$password = $_POST['password'];



$sql = "SELECT * FROM customers WHERE email = '$email' AND password = '$password'";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Redirect to the desired page
    header("Location: http://localhost/Cafelia/index.php");
    
    exit();
} else {
    echo "Invalid email or password.";
    header("Location: http://localhost/Cafelia/login.php");
}

// Close the database connection


}

?>