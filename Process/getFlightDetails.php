<!--Dilshan Yapa S Y C T -->

<?php
    include("../config/dbConn.php");

    $sql = "SELECT 
                f.Flight_ID AS 'flightID',
                f.Name AS 'Flight Name',
                a.Type AS 'Aircraft Name',
                f.Departure_DateTime AS 'Departure Date and Time',
                f.Arrival_DateTime AS 'Arrival Date and Time',
                dep.Airport_Name AS 'Departure Airport',
                arr.Airport_Name AS 'Arrival Airport',
                f.Status AS 'Status'
            FROM 
                flight f
            INNER JOIN 
                aircraft a ON f.Aircraft_ID = a.AirCraft_ID
            INNER JOIN 
                airport dep ON f.Departure_Airport_ID = dep.Airport_ID
            INNER JOIN 
                airport arr ON f.Arrival_Airport_ID = arr.Airport_ID
            ORDER BY f.Departure_DateTime;";

        $result = mysqli_query($conn,$sql);

        $data = array();
        $row_index = 0;
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
                echo "<tr class=\"flightID\" onclick=\"openPopup('viewFlight',".$row_index.")\">
                        <td>
                            <label for=\"flightID\">". $row['Flight Name'] ."</label>
                        </td>
                        <td>
                            <label for=\"flightID\">". $row['Aircraft Name'] ." </label>
                        </td>
                        <td>
                            <label for=\"flightID\">". $row['Departure Date and Time'] ." </label>
                        </td>
                        <td>
                            <label for=\"flightID\">". $row['Arrival Date and Time'] ." </label>
                        </td>
                        <td>
                            <label for=\"flightID\">". $row['Status'] ." </label>
                        </td>
                    </tr>";
                $row_index++;
            }
        }
        echo "<script> var FlightData = " . json_encode($data) . "</script>";
        $conn->close();
?>
