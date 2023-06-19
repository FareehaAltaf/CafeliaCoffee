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
<body onload="checkout();">

<header>

    <a href="" class="logo"><i class="fas fa-utensils">Cafelia</i></a>

    

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
        <div class="items-list" > </div>
        

    


        <!-- Subtotal and Total -->
        <div class="final">
            <!-- Order Button -->

            <div class="order-btn">
                <a href="#" onclick="order();">Order Now</a>
            </div>

            <div class="totals">
                <div class="total">
                    <p>Total</p>
                    <strong>$ <span class="total-price">00.00</span></strong>
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