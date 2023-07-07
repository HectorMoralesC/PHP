<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$statement = $conexion->prepare("UPDATE usuarios SET id = 3 WHERE id = 5");

	// Ejecutamos la sentencia.
	$statement->execute();
}