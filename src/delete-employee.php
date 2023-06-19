<?php 

include 'connection.php';
if (isset($_GET['id'])) {
    $empID = $_GET['id'];

    try {
        $sql = "DELETE FROM employee WHERE empID = '$empID'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo '1';
        }
        else {
            echo '0';
        }
    } catch (\Throwable $th) {
        echo '0';
    }

    
}



?>