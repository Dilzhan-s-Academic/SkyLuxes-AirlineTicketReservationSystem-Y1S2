<!--Dilshan Yapa S Y C T it23366572-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
        <link rel="icon" type="image/x-icon" href="http://localhost/SkyLuxes-AirlineTicketReservationSystem/images/Icons/favicon.png">
        <title>Sky Luxe | Admin Dashboard</title>
        <?php 
            include "../config/header.php";
            if(!isset($_SESSION['is_admin']) || $_SESSION['is_admin'] !=1)
            {
                header('Location: ../Pages/signIn.php');
            }
        ?>
        <style>
            .headding {
                margin-top: 50px;
            }
            .flightDetailsContainer , .addFlightContainer {
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
            .flightList {
                max-height: 300px;
                overflow-y: scroll;
                border-radius: 5px;
            }
            th {
                position: sticky;
                top: 0px;
                background-color: #ed6197;
                padding: 10px;
                width:calc(100% / 5);
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

            .editingBtns {
                display: flex;
                justify-content: flex-end;
            }

            .editingBtns button {
                background-color: #007bff;
                opacity: 0.9;
                color: #fff;
                border-radius: 5px;
                margin: 20px 10px 5px 0px;
                padding: 10px 20px;
            }
            .editingBtns button:hover {
                opacity: 0.8 ;
            }
            .editingBtns button:active {
                opacity: 1;
            }
            .editFlight .submitButton button {
                cursor: pointer;
                border-radius: 5px;
                color: white;
                background-color: #ed6197;
                padding: 10px;
                margin-right: 10px;

            }
            .viewFlight,.editFlight {
                position: fixed;
                text-align: center;
                border-radius: 20px;
                top: 60%;
                left: 50%;
                width: 50%;
                transform: translate(-50%,-50%);
                background-color: #fff;
                box-shadow: 5px 10px 10px  rgba(83, 83, 172, 0.5);
                padding: 10px 50px 20px;
                visibility: hidden;
            }
            .editFlight {
                align-items: center;
                text-align: right;
            }
            .flightDetailsBtns > button {
                padding: 10px 30px;
                color: #fff;
                font-weight: 500;
                background-color: #0f0;
                border-radius: 10px;
                margin-top: 50px;
                cursor: pointer;
                opacity: 0.8;
            }
            .flightDetailsBtns > button:hover {
                opacity: 0.9;
            }
            .flightDetailsBtns > button:active {
                opacity: 1;
            }
            .flightDetails {
                text-align: left;
                line-height: 30px;
                margin-top: 20px;
            }
            .flightDetails label {
                font-weight: 500;
            }
            .formElement {
                display: block;
            }
            .formElement > label ,.formElement > input, .formElement > select{
                display: inline-block;
                padding: 10px;
            }
            .formElement > label {
                width: 200px;
            }
            .formElement > input, .formElement > select {
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
                border-radius: 5px;
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
                <h1 class="headding">Flight Management</h1>
                
                <?php
                    if(isset($_GET['err'])){
                        echo "
                        <div class=\"err\">
                            <span>&#9888; ". $_GET['err'] .".</span>
                        </div>
                            ";
                    }
                ?>

                <div class="flightDetailsContainer">
                    <h3>Flights</h3>
                    <div class="flightListWrapper">
                        <div class="flightList">
                            <table>
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        AirCraft Name
                                    </th>
                                    <th>
                                        Departure Time
                                    </th>
                                    <th>
                                        Arrival Time
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                                <?php include '../Process/getFlightDetails.php'; ?>
                                
                            </table>
                        </div>
                    </div>
                </div>
                

                <div class="addFlightContainer">
                    <h3>Add Flight</h3>
                    <div class="afForm">
                        <form action="../Process/addflight.php" method="post">
                                    <div class="formElement">
                                        <label>Flight Name : </label>
                                            <input type="text" id="flightName" name="flightName" placeholder="Flight Name" required>
                                    </div>
                                    <div class="formElement">
                                        <label>AirCraft :</label>
                                            <select name="aircraft" id="aircraft">
                                                <?php include '../Process/readAircraft.php'; ?>
                                            </select>
                                    </div>
                                    <div class="formElement">
                                        <label>Departure Date & Time :</label>
                                            <input  type="datetime-local" id="departureDateTime" name="departureDateTime" required>
                                    </div>
                                    <div class="formElement">
                                    <label>Arrival Date & Time :</label>
                                            <input  type="datetime-local" id="arrivalDateTime" name="arrivalDateTime" required>
                                    </div>
                                    <div class="formElement">
                                        <label>Departure Airport :</label>
                                            <select name="departureAirport" id="departureAirport" required>
                                                <?php include '../Process/readAirport.php'; ?>
                                            </select>
                                    </div>
                                    <div class="formElement">
                                        <label>Arrival Airport :</label>
                                            <select name="arrivalAirport" id="arrivalAirport" required>
                                                <?php include '../Process/readAirport.php'; ?>
                                            </select>
                                    </div>

                                    <div class="formElement">
                                        <label>Status : </label>
                                            <select name="Status" id="Status" required>
                                                <option>Scheduled</option>
                                                <option>On Time</option>
                                                <option>Delayed</option>
                                                <option>Cancelled</option>
                                                <option>Boarding</option>
                                                <option>In Flight</option>
                                                <option>Diverted</option>
                                                <option>Landed</option>
                                                <option>Departed</option>
                                                <option>Arriving Soon</option>
                                                <option>Check-in Open</option>
                                            </select>
                                    </div>
                                    
                                    <div class="submitButton">
                                        <input type="submit" value="Add Flight" name="addFlight">
                                    </div>
                        </form>
                    </div>
                </div>

                <div class="viewFlight" id="viewFlight">
                    <h3 style="text-align: center;">Flight Details</h3>
                    <div class="flightDetails">
                        <label>Flight Name :</label>
                            <span id="flightName-pop"></span> <br/>
                        <label>Aircraft Name :</label>
                            <span id="aircraftName-pop"></span><br/> 
                        <label>Departure Date and Time :</label>
                            <span id="departureDateTime-pop"></span><br/> 
                        <label>Arrival Date and Time :</label>
                            <span id="arrivalDateTime-pop"></span><br/> 
                        <label>Departure Airport :</label>
                            <span id="departureAirport-pop"></span><br/>
                        <label>Arrival Airport :</label>
                            <span id="arrivalAirport-pop"></span><br/> 
                        <label>Status :</label>
                            <span id="status-pop"></span><br/> 
                    </div>
                    <div class="flightDetailsBtns">
                        <button id="editFlightBtn-pop" style="background-color: #A2D;">Edit</button>
                        <button id="deleteFlightBtn-pop" style="background-color: #f00;">Delete</button>
                        <button onclick="closePopup('viewFlight')">OK</button>
                    </div>
                </div>

                <div class="editFlight" id="editFlight">
                    <h3 style="text-align: center;">Flight Details</h3>
                    <div class="editFlightDetails">
                        <form action="../Process/editFlight.php" method="post">
                                    <div class="formElement">
                                    <input type="hidden" id="flightID-edit" name="flightID">
                                        <label>Flight Name : </label>
                                            <input type="text" id="flightName-edit" name="flightName" placeholder="Flight Name" required>
                                    </div>
                                    <div class="formElement">
                                        <label>AirCraft :</label>
                                            <select name="aircraft" id="aircraft-edit">
                                                <?php include '../Process/readAircraft.php'; ?>
                                            </select>
                                    </div>
                                    <div class="formElement">
                                        <label>Departure Date & Time :</label>
                                            <input  type="datetime-local" id="departureDateTime-edit" name="departureDateTime" required>
                                    </div>
                                    <div class="formElement">
                                    <label>Arrival Date & Time :</label>
                                            <input  type="datetime-local" id="arrivalDateTime-edit" name="arrivalDateTime" required>
                                    </div>
                                    <div class="formElement">
                                        <label>Departure Airport :</label>
                                            <select name="departureAirport" id="departureAirport-edit" required>
                                                <?php include '../Process/readAirport.php'; ?>
                                            </select>
                                    </div>
                                    <div class="formElement">
                                        <label>Arrival Airport :</label>
                                            <select name="arrivalAirport" id="arrivalAirport-edit" required>
                                                <?php include '../Process/readAirport.php'; ?>
                                            </select>
                                    </div>

                                    <div class="formElement">
                                        <label>Status : </label>
                                            <select name="Status" id="Status-edit" required>
                                                <option>Scheduled</option>
                                                <option>On Time</option>
                                                <option>Delayed</option>
                                                <option>Cancelled</option>
                                                <option>Boarding</option>
                                                <option>In Flight</option>
                                                <option>Diverted</option>
                                                <option>Landed</option>
                                                <option>Departed</option>
                                                <option>Arriving Soon</option>
                                                <option>Check-in Open</option>
                                            </select>
                                    </div>
                                    
                                    <div class="submitButton">
                                        <button type="button" onclick="closePopup('editFlight');">Cancel</button>
                                        <input type="submit" value="Edit Flight" name="editFlight">
                                    </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function openPopup(elementID,flightIndex) {
                var popUpWindow = document.getElementById(elementID);
                popUpWindow.style.visibility = "visible";
                document.getElementById('flightName-pop').innerHTML = FlightData[flightIndex]['Flight Name'];
                document.getElementById('aircraftName-pop').innerHTML = FlightData[flightIndex]['Aircraft Name'];
                document.getElementById('departureDateTime-pop').innerHTML = FlightData[flightIndex]['Departure Date and Time'];
                document.getElementById('arrivalDateTime-pop').innerHTML = FlightData[flightIndex]['Arrival Date and Time'];
                document.getElementById('departureAirport-pop').innerHTML = FlightData[flightIndex]['Departure Airport'];
                document.getElementById('arrivalAirport-pop').innerHTML = FlightData[flightIndex]['Arrival Airport'];
                document.getElementById('status-pop').innerHTML = FlightData[flightIndex]['Status'];
                document.getElementById('editFlightBtn-pop').onclick = function() { closePopup('viewFlight'); openFlghtEditor('editFlight', flightIndex); };
                document.getElementById('deleteFlightBtn-pop').onclick = function() { closePopup('viewFlight'); document.location = '../Process/deleteFlight.php?id=' + FlightData[flightIndex]['flightID']; };
            }

            function openFlghtEditor(elementID,flightIndex) {
                var popUpWindow = document.getElementById(elementID);
                popUpWindow.style.visibility = "visible";
                document.getElementById('flightID-edit').value = FlightData[flightIndex]['flightID'];
                document.getElementById('flightName-edit').value = FlightData[flightIndex]['Flight Name'];
                document.getElementById('departureDateTime-edit').value = FlightData[flightIndex]['Departure Date and Time'];
                document.getElementById('arrivalDateTime-edit').value = FlightData[flightIndex]['Arrival Date and Time'];
            }

            function closePopup(elementID) {
                var popUpWindow = document.getElementById(elementID);
                popUpWindow.style.visibility = "hidden";
            }
        </script>
    <?php include "../config/footer.php" ?>
    </body>
</html>