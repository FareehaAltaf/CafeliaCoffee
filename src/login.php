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
            <!-- <a href="#" id="login-btn">Login</a>
            <div class="line"></div>
            <a href="#" id="signup-btn">SignUp</a> -->
        </div>

        <!-- <div class="login-form">
            <form action="login.php" method="post">
                <div class="email-login">
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="pswd-login">
                    <input type="password" name="password" placeholder="Password" required>
                </div>
                <div class="btn-login">
                    <input type="submit" name="login" value="Login">
                </div>
            </form>
        </div> -->

        <div class="signup-box">
            <form>

                <input type="email" placeholder="Email" required/>

                <input type="password" placeholder="Password" required/>

                <input type="button" value="Log In" />
            </form>
        </div>
        <p class="para-2">
            Don't have an account? <a href="signup.html">Sign up here</a>
        </p>
    </div>
</section>

<section class="bottom"></section>
<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>