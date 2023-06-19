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

    function addCustomer () {

        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ph_no = $_POST['ph_no'];
        $address = $_POST['address'];
        
        $sql = "INSERT INTO customers (name, ph_no, address, email, password) VALUES ('$name', '$ph_no', '$address', '$email', '$password')";
        // ask miss that the data isnt entering the database
        //$query = mysqli_query($conn, $sql);
        Global $result;
        $result = sendQuery($sql);

    }
    
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

</header>

<section class="top">
    <div class="login-heading">
        <h2>Welcome to <span>Cafelia</span> </h2>
    </div>
</section>

<section class="main">
    <div class="outer">
       

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

        <div class="login-or-signup">
            <div class="login" onclick="window.location.href = 'login.php';">Login</div>
            <div class="signup" onclick="window.location.href = 'signup.php';">Signup</div>
        </div>

    </div>
</section>

<section class="bottom">
    <div class="khali"></div>
</section>
<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>