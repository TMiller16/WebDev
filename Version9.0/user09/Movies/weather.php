<?php
$apiKey = "23dd964ac55bf83a95c4b6d07ab74356";
$cityId = "2207349";
$cityId2 = "481725";
$cityId3 = "1270260";
$cityId4 = "529334";
$cityId5 = "1283710";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=en&units=imperial&APPID=" . $apiKey;
$googleApiUrl2 = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId2 . "&lang=en&units=en&units=imperial&APPID=" . $apiKey;
$googleApiUrl3 = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId3 . "&lang=en&units=en&units=imperial&APPID=" . $apiKey;
$googleApiUrl4 = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId4 . "&lang=en&units=en&units=imperial&APPID=" . $apiKey;
$googleApiUrl5 = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId5 . "&lang=en&units=en&units=imperial&APPID=" . $apiKey;
$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

$ch2 = curl_init();

curl_setopt($ch2, CURLOPT_HEADER, 0);
curl_setopt($ch2, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch2, CURLOPT_URL, $googleApiUrl2);
curl_setopt($ch2, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch2, CURLOPT_VERBOSE, 0);
curl_setopt($ch2, CURLOPT_SSL_VERIFYPEER, false);
$response2 = curl_exec($ch2);

curl_close($ch2);
$data2 = json_decode($response2);
$currentTime2 = time();


$ch3 = curl_init();

curl_setopt($ch3, CURLOPT_HEADER, 0);
curl_setopt($ch3, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch3, CURLOPT_URL, $googleApiUrl3);
curl_setopt($ch3, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch3, CURLOPT_VERBOSE, 0);
curl_setopt($ch3, CURLOPT_SSL_VERIFYPEER, false);
$response3 = curl_exec($ch3);

curl_close($ch3);
$data3 = json_decode($response3);
$currentTime3 = time();



$ch4 = curl_init();

curl_setopt($ch4, CURLOPT_HEADER, 0);
curl_setopt($ch4, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch4, CURLOPT_URL, $googleApiUrl4);
curl_setopt($ch4, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch4, CURLOPT_VERBOSE, 0);
curl_setopt($ch4, CURLOPT_SSL_VERIFYPEER, false);
$response4 = curl_exec($ch4);

curl_close($ch4);
$data4 = json_decode($response4);
$currentTime4 = time();



$ch5 = curl_init();

curl_setopt($ch5, CURLOPT_HEADER, 0);
curl_setopt($ch5, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch5, CURLOPT_URL, $googleApiUrl5);
curl_setopt($ch5, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch5, CURLOPT_VERBOSE, 0);
curl_setopt($ch5, CURLOPT_SSL_VERIFYPEER, false);
$response5 = curl_exec($ch5);

curl_close($ch5);
$data5 = json_decode($response5);
$currentTime5 = time();

?>

<!doctype html>
<html>
<head>
<title>Forecast Weather using OpenWeatherMap with PHP</title>

<style>
body {
    font-family: Arial;
    font-size: 0.95em;
    color: #929292;
}

.report-container {
    border: #E0E0E0 1px solid;
    padding: 20px 40px 40px 40px;
    border-radius: 2px;
    width: 550px;
    margin: 0 auto;
}

.weather-icon {
    vertical-align: middle;
    margin-right: 20px;
}

.weather-forecast {
    color: #212121;
    font-size: 1.2em;
    font-weight: bold;
    margin: 20px 0px;
}

span.min-temperature {
    margin-left: 15px;
    color: #929292;
}

.time {
    line-height: 25px;
}
</style>

</head>
<body>

    <div class="report-container">
        <h2><?php echo $data->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime); ?></div>
            <div><?php echo date("jS F, Y",$currentTime); ?></div>
            <div><?php echo ucwords($data->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data->main->temp_max; ?>&deg;F<span
                class="min-temperature"><?php echo $data->main->temp_min; ?>&deg;F</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
        </div>
    </div>
    
    
    
    
      <div class="report-container">
        <h2><?php echo $data2->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime2); ?></div>
            <div><?php echo date("jS F, Y",$currentTime2); ?></div>
            <div><?php echo ucwords($data2->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data2->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data2->main->temp_max; ?>&deg;F<span
                class="min-temperature"><?php echo $data2->main->temp_min; ?>&deg;F</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data2->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data2->wind->speed; ?> km/h</div>
        </div>
    </div>
    
    

        <div class="report-container">
        <h2><?php echo $data3->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime3); ?></div>
            <div><?php echo date("jS F, Y",$currentTime3); ?></div>
            <div><?php echo ucwords($data3->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data3->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data3->main->temp_max; ?>&deg;F<span
                class="min-temperature"><?php echo $data3->main->temp_min; ?>&deg;F</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data3->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data3->wind->speed; ?> km/h</div>
        </div>
    </div>
    
    
    
    
      <div class="report-container">
        <h2><?php echo $data4->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime4); ?></div>
            <div><?php echo date("jS F, Y",$currentTime4); ?></div>
            <div><?php echo ucwords($data4->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data4->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data4->main->temp_max; ?>&deg;F<span
                class="min-temperature"><?php echo $data4->main->temp_min; ?>&deg;F</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data4->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data4->wind->speed; ?> km/h</div>
        </div>
    </div>
    
    
    
    
      <div class="report-container">
        <h2><?php echo $data5->name; ?> Weather Status</h2>
        <div class="time">
            <div><?php echo date("l g:i a", $currentTime5); ?></div>
            <div><?php echo date("jS F, Y",$currentTime5); ?></div>
            <div><?php echo ucwords($data5->weather[0]->description); ?></div>
        </div>
        <div class="weather-forecast">
            <img
                src="http://openweathermap.org/img/w/<?php echo $data5->weather[0]->icon; ?>.png"
                class="weather-icon" /> <?php echo $data5->main->temp_max; ?>&deg;F<span
                class="min-temperature"><?php echo $data5->main->temp_min; ?>&deg;F</span>
        </div>
        <div class="time">
            <div>Humidity: <?php echo $data5->main->humidity; ?> %</div>
            <div>Wind: <?php echo $data5->wind->speed; ?> km/h</div>
        </div>
    </div>
    

    
    

</body>
</html>