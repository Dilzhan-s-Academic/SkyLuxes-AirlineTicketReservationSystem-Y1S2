<!--Dilshan Yapa S Y C T it23366572-->

<?php

    $database_host = "localhost";
    $database_useraccount = "root";
    $database_password = "";
    $database_name = "sky_luxe_db";

    $conn = new mysqli($database_host,$database_useraccount,$database_password,$database_name);

    if($conn->connect_error){
        include "databaseConnectionError.php";
    }
?>