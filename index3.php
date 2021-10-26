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

	<title><?php print 'Me, ' . date('1') . ' and PHP';?></title>
	
</head>	  

<body>

	<h1><?php print 'Violeta';?> - HTML <?php print 'and PHP';?> demo! <br>
	Starting from <?php print ' the year ' . date ('Y');?></h1>

	<p>Everything started on <?php print date('F ') . 'month, ' . date('j ') . 'day!';?></p>

</body>

</html>