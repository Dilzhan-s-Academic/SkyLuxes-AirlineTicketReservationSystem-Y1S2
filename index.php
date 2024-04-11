<!--Dilshan Yapa it23366572-->

<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" type="text/css" href="styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="styles/index.css">
        
    </head>
    <body>
        <?php include "./config/header.php" ?>

        
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
            <span>Reserve Your Sheet</span>
            <div class="form-div">
                <form> 
                    <div class="form-elements">
                        <select name="DepartureAirport" id="DepartureAirport">
                            <option disabled selected value> From </option>
                            <option value="abc">abc</option>
                            <option value="ddd">ddd</option>
                            <option value="333">333</option>
                        </select>
                        <input type="date" id="DayToGo">
                        <input type="date" id="DayToCome">
                    </div>
                    <div class="form-elements">
                        <select name="DestinationAirport" id="DestinationAirport">
                            <option disabled selected value> To </option>
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
                    </div>
                    <div class="form-submittion">
                        <div class="TripType">
                            <input type="radio" id="TripType1" value="OneWay" name="TripType">
                            <lable id="TripType1">Oneway</lable>
                            <input type="radio" id="TripType2" value="Returm" name="TripType" checked="checked">
                            <lable id="TripType2">Return</lable>
                        </div>
                        <input type="Submit" id="Search" value="Search">
                    </div>
                </form>
            </div>
        </div>
        <div class="body-content">
            <div class="Packages">
                <h1>Our Travel Packages</h1>
                <div class="cardRow">
                <div class="card">
                    <div class="thumbnail">
                        <img src="images/Packages/Kyoto, Japan.jpg" alt="Package 1">
                    </div>
                    <div class="desc">
                        <span id="carddesc">Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content</span>
                    </div>
                    <div class="btns">
                        <button id="Buy">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="thumbnail">
                        <img src="images/Packages/Cape Town, South Africa.jpg" alt="Package 1">
                    </div>
                    <div class="desc">
                        <span id="carddesc">Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content</span>
                    </div>
                    <div class="btns">
                        <button id="Buy">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="thumbnail">
                        <img src="images/Packages/Istanbul, Turkey.jpg" alt="Package 1">
                    </div>
                    <div class="desc">
                        <span id="carddesc">Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content</span>
                    </div>
                    <div class="btns">
                        <button id="Buy">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="thumbnail">
                        <img src="images/Packages/Machu Picchu.jpg" alt="Package 1">
                    </div>
                    <div class="desc">
                        <span id="carddesc">Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content</span>
                    </div>
                    <div class="btns">
                        <button id="Buy">Buy Now</button>
                    </div>
                </div>
                </div>
                <div class="cardRow">
                <div class="card">
                    <div class="thumbnail">
                        <img src="images/Packages/Maui, Hawaii.jpg" alt="Package 1">
                    </div>
                    <div class="desc">
                        <span id="carddesc">Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content</span>
                    </div>
                    <div class="btns">
                        <button id="Buy">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="thumbnail">
                        <img src="images/Packages/Rome, Italy.jpg" alt="Package 1">
                    </div>
                    <div class="desc">
                        <span id="carddesc">Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content</span>
                    </div>
                    <div class="btns">
                        <button id="Buy">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="thumbnail">
                        <img src="images/Packages/Santorini, Greece.jpg" alt="Package 1">
                    </div>
                    <div class="desc">
                        <span id="carddesc">Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content</span>
                    </div>
                    <div class="btns">
                        <button id="Buy">Buy Now</button>
                    </div>
                </div>

                <div class="card">
                    <div class="thumbnail">
                        <img src="images/Packages/Paris, France.jpg" alt="Package 1">
                    </div>
                    <div class="desc">
                        <span id="carddesc">Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content</span>
                    </div>
                    <div class="btns">
                        <button id="Buy">Buy Now
                        </button>
                    </div>
                </div>
            </div>
            </div>

            <div class="Services">
                <h1>Our Services</h1>
                <div class="cardRow">
                <div class="card">
                    <div class="thumbnail">
                        <img src="images/Packages/Kyoto, Japan.jpg" alt="Package 1">
                    </div>
                    <div class="desc">
                        <span id="carddesc">Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content</span>
                    </div>
                    <div class="btns">
                        <button id="Buy">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="thumbnail">
                        <img src="images/Packages/Kyoto, Japan.jpg" alt="Package 1">
                    </div>
                    <div class="desc">
                        <span id="carddesc">Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content</span>
                    </div>
                    <div class="btns">
                        <button id="Buy">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="thumbnail">
                        <img src="images/Packages/Kyoto, Japan.jpg" alt="Package 1">
                    </div>
                    <div class="desc">
                        <span id="carddesc">Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content</span>
                    </div>
                    <div class="btns">
                        <button id="Buy">Buy Now</button>
                    </div>
                </div>
                <div class="card">
                    <div class="thumbnail">
                        <img src="images/Packages/Kyoto, Japan.jpg" alt="Package 1">
                    </div>
                    <div class="desc">
                        <span id="carddesc">Lorem ipsum is a placeholder text commonly used in publishing and graphic design to demonstrate the visual form of a document or a typeface without relying on meaningful content</span>
                    </div>
                    <div class="btns">
                        <button id="Buy">Buy Now</button>
                    </div>
                </div>
                </div>
                
            </div>
        </div>

        <?php include "./config/footer.php" ?>

        <script src="js/slideshow.js">
            
        </script>
        
    </body>
</html>