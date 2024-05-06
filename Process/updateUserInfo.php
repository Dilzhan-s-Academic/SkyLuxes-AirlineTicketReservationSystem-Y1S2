<?php
    include("../config/dbConn.php");
    session_start();
    
    $username = $_SESSION['username'];
    $username = preg_replace("/[^a-zA-Z0-9]/", "", $username);

    $sql = "UPDATE user 
            SET FirstName = '" . $_POST['fname'] . "',
            LastName = '" . $_POST['lname'] . "',
            Address = '" . $_POST['address'] . "',
            Mobile = '" . $_POST['mobile'] . "',
            Email = '" . $_POST['mail'] . "'
            WHERE Username = '" . $username . "';";

    $result = mysqli_query($conn,$sql);
    if($_SESSION['is_admin'] == 0){
        if($result){

            header('Location: ../Pages/userDashboard.php');
        }
        else{
            header('Location: ../Pages/userDashboard.php?err=\"Something went Wrong!! Cannot edit the Flight Details.\"');
        }
    }else if($_SESSION['is_admin'] == '1'){
        if($result){

            header('Location: ../Pages/adminDashboard.php');
        }
        else{
            header('Location: ../Pages/adminDashboard.php?err=\"Something went Wrong!! Cannot edit the Flight Details.\"');
        }
    }
    

?>