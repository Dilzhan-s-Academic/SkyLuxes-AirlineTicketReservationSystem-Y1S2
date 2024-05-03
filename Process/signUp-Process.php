<!--Dilshan Yapa S Y C T it23366572-->

<?php
    require_once "../config/dbConn.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['SignUp'])) {
        
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $quary = "SELECT * FROM User WHERE Username = '{$username}' LIMIT 1";

        $resultset = mysqli_query($conn, $quary);
        if ($resultset) {
            if (mysqli_num_rows($resultset) == 1) {
                header('Location: ../Pages/signUp.php?err=Username is Already Taken!!');
            }
        } 

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
        }else {
            header('Location: ../Pages/signUp.php');
        }
    } else {
        header('Location: ../Pages/signUp.php');
    }
?>