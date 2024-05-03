<!--Dilshan Yapa S Y C T it23366572-->

<?php 
    include "../config/header.php";
    if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !=0)
    {
        header('Location: ../Pages/signIn.php');
    }
?>

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
                        <li style="background-color: #f00;color:#fff" onclick="if(window.confirm('Do you want to Sign Out?')){document.location = '../Process/signOut-Process.php';}" id="logout"> Sign Out </li>
                    </ul>
                </div>
            </div>
            <div id="content">
            </div>
        </div>
        <?php include "../config/footer.php" ?>
        <script>
            function loadContent(page) {
                var path = ""
                var contentContainer = document.getElementById('content');
                switch(page){
                    case 'myinfo':
                        path = 'Dashboard/userProfileInfo.php';
                        break;
                    case 'myresrv':
                        path = 'Dashboard/userReservationInfo.php';
                        break;
                    case 'loyalty':
                        path = 'Dashboard/loyaltyCust.php';
                        break;
                }
                fetch(path) //-> stream
                    .then(response => response.text()) //response as a para
                    .then(data => {
                        contentContainer.innerHTML= data; //stream -> text
                    })
                    .catch(error => console.error('Error fetching content:', error));
            }

            function checkPwd(){
                        var pwd = document.getElementById('newpwd').value;
                        var cnfmpwd = document.getElementById('cnfmpwd').value;
                        var msg = document.getElementById('pwdStat');
                        var submitbtn = document.getElementById('submitBtn');
                        
                        if(cnfmpwd == '' ) {
                            msg.innerHTML = "";
                            msg.style.color = "";
                            submitbtn.disabled = true;
                        }else if(pwd != cnfmpwd){
                            msg.innerHTML = "Password Doesn't Matched!!";
                            msg.style.color = "red";
                            submitbtn.disabled = true;
                        }else {
                            msg.innerHTML = "Password Matched!!";
                            msg.style.color = "green";
                            submitbtn.disabled = false;
                        }
            }
            loadContent('myresrv');
        </script>
    </body>
</html>