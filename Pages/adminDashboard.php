<!--januda it23365346-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
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
                        <span>Januda Silunaka</span>
                    </div>
                    <div class="userBio">
                        <span>Sky Luxe Admin<br>User Management </span>
                    </div>
                </div>
                <div class="navList">
                    <ul class="linkList">
                        <a href="#">
                            <li> Reports</li>
                        </a>
                        <a href="#">
                            <li> Reservation Management Panel </li>
                        </a>
                        <a href="#">
                            <li> Inventory Management Panel </li>
                        </a>
                        <a href="#">
                            <li> User Management Panel </li>
                        </a>
                        <a href="#">
                            <li> Settings </li>
                        </a>

                        <a href="#">
                            <li style="background-color: #f00;color:#fff"> Log Out </li>
                        </a>
                    </ul>
                </div>
            </div>
        </div>
    <?php include "../config/footer.php" ?>
    </body>
</html>