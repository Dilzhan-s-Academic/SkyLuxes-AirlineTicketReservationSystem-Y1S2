<!--BJS Perera IT23365346-->

<?php

$host = "localhost";
$dbname = "sky_luxe_db";
$dbusername = "root";
$dbpassword = "";

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if($conn->connect_error){
    echo '<div>
            <h4 class="alert-heading">Database Connection Error!</h4>
            <p>Sorry, we are unable to connect to the database at the moment. Please try again later.</p>
          </div>';
    exit;
}
?>