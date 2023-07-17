<?php 

	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {
		$codigo = $_POST['codigo'];
		$campo = $_POST['campo'];
		$canvi = $_POST['canvi'];
		echo $campo;

		//Error si no hay "código" seleccionado
		if (empty($codigo)) {
			$errores .= 'Por favor selecciona un artículo <br />';
		}

		//Error si no hay "campo" seleccionado
		if (empty($campo)) {
			$errores .= 'Por favor selecciona un campo <br />';
		}

		//Sanear el campo "nombre"
		if (!empty($canvi)) {
			$canvi = trim($canvi);
		} else {
			$errores .= 'Por favor escribe un cambio <br />';
		}

		if(!$errores){
			$enviado = 'true';
		}

	}
	
	require 'ej_tabla_index_view.php';

	if ($enviado == 'true'){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
		if ($campo=='SECCIÓN'){
			//Actualizar campo sección
			$statement = $conexion->prepare('UPDATE productos SET SECCIÓN=:canvi WHERE  CÓDIGOARTÍCULO=:codigo');
			$statement->execute(
				array(':codigo'=> $codigo,':canvi'=> $canvi)
			);

		} else if ($campo=='NOMBREARTÍCULO') {
			//Actualizar campo nombre
			$statement = $conexion->prepare('UPDATE productos SET NOMBREARTÍCULO=:canvi WHERE CÓDIGOARTÍCULO=:codigo');
			$statement->execute(
				array(':codigo'=> $codigo,':canvi'=> $canvi)
			);
		}  else {
			//Actualizar campo precio
			$statement = $conexion->prepare('UPDATE productos SET PRECIO=:canvi WHERE  CÓDIGOARTÍCULO=:codigo');
			$statement->execute(
				array(':codigo'=> $codigo,':canvi'=> $canvi)
			);
		}


	}


?>
