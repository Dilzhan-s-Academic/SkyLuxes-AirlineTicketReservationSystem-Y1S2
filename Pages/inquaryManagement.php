

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
        <link rel="icon" type="image/x-icon" href="http://localhost/SkyLuxes-AirlineTicketReservationSystem/images/Icons/favicon.png">
        <?php 
            include "../config/header.php";
            if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !=1)
            {
                header('Location: ../Pages/signIn.php');
            }else{
                include '../Process/getAdminDetails.php';
            }
        ?>
        <style>
            .headding {
                margin-top: 50px;
            }
            .replyInquary {
                position: fixed;
                border-radius: 10px;
                text-align: center;
                top: 60%;
                left: 50%;
                width: 50%;
                transform: translate(-50%,-50%);
                background-color: #fff;
                box-shadow: 5px 10px 10px  rgba(83, 83, 172, 0.5);
                padding: 10px 50px 20px;
                visibility: hidden;
            }
            .inquaryDetailsContainer {
                border: 0.5px solid rgba(83, 83, 172, 0.425);
                border-radius: 5px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.5);
                max-width: 100%;
                padding: 10px 10px 50px 10px;
                background-color: #d8d9d85f;
                margin-bottom: 50px;
            }
            h1,h3 {
                text-align: left;
            }
            table {
                border: 1px solid #c4c4c4;
                background-color: #fff;
                border-radius: 5px;
                width: 100%;
                
            }
            .inquaryList {
                max-height: 300px;
                overflow-y: scroll;
                border-radius: 5px;
            }
            th {
                position: sticky;
                top: 0px;
                background-color: #ed6197;
                padding: 10px;
                width:calc(100% / 6);
            }
            #selectCheckBox {
                width:50px
            }
            td {
                text-align: center;
                padding: 10px;
            }
            td label {
                display: inline-block;
                padding: 5px 10px;
                cursor: pointer;
            }
            tr {
                transition: background-color 0.3s ease;
            }
            tr:hover {
                background-color: #f0f0f0;
            }
            .Controllers {
                text-align: center;
                align-items: center;
            }
            #Replybtn {
                margin: 5px;
                background-color: rgb(30, 64, 64);
                color: #fff;
                font-weight: 500;
                padding: 10px;
                border-radius: 5px;
                cursor: pointer;
                transition: all 0.2s ease;
            }
            .replyInquary .replyForm form  input, .replyInquary .replyForm form  textarea{
                border: 1px solid blueviolet;
                width: 100%;
                height: 50px;
                margin-top: 5px;
                margin-bottom: 20px;
                border: 1px solid blueviolet;
                border-radius: 10px;
                padding-left: 10px;
            }
            .replyInquary .replyForm form  textarea {
                height: 200px;
                padding-top: 10px;
            }
            .replyInquary .replyForm form  label , .replyInquary .replyForm form  input, .replyInquary .replyForm form  textarea{
                display: flex;
            }
            .replyInquary .replyForm form input{
                padding: 10px 20px;
                border-radius: 5px;

            }
            .replyInquary .controlBtns {
                display: flex;
                justify-content: flex-end;
            }
            .replyInquary .controlBtns button{
                cursor: pointer;
                padding: 10px;
                margin: 10px;
                border-radius: 10px;
                background-color: rgba(30, 113, 54, 1);
                color:#fff;
                width: 80px;
            }

            .replyInquary .controlBtns input{
                cursor: pointer;
                padding: 10px;
                margin: 10px;
                border-radius: 10px;
                background-color: rgb(20, 10, 255);
                color:#fff;
                width: 80px;
            }
        </style>
        <title>Sky Luxe | Admin Dashboard</title>
        
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
                <h1 class="headding">Inquary Management</h1>
                
                <?php
                    if(isset($_GET['err'])){
                        echo "
                        <div class=\"err\">
                            <span>&#9888; ". $_GET['err'] .".</span>
                        </div>
                            ";
                    }
                ?>

                <div class="inquaryDetailsContainer">
                    <h3>Inquaries</h3>
                    <div class="inquaryListWrapper">
                        <div class="inquaryList">
                            <table>
                                <tr>
                                    <th>
                                        Inquary ID
                                    </th>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Email
                                    </th>
                                    <th>
                                        Subject
                                    </th>
                                    <th>
                                        Message
                                    </th><th>
                                        Controllers
                                    </th>
                                </tr>
                                <?php include '../Process/checkInquaries.php'; ?>
                                
                            </table>
                        </div>
                    </div>
                </div>

                <div class="inquaryDetailsContainer">
                    <h3>Solutions</h3>
                    <div class="inquaryListWrapper">
                        <div class="inquaryList">
                            <table>
                                <tr>
                                    <th>
                                        Solution ID
                                    </th>
                                    <th>
                                        Inquary ID
                                    </th>
                                    <th>
                                        Admin Name
                                    </th>
                                    <th>
                                        Subject
                                    </th>
                                    <th>
                                        Message
                                    </th><th>
                                        Controllers
                                    </th>
                                </tr>

                                <?php include '../Process/checkSolutions.php'; ?>

                            </table>
                        </div>
                    </div>
                </div>

                <div class="replyInquary" id="replyInquary">
                    <h3 style="text-align: center;">Reply Inquary</h3>
                    <div class="replyForm">
                        <form action="../Process/updateSolution.php" method="POST" id="popUpForm">
                            <label>Inquary ID:</label>
                                <input type="text" value="" name="InqId" id="InqId-pop" readonly>
                            <label id="SolId-label">Solution ID:</label>
                                <input type="hidden" value="" name="SolId" id="SolId-in" readonly>
                            <label for="Subject">Subject</label>
                                <input type="text" id="subject" name="subject" placeholder="Subject" required>
                            <label for="msg">Message</label>
                                <textarea id="msg" name="msg" placeholder="Message" required> </textarea>
                    </div>
                    <div class="controlBtns">
                        <button type="button" onclick="closePopup();"> Close </button>
                        <input type="submit" id="submit" value="Send">
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    <?php include "../config/footer.php" ?>
    
    <script src="../js/checkPwd.js"></script>
    <script src="../js/inquaryManagement.js"></script>
    </body>
</html>