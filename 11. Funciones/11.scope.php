<?php

#SCOPE (Alcance o ámbito de las variables en PHP)
###Uso de variables globales o en algun bloque concreto

$numero = 7; //Variable global = acceso desde cualquier parte del código excepto dentro de funciones

// function mostrarNumero2(){
// 	echo $numero;
// }
// echo $numero;
// mostrarNumero2(); // Dará un error, ya que no encuentra $numero definido dentro de la función

# Para usarla dentro de la función pasar como parámetro/argumento
// function mostrarNumero3($numero){
// 	echo $numero . "// script linea 16 <br>";
// }
// mostrarNumero3($numero); //Valor de variable global
// mostrarNumero3(13); //Valor asignado por argumento

// # Lo mismo si definimos en la función y queremos utilizarla fuera
// function mostrarNumero4(){
// 	$numero = 10; //Variable local dentro del bloque función
// }
// mostrarNumero4();
// echo $numero; //No se puede acceder porque la variable esta dentro de la función, necesitaremos el "return"

// echo $numero; //Sigue siendo el valor global 7
// echo "<br>";
// function mostrarNumero(){
// 	$numero = 10; //Asignamos internamente un 10
// 	return $numero;
// }

// echo mostrarNumero();

#RESUMEN SCOPE "ÁMBITO / ALCANCE":
//1. Por parámetro para entrar la variable en la función
//2. Con el return para sacar la variable de la función

#MÁS INFO SCOPE 
# https://www.php.net/manual/es/language.variables.scope.php
# https://www.w3schools.com/php/php_variables_scope.asp

### KEywords de PHP

// "global" es decir, en nuestro caso $numero = 7

// function mostrarNumero2(){
// 	global $numero;
// 	echo $numero; //7
// 	$numero = 3;
// 	echo $numero; //3
// }
// echo $numero; //7
// mostrarNumero2();
// 	// $numero = 3;
// 	// 	echo $numero; //3
// echo $numero; //3

?>