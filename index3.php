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

	<title><?php print 'As, ' . date('1') . ' ir PHP';?></title>
	
</head>	  

<body>

	<h1><?php print 'Violeta';?> - HTML <?php print 'ir PHP';?> asas! <br>
	jau nuo <?php print date ('Y') . ' metu';?></h1>

	<p>Viskas prasidejo <?php print date('F ') . 'menesio, ' . date('j ') . 'diena!';?></p>

	


</body>

</html>