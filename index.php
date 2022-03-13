<?php include('config/constants.php');  ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sector System</title>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="main.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="SECTOR1.png" alt="sector Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>sector.php">Sector</a>
                    </li>
                    <li>
                        <a href="<?php echo SITEURL; ?>user.php">Customer</a>
                    </li>
                    <li>
                        <a href="#">Logout</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <form action="<?php echo SITEURL;  ?>search-sector.php" method="POST">
                <input type="search" name="search" placeholder="Search for sector.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore System</h2>

            <a href="<?php echo SITEURL; ?>sector.php">
            <div class="box-3 float-container">
                <img src="wi.jpg" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white">Sector</h3>
            </div>
            </a>

            <a href="<?php echo SITEURL; ?>user.php">
            <div class="box-3 float-container">
                <img src="user.jpg" alt="Burger" class="img-responsive img-curve">

                <h3 class="float-text text-white">Customer</h3>
            </div>
            </a>

            <a href="admin/login.php">
            <div class="box-3 float-container">
                <img src="admin.jpg" alt="Momo" class="img-responsive img-curve">

                <h3 class="float-text text-white">Admin</h3>
            </div>
            </a>

            <div class="clearfix"></div>
        </div>
    </section>
    
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>All rights reserved. Designed By <a href="#">Gemzo@net.com</a></p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
</html>