<!DOCTYPE html>
<html lang="en">
<head>

    <title>Ejercicio Cookie</title>
</head>
<body>
	<h1>Elige las características de la página</h1>
	<form action="valida-envio.php" method="post">
        <input type="text" name="color" placeholder="Color de letra(ej: red): " >
        <input type="text" name="background-color" placeholder="Color de fondo(ej: red): " >
        <input type="text" name="font-size" placeholder="Tamaño de letra(ej: 40px): " >
		<br><br><br>
		<input type="submit" name="submit" value="Aplicar características" >
    </form>
    <?php
if (isset($_POST['submit'])) {

    if (isset($_POST['color']) && isset($_POST['background-color']) && isset($_POST['font-size'])) {
        $color = $_POST['color'];
        $background_color = $_POST['background-color'];
        $font_size = $_POST['font-size'];

        // Resto del código de saneamiento y validación
    } else {
        // El formulario no se ha enviado correctamente
        $errores .= 'Por favor completa todos los campos del formulario.<br />';
    }
  }

  // Resto del código para imprimir los valores capturados y mostrar los errores
  //SANEAMIENTO de VALOR1
    if (!empty($color)) {
        $color = htmlspecialchars($color);
        $color = trim($color);
        $color = stripslashes($color);
    }
    //SANEAMIENTO de VALOR2
    if (!empty($background_color)) {
        $background_color = htmlspecialchars($background_color);
        $background_color = trim($background_color);
        $background_color = stripslashes($background_color);
    }
    
    //SANEAMIENTO de VALOR3
    if (!empty($font_size)) {
        $font_size = htmlspecialchars($font_size);
        $font_size = trim($font_size);
        $font_size = stripslashes($font_size);
    }
	setcookie('color', $color, time() + 60 * 60 * 24 * 30, '/');
	setcookie('background-color', $background_color, time() + 60 * 60 * 24 * 30, '/');
	setcookie('font-size', $font_size, time() + 60 * 60 * 24 * 30, '/');
    
	


	require 'ejercicio-contenido-cookie.php';
	?>
    

	

</body>
</html> 
