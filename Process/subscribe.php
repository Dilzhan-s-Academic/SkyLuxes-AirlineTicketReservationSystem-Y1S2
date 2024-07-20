<!--Dilshan Yapa S Y C T -->

<?php
    include("../config/dbConn.php");

    $sql = "INSERT INTO subscription_list VALUES (NULL, '".$_POST['submail']."');";

    $result = mysqli_query($conn,$sql);

    if($result){

        header('Location: ../index.php');
    }
    else{
        header('Location: ../index.php?err=\"Something went Wrong!! Cannot Add the Flight Details.\"');
    }
    $conn->close();

?>
