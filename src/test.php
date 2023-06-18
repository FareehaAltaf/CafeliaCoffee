<?php 

include 'connection.php';

if(isset($_GET['x']))
{

    //echo 'This is from test.php';
    $get = $_GET['x'];
    // echo $get;

    $query = "SELECT itemID, itemName, price, image FROM menu WHERE itemID IN $get";
    $cart_result = mysqli_query($conn, $query);
    // while ($cart_row = mysqli_fetch_array($cart_result)) {
    // echo $cart_row['itemID'];
    // }
    
    $cart_array = array();
    while ($cart_row = mysqli_fetch_array($cart_result)) {
        $cart_array[] = $cart_row;
    }

    
    header("Content-Type: application/json");
    echo json_encode($cart_array);
    
}

?>