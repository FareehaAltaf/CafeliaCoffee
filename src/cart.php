<?php 

include 'connection.php';

if(isset($_GET['x']))
{

    //echo 'This is from test.php';
    $get = $_GET['x'];
    // echo $get;
    
    try {
        $query = "SELECT itemID, itemName, price, image FROM menu WHERE itemID IN $get";
        $cart_result = mysqli_query($conn, $query);
        


        $cart_array = [];

        while ($cart_row = mysqli_fetch_array($cart_result)) {
            // echo [$cart_row['itemID'] . ' | ' . $cart_row['itemName'] . ' | ' . $cart_row['price'] . ' | ' . $cart_row['image'] . ' | '];
            $cart_array_row['itemID'] = $cart_row['itemID'];
            $cart_array_row['itemName'] = $cart_row['itemName'];
            $cart_array_row['price'] = $cart_row['price'];
            $cart_array_row['image'] = $cart_row['image'];
            array_push( $cart_array, $cart_array_row);
            // echo "<br>";
        }
        // var_dump($cart_array);
        // foreach ($cart_array as $key => $arr_row) {
        //     foreach ($arr_row as $row_key => $value) {
        //         echo "$row_key = $value<br>";
        //     }
        //     echo "<br>=================<br>";
        // }



        header("Content-Type: application/json");
        echo json_encode($cart_array);

    } catch (\Throwable $th) {
        header("Content-Type: application/json");
        echo json_encode([]);
    }
    
    
}

?>