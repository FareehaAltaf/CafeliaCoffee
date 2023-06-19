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
    
    
    function addCustomer () {
        
        include 'connection.php';
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $ph_no = $_POST['ph_no'];
        $address = $_POST['address'];
        
        $sql = "INSERT INTO customers (name, ph_no, address, email, password) VALUES ('$name', '$ph_no', '$address', '$email', '$password')";

        Global $result;

        $result = mysqli_query($conn, $sql);

    }
    
    ?>


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
            <p>Sign Up</p>
        </div>

        <div class="signup-box">
            <form method="POST" action="
                <?php
                    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
                        addCustomer();
                        header("Location: ./login.php");
                    }
                        
                ?>             
            ">

                <input type="text" placeholder="Name" name="name" required/>

                <input type="email" placeholder="Email" name="email" required/>

                <input type="password" placeholder="Password" name="password" required/>

                <input type="number" placeholder="Phone No." name="ph_no" required/>
                
                <input type="text" placeholder="Address" name="address" required />

                <input type="submit" value="Sign Up" name="submit"/>
            </form>
            <p>
              By clicking the Sign Up button,you agree to our Terms and Conditions and Policy Privacy
            </p>
        </div>
        <p class="para-2">
            Already have an account? <a href="./login.php">Login here</a>
        </p>
    </div>
</section>

<section class="bottom"></section>
<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>