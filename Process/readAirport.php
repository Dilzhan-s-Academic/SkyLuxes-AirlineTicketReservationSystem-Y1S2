<!--Dilshan Yapa S Y C T it23366572-->

<?php
    include("../config/dbConn.php");
    $sql = "SELECT Airport_ID,Airport_Name FROM airport ORDER BY Airport_Name;";
    $result = mysqli_query($conn,$sql);

    echo "<option disabled selected value>Select Airport</option>";
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value=\"".$row['Airport_ID']."\">".$row['Airport_Name']."</option>";
        }
    }
?>