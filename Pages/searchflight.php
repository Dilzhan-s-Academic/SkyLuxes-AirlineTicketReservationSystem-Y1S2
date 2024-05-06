<!--BJS Perera IT23365346 -->
<!--search-->

<?php include "../config/janudadbConnect.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud1</title>
</head>

<body>
    <div class="container">
        <div class="SearchFlightsForm">
            <span>Reserve Your Seat</span>
            <div class="form-div">
                <form method="POST">

                    <div class="form-elements">
                        <input type="text" name="DepartureAirport" id="DepartureAirport" placeholder="From">

                        <input type="date" id="DayToGo" name="DayToGo" placeholder="Departure Date">
                        <input type="date" id="DayToCome" name="DayToCome" placeholder="Arrival Date">
                    </div>
                    <div class="form-elements">
                        <input type="text" name="ArrivalAirport" id="flightNametinationAirport" placeholder="To">


                        <select name="SeatCount" id="SeatCount">
                            <option disabled selected value> Seat Count </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>

                        <select name="SeatClass" id="SeatClass">
                            <option disabled selected value> Class </option>
                            <option value="economy">Economy</option>
                            <option value="pre-economy">Premium-Economy</option>
                            <option value="bussiness">Bussiness</option>
                            <option value="first">First</option>
                        </select>
                    </div>
                    <div class="form-submittion">
                        <div class="TripType">
                            <input type="radio" id="TripType1" value="OneWay" name="TripType">
                            <lable id="TripType1">Oneway</lable>
                            <input type="radio" id="TripType2" value="Return" name="TripType" checked="checked">
                            <lable id="TripType2">Return</lable>
                        </div>

                    </div>
                    <button class="btn-search" type="submit" name="submit">Search</button>
                </form>
            </div>
            <br>
            <div class="searchResults">
                <div class="result">Colombo to London</div>
                <div class="airportName">Sri Lankan Airlines</div>
                <div id="resultdatetime"></div>
            </div>

        </div>



        <div class="flightsearchresults">
            <table class="table">
                <?php

                error_reporting(E_ALL);
                ini_set('display_errors', 1);

                if (isset($_POST['submit'])) {



                    $dairportName = $_POST['DepartureAirport'];
                    $sql1 = "SELECT Airport_ID,Airport_Name FROM airport WHERE Airport_Name LIKE '%$dairportName%'";
                    $result1 = mysqli_query($conn, $sql1);
                    $row1 = mysqli_fetch_assoc($result1); // Fetch the row from the result set
                    $dairportID = $row1['Airport_ID'];
                    $dairportName = $row1['Airport_Name'];

                    $aairportName = $_POST['ArrivalAirport'];
                    $sql2 = "SELECT Airport_ID,Airport_Name FROM airport WHERE Airport_Name LIKE '%$aairportName%'";
                    $result2 = mysqli_query($conn, $sql2);
                    $row2 = mysqli_fetch_assoc($result2); // Fetch the row from the result set
                    $aairportID = $row2['Airport_ID'];
                    $aairportName = $row2['Airport_Name'];

                    $ddate = $_POST['DayToGo'];
                    $adate = $_POST['DayToCome'];
                    $seat =  $_POST['SeatCount'];
                    $class =  $_POST['SeatClass'];



                    $sql3 = "SELECT Flight_ID, Flight_Name, Departure_DateTime, Arrival_DateTime, Flight_Status, AirCraft_ID,Price 
                                    FROM flight 
                                    WHERE departure_airport_id = '$dairportID' 
                                    AND arrival_airport_id = '$aairportID' 
                                    AND DATE(departure_datetime) = '$ddate' 
                                    AND DATE(arrival_datetime) = '$adate'";

                    $final_result = mysqli_query($conn, $sql3);



                    if ($final_result) {
                        if (mysqli_num_rows($final_result) > 0) {
                            echo '<thead>
                                <tr>
                                    <th>Flight ID</th>
                                    <th>Name</th>
                                    <th>Departure Date And Time</th>
                                    <th>Arrival Date And Time</th>
                                    <th>Status</th>
                                    <th>AirCraft</th>
                                    <th>Departure AirPort Name</th>
                                    <th>Arrival AirPort Name</th>
                                </tr>
                                </thead>';

                            $row = mysqli_fetch_assoc($final_result);
                            echo '<tbody>
                                <tr>
                                    <td>' . $row['Flight_ID'] . '</td>
                                    <td>' . $row['Flight_Name'] . '</td>
                                    <td>' . $row['Departure_DateTime'] . '</td>
                                    <td>' . $row['Arrival_DateTime'] . '</td>
                                    <td>' . $row['Flight_Status'] . '</td>
                                    <td>' . $row['AirCraft_ID'] . '</td>
                                    <td>' . $dairportName . '</td>
                                    <td>' . $aairportName . '</td>


                                </tr>
                                </tbody>';

                            $rflightId = $row['Flight_ID'];
                            $rflightname = $row['Flight_Name'];
                            $rflightstatus = $row['Flight_Status'];
                            $raircraftid =  $row['AirCraft_ID'];
                            $rprice = $row['Price'];

                            if ($rflightstatus == 'Scheduled') {

                                echo '<button id="bookNow">Book Now</button>';

                                
                                $randomReservationID = rand(200, 100000);
                                $randomSeat = 'st' . rand(1, 200);
                                $bookedDate = date("Y-m-d");

                                $reserve_sql = "INSERT INTO reservation (Reservation_ID, Booked_Date, Status, Price, Flight_ID, Aircraft_id, seat_id) 
                                    VALUES ('$randomReservationID','$bookedDate','$rflightstatus','$rprice','$rflightId',$raircraftid, '$randomSeat')";

                                $reserve_result = mysqli_query($conn, $reserve_sql);



                                if ($reserve_result) {
                                    $_SESSION['status'] = "Reservation added.";
                                    echo "<script>alert('Reservation added.');</script>";
                                } else {
                                    $_SESSION['status'] = "Error Occured Try Again!.";
                                    echo "<script>alert('Error Occurred. Please try again.');</script>";
                                }

                                /*header('Location:usermanagementj.php');*/
                            }
                        } else {
                            echo '<h2>Data Not Found</h2>';
                        }
                    }
                }
                ?>
            </table>
        </div>
    </div>
</body>

</html>