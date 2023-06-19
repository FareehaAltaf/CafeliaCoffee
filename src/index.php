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

    <?php 
    
        // include functions.php file here
        // include('functions.php');

        // // if user is not logged in, they cannot access this page
        // if (!isset($_SESSION['username'])) {
        //     $_SESSION['msg'] = "You must log in first";
        //     header('location: login.php');
        // }

        // // logout user
        // if (isset($_GET['logout'])) {
        //     session_destroy();
        //     unset($_SESSION['username']);
        //     header("location: login.php");
        // }
        // function getCartItems() {
        //     include 'connection.php';
        //     $query = "SELECT itemID, itemName, price, image FROM menu WHERE itemID IN (1,2,3)";
        //     $cart_result = mysqli_query($conn, $query);
        //     return $cart_result;
        // }
    
    
    
    
    ?>


</head>
<body>
<!-- Before we start here are impt HTML elements we'll use:
    The <section> element can be used to define a part of a website with related content.

    The <article> element can be used to define an individual piece of content.
    
    The <header> element can be used to define a header (in a document, a section, or an article).
    
    The <footer> element can be used to define a footer (in a document, a section, or an article).
    
    The <nav> element can be used to define a container of navigation links. -->
<!-- header section starts-->

<header>

    <a href="" class="logo"><i class="fas fa-utensils">Cafelia</i></a>

    <nav class="navbar">
        <a class="active" href="#home">home</a> <!--"active":Highlight the active (pressed) button -->
        <!-- <a href="#dishes">dishes</a>             # will jump to top of the page, where #home will jump to an section, div etcc.. with the id home. -->
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <!-- <a href="#order">order</a> -->
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <!-- <i class="fas fa-search" id="search-icon"></i> -->
        <!-- <i class='bx bx-search' id="search-icon"></i> -->
        <!-- <a href="#" class="fas fa-heart"></a> kept href="#" as we have made pur website not responsive -->
        <!-- <a href="#" class="fas fa-shopping-cart"></a> -->
        <!-- Cart Open Button -->
        <button id="open-cart-btn"><i class='bx bx-cart' style="font-size: 15px;"></i></button>
        <!-- <button class="hamburger"><i class='bx bx-x'></i></button> -->
    </div>

    <?php 
    include 'connection.php';
    $sql = "SELECT itemID, itemName, image, price, description FROM menu ORDER BY itemID";
    $result = mysqli_query($conn, $sql);    
    
    ?>

</header>

<!-- header section ends-->
<!-- home section starts  -->

<section class="home" id="home">

    <div class="swiper-container home-slider">

        <div class="swiper-wrapper wrapper">

            <div class="swiper-slide slide">
                <div class="content">
                    <!-- <span> tag is used to color a part of a text and it is used to group inline-elements in a document &
                        add a hook to a part of a text or a part of a document.-->
                    <span>our special dish</span>
                    <h3>Cappuccino</h3>
                    <p>Espresso coffee topped with frothed hot milk or cream and often flavored with cinnamon</p>
                    <!-- <a href="#" class="main-btn">order now</a> -->
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
                    <!-- <a href="#" class="main-btn">order now</a> -->
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
                    <!-- <a href="#" class="main-btn">order now</a> -->
                </div>
                <div class="image">
                    <img src="images/home-img-3.jpeg" alt="">
                </div>
            </div>

        </div>

        <div class="swiper-pagination">
            <!-- pagination -->
        </div>
        
    </div>

</section>

<!-- home section ends -->
<!-- 


1. Use php while loop to render the items
2. Use php to store items in a array called "cart"
3. use this array in the displaying of cart items in cart
4. use php to calculate the total price of the cart
5. use php to calculate the total number of items in the cart

 -->
<!-- dishes section starts  -->

<!-- <section class="dishes" id="dishes">

    <h3 class="sub-heading"> Try Our most popular !</h3>
    <h1 class="heading"> popular dishes </h1>

    <div class="box-container">

    </div> 
        

</section> -->

<!-- dishes section ends -->

<!-- about section starts  -->

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
            <!-- <p>Cafelia has maintained exceptionally high standards in their service 
                and products, and stays true in their newest addition.
                 Cafelia looks forward to serving you!♡</p> -->
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
            <!-- <a href="#" class="main-btn">learn more</a> -->
        </div>

    </div>

</section>

<!-- about section ends -->

<!-- menu section starts  -->

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
                <!-- <a href="#" class="fas fa-heart"></a> -->
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








<!-- menu section ends -->
<!-- order section starts  -->
<!-- 
<section class="order" id="order">

    <h3 class="sub-heading"> order now </h3>
    <h1 class="heading"> free and fast </h1>

    <form action="#" class="order-form"> 

        <div class="inputBox">
            <div class="input">
                <span>your name</span>
                <input type="text" placeholder="enter your name">
            </div>
            <div class="input">
                <span>your number</span>
                <input type="number" placeholder="enter your number">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your order</span>
                <input type="text" placeholder="enter food name">
            </div>
            <div class="input">
                <span>additional food</span>
                <input type="text" placeholder="extra with food">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>how much</span>
                <input type="number" placeholder="how many orders">
            </div>
            <div class="input">
                <span>date and time</span>
                <input type="datetime-local">
            </div>
        </div>
        <div class="inputBox">
            <div class="input">
                <span>your address</span>
                <textarea name="" placeholder="enter your address" id="" cols="30" rows="10"></textarea>
            </div>
            <div class="input">
                <span>your message</span>
                <textarea name="" placeholder="enter your message" id="" cols="30" rows="10"></textarea>
            </div>
        </div>

        <input type="submit" value="order now" class="btn2">

    </form>

</section> -->

<!-- order section ends -->

<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <div class="links">
                <span><a href="#home"><i class='bx bx-home-alt'></i></a></span>
                <!-- <span><a href="#dishes"><i class='bx bx-dish' ></i></a></span> -->
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
<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->



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
        <div class="cart-items">
                




        </div>
                
        <!-- Cart Actions -->
        <div class="cart-actions">
            <div class="subtotal">
                <p>SUBTOTAL:</p>
                <p>$<span id="subtotal-price">0</span></p>
            </div>
            <button onclick="location.href = './checkout.php'">Checkout</button>
            <!-- <button>Checkout</button> -->
        </div>
    </div>
<div>
    <!-- <button class="hamburger">
        
        
    </button> -->
</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>