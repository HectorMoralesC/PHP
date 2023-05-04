<?php 

// NOTAS:
# Los nombres de las variables son sensibles a mayusculas y minisculas "Case-sensitive"
# Los nombres de variables no pueden llevar espacios, empezar por numeros o llevar caracteres especiales como puntos o incluso la letra ñ o ç
#Todas las variables empiezan con $

// TIPOS de datos:
# String: Cadena de texto
# Integer: Numeros enteros
# Double: Numeros con decimales
# Boolean: Verdadero o Falso (true / false)
# Array: "Arreglo"(ES_US) o Matriz
# Object: Objeto
# Class: Clase
# Null: Cuando a una variable aun no se le ha asignado ningun valor

// Ejemplos de variables almacenando diferentes tipos de datos:

// String
$nombre = "Marc Esteve Garcia";
/* 
$texto ='Texto entre comillas';
Comentarios largos de saltos de linea
*/
$numText = "25"; //Esto es un texto

// Integer o Entero
$numero = 13;

// Double o Decimal
$decimal = 0.16;

// Boleano
$verdadero_falso = true;


/* 
Comillas Simples vs Comillas Dobles
En las comillas dobles podemos llamar variables, mientras que en las simples no.
Sin embargo usar comillas dobles en ciertas situaciones puede traernos problemas de seguridad.
*/

echo 'Mi nombre es' . $nombre . '<br>';
echo "Mi nombre es $nombre <br>";

/* 
1ª Función gettype()
Para conocer el tipo de dato de una variable utilizamos la función gettype()
*/
echo 'El tipo de dato de la variable $nombre es de tipo: ' . gettype($nombre);
echo '<br>El tipo de dato de la variable $numero es de tipo: ' .gettype($numero);
echo '<br>El tipo de dato de la variable $decimal es de tipo: ' .gettype($decimal);
echo '<br>El tipo de dato de la variable $verdadero_falso es de tipo: ' .gettype($verdadero_falso);

?>