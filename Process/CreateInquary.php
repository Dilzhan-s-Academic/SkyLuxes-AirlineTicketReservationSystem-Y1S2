<!--N H D DILHARA IT23349438-->

<?php
    session_start(); 
    include("../config/dbConn.php");

    $Name = $_POST['Name'];
    $Email = $_POST['Email'];
    $Subject = $_POST['Subject'];
    $Message = $_POST['Message'];

    $sql = "INSERT INTO inquary VALUES (NULL, '$Name', '$Email', '$Subject', '$Message', " . (isset($_SESSION['username']) ? "'".$_SESSION['username']."'" : "NULL") . ");";


    $result = mysqli_query($conn, $sql);

    if($result){

        header('Location: ../Pages/contactUs.php');
    }
    else{
        header('Location: ../Pages/contactUs.php?err=\"Something went Wrong!! Cannot Add the Inquary Details.\"');
    }

?>