

<?php
error_reporting(E_ALL);
ini_set('display_errors',1);

include "../config/janudadbConnect.php";

session_start();

if (isset($_POST['save_btn'])){
    $user_name = $_POST['uname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $mobile = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $is_admin = $_POST['is_admin'];

  
    $sql = "INSERT INTO user (username, firstname, lastname, address, mobile, email, password, is_admin) 
                    VALUES ('$user_name', '$fname', '$lname', '$address', '$mobile', '$email', '$password', '$is_admin')";
   
    $result = mysqli_query($conn,$sql);

   

    if ($result) {
        $_SESSION['status'] = "User added.";
    }else{
        $_SESSION['status'] = "User Cannot be added.";
    }

    header('Location:usermanagementj.php');



}

if (isset($_POST['updateBtn'])){
    $user_name = $_POST['uname'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $mobile = $_POST['phone'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $is_admin = $_POST['is_admin'];

    $update_sql = "UPDATE user SET firstname = '$fname', lastname = '$lname', address='$address', mobile = '$mobile', email = '$email', password='$password', is_admin = '$is_admin' where username = '$user_name'";
    $update_result = mysqli_query($conn,$update_sql);

    if($update_result){
        $_SESSION['status'] = "User Updated.";
    }else{
        $_SESSION['status'] = "User Cannot be Updated.";
    }

    header('Location:usermanagementj.php');
}

if (isset($_POST['removeBtn'])){

    $user_name = $_POST['username'];
    $delete_sql = "DELETE FROM user WHERE username = '$user_name'";
    $delete_result = mysqli_query($conn,$delete_sql);

    if($delete_result){
        $_SESSION['status'] = "User deleted.";
    }else{
        $_SESSION['status'] = "User Cannot be deleted.";
    }

    header('Location:usermanagementj.php');

}




?>
