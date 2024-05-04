<!--N H D DILHARA IT23349438-->

<?php
    include("../../config/dbConn.php");

    $sql = "SELECT * FROM inquary";

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
        echo "<script> var InquaryData = " . json_encode($data) . "</script>";
?>