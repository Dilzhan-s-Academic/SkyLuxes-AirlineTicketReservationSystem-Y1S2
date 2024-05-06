<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
    <title>User Management</title>
    <link rel="stylesheet" type="text/css" href="../styles/usermanagement.css">

</head>
<body>
    <?php include "../config/header.php" ?>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    include "../config/janudadbConnect.php";

    $username = $_GET['username'];

    $user_get = "SELECT username,firstname,lastname,address,mobile,email,password,is_admin FROM user WHERE username = '$username'";
    $result = mysqli_query($conn, $user_get);

    if ($result) {

        foreach ($result as $userd) {
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
                        <li onclick="window.location.href = 'adminReport.php';"> Reports</li>
                        <li onclick="window.location.href = 'flightManagement.php';"> Flight Management </li>
                        <li onclick="window.location.href = 'usermanagementj.php';"> User Management </li>
                        <li onclick="window.location.href = 'adminDashboard.php';"> Profile Informations </li>
                        <li onclick="window.location.href = 'inquaryManagement.php';"> Inquary Management </li>

                        <li style="background-color: rgba(125, 23, 41, 0.81); color:#fff" onclick=" if(window.confirm('Do you want to Delete Your Account?')){document.location = '../Process/delAcc-Process.php';}"> Delete Account </li>

                        <li style="background-color: #f00;color:#fff" onclick=" if(window.confirm('Do you want to Sign Out?')){document.location = '../Process/signOut-Process.php';}"> Sign Out </li>
                    </ul>
                </div>
            </div>
            <div class="content">
            <div class="form-container" style="display: block;">
                <h2>Add User</h2>
                <form action="codej.php" method="POST">
                    <div class="form-group">
                        <label for="uname">Username</label>
                        <input type="text" id="uname" name="uname" value="<?php echo $userd['username']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="fname">First Name</label>
                        <input type="text" id="fname" name="fname" value="<?php echo $userd['firstname']; ?>"> 
                    </div>
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" id="lname" name="lname" value="<?php echo $userd['lastname']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <textarea id="address" name="address"><?php echo $userd['address']; ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email"  value="<?php echo $userd['email']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="number" id="phone" name="phone" value="<?php echo $userd['mobile']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" id="password" name="password" value="<?php echo $userd['password']; ?>" >
                    </div>
                    <div class="form-group">
                        <label for="is_admin">Is Admin</label>
                        <input type="number" id="is_admin" name="is_admin" value="<?php echo $userd['is_admin']; ?>">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="updateBtn">Update</button>
                    </div>
                </form>
            </div>
            </div>
    </div>

    <?php

        }
    } else {
        echo "No User by that username !";
    }
    ?>


    <?php include "../config/footer.php" ?>
</body>

</html>