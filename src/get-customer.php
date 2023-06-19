<?php 

// url = './get-customer.php?id='+order['customerID'];
include 'connection.php';

if (isset($_GET['id'])) {
    $get = $_GET['id'];

    $sql = "SELECT name FROM customers WHERE customerID = '$get' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_array($result);
    
    echo $row['name'];
    
}


?>