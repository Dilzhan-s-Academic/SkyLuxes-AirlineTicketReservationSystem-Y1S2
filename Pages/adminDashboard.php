
<?php 
    include "../config/header.php";
    if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !=1)
    {
        header('Location: ../Pages/signIn.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
        <link rel="icon" type="image/x-icon" href="../images/Icons/favicon.png">
        <title>Sky Luxe | Admin Dashboard</title>
    </head>
    <body>
        
        <div class="body-content">
            <div class="userDashboardMenu">
                <div class="user">
                    <div class="profilePic">
                        <img src="../images/userProfilePic.jpeg" alt="user">
                    </div>
                    <div class="userName">
                        <span><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></span>
                    </div>
                </div>
                <div class="navList">
                    <ul class="linkList">
                        <li> Reports</li>
                        <li> Reservation Management </li>
                        <li onclick="window.location.href = 'flightManagement.php';"> Flight Management </li>
                        <li> User Management </li>
                        <li> Profile Informations </li>
                        <li> Inquary Management </li>

                        <li style="background-color: rgba(125, 23, 41, 0.81); color:#fff" onclick=" if(window.confirm('Do you want to Delete Your Account?')){document.location = '../Process/signOut-Process.php';}"> Delete Account </li>

                        <li style="background-color: #f00;color:#fff" onclick=" if(window.confirm('Do you want to Sign Out?')){document.location = '../Process/signOut-Process.php';}"> Sign Out </li>
                    </ul>
                </div>
            </div>
        </div>
    <?php include "../config/footer.php" ?>
    </body>
</html>