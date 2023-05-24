<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario Contacto</title>
	<link rel="stylesheet" href="../12.App-Formulario-Contacto-PHP/estilo-formulario.css">
	
</head>
<body>
	<div class="wrap">
        <form action="index-formulario.php" method="GET">

            <input type="text" name="clave1" placeholder="Nombre:" required>
            <input type="text" name="clave3" placeholder="Gmail:" required>
            <input type="text" name="clave2" placeholder="Mensaje:">

			<input type="submit" name="submit" class="btn btn-primary" value="Enviar Correo">
		</form>
	</div>
</body>
</html>