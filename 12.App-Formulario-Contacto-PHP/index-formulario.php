<?php

$errores = '';


if (isset($_GET['clave1']) && isset($_GET['clave2'])) {
  $valor1 = $_GET['clave1'];
  $valor2 = $_GET['clave2'];
  $valor3 = $_GET['clave3'];


//SANEAMIENTO de VALOR1
if(!empty($valor1)){
    $valor1 = htmlspecialchars($valor1);
    $valor1 = trim($valor1);
    $valor1 = stripslashes($valor1);
}
//SANEAMIENTO de VALOR2
if(!empty($valor2)){
    $valor2 = htmlspecialchars($valor2);
    $valor2 = trim($valor2);
    $valor2 = stripslashes($valor2);
}  
}
//SANEAMIENTO de VALOR3
if (!empty($valor3)) {
    $valor3 = filter_var($valor3, FILTER_SANITIZE_EMAIL);

    if(!filter_var($valor3, FILTER_VALIDATE_EMAIL)){
        $errores .= 'Por favor escribe un correo valido <br />';
    }
} else {
    $errores .= 'Por favor escribe un correo <br />';
}

  //Imprimir los valores capturados
  echo "Nombre: " . $valor1 . "<br>";

  echo "Gmail: " . $valor3 . "<br>";  

  echo "Mensaje: " . $valor2;


require 'WebApp-formulario.php';

?>