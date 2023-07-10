<?php 

try {
	 
    // Conexión BD Clientes
	$conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');

	// Consulta para CT07
	$statement = $conexion->prepare('SELECT * FROM clientes WHERE CÓDIGOCLIENTE= :cc'); 
    
    $statement->execute(
            array(':cc'=> 'CT07')
    );
    
    $resultados = $statement->fetch(); //Muestra de uno en uno los registros
    // print_r($resultados); // Imprimir en pantalla los datos
    //echo "<br />";
    //Revisión de algunos campos
    echo $resultados['CÓDIGOCLIENTE']. " - ". $resultados['EMPRESA']  . " - ". $resultados['DIRECCIÓN'];

} catch(PDOException $e){
	// Obtener errores
	echo "Error: " . $e->getMessage();
}
?>