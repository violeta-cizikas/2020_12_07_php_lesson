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

		  content="width-device, initial-scale=1.0">

		<title>I control HTML <?php print ("and PHP!");?></title>
	
</head>	  

<body>

	<h1>Violeta - HTML <?php print ("and PHP");?> demo!</h1>

	<p>I am creating dynamic content.
		Opened: <?php print date("Y-m-d H:i:s" );?></p>
		
</body>

</html>