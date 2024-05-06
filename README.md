# SkyLuxes-AirlineTicketReservationSystem

SkyLuxes: Streamlined airline ticket reservation system for hassle-free booking. Elevate your travel experience with intuitive UI, secure payments, and real-time updates. Join us on GitHub to contribute to the future of travel tech!

## Pre-requisites
- PHP installed on your server
- MySQL/MariaDB installed on your server
- Web server (e.g., Apache, Nginx) installed on your server

## Installation Steps

1. Clone or download this repository to your local machine.
2. Navigate to the `config` folder.
3. Locate the SQL file (`database.sql`) containing the database schema.
4. Import the `database.sql` file into your MySQL/MariaDB database to create the necessary tables and schema.
   ```bash
   mysql -u root -p < database.sql
   ```
   Note: If you're prompted for a password, leave it blank as per the default configuration mentioned.
5. Update the database connection details in the `dbConn.php` file located in the `config` folder.
   ```php
   $server = "localhost";
   $username = "root";
   $password = ""; // No password by default
   $database = "your_database_name"; // Update with your database name
   ```
6. Copy all the source files to your server.
7. Ensure that your server environment meets the pre-requisites mentioned above.
8. Navigate to the URL where you've copied the source files using a web browser.
9. The system should now be ready to use!


## Future Improvements

As we continue to evolve our system, we're always looking for ways to enhance the user experience and optimize performance. Here's what's on our roadmap for upcoming improvements:

### Seamless Content Integration (Dilshan Yapa)

At the moment, users navigate through legal menus and dashboards on separate pages. My goal is to make the user experience smoother by integrating content directly within the same page. This change will eliminate unnecessary page loads, making the system more intuitive and user-friendly.

### Docker Container Implementation (Dilshan Yapa)

I'm considering leveraging Docker containers to optimize deployment and scalability. By encapsulating the application and its dependencies, I aim to simplify deployment processes and ensure consistent performance across different environments. This approach will not only streamline deployment but also make it easier to manage and scale the project as it grows.
<hr>
Keep an eye out for these enhancements as we strive to make our system even more efficient and user-friendly!

## Individual Contribution

### DilZhan

    - Index.php

    - Config
        - databaseConnectionError.php
        - dbConn.php
        - header.php
    - JS
        - dynamicPageLoader.js
        - 
    - Pages
        - Dashboard
            - loyaltyCust.php
        - flightManagement.php
        - generalNotices.php
        - legalNotices.php
        - signIn.php
        - signUp.php
        - userDashboard.php
    - Process
        - addFlight.php
        - deleteFlight.php
        - editFlight.php
        - getFlightDetails.php
        - readAircraft.php
        - readAirport.php
        - readAirportWithout.php
        - signIn-Process.php
        - signUp-Process.php
        - signOut-Process.php

### Mithila

    - Config
        - footer.php
    - Js
        - checkPwd.js
    - Pages
        - Dashboard
            - userProfileInfo.php
        - adminDashboard.php
        - privacyPolicy.php
    - Process
        - delAcc-Process.php
        - getUserDetails.php
        - subscribe.php
        - updateAccInfo.php
        - updateuserInfo.php
        - getAdminDetails.php

### Dhanoshi

    - JS
        - popUpWindow.js
    - Pages
        - Dashboard
            - inquary.php
        - services.php
        - contactUs.php
    - Process
        - CreateInquary.php
        - deleteInquary.php
        - getInquaryDetails.php
        - UpdateInquary.php

### Thulya

    - JS
        - inquaryManagement.js
    - Pages
        - Dashboard
            - userReservation.php  
        - AboutUs.php
        - InquaryManagement.php
    - Process
        - checkInquaries.php
        - checkSolutions.php
        - delSolution.php
        - replyInquary.php
        - updateSolution.php

### Januda

    - JS
        - plan.js
    - Pages
        - termsCondition.php
        - plan.php
        - Booked.php
        - adminReport.php
        - codej.php
        - search.php
        - termsCondition.php
        - updated.php
        - userdashboard.php
        - usermanagementj.php