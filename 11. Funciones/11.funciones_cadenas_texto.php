<?php 

$texto = 'Adéu Andreu!';


//echo htmlspecialchars($texto); //Todos los caracteres especiales < > & '' "" se convierten en entidades HTML (revisar código fuente) para no ser ejecutados, como por ejemplo que el usuario pueda inyectar código <b>Hola</b> o peor aun, código Javascript que se pueda ejecutar
//echo trim($texto); //Quita los espacios al principio y al final
//echo'<br>';
//echo strlen($texto); //Cuenta los caracteres totales del string
//echo'<br>';
//echo substr($texto, 5, 11); //Recorta la cadena de texto en este caso del primer string hasta el quinto. Podriamos almacenarlo en otra variable
// echo strtoupper($texto); //Convierte a mayúsculas
// echo strtolower($texto); //Convierte a minúsculas
// echo strpos($texto, 'n'); //Posición del string
// echo strrev($texto);  //Invierte el texto
//$nuevoTexto = str_replace("Andreu", "siau", $texto); //Sustituye textos
//echo $nuevoTexto;



//EJERCICIO 1. Que devuelva si un string es palindromo o no.
/*
$palabra = 'radar';
$palabra1 = strrev($palabra);
if ($palabra == $palabra1)
echo 'Es un palindromo';

else
echo 'No es un palindromo';
*/

//EJERCICIO 2.
$word = 'auriculares';
$word1 = 'auriculares';


// $numerofinal = strlen($word);
// $numerofinal1 = strlen($word);

$dosinicio = substr($word, 0, 2);
$dosfinal = substr($word, -2,);

$dosinicio1 = substr($word1, 0, 2);
$dosfinal1 = substr($word1, -2);

echo $dosinicio;
echo '<br>';

echo $dosfinal;
echo '<br>';

echo $dosinicio1;
echo '<br>';

echo $dosfinal1;
echo '<br>';


if (($dosinicio == $dosinicio1)&&($dosfinal == $dosfinal1))
echo 'Se cumple';
else
echo 'NO se cumple';


?>