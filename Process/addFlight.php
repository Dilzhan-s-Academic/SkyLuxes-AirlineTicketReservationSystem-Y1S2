<!--Dilshan Yapa S Y C T it23366572-->

<?php
    include("../config/dbConn.php");

    $sql = "INSERT INTO flight VALUES (NULL, '".$_POST['flightName']."', '".$_POST['departureDateTime']."', '".$_POST['arrivalDateTime']."', '".$_POST['Status']."', '".$_POST['aircraft']."', '".$_POST['departureAirport']."', '".$_POST['arrivalAirport']."');";

    $result = mysqli_query($conn,$sql);

    if($result){

        header('Location: ../Pages/flightManagement.php');
    }
    else{
        header('Location: ../Pages/flightManagement.php?deleteErr=\"Something went Wrong!! Cannot Add the Flight Details.\"');
    }

?>