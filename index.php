<!--Dilshan Yapa it23366572-->

<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" type="text/css" href="styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="styles/header.css">
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        
    </head>
    <body>
        <header>
            <img src="images/logo.png" alt="SkyLuxe Logo" class="logo">
            <nav>
                <ul class="navigation_links">
                    <li>
                        <a href="#">Home</a>
                    </li>
                    <li>
                        <a href="#">Plan & Book</a>
                    </li>
                    <li>
                        <a href="#">Services</a>
                    </li>
                    <li>
                        <a href="#">SkyLuxe</a>
                    </li>
                    <li>
                        <a href="#">Contact Us</a>
                    </li>
                </ul>
            </nav>
            <a href="#"><button>Sign in/up</button></a>
        </header>
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

        <div class= "SearchFlightsForm">
            <span>Book a Trip</span>
            <div class="form-div">
                <form> 
                    <select name="DepartureAirport" id="DepartureAirport">
                        <option disabled selected value> FROM </option>
                        <option value="abc">abc</option>
                        <option value="ddd">ddd</option>
                        <option value="333">333</option>
                    </select>
                    <input type="date" id="DayToGo">
                    <input type="date" id="DayToCome">
                    <br/>
                    <select name="DestinationAirport" id="DestinationAirport">
                        <option disabled selected value> TO </option>
                        <option value="abc">abc</option>
                        <option value="ddd">ddd</option>
                        <option value="333">333</option>
                    </select>
                    <select name="SheetCount" id="SheetCount">
                        <option disabled selected value> Sheet Count </option>
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
                    <select name="SheetClass" id="SheetClass">
                        <option disabled selected value> Class </option>
                        <option value="abc">Economy</option>
                        <option value="ddd">Business</option>
                    </select>
                    <br/>
                    <input type="radio" id="TripType1" value="OneWay" name="TripType"> Oneway
                    <input type="radio" id="TripType2" value="Returm" name="TripType"> Return
                    <input type="Submit" id="Search" value="Search">
                </form>
            </div>
        </div>
        <script src="js/slideshow.js"></script>
    </body>
</html>