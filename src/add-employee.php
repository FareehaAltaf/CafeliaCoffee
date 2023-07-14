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
            <div class="heading-text">
                Add a new employee
            </div>
            
            <div class="employee-box">
                <form method="POST" action="
                    <?php

                        include 'connection.php';

                        if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {

                            $FirstName = $_POST['FirstName'];
                            $LastName = $_POST['LastName'];
                            $jobID = $_POST['jobID'];
                            $BirthDate = $_POST['BirthDate'];
                            $cnic = $_POST['cnic'];

                            $sql = "INSERT INTO employee (FirstName, LastName, jobID, BirthDate, HireDate, cnic) VALUES ('$FirstName', '$LastName', '$jobID', '$BirthDate', UTC_TIMESTAMP(), '$cnic')";

                            $query = mysqli_query($conn, $sql);

                        }

                    ?>
                ">
                    <input type="text" placeholder="First Name" name="FirstName">
                    <input type="text" placeholder="Last Name" name="LastName">
                    <div class="job-box">
                        <label for="jobID-select">Job:</label>
                        <select class="jobID-select" name="jobID">
                            <option value="1">Barista</option>
                            <option value="2">Manager</option>
                            <option value="3">Assistant Manager</option>
                            <option value="4">Social Media Manager</option>
                            <option value="5">Baker Chef</option>
                            <option value="6">Coffee Roaster</option>
                            <option value="7">Dishwasher</option>
                            <option value="8">Maintenance Staff</option>
                            <option value="9">Customer Service Representative</option>
                            <option value="10">Server</option>
                        </select>
                    </div>
                    <div class="bday-box">
                        <label>Birth Date:</label>
                        <span><input type="date" style="background-color: transparent;" name="BirthDate" required></span>
                    </div>
                    <input type="text" placeholder="CNIC" title="13 digit long cnic" pattern="[0-9]{13}" name="cnic" required>
                    <input type="submit" value="ADD EMPLOYEE" name="submit">
                </form>

            </div>
            


    </div>
</section>

<section class="bottom"></section>
<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>