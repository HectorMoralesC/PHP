<?php

//EJERCICIO RELOJ


// Obtener la hora actual
$hora = time();

// Formatear la hora en formato legible
$hora_legible = date("H:i:s", $hora);

// Mostrar la hora legible
echo "Hora: " . $hora_legible;
echo '<br>';

?>