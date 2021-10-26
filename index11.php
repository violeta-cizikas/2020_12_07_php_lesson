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

	<meta name="viewport" content="width-device, user-scalable=0, initial-scale=1.0, miximum-scale">
		
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<title>Document</title>

	<style>
		@media screen and (max-width: 480px) {
			.explosion {
				width: 100vh;
				margin-left: -20vh;
			}
		}
	</style>

</head>

<!-- overflow: hidden nuima scrola -->
<body style="text-align: center; overflow: hidden; margin: 0; padding: 0;">

	<?php if(date( 's') == 0) {?>

		<img class="explosion" src="bomb_img/explosion.png">

	<?php } else{ ?>

		<img style="width: <?php print date( 's'); ?>0px" src="bomb_img/bomb1.png" alt="bomb">

		<p><?php print date( 's');?></p>
		
	<?php }?>

</body>
</html>