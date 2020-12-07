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

	<style>
		.dice {
			width: 100px;
			height: 100px;
			background-size: 100%;
		}

		.dice1 {
			background-image: url(dice_img/1.png);
		}

		.dice2 {
			background-image: url(dice_img/2.png);
		}

		.dice3 {
			background-image: url(dice_img/3.png);
		}

		.dice4 {
			background-image: url(dice_img/4.png);
		}

		.dice5 {
			background-image: url(dice_img/5.png);
		}

		.dice6 {
			background-image: url(dice_img/6.png);
		}

	</style>

</head>

<body>

<div class="dice <?php print 'dice' . rand(1,6);?>"></div>

</body>

</html>