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
        <a href="#dishes">dishes</a>            <!--  # will jump to top of the page, where #home will jump to an section, div etcc.. with the id home. -->
        <a href="#about">about</a>
        <a href="#menu">menu</a>
        <!-- <a href="#order">order</a> -->
    </nav>

    <div class="icons">
        <i class="fas fa-bars" id="menu-bars"></i>
        <!-- <i class="fas fa-search" id="search-icon"></i> -->
        <i class='bx bx-search' id="search-icon"></i>
        <a href="#" class="fas fa-heart"></a> <!-- kept href="#" as we have made pur website not responsive -->
        <!-- <a href="#" class="fas fa-shopping-cart"></a> -->
        <!-- Cart Open Button -->
        <button id="open-cart-btn"><i class='bx bx-cart' style="font-size: 15px;"></i></button>
        <!-- <button class="hamburger"><i class='bx bx-x'></i></button> -->
    </div>

</header>

<section class="top">
    <div class="login-heading">
        <h2>Check<span>out</span></h2>
    </div>
</section>

<section class="checkout">
    <div class="outer">
        <div class="heading-text">
            <h3>Your Items</h3>
        </div>
        <!-- Ek Item -->
        <div class="item">
            <div class="remove-item">
                <span>&times;</span>
            </div>
            <div class="checkout-item-img"> 
                <img src="images/dish-1.jpeg" style="width: 100%;" alt="">
            </div>
            <div class="checkout-item-details">
                <p>Item Name</p>
                <strong>$Price</strong>
                <div class="qty">
                    <span>-</span>
                    <strong>qty</strong>
                    <span >+</span>
                </div>
            </div>
        </div>
        <!-- Ek Item -->
        <div class="item">
            <div class="remove-item">
                <span>&times;</span>
            </div>
            <div class="checkout-item-img"> 
                <img src="images/dish-1.jpeg" style="width: 100%;" alt="">
            </div>
            <div class="checkout-item-details">
                <p>Item Name</p>
                <strong>$Price</strong>
                <div class="qty">
                    <span>-</span>
                    <strong>qty</strong>
                    <span >+</span>
                </div>
            </div>
        </div>
        <!-- Ek Item -->
        <div class="item">
            <div class="remove-item">
                <span>&times;</span>
            </div>
            <div class="checkout-item-img"> 
                <img src="images/dish-1.jpeg" style="width: 100%;" alt="">
            </div>
            <div class="checkout-item-details">
                <p>Item Name</p>
                <strong>$Price</strong>
                <div class="qty">
                    <span>-</span>
                    <strong>qty</strong>
                    <span >+</span>
                </div>
            </div>
        </div>
        <!-- Ek Item -->
        <div class="item">
            <div class="remove-item">
                <span>&times;</span>
            </div>
            <div class="checkout-item-img"> 
                <img src="images/dish-1.jpeg" style="width: 100%;" alt="">
            </div>
            <div class="checkout-item-details">
                <p>Item Name</p>
                <strong>$Price</strong>
                <div class="qty">
                    <span>-</span>
                    <strong>qty</strong>
                    <span >+</span>
                </div>
            </div>
        </div>
        <!-- Ek Item -->
        <div class="item">
            <div class="remove-item">
                <span>&times;</span>
            </div>
            <div class="checkout-item-img"> 
                <img src="images/dish-1.jpeg" style="width: 100%;" alt="">
            </div>
            <div class="checkout-item-details">
                <p>Item Name</p>
                <strong>$Price</strong>
                <div class="qty">
                    <span>-</span>
                    <strong>qty</strong>
                    <span >+</span>
                </div>
            </div>
        </div>
        <!-- Ek Item -->
        <div class="item">
            <div class="remove-item">
                <span>&times;</span>
            </div>
            <div class="checkout-item-img"> 
                <img src="images/dish-1.jpeg" style="width: 100%;" alt="">
            </div>
            <div class="checkout-item-details">
                <p>Item Name</p>
                <strong>$Price</strong>
                <div class="qty">
                    <span>-</span>
                    <strong>qty</strong>
                    <span >+</span>
                </div>
            </div>
        </div>


        <!-- Subtotal and Total -->
        <div class="final">
            <!-- Order Button -->

            <div class="order-btn">
                <a href="#">Order Now</a>
            </div>

            <div class="totals">
                <div class="subtotal">
                    <p>Subtotal</p>
                    <strong>$ Price</strong>
                </div>
                <div class="total">
                    <p>Total</p>
                    <strong>$ Price</strong>
                </div>
            </div>

        </div>

    </div>
</section>

<section class="bottom"></section>
<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>