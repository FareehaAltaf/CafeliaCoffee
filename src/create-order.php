<?php 

include 'connection.php';

if(isset($_GET['cid']))
{

    $get = $_GET['cid'];
    
    try {
        $query = "INSERT INTO orders (customerID, orderTime) VALUES ('$get', NOW())";
        $result = mysqli_query($conn, $query);
        
        $query = "SELECT orderID FROM orders WHERE customerID = '$get' LIMIT 1";
        $orderID_result = mysqli_query($conn, $query);
        $orderID_row = mysqli_fetch_array($orderID_result);
        $orderID = $orderID_row['orderID'];

        echo ($orderID);

    } catch (\Throwable $th) {
        echo '0';
    }
    
    
}

?>