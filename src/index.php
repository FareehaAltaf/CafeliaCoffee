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
    <script>
        localStorage.clear();
        // console.log(localStorage.getItem('id_list'));
    </script>

</head>
<body>
<header>

    <a href="" class="logo"><i class="fas fa-utensils">Cafelia</i></a>

    <nav class="navbar">
        <a class="active" href="#home">home</a> 
        <a href="#about">about</a> 
        <a href="#menu">menu</a> 
    </nav>

    <div class="icons">
        <!-- Cart Open Button -->
        <button id="open-cart-btn"><i class='bx bx-cart' style="font-size: 15px;"></i></button>
    </div>

    <?php 
    include 'connection.php';
    $sql = "SELECT itemID, itemName, image, price, description FROM menu ORDER BY itemID";
    $result = mysqli_query($conn, $sql);    
    
    ?>

</header>


<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3>Cappuccino</h3>
                    <p>Espresso coffee topped with frothed hot milk or cream and often flavored with cinnamon</p>
                </div>
                <div class="image">
                    <img src="images/home-img-1.png" alt=""> 
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3>Our Famous Milkshake</h3>
                    <p>Our sweet drink made by blending milk, ice cream, and flavorings 
                    or sweeteners such as butterscotch, caramel sauce, chocolate syrup all put into a thick, sweet, cold mixture.</p>
                </div>
                <div class="image">
                    <img src="images/home-img-2.png" alt="">
                </div>
            </div>

            <div class="swiper-slide slide">
                <div class="content">
                    <span>our special dish</span>
                    <h3>American Breakfast</h3>
                    <p>American breakfast serves two eggs, a side of bacon or sausage, toast or cereal and your choice of juice</p>
                </div>
                <div class="image">
                    <img src="images/home-img-3.jpeg" alt="">
                </div>
            </div>

        </div>
        
    </div>

</section>



<section class="about" id="about">

    <h3 class="sub-heading"> about us </h3>
    <h1 class="heading"> why choose us? </h1>

    <div class="row">

        <div class="image">
            <img src="images/about-img.png" alt="">
        </div>

        <div class="content">
            <h3>best cafe in the country</h3>
            <p>Welcome to Cafelia Coffee, the ultimate destination for food enthusiasts and coffee aficionados. Nestled in the heart of the city, our cafe offers a delightful culinary experience inspired by Western breakfast and lunch dishes, complemented by a wide selection of aromatic coffees and refreshing teas. Our passion for quality ingredients and impeccable service ensures that every visit to Cafelia Coffee is a memorable one. Whether you're starting your day with a delectable breakfast or enjoying a leisurely lunch with friends, our menu is designed to cater to all tastes and preferences. From fluffy pancakes and crispy bacon to hearty sandwiches and vibrant salads, our dishes are crafted with utmost care and attention to detail. And of course, no visit to Cafelia Coffee is complete without indulging in our expertly brewed coffees and soothing teas, each sip offering a moment of pure bliss. Step into our cozy and inviting ambiance, where the aroma of freshly ground coffee fills the air, and let us take you on a culinary journey that will leave you craving for more. At Cafelia Coffee, we believe in creating not just a cafe, but an experience that will awaken your senses and leave you with a smile.</p>
            <div class="icons-container">
                <div class="icons">
                    <i class="fas fa-shipping-fast"></i>
                    <span>free delivery</span>
                </div>
                <div class="icons">
                    <i class="fas fa-dollar-sign"></i>
                    <span>easy payments</span>
                </div>
                <div class="icons">
                    <i class="fas fa-headset"></i>
                    <span>24/7 service</span>
                </div>
            </div>
        </div>

    </div>

</section>


<section class="menu" id="menu">

    <h3 class="sub-heading"> our menu </h3>
    <h1 class="heading"> today's speciality </h1>

    <div class="box-container">

        <?php
        if (isset($_GET['cid'])) {
            $customerID = $_GET['cid'];
            echo '<input type="hidden" id="customerID" value="'.$customerID.'">';
        }
        
        while ($row = mysqli_fetch_assoc($result)) {
        
        ?>

        <div class="box">
            <div class="image">
                <img src="images/<?php echo $row['image'];?>" alt="">
            </div>
            <div class="content">
                <h3><?php echo $row['itemName'];?></h3>
                <p><?php echo $row['description'];?></p>
                <span class="price">$<?php echo $row['price'];?></span>
            </div>
            <a href="#" class="btn atc" onclick="addToCart(<?php echo $row['itemID']?>)">add to cart</a>
        </div>

        <?php 
                }
        ?>


    </div>

</section>









<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <div class="links">
                <span><a href="#home"><i class='bx bx-home-alt'></i></a></span>
                <span><a href="#about"><i class='bx bx-question-mark' ></i></a></span>
                <span><a href="#menu"><i class='bx bx-food-menu' ></i></a></span>
            </div>
        </div>

        <div class="box">
            <h3>contact info</h3>
            <div class="inline">
                <div class="horizontal">
                    <a href="#">+123-456-7890</a>
                    <a href="#">+111-222-3333</a>
                </div>
                <div class="horizontal">
                    <a href="#">cs211100@gmail.com</a>
                    <a href="#">cs211131@gmail.com</a>
                    <a href="#">cs211065@gmail.com</a>
                    <a href="#">cs211133@gmail.com</a>
                </div>
                <a href="#">548 Chestnut St.
                    Burbank, IL 60459,Colorado, US</a>
            </div>
        </div>

        <div class="box follow">
            <h3>follow us</h3>
            <a href="#">facebook</a>
            <a href="#">twitter</a>
            <a href="#">instagram</a>
        </div>

    </div>

</section>


<div class="backdrop"></div>

<div class="shopping-cart" id="shopping-cart">
    <!-- Cart Header -->
    <div class="cart-header">
        <i class='bx bxs-cart'></i>
        <div class="header-title">
            <p style="font-size: 25px; font-family: Arial, Helvetica, sans-serif; font-weight: 1000; color:#fff;">Your Cart</p>
            <span id="items-num">0</span>
        </div>
        <span id="close-btn" class="close-btn">&times;</span>
    </div>
    <div class="cart-content">
        <!-- Cart Items -->
        <div class="cart-items"></div>
                
        <!-- Cart Actions -->
        <div class="cart-actions">
            <div class="subtotal">
                <p>SUBTOTAL:</p>
                <p>$<span id="subtotal-price">0</span></p>
            </div>
            <button onclick="location.href = './checkout.php'">Checkout</button>
        </div>
    </div>
<div>
</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>