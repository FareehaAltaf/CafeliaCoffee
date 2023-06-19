<!DOCTYPE html>
<html lang="en">
<head>
    <title>Cafelia</title>

    <!-- swiper icons from the website: https://swiperjs.com/get-started -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

    <!-- Box Icons -->
	<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <!-- font awesome cdn link from the website: https://cdnjs.com/ -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <!-- css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <?php
        include 'connection.php';
        // fetch OrderID and items from the order and orderdetails tables and display them using php

        // $sql = "SELECT * FROM orderdetails WHERE OrderID = $OrderID";
        // $result = mysqli_query($conn, $sql);

        // what we need:

        //? These happen alot of times per order
        
        // orderdetails.itemID
        // menu.itemName
        // orderdetails.quantity
        
        //? These happen once per order
        // orders.orderID
        // orders.orderTime

        // what is the sql statement for this?
        // SELECT orderdetails.itemID, menu.itemName, orderdetails.quantity, orders.orderID, orders.orderTime 
        // FROM orderdetails 
        // INNER JOIN menu ON orderdetails.itemID = menu.itemID 
        // INNER JOIN orders ON orderdetails.orderID = orders.orderID 
        // WHERE orders.orderID = $OrderID

    
    
    ?>


</head>
<body onload="renderOrders();">
<!-- Before we start here are impt HTML elements we'll use:
    The <section> element can be used to define a part of a website with related content.

    The <article> element can be used to define an individual piece of content.
    
    The <header> element can be used to define a header (in a document, a section, or an article).
    
    The <footer> element can be used to define a footer (in a document, a section, or an article).
    
    The <nav> element can be used to define a container of navigation links. -->
<!-- header section starts-->

<header>

    <a href="" class="logo"><i class="fas fa-utensils">Cafelia</i></a>

    <h1>Admin Panel - Cafelia</h1>

</header>

<section class="top">
    <div class="login-heading">
        <h2><span>Orders</span></h2>
    </div>
</section>

<!-- 

select orderID, customerID from orders; √
1. one by one get the orderID, customerID from the orders table and for each orderID do: √
    2. select itemID, quantity from orderDetails where orderID = $orderID
    3. cycle results and append all items using (4) and quantity
    4. select itemName from menu where itemID = $itemID

    6. select customerID from orders where orderID = $orderID

 -->



<section class="checkout">
    <div class="outer">
        <div class="heading-text">
            Orders to be completed
        </div>
    </div>
</section>

<section class="bottom"></section>
<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>