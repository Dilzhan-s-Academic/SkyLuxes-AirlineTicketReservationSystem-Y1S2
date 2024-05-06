<!--Dilshan Yapa S Y C T it23366572-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
        <script src="../js/popupWindow.js"></script>
        <link rel="icon" type="image/x-icon" href="../images/Icons/favicon.png">
        <title>Sky Luxe | User Dashboard</title>
    </head>
    <body>

    
        <?php 
            include "../config/header.php";
            if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !=0)
            {
                header('Location: ../Pages/signIn.php');
            }
        ?>


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
                        <li onclick="loadContent('myresrv');"> My Reservations </li>
                        <li onclick="loadContent('myinfo');"> Profile Information </li>
                        <li onclick="loadContent('loyalty');"> Loyalty Customer </li>
                        <li onclick="loadContent('inquary');"> My Inquaries </li>
                        <li style="background-color: rgba(125, 23, 41, 0.81); color:#fff" onclick=" if(window.confirm('Do you want to Delete Your Account?')){document.location = '../Process/delAcc-Process.php';}"> Delete Account </li>
                        <li style="background-color: #f00;color:#fff" onclick="if(window.confirm('Do you want to Sign Out?')){document.location = '../Process/signOut-Process.php';}" id="logout"> Sign Out </li>
                    </ul>
                </div>
            </div>
            
            <div class="content">
                <?php
                    if(isset($_GET['err'])){
                        echo "
                        <div class=\"err\">
                            <span>&#9888; ". $_GET['err'] .".</span>
                        </div>
                            ";
                    }
                ?>
                <div id="content"></div>
            </div>
        </div>
        <?php include "../config/footer.php" ?>
        <script src="../js/dynamicPageLoader.js"> </script>
        <script src="../js/checkPwd.js"></script>
    </body>
</html>