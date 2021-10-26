<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
date_default_timezone_set('Europe/Vilnius');?>

<!DOCTYPE html>

<html lang="en">

<head>

	<meta charset="UTF-8">

	<meta name="viewport" 
		  content="width-device, user-scalable=0, initial-scale=1.0, maximum-scale">

		  <meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>PHP lydes <?php print date('Y-m-d', strtotime( rand(0,10) . 'year'));?></title>

</head>

<body>

	<h1> Maybe it will rain <?php print rand(1,5);?> times!</h1>

	<p>Maybe the sun will shine: <?php print date( 'Y-m-d', strtotime( rand(2,10) . 'year')) ?></p>
	
	<button onclick="window.location.reload()" style="cursor: pointer;">REFRESH</button>
		

</body>

</html>
