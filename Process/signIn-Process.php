<!--Dilshan Yapa S Y C T it23366572-->

<?php
    require_once "../config/dbConn.php";
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['SignIn'])) {
        
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['pwd']);
        $quary = "SELECT Username,Is_Admin,Email,FirstName,LastName FROM User WHERE Username = '$username' AND Password = '$password' LIMIT 1";

        $result = mysqli_query($conn,$quary);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_array($result);
            
            $_SESSION['username'] = $row['Username'];
            $_SESSION['fname'] = $row['FirstName'];
            $_SESSION['lname'] = $row['LastName'];
            $_SESSION['email'] = $row['Email'];
            $_SESSION['is_admin'] = $row['Is_Admin'];

            header('Location: ../index.php');
        }else {
            header('Location: ../Pages/SignIn.php?err=Invalid Login Informations!');
        }
    }else {
        header('Location: ../Pages/SignIn.php');
    }
    $conn->close();
?>