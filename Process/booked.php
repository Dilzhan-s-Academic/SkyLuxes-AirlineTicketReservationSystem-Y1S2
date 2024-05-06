<!-- IT23365346
BJS PERERA -->
<?php include "../config/janudadbConnect.php" ?>
<?php
    session_start();
if(isset($_SESSION['username'])){
    error_reporting(E_ALL);
 ini_set('display_errors', 1);

    $rflightId = $_GET['id'];
    $rflightname = $_GET['name'];
    $rflightstatus = $_GET['fstatus'];
    $raircraftid =  $_GET['craftid'];
    $rprice = $_GET['price'];


    $randomReservationID = rand(200, 100000);
    $randomSeat = 'st'.rand(1, 200);
    $bookedDate = date("Y-m-d");

    $reserve_sql = "INSERT INTO reservation (Reservation_ID, Booked_Date, Status, Price, Flight_ID, Aircraft_id, seat_id) 
        VALUES ('$randomReservationID','$bookedDate','$rflightstatus','$rprice','$rflightId',$raircraftid, '$randomSeat')";

    $reserve_result = mysqli_query($conn, $reserve_sql);



    if ($reserve_result) {
        $_SESSION['status'] = "Reservation added.";
        echo "<script> if(window.confirm('Reservation Added.')){document.location = '../Pages/plan.php';}</script>";
    } else {
        $_SESSION['status'] = "Error Occured Try Again!.";
        echo "<script>alert('Error Occurred. Please try again.');</script>";
    }
}
else{
    header('Location: ../Pages/signIn.php');
}
 


?>