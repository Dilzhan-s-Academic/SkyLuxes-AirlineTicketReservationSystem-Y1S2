<!--N H D DILHARA -->

<?php
    include("../config/dbConn.php");
    session_start();
    
    $username = $_SESSION['username'];
    $username = preg_replace("/[^a-zA-Z0-9]/", "", $username);
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
    $conn->close();

?>
