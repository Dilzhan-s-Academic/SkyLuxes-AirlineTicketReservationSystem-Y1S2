<!--N H D DILHARA -->

<?php
    include("../../config/dbConn.php");
    session_start();
    
    $username = $_SESSION['username'];
    $username = preg_replace("/[^a-zA-Z0-9]/", "", $username);

    $sql = "SELECT * FROM inquary WHERE Username = '".$username."';";

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
                        <button id=\"editBtn\" onclick=\"if(window.confirm('Do you want to Edit this Inquary?')){
                            document.location = '../Pages/contactUs.php?edit=clicked&Iid=".$row['InquaryID']."&IName=".$row['Name']."&IEmail=".$row['Email']."&Isubject=".$row['Subject']."&Imsg=".$row['Message']." ';};\"> Edit </button>

                        <button id=\"delBtn\" onclick=\"if(window.confirm('Do you want to Delete this Inquary?')){document.location = '../Process/deleteInquary.php?id=".$row['InquaryID']."';};\">Delete </button>
                    </td>
                </tr>";
            $row_index++;
        }
    }
    $conn->close();
?>
