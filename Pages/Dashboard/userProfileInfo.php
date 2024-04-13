<!--Dilshan Yapa S Y C T it23366572-->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <style>
            .headding {
                margin-top: 50px;
            }
            .userDetailContainer {
                border: 0.5px solid rgba(83, 83, 172, 0.425);
                border-radius: 5px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.5);
                max-width: 100%;
                padding: 30px 20px 30px 20px;
                background-color: #d8d9d85f;
                margin-top:-30px;
            }
            h1,h3 {
                text-align: left;
            }
            .udForm {
                display: flex;
                margin: 30px 5px 5px 5px;
            }
            .udForm > form  input {
                padding: 10px;
                width: 100px;
                border-radius: 5px;
                box-shadow: 0px 4px 10px 0px rgba(0,0,0,0.5);
            }
        </style>
    </head>
        <body>
            <h1 class="headding"> Profile Information</h1>
            <div class="userDetailContainer">
                <h3>User Details</h3>
                <div class="udForm">
                    <form action="#">
                            <label>First Name : </label>
                                <input type="text" id="fname" name="fname" placeholder="First Name">
                            <label>Last Name :</label>
                                <input type="text" id="lname" name="lname" placeholder="Last Name">
                            <label>Address :</label>
                                <input type="text" id="lname" name="lname" placeholder="Address">
                            <label>Mobile No :</label>
                                <input type="text" id="mobile" name="mobile" placeholder="Mobile Number">
                            <label>E-mail :</label>
                                <input type="text" id="mail" name="mail" placeholder="E-mail">
                    </form>
                </div>
                <div class="udForm">
                    <form action="#">
                            <label>User Name : </label>
                                <input type="text" id="fname" name="fname" placeholder="First Name">
                            <label>New Password :</label>
                                <input type="text" id="lname" name="lname" placeholder="Last Name">
                            <label>Current Password :</label>
                                <input type="text" id="lname" name="lname" placeholder="Address">
                    </form>
                </div>
            </div>
        </body>
</html>