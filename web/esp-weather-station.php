<!--
  Rui Santos
  Complete project details at https://RandomNerdTutorials.com/cloud-weather-station-esp32-esp8266/

  Permission is hereby granted, free of charge, to any person obtaining a copy
  of this software and associated documentation files.

  The above copyright notice and this permission notice shall be included in all
  copies or substantial portions of the Software.
-->
<?php
    include_once('esp-database.php');
    if ($_GET["readingsCount"]){
      $data = $_GET["readingsCount"];
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      $readings_count = $_GET["readingsCount"];
    }
    // default readings count set to 20
    else {
      $readings_count = 10;
    }

    $last_reading = getLastReadings();
    $last_reading_temp = $last_reading["value1"];
    $last_reading_humi = $last_reading["value2"];
    $last_reading_mua = $last_reading["value4"];
    $last_reading_time = $last_reading["reading_time"];

    // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
    //$last_reading_time = date("Y-m-d H:i:s", strtotime("$last_reading_time - 1 hours"));
    // Uncomment to set timezone to + 7 hours (you can change 7 to any number)
    //$last_reading_time = date("Y-m-d H:i:s", strtotime("$last_reading_time + 7 hours"));

    $min_temp = minReading($readings_count, 'value1');
    $max_temp = maxReading($readings_count, 'value1');
    $avg_temp = avgReading($readings_count, 'value1');

    $min_humi = minReading($readings_count, 'value2');
    $max_humi = maxReading($readings_count, 'value2');
    $avg_humi = avgReading($readings_count, 'value2');
?>

<!DOCTYPE html>
<html>
    <head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <<title>Trạm Thời Tiết</title>
        <link rel="stylesheet" type="text/css" href="esp-style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://www.gstatic.com/firebasejs/7.7.0/firebase-app.js"></script>
    </head>
    <header class="header">
        <h1>📊 Trạm Thời Tiết</h1>
        <form method="get">
            <td>Chọn Số Giá Trị Lấy Gần Nhất</td>
            <input type="number" name="readingsCount" min="1" placeholder="Giá trị lấy gần nhất (<?php echo $readings_count; ?>)">
            <input type="submit" value="Cập Nhật">
        </form>
    </header>
<body>
	<!-- Khúc này kết nối firebase -->
	<!-- The core Firebase JS SDK is always required and must be listed first -->

<!-- TODO: Add SDKs for Firebase products that you want to use
     https://firebase.google.com/docs/web/setup#available-libraries -->

<script>
  // Your web app's Firebase configuration
  var config = {
    apiKey: "AIzaSyDQeQ-Y2vo9VvcO5fQjLAJiywXS8M51qGM",
    authDomain: "iotthuc.firebaseapp.com",
    databaseURL: "https://iotthuc.firebaseio.com",
    projectId: "iotthuc",
    storageBucket: "iotthuc.appspot.com",
    messagingSenderId: "1018859871923",
    appId: "1:1018859871923:web:a6ddbc98dc1c5ebed29ac6"
  };


  firebase.initializeApp(config);

// Reference to your entire Firebase database
var myFirebase = firebase.database().ref();

// Get a reference to the recommendations object of your Firebase.
// Note: this doesn't exist yet. But when we write to our Firebase using
// this reference, it will create this object for us!
var recommendations = myFirebase.child("recommendations");

// Push our first recommendation to the end of the list and assign it a
// unique ID automatically.
recommendations.push({
    "title": "The danger of a single story",
    "presenter": "Chimamanda Ngozi Adichie",
    "link": "https://www.ted.com/talks/chimamanda_adichie_the_danger_of_a_single_story"
});
</script>
	
	<td>Nhập Email</td>
            <input type="number" name="name" min="1" placeholder="Giá trị lấy gần nhất">
            <input type="submit" value="Cập Nhật">
	<td>Nhập Email</td>
            <input type="number" name="email" min="1" placeholder="Giá trị lấy gần nhất">
            <input type="submit" value="Cập Nhật">
	<td>Nhập Email</td>
            <input type="number" name="imageUrl" min="1" placeholder="Giá trị lấy gần nhất">
            <input type="submit" value="Cập Nhật">
	
	
	
    <p>Lần Nhận Giá Trị Gần Nhất: <?php echo $last_reading_time; ?></p>
    <p>Trạng Thái Cảm Biến Mưa: <?php echo $last_reading_mua; ?></p>
    <section class="content">
	    <div class="box gauge--1">
	    <h3>NHIỆT ĐỘ</h3>
              <div class="mask">
			  <div class="semi-circle"></div>
			  <div class="semi-circle--mask"></div>
			</div>
		    <p style="font-size: 30px;" id="temp">--</p>
		    <table cellspacing="5" cellpadding="5">
		        <tr>
		            <th colspan="3">Nhiệt Độ <?php echo $readings_count; ?> Lần Đọc Gần Nhất</th>
	            </tr>
		        <tr>
		            <td>Thấp Nhất</td>
                    <td>Cao Nhất</td>
                    <td>Trung Bình</td>
                </tr>
                <tr>
                    <td><?php echo $min_temp['min_amount']; ?> &deg;C</td>
                    <td><?php echo $max_temp['max_amount']; ?> &deg;C</td>
                    <td><?php echo round($avg_temp['avg_amount'], 2); ?> &deg;C</td>
                </tr>
            </table>
        </div>
        <div class="box gauge--2">
            <h3>ĐỘ ẨM</h3>
            <div class="mask">
                <div class="semi-circle"></div>
                <div class="semi-circle--mask"></div>
            </div>
            <p style="font-size: 30px;" id="humi">--</p>
            <table cellspacing="5" cellpadding="5">
                <tr>
                    <th colspan="3">Độ Ẩm <?php echo $readings_count; ?> Lần Đọc Gần Nhất</th>
                </tr>
                <tr>
                    <td>Thấp Nhất</td>
                    <td>Cao Nhất</td>
                    <td>Trung Bình</td>
                </tr>
                <tr>
                    <td><?php echo $min_humi['min_amount']; ?> %</td>
                    <td><?php echo $max_humi['max_amount']; ?> %</td>
                    <td><?php echo round($avg_humi['avg_amount'], 2); ?> %</td>
                </tr>
            </table>
        </div>
    </section>
<?php
    echo   '<h2> Bảng Dữ Liệu ' . $readings_count . ' Lần Đọc Gần Nhất</h2>
            <table cellspacing="5" cellpadding="5" id="tableReadings">
                <tr>
                    <th>ID</th>
                    <th>Cảm Biến</th>
                    <th>Vị Trí</th>
                    <th>Nhiệt Độ</th>
                    <th>Độ Ẩm</th>
                    <th>Value 3</th>
                    <th>Thời Gian</th>
                </tr>';

    $result = getAllReadings($readings_count);
        if ($result) {
        while ($row = $result->fetch_assoc()) {
            $row_id = $row["id"];
            $row_sensor = $row["sensor"];
            $row_location = $row["location"];
            $row_value1 = $row["value1"];
            $row_value2 = $row["value2"];
            $row_value3 = $row["value3"];
            $row_reading_time = $row["reading_time"];
            // Uncomment to set timezone to - 1 hour (you can change 1 to any number)
            //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time - 1 hours"));
            // Uncomment to set timezone to + 7 hours (you can change 7 to any number)
            //$row_reading_time = date("Y-m-d H:i:s", strtotime("$row_reading_time + 7 hours"));

            echo '<tr>
                    <td>' . $row_id . '</td>
                    <td>' . $row_sensor . '</td>
                    <td>' . $row_location . '</td>
                    <td>' . $row_value1 . '</td>
                    <td>' . $row_value2 . '</td>
                    <td>' . $row_value3 . '</td>
                    <td>' . $row_reading_time . '</td>
                  </tr>';
        }
        echo '</table>';
        $result->free();
    }
?>

<script>
    var value1 = <?php echo $last_reading_temp; ?>;
    var value2 = <?php echo $last_reading_humi; ?>;
    setTemperature(value1);
    setHumidity(value2);

    function setTemperature(curVal){
    	//set range for Temperature in Celsius -5 Celsius to 38 Celsius
        //Cài nhiệt độ từ -2 độ đến 40 độ nhiệt độ Việt Nam như vậy
    	var minTemp = -2.0;
    	var maxTemp = 40.0;
        //Phần này cài thêm độ F
        //set range for Temperature in Fahrenheit 23 Fahrenheit to 100 Fahrenheit
    	//var minTemp = 23;
    	//var maxTemp = 100;

    	var newVal = scaleValue(curVal, [minTemp, maxTemp], [0, 180]);
    	$('.gauge--1 .semi-circle--mask').attr({
    		style: '-webkit-transform: rotate(' + newVal + 'deg);' +
    		'-moz-transform: rotate(' + newVal + 'deg);' +
    		'transform: rotate(' + newVal + 'deg);'
    	});
    	$("#temp").text(curVal + ' ºC');
    }

    function setHumidity(curVal){
    	//set range for Humidity percentage 0 % to 100 %
        //Cài giá trị độ ẩm từ 0% - 100%
    	var minHumi = 0;
    	var maxHumi = 100;

    	var newVal = scaleValue(curVal, [minHumi, maxHumi], [0, 180]);
    	$('.gauge--2 .semi-circle--mask').attr({
    		style: '-webkit-transform: rotate(' + newVal + 'deg);' +
    		'-moz-transform: rotate(' + newVal + 'deg);' +
    		'transform: rotate(' + newVal + 'deg);'
    	});
    	$("#humi").text(curVal + ' %');
    }

    function scaleValue(value, from, to) {
        var scale = (to[1] - to[0]) / (from[1] - from[0]);
        var capped = Math.min(from[1], Math.max(from[0], value)) - from[0];
        return ~~(capped * scale + to[0]);
    }
</script>

</body>
<footer>
<h1> Xây Dựng Bởi Trần Minh Thức </h1>
</footer>
</html>
