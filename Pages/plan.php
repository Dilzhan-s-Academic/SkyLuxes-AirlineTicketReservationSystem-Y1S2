<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/header.css">
        <link rel="stylesheet" type="text/css" href="../styles/footer.css">
        <link rel="stylesheet" type="text/css" href="../styles/plan.css">
        <link rel="stylesheet" href="https://flightDetails.fontawesome.com/releases/v5.10.0/css/all.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    </head>
    <body>
        <?php include "../config/header.php" ?>
    

        <div class= "SearchFlightsForm">
            <span>Reserve Your Seat</span>
            <div class="form-div">
                <form> 
                    <div class="form-elements">
                    <input type="text" name="DepartureAirport" id="DepartureAirport" placeholder="From">

                        <input type="date" id="DayToGo">
                        <input type="date" id="DayToCome">
                    </div>
                    <div class="form-elements">
                    <input type="text"  name="flightNametinationAirport"  id="flightNametinationAirport" placeholder="To">
                        
                        <select name="SeatCount" id="SeatCount">
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
                        <select name="SeatClass" id="SeatClass">
                            <option disabled selected value> Class </option>
                            <option value="abc">Economy</option>
                            <option value="ddd">Business</option>
                        </select>
                    </div>
                    <div class="form-submittion">
                        <div class="TripType">
                            <input type="radio" id="TripType1" value="OneWay" name="TripType">
                            <lable id="TripType1">Oneway</lable>
                            <input type="radio" id="TripType2" value="Return" name="TripType" checked="checked">
                            <lable id="TripType2">Return</lable>
                        </div>
                        <input type="Submit" id="Search" value="Search">
                    </div>
                </form>
            </div>
            <br>
            <div class="searchResults">
                <div class="result">Colombo to London</div>
                <div class="airportName">Sri Lankan Airlines</div>
                <div id="resultdatetime"></div>
            </div>
            <button id="bookNow">Book Now</button>
        </div>

        <button onclick="topFunction()" id="toTopBtn" title="Go to top">&#129093;</button>

        <h2> Value Added Services </h2>
<div class="check">
    <div class="vas">
      <i id="left" class="fa-solid fa-angle-left"></i>
      <ul class="carousel">
        <li class="vservice">
          <div class="img"><img src="../images/planSlider/advance_seat_reservation.jpg" alt="img" draggable="false"></div>
          <h2>Advance Seat Reservation</h2>
          <span>Window or an Aisle seat?<br>Reserve your seat in advance!</span>
          <button class="owlCbutton">Learn More</button>
        </li>
        <li class="vservice">
          <div class="img"><img src="../images/planSlider/bid_biz_class.jpg" alt="img" draggable="false"></div>
          <h2>Bid For Business Class</h2>
          <span>Bid For Your Business Class<br> Upgrade Online!</span>
          <button class="owlCbutton">Learn More</button>
        </li>
        <li class="vservice">
          <div class="img"><img src="../images/planSlider/duty_free.jpg" alt="img" draggable="false"></div>
          <h2>Pre Order Your duty Free!</h2>
          <span>You can easily pre-order your<br> favourite duty free items!</span>
          <button class="owlCbutton">Learn More</button>
        </li>
        <li class="vservice">
          <div class="img"><img src="../images/planSlider/nb_free_seat.jpg" alt="img" ></div>
          <h2>Neighbour Free Seats!</h2>
          <span>Fly in comfort with more space!<br> At reasonable fairs!</span>
          <button class="owlCbutton">Learn More</button>
        </li>
        <li class="vservice">
          <div class="img"><img src="../images/planSlider/extra_legroom_seat.jpg" alt="img" ></div>
          <h2>Extra Legroom Seat</h2>
          <span>Pre Book Extra Legroom <br>in Economy Class!</span>
          <button class="owlCbutton">Learn More</button>
        </li>
        <li class="vservice">
          <div class="img"><img src="../images/planSlider/prepaid_excess_baggage.jpg" alt="img" ></div>
          <h2>Pre Paid Excess Baggage</h2>
          <span>Pre-purchase extra baggage at a<br> discounted rate!</span>
          <button class="owlCbutton">Learn More</button>
        </li>
        <li class="vservice">
          <div class="img"><img src="../images/planSlider/special_moment_onboard.jpg" alt="img" ></div>
          <h2>Special Moments Onboard</h2>
          <span>Celebrate your memorable moments<br> on board with us!</span>
          <button class="owlCbutton">Learn More</button>
        </li>
        <li class="vservice">
          <div class="img"><img src="../images/planSlider/travel_insurance.jpg" alt="img"></div>
          <h2>Travel Insurance</h2>
          <span>You'll be covered for unforseen costs.<br>no more wondering what if?</span>
          <button class="owlCbutton">Learn More</button>
        </li>
      </ul>
      <i id="right" class="fa-solid fa-angle-right"></i>
    </div>
</div>
       
        <br>

        <h2>Popular Flights</h2>

        <section id="flights" class="pflights">
        
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Cape Town, South Africa.jpg" >
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>Cape Town, Africa</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Istanbul, Turkey.jpg" >
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>IstanBul, Turkey</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Kyoto, Japan.jpg">
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>Kyoto, Japan</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Machu Picchu.jpg" >
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>Machu Picchu</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Maui, Hawaii.jpg">
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>Maui, Hawaii</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Paris, France.jpg" >
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>Paris, France</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Rome, Italy.jpg" >
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>Rome, Italy</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Santorini, Greece.jpg">
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>Santorini, Greece</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Kyoto, Japan.jpg" >
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>IstanBul, Turkey</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Kyoto, Japan.jpg" >
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>IstanBul, Turkey</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Kyoto, Japan.jpg" >
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>IstanBul, Turkey</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Kyoto, Japan.jpg">
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>IstanBul, Turkey</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Kyoto, Japan.jpg" >
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>IstanBul, Turkey</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Kyoto, Japan.jpg">
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>IstanBul, Turkey</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Kyoto, Japan.jpg" >
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>IstanBul, Turkey</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                

                </div>
            
            </div>
            <div class="flightList">
                <div class="flightDetails">
                    <img src="../images/Packages/Kyoto, Japan.jpg" >
                    <div class="flightName">
                        <span>SkyLuxe</span>
                        <h5>IstanBul, Turkey</h5>
                    </div>
                    <div class="bookNow"><button>Book Now</button></div>
                </div>
            
            </div>
            
                
       

        </section>
        
        <?php include "../config/footer.php" ?>
        <script src="../js/plan.js"></script>
    </body>
</html>