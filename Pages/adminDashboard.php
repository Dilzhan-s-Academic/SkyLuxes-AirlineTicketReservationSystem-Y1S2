<!--januda it23365346-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
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
                        <span>Januda Silunaka</span>
                    </div>
                    <div class="userBio">
                        <span>Sky Luxe Admin<br>User Management </span>
                    </div>
                </div>
                <div class="navList">
                    <ul class="linkList">
                        <li> Reports</li>
                        <li> Reservation Management Panel </li>
                        <li> Inventory Management Panel </li>
                        <li> User Management Panel </li>
                        <li> Settings </li>
                        <li style="background-color: #f00;color:#fff" onclick=" if(window.confirm('Do you want to Sign Out?')){document.location = '../Process/signOut-Process.php';}"> Sign Out </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php include "../config/footer.php" ?>
    </body>
</html>