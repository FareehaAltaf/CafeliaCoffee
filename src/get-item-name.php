<?php 
include 'connection.php';

if (isset($_GET['id'])) {
    $get = $_GET['id'];

    $sql = "SELECT itemName FROM menu WHERE itemID = '$get' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
    
    echo $row['itemName'];
    
}

?>