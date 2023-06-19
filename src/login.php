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
        <h2>Welcome to <span>Cafelia</span> </h2>
    </div>
</section>

<section class="forms">
    <div class="outer">
        <div class="head">
            <p>Log In</p>
        </div>

        <div class="signup-box">
            
            <form method="POST" action="login-process.php">

                <input type="email" placeholder="Email" name="email" required/>

                <input type="password" placeholder="Password" name="password" required/>

                <input type="submit" value="Log In" name="login"/>

                
                
            </form>
        </div>
        <p class="para-2">
            Don't have an account? <a href="signup.php">Sign up here</a>
        </p>
    </div>
</section>

<section class="bottom"></section>


</body>
</html>