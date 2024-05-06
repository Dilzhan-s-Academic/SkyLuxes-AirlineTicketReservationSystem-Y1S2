<!--Dilshan Yapa S Y C T it23366572-->

<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" type="text/css" href="styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        <link rel="icon" type="image/x-icon" href="images/Icons/favicon.png">
        <title>Sky Luxe | Home</title>
        

        
    </head>
    <body>
        <?php include "./config/header.php" ?>

        <!-- W3School Slideshow Content Start - https://www.w3schools.com/howto/howto_js_slideshow.asp  -->
        <div class="slideshow-container">

        <div class="mySlides fade">
            <img src="images/slideshow/banner1.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/banner2.jpg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <img src="images/slideshow/banner3.jpg" style="width:100%">
        </div>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
        <!-- W3School Slideshow Content End  -->

        
        <div class= "SearchFlightsForm">
            <span>Reserve Your Seat</span>
            <div class="form-div">
                <form method="POST" action="Pages/plan.php"> 
                    <div class="form-elements">
                        <select name="DepartureAirport" id="DepartureAirport" required>
                            <option disabled selected value> From </option>
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
                                $conn->close();
                            ?>
                        </select>
                        <input type="date" name="DayToGo" id="DayToGo" data-placeholder="Departure Date" required>
                        <input type="date" id="DayToCome" name="DayToCome" data-placeholder="Return date" required>
                    </div>
                    <div class="form-elements">
                        <select name="ArrivalAirport" id="ArrivalAirport" required>
                            <option disabled selected value> To </option>
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
                                $conn->close();
                            ?>
                        </select>
                        <select name="SeatCount" id="SeatCount" required>
                            <option disabled selected value> Seat Count </option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                        </select>
                        <select name="SeatClass" id="SeatClass" required>
                            <option disabled selected value> Class </option>
                            <option value="economy">Economy</option>
                            <option value="pre-economy">Premium-Economy</option>
                            <option value="bussiness">Bussiness</option>
                            <option value="first">First</option>
                        </select>
                    </div>
                    <div class="form-submittion">
                        <div class="TripType">
                            <input type="radio" id="TripType1" value="OneWay" name="TripType">
                            <lable id="TripType1">Oneway</lable>
                            <input type="radio" id="TripType2" value="Returm" name="TripType" checked="checked">
                            <lable id="TripType2">Return</lable>
                        </div>
                        <input type="submit" id="Search" value="Search" name="submit">
                    </div>
                </form>
            </div>
        </div>

        <div class="body-content">
            <div class="contactus">
                <div class="support" onclick="">
                    <img src="images/icons/help.png">
                    <div class="conContent">
                        <span>We are currently open and ready to assist you.</span>
                        <span id="tel">call +94 11 1234567</span>
                    </div>
                    
                </div>
                <div class="support">
                    <img src="images/icons/help2.png">
                    <div class="conContent">
                        <span>Flight Inquiry</span>
                        <span id="tel">call +94 11 1234567</span>
                    </div>
                </div>
                <div class="support">
                    <img src="images/icons/help3.png">
                    <div class="conContent">
                        <span>Refund Inquiry</span>
                        <span id="tel">call +94 11 1234567</span>
                    </div>
                </div>
            </div>
            
            <div class="Packages">
                <h1>Our Travel Packages</h1>
                <div class="cardRow">
                    <div class="card" onclick="openPopup('pacakgeView');" style="background-image: url('images/Packages/Kyoto, Japan.jpg');">
                        <div class="package">
                            <div class="packDetails">
                                <span id="name">Kyoto, Japan</span>
                                <span id="desc">Kyoto, Japan, steeped in rich history and tradition, is renowned for its stunning temples, serene gardens, and preserved cultural heritage.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card" onclick="openPopup('pacakgeView');" style="background-image: url('images/Packages/Istanbul, Turkey.jpg');">
                        <div class="package">
                            <div class="packDetails">
                                <span id="name">Istanbul, Turkey</span>
                                <span id="desc">Istanbul, Turkey, straddling two continents, exudes a mesmerizing blend of East and West, where ancient mosques, bustling bazaars, and modern delights converge along the scenic Bosphorus.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="cardRow">
                    <div class="card" onclick="openPopup('pacakgeView');" style="background-image: url('images/Packages/Rome, Italy.jpg');">
                        <div class="package">
                            <div class="packDetails">
                                <span id="name">Rome, Italy</span>
                                <span id="desc">Rome, Italy, the Eternal City, boasts a timeless blend of ancient ruins, Renaissance architecture, and delectable cuisine, embodying centuries of history and culture.
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="card" onclick="openPopup('pacakgeView');" style="background-image: url('images/Packages/Paris, France.jpg');">
                        <div class="package">
                            <div class="packDetails">
                                <span id="name">Paris, France</span>
                                <span id="desc">
                                    Paris, France, the City of Light, captivates with its iconic landmarks, romantic ambiance, and vibrant arts scene.
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Services">
                <div class="leftContent">
                    <div class="heading">
                        <h3>Sky Luxe Services</h3>
                        <span>
                            Skluxe Airlines' intuitive online booking platform makes reserving flights a breeze. Search for flights, compare options, and book seamlessly with real-time availability and pricing. Manage bookings, choose extras, and plan your entire trip effortlessly.
                        </span>
                    </div>
                </div>
                <div class="rightEmptyContent">
                </div>
            </div>
            <div class="custSatist">
                <div class="leftContent">
                    <h3>Customer Satistfaction</h3>
                    <span>
                        Experience unparalleled satisfaction with Skyluxe Airlines, where every journey is crafted to exceed your expectations.
                    </span>
                    <div class="count">
                        <div class="happyCustCount">
                            <div class="content">
                                <span id="countCal">+8</span>
                                <span id="countTitle">Happy Customers</span>
                            </div>
                            <div class="logo">
                                <img src="images/Icons/user.png" alt="customer">
                            </div>
                        </div>
                        <div class="ClientSatist">
                            <div class="content">
                                <span id="countCal">+18</span>
                                <span id="countTitle">Client Satisfied</span>
                            </div>
                            <div class="logo">
                                <img src="images/Icons/user-2.png" alt="customer">
                            </div>
                        </div>
                    </div>
                    <div class="contactus">
                        <span>Lets Connect with us for More Information</span>
                        <button onclick="">Contact Us</button>
                    </div>
                </div>
                
                <div class="rightContent">
                    <img src="images/Services/raychan-mnypcmLnXE0-unsplash.jpg">
                </div>
            </div>
            <div class="aboutUs">
                <div class="head">
                    <h2>About Us</h2>
                </div>
                <div class="para">
                    <p>
                        Welcome to Skyluxe Airline's Ticket Reservation System! We're here to make booking your flights simple and stress-free. Enjoy seamless travel planning with us!
                    </p>
                </div>
                <div class="content">
                    <div class="holders">
                        <img src="images/AboutUS/airline.png" alt="Our Business">
                        <label>Our Business</label>
                    </div>

                    <div class="holders">
                        <img src="images/AboutUS/Planet.png" alt="Our Planet">
                        <label>Our Planet</label>
                    </div>

                    <div class="holders">
                        
                        <img src="images/AboutUS/People.png" alt="Our People">
                        <label>Our People</label>
                    </div>

                    <div class="holders">
                        <img src="images/AboutUS/Community.png" alt="Our Community">
                        <label>Our Community</label>
                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="pacakgeView" id="pacakgeView">
            <div class="popuphead">
                <div class="packageName">
                    <span id="pkgName">Package Name</span>
                </div>
                <div class="popupClose">
                    <img src="images/Icons/close.png" alt="close" onclick="closePopup('pacakgeView');">
                </div>
            </div>
            
            <div class="pkgDesc">
                <span>Destination : </span> 
                <span>Duration : </span>  
                <span>Price : </span> 
                <span>Agent Name : </span>  
                <span>Services List : </span>
                    <ul>
                        <li>
                            Services not avalable yet!
                        </li>
                        <li>
                            Services not avalable yet!
                        </li>
                        <li>
                            Services not avalable yet!
                        </li>
                        <li>
                            Services not avalable yet!
                        </li>
                    </ul>
            </div>
            <div class="errormsg">
                <span>&#9888; Dear customers,this Package is Not avalable yet.</span>
            </div>
            <div class="btns">
                <button id="Buy" disabled>Buy Now</button>
            </div>
        </div>
        
        <?php include "./config/footer.php" ?>
        <script src="js/slideshow.js"></script>
        <script src="js/popupWindow.js"></script>
        
    </body>
</html>