<?php 

include 'connection.php';



if(isset($_GET['id']))
{
    $id = $_GET['id'];
    
    try {
        $query = "DELETE FROM orderdetails WHERE orderID = '$id'";
        $result = mysqli_query($conn, $query);
        $query2 = "DELETE FROM orders WHERE orderID = '$id'";
        $result2 = mysqli_query($conn, $query2);
        
        
        echo ($result && $result2) ? 'Order Deleted' : 'Order Not Deleted';

    } catch (\Throwable $th) {
        echo 'Syntax Error';
    }
    
    
}

?>