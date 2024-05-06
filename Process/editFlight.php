<!--Dilshan Yapa S Y C T it23366572-->

<?php
    include("../config/dbConn.php");

    $sql = "UPDATE flight 
            SET Name = '" . $_POST['flightName'] . "',
            Departure_DateTime = '" . $_POST['departureDateTime'] . "',
            Arrival_DateTime = '" . $_POST['arrivalDateTime'] . "',
            Status = '" . $_POST['Status'] . "',
            Aircraft_ID = " . $_POST['aircraft'] . ",
            Destination_Airport_ID = " . $_POST['departureAirport'] . ",
            Arrival_Airport_ID = " . $_POST['arrivalAirport'] . "
            WHERE Flight_ID = " . $_POST['flightID'] . ";";


    $result = mysqli_query($conn,$sql);

    if($result){

        header('Location: ../Pages/flightManagement.php');
    }
    else{
        header('Location: ../Pages/flightManagement.php?err=\"Something went Wrong!! Cannot edit the Flight Details.\"');
    }

?>