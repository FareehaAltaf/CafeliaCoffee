<?php 

include 'connection.php';

// var order_details_url = './order.php?id='+cart_items_id.id+'&qty='+cart_items_id.qty;

if(isset($_GET['id']) && isset($_GET['qty']) && isset($_GET['oid']))
{
    $id = $_GET['id'];
    $qty = $_GET['qty'];
    $oid = $_GET['oid'];


    
    try {
        $query = "INSERT INTO orderdetails (itemID, orderID, quantity) VALUES ('$id','$oid','$qty')";
        $result = mysqli_query($conn, $query);
        
        
        echo 'itemID = ' . $id . ' | qty = ' . $qty . ' | oid = ' . $oid;

    } catch (\Throwable $th) {
        echo 'Syntax Error';
    }
    
    
}

?>