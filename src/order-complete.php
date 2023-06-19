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


<header>

    <a href="" class="logo"><i class="fas fa-utensils">Cafelia</i></a>


</header>


<section class="top">
    <div class="login-heading">
        <h2>Order <span>Complete!</span></h2>
    </div>
</section>



<section class="checkout">
    <div class="outer" style="align-items:center; justify-content:center;">
        <div class="heading-text">
            <h3>
            Thankyou for your order!<br>
            Your items will be delivered soon! <br>
            </h3>
            <h3> Order ID: <span class="order-id"><?php 
            
            if(isset($_GET['oid'])){
                echo $_GET['oid'];
            }
            
            ?></span> </h3>
        </div>
        <div class="items-list" > </div>
        
        


       

    </div>
</section>

<section class="bottom"></section>
<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>