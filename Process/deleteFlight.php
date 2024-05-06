<!--Dilshan Yapa S Y C T it23366572-->

<?php
    include("../config/dbConn.php");

    $sql = "DELETE FROM flight WHERE flight.Flight_ID =".$_GET['id'];

    $result = mysqli_query($conn,$sql);
    if($result){

        header('Location: ../Pages/flightManagement.php');
    }
    else{
        header('Location: ../Pages/flightManagement.php?err=\"Something went Wrong!! Cannot Delete this Flight.\"');
    }
    $conn->close();
?>