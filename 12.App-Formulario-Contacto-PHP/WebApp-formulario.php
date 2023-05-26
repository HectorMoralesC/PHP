<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Contacto</title>
	<link rel="stylesheet" href="../12.App-Formulario-Contacto-PHP/estilo-formulario.css">
	
</head>
<body>
<!-- Botón para volver al formulario -->
<!--<a href="WebApp-formulario.php"><button>Volver al formulario</button></a>-->
<br>
	<div class="wrap">
        
<!-- Primer formulario con el botón "submit" -->
<form action="index-formulario.php" method="GET">
  <!-- Campos del primer formulario -->
  <input type="text" name="clave1" placeholder="Nombre" required>
  <input type="text" name="clave3" placeholder="Gmail" required>
  <input type="text" name="clave2" placeholder="Mensaje" required>

  <!-- Botón de envío del primer formulario -->
  <input type="submit" name="submit" value="Enviar GET">
</form>

<!-- Segundo formulario con el botón "submit2" -->
<form action="index-formulario.php" method="POST">
  <!-- Campos del segundo formulario -->
  <input type="text" name="clave1" placeholder="Nombre" required>
  <input type="text" name="clave3" placeholder="Gmail" required>
  <input type="text" name="clave2" placeholder="Mensaje" required>

  <!-- Botón de envío del segundo formulario -->
  <input type="submit" name="submit2" value="Enviar POST">
<br>
<br>
  
 <?php
    if ($enviado = true) {
      echo "<p>Datos enviados correctamente</p>";
    }
      ?>
</form>
	</div>
 
</body>
</html>