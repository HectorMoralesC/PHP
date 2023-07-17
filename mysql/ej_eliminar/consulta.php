<?php

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=prueba_consola', 'root', '');
    } catch(PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    //Consulta para generar los primeros 5 registros de Productos
    $tablaClientes = $conexion->query('SELECT * FROM CLIENTES_COPIA;');
    $resultSet = $tablaClientes->fetchAll();

?>
