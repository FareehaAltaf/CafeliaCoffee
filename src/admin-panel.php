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
    <div class="login-heading">
        <h2><span>Admin Panel</span></h2>
    </div>
</section>

<section class="info">
    <!-- 
        1. Add a new Employee √
        2. View all Employees  √
        3. View current Orders
        4. View all Customers
        5. View all Items in Menu
        6. Remove Employee √
        7. Edit Employee Job (optional)
     -->

     <div class="outer">
        <div class="heading-text">
            Available actions
        </div>
        <div class="choose">
            <div>
                <a href="add-employee.php">Add a new employee</a>
            </div>
            <div>
                <a href="show-employees.php">View all employees</a>
            </div>
            <div>
                <a href="view-orders.php">View current orders</a>
            </div>
            <div>
                <a href="view-customers.php">View all customers</a>
            </div>
            <div>
                <a href="view-menu.php">View all items in menu</a>
            </div>
            <!-- <div class="remove-employee">
                <a href="remove-employee.php">Remove an employee</a>
            </div>
            <div class="edit-job">
                <a href="edit-job.php">Edit employee job</a>
            </div> -->

        </div>
     </div>



</section>

<section class="bottom"></section>
<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>