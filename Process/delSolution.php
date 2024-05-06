
<?php
    include("../config/dbConn.php");

    $sql = "DELETE FROM solution WHERE SolutionID ='".$_GET['id']."';";
    echo $sql;

    $result = mysqli_query($conn,$sql);
    if($result){

        header('Location: ../Pages/inquaryManagement.php');
    }
    else{
        header('Location: ../Pages/inquaryManagement.php?err=\"Something went Wrong!! Cannot Delete this Flight.\"');
    }
?>