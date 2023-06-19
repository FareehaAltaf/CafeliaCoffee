<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Cafelia";
    $conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
    
    
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $ph_no = $_POST['ph_no'];
    $address = $_POST['address'];
    
    $sql = "INSERT INTO customers (name, ph_no, address, email, password) VALUES ('$name', '$ph_no', '$address', '$email', '$password')";

    $query = mysqli_query($conn, $sql);
    
    if ($query) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}


?> 