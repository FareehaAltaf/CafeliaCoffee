<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Cafelia";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

function sendQuery($sql) {
    global $conn;
    $query = mysqli_query($conn, $sql);
    return $query;
}
?>