<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Contacto</title>
	<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="12.estilos.css">
</head>
<body>
	<div class="wrap">
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="get">
			<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre:" value="">

			<input type="text" class="form-control" id="correo" name="email" placeholder="Correo:" value="">

			<input type="text" class="form-control" id="edad" name="edad" placeholder="Edad:" value="">

			<input type="submit" name="submit" class="btn btn-primary" value="Enviar">
		</form>
	</div>
</body>
</html>
<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("INSERT INTO usuarios(id, nombre, email, edad) VALUES(?, ?, ?, ?)");
	
	// Remplazamos los placeholder ? con los valores que queremos usar.
		// Una S por placeholder que tengamos.
		// s = string
		// i = integer
		// d = double
	$statement->bind_param('sssi', $id, $nombre, $email, $edad);
	$id = NULL;

	// Comprobamos que hayamos pasado un nombre por URL
	if(isset($_GET['nombre']) && isset($_GET['email']) && isset($_GET['edad'])){
		$nombre = $_GET['nombre'];
		$email = $_GET['email'];
		$edad = $_GET['edad'];
	}

	// Ejecutamos la sentencia.
	if (isset($_GET['nombre']) && isset($_GET['email']) && isset($_GET['edad'])){
	$statement->execute();
	}
	// echo 'Filas añadidas:' . $conexion->affected_rows;

	if($conexion->affected_rows >= 1){
		echo 'Filas agregadas: ' . $conexion->affected_rows; 
        echo '<br>';
        echo 'Nombre agregado: '.$nombre;
        echo '<br>';
        echo 'Email agregado: '.$email;
        echo '<br>';
        echo 'Edad agregada: '.$edad;
	} else {
		echo 'No se agrego nada';


	}
}