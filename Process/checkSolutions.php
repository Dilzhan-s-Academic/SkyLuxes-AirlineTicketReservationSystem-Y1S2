
<?php
    include("../config/dbConn.php");

    $sql = "SELECT s.solutionID,s.InquaryID,a.FirstName,s.Subject,s.Message FROM solution s, user a WHERE a.Username = s.AdminID;";

    $result = mysqli_query($conn,$sql);

    $data = array();
    $row_index = 0;
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $data[] = $row;
            echo "<tr class=\"Inqary\">
                    <td>
                        <label for=\"Inqary\">". $row['solutionID'] ."</label>
                    </td>
                    <td>
                        <label for=\"Inqary\">". $row['InquaryID'] ." </label>
                    </td>
                    <td>
                        <label for=\"Inqary\">". $row['FirstName'] ." </label>
                    </td>
                    <td>
                        <label for=\"Inqary\">". $row['Subject'] ." </label>
                    </td>
                    <td>
                        <label for=\"Inqary\">". $row['Message'] ." </label>
                    </td>
                    <td class=\"Controllers\">
                        <button id=\"Replybtn\" onclick=\"if(window.confirm('Do you want to Reply this Inquary?')){openPopupEditor('".$row['solutionID']."','".$row['InquaryID']."','".$row['Subject']."','".$row['Message']."')};\">Update </button>
                        <button id=\"Replybtn\" style='background-color:red;' onclick=\"if(window.confirm('Do you want to Delete this Inquary?')){document.location = '../Process/delSolution.php?id=". $row['solutionID'] ."';};\">Delete </button>
                    </td>
                </tr>";
            $row_index++;
        }
    }
    
    $conn->close();
?>