<?php
    include("../config/dbConn.php");
    session_start();
    
    $username = $_SESSION['username'];
    $username = preg_replace("/[^a-zA-Z0-9]/", "", $username);

    $sql = "UPDATE solution 
            SET Subject = '" . $_POST['subject'] . "',
            Message = '" . $_POST['msg'] . "',
            AdminID = '" . $username . "'
            WHERE solutionID = '" . $_POST['SolId'] . "' AND InquaryID = '" . $_POST['InqId'] . "';";

    $result = mysqli_query($conn,$sql);
    

    if($result){

        header('Location: ../Pages/inquaryManagement.php');
    }
    else{
        header('Location: ../Pages/inquaryManagement.php?err=\"Something went Wrong!! Cannot Update the Solution Details.\"');
    }
    

?>