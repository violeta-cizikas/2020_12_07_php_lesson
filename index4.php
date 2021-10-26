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

		<title>PHP lydes ir <?php print date('Y-m-d', strtotime("+1 day"));?></title>
	
</head>	  

<body>

	<h1><?php print 'Hello';?> - PHP was with me at the <?php print date('H', strtotime("-1 day")) . ' hour';?></h1>

	<p><?php print date('Y' , strtotime('+1 year'));?> is not too far away!<?php print strtotime('+3 year');?></p>
	
	<button onclick="window.location.reload()" style="cursor: pointer;">REFRESH</button>
		
</body>

</html>