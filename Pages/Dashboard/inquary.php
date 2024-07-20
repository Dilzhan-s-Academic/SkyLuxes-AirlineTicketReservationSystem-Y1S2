<!--N H D DILHARA -->


<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
        <link rel="icon" type="image/x-icon" href="http://localhost/SkyLuxes-AirlineTicketReservationSystem/images/Icons/favicon.png">
        <title>Sky Luxe | Admin Dashboard</title>
        <style>
            .headding {
                margin-top: 50px;
            }
            .inquariesContainer {
                border: 0.5px solid rgba(83, 83, 172, 0.425);
                border-radius: 5px;
                box-shadow: 0 5px 10px rgba(0,0,0,0.5);
                max-width: 100%;
                padding: 10px 10px 50px 10px;
                background-color: #d8d9d85f;
                margin-bottom: 50px;
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
            .inquaryList {
                max-height: 300px;
                overflow-y: scroll;
                border-radius: 5px;
            }
            th {
                position: sticky;
                top: 0px;
                background-color: #ed6197;
                padding: 10px;
                width:calc(100% / 6);
            }
            #selectCheckBox {
                width:50px
            }
            td {
                text-align: center;
                padding: 10px;
            }
            td label {
                display: inline-block;
                padding: 5px 10px;
            }
            tr {
                transition: background-color 0.3s ease;
            }
            tr:hover {
                background-color: #f0f0f0;
            }
            .Controllers {
                text-align: center;
                align-items: center;
            }
            #editBtn , #delBtn {
                background-color: #ed6197;
                color: #fff;
                font-weight: 500;
                padding: 10px;
                border-radius: 5px;
                cursor: pointer;
                transition: all 0.2s ease;
            }
            #delBtn {
                background-color: red;
            }
            #editBtn:hover , #delBtn:hover {
                opacity: 0.9;
            }
            #editBtn:active , #delBtn:active {
                transform: scale(0.9);
            }
        </style>
    </head>
    <body>
            <h1 class="headding">My Inquaries</h1>
            <div class="inquariesContainer">
                <h3>Inquaries</h3>
                <div class="inquaryListWrapper">
                    <div class="inquaryList">
                        <table>
                            <tr>
                                <th>
                                    Inquary ID
                                </th>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Subject
                                </th>
                                <th>
                                    Message
                                </th><th>
                                    Controllers
                                </th>
                            </tr>
                            
                            <?php include '../../Process/getinquaryDetails.php'; ?>
                            
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
</html>
