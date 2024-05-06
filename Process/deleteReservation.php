<!--Dilshan Yapa S Y C T IT23366572-->

<?php
    include("../config/dbConn.php");

    $sql = "DELETE FROM reservation WHERE Reservation_ID =".$_GET['id'];

    $result = mysqli_query($conn,$sql);
    if($result){

        header('Location: ../Pages/userDashboard.php');
    }
    else{
        header('Location: ../Pages/userDashboard.php?err=\"Something went Wrong!! Cannot Delete this Reservation.\"');
    }
    $conn->close();
?>