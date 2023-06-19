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
        $sql = "SELECT itemID, itemName, price, description FROM menu ORDER BY itemID";
        $result = mysqli_query($conn, $sql);
    ?>


</head>
<body>

<header>

    <a href="" class="logo"><i class="fas fa-utensils">Cafelia</i></a>

    <h1>Admin Panel - Cafelia</h1>

</header>

<section class="top">
    <div class="back-btn">
        <a href="admin-panel.php"><i class='bx bx-arrow-back'></i></a>
    </div>
    <div class="login-heading">
        <h2><span>Admin Panel</span></h2>
    </div>
</section>


<section class="info">
    <div class="outer">
        <!-- Show All Employees , Remove Employee , Edit Employee Job (TBD) -->
            <div class="heading-text">
                Menu Items
            </div>

            <div class="item-heading">
                <p>ID</p>
                <p>Name</p>
                <p>Price</p>
                <p>Description</p>
            </div>

            <?php 
                while ($row = mysqli_fetch_assoc($result)) {
                    // row by row takes the values of the result set and stores them in variable: row
            
            ?>

            
            <div class="item">

                <div class="itemID emp-details"><?php echo $row['itemID']?></div>
                <div class="itemName emp-details"><?php echo $row['itemName']?></div>
                <div class="price emp-details"><?php echo $row['price']?></div>
                <div class="description emp-details"><?php echo $row['description']?></div>
                
            </div>

            <?php 
                }
            ?>
 
    </div>
</section>

<section class="bottom"></section>
<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>