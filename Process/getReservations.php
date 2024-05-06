

<?php

include "../../config/dbConn.php";

$query = "SELECT reservation.Reservation_ID AS resvID, flight.Name AS FlightName, aircraft.Model AS AircraftModel, reservation.Seat_ID, flight.Departure_DateTime, flight.Status
          FROM reservation
          INNER JOIN flight ON reservation.Flight_ID = flight.Flight_ID
          INNER JOIN aircraft ON reservation.Aircraft_ID = aircraft.AirCraft_ID";

$result = mysqli_query($conn, $query);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["FlightName"] . "</td>";
        echo "<td>" . $row["AircraftModel"] . "</td>";
        echo "<td>" . $row["Seat_ID"] . "</td>";
        echo "<td>" . $row["Departure_DateTime"] . "</td>";
        echo "<td>" . $row["Status"] . "</td>";
        echo "<td> <button id='delBtn' onclick=\"if(window.confirm('Do you want to Delete this Reservation?')){document.location = '../Process/deleteReservation.php?id=".$row['resvID']."';};\">Delete</button> </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No reservations found</td></tr>";
}

// Close connection
mysqli_close($conn);
?>
