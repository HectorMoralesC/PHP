<?php 

# Los arrays son como variables que nos permiten guardar multiples valores.

# Ejemplo de un arrays con los dias de la semana.
$semana = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sabado', 'Domingo');
//$meses = array ('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio')

# En los arrays podemos guardar cualquier tipo de dato, incluso podemos guardar un array dentro de otro.
$arreglo = array('cadenas de texto', 1, array('asd', 123), true);

# Ejemplo en el que mostramos los dias de la semana en pantalla a partir de nuestro array llamado semana.
echo $semana[0] . '<br />'; //Lunes
echo $semana[1] . '<br />'; //Martes    
echo $semana[2] . '<br />'; //Mi√©rcoles
echo $semana[3] . '<br />'; //Jueves
echo $semana[4] . '<br />'; //Viernes
echo $semana[5] . '<br />'; //S√°bado
echo $semana[6] . '<br />'; //Domingo


//Ejercicio echo con dos arrays
//°°°°Al final de crear array hay que poner ";"!!!!!
$meses = array ('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio');
echo 'Hoy es '.$semana[5]. ' del mes de '.$meses[5];

echo '<hr>';
echo implode('<br>', $semana); // string $glue ', '
echo '<hr>';
echo '<h2>Ejemplos campus</h2>';


$cars = array("Volvo","BMW","Toyota");
$coches = [1,2,3];
var_dump($cars);
echo "<br>";
var_dump($coches);
$cars[7] = "Opel";
echo "<br>";
var_dump($cars);
echo "<br>";
echo $cars[3];
echo "<br>";
$variable[3]='Eva';
$variable[27]=123;
var_dump($variable);
echo "<br>";
$coche = array(
    "modelo" => "Astra",
    "1" => "b",
    1.5 => "c", //no entinende los decimales 
    true => "d", //un true en PHP es 1
);
var_dump($coche);
// Sintaxis corta  
$array = [
    "clave" => "valor1",
    "clave2" => "valor2",
];
echo "<br>";
var_dump($array);
echo "<br>";
echo $coche[1];//El valor es d
echo "<br>";
echo $coche["modelo"]. "<br>";//Warning pero da el valor "Astra"

 //$meses = array ('Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio')
 //echo 'Hoy es '.$semana[5]. ' del mes de '.$meses[5];
 echo $coche[true];//El valor es 2

?>