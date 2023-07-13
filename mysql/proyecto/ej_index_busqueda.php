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

	require 'ej_index_view_busqueda.php';

	//A partir del envio del formulario, se conecta y envia  a la base de datos esa ID
	if ($enviado){
		try {
			//Conectamos con la API PDO a las BBDD
			$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

			//Buscar datos del formulario "READ" SQL
			$statement = $conexion->prepare('SELECT * FROM clientes WHERE CÓDIGOCLIENTE = :codigo');
			$statement->execute(
				array(':codigo'=> $codigo)
			);
			//Otro paquete de información en un array del registro de la ID seleccionada por el formulario
			$resultados = $statement->fetch();
			
			//Como mostramos los datos
			if($resultados){
				echo "<p text align= center class='resultado'> Resultado de la búsqueda:</br> ";
				echo "ID:" . $resultados['CÓDIGOCLIENTE'] . ' </br> ' . "NOMBRE:" .$resultados['EMPRESA']. ' </br> ' . "DIRECCIÓN:" .$resultados['DIRECCIÓN']. ' </br> ' . "POBLACIÓN:" .$resultados['POBLACIÓN'] ;
				echo "</p>";

			} 
			//Si no hay datos en la tabla clientes
			else {
				echo "<p style='text-align:center' class='resultado'>No existe este cliente $codigo</p>";
			}	

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}
	}
	
?>