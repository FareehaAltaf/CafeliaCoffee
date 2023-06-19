<?php 
include 'connection.php';

if (isset($_GET['x'])) {
    $get = $_GET['x'];
    
    if ($get == 'all') {
        $sql = "SELECT orderID, customerID FROM orders ORDER BY orderID";
        $result = mysqli_query($conn, $sql);
        $orders = [];
        while ($row = mysqli_fetch_array($result)) {
            $order['orderID'] = $row['orderID'];
            $order['customerID'] = $row['customerID'];
            array_push($orders, $order);
        }
        header("Content-Type: application/json");
        echo json_encode($orders);
    }
    else {
        // select itemID, quantity from orderDetails where orderID = $orderID
        $sql = "SELECT itemID, quantity FROM orderdetails WHERE orderID = '$get'";
        // $sql = "SELECT orderID, customerID FROM orders WHERE orderID = '$get'";
        $result = mysqli_query($conn, $sql);
        $orders = [];
        while ($row = mysqli_fetch_array($result)) {
            $order['itemID'] = $row['itemID'];
            $order['quantity'] = $row['quantity'];
            array_push($orders, $order);
        }
        header("Content-Type: application/json");
        echo json_encode($orders);
    }
}


?>