<?php
$hora = 13;
?>

<?php if(($hora >= 6)&&($hora < 13)){ ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sitio</title>
	</head>
	<body>
		<h1>Buenos dias!</h1>
	</body>
	</html>
<?php } ?>

<?php if(($hora >= 13)&&($hora < 20)){ ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sitio</title>
	</head>
	<body>
		<h1>Buenas tardes!</h1>
	</body>
	</html>
<?php } ?>

<?php if(($hora >= 20)||($hora < 6)){ ?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sitio</title>
	</head>
	<body>
		<h1>Buenas noches!</h1>
	</body>
	</html>
<?php } ?>