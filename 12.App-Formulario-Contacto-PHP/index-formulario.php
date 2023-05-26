<?php



//GET
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  // Código para el método GET
  $errores = '';
  
if (isset($GET['submit'])) {
    if (isset($_GET['clave1']) && isset($_GET['clave2']) && isset($_GET['clave3'])) {
        $valor1 = $_GET['clave1'];
        $valor2 = $_GET['clave2'];
        $valor3 = $_GET['clave3'];

        // Resto del código de saneamiento y validación
    } else {
        // El formulario no se ha enviado correctamente
        $errores .= 'Por favor completa todos los campos del formulario.<br />';
    }

    // Resto del código para imprimir los valores capturados y mostrar los errores
    
    //SANEAMIENTO de VALOR1
    if (!empty($valor1)) {
        $valor1 = htmlspecialchars($valor1);
        $valor1 = trim($valor1);
        $valor1 = stripslashes($valor1);
    }
    //SANEAMIENTO de VALOR2
    if (!empty($valor2)) {
        $valor2 = htmlspecialchars($valor2);
        $valor2 = trim($valor2);
        $valor2 = stripslashes($valor2);
    }
    
    //SANEAMIENTO de VALOR3
    if (!empty($valor3)) {
        $valor3 = filter_var($valor3, FILTER_SANITIZE_EMAIL);
    
        if (!filter_var($valor3, FILTER_VALIDATE_EMAIL)) {
        $errores .= 'Por favor escribe un correo válido <br />';
        }
    } else {
        $errores .= 'Por favor escribe un correo <br />';
    }
    
    //Imprimir los resultados
    
    echo "Nombre: " . $valor1 . "<br>";
    echo "Gmail: " . $valor3 . "<br>";
    echo "Mensaje: " . $valor2;
    }  
}









//POST
elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // Código para el método POST
  $errores = '';

  if (isset($_POST['submit2'])) {

    if (isset($_POST['clave1']) && isset($_POST['clave2']) && isset($_POST['clave3'])) {
        $valor1 = $_POST['clave1'];
        $valor2 = $_POST['clave2'];
        $valor3 = $_POST['clave3'];

        // Resto del código de saneamiento y validación
    } else {
        // El formulario no se ha enviado correctamente
        $errores .= 'Por favor completa todos los campos del formulario.<br />';
    }
  }

  // Resto del código para imprimir los valores capturados y mostrar los errores
  //SANEAMIENTO de VALOR1
    if (!empty($valor1)) {
        $valor1 = htmlspecialchars($valor1);
        $valor1 = trim($valor1);
        $valor1 = stripslashes($valor1);
    }
    //SANEAMIENTO de VALOR2
    if (!empty($valor2)) {
        $valor2 = htmlspecialchars($valor2);
        $valor2 = trim($valor2);
        $valor2 = stripslashes($valor2);
    }
    
    //SANEAMIENTO de VALOR3
    if (!empty($valor3)) {
        $valor3 = filter_var($valor3, FILTER_SANITIZE_EMAIL);
    
        if (!filter_var($valor3, FILTER_VALIDATE_EMAIL)) {
        $errores .= 'Por favor escribe un correo válido <br />';
        }
    } else {
        $errores .= 'Por favor escribe un correo <br />';
    }
    
    //No se imprimen los resultados ya que es metodo POST
    
    echo "Nombre: " . $valor1 . "<br>";
    echo "Gmail: " . $valor3 . "<br>";
    echo "Mensaje: " . $valor2;
    
    } 





//MÉTODO ERRÓNEO
elseif (($_SERVER['REQUEST_METHOD'] != 'GET') && ($_SERVER['REQUEST_METHOD'] != 'POST')) {
  // Método de envío no válido
  $errores = 'Método de envío no válido.<br />';
}


require 'WebApp-formulario.php';

?>

<!-- Botón para volver al formulario -->
<a href="WebApp-formulario.php"><button>Volver al formulario</button></a>