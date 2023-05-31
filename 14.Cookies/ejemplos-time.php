<?php

#1. Obtener la marca de tiempo actual:
$marcaTiempoActual = time();
echo "Marca de tiempo actual: " . $marcaTiempoActual;

#2. Calcular una fecha futura agregando segundos a la marca de tiempo actual:
$segundos = 3600; // 1 hora
$marcaTiempoFuturo = time() + $segundos;
echo "Marca de tiempo futura: " . $marcaTiempoFuturo;

#3. Convertir una marca de tiempo en una fecha legible:
$marcaTiempo = time();
$fechaLegible = date("d-m-Y H:i:s", $marcaTiempo);
echo "Fecha legible: " . $fechaLegible;

#4. Comparar dos marcas de tiempo:
$marcaTiempo1 = time();
$marcaTiempo2 = strtotime("2023-01-01");
if ($marcaTiempo1 < $marcaTiempo2) {
    echo "La marca de tiempo 1 es anterior a la marca de tiempo 2.";
} elseif ($marcaTiempo1 > $marcaTiempo2) {
    echo "La marca de tiempo 1 es posterior a la marca de tiempo 2.";
} else {
    echo "Ambas marcas de tiempo son iguales.";
}



?>