<!--Dilshan Yapa S Y C T -->

<?php
    include("config/dbConn.php");
    $sql = "SELECT Airport_ID,Airport_Name FROM airport ORDER BY Airport_Name;";
    $result = mysqli_query($conn,$sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<option value=\"".$row['Airport_Name']."\">".$row['Airport_Name']."</option>";
        }
    }else {
        echo "<option value=\"".$row['Airport_Name']."\" disabled selected value>".$row['Airport_Name']."</option>";
    }
?>
