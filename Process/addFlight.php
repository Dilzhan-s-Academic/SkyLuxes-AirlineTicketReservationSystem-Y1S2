<!--Dilshan Yapa S Y C T -->

<?php
    include("../config/dbConn.php");

    $sql = "INSERT INTO flight VALUES (NULL, '".$_POST['flightName']."', '".$_POST['departureDateTime']."', '".$_POST['arrivalDateTime']."', '".$_POST['Status']."', '".$_POST['aircraft']."', '".$_POST['departureAirport']."', '".$_POST['arrivalAirport']."',NULL);";

    $result = mysqli_query($conn,$sql);

    if($result){

        header('Location: ../Pages/flightManagement.php');
    }
    else{
        header('Location: ../Pages/flightManagement.php?err=\"Something went Wrong!! Cannot Add the Flight Details.\"');
    }
    $conn->close();

?>
