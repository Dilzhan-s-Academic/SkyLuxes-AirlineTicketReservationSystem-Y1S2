<!--BJS Perera IT23365346-->
<!--admin dashboard create -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Management</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../styles/usermanagement.css">
    <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
    <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
    <link rel="icon" type="image/x-icon" href="../images/Icons/favicon.png">
    <title>Sky Luxe | Admin Dashboard</title>


<body>
    <?php include "../config/header.php" ?>


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

                        <li style="background-color: rgba(125, 23, 41, 0.81); color:#fff" onclick=" if(window.confirm('Do you want to Delete Your Account?')){document.location = '../Process/signOut-Process.php';}"> Delete Account </li>

                        <li style="background-color: #f00;color:#fff" onclick=" if(window.confirm('Do you want to Sign Out?')){document.location = '../Process/signOut-Process.php';}"> Sign Out </li>
                    </ul>
                </div>
            </div>

    
    <div class="content">
    <div class="basics">
        <div class="tusers">
            <h3>Total Users<br><span>100</span></h3>
        </div>
        <div class="susers">
            <h3>Staff Users<br><span>20</span></h3>
        </div>
        <div class="members">
            <h3>Members<br><span>80</span></h3>
        </div>
        <div class="iusers">
            <h3>Inactive Users<br><span>0</span></h3>
        </div>
    </div>

    

    <div class="form-container">
        <h2>Add User</h2>
        <form action="codej.php" method="POST">
            <div class="form-group">
                <label for="uname">Username</label>
                <input type="text" id="uname" name="uname" required>
            </div>
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="fname" required>
            </div>
            <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lname" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <textarea id="address" name="address" required></textarea>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="number" id="phone" name="phone" required>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="is_admin">Is Admin</label>
                <input type="number" id="is_admin" name="is_admin" required>
            </div>
            <div class="form-group">
                <button type="submit" name="save_btn">Update</button>
            </div>
        </form>
    </div>

    <div class="userlistJ">
        <div class="userList">
            <h2>User List</h2>
            <table class="table table-hover table-dark">
                <thead>
                    <tr>

                        <th scope="col">FirstName</th>
                        <th scope="col">LastName</th>
                        <th scope="col">UserName</th>
                        <th scope="col">UserType</th>
                        <th scope="col"> <div class="addmem" onclick="toggleForm()"><button>Add Members</button></div>
                        </th>
                        

                    </tr>
                </thead>
                <tbody>
                    <?php
                    error_reporting(E_ALL);
                    ini_set('display_errors', 1);

                    include "../config/janudadbConnect.php";

                    $user_get = "SELECT username,firstname,lastname,is_admin FROM user";
                    $result = mysqli_query($conn, $user_get);

                    if (mysqli_num_rows($result) > 0) {

                        foreach ($result as $userd) {

                        ?>
                            <tr>
                                <td><?php echo $userd['username']; ?></td>
                                <td><?php echo $userd['firstname']; ?></td>
                                <td><?php echo $userd['lastname']; ?></td>
                                <td><?php
                                    if ($userd['is_admin'] == 1) {
                                        echo "Admin";
                                    } else {
                                        echo "User";
                                    };
                                    ?>
                                </td>
                                <td>
                                    <a href="update.php?username=<?php echo $userd['username']; ?>"><div class="updateBtn"><button>Update</button></div></a>
                                </td>
                                <td>
                                    <form action="codej.php" method="post">
                                    <input type = "hidden" name="username" value ="<?php echo $userd['username']; ?>">
                                    <button type="submit" name="removeBtn" class="removeBtn">Remove</button>
                                    </form>
                                </td>
                            </tr>
                        <?php
                        }
                    } else {
                        ?>
                        <tr>
                            <td colspan="6">No Users</td>
                        </tr>
                    <?php
                    }

                    ?>
                </tbody>
            </table>
        </div>
    </div>
        
        </div>
    </div>

    <?php

    ?>
    <script>
        function toggleForm() {
            var form = document.querySelector(".form-container");
            form.style.display = form.style.display === "none" ? "block" : "none";
        }
    </script>

    <?php include "../config/footer.php" ?>
</body>

</html>