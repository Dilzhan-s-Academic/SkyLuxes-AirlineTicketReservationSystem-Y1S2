<!--G.M.M.Dissanayake It23360846-->

<?php
    require_once "../../config/dbConn.php";
    session_start();

    $quary = "SELECT * FROM User WHERE Username = '".$_SESSION['username']."'";

    $result = mysqli_query($conn,$quary);
    $row = array();
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
    }
?>