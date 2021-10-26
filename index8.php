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

<body style="background-color: rgb(<?php print rand(0, 255) ?>,<?php print rand(0, 255) ?>,<?php print rand(0, 255) ?>);">

	<h1 style="font-size: <?php print rand(10,50) ?>px"> I change my size!</h1>

	<p style="color: rgb(<?php print rand(0, 255) ?>,<?php print rand(0, 255) ?>,<?php print rand(0, 255) ?>);"> I change my color!</p>
	
	<button onclick="window.location.reload()" style="cursor: pointer;">REFRESH</button>

</body>

</html>