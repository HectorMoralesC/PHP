<?php 

function calcular_area_triangulo($base, $altura){
	$resultado = ($base * $altura) / 2;
	return $resultado;
}

$area_triangulo = calcular_area_triangulo(10, 10);

echo 'El triangulo tiene un area de ' . $area_triangulo . ' metros cuadrados<br>';

//EJERCICIO: CREAR UNA FUNCIÃÂN PARA CALCULAR EL AREA DE UN HEXÃÂGONO DE FORMULA = (PERÃÂMETRO * APOTEMA)/2 Y EL PERÃÂMETRO ES IGUAL A UN LADO *6



function perimetro($lado){
	$resultado2 = $lado*6;
	return $resultado2;
}
$perimetro_ = perimetro(10);
echo 'El hexagono tiene un perÃ­metro de ' . $perimetro_ . ' metros cuadrados<br>';


function area_hexagono($perimetro, $apotema){
	$resultado1 =($perimetro * $apotema) / 2;
	return $resultado1;
}
$area = area_hexagono(10, 10);
echo 'El hexagono tiene un area de ' . $area . ' metros cuadrados';	

?>

