<script type="text/javascript" src="cart.php"></script>

<?php header("content-type:text/javascript"); 
include 'connection.php';
$query = "SELECT itemID, itemName, price, image FROM menu WHERE itemID IN (1,2,3)";
$cart_result = mysqli_query($conn, $query);
?>


