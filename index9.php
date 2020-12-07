<!-- kas sekunde ridensis kauliukas -->

<?php
$page = $_SERVER['PHP_SELF'];
$sec = "1";
header("Refresh: $sec; url=$page");
?>

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

	<title>Document</title>

</head>

<body>

<img style="width: 100px;" src="dice_img/<?php print rand(1,6); ?>.png" alt="dice">

</body>

</html>