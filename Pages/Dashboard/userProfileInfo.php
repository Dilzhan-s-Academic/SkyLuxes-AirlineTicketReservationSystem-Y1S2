<!--Dilshan Yapa S Y C T it23366572-->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <style>
            .headding {
                margin-top: 50px;
            }
            .userDetailContainer , .accDetailContainer {
                border: 0.5px solid rgba(83, 83, 172, 0.425);
                border-radius: 5px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.5);
                max-width: 100%;
                padding: 30px 20px 30px 20px;
                background-color: #d8d9d85f;
                margin-top:30px;
            }
            h1,h2 {
                text-align: left;
            }
            h1 {
                
                margin-bottom: -10px;
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
    </head>
        <body>
            <h1 class="headding"> Profile Information</h1>
            <div class="userDetailContainer">
                <h2>User Details</h2>
                <div class="udForm">
                    <form action="#">
                                <div class="formElement">
                                    <label>First Name : </label>
                                        <input type="text" id="fname" name="fname" placeholder="First Name" required>
                                </div>
                                <div class="formElement">
                                    <label>Last Name :</label>
                                        <input type="text" id="lname" name="lname" placeholder="Last Name" required>
                                </div>
                                <div class="formElement">
                                    <label>Address :</label>
                                        <input  type="text" id="address" name="address" placeholder="Address" required>
                                </div>
                                <div class="formElement">
                                    <label>Mobile No :</label>
                                        <input type="tel" id="mobile" name="mobile" placeholder="Mobile Number" required>
                                </div>
                                <div class="formElement">
                                    <label>E-mail :</label>
                                        <input type="email" id="mail" name="mail" placeholder="E-mail" required>
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
                    <form action="#">
                                <div class="formElement">
                                    <label>Username : </label>
                                        <input type="text" id="username" name="username" placeholder="Username" required>
                                </div>
                                <div class="formElement">
                                    <label>New Password :</label>
                                        <input type="password" id="newpwd" name="newpwd" placeholder="New Password" oninput="checkPwd()" required>
                                </div>
                                <div class="formElement">
                                    <label>Confirm Password :</label>
                                        <input  type="password" id="cnfmpwd" name="cnfmpwd" placeholder="Confirm Password" oninput="checkPwd()"  required>
                                        <span id="pwdStat"></span>
                                </div>                              
                                <div class="submitButton">
                                    <input type="submit" id="submitBtn" value="Save" name="Save" disabled>
                                </div>
                    </form>
                </div>
            </div>
        </body>
</html>