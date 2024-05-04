<!--N H D DILHARA IT23349438-->

<?php
    include("../config/dbConn.php");

    $sql = "UPDATE inquary 
            SET Name = '" . $_POST['Name'] . "',
            Email = '" . $_POST['Email'] . "',
            Subject = '" . $_POST['Subject'] . "',
            Message = '" . $_POST['Message'] . "'
            WHERE InquaryID = " . $_POST['ID'] . ";";


    $result = mysqli_query($conn,$sql);

    if($result){

        header('Location: ../Pages/userDashboard.php');
    }
    else{
        header('Location: ../Pages/contactUs.php?err=\"Something went Wrong!! Cannot edit the Flight Details.\"');
    }

?>