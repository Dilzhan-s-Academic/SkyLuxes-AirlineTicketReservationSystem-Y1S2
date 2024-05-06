<!--G.M.M.Dissanayake It23360846-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
        <link rel="icon" type="image/x-icon" href="http://localhost/SkyLuxes-AirlineTicketReservationSystem/images/Icons/favicon.png">
        <style>
            .headding {
                margin-top: 50px;
            }
            .userDetailContainer , .accDetailContainer {
                border: 0.5px solid rgba(83, 83, 172, 0.425);
                border-radius: 5px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.5);
                max-width: 100%;
                padding: 10px 10px 50px 10px;
                background-color: #d8d9d85f;
                margin-bottom: 50px;
            }
            h1,h2 {
                text-align: left;
            }
            .content {
                width: calc(100% - 320px);
            }
            .formElement {
                display: block;
            }
            .formElement > label ,.formElement > input{
                display: inline-block;
                padding: 10px;
            }
            .formElement > label {
                width: 200px;
            }
            .formElement > input {
                box-shadow: 0px 5px 10px 0px rgba(0,0,0,0.2);
                border-radius: 5px;
                margin:10px;
                width: 300px;
                justify-content: center;
            }
            .submitButton {
                display: flex;
                justify-content: flex-end;
                padding: 10px 20px;
            }
            .submitButton > input {
                padding: 10px 30px ;
                background-color: #007bff;
                color: #fff;
                border: none;
                cursor: pointer;
            }
            .submitButton > input:disabled {
                background-color: #278af4d2;
            }
        </style>
        <title>Sky Luxe | Admin Dashboard</title>
    </head>
    <body>
        <?php 
            include "../config/header.php";
            if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !=1)
            {
                header('Location: ../Pages/signIn.php');
            }else{
                include '../Process/getAdminDetails.php';
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
                        <li> Reports</li>
                        <li onclick="window.location.href = 'flightManagement.php';"> Flight Management </li>
                        <li> User Management </li>
                        <li onclick="window.location.href = 'adminDashboard.php';"> Profile Informations </li>
                        <li onclick="window.location.href = 'inquaryManagement.php';"> Inquary Management </li>

                        <li style="background-color: rgba(125, 23, 41, 0.81); color:#fff" onclick=" if(window.confirm('Do you want to Delete Your Account?')){document.location = '../Process/delAcc-Process.php';}"> Delete Account </li>

                        <li style="background-color: #f00;color:#fff" onclick=" if(window.confirm('Do you want to Sign Out?')){document.location = '../Process/signOut-Process.php';}"> Sign Out </li>
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

                <h1 class="headding"> Profile Information</h1>
                <div class="userDetailContainer">
                    <h2>User Details</h2>
                    <div class="udForm">
                        <form action="../Process/updateUserInfo.php" method="POST">
                                    <div class="formElement">
                                        <label>First Name : </label>
                                            <input type="text" id="fname" name="fname" placeholder="First Name" pattern="[A-Z][a-z]+" value="<?php echo $row['FirstName']; ?>" required>
                                    </div>
                                    <div class="formElement">
                                        <label>Last Name :</label>
                                            <input type="text" id="lname" name="lname" placeholder="Last Name" pattern="[A-Z][a-z]+" value="<?php echo $row['LastName']; ?>" required>
                                    </div>
                                    <div class="formElement">
                                        <label>Address :</label>
                                            <input  type="text" id="address" name="address" placeholder="Address" value="<?php echo $row['Address']; ?>" required>
                                    </div>
                                    <div class="formElement">
                                        <label>Mobile No :</label>
                                            <input type="phone" id="mobile" name="mobile" placeholder="Mobile Number" pattern="[\+][0-9]{10,}" value="<?php echo $row['Mobile']; ?>" required>
                                    </div>
                                    <div class="formElement">
                                        <label>E-mail :</label>
                                            <input type="email" id="mail" name="mail" placeholder="E-mail" value="<?php echo $row['Email']; ?>" required>
                                    </div>
                                    
                                    <div class="submitButton">
                                        <input type="submit" value="Save" name="Save">
                                    </div>
                        </form>
                    </div>
                </div>
                <div class="accDetailContainer">
                    <h2>Account Details</h2>
                    <div class="adForm">
                        <form action="../Process/updateAccInfo.php" method="POST">
                            <div class="formElement">
                                <label>Username : </label>
                                    <input type="text" id="username" value="<?php echo $row['Username']; ?>" disabled>
                            </div>
                            <div class="formElement">
                                <label>New Password :</label>
                                    <input type="password" id="newpwd" name="newpwd" placeholder="New Password" oninput="checkPwd()" pattern="[a-z A-Z 0-9 \. @ % #]{8,}{8,}"  required>
                            </div>
                            <div class="formElement">
                                <label>Confirm Password :</label>
                                    <input  type="password" id="cnfmpwd" name="cnfmpwd" placeholder="Confirm Password" oninput="checkPwd()" pattern="[a-z A-Z 0-9 \. @ % #]{8,}" required>
                                    <span id="pwdStat"></span>
                            </div>                              
                            <div class="submitButton">
                                <input type="submit" id="submitBtn" value="Save" name="Save" disabled>
                            </div>
                        </form>
                    </div>
                </div>
                </div>
        </div>
    <?php include "../config/footer.php" ?>
    
    <script src="../js/checkPwd.js"></script>
    </body>
</html>