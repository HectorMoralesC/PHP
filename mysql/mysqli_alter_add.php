<?php
$conexion = new mysqli('localhost', 'root', '', 'prueba_consola');

if ($conexion->connect_errno){
	die('Lo siento hubo un problema con el servidor');
} else {
	$sql= "ALTER TABLE usuarios ADD edad INT NOT NULL";
	// Ejecutamos la sentencia.
	$conexion->query($sql);
}