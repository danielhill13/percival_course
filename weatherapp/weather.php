<?php
//Take input and query http://www.weather-forecast.com/ with the text search
$urlCity = "http://www.weather-forecast.com/locations/".$_GET['city']."/forecasts/latest";
if ($_GET['city']) {
    $forecastPage = file_get_contents("$urlCity");
$pageArray = explode('3 Day Weather Forecast Summary:</b><span class="read-more-small"><span class="read-more-content"> <span class="phrase">', $forecastPage);
$pageArray2 = explode('</span></span></span>', $pageArray[1]);
$weather = $pageArray2[0];
}
?>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="weather.css">
</head>
<body>
<div id='bg'>
    <div class='jumbotron'>
        <h1 class=''>What's The Weather?</h1>
        <form method='GET'>
            <div class='form-group'>
                <label for="city"><p>Enter a City</p></label>
                <input class="form-control"type="text" name='city' placeholder='e.g. Miami, Dallas'>
            </div>
            <input type="submit" class='btn btn-warning'>
        </form>
    </div>
<div id='weather'><?php
if ($weather){
    echo('<div class="alert alert-success">'.$weather.'</div>');
} 
?>
</div>
<!-- <a href="http://www.weather-forecast.com/locations/austin/forecasts/latest">Austin</a> -->
</div>
</body>