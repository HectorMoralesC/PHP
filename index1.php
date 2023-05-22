<?php 





function perimetro($lado){
	$lado = 10;
	echo $lado;
	$resultado2 = $lado*6;
	return $resultado2;
	
}
$perimetro_ = perimetro(10);




function area_hexagono($perimetro, $apotema){
	$resultado1 =($perimetro * $apotema) / 2;
	return $resultado1;
}
$area = area_hexagono(30, 10);
echo  $area . ' metros cuadrados';	

?>
