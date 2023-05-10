<?php
// Step 1: Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "line_chart";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Fetch data from the MySQL table
$sql = "SELECT month,rice,dal,chicken,paneer FROM chart1";
$result = $conn->query($sql);

// Step 3: Store data in PHP arrays
$month = array();
$rice = array();
$dal = array();
$chicken = array();
$paneer = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $month[] = $row["month"];
        $rice[] = $row["rice"];
        $dal[] = $row["dal"];
        $chicken[] = $row["chicken"];
        $paneer[] = $row["paneer"];
    }
}
// var_dump($row);
// Step 4: Use Google Charts to create the line graph
?>
<html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'month');
            data.addColumn('number', 'rice');
            data.addColumn('number', 'dal');
            data.addColumn('number', 'chicken');
            data.addColumn('number', 'paneer');
            data.addRows([
                <?php
                // Step 5: Pass PHP arrays as data to the chart library
                for ($i = 0; $i < count($month); $i++) {
                    echo "['" . $month[$i] . "', " . $rice[$i] . ", " . $dal[$i] . ", " . $chicken[$i] . ", " . $paneer[$i] . "],";
                }
                ?>
            ]);

            var options = {
                title: 'Food rating',
                curveType: 'function',
                legend: { position: 'bottom' }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="chart_div" style="width: 900px; height: 500px;"></div>
</body>
</html>
