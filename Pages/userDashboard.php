<!--Dilshan Yapa S Y C T it23366572-->

<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
    </head>
    <body>
        <?php include "../config/header.php" ?>
        <div class="body-content">
            <div class="userDashboardMenu">
                <div class="user">
                    <div class="profilePic">
                        <img src="../images/userProfilePic.jpeg" alt="user">
                    </div>
                    <div class="userName">
                        <span>Dilzhan Yapa</span>
                    </div>
                    <div class="userBio">
                        <span>Lorem ipsum is a placeholder text commonly used in publishing and graphic </span>
                    </div>
                </div>
                <div class="navList">
                    <ul class="linkList">
                        <a href="#" id="resv" onclick="loadContent('myresrv');">
                            <li> My Reservations </li>
                        </a>
                        <a href="#" id="info" onclick="loadContent('myinfo');">
                            <li> Profile Information </li>
                        </a>
                        <a href="#" id="logout">
                            <li style="background-color: #f00;color:#fff"> Log Out </li>
                        </a>
                    </ul>
                </div>
            </div>
            <div id="content">
            </div>
        </div>
    <?php include "../config/footer.php" ?>
    <script>
        function loadContent(page) {
            var path = ""
            var contentContainer = document.getElementById('content');
            switch(page){
                case 'myinfo':
                    path = 'Dashboard/userProfileInfo.php';
                    break;
                case 'myresrv':
                    path = 'Dashboard/userReservationInfo.php';
                    break;
            }
            fetch(path)
                .then(response => response.text())
                .then(data => {
                    contentContainer.innerHTML= data;
                })
                .catch(error => console.error('Error fetching content:', error));
        }
        
        loadContent('myinfo');
    </script>
    </body>
</html>