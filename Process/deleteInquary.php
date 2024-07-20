<!--N H D DILHARA -->

<?php
    include("../config/dbConn.php");

    $sql = "DELETE FROM inquary WHERE InquaryID =".$_GET['id'];
    $result = mysqli_query($conn,$sql);
    if($result){

        header('Location: ../Pages/userDashboard.php');
    }
    else{
        header('Location: ../Pages/userDashboard.php?err=\"Something went Wrong!! Cannot Delete this Inquary.\"');
    }
    $conn->close();
?>
