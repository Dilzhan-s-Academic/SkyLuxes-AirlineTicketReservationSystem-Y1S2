<!--Dilshan Yapa S Y C T it23366572-->

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" type = "text/css" href = "../styles/signOperations.css">
    <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
    <link rel="icon" type="image/x-icon" href="../images/Icons/favicon.png">
    <title>Sky Luxe | Sign Up</title>
    
</head>
<body>
    
    <?php 
        include "../config/header.php";
        if(isset($_SESSION['username']))
        {   
            if($_SESSION['is_admin'] == 0)
            {
                header('Location: ../Pages/userDashboard.php');
            } elseif($_SESSION['is_admin']== 1){
                header('Location: ../Pages/adminDashboard.php');
            }
        }
    ?>


    <div class="body-content">
        <div class="image">
            <img src="../images/others/signUp.png" alt="signUp image">
        </div>
        <div class="form">
            <h2>Sign Up</h2>
            <form method="post" action="../Process/signUp-Process.php">
                <label>First Name : </label>
                    <input type="text" id="fname" name="fname" placeholder="First Name" pattern="[A-Z][a-z]+" required>
                <label>Last Name :</label>
                    <input type="text" id="lname" name="lname" placeholder="Last Name" pattern="[A-Z][a-z]+" required>
                <label>Address :</label>
                    <input  type="text" id="address" name="address" placeholder="Address" required>
                <label>Mobile No :</label>
                    <input type="phone" id="mobile" name="mobile" placeholder="Mobile Number" pattern="[\+][0-9]{10,}" required>
                <label>E-mail :</label>
                    <input type="email" id="mail" name="mail" placeholder="E-mail" required>

                <label>Username : </label>
                    <input type="text" id="username" name="username" placeholder="Username" pattern="[A-Z a-z 0-9]{4,12}" required>
                <label>New Password :</label>
                    <input type="password" id="newpwd" name="newpwd" placeholder="New Password" oninput="checkPwd()" pattern="[a-z A-Z 0-9 \. @ % #]{8,}" required>
                <label>Confirm Password :</label>
                    <input  type="password" id="cnfmpwd" name="cnfmpwd" placeholder="Confirm Password" oninput="checkPwd()" pattern="[a-z A-Z 0-9 \. @ % #]{8,}" required>
                    <span id="pwdStat"></span>
                    <span id="err"><?php if(isset($_GET['err'])){ echo "<br/>"."&#9888; ".$_GET['err'];} ?></span>

                <div class="submitButton">
                    <a href="signIn.php">Do you already have an Account ? </a>
                    <input type="submit" value="Sign Up" name="SignUp">
                </div>
            </form>
        </div>
    </div>
    <script>
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
    </script>
    <?php include "../config/footer.php" ?>
</body>
</html>
