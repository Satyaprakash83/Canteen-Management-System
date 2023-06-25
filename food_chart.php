<?php
// Step 1: Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "canteen_management";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Step 2: Fetch data from the MySQL table
$sql = "SELECT *FROM chart3";
$result = $conn->query($sql);

$sql1 = "SELECT *FROM chart4";
$result1 = $conn->query($sql1);


$sql2 = "SELECT *FROM chart5";
$result2 = $conn->query($sql2);

// Step 3: Store data in PHP arrays
$month_b = array();
$breakfast_1 = array();
$breakfast_2 = array();
$breakfast_3 = array();
$breakfast_4 = array();
$breakfast_5 = array();

$month_l = array();
$lunch_1 = array();
$lunch_2 = array();
$lunch_3 = array();
$lunch_4 = array();
$lunch_5 = array();
$lunch_6 = array();
$lunch_7 = array();

$month_d = array();
$dinner_1 = array();
$dinner_2 = array();
$dinner_3 = array();
$dinner_4 = array();
$dinner_5 = array();


if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $month_b[] = $row["month_b"];
        $breakfast_1[] = $row["breakfast_1"];
        $breakfast_2[] = $row["breakfast_2"];
        $breakfast_3[] = $row["breakfast_3"];
        $breakfast_4[] = $row["breakfast_4"];
        $breakfast_5[] = $row["breakfast_5"];
    }
}
if ($result1->num_rows > 0) {
    while ($row = $result1->fetch_assoc()) {
        $month_l[] = $row["month_l"];
        $lunch_1[] = $row["lunch_1"];
        $lunch_2[] = $row["lunch_2"];
        $lunch_3[] = $row["lunch_3"];
        $lunch_4[] = $row["lunch_4"];
        $lunch_5[] = $row["lunch_5"];
        $lunch_6[] = $row["lunch_6"];
        $lunch_7[] = $row["lunch_7"];
    }
}
if ($result2->num_rows > 0) {
    while ($row = $result2->fetch_assoc()) {
        $month_d[] = $row["month_d"];
        $dinner_1[] = $row["dinner_1"];
        $dinner_2[] = $row["dinner_2"];
        $dinner_3[] = $row["dinner_3"];
        $dinner_4[] = $row["dinner_4"];
        $dinner_5[] = $row["dinner_5"];
    }
}
// var_dump($row);
// Step 4: Use Google Charts to create the line graph
?>
<html>

<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart);
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart1);
        google.charts.load('current', {
            'packages': ['corechart']
        });
        google.charts.setOnLoadCallback(drawChart2);

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'month_b');
            data.addColumn('number', 'breakfast_1');
            data.addColumn('number', 'breakfast_2');
            data.addColumn('number', 'breakfast_3');
            data.addColumn('number', 'breakfast_4');
            data.addColumn('number', 'breakfast_5');
            data.addRows([
                <?php
                // Step 5: Pass PHP arrays as data to the chart library
                for ($i = 0; $i < count($month_b); $i++) {
                    echo "['" . $month_b[$i] . "', " . $breakfast_1[$i] . ", " . $breakfast_2[$i] . ", " . $breakfast_3[$i] . ", " . $breakfast_4[$i] . ", " . $breakfast_5[$i] . "],";
                }
                ?>
            ]);

            var options = {
                // title: 'Food Rating for Breakfast',
                // curveType: 'function',
                legend: {
                    position: 'top'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }

        function drawChart1() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'month_d');
            data.addColumn('number', 'lunch_1');
            data.addColumn('number', 'lunch_2');
            data.addColumn('number', 'lunch_3');
            data.addColumn('number', 'lunch_4');
            data.addColumn('number', 'lunch_5');
            data.addColumn('number', 'lunch_6');
            data.addColumn('number', 'lunch_7');
            data.addRows([
                <?php
                // Step 5: Pass PHP arrays as data to the chart library
                for ($j = 0; $j < count($month_l); $j++) {
                    echo "['" . $month_l[$j] . "', " . $lunch_1[$j] . ", " . $lunch_2[$j] . ", " . $lunch_3[$j] . ", " . $lunch_4[$j] . ", " . $lunch_5[$j] . ", " . $lunch_6[$j] . ", " . $lunch_7[$j] . "],";
                }
                ?>
            ]);

            var options = {
                // title: 'Food Rating For Dinner',
                // curveType: 'function',
                legend: {
                    position: 'top'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div_1'));
            chart.draw(data, options);
        }

        function drawChart2() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'month_d');
            data.addColumn('number', 'dinner_1');
            data.addColumn('number', 'dinner_2');
            data.addColumn('number', 'dinner_3');
            data.addColumn('number', 'dinner_4');
            data.addColumn('number', 'dinner_5');
            data.addRows([
                <?php
                // Step 5: Pass PHP arrays as data to the chart library
                for ($j = 0; $j < count($month_d); $j++) {
                    echo "['" . $month_d[$j] . "', " . $dinner_1[$j] . ", " . $dinner_2[$j] . ", " . $dinner_3[$j] . ", " . $dinner_4[$j] . ", " . $dinner_5[$j] . "],";
                }
                ?>
            ]);

            var options = {
                // title: 'Food Rating For Dinner',
                // curveType: 'function',
                legend: {
                    position: 'top'
                }
            };

            var chart = new google.visualization.LineChart(document.getElementById('chart_div_2'));
            chart.draw(data, options);
        }
    </script>
    <style>
        h1,
        h2,
        div {
            width: fit-content;
            margin-inline: auto;
        }
    </style>
</head>

<body>

    <h1>Food Rating Graph </h1>
    <h2>Food Rating for Breakfast</h2>
    <div id="chart_div" style="width: 1200px; height: 500px;">
    </div>
    <h2>Food Rating for Lunch</h2>
    <div id="chart_div_1" style="width: 1200px; height: 500px;">
    </div>
    <h2>Food Rating for Dinner</h2>
    <div id="chart_div_2" style="width: 1200px; height: 500px;">
    </div>
</body>

</html>