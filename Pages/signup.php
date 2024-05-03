
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign Up</title>
    <link rel = "stylesheet" type = "text/css" href = "../styles/signup.css">
    
</head>
<body> 

    <?php include "../config/header.php" ?>
    <h1 class="abcd">Join SkyLuxe Airline</h1></h1>

<div class="terms-box">
    <div class="terms-text"> 
        <div class="form">
        <h2 class="wer">Sign Up</h2>
        <form action = "submitRegistration.php" method = "POST" onsubmit = "return checkPassword()">
     
            First Name: <br/>
            <input type = "text" name = "firstName" placeholder = "First Name" required><br/><br/>
            
            Last Name: <br/>
            <input type = "text" name = "lastName" placeholder = "Last Name" required><br/><br/>
            
            Gender:<br/>
            <input type = "radio" value = "Male" name = "gender">Male
            <input type = "radio" value = "Female" name = "gender" checked>Female<br/><br/>
            
            Mobile Number:<br/>
            <input type = "phone" name = "mobile" placeholder = "0777777777" pattern = "[0-9]{10}" required><br/><br/>
            
            e-mail:<br/>
            <input type = "email" name = "email" placeholder = "abc@gmail.com" pattern = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}" required><br/><br/>
            
            Address:<br/>
            <textarea name = "address" rows = "8" cols = "50" required></textarea><br/><br/>
            
            Birthday:<br/>
            <input type = "date" name = "day" required><br/><br/>
            
            Password:<br/>
            <input type = "password" id = "pwd" pattern = "(?=.+\d)(?=.+[a-z])(?=.+[A-Z]).{5,10}" required><br/><br/>
            
            Re-Enter Password:<br/>
            <input type = "password" id = "cnfrmpwd" required><br/><br/>
            
            <br>
            <input type = "checkbox" class = "inputStyle" id = "checkbox" onclick = "enableButton()">Accept Privancy Policy and Terms<br/><br/>
            
            <h4>I agree to the <span>Tearms of Services</span> and I read the Privacy Policy notice </h4>
    <div class="buttons">
        <button class="red_button">Sign In</button>
    </div>
            <!--<center>
            <input type = "submit" value = "submit" id = "submitBtn" disabled>
            </center>-->
        </form>
        </div>
       </div>
    
    
    

</div>
<?php include "../config/footer.php" ?>


</body>
</html>
