<!--Dilshan Yapa S Y C T it23366572-->

<?php
    include("../config/dbConn.php");

    $sql = "SELECT AirCraft_ID,Type FROM aircraft";

    $result = mysqli_query($conn,$sql);

    echo "<option disabled selected value>Select AirCraft</option>";


    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value=\"".$row['AirCraft_ID']."\">".$row['Type']."</option>";
        }
    }else {
        echo "<option value=\"".$row['Type']."\" disabled selected value>".$row['Type']."</option>";
    }
?>