<?php
    require_once "../config/dbConn.php";
    $errors = array();
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['SignUp'])) {
        
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $address = $_POST['address'];
        $mobile = $_POST['mobile'];
        $mail = $_POST['mail'];
        $username = $_POST['username'];
        $pwd = $_POST['cnfmpwd'];

        $sql = "INSERT INTO User VALUES('$username', '$fname', '$lname', '$address', '$mobile', '$mail', '$pwd', 0)";
        
        $resultset = mysqli_query($conn, $sql);
        $conn->close();
        if ($resultset) {
            header('Location: ../Pages/signIn.php');
        }
    } else {
        header('Location: ../Pages/signUp.php');
    }
?>