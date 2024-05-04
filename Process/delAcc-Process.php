<!--G.M.M.Dissanayake It23360846-->

<?php
    $username = '';
    session_start();

    $username = $_SESSION['username'];

    $_SESSION = array();
    if (isset($_COOKIE[session_name()])) {
        setcookie(session_name(), '', time() - 60 * 60 * 24, '/');
    }
    session_destroy();

    include("../config/dbConn.php");

    // Sanitize the username to only contain alphanumeric characters
    $username = preg_replace("/[^a-zA-Z0-9]/", "", $username);

    $sql = "DELETE FROM user WHERE Username = '$username'";
    
    $result = mysqli_query($conn, $sql);

    if($result){
        header('Location: ../index.php');
    }
    else{
        header('Location: ../Pages/signIn.php?err=Cannot Delete Your Account!');
    }

    mysqli_close($conn);
?>
