
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel = "stylesheet" type = "text/css" href = "../styles/signOperations.css">
    <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
    <link rel="icon" type="image/x-icon" href="../images/Icons/favicon.png">
    <title>Sky Luxe | Sign In</title>
    
</head>
<body> 
    <?php include "../config/header.php" ?>
    <div class="body-content">
        <div class="image">
            <img src="../images/others/signIn.png" alt="signUp image">
        </div>
        <div class="form">
            <h2>Sign In</h2>
            <form method="post" action="">
                <label>Username : </label>
                    <input type="text" id="username" name="username" placeholder="Username" pattern="[A-Z a-z 0-9]{4,8}" required>
                <label>Password :</label>
                    <input type="password" id="pwd" name="pwd" placeholder="Password" pattern="[a-z A-Z 0-9 \. @ % #]{8,}{8,}" required>
                <div class="submitButton">
                    <a href="signIn.php">Do you already have an Account ? </a>
                    <input type="submit" value="Sign In" name="SignIn">
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
