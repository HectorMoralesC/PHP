<?php 

	$errores = '';
	$enviado = false;

	//Si hemos hecho clic sobre el botón de BUSCAR:
	if (isset($_POST['submit'])) {
		//Guardaremos el valor asignado por el usuario de la id en la variable $id
		$codigo = $_POST['codigo'];
		//Error si no hay "codigo" seleccionada
		if (empty($codigo)) {
			$errores .= 'Por favor selecciona un código';
		}
		//Si han dado una codigo, cambiamos el $enviado a true, es decir, se enviará el formulario 
		if(!$errores){
			$enviado = true;
		}
	}

	require 'index_view.php';

	//A partir del envio del formulario, se conecta y envia  a la base de datos esa ID
	if ($enviado){
		//Conexión PDO a BBDD
		try {
			
			$conexion = new PDO('mysql:host=localhost;dbname=bd_proyecto', 'root', '');	
			//echo "Conexión OK";

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}

		//Buscar datos del formulario "READ" SQL
		$statement = $conexion->prepare('SELECT * FROM clientes WHERE CÓDIGOCLIENTE = :codigo');
		$statement->execute(
			array(':codigo'=> $codigo)
		);

		//Otro paquete de información en un array del registro de la ID seleccionada por el formulario
		$resultados = $statement->fetch();
		
		//Como mostramos los datos
		if($resultados){
			echo "<p class='resultado'> Resultado de la búsqueda:</br> ";
			echo "ID:" . $resultados['CÓDIGOCLIENTE'] . ' </br> ' . "NOMBRE:" .$resultados['EMPRESA']. ' </br> ' . "DIRECCIÓN:" .$resultados['DIRECCIÓN']. ' </br> ' . "POBLACIÓN:" .$resultados['POBLACIÓN'] ;
			echo "</p>";
		} 
		//Si no hay datos en la tabla cliente
		else {
			echo "<p style='text-align:center' class='resultado'>No existe este cliente $codigo</p>";
		}

	}


	

	
	
?>
<?php

//ACTUALIZAR!!!

 

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

	require 'index_view.php';

	if ($enviado == 'true'){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=bd_proyecto', 'root', '');

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
		if ($campo=='EMPRESA'){
			//Actualizar campo sección
			$statement = $conexion->prepare('UPDATE clientes SET EMPRESA=:canvi WHERE  CÓDIGOCLIENTE=:codigo');
			$statement->execute(
				array(':codigo'=> $codigo,':canvi'=> $canvi)
			);

		} else if ($campo=='DIRECCIÓN') {
			//Actualizar campo nombre
			$statement = $conexion->prepare('UPDATE clientes SET DIRECCIÓN=:canvi WHERE CÓDIGOCLIENTE=:codigo');
			$statement->execute(
				array(':codigo'=> $codigo,':canvi'=> $canvi)
			);
		}  else {
			//Actualizar campo precio
			$statement = $conexion->prepare('UPDATE clientes SET POBLACIÓN=:canvi WHERE  CÓDIGOCLIENTE=:codigo');
			$statement->execute(
				array(':codigo'=> $codigo,':canvi'=> $canvi)
			);
		}


	}


?>