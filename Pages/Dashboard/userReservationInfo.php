<!--Dilshan Yapa S Y C T it23366572-->
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <style>
            .headding {
                margin-top: 50px;
            }
            .reservationDetailContainer {
                border: 0.5px solid rgba(83, 83, 172, 0.425);
                border-radius: 5px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.5);
                max-width: 100%;
                padding: 10px 10px 50px 10px;
                background-color: #d8d9d85f;
            }
            h1,h3 {
                text-align: left;
            }
            table {
                border: 1px solid #c4c4c4;
                background-color: #fff;
                border-radius: 5px;
                width: 100%;
                
            }
            .reservationList {
                max-height: 300px;
                overflow-y: scroll;
                border-radius: 5px;
            }
            th {
                position: sticky;
                top: 0px;
                background-color: #ed6197;
                padding: 10px;
                width:calc(100% / 5);
            }
            #selectCheckBox {
                width:50px
            }
            td {
                text-align: center;
                padding: 10px;
            }
            label {
                display: inline-block;
                padding: 5px 10px;
                cursor: pointer;
            }
            tr {
                transition: background-color 0.3s ease;
            }
            tr:hover {
                background-color: #f0f0f0;
            }

            .editingBtns {
                display: flex;
                justify-content: flex-end;
            }

            .editingBtns button {
                background-color: #007bff;
                opacity: 0.9;
                color: #fff;
                border-radius: 5px;
                margin: 20px 10px 5px 0px;
                padding: 10px 20px;
            }
            .editingBtns button:hover {
                opacity: 0.8 ;
            }
            .editingBtns button:active {
                opacity: 1;
            }
            .viewReservation {
                position: fixed;
                text-align: center;
                top: 60%;
                left: 50%;
                width: 50%;
                transform: translate(-50%,-50%);
                background-color: #fff;
                box-shadow: 5px 10px 10px  rgba(83, 83, 172, 0.5);
                padding: 10px 50px 20px;
                visibility: hidden;
            }
            .reservationDetailsBtns > button {
                padding: 10px 30px;
                color: #fff;
                font-weight: 500;
                background-color: #0f0;
                border-radius: 10px;
                margin-top: 50px;
                cursor: pointer;
                opacity: 0.8;
            }
            .reservationDetailsBtns > button:hover {
                opacity: 0.9;
            }
            .reservationDetailsBtns > button:active {
                opacity: 1;
            }
            .reservationDetails > span {
                margin: 10px;
                display: flex;
                
            }

        </style>
    </head>
        <body>
            <h1 class="headding">My Reservation</h1>
            <div class="reservationDetailContainer">
                <h3>Reservations</h3>
                <div class="reservationListWrapper">
                    <div class="reservationList">
                        <table>
                            <tr>
                                <th>
                                    Destination
                                </th>
                                <th>
                                    Air Craft Name
                                </th>
                                <th>
                                    Seat No 
                                </th>
                                <th>
                                    Departure Time
                                </th>
                                <th>
                                    Status
                                </th>
                            </tr>
                            <tr class="reservationID" onclick="openPopup('viewReservation')">
                                <td>
                                    <label for="reservationID"> ABCDEF </label>
                                </td>
                                <td>
                                    <label for="reservationID"> ABCDEF </label>
                                </td>
                                <td>
                                    <label for="reservationID"> ABCDEF </label>
                                </td>
                                <td>
                                    <label for="reservationID"> ABCDEF </label>
                                </td>
                                <td>
                                    <label for="reservationID"> ABCDEF </label>
                                </td>
                            </tr>
                            
                        </table>
                    </div>
                </div>
            </div>
            <div class="viewReservation" id="viewReservation">
                <h3 style="text-align: center;">Reservation Details</h3>
                <div class="reservationDetails">
                    <span>Reservation ID :</span>
                    <span>Flight Name :</span>
                    <span>AirCraft Name :</span>
                    <span>Seat No :</span>
                    <span>Departure Date :</span>
                    <span>Departure Time :</span>
                    <span>Arrival Date :</span>
                    <span>Arrival Time :</span>
                    <span>Departure Airport :</span>
                    <span>Ticket Price :</span>
                </div>
                <div class="reservationDetailsBtns">
                    <button onclick="" style="background-color: #f00;">Delete</button>
                    <button onclick="closePopup('viewReservation')">OK</button>
                </div>
            </div>
        </body>
</html>