<!--Dilshan Yapa S Y C T it23366572-->

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