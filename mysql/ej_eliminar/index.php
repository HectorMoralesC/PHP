<?php 

	$errores = '';
	$enviado = '';

	if (isset($_POST['submit'])) {
		$codigo = $_POST['codigo'];

		if (empty($codigo)) {
			$errores .= 'Por favor selecciona una codigo <br />';
		}

		if(!$errores){
			$enviado = 'true';
		}

	}

	require 'index_view.php';

	if ($enviado == 'true'){
		try {
			$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

		} catch(PDOException $e){
			echo "Error: " . $e->getMessage();
		}

        //Eliminar datos del formulario
			$statement = $conexion->prepare('DELETE FROM CLIENTES_COPIA WHERE CÓDIGOCLIENTE= :codigo');
			$statement->execute(
				array(':codigo'=> $codigo)
			);
	}

?>
