<?php
    include("../config/dbConn.php");
    session_start();
    
    $sql = "UPDATE user 
            SET Password = '" . $_POST['cnfmpwd'] . "'
            WHERE Username = '" . $username. "';";

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
    
    $conn->close();

?>