

<?php
    include("../config/dbConn.php");

    $sql = "SELECT * FROM inquary;";

    $result = mysqli_query($conn,$sql);

    $data = array();
    $row_index = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
            echo "<tr class=\"Inqary\">
                    <td>
                        <label for=\"Inqary\">". $row['InquaryID'] ."</label>
                    </td>
                    <td>
                        <label for=\"Inqary\">". $row['Name'] ." </label>
                    </td>
                    <td>
                        <label for=\"Inqary\">". $row['Email'] ." </label>
                    </td>
                    <td>
                        <label for=\"Inqary\">". $row['Subject'] ." </label>
                    </td>
                    <td>
                        <label for=\"Inqary\">". $row['Message'] ." </label>
                    </td>
                    <td class=\"Controllers\">
                        <button id=\"Replybtn\" onclick=\"if(window.confirm('Do you want to Reply this Inquary?')){openPopup('".$row['InquaryID']."')};\">Reply </button>
                    </td>
                </tr>";
            $row_index++;
        }
    }
?>