<!--Dilshan Yapa S Y C T it23366572-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
        <link rel="stylesheet" type="text/css" href="../styles/resvANDflight.css">
        <script src="../js/popupWindow.js"></script>
        <link rel="icon" type="image/x-icon" href="../images/Icons/favicon.png">
        <title>Sky Luxe | Admin Dashboard</title>
    </head>
    <body>
        <?php include "../config/header.php" ?>
        <div class="body-content">
            <div class="userDashboardMenu">
                <div class="user">
                    <div class="profilePic">
                        <img src="../images/userProfilePic.jpeg" alt="user">
                    </div>
                    <div class="userName">
                        <span>Dilzhan Yapa</span>
                    </div>
                    <div class="userBio">
                        <span>Lorem ipsum is a placeholder text commonly used in publishing and graphic </span>
                    </div>
                </div>
                <div class="navList">
                    <ul class="linkList">
                        <a href="#">
                            <li> Reservation Management </li>
                        </a>
                        <a href="#">
                            <li> Profile Management </li>
                        </a>
                        <a href="#">
                            <li style="background-color: #f00;color:#fff"> Log Out </li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="dashboardContent">
                <div class="flightManagementContent" id="content">
                    <h1 class="headding">My Reservation</h1>
                    <div class="flightDetailDetailContainer">
                        <h3>Reservations</h3>
                        <div class="flightListWrapper">
                            <div class="flightList">
                                <table>
                                    <tr>
                                        <th>
                                            Destination
                                        </th>
                                        <th>
                                            Air Craft Name
                                        </th>
                                        <th>
                                            Seat No 
                                        </th>
                                        <th>
                                            Departure Time
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                    </tr>
                                    <tr class="FlightID" onclick="openPopup('viewFlight');">
                                        <td>
                                            <label for="FlightID"> ABCDEF </label>
                                        </td>
                                        <td>
                                            <label for="FlightID"> ABCDEF </label>
                                        </td>
                                        <td>
                                            <label for="FlightID"> ABCDEF </label>
                                        </td>
                                        <td>
                                            <label for="FlightID"> ABCDEF </label>
                                        </td>
                                        <td>
                                            <label for="FlightID"> ABCDEF </label>
                                        </td>
                                    </tr>
                                    
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="viewFlight" id="viewFlight">
                        <h3 style="text-align: center;">Reservation Details</h3>
                        <div class="flightDetails">
                            <span>Reservation ID :</span>
                            <span>Flight Name :</span>
                            <span>AirCraft Name :</span>
                            <span>Seat No :</span>
                            <span>Departure Date :</span>
                            <span>Departure Time :</span>
                            <span>Arrival Date :</span>
                            <span>Arrival Time :</span>
                            <span>Departure Airport :</span>
                            <span>Ticket Price :</span>
                        </div>
                        <div class="flightDetailsBtns">
                            <button onclick="" style="background-color: #f00;">Delete</button>
                            <button onclick="closePopup('viewFlight')">OK</button>
                        </div>
                    </div>
                </div>
                <div class="addFlight" id="content">
                    <h1 class="headding">Add Flight</h1>
            </div>
            </div>
        </div>
    <?php include "../config/footer.php" ?>
    </body>
</html>