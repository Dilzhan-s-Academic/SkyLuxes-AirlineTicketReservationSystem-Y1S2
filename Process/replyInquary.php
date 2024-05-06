
<?php
    session_start(); 
    include("../config/dbConn.php");

    $InqId = $_POST['InqId'];
    $Subject = $_POST['subject'];
    $Message = $_POST['msg'];
    $admin_id = $_SESSION['username'];

    $sql = "INSERT INTO solution VALUES (NULL, '$InqId', '$Subject', '$Message', '$admin_id');";


    $result = mysqli_query($conn, $sql);

    if($result){

        header('Location: ../Pages/inquaryManagement.php');
    }
    else{
        header('Location: ../Pages/inquaryManagement.php?err=\"Something went Wrong!! Cannot Add the Solution Details.\"');
    }
    $conn->close();

?>