<!--Dilshan Yapa S Y C T it23366572-->
<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" type="text/css" href="http://localhost/SkyLuxes-AirlineTicketReservationSystem/styles/header.css">
    </head>
    <body>
        <header>
            <a href="http://localhost/SkyLuxes-AirlineTicketReservationSystem/index.php" class="logoLink">
                <img src="http://localhost/SkyLuxes-AirlineTicketReservationSystem/images/logo.png" alt="SkyLuxe Logo" class="headerlogo" id="headerlogo">
            </a>
            <nav>
                <ul class="navigation_links">
                    <li>
                        <a href="http://localhost/SkyLuxes-AirlineTicketReservationSystem/index.php">Home</a>
                    </li>
                    <li>
                        <a href="http://localhost/SkyLuxes-AirlineTicketReservationSystem/Pages/plan.php">Plan & Book</a>
                    </li>
                    <li>
                        <a href="http://localhost/SkyLuxes-AirlineTicketReservationSystem/Pages/services.php">Services</a>
                    </li>
                    <li>
                        <a href="http://localhost/SkyLuxes-AirlineTicketReservationSystem/Pages/AboutUs.php">SkyLuxe</a>
                    </li>
                    <li>
                        <a href="http://localhost/SkyLuxes-AirlineTicketReservationSystem/Pages/contactUs.php">Contact Us</a>
                    </li>
                </ul> 
            </nav>

                <?php 
                    if (!isset($_SESSION["username"])) {
                        echo "<a href=\"http://localhost/SkyLuxes-AirlineTicketReservationSystem/Pages/signIn.php\">
                                    <button>Sign in</button>
                                </a>
                        <a href=\"http://localhost/SkyLuxes-AirlineTicketReservationSystem/Pages/signup.php\">
                                    <button id=\"signupbtn\">Sign up</button>
                                </a>";
                    }elseif ($_SESSION["is_admin"] == 0) {
                        echo "<a href=\"http://localhost/SkyLuxes-AirlineTicketReservationSystem/Pages/userDashboard.php\" id='userbtn'>
                            <img src='http://localhost/SkyLuxes-AirlineTicketReservationSystem/images/Icons/userbtn.png' id='userbtnimg' title='".$_SESSION["fname"]."'>
                        </a>";
                    }elseif ($_SESSION["is_admin"] == 1) {
                        echo "<a href=\"http://localhost/SkyLuxes-AirlineTicketReservationSystem/Pages/adminDashboard.php\" id='adminbtn'> 
                            <img src='http://localhost/SkyLuxes-AirlineTicketReservationSystem/images/Icons/admin.png' id='userbtnimg' title='Admin : ".$_SESSION["fname"]."'>
                            </a>";
                    }
                ?>
        </header>
    </body>
</html>