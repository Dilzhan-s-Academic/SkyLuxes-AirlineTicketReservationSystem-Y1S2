<!-- IT23365346
BJS PERERA -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" type="text/css" href="../styles/generalStyle.css">
        <link rel="stylesheet" type="text/css" href="../styles/dashboard.css">
        <link rel="icon" type="image/x-icon" href="../images/Icons/favicon.png">
        <title>Sky Luxe | Admin Dashboard</title>
    <title>Reports</title>
    <link rel="stylesheet" href="../styles/adminReport.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

<?php include "../config/header.php"; ?>


<div class="body-content">
            <div class="userDashboardMenu">
                <div class="user">
                    <div class="profilePic">
                        <img src="../images/userProfilePic.jpeg" alt="user">
                    </div>
                    <div class="userName">
                        <span><?php echo $_SESSION['fname']." ".$_SESSION['lname']; ?></span>
                    </div>
                </div>
                <div class="navList">
                    <ul class="linkList">
                        <li onclick="window.location.href = 'adminreport.php';"> Reports</li>
                        <li onclick="window.location.href = 'flightManagement.php';"> Flight Management </li>
                        <li onclick="window.location.href = 'usermanagementj.php';"> User Management </li>
                        <li> Profile Information </li>
                        <li> Inquary Management </li>

                        <li style="background-color: rgba(125, 23, 41, 0.81); color:#fff" onclick=" if(window.confirm('Do you want to Delete Your Account?')){document.location = '../Process/signOut-Process.php';}"> Delete Account </li>

                        <li style="background-color: #f00;color:#fff" onclick=" if(window.confirm('Do you want to Sign Out?')){document.location = '../Process/signOut-Process.php';}"> Sign Out </li>
                    </ul>
                </div>
            </div>
            <div class="content">





    <div class="reports">
        <div id="packageHeader">Package Sale Details for Previous 6 Months</div>

        <div class="packages">

            <div class="economy">
                <div class="topics">Previous Six Months sales Economy-Class</div>
                <div id="eco-chart"></div>
            </div>
            <div class="premiumEco">
                <div class="topics">Previous Six Months Premium Economy-Class Sales</div>
                <div id="pre-chart"></div>
            </div>

            <div class="business">
                <div class="topics">Previous Six Months Business-Class Sales</div>
                <div id="bus-chart"></div>
            </div>
            <div class="firstclass">
                <div class="topics">Previous Six Months First-Class Sales</div>
                <div id="first-chart"></div>
            </div>

        </div>

        <div id="otherHeader">Other Reports</div>

        <div class="otherReports">

            <div class="customerSat">
                <div class="topics">Average Customer Reviews </div>
                <div id="customer-chart"></div>
            </div>

            <div class="airportProfits">
                <div class="topics">Previous Six Month Expenses & Sales</div>
                <div id="air-chart"></div>
                <div class="topics">Net Sales , Net Expenses x 10<sup>6</sup>$</div>

            </div>

        </div>
    </div>



        

            
    </div>    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>

    <?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $host = "localhost";
    $dbname = "sky_luxe_db";
    $dbusername = "root";
    $dbpassword = "";

    $mysqli = new mysqli($host, $dbusername, $dbpassword, $dbname);

    $resultE = $mysqli->query("SELECT eco FROM package_sales;");
    $dataE = $resultE->fetch_all();

    $resultPE = $mysqli->query("SELECT preeco FROM package_sales;");
    $dataPE = $resultPE->fetch_all();

    $resultB = $mysqli->query("SELECT bussiness FROM package_sales;");
    $dataB = $resultB->fetch_all();

    $resultF = $mysqli->query("SELECT firstclass FROM package_sales;");
    $dataF = $resultF->fetch_all();


    $mysqli->close();

    ?>
    <script>
        const dataE = <?php echo json_encode($dataE); ?>;
        const dataEC = [];
        for (let i = 0; i < dataE.length; i++) {
            dataEC.push(Number(dataE[i]));
        }

        const dataPE = <?php echo json_encode($dataPE); ?>;
        const dataPEC = [];
        for (let i = 0; i < dataPE.length; i++) {
            dataPEC.push(Number(dataPE[i]));
        }

        const dataB = <?php echo json_encode($dataB); ?>;
        const dataBC = [];
        for (let i = 0; i < dataB.length; i++) {
            dataBC.push(Number(dataB[i]));
        }

        const dataF = <?php echo json_encode($dataF); ?>;
        const dataFC = [];
        for (let i = 0; i < dataF.length; i++) {
            dataFC.push(Number(dataF[i]));
        }

        // Define options for the ApexCharts bar chart
        const ecoChartOptions = {
            // Series data for the chart
            series: [{
                data: dataEC, // Data values for each bar
                name: 'Sold', // Name of the series
            }, ],
            // Chart configuration
            chart: {
                type: 'bar', // Type of chart (bar chart)
                background: 'transparent', // Background color of the chart
                height: 350, // Height of the chart
                toolbar: {
                    show: false, // Hide the chart toolbar
                },
            },
            // Custom colors for the bars
            colors: ['#3498db', '#2ecc71', '#e67e22', '#9b59b6', '#f1c40f', '#e74c3c'],
            // Plot options for the bars
            plotOptions: {
                bar: {
                    distributed: true, // Distribute bars evenly
                    borderRadius: 5, // Rounded corner radius of the bars
                    horizontal: false, // Display bars vertically
                    columnWidth: '50%', // Width of each column
                },
            },
            // Configure data labels (text on bars)
            dataLabels: {
                enabled: false, // Disable data labels
            },
            // Configure bar fill properties
            fill: {
                opacity: 1, // Set fill opacity to fully opaque
            },
            // Grid configuration
            grid: {
                borderColor: '#55596e', // Color of gridlines
                yaxis: {
                    lines: {
                        show: true, // Show horizontal gridlines
                    },
                },
                xaxis: {
                    lines: {
                        show: true, // Show vertical gridlines
                    },
                },
            },
            // Legend configuration
            legend: {
                labels: {
                    colors: 'white', // Color of legend labels
                },
                show: true, // Show legend
                position: 'top', // Position of legend
            },
            // Stroke properties for bars

            // Tooltip configuration

            // X-axis configuration
            xaxis: {
                categories: ['November', 'December', 'January', 'February', 'March', 'April'], // X-axis labels
                title: {
                    text: ' Last 6 Months',
                    style: {
                        color: 'white', // Color of x-axis title
                    },
                },
                axisBorder: {
                    show: true,
                    color: '#55596e', // Color of x-axis line
                },
                axisTicks: {
                    show: true,
                    color: 'white', // Color of x-axis ticks
                },
                labels: {
                    style: {
                        colors: 'white', // Color of x-axis labels
                    },
                },
            },
            // Y-axis configuration
            yaxis: {
                title: {
                    text: 'Monthly Average Ticket Sale', // Y-axis title
                    style: {
                        color: 'white', // Color of y-axis title
                    },
                },
                axisBorder: {
                    color: '#55596e', // Color of y-axis line
                    show: true,
                },
                axisTicks: {
                    color: 'white', // Color of y-axis ticks
                    show: true,
                },
                labels: {
                    style: {
                        colors: 'white', // Color of y-axis labels
                    },
                },
            },
        };

        // Create a new ApexCharts instance with the specified options and render it
        const ecoChart = new ApexCharts(document.querySelector('#eco-chart'), ecoChartOptions);
        ecoChart.render(); // Render the chart

        // Premium Economy


        const preChartOptions = {
            // Series data for the chart
            series: [{
                data: dataPEC,
                name: 'Sold',
            }, ],

            chart: {
                type: 'bar',
                background: 'transparent',
                height: 350,
                toolbar: {
                    show: false,
                },
            },

            colors: ['#3498db', '#2ecc71', '#e67e22', '#9b59b6', '#f1c40f', '#e74c3c'],

            plotOptions: {
                bar: {
                    distributed: true,
                    borderRadius: 5,
                    horizontal: false,
                    columnWidth: '50%',
                },
            },

            dataLabels: {
                enabled: false,
            },

            fill: {
                opacity: 1,
            },

            grid: {
                borderColor: '#55596e', // Color of gridlines
                yaxis: {
                    lines: {
                        show: true, // Show horizontal gridlines
                    },
                },
                xaxis: {
                    lines: {
                        show: true, // Show vertical gridlines
                    },
                },
            },
            // Legend configuration
            legend: {
                labels: {
                    colors: 'white', // Color of legend labels
                },
                show: true, // Show legend
                position: 'top', // Position of legend
            },
            // Stroke properties for bars

            // Tooltip configuration

            // X-axis configuration
            xaxis: {
                categories: ['November', 'December', 'January', 'February', 'March', 'April'], // X-axis labels
                title: {
                    text: ' Last 6 Months',
                    style: {
                        color: 'white', // Color of x-axis title
                    },
                },
                axisBorder: {
                    show: true,
                    color: '#55596e', // Color of x-axis line
                },
                axisTicks: {
                    show: true,
                    color: 'white', // Color of x-axis ticks
                },
                labels: {
                    style: {
                        colors: 'white', // Color of x-axis labels
                    },
                },
            },
            // Y-axis configuration
            yaxis: {
                title: {
                    text: 'Monthly Average Ticket Sale', // Y-axis title
                    style: {
                        color: 'white', // Color of y-axis title
                    },
                },
                axisBorder: {
                    color: '#55596e', // Color of y-axis line
                    show: true,
                },
                axisTicks: {
                    color: 'white', // Color of y-axis ticks
                    show: true,
                },
                labels: {
                    style: {
                        colors: 'white', // Color of y-axis labels
                    },
                },
            },
        };

        // Create a new ApexCharts instance with the specified options and render it
        const preChart = new ApexCharts(document.querySelector('#pre-chart'), preChartOptions);
        preChart.render(); // Render the chart

        // Business Chart

        const busChartOptions = {
            // Series data for the chart
            series: [{
                data: dataBC,
                name: 'Sold',
            }, ],

            chart: {
                type: 'bar',
                background: 'transparent',
                height: 350,
                toolbar: {
                    show: false,
                },
            },

            colors: ['#3498db', '#2ecc71', '#e67e22', '#9b59b6', '#f1c40f', '#e74c3c'],

            plotOptions: {
                bar: {
                    distributed: true,
                    borderRadius: 5,
                    horizontal: false,
                    columnWidth: '50%',
                },
            },

            dataLabels: {
                enabled: false,
            },

            fill: {
                opacity: 1,
            },

            grid: {
                borderColor: '#55596e', // Color of gridlines
                yaxis: {
                    lines: {
                        show: true, // Show horizontal gridlines
                    },
                },
                xaxis: {
                    lines: {
                        show: true, // Show vertical gridlines
                    },
                },
            },
            // Legend configuration
            legend: {
                labels: {
                    colors: 'white', // Color of legend labels
                },
                show: true, // Show legend
                position: 'top', // Position of legend
            },
            // Stroke properties for bars

            // Tooltip configuration

            // X-axis configuration
            xaxis: {
                categories: ['November', 'December', 'January', 'February', 'March', 'April'], // X-axis labels
                title: {
                    text: ' Last 6 Months',
                    style: {
                        color: 'white', // Color of x-axis title
                    },
                },
                axisBorder: {
                    show: true,
                    color: '#55596e', // Color of x-axis line
                },
                axisTicks: {
                    show: true,
                    color: 'white', // Color of x-axis ticks
                },
                labels: {
                    style: {
                        colors: 'white', // Color of x-axis labels
                    },
                },
            },
            // Y-axis configuration
            yaxis: {
                title: {
                    text: 'Monthly Average Ticket Sale', // Y-axis title
                    style: {
                        color: 'white', // Color of y-axis title
                    },
                },
                axisBorder: {
                    color: '#55596e', // Color of y-axis line
                    show: true,
                },
                axisTicks: {
                    color: 'white', // Color of y-axis ticks
                    show: true,
                },
                labels: {
                    style: {
                        colors: 'white', // Color of y-axis labels
                    },
                },
            },
        };

        // Create a new ApexCharts instance with the specified options and render it
        const busChart = new ApexCharts(document.querySelector('#bus-chart'), busChartOptions);
        busChart.render(); // Render the chart

        //---------First Class--------------

        const firstChartOptions = {
            // Series data for the chart
            series: [{
                data: dataFC,
                name: 'Sold',
            }, ],

            chart: {
                type: 'bar',
                background: 'transparent',
                height: 350,
                toolbar: {
                    show: false,
                },
            },

            colors: ['#3498db', '#2ecc71', '#e67e22', '#9b59b6', '#f1c40f', '#e74c3c'],

            plotOptions: {
                bar: {
                    distributed: true,
                    borderRadius: 5,
                    horizontal: false,
                    columnWidth: '50%',
                },
            },

            dataLabels: {
                enabled: false,
            },

            fill: {
                opacity: 1,
            },

            grid: {
                borderColor: '#55596e', // Color of gridlines
                yaxis: {
                    lines: {
                        show: true, // Show horizontal gridlines
                    },
                },
                xaxis: {
                    lines: {
                        show: true, // Show vertical gridlines
                    },
                },
            },
            // Legend configuration
            legend: {
                labels: {
                    colors: 'white', // Color of legend labels
                },
                show: true, // Show legend
                position: 'top', // Position of legend
            },
            // Stroke properties for bars

            // Tooltip configuration

            // X-axis configuration
            xaxis: {
                categories: ['November', 'December', 'January', 'February', 'March', 'April'], // X-axis labels
                title: {
                    text: ' Last 6 Months',
                    style: {
                        color: 'white', // Color of x-axis title
                    },
                },
                axisBorder: {
                    show: true,
                    color: '#55596e', // Color of x-axis line
                },
                axisTicks: {
                    show: true,
                    color: 'white', // Color of x-axis ticks
                },
                labels: {
                    style: {
                        colors: 'white', // Color of x-axis labels
                    },
                },
            },
            // Y-axis configuration
            yaxis: {
                title: {
                    text: 'Monthly Average Ticket Sale', // Y-axis title
                    style: {
                        color: 'white', // Color of y-axis title
                    },
                },
                axisBorder: {
                    color: '#55596e', // Color of y-axis line
                    show: true,
                },
                axisTicks: {
                    color: 'white', // Color of y-axis ticks
                    show: true,
                },
                labels: {
                    style: {
                        colors: 'white', // Color of y-axis labels
                    },
                },
            },
        };

        // Create a new ApexCharts instance with the specified options and render it
        const firstChart = new ApexCharts(document.querySelector('#first-chart'), firstChartOptions);
        firstChart.render(); // Render the chart


        // customer satisfaction


        var options = {
            series: [1000, 1300, 2000, 1600, 1200],
            chart: {
                width: 600,
                type: 'pie',
            },
            labels: ['Poor', 'Average', 'Satisfied', 'Highly Satisfied', 'Excellent'],
            legend: {
                labels: {
                    colors: 'white', // Color of legend labels
                },
                show: true, // Show legend
                position: 'right', // Position legend on the right side
                offsetY: 9, // Adjust vertical offset (optional)
                offsetX: -40, // Adjust horizontal offset (optional)
                itemMargin: {
                    vertical: 8, // Vertical margin between legend items (optional)
                },
            },
        };

        var cusChart = new ApexCharts(document.querySelector("#customer-chart"), options);
        cusChart.render();

        // Air Reports CHART
        const airChartOptions = {
            series: [{
                    name: 'Net Sales',
                    data: [170, 302, 228, 128, 174, 324],
                },
                {
                    name: 'Net Expenses',
                    data: [210, 120, 160, 150, 70, 220],
                },
            ],
            chart: {
                type: 'area',
                background: 'transparent',
                height: 350,
                stacked: false,
                toolbar: {
                    show: false,
                },
            },
            colors: ['#00ab57', '#d50000'],
            labels: ['Nov', 'Dec', 'Jan', 'Feb', 'Mar', 'Apr'],
            dataLabels: {
                enabled: false,
            },
            fill: {
                gradient: {
                    opacityFrom: 0.4,
                    opacityTo: 0.1,
                    shadeIntensity: 1,
                    stops: [0, 100],
                    type: 'vertical',
                },
                type: 'gradient',
            },
            grid: {
                borderColor: '#55596e',
                yaxis: {
                    lines: {
                        show: true,
                    },
                },
                xaxis: {
                    lines: {
                        show: true,
                    },
                },
            },
            legend: {
                labels: {
                    colors: '#f5f7ff',
                },
                show: true,
                position: 'top',
            },
            markers: {
                size: 6,
                strokeColors: '#1b2635',
                strokeWidth: 3,
            },
            stroke: {
                curve: 'smooth',
            },
            xaxis: {
                axisBorder: {
                    color: '#55596e',
                    show: true,
                },
                axisTicks: {
                    color: '#55596e',
                    show: true,
                },
                labels: {
                    offsetY: 5,
                    style: {
                        colors: '#f5f7ff',
                    },
                },
            },
            yaxis: [{
                    title: {
                        text: 'Net Sales (x 10\u2076 m$)',
                        style: {
                            color: '#f5f7ff',
                            size: '5px',
                        },
                    },
                    labels: {
                        style: {
                            colors: ['#f5f7ff'],
                        },
                    },
                },
                {
                    opposite: true,
                    title: {
                        text: 'Net Expenses (x 10\u2076 m$)',
                        style: {
                            color: '#f5f7ff',
                        },
                    },
                    labels: {
                        style: {
                            colors: ['#f5f7ff'],
                        },
                    },
                },
            ],
            tooltip: {
                shared: true,
                intersect: false,
                theme: 'dark',
            },
        };

        const airChart = new ApexCharts(document.querySelector('#air-chart'), airChartOptions);
        airChart.render();
    </script>
</div>
<?php include "../config/footer.php"; ?>

</body>

</html>